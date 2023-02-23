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
        Schema::create('other_employees', function (Blueprint $table) {
            //$table->id();
            $table->timestamps();
            $table->integer('ssn');
            $table->string('biography');
            $table->string('job');
            $table->integer('salary');
            $table->date('start_date');
            $table->string('family_situation');
            $table->string('cv');
            $table->foreignId('employee_id')->constrained('employees');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('other_employees');
    }
};
