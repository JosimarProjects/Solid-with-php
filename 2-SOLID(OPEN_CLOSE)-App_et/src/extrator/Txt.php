<?php

namespace src\extrator;



class Txt extends Arquivo {
    public function lerArquivo($caminho): array
    {
        //abrir arquivo caminho e read
        $handle = fopen($caminho, "r");
        //ler linha a linha, mx 1000, separador
        while (!feof($handle)) {
            $linha = fgets($handle); // o ponteiro interno de leitura do arquivo é movido para o próximo caractere e feof verifica se existe final

            $this->setDados(
                substr($linha, 11, 30),//NOME
                substr($linha, 0, 11),//CPF        
                substr($linha, 41, 50)//EMAIL
            );
        }
        fclose($handle);
        return $this->getDados();
    }


}


?>