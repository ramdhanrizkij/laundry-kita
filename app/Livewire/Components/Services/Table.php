<?php

namespace App\Livewire\Components\Services;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;
use App\Models\Service;
use Livewire\Attributes\On;

class Table extends Component
{
    use WithPagination, WithoutUrlPagination;
    public $search;
    public $sortField = 'created_at';
    public $sortDirection = 'desc';

    #[On('success')]
    function messageSuccess($message){
        $this->resetPage();
        session()->flash('success',$message);
    }
    
    function openFormModal() {
        $this->dispatch('open-modal');
    }
    
    function fetchData()  {
        return Service::where('name','like','%'.$this->search.'%')
            ->orderBy($this->sortField,$this->sortDirection)
            ->paginate(10);
    }

    function edit($id) {
        $this->dispatch('edit-service', $id);
    }

    function delete($id) {
        $this->dispatch('open-delete-modal',['id'=>$id]);
    }

    public function render()
    {
        return view('livewire.components.services.table',[
            'services'=>$this->fetchData()
        ]);
    }
}
