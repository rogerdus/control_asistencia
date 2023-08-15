<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
    * Run the migrations.
    */

    public function up(): void {
        Schema::create( 'control_asistencias', function ( Blueprint $table ) {
            $table->id('id_control');
            $table->string( 'numero_empleado' );
            $table->datetime( 'fecha' );
            $table->string( 'latitud' )
                    ->nullable();
            $table->string( 'longitud' )
                    ->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
    * Reverse the migrations.
    */

    public function down(): void {
        Schema::drop('control_asistencias');

    }
}
;
