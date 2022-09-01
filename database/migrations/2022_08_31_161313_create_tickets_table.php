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
            $table->string('fname', 32);
            $table->string('lname', 32);
            $table->string('email', 128);   
            $table->string('phone', 24);
            $table->string('postcode', 32);
            $table->string('company_name', 32);
            $table->string('no_store', 32);
            $table->integer('term_condition');
            $table->integer('check1');
            $table->integer('check2');
            $table->integer('check3');
            $table->text('message');
            $table->boolean('is_read')->default(0);
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
        Schema::dropIfExists('tickets');
    }
}