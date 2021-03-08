<?php

namespace App;

use App\IMensagemToken;

class Whatsapp implements IMensagemToken  {

    public function enviar(): void {

        echo '<p>Whatsapp: Seu token é 111-999</p>';
    }
}