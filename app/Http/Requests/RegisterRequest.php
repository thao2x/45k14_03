<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'ho_va_ten'         =>  'required|min:4|max:50',
            'email'             =>  'required|email|unique:cutomers,email',
            'password'          =>  'required|min:6|max:50',
            're_password'       =>  'required|same:password',
        ];
    }

    public function messages()
    {
        return [
            'required'      =>  ':attribute không được để trống',
            'max'           =>  ':attribute quá dài',
            'min'           =>  ':attribute quá ngắn',
            'boolean'       =>  ':attribute chỉ được chọn True/False',
            'unique'        =>  ':attribute đã tồn tại',
            'same'          =>  ':attribute và mật khẩu không giống',
            'digits'        =>  ':attribute phải là 10 sô',
            'agree.accepted'   =>  'Bạn phải đồng ý điều khoản!',
        ];
    }

    public function attributes()
    {
        return [
            'ho_va_ten'         =>  'Họ và tên',
            'email'             =>  'Email',
            'password'          =>  'Mật khẩu',
            're_password'       =>  'Nhập lại mật khẩu',
        ];
    }
}
