@extends('layouts.template')

@section('title') Cadastro de usuário @endsection
  
@section('body')
    <div class="container">
      <h1>CADASTRAR USUÁRIO</h1>
      <br/>
      <form method="post" action="/register/done">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" class="form-control" name="name" placeholder="Nome">
            <br/>
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="ecomp@ecomp.com">
            <br/>
            <label class="form-label">Senha</label>
            <input type="password" name="password" class="form-control">
            <br/>
            <button type="submit" class="btn btn-outline-success">Cadastrar</button>
          </div>
      </form>
    </div 
@endsection