<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cous_id');
            $table->string('shop_name');
            $table->string('shop_address');
            $table->string('shop_email')->unique();
            $table->string('pick_address');
            $table->string('pick_area_id');
            $table->string('pick_phone');
            $table->string('pick_type_id');
            $table->string('deli_zone_id');
            $table->string('ref_id')->nullable();
            $table->string('coup_code')->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('shops');
    }
}
