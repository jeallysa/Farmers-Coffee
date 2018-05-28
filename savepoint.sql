-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: jhcs
-- ------------------------------------------------------
-- Server version	5.6.17

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
-- Table structure for table `activitylogs`
--

DROP TABLE IF EXISTS `activitylogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activitylogs` (
  `activitylogs_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_no` varchar(45) NOT NULL,
  `timestamp` datetime NOT NULL,
  `message` varchar(100) NOT NULL,
  `type` varchar(45) NOT NULL,
  PRIMARY KEY (`activitylogs_id`),
  UNIQUE KEY `idactivitylogs_UNIQUE` (`activitylogs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1169 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activitylogs`
--

LOCK TABLES `activitylogs` WRITE;
/*!40000 ALTER TABLE `activitylogs` DISABLE KEYS */;
INSERT INTO `activitylogs` VALUES (1,'1','2018-05-24 03:11:06','Inserted New Account: Ruelos,Arlene in admin Department ','admin'),(2,'2','2018-05-24 03:19:03','Inserted New Supplier: Alterra Coffee Roasters ','admin'),(3,'2','2018-05-24 03:20:09','Inserted New Supplier: An Giang Coffee ','admin'),(4,'2','2018-05-24 03:21:05','Inserted New Supplier: Bridgehead Coffee ','admin'),(5,'1','2018-05-24 03:21:30','Inserted New Account: Tomines,Jules in inventory Department ','admin'),(6,'2','2018-05-24 03:22:03','Inserted New Supplier: Cafe Bom Dia ','admin'),(7,'2','2018-05-24 03:22:51','Inserted New Supplier: Caffe Vita Coffee Roasting Company ','admin'),(8,'1','2018-05-24 03:23:15','Inserted New Account: Reyes,Jenifer in sales Department ','admin'),(9,'2','2018-05-24 03:31:17','Inserted New Supplier: X-po General Merchandise ','admin'),(10,'2','2018-05-24 03:31:48','Inserted New Packaging: \'clear bag, 250g\'','admin'),(11,'2','2018-05-24 03:32:06','Inserted New Packaging: \'clear bag, 500g\'','admin'),(12,'2','2018-05-24 03:32:24','Inserted New Packaging: \'clear bag, 1000g\'','admin'),(13,'2','2018-05-24 03:32:36','Inserted New Supplier: Allegro Enterprise ','admin'),(14,'2','2018-05-24 03:34:12','Inserted New Supplier: Figaro Coffee Machine Company ','admin'),(15,'2','2018-05-24 03:35:32','Inserted New Supplier: Diedrich Packaging Enterprise ','admin'),(16,'2','2018-05-24 03:36:00','Inserted New Packaging: \'brown bag, 250g\'','admin'),(17,'2','2018-05-24 03:36:41','Inserted New Packaging: \'brown bag, 500g\'','admin'),(18,'2','2018-05-24 03:36:42','Inserted New Supplier: Black Ivory Coffee ','admin'),(19,'2','2018-05-24 03:37:03','Inserted New Packaging: \'brown bag, 1000g\'','admin'),(20,'2','2018-05-24 03:38:01','Inserted New Supplier: Black Ivory Coffee ','admin'),(21,'1','2018-05-24 03:38:17','Inserted New Account: Adversalo,Aeneid in inventory Department ','admin'),(22,'2','2018-05-24 03:39:36','Inserted New Supplier: Cafe Coffee Machine Inc ','admin'),(23,'2','2018-05-24 03:39:52','Inserted New Supplier: Cafe Coffee Machine Inc ','admin'),(24,'2','2018-05-24 03:41:06','Deactivated Supplier: \'Black Ivory Coffee\'','admin'),(25,'2','2018-05-24 03:41:19','Deactivated Supplier: \'Cafe Coffee Machine Inc\'','admin'),(26,'2','2018-05-24 03:42:51','Inserted New Supplier: Coop Kaffe Stickers Enterprise ','admin'),(27,'2','2018-05-24 03:43:18','Inserted Coffee Machine: \'Saeco, Double Cup Espresso\'','admin'),(28,'1','2018-05-24 03:43:47','Inserted New Account: Benitez,Mario in admin Department ','admin'),(29,'2','2018-05-24 03:43:53','Inserted Coffee Machine: \'Grato, Single Cup Espresso\'','admin'),(30,'2','2018-05-24 03:44:21','Inserted Coffee Machine: \'Colet, Triple Cup Espresso\'','admin'),(31,'2','2018-05-24 03:45:02','Updated Supplier: \'Blendz Coffee Machine Inc.\'','admin'),(32,'2','2018-05-24 03:45:07','Activated Supplier: \'Blendz Coffee Machine Inc.\'','admin'),(33,'1','2018-05-24 03:46:05','Inserted New Account: Mendoza,Grace in sales Department ','admin'),(34,'2','2018-05-24 03:46:14','Updated Coffee Machine: Colet, Triple Cup Espresso roast ','admin'),(35,'2','2018-05-24 03:46:22','Updated Supplier: \'Bourbon Coffee Machines\'','admin'),(36,'2','2018-05-24 03:46:25','Updated Coffee Machine: Saeco, Double Cup Espresso roast ','admin'),(37,'2','2018-05-24 03:46:27','Activated Supplier: \'Bourbon Coffee Machines\'','admin'),(38,'2','2018-05-24 03:47:04','Inserted Coffee Machine: \'Lirika, Single Cup Espresso\'','admin'),(39,'2','2018-05-24 03:47:27','Inserted Coffee Machine: \'Piccolina, Double Cup Espresso\'','admin'),(40,'2','2018-05-24 03:48:26','Inserted Coffee Machine: \'Piccolina, Triple Cup Espresso\'','admin'),(41,'1','2018-05-24 03:48:26','Inserted New Account: Ramos,Lester in inventory Department ','admin'),(42,'2','2018-05-24 03:48:45','Inserted New Supplier: Dunn Bros Sticker Press ','admin'),(43,'2','2018-05-24 03:49:07','Inserted Coffee Machine: \'Bunn, Single Cup Espresso\'','admin'),(44,'2','2018-05-24 03:49:13','Updated Supplier: \'Nero Coffee Machine Company\'','admin'),(45,'1','2018-05-24 03:49:45','Inserted New Account: Gomez,Stephanie in sales Department ','admin'),(46,'2','2018-05-24 03:49:49','Inserted Coffee Machine: \'Percolator, Double Cup Espresso\'','admin'),(47,'2','2018-05-24 03:50:45','Inserted Coffee Machine: \'Bravilor, Double Cup Espresso\'','admin'),(48,'2','2018-05-24 03:51:13','Inserted Coffee Machine: \'AVR, Triple Cup Espresso\'','admin'),(49,'2','2018-05-24 03:51:24','Inserted New Supplier: Gimme! Stickers Printing ','admin'),(50,'2','2018-05-24 03:51:24','Updated Coffee Machine: Grato, Double Cup Espresso roast ','admin'),(51,'1','2018-05-24 03:51:25','Inserted New Account: DeGuzman,Jerome in inventory Department ','admin'),(52,'2','2018-05-24 03:53:17','Inserted New Raw Coffee: Guatamela,city roast roast ','admin'),(53,'2','2018-05-24 03:53:32','Inserted New Client: Eurotel under Coffee Service ','admin'),(54,'2','2018-05-24 03:53:55','Updated Raw Coffee: Guatamela, city roast roast ','admin'),(55,'2','2018-05-24 03:54:08','Updated Raw Coffee: Guatamela, city roast roast ','admin'),(56,'1','2018-05-24 03:54:38','Inserted New Account: Manzon,Rhianna in sales Department ','admin'),(57,'2','2018-05-24 03:55:02','Inserted New Supplier: Coffeepack Enterprise ','admin'),(58,'2','2018-05-24 03:56:50','Inserted New Raw Coffee: Guatamela,medium roast roast ','admin'),(59,'2','2018-05-24 03:56:58','Updated Raw Coffee: Guatamela, city roast roast ','admin'),(60,'2','2018-05-24 03:57:13','Updated Raw Coffee: Guatemela, city roast roast ','admin'),(61,'2','2018-05-24 03:57:24','Updated Raw Coffee: Guatemela, city roast roast ','admin'),(62,'2','2018-05-24 03:57:33','Updated Raw Coffee: Guatemela, city roast roast ','admin'),(63,'1','2018-05-24 03:58:53','Inserted New Account: Fontanilla,Barbie in sales Department ','admin'),(64,'1','2018-05-24 04:00:45','Inserted New Account: Caguioa,Tinang in sales Department ','admin'),(65,'2','2018-05-24 04:03:00','Inserted New Raw Coffee: Guatemela,light roast roast ','admin'),(66,'2','2018-05-24 04:05:32','Inserted New Client: Bloomfield Hotel (Patch Cafe) under Retail ','admin'),(67,'2','2018-05-24 04:06:08','Inserted New Raw Coffee: Barako,light roast roast ','admin'),(68,'2','2018-05-24 04:06:59','Inserted New Client: Bread House under Coffee Service ','admin'),(69,'2','2018-05-24 04:08:26','Inserted New Client: Bowknot Brewery Inc. under Coffee Service ','admin'),(70,'2','2018-05-24 04:09:22','Updated Raw Coffee: Guatemela, city roast roast ','admin'),(71,'2','2018-05-24 04:09:31','Updated Raw Coffee: Guatemela, city roast roast ','admin'),(72,'2','2018-05-24 04:10:22','Inserted New Raw Coffee: Sumatra,city roast roast ','admin'),(73,'2','2018-05-24 04:10:41','Inserted New Raw Coffee: Sumatra,medium roast roast ','admin'),(74,'2','2018-05-24 04:10:58','Inserted New Raw Coffee: Sumatra,light roast roast ','admin'),(75,'2','2018-05-24 04:11:09','Inserted New Client: Bote Central Roasting Machine under Coffee Service ','admin'),(76,'2','2018-05-24 04:11:44','Inserted New Raw Coffee: Robusta,city roast roast ','admin'),(77,'2','2018-05-24 04:12:07','Inserted New Raw Coffee: Robusta,medium roast roast ','admin'),(78,'2','2018-05-24 04:12:22','Inserted New Client: Camp John Hay Golf Club under Retail ','admin'),(79,'2','2018-05-24 04:13:28','Inserted New Client: Canto Restaurant under Coffee Service ','admin'),(80,'2','2018-05-24 04:13:49','Updated Supplier: \'Mr. Beans Enterprise\'','admin'),(81,'2','2018-05-24 04:15:06','Inserted New Raw Coffee: Robusta,light roast roast ','admin'),(82,'2','2018-05-24 04:15:09','Inserted New Client: Cafe de Seoul under Coffee Service ','admin'),(83,'2','2018-05-24 04:15:56','Updated Raw Coffee: Guatemela, city roast roast ','admin'),(84,'2','2018-05-24 04:16:04','Inserted New Client: Cafe Caw under Retail ','admin'),(85,'2','2018-05-24 04:16:07','Updated Raw Coffee: Guatemela, medium roast roast ','admin'),(86,'2','2018-05-24 04:16:31','Updated Raw Coffee: Sumatra, city roast roast ','admin'),(87,'2','2018-05-24 04:16:42','Updated Raw Coffee: Sumatra, city roast roast ','admin'),(88,'2','2018-05-24 04:16:52','Updated Raw Coffee: Sumatra, city roast roast ','admin'),(89,'2','2018-05-24 04:17:20','Inserted New Client: Citrus Restaurant under Coffee Service ','admin'),(90,'2','2018-05-24 04:17:47','Inserted New Raw Coffee: Barako,medium roast roast ','admin'),(91,'2','2018-05-24 04:18:03','Inserted New Raw Coffee: Barako,city roast roast ','admin'),(92,'2','2018-05-24 05:28:21','Inserted New Client: John Hay Water System, Inc. under Retail ','admin'),(93,'2','2018-05-24 05:29:12','Inserted New Client: Kahuna Beach Resort and spa under Coffee Service ','admin'),(94,'2','2018-05-24 05:30:10','Inserted New Client:  Kintetsu World Express under Coffee Service ','admin'),(95,'2','2018-05-24 05:30:29','Inserted New Raw Coffee: Benguet,city roast roast ','admin'),(96,'2','2018-05-24 05:30:49','Inserted New Raw Coffee: Benguet,medium roast roast ','admin'),(97,'2','2018-05-24 05:30:56','Inserted New Client: La Casa Blanca under Coffee Service ','admin'),(98,'2','2018-05-24 05:31:01','Inserted New Raw Coffee: Benguet,light roast roast ','admin'),(99,'2','2018-05-24 05:31:47','Inserted New Client: La Parilla under Coffee Service ','admin'),(100,'2','2018-05-24 05:32:18','Inserted New Raw Coffee: Colombia,city roast roast ','admin'),(101,'2','2018-05-24 05:32:36','Inserted New Raw Coffee: Colombia,medium roast roast ','admin'),(102,'2','2018-05-24 05:32:48','Inserted New Client: La Tienda under Retail ','admin'),(103,'2','2018-05-24 05:32:56','Inserted New Raw Coffee: Colombia,light roast roast ','admin'),(104,'2','2018-05-24 05:34:58','Inserted New Client: Le Chef Manor under Coffee Service ','admin'),(105,'2','2018-05-24 05:35:05','Inserted New Client:  under  ','admin'),(106,'2','2018-05-24 05:35:17','Inserted New Client: Colleen Curran under Retail ','admin'),(107,'2','2018-05-24 05:36:28','Inserted New Client: ATACOGMAC under Coffee Service ','admin'),(108,'2','2018-05-24 05:37:21','Inserted New Client: Le Chef Golf under Retail ','admin'),(109,'2','2018-05-24 05:38:13','Inserted New Client: Le Chef Southwoods under Coffee Service ','admin'),(110,'2','2018-05-24 05:38:25','Inserted New Client: ABS CBN under Retail ','admin'),(111,'2','2018-05-24 05:38:39','Inserted Sticker: \'Eurotel Sticker\'','admin'),(112,'2','2018-05-24 05:38:56','Inserted New Client: Le Chef -Paranaque under Coffee Service ','admin'),(113,'2','2018-05-24 05:39:08','Inserted Sticker: \'Guatamela Rainforest Sticker\'','admin'),(114,'2','2018-05-24 05:39:34','Inserted New Client: Le Chef Accounting under Coffee Service ','admin'),(115,'2','2018-05-24 05:39:37','Inserted New Client: Connies Kitchen under Coffee Service ','admin'),(116,'2','2018-05-24 05:39:55','Inserted Sticker: \'Cordillera Sunrise Sticker\'','admin'),(117,'2','2018-05-24 05:40:12','Inserted New Supplier: Porta Vaga Stall  ','admin'),(118,'2','2018-05-24 05:40:17','Inserted Sticker: \'Sumatra Night\'','admin'),(119,'2','2018-05-24 05:40:22','Inserted New Client: Lemon & Olives under Coffee Service ','admin'),(120,'2','2018-05-24 05:40:39','Updated Sticker: \'Sumatra Night Sticker\'','admin'),(121,'2','2018-05-24 05:40:46','Inserted New Coffee Blend: Guatamela Rainforest, clear bag 250 grams in Existing blend ','admin'),(122,'2','2018-05-24 05:41:07','Inserted New Client: Le Festin Trading, Inc. (Gourmet) under Retail ','admin'),(123,'2','2018-05-24 05:41:22','Inserted New Client: Cosy\'s Cafe and Roasterie under Coffee Service ','admin'),(124,'2','2018-05-24 05:42:14','Inserted New Client: Lighthouse Marina Resort under Retail ','admin'),(125,'2','2018-05-24 05:42:32','Inserted Sticker: \'Chefs Blend Sticker\'','admin'),(126,'2','2018-05-24 05:42:38','Inserted New Client: Edwin Hui under Retail ','admin'),(127,'2','2018-05-24 05:42:39','Updated Sticker: \'Cordillera Sunrise Sticker\'','admin'),(128,'2','2018-05-24 05:43:03','Inserted New Client: Mario\'s Restaurant (Baguio) under Coffee Service ','admin'),(129,'2','2018-05-24 05:43:32','Inserted Sticker: \'Espresso Blend Sticker\'','admin'),(130,'2','2018-05-24 05:43:39','Updated Sticker: \'Sumatra Night Sticker\'','admin'),(131,'2','2018-05-24 05:43:45','Inserted New Client: Mario\'s Restaurant (Q.C) under Retail ','admin'),(132,'2','2018-05-24 05:44:10','Inserted New Client: Escala under Coffee Service ','admin'),(133,'2','2018-05-24 05:44:31','Inserted New Client: Mr. Hapi Bakery & Mami House under Coffee Service ','admin'),(134,'2','2018-05-24 05:45:22','Inserted New Client: Fil Estate under Coffee Service ','admin'),(135,'2','2018-05-24 05:45:37','Updated Supplier: \'Porta Vaga Stall \'','admin'),(136,'2','2018-05-24 05:45:38','Inserted New Client: Prof. Valentino Macanes under Retail ','admin'),(137,'6','2018-05-24 05:47:02','Inserted New Client: Eurotel under Retail ','admin'),(138,'2','2018-05-24 05:47:04','Inserted New Account: Latayan,Marife in admin Department ','admin'),(139,'2','2018-05-24 05:47:18','Inserted New Supplier: Baguio City Graphics and Design ','admin'),(140,'6','2018-05-24 05:47:48','Inserted New Client: ABS CBN under Retail ','admin'),(141,'14','2018-05-24 05:47:54','Updated Sticker: \'Guatemela Rainforest Sticker\'','admin'),(142,'2','2018-05-24 05:48:08','Inserted New Account: Gascon,Evelyn in admin Department ','admin'),(143,'14','2018-05-24 05:48:25','Inserted Sticker: \'Breakfast Blend Sticker\'','admin'),(144,'14','2018-05-24 05:48:35','Updated Sticker: \'Chefs Blend Sticker\'','admin'),(145,'6','2018-05-24 05:48:35','Inserted New Client: Grumpy Joe under Retail ','admin'),(146,'14','2018-05-24 05:48:43','Updated Sticker: \'Cordillera Sunrise Sticker\'','admin'),(147,'2','2018-05-24 05:49:21','Inserted New Supplier: Rush Wiz Printing Shop ','admin'),(148,'6','2018-05-24 05:49:24','Inserted New Client: Cafe de Manor under Retail ','admin'),(149,'2','2018-05-24 05:49:31','Inserted New Account: Manzano,Lorlyn in sales Department ','admin'),(150,'14','2018-05-24 05:49:56','Inserted Sticker: \'Mabuhay Blend Sticker\'','admin'),(151,'15','2018-05-24 05:50:13','Inserted New Client: Wack Wack under Coffee Service ','admin'),(152,'14','2018-05-24 05:50:17','Inserted Sticker: \'Fiesta Blend Sticker\'','admin'),(153,'6','2018-05-24 05:50:37','Inserted New Client: Best Western Oxford Suites under Coffee Service ','admin'),(154,'14','2018-05-24 05:50:39','Inserted Sticker: \'Kalayaan Blend Sticker\'','admin'),(155,'2','2018-05-24 05:50:56','Inserted New Account: Baldon,Marilou in inventory Department ','admin'),(156,'2','2018-05-24 05:51:26','Inserted New Supplier: Baguio Allied Printers & General Merchandise ','admin'),(157,'6','2018-05-24 05:51:28','Inserted New Client: Baguio Country Club under Coffee Service ','admin'),(158,'15','2018-05-24 05:51:34','Inserted New Client: Forest Hills (PAR72) under Coffee Service ','admin'),(159,'2','2018-05-24 05:52:11','Inserted New Account: Bisleg,Minerva in inventory Department ','admin'),(160,'6','2018-05-24 05:52:33','Inserted New Client: Bioessence under Coffee Service ','admin'),(161,'6','2018-05-24 05:53:19','Inserted New Client: Blackwoods under Coffee Service ','admin'),(162,'15','2018-05-24 05:53:53','Inserted New Client: Gerry\'s Grill Treasury under Retail ','admin'),(163,'2','2018-05-24 05:54:11','Updated Coffee Blend: Guatamela Rainforest, clear Bag 250 grams in Existing ','admin'),(164,'2','2018-05-24 05:54:50','Inserted New Coffee Blend: Guatamela Rainforest, brown bag 250 grams in Existing blend ','admin'),(165,'15','2018-05-24 05:55:04','Inserted New Client: Gerry\'s Grill Purchasing under Coffee Service ','admin'),(166,'14','2018-05-24 05:55:07','Inserted New Client: Keiffeir Coffee Shop under Coffee Service ','admin'),(167,'2','2018-05-24 05:55:19','Inserted New Coffee Blend: Guatamela Rainforest, clear bag 500 grams in Existing blend ','admin'),(168,'2','2018-05-24 05:55:41','Inserted New Coffee Blend: Guatamela Rainforest, brown bag 500 grams in Existing blend ','admin'),(169,'15','2018-05-24 05:56:55','Inserted New Client: Gweilo Corp (Amelie Hotel) under Coffee Service ','admin'),(170,'2','2018-05-24 05:57:02','Inserted New Coffee Blend: Guatamela Rainforest, clear bag 1000 grams in Existing blend ','admin'),(171,'6','2018-05-24 05:59:30','Inserted Sticker: \'La Parilla Sticker\'','admin'),(172,'6','2018-05-24 06:00:22','Inserted Sticker: \'La Tienda\'','admin'),(173,'6','2018-05-24 06:00:51','Inserted Sticker: \'Le Chef Manor Sticker\'','admin'),(174,'6','2018-05-24 06:01:01','Updated Sticker: \'La Tienda Sticker\'','admin'),(175,'6','2018-05-24 06:01:26','Inserted Sticker: \'ATACOGMAC\'','admin'),(176,'6','2018-05-24 06:01:52','Inserted Sticker: \'Le Chef Golf\'','admin'),(177,'6','2018-05-24 06:02:58','Inserted Sticker: \'\'','admin'),(178,'6','2018-05-24 06:03:25','Updated Sticker: \'Le Chef Golf Sticker\'','admin'),(179,'6','2018-05-24 06:03:34','Updated Sticker: \'ATACOGMAC Sticker\'','admin'),(180,'6','2018-05-24 06:04:06','Inserted Sticker: \'Le Chef Southwoods Sticker\'','admin'),(181,'6','2018-05-24 06:04:43','Inserted Sticker: \'Le Chef Paranaque Sticker\'','admin'),(182,'6','2018-05-24 06:05:10','Inserted Sticker: \'Le Chef Accounting Sticker\'','admin'),(183,'2','2018-05-24 06:05:39','Inserted Sticker: \'Bloomfield Patch Cafe Sticker\'','admin'),(184,'14','2018-05-24 06:05:39','Updated Client information: 40\'s Diner under Retail ','admin'),(185,'6','2018-05-24 06:05:42','Inserted Sticker: \'Lemon and Olives Sticker\'','admin'),(186,'6','2018-05-24 06:06:11','Inserted Sticker: \'Le Festin Trading Sticker\'','admin'),(187,'2','2018-05-24 06:06:32','Inserted Sticker: \'Connies Kitchen Sticker\'','admin'),(188,'2','2018-05-24 06:06:41','Inserted Sticker: \'Eurotel Sticker\'','admin'),(189,'2','2018-05-24 06:08:00','Inserted Sticker: \'Citrus Restaurant Sticker\'','admin'),(190,'14','2018-05-24 06:08:05','Inserted Sticker: \'Cosys Cafe and Roasterie Sticker\'','admin'),(191,'2','2018-05-24 06:08:13','Inserted Sticker: \'ABS CBN Sticker\'','admin'),(192,'14','2018-05-24 06:08:24','Inserted Sticker: \'Lighthouse Marina Resort Sticker\'','admin'),(193,'6','2018-05-24 06:08:37','Inserted Sticker: \'ABS CBN Sticker\'','admin'),(194,'14','2018-05-24 06:08:39','Inserted Sticker: \'Bread House Sticker\'','admin'),(195,'2','2018-05-24 06:08:45','Inserted Sticker: \'John Hay Water System Inc Sticker\'','admin'),(196,'14','2018-05-24 06:08:55','Inserted Sticker: \'Edwin Hui\'','admin'),(197,'6','2018-05-24 06:09:15','Inserted Sticker: \'Blackwoods Sticker\'','admin'),(198,'14','2018-05-24 06:09:24','Inserted Sticker: \'Marios Restaurant Baguio \'','admin'),(199,'2','2018-05-24 06:09:25','Inserted Sticker: \'Kahuna Beach Resort and Spa\'','admin'),(200,'2','2018-05-24 06:09:32','Inserted Sticker: \'Grumpy Joe Sticker\'','admin'),(201,'14','2018-05-24 06:09:38','Updated Sticker: \'Edwin Hui Sticker\'','admin'),(202,'14','2018-05-24 06:09:49','Updated Sticker: \'Kahuna Beach Resort and Spa Sticker\'','admin'),(203,'14','2018-05-24 06:09:56','Updated Sticker: \'Marios Restaurant Baguio Sticker\'','admin'),(204,'6','2018-05-24 06:10:07','Inserted Sticker: \'Gerrys Grill Stiker\'','admin'),(205,'2','2018-05-24 06:10:08','Inserted Sticker: \'Kintetsu World Express Sticker\'','admin'),(206,'14','2018-05-24 06:10:18','Inserted Sticker: \'Marios Restaurant Manila Sticker\'','admin'),(207,'2','2018-05-24 06:10:32','Inserted Sticker: \'Bowknot Brewery Sticker\'','admin'),(208,'6','2018-05-24 06:10:32','Inserted Sticker: \'Keiffeir Coffee Shop Sticker\'','admin'),(209,'14','2018-05-24 06:10:44','Inserted Sticker: \'Escala Sticker\'','admin'),(210,'2','2018-05-24 06:11:03','Inserted Sticker: \'Cafe de Manor Sticker\'','admin'),(211,'6','2018-05-24 06:11:11','Inserted Sticker: \'Bote Central Sticker\'','admin'),(212,'2','2018-05-24 06:11:13','Inserted Sticker: \'La Casa Blanca\'','admin'),(213,'14','2018-05-24 06:11:24','Inserted Sticker: \'Hapi Bakery and Mami House\'','admin'),(214,'2','2018-05-24 06:11:30','Inserted Sticker: \'Wack Wack Sticker\'','admin'),(215,'14','2018-05-24 06:11:37','Inserted Sticker: \'Fil Estate\'','admin'),(216,'2','2018-05-24 06:11:40','Inserted Sticker: \'La Parilla\'','admin'),(217,'6','2018-05-24 06:11:42','Inserted Sticker: \'Amelie Hotel Sticker\'','admin'),(218,'6','2018-05-24 06:11:52','Updated Sticker: \'Bote Central Sticker\'','admin'),(219,'6','2018-05-24 06:12:05','Updated Sticker: \'Keiffeir Coffee Shop Sticker\'','admin'),(220,'2','2018-05-24 06:12:05','Inserted Sticker: \'La Tienda\'','admin'),(221,'14','2018-05-24 06:12:17','Inserted Sticker: \'Professor Valentino Macanes Sticker\'','admin'),(222,'2','2018-05-24 06:12:22','Inserted Sticker: \'Best Western Oxford Suites Sticker\'','admin'),(223,'14','2018-05-24 06:12:31','Updated Sticker: \'Fil Estate Sticker\'','admin'),(224,'6','2018-05-24 06:12:36','Inserted Sticker: \'Camp John Hay Golf Club Sticker\'','admin'),(225,'2','2018-05-24 06:12:37','Inserted Sticker: \'Le Chef Manor Sticker\'','admin'),(226,'14','2018-05-24 06:12:44','Updated Sticker: \'La Casa Blanca Sticker\'','admin'),(227,'14','2018-05-24 06:12:51','Updated Sticker: \'La Parilla Sticker\'','admin'),(228,'2','2018-05-24 06:12:55','Inserted Sticker: \'Baguio Country Club Sticker\'','admin'),(229,'6','2018-05-24 06:12:55','Inserted Sticker: \'Canto Restaurant\'','admin'),(230,'14','2018-05-24 06:12:59','Updated Sticker: \'La Tienda Sticker\'','admin'),(231,'14','2018-05-24 06:13:10','Updated Sticker: \'Canto Restaurant Sticker\'','admin'),(232,'6','2018-05-24 06:13:14','Inserted Sticker: \'Cafe de Seoul\'','admin'),(233,'2','2018-05-24 06:13:16','Inserted Sticker: \'Forest Hills Sticker\'','admin'),(234,'14','2018-05-24 06:13:20','Updated Sticker: \'Hapi Bakery and Mami House Sticker\'','admin'),(235,'14','2018-05-24 06:13:40','Updated Sticker: \'Cafe de Seoul Sticker\'','admin'),(236,'6','2018-05-24 06:13:41','Inserted Sticker: \'Cafe Caw Sticker\'','admin'),(237,'2','2018-05-24 06:13:48','Inserted Sticker: \'Bote Central Roasting Sticker\'','admin'),(238,'2','2018-05-24 06:14:22','Inserted Sticker: \'Colleen Curran Sticker\'','admin'),(239,'6','2018-05-24 06:15:31','Updated Sticker: \'GMA Sticker\'','admin'),(240,'2','2018-05-24 06:18:03','Inserted New Coffee Blend: Guatamela Rainforest, brown bag 1000 grams in Existing blend ','admin'),(241,'2','2018-05-24 06:19:35','Inserted New Coffee Blend: Cordillera Sunrise, clear bag 250 grams in Existing blend ','admin'),(242,'2','2018-05-24 06:20:01','Inserted New Coffee Blend (Client): Citrus Restaurant Blend .','admin'),(243,'2','2018-05-24 06:20:09','Inserted New Coffee Blend: Cordillera Sunrise, brown bag 250 grams in Existing blend ','admin'),(244,'2','2018-05-24 06:20:57','Updated Client information: Kahuna Beach Resort and Spa under Retail ','admin'),(245,'2','2018-05-24 06:20:59','Inserted New Coffee Blend: Cordillera Sunrise, clear bag 500 grams in Existing blend ','admin'),(246,'2','2018-05-24 06:21:31','Inserted New Coffee Blend: Cordillera Sunrise, brown bag 500 grams in Existing blend ','admin'),(247,'2','2018-05-24 06:21:56','Inserted New Coffee Blend (Client): ABS CBN Blend .','admin'),(248,'2','2018-05-24 06:21:57','Inserted New Coffee Blend (Client): La Casa Blanca Blend .','admin'),(249,'14','2018-05-24 06:22:04','Inserted New Coffee Blend (Client): Cosys Cafe and Roasterie .','admin'),(250,'2','2018-05-24 06:22:04','Inserted New Coffee Blend: Cordillera Sunrise, clear bag 1000 grams in Existing blend ','admin'),(251,'2','2018-05-24 06:22:42','Inserted New Coffee Blend: Cordillera Sunrise, brown bag 1000 grams in Existing blend ','admin'),(252,'6','2018-05-24 06:22:55','Updated Client information: Eurotel Baguio under Retail ','admin'),(253,'2','2018-05-24 06:23:53','Inserted New Coffee Blend: Sumatra Night, clear bag 250 grams in Existing blend ','admin'),(254,'2','2018-05-24 06:24:49','Inserted New Coffee Blend: Sumatra Night, brown bag 250 grams in Existing blend ','admin'),(255,'6','2018-05-24 06:25:04','Inserted New Coffee Blend (Client): Fourtys Diner Blend .','admin'),(256,'14','2018-05-24 06:25:20','Updated Raw Coffee: Sumatra, medium roast roast ','admin'),(257,'14','2018-05-24 06:25:35','Updated Raw Coffee: Sumatra, light roast roast ','admin'),(258,'2','2018-05-24 06:25:37','Inserted New Coffee Blend: Sumatra Night, clear bag 500 grams in Existing blend ','admin'),(259,'6','2018-05-24 06:25:48','Inserted New Coffee Blend (Client): ABS CBN Blend .','admin'),(260,'2','2018-05-24 06:26:03','Inserted New Coffee Blend: Sumatra Night, brown bag 500 grams in Existing blend ','admin'),(261,'2','2018-05-24 06:26:25','Inserted New Coffee Blend (Client): La Parilla Blend .','admin'),(262,'2','2018-05-24 06:26:31','Inserted New Coffee Blend: Sumatra Night, clear bag 1000 grams in Existing blend ','admin'),(263,'14','2018-05-24 06:26:34','Inserted New Coffee Blend (Client): Lighthouse Marina Blend .','admin'),(264,'14','2018-05-24 06:27:15','Inserted New Coffee Blend (Client): Bread House Blend .','admin'),(265,'2','2018-05-24 06:27:43','Inserted New Coffee Blend (Client): La Tienda Blend .','admin'),(266,'14','2018-05-24 06:28:20','Inserted New Coffee Blend (Client): Edwin Hui Blend .','admin'),(267,'2','2018-05-24 06:28:41','Inserted New Coffee Blend (Client): Le Chef Manor Blend .','admin'),(268,'2','2018-05-24 06:29:01','Inserted New Coffee Blend: Sumatra Night, brown bag 1000 grams in Existing blend ','admin'),(269,'6','2018-05-24 06:29:18','Inserted New Coffee Blend (Client): Grumpy Joe Blend .','admin'),(270,'2','2018-05-24 06:29:48','Inserted New Coffee Blend (Client): Colleen Curran Blend .','admin'),(271,'6','2018-05-24 06:29:52','Inserted New Coffee Blend (Client): Bowknot Brewery Blend .','admin'),(272,'14','2018-05-24 06:29:56','Inserted New Coffee Blend (Client): Escala Blend .','admin'),(273,'2','2018-05-24 06:30:22','Inserted New Coffee Blend: Chefs Blend, clear bag 250 grams in Existing blend ','admin'),(274,'6','2018-05-24 06:30:26','Inserted New Coffee Blend (Client): Cafe de Manor Blend .','admin'),(275,'14','2018-05-24 06:30:31','Inserted New Coffee Blend (Client): Hapi Bakery and Mami House Blend .','admin'),(276,'2','2018-05-24 06:30:48','Inserted New Coffee Blend (Client): Grumpy Joe Blend .','admin'),(277,'2','2018-05-24 06:30:48','Inserted New Coffee Blend: Chefs Blend, brown bag 250 grams in Existing blend ','admin'),(278,'6','2018-05-24 06:30:57','Inserted New Coffee Blend (Client): Wack Wack Blend .','admin'),(279,'14','2018-05-24 06:31:07','Inserted New Coffee Blend (Client): Fil Estate Blend .','admin'),(280,'2','2018-05-24 06:31:17','Inserted New Coffee Blend: Chefs Blend, clear bag 500 grams in Existing blend ','admin'),(281,'6','2018-05-24 06:31:38','Inserted New Coffee Blend (Client): Best Western Oxford Suites Blend .','admin'),(282,'2','2018-05-24 06:31:46','Inserted New Coffee Blend (Client): Bowknot Brewery Blend .','admin'),(283,'6','2018-05-24 06:32:08','Inserted New Coffee Blend (Client): Baguio Country Club Blend .','admin'),(284,'14','2018-05-24 06:32:10','Inserted New Coffee Blend (Client): Professor Valentino Macanes Blend .','admin'),(285,'2','2018-05-24 06:32:31','Inserted New Coffee Blend (Client): Cafe de Manor Blend .','admin'),(286,'6','2018-05-24 06:32:36','Inserted New Coffee Blend (Client): Forest Hills Blend .','admin'),(287,'6','2018-05-24 06:33:06','Inserted New Coffee Blend (Client): Bioessence Blend .','admin'),(288,'2','2018-05-24 06:34:24','Inserted New Coffee Blend (Client): Baguio Country Club Blend .','admin'),(289,'2','2018-05-24 06:34:56','Inserted New Coffee Blend (Client): Forest Hills Blend .','admin'),(290,'14','2018-05-24 06:34:58','Inserted New Coffee Blend (Client): Blackwoods Blend .','admin'),(291,'14','2018-05-24 06:35:36','Inserted New Coffee Blend (Client): Gerrys Grill Treasury Blend .','admin'),(292,'2','2018-05-24 06:35:38','Inserted New Coffee Blend (Client): Bioessence Blend .','admin'),(293,'2','2018-05-24 06:35:44','Inserted New Coffee Blend: Chefs Blend, brown bag 500 grams in Existing blend ','admin'),(294,'6','2018-05-24 06:35:50','Updated Client information: GMA under Retail ','admin'),(295,'2','2018-05-24 06:36:32','Inserted New Coffee Blend: Chefs Blend, clear bag 1000 grams in Existing blend ','admin'),(296,'2','2018-05-24 06:36:42','Inserted New Coffee Blend (Client): Western Oxford Suites Blend .','admin'),(297,'14','2018-05-24 06:36:46','Inserted New Coffee Blend (Client): Gerrys Grill Purchasing Blend .','admin'),(298,'14','2018-05-24 06:37:29','Inserted New Coffee Blend (Client): Keiffeir Coffee Shop Blend .','admin'),(299,'2','2018-05-24 06:38:21','Inserted New Coffee Blend: Chefs Blend, brown bag 1000 grams in Existing blend ','admin'),(300,'14','2018-05-24 06:41:08','Inserted New Coffee Blend (Client): Camp John Hay Golf Club Blend .','admin'),(301,'14','2018-05-24 06:44:31','Inserted New Coffee Blend (Client): Gweilo Corp Blend .','admin'),(302,'14','2018-05-24 06:44:54','Inserted New Coffee Blend (Client): Canto Restaurant  Blend .','admin'),(303,'14','2018-05-24 06:45:27','Inserted New Coffee Blend (Client): Cafe de Seoul Blend .','admin'),(304,'14','2018-05-24 06:46:04','Inserted New Coffee Blend (Client): Cafe Caw .','admin'),(305,'14','2018-05-24 06:47:50','Updated Packaging: \'brown bag bag, 250g\'','admin'),(306,'14','2018-05-24 06:47:57','Updated Packaging: \'brown bag bag, 250g\'','admin'),(307,'14','2018-05-24 06:48:24','Updated Packaging: \'brown bag  bag, 250g\'','admin'),(308,'14','2018-05-24 06:48:38','Updated Packaging: \'brown bag  bag, 250g\'','admin'),(309,'14','2018-05-24 06:48:59','Updated Packaging: \'brown bag, 250g\'','admin'),(310,'14','2018-05-24 06:49:06','Updated Packaging: \'brown bag, 250g\'','admin'),(311,'14','2018-05-24 06:49:57','Updated Packaging: \'brown bag bag, 250g\'','admin'),(312,'14','2018-05-24 06:50:06','Updated Packaging: \'brown bag bag, 250g\'','admin'),(313,'14','2018-05-24 06:50:12','Updated Packaging: \'clear bag bag, 250g\'','admin'),(314,'14','2018-05-24 06:50:20','Updated Packaging: \'clear bag bag, 250g\'','admin'),(315,'14','2018-05-24 06:50:27','Updated Packaging: \'clear bag bag, 250g\'','admin'),(316,'14','2018-05-24 07:00:21','Updated Packaging: \'brown bag bag, 1000g\'','admin'),(317,'14','2018-05-24 07:00:28','Updated Packaging: \'brown bag bag, 1000g\'','admin'),(318,'14','2018-05-24 07:00:35','Updated Packaging: \'brown bag bag, 500g\'','admin'),(319,'2','2018-05-24 07:02:59','Deactivated: Blackwoods Blend   grams ','admin'),(320,'2','2018-05-24 07:03:17','Activated: Blackwoods under Coffee Service ','admin'),(321,'2','2018-05-24 07:03:39','Activated: Blackwoods under Coffee Service ','admin'),(322,'2','2018-05-24 07:04:01','Deactivated: Eurotel Baguio under Retail ','admin'),(323,'2','2018-05-24 07:04:13','Deactivated: Eurotel Baguio under Retail ','admin'),(324,'2','2018-05-24 07:04:28','Activated: Blackwoods Blend   grams ','admin'),(325,'2','2018-05-24 07:04:50','Deactivated: ABS CBN Blend   grams ','admin'),(326,'2','2018-05-24 07:05:13','Deactivated: Eurotel Baguio under Retail ','admin'),(327,'2','2018-05-24 07:05:22','Deactivated: Eurotel Baguio under Retail ','admin'),(328,'2','2018-05-24 07:05:44','Activated: ABS CBN Blend   grams ','admin'),(329,'2','2018-05-24 07:08:26','Inserted New Coffee Blend: Espresso Blend, clear bag bag 250 grams in Existing blend ','admin'),(333,'2','2018-05-24 07:11:20','Inserted New Packaging: \'sample bag, 250g\'','admin'),(334,'2','2018-05-24 07:11:42','Inserted New Packaging: \'sampling bag, 250g\'','admin'),(338,'2','2018-05-24 07:12:20','Updated Packaging: \'sample bag, 500g\'','admin'),(340,'2','2018-05-24 07:13:42','Inserted New Packaging: \'brown bag, 500g\'','admin'),(352,'2','2018-05-24 07:24:00','Inserted New Coffee Blend (Client): Eurotel Blend .','admin'),(354,'2','2018-05-24 07:24:41','Inserted New Coffee Blend (Client): Kahuna Beach Resort and Spa Blend .','admin'),(355,'2','2018-05-24 07:24:54','Inserted New Coffee Blend (Client): ATACOGMAC Blend .','admin'),(356,'2','2018-05-24 07:25:13','Inserted New Coffee Blend (Client): Kintensu World Express  Blend .','admin'),(358,'2','2018-05-24 07:26:24','Inserted New Coffee Blend (Client): Bote Central Roasting Machine Blend .','admin'),(376,'2','2018-05-24 07:33:48','Inserted New Coffee Blend: Espresso Blend, brown bag bag 250 grams in Existing blend ','admin'),(379,'2','2018-05-24 07:34:47','Inserted New Coffee Blend: Espresso Blend, clear bag bag 500 grams in Existing blend ','admin'),(384,'2','2018-05-24 07:35:19','Inserted New Coffee Blend: Espresso Blend, brown bag bag 500 grams in Existing blend ','admin'),(391,'2','2018-05-24 07:36:19','Inserted New Coffee Blend: Espresso Blend, clear bag bag 1000 grams in Existing blend ','admin'),(399,'2','2018-05-24 07:36:49','Inserted New Coffee Blend: Espresso Blend, brown bag bag 1000 grams in Existing blend ','admin'),(404,'2','2018-05-24 07:37:43','Inserted New Coffee Blend: Breakfast Blend, clear bag bag 250 grams in Existing blend ','admin'),(406,'2','2018-05-24 07:38:10','Inserted New Coffee Blend: Breakfast Blend, brown bag bag 250 grams in Existing blend ','admin'),(407,'13','2018-05-24 07:38:16','Resolved Citrus Restaurant\'s Piccolina machine Double Cup Espresso ','sales'),(408,'2','2018-05-24 07:38:26','Inserted New Coffee Blend (Client): John Hay Water System Blend .','admin'),(409,'2','2018-05-24 07:38:34','Inserted New Coffee Blend: Breakfast Blend, clear bag bag 500 grams in Existing blend ','admin'),(412,'2','2018-05-24 07:39:00','Inserted New Coffee Blend: Breakfast Blend, brown bag bag 500 grams in Existing blend ','admin'),(413,'2','2018-05-24 07:39:24','Inserted New Coffee Blend: Breakfast Blend, clear bag bag 1000 grams in Existing blend ','admin'),(414,'2','2018-05-24 07:39:48','Inserted New Coffee Blend: Breakfast Blend, brown bag bag 1000 grams in Existing blend ','admin'),(416,'13','2018-05-24 07:40:22','Added Purchase Order for ATACOGMAC ','sales'),(417,'2','2018-05-24 07:40:42','Inserted New Coffee Blend: Mabuhay Blend, clear bag bag 250 grams in Existing blend ','admin'),(418,'13','2018-05-24 07:40:58','Added Purchase Order for Blackwoods ','sales'),(419,'2','2018-05-24 07:41:09','Inserted New Coffee Blend: Mabuhay Blend, brown bag bag 250 grams in Existing blend ','admin'),(420,'13','2018-05-24 07:41:14','Added Purchase Order for Blackwoods ','sales'),(421,'13','2018-05-24 07:41:23','Added Purchase Order for Blackwoods ','sales'),(422,'2','2018-05-24 07:41:33','Inserted New Coffee Blend: Mabuhay Blend, clear bag bag 250 grams in Existing blend ','admin'),(423,'13','2018-05-24 07:41:44','Added Purchase Order for Cafe de Seoul ','sales'),(424,'2','2018-05-24 07:41:50','Updated Coffee Blend: Mabuhay Blend, clear bag Bag 500 grams in Existing ','admin'),(425,'13','2018-05-24 07:41:58','Added Purchase Order for ATACOGMAC ','sales'),(428,'13','2018-05-24 07:42:14','Added Purchase Order for ATACOGMAC ','sales'),(429,'2','2018-05-24 07:42:20','Inserted New Coffee Blend: Mabuhay Blend, brown bag bag 500 grams in Existing blend ','admin'),(430,'13','2018-05-24 07:42:24','Added Purchase Order for ATACOGMAC ','sales'),(436,'2','2018-05-24 07:42:51','Inserted New Coffee Blend: Mabuhay Blend, clear bag bag 1000 grams in Existing blend ','admin'),(438,'2','2018-05-24 07:43:23','Inserted New Coffee Blend: Mabuhay Blend, brown bag bag 1000 grams in Existing blend ','admin'),(443,'13','2018-05-24 07:44:20','Added Purchase Order for Colleen Curran ','sales'),(444,'4','2018-05-24 07:45:21','Added Purchase Order for ATACOGMAC ','sales'),(445,'2','2018-05-24 07:45:40','Inserted New Coffee Blend: Fiesta Blend, clear bag bag 250 grams in Existing blend ','admin'),(452,'2','2018-05-24 07:46:37','Inserted New Coffee Blend: Fiesta Blend, brown bag bag 250 grams in Existing blend ','admin'),(453,'2','2018-05-24 07:47:10','Inserted New Coffee Blend: Fiesta Blend, clear bag bag 500 grams in Existing blend ','admin'),(454,'2','2018-05-24 07:47:40','Inserted New Coffee Blend: Fiesta Blend, brown bag bag 500 grams in Existing blend ','admin'),(459,'2','2018-05-24 07:48:31','Inserted New Coffee Blend: Fiesta Blend, clear bag bag 1000 grams in Existing blend ','admin'),(464,'2','2018-05-24 07:49:24','Inserted New Coffee Blend: Fiesta Blend, brown bag bag 1000 grams in Existing blend ','admin'),(465,'2','2018-05-24 07:50:26','Inserted New Coffee Blend: Kalayaan Blend, clear bag bag 250 grams in Existing blend ','admin'),(470,'2','2018-05-24 07:51:11','Inserted New Coffee Blend: Kalayaan Blend, brown bag bag 250 grams in Existing blend ','admin'),(471,'2','2018-05-24 07:51:46','Inserted New Coffee Blend: Kalayaan Blend, clear bag bag 500 grams in Existing blend ','admin'),(473,'2','2018-05-24 07:52:25','Inserted New Coffee Blend: Kalayaan Blend, clear bag bag 500 grams in Existing blend ','admin'),(474,'2','2018-05-24 07:52:51','Inserted New Coffee Blend: Kalayaan Blend, clear bag bag 1000 grams in Existing blend ','admin'),(481,'2','2018-05-24 07:53:21','Inserted New Coffee Blend: Kalayaan Blend, brown bag bag 1000 grams in Existing blend ','admin'),(535,'2','2018-05-24 08:15:09','Updated Packaging: \'clear bag bag, 250g\'','admin'),(542,'2','2018-05-24 08:47:09','Inserted New Packaging: \'sample bag, 250g\'','admin'),(543,'2','2018-05-24 08:48:30','Inserted New Packaging: \'samper bag, 250g\'','admin'),(554,'16','2018-05-24 08:54:15','Added other Purchase Order ','sales'),(555,'2','2018-05-24 08:54:17','Added other Purchase Order ','sales'),(556,'16','2018-05-24 08:55:00','Added other Purchase Order ','sales'),(557,'2','2018-05-24 08:55:41','Added other Purchase Order ','sales'),(559,'2','2018-05-24 08:56:25','Added other Purchase Order ','sales'),(560,'16','2018-05-24 08:57:00','Added other Purchase Order ','sales'),(562,'16','2018-05-24 08:57:44','Added other Purchase Order ','sales'),(563,'16','2018-05-24 08:59:21','Returned 1 Sumatra Night from Walkin Sales ','sales'),(564,'2','2018-05-24 08:59:57','Resolved Sumatra Night of Walkin Client Order ','sales'),(565,'16','2018-05-24 09:01:18','Returned 1 Guatamela Rainforest from Walkin Sales ','sales'),(566,'16','2018-05-24 09:01:37','Returned 2 Fiesta Blend from Walkin Sales ','sales'),(567,'16','2018-05-24 09:01:54','Returned 1 Breakfast Blend from Walkin Sales ','sales'),(571,'16','2018-05-24 09:05:21','Returned 2 Lirika Machine Single Cup Espresso from Walkin Sales ','sales'),(572,'14','2018-05-24 09:05:44','Inserted Sticker: \'Bioessence Sticker\'','admin'),(575,'16','2018-05-24 09:06:43','Returned 1 Grato Machine Double Cup Espresso from Walkin Sales ','sales'),(578,'16','2018-05-24 09:07:33','Resolved Eurotel Baguio\'s Grato machine Double Cup Espresso ','sales'),(580,'16','2018-05-24 09:08:14','Returned 2 Piccolina Machine Double Cup Espresso from Walkin Sales ','sales'),(583,'16','2018-05-24 09:11:03','Added Purchase Order for  ','sales'),(587,'16','2018-05-24 09:14:02','Added Purchase Order for Baguio Country Club ','sales'),(588,'16','2018-05-24 09:14:06','Added Purchase Order for Best Western Oxford Suites ','sales'),(589,'16','2018-05-24 09:14:16','Added Purchase Order for Blackwoods ','sales'),(590,'16','2018-05-24 09:14:22','Added Purchase Order for Bioessence ','sales'),(591,'16','2018-05-24 09:14:43','Added Purchase Order for Cafe de Manor ','sales'),(592,'14','2018-05-24 09:15:13','Inserted New Coffee Blend (Client): GMA .','admin'),(593,'14','2018-05-24 09:15:56','Updated Client information: She Diner under Retail ','admin'),(594,'14','2018-05-24 09:16:34','Inserted New Coffee Blend (Client): She Blend .','admin'),(595,'14','2018-05-24 09:17:00','Inserted Sticker: \'She Sticker\'','admin'),(596,'16','2018-05-24 09:30:45','Added Purchase Order for Bowknot Brewery Inc. ','sales'),(597,'3','2018-05-24 09:33:02','Added other Purchase Order ','sales'),(598,'3','2018-05-24 09:33:59','Returned 1 Guatamela Rainforest from Walkin Sales ','sales'),(599,'3','2018-05-24 09:37:56','Added Purchase Order for Baguio Country Club ','sales'),(600,'3','2018-05-24 09:38:03','Added Purchase Order for Baguio Country Club ','sales'),(601,'14','2018-05-25 01:37:34','Updated Sticker: \'Forest Hills Sticker\'','admin'),(602,'14','2018-05-25 01:38:08','Updated Sticker: \'Best Western Oxford Suites Sticker\'','admin'),(603,'13','2018-05-25 01:43:19','Added Purchase Order for Baguio Country Club ','sales'),(604,'13','2018-05-25 01:43:27','Added Purchase Order for Baguio Country Club ','sales'),(605,'13','2018-05-25 01:43:31','Added Purchase Order for  ','sales'),(606,'14','2018-05-25 02:00:44','Updated Coffee Machine: Percolator, Double Cup Espresso roast ','admin'),(607,'14','2018-05-25 02:00:59','Updated Coffee Machine: AVR, Triple Cup Espresso roast ','admin'),(608,'14','2018-05-25 02:02:18','Updated Sticker: \'Baguio Country Club Sticker\'','admin'),(609,'14','2018-05-25 02:02:32','Updated Sticker: \'Bote Central Roasting Sticker\'','admin'),(610,'14','2018-05-25 02:02:42','Updated Sticker: \'Bowknot Brewery Sticker\'','admin'),(611,'14','2018-05-25 02:03:25','Updated Sticker: \'Grumpy Joe Sticker\'','admin'),(612,'14','2018-05-25 02:03:59','Updated Sticker: \'Wack Wack Sticker\'','admin'),(613,'14','2018-05-25 02:04:15','Updated Coffee Machine: Saeco, Double Cup Espresso roast ','admin'),(614,'14','2018-05-25 02:04:40','Updated Coffee Machine: Lirika, Single Cup Espresso roast ','admin'),(615,'14','2018-05-25 02:04:52','Updated Packaging: \'brown bag bag, 250g\'','admin'),(616,'14','2018-05-25 02:05:01','Updated Packaging: \'brown bag bag, 250g\'','admin'),(617,'14','2018-05-25 02:05:18','Updated Packaging: \'clear bag bag, 250g\'','admin'),(618,'14','2018-05-25 02:05:24','Updated Packaging: \'brown bag bag, 250g\'','admin'),(619,'14','2018-05-25 02:05:37','Updated Packaging: \'brown bag bag, 250g\'','admin'),(620,'14','2018-05-25 02:06:17','Updated Packaging: \'brown bag bag, 250g\'','admin'),(621,'13','2018-05-25 02:07:52','Added other Purchase Order ','sales'),(622,'14','2018-05-25 02:10:17','Updated Raw Coffee: Robusta, city roast roast ','admin'),(623,'14','2018-05-25 02:10:40','Updated Raw Coffee: Sumatra, city roast roast ','admin'),(624,'14','2018-05-25 02:16:11','Updated Sticker: \'Gerrys Grill Treasury Sticker\'','admin'),(625,'14','2018-05-25 02:16:32','Inserted Sticker: \'Gerrys Grill Purchasing Sticker\'','admin'),(626,'14','2018-05-25 02:17:17','Inserted Sticker: \'Gweilo Corp Sticker\'','admin'),(627,'13','2018-05-25 02:21:23','Added other Purchase Order ','sales'),(628,'13','2018-05-25 02:21:25','Added other Purchase Order ','sales'),(629,'13','2018-05-25 02:21:26','Added other Purchase Order ','sales'),(630,'13','2018-05-25 02:21:27','Added other Purchase Order ','sales'),(631,'13','2018-05-25 02:22:54','Added other Purchase Order ','sales'),(669,'17','2018-05-25 02:38:27','Updated Coffee Blend: Guatamela Rainforest, clear bag Bag 250 grams in Existing ','admin'),(671,'17','2018-05-25 02:38:43','Updated Coffee Blend: Guatamela Rainforest, clear bag Bag 250 grams in Existing ','admin'),(672,'17','2018-05-25 02:38:57','Updated Coffee Blend: Guatamela Rainforest, clear bag Bag 250 grams in Existing ','admin'),(676,'17','2018-05-25 02:39:20','Updated Coffee Blend: Guatamela Rainforest, clear bag Bag 250 grams in Existing ','admin'),(678,'17','2018-05-25 02:39:34','Updated Coffee Blend: Guatamela Rainforest, clear bag Bag 250 grams in Existing ','admin'),(680,'17','2018-05-25 02:39:52','Updated Coffee Blend: Guatamela Rainforest, clear bag Bag 250 grams in Existing ','admin'),(684,'17','2018-05-25 02:40:12','Updated Coffee Blend: Guatamela Rainforest, clear bag Bag 250 grams in Existing ','admin'),(709,'13','2018-05-25 02:44:48','Returned 1 Guatamela Rainforest from Walkin Sales ','sales'),(711,'13','2018-05-25 02:45:04','Resolved Guatamela Rainforest of Walkin Client Order ','sales'),(765,'17','2018-05-25 03:10:44','Updated Coffee Blend: Breakfast Blends, brown bag Bag 250 grams in Existing ','admin'),(766,'17','2018-05-25 03:12:21','Updated Coffee Blend: Breakfast Blend, brown bag Bag 250 grams in Existing ','admin'),(775,'13','2018-05-25 03:26:08','Updated Coffee Blend: Breakfast Blends, brown bag Bag 250 grams in Existing ','admin'),(776,'13','2018-05-25 03:26:31','Updated Coffee Blend: Breakfast Blend, clear bag Bag 250 grams in Existing ','admin'),(777,'13','2018-05-25 03:43:33','Updated Coffee Blend: Breakfast Blend, clear bag Bag 500 grams in Existing ','admin'),(780,'14','2018-05-25 03:50:39','Inserted New Coffee Blend (Client): Wack Wack .','admin'),(781,'14','2018-05-25 03:51:53','Inserted New Coffee Blend (Client): Eurotel Blend .','admin'),(782,'14','2018-05-25 03:52:31','Inserted New Coffee Blend (Client): Citrus Restaurant  Blend .','admin'),(783,'14','2018-05-25 03:53:10','Updated Packaging: \'brown bag bag, 500g\'','admin'),(784,'14','2018-05-25 03:53:17','Updated Packaging: \'brown bag bag, 1000g\'','admin'),(785,'14','2018-05-25 03:53:27','Updated Packaging: \'clear bag bag, 1000g\'','admin'),(786,'14','2018-05-25 03:53:58','Inserted New Coffee Blend (Client): John Hay Water System  Blend .','admin'),(787,'14','2018-05-25 03:54:38','Inserted New Coffee Blend (Client): Kahuna Beach Resort and Spa  Blend .','admin'),(788,'14','2018-05-25 03:55:24','Inserted New Coffee Blend (Client): Kintetsu World Express  Blend .','admin'),(789,'14','2018-05-25 03:56:01','Inserted New Coffee Blend (Client): La Casa Blanca .','admin'),(790,'14','2018-05-25 03:56:47','Updated Coffee Blend: Breakfast Blend, clear bag Bag 250 grams in Existing ','admin'),(791,'14','2018-05-25 03:56:55','Updated Coffee Blend: Breakfast Blend, clear bag Bag 250 grams in Existing ','admin'),(792,'14','2018-05-25 03:57:03','Updated Coffee Blend: Breakfast Blend, clear bag Bag 250 grams in Existing ','admin'),(793,'2','2018-05-25 03:57:09','Updated Coffee Blend: Breakfast Blend, clear bag Bag 250 grams in Existing ','admin'),(794,'14','2018-05-25 03:57:12','Updated Coffee Blend: Breakfast Blend, clear bag Bag 250 grams in Existing ','admin'),(795,'14','2018-05-25 03:57:21','Updated Coffee Blend: Breakfast Blend, clear bag Bag 250 grams in Existing ','admin'),(796,'14','2018-05-25 03:57:32','Updated Coffee Blend: Chefs Blend, clear bag Bag 250 grams in Existing ','admin'),(797,'2','2018-05-25 03:57:34','Updated Coffee Blend: Breakfast Blend, clear bag Bag 250 grams in Existing ','admin'),(798,'14','2018-05-25 03:57:41','Updated Coffee Blend: Chefs Blend, clear bag Bag 250 grams in Existing ','admin'),(799,'14','2018-05-25 03:57:50','Updated Coffee Blend: Chefs Blend, clear bag Bag 250 grams in Existing ','admin'),(800,'14','2018-05-25 03:57:59','Updated Coffee Blend: Chefs Blend, clear bag Bag 250 grams in Existing ','admin'),(801,'14','2018-05-25 03:58:09','Updated Coffee Blend: Chefs Blend, clear bag Bag 250 grams in Existing ','admin'),(802,'14','2018-05-25 03:58:20','Updated Coffee Blend: Chefs Blend, clear bag Bag 250 grams in Existing ','admin'),(803,'14','2018-05-25 03:58:37','Updated Coffee Blend: Cordillera Sunrise, clear bag Bag 250 grams in Existing ','admin'),(804,'14','2018-05-25 03:58:48','Updated Coffee Blend: Cordillera Sunrise, clear bag Bag 250 grams in Existing ','admin'),(805,'14','2018-05-25 03:59:00','Updated Coffee Blend: Cordillera Sunrise, clear bag Bag 250 grams in Existing ','admin'),(806,'14','2018-05-25 03:59:16','Updated Coffee Blend: Cordillera Sunrise, clear bag Bag 250 grams in Existing ','admin'),(807,'14','2018-05-25 03:59:48','Updated Coffee Blend: Cordillera Sunrise, clear bag Bag 250 grams in Existing ','admin'),(808,'14','2018-05-25 03:59:58','Updated Coffee Blend: Espresso Blend, clear bag Bag 250 grams in Existing ','admin'),(809,'14','2018-05-25 04:00:31','Updated Coffee Blend: Espresso Blend, clear bag Bag 250 grams in Existing ','admin'),(810,'17','2018-05-25 04:00:40','Added other Purchase Order ','sales'),(811,'14','2018-05-25 04:00:47','Updated Coffee Blend: Sumatra Night, clear bag Bag 250 grams in Existing ','admin'),(812,'14','2018-05-25 04:01:02','Updated Coffee Blend: Mabuhay Blend, clear bag Bag 250 grams in Existing ','admin'),(813,'2','2018-05-25 04:02:03','Updated Coffee Blend: Sumatra Night, clear bag Bag 250 grams in Existing ','admin'),(814,'14','2018-05-25 04:02:18','Inserted New Coffee Blend (Client): La Parilla Blend .','admin'),(815,'2','2018-05-25 04:02:55','Updated Coffee Blend: Sumatra Night, clear bag Bag 250 grams in Existing ','admin'),(816,'2','2018-05-25 04:03:06','Updated Coffee Blend: Sumatra Night, clear bag Bag 250 grams in Existing ','admin'),(817,'14','2018-05-25 04:03:13','Inserted New Coffee Blend (Client): La Tienda  Blend .','admin'),(818,'2','2018-05-25 04:03:43','Updated Coffee Blend: Sumatra Night, clear bag Bag 250 grams in Existing ','admin'),(819,'2','2018-05-25 04:04:00','Updated Coffee Blend: Sumatra Night, clear bag Bag 250 grams in Existing ','admin'),(820,'14','2018-05-25 04:04:19','Inserted New Coffee Blend (Client): Le Chef Manor  Blend .','admin'),(821,'2','2018-05-25 04:04:22','Updated Coffee Blend: Mabuhay Blend, clear bag Bag 250 grams in Existing ','admin'),(822,'2','2018-05-25 04:04:34','Updated Coffee Blend: Mabuhay Blend, clear bag Bag 250 grams in Existing ','admin'),(823,'2','2018-05-25 04:04:47','Updated Coffee Blend: Mabuhay Blend, clear bag Bag 250 grams in Existing ','admin'),(824,'2','2018-05-25 04:05:30','Updated Coffee Blend: Mabuhay Blend, clear bag Bag 250 grams in Existing ','admin'),(825,'2','2018-05-25 04:06:21','Updated Coffee Blend: Kalayaan Blend, clear bag Bag 250 grams in Existing ','admin'),(826,'2','2018-05-25 04:06:37','Updated Coffee Blend: Kalayaan Blend, clear bag Bag 250 grams in Existing ','admin'),(827,'2','2018-05-25 04:06:53','Updated Coffee Blend: Kalayaan Blend, clear bag Bag 250 grams in Existing ','admin'),(828,'14','2018-05-25 04:06:56','Inserted New Coffee Blend (Client): Colleen Curran  Blend .','admin'),(829,'2','2018-05-25 04:07:08','Updated Coffee Blend: Kalayaan Blend, clear bag Bag 250 grams in Existing ','admin'),(830,'2','2018-05-25 04:07:21','Updated Coffee Blend: Kalayaan Blend, clear bag Bag 250 grams in Existing ','admin'),(831,'2','2018-05-25 04:09:15','Updated Coffee Blend: Fiesta Blend, clear bag Bag 250 grams in Existing ','admin'),(832,'14','2018-05-25 04:09:41','Inserted New Coffee Blend (Client): ATACOGMAC Blend .','admin'),(833,'14','2018-05-25 04:10:30','Inserted New Coffee Blend (Client): Bloomfield Hotel Blend .','admin'),(834,'14','2018-05-25 04:11:00','Inserted New Coffee Blend (Client): Le Chef Golf Blend .','admin'),(835,'14','2018-05-25 04:14:12','Inserted New Coffee Blend (Client): Le Chef Southwood Blend .','admin'),(836,'14','2018-05-25 04:14:45','Inserted New Coffee Blend (Client): ABS CBN Blend .','admin'),(837,'14','2018-05-25 04:15:34','Inserted New Coffee Blend (Client): Le Chef Accounting Blend .','admin'),(838,'14','2018-05-25 04:16:22','Inserted New Coffee Blend (Client): Le Chef Paranaque Blend .','admin'),(839,'14','2018-05-25 04:16:57','Inserted New Coffee Blend (Client): Connies Kitchen Blend .','admin'),(840,'14','2018-05-25 04:17:43','Inserted New Coffee Blend (Client): Lemon and Olives Blend .','admin'),(841,'14','2018-05-25 04:18:42','Inserted New Coffee Blend (Client): Le Festin Trading Blend .','admin'),(842,'14','2018-05-25 04:19:18','Inserted New Coffee Blend (Client): Cosys Cafe and Roasterie Blend .','admin'),(843,'14','2018-05-25 04:20:00','Inserted New Coffee Blend (Client): Lighthouse Marina Resort Blend .','admin'),(844,'2','2018-05-25 04:22:28','Updated Coffee Blend: Breakfast Blend, brown bag Bag 250 grams in Existing ','admin'),(845,'14','2018-05-25 04:22:59','Updated Coffee Blend: Breakfast Blend, clear bag Bag 500 grams in Existing ','admin'),(846,'14','2018-05-25 04:23:23','Updated Coffee Blend: Breakfast Blend, clear bag Bag 250 grams in Existing ','admin'),(847,'14','2018-05-25 04:23:31','Updated Coffee Blend: Breakfast Blend, clear bag Bag 500 grams in Existing ','admin'),(848,'14','2018-05-25 04:23:39','Updated Coffee Blend: Breakfast Blend, clear bag Bag 1000 grams in Existing ','admin'),(849,'14','2018-05-25 04:23:48','Updated Coffee Blend: Breakfast Blend, clear bag Bag 250 grams in Existing ','admin'),(850,'14','2018-05-25 04:23:57','Updated Coffee Blend: Breakfast Blend, clear bag Bag 500 grams in Existing ','admin'),(851,'14','2018-05-25 04:24:06','Updated Coffee Blend: Breakfast Blend, brown bag Bag 1000 grams in Existing ','admin'),(852,'2','2018-05-25 04:26:00','Updated Coffee Blend: Breakfast Blend, clear bag Bag 500 grams in Existing ','admin'),(853,'2','2018-05-25 04:26:45','Updated Coffee Blend: Breakfast Blend, brown bag Bag 500 grams in Existing ','admin'),(854,'2','2018-05-25 04:26:57','Updated Coffee Blend: Breakfast Blend, clear bag Bag 1000 grams in Existing ','admin'),(855,'14','2018-05-25 04:27:08','Inserted New Coffee Blend (Client): Bread House Blend .','admin'),(856,'2','2018-05-25 04:27:10','Updated Coffee Blend: Chefs Blend, brown bag Bag 250 grams in Existing ','admin'),(857,'2','2018-05-25 04:27:23','Updated Coffee Blend: Chefs Blend, clear bag Bag 500 grams in Existing ','admin'),(858,'2','2018-05-25 04:27:39','Updated Coffee Blend: Chefs Blend, brown bag Bag 500 grams in Existing ','admin'),(859,'14','2018-05-25 04:27:50','Inserted New Coffee Blend (Client): Edwin Hui Blend .','admin'),(860,'2','2018-05-25 04:27:55','Updated Coffee Blend: Chefs Blend, clear bag Bag 1000 grams in Existing ','admin'),(861,'2','2018-05-25 04:28:14','Updated Coffee Blend: Chefs Blend, brown bag Bag 1000 grams in Existing ','admin'),(862,'2','2018-05-25 04:28:35','Updated Coffee Blend: Cordillera Sunrise, brown bag Bag 250 grams in Existing ','admin'),(863,'14','2018-05-25 04:28:38','Inserted New Coffee Blend (Client): Marios Restaurant Baguio Blend .','admin'),(864,'2','2018-05-25 04:28:49','Updated Coffee Blend: Cordillera Sunrise, clear bag Bag 500 grams in Existing ','admin'),(865,'14','2018-05-25 04:29:54','Inserted New Coffee Blend (Client): Marios Restaurant Manila Blend .','admin'),(868,'14','2018-05-25 04:59:13','Inserted New Coffee Blend (Client): Escala Blend .','admin'),(869,'14','2018-05-25 04:59:52','Inserted New Coffee Blend (Client): Hapi Bakery  and Mami House .','admin'),(871,'14','2018-05-25 05:00:20','Inserted New Coffee Blend (Client): Fil Estate Blend .','admin'),(875,'14','2018-05-25 05:01:05','Inserted New Coffee Blend (Client): Professor Valentino Macanes Blend .','admin'),(876,'14','2018-05-25 05:01:33','Inserted New Coffee Blend (Client): She Diner Blend .','admin'),(878,'14','2018-05-25 05:01:53','Inserted New Coffee Blend (Client): GMA Blend .','admin'),(882,'14','2018-05-25 05:02:21','Inserted New Coffee Blend (Client): Grumpy Joe Blend .','admin'),(883,'14','2018-05-25 05:02:54','Inserted New Coffee Blend (Client): Bowknot Brewery Blend .','admin'),(884,'14','2018-05-25 05:03:26','Inserted New Coffee Blend (Client): Cafe de Manor .','admin'),(885,'14','2018-05-25 05:04:35','Inserted New Coffee Blend (Client): Best Western Oxford Suites Blend .','admin'),(887,'14','2018-05-25 05:05:18','Inserted New Coffee Blend (Client): Baguio Country Club Blend .','admin'),(888,'14','2018-05-25 05:05:52','Inserted New Coffee Blend (Client): Forest Hills Blend .','admin'),(889,'14','2018-05-25 05:06:33','Inserted New Coffee Blend (Client): Bioessence Blend .','admin'),(890,'14','2018-05-25 05:07:54','Inserted New Coffee Blend (Client): Blackwoods Blend .','admin'),(893,'14','2018-05-25 05:08:48','Inserted New Coffee Blend (Client): Gerrys Grill Treasury Blend .','admin'),(898,'14','2018-05-25 05:09:48','Inserted New Coffee Blend (Client): Gerrys Grill Purchasing Blend .','admin'),(900,'14','2018-05-25 05:10:26','Inserted New Coffee Blend (Client): Keiffeir Coffee Shop Blend .','admin'),(902,'13','2018-05-25 05:11:25','Added other Purchase Order ','sales'),(903,'14','2018-05-25 05:11:44','Inserted New Coffee Blend (Client): Bote Central Roasting Machine Blend .','admin'),(905,'14','2018-05-25 05:12:21','Inserted New Coffee Blend (Client): Gweilo Corp Blend .','admin'),(907,'14','2018-05-25 05:12:57','Inserted New Coffee Blend (Client): Camp John Hay Golf Club Blend .','admin'),(909,'14','2018-05-25 05:13:23','Inserted New Coffee Blend (Client): Canto Blend .','admin'),(910,'14','2018-05-25 05:13:54','Inserted New Coffee Blend (Client): Cafe de Seoul Blend .','admin'),(914,'13','2018-05-25 05:17:07','Returned 3 Cordillera Sunrise from Walkin Sales ','sales'),(916,'13','2018-05-25 05:18:48','Resolved Cordillera Sunrise of Walkin Client Order ','sales'),(922,'14','2018-05-25 05:22:45','Inserted New Coffee Blend (Client): Cafe Caw Blend .','admin'),(925,'2','2018-05-25 05:23:51','Added other Purchase Order ','sales'),(926,'2','2018-05-25 05:25:06','Added other Purchase Order ','sales'),(928,'2','2018-05-25 05:34:10','Added other Purchase Order ','sales'),(930,'13','2018-05-25 05:38:56','Resolved Citrus Restaurant\'s Piccolina machine Double Cup Espresso ','sales'),(931,'13','2018-05-25 05:39:50','Added Purchase Order for ABS CBN ','sales'),(932,'13','2018-05-25 05:41:10','Added Purchase Order for Bloomfield Hotel (Patch Cafe) ','sales'),(933,'13','2018-05-25 05:42:33','Added Purchase Order for Cafe Caw ','sales'),(934,'13','2018-05-25 05:43:25','Added other Purchase Order ','sales'),(935,'13','2018-05-25 05:43:47','Added Purchase Order for ABS CBN ','sales'),(936,'4','2018-05-25 05:44:39','Added Purchase Order for Escala ','sales'),(937,'4','2018-05-25 05:47:15','Updated Packaging: \'brown bag bag, 250g\'','admin'),(938,'4','2018-05-25 05:47:41','Updated Sticker: \'ABS CBN Sticker\'','admin'),(939,'4','2018-05-25 05:48:38','Updated Packaging: \'brown bag bag, 250g\'','admin'),(946,'4','2018-05-25 08:00:51','Added Purchase Order for ABS CBN ','sales'),(947,'4','2018-05-25 08:00:57','Added Purchase Order for Bloomfield Hotel (Patch Cafe) ','sales'),(948,'4','2018-05-25 08:01:32','Added Purchase Order for Bloomfield Hotel (Patch Cafe) ','sales'),(949,'4','2018-05-25 08:01:48','Added Purchase Order for Bloomfield Hotel (Patch Cafe) ','sales'),(950,'4','2018-05-25 08:02:18','Added Purchase Order for Cafe Caw ','sales'),(960,'14','2018-05-25 08:08:16','Updated Coffee Blend: Breakfast Blend, brown bag Bag 250 grams in Company Blends.','admin'),(961,'14','2018-05-25 08:08:42','Updated Coffee Blend: Breakfast Blend, brown bag Bag 250 grams in Company Blends.','admin'),(962,'14','2018-05-25 08:08:53','Updated Coffee Blend: Breakfast Blend, clear bag Bag 250 grams in Company Blends.','admin'),(963,'14','2018-05-25 08:09:05','Updated Coffee Blend: Breakfast Blend, clear bag Bag 250 grams in Company Blends.','admin'),(964,'14','2018-05-25 08:09:18','Updated Coffee Blend: Breakfast Blend, clear bag Bag 250 grams in Company Blends.','admin'),(965,'14','2018-05-25 08:09:30','Updated Coffee Blend: Breakfast Blend, clear bag Bag 500 grams in Company Blends.','admin'),(967,'14','2018-05-25 08:10:20','Updated Coffee Blend: Breakfast Blend, clear bag Bag 500 grams in Company Blends.','admin'),(968,'14','2018-05-25 08:10:53','Updated Coffee Blend: Baguio Country Club Blend, clear bag Bag 500 grams in Client Blends.','admin'),(970,'14','2018-05-25 08:11:33','Updated Coffee Blend: Baguio Country Club Blend, brown bag Bag 500 grams in Client Blends.','admin'),(973,'14','2018-05-25 08:12:32','Updated Coffee Blend: Cordillera Sunrise, brown bag Bag 500 grams in Company Blends.','admin'),(975,'14','2018-05-25 08:12:55','Updated Coffee Blend: Cordillera Sunrise, brown bag Bag 1000 grams in Company Blends.','admin'),(977,'14','2018-05-25 08:13:13','Updated Coffee Blend: Espresso Blend, clear bag Bag 500 grams in Company Blends.','admin'),(978,'14','2018-05-25 08:13:48','Updated Coffee Blend: Guatamela Rainforest, brown bag Bag 250 grams in Company Blends.','admin'),(979,'14','2018-05-25 08:14:00','Updated Coffee Blend: Guatamela Rainforest, clear bag Bag 500 grams in Company Blends.','admin'),(980,'14','2018-05-25 08:14:14','Updated Coffee Blend: Guatamela Rainforest, brown bag Bag 500 grams in Company Blends.','admin'),(982,'14','2018-05-25 08:14:42','Updated Coffee Blend: Guatamela Rainforest, clear bag Bag 1000 grams in Company Blends.','admin'),(983,'14','2018-05-25 08:15:11','Updated Coffee Blend: Guatamela Rainforest, brown bag Bag 1000 grams in Company Blends.','admin'),(984,'14','2018-05-25 08:15:28','Updated Coffee Blend: Kalayaan Blend, clear bag Bag 500 grams in Company Blends.','admin'),(986,'14','2018-05-25 08:15:42','Updated Coffee Blend: Kalayaan Blend, brown bag Bag 500 grams in Company Blends.','admin'),(987,'14','2018-05-25 08:16:09','Updated Coffee Blend: Kalayaan Blend, clear bag Bag 1000 grams in Company Blends.','admin'),(988,'14','2018-05-25 08:16:22','Updated Coffee Blend: Kalayaan Blend, brown bag Bag 1000 grams in Company Blends.','admin'),(990,'14','2018-05-25 08:16:47','Updated Coffee Blend: Mabuhay Blend, clear bag Bag 500 grams in Company Blends.','admin'),(991,'14','2018-05-25 08:16:59','Updated Coffee Blend: Mabuhay Blend, brown bag Bag 500 grams in Company Blends.','admin'),(992,'14','2018-05-25 08:17:11','Updated Coffee Blend: Mabuhay Blend, clear bag Bag 1000 grams in Company Blends.','admin'),(993,'14','2018-05-25 08:17:25','Updated Coffee Blend: Mabuhay Blend, brown bag Bag 1000 grams in Company Blends.','admin'),(995,'14','2018-05-25 08:17:40','Updated Coffee Blend: Sumatra Night, brown bag Bag 250 grams in Company Blends.','admin'),(996,'14','2018-05-25 08:17:55','Updated Coffee Blend: Sumatra Night, clear bag Bag 500 grams in Company Blends.','admin'),(997,'14','2018-05-25 08:18:06','Updated Coffee Blend: Sumatra Night, brown bag Bag 500 grams in Company Blends.','admin'),(998,'14','2018-05-25 08:18:17','Updated Coffee Blend: Sumatra Night, clear bag Bag 1000 grams in Company Blends.','admin'),(999,'14','2018-05-25 08:18:26','Updated Coffee Blend: Sumatra Night, brown bag Bag 1000 grams in Company Blends.','admin'),(1004,'14','2018-05-25 08:23:21','Updated Raw Coffee: ,  roast ','admin'),(1005,'14','2018-05-25 08:23:38','Updated Raw Coffee: Robusta, light roast roast ','admin'),(1007,'14','2018-05-25 08:24:42','Updated Coffee Blend: Breakfast Blend, clear bag Bag 250 grams in Company Blends.','admin'),(1008,'14','2018-05-25 08:24:52','Updated Coffee Blend: Breakfast Blend, clear bag Bag 250 grams in Company Blends.','admin'),(1009,'14','2018-05-25 08:25:18','Updated Coffee Blend: Chefs Blend, brown bag Bag 250 grams in Company Blends.','admin'),(1010,'14','2018-05-25 08:25:30','Updated Coffee Blend: Chefs Blend, brown bag Bag 250 grams in Company Blends.','admin'),(1011,'14','2018-05-25 08:25:51','Updated Coffee Blend: Baguio Country Club Blend, brown bag Bag 500 grams in Client Blends.','admin'),(1012,'14','2018-05-25 08:26:45','Updated Coffee Blend: Baguio Country Club Blend, brown bag Bag 500 grams in Client Blends.','admin'),(1013,'4','2018-05-25 08:28:45',' Mark Bloomfield Hotel (Patch Cafe)\'s orders as Fully Delivered ','sales'),(1014,'4','2018-05-25 08:30:03',' Mark Bloomfield Hotel (Patch Cafe)\'s orders as Fully Paid ','sales'),(1015,'4','2018-05-25 08:30:49','Added Purchase Order for ABS CBN ','sales'),(1016,'4','2018-05-25 08:30:53','Added Purchase Order for Bioessence ','sales'),(1017,'18','2018-05-26 05:30:41','Purchased Order ','inventory'),(1018,'18','2018-05-26 05:31:50','Record Partial Delivery ','inventory'),(1019,'18','2018-05-26 05:31:50','Record Partial Delivery ','inventory'),(1020,'18','2018-05-26 05:31:50','Record Partial Delivery ','inventory'),(1021,'18','2018-05-26 05:35:19','Purchased Order ','inventory'),(1022,'18','2018-05-26 05:43:18','Purchased Order ','inventory'),(1023,'18','2018-05-26 05:44:20','Record Partial Delivery ','inventory'),(1024,'18','2018-05-26 05:44:20','Record Partial Delivery ','inventory'),(1025,'18','2018-05-26 05:44:21','Record Partial Delivery ','inventory'),(1026,'18','2018-05-26 05:44:47','Record Partial Payment ','inventory'),(1027,'18','2018-05-26 05:45:32','Purchased Order ','inventory'),(1028,'18','2018-05-26 05:46:05','Record Partial Delivery ','inventory'),(1029,'18','2018-05-26 05:46:05','Record Partial Delivery ','inventory'),(1030,'18','2018-05-26 05:46:05','Record Partial Delivery ','inventory'),(1031,'18','2018-05-26 05:46:29','Record Partial Payment ','inventory'),(1032,'18','2018-05-26 05:48:41','Purchased Order ','inventory'),(1033,'18','2018-05-26 05:48:55','Record Partial Delivery ','inventory'),(1034,'18','2018-05-26 05:48:55','Record Partial Delivery ','inventory'),(1035,'18','2018-05-26 05:49:15','Record Partial Payment ','inventory'),(1036,'18','2018-05-26 05:50:44','Purchased Order ','inventory'),(1037,'18','2018-05-26 05:52:32','Record Partial Delivery ','inventory'),(1038,'18','2018-05-26 05:52:33','Record Partial Delivery ','inventory'),(1039,'18','2018-05-26 05:52:33','Record Partial Delivery ','inventory'),(1040,'18','2018-05-26 05:52:52','Record Partial Payment ','inventory'),(1041,'18','2018-05-26 05:54:10','Purchased Order ','inventory'),(1042,'18','2018-05-26 05:54:32','Record Partial Delivery ','inventory'),(1043,'18','2018-05-26 05:54:32','Record Partial Delivery ','inventory'),(1044,'18','2018-05-26 05:54:32','Record Partial Delivery ','inventory'),(1045,'18','2018-05-26 05:54:56','Record Partial Payment ','inventory'),(1046,'18','2018-05-26 05:57:02','Purchased Order ','inventory'),(1047,'18','2018-05-26 05:57:27','Record Partial Delivery ','inventory'),(1048,'18','2018-05-26 05:57:27','Record Partial Delivery ','inventory'),(1049,'18','2018-05-26 05:57:46','Record Partial Payment ','inventory'),(1050,'18','2018-05-26 05:59:15','Purchased Order ','inventory'),(1051,'18','2018-05-26 06:00:04','Record Partial Delivery ','inventory'),(1052,'18','2018-05-26 06:00:04','Record Partial Delivery ','inventory'),(1053,'18','2018-05-26 06:00:04','Record Partial Delivery ','inventory'),(1054,'18','2018-05-26 06:00:31','Record Partial Payment ','inventory'),(1055,'18','2018-05-26 06:02:50','Purchased Order ','inventory'),(1056,'18','2018-05-26 06:04:13','Record Partial Delivery ','inventory'),(1057,'18','2018-05-26 06:04:13','Record Partial Delivery ','inventory'),(1058,'18','2018-05-26 06:04:13','Record Partial Delivery ','inventory'),(1059,'18','2018-05-26 06:04:31','Record Partial Payment ','inventory'),(1060,'18','2018-05-26 06:05:58','Purchased Order ','inventory'),(1061,'18','2018-05-26 06:06:31','Record Partial Delivery ','inventory'),(1062,'18','2018-05-26 06:06:31','Record Partial Delivery ','inventory'),(1063,'18','2018-05-26 06:06:31','Record Partial Delivery ','inventory'),(1064,'18','2018-05-26 06:06:32','Record Partial Delivery ','inventory'),(1065,'18','2018-05-26 06:06:47','Record Partial Payment ','inventory'),(1066,'18','2018-05-26 06:08:25','Purchased Order ','inventory'),(1067,'18','2018-05-26 06:08:56','Record Partial Delivery ','inventory'),(1068,'18','2018-05-26 06:09:26','Record Partial Delivery ','inventory'),(1069,'18','2018-05-26 06:09:26','Record Partial Delivery ','inventory'),(1070,'18','2018-05-26 06:12:29','Purchased Order ','inventory'),(1071,'18','2018-05-26 06:13:31','Record Partial Delivery ','inventory'),(1072,'18','2018-05-26 06:13:31','Record Partial Delivery ','inventory'),(1073,'18','2018-05-26 06:13:31','Record Partial Delivery ','inventory'),(1074,'18','2018-05-26 06:14:42','Purchased Order ','inventory'),(1075,'18','2018-05-26 06:15:02','Record Partial Delivery ','inventory'),(1076,'18','2018-05-26 06:15:02','Record Partial Delivery ','inventory'),(1077,'18','2018-05-26 06:15:55','Purchased Order ','inventory'),(1078,'18','2018-05-26 06:16:18','Record Partial Delivery ','inventory'),(1079,'18','2018-05-26 06:16:18','Record Partial Delivery ','inventory'),(1080,'18','2018-05-26 06:17:06','Purchased Order ','inventory'),(1081,'18','2018-05-26 06:17:30','Record Partial Delivery ','inventory'),(1082,'18','2018-05-26 06:17:31','Record Partial Delivery ','inventory'),(1083,'18','2018-05-26 06:17:56','Purchased Order ','inventory'),(1084,'18','2018-05-26 06:18:14','Record Partial Delivery ','inventory'),(1085,'18','2018-05-26 06:40:11','Purchased Order ','inventory'),(1086,'18','2018-05-26 06:40:40','Record Partial Delivery ','inventory'),(1087,'18','2018-05-26 06:40:41','Record Partial Delivery ','inventory'),(1088,'18','2018-05-26 06:40:41','Record Partial Delivery ','inventory'),(1089,'18','2018-05-26 06:40:41','Record Partial Delivery ','inventory'),(1090,'18','2018-05-26 06:40:41','Record Partial Delivery ','inventory'),(1091,'18','2018-05-26 06:40:41','Record Partial Delivery ','inventory'),(1092,'18','2018-05-26 06:40:41','Record Partial Delivery ','inventory'),(1093,'18','2018-05-26 06:40:41','Record Partial Delivery ','inventory'),(1094,'18','2018-05-26 06:42:07','Record Partial Payment ','inventory'),(1095,'18','2018-05-26 06:44:42','Purchased Order ','inventory'),(1096,'18','2018-05-26 06:45:14','Record Partial Delivery ','inventory'),(1097,'18','2018-05-26 06:45:14','Record Partial Delivery ','inventory'),(1098,'18','2018-05-26 06:45:14','Record Partial Delivery ','inventory'),(1099,'18','2018-05-26 06:45:15','Record Partial Delivery ','inventory'),(1100,'18','2018-05-26 06:45:15','Record Partial Delivery ','inventory'),(1101,'18','2018-05-26 06:45:15','Record Partial Delivery ','inventory'),(1102,'18','2018-05-26 06:45:15','Record Partial Delivery ','inventory'),(1103,'18','2018-05-26 06:45:15','Record Partial Delivery ','inventory'),(1104,'18','2018-05-26 06:45:15','Record Partial Delivery ','inventory'),(1105,'18','2018-05-26 06:45:15','Record Partial Delivery ','inventory'),(1106,'18','2018-05-26 06:45:16','Record Partial Delivery ','inventory'),(1107,'18','2018-05-26 06:45:16','Record Partial Delivery ','inventory'),(1108,'18','2018-05-26 06:45:16','Record Partial Delivery ','inventory'),(1109,'18','2018-05-26 06:47:21','Purchased Order ','inventory'),(1110,'18','2018-05-26 06:47:56','Record Partial Delivery ','inventory'),(1111,'18','2018-05-26 06:47:56','Record Partial Delivery ','inventory'),(1112,'18','2018-05-26 06:47:56','Record Partial Delivery ','inventory'),(1113,'18','2018-05-26 06:47:56','Record Partial Delivery ','inventory'),(1114,'18','2018-05-26 06:48:16','Record Partial Delivery ','inventory'),(1115,'18','2018-05-26 06:48:16','Record Partial Delivery ','inventory'),(1116,'18','2018-05-26 06:48:16','Record Partial Delivery ','inventory'),(1117,'18','2018-05-26 06:50:11','Record Partial Payment ','inventory'),(1118,'18','2018-05-26 06:52:50','Purchased Order ','inventory'),(1119,'18','2018-05-26 06:53:37','Record Partial Delivery ','inventory'),(1120,'18','2018-05-26 06:53:38','Record Partial Delivery ','inventory'),(1121,'18','2018-05-26 06:53:38','Record Partial Delivery ','inventory'),(1122,'18','2018-05-26 06:53:38','Record Partial Delivery ','inventory'),(1123,'18','2018-05-26 06:53:38','Record Partial Delivery ','inventory'),(1124,'18','2018-05-26 06:53:38','Record Partial Delivery ','inventory'),(1125,'18','2018-05-26 06:53:38','Record Partial Delivery ','inventory'),(1126,'18','2018-05-26 06:53:38','Record Partial Delivery ','inventory'),(1127,'18','2018-05-26 06:53:39','Record Partial Delivery ','inventory'),(1128,'18','2018-05-26 06:53:39','Record Partial Delivery ','inventory'),(1129,'18','2018-05-26 06:54:07','Record Partial Payment ','inventory'),(1130,'18','2018-05-26 06:56:00','Purchased Order ','inventory'),(1131,'18','2018-05-26 06:56:35','Record Partial Delivery ','inventory'),(1132,'18','2018-05-26 06:56:35','Record Partial Delivery ','inventory'),(1133,'18','2018-05-26 06:56:35','Record Partial Delivery ','inventory'),(1134,'18','2018-05-26 06:56:35','Record Partial Delivery ','inventory'),(1135,'18','2018-05-26 06:56:36','Record Partial Delivery ','inventory'),(1136,'18','2018-05-26 06:56:36','Record Partial Delivery ','inventory'),(1137,'18','2018-05-26 06:57:09','Record Partial Payment ','inventory'),(1138,'18','2018-05-26 06:58:19','Purchased Order ','inventory'),(1139,'18','2018-05-26 06:59:20','Purchased Order ','inventory'),(1140,'18','2018-05-26 06:59:57','Record Partial Delivery ','inventory'),(1141,'18','2018-05-26 06:59:57','Record Partial Delivery ','inventory'),(1142,'18','2018-05-26 06:59:57','Record Partial Delivery ','inventory'),(1143,'18','2018-05-26 06:59:58','Record Partial Delivery ','inventory'),(1144,'18','2018-05-26 06:59:58','Record Partial Delivery ','inventory'),(1145,'18','2018-05-26 06:59:58','Record Partial Delivery ','inventory'),(1146,'18','2018-05-26 07:00:27','Record Partial Delivery ','inventory'),(1147,'18','2018-05-26 07:00:27','Record Partial Delivery ','inventory'),(1148,'18','2018-05-26 07:00:27','Record Partial Delivery ','inventory'),(1149,'18','2018-05-26 07:00:27','Record Partial Delivery ','inventory'),(1150,'18','2018-05-26 07:00:28','Record Partial Delivery ','inventory'),(1151,'18','2018-05-26 07:00:55','Record Partial Payment ','inventory'),(1152,'18','2018-05-26 07:01:24','Record Partial Payment ','inventory'),(1153,'18','2018-05-26 07:03:00','Purchased Order ','inventory'),(1154,'18','2018-05-26 07:03:27','Record Partial Delivery ','inventory'),(1155,'18','2018-05-26 07:03:27','Record Partial Delivery ','inventory'),(1156,'18','2018-05-26 07:03:27','Record Partial Delivery ','inventory'),(1157,'18','2018-05-26 07:03:27','Record Partial Delivery ','inventory'),(1158,'18','2018-05-26 07:03:28','Record Partial Delivery ','inventory'),(1159,'18','2018-05-26 07:03:28','Record Partial Delivery ','inventory'),(1160,'18','2018-05-26 07:03:28','Record Partial Delivery ','inventory'),(1161,'18','2018-05-26 07:14:56','Record Physical Count under Packaging Inventory Stocks ','inventory'),(1162,'18','2018-05-26 07:20:52','Purchased Order ','inventory'),(1163,'18','2018-05-26 07:21:41','Record Partial Delivery ','inventory'),(1164,'18','2018-05-26 07:28:28','Purchased Order ','inventory'),(1165,'18','2018-05-26 07:28:49','Record Partial Delivery ','inventory'),(1166,'18','2018-05-26 07:28:49','Record Partial Delivery ','inventory'),(1167,'18','2018-05-26 07:28:50','Record Partial Delivery ','inventory'),(1168,'18','2018-05-26 07:28:50','Record Partial Delivery ','inventory');
/*!40000 ALTER TABLE `activitylogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `categoryId` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(45) NOT NULL,
  `activation` int(11) DEFAULT '1',
  PRIMARY KEY (`categoryId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client_coffreturn`
--

DROP TABLE IF EXISTS `client_coffreturn`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client_coffreturn` (
  `client_coffReturnID` int(11) NOT NULL AUTO_INCREMENT,
  `client_dr` varchar(20) NOT NULL,
  `client_deliveryID` int(11) NOT NULL,
  `coff_returnDate` date NOT NULL,
  `coff_returnQty` int(11) NOT NULL,
  `coff_remarks` varchar(50) NOT NULL,
  `coff_returnAction` varchar(50) NOT NULL,
  `coff_resolveDate` date DEFAULT NULL,
  `resolved` enum('Yes','No') NOT NULL DEFAULT 'No',
  `inv_stat` varchar(45) NOT NULL DEFAULT '0',
  `pckng_stat` varchar(45) NOT NULL DEFAULT '0',
  `stckr_stat` varchar(45) NOT NULL DEFAULT '0',
  `walkinPo_id` varchar(45) NOT NULL,
  PRIMARY KEY (`client_coffReturnID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client_coffreturn`
--

LOCK TABLES `client_coffreturn` WRITE;
/*!40000 ALTER TABLE `client_coffreturn` DISABLE KEYS */;
INSERT INTO `client_coffreturn` VALUES (1,'',10,'2018-05-24',1,'Wrong Blend','repacked',NULL,'Yes','0','0','0',''),(2,'',9,'2018-05-24',1,'Damaged','',NULL,'No','0','0','0',''),(3,'',1,'2018-05-24',2,'Wrong Blend','',NULL,'No','0','0','0',''),(4,'',12,'2018-05-24',1,'Wrong Packaging','',NULL,'No','0','0','0',''),(5,'',3,'2018-05-24',1,'damaged','',NULL,'No','0','0','0',''),(6,'',6,'2018-05-25',1,'wrong blend','repacked',NULL,'Yes','0','0','0',''),(7,'',21,'2018-05-25',3,'Spoiled','Replace',NULL,'Yes','0','0','0','');
/*!40000 ALTER TABLE `client_coffreturn` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client_delivery`
--

DROP TABLE IF EXISTS `client_delivery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client_delivery` (
  `client_deliveryID` int(11) NOT NULL AUTO_INCREMENT,
  `client_dr` varchar(20) NOT NULL,
  `contractPO_id` int(11) NOT NULL,
  `client_invoice` varchar(50) NOT NULL,
  `client_deliverDate` date NOT NULL,
  `client_balance` int(11) NOT NULL,
  `client_receive` varchar(50) NOT NULL,
  `deliver_quantity` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `amount_paid` int(11) NOT NULL DEFAULT '0',
  `payment_remarks` varchar(25) NOT NULL DEFAULT 'unpaid',
  `return` varchar(10) NOT NULL DEFAULT 'Received',
  PRIMARY KEY (`client_deliveryID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client_delivery`
--

LOCK TABLES `client_delivery` WRITE;
/*!40000 ALTER TABLE `client_delivery` DISABLE KEYS */;
INSERT INTO `client_delivery` VALUES (1,'dr256',2,'si256','2018-05-25',80000,'Anne Sanguir',250,2,80000,'paid','Received');
/*!40000 ALTER TABLE `client_delivery` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `update_pay_stat` BEFORE UPDATE ON `client_delivery` FOR EACH ROW IF NEW.client_balance = NEW.amount_paid THEN
	SET NEW.payment_remarks = 'paid';
END IF */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `client_machreturn`
--

DROP TABLE IF EXISTS `client_machreturn`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client_machreturn` (
  `client_machReturnID` int(11) NOT NULL AUTO_INCREMENT,
  `mach_returnDate` date NOT NULL,
  `mach_returnQty` int(11) NOT NULL,
  `client_id` varchar(20) NOT NULL,
  `mach_id` int(11) NOT NULL,
  `mach_serial` varchar(60) NOT NULL,
  `mach_remarks` varchar(50) NOT NULL,
  `mach_returnAction` varchar(50) NOT NULL,
  `mach_resolveDate` date DEFAULT NULL,
  `resolved` varchar(11) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT 'No',
  `mach_stat` varchar(45) NOT NULL DEFAULT '0',
  PRIMARY KEY (`client_machReturnID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client_machreturn`
--

LOCK TABLES `client_machreturn` WRITE;
/*!40000 ALTER TABLE `client_machreturn` DISABLE KEYS */;
/*!40000 ALTER TABLE `client_machreturn` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coffee_blend`
--

DROP TABLE IF EXISTS `coffee_blend`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coffee_blend` (
  `blend_id` int(11) NOT NULL AUTO_INCREMENT,
  `blend` varchar(50) NOT NULL,
  `package_id` varchar(45) NOT NULL,
  `blend_price` int(11) NOT NULL,
  `blend_qty` int(11) NOT NULL,
  `blend_physcount` int(11) NOT NULL DEFAULT '0',
  `blend_remarks` varchar(45) DEFAULT NULL,
  `blend_discrepancy` int(11) NOT NULL DEFAULT '0',
  `inventory_date` date DEFAULT NULL,
  `blend_activation` int(11) NOT NULL DEFAULT '1',
  `blend_type` varchar(45) NOT NULL,
  `sticker_id` int(11) NOT NULL,
  PRIMARY KEY (`blend_id`)
) ENGINE=InnoDB AUTO_INCREMENT=154 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coffee_blend`
--

LOCK TABLES `coffee_blend` WRITE;
/*!40000 ALTER TABLE `coffee_blend` DISABLE KEYS */;
INSERT INTO `coffee_blend` VALUES (1,'Guatamela Rainforest','1',365,1,1,'',0,'2018-05-25',1,'Existing',2),(2,'Guatamela Rainforest','4',365,0,0,'',0,NULL,1,'Existing',2),(3,'Guatamela Rainforest','2',615,0,0,'',0,NULL,1,'Existing',2),(4,'Guatamela Rainforest','5',615,2,2,'',0,'2018-05-25',1,'Existing',2),(5,'Guatamela Rainforest','3',1025,0,0,'',0,NULL,1,'Existing',2),(6,'Guatamela Rainforest','6',1025,0,0,'',0,NULL,1,'Existing',2),(7,'Cordillera Sunrise','1',350,0,0,'',0,NULL,1,'Existing',3),(9,'Cordillera Sunrise','4',350,0,0,'',0,NULL,1,'Existing',3),(10,'Cordillera Sunrise','2',575,0,0,'',0,NULL,1,'Existing',3),(11,'Cordillera Sunrise','5',575,0,0,'',0,NULL,1,'Existing',3),(15,'Cordillera Sunrise','3',950,0,0,NULL,0,NULL,1,'Existing',3),(16,'Cordillera Sunrise','6',950,0,0,NULL,0,NULL,1,'Existing',3),(17,'Sumatra Night','1',325,0,0,NULL,0,NULL,1,'Existing',4),(18,'Sumatra Night','4',350,0,0,NULL,0,NULL,1,'Existing',4),(20,'Sumatra Night','2',530,0,0,NULL,0,NULL,1,'Existing',4),(22,'Sumatra Night','5',575,0,0,NULL,0,NULL,1,'Existing',4),(24,'Sumatra Night','3',850,0,0,NULL,0,NULL,1,'Existing',4),(30,'Sumatra Night','6',850,0,0,NULL,0,NULL,1,'Existing',4),(35,'Chefs Blend','1',265,0,0,NULL,0,NULL,1,'Existing',5),(39,'Chefs Blend','4',265,0,0,NULL,0,NULL,1,'Existing',5),(42,'Chefs Blend','2',465,0,0,NULL,0,NULL,1,'Existing',5),(55,'Chefs Blend','5',465,0,0,NULL,0,NULL,1,'Existing',5),(56,'Chefs Blend','3',800,0,0,NULL,0,NULL,1,'Existing',5),(60,'Chefs Blend','6',800,0,0,NULL,0,NULL,1,'Existing',5),(66,'Espresso Blend','1',230,0,0,NULL,0,NULL,1,'Existing',6),(72,'Espresso Blend','4',230,0,0,NULL,0,NULL,1,'Existing',6),(73,'Espresso Blend','2',415,0,0,NULL,0,NULL,1,'Existing',6),(74,'Espresso Blend','5',415,0,0,NULL,0,NULL,1,'Existing',6),(75,'Espresso Blend','3',750,0,0,NULL,0,NULL,1,'Existing',6),(76,'Espresso Blend','6',750,0,0,NULL,0,NULL,1,'Existing',6),(77,'Breakfast Blend','1',200,0,0,NULL,0,NULL,1,'Existing',7),(78,'Breakfast Blend','4',200,0,0,NULL,0,NULL,1,'Existing',7),(80,'Breakfast Blend','2',375,0,0,NULL,0,NULL,1,'Existing',7),(81,'Breakfast Blend','5',375,0,0,NULL,0,NULL,1,'Existing',7),(82,'Breakfast Blend','3',675,1,0,NULL,0,NULL,1,'Existing',7),(83,'Breakfast Blend','6',675,0,0,NULL,0,NULL,1,'Existing',7),(84,'Mabuhay Blend','1',180,0,0,NULL,0,NULL,1,'Existing',8),(85,'Mabuhay Blend','4',180,0,0,NULL,0,NULL,1,'Existing',8),(86,'Mabuhay Blend','2',350,0,0,NULL,0,NULL,1,'Existing',8),(87,'Mabuhay Blend','5',350,0,0,NULL,0,NULL,1,'Existing',8),(88,'Mabuhay Blend','3',600,0,0,NULL,0,NULL,1,'Existing',8),(89,'Mabuhay Blend','6',600,0,0,NULL,0,NULL,1,'Existing',8),(90,'Fiesta Blend','1',165,0,0,NULL,0,NULL,1,'Existing',9),(91,'Fiesta Blend','4',165,0,0,NULL,0,NULL,1,'Existing',9),(92,'Fiesta Blend','2',315,0,0,NULL,0,NULL,1,'Existing',9),(93,'Fiesta Blend','5',315,2,0,NULL,0,NULL,1,'Existing',9),(94,'Fiesta Blend','3',500,0,0,NULL,0,NULL,1,'Existing',9),(95,'Fiesta Blend','6',500,0,0,NULL,0,NULL,1,'Existing',9),(96,'Kalayaan Blend','1',150,0,0,NULL,0,NULL,1,'Existing',10),(97,'Kalayaan Blend','4',150,0,0,NULL,0,NULL,1,'Existing',10),(98,'Kalayaan Blend','2',275,0,0,NULL,0,NULL,1,'Existing',10),(99,'Kalayaan Blend','5',275,0,0,NULL,0,NULL,1,'Existing',10),(100,'Kalayaan Blend','3',400,0,0,NULL,0,NULL,1,'Existing',10),(101,'Kalayaan Blend','6',400,0,0,NULL,0,NULL,1,'Existing',10),(104,'Wack Wack','1',250,0,0,NULL,0,NULL,1,'Client',47),(105,'Eurotel Blend','1',300,0,0,NULL,0,NULL,1,'Client',24),(106,'Citrus Restaurant  B','4',300,0,0,NULL,0,NULL,1,'Client',25),(107,'John Hay Water Syste','5',410,0,0,NULL,0,NULL,1,'Client',31),(108,'Kahuna Beach Resort ','5',380,0,0,NULL,0,NULL,1,'Client',35),(109,'Kintetsu World Expre','2',280,0,0,NULL,0,NULL,1,'Client',38),(110,'La Casa Blanca','5',310,0,0,NULL,0,NULL,1,'Client',45),(111,'La Parilla Blend','3',320,0,0,NULL,0,NULL,1,'Client',49),(112,'La Tienda  Blend','6',210,0,0,NULL,0,NULL,1,'Client',51),(113,'Le Chef Manor  Blend','4',310,0,0,NULL,0,NULL,1,'Client',55),(114,'Colleen Curran  Blen','2',310,0,0,NULL,0,NULL,1,'Client',62),(115,'ATACOGMAC Blend','3',320,0,0,NULL,0,NULL,1,'Client',14),(116,'Bloomfield Hotel Ble','4',320,0,0,NULL,0,NULL,1,'Client',20),(117,'Le Chef Golf Blend','2',380,0,0,NULL,0,NULL,1,'Client',15),(118,'Le Chef Southwood Bl','3',280,0,0,NULL,0,NULL,1,'Client',17),(119,'ABS CBN Blend','2',290,0,0,NULL,0,NULL,1,'Client',29),(120,'Le Chef Accounting B','6',280,0,0,NULL,0,NULL,1,'Client',19),(121,'Le Chef Paranaque Bl','4',420,0,0,NULL,0,NULL,1,'Client',18),(122,'Connies Kitchen Blen','5',340,0,0,NULL,0,NULL,1,'Client',23),(123,'Lemon and Olives Ble','3',290,0,0,NULL,0,NULL,1,'Client',21),(124,'Le Festin Trading Bl','2',320,0,0,NULL,0,NULL,1,'Client',22),(125,'Cosys Cafe and Roast','5',320,0,0,NULL,0,NULL,1,'Client',26),(126,'Lighthouse Marina Re','4',280,0,0,NULL,0,NULL,1,'Client',28),(127,'Bread House Blend','1',280,0,0,NULL,0,NULL,1,'Client',30),(128,'Edwin Hui Blend','5',320,0,0,NULL,0,NULL,1,'Client',32),(129,'Marios Restaurant Ba','1',340,0,0,NULL,0,NULL,1,'Client',34),(130,'Marios Restaurant Ma','5',250,0,0,NULL,0,NULL,1,'Client',39),(131,'Escala Blend','5',300,0,0,NULL,0,NULL,1,'Client',42),(132,'Hapi Bakery  and Mami House','4',280,0,0,NULL,0,NULL,1,'Client',46),(133,'Fil Estate Blend','1',320,0,0,NULL,0,NULL,1,'Client',48),(134,'Professor Valentino Macanes Blend','1',350,0,0,NULL,0,NULL,1,'Client',52),(135,'She Diner Blend','2',320,0,0,NULL,0,NULL,1,'Client',64),(136,'GMA Blend','1',240,0,0,NULL,0,NULL,1,'Client',27),(137,'Grumpy Joe Blend','1',250,0,0,NULL,0,NULL,1,'Client',36),(138,'Bowknot Brewery Blend','1',280,0,0,NULL,0,NULL,1,'Client',40),(139,'Cafe de Manor','6',250,0,0,NULL,0,NULL,1,'Client',43),(140,'Best Western Oxford Suites Blend','1',280,0,0,NULL,0,NULL,1,'Client',53),(141,'Baguio Country Club Blend','5',310,0,0,NULL,0,NULL,1,'Client',56),(142,'Forest Hills Blend','4',410,0,0,NULL,0,NULL,1,'Client',59),(143,'Bioessence Blend','5',350,0,0,NULL,0,NULL,1,'Client',63),(144,'Blackwoods Blend','2',420,0,0,NULL,0,NULL,1,'Client',33),(145,'Gerrys Grill Treasury Blend','6',380,0,0,NULL,0,NULL,1,'Client',37),(146,'Gerrys Grill Purchasing Blend','5',350,0,0,NULL,0,NULL,1,'Client',65),(147,'Keiffeir Coffee Shop Blend','2',410,0,0,NULL,0,NULL,1,'Client',41),(148,'Bote Central Roasting Machine Blend','5',340,0,0,NULL,0,NULL,1,'Client',44),(149,'Gweilo Corp Blend','3',290,0,0,NULL,0,NULL,1,'Client',66),(150,'Camp John Hay Golf Club Blend','5',290,0,0,NULL,0,NULL,1,'Client',54),(151,'Canto Blend','1',360,0,0,NULL,0,NULL,1,'Client',57),(152,'Cafe de Seoul Blend','4',400,0,0,NULL,0,NULL,1,'Client',58),(153,'Cafe Caw Blend','1',280,0,0,NULL,0,NULL,1,'Client',60);
/*!40000 ALTER TABLE `coffee_blend` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_returns`
--

DROP TABLE IF EXISTS `company_returns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_returns` (
  `company_returnID` int(50) NOT NULL AUTO_INCREMENT,
  `sup_returnDate` date NOT NULL,
  `sup_id` int(50) NOT NULL,
  `sup_returnQty` int(50) NOT NULL,
  `sup_returnItem` int(50) NOT NULL,
  `sup_returnRemarks` varchar(50) NOT NULL,
  `sup_returnAction` varchar(50) NOT NULL,
  `drNo` varchar(50) NOT NULL,
  `poNo` int(50) NOT NULL,
  `res` varchar(45) NOT NULL DEFAULT 'unresolved',
  `return_dr` varchar(50) DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `categoryr` int(11) DEFAULT NULL,
  `inv_stat` varchar(45) NOT NULL DEFAULT '0',
  `pckng_stat` varchar(45) NOT NULL DEFAULT '0',
  `stckr_stat` varchar(45) NOT NULL DEFAULT '0',
  `mach_stat` varchar(45) NOT NULL DEFAULT '0',
  PRIMARY KEY (`company_returnID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_returns`
--

LOCK TABLES `company_returns` WRITE;
/*!40000 ALTER TABLE `company_returns` DISABLE KEYS */;
/*!40000 ALTER TABLE `company_returns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contract`
--

DROP TABLE IF EXISTS `contract`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contract` (
  `contract_id` int(50) NOT NULL AUTO_INCREMENT,
  `date_started` date NOT NULL,
  `blend_id` int(11) NOT NULL,
  `client_id` int(50) NOT NULL,
  `required_qty` int(11) NOT NULL,
  `credit_term` varchar(20) NOT NULL,
  `mach_id` int(50) NOT NULL,
  `mach_salesID` int(50) NOT NULL,
  `date_expiration` date DEFAULT NULL,
  `seen` varchar(45) DEFAULT '0',
  `seen_admin` varchar(45) NOT NULL DEFAULT '0',
  PRIMARY KEY (`contract_id`),
  KEY `client_id` (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contract`
--

LOCK TABLES `contract` WRITE;
/*!40000 ALTER TABLE `contract` DISABLE KEYS */;
INSERT INTO `contract` VALUES (1,'2016-05-28',105,1,300,'',0,36,'2018-05-28','0','0'),(2,'2018-03-06',106,10,250,'',5,37,'2020-03-06','0','0'),(3,'2018-03-08',108,12,300,'',0,38,'2020-03-08','0','0'),(4,'2018-01-10',111,15,300,'',7,39,'0020-12-10','0','0'),(5,'2018-02-07',107,11,250,'',0,40,'2020-02-07','0','0'),(6,'2018-04-12',112,16,300,'',0,41,'2020-04-12','0','0'),(7,'2018-04-06',114,18,250,'',0,42,'2020-04-06','0','0'),(8,'2017-10-09',116,2,250,'',0,43,'2019-10-09','0','0'),(9,'2018-04-12',131,33,250,'',8,44,'2020-04-12','0','0'),(10,'2017-08-23',109,13,250,'',4,45,'2019-08-23','0','0'),(11,'2017-05-03',117,20,300,'',0,48,'2019-05-03','0','0'),(12,'2017-09-07',119,22,300,'',0,49,'2019-09-07','0','0'),(13,'2017-11-16',124,27,300,'',0,50,'2019-11-16','0','0'),(14,'2017-08-09',126,29,300,'',0,51,'2019-08-09','0','0'),(15,'2017-09-23',135,37,250,'',0,52,'2019-09-23','0','0'),(16,'2017-03-03',128,30,250,'',0,53,'2019-03-03','0','0'),(17,'2017-06-01',136,38,300,'',0,54,'2019-06-01','0','0'),(18,'2017-02-05',130,32,300,'',0,55,'2019-02-05','0','0'),(19,'2016-06-01',137,39,300,'',0,56,'2018-06-01','0','0'),(20,'2017-10-05',134,36,250,'',0,57,'2019-10-05','0','0'),(21,'2017-06-08',145,47,300,'',0,58,'2019-06-08','0','0'),(22,'2016-06-23',139,40,200,'',0,59,'2018-06-23','0','0'),(23,'2017-09-01',150,6,300,'',0,60,'2019-09-01','0','0'),(24,'2016-07-09',153,9,250,'',0,61,'2018-07-09','0','0'),(25,'2017-10-05',143,45,350,'',8,62,'2019-10-05','0','0');
/*!40000 ALTER TABLE `contract` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contracted_client`
--

DROP TABLE IF EXISTS `contracted_client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contracted_client` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_company` varchar(70) NOT NULL,
  `client_fname` varchar(50) NOT NULL,
  `client_lname` varchar(50) NOT NULL,
  `client_position` varchar(50) NOT NULL,
  `client_email` varchar(50) NOT NULL,
  `client_address` varchar(100) NOT NULL,
  `client_contact` varchar(12) NOT NULL,
  `client_type` varchar(20) NOT NULL,
  `client_activation` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contracted_client`
--

LOCK TABLES `contracted_client` WRITE;
/*!40000 ALTER TABLE `contracted_client` DISABLE KEYS */;
INSERT INTO `contracted_client` VALUES (1,'Eurotel Baguio','Floro','Fontanilla','Manager','floro22@gmail.com','Baguio City','09053217558','Retail',1),(2,'Bloomfield Hotel (Patch Cafe)','Maricel','Jerimee','Hotel Manager','marimee1022@gmail.com','Leonard Wood Road, Baguio City, Benguet','09285344052','Retail',1),(3,'Bread House','Agnes','Delos Reyes','Manager','delosreyesagnes@yahoo.com','Dagupan, Pangasinan','09478543970','Coffee Service',1),(4,'Bowknot Brewery Inc.','Alfredo','Besa','Owner','alfredobesa97@yahoo.com','Rizal Drive, Taguig City, Metro Manila','09157181614','Coffee Service',1),(5,'Bote Central Roasting Machine','Vie','Reyes','Owner','reyesvie123@gmail.com','Las Piñas City, Philippines','09157181614','Coffee Service',1),(6,'Camp John Hay Golf Club','Koshia','Calwagan','Front Desk Supervisor','koshia_calwagan923@gmail.com','Camp John Hay, Baguio City','09392898723','Retail',1),(7,'Canto Restaurant','Francis','Blanco','Manager','blanco23489@gmail.com','25 Kisad Rd, Baguio City, Benguet','09175000442','Coffee Service',1),(8,'Cafe de Seoul','Jeff','Manansala','Hotel Clerk','manansala_jeff1897@yahoo.com','One Archers Place Bldg, Castro, Malate, Manila','09274765103','Coffee Service',1),(9,'Cafe Caw','Carol Hazel','Park','Assistant Owner','park_hazel444@gmail.com','Dagupan, Philippines','09228157573','Retail',1),(10,'Citrus Restaurant','Jenifer','Magundayao','Bookkeeper','magundayao_jenifer@gmail.com','Ortigas Center Meralco Avenue, Pasig City','09062127770','Coffee Service',1),(11,'John Hay Water System, Inc.','Josephine','Tabajonda','Owner','tabajondajosephine@gmail.com','Camp John Hay, Baguio City','4450486','Retail',1),(12,'Kahuna Beach Resort and Spa','Kim','Aquino','Owner','aquinokimgil@gmail.com','MacArthur Highway, San Juan, 2514 La Union','09177010526','Retail',1),(13,' Kintetsu World Express','Alvin','Buen','Front Desk Supervisor','buenbuenalvin@yahoo.com','PEZA Admin Building, Loakan Rd, Loakan, Baguio, 2600 Benguet','09175407492','Coffee Service',1),(14,'La Casa Blanca','Cynthia','Gueco','President','guecocynthia@gmail.com','Leonard Wood Rd, Baguio, Benguet','09288140814','Coffee Service',1),(15,'La Parilla','Jun','Tugade','Sales Clerk','tugadesantossa@yahoo.com','68, Roces Compound, Kisad Rd, Brgy. Burnham - Legarda, Baguio, 2600 Benguet','09177155473','Coffee Service',1),(16,'La Tienda','Nora','Lazona','Accountant','lazonanora@yahoo.com','43 Polaris Street Bel-Air Village, Makati','8904123','Retail',1),(17,'Le Chef Manor','Robert','Tilbe','F and B Manager','roberttilbe@gmail.com','The Manor, Loakan Rd, Camp John Hay, Baguio, Benguet','09175854521','Coffee Service',1),(18,'Colleen Curran','Colleen','Curran','Owner','colleen920@yahoo.com','Quezon Hill, Baguio City','09176448577','Retail',1),(19,'ATACOGMAC','Dick','Evasco','President','evasco21@gmail.com','Atok, Benguet, Philippines','09206636879','Coffee Service',1),(20,'Le Chef Golf','Leo','Pablo','Purchasing Staff','pable_leo@gmail.com','The Manor, Loakan Rd, Camp John Hay, Baguio, Benguet','09216631771','Retail',1),(21,'Le Chef Southwoods','Jaymond','Incio','Bookkeeper','incio_pablo@yahoo.com','The Manor, Loakan Rd, Camp John Hay, Baguio, Benguet','4240910','Coffee Service',1),(22,'ABS CBN','Marlon','Ramos','Chef','marlonramos@gmail.com','15/F ELJ Communications Center, Eugenio Lopez St., 1103 Quezon City','09245467656','Retail',1),(23,'Le Chef -Paranaque','Michelle','Mendoza','Purchasing Head','mendoza_m@yahoo.com','Panaque City','09126324514','Coffee Service',1),(24,'Le Chef Accounting','Emylou','Gabiola','Finance Supervisor','gabiola_emy019@gmail.com','Loakan Road, Baguio City','09175020776','Coffee Service',1),(25,'Connies Kitchen','Julie','Delos Santos','Assistant Manager','julie_santos@gmail.com','Mandaluyong City','09275349837','Coffee Service',1),(26,'Lemon & Olives','Cindy','Urado','Event Manager','cindy_u1997@gmail.com','26 Outlook Dr S, Baguio, 2600 Benguet','4232278','Coffee Service',1),(27,'Le Festin Trading, Inc. (Gourmet)','Jeanet','Picato','Finance Supervisor','jeannette234@yahoo.com','Benguet','09158808904','Retail',1),(28,'Cosy\'s Cafe and Roasterie','Joel','Cosalan','Owner','cosalan713@gmail.com','Teacher\'s Camp, Baguio City, Benguet','09209210141','Coffee Service',1),(29,'Lighthouse Marina Resort','Jayson','Herrero','VP for Hotel Operations','herrerojayson@gmail.com','Subic Bay Freeport Zone, Zambales','2502480','Retail',1),(30,'Edwin Hui','Edwin','Hui','Coffee Shop Manager','edwinhui@yahoo.com','Camp 7, Baguio City','09178987221','Retail',1),(31,'Mario\'s Restaurant (Baguio)','Mary','Grace','Accountant','graciously_2345@gmail.com','Upper Session Rd, Baguio, 2600 Benguet','09052973384','Coffee Service',1),(32,'Mario\'s Restaurant (Q.C)','Bobby','Ling','Purchasing Manager','bobbyling@yahoo.com','191 Tomas Morato Ave, Diliman, Quezon City, 1103 Metro Manila','3766210','Retail',1),(33,'Escala','Carol','Connie','Employee','caroline@gmail.com','Legarda Rd.,Baguio City','09253287159','Coffee Service',1),(34,'Mr. Hapi Bakery & Mami House','Tony','Ramos','Director','tony_ramos@gmail.com','Marcoville St, Baguio, Benguet','09228081848','Coffee Service',1),(35,'Fil Estate','Anna','Brillon','Employee','anna090@yahoo.com','55 Rock Quarry, Baguio City, Benguet','09175664352','Coffee Service',1),(36,'Prof. Valentino Macanes','Valentino','Macanes','Director IHFSA','macanes_val@yahoo.com','Aurora Hill, Baguio City','09163402041','Retail',1),(37,'She Diner','Kim','Ballatong','Manager','kim22@gmail.com','Zambales','09053217558','Retail',1),(38,'GMA','Justine','Cuadra','Purchasing Staff','justine@gmail.com','Manila','09053286552','Retail',1),(39,'Grumpy Joe','Alvin','San Jose','Crew','alvin@gmail.com','Leonard Wood Rd','09268755641','Retail',1),(40,'Cafe de Manor','Aye Grace','Dela Cruz','Crew','ayegrace@outlook.com','Camp John Hay, Baguio City','09896755434','Retail',1),(41,'Wack Wack','Michelle','Mendoza','Employee','mendzmichelle@yahoo.com','Old Wack Wack Rd, Mandaluyong City, Manila','09277230665','Coffee Service',1),(42,'Best Western Oxford Suites','Marlon','Samson','Assistant Manager','samlon0092@gmail.com','Makati, Philippines','8997888','Coffee Service',1),(43,'Baguio Country Club','Tess','Canave','Purchasing Manager','cantess97@yahoo.com','Camp John Hay Baguio City','6192050','Coffee Service',1),(44,'Forest Hills (PAR72)','Marissa','Ling','Head Manager','lingmar@gmail.com','Inarawan, Antipolo Rizal','09086983519','Coffee Service',1),(45,'Bioessence','Alowa','Lavarias','Branch Operation Manager','lavarias_aloja@gmail.com','SM City Baguio','09995202455','Coffee Service',1),(46,'Blackwoods','Lito','Benitez','General Manager','lito1987@yahoo.com','Buiguias Benguet','09178916524','Coffee Service',1),(47,'Gerry\'s Grill Treasury','Kelly','Santos','Chef','santoskelly@gmail.com','SM City, Baguio','09175431907','Retail',1),(48,'Gerry\'s Grill Purchasing','Dennies','Hagad','Sales Clerk','dennieshagad@gmail.com','SM City Baguio','09237448996','Coffee Service',1),(49,'Keiffeir Coffee Shop','Keir','Calpito','Manager','keir22@gmail.com','Pasig, Baguio City','09053217558','Coffee Service',1),(50,'Gweilo Corp (Amelie Hotel)','Neri','Saad','Manager','nerisaan@gmail.com','333 B.P. Guavera St., Little Baguio, San Juan','09128757888','Coffee Service',1);
/*!40000 ALTER TABLE `contracted_client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contracted_po`
--

DROP TABLE IF EXISTS `contracted_po`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contracted_po` (
  `contractPO_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `blend_id` int(11) NOT NULL,
  `sticker_id` int(11) DEFAULT NULL,
  `contractPO_date` date NOT NULL,
  `contractPO_qty` int(11) NOT NULL,
  `delivered_qty` int(11) NOT NULL DEFAULT '0',
  `delivery_stat` varchar(20) NOT NULL DEFAULT 'pending',
  `undoDel` int(11) NOT NULL DEFAULT '0',
  `roast` varchar(10) NOT NULL DEFAULT 'No',
  `inv_stat` varchar(45) NOT NULL DEFAULT '0',
  `pckng_stat` varchar(45) NOT NULL DEFAULT '0',
  `stckr_stat` varchar(45) NOT NULL DEFAULT '0',
  PRIMARY KEY (`contractPO_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contracted_po`
--

LOCK TABLES `contracted_po` WRITE;
/*!40000 ALTER TABLE `contracted_po` DISABLE KEYS */;
INSERT INTO `contracted_po` VALUES (1,22,119,NULL,'2018-05-25',300,0,'pending',1,'No','0','0','0'),(2,2,116,NULL,'2018-05-25',250,250,'delivered',0,'Yes','0','1','0'),(3,9,153,NULL,'2018-05-25',250,0,'pending',0,'Yes','0','1','0'),(4,22,119,NULL,'2018-05-25',300,0,'pending',0,'No','0','0','0'),(5,33,131,NULL,'2018-05-25',250,0,'pending',0,'No','0','0','0'),(6,9,153,NULL,'2018-05-25',250,0,'pending',0,'No','0','1','0'),(7,22,119,NULL,'2018-05-25',300,0,'pending',0,'No','0','0','0'),(8,45,143,NULL,'2018-05-25',350,0,'pending',0,'No','0','0','0');
/*!40000 ALTER TABLE `contracted_po` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `update_del_stat` BEFORE UPDATE ON `contracted_po` FOR EACH ROW IF NEW.contractPO_qty = NEW.delivered_qty THEN
	SET NEW.delivery_stat = 'delivered';
END IF */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `inv_transact`
--

DROP TABLE IF EXISTS `inv_transact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inv_transact` (
  `trans_id` int(11) NOT NULL AUTO_INCREMENT,
  `transact_date` date NOT NULL,
  `company_returnID` int(11) DEFAULT NULL,
  `client_returnID` int(11) DEFAULT NULL,
  `po_supplier` int(11) DEFAULT NULL,
  `po_client` int(11) DEFAULT NULL,
  `sales_inv` int(11) DEFAULT NULL,
  `walkin_return` int(11) DEFAULT NULL,
  `type` varchar(45) NOT NULL DEFAULT 'IN',
  PRIMARY KEY (`trans_id`),
  KEY `inv_trans1_idx` (`company_returnID`),
  KEY `inv_trans2_idx` (`client_returnID`),
  KEY `inv_trans3_idx` (`po_supplier`),
  KEY `inv_trans4_idx` (`po_client`),
  KEY `inv_trans5_idx` (`sales_inv`),
  KEY `inv_trans6_idx` (`walkin_return`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inv_transact`
--

LOCK TABLES `inv_transact` WRITE;
/*!40000 ALTER TABLE `inv_transact` DISABLE KEYS */;
INSERT INTO `inv_transact` VALUES (38,'2018-05-25',NULL,NULL,NULL,NULL,14,NULL,'OUT'),(39,'2018-05-25',NULL,NULL,NULL,NULL,15,NULL,'OUT'),(40,'2018-05-25',NULL,NULL,NULL,NULL,16,NULL,'OUT'),(41,'2018-05-25',NULL,NULL,NULL,NULL,17,NULL,'OUT'),(42,'2018-05-25',NULL,NULL,NULL,NULL,18,NULL,'OUT'),(43,'2018-05-24',NULL,NULL,NULL,NULL,19,NULL,'OUT'),(47,'2018-05-25',NULL,NULL,NULL,NULL,20,NULL,'OUT'),(50,'2018-05-25',NULL,NULL,NULL,NULL,21,NULL,'OUT'),(60,'2018-04-25',NULL,NULL,NULL,NULL,22,NULL,'OUT'),(61,'2018-05-25',NULL,NULL,NULL,NULL,23,NULL,'OUT'),(62,'2018-05-25',NULL,NULL,NULL,NULL,24,NULL,'OUT'),(63,'2018-04-19',NULL,NULL,NULL,NULL,25,NULL,'OUT'),(64,'2018-04-19',NULL,NULL,NULL,NULL,26,NULL,'OUT'),(65,'2018-05-25',NULL,NULL,NULL,NULL,27,NULL,'OUT'),(76,'2018-05-25',NULL,NULL,NULL,2,NULL,NULL,'OUT'),(77,'2018-05-25',NULL,NULL,NULL,3,NULL,NULL,'OUT'),(78,'2018-04-02',NULL,NULL,1,NULL,NULL,NULL,'IN'),(79,'2018-04-03',NULL,NULL,2,NULL,NULL,NULL,'IN'),(80,'2018-05-05',NULL,NULL,3,NULL,NULL,NULL,'IN'),(81,'2018-04-05',NULL,NULL,4,NULL,NULL,NULL,'IN'),(82,'2018-04-08',NULL,NULL,5,NULL,NULL,NULL,'IN'),(83,'2018-04-12',NULL,NULL,6,NULL,NULL,NULL,'IN'),(84,'2018-04-13',NULL,NULL,7,NULL,NULL,NULL,'IN'),(85,'2018-04-13',NULL,NULL,8,NULL,NULL,NULL,'IN'),(86,'2018-05-15',NULL,NULL,9,NULL,NULL,NULL,'IN'),(87,'2018-04-24',NULL,NULL,10,NULL,NULL,NULL,'IN'),(88,'2018-04-26',NULL,NULL,10,NULL,NULL,NULL,'IN'),(89,'2018-04-30',NULL,NULL,11,NULL,NULL,NULL,'IN'),(90,'2018-05-11',NULL,NULL,12,NULL,NULL,NULL,'IN'),(91,'2018-05-07',NULL,NULL,13,NULL,NULL,NULL,'IN'),(92,'2018-05-09',NULL,NULL,14,NULL,NULL,NULL,'IN'),(93,'2018-05-25',NULL,NULL,15,NULL,NULL,NULL,'IN'),(94,'2018-04-16',NULL,NULL,16,NULL,NULL,NULL,'IN'),(95,'2018-04-19',NULL,NULL,17,NULL,NULL,NULL,'IN'),(96,'2018-04-19',NULL,NULL,18,NULL,NULL,NULL,'IN'),(97,'2018-04-20',NULL,NULL,18,NULL,NULL,NULL,'IN'),(98,'2018-04-24',NULL,NULL,19,NULL,NULL,NULL,'IN'),(99,'2018-05-02',NULL,NULL,20,NULL,NULL,NULL,'IN'),(100,'2018-05-06',NULL,NULL,22,NULL,NULL,NULL,'IN'),(101,'2018-05-07',NULL,NULL,21,NULL,NULL,NULL,'IN'),(102,'2018-05-10',NULL,NULL,23,NULL,NULL,NULL,'IN'),(103,'2018-05-02',NULL,NULL,24,NULL,NULL,NULL,'IN'),(104,'2018-05-26',NULL,NULL,25,NULL,NULL,NULL,'IN');
/*!40000 ALTER TABLE `inv_transact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `machine`
--

DROP TABLE IF EXISTS `machine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `machine` (
  `mach_id` int(11) NOT NULL AUTO_INCREMENT,
  `brewer` varchar(50) NOT NULL,
  `brewer_type` varchar(50) NOT NULL,
  `mach_reorder` int(11) NOT NULL,
  `mach_stocks` int(11) NOT NULL,
  `mach_physcount` int(11) NOT NULL DEFAULT '0',
  `mach_remarks` varchar(45) DEFAULT NULL,
  `mach_discrepancy` int(11) NOT NULL DEFAULT '0',
  `inventory_date` date DEFAULT NULL,
  `unitPrice` decimal(11,0) DEFAULT NULL,
  `sup_id` varchar(11) NOT NULL,
  `mach_activation` int(11) NOT NULL DEFAULT '1',
  `category` varchar(45) DEFAULT '4',
  PRIMARY KEY (`mach_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `machine`
--

LOCK TABLES `machine` WRITE;
/*!40000 ALTER TABLE `machine` DISABLE KEYS */;
INSERT INTO `machine` VALUES (1,'Saeco','Double Cup Espresso',10,40,0,'',0,NULL,2800,'12',1,'4'),(2,'Grato','Double Cup Espresso',10,20,0,'',0,NULL,2800,'8',1,'4'),(3,'Colet','Triple Cup Espresso',10,50,0,'',0,NULL,3500,'12',1,'4'),(4,'Lirika','Single Cup Espresso',10,45,0,'',0,NULL,1900,'12',1,'4'),(5,'Piccolina','Double Cup Espresso',10,14,0,'',0,NULL,2500,'13',1,'4'),(6,'Piccolina','Triple Cup Espresso',10,15,0,'',0,NULL,3400,'13',1,'4'),(7,'Bunn','Single Cup Espresso',10,14,0,'',0,NULL,1700,'8',1,'4'),(8,'Percolator','Double Cup Espresso',10,14,0,'',0,NULL,2100,'11',1,'4'),(9,'Bravilor','Double Cup Espresso',10,15,0,'',0,NULL,2700,'8',1,'4'),(10,'AVR','Triple Cup Espresso',10,20,0,'',0,NULL,3750,'11',1,'4');
/*!40000 ALTER TABLE `machine` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `machine_out`
--

DROP TABLE IF EXISTS `machine_out`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `machine_out` (
  `mach_salesID` int(11) NOT NULL AUTO_INCREMENT,
  `mach_id` int(11) NOT NULL,
  `mach_serial` varchar(60) NOT NULL,
  `date` date NOT NULL,
  `mach_qty` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `remarks` varchar(60) NOT NULL DEFAULT 'Received',
  `status` varchar(60) NOT NULL,
  `mach_stat` varchar(45) NOT NULL DEFAULT '0',
  PRIMARY KEY (`mach_salesID`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `machine_out`
--

LOCK TABLES `machine_out` WRITE;
/*!40000 ALTER TABLE `machine_out` DISABLE KEYS */;
INSERT INTO `machine_out` VALUES (1,0,'0','2016-03-20',0,1,'Received','rented','0'),(2,5,'SN123','2018-05-24',3,46,'Received','rented','1'),(3,5,'SN597','2018-04-11',3,10,'Received','rented','1'),(4,0,'0','2018-05-10',0,18,'Received','rented','0'),(5,8,'SN578','0000-00-00',2,33,'Received','rented','1'),(6,1,'SN001','2018-02-06',2,19,'Received','rented','1'),(7,0,'0','2017-07-21',0,12,'Received','rented','0'),(8,7,'SN578','2017-11-15',4,13,'Received','rented','1'),(9,0,'0','2018-05-17',0,36,'Received','rented','0'),(10,6,'SN568','2016-12-08',2,17,'Received','rented','1'),(11,6,'SN548','2017-12-07',2,8,'Received','rented','1'),(12,0,'0','2018-05-24',0,11,'Received','rented','0'),(13,5,'SN100','2018-05-03',3,14,'Received','rented','1'),(14,6,'SN200','2018-03-07',1,15,'Received','rented','1'),(15,0,'0','2018-01-18',0,16,'Received','rented','0'),(16,0,'0','2018-02-07',0,47,'Received','rented','0'),(17,0,'0','2018-05-17',0,6,'Received','rented','0'),(18,8,'SN300','0000-00-00',1,5,'Received','rented','1'),(19,6,'SN500','2018-03-22',1,7,'Received','rented','1'),(20,4,'SN6523','2018-05-24',4,3,'Returned','sold','1'),(21,4,'SN9501','2018-05-22',3,6,'Received','sold','1'),(22,5,'SN9831','2018-05-24',2,3,'Returned','sold','1'),(23,7,'SN9844','2018-01-18',2,1,'Received','sold','1'),(24,2,'SN9562','2018-05-24',1,1,'Received','sold','1'),(25,3,'SN789','2018-01-11',2,45,'Received','rented','1'),(26,10,'SN678','2018-01-05',1,44,'Received','rented','1'),(27,9,'SN680','0000-00-00',1,43,'Received','rented','1'),(28,9,'SN630','0000-00-00',1,42,'Received','rented','1'),(29,1,'sn120','2018-03-24',1,41,'Received','rented','1'),(30,0,'0','2018-04-20',0,40,'Received','rented','0'),(31,9,'SN894','2018-05-17',1,4,'Received','rented','1'),(32,0,'0','2018-04-30',0,39,'Received','rented','0'),(33,0,'0','2018-05-17',0,37,'Received','rented','0'),(34,2,'SN561','0000-00-00',1,35,'Received','rented','1'),(35,8,'SN630','0000-00-00',1,34,'Received','rented','1'),(36,0,'0','2016-05-28',0,1,'Received','rented','0'),(37,5,'SN123','2018-03-06',1,10,'Received','rented','0'),(38,0,'0','2018-02-08',0,12,'Received','rented','0'),(39,7,'SN125','2018-01-10',1,15,'Received','rented','0'),(40,0,'0','2018-02-07',0,11,'Received','rented','0'),(41,0,'0','2018-04-12',0,16,'Received','rented','0'),(42,0,'0','2018-04-06',0,18,'Received','rented','0'),(43,0,'0','2017-10-09',0,2,'Received','rented','0'),(44,8,'SN140','2018-04-12',1,33,'Received','rented','1'),(45,4,'SN160','2017-08-23',3,13,'Received','rented','0'),(46,4,'SN9006','2018-05-25',1,4,'Received','sold','0'),(47,4,'SN9048','2018-04-17',1,4,'Received','sold','0'),(48,0,'0','2017-05-03',0,20,'Received','rented','0'),(49,0,'0','2017-09-07',0,22,'Received','rented','0'),(50,0,'0','2017-11-16',0,27,'Received','rented','0'),(51,0,'0','2017-08-09',0,29,'Received','rented','0'),(52,0,'0','2017-09-23',0,37,'Received','rented','0'),(53,0,'0','2017-03-03',0,30,'Received','rented','0'),(54,0,'0','2017-06-01',0,38,'Received','rented','0'),(55,0,'0','2017-02-05',0,32,'Received','rented','0'),(56,0,'0','2016-06-01',0,39,'Received','rented','0'),(57,0,'0','2017-10-05',0,36,'Received','rented','0'),(58,0,'0','2017-06-08',0,47,'Received','rented','0'),(59,0,'0','2016-06-23',0,40,'Received','rented','0'),(60,0,'0','2017-09-01',0,6,'Received','rented','0'),(61,0,'0','2016-07-09',0,9,'Received','rented','0'),(62,8,'SN985','2017-10-05',1,45,'Received','rented','0');
/*!40000 ALTER TABLE `machine_out` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `packaging`
--

DROP TABLE IF EXISTS `packaging`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `packaging` (
  `package_id` int(11) NOT NULL AUTO_INCREMENT,
  `package_type` varchar(20) NOT NULL,
  `package_size` varchar(20) NOT NULL,
  `package_reorder` int(11) NOT NULL,
  `package_stock` int(11) NOT NULL,
  `package_physcount` int(11) NOT NULL DEFAULT '0',
  `package_remarks` varchar(45) DEFAULT NULL,
  `package_discrepancy` int(11) NOT NULL DEFAULT '0',
  `inventory_date` date DEFAULT NULL,
  `unitPrice` decimal(11,0) NOT NULL,
  `sup_id` int(11) NOT NULL,
  `pack_activation` int(11) NOT NULL DEFAULT '1',
  `category` varchar(45) DEFAULT '2',
  PRIMARY KEY (`package_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `packaging`
--

LOCK TABLES `packaging` WRITE;
/*!40000 ALTER TABLE `packaging` DISABLE KEYS */;
INSERT INTO `packaging` VALUES (1,'clear bag','250',1000,1993,1993,'',0,'2018-05-26',2,9,1,'2'),(2,'clear bag','500',1000,2000,0,'',0,NULL,4,12,1,'2'),(3,'clear bag','1000',1000,1999,0,'',0,NULL,6,3,1,'2'),(4,'brown bag','250',1000,2000,0,'',0,NULL,3,9,1,'2'),(5,'brown bag','500',1000,3097,0,'',0,NULL,5,5,1,'2'),(6,'brown bag','1000',1000,1999,0,'',0,NULL,7,6,1,'2');
/*!40000 ALTER TABLE `packaging` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment_contracted`
--

DROP TABLE IF EXISTS `payment_contracted`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment_contracted` (
  `paid_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_deliveryID` int(11) NOT NULL,
  `collection_no` varchar(20) NOT NULL,
  `payment_mode` varchar(20) NOT NULL,
  `paid_date` date NOT NULL,
  `paid_amount` int(11) NOT NULL,
  `withheld` int(11) NOT NULL,
  `remarks` varchar(20) NOT NULL,
  PRIMARY KEY (`paid_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_contracted`
--

LOCK TABLES `payment_contracted` WRITE;
/*!40000 ALTER TABLE `payment_contracted` DISABLE KEYS */;
INSERT INTO `payment_contracted` VALUES (1,1,'cr256','Cash on Delivery','2018-05-25',80000,0,'');
/*!40000 ALTER TABLE `payment_contracted` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment_supplier`
--

DROP TABLE IF EXISTS `payment_supplier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment_supplier` (
  `supPayment_id` int(11) NOT NULL AUTO_INCREMENT,
  `supPO_id` int(11) NOT NULL,
  `supPayment_date` date NOT NULL,
  `supPayment_amount` int(11) NOT NULL,
  `sup_balance` int(11) NOT NULL,
  `supPayment_status` varchar(20) NOT NULL,
  PRIMARY KEY (`supPayment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_supplier`
--

LOCK TABLES `payment_supplier` WRITE;
/*!40000 ALTER TABLE `payment_supplier` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment_supplier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proportions`
--

DROP TABLE IF EXISTS `proportions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proportions` (
  `proportion_id` int(11) NOT NULL AUTO_INCREMENT,
  `blend_id` int(11) NOT NULL,
  `raw_id` int(11) NOT NULL,
  `percentage` int(11) NOT NULL,
  PRIMARY KEY (`proportion_id`),
  KEY `raw_prop_idx` (`raw_id`),
  KEY `blend_prop_idx` (`blend_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2755 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proportions`
--

LOCK TABLES `proportions` WRITE;
/*!40000 ALTER TABLE `proportions` DISABLE KEYS */;
INSERT INTO `proportions` VALUES (1,1,1,30),(2,1,2,30),(3,1,3,40),(4,1,4,0),(5,1,5,0),(6,1,6,0),(7,1,7,0),(8,1,8,0),(9,1,9,0),(10,1,10,0),(11,1,11,0),(12,1,12,0),(13,1,13,0),(14,1,14,0),(15,1,15,0),(16,1,16,0),(17,1,17,0),(18,1,18,0),(19,2,1,30),(20,2,2,30),(21,2,3,40),(22,2,4,0),(23,2,5,0),(24,2,6,0),(25,2,7,0),(26,2,8,0),(27,2,9,0),(28,2,10,0),(29,2,11,0),(30,2,12,0),(31,2,13,0),(32,2,14,0),(33,2,15,0),(34,2,16,0),(35,2,17,0),(36,2,18,0),(37,3,1,30),(38,3,2,30),(39,3,3,40),(40,3,4,0),(41,3,5,0),(42,3,6,0),(43,3,7,0),(44,3,8,0),(45,3,9,0),(46,3,10,0),(47,3,11,0),(48,3,12,0),(49,3,13,0),(50,3,14,0),(51,3,15,0),(52,3,16,0),(53,3,17,0),(54,3,18,0),(55,4,1,30),(56,4,2,30),(57,4,3,40),(58,4,4,0),(59,4,5,0),(60,4,6,0),(61,4,7,0),(62,4,8,0),(63,4,9,0),(64,4,10,0),(65,4,11,0),(66,4,12,0),(67,4,13,0),(68,4,14,0),(69,4,15,0),(70,4,16,0),(71,4,17,0),(72,4,18,0),(73,5,1,30),(74,5,2,30),(75,5,3,40),(76,5,4,0),(77,5,5,0),(78,5,6,0),(79,5,7,0),(80,5,8,0),(81,5,9,0),(82,5,10,0),(83,5,11,0),(84,5,12,0),(85,5,13,0),(86,5,14,0),(87,5,15,0),(88,5,16,0),(89,5,17,0),(90,5,18,0),(91,6,1,30),(92,6,2,30),(93,6,3,40),(94,6,4,0),(95,6,5,0),(96,6,6,0),(97,6,7,0),(98,6,8,0),(99,6,9,0),(100,6,10,0),(101,6,11,0),(102,6,12,0),(103,6,13,0),(104,6,14,0),(105,6,15,0),(106,6,16,0),(107,6,17,0),(108,6,18,0),(109,7,1,0),(110,7,2,0),(111,7,3,0),(112,7,4,40),(113,7,5,0),(114,7,6,0),(115,7,7,0),(116,7,8,0),(117,7,9,0),(118,7,10,0),(119,7,11,30),(120,7,12,30),(121,7,13,0),(122,7,14,0),(123,7,15,0),(124,7,16,0),(125,7,17,0),(126,7,18,0),(127,8,1,100),(128,8,2,0),(129,8,3,0),(130,8,4,0),(131,8,5,0),(132,8,6,0),(133,8,7,0),(134,8,8,0),(135,8,9,0),(136,8,10,0),(137,8,11,0),(138,8,12,0),(139,8,13,0),(140,8,14,0),(141,8,15,0),(142,8,16,0),(143,8,17,0),(144,8,18,0),(145,9,1,0),(146,9,2,0),(147,9,3,0),(148,9,4,40),(149,9,5,0),(150,9,6,0),(151,9,7,0),(152,9,8,0),(153,9,9,0),(154,9,10,0),(155,9,11,30),(156,9,12,30),(157,9,13,0),(158,9,14,0),(159,9,15,0),(160,9,16,0),(161,9,17,0),(162,9,18,0),(163,10,1,0),(164,10,2,0),(165,10,3,0),(166,10,4,40),(167,10,5,0),(168,10,6,0),(169,10,7,0),(170,10,8,0),(171,10,9,0),(172,10,10,0),(173,10,11,30),(174,10,12,30),(175,10,13,0),(176,10,14,0),(177,10,15,0),(178,10,16,0),(179,10,17,0),(180,10,18,0),(181,11,1,0),(182,11,2,0),(183,11,3,0),(184,11,4,40),(185,11,5,0),(186,11,6,0),(187,11,7,0),(188,11,8,0),(189,11,9,0),(190,11,10,0),(191,11,11,30),(192,11,12,30),(193,11,13,0),(194,11,14,0),(195,11,15,0),(196,11,16,0),(197,11,17,0),(198,11,18,0),(199,12,1,0),(200,12,2,0),(201,12,3,0),(202,12,4,0),(203,12,5,0),(204,12,6,0),(205,12,7,0),(206,12,8,50),(207,12,9,0),(208,12,10,0),(209,12,11,0),(210,12,12,20),(211,12,13,0),(212,12,14,0),(213,12,15,0),(214,12,16,30),(215,12,17,0),(216,12,18,0),(217,13,1,0),(218,13,2,40),(219,13,3,0),(220,13,4,0),(221,13,5,0),(222,13,6,0),(223,13,7,0),(224,13,8,0),(225,13,9,0),(226,13,10,20),(227,13,11,0),(228,13,12,0),(229,13,13,0),(230,13,14,0),(231,13,15,0),(232,13,16,0),(233,13,17,0),(234,13,18,40),(235,14,1,25),(236,14,2,25),(237,14,3,25),(238,14,4,25),(239,14,5,0),(240,14,6,0),(241,14,7,0),(242,14,8,0),(243,15,1,0),(244,14,9,0),(245,15,2,0),(246,14,10,0),(247,15,3,0),(248,14,11,0),(249,15,4,40),(250,14,12,0),(251,15,5,0),(252,14,13,0),(253,15,6,0),(254,14,14,0),(255,15,7,0),(256,14,15,0),(257,15,8,0),(258,14,16,0),(259,15,9,0),(260,14,17,0),(261,15,10,0),(262,14,18,0),(263,15,11,30),(264,15,12,30),(265,15,13,0),(266,15,14,0),(267,15,15,0),(268,15,16,0),(269,15,17,0),(270,15,18,0),(271,16,1,0),(272,16,2,0),(273,16,3,0),(274,16,4,40),(275,16,5,0),(276,16,6,0),(277,16,7,0),(278,16,8,0),(279,16,9,0),(280,16,10,0),(281,16,11,30),(282,16,12,30),(283,16,13,0),(284,16,14,0),(285,16,15,0),(286,16,16,0),(287,16,17,0),(288,16,18,0),(289,17,1,0),(290,17,2,0),(291,17,3,0),(292,17,4,0),(293,17,5,30),(294,17,6,30),(295,17,7,40),(296,17,8,0),(297,17,9,0),(298,17,10,0),(299,17,11,0),(300,17,12,0),(301,17,13,0),(302,17,14,0),(303,17,15,0),(304,17,16,0),(305,17,17,0),(306,17,18,0),(307,18,1,0),(308,18,2,0),(309,18,3,0),(310,18,4,0),(311,18,5,30),(312,18,6,30),(313,18,7,40),(314,18,8,0),(315,18,9,0),(316,18,10,0),(317,18,11,0),(318,18,12,0),(319,18,13,0),(320,18,14,0),(321,18,15,0),(322,18,16,0),(323,18,17,0),(324,18,18,0),(325,19,1,25),(326,19,2,0),(327,19,3,0),(328,19,4,0),(329,19,5,0),(330,19,6,0),(331,19,7,0),(332,19,8,0),(333,19,9,0),(334,19,10,0),(335,19,11,0),(336,19,12,0),(337,19,13,0),(338,19,14,0),(339,19,15,0),(340,19,16,0),(341,19,17,0),(342,19,18,0),(343,20,1,0),(344,20,2,0),(345,20,3,0),(346,20,4,0),(347,20,5,30),(348,20,6,30),(349,20,7,40),(350,20,8,0),(351,20,9,0),(352,20,10,0),(353,20,11,0),(354,20,12,0),(355,20,13,0),(356,20,14,0),(357,20,15,0),(358,20,16,0),(359,20,17,0),(360,20,18,0),(361,21,1,25),(362,21,2,0),(363,21,3,0),(364,21,4,0),(365,21,5,0),(366,21,6,0),(367,21,7,0),(368,21,8,0),(369,21,9,0),(370,21,10,0),(371,21,11,0),(372,21,12,0),(373,21,13,0),(374,21,14,0),(375,21,15,0),(376,21,16,0),(377,21,17,0),(378,21,18,0),(379,22,1,0),(380,22,2,0),(381,22,3,0),(382,22,4,0),(383,22,5,30),(384,22,6,30),(385,22,7,40),(386,22,8,0),(387,22,9,0),(388,22,10,0),(389,22,11,0),(390,22,12,0),(391,22,13,0),(392,22,14,0),(393,22,15,0),(394,22,16,0),(395,22,17,0),(396,22,18,0),(397,23,1,0),(398,23,2,0),(399,23,3,0),(400,23,4,0),(401,23,5,50),(402,23,6,0),(403,23,7,0),(404,23,8,0),(405,23,9,0),(406,23,10,25),(407,23,11,0),(408,23,12,0),(409,23,13,0),(410,23,14,0),(411,23,15,25),(412,23,16,0),(413,23,17,0),(414,23,18,0),(415,24,1,0),(416,24,2,0),(417,24,3,0),(418,24,4,0),(419,24,5,30),(420,24,6,30),(421,24,7,40),(422,24,8,0),(423,24,9,0),(424,24,10,0),(425,24,11,0),(426,24,12,0),(427,24,13,0),(428,24,14,0),(429,24,15,0),(430,24,16,0),(431,24,17,0),(432,24,18,0),(433,25,1,50),(434,25,2,25),(435,25,3,25),(436,25,4,0),(437,25,5,0),(438,25,6,0),(439,25,7,0),(440,25,8,0),(441,25,9,0),(442,25,10,0),(443,25,11,0),(444,25,12,0),(445,25,13,0),(446,25,14,0),(447,25,15,0),(448,25,16,0),(449,25,17,0),(450,25,18,0),(451,26,1,0),(452,26,2,0),(453,26,3,0),(454,26,4,0),(455,26,5,0),(456,26,6,0),(457,26,7,0),(458,26,8,0),(459,26,9,0),(460,26,10,0),(461,26,11,25),(462,26,12,0),(463,26,13,25),(464,26,14,0),(465,26,15,25),(466,26,16,0),(467,26,17,25),(468,26,18,0),(469,27,1,0),(470,27,2,0),(471,27,3,0),(472,27,4,0),(473,27,5,0),(474,27,6,0),(475,27,7,0),(476,27,8,0),(477,27,9,10),(478,27,10,0),(479,27,11,0),(480,27,12,0),(481,27,13,50),(482,27,14,0),(483,27,15,0),(484,27,16,0),(485,27,17,0),(486,27,18,40),(487,28,1,0),(488,28,2,0),(489,28,3,0),(490,28,4,0),(491,28,5,0),(492,28,6,0),(493,28,7,0),(494,28,8,0),(495,28,9,0),(496,28,10,0),(497,28,11,0),(498,28,12,0),(499,28,13,20),(500,28,14,20),(501,28,15,20),(502,28,16,20),(503,28,17,20),(504,28,18,0),(505,29,1,0),(506,29,2,0),(507,29,3,0),(508,29,4,0),(509,29,5,0),(510,29,6,30),(511,29,7,0),(512,29,8,0),(513,29,9,0),(514,29,10,0),(515,29,11,30),(516,29,12,0),(517,29,13,0),(518,29,14,0),(519,29,15,0),(520,29,16,40),(521,29,17,0),(522,29,18,0),(523,30,1,0),(524,30,2,0),(525,30,3,0),(526,30,4,0),(527,30,5,30),(528,30,6,30),(529,30,7,40),(530,30,8,0),(531,30,9,0),(532,30,10,0),(533,30,11,0),(534,30,12,0),(535,30,13,0),(536,30,14,0),(537,30,15,0),(538,30,16,0),(539,30,17,0),(540,30,18,0),(541,31,1,0),(542,31,2,0),(543,31,3,0),(544,31,4,25),(545,31,5,0),(546,31,6,0),(547,31,7,0),(548,31,8,0),(549,31,9,0),(550,31,10,0),(551,31,11,0),(552,31,12,0),(553,31,13,0),(554,31,14,0),(555,31,15,0),(556,31,16,0),(557,31,17,0),(558,31,18,0),(559,32,1,0),(560,32,2,0),(561,32,3,0),(562,32,4,20),(563,32,5,80),(564,32,6,0),(565,32,7,0),(566,32,8,0),(567,32,9,0),(568,32,10,0),(569,32,11,0),(570,32,12,0),(571,32,13,0),(572,32,14,0),(573,32,15,0),(574,32,16,0),(575,32,17,0),(576,32,18,0),(577,33,1,0),(578,33,2,0),(579,33,3,0),(580,33,4,0),(581,33,5,0),(582,33,6,0),(583,33,7,0),(584,33,8,0),(585,33,9,25),(586,33,10,0),(587,33,11,0),(588,33,12,25),(589,33,13,25),(590,33,14,0),(591,33,15,0),(592,33,16,0),(593,33,17,0),(594,33,18,25),(595,34,1,0),(596,34,2,0),(597,34,3,0),(598,34,4,0),(599,34,5,0),(600,34,6,0),(601,34,7,0),(602,34,8,0),(603,34,9,0),(604,34,10,40),(605,34,11,0),(606,34,12,10),(607,34,13,10),(608,34,14,20),(609,34,15,0),(610,34,16,20),(611,34,17,0),(612,34,18,0),(613,35,1,0),(614,35,2,0),(615,35,3,0),(616,35,4,0),(617,35,5,0),(618,35,6,0),(619,35,7,0),(620,35,8,0),(621,35,9,0),(622,35,10,0),(623,35,11,0),(624,35,12,0),(625,35,13,30),(626,35,14,30),(627,35,15,40),(628,35,16,0),(629,35,17,0),(630,35,18,0),(631,36,1,25),(632,36,2,0),(633,36,3,0),(634,36,4,25),(635,36,5,0),(636,36,6,0),(637,36,7,0),(638,36,8,0),(639,36,9,0),(640,36,10,0),(641,36,11,0),(642,36,12,0),(643,36,13,0),(644,36,14,0),(645,36,15,0),(646,36,16,0),(647,36,17,0),(648,36,18,0),(649,37,1,0),(650,37,2,0),(651,37,3,0),(652,37,4,0),(653,37,5,0),(654,37,6,0),(655,37,7,0),(656,37,8,0),(657,37,9,20),(658,37,10,20),(659,37,11,20),(660,37,12,20),(661,37,13,20),(662,37,14,0),(663,37,15,0),(664,37,16,0),(665,37,17,0),(666,37,18,0),(667,38,1,0),(668,38,2,0),(669,38,3,0),(670,39,1,0),(671,38,4,0),(672,39,2,0),(673,38,5,0),(674,39,3,0),(675,38,6,0),(676,39,4,0),(677,38,7,0),(678,39,5,0),(679,38,8,50),(680,39,6,0),(681,38,9,0),(682,39,7,0),(683,38,10,10),(684,39,8,0),(685,38,11,0),(686,39,9,0),(687,38,12,0),(688,39,10,0),(689,38,13,40),(690,39,11,0),(691,38,14,0),(692,39,12,0),(693,38,15,0),(694,39,13,30),(695,38,16,0),(696,39,14,30),(697,38,17,0),(698,39,15,40),(699,38,18,0),(700,39,16,0),(701,39,17,0),(702,39,18,0),(703,40,1,0),(704,40,2,0),(705,40,3,25),(706,40,4,25),(707,40,5,0),(708,40,6,0),(709,40,7,0),(710,40,8,0),(711,40,9,0),(712,40,10,25),(713,40,11,0),(714,40,12,0),(715,40,13,0),(716,40,14,0),(717,40,15,25),(718,40,16,0),(719,40,17,0),(720,40,18,0),(721,41,1,0),(722,41,2,0),(723,41,3,0),(724,41,4,0),(725,41,5,0),(726,41,6,0),(727,41,7,40),(728,41,8,10),(729,41,9,0),(730,41,10,40),(731,41,11,10),(732,41,12,0),(733,41,13,0),(734,41,14,0),(735,41,15,0),(736,41,16,0),(737,41,17,0),(738,41,18,0),(739,42,1,0),(740,42,2,0),(741,42,3,0),(742,42,4,0),(743,42,5,0),(744,42,6,0),(745,42,7,0),(746,42,8,0),(747,42,9,0),(748,42,10,0),(749,42,11,0),(750,42,12,0),(751,42,13,30),(752,42,14,30),(753,42,15,40),(754,42,16,0),(755,42,17,0),(756,42,18,0),(757,43,1,0),(758,43,2,0),(759,43,3,25),(760,43,4,0),(761,43,5,25),(762,43,6,0),(763,43,7,0),(764,43,8,25),(765,43,9,0),(766,43,10,0),(767,43,11,0),(768,43,12,0),(769,43,13,0),(770,43,14,0),(771,43,15,25),(772,43,16,0),(773,43,17,0),(774,43,18,0),(775,44,1,0),(776,44,2,0),(777,44,3,0),(778,44,4,0),(779,44,5,0),(780,44,6,0),(781,44,7,0),(782,44,8,0),(783,44,9,0),(784,44,10,10),(785,44,11,0),(786,44,12,0),(787,44,13,80),(788,44,14,0),(789,44,15,10),(790,44,16,0),(791,44,17,0),(792,44,18,0),(793,45,1,0),(794,45,2,25),(795,45,3,25),(796,45,4,25),(797,45,5,0),(798,45,6,0),(799,45,7,25),(800,45,8,0),(801,45,9,0),(802,45,10,0),(803,45,11,0),(804,45,12,0),(805,45,13,0),(806,45,14,0),(807,45,15,0),(808,45,16,0),(809,45,17,0),(810,45,18,0),(811,46,1,0),(812,46,2,0),(813,46,3,0),(814,46,4,0),(815,46,5,0),(816,46,6,0),(817,46,7,0),(818,46,8,0),(819,46,9,0),(820,46,10,30),(821,46,11,30),(822,46,12,30),(823,46,13,10),(824,46,14,0),(825,46,15,0),(826,46,16,0),(827,46,17,0),(828,46,18,0),(829,47,1,30),(830,47,2,0),(831,47,3,0),(832,47,4,0),(833,47,5,0),(834,47,6,0),(835,47,7,20),(836,47,8,0),(837,47,9,0),(838,47,10,0),(839,47,11,0),(840,47,12,0),(841,47,13,0),(842,47,14,20),(843,47,15,0),(844,47,16,30),(845,47,17,0),(846,47,18,0),(847,48,1,0),(848,48,2,0),(849,48,3,0),(850,48,4,0),(851,48,5,0),(852,48,6,0),(853,48,7,25),(854,48,8,0),(855,48,9,0),(856,48,10,0),(857,48,11,0),(858,48,12,25),(859,48,13,25),(860,48,14,0),(861,48,15,0),(862,48,16,0),(863,48,17,0),(864,48,18,25),(865,49,1,25),(866,49,2,0),(867,49,3,25),(868,49,4,0),(869,49,5,0),(870,49,6,0),(871,49,7,0),(872,49,8,25),(873,49,9,0),(874,49,10,0),(875,49,11,25),(876,49,12,0),(877,49,13,0),(878,49,14,0),(879,49,15,0),(880,49,16,0),(881,49,17,0),(882,49,18,0),(883,50,1,0),(884,50,2,0),(885,50,3,0),(886,50,4,20),(887,50,5,0),(888,50,6,0),(889,50,7,0),(890,50,8,40),(891,50,9,0),(892,50,10,0),(893,50,11,0),(894,50,12,0),(895,50,13,40),(896,50,14,0),(897,50,15,0),(898,50,16,0),(899,50,17,0),(900,50,18,0),(901,51,1,0),(902,51,2,0),(903,51,3,0),(904,51,4,0),(905,51,5,0),(906,51,6,0),(907,51,7,0),(908,51,8,0),(909,51,9,0),(910,51,10,0),(911,51,11,0),(912,51,12,0),(913,51,13,0),(914,51,14,0),(915,51,15,100),(916,51,16,0),(917,51,17,0),(918,51,18,0),(919,52,1,20),(920,52,2,20),(921,52,3,50),(922,52,4,10),(923,52,5,0),(924,52,6,0),(925,52,7,0),(926,52,8,0),(927,52,9,0),(928,52,10,0),(929,52,11,0),(930,52,12,0),(931,52,13,0),(932,52,14,0),(933,52,15,0),(934,52,16,0),(935,52,17,0),(936,52,18,0),(937,53,1,0),(938,53,2,0),(939,53,3,0),(940,53,4,20),(941,53,5,30),(942,53,6,20),(943,53,7,30),(944,53,8,0),(945,53,9,0),(946,53,10,0),(947,53,11,0),(948,53,12,0),(949,53,13,0),(950,53,14,0),(951,53,15,0),(952,53,16,0),(953,53,17,0),(954,53,18,0),(955,54,1,0),(956,54,2,0),(957,54,3,0),(958,54,4,30),(959,54,5,0),(960,54,6,30),(961,54,7,0),(962,54,8,0),(963,54,9,0),(964,54,10,40),(965,54,11,0),(966,54,12,0),(967,54,13,0),(968,54,14,0),(969,54,15,0),(970,54,16,0),(971,54,17,0),(972,54,18,0),(973,55,1,0),(974,55,2,0),(975,55,3,0),(976,55,4,0),(977,55,5,0),(978,55,6,0),(979,55,7,0),(980,55,8,0),(981,55,9,0),(982,55,10,0),(983,55,11,0),(984,55,12,0),(985,55,13,30),(986,55,14,30),(987,55,15,40),(988,55,16,0),(989,55,17,0),(990,55,18,0),(991,56,1,0),(992,56,2,0),(993,56,3,0),(994,56,4,0),(995,56,5,0),(996,56,6,0),(997,56,7,0),(998,56,8,0),(999,56,9,0),(1000,56,10,0),(1001,56,11,0),(1002,56,12,0),(1003,56,13,30),(1004,56,14,30),(1005,56,15,40),(1006,56,16,0),(1007,56,17,0),(1008,56,18,0),(1009,57,1,40),(1010,57,2,0),(1011,57,3,0),(1012,57,4,0),(1013,57,5,20),(1014,57,6,0),(1015,57,7,0),(1016,57,8,0),(1017,57,9,0),(1018,57,10,0),(1019,57,11,0),(1020,57,12,0),(1021,57,13,0),(1022,57,14,0),(1023,57,15,0),(1024,57,16,40),(1025,57,17,0),(1026,57,18,0),(1027,58,1,0),(1028,58,2,0),(1029,58,3,0),(1030,58,4,20),(1031,58,5,80),(1032,58,6,0),(1033,58,7,0),(1034,58,8,0),(1035,58,9,0),(1036,58,10,0),(1037,58,11,0),(1038,58,12,0),(1039,58,13,0),(1040,58,14,0),(1041,58,15,0),(1042,58,16,0),(1043,58,17,0),(1044,58,18,0),(1045,59,1,40),(1046,59,2,0),(1047,59,3,0),(1048,59,4,0),(1049,59,5,10),(1050,59,6,0),(1051,59,7,25),(1052,59,8,0),(1053,59,9,0),(1054,59,10,25),(1055,59,11,0),(1056,59,12,0),(1057,59,13,0),(1058,59,14,0),(1059,59,15,0),(1060,59,16,0),(1061,59,17,0),(1062,59,18,0),(1063,60,1,0),(1064,60,2,0),(1065,60,3,0),(1066,60,4,0),(1067,60,5,0),(1068,60,6,0),(1069,60,7,0),(1070,60,8,0),(1071,60,9,0),(1072,60,10,0),(1073,60,11,0),(1074,60,12,0),(1075,60,13,30),(1076,60,14,30),(1077,60,15,40),(1078,60,16,0),(1079,60,17,0),(1080,60,18,0),(1081,61,1,0),(1082,61,2,0),(1083,61,3,0),(1084,61,4,0),(1085,61,5,0),(1086,61,6,0),(1087,61,7,0),(1088,61,8,20),(1089,61,9,30),(1090,61,10,20),(1091,61,11,0),(1092,61,12,30),(1093,61,13,0),(1094,61,14,0),(1095,61,15,0),(1096,61,16,0),(1097,61,17,0),(1098,61,18,0),(1099,62,1,0),(1100,62,2,0),(1101,62,3,0),(1102,62,4,25),(1103,62,5,25),(1104,62,6,25),(1105,62,7,25),(1106,62,8,0),(1107,62,9,0),(1108,62,10,0),(1109,62,11,0),(1110,62,12,0),(1111,62,13,0),(1112,62,14,0),(1113,62,15,0),(1114,62,16,0),(1115,62,17,0),(1116,62,18,0),(1117,63,1,20),(1118,63,2,20),(1119,63,3,20),(1120,63,4,20),(1121,63,5,20),(1122,63,6,0),(1123,63,7,0),(1124,63,8,0),(1125,63,9,0),(1126,63,10,0),(1127,63,11,0),(1128,63,12,0),(1129,63,13,0),(1130,63,14,0),(1131,63,15,0),(1132,63,16,0),(1133,63,17,0),(1134,63,18,0),(1135,64,1,0),(1136,64,2,0),(1137,64,3,0),(1138,64,4,0),(1139,64,5,0),(1140,64,6,0),(1141,64,7,0),(1142,64,8,0),(1143,64,9,20),(1144,64,10,0),(1145,64,11,30),(1146,64,12,20),(1147,64,13,0),(1148,64,14,30),(1149,64,15,0),(1150,64,16,0),(1151,64,17,0),(1152,64,18,0),(1153,65,1,0),(1154,65,2,0),(1155,65,3,0),(1156,65,4,0),(1157,65,5,15),(1158,65,6,35),(1159,65,7,15),(1160,65,8,35),(1161,65,9,0),(1162,65,10,0),(1163,65,11,0),(1164,65,12,0),(1165,65,13,0),(1166,65,14,0),(1167,65,15,0),(1168,65,16,0),(1169,65,17,0),(1170,65,18,0),(1171,66,1,0),(1172,66,2,0),(1173,66,3,0),(1174,66,4,0),(1175,66,5,0),(1176,66,6,0),(1177,66,7,0),(1178,66,8,0),(1179,66,9,0),(1180,66,10,0),(1181,66,11,0),(1182,66,12,0),(1183,66,13,0),(1184,66,14,0),(1185,66,15,0),(1186,66,16,30),(1187,66,17,30),(1188,66,18,40),(1189,67,1,0),(1190,67,2,0),(1191,67,3,0),(1192,67,4,25),(1193,67,5,25),(1194,67,6,25),(1195,67,7,25),(1196,67,8,0),(1197,67,9,0),(1198,67,10,0),(1199,67,11,0),(1200,67,12,0),(1201,67,13,0),(1202,67,14,0),(1203,67,15,0),(1204,67,16,0),(1205,67,17,0),(1206,67,18,0),(1207,68,1,50),(1208,68,2,50),(1209,68,3,0),(1210,68,4,0),(1211,68,5,0),(1212,68,6,0),(1213,68,7,0),(1214,68,8,0),(1215,68,9,0),(1216,68,10,0),(1217,68,11,0),(1218,68,12,0),(1219,68,13,0),(1220,68,14,0),(1221,68,15,0),(1222,68,16,0),(1223,68,17,0),(1224,68,18,0),(1225,69,1,0),(1226,69,2,0),(1227,69,3,0),(1228,69,4,0),(1229,69,5,0),(1230,69,6,0),(1231,69,7,0),(1232,69,8,0),(1233,69,9,40),(1234,69,10,0),(1235,69,11,10),(1236,69,12,0),(1237,69,13,50),(1238,69,14,0),(1239,69,15,0),(1240,69,16,0),(1241,69,17,0),(1242,69,18,0),(1243,70,1,30),(1244,70,2,30),(1245,70,3,30),(1246,70,4,10),(1247,70,5,0),(1248,70,6,0),(1249,70,7,0),(1250,70,8,0),(1251,70,9,0),(1252,70,10,0),(1253,70,11,0),(1254,70,12,0),(1255,70,13,0),(1256,70,14,0),(1257,70,15,0),(1258,70,16,0),(1259,70,17,0),(1260,70,18,0),(1261,71,1,20),(1262,71,2,20),(1263,71,3,20),(1264,71,4,20),(1265,71,5,20),(1266,71,6,0),(1267,71,7,0),(1268,71,8,0),(1269,71,9,0),(1270,71,10,0),(1271,71,11,0),(1272,71,12,0),(1273,71,13,0),(1274,71,14,0),(1275,71,15,0),(1276,71,16,0),(1277,71,17,0),(1278,71,18,0),(1279,72,1,0),(1280,72,2,0),(1281,72,3,0),(1282,72,4,0),(1283,72,5,0),(1284,72,6,0),(1285,72,7,0),(1286,72,8,0),(1287,72,9,0),(1288,72,10,0),(1289,72,11,0),(1290,72,12,0),(1291,72,13,0),(1292,72,14,0),(1293,72,15,0),(1294,72,16,30),(1295,72,17,30),(1296,72,18,40),(1297,73,1,0),(1298,73,2,0),(1299,73,3,0),(1300,73,4,0),(1301,73,5,0),(1302,73,6,0),(1303,73,7,0),(1304,73,8,0),(1305,73,9,0),(1306,73,10,0),(1307,73,11,0),(1308,73,12,0),(1309,73,13,0),(1310,73,14,0),(1311,73,15,0),(1312,73,16,30),(1313,73,17,30),(1314,73,18,40),(1315,74,1,0),(1316,74,2,0),(1317,74,3,0),(1318,74,4,0),(1319,74,5,0),(1320,74,6,0),(1321,74,7,0),(1322,74,8,0),(1323,74,9,0),(1324,74,10,0),(1325,74,11,0),(1326,74,12,0),(1327,74,13,0),(1328,74,14,0),(1329,74,15,0),(1330,74,16,30),(1331,74,17,30),(1332,74,18,40),(1333,75,1,0),(1334,75,2,0),(1335,75,3,0),(1336,75,4,0),(1337,75,5,0),(1338,75,6,0),(1339,75,7,0),(1340,75,8,0),(1341,75,9,0),(1342,75,10,0),(1343,75,11,0),(1344,75,12,0),(1345,75,13,0),(1346,75,14,0),(1347,75,15,0),(1348,75,16,30),(1349,75,17,30),(1350,75,18,40),(1351,76,1,0),(1352,76,2,0),(1353,76,3,0),(1354,76,4,0),(1355,76,5,0),(1356,76,6,0),(1357,76,7,0),(1358,76,8,0),(1359,76,9,0),(1360,76,10,0),(1361,76,11,0),(1362,76,12,0),(1363,76,13,0),(1364,76,14,0),(1365,76,15,0),(1366,76,16,30),(1367,76,17,30),(1368,76,18,40),(1369,77,1,0),(1370,77,2,0),(1371,77,3,0),(1372,77,4,0),(1373,77,5,0),(1374,77,6,0),(1375,77,7,0),(1376,77,8,30),(1377,77,9,30),(1378,77,10,40),(1379,77,11,0),(1380,77,12,0),(1381,77,13,0),(1382,77,14,0),(1383,77,15,0),(1384,77,16,0),(1385,77,17,0),(1386,77,18,0),(1387,78,1,0),(1388,78,2,0),(1389,78,3,0),(1390,78,4,0),(1391,78,5,0),(1392,78,6,0),(1393,78,7,0),(1394,78,8,30),(1395,78,9,30),(1396,78,10,40),(1397,78,11,0),(1398,78,12,0),(1399,78,13,0),(1400,78,14,0),(1401,78,15,0),(1402,78,16,0),(1403,78,17,0),(1404,78,18,0),(1405,79,1,0),(1406,79,2,0),(1407,79,3,0),(1408,79,4,0),(1409,79,5,0),(1410,79,6,0),(1411,79,7,0),(1412,79,8,0),(1413,79,9,0),(1414,79,10,0),(1415,79,11,0),(1416,79,12,0),(1417,79,13,25),(1418,79,14,25),(1419,79,15,25),(1420,79,16,25),(1421,79,17,0),(1422,79,18,0),(1423,80,1,0),(1424,80,2,0),(1425,80,3,0),(1426,80,4,0),(1427,80,5,0),(1428,80,6,0),(1429,80,7,0),(1430,80,8,30),(1431,80,9,30),(1432,80,10,40),(1433,80,11,0),(1434,80,12,0),(1435,80,13,0),(1436,80,14,0),(1437,80,15,0),(1438,80,16,0),(1439,80,17,0),(1440,80,18,0),(1441,81,1,0),(1442,81,2,0),(1443,81,3,0),(1444,81,4,0),(1445,81,5,0),(1446,81,6,0),(1447,81,7,0),(1448,81,8,30),(1449,81,9,30),(1450,81,10,40),(1451,81,11,0),(1452,81,12,0),(1453,81,13,0),(1454,81,14,0),(1455,81,15,0),(1456,81,16,0),(1457,81,17,0),(1458,81,18,0),(1459,82,1,0),(1460,82,2,0),(1461,82,3,0),(1462,82,4,0),(1463,82,5,0),(1464,82,6,0),(1465,82,7,0),(1466,82,8,30),(1467,82,9,30),(1468,82,10,40),(1469,82,11,0),(1470,82,12,0),(1471,82,13,0),(1472,82,14,0),(1473,82,15,0),(1474,82,16,0),(1475,82,17,0),(1476,82,18,0),(1477,83,1,0),(1478,83,2,0),(1479,83,3,0),(1480,83,4,0),(1481,83,5,0),(1482,83,6,0),(1483,83,7,0),(1484,83,8,30),(1485,83,9,30),(1486,83,10,40),(1487,83,11,0),(1488,83,12,0),(1489,83,13,0),(1490,83,14,0),(1491,83,15,0),(1492,83,16,0),(1493,83,17,0),(1494,83,18,0),(1495,84,1,50),(1496,84,2,0),(1497,84,3,0),(1498,84,4,50),(1499,84,5,0),(1500,84,6,0),(1501,84,7,0),(1502,84,8,0),(1503,84,9,0),(1504,84,10,0),(1505,84,11,0),(1506,84,12,0),(1507,84,13,0),(1508,84,14,0),(1509,84,15,0),(1510,84,16,0),(1511,84,17,0),(1512,84,18,0),(1513,85,1,50),(1514,85,2,0),(1515,85,3,0),(1516,85,4,50),(1517,85,5,0),(1518,85,6,0),(1519,85,7,0),(1520,85,8,0),(1521,85,9,0),(1522,85,10,0),(1523,85,11,0),(1524,85,12,0),(1525,85,13,0),(1526,85,14,0),(1527,85,15,0),(1528,85,16,0),(1529,85,17,0),(1530,85,18,0),(1531,86,1,50),(1532,86,2,0),(1533,86,3,0),(1534,86,4,50),(1535,86,5,0),(1536,86,6,0),(1537,86,7,0),(1538,86,8,0),(1539,86,9,0),(1540,86,10,0),(1541,86,11,0),(1542,86,12,0),(1543,86,13,0),(1544,86,14,0),(1545,86,15,0),(1546,86,16,0),(1547,86,17,0),(1548,86,18,0),(1549,87,1,50),(1550,87,2,0),(1551,87,3,0),(1552,87,4,50),(1553,87,5,0),(1554,87,6,0),(1555,87,7,0),(1556,87,8,0),(1557,87,9,0),(1558,87,10,0),(1559,87,11,0),(1560,87,12,0),(1561,87,13,0),(1562,87,14,0),(1563,87,15,0),(1564,87,16,0),(1565,87,17,0),(1566,87,18,0),(1567,88,1,50),(1568,88,2,0),(1569,88,3,0),(1570,88,4,50),(1571,88,5,0),(1572,88,6,0),(1573,88,7,0),(1574,88,8,0),(1575,88,9,0),(1576,88,10,0),(1577,88,11,0),(1578,88,12,0),(1579,88,13,0),(1580,88,14,0),(1581,88,15,0),(1582,88,16,0),(1583,88,17,0),(1584,88,18,0),(1585,89,1,50),(1586,89,2,0),(1587,89,3,0),(1588,89,4,50),(1589,89,5,0),(1590,89,6,0),(1591,89,7,0),(1592,89,8,0),(1593,89,9,0),(1594,89,10,0),(1595,89,11,0),(1596,89,12,0),(1597,89,13,0),(1598,89,14,0),(1599,89,15,0),(1600,89,16,0),(1601,89,17,0),(1602,89,18,0),(1603,90,1,0),(1604,90,2,20),(1605,90,3,0),(1606,90,4,0),(1607,90,5,0),(1608,90,6,20),(1609,90,7,0),(1610,90,8,0),(1611,90,9,20),(1612,90,10,0),(1613,90,11,20),(1614,90,12,0),(1615,90,13,20),(1616,90,14,0),(1617,90,15,0),(1618,90,16,0),(1619,90,17,0),(1620,90,18,0),(1621,91,1,0),(1622,91,2,20),(1623,91,3,0),(1624,91,4,0),(1625,91,5,0),(1626,91,6,20),(1627,91,7,0),(1628,91,8,0),(1629,91,9,20),(1630,91,10,0),(1631,91,11,20),(1632,91,12,0),(1633,91,13,0),(1634,91,14,20),(1635,91,15,0),(1636,91,16,0),(1637,91,17,0),(1638,91,18,0),(1639,92,1,0),(1640,92,2,20),(1641,92,3,0),(1642,92,4,0),(1643,92,5,0),(1644,92,6,20),(1645,92,7,0),(1646,92,8,0),(1647,92,9,20),(1648,92,10,0),(1649,92,11,20),(1650,92,12,0),(1651,92,13,0),(1652,92,14,20),(1653,92,15,0),(1654,92,16,0),(1655,92,17,0),(1656,92,18,0),(1657,93,1,0),(1658,93,2,20),(1659,93,3,0),(1660,93,4,0),(1661,93,5,0),(1662,93,6,20),(1663,93,7,0),(1664,93,8,0),(1665,93,9,20),(1666,93,10,0),(1667,93,11,20),(1668,93,12,0),(1669,93,13,0),(1670,93,14,20),(1671,93,15,0),(1672,93,16,0),(1673,93,17,0),(1674,93,18,0),(1675,94,1,0),(1676,94,2,20),(1677,94,3,0),(1678,94,4,0),(1679,94,5,0),(1680,94,6,20),(1681,94,7,0),(1682,94,8,0),(1683,94,9,20),(1684,94,10,0),(1685,94,11,20),(1686,94,12,0),(1687,94,13,0),(1688,94,14,20),(1689,94,15,0),(1690,94,16,0),(1691,94,17,0),(1692,94,18,0),(1693,95,1,0),(1694,95,2,20),(1695,95,3,0),(1696,95,4,0),(1697,95,5,0),(1698,95,6,20),(1699,95,7,0),(1700,95,8,0),(1701,95,9,20),(1702,95,10,0),(1703,95,11,20),(1704,95,12,0),(1705,95,13,0),(1706,95,14,20),(1707,95,15,0),(1708,95,16,0),(1709,95,17,0),(1710,95,18,0),(1711,96,1,20),(1712,96,2,0),(1713,96,3,0),(1714,96,4,0),(1715,96,5,20),(1716,96,6,0),(1717,96,7,0),(1718,96,8,20),(1719,96,9,0),(1720,96,10,0),(1721,96,11,0),(1722,96,12,20),(1723,96,13,20),(1724,96,14,0),(1725,96,15,0),(1726,96,16,0),(1727,96,17,0),(1728,96,18,0),(1729,97,1,20),(1730,97,2,0),(1731,97,3,0),(1732,97,4,0),(1733,97,5,20),(1734,97,6,0),(1735,97,7,0),(1736,97,8,20),(1737,97,9,0),(1738,97,10,0),(1739,97,11,0),(1740,97,12,20),(1741,97,13,20),(1742,97,14,0),(1743,97,15,0),(1744,97,16,0),(1745,97,17,0),(1746,97,18,0),(1747,98,1,20),(1748,98,2,0),(1749,98,3,0),(1750,98,4,0),(1751,98,5,20),(1752,98,6,0),(1753,98,7,0),(1754,98,8,20),(1755,98,9,0),(1756,98,10,0),(1757,98,11,0),(1758,98,12,20),(1759,98,13,20),(1760,98,14,0),(1761,98,15,0),(1762,98,16,0),(1763,98,17,0),(1764,98,18,0),(1765,99,1,20),(1766,99,2,0),(1767,99,3,0),(1768,99,4,0),(1769,99,5,20),(1770,99,6,0),(1771,99,7,0),(1772,99,8,20),(1773,99,9,0),(1774,99,10,0),(1775,99,11,0),(1776,99,12,20),(1777,99,13,20),(1778,99,14,0),(1779,99,15,0),(1780,99,16,0),(1781,99,17,0),(1782,99,18,0),(1783,100,1,20),(1784,100,2,0),(1785,100,3,0),(1786,100,4,0),(1787,100,5,20),(1788,100,6,0),(1789,100,7,0),(1790,100,8,20),(1791,100,9,0),(1792,100,10,0),(1793,100,11,0),(1794,100,12,20),(1795,100,13,20),(1796,100,14,0),(1797,100,15,0),(1798,100,16,0),(1799,100,17,0),(1800,100,18,0),(1801,101,1,20),(1802,101,2,0),(1803,101,3,0),(1804,101,4,0),(1805,101,5,20),(1806,101,6,0),(1807,101,7,0),(1808,101,8,20),(1809,101,9,0),(1810,101,10,0),(1811,101,11,0),(1812,101,12,20),(1813,101,13,20),(1814,101,14,0),(1815,101,15,0),(1816,101,16,0),(1817,101,17,0),(1818,101,18,0),(1819,102,1,50),(1820,102,2,50),(1821,102,3,0),(1822,102,4,0),(1823,102,5,0),(1824,102,6,0),(1825,102,7,0),(1826,102,8,0),(1827,102,9,0),(1828,102,10,0),(1829,102,11,0),(1830,102,12,0),(1831,102,13,0),(1832,102,14,0),(1833,102,15,0),(1834,102,16,0),(1835,102,17,0),(1836,102,18,0),(1837,103,1,50),(1838,103,2,50),(1839,103,3,0),(1840,103,4,0),(1841,103,5,0),(1842,103,6,0),(1843,103,7,0),(1844,103,8,0),(1845,103,9,0),(1846,103,10,0),(1847,103,11,0),(1848,103,12,0),(1849,103,13,0),(1850,103,14,0),(1851,103,15,0),(1852,103,16,0),(1853,103,17,0),(1854,103,18,0),(1855,104,1,25),(1856,104,2,0),(1857,104,3,25),(1858,104,4,0),(1859,104,5,0),(1860,104,6,0),(1861,104,7,0),(1862,104,8,0),(1863,104,9,50),(1864,104,10,0),(1865,104,11,0),(1866,104,12,0),(1867,104,13,0),(1868,104,14,0),(1869,104,15,0),(1870,104,16,0),(1871,104,17,0),(1872,104,18,0),(1873,105,1,60),(1874,105,2,20),(1875,105,3,20),(1876,105,4,0),(1877,105,5,0),(1878,105,6,0),(1879,105,7,0),(1880,105,8,0),(1881,105,9,0),(1882,105,10,0),(1883,105,11,0),(1884,105,12,0),(1885,105,13,0),(1886,105,14,0),(1887,105,15,0),(1888,105,16,0),(1889,105,17,0),(1890,105,18,0),(1891,106,1,0),(1892,106,2,0),(1893,106,3,0),(1894,106,4,0),(1895,106,5,0),(1896,106,6,0),(1897,106,7,0),(1898,106,8,25),(1899,106,9,0),(1900,106,10,0),(1901,106,11,25),(1902,106,12,0),(1903,106,13,0),(1904,106,14,25),(1905,106,15,0),(1906,106,16,0),(1907,106,17,25),(1908,106,18,0),(1909,107,1,0),(1910,107,2,0),(1911,107,3,0),(1912,107,4,0),(1913,107,5,0),(1914,107,6,0),(1915,107,7,0),(1916,107,8,0),(1917,107,9,0),(1918,107,10,60),(1919,107,11,0),(1920,107,12,0),(1921,107,13,40),(1922,107,14,0),(1923,107,15,0),(1924,107,16,0),(1925,107,17,0),(1926,107,18,0),(1927,108,1,0),(1928,108,2,0),(1929,108,3,0),(1930,108,4,0),(1931,108,5,0),(1932,108,6,0),(1933,108,7,0),(1934,108,8,0),(1935,108,9,20),(1936,108,10,0),(1937,108,11,20),(1938,108,12,0),(1939,108,13,20),(1940,108,14,0),(1941,108,15,20),(1942,108,16,0),(1943,108,17,20),(1944,108,18,0),(1945,109,1,0),(1946,109,2,0),(1947,109,3,0),(1948,109,4,0),(1949,109,5,0),(1950,109,6,0),(1951,109,7,0),(1952,109,8,50),(1953,109,9,0),(1954,109,10,50),(1955,109,11,0),(1956,109,12,0),(1957,109,13,0),(1958,109,14,0),(1959,109,15,0),(1960,109,16,0),(1961,109,17,0),(1962,109,18,0),(1963,110,1,0),(1964,110,2,0),(1965,110,3,0),(1966,110,4,0),(1967,110,5,0),(1968,110,6,0),(1969,110,7,0),(1970,110,8,0),(1971,110,9,60),(1972,110,10,0),(1973,110,11,40),(1974,110,12,0),(1975,110,13,0),(1976,110,14,0),(1977,110,15,0),(1978,110,16,0),(1979,110,17,0),(1980,110,18,0),(1981,111,1,0),(1982,111,2,0),(1983,111,3,0),(1984,111,4,25),(1985,111,5,0),(1986,111,6,25),(1987,111,7,0),(1988,111,8,0),(1989,111,9,10),(1990,111,10,40),(1991,111,11,0),(1992,111,12,0),(1993,111,13,0),(1994,111,14,0),(1995,111,15,0),(1996,111,16,0),(1997,111,17,0),(1998,111,18,0),(1999,112,1,20),(2000,112,2,0),(2001,112,3,20),(2002,112,4,0),(2003,112,5,0),(2004,112,6,60),(2005,112,7,0),(2006,112,8,0),(2007,112,9,0),(2008,112,10,0),(2009,112,11,0),(2010,112,12,0),(2011,112,13,0),(2012,112,14,0),(2013,112,15,0),(2014,112,16,0),(2015,112,17,0),(2016,112,18,0),(2017,113,1,20),(2018,113,2,0),(2019,113,3,40),(2020,113,4,0),(2021,113,5,25),(2022,113,6,15),(2023,113,7,0),(2024,113,8,0),(2025,113,9,0),(2026,113,10,0),(2027,113,11,0),(2028,113,12,0),(2029,113,13,0),(2030,113,14,0),(2031,113,15,0),(2032,113,16,0),(2033,113,17,0),(2034,113,18,0),(2035,114,1,0),(2036,114,2,0),(2037,114,3,0),(2038,114,4,0),(2039,114,5,0),(2040,114,6,0),(2041,114,7,0),(2042,114,8,30),(2043,114,9,0),(2044,114,10,30),(2045,114,11,0),(2046,114,12,40),(2047,114,13,0),(2048,114,14,0),(2049,114,15,0),(2050,114,16,0),(2051,114,17,0),(2052,114,18,0),(2053,115,1,0),(2054,115,2,0),(2055,115,3,0),(2056,115,4,0),(2057,115,5,0),(2058,115,6,0),(2059,115,7,0),(2060,115,8,0),(2061,115,9,30),(2062,115,10,60),(2063,115,11,0),(2064,115,12,0),(2065,115,13,0),(2066,115,14,0),(2067,115,15,0),(2068,115,16,0),(2069,115,17,0),(2070,115,18,10),(2071,116,1,25),(2072,116,2,0),(2073,116,3,25),(2074,116,4,0),(2075,116,5,25),(2076,116,6,0),(2077,116,7,25),(2078,116,8,0),(2079,116,9,0),(2080,116,10,0),(2081,116,11,0),(2082,116,12,0),(2083,116,13,0),(2084,116,14,0),(2085,116,15,0),(2086,116,16,0),(2087,116,17,0),(2088,116,18,0),(2089,117,1,60),(2090,117,2,0),(2091,117,3,40),(2092,117,4,0),(2093,117,5,0),(2094,117,6,0),(2095,117,7,0),(2096,117,8,0),(2097,117,9,0),(2098,117,10,0),(2099,117,11,0),(2100,117,12,0),(2101,117,13,0),(2102,117,14,0),(2103,117,15,0),(2104,117,16,0),(2105,117,17,0),(2106,117,18,0),(2107,118,1,0),(2108,118,2,50),(2109,118,3,0),(2110,118,4,40),(2111,118,5,10),(2112,118,6,0),(2113,118,7,0),(2114,118,8,0),(2115,118,9,0),(2116,118,10,0),(2117,118,11,0),(2118,118,12,0),(2119,118,13,0),(2120,118,14,0),(2121,118,15,0),(2122,118,16,0),(2123,118,17,0),(2124,118,18,0),(2125,119,1,0),(2126,119,2,0),(2127,119,3,0),(2128,119,4,0),(2129,119,5,0),(2130,119,6,25),(2131,119,7,0),(2132,119,8,0),(2133,119,9,0),(2134,119,10,0),(2135,119,11,15),(2136,119,12,0),(2137,119,13,0),(2138,119,14,30),(2139,119,15,0),(2140,119,16,0),(2141,119,17,0),(2142,119,18,30),(2143,120,1,0),(2144,120,2,0),(2145,120,3,0),(2146,120,4,0),(2147,120,5,0),(2148,120,6,0),(2149,120,7,0),(2150,120,8,25),(2151,120,9,0),(2152,120,10,25),(2153,120,11,25),(2154,120,12,0),(2155,120,13,0),(2156,120,14,0),(2157,120,15,25),(2158,120,16,0),(2159,120,17,0),(2160,120,18,0),(2161,121,1,0),(2162,121,2,30),(2163,121,3,0),(2164,121,4,30),(2165,121,5,0),(2166,121,6,10),(2167,121,7,0),(2168,121,8,0),(2169,121,9,30),(2170,121,10,0),(2171,121,11,0),(2172,121,12,0),(2173,121,13,0),(2174,121,14,0),(2175,121,15,0),(2176,121,16,0),(2177,121,17,0),(2178,121,18,0),(2179,122,1,0),(2180,122,2,10),(2181,122,3,0),(2182,122,4,0),(2183,122,5,40),(2184,122,6,0),(2185,122,7,0),(2186,122,8,25),(2187,122,9,0),(2188,122,10,0),(2189,122,11,25),(2190,122,12,0),(2191,122,13,0),(2192,122,14,0),(2193,122,15,0),(2194,122,16,0),(2195,122,17,0),(2196,122,18,0),(2197,123,1,0),(2198,123,2,0),(2199,123,3,10),(2200,123,4,0),(2201,123,5,0),(2202,123,6,0),(2203,123,7,0),(2204,123,8,0),(2205,123,9,0),(2206,123,10,0),(2207,123,11,0),(2208,123,12,0),(2209,123,13,60),(2210,123,14,0),(2211,123,15,0),(2212,123,16,0),(2213,123,17,10),(2214,123,18,20),(2215,124,1,30),(2216,124,2,0),(2217,124,3,20),(2218,124,4,0),(2219,124,5,0),(2220,124,6,25),(2221,124,7,0),(2222,124,8,0),(2223,124,9,0),(2224,124,10,0),(2225,124,11,0),(2226,124,12,0),(2227,124,13,0),(2228,124,14,0),(2229,124,15,0),(2230,124,16,0),(2231,124,17,0),(2232,124,18,25),(2233,125,1,0),(2234,125,2,0),(2235,125,3,0),(2236,125,4,0),(2237,125,5,0),(2238,125,6,0),(2239,125,7,0),(2240,125,8,0),(2241,125,9,0),(2242,125,10,20),(2243,125,11,0),(2244,125,12,0),(2245,125,13,30),(2246,125,14,0),(2247,125,15,0),(2248,125,16,50),(2249,125,17,0),(2250,125,18,0),(2251,126,1,0),(2252,126,2,0),(2253,126,3,20),(2254,126,4,0),(2255,126,5,0),(2256,126,6,20),(2257,126,7,0),(2258,126,8,60),(2259,126,9,0),(2260,126,10,0),(2261,126,11,0),(2262,126,12,0),(2263,126,13,0),(2264,126,14,0),(2265,126,15,0),(2266,126,16,0),(2267,126,17,0),(2268,126,18,0),(2269,127,1,0),(2270,127,2,20),(2271,127,3,30),(2272,127,4,0),(2273,127,5,30),(2274,127,6,0),(2275,127,7,0),(2276,127,8,0),(2277,127,9,0),(2278,127,10,0),(2279,127,11,0),(2280,127,12,0),(2281,127,13,10),(2282,127,14,0),(2283,127,15,0),(2284,127,16,10),(2285,127,17,0),(2286,127,18,0),(2287,128,1,0),(2288,128,2,0),(2289,128,3,25),(2290,128,4,0),(2291,128,5,50),(2292,128,6,0),(2293,128,7,0),(2294,128,8,0),(2295,128,9,25),(2296,128,10,0),(2297,128,11,0),(2298,128,12,0),(2299,128,13,0),(2300,128,14,0),(2301,128,15,0),(2302,128,16,0),(2303,128,17,0),(2304,128,18,0),(2305,129,1,0),(2306,129,2,30),(2307,129,3,0),(2308,129,4,30),(2309,129,5,0),(2310,129,6,40),(2311,129,7,0),(2312,129,8,0),(2313,129,9,0),(2314,129,10,0),(2315,129,11,0),(2316,129,12,0),(2317,129,13,0),(2318,129,14,0),(2319,129,15,0),(2320,129,16,0),(2321,129,17,0),(2322,129,18,0),(2323,130,1,0),(2324,130,2,40),(2325,130,3,0),(2326,130,4,0),(2327,130,5,0),(2328,130,6,0),(2329,130,7,0),(2330,130,8,0),(2331,130,9,40),(2332,130,10,0),(2333,130,11,0),(2334,130,12,0),(2335,130,13,0),(2336,130,14,0),(2337,130,15,0),(2338,130,16,0),(2339,130,17,20),(2340,130,18,0),(2341,131,1,0),(2342,131,2,0),(2343,131,3,0),(2344,131,4,25),(2345,131,5,0),(2346,131,6,50),(2347,131,7,0),(2348,131,8,25),(2349,131,9,0),(2350,131,10,0),(2351,131,11,0),(2352,131,12,0),(2353,131,13,0),(2354,131,14,0),(2355,131,15,0),(2356,131,16,0),(2357,131,17,0),(2358,131,18,0),(2359,132,1,0),(2360,132,2,0),(2361,132,3,25),(2362,132,4,0),(2363,132,5,0),(2364,132,6,0),(2365,132,7,0),(2366,132,8,0),(2367,132,9,0),(2368,132,10,25),(2369,132,11,0),(2370,132,12,0),(2371,132,13,0),(2372,132,14,20),(2373,132,15,0),(2374,132,16,0),(2375,132,17,30),(2376,132,18,0),(2377,133,1,0),(2378,133,2,0),(2379,133,3,0),(2380,133,4,30),(2381,133,5,30),(2382,133,6,30),(2383,133,7,10),(2384,133,8,0),(2385,133,9,0),(2386,133,10,0),(2387,133,11,0),(2388,133,12,0),(2389,133,13,0),(2390,133,14,0),(2391,133,15,0),(2392,133,16,0),(2393,133,17,0),(2394,133,18,0),(2395,134,1,0),(2396,134,2,0),(2397,134,3,0),(2398,134,4,35),(2399,134,5,0),(2400,134,6,20),(2401,134,7,10),(2402,134,8,0),(2403,134,9,0),(2404,134,10,35),(2405,134,11,0),(2406,134,12,0),(2407,134,13,0),(2408,134,14,0),(2409,134,15,0),(2410,134,16,0),(2411,134,17,0),(2412,134,18,0),(2413,135,1,0),(2414,135,2,0),(2415,135,3,0),(2416,135,4,0),(2417,135,5,0),(2418,135,6,0),(2419,135,7,0),(2420,135,8,0),(2421,135,9,0),(2422,135,10,10),(2423,135,11,0),(2424,135,12,0),(2425,135,13,20),(2426,135,14,0),(2427,135,15,20),(2428,135,16,0),(2429,135,17,50),(2430,135,18,0),(2431,136,1,0),(2432,136,2,0),(2433,136,3,0),(2434,136,4,0),(2435,136,5,0),(2436,136,6,0),(2437,136,7,0),(2438,136,8,50),(2439,136,9,0),(2440,136,10,50),(2441,136,11,0),(2442,136,12,0),(2443,136,13,0),(2444,136,14,0),(2445,136,15,0),(2446,136,16,0),(2447,136,17,0),(2448,136,18,0),(2449,137,1,0),(2450,137,2,0),(2451,137,3,0),(2452,137,4,0),(2453,137,5,0),(2454,137,6,0),(2455,137,7,0),(2456,137,8,0),(2457,137,9,0),(2458,137,10,0),(2459,137,11,0),(2460,137,12,0),(2461,137,13,30),(2462,137,14,30),(2463,137,15,0),(2464,137,16,30),(2465,137,17,10),(2466,137,18,0),(2467,138,1,0),(2468,138,2,0),(2469,138,3,20),(2470,138,4,0),(2471,138,5,0),(2472,138,6,0),(2473,138,7,0),(2474,138,8,0),(2475,138,9,0),(2476,138,10,60),(2477,138,11,0),(2478,138,12,0),(2479,138,13,0),(2480,138,14,0),(2481,138,15,0),(2482,138,16,0),(2483,138,17,20),(2484,138,18,0),(2485,139,1,0),(2486,139,2,0),(2487,139,3,0),(2488,139,4,0),(2489,139,5,0),(2490,139,6,0),(2491,139,7,0),(2492,139,8,10),(2493,139,9,10),(2494,139,10,10),(2495,139,11,10),(2496,139,12,10),(2497,139,13,10),(2498,139,14,10),(2499,139,15,10),(2500,139,16,10),(2501,139,17,10),(2502,139,18,0),(2503,140,1,0),(2504,140,2,0),(2505,140,3,0),(2506,140,4,0),(2507,140,5,0),(2508,140,6,0),(2509,140,7,0),(2510,140,8,0),(2511,140,9,0),(2512,140,10,50),(2513,140,11,25),(2514,140,12,0),(2515,140,13,0),(2516,140,14,0),(2517,140,15,0),(2518,140,16,0),(2519,140,17,0),(2520,140,18,25),(2521,141,1,0),(2522,141,2,30),(2523,141,3,0),(2524,141,4,0),(2525,141,5,0),(2526,141,6,0),(2527,141,7,0),(2528,141,8,0),(2529,141,9,0),(2530,141,10,30),(2531,141,11,0),(2532,141,12,20),(2533,141,13,0),(2534,141,14,20),(2535,141,15,0),(2536,141,16,0),(2537,141,17,0),(2538,141,18,0),(2539,142,1,0),(2540,142,2,0),(2541,142,3,0),(2542,142,4,25),(2543,142,5,0),(2544,142,6,0),(2545,142,7,25),(2546,142,8,0),(2547,142,9,0),(2548,142,10,50),(2549,142,11,0),(2550,142,12,0),(2551,142,13,0),(2552,142,14,0),(2553,142,15,0),(2554,142,16,0),(2555,142,17,0),(2556,142,18,0),(2557,143,1,0),(2558,143,2,0),(2559,143,3,25),(2560,143,4,0),(2561,143,5,30),(2562,143,6,0),(2563,143,7,20),(2564,143,8,0),(2565,143,9,0),(2566,143,10,25),(2567,143,11,0),(2568,143,12,0),(2569,143,13,0),(2570,143,14,0),(2571,143,15,0),(2572,143,16,0),(2573,143,17,0),(2574,143,18,0),(2575,144,1,0),(2576,144,2,0),(2577,144,3,0),(2578,144,4,0),(2579,144,5,0),(2580,144,6,0),(2581,144,7,0),(2582,144,8,30),(2583,144,9,0),(2584,144,10,0),(2585,144,11,30),(2586,144,12,0),(2587,144,13,0),(2588,144,14,30),(2589,144,15,0),(2590,144,16,0),(2591,144,17,0),(2592,144,18,10),(2593,145,1,0),(2594,145,2,25),(2595,145,3,0),(2596,145,4,0),(2597,145,5,0),(2598,145,6,25),(2599,145,7,0),(2600,145,8,0),(2601,145,9,0),(2602,145,10,0),(2603,145,11,0),(2604,145,12,0),(2605,145,13,50),(2606,145,14,0),(2607,145,15,0),(2608,145,16,0),(2609,145,17,0),(2610,145,18,0),(2611,146,1,10),(2612,146,2,0),(2613,146,3,0),(2614,146,4,0),(2615,146,5,0),(2616,146,6,0),(2617,146,7,0),(2618,146,8,0),(2619,146,9,0),(2620,146,10,30),(2621,146,11,0),(2622,146,12,0),(2623,146,13,30),(2624,146,14,0),(2625,146,15,0),(2626,146,16,30),(2627,146,17,0),(2628,146,18,0),(2629,147,1,0),(2630,147,2,0),(2631,147,3,0),(2632,147,4,20),(2633,147,5,0),(2634,147,6,0),(2635,147,7,30),(2636,147,8,0),(2637,147,9,0),(2638,147,10,0),(2639,147,11,0),(2640,147,12,0),(2641,147,13,0),(2642,147,14,0),(2643,147,15,0),(2644,147,16,20),(2645,147,17,0),(2646,147,18,30),(2647,148,1,0),(2648,148,2,0),(2649,148,3,0),(2650,148,4,0),(2651,148,5,0),(2652,148,6,0),(2653,148,7,0),(2654,148,8,0),(2655,148,9,25),(2656,148,10,25),(2657,148,11,0),(2658,148,12,0),(2659,148,13,0),(2660,148,14,0),(2661,148,15,0),(2662,148,16,0),(2663,148,17,50),(2664,148,18,0),(2665,149,1,0),(2666,149,2,20),(2667,149,3,0),(2668,149,4,20),(2669,149,5,0),(2670,149,6,60),(2671,149,7,0),(2672,149,8,0),(2673,149,9,0),(2674,149,10,0),(2675,149,11,0),(2676,149,12,0),(2677,149,13,0),(2678,149,14,0),(2679,149,15,0),(2680,149,16,0),(2681,149,17,0),(2682,149,18,0),(2683,150,1,0),(2684,150,2,30),(2685,150,3,0),(2686,150,4,0),(2687,150,5,30),(2688,150,6,0),(2689,150,7,0),(2690,150,8,0),(2691,150,9,0),(2692,150,10,0),(2693,150,11,30),(2694,150,12,0),(2695,150,13,0),(2696,150,14,0),(2697,150,15,0),(2698,150,16,0),(2699,150,17,0),(2700,150,18,10),(2701,151,1,0),(2702,151,2,20),(2703,151,3,0),(2704,151,4,20),(2705,151,5,0),(2706,151,6,0),(2707,151,7,20),(2708,151,8,0),(2709,151,9,0),(2710,151,10,0),(2711,151,11,0),(2712,151,12,0),(2713,151,13,0),(2714,151,14,20),(2715,151,15,0),(2716,151,16,0),(2717,151,17,20),(2718,151,18,0),(2719,152,1,0),(2720,152,2,0),(2721,152,3,50),(2722,152,4,0),(2723,152,5,0),(2724,152,6,0),(2725,152,7,0),(2726,152,8,0),(2727,152,9,0),(2728,152,10,0),(2729,152,11,0),(2730,152,12,0),(2731,152,13,0),(2732,152,14,0),(2733,152,15,0),(2734,152,16,0),(2735,152,17,0),(2736,152,18,50),(2737,153,1,0),(2738,153,2,0),(2739,153,3,0),(2740,153,4,0),(2741,153,5,0),(2742,153,6,0),(2743,153,7,0),(2744,153,8,0),(2745,153,9,30),(2746,153,10,0),(2747,153,11,0),(2748,153,12,0),(2749,153,13,0),(2750,153,14,0),(2751,153,15,0),(2752,153,16,10),(2753,153,17,30),(2754,153,18,30);
/*!40000 ALTER TABLE `proportions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `raw_coffee`
--

DROP TABLE IF EXISTS `raw_coffee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `raw_coffee` (
  `raw_id` int(11) NOT NULL AUTO_INCREMENT,
  `raw_coffee` varchar(20) NOT NULL,
  `raw_reorder` int(11) NOT NULL,
  `raw_stock` int(50) NOT NULL,
  `unitPrice` decimal(11,0) NOT NULL,
  `sup_id` int(11) NOT NULL,
  `raw_physcount` int(11) NOT NULL DEFAULT '0',
  `raw_remarks` varchar(45) DEFAULT NULL,
  `raw_discrepancy` int(11) NOT NULL DEFAULT '0',
  `inventory_date` date DEFAULT NULL,
  `raw_activation` int(11) NOT NULL DEFAULT '1',
  `raw_type` varchar(50) NOT NULL,
  `category` varchar(45) DEFAULT '1',
  PRIMARY KEY (`raw_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `raw_coffee`
--

LOCK TABLES `raw_coffee` WRITE;
/*!40000 ALTER TABLE `raw_coffee` DISABLE KEYS */;
INSERT INTO `raw_coffee` VALUES (1,'Guatemela',500000,850000,450,1,0,'',0,'2018-05-25',1,'city roast','1'),(2,'Guatemela',500000,950000,380,1,0,'',0,'2018-05-25',1,'medium roast','1'),(3,'Guatemela',500000,980000,250,1,0,'',0,'2018-05-25',1,'light roast','1'),(4,'Barako',500000,1970000,250,2,0,'',0,'2018-05-25',1,'light roast','1'),(5,'Sumatra',500000,1480000,480,5,0,'',0,'2018-05-25',1,'city roast','1'),(6,'Sumatra',500000,992000,390,10,0,'',0,'2018-05-25',1,'medium roast','1'),(7,'Sumatra',500000,989000,270,10,0,'',0,'2018-05-25',1,'light roast','1'),(8,'Robusta',500000,1000000,450,3,0,'',0,'2018-05-25',1,'city roast','1'),(9,'Robusta',500000,1000000,340,3,0,'',0,'2018-05-25',1,'medium roast','1'),(10,'Robusta',500000,2950000,240,5,0,'',0,'2018-05-25',1,'light roast','1'),(11,'Barako',500000,1910000,360,2,0,'',0,'2018-05-25',1,'medium roast','1'),(12,'Barako',500000,1600000,460,2,0,'',0,'2018-05-25',1,'city roast','1'),(13,'Benguet',500000,1300000,350,17,0,'',0,'2018-05-25',1,'city roast','1'),(14,'Benguet',500000,1400000,250,17,0,'',0,'2018-05-25',1,'medium roast','1'),(15,'Benguet',500000,1900000,180,17,0,'',0,'2018-05-25',1,'light roast','1'),(16,'Colombia',500000,979000,640,4,0,'',0,'2018-05-25',1,'city roast','1'),(17,'Colombia',500000,991000,560,4,0,'',0,'2018-05-25',1,'medium roast','1'),(18,'Colombia',500000,986000,415,4,0,'',0,'2018-05-25',1,'light roast','1');
/*!40000 ALTER TABLE `raw_coffee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sticker`
--

DROP TABLE IF EXISTS `sticker`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sticker` (
  `sticker_id` int(11) NOT NULL AUTO_INCREMENT,
  `sticker` varchar(50) NOT NULL,
  `sticker_reorder` int(11) NOT NULL,
  `sticker_stock` int(11) NOT NULL,
  `sticker_physcount` int(11) NOT NULL DEFAULT '0',
  `sticker_remarks` varchar(45) DEFAULT NULL,
  `sticker_discrepancy` int(11) NOT NULL DEFAULT '0',
  `unitPrice` decimal(11,0) DEFAULT NULL,
  `sup_id` int(11) NOT NULL,
  `sticker_activation` int(11) NOT NULL DEFAULT '1',
  `sticker_type` varchar(45) DEFAULT NULL,
  `category` varchar(45) DEFAULT '3',
  `inventory_date` date DEFAULT NULL,
  PRIMARY KEY (`sticker_id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sticker`
--

LOCK TABLES `sticker` WRITE;
/*!40000 ALTER TABLE `sticker` DISABLE KEYS */;
INSERT INTO `sticker` VALUES (2,'Guatemela Rainforest Sticker',1000,1998,0,'',0,5,16,1,'paper','3',NULL),(3,'Cordillera Sunrise Sticker',1000,3995,0,'',0,5,15,1,'paper','3',NULL),(4,'Sumatra Night Sticker',1000,1600,0,'',0,5,14,1,'paper','3',NULL),(5,'Chefs Blend Sticker',1000,1999,0,'',0,5,15,1,'paper','3',NULL),(6,'Espresso Blend Sticker',1000,1500,0,'',0,5,18,1,'paper','3',NULL),(7,'Breakfast Blend Sticker',1000,1500,0,'',0,5,18,1,'paper','3',NULL),(8,'Mabuhay Blend Sticker',1000,1999,0,'',0,5,19,1,'paper','3',NULL),(9,'Fiesta Blend Sticker',1000,1998,0,'',0,5,19,1,'paper','3',NULL),(10,'Kalayaan Blend Sticker',1000,2000,0,'',0,5,19,1,'paper','3',NULL),(14,'ATACOGMAC Sticker',1000,2000,0,'',0,5,16,1,'paper','3',NULL),(15,'Le Chef Golf Sticker',1000,6000,0,'',0,5,16,1,'paper','3',NULL),(17,'Le Chef Southwoods Sticker',1000,7000,0,'',0,5,16,1,'paper','3',NULL),(18,'Le Chef Paranaque Sticker',1000,4000,0,'',0,5,16,1,'paper','3',NULL),(19,'Le Chef Accounting Sticker',1000,4000,0,'',0,5,16,1,'paper','3',NULL),(20,'Bloomfield Patch Cafe Sticker',1000,1150,0,'',0,10,20,1,'vinyl','3',NULL),(21,'Lemon and Olives Sticker',1000,2000,0,'',0,5,16,1,'paper','3',NULL),(22,'Le Festin Trading Sticker',1000,2000,0,'',0,5,16,1,'paper','3',NULL),(23,'Connies Kitchen Sticker',1000,1500,0,'',0,8,21,1,'plastic','3',NULL),(24,'Eurotel Sticker',1000,2000,0,'',0,10,19,1,'vinyl','3',NULL),(25,'Citrus Restaurant Sticker',1000,2000,0,'',0,8,16,1,'plastic','3',NULL),(26,'Cosys Cafe and Roasterie Sticker',1000,1500,0,'',0,8,21,1,'plastic','3',NULL),(27,'GMA Sticker',1000,1500,0,'',0,10,21,1,'paper','3',NULL),(28,'Lighthouse Marina Resort Sticker',1000,1650,0,'',0,5,20,1,'paper','3',NULL),(29,'ABS CBN Sticker',1000,2000,0,'',0,5,19,1,'paper','3',NULL),(30,'Bread House Sticker',1000,1500,0,'',0,10,20,1,'vinyl','3',NULL),(31,'John Hay Water System Inc Sticker',1000,1599,0,'',0,8,14,1,'plastic','3',NULL),(32,'Edwin Hui Sticker',1000,1600,0,'',0,8,20,1,'paper','3',NULL),(33,'Blackwoods Sticker',1000,2000,0,'',0,5,16,1,'paper','3',NULL),(34,'Marios Restaurant Baguio Sticker',1000,1500,0,'',0,8,18,1,'paper','3',NULL),(35,'Kahuna Beach Resort and Spa Sticker',1000,1548,0,'',0,8,20,1,'paper','3',NULL),(36,'Grumpy Joe Sticker',1000,1600,0,'',0,8,14,1,'paper','3',NULL),(37,'Gerrys Grill Treasury Sticker',1000,2000,0,'',0,8,15,1,'paper','3',NULL),(38,'Kintetsu World Express Sticker',1000,2000,0,'',0,10,19,1,'vinyl','3',NULL),(39,'Marios Restaurant Manila Sticker',1000,1500,0,'',0,10,18,1,'vinyl','3',NULL),(40,'Bowknot Brewery Sticker',1000,1500,0,'',0,5,18,1,'paper','3',NULL),(41,'Keiffeir Coffee Shop Sticker',1000,2000,0,'',0,8,15,1,'paper','3',NULL),(42,'Escala Sticker',1000,1500,0,'',0,8,21,1,'plastic','3',NULL),(43,'Cafe de Manor Sticker',1000,1500,0,'',0,10,18,1,'vinyl','3',NULL),(44,'Bote Central Sticker',1000,2000,0,'',0,8,15,1,'paper','3',NULL),(45,'La Casa Blanca Sticker',1000,1600,0,'',0,8,14,1,'paper','3',NULL),(46,'Hapi Bakery and Mami House Sticker',1000,2000,0,'',0,8,15,1,'paper','3',NULL),(47,'Wack Wack Sticker',1000,1990,0,'',0,8,19,1,'paper','3',NULL),(48,'Fil Estate Sticker',1000,1450,0,'',0,8,20,1,'paper','3',NULL),(49,'La Parilla Sticker',1000,2000,0,'',0,10,16,1,'paper','3',NULL),(50,'Amelie Hotel Sticker',1000,2000,0,'',0,8,16,1,'plastic','3',NULL),(51,'La Tienda Sticker',1000,2000,0,'',0,10,15,1,'paper','3',NULL),(52,'Professor Valentino Macanes Sticker',1000,1500,0,'',0,5,21,1,'paper','3',NULL),(53,'Best Western Oxford Suites Sticker',1000,1500,0,'',0,8,21,1,'paper','3',NULL),(54,'Camp John Hay Golf Club Sticker',1000,2000,0,'',0,8,16,1,'plastic','3',NULL),(55,'Le Chef Manor Sticker',1000,2000,0,'',0,8,19,1,'plastic','3',NULL),(56,'Baguio Country Club Sticker',1000,1500,0,'',0,10,21,1,'paper','3',NULL),(57,'Canto Restaurant Sticker',1000,1600,0,'',0,8,14,1,'paper','3',NULL),(58,'Cafe de Seoul Sticker',1000,2000,0,'',0,8,15,1,'paper','3',NULL),(59,'Forest Hills Sticker',1000,2000,0,'',0,5,15,1,'paper','3',NULL),(60,'Cafe Caw Sticker',1000,2000,0,'',0,8,15,1,'plastic','3',NULL),(61,'Bote Central Roasting Sticker',1000,1400,0,'',0,8,20,1,'paper','3',NULL),(62,'Colleen Curran Sticker',1000,1600,0,'',0,8,14,1,'plastic','3',NULL),(63,'Bioessence Sticker',1000,1600,0,'',0,8,14,1,'plastic','3',NULL),(64,'She Sticker',1000,1700,0,'',0,8,20,1,'plastic','3',NULL),(65,'Gerrys Grill Purchasing Sticker',1000,1400,0,'',0,10,20,1,'vinyl','3',NULL),(66,'Gweilo Corp Sticker',1000,1800,0,'',0,8,20,1,'plastic','3',NULL);
/*!40000 ALTER TABLE `sticker` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supp_delivery`
--

DROP TABLE IF EXISTS `supp_delivery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supp_delivery` (
  `supp_delivery_id` int(50) NOT NULL AUTO_INCREMENT,
  `supp_po_ordered_id` int(50) NOT NULL,
  `supp_po_id` int(50) NOT NULL,
  `date_received` date NOT NULL,
  `received` decimal(50,3) NOT NULL DEFAULT '0.000',
  `yield_weight` decimal(50,3) NOT NULL,
  `yields` decimal(50,3) NOT NULL,
  `received_by` varchar(45) NOT NULL,
  `drNo` varchar(50) NOT NULL,
  PRIMARY KEY (`supp_delivery_id`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supp_delivery`
--

LOCK TABLES `supp_delivery` WRITE;
/*!40000 ALTER TABLE `supp_delivery` DISABLE KEYS */;
INSERT INTO `supp_delivery` VALUES (1,3,1,'2018-04-02',1000000.000,850000.000,150000.000,'Lester Ramos','DR111'),(2,2,1,'2018-04-02',1000000.000,950000.000,50000.000,'Lester Ramos','DR111'),(3,1,1,'2018-04-02',1000000.000,980000.000,20000.000,'Lester Ramos','DR111'),(4,6,2,'2018-04-03',1000000.000,990000.000,10000.000,'Jerome DeGuzman','DR112'),(5,5,2,'2018-04-03',1000000.000,950000.000,50000.000,'Jerome DeGuzman','DR112'),(6,4,2,'2018-04-03',1000000.000,800000.000,200000.000,'Jerome DeGuzman','DR112'),(7,7,3,'2018-05-05',15.000,15.000,0.000,'Jenifer Reyes','DR113'),(8,8,3,'2018-05-05',20.000,20.000,0.000,'Jenifer Reyes','DR113'),(9,11,4,'2018-04-05',1500000.000,1300000.000,200000.000,'Barbie Fontanilla','DR114'),(10,10,4,'2018-04-05',1500000.000,1400000.000,100000.000,'Barbie Fontanilla','DR114'),(11,9,4,'2018-04-05',2000000.000,1900000.000,100000.000,'Barbie Fontanilla','DR114'),(12,12,5,'2018-04-08',20.000,20.000,0.000,'Lorlyn Manzano','DR115'),(13,13,5,'2018-04-08',15.000,15.000,0.000,'Lorlyn Manzano','DR115'),(14,14,5,'2018-04-08',15.000,15.000,0.000,'Lorlyn Manzano','DR115'),(15,15,6,'2018-04-12',2000.000,2000.000,0.000,'Rhianna Manzon','DR116'),(16,16,6,'2018-04-12',2000.000,2000.000,0.000,'Rhianna Manzon','DR116'),(17,17,7,'2018-04-13',1700000.000,1400000.000,300000.000,'Barbie Fontanilla','DR117'),(18,18,7,'2018-04-13',1600000.000,1500000.000,100000.000,'Barbie Fontanilla','DR117'),(19,19,7,'2018-04-13',2100.000,2100.000,0.000,'Barbie Fontanilla','DR117'),(20,21,8,'2018-04-13',100000.000,80000.000,20000.000,'Evelyn Gascon','DR117'),(21,22,8,'2018-04-13',1500000.000,1450000.000,50000.000,'Evelyn Gascon','DR117'),(22,20,8,'2018-04-13',1000.000,1000.000,0.000,'Evelyn Gascon','DR117'),(23,26,9,'2018-05-15',2000.000,2000.000,0.000,'Stephanie Gomez','DR118'),(24,23,9,'2018-05-15',40.000,40.000,0.000,'Stephanie Gomez','DR118'),(25,24,9,'2018-05-15',50.000,50.000,0.000,'Stephanie Gomez','DR118'),(26,25,9,'2018-05-15',50.000,50.000,0.000,'Stephanie Gomez','DR118'),(27,27,10,'2018-04-24',2000.000,2000.000,0.000,'Mario Benitez','DR119'),(28,28,10,'2018-04-26',1000000.000,1000000.000,0.000,'Jenifer Reyes','DR119'),(29,29,10,'2018-04-26',1000000.000,1000000.000,0.000,'Jenifer Reyes','DR119'),(30,30,11,'2018-04-30',1000000.000,986000.000,14000.000,'Jerome DeGuzman','DR120'),(31,31,11,'2018-04-30',1000000.000,991000.000,9000.000,'Jerome DeGuzman','DR120'),(32,32,11,'2018-04-30',1000000.000,979000.000,21000.000,'Jerome DeGuzman','DR120'),(33,34,12,'2018-05-11',2000.000,2000.000,0.000,'Mario Benitez','DR121'),(34,33,12,'2018-05-11',2000.000,2000.000,0.000,'Mario Benitez','DR121'),(35,35,13,'2018-05-07',15.000,15.000,0.000,'Evelyn Gascon','DR122'),(36,36,13,'2018-05-07',15.000,15.000,0.000,'Evelyn Gascon','DR122'),(37,37,14,'2018-05-09',1000000.000,989000.000,11000.000,'Rhianna Manzon','DR123'),(38,38,14,'2018-05-09',1000000.000,992000.000,8000.000,'Rhianna Manzon','DR123'),(39,39,15,'2018-05-25',2000.000,2000.000,0.000,'Jenifer Reyes','DR124'),(40,41,16,'2018-04-16',2000.000,2000.000,0.000,'Marife Latayan','DR211'),(41,45,16,'2018-04-16',2000.000,2000.000,0.000,'Marife Latayan','DR211'),(42,44,16,'2018-04-16',2000.000,2000.000,0.000,'Marife Latayan','DR211'),(43,46,16,'2018-04-16',2000.000,2000.000,0.000,'Marife Latayan','DR211'),(44,47,16,'2018-04-16',2000.000,2000.000,0.000,'Marife Latayan','DR211'),(45,43,16,'2018-04-16',2000.000,2000.000,0.000,'Marife Latayan','DR211'),(46,40,16,'2018-04-16',2000.000,2000.000,0.000,'Marife Latayan','DR211'),(47,42,16,'2018-04-16',2000.000,2000.000,0.000,'Marife Latayan','DR211'),(48,55,17,'2018-04-19',2000.000,2000.000,0.000,'Minerva Bisleg','DR212'),(49,59,17,'2018-04-19',2000.000,2000.000,0.000,'Minerva Bisleg','DR212'),(50,52,17,'2018-04-19',2000.000,2000.000,0.000,'Minerva Bisleg','DR212'),(51,50,17,'2018-04-19',2000.000,2000.000,0.000,'Minerva Bisleg','DR212'),(52,51,17,'2018-04-19',2000.000,2000.000,0.000,'Minerva Bisleg','DR212'),(53,53,17,'2018-04-19',2000.000,2000.000,0.000,'Minerva Bisleg','DR212'),(54,48,17,'2018-04-19',2000.000,2000.000,0.000,'Minerva Bisleg','DR212'),(55,49,17,'2018-04-19',2000.000,2000.000,0.000,'Minerva Bisleg','DR212'),(56,56,17,'2018-04-19',2000.000,2000.000,0.000,'Minerva Bisleg','DR212'),(57,58,17,'2018-04-19',2000.000,2000.000,0.000,'Minerva Bisleg','DR212'),(58,54,17,'2018-04-19',2000.000,2000.000,0.000,'Minerva Bisleg','DR212'),(59,60,17,'2018-04-19',2000.000,2000.000,0.000,'Minerva Bisleg','DR212'),(60,57,17,'2018-04-19',2000.000,2000.000,0.000,'Minerva Bisleg','DR212'),(61,61,18,'2018-04-19',1500.000,1500.000,0.000,'Tinango Caguioa','DR213'),(62,62,18,'2018-04-19',1500.000,1500.000,0.000,'Tinango Caguioa','DR213'),(63,63,18,'2018-04-19',1500.000,1500.000,0.000,'Tinango Caguioa','DR213'),(64,64,18,'2018-04-19',1500.000,1500.000,0.000,'Tinango Caguioa','DR213'),(65,65,18,'2018-04-20',1500.000,1500.000,0.000,'Jerome DeGuzman','DR214'),(66,66,18,'2018-04-20',1500.000,1500.000,0.000,'Jerome DeGuzman','DR214'),(67,67,18,'2018-04-20',1500.000,1500.000,0.000,'Jerome DeGuzman','DR214'),(68,68,19,'2018-04-24',1700.000,1700.000,0.000,'Lorlyn Manzano','DR215'),(69,69,19,'2018-04-24',1650.000,1650.000,0.000,'Lorlyn Manzano','DR215'),(70,70,19,'2018-04-24',1550.000,1550.000,0.000,'Lorlyn Manzano','DR215'),(71,71,19,'2018-04-24',1800.000,1800.000,0.000,'Lorlyn Manzano','DR215'),(72,72,19,'2018-04-24',1400.000,1400.000,0.000,'Lorlyn Manzano','DR215'),(73,73,19,'2018-04-24',1450.000,1450.000,0.000,'Lorlyn Manzano','DR215'),(74,74,19,'2018-04-24',1600.000,1600.000,0.000,'Lorlyn Manzano','DR215'),(75,75,19,'2018-04-24',1500.000,1500.000,0.000,'Lorlyn Manzano','DR215'),(76,76,19,'2018-04-24',1400.000,1400.000,0.000,'Lorlyn Manzano','DR215'),(77,77,19,'2018-04-24',1400.000,1400.000,0.000,'Lorlyn Manzano','DR215'),(78,78,20,'2018-05-02',1500.000,1500.000,0.000,'Barbie Fontanilla','DR216'),(79,79,20,'2018-05-02',1500.000,1500.000,0.000,'Barbie Fontanilla','DR216'),(80,80,20,'2018-05-02',1500.000,1500.000,0.000,'Barbie Fontanilla','DR216'),(81,81,20,'2018-05-02',1500.000,1500.000,0.000,'Barbie Fontanilla','DR216'),(82,82,20,'2018-05-02',1500.000,1500.000,0.000,'Barbie Fontanilla','DR216'),(83,83,20,'2018-05-02',1500.000,1500.000,0.000,'Barbie Fontanilla','DR216'),(84,89,22,'2018-05-06',2000.000,2000.000,0.000,'Jerome DeGuzman','DR217'),(85,90,22,'2018-05-06',2000.000,2000.000,0.000,'Jerome DeGuzman','DR217'),(86,91,22,'2018-05-06',2000.000,2000.000,0.000,'Jerome DeGuzman','DR217'),(87,92,22,'2018-05-06',2000.000,2000.000,0.000,'Jerome DeGuzman','DR217'),(88,93,22,'2018-05-06',2000.000,2000.000,0.000,'Jerome DeGuzman','DR217'),(89,94,22,'2018-05-06',2000.000,2000.000,0.000,'Jerome DeGuzman','DR217'),(90,84,21,'2018-05-07',2000.000,2000.000,0.000,'Mario Benitez','DR218'),(91,85,21,'2018-05-07',2000.000,2000.000,0.000,'Mario Benitez','DR218'),(92,86,21,'2018-05-07',2000.000,2000.000,0.000,'Mario Benitez','DR218'),(93,87,21,'2018-05-07',2000.000,2000.000,0.000,'Mario Benitez','DR218'),(94,88,21,'2018-05-07',2000.000,2000.000,0.000,'Mario Benitez','DR218'),(95,95,23,'2018-05-10',1600.000,1600.000,0.000,'Evelyn Gascon','DR219'),(96,96,23,'2018-05-10',1600.000,1600.000,0.000,'Evelyn Gascon','DR219'),(97,97,23,'2018-05-10',1600.000,1600.000,0.000,'Evelyn Gascon','DR219'),(98,98,23,'2018-05-10',1600.000,1600.000,0.000,'Evelyn Gascon','DR219'),(99,99,23,'2018-05-10',1600.000,1600.000,0.000,'Evelyn Gascon','DR219'),(100,100,23,'2018-05-10',1600.000,1600.000,0.000,'Evelyn Gascon','DR219'),(101,101,23,'2018-05-10',1600.000,1600.000,0.000,'Evelyn Gascon','DR219'),(102,102,24,'2018-05-02',1000.000,1000.000,0.000,'Rhianna Manzon','DR220'),(103,103,25,'2018-05-26',2000.000,2000.000,0.000,'Aeneid Adversalo','DR212'),(104,104,25,'2018-05-26',2000.000,2000.000,0.000,'Aeneid Adversalo','DR212'),(105,105,25,'2018-05-26',2000.000,2000.000,0.000,'Aeneid Adversalo','DR212'),(106,106,25,'2018-05-26',2000.000,2000.000,0.000,'Aeneid Adversalo','DR212');
/*!40000 ALTER TABLE `supp_delivery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supp_payment`
--

DROP TABLE IF EXISTS `supp_payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supp_payment` (
  `supp_payment_id` int(50) NOT NULL AUTO_INCREMENT,
  `supp_po_id` int(50) NOT NULL,
  `date` date NOT NULL,
  `amount` decimal(20,2) NOT NULL,
  `bank` varchar(20) NOT NULL,
  PRIMARY KEY (`supp_payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supp_payment`
--

LOCK TABLES `supp_payment` WRITE;
/*!40000 ALTER TABLE `supp_payment` DISABLE KEYS */;
INSERT INTO `supp_payment` VALUES (1,1,'2018-04-04',1081000.00,'BDO'),(2,2,'2018-04-04',2141500.00,'BPI'),(3,3,'2018-05-06',107500.00,'BDO'),(4,4,'2018-05-07',2521500.00,'BDO'),(5,5,'2018-05-09',123500.00,'BPI'),(6,6,'2018-04-13',11000.00,'BDO'),(7,7,'2018-04-14',1212000.00,'BDO'),(8,8,'2018-04-14',414500.00,'Western Union'),(9,9,'2018-04-16',391500.00,'Western Union'),(10,16,'2018-04-17',113000.00,'BDO'),(11,18,'2018-04-23',172500.00,'BDO'),(12,19,'2018-04-25',127350.00,'Western Union'),(13,20,'2018-05-03',130500.00,'BPI'),(14,22,'2018-05-06',177500.00,'BPI'),(15,21,'2018-05-08',69500.01,'Western Union');
/*!40000 ALTER TABLE `supp_payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supp_po`
--

DROP TABLE IF EXISTS `supp_po`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supp_po` (
  `supp_po_id` int(50) NOT NULL AUTO_INCREMENT,
  `supp_id` int(50) NOT NULL,
  `suppPO_date` date NOT NULL,
  `trucking_fee` decimal(20,2) NOT NULL,
  `supp_creditTerm` varchar(45) NOT NULL,
  `total_amount` decimal(20,2) NOT NULL DEFAULT '0.00',
  `delivery_stat` int(11) DEFAULT '0',
  `payment_stat` int(11) DEFAULT '0',
  `partial_stat` int(11) DEFAULT '0',
  `payment` decimal(20,2) DEFAULT NULL,
  `date_archived` date DEFAULT NULL,
  `archive` int(11) DEFAULT '1',
  PRIMARY KEY (`supp_po_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supp_po`
--

LOCK TABLES `supp_po` WRITE;
/*!40000 ALTER TABLE `supp_po` DISABLE KEYS */;
INSERT INTO `supp_po` VALUES (1,1,'2018-04-01',1000.00,'15',1081000.00,1,1,1,1081000.00,NULL,1),(2,2,'2018-04-02',1500.00,'30',2141500.00,1,1,1,2141500.00,NULL,1),(3,11,'2018-05-05',1000.00,'15',107500.00,1,1,1,107500.00,NULL,1),(4,17,'2018-04-04',1500.00,'30',2521500.00,1,1,1,2521500.00,NULL,1),(5,8,'2018-04-06',2000.00,'15',123500.00,1,1,1,123500.00,NULL,1),(6,9,'2018-04-11',1000.00,'15',11000.00,1,1,1,11000.00,NULL,1),(7,5,'2018-04-11',1600.00,'30',1212000.00,1,1,1,1212000.00,NULL,1),(8,5,'2018-04-12',1600.00,'30',414500.00,1,1,1,414500.00,NULL,1),(9,12,'2018-04-14',1700.00,'30',391500.00,1,1,1,391500.00,NULL,1),(10,3,'2018-04-16',350.00,'30',802350.01,1,0,1,NULL,NULL,1),(11,4,'2018-04-24',300.00,'30',1615300.00,1,0,1,NULL,NULL,1),(12,16,'2018-04-30',350.00,'15',20350.00,1,0,1,NULL,NULL,1),(13,13,'2018-04-23',250.00,'15',88750.01,1,0,1,NULL,NULL,1),(14,10,'2018-04-18',200.00,'30',660200.01,1,0,1,NULL,NULL,1),(15,6,'2018-05-22',150.00,'15',14150.00,1,0,1,NULL,NULL,1),(16,19,'2018-04-15',1000.00,'15',113000.00,1,1,1,113000.00,NULL,1),(17,16,'2018-04-17',2000.00,'30',159500.00,1,0,1,NULL,NULL,1),(18,21,'2018-04-18',1500.00,'15',172500.00,1,1,1,172500.00,NULL,1),(19,20,'2018-04-22',100.00,'30',127350.00,1,1,1,127350.00,NULL,1),(20,18,'2018-05-01',1500.00,'30',130500.00,1,1,1,130500.00,NULL,1),(21,15,'2018-05-02',2000.00,'30',69500.01,1,1,1,69500.01,NULL,1),(22,15,'2018-05-05',1500.00,'30',177500.00,1,1,1,177500.00,NULL,1),(23,14,'2018-05-10',1700.00,'15',86300.01,1,0,1,NULL,NULL,1),(24,16,'2018-05-01',1500.00,'15',11500.00,1,0,1,NULL,NULL,1),(25,16,'2018-05-25',1.00,'1',40001.00,1,0,1,NULL,NULL,1);
/*!40000 ALTER TABLE `supp_po` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supp_po_ordered`
--

DROP TABLE IF EXISTS `supp_po_ordered`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supp_po_ordered` (
  `supp_po_ordered_id` int(50) NOT NULL AUTO_INCREMENT,
  `supp_po_id` int(50) NOT NULL,
  `item` varchar(45) NOT NULL,
  `qty` decimal(50,3) NOT NULL,
  `amount` decimal(20,2) NOT NULL,
  `type` varchar(45) NOT NULL DEFAULT 'Type',
  `delivery_stat` varchar(45) DEFAULT '0',
  `payment_stat` varchar(45) DEFAULT '0',
  `payment` decimal(20,2) DEFAULT NULL,
  `received` decimal(50,3) DEFAULT '0.000',
  `categoryx` int(11) DEFAULT NULL,
  `inv_stat` varchar(45) NOT NULL DEFAULT '0',
  `pckng_stat` varchar(45) NOT NULL DEFAULT '0',
  `stckr_stat` varchar(45) NOT NULL DEFAULT '0',
  `mach_stat` varchar(45) NOT NULL DEFAULT '0',
  PRIMARY KEY (`supp_po_ordered_id`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supp_po_ordered`
--

LOCK TABLES `supp_po_ordered` WRITE;
/*!40000 ALTER TABLE `supp_po_ordered` DISABLE KEYS */;
INSERT INTO `supp_po_ordered` VALUES (1,1,'Guatemela',1000000.000,250000.00,'light roast','1','0',NULL,1000000.000,1,'0','0','0','0'),(2,1,'Guatemela',1000000.000,380000.00,'medium roast','1','0',NULL,1000000.000,1,'0','0','0','0'),(3,1,'Guatemela',1000000.000,450000.00,'city roast','1','0',NULL,1000000.000,1,'0','0','0','0'),(4,2,'Barako',1000000.000,460000.00,'city roast','1','0',NULL,1000000.000,1,'0','0','0','0'),(5,2,'Barako',1000000.000,360000.00,'medium roast','1','0',NULL,1000000.000,1,'0','0','0','0'),(6,2,'Barako',1000000.000,250000.00,'light roast','1','0',NULL,1000000.000,1,'0','0','0','0'),(7,3,'Percolator',15.000,31500.00,'Double Cup Espresso','1','0',NULL,15.000,4,'0','0','0','0'),(8,3,'AVR',20.000,75000.00,'Triple Cup Espresso','1','0',NULL,20.000,4,'0','0','0','0'),(9,4,'Benguet',2000000.000,360000.00,'light roast','1','0',NULL,2000000.000,1,'0','0','0','0'),(10,4,'Benguet',1500000.000,375000.00,'medium roast','1','0',NULL,1500000.000,1,'0','0','0','0'),(11,4,'Benguet',1500000.000,525000.00,'city roast','1','0',NULL,1500000.000,1,'0','0','0','0'),(12,5,'Grato',20.000,56000.00,'Double Cup Espresso','1','0',NULL,20.000,4,'0','0','0','0'),(13,5,'Bunn',15.000,25500.00,'Single Cup Espresso','1','0',NULL,15.000,4,'0','0','0','0'),(14,5,'Bravilor',15.000,40500.00,'Double Cup Espresso','1','0',NULL,15.000,4,'0','0','0','0'),(15,6,'clear bag',2000.000,4000.00,'250','1','0',NULL,2000.000,2,'0','1','0','0'),(16,6,'brown bag',2000.000,6000.00,'250','1','0',NULL,2000.000,2,'0','0','0','0'),(17,7,'Sumatra',1700000.000,816000.00,'city roast','1','0',NULL,1700000.000,1,'0','0','0','0'),(18,7,'Robusta',1600000.000,384000.00,'light roast','1','0',NULL,1600000.000,1,'0','0','0','0'),(19,7,'brown bag',2100.000,10500.00,'500','1','0',NULL,2100.000,2,'0','0','0','0'),(20,8,'brown bag',1000.000,5000.00,'500','1','0',NULL,1000.000,2,'0','0','0','0'),(21,8,'Sumatra',100000.000,48000.00,'city roast','1','0',NULL,100000.000,1,'0','0','0','0'),(22,8,'Robusta',1500000.000,360000.00,'light roast','1','0',NULL,1500000.000,1,'0','0','0','0'),(23,9,'Saeco',40.000,112000.00,'Double Cup Espresso','1','0',NULL,40.000,4,'0','0','0','0'),(24,9,'Lirika',50.000,95000.00,'Single Cup Espresso','1','0',NULL,50.000,4,'0','0','0','0'),(25,9,'Colet',50.000,175000.00,'Triple Cup Espresso','1','0',NULL,50.000,4,'0','0','0','0'),(26,9,'clear bag',2000.000,8000.00,'500','1','0',NULL,2000.000,2,'0','0','0','0'),(27,10,'clear bag',2000.000,12000.00,'1000','1','0',NULL,2000.000,2,'0','0','0','0'),(28,10,'Robusta',1000000.000,340000.00,'medium roast','1','0',NULL,1000000.000,1,'0','0','0','0'),(29,10,'Robusta',1000000.000,450000.00,'city roast','1','0',NULL,1000000.000,1,'0','0','0','0'),(30,11,'Colombia',1000000.000,415000.00,'light roast','1','0',NULL,1000000.000,1,'0','0','0','0'),(31,11,'Colombia',1000000.000,560000.00,'medium roast','1','0',NULL,1000000.000,1,'0','0','0','0'),(32,11,'Colombia',1000000.000,640000.00,'city roast','1','0',NULL,1000000.000,1,'0','0','0','0'),(33,12,'Le Chef Southwoods Sticker',2000.000,10000.00,'paper','1','0',NULL,2000.000,3,'0','0','0','0'),(34,12,'Le Chef Golf Sticker',2000.000,10000.00,'paper','1','0',NULL,2000.000,3,'0','0','0','0'),(35,13,'Piccolina',15.000,51000.00,'Triple Cup Espresso','1','0',NULL,15.000,4,'0','0','0','0'),(36,13,'Piccolina',15.000,37500.00,'Double Cup Espresso','1','0',NULL,15.000,4,'0','0','0','0'),(37,14,'Sumatra',1000000.000,270000.00,'light roast','1','0',NULL,1000000.000,1,'0','0','0','0'),(38,14,'Sumatra',1000000.000,390000.00,'medium roast','1','0',NULL,1000000.000,1,'0','0','0','0'),(39,15,'brown bag',2000.000,14000.00,'1000','1','0',NULL,2000.000,2,'0','0','0','0'),(40,16,'Wack Wack Sticker',2000.000,16000.00,'paper','1','0',NULL,2000.000,3,'0','0','0','0'),(41,16,'Mabuhay Blend Sticker',2000.000,10000.00,'paper','1','0',NULL,2000.000,3,'0','0','0','0'),(42,16,'Le Chef Manor Sticker',2000.000,16000.00,'plastic','1','0',NULL,2000.000,3,'0','0','0','0'),(43,16,'Kintetsu World Express Sticker',2000.000,20000.00,'vinyl','1','0',NULL,2000.000,3,'0','0','0','0'),(44,16,'Kalayaan Blend Sticker',2000.000,10000.00,'paper','1','0',NULL,2000.000,3,'0','0','0','0'),(45,16,'Fiesta Blend Sticker',2000.000,10000.00,'paper','1','0',NULL,2000.000,3,'0','0','0','0'),(46,16,'Eurotel Sticker',2000.000,20000.00,'vinyl','1','0',NULL,2000.000,3,'0','0','0','0'),(47,16,'ABS CBN Sticker',2000.000,10000.00,'paper','1','0',NULL,2000.000,3,'0','0','0','0'),(48,17,'Lemon and Olives Sticker',2000.000,10000.00,'paper','1','0',NULL,2000.000,3,'0','0','0','0'),(49,17,'Le Festin Trading Sticker',2000.000,10000.00,'paper','1','0',NULL,2000.000,3,'0','0','0','0'),(50,17,'Le Chef Southwoods Sticker',2000.000,10000.00,'paper','1','0',NULL,2000.000,3,'0','0','0','0'),(51,17,'Le Chef Paranaque Sticker',2000.000,10000.00,'paper','1','0',NULL,2000.000,3,'0','0','0','0'),(52,17,'Le Chef Golf Sticker',2000.000,10000.00,'paper','1','0',NULL,2000.000,3,'0','0','0','0'),(53,17,'Le Chef Accounting Sticker',2000.000,10000.00,'paper','1','0',NULL,2000.000,3,'0','0','0','0'),(54,17,'La Parilla Sticker',2000.000,20000.00,'paper','1','0',NULL,2000.000,3,'0','0','0','0'),(55,17,'Guatemela Rainforest Sticker',2000.000,10000.00,'paper','1','0',NULL,2000.000,3,'0','0','0','0'),(56,17,'Citrus Restaurant Sticker',2000.000,16000.00,'plastic','1','0',NULL,2000.000,3,'0','0','0','0'),(57,17,'Camp John Hay Golf Club Sticker',2000.000,16000.00,'plastic','1','0',NULL,2000.000,3,'0','0','0','0'),(58,17,'Blackwoods Sticker',2000.000,10000.00,'paper','1','0',NULL,2000.000,3,'0','0','0','0'),(59,17,'ATACOGMAC Sticker',2000.000,10000.00,'paper','1','0',NULL,2000.000,3,'0','0','0','0'),(60,17,'Amelie Hotel Sticker',2000.000,16000.00,'plastic','1','0',NULL,2000.000,3,'0','0','0','0'),(61,18,'Professor Valentino Macanes Sticker',1500.000,7500.00,'paper','1','0',NULL,1500.000,3,'0','0','0','0'),(62,18,'GMA Sticker',1500.000,15000.00,'paper','1','0',NULL,1500.000,3,'0','0','0','0'),(63,18,'Escala Sticker',1500.000,12000.00,'plastic','1','0',NULL,1500.000,3,'0','0','0','0'),(64,18,'Cosys Cafe and Roasterie Sticker',1500.000,12000.00,'plastic','1','0',NULL,1500.000,3,'0','0','0','0'),(65,18,'Connies Kitchen Sticker',1500.000,12000.00,'plastic','1','0',NULL,1500.000,3,'0','0','0','0'),(66,18,'Best Western Oxford Suites Sticker',1500.000,12000.00,'paper','1','0',NULL,1500.000,3,'0','0','0','0'),(67,18,'Baguio Country Club Sticker',1500.000,15000.00,'paper','1','0',NULL,1500.000,3,'0','0','0','0'),(68,19,'She Sticker',1700.000,13600.00,'plastic','1','0',NULL,1700.000,3,'0','0','0','0'),(69,19,'Lighthouse Marina Resort Sticker',1650.000,8250.00,'paper','1','0',NULL,1650.000,3,'0','0','0','0'),(70,19,'Kahuna Beach Resort and Spa Sticker',1550.000,12400.00,'paper','1','0',NULL,1550.000,3,'0','0','0','0'),(71,19,'Gweilo Corp Sticker',1800.000,14400.00,'plastic','1','0',NULL,1800.000,3,'0','0','0','0'),(72,19,'Gerrys Grill Purchasing Sticker',1400.000,14000.00,'vinyl','1','0',NULL,1400.000,3,'0','0','0','0'),(73,19,'Fil Estate Sticker',1450.000,11600.00,'paper','1','0',NULL,1450.000,3,'0','0','0','0'),(74,19,'Edwin Hui Sticker',1600.000,12800.00,'paper','1','0',NULL,1600.000,3,'0','0','0','0'),(75,19,'Bread House Sticker',1500.000,15000.00,'vinyl','1','0',NULL,1500.000,3,'0','0','0','0'),(76,19,'Bote Central Roasting Sticker',1400.000,11200.00,'paper','1','0',NULL,1400.000,3,'0','0','0','0'),(77,19,'Bloomfield Patch Cafe Sticker',1400.000,14000.00,'vinyl','1','0',NULL,1400.000,3,'0','0','0','0'),(78,20,'Marios Restaurant Manila Sticker',1500.000,15000.00,'vinyl','1','0',NULL,1500.000,3,'0','0','0','0'),(79,20,'Marios Restaurant Baguio Sticker',1500.000,12000.00,'paper','1','0',NULL,1500.000,3,'0','0','0','0'),(80,20,'Espresso Blend Sticker',1500.000,7500.00,'paper','1','0',NULL,1500.000,3,'0','0','0','0'),(81,20,'Cafe de Manor Sticker',1500.000,15000.00,'vinyl','1','0',NULL,1500.000,3,'0','0','0','0'),(82,20,'Breakfast Blend Sticker',1500.000,7500.00,'paper','1','0',NULL,1500.000,3,'0','0','0','0'),(83,20,'Bowknot Brewery Sticker',1500.000,7500.00,'paper','1','0',NULL,1500.000,3,'0','0','0','0'),(84,21,'Cordillera Sunrise Sticker',2000.000,10000.00,'paper','1','0',NULL,2000.000,3,'0','0','0','0'),(85,21,'Chefs Blend Sticker',2000.000,10000.00,'paper','1','0',NULL,2000.000,3,'0','0','0','0'),(86,21,'Cafe de Seoul Sticker',2000.000,16000.00,'paper','1','0',NULL,2000.000,3,'0','0','0','0'),(87,21,'Cafe Caw Sticker',2000.000,16000.00,'plastic','1','0',NULL,2000.000,3,'0','0','0','0'),(88,21,'Bote Central Sticker',2000.000,16000.00,'paper','1','0',NULL,2000.000,3,'0','0','0','0'),(89,22,'La Tienda Sticker',2000.000,20000.00,'paper','1','0',NULL,2000.000,3,'0','0','0','0'),(90,22,'Keiffeir Coffee Shop Sticker',2000.000,16000.00,'paper','1','0',NULL,2000.000,3,'0','0','0','0'),(91,22,'Hapi Bakery and Mami House Sticker',2000.000,16000.00,'paper','1','0',NULL,2000.000,3,'0','0','0','0'),(92,22,'Gerrys Grill Treasury Sticker',2000.000,16000.00,'paper','1','0',NULL,2000.000,3,'0','0','0','0'),(93,22,'Forest Hills Sticker',2000.000,10000.00,'paper','1','0',NULL,2000.000,3,'0','0','0','0'),(94,22,'Cordillera Sunrise Sticker',2000.000,10000.00,'paper','1','0',NULL,2000.000,3,'0','0','0','0'),(95,23,'Sumatra Night Sticker',1600.000,8000.00,'paper','1','0',NULL,1600.000,3,'0','0','0','0'),(96,23,'La Casa Blanca Sticker',1600.000,12800.00,'paper','1','0',NULL,1600.000,3,'0','0','0','0'),(97,23,'John Hay Water System Inc Sticker',1600.000,12800.00,'plastic','1','0',NULL,1600.000,3,'0','0','0','0'),(98,23,'Grumpy Joe Sticker',1600.000,12800.00,'paper','1','0',NULL,1600.000,3,'0','0','0','0'),(99,23,'Colleen Curran Sticker',1600.000,12800.00,'plastic','1','0',NULL,1600.000,3,'0','0','0','0'),(100,23,'Canto Restaurant Sticker',1600.000,12800.00,'paper','1','0',NULL,1600.000,3,'0','0','0','0'),(101,23,'Bioessence Sticker',1600.000,12800.00,'plastic','1','0',NULL,1600.000,3,'0','0','0','0'),(102,24,'Le Chef Southwoods Sticker',1000.000,5000.00,'paper','1','0',NULL,1000.000,3,'0','0','0','0'),(103,25,'Le Chef Accounting Sticker',2000.000,10000.00,'paper','1','0',NULL,2000.000,3,'0','0','0','0'),(104,25,'Le Chef Paranaque Sticker',2000.000,10000.00,'paper','1','0',NULL,2000.000,3,'0','0','0','0'),(105,25,'Le Chef Golf Sticker',2000.000,10000.00,'paper','1','0',NULL,2000.000,3,'0','0','0','0'),(106,25,'Le Chef Southwoods Sticker',2000.000,10000.00,'paper','1','0',NULL,2000.000,3,'0','0','0','0');
/*!40000 ALTER TABLE `supp_po_ordered` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supp_temp_po`
--

DROP TABLE IF EXISTS `supp_temp_po`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supp_temp_po` (
  `id_supp_temp_PO` int(50) NOT NULL AUTO_INCREMENT,
  `supp_name` varchar(45) NOT NULL,
  `date` date NOT NULL,
  `trucking_fee` decimal(20,2) NOT NULL,
  `credit_term` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  PRIMARY KEY (`id_supp_temp_PO`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supp_temp_po`
--

LOCK TABLES `supp_temp_po` WRITE;
/*!40000 ALTER TABLE `supp_temp_po` DISABLE KEYS */;
INSERT INTO `supp_temp_po` VALUES (14,'Porta Vaga Stall','2018-05-24',1500.00,'15','arlene'),(42,'Baguio City Graphics and Design','2018-05-11',55.00,'15','minerva');
/*!40000 ALTER TABLE `supp_temp_po` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supp_temp_po_order`
--

DROP TABLE IF EXISTS `supp_temp_po_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supp_temp_po_order` (
  `idsupp_temp_po_order` int(50) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(50) NOT NULL,
  `qty` decimal(50,3) NOT NULL,
  `type` varchar(20) NOT NULL,
  `unitPrice` decimal(20,2) NOT NULL,
  `amount` decimal(20,2) NOT NULL,
  `categoryx` int(11) DEFAULT NULL,
  `username` varchar(45) NOT NULL,
  PRIMARY KEY (`idsupp_temp_po_order`)
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supp_temp_po_order`
--

LOCK TABLES `supp_temp_po_order` WRITE;
/*!40000 ALTER TABLE `supp_temp_po_order` DISABLE KEYS */;
INSERT INTO `supp_temp_po_order` VALUES (110,'Eurotel Sticker',15.000,'vinyl',10.00,150.00,3,'minerva');
/*!40000 ALTER TABLE `supp_temp_po_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supplier` (
  `sup_id` int(11) NOT NULL AUTO_INCREMENT,
  `sup_productID` int(11) NOT NULL,
  `sup_company` varchar(70) NOT NULL,
  `sup_lname` varchar(50) NOT NULL,
  `sup_fname` varchar(50) NOT NULL,
  `sup_position` varchar(50) NOT NULL,
  `sup_address` varchar(100) NOT NULL,
  `sup_email` varchar(50) NOT NULL,
  `sup_contact` varchar(12) NOT NULL,
  `sup_activation` int(11) NOT NULL DEFAULT '1',
  `date_reg` date DEFAULT NULL,
  PRIMARY KEY (`sup_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplier`
--

LOCK TABLES `supplier` WRITE;
/*!40000 ALTER TABLE `supplier` DISABLE KEYS */;
INSERT INTO `supplier` VALUES (1,0,'Alterra Coffee Roasters','Mars','Franklin','CEO','Milwaukee, Wisconsin, US','alterracoffee@gmail.com','09562548963',1,'2018-05-24'),(2,0,'An Giang Coffee','Giang','An','Owner','Long Thành, Vietnam','angiangcoffee@gmail.com','09369854625',1,'2018-05-24'),(3,0,'Bridgehead Coffee','Bradley','Simon','Owner','Ottawa, Ontario, Canada','bridgehead@gmail.com','09635478523',1,'2018-05-24'),(4,0,'Cafe Bom Dia','Thompson','Olive','CEO','Rio, Brazil','cafebom@gmail.com','09547863254',1,'2018-05-24'),(5,0,'Caffe Vita Coffee Roasting Company','Scott','Ervin','COO','Seattle, Washington, US','caffevitacoffee@gmail.com','09645231569',1,'2018-05-24'),(6,0,'X-po General Merchandise','Balisi','Henry','Sales Agent','#602 Bokawkan Rd. Baguio City','balisi@gmail.com','09269044318',1,'2018-05-24'),(7,0,'Allegro Enterprise','Angala','Antonio','Sales Agent','3803 Dayap cor. Cuenca St., Palanan, Makati City, Metro Manila 1235','antoioangeles@gmail.com','09214271227',1,'2018-05-24'),(8,0,'Nero Coffee Machine Company','Verano','Crismel','CEO','Manila, Philippines','crismelverano@gmail.com','09215644337',1,'2018-05-24'),(9,0,'Diedrich Packaging Enterprise','McCarthy','Sean','Chief Financial Officer','Irvine, California, US','seanmccarthy@gmail.com','09327861443',1,'2018-05-24'),(10,0,'Black Ivory Coffee','Dinkin','Blake','President','Bangkok Thailand ','blackivorycoffee@gmail.com','09457654356',1,'2018-05-24'),(11,0,'Blendz Coffee Machine Inc.','Arsossy','Mel','President','Bangkok Thailand ','blendzcoffeemachine@gmail.com','09456546456',1,'2018-05-24'),(12,0,'Cafe Coffee Machine Inc','Ortega','Jana','CEO','Bengaluru India','janaortege@gmail.com','09496574556',1,'2018-05-24'),(13,0,'Bourbon Coffee Machines','Bourbon','Lenie','CEO','Ontarion, Canada','bourbonmachines@gmail.com','09496512986',1,'2018-05-24'),(14,0,'Coop Kaffe Stickers Enterprise','Pope','Woodrow','Owner','Baguio City, Philippines','woodrow@gmail.com','09578469884',1,'2018-05-24'),(15,0,'Dunn Bros Sticker Press','Dunn','Joseph','Founder','Manila, Philippines','dunnbros@gmail.com','09587235647',1,'2018-05-24'),(16,0,'Gimme! Stickers Printing','Grimmie','Stephanie','Owner','Baguio City, Philippines','gimmestickers@gmail.com','09654879652',1,'2018-05-24'),(17,0,'Mr. Beans Enterprise','Fernandez','Neil','CEO','Baguio City, Philippines','coffeepack@gmail.com','09534014470',1,'2018-05-24'),(18,0,'Porta Vaga Stall ','Marianno','Emillio','Owner','Upper Session Road Baguio, City','marinno_emil@gmail.com','09486522954',1,'2018-05-08'),(19,0,'Baguio City Graphics and Design','Lizardo','Joseph','Manager','\r\n1 Shuntug Street, corner Abanao Street (2.02 mi)\r\nBaguio City 2600','joseph_5236@yahoo.com','09176239855',1,'2018-04-10'),(20,0,'Rush Wiz Printing Shop','Opasdo','Edgardo','Owner','Lower Bonifacio Street, Baguio, City','opasdoo@gmail.com','09206522297',1,'2018-03-15'),(21,0,'Baguio Allied Printers & General Merchandise','Fajardo','Melannie Mae','Owner','3 Urbano Street, Baguio City','melanmae_fajardo@gmail.com','09176325684',1,'2018-03-19');
/*!40000 ALTER TABLE `supplier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supplier_delivery`
--

DROP TABLE IF EXISTS `supplier_delivery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supplier_delivery` (
  `sup_deliveryID` int(11) NOT NULL AUTO_INCREMENT,
  `supPO_id` int(11) NOT NULL,
  `supDelivery_stat` varchar(20) NOT NULL,
  `date_recieved` date NOT NULL,
  `yield_weight` int(11) NOT NULL,
  `yield` int(11) NOT NULL,
  `recieved_by` varchar(50) NOT NULL,
  PRIMARY KEY (`sup_deliveryID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplier_delivery`
--

LOCK TABLES `supplier_delivery` WRITE;
/*!40000 ALTER TABLE `supplier_delivery` DISABLE KEYS */;
/*!40000 ALTER TABLE `supplier_delivery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supplier_po`
--

DROP TABLE IF EXISTS `supplier_po`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supplier_po` (
  `supPO_id` int(11) NOT NULL AUTO_INCREMENT,
  `sup_id` int(11) NOT NULL,
  `supPO_date` date NOT NULL,
  `supPO_qty` int(11) NOT NULL,
  `truck_fee` int(11) NOT NULL,
  `sup_credit` text NOT NULL,
  `total_item` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `sup_delivery` varchar(20) NOT NULL DEFAULT 'pending',
  `supPayment_stat` varchar(20) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`supPO_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplier_po`
--

LOCK TABLES `supplier_po` WRITE;
/*!40000 ALTER TABLE `supplier_po` DISABLE KEYS */;
/*!40000 ALTER TABLE `supplier_po` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trans_mach`
--

DROP TABLE IF EXISTS `trans_mach`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trans_mach` (
  `tmach_id` int(11) NOT NULL AUTO_INCREMENT,
  `mach_id` int(11) DEFAULT NULL,
  `trans_id` int(11) NOT NULL,
  `quantity` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`tmach_id`),
  KEY `mach_trans_idx` (`mach_id`),
  KEY `mach_to_mtm_idx` (`mach_id`),
  KEY `mach_trans_idx1` (`trans_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trans_mach`
--

LOCK TABLES `trans_mach` WRITE;
/*!40000 ALTER TABLE `trans_mach` DISABLE KEYS */;
INSERT INTO `trans_mach` VALUES (1,NULL,33,NULL),(2,NULL,34,NULL),(3,NULL,35,NULL),(4,NULL,36,NULL),(5,NULL,37,NULL),(6,NULL,38,NULL),(7,NULL,39,NULL),(8,NULL,40,NULL),(9,NULL,41,NULL),(10,NULL,42,NULL),(11,NULL,43,NULL),(12,NULL,44,NULL),(13,NULL,45,NULL),(14,NULL,51,NULL),(15,NULL,38,NULL),(16,NULL,39,NULL),(17,NULL,40,NULL),(18,NULL,41,NULL),(19,NULL,42,NULL),(20,NULL,43,NULL),(21,NULL,46,NULL),(22,NULL,47,NULL),(23,NULL,50,NULL),(24,NULL,56,NULL),(25,NULL,60,NULL),(26,NULL,61,NULL),(27,NULL,62,NULL),(28,NULL,63,NULL),(29,NULL,64,NULL),(30,NULL,65,NULL),(31,NULL,76,NULL),(32,NULL,77,NULL);
/*!40000 ALTER TABLE `trans_mach` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trans_pack`
--

DROP TABLE IF EXISTS `trans_pack`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trans_pack` (
  `tp_id` int(11) NOT NULL AUTO_INCREMENT,
  `trans_id` int(11) NOT NULL,
  `package_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`tp_id`),
  KEY `t_pack_idx` (`package_id`),
  KEY `t_pack_transact_idx` (`trans_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trans_pack`
--

LOCK TABLES `trans_pack` WRITE;
/*!40000 ALTER TABLE `trans_pack` DISABLE KEYS */;
INSERT INTO `trans_pack` VALUES (1,33,6,1),(2,34,6,1),(3,35,2,2),(4,36,2,2),(5,37,1,2),(6,38,5,1),(7,39,5,1),(8,40,5,1),(9,41,5,1),(10,42,4,1),(11,43,3,1),(12,44,3,1),(13,45,4,1),(14,51,1,1),(15,38,1,1),(16,39,6,5),(17,40,6,5),(18,41,6,5),(19,42,6,5),(20,43,1,10),(21,46,1,1),(22,47,1,10),(23,50,1,5),(24,56,1,3),(25,60,3,1),(26,61,1,1),(27,62,1,1),(28,63,5,1),(29,64,5,2),(30,65,1,2),(31,76,4,250),(32,77,1,250);
/*!40000 ALTER TABLE `trans_pack` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trans_raw`
--

DROP TABLE IF EXISTS `trans_raw`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trans_raw` (
  `tr_id` int(11) NOT NULL AUTO_INCREMENT,
  `trans_id` int(11) NOT NULL,
  `raw_coffeeid` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `stat` varchar(45) DEFAULT NULL,
  `inv_stat` varchar(45) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tr_id`),
  KEY `transact_idx` (`trans_id`),
  KEY `raw_idx` (`raw_coffeeid`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trans_raw`
--

LOCK TABLES `trans_raw` WRITE;
/*!40000 ALTER TABLE `trans_raw` DISABLE KEYS */;
INSERT INTO `trans_raw` VALUES (1,1,1,850000,NULL,'0'),(2,1,2,950000,NULL,'0'),(3,1,3,980000,NULL,'0'),(4,2,4,990000,NULL,'0'),(5,2,11,950000,NULL,'0'),(6,2,12,800000,NULL,'0'),(7,3,13,1300000,NULL,'0'),(8,3,14,1400000,NULL,'0'),(9,3,15,1900000,NULL,'0'),(10,4,5,1400000,NULL,'0'),(11,4,10,1500000,NULL,'0'),(12,5,5,80000,NULL,'0'),(13,5,10,1450000,NULL,'0'),(14,6,9,1000000,NULL,'0'),(15,6,8,1000000,NULL,'0'),(16,7,18,986000,NULL,'0'),(17,7,17,991000,NULL,'0'),(18,7,16,979000,NULL,'0'),(19,8,7,989000,NULL,'0'),(20,8,6,992000,NULL,'0');
/*!40000 ALTER TABLE `trans_raw` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trans_stick`
--

DROP TABLE IF EXISTS `trans_stick`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trans_stick` (
  `tstick_id` int(11) NOT NULL AUTO_INCREMENT,
  `sticker_id` int(11) DEFAULT NULL,
  `trans_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`tstick_id`),
  KEY `stick_trans_idx` (`sticker_id`),
  KEY `stick_trans2_idx` (`trans_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trans_stick`
--

LOCK TABLES `trans_stick` WRITE;
/*!40000 ALTER TABLE `trans_stick` DISABLE KEYS */;
INSERT INTO `trans_stick` VALUES (1,0,33,1),(2,0,34,1),(3,30,35,2),(4,30,36,2),(5,25,37,2),(6,38,38,1),(7,38,39,1),(8,38,40,1),(9,16,41,1),(10,55,42,1),(11,0,43,1),(12,0,44,1),(13,55,45,1),(14,8,51,1),(15,8,38,1),(16,11,39,5),(17,11,40,5),(18,11,41,5),(19,11,42,5),(20,8,43,10),(21,2,46,1),(22,47,47,10),(23,3,50,5),(24,3,56,3),(25,5,60,1),(26,8,61,1),(27,8,62,1),(28,31,63,1),(29,35,64,2),(30,2,65,2),(31,20,76,250),(32,60,77,250);
/*!40000 ALTER TABLE `trans_stick` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transac_history`
--

DROP TABLE IF EXISTS `transac_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transac_history` (
  `transac_id` int(11) NOT NULL AUTO_INCREMENT,
  `supp_po_id` varchar(45) NOT NULL,
  `date_received` date NOT NULL,
  `date_payment` date NOT NULL,
  PRIMARY KEY (`transac_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transac_history`
--

LOCK TABLES `transac_history` WRITE;
/*!40000 ALTER TABLE `transac_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `transac_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `user_no` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `u_lname` varchar(50) NOT NULL,
  `u_fname` varchar(50) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_contact` varchar(12) NOT NULL,
  `u_address` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL DEFAULT 'jhcs',
  `u_activation` int(11) NOT NULL DEFAULT '1',
  `u_type` varchar(45) NOT NULL,
  PRIMARY KEY (`user_no`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','','','','','','admin',1,'admin'),(2,'arlene','Ruelos','Arlene','arlene','09067275881','#64 Dontogan Baguio City','arlene',1,'admin'),(3,'jules','Tomines','Jules','jules@gmail.com','09068521451','#21 Bakakeng, Baguio City','jules',1,'inventory'),(4,'jenifer','Reyes','Jenifer','jenifer@gmail.com','09015247863','#6 Bonifacio street, Baguio City ','jenifer',1,'sales'),(5,'aeneid','Adversalo','Aeneid','aeneid.adversalo@gmail.com','09771863559','#55 bakakeng, Baguio City','aeneid',1,'inventory'),(6,'mario','Benitez','Mario','mario@gmail.com','09058456387','#13 Quirino Hill, Baguio City','mario',1,'admin'),(7,'grace','Mendoza','Grace','grace@gmail.com','09057846921','#91 Loakan, Baguio City','jhcs',1,'sales'),(8,'lester','Ramos','Lester','lester@gmail.com','09058456387','#66 Ambiong, Baguio City','jhcs',1,'inventory'),(9,'stephanie','Gomez','Stephanie','stephanie@gmail.com','09058764823','#122 San Carlos, Baguio City','jhcs',1,'sales'),(10,'jerome','DeGuzman','Jerome','jerome@gmail.com','09068413584','#83 Aurora Hill, Baguio City','jhcs',1,'inventory'),(11,'rhianna','Manzon','Rhianna','rhianna@gmail.com','09215478691','#33 Trancoville, Baguio City','jhcs',1,'sales'),(12,'barbie','Fontanilla','Barbie','barbie@gmail.com','09364852179','#194 Tuba, Benguet','jhcs',1,'sales'),(13,'tinang','Caguioa','Tinango','tinzcaguioa1997@gmail.com','09098457841','#123 Dontogan, Baguio City','tintin',1,'sales'),(14,'marife','Latayan','Marife','marife@gmail.com','09054841214','#25 Loakan, Baguio City','marife',1,'admin'),(15,'evelyn','Gascon','Evelyn','evelyn@gmail.com','09215487639','#55 Marcos, Baguio City','jhcs',1,'admin'),(16,'lorlyn','Manzano','Lorlyn','lorlyn@gmail.com','09854756321','#22 tabuyaw, Beguet','jhcs',1,'sales'),(17,'marilou','Baldon','Marilou','marilou@gmail.com','09264875123','#167 New Lucban, Baguio City','jhcs',1,'inventory'),(18,'minerva','Bisleg','Minerva','minerva@gmail.com','09845236245','#89 Bonifacio Street, Baguio City','jhcs',1,'inventory');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `walkin_raw`
--

DROP TABLE IF EXISTS `walkin_raw`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `walkin_raw` (
  `wiraw_id` int(11) NOT NULL AUTO_INCREMENT,
  `walkin_id` int(11) NOT NULL,
  `raw_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`wiraw_id`),
  KEY `raw_wiraw_idx` (`raw_id`),
  KEY `walk_wiraw_idx` (`walkin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `walkin_raw`
--

LOCK TABLES `walkin_raw` WRITE;
/*!40000 ALTER TABLE `walkin_raw` DISABLE KEYS */;
/*!40000 ALTER TABLE `walkin_raw` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `walkin_sales`
--

DROP TABLE IF EXISTS `walkin_sales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `walkin_sales` (
  `walkin_id` int(11) NOT NULL AUTO_INCREMENT,
  `walkin_date` date NOT NULL,
  `walkin_qty` int(11) NOT NULL,
  `walkin_returns` int(11) NOT NULL DEFAULT '0',
  `coff_remark` varchar(80) NOT NULL DEFAULT 'Received',
  `blend_id` int(11) NOT NULL,
  `sticker_id` int(11) DEFAULT NULL,
  `inv_stat` varchar(45) NOT NULL DEFAULT '0',
  `pckng_stat` varchar(45) NOT NULL DEFAULT '0',
  `stckr_stat` varchar(45) NOT NULL DEFAULT '0',
  PRIMARY KEY (`walkin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `walkin_sales`
--

LOCK TABLES `walkin_sales` WRITE;
/*!40000 ALTER TABLE `walkin_sales` DISABLE KEYS */;
INSERT INTO `walkin_sales` VALUES (1,'2018-04-01',2,2,'Returned',93,NULL,'0','1','1'),(2,'2018-04-01',1,0,'Received',89,NULL,'0','1','1'),(3,'2018-05-24',1,1,'Returned',1,NULL,'1','1','1'),(4,'2018-05-24',2,0,'Received',3,NULL,'1','1','1'),(5,'2018-04-03',2,0,'Received',7,NULL,'1','1','1'),(6,'2018-05-01',1,0,'Received',1,NULL,'1','1','1'),(7,'2018-05-01',3,0,'Received',7,NULL,'1','1','1'),(8,'2018-05-01',1,0,'Received',11,NULL,'1','1','1'),(9,'2018-05-24',1,1,'Returned',4,NULL,'1','1','1'),(10,'2018-04-04',1,0,'Received',18,NULL,'0','1','1'),(11,'2018-05-24',2,0,'Received',66,NULL,'0','1','1'),(12,'2018-05-24',1,1,'Returned',82,NULL,'0','1','1'),(13,'2018-05-24',1,0,'Received',1,NULL,'1','1','1'),(14,'2018-05-25',1,0,'Received',1,NULL,'1','1','1'),(15,'2018-05-25',5,0,'Received',6,NULL,'1','1','1'),(16,'2018-05-25',5,0,'Received',6,NULL,'1','1','1'),(17,'2018-05-25',5,0,'Received',6,NULL,'1','1','1'),(18,'2018-05-25',5,0,'Received',6,NULL,'1','1','1'),(19,'2018-05-24',10,0,'Received',1,NULL,'1','1','1'),(20,'2018-05-25',10,0,'Received',104,NULL,'0','1','0'),(21,'2018-05-25',5,0,'Received',7,NULL,'0','1','0'),(22,'2018-04-25',1,0,'Received',56,NULL,'0','0','0'),(23,'2018-05-25',2,0,'Received',91,NULL,'0','1','0'),(24,'2018-05-25',1,0,'Received',89,NULL,'0','0','0'),(25,'2018-04-19',1,0,'Received',107,NULL,'0','0','0'),(26,'2018-04-19',2,0,'Received',108,NULL,'0','0','0'),(27,'2018-05-25',2,0,'Received',1,NULL,'1','1','0');
/*!40000 ALTER TABLE `walkin_sales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'jhcs'
--

--
-- Dumping routines for database 'jhcs'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-26 14:14:33
