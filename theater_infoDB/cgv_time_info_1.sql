-- MySQL dump 10.13  Distrib 8.0.25, for Win64 (x86_64)
--
-- Host: localhost    Database: cgv
-- ------------------------------------------------------
-- Server version	8.0.25

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
  `time_theater` varchar(50) NOT NULL,
  `time_room` varchar(50) NOT NULL,
  `time_movie` varchar(50) NOT NULL,
  `time_schedule` date NOT NULL,
  `time_schedule_e` date DEFAULT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  PRIMARY KEY (`time_idx`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `time_info`
--

LOCK TABLES `time_info` WRITE;
/*!40000 ALTER TABLE `time_info` DISABLE KEYS */;
INSERT INTO `time_info` VALUES (1,'1','1','A01-001','2021-12-20','2022-01-14','14:00:00','16:00:00'),(2,'1','1','A01-001','2021-12-21','2022-01-14','14:00:00','16:00:00'),(3,'1','1','A01-001','2021-12-22','2022-01-14','14:00:00','16:00:00'),(4,'1','1','A01-001','2021-12-23','2022-01-14','14:00:00','16:00:00'),(5,'1','2','A01-001','2021-12-21','2022-01-12','14:00:00','16:00:00'),(6,'1','2','A01-001','2021-12-21','2022-01-12','17:00:00','19:00:00');
/*!40000 ALTER TABLE `time_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'cgv'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-23 22:21:25
