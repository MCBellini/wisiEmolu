<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\emolumentos;
use PDF;

class pdfController extends Controller
{
    public function pdf(){
    	//dd('test');
    	$emolumentos = emolumentos::all();
    	$pdf = PDF::loadView('pdf', ['dados' =>$emolumentos]);
    
    	return $pdf->download('emolumentos.pdf');
    }

    public function show(){
    	return view('pdf')->with('dados',emolumentos::all());
    }


}
