create database sportsite;
DROP TABLE IF EXISTS sportsite.`sport`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE sportsite.`sport` (
  `id_sport` int(11) NOT NULL AUTO_INCREMENT,
  `sport_name` varchar(100) NOT NULL,
  `rules` text DEFAULT NULL,
  PRIMARY KEY (`id_sport`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS sportsite.`partie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE sportsite.`partie` (
  `id_partie` int(11) NOT NULL AUTO_INCREMENT,
  `equipe1_name` varchar(100) NOT NULL,
  `equipe2_name` varchar(100) NOT NULL,
  `score_equipe1` int(11) DEFAULT NULL,
  `score_equipe2` int(11) DEFAULT NULL,
  `id_sport` int(11) NOT NULL,
  PRIMARY KEY (`id_partie`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;

LOCK TABLES sportsite.`sport` WRITE;
INSERT INTO sportsite.`sport` VALUES ('11','Tennis','Keep throwing the ball on the other side');
UNLOCK TABLES;

