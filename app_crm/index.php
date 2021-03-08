<?php

require __DIR__.'/vendor/autoload.php';

use App\dao\ContratoModel;
use App\dao\UsuarioModel;
use App\dao\LeadModel;

$contratoModel = new ContratoModel();
echo '<pre>';
print_r($contratoModel);
echo '</pre>';

$usuarioModel = new UsuarioModel();
echo '<pre>';
print_r($usuarioModel);
echo '</pre>';

$leadModel = new LeadModel();
echo '<pre>';
print_r($leadModel);
echo '</pre>';
