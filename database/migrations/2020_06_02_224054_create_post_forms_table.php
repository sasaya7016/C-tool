<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_forms', function (Blueprint $table) {
            $table->increments('article_id');
            $table->date('post_date'); 
            $table->text('title');
            $table->text('image');
            // $table->text('category');
            $table->text('keyword1');
            $table->text('keyword2');
            $table->text('content');
            $table->softDeletes(); 
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
        Schema::dropIfExists('post_forms');
    }
}
