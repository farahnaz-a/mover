<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('model_name')->nullable();
            $table->string('animalName')->nullable();
            $table->string('animalBreed')->nullable();
            $table->string('width')->nullable();
            $table->string('specialNeeds')->nullable();
            $table->string('vaccinations')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('length')->nullable();
            //Common Flieds
            $table->integer('user_id');
            $table->string('loading_address')->nullable();
            $table->string('loading_start')->nullable();
            $table->string('loading_end')->nullable();
            $table->string('loading_time_slot')->nullable();
            $table->string('loading_house')->nullable();
            $table->string('loading_floor')->nullable();
            $table->string('loading_elevator')->nullable();
            $table->string('loading_lift')->nullable();
            $table->string('information')->nullable();

            $table->string('delivery_address')->nullable();
            $table->string('delivery_start')->nullable();
            $table->string('delivery_end')->nullable();
            $table->string('delivery_time_slot')->nullable();
            $table->string('delivery_house')->nullable();
            $table->string('delivery_floor')->nullable();
            $table->string('delivery_elevator')->nullable();
            $table->string('delivery_lift')->nullable();
            $table->string('image')->nullable();
            $table->string('offers')->nullable();
            $table->string('terms')->nullable();
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
        Schema::dropIfExists('animals');
    }
}
