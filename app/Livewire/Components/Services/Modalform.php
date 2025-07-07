<?php

namespace App\Livewire\Components\Services;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Service;

class Modalform extends Component
{
    public $modalFormData = false;

    public $name;
    public $price;
    public $description;
    
    public $id;
    public $update_data = false;

    #[On('open-modal')]
    function openModal() {
        $this->modalFormData = true;
    }

    #[On('edit-service')]
    function editService($id)  {
        $this->id = $id;
        $this->update_data = true;

        $service = Service::find($id);
        $this->name = $service->name;
        $this->price = $service->price;
        $this->description = $service->description;

        $this->openModal();
    }


    function closeModal()  {
        $this->modalFormData = false;
        $this->reset();
    }

    function save()  {
        $this->validate([
            'name' => 'required|max:60',
            'price'=>'required|numeric'
        ]);

        if($this->update_data){
            $service = Service::find($this->id);
            $service->update([
                'name'=>$this->name,
                'price'=>$this->price,
                'description'=>$this->description
            ]);
            $this->dispatch('success',message:"Service updated successfully");
            $this->reset();
        }else{
            $service = Service::create([
                'name' => $this->name,
                'price'=>$this->price,
                'description'=>$this->description
            ]);
            $this->dispatch('success',message:"Service created successfully");
            $this->reset();
        }
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.components.services.modalform');
    }
}
