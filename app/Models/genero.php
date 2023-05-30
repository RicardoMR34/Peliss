<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genero extends Model
{
    use HasFactory;
    public function peliculas(){
        return $this->belongsToMany(pelicula::class,'genero__peliculas', 'generoID', 'peliculaID')->withPivot('id');
    }
}
