<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcel_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('track_id');
            $table->bigInteger('location_id')->default(1);
            $table->bigInteger('shop_id');
            $table->string('cous_name');
            $table->string('cous_phone');
            $table->text('cous_address');
            $table->string('invoice_id');
            $table->string('parcel_weight');
            $table->string('collect_amount');
            $table->string('pro_sell_price');
            $table->text('instruction');
            $table->integer('status')->default(1);
            $table->integer('approve')->default(0);
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
        Schema::dropIfExists('parcel_requests');
    }
}
