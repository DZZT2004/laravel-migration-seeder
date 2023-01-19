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
            $table->string('Azienda', 200);
            $table->string('Stazione di partenza', 200);
            $table->string('Stazione di arrivo', 200);
            $table->time('Orario di partenza');
            $table->time('Orario di arrivo');
            $table->string('Codice Treno', 200);
            $table->mediumInteger('Numero Carrozze', false, true);
            $table->boolean('In orario')->default(1);
            $table->boolean('Cancellato')->default(0);
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
