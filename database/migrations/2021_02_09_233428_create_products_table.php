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
            $table->string('name', 50 )->nullable($value = false);
            $table->text('description')->nullable($value = false);
            $table->Double('value', 15,2)->nullable($value = false);
            $table->string('image', 50 )->nullable();
            $table->enum('type', ['Físico', 'Digital']);
            $table->string('brand', 40);
            $table->enum('status', ['Activo', 'Inactivo']);
            $table->bigInteger('category_id');
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
