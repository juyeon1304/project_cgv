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
-- Table structure for table `theater_info`
--

DROP TABLE IF EXISTS `theater_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `theater_info` (
  `theater_idx` int NOT NULL AUTO_INCREMENT,
  `theater_name` varchar(20) NOT NULL,
  `theater_zipcode` varchar(10) NOT NULL,
  `theater_addr1` varchar(100) NOT NULL,
  `theater_addr2` varchar(100) DEFAULT NULL,
  `theater_addr3` varchar(100) DEFAULT NULL,
  `theater_tel` varchar(20) NOT NULL,
  PRIMARY KEY (`theater_idx`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `theater_info`
--

LOCK TABLES `theater_info` WRITE;
/*!40000 ALTER TABLE `theater_info` DISABLE KEYS */;
INSERT INTO `theater_info` VALUES (1,'건대입구','05072','서울 광진구 아차산로30길 26','',' (자양동)','02456789'),(2,'강남 ','06123','서울 강남구 강남대로 438','스타플렉스',' (역삼동)','0278945678'),(3,'계양','21079','인천 계양구 작전동 899-1','메트로몰','8층','025555555'),(4,'홍대','03995','서울 마포구 동교동 159-8','','4층','029999999'),(5,'압구정','06025','서울 강남구 신사동 600','603-2','','028745457'),(6,'왕십리','04750','서울 성동구 행당동 168-2','왕십리 민자역사',' 5층','023333333'),(7,'김포','10113','경기 김포시 풍무동 202-1','김포풍무웰라움퍼펙트시티','5층','026666666'),(8,'고양행신','10526','경기 고양시 덕양구 행신동 762-2','로터스플레이스 ','5층','028888888');
/*!40000 ALTER TABLE `theater_info` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-10-17 19:06:21
