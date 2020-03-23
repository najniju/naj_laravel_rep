<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminregiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminregi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fk_id')->unsigned()->nullable();
            $table->foreign('fk_id')->references('staff_id')->on('staff');
            $table->string('user_id');
            $table->string('password');
            $table->string('status');
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
        Schema::dropIfExists('adminregi');
    }
}
