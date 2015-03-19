-- MySQL dump 10.13  Distrib 5.6.16, for Win32 (x86)
--
-- Host: localhost    Database: ecr_db
-- ------------------------------------------------------
-- Server version	5.6.16

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `activity`
--

DROP TABLE IF EXISTS `activity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activity` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `max_score` decimal(8,2) NOT NULL,
  `term` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date` date NOT NULL,
  `requirement_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activity`
--

LOCK TABLES `activity` WRITE;
/*!40000 ALTER TABLE `activity` DISABLE KEYS */;
INSERT INTO `activity` VALUES (1,'Q1',100.00,0,'2015-03-12 15:54:49','2015-03-12 15:54:49','2015-03-13',3,1),(2,'P1',100.00,0,'2015-03-12 15:55:10','2015-03-12 15:55:10','2015-03-13',1,1),(3,'T1',100.00,0,'2015-03-12 15:55:32','2015-03-12 15:55:32','2015-03-13',2,1),(4,'Q1',100.00,0,'2015-03-12 16:28:04','2015-03-12 16:28:04','2015-03-13',5,2),(6,'Q2',100.00,0,'2015-03-12 16:59:03','2015-03-12 16:59:03','2015-03-13',6,2),(7,'A1',100.00,0,'2015-03-12 18:03:12','2015-03-12 18:03:12','2015-03-13',7,3),(8,'Prac1',100.00,0,'2015-03-12 18:03:47','2015-03-12 18:03:47','2015-03-13',8,3),(9,'Proj1',100.00,0,'2015-03-12 18:04:19','2015-03-12 18:13:21','2015-03-13',9,3),(10,'Quiz 2',20.00,0,'2015-03-13 01:34:37','2015-03-13 01:34:37','2015-02-10',1,1),(11,'Q3',80.00,0,'2015-03-13 22:43:20','2015-03-13 22:44:05','2015-03-14',3,1),(12,'Q4',50.00,0,'2015-03-13 22:43:46','2015-03-13 22:43:46','2015-03-14',3,1),(13,'Q2',80.00,0,'2015-03-13 22:44:34','2015-03-13 22:44:34','2015-03-14',1,1),(14,'Q5',100.00,0,'2015-03-13 22:44:59','2015-03-13 22:44:59','2015-03-14',1,1),(15,'P2',100.00,0,'2015-03-13 22:45:36','2015-03-13 22:45:36','2015-03-14',1,1),(16,'P3',80.00,0,'2015-03-13 22:46:20','2015-03-13 22:46:20','2015-03-14',1,1),(17,'T2',100.00,0,'2015-03-13 22:47:07','2015-03-13 22:47:07','2015-03-14',2,1),(18,'T3',50.00,0,'2015-03-13 22:47:43','2015-03-13 22:47:43','2015-03-14',2,1),(19,'P2',50.00,0,'2015-03-13 22:49:05','2015-03-13 22:49:05','2015-03-14',1,1),(20,'Q5',100.00,0,'2015-03-13 23:53:00','2015-03-13 23:53:00','2015-03-14',3,1),(21,'Q6',100.00,0,'2015-03-13 23:53:41','2015-03-13 23:53:41','2015-03-14',3,1),(22,'Q7',100.00,0,'2015-03-13 23:54:02','2015-03-13 23:54:02','2015-03-14',1,1),(23,'Q7',100.00,0,'2015-03-13 23:54:26','2015-03-13 23:54:26','2015-03-14',1,1),(24,'Q8',100.00,0,'2015-03-13 23:55:08','2015-03-13 23:55:08','2015-03-14',3,1),(25,'Q9',100.00,0,'2015-03-13 23:55:32','2015-03-13 23:55:32','2015-03-14',3,1),(26,'Q10',100.00,0,'2015-03-13 23:57:24','2015-03-13 23:57:24','2015-03-14',3,1),(31,'CS1',100.00,0,'2015-03-15 20:27:43','2015-03-15 20:27:43','2015-03-16',17,5),(32,'CS2',100.00,0,'2015-03-15 20:29:39','2015-03-15 20:29:39','2015-03-16',17,5),(33,'CS3',100.00,0,'2015-03-15 20:29:54','2015-03-15 20:29:54','2015-03-16',17,5),(34,'Q11',40.00,0,'2015-03-15 20:30:24','2015-03-15 20:30:24','2015-03-16',19,5),(35,'Q12',60.00,0,'2015-03-15 20:30:46','2015-03-16 02:55:48','2015-03-16',19,5),(36,'P1',10.00,0,'2015-03-15 20:43:18','2015-03-15 20:43:18','2015-03-16',20,5),(37,'EX1',100.00,0,'2015-03-15 20:44:11','2015-03-16 02:56:21','2015-03-16',18,5),(38,'Q21',50.00,0,'2015-03-15 20:46:11','2015-03-15 20:46:11','2015-03-16',19,5),(39,'Q22',50.00,0,'2015-03-15 20:46:29','2015-03-15 20:46:51','2015-03-16',19,5),(40,'P2',20.00,0,'2015-03-15 20:47:32','2015-03-16 02:56:15','2015-03-16',20,5),(41,'EX2',100.00,0,'2015-03-15 20:47:52','2015-03-16 02:57:49','2015-03-16',18,5),(42,'Q31',30.00,0,'2015-03-15 20:48:43','2015-03-16 02:56:34','2015-03-16',19,5),(43,'Q32',70.00,0,'2015-03-15 20:49:15','2015-03-15 20:49:15','2015-03-16',19,5),(44,'P3',100.00,0,'2015-03-15 20:49:44','2015-03-16 02:55:59','2015-03-14',20,5),(45,'EX3',100.00,0,'2015-03-15 20:50:23','2015-03-15 20:50:23','2015-03-16',18,5);
/*!40000 ALTER TABLE `activity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Term Exam','2015-03-12 10:02:23','2015-03-12 10:02:23'),(2,'Quiz','2015-03-12 10:02:42','2015-03-12 10:02:42'),(3,'Project','2015-03-12 10:02:57','2015-03-12 10:02:57'),(4,'Practical','2015-03-12 11:29:58','2015-03-12 11:29:58'),(5,'Activity','2015-03-12 18:00:46','2015-03-12 18:00:46'),(6,'Class Standing','2015-03-15 20:16:22','2015-03-15 20:16:22');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `catalogue_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `room` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` tinyint(4) DEFAULT NULL,
  `lec_subject_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `day` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `faculty_id_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `requirement_id` int(11) NOT NULL,
  `passing` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `class_subject_code_unique` (`subject_code`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class`
--

LOCK TABLES `class` WRITE;
/*!40000 ALTER TABLE `class` DISABLE KEYS */;
INSERT INTO `class` VALUES (1,'ENGL 110','117_',0,'','10:00-11:30','T_Th_','1001','2015-02-28 17:31:36','2015-03-04 01:58:17','xx-1',15,0),(2,'test','asd',0,'','asd','ads','1111','2015-03-05 01:10:16','2015-03-06 17:56:38','xx-1',16,0),(3,'LAB TEST','asd',0,'1111','asd','asd','1112','2015-03-05 23:42:26','2015-03-18 13:21:44','xx-2',17,60),(4,'LAB TEST 2','sad',0,'1111','sad','sad','1113','2015-03-09 22:49:09','2015-03-09 22:49:09','xx-1',17,0),(5,'ComSci 211 Lec','asd',0,'','asd','asd','1234','2015-03-15 19:55:08','2015-03-18 13:23:05','xx-1',0,60);
/*!40000 ALTER TABLE `class` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faculty` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `faculty_id_number_unique` (`id_number`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faculty`
--

LOCK TABLES `faculty` WRITE;
/*!40000 ALTER TABLE `faculty` DISABLE KEYS */;
INSERT INTO `faculty` VALUES (1,'testing','test','t','xx-1','2015-02-24 16:36:32','2015-02-24 20:13:23'),(3,'testing','test','test','xx-2','2015-02-25 05:53:05','2015-02-25 05:53:05');
/*!40000 ALTER TABLE `faculty` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grade`
--

DROP TABLE IF EXISTS `grade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grade` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `score` decimal(10,2) NOT NULL,
  `id_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `act_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=135 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grade`
--

LOCK TABLES `grade` WRITE;
/*!40000 ALTER TABLE `grade` DISABLE KEYS */;
INSERT INTO `grade` VALUES (1,20.00,'12-1139',1,'2015-03-12 15:54:49','2015-03-14 19:54:41',''),(2,100.00,'12-3753',1,'2015-03-12 15:54:50','2015-03-12 15:56:12',''),(3,98.00,'12-1139',2,'2015-03-12 15:55:10','2015-03-12 15:56:00',''),(4,20.00,'12-3753',2,'2015-03-12 15:55:10','2015-03-14 19:53:51',''),(5,100.00,'12-1139',3,'2015-03-12 15:55:32','2015-03-15 15:48:06',''),(6,100.00,'12-3753',3,'2015-03-12 15:55:32','2015-03-12 15:56:18',''),(7,20.00,'12-1139',4,'2015-03-12 16:28:04','2015-03-14 19:57:58',''),(8,80.00,'12-3836',4,'2015-03-12 16:28:05','2015-03-12 16:59:21',''),(11,20.00,'12-1139',6,'2015-03-12 16:59:04','2015-03-14 19:55:38',''),(12,30.00,'12-3836',6,'2015-03-12 16:59:04','2015-03-14 20:04:36',''),(13,0.00,'12-1139',7,'2015-03-12 18:03:12','2015-03-12 18:03:12',''),(14,0.00,'12-3836',7,'2015-03-12 18:03:13','2015-03-12 18:03:13',''),(15,0.00,'12-1139',8,'2015-03-12 18:03:47','2015-03-12 18:03:47',''),(16,0.00,'12-3836',8,'2015-03-12 18:03:48','2015-03-12 18:03:48',''),(17,0.00,'12-1139',9,'2015-03-12 18:04:19','2015-03-12 18:04:19',''),(18,0.00,'12-3836',9,'2015-03-12 18:04:19','2015-03-12 18:04:19',''),(19,0.00,'12-1139',10,'2015-03-13 01:34:38','2015-03-13 01:34:38',''),(20,0.00,'12-3753',10,'2015-03-13 01:34:38','2015-03-13 01:34:38',''),(21,20.00,'12-1139',11,'2015-03-13 22:43:20','2015-03-14 20:05:03',''),(22,30.00,'12-3753',11,'2015-03-13 22:43:20','2015-03-14 20:10:48',''),(23,50.00,'12-1139',12,'2015-03-13 22:43:46','2015-03-14 20:07:56',''),(24,0.00,'12-3753',12,'2015-03-13 22:43:47','2015-03-13 22:43:47',''),(25,0.00,'12-1139',13,'2015-03-13 22:44:34','2015-03-13 22:44:34',''),(26,0.00,'12-3753',13,'2015-03-13 22:44:35','2015-03-13 22:44:35',''),(27,0.00,'12-1139',14,'2015-03-13 22:44:59','2015-03-13 22:44:59',''),(28,0.00,'12-3753',14,'2015-03-13 22:44:59','2015-03-13 22:44:59',''),(29,0.00,'12-1139',15,'2015-03-13 22:45:36','2015-03-13 22:45:36',''),(30,0.00,'12-3753',15,'2015-03-13 22:45:37','2015-03-13 22:45:37',''),(31,80.00,'12-1139',16,'2015-03-13 22:46:20','2015-03-14 20:11:03',''),(32,80.00,'12-3753',16,'2015-03-13 22:46:20','2015-03-14 20:11:04',''),(33,0.00,'12-1139',17,'2015-03-13 22:47:07','2015-03-13 22:47:07',''),(34,0.00,'12-3753',17,'2015-03-13 22:47:07','2015-03-13 22:47:07',''),(35,50.00,'12-1139',18,'2015-03-13 22:47:43','2015-03-15 15:48:46',''),(36,50.00,'12-3753',18,'2015-03-13 22:47:43','2015-03-15 15:48:46',''),(37,0.00,'12-1139',19,'2015-03-13 22:49:05','2015-03-13 22:49:05',''),(38,0.00,'12-3753',19,'2015-03-13 22:49:05','2015-03-13 22:49:05',''),(39,0.00,'12-1139',20,'2015-03-13 23:53:00','2015-03-13 23:53:00',''),(40,0.00,'12-3753',20,'2015-03-13 23:53:00','2015-03-13 23:53:00',''),(41,0.00,'12-1139',21,'2015-03-13 23:53:41','2015-03-13 23:53:41',''),(42,0.00,'12-3753',21,'2015-03-13 23:53:41','2015-03-13 23:53:41',''),(43,100.00,'12-1139',22,'2015-03-13 23:54:02','2015-03-15 19:25:33',''),(44,100.00,'12-3753',22,'2015-03-13 23:54:02','2015-03-15 19:25:33',''),(45,100.00,'12-1139',23,'2015-03-13 23:54:26','2015-03-15 01:05:10',''),(46,100.00,'12-3753',23,'2015-03-13 23:54:26','2015-03-15 01:05:10',''),(47,0.00,'12-1139',24,'2015-03-13 23:55:08','2015-03-13 23:55:08',''),(48,0.00,'12-3753',24,'2015-03-13 23:55:08','2015-03-13 23:55:08',''),(49,0.00,'12-1139',25,'2015-03-13 23:55:32','2015-03-13 23:55:32',''),(50,0.00,'12-3753',25,'2015-03-13 23:55:32','2015-03-13 23:55:32',''),(51,100.00,'12-1139',26,'2015-03-13 23:57:25','2015-03-15 15:47:52',''),(52,100.00,'12-3753',26,'2015-03-13 23:57:25','2015-03-15 15:47:53',''),(53,90.00,'12-1139',27,'2015-03-15 20:19:34','2015-03-15 20:19:34',''),(54,90.00,'12-1139',28,'2015-03-15 20:21:26','2015-03-15 20:21:26',''),(55,90.00,'12-3753',28,'2015-03-15 20:21:26','2015-03-15 20:21:26',''),(56,90.00,'12-1139',29,'2015-03-15 20:23:41','2015-03-15 20:23:41',''),(57,90.00,'12-3753',29,'2015-03-15 20:23:41','2015-03-15 20:23:41',''),(58,90.00,'12-1139',30,'2015-03-15 20:24:38','2015-03-15 20:24:38',''),(59,90.00,'12-3753',30,'2015-03-15 20:24:38','2015-03-15 20:24:38',''),(60,90.00,'12-1139',31,'2015-03-15 20:27:43','2015-03-15 20:27:43',''),(61,90.00,'12-3753',31,'2015-03-15 20:27:43','2015-03-15 20:27:43',''),(62,90.00,'12-3836',31,'2015-03-15 20:27:43','2015-03-15 20:27:43',''),(63,90.00,'13-8355',31,'2015-03-15 20:27:43','2015-03-15 20:27:43',''),(64,90.00,'12-4675',31,'2015-03-15 20:27:43','2015-03-15 20:27:43',''),(65,90.00,'12-1139',32,'2015-03-15 20:29:39','2015-03-15 20:29:39',''),(66,90.00,'12-3753',32,'2015-03-15 20:29:39','2015-03-15 20:29:39',''),(67,90.00,'12-3836',32,'2015-03-15 20:29:39','2015-03-15 20:29:39',''),(68,85.00,'13-8355',32,'2015-03-15 20:29:39','2015-03-15 20:53:50',''),(69,90.00,'12-4675',32,'2015-03-15 20:29:39','2015-03-15 20:29:39',''),(70,90.00,'12-1139',33,'2015-03-15 20:29:54','2015-03-15 20:29:54',''),(71,90.00,'12-3753',33,'2015-03-15 20:29:54','2015-03-15 20:29:54',''),(72,90.00,'12-3836',33,'2015-03-15 20:29:54','2015-03-15 20:29:54',''),(73,90.00,'13-8355',33,'2015-03-15 20:29:54','2015-03-15 20:29:54',''),(74,90.00,'12-4675',33,'2015-03-15 20:29:54','2015-03-15 20:29:54',''),(75,30.00,'12-1139',34,'2015-03-15 20:30:25','2015-03-15 21:00:07',''),(76,28.00,'12-3753',34,'2015-03-15 20:30:25','2015-03-15 21:00:07',''),(77,20.00,'12-3836',34,'2015-03-15 20:30:25','2015-03-15 21:00:07',''),(78,18.00,'13-8355',34,'2015-03-15 20:30:25','2015-03-15 21:00:07',''),(79,28.00,'12-4675',34,'2015-03-15 20:30:25','2015-03-15 21:00:07',''),(80,30.00,'12-1139',35,'2015-03-15 20:30:46','2015-03-15 21:08:42',''),(81,34.00,'12-3753',35,'2015-03-15 20:30:46','2015-03-15 21:08:42',''),(82,28.00,'12-3836',35,'2015-03-15 20:30:46','2015-03-15 21:08:42',''),(83,44.00,'13-8355',35,'2015-03-15 20:30:46','2015-03-15 21:08:42',''),(84,42.00,'12-4675',35,'2015-03-15 20:30:46','2015-03-15 21:08:42',''),(85,8.00,'12-1139',36,'2015-03-15 20:43:18','2015-03-15 20:59:10',''),(86,9.00,'12-3753',36,'2015-03-15 20:43:18','2015-03-15 20:59:10',''),(87,9.00,'12-3836',36,'2015-03-15 20:43:18','2015-03-15 20:59:11',''),(88,0.00,'13-8355',36,'2015-03-15 20:43:18','2015-03-15 20:59:11',''),(89,7.00,'12-4675',36,'2015-03-15 20:43:18','2015-03-15 20:59:11',''),(90,66.00,'12-1139',37,'2015-03-15 20:44:11','2015-03-15 20:55:58',''),(91,36.00,'12-3753',37,'2015-03-15 20:44:11','2015-03-15 20:55:58',''),(92,44.00,'12-3836',37,'2015-03-15 20:44:11','2015-03-15 20:55:58',''),(93,54.00,'13-8355',37,'2015-03-15 20:44:11','2015-03-15 20:55:59',''),(94,44.00,'12-4675',37,'2015-03-15 20:44:11','2015-03-15 20:55:59',''),(95,46.00,'12-1139',38,'2015-03-15 20:46:11','2015-03-15 21:10:47',''),(96,40.00,'12-3753',38,'2015-03-15 20:46:11','2015-03-15 21:10:47',''),(97,33.00,'12-3836',38,'2015-03-15 20:46:11','2015-03-15 21:10:47',''),(98,42.00,'13-8355',38,'2015-03-15 20:46:11','2015-03-15 21:10:47',''),(99,32.00,'12-4675',38,'2015-03-15 20:46:11','2015-03-15 21:10:47',''),(100,36.00,'12-1139',39,'2015-03-15 20:46:29','2015-03-15 21:03:00',''),(101,34.00,'12-3753',39,'2015-03-15 20:46:30','2015-03-15 21:03:01',''),(102,44.00,'12-3836',39,'2015-03-15 20:46:30','2015-03-15 21:03:01',''),(103,27.00,'13-8355',39,'2015-03-15 20:46:30','2015-03-15 21:03:01',''),(104,35.00,'12-4675',39,'2015-03-15 20:46:30','2015-03-15 21:03:01',''),(105,20.00,'12-1139',40,'2015-03-15 20:47:32','2015-03-15 20:56:52',''),(106,15.00,'12-3753',40,'2015-03-15 20:47:33','2015-03-15 20:56:52',''),(107,20.00,'12-3836',40,'2015-03-15 20:47:33','2015-03-15 20:56:52',''),(108,13.00,'13-8355',40,'2015-03-15 20:47:33','2015-03-15 20:56:52',''),(109,8.00,'12-4675',40,'2015-03-15 20:47:33','2015-03-15 20:56:52',''),(110,70.00,'12-1139',41,'2015-03-15 20:47:52','2015-03-15 20:58:27',''),(111,40.00,'12-3753',41,'2015-03-15 20:47:52','2015-03-15 20:58:27',''),(112,80.00,'12-3836',41,'2015-03-15 20:47:52','2015-03-15 20:58:27',''),(113,55.00,'13-8355',41,'2015-03-15 20:47:52','2015-03-15 20:58:27',''),(114,30.00,'12-4675',41,'2015-03-15 20:47:52','2015-03-15 20:58:27',''),(115,18.00,'12-1139',42,'2015-03-15 20:48:43','2015-03-15 20:57:43',''),(116,11.00,'12-3753',42,'2015-03-15 20:48:43','2015-03-15 20:57:43',''),(117,14.00,'12-3836',42,'2015-03-15 20:48:43','2015-03-15 20:57:43',''),(118,18.00,'13-8355',42,'2015-03-15 20:48:43','2015-03-15 20:57:43',''),(119,20.00,'12-4675',42,'2015-03-15 20:48:43','2015-03-15 20:57:43',''),(120,38.00,'12-1139',43,'2015-03-15 20:49:15','2015-03-15 21:01:27',''),(121,47.00,'12-3753',43,'2015-03-15 20:49:15','2015-03-15 21:01:27',''),(122,36.00,'12-3836',43,'2015-03-15 20:49:15','2015-03-15 21:01:27',''),(123,38.00,'13-8355',43,'2015-03-15 20:49:15','2015-03-15 21:01:27',''),(124,44.00,'12-4675',43,'2015-03-15 20:49:15','2015-03-15 21:01:28',''),(125,98.00,'12-1139',44,'2015-03-15 20:49:45','2015-03-15 20:52:50',''),(126,98.00,'12-3753',44,'2015-03-15 20:49:45','2015-03-15 20:52:50',''),(127,65.00,'12-3836',44,'2015-03-15 20:49:45','2015-03-15 20:52:50',''),(128,75.00,'13-8355',44,'2015-03-15 20:49:45','2015-03-15 20:52:50',''),(129,95.00,'12-4675',44,'2015-03-15 20:49:45','2015-03-15 20:52:50',''),(130,66.00,'12-1139',45,'2015-03-15 20:50:23','2015-03-15 21:04:09',''),(131,70.00,'12-3753',45,'2015-03-15 20:50:23','2015-03-15 21:04:09',''),(132,88.00,'12-3836',45,'2015-03-15 20:50:23','2015-03-15 21:04:09',''),(133,62.00,'13-8355',45,'2015-03-15 20:50:23','2015-03-15 21:04:10',''),(134,60.00,'12-4675',45,'2015-03-15 20:50:23','2015-03-15 21:04:10','');
/*!40000 ALTER TABLE `grade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2015_01_20_115537_create_students_table',1),('2015_01_20_115827_create_roster_table',1),('2015_01_20_120138_create_class_table',1),('2015_01_20_120421_create_faculty_table',1),('2015_01_20_120619_create_requirements_table',1),('2015_01_20_120905_create_activities_table',1),('2015_01_20_121045_create_grades_table',1),('2015_01_21_023429_create_users_table',1),('2015_01_26_142235_create_session_table',1),('2015_03_01_021652_add_faculty_id_number_to_class_table',2),('2015_03_01_081337_add_requirement_id_to_class_talble',3),('2015_03_01_102556_create_category_table',3),('2015_03_01_180728_modify_requirement_table',3),('2015_03_01_182738_add_categoryid_to_activity_talble',3),('2015_03_01_222736_remodify_requirement_table',4),('2015_03_01_223157_reremodify_requirement_table',5),('2015_03_02_054205_reremodify_class_table',6),('2015_03_02_054422_rereremodify_class_table',6),('2015_03_05_104738_add_comment_and_date_to_grade',7),('2015_03_05_105255_add_passing_to_class',7),('2015_03_05_180614_add_date_to_activity',7),('2015_03_08_052949_change_subj_grade_to_decimal',8),('2015_03_08_055010_just_like_upside',8),('2015_03_12_171603_modify_requirement_table',9),('2015_03_12_173714_modify_category_table',10),('2015_03_12_174024_modify_activity_table',11),('2015_03_17_224238_change_class_datatypes',12),('2015_03_17_224659_change_requirement_percentage_datatype',12),('2015_03_17_225125_change_activity_term_datatype',12),('2015_03_17_230007_change_roster_addtable_subjpoint_grade',12);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `requirement`
--

DROP TABLE IF EXISTS `requirement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `requirement` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `category_id` int(11) NOT NULL,
  `percentage` tinyint(4) DEFAULT NULL,
  `class_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requirement`
--

LOCK TABLES `requirement` WRITE;
/*!40000 ALTER TABLE `requirement` DISABLE KEYS */;
INSERT INTO `requirement` VALUES (1,'2015-03-12 11:48:45','2015-03-12 11:48:45',3,30,1),(2,'2015-03-12 11:48:49','2015-03-12 11:48:49',1,40,1),(3,'2015-03-12 11:48:55','2015-03-12 11:48:55',2,30,1),(4,'2015-03-12 16:24:37','2015-03-12 16:24:37',1,40,2),(5,'2015-03-12 16:24:45','2015-03-12 16:24:45',3,40,2),(6,'2015-03-12 16:24:50','2015-03-12 16:24:50',2,20,2),(7,'2015-03-12 18:01:16','2015-03-12 18:01:16',5,20,3),(8,'2015-03-12 18:02:19','2015-03-12 18:02:19',4,40,3),(9,'2015-03-12 18:02:33','2015-03-12 18:02:33',3,40,3),(13,'2015-03-15 20:17:09','2015-03-15 20:17:09',6,10,4),(14,'2015-03-15 20:17:10','2015-03-15 20:17:10',2,15,4),(15,'2015-03-15 20:17:10','2015-03-15 20:17:10',3,15,4),(16,'2015-03-15 20:17:10','2015-03-15 20:17:10',1,60,4),(17,'2015-03-15 20:18:21','2015-03-15 20:18:21',6,10,5),(18,'2015-03-15 20:18:21','2015-03-15 20:18:21',1,60,5),(19,'2015-03-15 20:18:21','2015-03-15 20:18:21',2,15,5),(20,'2015-03-15 20:18:21','2015-03-15 20:18:21',3,15,5);
/*!40000 ALTER TABLE `requirement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roster`
--

DROP TABLE IF EXISTS `roster`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roster` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subject_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `subj_grade` decimal(6,2) NOT NULL,
  `subjpoint_grade` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roster`
--

LOCK TABLES `roster` WRITE;
/*!40000 ALTER TABLE `roster` DISABLE KEYS */;
INSERT INTO `roster` VALUES (1,'1001','12-1139','2015-02-28 22:09:57','2015-03-18 13:18:30',47.34,'3'),(2,'1001','12-3753','2015-02-28 22:40:24','2015-03-18 13:14:46',45.78,'3'),(3,'1111','12-1139','2015-03-05 01:14:00','2015-03-14 19:55:38',16.29,''),(4,'1111','12-3836','2015-03-05 01:14:16','2015-03-12 16:59:21',54.44,''),(5,'1112','12-1139','2015-03-05 23:43:18','2015-03-07 23:50:14',25.00,''),(6,'1112','12-3836','2015-03-05 23:43:47','2015-03-11 15:04:21',100.00,''),(7,'1113','12-4604','2015-03-09 22:52:04','2015-03-09 22:52:04',0.00,''),(8,'1113','12-4675','2015-03-09 22:52:24','2015-03-09 22:52:24',0.00,''),(9,'1234','12-1139','2015-03-15 19:58:10','2015-03-18 13:41:45',73.84,'2.25'),(10,'1234','13-8355','2015-03-15 19:58:26','2015-03-18 13:24:08',62.54,'3'),(12,'1234','12-4675','2015-03-15 19:59:02','2015-03-18 13:24:00',58.54,'5'),(13,'1234','12-3753','2015-03-15 19:59:18','2015-03-18 13:41:42',61.98,'3'),(16,'1234','12-3836','2015-03-15 20:00:40','2015-03-18 13:41:51',71.00,'2.5');
/*!40000 ALTER TABLE `roster` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  UNIQUE KEY `sessions_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `student_id_number_unique` (`id_number`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (1,'Alday','Paul Austian','A','12-1139','BSIT 3-2','2015-02-18 01:21:23','2015-02-18 01:21:23'),(2,'Talplacido','Miguel Paulo','A','12-4604','BSIT 3-2','2015-02-25 18:44:08','2015-02-25 18:44:08'),(4,'Ortiz','Hanna Lea','B','12-3753','BSIT 3-2','2015-02-28 14:54:29','2015-02-28 14:54:29'),(5,'Primo','Roger Jr','C','13-8355','BSIT 3-2','2015-02-28 14:55:30','2015-02-28 15:01:21'),(6,'Torne','Billy Joe','B','12-4675','BSIT 3-2','2015-02-28 14:56:22','2015-02-28 14:56:22'),(7,'Palileo','Jonathan','Q','12-3836','BSIT 3-2','2015-02-28 14:56:58','2015-02-28 14:56:58');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'admin','$2y$10$KH6FJqSywSkIMBaDyAIC4e6KEDtkIPdYy8q3AlwDfLku7o3tkLVzG','super-user','tBcUI1YWKhHQFj6leUUsJIfxB58wbypXqvkyXtetBSNrRMAR9RprBnrhZHtv','2015-02-18 00:41:05','2015-03-18 19:35:19'),(6,'xx-1','$2y$10$Q6SHkSEUr/KfqY4RLPcc7edJEYUKP5LJGX8Nj/li6i7ezuD9l0icO','FACULTY','1jo3Kqe5f62FFBYIwvwRc68dmXHoAJG68LWE73PLhfY7Aahw9bbFuIgebhZ0','2015-02-24 16:36:32','2015-03-18 19:46:53'),(8,'xx-2','$2y$10$2kALEf1oDjj9MH9.n4kGtegFRAv4i96SkR9KDBhQJc/ppFL9SH1BW','FACULTY','8iOpt1v6lSxJh2UYIZ6WqzyavhME0DkxXiLDKW2HXVODgTuYTKM65lTEucm8','2015-02-25 05:53:05','2015-03-12 19:19:52');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-03-19 12:38:40
