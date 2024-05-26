<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ManagerForm extends Form{
    #[Rule('required')]
    public $fullname,$position,$dni,$birthdate,$email,$cellphone,$season_id;
}
