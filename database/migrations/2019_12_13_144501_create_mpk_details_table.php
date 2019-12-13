<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMpkDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mpk_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mac', 50);
            $table->string('mode', 50);
            $table->string('account', 50)->nullable();
            $table->string('mpk_description', 150)->nullable();
            $table->string('mpk_value', 50)->nullable();
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
        Schema::dropIfExists('mpk_details');
    }
}
