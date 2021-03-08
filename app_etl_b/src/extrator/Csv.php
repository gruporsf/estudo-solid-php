<?php

namespace App\extrator;

class Csv extends Arquivo {

    public function lerArquivo(string $caminho): array {

        $handle = fopen($caminho, 'r');

        while(($linha = fgetcsv($handle, 10000, ';')) !== false) {
            
            $nome = $linha[0];
            $cpf = $linha[1];
            $email = $linha[2];

            $this->setDados($nome, $cpf, $email);
        }  
        
        fclose($handle);

        return $this->getDados();
    }
}