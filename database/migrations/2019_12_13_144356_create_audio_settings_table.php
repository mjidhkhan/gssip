<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAudioSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audio_settings', function (Blueprint $table) {
            $table->string('mac', 50)->primary();
            $table->string('fcodec', 50);
            $table->string('scodec', 50);
            $table->string('tcodec', 50);
            $table->integer('handsetgain')->default(0);
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
        Schema::dropIfExists('audio_settings');
    }
}
