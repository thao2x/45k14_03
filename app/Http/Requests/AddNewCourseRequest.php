<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddNewCourseRequest extends FormRequest
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

    public function rules()
    {
        return [
            'fullname'          =>  'required|min:4|max:50',
            'email'             =>  'required',
            'password'          =>  'required|min:6|max:50',
            'sex'               =>  'required',
            'phone'             =>  'required',
            'datetime'          =>  'required',
        ];
    }

    public function messages()
    {
        return [
            'required'      =>  ':attribute không được để trống',
            'max'           =>  ':attribute quá dài',
            'min'           =>  ':attribute quá ngắn',
        ];
    }

    public function attributes()
    {
        return [
            'fullname'          =>  'Họ và tên',
            'email'             =>  'Email',
            'password'          =>  'Mật khẩu',
            'sex'               =>  'Giới tính',
            'phone'             =>  'Số điện thoại',
            'datetime'          =>  'Ngày sinh',
        ];
    }
}
