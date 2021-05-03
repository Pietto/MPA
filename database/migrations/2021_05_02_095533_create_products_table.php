<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('variant');
            $table->integer('topspeed');
            $table->integer('weight');
            $table->string('voltage');
            $table->string('traction');
            $table->string('system');
            $table->integer('length');
            $table->integer('coaches');
            $table->string('price');
            $table->string('description');
            $table->integer('seats');
            $table->string('manufacturer');
            $table->string('fullname');
            $table->string('coupling');
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
