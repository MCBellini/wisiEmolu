<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class financasFormValidation extends FormRequest
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
            
            'tipo'=> 'required|max:15',
            'data'=> 'required|date',
            'concelho'=> 'required|max:20',
            'freguesia'=> 'required|max:20',
            'entidade'=> 'required|max:20',
            'nome'=> 'required|max:20',
            'morada'=> 'required|max:30',
            
      
        ];
    }

     public function messages(){

        return[

            'tipo.required'=> 'Inserir tipo',
            'data.required'=> 'Inserir data',
            'concelho.required'=> 'Inserir concelho',
            'freguesia.required'=> 'Inserir freguesia',
            'entidade.required'=> 'Inserir entidade',
            'nome.required'=> 'Inserir nome',   
            'morada.required'=> 'Inserir morada'
            
        ];
    }
}
