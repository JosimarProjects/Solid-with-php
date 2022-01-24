<?php 

namespace src\dao;
use src\BD;
use src\interfaces\{
    Icadastro,
    INotificacao,
    ILog
};
use src\componentes\{
    Log,
    Notificacao
};

class UsuarioModel extends BD implements Icadastro, INotificacao, ILog {
    
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
    

    

