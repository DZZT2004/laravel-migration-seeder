<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 200);
            $table->string('stazione_di_partenza', 200);
            $table->string('stazione_di_arrivo', 200);
            $table->time('orario_di_partenza');
            $table->time('orario_di_arrivo');
            $table->string('codice_Treno', 200);
            $table->integer('numero_Carrozze', false, true);
            $table->boolean('in_orario')->default(1);
            $table->boolean('cancellato')->default(0);
            $table->date('data_partenza');
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
        Schema::dropIfExists('trains');
    }
}
