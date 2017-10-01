<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item_name');
            $table->text('description');
            $table->string('price');
            $table->string('country_made');
            $table->string('image');
            $table->string('status');
            $table->unsignedTinyInteger('rating');
            $table->unsignedTinyInteger('approve')->defualt(0);
            $table->integer('member_id')->unsigned();
            $table->integer('cat_id')->unsigned();
            $table->timestamps();

            
        });
        Schema::table('items', function(Blueprint $table)
        {
            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade')->onUpdate('cascade');
             $table->foreign('cat_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
