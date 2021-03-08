<?php

require __DIR__.'/vendor/autoload.php';

use App\Poligono;

use App\poligonos\Retangulo;
use App\poligonos\Quadrado;

$poligono = new Poligono();
$poligono->setForma(new Retangulo());

$poligono->getForma()->setAltura(5);
$poligono->getForma()->setLargura(10);

echo '<pre>';
print_r($poligono);
echo '</pre>';

echo '<p>Área do triangulo: '.$poligono->getArea().'</p>';


$poligono = new Poligono();
$poligono->setForma(new Quadrado());

$poligono->getForma()->setLargura(10);

echo '<pre>';
print_r($poligono);
echo '</pre>';

echo '<p>Área do quadrado: '.$poligono->getArea().'</p>';

// $retangulo = new Retangulo();

// $retangulo->setAltura(5);
// $retangulo->setLargura(10);

// echo '<p>Área do triangulo: '.$retangulo->getArea().'</p>';

// echo '<hr/>';

// $quadrado = new Quadrado();

// $quadrado->setAltura(5);

// echo '<p>Área do quadrado: '.$quadrado->getArea().'</p>';