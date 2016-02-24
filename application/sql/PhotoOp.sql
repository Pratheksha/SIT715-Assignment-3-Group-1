

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
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Nature',1),(2,'Animals',1),(3,'Cultural Events',1),(4,'Sports',1);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comments` varchar(500) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `event_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_comments_event1_idx` (`event_id`),
  CONSTRAINT `fk_comments_event1` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;


--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `address` varchar(125) DEFAULT NULL,
  `comments` text,
  `description` varchar(500) DEFAULT NULL,
  `subject` text,
  `month_id` int(11) NOT NULL,
  `seasons_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_event_category_idx` (`category_id`),
  KEY `fk_event_month1_idx` (`month_id`),
  KEY `fk_event_seasons1_idx` (`seasons_id`),
  KEY `fk_event_state1_idx` (`state_id`),
  KEY `fk_event_region1_idx` (`region_id`),
  CONSTRAINT `fk_event_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_event_month1` FOREIGN KEY (`month_id`) REFERENCES `month` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_event_region1` FOREIGN KEY (`region_id`) REFERENCES `region` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_event_seasons1` FOREIGN KEY (`seasons_id`) REFERENCES `seasons` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_event_state1` FOREIGN KEY (`state_id`) REFERENCES `state` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;


--
-- Table structure for table `file_upload`
--

DROP TABLE IF EXISTS `file_upload`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `file_upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(128) DEFAULT NULL,
  `path` varchar(128) DEFAULT NULL,
  `size` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_file_upload_event1_idx` (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;


--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(45) DEFAULT NULL,
  `password` varchar(125) DEFAULT NULL,
  `salt` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone_number` varchar(45) DEFAULT NULL,
  `last_login` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,'admin','3471e24769392e4f1fb35a4d4f4c44aa6acad82f8ee98818d88e9c948c6e9306','824','pratheksha@gmail.com','7639637109','jhu',1);
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `month`
--

DROP TABLE IF EXISTS `month`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `month` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `month` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `seasons_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_month_seasons1_idx` (`seasons_id`),
  CONSTRAINT `fk_month_seasons1` FOREIGN KEY (`seasons_id`) REFERENCES `seasons` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `month`
--

LOCK TABLES `month` WRITE;
/*!40000 ALTER TABLE `month` DISABLE KEYS */;
INSERT INTO `month` VALUES (1,'September',1,1),(2,'October',1,1),(3,'November',1,1),(4,'December',1,2),(5,'January',1,2),(6,'February',1,2),(7,'March',1,3),(8,'April',1,3),(9,'may',1,3),(10,'June',1,4),(11,'July',1,4),(12,'August',1,4);
/*!40000 ALTER TABLE `month` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `region`
--

DROP TABLE IF EXISTS `region`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `region` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `region_name` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `state_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_region_state1_idx` (`state_id`),
  CONSTRAINT `fk_region_state1` FOREIGN KEY (`state_id`) REFERENCES `state` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `region`
--

LOCK TABLES `region` WRITE;
/*!40000 ALTER TABLE `region` DISABLE KEYS */;
INSERT INTO `region` VALUES (1,'Canberra','1',1),(2,'Williamsdale','1',1),(3,'Naas','1',1),(4,'Uriarra','1',1),(5,'Tharwa','1',1),(6,'Blue Mountains','1',2),(7,'Central Coast','1',2),(8,'Central Tablelands','1',2),(9,'Central West','1',2),(10,'Greater Western Sydney','1',2),(16,'Far South Coast','1',2),(26,'Far West','1',2),(27,'Hunter Region (Newcastle)','1',2),(28,'Illawarra (Wollongong)','1',2),(29,'Lord Howe Island','1',2),(30,'New England (north-west)','1',2),(31,'Murray','1',2),(32,'Mid North Coast','1',2),(33,'North West Slopes','1',2),(34,'Northern Rivers','1',2),(35,'Northern Tablelands','1',2),(36,'Orana','1',2),(37,'Riverina','1',2),(38,'Sapphire Coast','1',2),(39,'Snowy Mountains','1',2),(40,'South Coast','1',2),(41,'Southern Highlands','1',2),(42,'Southern Tablelands','1',2),(43,'South West Slopes','1',2),(44,'Sunraysia','1',2),(45,'Sydney','1',2),(46,'Barwon South West region','1',3),(47,'Gippsland region','1',3),(48,'Grampians region','1',3),(49,'Hume region','1',3),(50,'Loddon Mallee region','1',3),(51,'Melbourne','1',3),(52,'Geelong','1',3),(53,'South East Queensland','1',4),(54,'Darling Downs South West','1',4),(55,'Wide Bay–Burnett','1',4),(56,'Central Queensland','1',4),(57,'Mackay, Isaac and Whitsunday','1',4),(58,'Northern','1',4),(59,'Far North','1',4),(60,'Adelaide Plains','1',5),(61,'Adelaide Hills/Mount Lofty Ranges','1',5),(62,'Barossa Valley','1',5),(63,'Eyre Peninsula','1',5),(64,'Far North','1',5),(65,'Fleurieu Peninsula','1',5),(66,'Flinders Ranges','1',5),(67,'Kangaroo Island','1',5),(68,'Limestone Coast','1',5),(69,'Mid North','1',5),(70,'Clare Valley','1',5),(71,'Murray Mallee','1',5),(72,'Murraylands','1',5),(73,'Riverland','1',5),(74,'Yorke Peninsula','1',5),(75,'Copper Triangle','1',5),(76,'Gascoyne','1',6),(77,'Goldfields-Esperance','1',6),(78,'Great Southern','1',6),(79,'Kimberley','1',6),(80,'Mid West','1',6),(81,'Peel','1',6),(82,'Pilbara','1',6),(83,'South West','1',6),(84,'Wheatbelt','1',6),(85,'Ben Lomond','1',7),(86,'Furneaux','1',7),(87,'King','1',7),(88,'Tasmanian Central Highlands','1',7),(89,'Tasmanian Northern Midlands','1',7),(90,'Tasmanian Northern Slopes','1',7),(91,'Tasmanian Southern Ranges','1',7),(92,'Tasmanian South East','1',7),(93,'Tasmanian West','1',7),(94,'Arnhem Land','1',8),(95,'Barkly Tableland','1',8),(96,'Central Australia/Alice Springs Region/Red Ce','1',8),(97,'Darwin Region','1',8),(98,'Katherine Region','1',8),(99,'Top End','1',8),(100,'Victoria River','1',8);
/*!40000 ALTER TABLE `region` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seasons`
--

DROP TABLE IF EXISTS `seasons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seasons` (
  `id` int(11) NOT NULL,
  `season_name` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seasons`
--

LOCK TABLES `seasons` WRITE;
/*!40000 ALTER TABLE `seasons` DISABLE KEYS */;
INSERT INTO `seasons` VALUES (1,'Spring',1),(2,'Summer',1),(3,'Autumn',1),(4,'Winter',1);
/*!40000 ALTER TABLE `seasons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `state` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `state`
--

LOCK TABLES `state` WRITE;
/*!40000 ALTER TABLE `state` DISABLE KEYS */;
INSERT INTO `state` VALUES (1,'Australian Capital Territory','1'),(2,'New South Wales','1'),(3,'Victoria','1'),(4,'Queensland','1'),(5,'South Australia','1'),(6,'Western Australia','1'),(7,'Tasmania','1'),(8,'Northern Territory','1');
/*!40000 ALTER TABLE `state` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;


