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
            $table->foreignId('tipo_ascensao_id')->after('user_id')->nullable()->constrained('tipos_ascensoes')->cascadeOnUpdate();
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
            $table->dropColumn('tipo_ascensao_id');
        });
    }
};
