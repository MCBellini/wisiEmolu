<!DOCTYPE html>
<html>
  <head>
    <link href="{{ asset('css/form.css') }}" rel="stylesheet" media="all">
    <title></title>
  </head>

  <body>
   <div class="containerPdf">
    <div class="book">
      <div class="page">
        <table class="table table-hover">
          <thead class="table-secondary">
            <tr>
              <th>Nº Emolumento</th>
              <th>Data</th>
              <th>Requerente</th>
              <th>Teor Documento</th>
              <th>Nº Processo</th>
              <th>Nº livro</th>
              <th>Nº Cota</th>
              <th>Nº Registo</th>
              <th>Nº Folha</th>
              <th>Ano</th>
              <th>Tipo Pagamento</th>
              <th>Valor</th>
              <th>Utilizador</th>
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
    </div>
   </div> 
  </body>
</html>