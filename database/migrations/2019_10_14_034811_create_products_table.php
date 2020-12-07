<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('marketer_id');
            $table->string('status')->default('pending');
            $table->string('name');
            $table->string('category');
            $table->string('subcategory');
            $table->text('description');
            $table->string('price')->nullable();
            $table->string('manufacturer')->nullable();
            $table->string('policy')->nullable();
            $table->integer('available')->nullable();
            $table->string('image_file');
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
        Schema::dropIfExists('products');
    }
}
