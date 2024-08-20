<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MidCheckController extends Controller
{
    function checkMid1(Request $request){
        return response("Hello1");
    }


    function checkSecret(Request $request){
        return response("User not recognized");
    }
}
