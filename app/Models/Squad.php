<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Squad extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function position(){
        return $this->belongsTo(Position::class);
    }

    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }
    //Query Scopes
    public function scopePosition($query,$position_id){
        if($position_id && $position_id!='Seleccione opción'){
            return $query->where('position_id',$position_id);
        }
    }
}
