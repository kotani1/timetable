<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubjectRequest extends FormRequest
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
            'subject_name.required' => '科目名は必ず入力してください',
            'subject_name.max' => '科目名は30文字以内で入力してください',
            'year.required' => '年度は必ず入力してください',
            'subject_classification.required' => '科目分類は必ず入力してください',
            'subject_classification.max' => '科目分類は30文字以内で入力してください',
            'password.required' => '科目内容は必ず入力してください',
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
            'subject_name' => ['required','max:30',],
            'year'  => ['required', 'max:30'],
            'subject_classification' => ['required', 'max:30',],
            'subject_content' => ['required',],
        ];
    }
}
