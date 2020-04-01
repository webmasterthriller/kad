<?php

use App\Db;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Client extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Client', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('gender');
            $table->string('name');
            $table->string('surname');
            $table->text('address');
            $table->string('post_code');
            $table->string('city');
            $table->string('country');
            $table->string('phone');
            $table->string('email');
            $table->timestamp('registered_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Client');
    }
}
