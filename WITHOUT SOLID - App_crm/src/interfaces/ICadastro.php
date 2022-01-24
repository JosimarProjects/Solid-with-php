<?php 

namespace src\interfaces;
use src\componentes\{
    Log,
    Notificacao
};

interface Icadastro {
    public function salvar();
    public function registrarLog(Log $log);
    public function enviarNotificacao(Notificacao $notificacao);

}