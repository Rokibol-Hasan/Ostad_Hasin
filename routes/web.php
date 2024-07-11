<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view("/loginform","forms.login");
Route::view("/form","forms.form")->name("form.get");
Route::view("/contact","forms.contact");



// Route::post("/handleform",[FormController::class,"handleFormSubmission"])->name("handleform");
Route::post("/handleform",[FormController::class,"handleFromSubmission"])->name("form.post");