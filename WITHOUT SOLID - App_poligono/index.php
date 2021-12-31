<?php
require __DIR__.'/vendor/autoload.php';

use src\{
    Retangulo,
    Quadrado
};


$retangulo = new Retangulo();
$retangulo->setAltura(5);
$retangulo->setLargura(10);

echo '<h3> Área do retângulo: '. $retangulo->getArea(). '</h3>';


$quadrado = new quadrado();
$quadrado->setAltura(5);

echo '<h3> Área do quadrado: '. $quadrado->getArea(). '</h3>';

//quadrado também deveria ser um retangulo

$retangulo = new Quadrado();
$retangulo->setAltura(5);
$retangulo->setLargura(10);

echo '<h3> LSP FERIDO Área do retângulo: '. $retangulo->getArea(). '</h3>';

?>