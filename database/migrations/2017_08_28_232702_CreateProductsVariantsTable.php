<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsVariantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_variants', function (Blueprint $table) {
            $table->increments('id');
            $table->int('product_id');
            $table->string('variant1_type');
            $table->string('variant1_value');
            $table->string('variant2_type');
            $table->string('variant2_value');
            $table->string('variant3_type');
            $table->string('variant3_value');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('products_variants');
    }
}
