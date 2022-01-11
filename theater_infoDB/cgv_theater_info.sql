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
  `theater_room` int DEFAULT '0',
  `theater_cityCode` varchar(30) NOT NULL,
  PRIMARY KEY (`theater_idx`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `theater_info`
--

LOCK TABLES `theater_info` WRITE;
/*!40000 ALTER TABLE `theater_info` DISABLE KEYS */;
INSERT INTO `theater_info` VALUES (1,'건대입구','05072','서울 광진구 아차산로30길 26','',' (자양동)','02456789',0,'SE'),(2,'강남 ','06123','서울 강남구 강남대로 438','스타플렉스',' (역삼동)','0278945678',0,'SE'),(3,'계양','21079','인천 계양구 작전동 899-1','메트로몰','8층','025555555',0,'GG'),(4,'홍대','03995','서울 마포구 동교동 159-8','','4층','029999999',0,'SE'),(5,'압구정','06025','서울 강남구 신사동 600','603-2','','028745457',0,'SE'),(11,'강변','05116','서울 광진구 구의동 546-4','테크노마트 ','10층','15441212',0,'SE'),(12,'대학로','03077','서울 종로구 명륜2가 41-9','','','154545457',0,'SE'),(13,'부평','21302','인천 부평구 청천동 386','아이즈빌아울렛 ','2층','45478312',0,'IC'),(14,'인천공항','22382','인천 중구 운서동 2851','교통환승센터 내','지하 1층','458712364',0,'IC'),(15,'강릉','25541','강원 강릉시 옥천동 189','씨네몰','6~ 8층','35487215',0,'GW'),(16,'원주','26436','강원 원주시 단계동 877-1','원주 시외버스 터미널','7층','5475935',0,'GW'),(17,'논산','32988','충남 논산시 내동 452','시네마타워 ','3층','3568723',0,'DJ'),(18,'당진','31768','충남 당진시 읍내동 1532','','','3548123',0,'DJ'),(19,'대전','34956','대전 중구 문화동 1-16','세이2',' 6층','053873',0,'DJ'),(20,'대구수성','42198','대구 수성구 범물동 1273','동아백화점','8층','7812386',0,'DG'),(21,'대구스타디움','04152','서울 마포구 대흥동 504','유니버시아드로 ','','35487215',0,'DG'),(22,'울산동구','44059','울산 동구 등대로 50','',' (방어동)','456789',0,'BS'),(23,'해운대','48094','부산 해운대구 우동 539-10','라뮤에뜨','2층','56873',0,'BS');
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

-- Dump completed on 2022-01-11 16:26:03
