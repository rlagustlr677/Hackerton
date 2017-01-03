-- MySQL dump 10.13  Distrib 5.7.16, for Linux (x86_64)
--
-- Host: localhost    Database: lost_property
-- ------------------------------------------------------
-- Server version	5.7.16-0ubuntu0.16.04.1

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
-- Table structure for table `lost_comment`
--

DROP TABLE IF EXISTS `lost_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lost_comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_depth` int(11) unsigned NOT NULL DEFAULT '0',
  `comment_user` varchar(45) NOT NULL COMMENT 'user_instant_id',
  `comment_password` int(4) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `board_id` int(11) NOT NULL COMMENT 'foreigner_key',
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lost_comment`
--

LOCK TABLES `lost_comment` WRITE;
/*!40000 ALTER TABLE `lost_comment` DISABLE KEYS */;
INSERT INTO `lost_comment` VALUES (29,29,'abcd',1234,'qwerqewtewr','2016-12-20 21:01:30',30),(30,30,'abcd',1234,'qwerqewtewr','2016-12-20 21:01:35',30),(31,31,'abd',1234,'12312421','2016-12-20 22:18:11',30),(32,32,'',1234,'1234','2016-12-21 00:02:04',30),(33,33,'1234',1234,'1234','2016-12-21 00:02:57',30),(34,34,'aa',1,'a','2016-12-21 00:03:11',39),(35,35,'abcde',1234,'asdf','2016-12-21 00:03:27',30),(36,36,'aa',1,'a','2016-12-21 00:03:29',39),(37,37,'ab',123,'123','2016-12-21 00:03:44',30),(38,38,'rootaa',12,'야 내꺼다 그거','2016-12-21 00:07:02',39),(39,39,'abasvas',24,'123','2016-12-21 00:19:40',30),(40,40,'123',123,'123','2016-12-21 00:23:00',30),(41,41,'1213',123,'123','2016-12-21 00:24:04',30),(42,42,'1234',431,'123','2016-12-21 00:24:10',30),(43,43,'12345',32,'2131','2016-12-21 00:24:30',30),(44,44,'asdf',1234,'1234','2016-12-21 01:24:46',30),(45,45,'123',123,'우와우','2016-12-21 02:21:51',34),(46,46,'asbcd',1234,'1234','2016-12-21 02:22:05',39),(47,47,'basd',1234,'asdv','2016-12-21 02:22:10',39),(48,48,'root',1234,'111','2016-12-21 02:22:36',39),(49,49,'root',1234,'123','2016-12-21 02:22:52',31),(50,50,'acd',1234,'12adf','2016-12-21 02:23:15',42),(51,51,'3323',1234,'3333','2016-12-21 02:23:22',29),(52,52,' asdacsd',123,'ascsd','2016-12-21 02:23:27',42),(53,53,'abcd',1234,'asdf','2016-12-21 02:23:38',42),(54,54,'root',1234,'223','2016-12-21 02:23:47',31),(55,55,'abcd',1234,'1234','2016-12-21 02:45:05',39),(56,56,'abdscadsc',123,'1232141','2016-12-21 03:05:59',39),(57,57,'badsca',1234,'asbsd','2016-12-21 03:06:14',39),(58,58,'avasdwevc',1234,'asvasdvsasdcawe ','2016-12-21 03:25:46',39),(59,59,'abcdacsdc',1234,'asdbawavsdcwe','2016-12-21 04:10:17',42),(60,60,'아나',1234,'왜 안돼 시봷누야ㅐ추ㅐㅈㄷ추ㅑㅐㄷ','2016-12-21 04:10:26',42),(61,61,'dd',11,'dd','2016-12-21 04:44:29',46),(62,62,'aa',1234,'	asv	    ','2016-12-21 05:27:00',39),(63,63,'',1234,'		    ','2016-12-21 05:38:19',39),(64,64,'승연',1111,'승연		    ','2016-12-21 05:43:41',46),(65,65,'adsfbarvc24c23',123,'asdfa','2016-12-21 06:00:18',39),(66,66,'root',1234,'123','2016-12-21 06:08:25',48),(67,67,'root',1233,'ddww','2016-12-21 06:08:57',48),(68,68,'root',1234,'		    11','2016-12-21 06:19:34',48),(69,69,'user1',1111,'안녕		    ','2016-12-21 06:19:49',43),(70,70,'root',1234,'		    55','2016-12-21 06:20:40',48),(71,71,'asdv',1234,'		    asdvasdc','2016-12-21 06:21:07',39),(72,72,'asdv',210,'		    asdvasdc','2016-12-21 06:27:37',39),(73,73,'user1',1,'헬로		    ','2016-12-21 06:27:41',48),(74,74,'root',234,'		    aaa','2016-12-21 06:28:18',48),(75,75,'ㅁㅁ',123,'		    그거내가','2016-12-21 06:39:08',50),(76,76,'123',123,'		    123ㅁㅇㄹ','2016-12-21 06:39:20',50),(77,77,'뮻ㅁㅇ',1234,'		    123124','2016-12-21 07:05:41',47),(78,78,'123',123,'		   123 ','2016-12-21 07:05:47',47),(79,0,'뮻ㅇ',1234,'1234','2016-12-21 07:05:54',47),(80,0,'1234',1234,'1234','2016-12-21 07:06:00',47),(81,81,'도라에몽',1111,'		    그거 12월 1일경 운동장에서 봤어요~ 연락드릴게요!','2016-12-21 07:08:31',53),(84,84,'abcd',1234,'		    asdf','2016-12-21 07:58:49',53),(85,0,'aaaa',123,'123','2016-12-21 08:15:30',53),(86,86,'김현',1,'		  초코우유는 있는데,,,','2016-12-21 09:27:44',55);
/*!40000 ALTER TABLE `lost_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lost_item`
--

DROP TABLE IF EXISTS `lost_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lost_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `user` varchar(45) NOT NULL,
  `passwd` varchar(12) NOT NULL,
  `wdate` datetime NOT NULL,
  `item` varchar(45) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  `comment` text,
  `lwhere` varchar(45) DEFAULT NULL,
  `lwhen` varchar(20) DEFAULT NULL,
  `type` varchar(45) NOT NULL,
  `tell` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lost_item`
--

LOCK TABLES `lost_item` WRITE;
/*!40000 ALTER TABLE `lost_item` DISABLE KEYS */;
INSERT INTO `lost_item` VALUES (13,'지갑잃어버렸어요','이동진','1111','2016-12-20 13:38:22','몽블랑지갑','223.195.12.216',28,'찾아주세요','2015-01-01','','','1111'),(14,'이동진','이동진','','2016-12-20 13:41:17','안경','223.195.4.187',12,'검은색 뿔테안경을 잃어버렸습니다','2016-12-31','','','010-7574-4655'),(15,'지갑없어짐..','김현식','1111','2016-12-20 13:42:40','내지갑','223.195.12.216',8,'지갑잃어버렸엄','','2015-01-05','지갑','1111'),(17,'학과를 잃어버렸어요','user1','1234','2016-12-20 13:56:19','디지털콘텐츠과','223.195.4.187',19,'내년부터 없어집니다.ㅠ','세종대','2016.12.31','학과','010-7574-4655'),(49,'선글라스 잃어버렸어요ㅠㅠㅠ','이동진','1111','2016-12-21 06:33:04','젠틀몬스터 선글라스','223.195.12.216',0,'12월 21일 오후 4시경 율곡관 5층 근처에서 잃어버렸어요ㅠㅠ\r\n혹시 보신분 연락부탁드려요!ㅠㅠ \r\n저한테는 정말 소중한 물건이에요\r\n','율곡관','2016-12-21','선글라스','010-4567-8372'),(50,'분실물찾아요..','김현식','1111','2016-12-21 06:35:24','회색','223.195.12.216',0,'12월 1일 저녁 5시쯤에 충무관 2층 남자화장실에서 분실했습니다.\r\n제발 안에 돈은 괜찮으니 지갑만이라도 보신 분 연락주세요ㅠㅠ\r\n\r\n<a href=http://gdimg.gmarket.co.kr/goods_image2/middle_moreimg/153/026/153026480/153026480_02.jpg></a>','충무관','2016-12-01','지갑','010-4444-3333'),(51,'마우스찾아요','문재영','1111','2016-12-21 06:37:28','삼성 마우스','223.195.12.216',0,'12월 10일 저녁 8시쯤 \r\n학술정보원 3층 노트북 열람실에서 마우스를 놓고 왔습니다.\r\n다시 가보니 없더군요..ㅠㅠ \r\n혹시 보신분 있으면 연락부탁드려요\r\n검은색 작은 마우스입니다.','학술정보원','2016-12-10','마우스','010-9999-5555'),(52,'휴대폰찾아요..','강승연','1111','2016-12-21 06:39:50','갤럭시 S6','223.195.12.216',0,'11일 광개토관 지하 카페에서 휴대폰 보신 분 찾아요!!\r\n갤럭시 S6 흰색 기종으로 도날드덕 젤리 케이스가 씌워져 있습니다.\r\n보신분은 위의 번호로 연락부탁드려요ㅠㅠㅠㅠㅠ\r\n','광개토관','2016-12-11','스마트폰','010-5555-5555'),(53,'분실물신고','노진구','1111','2016-12-21 06:41:56','파란색 선풍기','223.195.12.216',0,'파란색 미니 선풍기를 찾습니다..\r\n운동장 근처에서 잃어버렸습니다..\r\n근처 벤츠에 두고온 것 같은데 다시 가보니 없네요..\r\n보신분 연락 부탁드려요.. 산지 얼마 안된 선풍기입니다..ㅠㅠ','운동장 근처','2016-11-30','선풍기','010-4444-4444'),(54,'시계분실','김퉁퉁','1111','2016-12-21 06:44:26','밤색 가죽시계','223.195.12.216',0,'진관홀 식당에서 시계 잃어버렸어요..\r\n갈색 가죽시계이구요 시계알은 큰편입니다.\r\n연락부탁드려요','진관홀 식당','2016-12-12','시계','010-3333-3333'),(55,'우유를 찾아요','이동진','1','2016-12-21 09:27:06','딸기우유','223.195.4.187',0,'우유를 찾아줘요!','충무관','오늘','우유','010-7574-4655');
/*!40000 ALTER TABLE `lost_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pickup_comment`
--

DROP TABLE IF EXISTS `pickup_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pickup_comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_depth` int(11) unsigned NOT NULL DEFAULT '0',
  `comment_user` varchar(45) NOT NULL COMMENT 'user_instant_id',
  `comment_password` int(4) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `board_id` int(11) NOT NULL COMMENT 'foreigner_key',
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pickup_comment`
--

