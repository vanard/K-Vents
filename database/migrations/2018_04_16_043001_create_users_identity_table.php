<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersIdentityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_identity', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->string('name');
            $table->string('address');
            $table->string('phone');
            $table->string('social');
            $table->string('ktp');
            $table->timestamps();

            $table->foreign('id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_identity');
    }
}
