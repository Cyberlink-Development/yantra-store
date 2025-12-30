<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId("shipping_media_id")
                  ->constrained("shipping_media")
                  ->onDelete("cascade")
                  ->onUpdate("cascade");
            $table->foreignId("weight_id")
                  ->constrained("weights")
                  ->onDelete("cascade")
                  ->onUpdate("cascade");
            $table->float("price");
            $table->boolean("status")->default(1);
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
        Schema::dropIfExists('shipping_prices');
    }
}
