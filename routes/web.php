<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'Website\WebsiteController@index')->name('home');
Route::post('parcel/track', 'Website\WebsiteController@parcelTrack')->name('parcel.track');
Route::group(['middleware' => ['coustomer:web']], function()
{
    Route::get('parcel', 'Website\WebsiteController@parcel')->name('parcel');
    Route::post('parcel/create', 'Website\WebsiteController@parcelCreate')->name('');
    Route::get('shop', 'Website\WebsiteController@shop')->name('shop');
    Route::post('shop/create', 'Website\WebsiteController@shopCreate')->name('');
});

// Admin Route
Route::get('/login/admin', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('/login/admin', 'Admin\Auth\LoginController@login')->name('admin.login');
Route::post('/logout/admin','Admin\Auth\LoginController@logout')->name('admin.logout');
Route::get('/register/admin', 'Admin\Auth\RegisterController@showRegisterForm')->name('admin.register');
Route::post('/register/admin', 'Admin\Auth\RegisterController@create')->name('admin.register');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['admin:admin','preventBack']], function()
{
    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');

    Route::get('user', 'AdminRegisterController@index')->name('');
    Route::get('user/create', 'AdminRegisterController@create')->name('');
    Route::get('user/create/{id}', 'AdminRegisterController@create')->name('');
    Route::post('user/store', 'AdminRegisterController@store')->name('');
    Route::get('user/show/{id}', 'AdminRegisterController@show')->name('');
    Route::post('user/softdelete', 'AdminRegisterController@softdelete')->name('');
    Route::post('user/restore', 'AdminRegisterController@restore')->name('');
    Route::post('user/delete', 'AdminRegisterController@delete')->name('');

    Route::get('pickup/area', 'PickupAreaController@index')->name('');
    Route::get('pickup/area/create', 'PickupAreaController@create')->name('');
    Route::get('pickup/area/create/{id}', 'PickupAreaController@create')->name('');
    Route::post('pickup/area/store', 'PickupAreaController@store')->name('');
    Route::post('pickup/area/softdelete', 'PickupAreaController@softdelete')->name('');
    Route::post('pickup/area/restore', 'PickupAreaController@restore')->name('');
    Route::post('pickup/area/delete', 'PickupAreaController@delete')->name('');

    Route::get('pickup/product', 'PickupProductController@index')->name('');
    Route::get('pickup/product/create', 'PickupProductController@create')->name('');
    Route::get('pickup/product/create/{id}', 'PickupProductController@create')->name('');
    Route::post('pickup/product/store', 'PickupProductController@store')->name('');
    Route::post('pickup/product/softdelete', 'PickupProductController@softdelete')->name('');
    Route::post('pickup/product/restore', 'PickupProductController@restore')->name('');
    Route::post('pickup/product/delete', 'PickupProductController@delete')->name('');

    Route::get('delivery-zone', 'DeliveryZoneController@index')->name('');
    Route::get('delivery-zone/create', 'DeliveryZoneController@create')->name('');
    Route::get('delivery-zone/create/{id}', 'DeliveryZoneController@create')->name('');
    Route::post('delivery-zone/store', 'DeliveryZoneController@store')->name('');
    Route::post('delivery-zone/softdelete', 'DeliveryZoneController@softdelete')->name('');
    Route::post('delivery-zone/restore', 'DeliveryZoneController@restore')->name('');
    Route::post('delivery-zone/delete', 'DeliveryZoneController@delete')->name('');

    Route::get('shop', 'ShopController@index')->name('');
    Route::get('shop/show/{id}', 'ShopController@show')->name('');
    Route::post('shop/softdelete', 'ShopController@softdelete')->name('');
    Route::post('shop/restore', 'ShopController@restore')->name('');
    Route::post('shop/delete', 'ShopController@delete')->name('');

    Route::get('parcel-request', 'ParcelRequestController@index')->name('');
    Route::get('parcel-request/create/{id}', 'ParcelRequestController@create')->name('');
    Route::post('parcel-request/store', 'ParcelRequestController@store')->name('');
    Route::get('parcel-request/show/{id}', 'ParcelRequestController@show')->name('');
    Route::post('parcel-request/softdelete', 'ParcelRequestController@softdelete')->name('');
    Route::post('parcel-request/restore', 'ParcelRequestController@restore')->name('');
    Route::post('parcel-request/delete', 'ParcelRequestController@delete')->name('');
    Route::post('parcel-request/publish', 'ParcelRequestController@publish')->name('');
    Route::post('parcel-request/unpublish', 'ParcelRequestController@unpublish')->name('');

    Route::get('recycle', 'RecycleController@index')->name('');
    Route::get('recycle/admin', 'RecycleController@admin')->name('');
    Route::get('recycle/pickup/area', 'RecycleController@pickupArea')->name('');
    Route::get('recycle/pickup/product', 'RecycleController@pickupProduct')->name('');
    Route::get('recycle/delivery-zone', 'RecycleController@deliveryZone')->name('');
    Route::get('recycle/shop', 'RecycleController@shop')->name('');
    Route::get('recycle/parcel-request', 'RecycleController@parcelRequest')->name('');
});
