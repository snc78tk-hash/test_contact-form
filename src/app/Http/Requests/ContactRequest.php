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
            'last_name' => ['required', 'string', 'max:8'],
            'first_name' => ['required', 'string', 'max:8'],
            'gender' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'tel1' => ['required', 'numeric', 'digits:5'],
            'tel2' => ['required', 'numeric', 'digits:5'],
            'tel3' => ['required', 'numeric', 'digits:5'],
            'address' => ['required', 'string', 'max:255'],
            'inquiry_type' => ['required'],
            'content' => ['required', 'string', 'max:120'],
        ];
    }

    public function messages()
    {
        return [
            'last_name.required' => 'お名前(姓)は必須です。',
            'first_name.required' => 'お名前(名)は必須です。',
            'last_name.string' => 'お名前(姓)を文字列で入力してください。',
            'first_name.string' => 'お名前(名)を文字列で入力してください。',
            'last_name.max' => 'お名前(姓)を8文字以下で入力してください。',
            'first_name.max' => 'お名前(名)を8文字以下で入力してください。',
            'gender.required' => '性別は必須です。',
            'email.required' => 'メールアドレスは必須です。',
            'email.email' => '有効なメールアドレスを入力してください。',
            'email.string' => 'メールアドレスを文字列で入力してください。',
            'email.email' => '有効なメールアドレス形式を入力してください',
            'tel1.required' => '電話番号(市外局番)は必須です。',
            'tel2.required' => '電話番号(市内局番)は必須です。',
            'tel3.required' => '電話番号(加入者番号)は必須です。',
            'tel1.numeric' => '電話番号(市外局番)を数値で入力してください',
            'tel2.numeric' => '電話番号(市内局番)を数値で入力してください',
            'tel3.numeric' => '電話番号(加入者番号)を数値で入力してください',
            'address.required' => '住所は必須です。',
            'inquiry_type.required' => 'お問い合わせの選択は必須です。',
            'content.required' => 'お問い合わせ内容は必須です。',
            'content.string' => 'お問い合わせ内容を文字列で入力してください。',
            'content.max' => 'お問い合わせ内容を120文字以下で入力してください。',
        ];
    }
}
