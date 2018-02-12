<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class emolumentoFormValidation extends FormRequest
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
            'nEmolu'=> 'required|max:20',
            'data'=> 'required|date',
            'requerente'=> 'required|max:100',
            'teorDoc'=> 'required|max:100',
            'nLivro'=> 'required|max:20',
            'nCota'=> 'required|max:20',
            'nRegisto'=> 'required|max:20',
            'nProcesso'=> 'required|max:20',
            'nFolha'=> 'required|max:20',
            'ano'=> 'required|max:4',
            'valor'=> 'required|max:10'
        ];
    }

    public function messages(){

        return[

            'nEmolu.required'=> 'Inserir Número de Emolumento',
            'data.required'=> 'Inserir data',
            'requerente.required'=> 'Inserir nome do requerente', 
            'teorDoc.required'=> 'Inserir natureza do documento',
            'nLivro.required'=> 'Inserir nrº Livro',
            'nCota.required'=> 'Inserir nrº Cota',
            'nRegisto.required'=> 'Inserir nrº Registo',
            'nProcesso.required'=> 'Inserir nrº Processo',   
            'nFolha.required'=> 'Inserir nrº Folha',
            'ano.required'=> 'Inserir Ano',
            'valor.required'=> 'Inserir Valor',
            'valor.max' => 'O valor não pode ter mais que 10 carateres',
            'data.date' => 'campo errado',
            'ano.max'=>'Campo ano não pode conter mais que 4 caracteres'
        ];
    }

}
