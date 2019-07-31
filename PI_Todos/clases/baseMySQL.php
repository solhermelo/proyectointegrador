<?php
class BaseMYSQL{
  static public function conexion($host,$dbname,$puerto,$usuario,$pass,$charset){
    try{
      $dsn = "mysql:host=".$host.";"."dbname=".$dbname.";"."port=".$puerto.";"."charset=".$charset;
      $baseDeDatos = new PDO ($dsn, $usuario, $pass);
      $baseDeDatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $baseDeDatos;
    }catch(\Exception $e){
      echo "No me pude conectar a la BD ". $e->getmessage(); exit;
    }
  }

  static public function guardarUsuario($pdo, $usuario, $tabla, $avatar){
    $sql = "insert into $tabla (nombre, apellido, email, password, avatar) values (:nombre, :apellido, :email, :password, :avatar)";
    $query = $pdo->prepare($sql);
    $query->bindValue (':nombre', $usuario->getNombre());
    $query->bindValue (':apellido', $usuario->getApellido());
    $query->bindValue (':email', $usuario->getEmail());
    $query->bindValue (':password', Encriptar::hashPassword($usuario->getPassword()));
    $query->bindValue (':avatar', $avatar);
    $query->execute();
  }

  static public function buscarPorEmail($email,$pdo,$tabla){
    $query = $pdo->prepare("select * from $tabla where email = :email");
    $query->bindValue(":email", $email);
    $query->execute();
    $usuario = $query->fetch(PDO::FETCH_ASSOC);
    return $usuario;
}
}
 ?>
