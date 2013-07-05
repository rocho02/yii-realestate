-- MySQL dump 10.13  Distrib 5.5.16, for Win32 (x86)
--
-- Host: localhost    Database: realestate
-- ------------------------------------------------------
-- Server version	5.5.16-log

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
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `city` (
  `id_city` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `zip` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_city`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `city`
--

LOCK TABLES `city` WRITE;
/*!40000 ALTER TABLE `city` DISABLE KEYS */;
INSERT INTO `city` VALUES (1,'Mosonmagyaróvár','9200'),(2,'Jánossomorja','9200');
/*!40000 ALTER TABLE `city` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `file`
--

DROP TABLE IF EXISTS `file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `file` (
  `id_file` int(11) NOT NULL AUTO_INCREMENT,
  `creation_date` datetime NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `id_folder` int(11) NOT NULL,
  `flags` int(11) DEFAULT '0',
  `original_name` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_file`),
  KEY `fk_folder` (`id_folder`),
  CONSTRAINT `file_ibfk_1` FOREIGN KEY (`id_folder`) REFERENCES `folder` (`id_folder`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `file`
--

LOCK TABLES `file` WRITE;
/*!40000 ALTER TABLE `file` DISABLE KEYS */;
INSERT INTO `file` VALUES (17,'2013-07-04 15:33:01','1372944781_4jpg',2,0,'mopszi.jpg');
/*!40000 ALTER TABLE `file` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `folder`
--

DROP TABLE IF EXISTS `folder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `folder` (
  `id_folder` int(11) NOT NULL AUTO_INCREMENT,
  `creation_date` datetime NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `id_owner` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT '0',
  `flags` int(11) DEFAULT '0',
  `path` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id_folder`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `folder`
--

LOCK TABLES `folder` WRITE;
/*!40000 ALTER TABLE `folder` DISABLE KEYS */;
INSERT INTO `folder` VALUES (1,'2013-07-04 11:37:24','test',1,0,0,NULL),(2,'2013-07-04 11:41:51','test1',1,0,0,'upload/realestate/images');
/*!40000 ALTER TABLE `folder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `real_estate`
--

DROP TABLE IF EXISTS `real_estate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `real_estate` (
  `id_real_estate` int(11) NOT NULL AUTO_INCREMENT,
  `creation_date` datetime NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `adress` varchar(500) DEFAULT NULL,
  `type` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY (`id_real_estate`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `real_estate`
--

LOCK TABLES `real_estate` WRITE;
/*!40000 ALTER TABLE `real_estate` DISABLE KEYS */;
INSERT INTO `real_estate` VALUES (1,'2013-01-01 00:00:00','test1','test2',1,1,1);
/*!40000 ALTER TABLE `real_estate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_migration`
--

DROP TABLE IF EXISTS `tbl_migration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_migration` (
  `version` varchar(255) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_migration`
--

LOCK TABLES `tbl_migration` WRITE;
/*!40000 ALTER TABLE `tbl_migration` DISABLE KEYS */;
INSERT INTO `tbl_migration` VALUES ('m000000_000000_base',1373006127),('m130705_063135_create_user_table',1373006239);
/*!40000 ALTER TABLE `tbl_migration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login_time` datetime DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `create_user_id` int(11) DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `update_user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','rocho02@gmail.com','21232f297a57a5a743894a0e4a801fc3','2013-07-05 13:14:51','2013-07-05 00:00:00',1,'2013-07-05 00:00:00',1),(2,'rocho','rocho03@gmail.com','098f6bcd4621d373cade4e832627b4f6','2013-07-05 13:14:37','2013-07-05 13:11:53',1,'2013-07-05 13:11:53',1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-07-05 14:44:40
