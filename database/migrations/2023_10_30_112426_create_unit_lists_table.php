<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('unit', 100)->nullable()->comment('satuan dari jenis barang ex: box, picies, pack, dll');
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
        Schema::dropIfExists('unit_lists');
    }
}
