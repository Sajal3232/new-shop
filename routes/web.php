<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/','App\Http\Controllers\StudentController@index');

//  Route::get('/',[
//      'uses'=> 'App\Http\Controllers\StudentController@index',
//      'as'=>'/'
//  ]);
//  Route::get('/about',[
//     'uses'=> 'App\Http\Controllers\StudentController@add',
//     'as'=>'/about'
// ]);

Route::get('/',[
    'uses' => 'App\Http\Controllers\NewShopController@index',
    'as' => '/'
]);
Route::get('/catagory-product/{id}',[
    'uses' => 'App\Http\Controllers\NewShopController@categoryproduct',
    'as' => 'category-product'
]);
Route::get('/api/catagory-product/{id}',[
    'uses' => 'App\Http\Controllers\NewShopController@productsbycategory',
    'as' => 'api-category-product'
]);
Route::get('/product-details/{id}/{name}',[
    'uses' => 'App\Http\Controllers\NewShopController@productdetails',
    'as' => 'product-details'
]);

// add to cart
Route::post('/cart/add',[
    'uses' => 'App\Http\Controllers\CartController@addtocart',
    'as' => 'add-to-cart'
]);



Route::get('/cart/show',[
    'uses' => 'App\Http\Controllers\CartController@showcart',
    'as' => 'show-cart'
]);
Route::get('/cart/show',[
    'uses' => 'App\Http\Controllers\CartController@showcart',
    'as' => 'show-cart'
]);
Route::get('/cart/delete/{uniqueid}',[
    'uses' => 'App\Http\Controllers\CartController@deletecartitem',
    'as' => 'delete-cart-item'
]);
Route::post('/cart/update',[
    'uses' => 'App\Http\Controllers\CartController@updatecartitem',
    'as' => 'update-cart-quantity'
]);
// ////checkout
Route::get('/cart/checkout',[
    'uses' => 'App\Http\Controllers\CheckoutController@index',
    'as' => 'checkout'
]);

Route::post('/customer/registration',[
    'uses' => 'App\Http\Controllers\CheckoutController@customersignup',
    'as' => 'customer-sign-up'
]);

Route::post('/api/customer/registration',[
    'uses' => 'App\Http\Controllers\ApiController@customersignup',
    'as' => 'api-customer-sign-up'
]);

Route::get('/checkout/shipping',[
    'uses' => 'App\Http\Controllers\CheckoutController@shippingForm',
    'as' => 'checkout-shipping'
]);

Route::post('/shipping/save',[
    'uses' => 'App\Http\Controllers\CheckoutController@saveshippinginfo',
    'as' => 'new-shipping'
]);
Route::get('/checkout/payment',[
    'uses' => 'App\Http\Controllers\CheckoutController@paymentForm',
    'as' => 'checkout-payment'
]);

Route::post('/checkout/order',[
    'uses' => 'App\Http\Controllers\CheckoutController@newOrder',
    'as' => 'new-order'
]);

Route::get('/complete/order',[
    'uses' => 'App\Http\Controllers\CheckoutController@completeOrder',
    'as' => 'complete-order'
]);

////customer login
Route::post('/checkout/customer-login',[
    'uses' => 'App\Http\Controllers\CheckoutController@customerlogincheck',
    'as' => 'customer-login'
]);

////customer-logout from header
Route::post('/checkout/customer-logout',[
    'uses' => 'App\Http\Controllers\CheckoutController@customerlogoutfromheader',
    'as' => 'customer-logout'
]);

Route::get('/checkout/new-customer-login',[
    'uses' => 'App\Http\Controllers\CheckoutController@customerloginfromheader',
    'as' => 'new-customer-login'
]);


////customer login from fornt
Route::post('/checkout/new-customer-login-front',[
    'uses' => 'App\Http\Controllers\CheckoutController@newcustomerloginfront',
    'as' => 'new-customer-login-front'
]);


Route::post('/checkout/new-customer-registration-front',[
    'uses' => 'App\Http\Controllers\CheckoutController@newcustomerregistrationfront',
    'as' => 'new-customer-registration-front'
]);






