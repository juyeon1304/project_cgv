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
-- Table structure for table `city_info`
--

DROP TABLE IF EXISTS `city_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `city_info` (
  `city_code` varchar(30) NOT NULL,
  `city_name` varchar(50) NOT NULL,
  PRIMARY KEY (`city_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `city_info`
--

LOCK TABLES `city_info` WRITE;
/*!40000 ALTER TABLE `city_info` DISABLE KEYS */;
INSERT INTO `city_info` VALUES ('BS','부산/울산'),('DG','대구'),('DJ','대전/충청'),('GG','경기'),('GJ','광주/전라/제주'),('GS','경상'),('GW','강원'),('IC','인천'),('SE','서울');
/*!40000 ALTER TABLE `city_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movie_info`
--

DROP TABLE IF EXISTS `movie_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `movie_info` (
  `M_idx` int NOT NULL AUTO_INCREMENT,
  `M_Code` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `M_Picture_Code` varchar(200) DEFAULT NULL,
  `M_Title` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `E_M_Title` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `M_Genre_Code` varchar(20) DEFAULT NULL,
  `M_Basics` varchar(50) DEFAULT NULL,
  `M_Rel_Date` date DEFAULT NULL,
  `M_Summary` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Dircetor_code` varchar(100) DEFAULT NULL,
  `Actor_Code` varchar(100) DEFAULT NULL,
  `M_Rel_DateS` date DEFAULT NULL,
  `M_Rel_DateE` date DEFAULT NULL,
  `movie_reg_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`M_idx`),
  UNIQUE KEY `M_Code` (`M_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movie_info`
--

LOCK TABLES `movie_info` WRITE;
/*!40000 ALTER TABLE `movie_info` DISABLE KEYS */;
INSERT INTO `movie_info` VALUES (9,'A01-001',NULL,'007 노 타임 투 다이','No Time to Die','액션','12세 이상','2021-09-29','가장 강력한 운명의 적과 마주하게된 제임스 본드의 마지막 미션이 시작된다.','캐리 후쿠나가','다니엘 크레이그','2021-10-01','2021-10-31','2021-10-10 16:56:02'),(10,'A01-002','','보이스','On the Line','범죄, 액션','15세 이상','2021-09-15','단 한 통의 전화! 걸려오는 순간 걸려들었다!','김선, 김곡','변요한, 김무열','2021-09-15','2022-03-01','2021-10-14 15:17:10'),(11,'A01-003','','베놈 2-렛 데어 비 카니지','Venom: Let There Be Carnage','액션, 스릴러, SF','15세 이상','2021-10-13','히어로의 시대는 끝났다 ‘베놈’과완벽한 파트너가 된 ‘에디 브록’(톰하디) 앞에 ‘클리터스 캐서디’(우디 해럴슨)가 ‘카니지’로 등장,  앞으로 닥칠 대혼돈의 세상을 예고한다.  대혼돈의 시대가 시작되고,  악을 악으로 처단할 것인가 ','앤디 서키스','톰 하디 ,  미셸 윌리엄스 ,  나오미 해리스 ,  레이드 스콧 ,  스테판 그레이엄 ,  우디 해럴슨','2021-10-13','2022-03-25','2021-10-14 15:20:12'),(12,'A01-004','','십개월의 미래','TEN Months','드라마','12세 이상','2021-10-14','“나는 세상을 바꿀 프로그램 개발자, 29살 ‘최미래’ 그런데 어느 날 이름 앞에 몇 글자가 더 붙었다. ‘최 악의 미래’로…”  만성 숙취를 의심하던 미래는 자신이 임신 10주라는 사실을 알고 당황한다. 아무 예고 없이 찾아온 변수 앞에서 갈팡질팡하는 사이,  가족과 연인, 국가는 각기 다른 방향을 제시하고 미래의 십개월은 빠른 속도로 흘러간다.','남궁선','  최성은 ,  백현진 ,  서영주 ,  유이든','2021-10-14','2022-04-02','2021-10-14 15:24:21'),(13,'A01-005','','타다-대한민국 스타트업의 초상','TADA: A Portrait of Korean Startups','다큐멘터리','전체','2021-10-14','타다금지법 이후 6개월간의 악전고투 이야기 \"어떻게든 살아남아야 한다!\"','권명국',' 박재욱 ,  이두희 ,  장병규 ,  이철희','2021-10-14','2022-01-05','2021-10-14 15:30:20'),(14,'A01-006','','스틸워터 ','Stillwater','범죄, 드라마, 스릴러','15세 이상','2021-10-06','진실을 파고들수록, 비밀은 깊어진다','토마스 맥카시','맷 데이먼, 아비게일 브레스린','2021-10-06','2022-02-10','2021-10-14 15:38:47'),(15,'A01-007','','고양이를 부탁해 ','TAKE CARE OF MY CAT','드라마','12세 이상','2021-10-13','스무 살, 사랑스러운 아이들의 겨울야화','정재은','배두나 ,  옥지영 ,  이요원 ,  이은실 ,  이은주(1)','2021-10-13','2022-03-15','2021-10-14 15:41:25'),(16,'A01-008','','듄','DUNE','SF','12세 이상','2021-10-20','“듄을 지배하는 자가 우주를 지배한다!”','드니 빌뇌브',' 티모시 샬라메 ,  레베카 퍼거슨 ,  오스카 아이삭','2021-10-20','2022-05-20','2021-10-14 15:44:55'),(17,'A01-009','','라스트 듀얼-최후의 결투 ','The Last Duel','액션, 스릴러','청소년 관람불가','2021-10-20','부조리한 권력과 야만의 시대, 14세기 프랑스. 유서 깊은 ‘카루주’ 가의 부인 ‘마르그리트’는 남편 ‘장’이 집을 비운 사이, 불시에 들이닥친 ‘장’의 친구 ‘자크’에게 씻을 수 없는 모욕을 당한다.','리들리 스콧','맷 데이먼 ,  아담 드라이버 ,  조디 코머 ,  벤 애플렉','2021-10-20','2022-04-10','2021-10-14 15:46:40'),(18,'P01-001','','남자가 사랑할 때','남자가 사랑할 때, 2013','드라마','15세 이상,','2014-01-22','평생 사랑과는 거리가 멀었던 한 남자가 사랑에 눈 뜨다!  일생에 단 한번, 남자가 사랑할 때','한동욱','황정민 ,  한혜진 ,  곽도원 ,  정만식 ,  김혜은 ,  남일우','2014-01-22','2014-06-20','2021-10-14 16:11:48'),(19,'P01-002','','뷰티 인사이드','The Beauty Inside, 2015','로맨스, 멜로','12세 이상','2015-08-20','남자, 여자, 아이, 노인.. 심지어 외국인까지! 자고 일어나면 매일 다른 모습으로 변하는 남자, ‘우진’.  그에게 처음으로 비밀을 말하고 싶은 단 한 사람이 생겼다.','백종열','한효주 ,  김대명 ,  도지한 ,  배성우 ,  박신혜 ,  이범수 ,  박서준 ,  김상호 ,  천우희 ,  우에노 주리 ,  이재준 ,  김민재','2015-08-20','2016-02-01','2021-10-14 16:13:54');
/*!40000 ALTER TABLE `movie_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room_info`
--

DROP TABLE IF EXISTS `room_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `room_info` (
  `room_idx` int NOT NULL AUTO_INCREMENT,
  `room_name` varchar(50) NOT NULL,
  `room_etc` varchar(50) DEFAULT NULL,
  `room_seat` int NOT NULL DEFAULT '0',
  `room_theater` int NOT NULL,
  PRIMARY KEY (`room_idx`),
  KEY `room_theater` (`room_theater`),
  CONSTRAINT `room_info_ibfk_1` FOREIGN KEY (`room_theater`) REFERENCES `theater_info` (`theater_idx`),
  CONSTRAINT `room_info_ibfk_2` FOREIGN KEY (`room_theater`) REFERENCES `theater_info` (`theater_idx`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room_info`
--

LOCK TABLES `room_info` WRITE;
/*!40000 ALTER TABLE `room_info` DISABLE KEYS */;
INSERT INTO `room_info` VALUES (1,'1관','리클라이너',89,3),(2,'2관','',115,3),(3,'2관','',115,3),(4,'4관','',111,3),(5,'1관','리클라이너',128,2),(6,'1관','',89,1),(7,'2관','',58,1),(8,'2관','',114,2),(9,'3관','',22,2),(10,'3관','',109,1),(11,'4관','',1,1),(12,'5관','',102,1);
/*!40000 ALTER TABLE `room_info` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `theater_info`
--

LOCK TABLES `theater_info` WRITE;
/*!40000 ALTER TABLE `theater_info` DISABLE KEYS */;
INSERT INTO `theater_info` VALUES (1,'건대입구','05072','서울 광진구 아차산로30길 26','',' (자양동)','02456789',0,'SE'),(2,'강남 ','06123','서울 강남구 강남대로 438','스타플렉스',' (역삼동)','0278945678',0,'SE'),(3,'계양','21079','인천 계양구 작전동 899-1','메트로몰','8층','025555555',0,'GG'),(4,'홍대','03995','서울 마포구 동교동 159-8','','4층','029999999',0,'SE'),(5,'압구정','06025','서울 강남구 신사동 600','603-2','','028745457',0,'SE'),(6,'왕십리','04750','서울 성동구 행당동 168-2','왕십리 민자역사',' 5층','023333333',0,'SE');
/*!40000 ALTER TABLE `theater_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_auth`
--

DROP TABLE IF EXISTS `user_auth`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_auth` (
  `auth_seq` int NOT NULL AUTO_INCREMENT,
  `auth_type` varchar(10) NOT NULL,
  PRIMARY KEY (`auth_seq`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_auth`
--

LOCK TABLES `user_auth` WRITE;
/*!40000 ALTER TABLE `user_auth` DISABLE KEYS */;
INSERT INTO `user_auth` VALUES (1,'U1'),(2,'A1');
/*!40000 ALTER TABLE `user_auth` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_info`
--

LOCK TABLES `user_info` WRITE;
/*!40000 ALTER TABLE `user_info` DISABLE KEYS */;
INSERT INTO `user_info` VALUES (1,'koic','1234','koic','1982-09-30','010-4224-7321','rh7321@naver.com','A1','0000-00-00 00:00:00'),(2,'apple','1234','apple','1982-09-30','010-1234-1234','apple@naver.com','A1','0000-00-00 00:00:00'),(4,'melon','1234','melon','1982-09-30','010-5678-5678','melon@naver.com','U1','2021-09-29 13:56:45'),(6,'watermelon','12341234','박수박','2002-03-07','010-2132-1234','asdfj@gmail.com','U1','2021-10-01 23:03:08'),(7,'cherry','12341234','김체리','1988-06-14','010-1234-1234','cherry@gmail.com','U1','2021-10-01 23:03:58'),(8,'chestnut','12341234','김밤','2006-06-13','010-2132-1234','chestnut@gmail.com','A1','2021-10-01 23:05:22');
/*!40000 ALTER TABLE `user_info` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_login_his`
--

LOCK TABLES `user_login_his` WRITE;
/*!40000 ALTER TABLE `user_login_his` DISABLE KEYS */;
INSERT INTO `user_login_his` VALUES (1,'koic','::1','','2021-10-01 23:49:01'),(2,'koic','::1','','2021-11-12 13:35:44'),(3,'koic','::1','','2021-11-13 23:12:41');
/*!40000 ALTER TABLE `user_login_his` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_mov_his`
--

DROP TABLE IF EXISTS `user_mov_his`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_mov_his` (
  `mov_seq` int NOT NULL AUTO_INCREMENT,
  `mov_userid` varchar(30) NOT NULL,
  `mov_date` datetime NOT NULL,
  `mov_code` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`mov_seq`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_mov_his`
--

LOCK TABLES `user_mov_his` WRITE;
/*!40000 ALTER TABLE `user_mov_his` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_mov_his` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-18 21:53:21
