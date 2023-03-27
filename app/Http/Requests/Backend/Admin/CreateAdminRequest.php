<?php

namespace App\Http\Requests\Backend\Admin;

use App\Models\Admin;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class CreateAdminRequest extends FormRequest
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
            'username' => 'required|unique:admins',
            'job' => 'required',
            'nick_name' => 'required|min:|max:14',
            'password' => 'required|min:6|max:8|confirmed',
            'type' => [
                'required',
                Rule::in(array_keys(Admin::$TYPE)),
            ]
        ];
    }

    public function messages()
    {
        return [
            'username.required' => '请输入账户',
            'username.unique' => '账户已经存在',
            'job.required' => '请输入职位',
            'nick_name.required' => '请输入昵称',
            'nick_name.min' => '昵称最少2字符',
            'nick_name.max' => '昵称最少多18字符',
            'password.required' => '请输入密码',
            'password.confirmed' => '确认密码错误',
            'type.required' => '请选类型',
            'type.in' => '学习形式只能选：' . implode('/', Admin::$TYPE),
        ];
    }

}
