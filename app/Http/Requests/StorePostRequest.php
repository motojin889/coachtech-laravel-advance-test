<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\PostCodeRule;

class StorePostRequest extends FormRequest
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
            'first-name' => 'required',
            'last-name' => 'required',
            'gender' => 'required',
            'email' => 'required|email:rfc,dns',
            'postcode' => ['required',new PostCodeRule()],
            'address' => 'required',
            'option' => 'required|max:120',
        ];
    }

    public function prepareForValidation(){
        $this->merge(['postcode' => mb_convert_kana($this->postcode, 'a')]);
    }

    public function messages()
    {
        return [
            'last-name.required' => '苗字を入力して下さい。',
            'first-name.required' => '名前を入力してください。',
            'gender.required' => '性別を選択してください。',
            'email.required' =>'メールアドレスを入力してください。',
            'email.email' =>'メールアドレスを正しく入力してください。',
            'postcode.required' => '郵便番号を入力してください。',
            'address.required' => '住所を入力してください。',
            'option.required' => 'ご意見をお聞かせください。',
            'option.max' => '120文字以内で入力してください。',
        ];
    }
}
