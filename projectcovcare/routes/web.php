<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\newsController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\cartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', [PagesController::class, 'homes']);
Route::get('/', [PagesController::class, 'home']);
Route::get(('/'), [newsController::class, 'home']);
Route::get(('/login'), [PagesController::class, 'login']);
Route::get(('/registrasi'), [PagesController::class, 'registrasi']);
Route::get(('/landproduk'), [PagesController::class, 'landproduk']);
Route::get(('/KitPencegahan'), [produkController::class, 'prevention']);
Route::get(('/news'), [newsController::class, 'index']);
Route::get(('/about'), [PagesController::class, 'about']);
Route::get(('/covinfo'), [PagesController::class, 'covinfo']);
Route::get(('/berita'), [PagesController::class, 'berita']);
Route::get(('/berita/{news}'), [newsController::class, 'berita'])->name('detailberita');
Route::get(('/KitPositif'), [produkController::class, 'positif']);
Route::get(('/KitPascapositif'), [produkController::class, 'recovery']);
Route::get(('/produk'), [PagesController::class, 'product']);
Route::get(('/produk/{product}'), [produkController::class, 'product'])->name('detailproduct');

Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('/index2', [App\Http\Controllers\PagesController::class, 'home2']);

    Route::middleware(['admin'])->group(function () {
        Route::middleware(['admin'])->group(function () {
            Route::get(('/adminhome'), [PagesController::class, 'adminhome'])->name('landingadmin');
            Route::get('/editnews', [PagesController::class, 'editnews']);
            Route::get('/verifylist', [PaymentController::class, 'list'])->name('list') ;
            Route::delete('{payment}', [PaymentController::class, 'delete'])->name('removepay');
            Route::post('pay/{payment}', [PaymentController::class, 'update'])->name('updatepay');
            Route::get('/verifyadmin', [PagesController::class, 'verifyadmin']);
            Route::get('/editproduct', [PagesController::class, 'editproduct']);
            Route::get('/verifyadmin', [PagesController::class, 'verifyadmin']);
            Route::get(('/verifyadmin/{payment}'), [PaymentController::class, 'listdetail'])->name('paymentdetail');
            Route::post('editnews', [newsController::class, 'create'])->name('newsedit');
            Route::post('editproduct', [produkController::class, 'create'])->name('productedit');
            Route::get('admin', [AdminController::class, 'index']);
        });
    });

    Route::middleware(['user'])->group(function () {
        Route::get(('/index2'), [newsController::class, 'home2'])->name('landinglogin');
        Route::get(('/landproduk2'), [PagesController::class, 'landproduk2'])->name('landproduk');
        Route::get(('/KitPencegahan2'), [ProdukController::class, 'prevention2']);
        Route::get(('/KitPositif2'), [ProdukController::class, 'positif2']);
        Route::get(('/news2'), [newsController::class, 'index2']);
        Route::get(('/about2'), [PagesController::class, 'about2']);
        Route::get(('/covinfo2'), [PagesController::class, 'covinfo2']);
        Route::get(('/berita2'), [PagesController::class, 'berita2']);
        Route::get(('/berita2/{news}'), [newsController::class, 'berita2'])->name('detailberita2');
        Route::get(('/produk2/{product}'), [produkController::class, 'product2'])->name('detailproduct2');
        Route::get('user', [UserController::class, 'index']);
        Route::get(('/profile'), [PagesController::class, 'profile']);
        Route::get('/payment', [PagesController::class, 'payment']);
        Route::get(('/KitPascapositif2'), [ProdukController::class, 'recovery2']);
        Route::get(('/produk2'), [PagesController::class, 'produk2']);
        Route::get(('/cart'), [PagesController::class, 'cart']);
        //payment
        Route::post(('/produk2/{product}'), [cartController::class, 'buy']);
        // Route::get(('/paymentinfo'), [PagesController::class, 'paymentinfo']);
        Route::get(('/paymentinfo'), [cartController::class, 'viewcartinfo']);
        Route::get(('cart'), [cartController::class, 'viewcart']);
        Route::post(('carts'), [cartController::class, 'buycart'])->name('buycart');
        Route::get(('/paymentstatus'), [PagesController::class, 'paymentstatus']);
        Route::get(('/paymentstatus'), [PaymentController::class, 'paymentinfo']);
        //edit profile
        Route::prefix('user')->group(function(){
            Route::post('{user}', [UserController::class, 'update'])->name('UpdateProfile');
        });
        Route::post('payment', [PaymentController::class, 'create'])->name('buktibayar');
    });
    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/login');
    });
});