LOCK TABLES `pickup_comment` WRITE;
/*!40000 ALTER TABLE `pickup_comment` DISABLE KEYS */;
INSERT INTO `pickup_comment` VALUES (1,1,'거내껀데',1234,'거 내꺼임		    ','2016-12-21 06:32:01',1),(2,2,'124',1234,'		    ㅁㄴㅇㅁㄴㅇ','2016-12-21 06:39:34',1),(3,3,'ㅁㄴㅇㅍ',1234,'		    ㅁㄴㅇㅍㅁㄴㅇ','2016-12-21 06:44:39',1),(4,4,'거내꺼',123,'내꺼야		    ','2016-12-21 06:45:55',1),(5,5,'abcd',1234,'		    abcd','2016-12-21 07:31:28',8),(7,7,'abcd',123,'		    abcd','2016-12-21 07:34:38',6),(8,8,'cccc',123,'		    asdf','2016-12-21 07:34:42',6),(9,9,'acd',1234,'		    asdf','2016-12-21 07:36:00',2),(10,10,'aaaaa',1234,'		    1234','2016-12-21 07:36:54',2),(11,0,'asdf',1234,'asdfads','2016-12-21 07:41:20',2),(12,0,'aaaaa',12,'abcd','2016-12-21 07:42:22',2),(13,0,'aa',123,'123','2016-12-21 07:42:29',2),(14,14,'강승연',1111,'제거에요ㅠ		    ','2016-12-21 09:13:14',21),(15,15,'강승연',1111,'제거에요ㅠㅠ		    ','2016-12-21 09:13:29',21),(16,16,'현식2',1234,'저요제꺼에요		    ','2016-12-21 09:27:38',25),(17,17,'김현식',1111,'제꺼에용ㅠ		    ','2016-12-21 09:27:54',22),(18,18,'저요',1234,'저주세요 제꺼입니다.		    ','2016-12-21 09:27:57',25),(19,19,'김현식',1111,'제꺼에요ㅠㅠㅠ		    ','2016-12-21 09:28:05',22);
/*!40000 ALTER TABLE `pickup_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pickup_item`
--

DROP TABLE IF EXISTS `pickup_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pickup_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `user` varchar(45) NOT NULL,
  `passwd` varchar(12) NOT NULL,
  `wdate` datetime NOT NULL,
  `item` varchar(45) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `view` int(15) NOT NULL DEFAULT '0',
  `pwhere` varchar(45) DEFAULT NULL,
  `pwhen` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `comment` text,
  `image` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pickup_item`
--

LOCK TABLES `pickup_item` WRITE;
/*!40000 ALTER TABLE `pickup_item` DISABLE KEYS */;
INSERT INTO `pickup_item` VALUES (2,'노트북 잃어버리신분 찾아ㅛ','김영희','1111','2016-12-21 07:03:28','노트북','223.195.12.216',0,'2014-05-05','2015-01-10','흰색 노트북','',''),(3,'목걸이 읽어버리신분','김청수','1111','2016-12-21 07:06:32','금색목걸이','223.195.12.216',0,'충무관','16-01-04','목걸이','금색 목걸이 읽어버리신분 찾아요!1월 4일경 발견했습니다. 별모양의 예쁜 목걸이에요',''),(21,'동전지갑','김현식','1111','2016-12-21 08:54:32','동전지갑','223.195.12.216',0,'광토','2016-12-12','지갑','분홍색 동전지갑 주웠습니다.\r\n안에 돈은 별로 없고 카드 2개랑 학생증 한개들어있습니다.\r\n잃어버리신 분은 댓글달아주세요',''),(22,'물건찾았어요','강승연','1111','2016-12-21 09:19:46','빨간지갑','223.195.12.216',0,'충무관','12-10','지갑','찾았습니다. 연락주세요',''),(24,'어이를 찾아요','이동진','1','2016-12-21 09:24:50','어이','223.195.4.187',0,'','','어이','ㅁㄹ',''),(25,'지갑을 찾았습니다','김현식','123','2016-12-21 09:25:15','반지갑','223.195.21.45',0,'집현관','2012.11.22','지갑','<img src=\"http://cfs11.tistory.com/image/14/tistory/2008/12/04/23/45/4937ed1072c7e\"> \r\n\r\n반지갑을 주었습니다. 주인찾아가셍ㅛ','');
/*!40000 ALTER TABLE `pickup_item` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-22 10:42:20
