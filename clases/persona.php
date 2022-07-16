<?php

class Persona{
    private string $nombre;
    private string $apellido;
    private int $cedula;

    public function __construct($nombre="",$apellido="",$cedula=0){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->cedula=$cedula;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }

    public function setApellido($apellido){
        $this->apellido=$apellido;
    }
    public function getApellido(){
        return $this->apellido;
    }

    public function setCedula($cedula){
        $this->cedula=$cedula;
    }
    public function getCedula(){
        return $this->cedula;
    }

    public function getInfo(){
        $info="
        Nombre: {$this->nombre}<br>
        Apellido: {$this->apellido}<br>
        Cedula: {$this->cedula}<br>
        ";

        return $info;
    }
}

?>