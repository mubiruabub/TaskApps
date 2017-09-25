-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.5-10.0.15-MariaDB


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema task_db
--

CREATE DATABASE IF NOT EXISTS task_db;
USE task_db;

--
-- Definition of table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(50) DEFAULT NULL,
  `DateCreated` date DEFAULT NULL,
  `DateUpdated` date DEFAULT NULL,
  `Description` longtext,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`ID`,`UserName`,`DateCreated`,`DateUpdated`,`Description`) VALUES 
 (1,'Mukasa Abubakari Mubiru','2017-09-24','2017-09-24','Hello, please come now for the project '),
 (2,'John M.','2017-09-24','2017-09-24','Yes which room , should I come to, for the project !!!'),
 (3,'Fahd Mubiru ','2017-09-24','2017-09-24','Am asking what content is in the project to show us?'),
 (4,'Adam Alii','2017-09-24','2017-09-24','Now where is the content for making ease work ?'),
 (5,'Nasibu Ababu','2017-09-24','2017-09-24','Now Join us mars ICT is now time to code !, online'),
 (6,'Tabi M.','2017-09-24','2017-09-24','Testing code , when it is working very well !!'),
 (29,'Mbei Abubakar','2017-09-24','2017-09-24','Please come for work');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
