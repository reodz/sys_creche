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
        Schema::create('social_m_erawdhas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('web_site');
            $table->string('fb_page');
            $table->string('twiter_account');
            $table->string('insta_account');
            $table->string('youtube_channel');
            $table->string('tiktok_account');
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
        Schema::dropIfExists('social_m_erawdhas');
    }
};
