<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnMinQuantityTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Acessar a tabela products e nela criar uma coluna "min_quanty"
        Schema::table('products', function (Blueprint $table) {
            $table->integer('teste')
                ->default(1) // VAlor default
                ->after('quantity'); //Onde o campo vai ficar
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::drop('products', function(Blueprint $table){
            $table->integer('teste')
                ->default(1)
                ->after('quantity');
        });
    }
}
