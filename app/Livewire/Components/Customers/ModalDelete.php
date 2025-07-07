<?php

namespace App\Livewire\Components\Customers;

use Livewire\Component;
use App\Models\Customer;
use Livewire\Attributes\On;

class ModalDelete extends Component
{
    public $openModal = false;
    public $id;
    public $customer;

    #[On('open-delete-modal')]
    public function openModal($data)
    {
        $this->id = $data['id'];
        $this->customer = Customer::where('id', $this->id)->first();
        $this->openModal = true;
    }

    function closeModal()  {
        $this->openModal = false;
    }

    public function render()
    {
        return view('livewire.components.customers.modal-delete');
    }

    function deleteData()  {
        Customer::where('id', $this->id)->delete();
        $this->dispatch('success', message: 'Customer delete successfully');
        $this->reset();
        $this->closeModal();
    }
}
