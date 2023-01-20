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
        Schema::table('ascensoes', function(Blueprint $table) {
            $table->foreignId('intersticio_id')->after('tipo_ascensao_id')->constrained('intersticios')->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ascensoes', function(Blueprint $table) {
            $table->dropColumn('intersticio_id');
        });
    }
};
