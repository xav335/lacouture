-- MySQL dump 10.13  Distrib 5.5.58, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: lacouture
-- ------------------------------------------------------
-- Server version	5.5.58-0+deb8u1

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `mdp` varchar(30) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'lacouture','lacouture33335','administrateur'),(2,'admin','admin335335','ico');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `message` text,
  `newsletter` tinyint(4) NOT NULL DEFAULT '0',
  `fromgoldbook` tinyint(4) NOT NULL DEFAULT '0',
  `fromcontact` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25679 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (25448,'jhonny','guitar','jav_gonz@yahoo.com',NULL,NULL,1,0,1),(25462,'Jav','gonz','jav_gonz@yahoo.fr',NULL,NULL,1,0,0),(25463,'xav','gonza','xavier.gonzalez@free.fr',NULL,NULL,1,0,0),(25464,'xavier','gonzalez','fjavi.gonzalez@gmail.com',NULL,NULL,1,0,0),(25465,'','Gonzalez','xavier@gonzalez.pm',NULL,NULL,1,0,0),(25466,'jhonny','guitar','jav_gonz@yahoo.com',NULL,NULL,1,0,0),(25470,'','','xavier@yahooo.fr',NULL,'',1,0,0),(25471,'','','christian.thorel73@sfr.fr',NULL,'',1,0,0),(25472,'','','mfneyret@yahoo.fr',NULL,'',1,0,0),(25473,'','','famshop@online.de',NULL,'',1,0,0),(25474,'','','ivan.dewitte@telenet.be',NULL,'',1,0,0),(25475,'','','andrey1idif@yahoo.com',NULL,'',1,0,0),(25476,'','','dvfdvd3422@gmail.com',NULL,'',1,0,0),(25477,'','','michellgolay@yahoo.com',NULL,'',1,0,0),(25478,'','','bobbieal24@yahoo.com',NULL,'',1,0,0),(25479,'','','alglbk@sbcglobal.net',NULL,'',1,0,0),(25480,'','','bandbconrad@comcast.net',NULL,'',1,0,0),(25481,'','','gretchen629@comcast.net',NULL,'',1,0,0),(25482,'','','jill@interiorsbyjill.ca',NULL,'',1,0,0),(25483,'','','rsloat30@gmail.com',NULL,'',1,0,0),(25484,'','','sandy.wiseman@utoronto.ca',NULL,'',1,0,0),(25485,'','','hantel-pieter@web.de',NULL,'',1,0,0),(25486,'','','choysimon@gmail.com',NULL,'',1,0,0),(25487,'','','recfreedom@yahoo.com',NULL,'',1,0,0),(25488,'','','wesadams1@hotmail.com',NULL,'',1,0,0),(25489,'','','meggordon88@hotmail.com',NULL,'',1,0,0),(25490,'','','john@therogueshollow.ca',NULL,'',1,0,0),(25491,'','','hannelfam@verizon.net',NULL,'',1,0,0),(25492,'','','dragren@chiropracticlifecenter.com',NULL,'',1,0,0),(25493,'','','masanderson04@gmail.com',NULL,'',1,0,0),(25494,'','','sharon.walmsley@uhn.ca',NULL,'',1,0,0),(25495,'','','marrrialee@yahoo.com',NULL,'',1,0,0),(25496,'','','erfefe344r@aol.com',NULL,'',1,0,0),(25497,'','','sauvemd@yahoo.com',NULL,'',1,0,0),(25498,'','','antje0702@t-online.de',NULL,'',1,0,0),(25499,'','','jgm82352@aol.com',NULL,'',1,0,0),(25500,'','','chnadal@hotmail.com',NULL,'',1,0,0),(25501,'','','jamess@ganemjewelers.com',NULL,'',1,0,0),(25502,'','','suesviews@cox.net',NULL,'',1,0,0),(25503,'','','abnimmers@sbcglobal.net',NULL,'',1,0,0),(25504,'','','cowgirlup1984.hq@gmail.com',NULL,'',1,0,0),(25505,'','','joaquimleal@ritchiebros.com',NULL,'',1,0,0),(25506,'','','stapletonmds@yahoo.com',NULL,'',1,0,0),(25507,'','','lhansen907@aol.com',NULL,'',1,0,0),(25508,'','','michaelgohl@mail.de',NULL,'',1,0,0),(25509,'','','delmorc@yahoo.com',NULL,'',1,0,0),(25510,'','','mirabaizdevi33@gmail.com',NULL,'',1,0,0),(25511,'','','kimberlee50@hotmail.com',NULL,'',1,0,0),(25512,'','','ebroberg429@yahoo.com',NULL,'',1,0,0),(25513,'','','ckierce@gmail.com',NULL,'',1,0,0),(25514,'','','renate.schreiner@sparkasse-suew.de',NULL,'',1,0,0),(25515,'','','would75@comcast.net',NULL,'',1,0,0),(25516,'','','ec3343c@gmail.com',NULL,'',1,0,0),(25517,'','','amay44@sbcglobal.net',NULL,'',1,0,0),(25518,'','','stevenl@edcodie.com',NULL,'',1,0,0),(25519,'','','doug@skinbusiness.com',NULL,'',1,0,0),(25520,'','','raydebsphoenix06@aol.com',NULL,'',1,0,0),(25521,'','','innu28@live.com',NULL,'',1,0,0),(25522,'','','gordito@bluewin.ch',NULL,'',1,0,0),(25523,'','','jmwol3@icloud.com',NULL,'',1,0,0),(25524,'','','huycung@comcast.net',NULL,'',1,0,0),(25525,'','','shaybo.bookings@gmail.com',NULL,'',1,0,0),(25526,'','','fquici@yahoo.com',NULL,'',1,0,0),(25527,'','','betsyhjas@gmail.com',NULL,'',1,0,0),(25528,'','','rezadeh@swbell.net',NULL,'',1,0,0),(25529,'','','willstewartspage@yahoo.com',NULL,'',1,0,0),(25530,'','','aadunham@gmail.com',NULL,'',1,0,0),(25531,'','','jasonswoo@gmail.com',NULL,'',1,0,0),(25532,'','','lmf67@pitt.edu',NULL,'',1,0,0),(25533,'','','tlw103@yahoo.com',NULL,'',1,0,0),(25534,'','','claudetteuf@gmail.com',NULL,'',1,0,0),(25535,'','','dhenderson85@gmail.com',NULL,'',1,0,0),(25536,'','','macalvery@globalmgtsolutions.com',NULL,'',1,0,0),(25537,'','','tzaccariello@upiping.com',NULL,'',1,0,0),(25538,'','','thx4themuzik@gmail.com',NULL,'',1,0,0),(25539,'','','nparhamlaw@hotmail.com',NULL,'',1,0,0),(25540,'','','cajblair@gmail.com',NULL,'',1,0,0),(25541,'','','kranthichapidi@live.com',NULL,'',1,0,0),(25542,'','','deblarson3@comcast.net',NULL,'',1,0,0),(25543,'','','aaron.seeber@purchase.edu',NULL,'',1,0,0),(25544,'','','agl3712@icloud.com',NULL,'',1,0,0),(25545,'','','jayc_vb@yahoo.com',NULL,'',1,0,0),(25546,'','','motherofthreeboys@gmail.com',NULL,'',1,0,0),(25547,'','','jpainter6865@gmail.com',NULL,'',1,0,0),(25548,'','','cullenp97@gmail.com',NULL,'',1,0,0),(25549,'','','djleenhouts@rochester.rr.com',NULL,'',1,0,0),(25550,'','','matt43090@icloud.com',NULL,'',1,0,0),(25551,'','','amymicheli@yahoo.com',NULL,'',1,0,0),(25552,'','','jabotten@gmail.com',NULL,'',1,0,0),(25553,'','','grandavep8@hotmail.ca',NULL,'',1,0,0),(25554,'','','enegrette2@gmail.com',NULL,'',1,0,0),(25555,'','','jkristeller@gmail.com',NULL,'',1,0,0),(25556,'','','kimwagner571@yahoo.com',NULL,'',1,0,0),(25557,'','','many.hibbard@gmail.com',NULL,'',1,0,0),(25558,'','','karenyonan@hotmail.com',NULL,'',1,0,0),(25559,'','','jjy0114cindy@naver.com',NULL,'',1,0,0),(25560,'','','jayglenn143@gmail.com',NULL,'',1,0,0),(25561,'','','wraith1177@icloud.com',NULL,'',1,0,0),(25562,'','','klauszim01@gmail.com',NULL,'',1,0,0),(25563,'','','megeheee@gmail.com',NULL,'',1,0,0),(25564,'','','pensiuneatajmahal@yahoo.com',NULL,'',1,0,0),(25565,'','','okamikeyfan@sbcglobal.net',NULL,'',1,0,0),(25566,'','','demers.brian@hotmail.com',NULL,'',1,0,0),(25567,'','','alan@winteck.ca',NULL,'',1,0,0),(25568,'','','ginanew@gmail.com',NULL,'',1,0,0),(25569,'','','sales@bakkt.com',NULL,'',1,0,0),(25570,'','','bubbles_0879@yahoo.com',NULL,'',1,0,0),(25571,'','','ricardochavarria26@gmail.com',NULL,'',1,0,0),(25572,'','','rayme123@optonline.net',NULL,'',1,0,0),(25573,'','','aerolulu@pacbell.net',NULL,'',1,0,0),(25574,'','','kunitrainer@aol.com',NULL,'',1,0,0),(25575,'','','loskony@yahoo.com',NULL,'',1,0,0),(25576,'','','tarntom@att.net',NULL,'',1,0,0),(25577,'','','lloftin@cmsiptech.com',NULL,'',1,0,0),(25578,'','','ejmiguel@aol.com',NULL,'',1,0,0),(25579,'','','mvsanci@rogers.com',NULL,'',1,0,0),(25580,'','','ell4@cornell.edu',NULL,'',1,0,0),(25581,'','','victor_h_martinez@hotmail.com',NULL,'',1,0,0),(25582,'','','elainelabonte@gmail.com',NULL,'',1,0,0),(25583,'','','qnkym27@yahoo.com',NULL,'',1,0,0),(25584,'','','kroeed@gmail.com',NULL,'',1,0,0),(25585,'','','rmrusafcaly@sbcglobal.net',NULL,'',1,0,0),(25586,'','','eescude70@yahoo.com',NULL,'',1,0,0),(25587,'','','info@woodzeller.com',NULL,'',1,0,0),(25588,'','','sean_d_booth@yahoo.co.uk',NULL,'',1,0,0),(25589,'','','maddiecandy12345@gmail.com',NULL,'',1,0,0),(25590,'','','laurenie_x@hotmail.co.uk',NULL,'',1,0,0),(25591,'','','martin0346@comcast.net',NULL,'',1,0,0),(25592,'','','tmigliore@aol.com',NULL,'',1,0,0),(25593,'','','manonc.langlois@hotmail.fr',NULL,'',1,0,0),(25594,'','','scott@williamslake.net',NULL,'',1,0,0),(25595,'','','pachaka21@gmail.com',NULL,'',1,0,0),(25596,'','','aggiee03@aol.com',NULL,'',1,0,0),(25597,'','','satellite4play@aol.com',NULL,'',1,0,0),(25598,'','','darrell@gladtidingschurch.com',NULL,'',1,0,0),(25599,'','','ace257485@gmail.com',NULL,'',1,0,0),(25600,'','','shaelyn27@yahoo.com',NULL,'',1,0,0),(25601,'','','info@montblanc-pen.de',NULL,'',1,0,0),(25602,'','','jkruman@nycap.rr.com',NULL,'',1,0,0),(25603,'','','yfg.hayes@gmail.com',NULL,'',1,0,0),(25604,'','','morganxgoodney@gmail.com',NULL,'',1,0,0),(25605,'','','dgpierson@gmail.com',NULL,'',1,0,0),(25606,'','','mattcheah@gmail.com',NULL,'',1,0,0),(25607,'','','dfontaine@comcast.net',NULL,'',1,0,0),(25608,'','','vogeljayden85503@gmail.com',NULL,'',1,0,0),(25609,'','','dz.eric@yahoo.com',NULL,'',1,0,0),(25610,'','','jaredtaylor.13@gmail.com',NULL,'',1,0,0),(25611,'','','akindberg1@gmail.com',NULL,'',1,0,0),(25612,'','','hernandezguillermo@yahoo.com',NULL,'',1,0,0),(25613,'','','jonlivesay@sbcglobal.net',NULL,'',1,0,0),(25614,'','','jndurss@yahoo.com',NULL,'',1,0,0),(25615,'','','ajay.mehta73@outlook.com',NULL,'',1,0,0),(25616,'','','cherokeekasey@gmail.com',NULL,'',1,0,0),(25617,'','','adriennebrumlow@yahoo.com',NULL,'',1,0,0),(25618,'','','thale0424@yahoo.com',NULL,'',1,0,0),(25619,'','','ashleychaz00@aol.com',NULL,'',1,0,0),(25620,'','','efrand@yahoo.com',NULL,'',1,0,0),(25621,'','','vikram.dua@lsiworld.com',NULL,'',1,0,0),(25622,'','','simplywandering@yahoo.com',NULL,'',1,0,0),(25623,'','','demonslay129@gmail.com',NULL,'',1,0,0),(25624,'','','sblackmon5@yahoo.com',NULL,'',1,0,0),(25625,'','','youcallmeray@aol.com',NULL,'',1,0,0),(25626,'','','sreeved@webandcrafts.com',NULL,'',1,0,0),(25627,'','','ablanco@rollins.com',NULL,'',1,0,0),(25628,'','','humaagboatwalla@hotmail.com',NULL,'',1,0,0),(25629,'','','solayala1@gmail.com',NULL,'',1,0,0),(25630,'','','natasha_pascual@yahoo.com',NULL,'',1,0,0),(25631,'','','begolfing3@msn.com',NULL,'',1,0,0),(25632,'','','tjohnson@ruelala.com',NULL,'',1,0,0),(25633,'','','keusiokis@gmail.com',NULL,'',1,0,0),(25634,'','','john.whang24@gmail.com',NULL,'',1,0,0),(25635,'','','lethong@me.com',NULL,'',1,0,0),(25636,'','','phughes524@gmail.com',NULL,'',1,0,0),(25637,'','','jmess21@optonline.net',NULL,'',1,0,0),(25638,'','','lololb@hotmail.co.uk',NULL,'',1,0,0),(25639,'','','ramicadmir206@gmail.com',NULL,'',1,0,0),(25640,'','','hamytheninja@gmail.com',NULL,'',1,0,0),(25641,'','','mortondh@yahoo.com',NULL,'',1,0,0),(25642,'','','kwicicabrera@gmail.com',NULL,'',1,0,0),(25643,'','','luis.perez.art@gmail.com',NULL,'',1,0,0),(25644,'','','dawnlangley@aol.com',NULL,'',1,0,0),(25645,'','','susan3man@yahoo.co.uk',NULL,'',1,0,0),(25646,'','','connor@coffeeboxltd.com',NULL,'',1,0,0),(25647,'','','jilli@gci.net',NULL,'',1,0,0),(25648,'','','jingzact@gmail.com',NULL,'',1,0,0),(25649,'','','dominicpalmonari@yahoo.com',NULL,'',1,0,0),(25650,'','','asthirrohan6@gmail.com',NULL,'',1,0,0),(25651,'','','erinnhutchinson@aol.com',NULL,'',1,0,0),(25652,'','','susanna.fravell@gmail.com',NULL,'',1,0,0),(25653,'','','r.fairbanks@apemltd.co.uk',NULL,'',1,0,0),(25654,'','','gracy5600@gmail.com',NULL,'',1,0,0),(25655,'','','wvcjeb8866@sbcglobal.net',NULL,'',1,0,0),(25656,'','','ssingh4u99@yahoo.com',NULL,'',1,0,0),(25657,'','','cheeseman1@sky.com',NULL,'',1,0,0),(25658,'','','gema@rompiendobarrerastravel.es',NULL,'',1,0,0),(25659,'','','milaarni@yahoo.com',NULL,'',1,0,0),(25660,'','','crazyfroggirl7@aol.com',NULL,'',1,0,0),(25661,'','','jdziark@aol.com',NULL,'',1,0,0),(25662,'','','saj630@yahoo.com',NULL,'',1,0,0),(25663,'','','a.utz@camp37.com',NULL,'',1,0,0),(25664,'','','ruthgriffiths35@gmail.com',NULL,'',1,0,0),(25665,'','','lmbishop45@gmail.com',NULL,'',1,0,0),(25666,'','','norrisc114@gmail.com',NULL,'',1,0,0),(25667,'','','phill@sysctl.net',NULL,'',1,0,0),(25668,'','','jetcat727@gmail.com',NULL,'',1,0,0),(25669,'','','wheeleralejandra@gmail.com',NULL,'',1,0,0),(25670,'','','luke.t.larsen@gmail.com',NULL,'',1,0,0),(25671,'','','neochrist@hotmail.com',NULL,'',1,0,0),(25672,'','','mrsfang53@gmail.com',NULL,'',1,0,0),(25673,'','','jimphipps7@yahoo.com',NULL,'',1,0,0),(25674,'','','racerboy1565@gmail.com',NULL,'',1,0,0),(25675,'','','ekgammill@gmail.com',NULL,'',1,0,0),(25676,'','','sluckva@juno.com',NULL,'',1,0,0),(25677,'','','tob16701@gmail.com',NULL,'',1,0,0),(25678,'','','mvictor3089@gmail.com',NULL,'',1,0,0);
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_categorie`
--

DROP TABLE IF EXISTS `contact_categorie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_categorie` (
  `id_contact` int(11) unsigned NOT NULL,
  `id_categorie` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_categorie`
