<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admit', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patientId');
            $table->foreign('patientId')->references('id')->on('patient')->onDelete('cascade');
            $table->date('admitDate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admit');
    }
}
