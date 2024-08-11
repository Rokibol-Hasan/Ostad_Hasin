<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ExtraController extends Controller
{
    function checkValidation(Request $request){
        $validation = $request->validate([
            "name" => "required",
            "email" => "required|email",
        ]);

        return redirect(route("form.get"))->with([
            "success" => "Form submitted successfully",
        ]);
    }
}
