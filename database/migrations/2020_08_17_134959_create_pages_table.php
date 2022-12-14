<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            //            $table->unsignedInteger('media_file_id')->default(0);
            $table->string('page_title');
            $table->string('slug');
            $table->text('content')->nullable();
            $table->text('media')->nullable();
            $table->text('video')->nullable();
            $table->text('content_2')->nullable();
            $table->text('media_2')->nullable();
            $table->text('content_3')->nullable();
            $table->text('media_3')->nullable();
            $table->text('page_name')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
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
        Schema::dropIfExists('pages');
    }
}
