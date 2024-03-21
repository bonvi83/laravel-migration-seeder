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
        // nella tabella vado ad inserire tutti i miei "parametri", do anche una lunghezza massima ai caratteri da poter inserire nella stringa
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 30);
            $table->string('stazione_di_partenza', 30);
            $table->string('stazione_di_arrivo', 30);
            $table->time('orario_di_partenza');
            $table->time('orario_di_arrivo');
            $table->string('numero_di_fermate', 30);
            $table->string('codice_treno', 30);
            $table->string('numero_di_carrozze', 30);
            $table->string('prezzo_del_biglietto', 30);
            $table->string('posto_a_sedere', 30);
            $table->boolean('in_orario');
            $table->boolean('cancellato');
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
};
