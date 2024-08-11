<?php

use App\Http\Controllers\ExtraController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view("/loginform","forms.login");
Route::view("/form","forms.form")->name("form.get");
Route::post("/handleform",[ExtraController::class,"checkValidation"])->name("form.post");
Route::view("/contact","forms.contact");