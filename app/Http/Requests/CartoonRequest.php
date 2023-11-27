<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartoonRequest extends FormRequest
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
            "runtime_in_minutes" => "required|numeric|min:5|max:60",
            "episodes" => "required|numeric|min:1",
            "image" => "required|max:255",
        ];
    }

    public function messages()
    {
        return [
            "title.required" => "Il titolo è un campo obbligatorio.",
            "title.min" => "Il titolo deve essere almeno di :min caratteri.",
            "title.max" => "Il titolo deve essere minore di :max caratteri",
            "year.required" => "L'anno è un campo obbligatorio.",
            "year.numeric" => "L'anno deve essere un numero.",
            "creator.required" => "Il creatore è un campo obbligatorio.",
            "creator.min" => "Il creatore deve essere almeno di :min caratteri.",
            "creator.max" => "Il creatore deve essere minore di :max caratteri",
            "rating.required" => "La valutazione è un campo obbligatorio.",
            "rating.max" => "La valutazione deve essere minore di :max caratteri",
            "genre.required" => "Il genere è un campo obbligatorio.",
            "genre.min" => "Il genere deve essere almeno di :min caratteri.",
            "genre.max" => "Il genere deve essere minore di :max caratteri",
            "runtime_in_minutes.required" => "Il numero di minuti è un campo obbligatorio.",
            "runtime_in_minutes.numeric" => "Il numero di minuti deve essere un numero.",
            "runtime_in_minutes.min" => "Il numero di minuti non deve essere minore di :min.",
            "runtime_in_minutes.max" => "Il numero di minuti deve essere minore di :max.",
            "episodes.required" => "Il numero di episodi è un campo obbligatorio.",
            "episodes.numeric" => "Il numero di episodi deve essere un numero.",
            "episodes.min" => "Il numero di episodi deve essere minore di :min.",
            "image.required" => "L'immagine è un campo obbligatorio.",
            "image.max" => "L'immagine deve essere minore di :max caratteri"
        ];
    }
}
