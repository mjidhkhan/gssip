<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_settings', function (Blueprint $table) {
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
        Schema::dropIfExists('account_settings');
    }
}
