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
        Schema::create('ascensoes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('telefone', 11)->nullable();
            $table->string('numero_processo', 12)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ascensoes');
    }
};
