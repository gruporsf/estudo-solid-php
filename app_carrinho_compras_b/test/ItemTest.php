<?php

use PHPUnit\Framework\TestCase;
use App\Item;

class ItemTest extends TestCase {

    public function testEstadoInicialItem() {

        $item = new Item();

        //asserções PHPUnit
        $this->assertEquals('', $item->getDescricao());
        $this->assertEquals(0, $item->getValor());
    }

    public function testGetSetDescricao() {

        $descricao = 'Cadeira de Plastico';

        $item = new Item();
        $item->setDescricao($descricao);

        $this->assertEquals($descricao, $item->getDescricao());
    }

    public function testItemValido() {

        $item = new Item();

        //seria submeter um item válido para o teste retornar true
        $item->setValor(55);
        $item->setDescricao('Mesa de Computador');

        $this->assertEquals(true, $item->itemValido());

        //seria submeter um item válido para o teste retornar false (descricao)
        $item->setValor(55);
        $item->setDescricao('');

        $this->assertEquals(false, $item->itemValido());

        //seria submeter um item válido para o teste retornar false (valor)
        $item->setValor(0);
        $item->setDescricao('Mesa de Computador');

        $this->assertEquals(false, $item->itemValido());

        //seria submeter dois item inválidos
        $item->setValor(0);
        $item->setDescricao('');

        $this->assertEquals(false, $item->itemValido());
    }

    /**
     *  @dataProvider dataValores
     */
    public function testGetSetValor($valor) {

        $valor = 50.65;

        $item = new Item();
        $item->setValor($valor);

        $this->assertEquals($valor, $item->getValor());
    }

    public function dataValores() {
        return [
            [150],
            [-2],
            [0]
        ];
    }
}