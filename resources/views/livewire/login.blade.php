<div>
    <form wire:submit.prevent = "login">
        @csrf
        @if ($errorMessage)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">                
            <strong>{{$errorMessage}}</strong>
            <button wire:click = "resetMessage" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="mb-3">
        <label for="exampleInputEmail1"  class="form-label text text-text">Email </label>
        <input wire:model="email" type="email" class="form-control text text-text" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label text text-text">Senha</label>
        <input wire:model="password" type="password" class="form-control text text-text" name="password" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-outline-success text text-text">Entrar</button>
    </form>
</div>
