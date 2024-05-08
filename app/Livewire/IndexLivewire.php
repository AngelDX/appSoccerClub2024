<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class IndexLivewire extends Component{

    public function render(){
        $noticias=Post::paginate(6);
        return view('livewire.index-livewire',compact('noticias'));
    }
}
