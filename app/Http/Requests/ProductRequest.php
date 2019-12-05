<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class ProductRequest extends FormRequest
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
    public function rules()
    {
        $rule_image = 'required|image|mimes:png,jpg';
        $rule_title = 'required|max:64|unique:products,title';
        if($this->method() == "PUT") {
            $rule_image = 'image|mimes:png,jpg';
            $rule_title = 'required|max:64|unique:products,title,' . $this->route()->parameter('product')->id;
        }

        return [
            'title' => $rule_title,
            'slug' => 'max:64|alpha_dash',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|min:0.01|numeric',
//            'photo' => $rule_image
        ];
    }
}
