<?php

require __DIR__.'/vendor/autoload.php';

use App\CarrinhoCompra;

$carrinho1 = new CarrinhoCompra();

print_r($carrinho1->exibirItens());

echo '<p>Valor Total: '.$carrinho1->exibirValorTotal().'</p>';

$carrinho1->adicionarItem('Notebook', 1550.00);
$carrinho1->adicionarItem('HD Externo', 50.00);
$carrinho1->adicionarItem('Monitor', 650.00);

echo '<br/>';

print_r($carrinho1->exibirItens());

echo '<p>Valor Total: '.$carrinho1->exibirValorTotal().'</p>';

echo '<p>Status: '.$carrinho1->exibirStatus().'</p>';

if($carrinho1->confirmarPedido()){

    echo '<p>Pedido realizado com sucesso</p>';
}
else{
    echo '<p>Erro na confirmação do pedido, carrinho não possui itens</p>';
}

echo '<p>Status: '.$carrinho1->exibirStatus().'</p>';