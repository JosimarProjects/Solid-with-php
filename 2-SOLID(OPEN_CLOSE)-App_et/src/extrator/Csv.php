<?php

namespace src\extrator;

class Csv extends Arquivo {

    public function lerArquivo($caminho): array
    {
        //abrir arquivo caminho e read
        $handle = fopen($caminho, "r");
        //ler linha a linha, mx 1000, separador
        while (($linha = fgetcsv($handle, 1000, ";")) !== false) {
            $this->setDados($linha[0], $linha[1], $linha[2]);
        }

        fclose($handle);
        return $this->getDados();
    }


}


?>