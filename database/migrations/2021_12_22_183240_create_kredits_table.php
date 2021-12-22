<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kredits', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('naziv');
            $table->decimal ('minimun_primanja', $precision = 8, $scale = 2);
            $table->decimal ('minimum_zaposlen', $precision = 8, $scale = 2);
            $table->decimal ('minimalni_iznos', $precision = 8, $scale = 2);
            $table->decimal ('maksimalni_iznos', $precision = 8, $scale = 2);
            $table->bigInteger('minimalni_period');
            $table->bigInteger('maksimalni_period');
            $table->decimal ('kamatna_stopa', $precision = 6, $scale = 4);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kredits');
    }
}
