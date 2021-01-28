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

// Authentication Routes Start...
    Route::get('login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'App\Http\Controllers\Auth\LoginController@login');
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
        
    // Verification Routes 
    Route::post('email/resend', 'App\Http\Controllers\Auth\VerificationController@resend')->name('verification.resend');
    Route::get('email/verify', 'App\Http\Controllers\Auth\VerificationController@show')->name('verification.notice');
    Route::get('email/verify/{id}/{hash}', 'App\Http\Controllers\Auth\VerificationController@verify')->name('verification.verify');

    // Password Reset Routes...
    Route::get('password/confirm', 'App\Http\Controllers\Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
    Route::post('password/confirm', 'App\Http\Controllers\Auth\ConfirmPasswordController@confirm');
    Route::post('password/email', 'App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset', 'App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/reset', 'App\Http\Controllers\Auth\ResetPasswordController@reset')->name('password.update');
    Route::get('password/reset/{token?}', 'App\Http\Controllers\Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@register')->name('register');

// Authentication Routes End...





// Public routes
    Route::get('/', [App\Http\Controllers\IndexController::class, 'Index'])->name('home');

    Route::get('/product/{product_id}/{product_name?}', 'App\Http\Controllers\ShowProductsController@ProductIndex')->name('product-index');
    



Route::group(['middleware' => ['verified', 'auth']], function() { // Verified Middleware Start

    Route::post('/dp/update', [App\Http\Controllers\DpUpdateController::class, 'DpUpdate'])->name('dp-update');

    Route::get('/account', [App\Http\Controllers\AccountController::class, 'ShowAccount'])->name('my-account');
    
    Route::get('/addresses', [App\Http\Controllers\ManageAddressesController::class, 'ShowAddresses'])->name('addresses');

    Route::get('/wishlist', [App\Http\Controllers\WishlistController::class, 'ShowWishlist'])->name('wishlist');
    
    Route::post('/wishlist/add-product', [App\Http\Controllers\WishlistController::class, 'ToogleWishlist'])->name('toogle-wishlist-btn');



// Admin Prefix Routes
Route::group(['prefix' => 'admin', 'middleware' => 'permission:Admin'], function() {

    Route::get('/','App\Http\Controllers\Admin\AdminController@IndexDashboard')->name('admin-dashboard')->middleware('permission:Master Admin');

    Route::get('/profile','App\Http\Controllers\Admin\AdminController@IndexProfile')->name('admin-profile')->middleware('permission:Master Admin');

    Route::get('/user-management','App\Http\Controllers\Admin\AdminController@AdminUserManagement')->name('admin-user-management')->middleware('permission:Master Admin');

    Route::post('/user-management/user/search/submit','App\Http\Controllers\Admin\AdminController@UserSearchSubmit')->name('admin-user-search-submit')->middleware('permission:Master Admin');

    Route::post('/user-management/user/create/submit','App\Http\Controllers\Admin\AdminController@AdminUserCreateubmit')->name('admin-user-create-submit')->middleware('permission:Master Admin');

    Route::get('/user-management/id/{id}/delete','App\Http\Controllers\Admin\AdminController@AdminUserRemove')->middleware('permission:Master Admin');

    Route::get('/user-management/id/{id}/edit','App\Http\Controllers\Admin\AdminController@AdminUserEdit')->middleware('permission:Master Admin');

    Route::post('/user-management/edit/submit','App\Http\Controllers\Admin\AdminController@AdminUserEditSubmit')->name('admin-user-edit-submit')->middleware('permission:Master Admin');

    Route::get('/manage-products','App\Http\Controllers\Admin\AdminController@ManageProducts')->name('admin-manage-products')->middleware('permission:Master Admin');

    Route::get('/manage-ui','App\Http\Controllers\Admin\AdminController@ManageUI')->name('admin-manage-ui')->middleware('permission:Master Admin');

    Route::get('/manage-banners','App\Http\Controllers\Admin\AdminController@ManageBanners')->name('admin-manage-banners')->middleware('permission:Master Admin');

    Route::get('/new-banner','App\Http\Controllers\Admin\AdminController@NewBanner')->name('admin-new-banner')->middleware('permission:Master Admin');

    Route::post('/new-banner/submit','App\Http\Controllers\Admin\AdminController@NewBannerSubmit')->name('admin-new-banner-submit')->middleware('permission:Master Admin');

    Route::get('/publish-banner','App\Http\Controllers\Admin\AdminController@PublishBanners')->name('admin-publish-banners')->middleware('permission:Master Admin');

    Route::post('/publish-banner/submit','App\Http\Controllers\Admin\AdminController@PublishBannersSubmit')->name('admin-publish-banners-submit')->middleware('permission:Master Admin');

    Route::get('/manage-products/new-product-listing', 'App\Http\Controllers\Admin\ManageProductsController@NewProductListing')->name('admin-new-product-listing');

    Route::post('/manage-products/new-product-listing/submit', 'App\Http\Controllers\Admin\ManageProductsController@NewProductListingSubmit')->name('admin-new-product-listing-submit');

    Route::get('/manage-products/publish-products','App\Http\Controllers\Admin\ManageProductsController@ProductPublish')->name('admin-product-publish')->middleware('permission:Master Admin');

    Route::get('/manage-products/publish-product/id/{product_id}','App\Http\Controllers\Admin\ManageProductsController@ProductPublishFormHandler')->name('ProductPublishFormHandler')->middleware('permission:Master Admin');

    Route::post('/manage-products/publish-product/specification/submit', 'App\Http\Controllers\Admin\ManageProductsController@ProductPublishFormSpecification')->name('admin-publish-product-specification-submit')->middleware('permission:Master Admin');

    Route::get('/manage-products/publish-product/tag', 'App\Http\Controllers\Admin\ManageProductsController@TagForm');

    Route::post('/manage-products/publish-product/tag/submit', 'App\Http\Controllers\Admin\ManageProductsController@ProductPublishFormTag')->name('admin-publish-product-tag-submit')->middleware('permission:Master Admin');

    Route::get('/manage-product/pid/{product_id}/edit','App\Http\Controllers\Admin\ManageProductsController@EditProduct')->name('edit-product')->middleware('permission:Master Admin');

    Route::post('/manage-products/pid/edit/submit', 'App\Http\Controllers\Admin\ManageProductsController@EditProductSubmit')->name('edit-product-submit')->middleware('permission:Master Admin');

    Route::get('/manage-product/pid/{product_id}/images/edit','App\Http\Controllers\Admin\ManageProductsController@EditProductImages')->name('edit-product-images')->middleware('permission:Master Admin');

    Route::post('/manage-products/pid/edit/images/submit', 'App\Http\Controllers\Admin\ManageProductsController@EditProductImagesSubmit')->name('edit-product-images-submit')->middleware('permission:Master Admin');

    Route::post('/manage-products/pid/edit/add-images/submit', 'App\Http\Controllers\Admin\ManageProductsController@AddMoreImages')->name('edit-add-images-submit')->middleware('permission:Master Admin');

    Route::get('/manage-products/remove-image/id/{image_id}', 'App\Http\Controllers\Admin\ManageProductsController@RemoveImage')->name('remove-image-submit')->middleware('permission:Master Admin');

    Route::get('/manage-products/pid/{product_id}/remove', 'App\Http\Controllers\Admin\ManageProductsController@RemoveProduct')->name('remove-product')->middleware('permission:Master Admin');





});


















Route::group(['prefix' => 'ajax/data-table'], function() {

    Route::get('admin-products-table', 'App\Http\Controllers\AjaxDataTable@AdminProductsTable')->name('ajax-datatable.AdminProductsTable');
    Route::get('admin-products-publish-table', 'App\Http\Controllers\AjaxDataTable@AdminProductsPublishTable')->name('ajax-datatable.AdminProductsPublishTable');
    Route::get('admin-products-publish-table', 'App\Http\Controllers\AjaxDataTable@AdminProductsPublishTable')->name('ajax-datatable.AdminProductsPublishTable');
});




}); // Verified+Auth Middleware End