<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fokontany_id');
            $table->foreign('fokontany_id')->references('id')->on('fokontany');
            $table->foreignId('moderateur_id')->nullable()->constrained();
            $table->foreignId('guide_id')->constrained();
            $table->string('name', 255);
            $table->string('type', 255);
            $table->text('history')->nullable();
            $table->string('accessibility', 255);
            $table->boolean('confirmed')->nullable()->default(false);
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
        Schema::dropIfExists('places');
    }
}
