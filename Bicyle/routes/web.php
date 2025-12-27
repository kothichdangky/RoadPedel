<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\languageController;
use App\Http\Controllers\Bicycle\BicycleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Bicycle\AdminController;
use App\Http\Controllers\CartCartController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('change-language/{lang}', [languageController::class,'change_language'])->name('lang');
Auth::routes();
Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('/', [AuthController::class, 'login'])->name('auth.login');

// gắn ->middleware('auth') vào prefix để bắt buộc chuyển sang login khi không được đăng nhập
Route::group(['middleware' => 'locale'], function() {
    Route::prefix('RoadPedal')->group(function (){
        // Route::get('change-language/{lang}', [languageController::class,'change_language'])->name('lang');
        Route::get('/home', [BicycleController::class,'home'])->name('road.home');
        Route::post('/home', [ContactController::class, 'sendNew'])->name('contact.sendNew');
        Route::get('/service', [BicycleController::class,'service'])->name('road.service');
        Route::post('/service', [ContactController::class, 'sendEnquiry'])->name('contact.sendEnquiry');
        Route::get('/shop', [BicycleController::class,'shop'])->name('road.shop');
        Route::get('/newhome', [BicycleController::class,'new'])->name('road.newhome');
        Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
        Route::post('/contact', [ContactController::class, 'sendEnquiry'])->name('contact.sendEnquiry');

        Route::get('/{id}/product_detail', [BicycleController::class,'product_detail'])->name('road.product_detail');
        Route::post('/{id}/product_detail', [BicycleController::class, 'Comment'])->name('road.comments');
        Route::get('/{id}/product_detail/comments', [BicycleController::class, 'getComments'])->name('road.getComments');
        Route::delete('/{id}/comments', [BicycleController::class, 'deleteComment'])->name('road.deletecomments');
        Route::get('/{payment_id}/bill', [PaypalController::class, 'bill'])->name('road.bill');
        Route::get('/my_orders', [BicycleController::class, 'userOrders'])->name('road.order');

        Route::get('/searchhome', [BicycleController::class,'searchhome'])->name('road.searchhome');
        Route::post('/add-to-cart/{id}', [BicycleController::class, 'addToCart'])->name('road.addToCart');
        Route::get('/cart', [BicycleController::class, 'cart'])->name('road.cart');
        Route::get('/{id}/deleteCart', [BicycleController::class, 'deleteCart'])->name('road.deleteCart');
        Route::post('/cart/updateQuantity/{id}', [CartCartController::class, 'updateQuantity'])->name('cart.updateQuantity');
        Route::get('/my-bills', [PaypalController::class, 'myBills'])->name('road.mybills');

        Route::get('/admin', [AdminController::class,'admin'])->name('road.admin');
        Route::get('/create', [AdminController::class,'create'])->name('road.create');
        Route::post('/create', [AdminController::class,'store'])->name('road.store');
        Route::get('/{id}/delete', [AdminController::class,'destroy'])->name('road.delete');
        Route::get('/{id}/edit', [AdminController::class,'edit'])->name('road.edit');
        Route::put('/{id}/edit', [AdminController::class,'update'])->name('road.update');
        Route::get('/product-sections', [AdminController::class, 'productSections'])->name('admin.productSections');
        Route::post('/product-sections', [AdminController::class, 'updateProductSections'])->name('admin.updateProductSections');
        Route::get('/search', [AdminController::class,'search'])->name('road.search');
        Route::get('/users', [AdminController::class,'user'])->name('road.users');
        Route::get('/orders', [AdminController::class, 'adminOrders'])->name('road.orders');

        Route::get('/new', [NewController::class,'new'])->name('road.new');
        Route::get('/new/create', [NewController::class,'newcreate'])->name('road.newcreate');
        Route::post('/new/create', [NewController::class,'newstore'])->name('road.newstore');
        Route::get('/new/{id}/delete', [NewController::class,'newdestroy'])->name('road.newdelete');
        Route::get('/{id}/new/edit', [NewController::class,'newedit'])->name('road.newedit');
        Route::put('/{id}/new/edit', [NewController::class,'newupdate'])->name('road.newupdate');
        Route::get('/new/product-sections', [NewController::class, 'newproductSections'])->name('newadmin.productSections');
        Route::post('/new/product-sections', [NewController::class, 'newupdateProductSections'])->name('newadmin.updateProductSections');


        Route::get('/test', [AdminController::class,'test'])->name('road.test');
        Route::post('/testadd',[AdminController::class, 'testadd'])->name('User.add');
        Route::put('/testupdate', [AdminController::class, 'testupdate'])->name('User.update');
        Route::get('/{id}/deleteUser', [AdminController::class,'destroyUser'])->name('road.deleteUser');
        Route::get('/searchUser', [AdminController::class,'searchUser'])->name('road.searchUser');


        Route::get('/cookie', function (Request $request) {
            // Kiểm tra xem cookie đã tồn tại chưa
            if ($request->hasCookie('last_visit')) {
                $lastVisit = $request->cookie('last_visit');
            } else {
                // Nếu chưa có cookie, tạo một cookie mới
                $lastVisit = now()->toDateTimeString();
                return response("Lần truy cập gần nhất: $lastVisit")->cookie('last_visit', $lastVisit, 60); // Cookie sẽ hết hạn sau 60 phút
            }

            return response("Lần truy cập gần nhất: $lastVisit");
        });


    Route::middleware(['auth'])->group(function () {

    });
    });
});
Route::get('authorized/google', [\App\Http\Controllers\LoginWithGoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('authorized/google/callback', [\App\Http\Controllers\LoginWithGoogleController::class, 'handleGoogleCallback']);
//paypal
Route::post('/paypal', [PaypalController::class, 'pay'])->name('payment');
Route::get('/success', [PaypalController::class, 'success'])->name('success');
Route::get('/error', [PaypalController::class, 'error'])->name('error');
//send email
//Route::get('/contact', [ContactController::class, 'send'])->name('send');

// Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
// Route::post('/contact', [ContactController::class, 'sendEnquiry'])->name('contact.sendEnquiry');

Auth::routes();


