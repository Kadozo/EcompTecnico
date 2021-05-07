@extends('layouts.template')

@section('title') Pesquisa @endsection
  
@section('body')
    <div class="container">
      <table class="table table-hover table-borderless">
        <thead>
          <tr>
            <th scope="col">Nome da Federação</th>
            <th scope="col">Estado</th>
            <th>Lista de Empresas</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($federations as $federation)
              
          <tr>
            <td>{{$federation->name}}</td>
            <td>{{$federation->state}}</td>
            <td><a href="search/{{$federation->id}}">Ver lista</a></td>
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