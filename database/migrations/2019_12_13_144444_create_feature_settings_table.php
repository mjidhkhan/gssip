<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeatureSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature_settings', function (Blueprint $table) {
            $table->string('mac', 50)->primary();
            $table->string('a_transfer', 50)->nullable();
            $table->string('enable_cf', 50)->nullable();
            $table->string('fs_date', 10)->nullable();
            $table->string('rc_dnd', 50)->nullable();
            $table->string('disable_call_waiting', 1)->nullable();
            $table->string('dnd_on')->nullable();
            $table->string('dnd_off')->nullable();
            $table->integer('VPK_transfer');
            $table->string('cf_on', 50)->nullable();
            $table->string('cf_off', 50)->nullable();
            $table->string('incoming_call_popup', 50)->default(0);
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
        Schema::dropIfExists('feature_settings');
    }
}
