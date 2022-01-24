<?php 
namespace src;

class Sms implements IMensagemToken {
    public function enviar(): void {
       echo 'SMS... token 555-333';
    }
}