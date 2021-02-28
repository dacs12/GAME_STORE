<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
                $table->string('name')->nullable($value = false) -> after('id');
                $table->text('description')->nullable($value = false) -> after('name');
                $table->integer('value')->nullable($value = false) -> after('description');
                $table->string('image')->nullable()-> after('value');
                $table->enum('status', ['Activo', 'Inactivo'])->after('value');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
}
