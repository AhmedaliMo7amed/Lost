<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('serialNumber')->nullable();
            $table->string('type');
            $table->string('brand');
            $table->string('model');
            $table->string('color');
            $table->integer('RAM');
            $table->integer('ROM');
            $table->boolean('frontCrach_top')->nullable()->default(false);
            $table->boolean('frontCrach_center')->nullable()->default(false);
            $table->boolean('frontCrach_bottom')->nullable()->default(false);
            $table->boolean('backCrach_top')->nullable()->default(false);
            $table->boolean('backCrach_center')->nullable()->default(false);
            $table->boolean('backCrach_bottom')->nullable()->default(false);
            $table->string('devicePicture');
            $table->string('additional_info')->nullable();
            $table->tinyInteger('status')->default('0');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
