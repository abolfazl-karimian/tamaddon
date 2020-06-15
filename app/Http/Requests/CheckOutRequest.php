<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckOutRequest extends FormRequest
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
            'full_name'    => 'required|min:5|max:50',
            'email'        => 'required|email',
            'phone_number' => 'required|regex:/(09)[0-9]{9}/|digits:11',
            'postal_code'  => 'required|digits:10',
            'province'     => 'required|digits_between:1,2',
            'city'         => 'required|digits_between:1,3',
            'address'      => 'required|max:300',
        ];
    }

    public function messages()
    {
        return [
            'province.*' => 'استان خود را انتخاب کنید.',
            'city.*'     => 'شهر خود را انتخاب کنید.',
        ];
    }
}
