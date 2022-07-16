<?php

require 'funcionario.php';

class Profesor extends Funcionario{
    private string $asignatura;

    public function __construct($nombre="",$apellido="",$cedula=0,$credencial=0,$asignatura=""){
        parent::__construct($nombre,$apellido,$cedula,$credencial);
        $this->asignatura=$asignatura;
    }

    public function setAsignatura($asignatura){
        $this->asignatura=$asignatura;
    }
    public function getAsignatura(){
        return $this->asignatura;
    }

    public function getInfo(){
        $info="
        Asignatura: {$this->asignatura}<br>
        ";
        echo parent::getInfo();
        return $info;
    }
}

?>