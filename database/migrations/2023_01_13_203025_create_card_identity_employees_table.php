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
        Schema::create('card_identity_employees', function (Blueprint $table) {
            //$table->id();
            $table->timestamps();
            $table->integer('number');
            $table->string('type_of_card');
            $table->string('delivery_place');
            $table->date('delivery_date');
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
        Schema::dropIfExists('card_identity_employees');
    }
};
