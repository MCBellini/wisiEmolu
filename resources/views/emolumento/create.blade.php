@extends('layouts.app')
@section('content')
@include('includes.errors')
<form action="{{route('emolumento.store')}}" method="post">
   {{csrf_field()}}

	<div class="form-row justify-content-center">
		<div class="form-group col-md-2">
			<label for="inlineFormInput">Nº Emolumento:</label>
			<input type="text-center" class="form-control" id="inlineFormInput" name="nEmolu" value="{{old('nEmolu')}}">
		</div>
		<div class="form-group col-md-2">
			<label for="inlineFormInput">Data:</label>
			<input type="date" class="form-control" id="inlineFormInput" placeholder="aa-mm-dd" name="data" value="{{old('data')}}">
		</div>
		<div class="form-group col-md-4">
			<label for="inlineFormInput">Requerente:</label>
			<input type="text" class="form-control" id="inlineFormInput" name="requerente" value="{{old('requerente')}}">
		</div>
		
	</div>
	<div class="form-row justify-content-center">
		<div class="form-group col-md-4">
			<label for="inlineFormInput">Teor - Natureza do Documento:</label>
			<input type="text" class="form-control" id="inlineFormInput" name="teorDoc" value="{{old('teorDoc')}}">
		</div>
		<div class="form-group col-md-2">
			<label for="inlineFormInput">Nrº Livro:</label>
			<input type="text-center" class="form-control" id="inlineFormInput" name="nLivro" value="{{old('nLivro')}}">
		</div>
		<div class="form-group col-md-2">
			<label for="inlineFormInput">Nrº Cota:</label>
			<input type="text-center" class="form-control" id="inlineFormInput" name="nCota" value="{{old('nCota')}}">
		</div>
		
	</div>
	<div class="form-row justify-content-center">
		
		<div class="form-group col-md-2">
			<label for="inlineFormInput">Nrº Registo:</label>
			<input type="text-center" class="form-control" id="inlineFormInput" name="nRegisto" value="{{old('nRegisto')}}">
		</div>
		<div class="form-group col-md-2">
			<label for="inlineFormInput">Nrº Processo:</label>
			<input type="text-center" class="form-control" id="inlineFormInput" name="nProcesso" value="{{old('nProcesso')}}">
		</div>
		<div class="form-group col-md-2">
			<label for="inlineFormInput">Nrº Folha:</label>
			<input type="text-center" class="form-control" id="inlineFormInput" name="nFolha" value="{{old('nFolha')}}">
		</div>
		<div class="form-group col-md-1">
			<label for="inlineFormInput">Ano:</label>
			<input type="text-center" class="form-control" id="inlineFormInput" name="ano" value="{{old('ano')}}">
		</div>
		<div class="form-group col-md-1">
			<label for="inlineFormInput">Valor:</label>
			<input type="text-center" class="form-control" id="inlineFormInput" name="valor" value="{{old('valor')}}">
		</div>
	</div>
	<div class="text-center"><button class="btn btn-outline-success" type="submit">Guardar</button></div>
	
</form>
@endsection