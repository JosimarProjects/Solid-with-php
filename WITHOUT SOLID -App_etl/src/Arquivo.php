<?php

namespace src;


class Arquivo
{

    private $dados = array();

    public function setDados(string $nome, string $cpf, string $email): void
    {
        //corrigindo enconde (encode atual, esperado, variavel)
        array_push($this->dados, [
            'nome' => iconv("iso-8859-1", "utf-8", $nome),
            'cpf' => $cpf,
            'email' => $email
        ]);
    }

    public function getDados(): array
    {
        return $this->dados;
    }

    public function lerArquivoCSV($caminho): void
    {
        //abrir arquivo caminho e read
        $handle = fopen($caminho, "r");
        //ler linha a linha, mx 1000, separador
        while (($linha = fgetcsv($handle, 1000, ";")) !== false) {
            $this->setDados($linha[0], $linha[1], $linha[2]);
        }

        fclose($handle);
    }


    public function lerArquivoTXT($caminho): void
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
    }

    
    public function lerArquivoXML($caminho): void
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
    }
}
