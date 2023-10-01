<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Middleware\Language as LanguageMiddleware;

class UpdateServiceRequest extends FormRequest
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
            'image'     => [ 'required','image'],
            'title'            => ['required', 'array', LanguageMiddleware::rule()],
            'description'      => ['required', 'array', LanguageMiddleware::rule()],
        ];
    }
}
