@extends('layouts.template')

@section('title') Cadastro de usuário @endsection
  
@section('body')
      <h1  class="text-center text-primary text m-3">Cadastrar Usuário</h1>
      <div class="row justify-content-center">
            <br>
            <div class="col-8">
                  <livewire:user-form/>
            </div>
      </div>

@endsection