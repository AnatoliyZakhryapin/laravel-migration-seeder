<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->tinyInteger('ha_fermate')->default(0)->after('orario_di_arrivo');
            $table->tinyInteger('ha_wifi')->default(0);
            $table->tinyInteger('ha_bar')->default(0);  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn(['ha_fermate', 'ha_wifi', 'ha_bar']);
        });
    }
};
