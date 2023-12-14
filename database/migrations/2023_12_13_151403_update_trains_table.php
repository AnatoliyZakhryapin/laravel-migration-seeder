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
            $table->boolean('ha_fermate')->default(0)->after('orario_di_arrivo');
            $table->boolean('ha_wifi')->default(0);
            $table->boolean('ha_bar')->default(0);
            $table->dateTime('orario_di_partenza', $precision = 0)->change();
            $table->dateTime('orario_di_arrivo', $precision = 0)->change();  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn(['ha_fermate', 'ha_wifi', 'ha_bar', 'orario_di_partenza', 'orario_di_arrivo']);
        });
    }
};
