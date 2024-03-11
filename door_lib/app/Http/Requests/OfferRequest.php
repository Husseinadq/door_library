<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
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

                'pub_name'=>'required|max:100|unique:publisher,name',
                'pub_websit'=>'required|unique:publisher,pub_websit',
                'pub_dec'=>'required',
                'photo'=>'required',
          
              ];
    }


    public function messages(): array
    {
        return [

                  'pub_name.required'=>'يجب ادخال حقل الاسم',
                  'pub_name'=>'لقد تجاوزت الحدد المسموح به لعدد الاحرف',
                  'pub_name'=>'الاسم موجود مسبقا، استخدم اسم آخر',
                  
                  'pub_websit.required'=>'يجب ادخال حقل الايميل',
                  'pub_websit.unique'=>'الايميل موجود سابقاً استخدم اسم ايميل آخر',
            
                  'pub_dec.required'=>'يجب ادخال  حقل الوصف',
                  'photo.required'=>'يجب ادخال صورة',
            
                ];
    }
}
