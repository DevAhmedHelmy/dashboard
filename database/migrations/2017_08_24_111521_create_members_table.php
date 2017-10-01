<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('full_name');
             $table->string('image');
            $table->unsignedTinyInteger('group_id')->defualt(0);
            $table->unsignedTinyInteger('trust_status')->defualt(0);
            $table->unsignedTinyInteger('reg_status')->defualt(0);
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
        Schema::dropIfExists('members');
    }
}
