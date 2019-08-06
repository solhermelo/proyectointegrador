CREATE DATABASE  IF NOT EXISTS `quienjuega` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `quienjuega`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: quienjuega
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.40-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faq` (
  `idFAQ` int(11) NOT NULL AUTO_INCREMENT,
  `Questions` varchar(250) DEFAULT NULL,
  `Answers` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`idFAQ`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq`
--

LOCK TABLES `faq` WRITE;
/*!40000 ALTER TABLE `faq` DISABLE KEYS */;
INSERT INTO `faq` VALUES (1,'1.¿DE QUE SE TRATA \"QUIEN JUEGA\"?','Somos una red de futbolistas amateurs que busca conectar jugadores con equipos y equipos con jugadores. Nuestro objetivo es facilitar la organización de un partido mediante la búsqueda de un jugador faltante, un equipo al que te puedas sumar como jugador o un equipo completo para organizar partido.'),(2,'2.¿CUALES SON LOS SERVICIOS QUE SE OFRECEN?','Como usuario de Quien Juega tenes las siguientes opciones: buscar jugadores para completar tu equipo, si queres jugar y no tenes equipo te podes postular como jugador disponible y por último si queres organizar unpartido podes encontrar un equipo rival.'),(3,'3.¿COMO SE QUE JUGADOR CONVIENE PARA MI EQUIPO?','Contamos con una base de datos de todos los jugadores suscriptos a Quien Juega. Cada jugador esta caracterizado por varios parámetros, entre ellos: posición de juego, cantidad de partidos jugados como invitado, puntaje recibido por los equipos anfitriones y disponibilidad. En base a estos y otros parámetros podrás decidir que jugador es el más conveniente para jugar con tu equipo.'),(4,'4.¿DE CUANTOS JUGADORES SON LOS EQUIPOS QUE SE ARMAN?','No tenemos un valor definido de jugadores por equipo, eso depende del equipo que busca jugador, o del jugador que busca equipo. Sin embargo, de acuerdo a nuestra base de datos el 30% de los partidos que se organizan son de futbol 5 y un 20% son de futbol 7, el resto varía entre futbol 11, 8 y 6.'),(5,'5.¿COMO FUNCIONA EL PROCESO COMPLETO PARA SER LLAMADO POR UN EQUIPO?','Primero debes registrarte en la página como usuario y llenar un formulario dando todas tus características como jugador. Luego nuestra red de expertos va a evaluar tu formulario y aprobar en un plazo de 3 a 5 días hábiles. Una vez hecho esto se sugerirá tu perfil a aquellos equipos que busquen un jugador con tus carcaterísticas. Cuando algun euqipo te seleccione recibirás una invitación en tu usuario de Quien Juega. Desde que te registrás hasta que recibís la invitación suelen pasar entre 2 y 3 semanas.'),(6,'6.¿CUAL ES EL PRECIO QUE SE PAGA POR USAR LOS SERVICIOS DE QJ?','El servicio no tiene ninguna precio por asociarte a la red, el pago se hace cada vez que coordinas partido o jugador. El precio de sumar a un jugador a tu equipo o de sumarte como jugador a un equipo es de $300 y el precio de coordinar partido con otro equipo es de $500. El responsable del pago es aquel que abre la solicitud de partido.'),(7,'7.¿ESTA RED FUNCIONA PARA OTROS DEPORTES?','Por ahora solo nos dedicamos a conectar futbolistas pero el plan es extender la red para otros deportes como Hockey, Volley y Basket.'),(8,'8.¿SI UN EQUIPO ME INVITA A JUGAR QUIEN DEBE REALIZAR EL PAGO?','El pago lo hace aquel que abre la búsqueda de partido. Es decir, si un equipo te invita a jugar ellos abrieron el partido entonces la resposabilidad de pago la tiene el equipo que te invita. Si vos como jugador o euqipo queres jugar un partido e invitas a un equipo a sumarte o a ser tu euqipo rival entonces vos debes pagar ya que sos el que está abriendo la solicitud de partido');
/*!40000 ALTER TABLE `faq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Herni','DH','hbaravalle@digitalhouse.com','$2y$10$fdXCDeK/2bMe2EN.ZY4hVuXY/RSXMrpx63CH/4','5d4387f2874fd.jpg'),(2,'josefina','loyola','josefina@yahoo.com','$2y$10$qpkBYaRXGtSygrGg0.Qfjuxl9uT818G2g89zyI','5d4388aec0f0a.jpg'),(3,'josefina','loyola','jocloyol@gmail.com','$2y$10$G6tJpxCDXKnscjFaXAykoeJeBWAdaaDTaK6Gp/','5d4388cf5a911.jpg'),(4,'josefina','loyola','jocloyola@msn.com','$2y$10$b7z7B4w/CCKCsxoy7Phq7uZB5w5uLDyXeqkiMIZhmJVT1M1Euj4Jm','5d4389252bf3e.jpg'),(5,'josefina','loyola','jocloyola@gmail.com','$2y$10$iaihkPqdshVu4Z6DZxIyC.2IYeH236nPXcayihtAGEnIZjL7MQQve','5d48acdd22e6b.jpg');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-05 19:39:49
