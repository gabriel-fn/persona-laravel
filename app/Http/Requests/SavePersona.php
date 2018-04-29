<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePersona extends FormRequest
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
            'nome' =>'required|min:1|max:25',
            'np' =>'required|integer',
            'forca' =>'required|integer',
            'destreza' =>'required|integer',
            'constituicao' =>'required|integer',
            'inteligencia' =>'required|integer',
            'sabedoria' =>'required|integer',
            'carisma' =>'required|integer',
            'dano' =>'required|integer',
            'ataque' =>'required|integer',
            'defesa' =>'required|integer',
            'vida' =>'required|integer',
            'iniciativa' =>'required|integer',
            'resistencia' =>'required|integer',
            'reflexo' =>'required|integer',
            'fortitude' =>'required|integer',
            'vontade' =>'required|integer',
        ];
    }
}
