<?php

namespace App\Livewire\Components\Order;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Order;

class Modalchange extends Component
{
    public $modalFormChange = false;

    public $id;
    public $change_status=false;
    
    public $status;
    public $total_amount;
    public $amount = 0;
    public $spending = 0;
    public $payment_method = 'cash';

    #[On('open-modal-change')]
    public function openModal($id)
    {
        $this->id = $id;
        $order = Order::find($id);
        $this->total_amount = $order->total_amount;
        $this->spending = ($this->amount - $order->total_amount);
        $this->modalFormChange = true;
    }

    public function closeModal()
    {
        $this->modalFormChange = false;
    }

    public function render()
    {
        if($this->payment_method == 'cash'){
            if($this->amount > 0){
                // format
                $this->spending = ($this->amount - $this->total_amount);
                $this->amount = $this->amount;
                $this->total_amount = $this->total_amount;
            } else {
                $this->amount = str_replace('.', '', $this->amount);
                $this->spending = 0;
            }
        } else {
            if($this->amount > 0){
                // format
                $this->spending = ($this->amount - $this->total_amount);
                $this->amount = $this->amount;
                $this->total_amount = $this->total_amount;
            } else {
                if ($this->payment_method == 'qris') {
                    $this->amount = $this->total_amount;
                    $this->spending = 0;
                }
            }
        }

        return view('livewire.components.order.modalchange');
    }
}
