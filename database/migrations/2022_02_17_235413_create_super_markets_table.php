<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuperMarketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('super_markets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_group_id');
            $table->string('contact');
            $table->string('location');
            $table->string('description');
            $table->string('price');
            $table->string('photo');
            $table->string('discount')->nullable();
            $table->enum('status',['active','out of stock'])->default('active');
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
        Schema::dropIfExists('super_markets');
    }
}
