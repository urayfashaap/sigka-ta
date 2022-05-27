<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class HasilPemantauanRequest extends FormRequest
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
            'titik_pemantauan' => 'required',
            'tanggal_pemantauan' => 'required',
            'waktu_pemantauan' => 'required',
            'laboratorium' => 'nullable',
            'cuaca' => 'nullable',
            'temperatur' => 'nullable',
            'tds' => 'nullable',
            'tds' => 'nullable',
            'tss' => 'nullable',
            'ph' => 'nullable',
            'bod' => 'nullable',
            'cod' => 'nullable',
            'do' => 'nullable',
            'sulfat' => 'nullable',
            'clorida' => 'nullable',
            'nitrat' => 'nullable',
            'nitrit' => 'nullable',
            'amoniak' => 'nullable',
            'fosfat' => 'nullable',
            'sianida' => 'nullable',
            'merkuri' => 'nullable',
            'besi' => 'nullable',
            'mangan' => 'nullable',
            'seng' => 'nullable',
            'kromium' => 'nullable',
            'detergen' => 'nullable',
            'fenol' => 'nullable',
            'fecal_coliform' => 'nullable',
            'total_coliform' => 'nullable'
        ];
    }
}
