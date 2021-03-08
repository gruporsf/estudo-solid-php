<?php

require __DIR__.'/vendor/autoload.php';

use App\CarrinhoCompra;
use App\Item;
use App\Pedido;
use App\EmailService;

echo '<h1>Com SRP</h1>';

$pedido = new Pedido();

//----------------------------
$item1 = new Item();
$item1->setDescricao('Macbook i9');
$item1->setValor(5655.22);

$item2 = new Item();
$item2->setDescricao('Samsung S21');
$item2->setValor(355.66);
//----------------------------

echo '<h4>Pedido Iniciado</h4>';
echo '<pre>';
print_r($pedido);
echo '</pre>';
//----------------------------

$pedido->getCarrinhoCompra()->adicionarItem($item1);
$pedido->getCarrinhoCompra()->adicionarItem($item2);

//----------------------------

echo '<h4>Pedido com Itens</h4>';
echo '<pre>';
print_r($pedido);
echo '</pre>';
//----------------------------

echo '<h4>Itens do Carrinho</h4>';
echo '<pre>';
print_r($pedido->getCarrinhoCompra()->getItens());
echo '</pre>';
//----------------------------

echo '<h4>Valor do Pedido</h4>';
$total = 0;
foreach($pedido->getCarrinhoCompra()->getItens() as $key => $item){
    $total += $item->getValor();
}

echo '<p>Valor Total: '.$total.'</p>';
//----------------------------

echo '<h4>Carrinho está valido?</h4>';
echo '<pre>';
var_dump($pedido->getCarrinhoCompra()->validarCarrinho());
echo '</pre>';
//----------------------------

echo '<h4>Status Pedido</h4>';
echo '<pre>';
var_dump($pedido->getStatus());
echo '</pre>';
//----------------------------

echo '<h4>Confirmar Pedido</h4>';
echo '<pre>';
var_dump($pedido->confirmar());
echo '</pre>';
//----------------------------

echo '<h4>Status Pedido</h4>';
echo '<pre>';
var_dump($pedido->getStatus());
echo '</pre>';
//----------------------------

echo '<h4>E-mail</h4>';
echo '<pre>';
if($pedido->getStatus() == 'confirmado') {
    echo EmailService::dispararEmail();
}
echo '</pre>';
//----------------------------

//$carrinho1 = new CarrinhoCompra();

// print_r($carrinho1->exibirItens());

// echo '<p>Valor Total: '.$carrinho1->exibirValorTotal().'</p>';

// $carrinho1->adicionarItem('Notebook', 1550.00);
// $carrinho1->adicionarItem('HD Externo', 50.00);
// $carrinho1->adicionarItem('Monitor', 650.00);

// echo '<br/>';

// print_r($carrinho1->exibirItens());

// echo '<p>Valor Total: '.$carrinho1->exibirValorTotal().'</p>';

// echo '<p>Status: '.$carrinho1->exibirStatus().'</p>';

// if($carrinho1->confirmarPedido()){

//     echo '<p>Pedido realizado com sucesso</p>';
// }
// else{
//     echo '<p>Erro na confirmação do pedido, carrinho não possui itens</p>';
// }

// echo '<p>Status: '.$carrinho1->exibirStatus().'</p>';