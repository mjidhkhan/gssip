<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBackgroundColorToSipServer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sip_server', function (Blueprint $table) {
             $table->string('background-color', 150)->default('bg-teal-800')->after('server_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sip_server', function (Blueprint $table) {
            $table->dropColumn('background-color');
        });
    }
}