--

LOCK TABLES `contact_categorie` WRITE;
/*!40000 ALTER TABLE `contact_categorie` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_categorie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goldbook`
--

DROP TABLE IF EXISTS `goldbook`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `goldbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `nom` varchar(250) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` text,
  `online` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goldbook`
--

LOCK TABLES `goldbook` WRITE;
/*!40000 ALTER TABLE `goldbook` DISABLE KEYS */;
INSERT INTO `goldbook` VALUES (2,'2017-01-10 00:00:00','Jérome Malles','xavier@gonzalez.pm','Produits de grande qualité. Dans le respect de l\'environnement.\r\n',1),(3,'2017-11-01 00:00:00','Javier Gonzalez ( Latresne )','fjavi.gonzalez@gmail.com','Des vins superbes, un accueil chaleureux et des conseils pertinents donnés  par des personnes très compétentes et passionnés. Je recommande chaudement.',1),(13,'2017-11-01 00:00:00','Yann ( London )','fjavi.gonzalez@gmail.com','Great wines ! ',1),(14,'2019-02-01 00:00:00','Devaux bernard','tionards4@free.fr','Bonne dégustation ce soir aux Caves Basséenes 59 en présence du propriétaire  Romain SOU de Gauriac en Gironde. Celui-ci produit mon vin number one préféré, le fameux Carpe Diem Côtes de Bourg 2015 (avec modération) et l\'extra 2012 ...et aussi une dégustation de fromage de conté extras..merci Elo et Jéjé pour ce moment de dernière minute...et pour l\'info... Content de voir les gens en live, qui nous offrent de bons moments lorsque l\'on déguste leur production en famille...',1);
/*!40000 ALTER TABLE `goldbook` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id_news` int(11) NOT NULL AUTO_INCREMENT,
  `date_news` datetime NOT NULL,
  `titre` varchar(250) NOT NULL,
  `accroche` text,
  `contenu` text,
  `image1` varchar(250) DEFAULT NULL,
  `online` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_news`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (23,'2019-05-05 00:00:00','BD&Vin (04/05/2019) et','http://www.bd-et-vin.fr/','','/Logo_BD_VIN-23.jpg',0),(24,'2019-10-06 00:00:00','Journée Verte','','Venez nous retrouver le 6 octobre 2019 à la journée verte,\r\nDans un contexte automnal qui s\'accorde à la perfection avec le visuel de la cuvée Gallo','/Journ_e_verte-.jpg',0),(25,'2019-11-10 00:00:00','Marché Culturel et Gastronomique','','Comme chaque année nous organisons notre Marché Culturel et Gastronomique\r\nVenez découvrir les produits de notre terroir au Château Lacouture','/March_Culturel_et_gastro_2017-.jpg',1),(26,'2020-03-28 00:00:00','28 et 29 mars Le printemps de l\'AP2B','','','/Poulets_de_Bresse_2019-.jpg',1);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `newsletter` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `titre` varchar(250) DEFAULT NULL,
  `bas_page` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newsletter`
--

LOCK TABLES `newsletter` WRITE;
/*!40000 ALTER TABLE `newsletter` DISABLE KEYS */;
INSERT INTO `newsletter` VALUES (12,'2015-01-01 00:00:00','Ceci est la toute nouvelle actu','ljhjkl');
/*!40000 ALTER TABLE `newsletter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newsletter_detail`
--

DROP TABLE IF EXISTS `newsletter_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `newsletter_detail` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_newsletter` int(10) unsigned NOT NULL,
  `titre` varchar(250) DEFAULT NULL,
  `url` varchar(250) DEFAULT NULL,
  `link` varchar(250) DEFAULT NULL,
  `texte` text,
  PRIMARY KEY (`id`,`id_newsletter`)
) ENGINE=InnoDB AUTO_INCREMENT=324 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newsletter_detail`
--

LOCK TABLES `newsletter_detail` WRITE;
/*!40000 ALTER TABLE `newsletter_detail` DISABLE KEYS */;
INSERT INTO `newsletter_detail` VALUES (323,12,'','/uploads/bsport3.jpg','http://dev.bsport.fr/','');
/*!40000 ALTER TABLE `newsletter_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `planning`
--

DROP TABLE IF EXISTS `planning`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `planning` (
  `id` tinyint(4) NOT NULL,
  `titre` varchar(250) DEFAULT NULL,
  `url` varchar(250) NOT NULL,
  `pdf` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `planning`
--

LOCK TABLES `planning` WRITE;
/*!40000 ALTER TABLE `planning` DISABLE KEYS */;
INSERT INTO `planning` VALUES (1,' 2020','','/D_pliant_2020_PDF-20200316.pdf');
/*!40000 ALTER TABLE `planning` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-04-21  9:29:32
