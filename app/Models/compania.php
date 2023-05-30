<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compania extends Model
{
    use HasFactory;

    public function peliculas(){
        return $this->HasMany(pelicula::class,'id');
    }

}
