@extends('layouts.app')
@section('content')
@include('includes.errors')


<div class="containerPdf">
  <div class="card-body">
    {{csrf_field()}}
    <table class="table table-hover">
      <thead class="table-secondary">
        <tr>
          <th scope="col-md-2">Nº Emolumento</th>
          <th scope="col">Data</th>
          <th scope="col">Requerente</th>
          <th scope="col">Teor Documento</th>
          <th scope="col">Nº Processo</th>
          <th scope="col">Nº livro</th>
          <th scope="col">Nº Cota</th>
          <th scope="col">Nº Registo</th>
          <th scope="col">Nº Folha</th>
          <th scope="col">Tipo Pagamento</th>
          <th scope="col">Ano</th>
          <th scope="col">Valor</th>
          <th scope="col">Utilizador</th>
        </tr>
      </thead>
      <tbody>
        @foreach($dados as $dado)
        <tr>
          
          <td scope="row">{{$dado->id}}</td>
          <td>{{$dado->data}}</td>
          <td>{{$dado->requerente}}</td>
          <td>{{$dado->teorDocumento}}</td>
          <td>{{$dado->nProcesso}}</td>
          <td>{{$dado->livro}}</td>
          <td>{{$dado->cota}}</td>
          <td>{{$dado->registo}}</td>
          <td>{{$dado->folha}}</td>
          <td>{{$dado->ano}}</td>
          <td>{{$dado->pagamento}}</td>
          <td>{{$dado->valor}}</td>
          <td>{{$dado->user->name}}</td>
          
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <a href="{{route('emolumento.pdf')}}" style="text-decoration-line: none;">Download PDF</a>
</div>
</div>
@endsection