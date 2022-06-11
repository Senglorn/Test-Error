<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',50);
            $table->string('code',15);
            $table->double('price');
            $table->smallInteger('onhand');
            $table->string('imageurl',150);
            $table->string('supplier_name', 150);
            $table->unsignedSmallInteger('category_id');
            $table->foreign('category_id')
                ->references('id')
                ->on('Categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('products');
    }
}
