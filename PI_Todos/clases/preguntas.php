<?php
class PreguntasFrecuentes{
    static public function obtenerPreguntas($pdo){
    $query = $pdo->prepare("select * from quienjuega.faq");
    $query->execute();
    $faq = $query->fetchAll(PDO::FETCH_ASSOC);
    return $faq;
  }
}
 ?>
