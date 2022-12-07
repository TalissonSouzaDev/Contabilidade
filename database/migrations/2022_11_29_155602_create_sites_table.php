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
        Schema::create('sites', function (Blueprint $table) {
            $table->id();

            $table->string('nome');
            $table->string('url');
            $table->string('img')->nullable();

            $table->foreignId('instituicao_id')
            ->constrained('instituicaos')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();

            $table->foreignId('user_id')
            ->constrained('Users')
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
        Schema::dropIfExists('sites');
    }
};
