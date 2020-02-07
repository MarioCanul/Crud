<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateDatostablas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('datostablas', function (Blueprint $table) {
            $table->unsignedBigInteger('reporte_gastos_id');

            $table->foreign('reporte_gastos_id')->references('id')->on('reporte_gastos')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('datostablas', function (Blueprint $table) {
            $table->dropColumn(['reporte_gastos_id']);
        });
    }
}
