<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class SquadForm extends Form
{
    #[Rule('required')]
    public $fullname,$birthdate,$number,$type,$position_id;

    // public function mount($id){//para el caso del fk
    //     $this->position_id=$id;
    // }
}
