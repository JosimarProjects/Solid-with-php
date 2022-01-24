<?php 

namespace src\dao;
use src\BD;
use src\interfaces\{
    Icadastro,
    INotificacao
};

use src\componentes\{   
    Notificacao
};


class LeadModel extends BD implements Icadastro, Inotificacao  {
    public function salvar() {
        //lógica
    }   

    public function enviarNotificacao(Notificacao $notificacao) {
        //lógica
    }

}