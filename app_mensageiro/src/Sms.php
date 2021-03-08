<?php

namespace App;

use App\IMensagemToken;

class Sms implements IMensagemToken {

    public function enviar(): void {

        echo '<p>SMS: Seu token é 888-444</p>';
    }
}