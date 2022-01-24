<?php 
namespace src;

class Email implements IMensagemToken {
    public function enviar(): void {
       echo 'Enviando email... token 555-333';
    }
}