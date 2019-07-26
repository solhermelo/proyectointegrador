<?php
class BaseMYSQL{
  static public function conexion($host,$dbname,$usuario,$pass,$puerto,$charset){
    try{
      $dsn = "mysql:host=".$host.";"."dbname=".$dbname.";"."port=".$puerto.";"."charset=".$charset;
      $baseDeDatos = new PDO ($dsn, $usuario, $pass);
      $baseDeDatos->setAttribute(PDO::ATR_ERRMOD, PDO::ERRMODE_EXCEPTION);
      return $baseDeDatos;
    }catch(\Exception $e){
      echo "No me pude conectar a la BD ". $e->getmessage(); exit;
    }
  }
}
 ?>
