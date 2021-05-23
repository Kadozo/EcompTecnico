@extends('layouts.template')

@section('title') Pesquisa @endsection
  
@section('body')
    <div class="container m-3">
      <table class="table table-hover table-borderless">
        <thead>
          <tr>
            <th class="text text-text" scope="col">Nome da Federação</th>
            <th class="text text-text" scope="col">Estado</th>
            <th class="text text-text">Lista de Empresas</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($federations as $federation)
              
          <tr>
            <td class="text text-text">{{$federation->name}}</td>
            <td class="text text-text">{{$federation->state}}</td>
            <td class="text text-text"><a href="search/{{$federation->id}}">Ver lista</a></td>
          </tr>

          @endforeach
        </tbody>
      </table>
    </div>
    </div>
@endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>