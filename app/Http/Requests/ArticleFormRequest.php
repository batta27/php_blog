<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            
                'title' => 'required|min:4',
                'author' => 'required',
                'body' => 'required|max:200|min:4',
                
            
        ];
    }
//     * Get the error messages for the defined validation rules.
//  *
//  * @return array<string, string>
//  */
public function messages(): array
{
    return [
        'title.required' => 'Il titolo è obbligatorio',
        'title.min' => 'Il titolo è troppo corto deve esserer più lungo!',
        'body.required' => 'Il corpo del testo è obbligatorio con minimo 4 caratteri',
        'body.min' => 'Il corpo del testo è obbligatorio con minimo 4 caratteri',
        'author.required' => 'Il nome dell\'autore obbligatorio',
        'img.image' => 'Non hai passato un file corretto,inserire immagine',
        'body.max' => 'Il numero massimo di caratteri  è di 2000',
    ];
}





}
