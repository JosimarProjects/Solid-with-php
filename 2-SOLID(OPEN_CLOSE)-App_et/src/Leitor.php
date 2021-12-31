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
        $extensao =  explode('.', $this->getArquivos());
        $classe = '\src\extrator\\' . ucfirst($extensao[1]);
        //classe instanciar, chamar metodo lerArquivo, passar parametros
       return call_user_func_array(
            [
                new $classe,
                'lerArquivo'
            ],
            [
                $caminho
            ]
            
            );

     
    }

}
