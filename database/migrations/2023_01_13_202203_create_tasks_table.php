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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('task_name');
            $table->date('date');
            $table->string('status');
            $table->string('priority');
            $table->string('tags');
            $table->string('notes');
            $table->string('children');
            $table->string('employees');
            $table->foreignId('enfant_id')->constrained('enfants');
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
        Schema::dropIfExists('tasks');
    }
};
