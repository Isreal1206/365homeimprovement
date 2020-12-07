<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contractors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('contractor_id')->unique();
            $table->string('fullnames');
            $table->string('email')->unique();
            $table->string('company_name')->unique();
            $table->string('job_category');
            $table->string('mobile_no');
            $table->string('address');
            $table->string('state');
            $table->string('lga');
            $table->text('description')->nullable();
            $table->string('banner')->unique();
            $table->string('plan')->default('basic');
            $table->string('status')->default('disengaged');
            $table->string('url')->nullable()->unique(); 
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
        Schema::dropIfExists('contractors');
    }
}
