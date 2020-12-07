<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('trainer_id')->unique();
            $table->string('title');
            $table->string('fullnames');
            $table->string('email', 100)->unique();
            $table->string('organization')->unique();
            $table->string('job_title');
            $table->text('description');
            $table->string('image_file')->unique();
            $table->string('mobile_no');
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->string('post_code')->nullable();
            $table->string('fax')->nullable();
            $table->string('url')->nullable()->unique();
            $table->string('price_range');
            $table->string('language');
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
        Schema::dropIfExists('trainers');
    }
}
