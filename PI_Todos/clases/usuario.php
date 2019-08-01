<?php
class Usuario{
  protected $nombre;
  protected $apellido;
  protected $email;
  protected $password;
  protected $repassword;
  protected $avatar;

  public function __construct($nombre=null, $apellido=null, $email, $password, $repassword=null, $avatar=null){
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->email = $email;
    $this->password = $password;
    $this->repassword = $repassword;
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
  public function setApellido(){
    $this->apellido = $apellido;
  }

  public function getEmail(){
      return $this->email;
  }
  public function setEmail($email){
      $this->email = $email;
  }

  public function getPassword(){
      return $this->password;
  }
  public function setPassword($password){
      $this->password = $password;
  }

  public function getRepassword(){
      return $this->repassword;
  }
  public function setRepassword($password){
      $this->repassword = $repassword;
  }

  public function getAvatar(){
     return $this->avatar;
  }
  public function setAvatar($avatar){
      $this->avatar = $avatar;
  }

}
 ?>
