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
        Schema::create('intersticios', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('ano')->unique();
            $table->date('intersticio_inicio');
            $table->date('intersticio_fim');
            $table->date('periodo_inicio');
            $table->date('periodo_fim');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('intersticios');
    }
};
