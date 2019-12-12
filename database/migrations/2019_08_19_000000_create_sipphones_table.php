<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSipphonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        |------------------------------------------------------------------------
        | account_settings
        |------------------------------------------------------------------------
        */
        Schema::connection('mysql')->create('account_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('model_id');
            $table->string('mac', 20)->unique()->nullable();
            $table->string('account_active', 1)->nullable();
            $table->string('account_name', 150)->nullable();
            $table->string('sip_server', 50);
            $table->string('sip_user', 150)->nullable();
            $table->string('auth_id', 150)->nullable();
            $table->string('auth_password', 250)->nullable();
            $table->string('acc_name', 150)->nullable();
            $table->string('voicemail_id', 30)->nullable();
            $table->string('cf_created', 1)->nullable();
            $table->timestamp('date_created');
            $table->string('flag', 1)->default(0);
           
        });

        /*
        |------------------------------------------------------------------------
        | advance_settings
        |------------------------------------------------------------------------
        */
        Schema::connection('mysql')->create('advance_settings', function (Blueprint $table) {
            $table->string('mac', 20)->primary();
            $table->string('vlan_tag', 50)->nullable();
            $table->string('priority_tag', 50)->nullable();
            $table->string('pc_vlan_tag', 50)->nullable();
            $table->string('pc_priority_tag', 50)->nullable();
            $table->string('host_name', 50);
            $table->integer('bg_label')->default(0);
            $table->integer('long_label')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql')->dropIfExists('account_settings');
        Schema::connection('mysql')->dropIfExists('advance_settings');
    }
}
