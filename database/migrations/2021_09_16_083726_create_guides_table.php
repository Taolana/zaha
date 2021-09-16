<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guides', function (Blueprint $table) {
            $table->id();
            $table->string('pseudo');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_number');
            $table->boolean('is_local_guide')->default(false);
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('is_guide')->nullable()->default(false);
            $table->string('profile_picture', 255)->nullable();
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
        Schema::dropIfExists('guides');
    }
}
