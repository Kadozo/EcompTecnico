<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class UserForm extends Component
{

    public $name;
    public $email;
    public $password;
    public $sucessMessage;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email|unique:users',
        'password' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.user-form');
    }

    public function create()
    {
        $validatedData = $this->validate();

        User::create($validatedData);

        $this->reset();

        $this->sucessMessage = 'Usuário Cadastrado';
    }

    public function resetMessage() {
        $this->sucessMessage = null;
    }
}
