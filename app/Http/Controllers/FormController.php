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
            $fileName = $file->getClientOriginalName();
            $uploadpath = $file->storeAs("uploads", $fileName, "public");
            $path = Storage::url($uploadpath);
        }


        // return with array


        return redirect(route("form.get"))->with([
            "success" => "Form submitted successfully",
        ]);
    }
}
 