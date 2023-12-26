<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->date('date');

            $table->string('from');


            $table->string('to');

//            $table->unsignedBigInteger('From_location_id');
//            $table->foreign('from_location_id')->references('id')->on('locations');
//
//            $table->unsignedBigInteger('to_location_id');
//            $table->foreign('to_location_id')->references('id')->on('locations');




            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
