<?php

namespace App\Livewire;

use Livewire\Component;

class Noticia extends Component
{
    public $noticia;

    public function render()
    {
        return view('livewire.noticia');
    }
}
