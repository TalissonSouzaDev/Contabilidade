<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->integer('matricula');
            $table->string('nome');
            $table->string('cpf');
            $table->string('rg');
            $table->date('dat_nasc');
            $table->string('email');
            $table->string('telefone');
            $table->double('salario',10,2);
            
            $table->date('admissao');
            $table->date('demissao')->nullable();
            

            $table->foreignId('empresa_id')
            ->constrained('empresas')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();
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
        Schema::dropIfExists('funcionarios');
    }
};
