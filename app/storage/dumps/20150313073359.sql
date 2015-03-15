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
  `date` date NOT NULL,
  `requirement_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activity`
--

LOCK TABLES `activity` WRITE;
/*!40000 ALTER TABLE `activity` DISABLE KEYS */;
INSERT INTO `activity` VALUES (1,'Q1',100.00,'first','2015-03-12 15:54:49','2015-03-12 15:54:49','2015-03-13',3,1),(2,'P1',100.00,'first','2015-03-12 15:55:10','2015-03-12 15:55:10','2015-03-13',1,1),(3,'T1',100.00,'first','2015-03-12 15:55:32','2015-03-12 15:55:32','2015-03-13',2,1),(4,'Q1',100.00,'first','2015-03-12 16:28:04','2015-03-12 16:28:04','2015-03-13',5,2),(6,'Q2',100.00,'first','2015-03-12 16:59:03','2015-03-12 16:59:03','2015-03-13',6,2),(7,'A1',100.00,'first','2015-03-12 18:03:12','2015-03-12 18:03:12','2015-03-13',7,3),(8,'Prac1',100.00,'first','2015-03-12 18:03:47','2015-03-12 18:03:47','2015-03-13',8,3),(9,'Proj1',100.00,'first','2015-03-12 18:04:19','2015-03-12 18:13:21','2015-03-13',9,3);
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
INSERT INTO `category` VALUES (1,'Term Exam','2015-03-12 10:02:23','2015-03-12 10:02:23'),(2,'Quiz','2015-03-12 10:02:42','2015-03-12 10:02:42'),(3,'Project','2015-03-12 10:02:57','2015-03-12 10:02:57'),(4,'Practical','2015-03-12 11:29:58','2015-03-12 11:29:58'),(5,'Activity','2015-03-12 18:00:46','2015-03-12 18:00:46');
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class`
--

LOCK TABLES `class` WRITE;
/*!40000 ALTER TABLE `class` DISABLE KEYS */;
INSERT INTO `class` VALUES (1,'ENGL 110','117_','LEC','','10:00-11:30','T_Th_','1001','2015-02-28 17:31:36','2015-03-04 01:58:17','xx-1',15,0),(2,'test','asd','LEC','','asd','ads','1111','2015-03-05 01:10:16','2015-03-06 17:56:38','xx-1',16,0),(3,'LAB TEST','asd','LAB','1111','asd','asd','1112','2015-03-05 23:42:26','2015-03-06 17:57:22','xx-2',17,0),(4,'LAB TEST 2','sad','LAB','1111','sad','sad','1113','2015-03-09 22:49:09','2015-03-09 22:49:09','xx-1',17,0);
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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grade`
--

