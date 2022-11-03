<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->BigInteger('people_id')->unsigned();
            $table->foreign('people_id')->references('id')->on('people');
            $table->BigInteger('building_id')->unsigned();
            $table->foreign('building_id')->references('id')->on('buildings');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('patronymic')->nullable();
            $table->integer('ls');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('title');
            $table->text('message');
            $table->integer('source');
            $table->integer('type');
            $table->BigInteger('status_id')->unsigned();
            $table->foreign('status_id')->references('id')->on('statuses');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
