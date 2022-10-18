<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansManagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans_managements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('properties_id');
            $table->string('plan_name');
            $table->string('plan_desc')->nullable();
            $table->foreign('properties_id')->references('id')->on('plans_properties');
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
        Schema::dropIfExists('plans_managements');
    }
}
