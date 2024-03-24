<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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

                'user_name'=>'required|max:100',
                'user_email'=>'required|unique:users,email',
                'user_pass'=>'required',
               
          
              ];
    }


    public function messages(): array
    {
        return [

                  'user_name.required'=>'يجب ادخال حقل الاسم',
                  'user_name'=>'لقد تجاوزت الحدد المسموح به لعدد الاحرف',
                  'user_name'=>'الاسم موجود مسبقا، استخدم اسم آخر',
                  
                  'user_email.required'=>'يجب ادخال حقل الايميل',
                  'user_email.unique'=>'الايميل موجود سابقاً استخدم اسم ايميل آخر',
            
                  'user_pass.required'=>'يجب إدخال كلمة مرور',
                 
            
                ];
    }
}
