<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;

class AdminAddUserComponent extends Component
{
    public $name;
    public $email;
    public $utype;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'email' => 'required|unique:users',
            'utype' => 'required',
        ]);
    }

    public function storeUser()
    {
        $this->validate([
            'name' => 'required|unique:users',
            'email' => 'required|unique:users',
            'utype' => 'required'
        ]);

        $user = new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->utype = $this->utype;
        $user->save();
        session()->flash('message', 'User has been created successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-user-component')->layout('layouts.base');
    }
}
