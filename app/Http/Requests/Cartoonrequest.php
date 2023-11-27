<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Cartoonrequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "title" => "required|min:2|max:50",
            "year" => "required|numeric",
            "creator" => "required|min:5|max:255",
            "rating" => "required|max:10",
            "genre" => "required|min:3|max:255",
            "runtime_in_minutes" => "required|numeric",
            "episodes" => "required",
            "image" => "required|max:255"
        ];
    }

    public function messages()
    {
        return[
            "title.required" => "Devi inserire il titolo",
            "title.min" => "Deve avere almeno :min caratteri",
            "title.max" => "Deve avere massimo :max caratteri",
            "year.required" => "Devi inserire l'anno",
            "year.numeric" => "Deve essere un numero",
            "creator.required" => "Devi inserire i creatori",
            "creator.min" => "Deve avere almeno :min caratteri",
            "creator.max" => "Deve avere massimo :max caratteri",
            "rating.required" => "Devi inserire il rating",
            "rating.max" => "Deve avere massimo :max caratteri",
            "genre.required" => "Devi inserire il genere",
            "genre.min" => "Deve avere almeno :min caratteri",
            "genre.max" => "Deve avere massimo :max caratteri",
            "runtime_in_minutes.required" => "Devi inserire il minutaggio",
            "runtime_in_minutes.numeric" => "Deve essere un numero",
            "episodes.required" => "Devi inserire il numero di episodi",
            "image.required" => "Devi inserire l'immagine",
            "image.max" => "Deve avere massimo :max caratteri"
        ];
    }
}
