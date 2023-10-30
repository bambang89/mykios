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
            $table->string('code', 100)->nullable();
            $table->foreign('type_id')->references('code')->on('type_products');
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->string('name')->nullable();
            $table->string('barcode')->nullable();
            $table->string('desc')->nullable();
            $table->integer('status', 5)->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('products');
    }
}
