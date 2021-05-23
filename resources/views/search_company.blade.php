@extends('layouts.template')

@section('title') Empresas Cadastradas @endsection
  
@section('body')
    <div class="container">
      <table class="table table-hover">
        <thead>
          <tr>
            <th class="text text-text" scope="col">Empresas</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($companies as $company)
              
          <tr>
            <td class="text text-text">{{$company->name}}</td>
          </tr>

          @endforeach
        </tbody>
      </table>
    </div>
@endsection


