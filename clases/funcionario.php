<?php

require 'persona.php';

class Funcionario extends Persona{
    private int $credencial;

    public function __construct($nombre="",$apellido="",$cedula=0,$credencial=0){
        parent::__construct($nombre,$apellido,$cedula);
        $this->credencial=$credencial;
    }

    public function setCredencial($credencial){
        $this->credencial=$credencial;
    }
    public function getCredencial(){
        return $this->credencial;
    }

    public function getInfo(){
        $info="
        Credencial: {$this->credencial}<br>
        ";
        echo parent::getInfo();
        return $info;
    }
}

?>