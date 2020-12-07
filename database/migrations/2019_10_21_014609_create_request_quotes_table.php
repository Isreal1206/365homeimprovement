<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_quotes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('homeowner_id');
            $table->string('email');
            $table->string('category');
            $table->string('state');
            $table->string('lga');
            $table->string('start_work');
            $table->string('property_type');
            $table->string('work_type');
            $table->string('budget');
            $table->string('job_status')->nullable();
            $table->string('property_relation');
            $table->text('description')->nullable();
            $table->string('image_file')->nullable();
            $table->integer('bid_no');
            $table->string('contact_time');
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
        Schema::dropIfExists('request_quotes');
    }
}