Route::get('/mail-us',[
    'uses' => 'App\Http\Controllers\NewShopController@mailUs',
    'as' => 'mail-us'
]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/category/add',[
    'uses'=>"App\Http\Controllers\CategoryController@index",
    'as'=>'category/add-category'
]);
Route::get('/category/manage',[
    'uses'=>"App\Http\Controllers\CategoryController@manage",
    'as'=>'category/manage-category'
]);
Route::post('/category/new-category',[
    'uses'=>"App\Http\Controllers\CategoryController@savecategoryinfo",
    'as'=>'category/new-category'
]);
Route::get('/category/unpublished/{id}',[
    'uses'=>"App\Http\Controllers\CategoryController@unpublishedcategoryinfo",
    'as'=>'unpublished-category'
]);
Route::get('/category/published/{id}',[
    'uses'=>"App\Http\Controllers\CategoryController@publishedcategoryinfo",
    'as'=>'published-category'
]);
Route::get('/category/edit/{id}',[
    'uses'=>"App\Http\Controllers\CategoryController@editcategoryinfo",
    'as'=>'edit-category'
]);
Route::post('/category/update',[
    'uses'=>"App\Http\Controllers\CategoryController@updatecategoryinfo",
    'as'=>'update-category'
]);
Route::get('/category/delete/{id}',[
    'uses'=>"App\Http\Controllers\CategoryController@deletecategoryinfo",
    'as'=>'delete-category'
]);
// brand==========
Route::get('/brand/add',[
    'uses'=>"App\Http\Controllers\BrandController@index",
    'as'=>'brand/add'
]);
Route::post('/brand/save',[
    'uses'=>"App\Http\Controllers\BrandController@savebrand",
    'as'=>'new-brand'
]);
Route::get('/brand/product',[
    'uses'=>"App\Http\Controllers\BrandController@brandsproduct",
    'as'=>'brands-product'
]);
//product
Route::get('/product/add',[
    'uses'=>"App\Http\Controllers\ProductController@index",
    'as'=>'product/add'
]);
Route::post('/product/save',[
    'uses'=>"App\Http\Controllers\ProductController@saveproduct",
    'as'=>'product/new'
]);
Route::get('/product/manage',[
    'uses'=>"App\Http\Controllers\ProductController@manageproduct",
    'as'=>'product/manage'
]);
Route::get('/product/edit/{id}',[
    'uses'=>"App\Http\Controllers\ProductController@editproduct",
    'as'=>'product/edit'
]);
Route::get('/product/delete/{id}',[
    'uses'=>"App\Http\Controllers\ProductController@deleteproduct",
    'as'=>'product/delete'
]);

Route::post('/product/update',[
    'uses'=>"App\Http\Controllers\ProductController@updateproduct",
    'as'=>'product/update'
]);


////admin manage order
Route::get('/order/manage-order',[
    'uses'=>"App\Http\Controllers\OrderController@manageOrderInfo",
    'as'=>'manage-order',
    'middleware'=>'Log'
]);

Route::get('/order/view-order-detail/{id}',[
    'uses'=>"App\Http\Controllers\OrderController@vieworderdetail",
    'as'=>'view-order-detail'
]);

Route::get('/order/view-order-invoice/{id}',[
    'uses'=>"App\Http\Controllers\OrderController@vieworderinvoice",
    'as'=>'view-order-invoice'
]);
Route::get('/order/download-order-invoice/{id}',[
    'uses'=>"App\Http\Controllers\OrderController@downloadorderinvoice",
    'as'=>'download-order-invoice'
]);

Route::get('students', ['uses' => 'App\Http\Controllers\ApiController@index', 'as' => 'students']);
Route::get('students/{id}', ['uses' => 'App\Http\Controllers\ApiController@show', 'as' => 'students']);
Route::post('students', ['uses' => 'App\Http\Controllers\ApiController@create', 'as' => 'students']);



