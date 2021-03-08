<?php

namespace App\dao;

use App\BD;

use App\interfaces\INotificacao;
use App\interfaces\ICadastro;
use App\componentes\Notificacao;

class LeadModel extends BD implements ICadastro, INotificacao {
    
    public function salvar() {
        
    }

    public function enviarNotificacao(Notificacao $notificacao) {
        
    }
}