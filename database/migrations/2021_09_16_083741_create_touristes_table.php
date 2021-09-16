<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTouristesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('touristes', function (Blueprint $table) {
            $table->id();
            $table->string('pseudo');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('nationality');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('is_touriste')->nullable()->default(false);
            $table->rememberToken();
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
        Schema::dropIfExists('touristes');
    }
}
