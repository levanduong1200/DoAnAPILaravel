<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'category_id' => 'required',
            'slug' => 'required|unique:product,slug',
            'price' => 'required|numeric|min:0|not_in:0',
            'sale_price' => 'required|numeric|min:0|lt:price'
        ];
    }
    public function messages(){
        return [
            'name.required' => trans('Tên sản phẩm không được để trống'),
            'name.unique' => trans('Tên sản phẩm đã tồn tại'),
            'slug.required' => trans('Tên đường dẫn không được để trống'),
            'slug.unique' => trans('Tên đường dẫn đã tồn tại'),
            'price.required' => trans('Giá sp không được trống'),
            'sale_price.required' => trans('Giá khuyến mãi không được trống'),
            'category_id.required' => trans('Phải chọn danh mục'),
            'sale_price.lt' => trans('Giá KM < giá gốc'),
            'price.min' => trans('Giá phải > 0'),
            'price.not_in' => trans('Giá phải > 0')
        ];

    }
}
