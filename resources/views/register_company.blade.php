@extends('layouts.template')

@section('title') Cadastro de empresa @endsection
  
@section('body')
    <div class="container ">
      <h1  class="text-center text-primary text m-3">CADASTRAR EMPRESA JR</h1>
      <br/>
      <livewire:company-form/>
    </div 
@endsection