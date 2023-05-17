-- MySQL dump 10.13  Distrib 8.0.33, for Linux (x86_64)
--
-- Host: localhost    Database: ict4pwds
-- ------------------------------------------------------
-- Server version	8.0.33-0ubuntu0.22.10.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin_menu`
--

DROP TABLE IF EXISTS `admin_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin_menu` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int NOT NULL DEFAULT '0',
  `order` int NOT NULL DEFAULT '0',
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `uri` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permission` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_menu`
--

LOCK TABLES `admin_menu` WRITE;
/*!40000 ALTER TABLE `admin_menu` DISABLE KEYS */;
INSERT INTO `admin_menu` VALUES (1,0,1,'Dashboard','fa-bar-chart','/',NULL,NULL,'2023-01-02 09:29:01'),(2,0,18,'Admin','fa-tasks','',NULL,NULL,'2023-05-15 06:08:36'),(3,2,19,'System Users','fa-users','auth/users',NULL,NULL,'2023-05-15 06:08:36'),(7,2,22,'Operation log','fa-history','auth/logs',NULL,NULL,'2023-05-15 06:08:36'),(12,2,20,'Members','fa-users','members',NULL,'2022-12-31 20:31:16','2023-05-15 06:08:36'),(13,2,21,'Post categories','fa-align-center','post-categories',NULL,'2023-01-01 15:58:24','2023-05-15 06:08:36'),(14,0,10,'News','fa-file-text','news-posts',NULL,'2023-01-01 16:10:53','2023-05-15 06:08:36'),(16,0,9,'Events','fa-calendar-check-o','events',NULL,'2023-01-01 20:09:45','2023-05-15 06:08:36'),(17,41,14,'My event bookings','fa-file-text-o','event-bookings',NULL,'2023-01-01 20:58:04','2023-05-15 06:08:36'),(19,0,15,'Edit my profile','fa-edit','auth/setting',NULL,'2023-01-02 09:32:35','2023-05-15 06:08:36'),(21,0,3,'Registration forms','fa-wpforms',NULL,NULL,'2023-02-24 16:48:56','2023-02-26 17:42:04'),(26,0,16,'System configuration','fa-cogs','disabilities',NULL,'2023-02-24 18:29:32','2023-05-15 06:08:36'),(27,26,17,'Disabilities','fa-adjust','disabilities',NULL,'2023-02-24 18:30:13','2023-05-15 06:08:36'),(30,0,8,'Jobs and Opportunities','fa-joomla','jobs',NULL,'2023-02-25 21:23:34','2023-05-15 06:08:36'),(31,41,12,'Job applications','fa-wpforms','job-applications',NULL,'2023-02-25 21:57:09','2023-05-15 06:08:36'),(32,0,7,'Products & Services','fa-inbox','products',NULL,'2023-02-25 22:16:26','2023-05-15 06:08:36'),(33,41,13,'Product orders','fa-opencart','product-orders',NULL,'2023-02-25 22:24:10','2023-05-15 06:08:36'),(34,0,2,'Main website','fa-home','https://ict4personswithdisabilities.org',NULL,'2023-02-26 17:10:37','2023-02-26 17:10:42'),(35,21,5,'Person with disability','fa-user-plus','people/create',NULL,'2023-02-26 17:15:04','2023-05-15 06:08:36'),(38,21,6,'Service provider','fa-cart-arrow-down','service-providers/create',NULL,'2023-02-26 17:24:30','2023-05-15 06:08:36'),(41,0,11,'My Account','fa-user',NULL,NULL,'2023-02-26 17:40:38','2023-05-15 06:08:36'),(42,21,4,'Organisations','fa-building','organisations/create',NULL,'2023-05-15 06:08:28','2023-05-15 06:09:59');
/*!40000 ALTER TABLE `admin_menu` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-16 16:28:54
