<?php

require __DIR__.'/vendor/autoload.php';

use App\Mensageiro;
use App\Email;
use App\Sms;
use App\Whatsapp;

//Email
$msg = new Mensageiro(new Email());
$msg->enviarToken();

$msg2 = new Mensageiro(new Sms());
$msg2->enviarToken();

$msg3 = new Mensageiro(new Whatsapp());
$msg3->enviarToken();

// //E-mail
// $msg = new Mensageiro();
// $msg->setCanal('email');
// $msg->enviarToken();

// //SMS
// $msg2 = new Mensageiro();
// $msg2->setCanal('sms');
// $msg2->enviarToken();