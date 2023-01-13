-- MySQL dump 10.13  Distrib 5.7.29, for Linux (x86_64)
--
-- Host: localhost    Database: bchain
-- ------------------------------------------------------
-- Server version	5.7.29-0ubuntu0.18.04.1

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
-- Table structure for table `BigResearch`
--

DROP TABLE IF EXISTS `BigResearch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `BigResearch` (
  `TEMPORARY_ID` int(11) NOT NULL,
  `SYMPTOM` varchar(45) DEFAULT NULL,
  `DIAGNOSIS` varchar(45) DEFAULT NULL,
  `TREATMENT` varchar(45) DEFAULT NULL,
  `PRESCRIBED_MEDICINE` varchar(45) DEFAULT NULL,
  `BLOCK_NO` int(11) NOT NULL,
  PRIMARY KEY (`BLOCK_NO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `BigResearch`
--

LOCK TABLES `BigResearch` WRITE;
/*!40000 ALTER TABLE `BigResearch` DISABLE KEYS */;
INSERT INTO `BigResearch` VALUES (302,'fever\ndry cough\ntiredness\n','Covid-19','14 days quarantine\n',' ',5),(301,'High Fever, Dehydration','Common Flu','medicine for 5days and follow up','Paracetamol',6),(301,'Nose Bleed','Fell from stairs','Rest for 10 days','Ibubrufin - when in pain',7),(302,'Dry Cough','Allergy to Dust','Medicine for 2Days','Chloropinaramine',8),(301,'Cough, difficulty breathing - 2days','Pnemonia','Admit to hospital','IV injection-  Penicilin - 0-1-1 for 6 days',9),(303,'Dry Cough, Difficulty Breathing','Covid-19','28 days Quarantine',' ',10),(301,'Cough ','Common Flu','rest for 5 days','paracetamol',11),(301,'Kannil Kuru,phone nokan vaiya','Viral Infection','referred to Opthalmologist','Dobramicin Solution 1-0-1',12),(303,'Headache','Migrane','rest for 3 days','dolo 1-1-1',13),(303,'qwertyui','wertyui','e3r4tyui8','er4t56789',14);
/*!40000 ALTER TABLE `BigResearch` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-14 17:49:36
