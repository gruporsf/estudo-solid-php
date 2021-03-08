<?php

namespace App;

use App\IMensagemToken;

class Email implements IMensagemToken  {

    public function enviar(): void {

        echo '<p>E-mail: Seu token é 555-333</p>';
    }
}