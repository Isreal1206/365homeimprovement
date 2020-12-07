<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarketersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marketers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('marketer_id')->unique();
            $table->string('fullnames');
            $table->string('email')->unique();
            $table->string('company_name')->unique();
            $table->string('category');
            $table->string('address');
            $table->string('mobile_no');
            $table->string('website')->nullable()->unique();
            $table->string('status')->default('unapproved');
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
        Schema::dropIfExists('marketers');
    }
}
