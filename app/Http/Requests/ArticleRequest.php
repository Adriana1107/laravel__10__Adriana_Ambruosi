<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
     */ public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'img' => 'nullable|image|max:2048',
        ];
    }


    public function messages(){
        return[
            'name.required'=> 'campo obbligatorio!',
            'price.required'=> 'campo obbligatorio!',
            'price.numeric'=> 'campo deve contenere obbligatoriamente un numero!',
            'description.required'=> 'campo obbligatorio!',
            'description.min'=> 'la descrizione deve avere almeno 5 caratteri!',
            'img.required'=> 'campo obbligatorio!'
        ];
    }


}