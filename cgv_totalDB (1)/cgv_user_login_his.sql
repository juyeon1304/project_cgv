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
-- Table structure for table `user_login_his`
--

DROP TABLE IF EXISTS `user_login_his`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_login_his` (
  `log_seq` int NOT NULL AUTO_INCREMENT,
  `log_userid` varchar(30) NOT NULL,
  `log_ip` varchar(30) NOT NULL,
  `log_com` varchar(100) DEFAULT NULL,
  `log_date` datetime NOT NULL,
  PRIMARY KEY (`log_seq`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_login_his`
--

LOCK TABLES `user_login_his` WRITE;
/*!40000 ALTER TABLE `user_login_his` DISABLE KEYS */;
INSERT INTO `user_login_his` VALUES (1,'koic','::1','','2021-10-01 23:49:01'),(2,'koic','127.0.0.1','','2021-10-04 22:40:52'),(3,'koic','127.0.0.1','','2021-10-04 22:53:44'),(4,'koic','127.0.0.1','','2021-10-06 23:41:54'),(5,'koic','127.0.0.1','','2021-10-07 22:19:35'),(6,'koic','127.0.0.1','','2021-10-07 23:06:26'),(7,'eoum','127.0.0.1','','2021-10-07 23:08:11'),(8,'koic','127.0.0.1','','2021-10-07 23:08:25'),(9,'eoum','127.0.0.1','','2021-10-07 23:08:51'),(10,'eoum','127.0.0.1','','2021-10-09 12:56:07'),(11,'koic','127.0.0.1','','2021-10-09 13:14:17'),(12,'koic','127.0.0.1','','2021-10-09 13:22:59'),(13,'koic','127.0.0.1','','2021-10-09 16:24:19'),(14,'koic','127.0.0.1','','2021-10-09 17:25:31'),(15,'koic','127.0.0.1','','2021-10-09 22:37:34'),(16,'koic','127.0.0.1','','2021-10-10 00:11:46'),(17,'koic','127.0.0.1','','2021-10-11 00:50:12'),(18,'koic','127.0.0.1','','2021-10-13 23:00:15'),(19,'koic','127.0.0.1','','2021-10-16 23:59:40'),(20,'koic','127.0.0.1','','2021-11-02 22:39:53');
/*!40000 ALTER TABLE `user_login_his` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-02 22:49:54
