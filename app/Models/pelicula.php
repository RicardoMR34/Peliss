<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelicula extends Model
{
    use HasFactory;
    public function companias(){
        return $this->belongsTo(compania::class,'companiaID');
    }

    public function actors(){
        return $this->belongsToMany(actor::class,'actor__peliculas', 'peliculaID', 'actorID')->withPivot('id');
    }

    public function directors(){
        return $this->belongsToMany(director::class,'director__peliculas', 'peliculaID', 'directorID')->withPivot('id');
    }

    public function generos(){
        return $this->belongsToMany(genero::class,'genero__peliculas', 'peliculaID', 'generoID')->withPivot('id');
    }

}
