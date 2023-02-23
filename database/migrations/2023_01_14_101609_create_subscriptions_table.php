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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('enfant');
            $table->string('service');
            $table->date('start_date');
            $table->date('expire_date');
            $table->integer('total');
            $table->integer('discount');
            $table->text('notes');
            $table->foreignId('enfant_id')->constrained('enfants');
            $table->foreignId('relative_id')->constrained('relatives');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscriptions');
    }
};
