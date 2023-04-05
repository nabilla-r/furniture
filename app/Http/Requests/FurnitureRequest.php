<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FurnitureRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name_furniture' => ['required'],
            'price' => ['required'],
            'stock' => ['required'],
            'total_order' => ['required']
       ];
   }

   public function messages(){
       return[
           'required' => ':attribute cannot be empty'
           // 'required' => ':attribute harus di isi'
       ];
   }
}