LOCK TABLES `grade` WRITE;
/*!40000 ALTER TABLE `grade` DISABLE KEYS */;
INSERT INTO `grade` VALUES (1,90.00,'12-1139',1,'2015-03-12 15:54:49','2015-03-12 15:55:44',''),(2,100.00,'12-3753',1,'2015-03-12 15:54:50','2015-03-12 15:56:12',''),(3,98.00,'12-1139',2,'2015-03-12 15:55:10','2015-03-12 15:56:00',''),(4,100.00,'12-3753',2,'2015-03-12 15:55:10','2015-03-12 15:56:23',''),(5,80.00,'12-1139',3,'2015-03-12 15:55:32','2015-03-12 15:55:51',''),(6,100.00,'12-3753',3,'2015-03-12 15:55:32','2015-03-12 15:56:18',''),(7,100.00,'12-1139',4,'2015-03-12 16:28:04','2015-03-12 16:59:14',''),(8,80.00,'12-3836',4,'2015-03-12 16:28:05','2015-03-12 16:59:21',''),(11,0.00,'12-1139',6,'2015-03-12 16:59:04','2015-03-12 16:59:04',''),(12,0.00,'12-3836',6,'2015-03-12 16:59:04','2015-03-12 16:59:04',''),(13,0.00,'12-1139',7,'2015-03-12 18:03:12','2015-03-12 18:03:12',''),(14,0.00,'12-3836',7,'2015-03-12 18:03:13','2015-03-12 18:03:13',''),(15,0.00,'12-1139',8,'2015-03-12 18:03:47','2015-03-12 18:03:47',''),(16,0.00,'12-3836',8,'2015-03-12 18:03:48','2015-03-12 18:03:48',''),(17,0.00,'12-1139',9,'2015-03-12 18:04:19','2015-03-12 18:04:19',''),(18,0.00,'12-3836',9,'2015-03-12 18:04:19','2015-03-12 18:04:19','');
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
INSERT INTO `migrations` VALUES ('2015_01_20_115537_create_students_table',1),('2015_01_20_115827_create_roster_table',1),('2015_01_20_120138_create_class_table',1),('2015_01_20_120421_create_faculty_table',1),('2015_01_20_120619_create_requirements_table',1),('2015_01_20_120905_create_activities_table',1),('2015_01_20_121045_create_grades_table',1),('2015_01_21_023429_create_users_table',1),('2015_01_26_142235_create_session_table',1),('2015_03_01_021652_add_faculty_id_number_to_class_table',2),('2015_03_01_081337_add_requirement_id_to_class_talble',3),('2015_03_01_102556_create_category_table',3),('2015_03_01_180728_modify_requirement_table',3),('2015_03_01_182738_add_categoryid_to_activity_talble',3),('2015_03_01_222736_remodify_requirement_table',4),('2015_03_01_223157_reremodify_requirement_table',5),('2015_03_02_054205_reremodify_class_table',6),('2015_03_02_054422_rereremodify_class_table',6),('2015_03_05_104738_add_comment_and_date_to_grade',7),('2015_03_05_105255_add_passing_to_class',7),('2015_03_05_180614_add_date_to_activity',7),('2015_03_08_052949_change_subj_grade_to_decimal',8),('2015_03_08_055010_just_like_upside',8),('2015_03_12_171603_modify_requirement_table',9),('2015_03_12_173714_modify_category_table',10),('2015_03_12_174024_modify_activity_table',11);
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
  `percentage` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requirement`
--

LOCK TABLES `requirement` WRITE;
/*!40000 ALTER TABLE `requirement` DISABLE KEYS */;
INSERT INTO `requirement` VALUES (1,'2015-03-12 11:48:45','2015-03-12 11:48:45',3,30,1),(2,'2015-03-12 11:48:49','2015-03-12 11:48:49',1,40,1),(3,'2015-03-12 11:48:55','2015-03-12 11:48:55',2,30,1),(4,'2015-03-12 16:24:37','2015-03-12 16:24:37',1,40,2),(5,'2015-03-12 16:24:45','2015-03-12 16:24:45',3,40,2),(6,'2015-03-12 16:24:50','2015-03-12 16:24:50',2,20,2),(7,'2015-03-12 18:01:16','2015-03-12 18:01:16',5,20,3),(8,'2015-03-12 18:02:19','2015-03-12 18:02:19',4,40,3),(9,'2015-03-12 18:02:33','2015-03-12 18:02:33',3,40,3);
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roster`
--

LOCK TABLES `roster` WRITE;
/*!40000 ALTER TABLE `roster` DISABLE KEYS */;
INSERT INTO `roster` VALUES (1,'1001','12-1139','2015-02-28 22:09:57','2015-03-12 15:56:00',88.40),(2,'1001','12-3753','2015-02-28 22:40:24','2015-03-12 15:56:23',100.00),(3,'1111','12-1139','2015-03-05 01:14:00','2015-03-12 16:59:14',35.05),(4,'1111','12-3836','2015-03-05 01:14:16','2015-03-12 16:59:21',54.44),(5,'1112','12-1139','2015-03-05 23:43:18','2015-03-07 23:50:14',25.00),(6,'1112','12-3836','2015-03-05 23:43:47','2015-03-11 15:04:21',100.00),(7,'1113','12-4604','2015-03-09 22:52:04','2015-03-09 22:52:04',0.00),(8,'1113','12-4675','2015-03-09 22:52:24','2015-03-09 22:52:24',0.00);
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
INSERT INTO `users` VALUES (2,'admin','$2y$10$KH6FJqSywSkIMBaDyAIC4e6KEDtkIPdYy8q3AlwDfLku7o3tkLVzG','super-user','893qmtEgO2dIA0uPlyECGu2ABLtPoWgVw3eE6dxsQnVcK5K4LkaN17Ipkc58','2015-02-18 00:41:05','2015-03-12 19:21:23'),(6,'xx-1','$2y$10$Q6SHkSEUr/KfqY4RLPcc7edJEYUKP5LJGX8Nj/li6i7ezuD9l0icO','FACULTY','MhtjUUkU0vyBymnlYPPtA3k7ghTsxpIDI9atiza26S9si16jy3gKzPGIjdMu','2015-02-24 16:36:32','2015-03-12 23:19:29'),(8,'xx-2','$2y$10$2kALEf1oDjj9MH9.n4kGtegFRAv4i96SkR9KDBhQJc/ppFL9SH1BW','FACULTY','8iOpt1v6lSxJh2UYIZ6WqzyavhME0DkxXiLDKW2HXVODgTuYTKM65lTEucm8','2015-02-25 05:53:05','2015-03-12 19:19:52');
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

-- Dump completed on 2015-03-13 15:34:03
