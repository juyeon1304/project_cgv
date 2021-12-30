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
-- Temporary view structure for view `view_timeinfo`
--

DROP TABLE IF EXISTS `view_timeinfo`;
/*!50001 DROP VIEW IF EXISTS `view_timeinfo`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `view_timeinfo` AS SELECT 
 1 AS `time_idx`,
 1 AS `thaeterCode`,
 1 AS `theaterName`,
 1 AS `roomCode`,
 1 AS `roomName`,
 1 AS `roomSeat`,
 1 AS `time_schedule`,
 1 AS `time_schedule_e`,
 1 AS `time_start`,
 1 AS `time_end`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `view_timeinfo`
--

/*!50001 DROP VIEW IF EXISTS `view_timeinfo`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_timeinfo` AS select `time_info`.`time_idx` AS `time_idx`,`time_info`.`time_theater` AS `thaeterCode`,(select `theater_info`.`theater_name` from `theater_info` where (`theater_info`.`theater_idx` = `time_info`.`time_theater`)) AS `theaterName`,`time_info`.`time_room` AS `roomCode`,(select `room_info`.`room_name` from `room_info` where ((`room_info`.`room_theater` = `time_info`.`time_theater`) and (`room_info`.`room_idx` = `time_info`.`time_room`))) AS `roomName`,(select `room_info`.`room_seat` from `room_info` where ((`room_info`.`room_theater` = `time_info`.`time_theater`) and (`room_info`.`room_idx` = `time_info`.`time_room`))) AS `roomSeat`,`time_info`.`time_schedule` AS `time_schedule`,`time_info`.`time_schedule_e` AS `time_schedule_e`,`time_info`.`time_start` AS `time_start`,`time_info`.`time_end` AS `time_end` from `time_info` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-30 17:09:39
