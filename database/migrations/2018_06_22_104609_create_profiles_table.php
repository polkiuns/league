<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('primary_rol' , ['Top' , 'Jungle' , 'Support' , 'Adc' , 'Mid'])->nullable();
            $table->enum('secondary_rol' , ['Top' , 'Jungle' , 'Support' , 'Adc' , 'Mid'])->nullable();            
            $table->enum('game_mode', ['5vs5', '3vs3' , 'Solo/DuoQ' , 'FlexQ' , '3vs3Clasi' , 'Aram' , 'Clash'])->nullable();
            $table->enum('voice_chat', ['Skype', 'TS3' , 'Discord' , 'LolChat' , 'Otro'])->nullable();
            $table->unsignedInteger('province_id');
            $table->string('description')->nullable();
            $table->unsignedInteger('user_id');
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
        Schema::dropIfExists('profiles');
    }
}
