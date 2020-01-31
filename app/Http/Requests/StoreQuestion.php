<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuestion extends FormRequest
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
            'question_text' => 'required|min:5|ends_with:?'
        ];
    }
    public function messages()
    {
        return [
            'required' => 'Question cannot be blank.',
            'min' => 'It needs to be a little longer than that (5 characters minimum).',
            'ends_with' => 'A proper question ends with a \'?\', and we are nothing but proper vegans here.'
        ];
    }
}
