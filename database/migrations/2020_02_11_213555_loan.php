<?php

use App\Db;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Loan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Loan', function (Blueprint $table) {
            $table->temporary();
            $table->bigIncrements('id');
            $table->bigInteger('client');
            $table->string('type');
            $table->integer('amount');
            $table->integer('period');//in month
            $table->double('rate');
            $table->double('payment');
            $table->boolean('visa');
            $table->timestamp('visa_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loan');
    }
}
