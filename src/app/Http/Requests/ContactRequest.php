<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'gender' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'zip' => ['required', 'string', 'max:8', 'min:8'],
            'postal_code' => ['required', 'string', 'max:255'],
            'building' => ['max:255'],
            'content' => ['required', 'max:120'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前を入力してください',
            'gender.required' => '性別を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'email.email' => '有効なメールアドレス形式で入力してください',
            'zip.required' => '郵便番号を入力してください',
            'zip.string' => '郵便番号はハイフンを含めて入力してください',
            'zip.max' => '郵便番号はハイフンを含め8文字以下で入力してください',
            'zip.min' => '郵便番号はハイフンを含め8文字以上で入力してください',
            'postal_code.required' => '住所を入力してください',
            'postal_code.string' => '住所を文字列で入力してください',
            'content.required' => 'ご意見を入力してください',
            'content.max' => 'ご意見は120文字以内で入力して下さい',
        ];
    }

}