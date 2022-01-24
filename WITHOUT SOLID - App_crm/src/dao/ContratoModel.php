<?php 

namespace src\dao;
use src\BD;
use src\interfaces\Icadastro;
use src\componentes\{
    Log,
    Notificacao
};

class ContratoModel extends BD implements Icadastro {
        
        public function salvar() {
            //lógica
        }
        
        public function registrarLog(Log $log) {
            //lógica
        }
        
        public function enviarNotificacao(Notificacao $notificacao) {
            //lógica
        }
        
    
}