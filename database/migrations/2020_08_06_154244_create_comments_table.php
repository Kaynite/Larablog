<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('comment_body');
            $table->string('comment_by');
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->unsignedBigInteger('post_id');
            $table->timestamps();
            $table->boolean('approved')->default(0);
            $table->timestamp('deleted_at')->nullable();
            $table->foreign('post_id')->references('id')->on('posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
