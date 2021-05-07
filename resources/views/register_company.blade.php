@extends('layouts.template')

@section('title') Cadastro @endsection
  
@section('body')
    <div class="container">
      <h1>CADASTRAR EMPRESA JR</h1>
      <br/>
      <form method="post" action="/register/company/done">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nome da Empresa</label>
            <input type="text" class="form-control" name="name" placeholder="Nome">
            <br/>
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="ecomp@ecomp.com">
            <br/>
            <label class="form-label">Federação</label>
            <select class="form-control" name="federation_id" aria-label="Default select example">
              <option value="">Selecione uma Federação</option>
              @foreach ($federations as $federation)
                  <option value="{{$federation->id}}">{{$federation->name}}</option>
              @endforeach
            </select>
            <br/>
            <button type="submit" class="btn btn-outline-success">Cadastrar</button>
          </div>
      </form>
    </div 
@endsection