<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormValidationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => "required|max:255|min:5",
            "email" => "nullable|email|max:255",
            "password" => "required|min:8",
        ];
    }


    public function messages(){
        return[
            "name.required" => "নাম দিস নাই!",
            "name.min" => "মিনিমাম ৫ অক্ষরের নাম থাকবে",
            "name.max" => "২৫৫ ক্যারেক্টারের বেশি দিস না",
            "password.min" => "পাসোর্ড দিতে হবে ৮ অক্ষরের",
            "password.required" => "পাসোর্ড দিতেই হবে",
            "email.email" => "তোর ইমেইল ঠিক নাই",
        ];
    }
}
