<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HaziUpdateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nev' => 'required|string|max:255',
            'bekuldes' => 'required',
            'jegy' => 'required',
        ];
    }
}
