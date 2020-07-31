<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('slug')->nullable();
            $table->unsignedBigInteger('category_id')->index();

            $table->text('desc')->nullable();
            $table->longText('content')->nullable();
            $table->string('image')->nullable();
            $table->boolean('status')->default(true);
            $table->unsignedBigInteger('views')->default(0);
            $table->boolean('index_slide')->default(false);

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
        Schema::dropIfExists('posts');
    }
}
