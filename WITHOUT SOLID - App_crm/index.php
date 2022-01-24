<?php
require __DIR__.'/vendor/autoload.php';

use src\dao\{
    UsuarioModel,
    ContratoModel,
    LeadModel
};

$contratoModel = new ContratoModel();

print_r($contratoModel);
echo '<br>';

$LeadModel = new LeadModel();

print_r($LeadModel);
echo '<br>';

$UsuarioModel = new UsuarioModel();

print_r($UsuarioModel);
echo '<br>';

?>