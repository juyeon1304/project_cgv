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
-- Table structure for table `user_info`
--

DROP TABLE IF EXISTS `user_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_info` (
  `info_seq` int NOT NULL AUTO_INCREMENT,
  `info_userid` varchar(30) NOT NULL,
  `info_password` varchar(30) NOT NULL,
  `info_name` varchar(100) DEFAULT NULL,
  `info_birth` date NOT NULL,
  `info_phone` varchar(20) NOT NULL,
  `info_email` varchar(200) NOT NULL,
  `info_type` varchar(10) NOT NULL,
  `info_reg_date` datetime NOT NULL,
  PRIMARY KEY (`info_seq`),
  UNIQUE KEY `info_userid` (`info_userid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_info`
--

LOCK TABLES `user_info` WRITE;
/*!40000 ALTER TABLE `user_info` DISABLE KEYS */;
INSERT INTO `user_info` VALUES (1,'koic','1234','koic','1982-09-30','010-4224-7321','rh7321@naver.com','A1','0000-00-00 00:00:00'),(2,'apple','1234','apple','1982-09-30','010-1234-1234','apple@naver.com','A1','0000-00-00 00:00:00'),(4,'melon','1234','melon','1982-09-30','010-5678-5678','melon@naver.com','U1','2021-09-29 13:56:45'),(6,'watermelon','12341234','박수박','2002-03-07','010-2132-1234','asdfj@gmail.com','U1','2021-10-01 23:03:08'),(7,'cherry','12341234','김체리','1988-06-14','010-1234-1234','cherry@gmail.com','U1','2021-10-01 23:03:58'),(8,'chestnut','12341234','김밤','2006-06-13','010-2132-1234','chestnut@gmail.com','A1','2021-10-01 23:05:22');
/*!40000 ALTER TABLE `user_info` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-02 22:49:55
