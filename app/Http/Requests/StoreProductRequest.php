<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    public function attributes()
    {
        return [
            'nomi'=>"Maxsulot nomi",
            'narxi'=>'Maxsulotning narxi',
            'tasnifi'=>'Maxsulotning tasnifi',
        ];
    }


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
            'nomi'=>'required',
            'narxi'=>'required',
            'tasnifi'=>'required',
            'photo'=>'nullable|image|max:5120'
        ];
    }
}
