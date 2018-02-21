@extends('layouts.app')
@section('content')
@include('includes.errors')
<form action="{{route('financas.store')}}" method="post">
	{{csrf_field()}}
	<div class="form-row justify-content-center">
		<div class="form-group col-md-2">
			<label for="inlineFormInput">Tipo:</label>
			<select class="form-control" id="inlineFormCustomSelect" name="tipo">
				<option selected></option>
				<option value="Sucesso">Sucesso</option>
				<option value="Doação">Doação</option>
				<option value="Outro">Outro</option>
			</select>
		</div>
		
		<div class="form-group col-md-2">
			<label for="inlineFormInput">Data Inicial:</label>
			<input type="text" class="form-control" id="inlineFormInput" placeholder="dd-mm-aaaa" name="dataInicial" value="{{old('dataInicial')}}">
		</div>
		<div class="form-group col-md-2">
			<label for="inlineFormInput">Data Final:</label>
			<input type="text" class="form-control" id="inlineFormInput" placeholder="dd-mm-aaaa" name="dataFinal" value="{{old('dataFinal')}}">
		</div>
		<div class="form-group col-md-2">
			<label for="inlineFormInput">Data:</label>
			<input type="date" class="form-control" id="inlineFormInput" placeholder="dd-mm-aaaa" name="data" value="{{old('data')}}" >
		</div>
		
	</div>
	<div class="form-row justify-content-center">
		
		<div class="form-group col-md-2">
			<label for="inlineFormInput">Concelho:</label>
			<select class="form-control" id="inlineFormCustomSelect" name="concelho">
				<option selected></option>
				<option value="Calheta">Calheta</option>
				<option value="Camara de Lobos">Camara de Lobos</option>
				<option value="Funchal">Funchal</option>
				<option value="Machico">Machico</option>
				<option value="Ponta do Sol">Ponta do Sol</option>
				<option value="Porto Moniz">Porto Moniz</option>
				<option value="Porto Santo">Porto Santo</option>
				<option value="Ribeira Brava">Ribeira Brava</option>
				<option value="Santa Cruz">Santa Cruz</option>
				<option value="Santana">Santana</option>
				<option value="São Vicente">São Vicente</option>
			</select>
		</div>
		<div class="form-group col-md-2">
			<label for="inlineFormInput">Freguesia:</label>
			<select class="form-control" id="inlineFormCustomSelect" name="freguesia">
				<option selected></option>
				<option value="Achadas da Cruz">Achadas da Cruz</option>
			</select>
		</div>
		<div class="form-group col-md-4">
			<label for="inlineFormInput">Entidade:</label>
			<input type="text" class="form-control" id="inlineFormInput" name="entidade" value="{{old('entidade')}}">
		</div>
		
	</div>
	<div class="form-row justify-content-center">
		<div class="form-group col-md-4">
			<label for="inlineFormInput">Nome:</label>
			<input type="text" class="form-control" id="inlineFormInput" name="nome" value="{{old('nome')}}">
		</div>
		
		<div class="form-group col-md-4">
			<label for="inlineFormInput">Morada:</label>
			<input type="text-center" class="form-control" id="inlineFormInput" name="morada" value="{{old('morada')}}">
		</div>
		
		
	</div>
	<div class="form-row justify-content-center">
		<div class="form-group col-md-8">
			<label for="inlineFormInput">Descrição:</label>
			<textarea rows="4" cols="55" maxlength="50" style="resize: none;" id="summernote" name="descricao"></textarea>
		</div>
		
	</div>
	<div class="text-center"><button class="btn btn-outline-success" type="submit">Guardar</button></div>
	
</form>
@endsection