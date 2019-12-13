<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvanceSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advance_settings', function (Blueprint $table) {
            $table->string('mac', 50)->primary();
            $table->string('vlan_tag', 50)->nullable();
            $table->string('priority_tag', 50)->nullable();
            $table->string('pc_vlan_tag', 50)->nullable();
            $table->string('pc_priority_tag', 50)->nullable();
            $table->string('host_name', 50);
            $table->integer('bg_label')->default(0);
            $table->integer('long_label')->default(0);
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
        Schema::dropIfExists('advance_settings');
    }
}
