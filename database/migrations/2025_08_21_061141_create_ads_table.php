<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('client_name')->nullable();
            $table->string('image')->nullable();
            $table->string('image_size')->nullable();
            $table->string('link')->nullable();
            $table->enum('open_in_new_tab',['0','1'])->default('0');
            $table->enum('ad_position', [
                'after_hot_deals',
                'after_categories',
                'gone_in_seconds_sidebar',
                'after_brands'
            ]);
            $table->enum('ad_layout', ['single', 'two_column', 'sidebar_stack']);
            $table->integer('ordering')->default(1);
            $table->enum('status',['1','0'])->default('1');
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->timestamps();
            $table->index(['ad_position', 'status']);
            $table->index(['start_date', 'end_date']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ads');
    }
}
