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
  `term` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `category_id` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activity`
--

LOCK TABLES `activity` WRITE;
/*!40000 ALTER TABLE `activity` DISABLE KEYS */;
INSERT INTO `activity` VALUES (4,'Quiz1',100.00,'first','2015-03-04 02:01:24','2015-03-04 02:01:24',11,'0000-00-00'),(5,'Quiz2',100.00,'first','2015-03-04 08:15:20','2015-03-04 08:15:20',11,'0000-00-00'),(6,'Quiz3',100.00,'first','2015-03-04 08:23:17','2015-03-04 08:23:17',11,'0000-00-00'),(7,'Exam1',100.00,'first','2015-03-04 17:55:41','2015-03-04 17:55:41',13,'0000-00-00'),(8,'Q1',100.00,'first','2015-03-05 01:15:29','2015-03-05 01:15:29',14,'0000-00-00'),(9,'Q2',80.00,'first','2015-03-05 15:28:50','2015-03-05 15:28:50',14,'2015-03-11');
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
  `requirement_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `percentage` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (11,15,'Quiz',30,'2015-03-04 02:00:40','2015-03-04 02:00:40'),(12,15,'Project',30,'2015-03-04 02:00:50','2015-03-04 02:00:50'),(13,15,'Term Exam',40,'2015-03-04 02:00:56','2015-03-04 02:00:56'),(14,16,'Quiz',20,'2015-03-05 01:11:09','2015-03-05 01:11:09'),(15,16,'Term Exam',40,'2015-03-05 01:11:19','2015-03-05 01:11:19'),(16,16,'Project',40,'2015-03-05 01:11:30','2015-03-05 01:11:30');
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
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lec_subject_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `day` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `faculty_id_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `requirement_id` int(11) NOT NULL,
  `passing` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `class_subject_code_unique` (`subject_code`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class`
--

LOCK TABLES `class` WRITE;
/*!40000 ALTER TABLE `class` DISABLE KEYS */;
INSERT INTO `class` VALUES (1,'ENGL 110','117_','LEC','','10:00-11:30','T_Th_','1001','2015-02-28 17:31:36','2015-03-04 01:58:17','xx-1',15,0),(2,'test','asd','LEC','','asd','ads','1111','2015-03-05 01:10:16','2015-03-05 01:10:56','xx-1',16,0);
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grade`
--

LOCK TABLES `grade` WRITE;
/*!40000 ALTER TABLE `grade` DISABLE KEYS */;
INSERT INTO `grade` VALUES (5,50.00,'12-1139',4,'2015-03-04 02:01:24','2015-03-05 12:50:56',''),(6,50.00,'12-3753',4,'2015-03-04 02:01:24','2015-03-05 12:26:09',''),(7,100.00,'12-1139',5,'2015-03-04 08:15:20','2015-03-05 12:52:13',''),(8,50.00,'12-3753',5,'2015-03-04 08:15:20','2015-03-05 12:26:57',''),(9,50.00,'12-1139',6,'2015-03-04 08:23:17','2015-03-04 08:23:17',''),(10,15.00,'12-3753',6,'2015-03-04 08:23:17','2015-03-05 13:05:11',''),(11,60.00,'12-1139',7,'2015-03-04 17:55:41','2015-03-04 18:01:46',''),(12,80.00,'12-3753',7,'2015-03-04 17:55:41','2015-03-04 17:56:30',''),(13,80.00,'12-1139',8,'2015-03-05 01:15:29','2015-03-05 13:03:37',''),(14,90.00,'12-3836',8,'2015-03-05 01:15:29','2015-03-05 13:04:48',''),(15,0.00,'12-1139',9,'2015-03-05 15:28:50','2015-03-05 15:28:50',''),(16,0.00,'12-3836',9,'2015-03-05 15:28:51','2015-03-05 15:28:51','');
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
INSERT INTO `migrations` VALUES ('2015_01_20_115537_create_students_table',1),('2015_01_20_115827_create_roster_table',1),('2015_01_20_120138_create_class_table',1),('2015_01_20_120421_create_faculty_table',1),('2015_01_20_120619_create_requirements_table',1),('2015_01_20_120905_create_activities_table',1),('2015_01_20_121045_create_grades_table',1),('2015_01_21_023429_create_users_table',1),('2015_01_26_142235_create_session_table',1),('2015_03_01_021652_add_faculty_id_number_to_class_table',2),('2015_03_01_081337_add_requirement_id_to_class_talble',3),('2015_03_01_102556_create_category_table',3),('2015_03_01_180728_modify_requirement_table',3),('2015_03_01_182738_add_categoryid_to_activity_talble',3),('2015_03_01_222736_remodify_requirement_table',4),('2015_03_01_223157_reremodify_requirement_table',5),('2015_03_02_054205_reremodify_class_table',6),('2015_03_02_054422_rereremodify_class_table',6),('2015_03_05_104738_add_comment_and_date_to_grade',7),('2015_03_05_105255_add_passing_to_class',7),('2015_03_05_180614_add_date_to_activity',7);
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
  `created_for_class` int(11) NOT NULL,
  `created_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requirement`
--

LOCK TABLES `requirement` WRITE;
/*!40000 ALTER TABLE `requirement` DISABLE KEYS */;
INSERT INTO `requirement` VALUES (15,'2015-03-04 01:58:17','2015-03-04 01:58:17',1,'xx-1'),(16,'2015-03-05 01:10:56','2015-03-05 01:10:56',2,'xx-1');
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
  `subj_grade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roster`
--

LOCK TABLES `roster` WRITE;
/*!40000 ALTER TABLE `roster` DISABLE KEYS */;
INSERT INTO `roster` VALUES (1,'1001','12-1139','44','2015-02-28 22:09:57','2015-03-05 13:05:18'),(2,'1001','12-3753','43.5','2015-02-28 22:40:24','2015-03-05 13:05:11'),(3,'1111','12-1139','16','2015-03-05 01:14:00','2015-03-05 13:03:37'),(4,'1111','12-3836','18','2015-03-05 01:14:16','2015-03-05 13:04:48');
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
INSERT INTO `users` VALUES (2,'admin','$2y$10$KH6FJqSywSkIMBaDyAIC4e6KEDtkIPdYy8q3AlwDfLku7o3tkLVzG','super-user','OLYIFdb0FOX8qbU8S1qxWqN1vytM0mqiYQJwYEq9G1x6PQd0kdaGj2ojMqKa','2015-02-18 00:41:05','2015-03-05 16:05:18'),(6,'xx-1','$2y$10$Q6SHkSEUr/KfqY4RLPcc7edJEYUKP5LJGX8Nj/li6i7ezuD9l0icO','FACULTY','fcW5RCXubU49N7JJCEtj9QTK3vORilADi27FuxKDWQmFTeViEqVTJKnHeQ3r','2015-02-24 16:36:32','2015-03-05 18:16:14'),(8,'xx-2','$2y$10$2kALEf1oDjj9MH9.n4kGtegFRAv4i96SkR9KDBhQJc/ppFL9SH1BW','FACULTY','Xz7z1IleexuFLhQtc6VCwMpJqG0SBG97erXD3AH1SXjYxconXkcey128PjrH','2015-02-25 05:53:05','2015-03-01 21:20:51');
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

-- Dump completed on 2015-03-06 14:27:26
