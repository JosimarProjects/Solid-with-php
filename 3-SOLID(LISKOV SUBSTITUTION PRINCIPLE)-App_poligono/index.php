<?php
require __DIR__.'/vendor/autoload.php';

use src\Poligono;
use src\poligonos\{
    Retangulo,
    Quadrado
};

$poligono = new Poligono();
$poligono->setForma(new Retangulo());
$poligono->getForma()->setAltura(5);
$poligono->getForma()->setLargura(10);


echo '<pre>';
print_r($poligono->getForma());
echo '</pre>';

echo '<h3> Área do retângulo: '. $poligono->getArea(). '</h3>';


$poligono = new Poligono();
$poligono->setForma(new Quadrado());
$poligono->getForma()->setLargura(10);


echo '<pre>';
print_r($poligono->getForma());
echo '</pre>';

echo '<h3> Área do quadrado: '. $poligono->getArea(). '</h3>';






/*$retangulo = new Retangulo();
$retangulo->setAltura(5);
$retangulo->setLargura(10);

echo '<h3> Área do retângulo: '. $retangulo->getArea(). '</h3>';


$quadrado = new Quadrado();
$quadrado->setAltura(5);

echo '<h3> Área do quadrado: '. $quadrado->getArea(). '</h3>';

//quadrado também deveria ser um retangulo

$retangulo = new Quadrado();
$retangulo->setAltura(5);
$retangulo->setLargura(10);

echo '<h3> LSP FERIDO Área do retângulo: '. $retangulo->getArea(). '</h3>';*/



?>