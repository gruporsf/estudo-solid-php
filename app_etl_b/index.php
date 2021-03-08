<?php

require __DIR__."/vendor/autoload.php";

use App\Leitor;

//CSV
$leitorCSV = new Leitor();

$leitorCSV->setDiretorio(__DIR__.'/arquivos');
$leitorCSV->setArquivo('dados.csv');

$arr_csv = $leitorCSV->lerArquivo();

//TXT
$leitorTXT = new Leitor();

$leitorTXT->setDiretorio(__DIR__.'/arquivos');
$leitorTXT->setArquivo('dados.txt');

$arr_txt = $leitorTXT->lerArquivo();

echo '<pre>';

print_r(array_merge($arr_csv, $arr_txt));

echo '</pre>';

