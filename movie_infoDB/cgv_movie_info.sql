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
  `M_run` int DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movie_info`
--

LOCK TABLES `movie_info` WRITE;
/*!40000 ALTER TABLE `movie_info` DISABLE KEYS */;
INSERT INTO `movie_info` VALUES (9,'A01-001','007 노 타임 투 다이.jpg','007 노 타임 투 다이','No Time to Die','액션',163,'12세 이상','2021-09-29','가장 강력한 운명의 적과 마주하게된 제임스 본드의 마지막 미션이 시작된다.','캐리 후쿠나가','다니엘 크레이그','2021-10-01','2021-10-31','2021-10-10 16:56:02'),(10,'A01-002','보이스.jpg','보이스','On the Line','범죄, 액션',109,'15세 이상','2021-09-15','단 한 통의 전화! 걸려오는 순간 걸려들었다!','김선, 김곡','변요한, 김무열','2021-09-15','2022-03-01','2021-10-14 15:17:10'),(12,'A01-004','십개월의 미래.jpg','십개월의 미래','TEN Months','드라마',96,'12세 이상','2021-10-14','“나는 세상을 바꿀 프로그램 개발자, 29살 ‘최미래’ 그런데 어느 날 이름 앞에 몇 글자가 더 붙었다. ‘최 악의 미래’로…”  만성 숙취를 의심하던 미래는 자신이 임신 10주라는 사실을 알고 당황한다. 아무 예고 없이 찾아온 변수 앞에서 갈팡질팡하는 사이,  가족과 연인, 국가는 각기 다른 방향을 제시하고 미래의 십개월은 빠른 속도로 흘러간다.','남궁선','  최성은 ,  백현진 ,  서영주 ,  유이든','2021-10-14','2022-04-02','2021-10-14 15:24:21'),(13,'A01-005','타다.jpg','타다-대한민국 스타트업의 초상','TADA: A Portrait of Korean Startups','다큐멘터리',91,'전체','2021-10-14','타다금지법 이후 6개월간의 악전고투 이야기 \"어떻게든 살아남아야 한다!\"','권명국',' 박재욱 ,  이두희 ,  장병규 ,  이철희','2021-10-14','2022-01-05','2021-10-14 15:30:20'),(14,'A01-006','스틸워터.jpg','스틸워터 ','Stillwater','범죄, 드라마, 스릴러',138,'15세 이상','2021-10-06','진실을 파고들수록, 비밀은 깊어진다','토마스 맥카시','맷 데이먼, 아비게일 브레스린','2021-10-06','2022-02-10','2021-10-14 15:38:47'),(15,'A01-007','고양이를 부탁해.jpg','고양이를 부탁해 ','TAKE CARE OF MY CAT','드라마',112,'12세 이상','2021-10-13','스무 살, 사랑스러운 아이들의 겨울야화','정재은','배두나 ,  옥지영 ,  이요원 ,  이은실 ,  이은주(1)','2021-10-13','2022-03-15','2021-10-14 15:41:25'),(16,'A01-008','듄.jpg','듄','DUNE','SF',155,'12세 이상','2021-10-20','“듄을 지배하는 자가 우주를 지배한다!”','드니 빌뇌브',' 티모시 샬라메 ,  레베카 퍼거슨 ,  오스카 아이삭','2021-10-20','2022-05-20','2021-10-14 15:44:55'),(17,'A01-009','라스트 듀얼.jpg','라스트 듀얼-최후의 결투 ','The Last Duel','액션, 스릴러',153,'청소년 관람불가','2021-10-20','부조리한 권력과 야만의 시대, 14세기 프랑스. 유서 깊은 ‘카루주’ 가의 부인 ‘마르그리트’는 남편 ‘장’이 집을 비운 사이, 불시에 들이닥친 ‘장’의 친구 ‘자크’에게 씻을 수 없는 모욕을 당한다.','리들리 스콧','맷 데이먼 ,  아담 드라이버 ,  조디 코머 ,  벤 애플렉','2021-10-20','2022-04-10','2021-10-14 15:46:40'),(18,'P01-001','남자가 사랑할 때.jpg','남자가 사랑할 때','남자가 사랑할 때, 2013','드라마',120,'15세 이상,','2014-01-22','평생 사랑과는 거리가 멀었던 한 남자가 사랑에 눈 뜨다!  일생에 단 한번, 남자가 사랑할 때','한동욱','황정민 ,  한혜진 ,  곽도원 ,  정만식 ,  김혜은 ,  남일우','2014-01-22','2014-06-20','2021-10-14 16:11:48'),(19,'P01-002','뷰티 인사이드.jpg','뷰티 인사이드','The Beauty Inside, 2015','로맨스, 멜로',127,'12세 이상','2015-08-20','남자, 여자, 아이, 노인.. 심지어 외국인까지! 자고 일어나면 매일 다른 모습으로 변하는 남자, ‘우진’.  그에게 처음으로 비밀을 말하고 싶은 단 한 사람이 생겼다.','백종열','한효주 ,  김대명 ,  도지한 ,  배성우 ,  박신혜 ,  이범수 ,  박서준 ,  김상호 ,  천우희 ,  우에노 주리 ,  이재준 ,  김민재','2015-08-20','2016-02-01','2021-10-14 16:13:54'),(20,'A01-010','베놈.jpg','베놈 2-렛 데어 비 카니지','Venom: Let There Be Carnage','액션, 스릴러, SF',97,'15세 이상','2021-10-13','히어로의 시대는 끝났다 ‘베놈’과완벽한 파트너가 된 ‘에디 브록’(톰하디) 앞에 ‘클리터스 캐서디’(우디 해럴슨)가 ‘카니지’로 등장,  앞으로 닥칠 대혼돈의 세상을 예고한다. ','앤디 서키스','톰하디','2021-10-13','2022-05-23','2021-10-16 16:01:08');
/*!40000 ALTER TABLE `movie_info` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-01-11 23:05:50
