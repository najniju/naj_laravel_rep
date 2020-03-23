<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->bigIncrements('staff_id');
            $table->string('staff_name');
            $table->string('staff_place');
            $table->bigInteger('staff_contact')->unique();
            $table->string('staff_dept');
            $table->bigInteger('dept_id')->unsigned()->nullable();
            $table->foreign('dept_id')->references('id')->on('dept_table');
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
        Schema::dropIfExists('staff');
    }
}
