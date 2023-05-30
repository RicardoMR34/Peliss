<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actor extends Model
{
    use HasFactory;
    public function peliculas(){
        return $this->belongsToMany(pelicula::class,'actor__peliculas', 'actorID', 'peliculaID')->withPivot('id');
    }
}
