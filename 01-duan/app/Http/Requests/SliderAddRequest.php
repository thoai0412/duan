<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderAddRequest extends FormRequest
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
        return [
            'name'=> 'required|unique:post|max:100',
            'description' => 'required',
            'image_path' => 'required',  
        ];
    }
    public function messages()
    {
        return[
            'name.required' => 'Bạn chưa đền tên hãy điền tên còn thiếu!',
            'name.unique' => 'Tên đã được sử dụng !',
            'name.max' => 'Tối đa 100 ký tự !',
            'description.required' => 'Bạn chưa nhập mô tả!',
            'image_path.required' => 'Bạn chưa nhập ảnh!',

        ];
    }
}
