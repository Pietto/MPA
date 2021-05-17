<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
/**
 * the migration files create the database tables.
 * this file create's the user_order table, this is a link table between the users and their orders
 * all logic of defining the table is in function up()
 * if we need to delete a table, we call to function down()
 */

class CreateUserOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_order', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
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
        Schema::dropIfExists('user_order');
    }
}