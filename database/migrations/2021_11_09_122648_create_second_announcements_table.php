<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecondAnnouncementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('second_announcements', function (Blueprint $table) {
            $table->id();
            $table->string('category')->nullable();
            $table->string('volume')->nullable();
            $table->longText('list')->nullable();
            $table->string('individual_goods')->nullable();
            $table->string('place_type')->nullable();
            $table->string('floor')->nullable();
            $table->string('ascenseur')->nullable();
            $table->string('access')->nullable();
            $table->string('services')->nullable();
            $table->string('help')->nullable();
            $table->string('article_name')->nullable();
            $table->string('height')->nullable();
            $table->string('width')->nullable();
            $table->string('length')->nullable();
            $table->string('weight')->nullable();
            $table->string('quantity')->nullable();
            $table->string('size')->nullable();
            $table->string('load_unload')->nullable();
            $table->string('need_tailgate')->nullable();
            $table->string('need_truck')->nullable();
            $table->string('brand_model')->nullable();
            $table->string('rolling')->nullable();

            // common field 
            $table->integer('user_id');
            $table->string('depart')->nullable();
            $table->string('arrivee')->nullable();
            $table->string('loading_date')->nullable();
            $table->string('delevary_date')->nullable(); 
            $table->longText('informations')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('country_code')->nullable();
            $table->string('phone')->nullable();
            $table->string('pseudo')->nullable();
            $table->string('image')->nullable();
            $table->string('password')->nullable();
            $table->string('terms')->nullable();
            $table->enum('hired', ['yes', 'no'])->default('no');
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
        Schema::dropIfExists('second_announcements');
    }
}
