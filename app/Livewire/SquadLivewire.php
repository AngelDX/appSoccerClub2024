<?php

namespace App\Livewire;

use App\Models\Squad;
use Livewire\Component;

class SquadLivewire extends Component{

    public function render(){
        $squads=Squad::all();
        return view('livewire.squad-livewire',compact('squads'));
    }
}
