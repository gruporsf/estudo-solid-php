<?php

namespace App\extrator;

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
}