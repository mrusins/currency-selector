<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLVCovidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('l_v_covids', function (Blueprint $table) {
            $table->id();
            $table->integer('ATVK');
            $table->string('ATVN');
            $table->integer('ApstiprinataCOVID19infekcija');
            $table->integer('AktivaCOVID19infekcija');
            $table->integer('14DienuKumulativaSaslimstiba');

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
        Schema::dropIfExists('l_v_covids');
    }
}
