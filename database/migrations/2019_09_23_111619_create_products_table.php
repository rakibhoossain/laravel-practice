<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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

            $table->string('title',160);
            $table->integer('category_id')->unsigned();
            $table->integer('brand_id')->unsigned();
            $table->string('slug', 170)->unique();
            $table->text('description')->nullable();
            $table->integer('quantity')->default(1);
            $table->decimal('price', 20, 2);
            $table->decimal('offer_price', 20, 2);
            $table->tinyInteger('status')->default(0);
            $table->integer('admin_id')->unsigned();
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
