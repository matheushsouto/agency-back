<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->date('date_reserva');
            $table->bigInteger('bedroom_id')->unsigned();
            $table->bigInteger('hotel_id')->unsigned();
            $table->bigInteger('guest_id')->unsigned();
            $table->foreign('bedroom_id')->references('id')->on('bedrooms');
            $table->foreign('hotel_id')->references('id')->on('hotels');
            $table->foreign('guest_id')->references('id')->on('guests');
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
        Schema::drop('reservas');
    }
}
