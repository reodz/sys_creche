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
        Schema::create('address_erawdhas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('country');
            $table->string('wilaya');
            $table->string('city');
            $table->string('street');
            $table->integer('house_number');
            $table->string('zipcode');
            $table->foreignId('basic_info_id')->constrained('basic_infos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address_erawdhas');
    }
};
