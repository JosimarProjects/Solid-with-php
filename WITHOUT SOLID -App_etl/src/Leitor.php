<?php

namespace src;

use src\Arquivo;

class Leitor
{
    private $diretorio;
    private $arquivos;

    public function getDiretorio(): string
    {
        return $this->diretorio;
    }

    public function setDiretorio(string $diretorio)
    {
        $this->diretorio = $diretorio;
    }

    public function getArquivos(): string
    {
        return $this->arquivos;
    }

    public function setArquivos(string $arquivos)
    {
        return  $this->arquivos = $arquivos;
    }

    public function lerArquivo(): array
    {
        $caminho = $this->getDiretorio() . '/' . $this->getArquivos();

        $arquivo = new Arquivo();
        $extensao =  explode('.', $this->getArquivos());

        if ($extensao[1] == 'csv') {
            $arquivo->lerArquivoCSV($caminho);
        } elseif ($extensao[1] == 'txt') {
            $arquivo->lerArquivoTXT($caminho);
        } elseif ($extensao[1] == 'xml') {
            $arquivo->lerArquivoXML($caminho);


            return $arquivo->getDados();
        }
    }
}
