<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class AdminUserComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $users = User::paginate(5);
        return view('livewire.admin.admin-user-component',['users'=>$users])->layout('layouts.base');
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        session()->flash('message','User has been deleted successfully!');
    }

}
