<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Federation;

class Login extends Component
{

    public $email;
    public $password;
    public $errorMessage;

    public function render()
    {
        return view('livewire.login');
    }

    public function login(){


        $verify = User::all()->where('email',$this->email)->first();
        if($verify != null){
            if($verify->password == $this->password){
                $federations = Federation::orderby('name')->get();
                return redirect()->to('/logged');
            }
            else{
                $this->errorMessage = 'Credênciais Incorretas';
            }
        }
        else{
            $this->errorMessage = 'Credênciais Incorretas';
        }
    }

    public function resetMessage() {
        $this->reset();
    }
}
