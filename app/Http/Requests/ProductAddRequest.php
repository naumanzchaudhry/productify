<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductAddRequest extends FormRequest
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
     * @return array
     */

    public function messages()
    {
        return [
            'title.required' => 'Product must have  a title',
            'description.required' => 'Product must have a description',
            'price.required' => 'Product must have a price',
        ];
    }

    public function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
        ];
    }
}
