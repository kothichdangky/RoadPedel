<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Omnipay\Omnipay;
use App\Models\Payment;

use Illuminate\Support\Facades\Auth;



class PaypalController extends Controller
{
    private $gateway;

    public function __construct(){
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID')); // Lấy từ file .env
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET')); // Lấy từ file .env
        $this->gateway->setTestMode(true); // Chế độ thử nghiệm
    }

   public function pay(Request $request){
        try {
            $response = $this->gateway->purchase(array(
                'amount' => $request->total,
                'currency' => env('PAYPAL_CURRENCY'),
                'returnUrl' => url('success'),
                'cancelUrl' => url('error'),

            ))->send();
            if ($response->isRedirect()){
                $response->redirect();
            }
            else{
                return $response->getMessage;
            }
        }
        catch(\Throwable $th){
            return $th->getMessage();
        }
   }

   public function bill($payment_id) {
    $payment = Payment::where('payment_id', $payment_id)->first();

    if (!$payment) {
        return abort(404, 'Payment not found');
    }

    return view('bicycle.bill', compact('payment'));
    }

    public function myBills() {
        $user = Auth::user();
    $payments = Payment::where('user_id', $user->id)->get();

        return view('bicycle.my_bill', compact('payments'));
    }


    public function success(Request $request){
        if ($request->input('paymentId') && $request->input('PayerID')) {
            $transaction = $this->gateway->completePurchase([
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId')
            ]);

            $response = $transaction->send();

            if ($response->isSuccessful()){
                $arr = $response->getData();

                // In thử dữ liệu để kiểm tra


                // Lưu vào database
                $payment = new Payment();
                $payment->user_id = Auth::id(); // Lưu ID của người dùng đang đăng nhập
                $payment->payment_id = $arr['id'];
                $payment->payer_id = $arr['payer']['payer_info']['payer_id'];
                $payment->payment_email = $arr['payer']['payer_info']['email'];
                $payment->amount = $arr['transactions'][0]['amount']['total'];
                $payment->currency = env('PAYPAL_CURRENCY');
                $payment->payment_status = $arr['state'];
                $payment->save();

                // Xóa giỏ hàng
                session()->forget('cart');

                return redirect()->route('road.bill', ['payment_id' => $payment->payment_id]);
            } else {
                return $response->getMessage();
            }
        } else {
            return 'Payment declined';
        }
    }



public function error() {
    return 'User declined the payment!';
}

}
