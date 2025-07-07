<?php

namespace App\Livewire\Components\Services;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Service;

class DeleteModal extends Component
{
    public $openDeleteModal = false;
    public $service;

    #[On('open-delete-modal')]
    public function openModal($data){
        $this->service = Service::where('id', $data['id'])->first();
        $this->openDeleteModal = true;
    }


    function deleteData() {
        $this->service->delete();
        $this->dispatch('success',message:"Service deleted successfully");
        $this->closeModal();
    }

    function closeModal() {
        $this->openDeleteModal = false;
    }

    public function render()
    {
        return view('livewire.components.services.delete-modal');
    }

}
