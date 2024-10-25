<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\TaskController;
use \App\Http\Controllers\Test\TestController;
use \App\Http\Controllers\Admin\ProvinceAndDistrictController;
use \App\Http\Controllers\Admin\TourProviderController;
use \App\Http\Controllers\Admin\TourController;
use \App\Http\Controllers\Admin\InformationController;
use \App\Http\Controllers\Admin\TourImageController;
use \App\Http\Controllers\Admin\AdminController;
use \App\Http\Controllers\Admin\MenuController;

Route::get('/admin/index', [AdminController::class, "index"])->name("admin.index");
Route::get('/admin/test/form', [AdminController::class, "test_form"])->name("admin.test.form");
Route::post('/admin/test/form', [AdminController::class, "test_form_post"])->name("admin.test.form.post");

Route::get('/admin/menu', [MenuController::class, "index"])->name("admin.menu");
Route::post('/admin/menu', [MenuController::class, "store"])->name("admin.menu.store");
Route::post('/admin/menu/update', [MenuController::class, "update"])->name("admin.menu.update");
Route::post('/admin/menu/{id}/update', [MenuController::class, "updateOne"])->name("admin.menu.updateOne");
Route::get('/admin/menu/{id}/delete', [MenuController::class, "delete"])->name("admin.menu.delete");


//Route::get('/admin/form', [TestController::class, "componentList"])->name("admin.form");
//
//Route::get('/admin/task', [TaskController::class, "index"])->name("admin.task");
//Route::post('/admin/task/create', [TaskController::class, "create"])->name("admin.task.create");
//Route::post('/admin/task/{id}/update', [TaskController::class, "update"])->name("admin.task.update");
//Route::get('/admin/task/{id}/delete', [TaskController::class, "delete"])->name("admin.task.delete");
//
//
//// Province and district
//Route::get('/admin/location', [ProvinceAndDistrictController::class, "listAllProvinceAndDistrict"])->name("admin.location");
//Route::post('/admin/location/store', [ProvinceAndDistrictController::class, "store"])->name("admin.location.store");
//Route::post('/admin/location/province/{id}/update', [ProvinceAndDistrictController::class, "updateProvince"])->name("admin.location.province.update");
//Route::get('/admin/location/province/{id}/delete', [ProvinceAndDistrictController::class, "deleteProvince"])->name("admin.location.province.delete");
//
//Route::get('/admin/location/{id}', [ProvinceAndDistrictController::class, "listDistrict"])->name("admin.location.listDistrict");
//Route::post('/admin/location/district/{id}/update', [ProvinceAndDistrictController::class, "updateDistrict"])->name("admin.location.district.update");
//Route::get('/admin/location/district/{id}/delete', [ProvinceAndDistrictController::class, "deleteDistrict"])->name("admin.location.district.delete");
//
//// Tour Provider
//Route::get('/admin/provider', [TourProviderController::class, "index"])->name("admin.provider");
//Route::post('/admin/provider', [TourProviderController::class, "store"])->name("admin.provider.store");
//Route::post('/admin/provider/{id}/update', [TourProviderController::class, "update"])->name("admin.provider.update");
//Route::get('/admin/provider/{id}/delete', [TourProviderController::class, "delete"])->name("admin.provider.delete");
//
//// Tour
//Route::get('/admin/tour', [TourController::class, "index"])->name("admin.tour");
//Route::get('/admin/tour/{id}/edit', [TourController::class, "edit"])->name("admin.tour.edit");
//Route::get('/admin/tour/create', [TourController::class, "create"])->name("admin.tour.create");
//Route::post('/admin/tour', [TourController::class, "store"])->name("admin.tour.store");
//Route::post('/admin/tour/{id}/update', [TourController::class, "update"])->name("admin.tour.update");
//Route::get('/admin/tour/{id}/delete', [TourController::class, "delete"])->name("admin.tour.delete");
//
//// Tour Image
//Route::get('/admin/tour/{tourId}/image', [TourImageController::class, "index"])->name("admin.tour_image");
//Route::post('/admin/tour/{tourId}/image', [TourImageController::class, "insert"])->name("admin.tour_image.insert");
//Route::get('/admin/tour/image/{id}/delete', [TourImageController::class, "delete"])->name("admin.tour_image.delete");
//
//
//// Web Information
//Route::get('/admin/information', [InformationController::class, "index"])->name("admin.information");
//Route::put('/admin/information/update', [InformationController::class, "update"])->name("admin.information.update");


// CK Finder setup
Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')
    ->name('ckfinder_connector');
Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')
    ->name('ckfinder_browser');
