<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Login extends Component
{
    public $username, $password;

    public function render()
    {
        return view('admin.components.login');
    }

    protected function rules()
    {
        return [
            'username' => 'required',
            'password' => 'required'
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function login()
    {
        $this->validate();
        redirect()->route('admin.dashboard');
    }
}
