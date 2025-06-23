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
        Schema::create('autors', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nome',100);
            $table->string('Apelido',100);
            $table->string('cidade',50);
            $table->string('bairro',50);
            $table->string('cep',25);
            $table->string('email',100);
            $table->string('telefone',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autors');
    }
};
