<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

// Helpers
use Illuminate\Support\Facades\Auth;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'title' => 'required|max:255',
            'slug'=> 'nullable|max:255',
            'content' => 'required|max:1024',
            'type_id' => 'nullable|exists:types,id',
            'tags' => 'nullable|array|exists:tags,id',
            'cover_img' => 'nullable|image',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Inserisci un Titolo per il tuo Progetto',
            'content.required'=> 'Inserisci una descrizione per il tuo Progetto',
            'cover_img.image'=> 'Inserisci un file valido',
        ];
    }
}