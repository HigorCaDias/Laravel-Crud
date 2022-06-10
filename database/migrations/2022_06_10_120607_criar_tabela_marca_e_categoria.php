<?php

use Illuminate\Database\Migrations\Migration;

use Illuminate\Database\Schema\Blueprint;
//Blueprint métodos que irão definir como as colunas dessa tabela deve se comportar, a definição de tipos, tamanhos, e controles
//de chaves primárias e estrangeiras também são de responsabilidade dessa classe.
use Illuminate\Support\Facades\Schema;
//Facade para que seja possível manipular quais ações serão executadas no banco de dados,
//no caso, para o método up() esse facade é utilizado para executar a criação de uma tabela no banco de dados e no método down()
// o mesmo é serve também para executar um drop em uma tabela existente no banco

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marca', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->increments('id');
            $table->string('marca')->nullable('true');
            $table->string('classe')->nullable('true');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExinsts('marca');
    }
};
