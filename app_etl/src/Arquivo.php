<?php

namespace App;

class Arquivo {

    private $dados = array();

    public function setDados(string $nome, string $cpf, string $email) {

        array_push(
            $this->dados,
            [
                "nome" => iconv('iso-8859-1', 'utf-8', $nome),
                "cpf" => $cpf,
                "email" => $email
            ]
        );
    }

    public function getDados() {

        return $this->dados;
    }

    public function lerArquivoCSV(string $caminho): void {

        $handle = fopen($caminho, 'r');

        while(($linha = fgetcsv($handle, 10000, ';')) !== false) {
            
            $nome = $linha[0];
            $cpf = $linha[1];
            $email = $linha[2];

            $this->setDados($nome, $cpf, $email);
        }  
        
        fclose($handle);
    }

    public function lerArquivoTXT(string $caminho): void {

        $handle = fopen($caminho, 'r');

        while(!feof($handle)) {
            
            $linha = fgets($handle);

            $cpf = substr($linha, 0, 11);
            $nome = substr($linha, 11, 30);
            $email = substr($linha, 41, 50);

            $this->setDados($nome, $cpf, $email);
        }  
        
        fclose($handle);
    }
}