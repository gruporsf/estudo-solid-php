<?php

namespace App;

use App\Email;

use App\IMensagemToken;

class Mensageiro {

    private $canal;

    public function __construct(IMensagemToken $canal) {
        $this->setCanal($canal);
    }

    public function setCanal(IMensagemToken $canal): void {
        $this->canal = $canal;
    }

    public function getCanal(): IMensagemToken {
        return $this->canal;
    }

    public function enviarToken(): void {

        $this->getCanal()->enviar();

        // $classe = 'App\\'.ucfirst($this->getCanal());

        // $obj = new $classe;

        // $obj->enviar();
    }
}