<?php

namespace App\Livewire;

use App\Livewire\Forms\SquadForm;
use App\Models\Position;
use App\Models\Squad;
use Barryvdh\DomPDF\Facade\Pdf;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class SquadMain extends Component{
    use WithPagination;
    use Actions;
    public $isOpen=false;
    public $position_id;
    public ?Squad $squad;
    public SquadForm $form;
    public $search,$tipo;

    // public function mount($id){
    //     $this->position_id=$id;
    //     $this->form->mount($id);
    // }

    public function render(){
        $integrantes=Squad::where('fullname','LIKE','%'.$this->search.'%')
                    ->Position($this->tipo)
                    ->latest('id')->paginate(10);
        $cargos=Position::all();
        return view('livewire.squad-main',compact('integrantes','cargos'));
    }

    public function create(){
        $this->isOpen=true;
        $this->form->reset();
        $this->reset(['squad']);
        $this->resetValidation();
        //$this->form->mount($this->supplier_id);
    }

    public function edit(Squad $squad){
        //dd($vehicle);
        $this->squad=$squad;
        $this->form->fill($squad);
        $this->isOpen=true;
        $this->resetValidation();
    }

    public function store(){
        $this->validate();
        if(!isset($this->squad->id)){
            Squad::create($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro creado'
            );
        }else{
            $this->squad->update($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro actualizado'
            );
        }
        $this->reset(['isOpen']);
    }

    public function destroy(Squad $squad){
        $squad->delete();
    }

    public function updatingSearch(){
        $this->resetPage();
    }

    public function GenerarPDF(){
        $players=Squad::where('type','Jugador')->get();
        $pdf = Pdf::loadView('reports.squadlist',compact('players'));
        //return $pdf->download('reporte.pdf');
        return $pdf->stream();
    }

}
