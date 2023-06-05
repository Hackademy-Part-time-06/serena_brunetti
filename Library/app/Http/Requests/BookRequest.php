<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'pages' => 'required',
            'author' => 'required|string',
            'year' => 'required',
            'image' => 'mimes:jpg,jpeg,bmp,png'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.string' => 'Inserisci il formato corretto',
            'pages.required' => 'Il numero di pagine è obbligatorio',
            'author.required' => 'L\'autore è obbligatorio',
            'author.string' => 'Inserisci il formato corretto',
            'year.required' => 'L\'anno è obbligatorio',
            'image.mimes' => 'Inserisci immagine nei formati corretti'
        ];
    }
}
