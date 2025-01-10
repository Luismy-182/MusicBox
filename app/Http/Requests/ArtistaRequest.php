<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtistaRequest extends FormRequest
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
        'nombre'=>['required','unique:artistas','min:5','max:100'],
        'voz'=>['required','min:5','max:100'],
        'guitarra1'=>['required','min:5','max:100'],
        'guitarra2'=>['max:100'],
        'bateria'=>['required','min:5','max:100'],
        'bajo'=>['required','min:5','max:100'],
        'imagen'=>['required','image'],
        'descripcion'=>['required','min:5','max:500'],
        ];
    }
}
