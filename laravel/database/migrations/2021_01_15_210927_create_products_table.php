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
            $table->id();
            $table->string('name_ar');
            $table->string('name_en');
            $table->string('description_ar');
            $table->string('description_en');
            $table->integer('quantity');
            $table->decimal('price,7,2');//999,99.99 (7 degites have 2 after dots)
            $table->text('main_image');
            $table->double('rating');
            $table->foreignid('brand_id')->references('id')->on('brands')->onUpdate('cascade')->onDelet('restrict');
            $table->foreignid('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelet('restrict');
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
