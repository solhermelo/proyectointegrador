<?php
class usuario {
    private $nombre;
    private $apellido;
    private $email;
    private $password;
    private $avatar;

    public function __construct($nombre, $apellido, $email, $password, $avatar){
      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->email = $email;
      $this->password = $password;
      $this->avatar = $avatar;
    }
    public function getNombre(){
      return $this->nombre;
    }
    public function setNombre($nombre){
      $this->nombre = $nombre;
    }
    public function getApellido(){
      return $this->apellido;
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
    public function getAvatar(){
      return $this->avatar;
    }
    public function setAvatar($avatar){
      $this->avatar = $avatar;
    }
    public function getPassword(){
      return $this->password;
    }
    public function setPassword($password){
      $this->password = $password;
    }
}
 ?>
