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
        Schema::create('overview_enfants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('Biographie');
            $table->text('diseases');
            $table->text('allergies');
            $table->text('food_habits');
            $table->text('behavior');
            $table->text('fears');
            $table->text('intrests');
            $table->foreignId('enfant_id')->constrained('enfants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('overview_enfants');
    }
};
