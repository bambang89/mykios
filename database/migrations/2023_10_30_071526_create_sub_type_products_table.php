<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubTypeProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_type_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('type_products');

            $table->char('sub_type', 100)->nullable()->comment('nama type ex: minuman,makanan,dll');
            $table->string('desc')->nullable();
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
        Schema::dropIfExists('sub_type_products');
    }
}
