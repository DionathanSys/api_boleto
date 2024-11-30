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
        Schema::create('contas_bancaria', function (Blueprint $table) {
            $table->id();
            $table->foreignId('emitente_id')->constrained('emitentes');
            $table->string('agencia');
            $table->string('conta');
            $table->string('carteira');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contas_bancaria');
    }
};
