<?php
require __DIR__.'./vendor/autoload.php';

use src\Leitor;
//------------------------------------------TXT
$leitorTXT = new Leitor();
$leitorTXT->setDiretorio(__DIR__.'/arquivos');
$leitorTXT->setArquivos('dados.txt');
$arr_txt = $leitorTXT->lerArquivo();


//------------------------------------------CSV
$leitorCSV = new Leitor();
$leitorCSV->setDiretorio(__DIR__.'/arquivos');
$leitorCSV->setArquivos('dados.csv');
$arr_csv = $leitorCSV->lerArquivo();

//------------------------- merge entre txt e csv
echo '<pre>';
print_r(array_merge($arr_txt, $arr_csv));
echo '</pre>';





?>