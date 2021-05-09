@extends('layouts.template')

@section('title')
    Login
@endsection
@section('body')
<div class="container">
    <h1>LOGIN</h1>
    <br>
    <form method="POST" action="/logged">
        @csrf
        <div class="mb-3">
        <label for="exampleInputEmail1"  class="form-label">Email </label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Senha</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-outline-success">Entrar</button>
    </form>
</div>
@endsection
