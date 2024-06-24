<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Executa as migrações.
     */
    public function up(): void
    {
        Schema::create('carros', function (Blueprint $table) {
            $table->id(); // Cria um campo 'id' autoincrementável para identificar cada registro na tabela
            $table->string("nome", 50); // Cria um campo 'nome' do tipo string com no máximo 50 caracteres
            $table->string("marca", 50); // Cria um campo 'marca' do tipo string com no máximo 50 caracteres
            $table->string("modelo", 50); // Cria um campo 'modelo' do tipo string com no máximo 50 caracteres
            $table->string("placa", 50); // Cria um campo 'placa' do tipo string com no máximo 50 caracteres
            $table->integer("ano"); // Cria um campo 'ano' do tipo inteiro para armazenar o ano do carro
            $table->integer("km"); // Cria um campo 'km' do tipo inteiro para armazenar a quilometragem do carro
            $table->string("cor", 50); // Cria um campo 'cor' do tipo string com no máximo 50 caracteres para armazenar a cor do carro
            $table->timestamps(); // Cria automaticamente os campos 'created_at' e 'updated_at' para registrar a data e hora de criação e atualização de cada registro
        });
    }

    /**
     * Reverte as migrações.
     */
    public function down(): void
    {
        Schema::dropIfExists('carros'); // Remove a tabela 'carros' se ela existir, revertendo as migrações
    }
};
