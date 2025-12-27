<?php

namespace App\Http\Controllers\Bicycle;
// muốn bỏ vào folder khác thì phải thêm cái này
use App\Http\Controllers\Controller;
//
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
use App\Models\product;
use App\Http\Cart;
use App\Models\NewsPost;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use resources\views\vendor\pagination;

class BicycleController extends Controller
{
    public function home()
    {

        $NewsPosts = NewsPost::latest()->take(3)->get();

        // Lấy các sản phẩm được hiển thị trong phần 'featured'
        $featuredProducts = Product::where('display_section', 'like', '%featured%')->get();

        // Lấy các sản phẩm được hiển thị trong phần 'bike'
        $bikeSectionProducts = Product::where('display_section', 'like', '%bike%')->get();
        return view('bicycle.home',compact('featuredProducts', 'bikeSectionProducts', 'NewsPosts'));
    }

    public function service()
    {
        return view('bicycle.service');
    }

    public function shop()
    {

        $products = product::paginate(8);
        return view('bicycle.shop',compact('products'));
    }

    public function new()
    {
        $NewsPosts = NewsPost::all();
        return view('bicycle.new',compact('NewsPosts'));
    }

    public function contact()
    {
        return view('bicycle.contact');
    }

    public function searchhome(Request $request)
    {
        $keyword = $request->keyword;
        if (!$keyword) {
            return redirect()->route('road.shop')->with('message', 'Vui lòng nhập từ khóa tìm kiếm!');;
        }
        $products = Product::where('name', 'LIKE', '%' . $keyword . '%')->get();;
            return view('bicycle.shop', compact('products'));
    }

    public function product_detail(Request $request,$id)
    {
        $products = Product::findOrFail($id);

        // Lấy tất cả các comment liên quan đến sản phẩm (sắp xếp theo thời gian mới nhất)
        $comments = $products->comments()->with('user')->latest()->get();

        // Truyền biến $comments và $product vào view
        return view('bicycle.product_detail', compact('products', 'comments'));
    }

    public function addToCart(Request $request, $id)
    {
    $product = Product::find($id);

    if (!$product) {
        // Trả về số lượng hiện tại của giỏ hàng, ngay cả khi sản phẩm không tồn tại
        return response()->json([
            'success' => false,
            'cartCount' => session()->has('cart') ? session('cart')->totalQty : 0
        ]);
    }

    // Lấy giỏ hàng từ session hoặc tạo mới nếu chưa có
    $cart = $request->session()->get('cart', new Cart(null));
    $cart->add($product);
    $request->session()->put('cart', $cart);

    // Trả về số lượng sản phẩm trong giỏ hàng
    return response()->json([
        'success' => true,
        'cartCount' => $cart->totalQty
    ]);
}

    public function cart()
    {
        $products = product::all();
        // Lấy giỏ hàng từ session hoặc gán giá trị null nếu không tồn tại
        $cart = session('cart', null);

        // Truyền giỏ hàng sang view
        return view('bicycle.shop_cart', compact('cart','products'));
    }

    public function deleteCart(Request $request, $id)
{
    // Lấy giỏ hàng từ session
    $cart = $request->session()->get('cart');

    // Kiểm tra xem giỏ hàng có tồn tại không
    if ($cart) {
        // Kiểm tra xem sản phẩm có tồn tại trong giỏ hàng không
        if (array_key_exists($id, $cart->items)) {
            // Lưu tổng giá của sản phẩm và số lượng trước khi xóa
            $totalPriceOfItem = $cart->items[$id]['totalPrice'];
            $quantityOfItem = $cart->items[$id]['totalQty']; // Số lượng thực tế của sản phẩm

            // Xóa sản phẩm khỏi giỏ hàng
            unset($cart->items[$id]);

            // Cập nhật tổng số lượng và tổng giá
            $cart->totalQty -= $quantityOfItem; // Giảm số lượng thực tế
            $cart->totalPrice -= $totalPriceOfItem; // Giảm tổng giá

            // Cập nhật giỏ hàng trong session
            $request->session()->put('cart', $cart);
        }
    }

    // Chuyển hướng về route 'home.getCart'
    return redirect()->route('road.cart');
}

public function getComments($id)
{
    $comments = Comment::where('product_id', $id)->with('user')->latest()->get();
    return response()->json($comments);
}

public function Comment(Request $request, $id)
{
    // Validate dữ liệu gửi từ client
    $request->validate([
        'content' => 'required|max:500',
    ]);

    try {
        // Tạo comment mới
        $comment = Comment::create([
            'product_id' => $id,
            'user_id' => auth()->id(),
            'content' => $request->content,
        ]);

        // Trả về phản hồi JSON
        return response()->json([
            'success' => true,
            'user' => [
                'name' => $comment->user->name,
                'avatar' => asset('images/default-avatar.png'),
            ],
            'content' => $comment->content,
            'created_at' => $comment->created_at->diffForHumans(),
        ]);
    } catch (\Exception $e) {
        // Ghi log lỗi
        \Log::error('Error creating comment: ' . $e->getMessage());

        // Trả về lỗi JSON
        return response()->json(['error' => 'Failed to add comment.'], 500);
    }
}

public function deleteComment($id)
{
    // Tìm comment theo ID
    $comment = Comment::find($id);

    // Nếu comment không tồn tại
    if (!$comment) {
        return response()->json(['error' => 'Comment not found.'], 404);
    }

    // Kiểm tra quyền (admin hoặc chủ sở hữu)
    if (auth()->user()->role !== 'admin' && auth()->id() !== $comment->user_id) {
        return response()->json(['error' => 'Unauthorized.'], 403);
    }

    // Xóa comment
    try {
        $comment->delete();
        return response()->json(['success' => 'Comment deleted successfully.']);
    } catch (\Exception $e) {
        \Log::error('Error deleting comment: ' . $e->getMessage());
        return response()->json(['error' => 'Failed to delete comment.'], 500);
    }
}

public function userOrders() {
    // Lấy danh sách đơn hàng của user đang đăng nhập
    $orders = Payment::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
    return view('bicycle.myorder', compact('orders'));
}

}

