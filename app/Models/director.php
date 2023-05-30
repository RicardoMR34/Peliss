<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class director extends Model
{
    use HasFactory;

    use HasFactory;
    public function peliculas(){
        return $this->belongsToMany(pelicula::class,'director__peliculas', 'directorID', 'peliculaID')->withPivot('id');
    }

}
