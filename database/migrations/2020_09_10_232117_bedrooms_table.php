<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BedroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bedrooms', function (Blueprint $table) {
            $table->id();
            $table->string('name', 120);
            $table->integer('count_bed');
            $table->integer('count_people');
            $table->bigInteger('city_id')->unsigned();
            $table->bigInteger('hotel_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('hotel_id')->references('id')->on('hotels');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bedrooms');
    }
}
