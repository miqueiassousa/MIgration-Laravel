<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    // Sobe a migration
    public function up()
    {
        // Carrega - Blueprint: receita da tabela ja vem preenchida
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Já configurar, primay key auto_increment
            $table->string('name');
            $table->string('email')->unique(); // Não pode repetir
            $table->timestamp('email_verified_at')->nullable(); //pode ser nulo
            $table->string('password');
            $table->rememberToken(); //Permite que o usuario a caixa "Permitri salva neste computador
            $table->timestamps(); // Cria data de registro e atualização do registro
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // A contrario de up
        // Se exisitr a tabela usuario eu quero excluir
        Schema::dropIfExists('users');
    }
}
