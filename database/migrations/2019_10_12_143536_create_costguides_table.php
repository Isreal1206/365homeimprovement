<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostguidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costguides', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cost_id')->unique();
            $table->string('author');
            $table->string('category');
            $table->string('title');
            $table->text('body');
            $table->string('image_file');
            $table->integer('top_article')->default(0);
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
        Schema::dropIfExists('costguides');
    }
}
