<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHouseholdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('household', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->decimal('coordinatesX',12,10);
            $table->decimal('coordinatesY',12,10);
            $table ->string('imagePathMain');
            $table->string('imagePathThumbnail');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('household');
    }
}
