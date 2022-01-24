<?php 
namespace src;

class Whatsapp implements IMensagemToken {
    public function enviar(): void {
       echo 'Whatsapp... token 555-333';
    }
}