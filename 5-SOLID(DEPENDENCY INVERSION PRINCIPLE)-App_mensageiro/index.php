<?php
require __DIR__.'/vendor/autoload.php';

use src\{
    Mensageiro,
    Sms,
    Email,
    Whatsapp
};


//canal email
$msg = new Mensageiro(new Email());
$msg->enviarToken();
echo '<br>';


// canal sms

$msg2 = new Mensageiro( new Sms());
$msg2->enviarToken();
echo '<br>';

$msg3 = new Mensageiro( new Whatsapp());
$msg3->enviarToken();


/*
//canal email
$msg = new Mensageiro();
$msg->setCanal('email');
$msg->enviarToken();
echo '<br>';


// canal sms

$msg2 = new Mensageiro();
$msg2->setCanal('sms');
$msg2->enviarToken();*/



