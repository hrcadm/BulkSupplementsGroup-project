<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductSubcategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_subcategory', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id')->nullable()->default(NULL);
            $table->foreign('product_id')->references('id')->on('products');
            $table->unsignedInteger('subcategory_id')->nullable()->default(NULL);
            $table->foreign('subcategory_id')->references('id')->on('product_sub_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_subcategory');
    }
}
