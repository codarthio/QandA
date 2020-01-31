<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAnswer extends FormRequest
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
            'answer_text' => 'required|min:5'

        ];
    }
    public function messages()
    {
        return [
            'required' => 'Question cannot be blank.',
            'min' => 'It needs to be a little longer than that (5 characters minimum).'
        ];
    }
}
