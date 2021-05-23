<div>
    <form wire:submit.prevent='create'>
        @if ($sucessMessage)
        <div class="alert alert-dark alert-dismissible fade show" role="alert">                
            <strong>{{$sucessMessage}}</strong>
            <button wire:click = "resetMessage" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="mb-3">
            <label class="form-label text text-text">Nome</label>
            <input wire:model ='name' type="text" class="form-control text" name="name" placeholder="Nome">
            @error('name')  <span role="alert" class="alert">{{ $message }}</span>@enderror
            <br/> 
            <label class="form-label text text-text">Email</label>
            <input wire:model ='email' type="email" class="form-control text" name="email" placeholder="ecomp@ecomp.com">
            @error('email') <span class="alert">{{ $message }}</span> @enderror
            <br/>
            <label class="form-label text text-text">Senha</label>
            <input wire:model ='password' type="password" name="password" class="form-control">
            @error('password') <span class="alert>{{ $message }}</span> @enderror
            <br/>
            <button type="submit" class="btn btn-outline-success text text-text">Cadastrar</button>
            <span wire:loading wire:target="create" class="spinner-border text-dark" role="status"></span>
            </div>
    </form>
</div>
