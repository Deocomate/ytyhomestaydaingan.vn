<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Client\HomeController;

Route::get("/", [HomeController::class, "trang_chu"])->name("client.trang_chu");

// CK Finder setup
Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')
    ->name('ckfinder_connector');
Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')
    ->name('ckfinder_browser');
