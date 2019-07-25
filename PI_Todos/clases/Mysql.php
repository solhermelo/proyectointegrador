<?php

class Mysql extends BaseDatos {
  static public function  conexion($host,$db_nombre,$usuario,$password,$puerto,$charset){
    try {
        $dsn = "mysql:host=".$host.";"."dbname=".$db_nombre.";"."port=".$puerto.";"."charset=".$charset;
        $baseDatos = new PDO($dsn,$usuario,$password);
        $baseDatos->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $baseDatos;
    } catch (PDOException $errores) {
        echo "No me pude conectar a la BD ". $errores->getmessage();
        exit;
    }
  }
  static public function guardarProducto($pdo,$tabla,$producto){
    $sql = "insert into $tabla (nombre, apellido, email, archivo) values (:nombre, :apellido, :email, :archivo)";
    $query = $pdo->prepare($sql);
    $query->bindValue(':nombre', $usuario->getNombre());
    $query->bindValue(':apellido', $usuario->getApellido());
    $query->bindValue(':email', $usuario->getEmail());
    $query->bindValue(':email', $usuario->getPassword());
    $query->bindValue(':usuario', $usuario->getAvatar());
    $query->execute();
  }

  public function leer(){
    //Lógica
  }
  public function editar(){
    //Lógica
  }
  public function eliminar(){
    //Lógica
  }
}
