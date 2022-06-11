<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDatailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_datails', function (Blueprint $table) {
            // Foreign key
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('product_id');
            $table->smallInteger('quantity');
            $table->double('price');
            $table->float('discount');
            $table->foreign('order_id')
                ->references('id')
                ->on('order')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('product_id')
                ->references('id')
                ->on('product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_datails');
    }
}
