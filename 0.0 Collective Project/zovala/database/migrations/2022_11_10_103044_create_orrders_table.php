<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orrders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('customer');
            $table->unsignedInteger('quantity');
            $table->unsignedFloat('price');
            $table->dateTime('recieved')->nullable();
            $table->dateTime('completed')->nullable();
            $table->unsignedFloat('amount_paid')->nullable();
            $table->unsignedInteger('tailor');
            $table->dateTime('prefered_date');
            $table->string('occasion',200)->nullable();
            $table->text('details');
            $table->timestamps();

            //fk
            $table->foreign('customer')->references('id')->on('users');
            $table->foreign('tailor')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orrders');
    }
}
