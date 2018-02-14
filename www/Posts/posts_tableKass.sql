-- MySQL dump 10.13  Distrib 5.7.21, for osx10.12 (x86_64)
--
-- Host: 127.0.0.1    Database: posts
-- ------------------------------------------------------
-- Server version	5.7.21

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
-- Table structure for table `posts_table`
--

DROP TABLE IF EXISTS `posts_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `nb_like` int(4) DEFAULT NULL,
  `nb_fav` int(4) DEFAULT NULL,
  `nb_comments` int(4) DEFAULT NULL,
  `tags` varchar(100) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `liked` int(4) DEFAULT NULL,
  `faved` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `user` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts_table`
--

LOCK TABLES `posts_table` WRITE;
/*!40000 ALTER TABLE `posts_table` DISABLE KEYS */;
INSERT INTO `posts_table` (`id`, `Name`, `link`, `description`, `nb_like`, `nb_fav`, `nb_comments`, `tags`, `comments`, `liked`, `faved`, `date`, `user`) VALUES (1,'Thomas','https://goo.gl/LXeU4i','Ma nouvelle illustration',6,2,1,'##illustrator ##photoshop','Magnifique',4,'','2018-02-14','Laura'),(2,'Paul Silva','http://gentsthemes.com/demo/instantwp/','Dites moi ce que vous en pensez!',17,5,1,'#portfolio #designer','Il est sympathique mais il manque de la couleur.',5,'','2018-02-13','Tony Lamare'),(3,'Vincent Laroche','https://www.youtube.com/watch?v=rTaGSbx9A1o','Un petit coup de pouce pour tous ceux qui galèrent en PHP.',3,1,0,'#PHP','',3,'','2018-02-12','');
/*!40000 ALTER TABLE `posts_table` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-14 16:57:56
