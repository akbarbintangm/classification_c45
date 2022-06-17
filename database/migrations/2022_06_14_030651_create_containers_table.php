<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('containers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('container_name');
            $table->string('container_type');
            $table->string('type_name');
            $table->string('inside_measurement');
            $table->string('outside_measurement');
            $table->string('roof_opening');
            $table->string('door_open');
            $table->string('swing_opening');
            $table->string('load_capacity');
            $table->string('container_weight');
            $table->string('max_load_weight');
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
        Schema::dropIfExists('containers');
    }
};
