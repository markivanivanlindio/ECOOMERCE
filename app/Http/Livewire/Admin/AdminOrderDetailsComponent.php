<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Order;

class AdminOrderDetailsComponent extends Component
{
    public $order_id;

    public function mount($order_id)
    {
        $this->$order_id = $order_id;
    }

    public function render()
    {
        $order = Order::find($this->order_id);
        return view('livewire.admin.admin-order-details-component', ['order'=>$order])->layout('layouts.base');
    }
}
