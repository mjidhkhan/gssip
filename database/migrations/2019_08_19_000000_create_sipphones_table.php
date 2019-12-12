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
            $table->string('mac', 50)->unique()->nullable();
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
            $table->string('mac', 50)->primary();
            $table->string('vlan_tag', 50)->nullable();
            $table->string('priority_tag', 50)->nullable();
            $table->string('pc_vlan_tag', 50)->nullable();
            $table->string('pc_priority_tag', 50)->nullable();
            $table->string('host_name', 50);
            $table->integer('bg_label')->default(0);
            $table->integer('long_label')->default(0);
        });


        /*
        |------------------------------------------------------------------------
        | audio_settings
        |------------------------------------------------------------------------
        */
        Schema::connection('mysql')->create('audio_settings', function (Blueprint $table) {
            $table->string('mac', 50)->primary();
            $table->string('fcodec', 50);
            $table->string('scodec', 50);
            $table->string('tcodec', 50);
            $table->integer('handsetgain')->default(0);
        });


        /*
        |------------------------------------------------------------------------
        | device_admin
        |------------------------------------------------------------------------
        */
        Schema::connection('mysql')->create('device_admin', function (Blueprint $table) {
            $table->string('mac', 50)->primary();
            $table->string('admin_pass', 200);
        });


        /*
        |------------------------------------------------------------------------
        | feature_settings
        |------------------------------------------------------------------------
        */
        Schema::connection('mysql')->create('feature_settings', function (Blueprint $table) {
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
        });


        /*
        |------------------------------------------------------------------------
        | mpk_details
        |------------------------------------------------------------------------
        */
        Schema::connection('mysql')->create('mpk_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mac', 50);
            $table->string('mode', 50);
            $table->string('account', 50)->nullable();
            $table->string('mpk_description', 150)->nullable();
            $table->string('mpk_value', 50)->nullable();
        });


        /*
        |------------------------------------------------------------------------
        | phone_macs
        |------------------------------------------------------------------------
        */
        Schema::connection('mysql')->create('phone_macs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('model_id');
            $table->string('vlan_tag', 50);
        });


        /*
        |------------------------------------------------------------------------
        | phone_models
        |------------------------------------------------------------------------
        */
        Schema::connection('mysql')->create('phone_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('phone_name', 50);
            $table->string('mp_keys', 1);
        });


        /*
        |------------------------------------------------------------------------
        | sip_server
        |------------------------------------------------------------------------
        */
        Schema::connection('mysql')->create('sip_server', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sip_ipIndex', 50)->nullable();
            $table->string('server_type', 50)->nullable();
        });


        /*
        |------------------------------------------------------------------------
        | web_services
        |------------------------------------------------------------------------
        */
        Schema::connection('mysql')->create('web_services', function (Blueprint $table) {
            $table->string('mac', 50)->primary();
            $table->string('weather_update', 50)->nullable();
            $table->string('currency_exchange', 50)->nullable();
            $table->string('frimware_upgrade', 200)->nullable();
            $table->integer('connection_type');
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
        Schema::connection('mysql')->dropIfExists('device_settings');
        Schema::connection('mysql')->dropIfExists('device_admin');
        Schema::connection('mysql')->dropIfExists('feature_settings');
        Schema::connection('mysql')->dropIfExists('mpk_details');
        Schema::connection('mysql')->dropIfExists('phone_macs');
        Schema::connection('mysql')->dropIfExists('phone_models');
        Schema::connection('mysql')->dropIfExists('sip_server');
        Schema::connection('mysql')->dropIfExists('web_services');
        
    }
}
