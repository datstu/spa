<?php

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

//User
// Route::get('/',"HomeController@index");
// Route::get('/trang-chu', "HomeController@index");
Route::get('/',"ProductController@listProduct");
Route::get('/trang-chu', "ProductController@listProduct");

Route::get('/chi-tiet-dich-vu', "HomeController@detailServiceMassage");
Route::get('/danh-sach-san-pham', "ProductController@listProduct");
Route::get('/chi-tiet-san-pham-{productId}', "ProductController@detailProduct");
Route::get('/chinh-sach-hoan-tra', "HomeController@returnPolicy");
Route::get('/chinh-sach-thanh-toan', "HomeController@paymentPolicy");
Route::get('/chinh-sach-nhan-hang', "HomeController@receivePolicy");
Route::get('/ve-chung-toi', "HomeController@aboutUs");

Route::get('/san-pham-theo-danh-muc-{id}', "HomeController@productCategory");



//Admin
Route::get('/admin', "AdminController@index");
Route::get('/admin-login', "AdminController@login");
Route::post('/admin-login', "AdminController@dashboard");
Route::get('/admin-logout', "AdminController@logout");

//Product Management
Route::get('/quan-ly-san-pham', "ProductManagementController@indexAdmin");
Route::get('/them-san-pham', "ProductManagementController@viewAddProduct");
Route::post('/save-product', "ProductManagementController@saveProduct");
Route::get('/cap-nhat-san-pham/{productId}', "ProductManagementController@viewUpdateProduct");
Route::get('/xoa-san-pham/{productId}', "ProductManagementController@deleteProduct");
Route::get('/them-anh-{productId}', "ProductManagementController@addImageProduct");

Route::post('/save-multi-image', "ProductManagementController@saveMultiImage");
Route::get('/delete-multi-image-{imageId}', "ProductManagementController@deleteMultiImage");

//Category Management
Route::get('/quan-ly-danh-muc', "CategoryManagementController@showAllCategoryProduct");
Route::get('/them-danh-muc', "CategoryManagementController@viewAddCategory");
Route::post('/save-category', "CategoryManagementController@saveCategory");
Route::get('/cap-nhat-danh-muc/{categoryProductId}', "CategoryManagementController@viewUpdateCategory");
Route::get('/xoa-danh-muc/{categoryProductId}', "CategoryManagementController@deleteCategory");

//Brand Management
Route::get('/quan-ly-thuong-hieu', "BrandManagementController@showAllBrandProduct");
Route::get('/them-thuong-hieu', "BrandManagementController@viewAddBrand");
Route::post('/save-brand', "BrandManagementController@saveBrand");
Route::get('/cap-nhat-thuong-hieu/{brandProductId}', "BrandManagementController@viewUpdateBrand");
Route::get('/xoa-thuong-hieu/{brandProductId}', "BrandManagementController@deleteBrand");

//Cart Management
Route::post('/save-cart', "CartController@saveCart");
Route::get('/gio-hang', "CartController@showCart");
Route::get('/delete-cart-{cartId}', "CartController@deleteCart");
Route::post('/update-cart', "CartController@updateCart");
Route::post('/add-cart-ajax', "CartController@addCartAjax");
//Checkout and Place Order

Route::get('/login-checkout', "CheckoutController@loginCheckout");
Route::get('/checkout-{id_user}', "CheckoutController@checkout");
Route::post('/place-order', "CheckoutController@placeOrder");
Route::get('/ket-qua-dat-hang-{id}', "CheckoutController@resultPlaceOrder");
Route::get('/checkout', "CheckoutController@checkoutNoLogin");

//user login
Route::post('/register-user', "UserManagementController@registerUser");
Route::get('/log-out-user', "UserManagementController@logoutUser");

Route::post('/login-user', "UserManagementController@loginUser");

//Order Management
Route::get('/quan-ly-don-hang', "OrderManagementController@showOrder");
Route::get('/cap-nhat-don-hang-{id}', "OrderManagementController@updateOrder");
Route::post('/save-edit-order', "OrderManagementController@saveEditOrder");
Route::get('/xoa-don-hang-{id}', "OrderManagementController@deleteOrder");
Route::get('/tra-cuu-don-hang', "OrderManagementController@userCheckOder");
Route::get('/search-order', "OrderManagementController@searchOrder");

Route::get('/theo-doi-don-hang-bang-so-dien-thoai-{sdt}', "OrderManagementController@checkOrderByPhone");
Route::get('/theo-doi-don-hang-{id}', "OrderManagementController@userCheckOrderById");
//Posts Management
// Route::get('/dich-vu-massage', "PostsController@listServiceMassage");
Route::get('/dich-vu-massage', "HomeController@index");

Route::get('/quan-ly-bai-viet', "PostsController@postsManagement");
Route::get('/them-bai-viet', "PostsController@addPost");
Route::post('/save-post', "PostsController@savePost");
Route::get('/cap-nhat-bai-viet-{id}', "PostsController@updatePost");
Route::get('/xoa-bai-viet-{id}', "PostsController@deletePost");

Route::get('/send-mail', "HomeController@sendMail");

/** Shipment */

Route::get('/quan-ly-van-chuyen', "DeliveryController@deliveryManagement");
Route::post('/select-delivery', "DeliveryController@deliverySelect");
Route::post('/select-feeship', "DeliveryController@feeshipSelect");
Route::post('/insert-delivery', "DeliveryController@deliveryInsert");
Route::post('/update-feeship', "DeliveryController@deliveryUpdate");
Route::post('/calculate-feeship', "CheckoutController@feeshipCalculate");


Route::get('test', function () {
    event(new App\Events\StatusLiked('Someone'));
    return "Event has been sent!";
});

Route::get('/pusher', "DeliveryController@pusher");