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
            'last-name' => 'requires',
            'gender' => 'requires',
            'email' => 'requires'|'email:rfc,dns',
            'postcode' => ['requires',new PostCodeRule()],
            'address' => 'requires',
            'building-name' => '',
            'option' => 'requires',
        ];
    }
}
