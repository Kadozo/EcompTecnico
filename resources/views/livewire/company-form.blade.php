<div>
    <form wire:submit.prevent = "create">
        @if ($sucessMessage)
        <div class="alert alert-dark alert-dismissible fade show" role="alert">                
            <strong>{{$sucessMessage}}</strong>
            <button wire:click = "resetMessage" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @csrf
        <div class="mb-3">
            <label class="form-label text text-text">Nome da Empresa</label>
            <input wire:model = 'name' type="text" class="form-control text text-text" name="name" placeholder="Nome">
            @error('name') <span class="error"> {{$message}} </span> @enderror
            <br/>
            <label class="form-label text text-text">Federação</label>
            <select wire:model = 'federation_id' class="form-control text text-text" name="federation_id" aria-label="Default select example">
              <option value="">Selecione uma Federação</option>
              @foreach ($federations as $federation)
                  <option value="{{$federation->id}}">{{$federation->name}}</option>
              @endforeach
            </select>
            @error('federation_id') <span class="error"> {{$message}} </span> @enderror
            <br/>
            <button type="submit" class="btn btn-outline-success text text-text">Cadastrar</button>
          </div>
      </form>
</div>
