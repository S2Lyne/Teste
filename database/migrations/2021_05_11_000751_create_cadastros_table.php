<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadastrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastros', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->unique();
            $table->string('mail', 255)->unique();
            $table->timestamp('confirmarEmail')->nullable();
            $table->string('cpf', 11)->unique();
            $table->string('identidade', 30);
            $table->string('perfil', 30);
            $table->string('cep', 9);
            $table->string('rua', 100);
            $table->integer('numero');
            $table->string('complemento', 60);
            $table->string('cidade');
            $table->string('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cadastros');
    }
}
