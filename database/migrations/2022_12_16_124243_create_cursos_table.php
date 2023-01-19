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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ascensao_id')->nullable()->constrained('ascensoes')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('nome');
            $table->string('area');
            $table->string('carga_horaria');
            $table->string('instituicao');
            $table->date('data_inicio');
            $table->date('data_fim');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
};
