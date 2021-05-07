@extends('layouts.template')

@section('title') Empresas Cadastradas @endsection
  
@section('body')
    <div class="container">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Nome da Empresa</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($companies as $company)
              
          <tr>
            <td>{{$company->name}}</td>
          </tr>

          @endforeach
        </tbody>
      </table>
    </div>
@endsection


