<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmovisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filmovis', function (Blueprint $table) {
            $table->tinyIncrements ('film_id'); 
            $table->string('naslov', 99)->index();
            $table->tinyInteger('zanr_id');
            $table->year('godina');
            $table->smallInteger('trajanje')->unsigned();
            $table->binary('slika')->nullable();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filmovis');
    }
}
