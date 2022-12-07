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
        Schema::create('contas', function (Blueprint $table) {
            $table->id();

            $table->string('login');
            $table->string('senha');
            

            $table->foreignId('empresa_id')
            ->constrained('empresas')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();

            $table->foreignId('instituicao_id')
            ->constrained('instituicaos')
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
        Schema::dropIfExists('contas');
    }
};
