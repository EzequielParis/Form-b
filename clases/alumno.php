<?php

require 'persona.php';

class Alumno extends Persona{
    public string $clase;

    public function __construct($nombre="",$apellido="",$cedula=0,$clase=""){
        parent::__construct($nombre,$apellido,$cedula);
        $this->clase=$clase;
    }

    public function setClase($clase){
        $this->clase=$clase;
    }
    public function getClase(){
        return $this->clase;
    }

    public function getInfo(){
        $info="
        Clase: {$this->clase}<br>
        ";
        echo parent::getInfo();
        return $info;
    }
}

?>