<?php

namespace App\Livewire\Components\Customers;

use Livewire\Component;
use App\Models\Customer;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class Table extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $search;
    public $modalDeleteData = true;

    public function openModal()
    {
        $this->dispatch('open-modal');
    }

    public function delete($id){
        $this->dispatch('open-delete-modal',['id'=>$id]);
    }

    #[On('success')]
    public function messageSuccess($message)
    {
        $this->resetPage();
        session()->flash('success', $message);
    }

    public function edit($id)
    {
        $this->dispatch('edit-modal', $id);
    }

    public function getItems()
    {
        return Customer::where('name', 'like', '%' . $this->search . '%')
                            ->orderBy('created_at', 'desc')
                            ->paginate(10);
    }

    public function render()
    {
        return view('livewire.components.customers.table', [
            'customers' => $this->getItems()
        ]);
    }
}
