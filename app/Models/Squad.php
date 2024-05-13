<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Squad extends Model
{
    use HasFactory;
    public function position(){
        return $this->belongsTo(Position::class);
    }

    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }
}
