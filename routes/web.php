<?php

use App\Http\Controllers\ExtraController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view("/loginform","forms.login");
// Route::view("/form","forms.form")->name("form.get");
Route::view("/form","forms.newform")->name("form.get");
Route::post("/form",[ExtraController::class,"checkValidation"])->name("form.newpost");
Route::view("/contact","forms.contact");



// Route::post("/handleform",[FormController::class,"handleFormSubmission"])->name("handleform");
Route::post("/handleform",[FormController::class,"handleFromSubmission"])->name("form.post");

