<?php

use App\Http\Controllers\ExtraController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\MidCheckController;
use App\Http\Middleware\SecretMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view("/loginform","forms.login");
Route::view("/form","forms.form")->name("form.get");
Route::post("/handleform",[ExtraController::class,"checkValidation"])->name("form.post");
Route::view("/contact","forms.contact");

// group middleware
Route::middleware(["throttle:2,1"])->group(function(){ 
    Route::get("checkMid1",[MidCheckController::class,"checkMid1"]);
    Route::get("checkMid2",[MidCheckController::class,"checkMid2"]);
});

// secret middleware check
Route::get("secret", function(){
    return("secret message");
})->middleware(SecretMiddleware::class);
