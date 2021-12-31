<?php
namespace src\poligonos;

class Quadrado{
    protected $altura;
    protected $largura;

    public function getAltura():float {
        return $this->altura;
    }

    public function getLargura():float {
        return $this->largura;
    }

    public function setAltura(float $altura):void {
        $this->altura = $altura;
        $this->largura = $altura;
    }

    public function setLargura(float $largura):void {
        $this->altura = $largura;
        $this->largura = $largura;
    }



}

?>