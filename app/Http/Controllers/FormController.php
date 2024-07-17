<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    function handleFromSubmission(Request $request)
    {
        // validate only image upload
        $request->validate([
            'profile_picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // check validation error
   

        $name = $request->input('name');
        $email = $request->input('email');


        if($request->hasFile('profile_picture')){
            $file = $request->file('profile_picture');
            $name = $file->getClientOriginalName();
            $uploadpath = $file->storeAs("uploads", $name, "public");
            $path = Storage::url($uploadpath);
        }

        if(null){
            echo"Hello";
        }

        return redirect(route("form.get"))->with([
            "success" => "Form submitted successfully",
            "name" => $name,
            "email" => $email,
            "profile_picture" => $path,
        ]);
    }
}
 