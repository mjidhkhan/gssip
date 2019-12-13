<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_services', function (Blueprint $table) {
            $table->string('mac', 50)->primary();
            $table->string('weather_update', 50)->nullable();
            $table->string('currency_exchange', 50)->nullable();
            $table->string('frimware_upgrade', 200)->nullable();
            $table->integer('connection_type');
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
        Schema::dropIfExists('web_services');
    }
}
