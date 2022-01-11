-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: localhost    Database: cgv
-- ------------------------------------------------------
-- Server version	8.0.27

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
-- Table structure for table `time_info`
--

DROP TABLE IF EXISTS `time_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `time_info` (
  `time_idx` int NOT NULL AUTO_INCREMENT,
  `time_theater` int NOT NULL,
  `time_room` int NOT NULL,
  `time_movie` varchar(50) NOT NULL,
  `time_schedule` date NOT NULL,
  `time_schedule_e` date NOT NULL,
  `time_movie_run` int NOT NULL,
  `time_break` time NOT NULL,
  `time_cycle` int NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `time_reg_date` time DEFAULT NULL,
  PRIMARY KEY (`time_idx`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `time_info`
--

LOCK TABLES `time_info` WRITE;
/*!40000 ALTER TABLE `time_info` DISABLE KEYS */;
INSERT INTO `time_info` VALUES (1,1,6,'A01-001','2021-12-29','2022-01-29',112,'00:00:15',3,'14:00:00','16:00:00','00:00:00'),(2,1,7,'A01-001','2021-12-21','2022-01-29',112,'00:00:20',4,'14:00:00','16:00:00','00:00:00'),(3,1,10,'A01-001','2021-12-22','2022-01-20',112,'00:00:15',5,'14:00:00','16:00:00','00:00:00'),(4,1,11,'A01-001','2021-12-23','2022-01-25',112,'00:00:15',2,'14:00:00','16:00:00','00:00:00'),(5,1,12,'A01-002','2021-12-24','2022-01-10',155,'00:00:20',2,'14:00:00','16:00:00','00:00:00'),(6,1,13,'A01-002','2021-12-24','2022-01-05',155,'00:00:15',3,'14:00:00','16:00:00','00:00:00'),(7,1,6,'A01-002','2021-12-24','2022-01-15',155,'00:00:10',4,'14:00:00','16:00:00','00:00:00'),(8,3,1,'A01-002','2021-12-24','2022-01-23',155,'00:00:15',5,'14:00:00','16:00:00','00:00:00'),(9,3,2,'A01-002','2021-12-24','2022-01-29',155,'00:00:15',2,'16:00:00','18:00:00','00:00:00'),(10,2,5,'A01-002','2021-12-24','2022-01-29',155,'00:00:10',3,'16:00:00','18:00:00','00:00:00'),(11,2,8,'A01-002','2021-12-24','2022-01-29',155,'00:00:10',5,'16:00:00','18:00:00','00:00:00'),(12,2,9,'A01-002','2021-12-24','2022-01-29',155,'00:00:15',2,'16:00:00','18:00:00','00:00:00'),(13,5,14,'A01-002','2021-12-24','2022-01-29',155,'00:00:20',6,'16:00:00','18:00:00','00:00:00');
/*!40000 ALTER TABLE `time_info` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-01-11 23:07:27
