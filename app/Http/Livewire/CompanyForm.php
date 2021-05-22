<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Federation;
use App\Models\Company;

class CompanyForm extends Component
{
    public $name;
    public $federation_id;
    public $sucessMessage;
    protected $rules = [
        'name' => 'required|unique:companies',
        'federation_id' => 'required',
    ];

    protected $messages = [
        'name.required' => 'O Campo de nome é requerido',
        'name.unique' => 'O nome da empresa já esta sendo usado',
        'federation_id.required' => 'A escolha da federação é necessária',
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        $federations = Federation::orderby('name')->get();
        return view('livewire.company-form',compact('federations'));
    }

    public function create()
    {
        $validatedData = $this->validate();

        Company::create($validatedData);

        $this->reset();

        $this->sucessMessage = 'Empresa Cadastrada';
    }

    public function resetMessage() {
        $this->sucessMessage = null;
    }
}
