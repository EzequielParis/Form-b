<?php

require 'funcionario.php';

class Director extends Funcionario{
    private string $institucion;

    public function __construct($nombre="",$apellido="",$cedula=0,$credencial=0,$institucion=""){
        parent::__construct($nombre,$apellido,$cedula,$credencial);
        $this->institucion=$institucion;
    }

    public function setInstitucion($institucion){
        $this->institucion=$institucion;
    }
    public function getInstitucion(){
        return $this->institucion;
    }

    public function getInfo(){
        $info="
        Asignatura: {$this->institucion}<br>
        ";
        echo parent::getInfo();
        return $info;
    }
}
?>