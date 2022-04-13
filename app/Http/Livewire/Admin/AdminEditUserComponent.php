<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;

class AdminEditUserComponent extends Component
{
    public $user_id;
    public $name;
    public $email;
    public $utype;

    public function mount($user_id)
    {
        $this->user_id = $user_id;
        $user = User::where('id',$user_id)->first();
        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->utype = $user->utype;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'email' => 'required',
            'utype' => 'required'
        ]);
    }

    public function updateUser()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'utype' => 'required'
        ]);

        $user = User::find($this->user_id);
        $user->name = $this->name;
        $user->email = $this->email;
        $user->utype = $this->utype;
        $user->save();
        session()->flash('message','User has been updated successfully!');
    }


    public function render()
    {
        return view('livewire.admin.admin-edit-user-component')->layout('layouts.base');
    }
}
