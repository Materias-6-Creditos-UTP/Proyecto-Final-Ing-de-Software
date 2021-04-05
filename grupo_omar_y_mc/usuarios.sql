-- MySQL dump 10.13  Distrib 8.0.19, for macos10.15 (x86_64)
--
-- Host: ingsoftware.mysql.database.azure.com    Database: utp
-- ------------------------------------------------------
-- Server version	5.6.47.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `ID` int(11) DEFAULT NULL,
  `Nombres` varchar(25) NOT NULL,
  `Apellidos` varchar(25) NOT NULL,
  `cedula` varchar(10) DEFAULT NULL,
  `Edad` int(11) NOT NULL,
  `Sexo` char(1) DEFAULT NULL,
  `Fecha_de_Nacimiento` date DEFAULT NULL,
  `Tipo_de_Sangre` char(2) DEFAULT NULL,
  `Direccion_Residencia` varchar(70) DEFAULT NULL,
  `Profesion` text,
  `Celular` int(11) DEFAULT NULL,
  `Telefono` int(11) DEFAULT NULL,
  `Correo_Electronico` varchar(25) DEFAULT NULL,
  `Facebook` varchar(20) DEFAULT NULL,
  `Instagram` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Manuel_Salvador','Rojas_Aparicio','4-807-700',25,'0','1995-12-03','B+','Guarumal_Alanje','Estudiante',63031030,7705664,'manuel.rojas1@utp.ac.pa','Manuel Rojas','@m_rojas03'),(1,'Manuel_Salvador','Rojas_Aparicio','4-807-700',25,'M','1995-12-03','B+','Guarumal_Alanje','Estudiante',63031030,7705664,'manuel.rojas1@utp.ac.pa','Manuel Rojas','@m_rojas03');
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

-- Dump completed on 2021-03-18 20:42:55
