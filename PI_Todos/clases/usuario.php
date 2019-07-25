<?php
class usuario {
    private $nombre;
    private $apellido;
    private $email;
    private $archivo;

    public function __construct($nombre, $apellido, $email, $archivo){
      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->email = $email;
      $this->archivo = $archivo;
    }
    public function getNombre(){
      return $this->nombre;
    }
    public function setNombre($nombre){
      $this->nombre = $nombre;
    }
    public function getApellido(){
      return $this->descripcion;
    }
    public function setApellido($apellido){
      $this->apellido = $apellido;
    }
    public function getEmail(){
      return $this->email;
    }
    public function setEmail($email){
      $this->email = $email;
    }
    public function getArchivo(){
      return $this->archivo;
    }
    public function setArchivo($archivo){
      $this->archivo = $archivo;
    }


}
 ?>
