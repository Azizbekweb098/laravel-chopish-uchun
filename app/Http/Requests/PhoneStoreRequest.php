<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhoneStoreRequest extends FormRequest
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
           
            'number' => 'required|numeric|min:10', 
            'image' => 'nullable|image|max:2048',
        ];
    }
    public function messages()
    {
        return [
        
            'number.required' => 'polynai toldiring',
            'number.min' => 'sonlar 10-tadan kam bolmasligi kerak',  
            'image.required' => 'rasm qoshing',
        ];
    }
}

