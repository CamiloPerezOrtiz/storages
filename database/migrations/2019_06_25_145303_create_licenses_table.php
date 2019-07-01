<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licenses', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type',['DEMO','SALES']);
            $table->enum('time',['15 days','1 month','2 month','3 month','6 month','12 month','24 month','36 month']);
            $table->boolean('status');
            $table->integer('total_space');
            $table->integer('total_license');
            $table->integer('free_space');
            $table->integer('free_license');
            $table->String('serial');
            $table->dateTime('end_date');
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
        Schema::dropIfExists('licenses');
    }
}
