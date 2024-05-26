<?php

namespace App\Livewire;

use App\Livewire\Forms\ManagerForm;
use App\Models\Manager;
use App\Models\Season;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class ManagerMain extends Component{
    use WithPagination;
    use Actions;
    public $isOpen=false;
    public $position_id;
    public ?Manager $manager;
    public ManagerForm $form;
    public $search;

    public function render(){
        $managers=Manager::where('fullname','LIKE','%'.$this->search.'%')->latest('id')->paginate(10);
        $seasons=Season::all();
        return view('livewire.manager-main',compact('managers','seasons'));
    }

    public function create(){
        $this->isOpen=true;
        $this->form->reset();
        $this->reset(['manager']);
        $this->resetValidation();
        //$this->form->mount($this->supplier_id);
    }

    public function edit(Manager $manager){
        //dd($vehicle);
        $this->manager=$manager;
        $this->form->fill($manager);
        $this->isOpen=true;
        $this->resetValidation();
    }

    public function store(){
        $this->validate();
        if(!isset($this->manager->id)){
            Manager::create($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro creado'
            );
        }else{
            $this->manager->update($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro actualizado'
            );
        }
        $this->reset(['isOpen']);
    }

    public function destroy(Manager $manager){
        $manager->delete();
    }

    public function updatingSearch(){
        $this->resetPage();
    }


}
