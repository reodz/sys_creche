<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->date('dob');
            $table->string('birth_place');
            //$table->string('job');
            $table->string('phone_number');
            $table->string('identite_picture')->unique();
            //$table->string('biography');
            //$table->integer('salary');
            //$table->date('start_date');
           // $table->integer('ssn');
            //$table->string('family_situation');
           // $table->string('cv');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
