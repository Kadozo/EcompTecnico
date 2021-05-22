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
        <label for="exampleInputEmail1"  class="form-label">Email </label>
        <input wire:model="email" type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Senha</label>
        <input wire:model="password" type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-outline-success">Entrar</button>
    </form>
</div>
