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

            $table->string('code', 15)->nullable();
            $table->string('name', 50)->nullable();
            $table->string('description')->nullable();
            $table->string('category', 20)->nullable();
            $table->string('gender', 20)->nullable();

            $table->string('collection_season', 20)->nullable();
            $table->integer('collection_year')->nullable();

            $table->integer('stock')->nullable();
            $table->integer('price')->nullable();
            $table->integer('old_price')->nullable();

            $table->tinyInteger('has_size_1')->nullable(); // Talle XS
            $table->tinyInteger('has_size_2')->nullable(); // Talle S
            $table->tinyInteger('has_size_3')->nullable(); // Talle M
            $table->tinyInteger('has_size_4')->nullable(); // Talle L
            $table->tinyInteger('has_size_5')->nullable(); // Talle XL

            $table->integer('amount_sold')->default(0);
            $table->float('rating')->default(0);
            $table->integer('amount_rates')->default(0);

            $table->tinyInteger('show')->nullable();
            $table->tinyInteger('in_slide')->nullable();
            $table->tinyInteger('in_novelties')->nullable();
            $table->tinyInteger('in_populars')->nullable();
            $table->tinyInteger('in_discounts')->nullable();


            


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
