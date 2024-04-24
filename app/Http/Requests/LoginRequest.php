<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use App\Rules\captchaRule;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // returns true or false based on the user's permissions to access the site
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nat_num' => 'required|max:11',
            'email' => 'required|email:dns|regex:/(.+)@(.+)\.(.+)/i',
            'password' => 'required',
            'min:6',
            'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
            'confirmed',
            'password_confirm' => 'required|same:password',
            'captcha' => ['required' , new captchaRule()],
            'image' => 'required', 'mimes:jpg,jpeg,png,bmp,tiff', 'max:4096',
        ];
    }
    public function messages(){
        return [
            'required' => ':attribute مطلوب',
            'max' => 'يجب أن يكون :attribute أقل من 11',
            'regex' => ':attribute لا يشابه النمط المطلوب',
            'email' => 'الايميل غير صحيح',
            'min' => 'يجب أن يكون الحقل :attribute أكثر من 6',
            'confirmed' => 'تأكد من :attribute',
            'same' => 'كلمة السر لا تطابق حقل التأكد',
            'captcha_api' => 'الرمز غلط',
            'mimes' => 'الرجاء ادخال صورة',
            'max' => 'الصورة يجب ان تكون اكبر من 4 ميغا'
        ];
    }
    public function attributes(){
        return [
            'email' => 'الايميل',
            'nat_num' => 'الرقم الوطني',
            'password' => 'كلمة السر',
            'captcha' => 'الرمز',
            'password_confirm' => 'تأكيد كلمة السر',
            'image' => 'وصل الدفع'
        ];
    }
}
