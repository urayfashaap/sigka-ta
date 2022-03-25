<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TitikPemantauanRequest extends FormRequest
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
            'id_titik' => 'required|max:255',
            'nama' => 'required|max:255',
            'latitude' => 'required',
            'longitude' => 'required',
            'nama_sungai' => 'required|max:255',
            'kecamatan' => 'required|max:255',
        ];
    }
}
