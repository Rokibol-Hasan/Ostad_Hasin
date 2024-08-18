<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\FormValidationRequest;

class ExtraController extends Controller
{
    function checkValidation(FormValidationRequest $request){
        $validated = $request->validated();

        return redirect(route("form.get"))->with([
            "success" => "Form submitted successfully",
        ]);
    }
}
