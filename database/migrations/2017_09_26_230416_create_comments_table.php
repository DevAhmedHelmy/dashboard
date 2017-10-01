<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('item_id');
            $table->string('comment');
            $table->boolean('status')->defualt(false);
            $table->timestamps();


            $table->foreign('user_id')
                    ->references('id')->on('members')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->foreign('item_id')
                    ->references('id')->on('items')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


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
