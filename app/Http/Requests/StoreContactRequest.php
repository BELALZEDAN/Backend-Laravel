<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            // 'phone'          => [ 'required','string'],
            // 'email'          => [ 'required','string'],
            // 'mobile'         => [ 'required','string'],
            // 'fax'            => [ 'required','string'],
            // 'work_time'      => [ '','string'],
            // 'gmail'         => [ 'required','string'],

        ];
    }
}
