<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriceProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('code_product')->references('code')->on('products');
            $table->foreign('unit_id')->references('id')->on('unit_lists');
            $table->float('price', 20, 3)->nullable();
            $table->float('profit', 8, 2)->nullable();
            $table->float('selling_price', 20, 3)->nullable();
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
        Schema::dropIfExists('price_products');
    }
}
