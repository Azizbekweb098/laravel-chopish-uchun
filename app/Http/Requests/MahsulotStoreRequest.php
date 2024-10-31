<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MahsulotStoreRequest extends FormRequest
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
            'name' => ['required','string', 'min:5'],
            'commet' => [ 'required',  'string']
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Polyani toldiring',
            'name.min' => 'sozlar judayam  kam ',
            'commet.required' => 'polyani toldiring',
        ];
    }
}
