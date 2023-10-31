<?php


use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\CategoriesController;
use App\Http\Controllers\admin\ProductsController;
use App\Http\Controllers\admin\OrdersController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\SettingsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;



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

//admin routes
Route::get('/admin/login', [LoginController::class, 'login']);
Route::get('/admin/logout', [LoginController::class, 'logout']);

Route::Post('/admin/authenticate', [LoginController::class, 'authenticate']);





Route::middleware(['auth'])->group(function () {

    Route::get('/admin/index', [DashboardController::class, 'dashboard']);

    //Categories
    Route::resource('admin/categories', CategoriesController::class);

    //products
    Route::resource('admin/products', ProductsController::class);

    //Slider
    Route::resource('admin/slider', SliderController::class);

    //profile
    Route::get('admin/profile', [LoginController::class, 'profile']);
    Route::Put('admin/profile', [LoginController::class, 'update']);

    //Settings
    Route::get('admin/settings', [SettingsController::class, 'settings']);
    Route::Put('admin/settings/{id}', [SettingsController::class, 'update']);


    //Oders
    Route::resource('admin/orders', OrdersController::class);

});


//website routes
Route::get('detail/{id}', [WebsiteController::class, 'details']);
Route::get('home', [WebsiteController::class, 'home']);
Route::get('shop', [WebsiteController::class, 'shop']);
Route::get('about-us', [WebsiteController::class, 'about']);
//Route::get('contact', [WebsiteController::class, 'contact']);
Route::post('add-cart/{id}', [WebsiteController::class, 'addToCart']);
Route::get('cart', [WebsiteController::class, 'cart']);


Route::post('cart/empty', [WebsiteController::class, 'emptyCard']);

Route::get('/checkout', [WebsiteController::class, 'checkout']);
Route::post('/checkout', [WebsiteController::class, 'placeOrder']);

Route::put('/cart/update', [WebsiteController::class, 'updateCart']);



//contact us
Route::get('contact', [ContactController::class, 'index']);
Route::post('contact', [ContactController::class, 'store'])->name('contact.us.store');





