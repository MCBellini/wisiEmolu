<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\emolumentoFormValidation;
use App\emolumentos;
use Auth;

class emolumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('emolumento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(emolumentoFormValidation $request)
    {
        
        $registo = emolumentos::create([ 
                'data'=>$request->data,
                'requerente' =>$request->requerente,
                'teorDocumento' =>$request->teorDoc,
                'nProcesso' =>$request->nProcesso,
                'livro'=>$request->nLivro,
                'cota'=>$request->nCota,
                'registo'=>$request->nRegisto,
                'folha'=>$request->nFolha,
                'ano'=>$request->ano,
                'valor'=>$request->valor,
                'user_id'=>Auth::user()->id
                 ]);
        return redirect()->back(); 
    }
        

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
