<?php

namespace Tests\Unit;

use App\Models\Tarefa;
use Tests\TestCase;

class TarefaTest extends TestCase
{
    public function test_criar_tarefa_de_teste(){
        $tarefa = Tarefa::create([
            'titulo'=> 'tarefa de teste',
            'descricao'=> 'criando uma tarefa de teste',
            'concluida'=> false
        ]);

        $this->assertEquals('tarefa de teste', $tarefa->titulo);
        $this->assertEquals('criando uma tarefa de teste', $tarefa->descricao);
        $this->assertFalse($tarefa->concluida);
    }
}
