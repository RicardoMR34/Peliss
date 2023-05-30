<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre',20);
            $table->string('apellPat',20);
            $table->string('apellMat',20);
            $table->enum('genero',["Masculino","Femenino"]);
            $table->date('fechaNac');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('directors');
    }
};
