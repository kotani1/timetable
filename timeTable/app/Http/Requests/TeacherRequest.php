<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Request;

class TeacherRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    public function messages()
    {
        return [
            'user_name.required' => 'ユーザー名は必ず入力してください',
            'user_name.max' => 'ユーザー名は30文字以内で入力してください',
            'login_id.max' => 'ログインidは30文字以内で入力してください',
            'login_id.required' => 'ログインidは必ず入力してください',
            'login_id.unique' => 'このログインidは既に存在しています',
            'password.required' => 'パスワードは必ず入力してください',
            'password.min' => 'パスワードは8文字以上入力してください',
            'permit.required' => '権限は必ず入力してください',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'user_name' => ['required','max:30',],
            'login_id' => ['required', 'max:30', 'unique:teachers'],
            'password' => ['required', 'min:8'],
        ];
    }
}