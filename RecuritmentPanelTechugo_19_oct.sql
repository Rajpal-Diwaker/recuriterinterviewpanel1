/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 5.7.31-0ubuntu0.18.04.1 : Database - RecuritmentPanelTechugo
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `depart` */

DROP TABLE IF EXISTS `depart`;

CREATE TABLE `depart` (
  `A` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `depart` */

insert  into `depart`(`A`) values 
('HR Department'),
('Accounts Department'),
('Android Department'),
('iOS Department'),
('Frontend Department'),
('Designing Department'),
('Backend Department'),
('QA Department'),
('Digital Marketing '),
('Business Development '),
('Administration Department');

/*Table structure for table `desig` */

DROP TABLE IF EXISTS `desig`;

CREATE TABLE `desig` (
  `A` varchar(39) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `desig` */

insert  into `desig`(`A`) values 
('Director - Mobility'),
('Technical Architect'),
('Project Manger'),
('COO'),
('Mobile Architect and Process Head'),
('Director - Mobility'),
('Director- Open Source'),
('CEO'),
('HR Manager'),
('HR Generalist'),
('HR Recruiter'),
('CEO'),
('COO'),
('Accounts Executive'),
('Accounts Manager'),
('Mobile Architect and Process Head'),
('Software Developer'),
('Software Developer'),
('Software Developer'),
('Sr. Software Developer'),
('Project Manager'),
('Sr. Software Developer'),
('Sr. Software Developer'),
('Software Developer'),
('Software Developer'),
('Sr. UI Developer'),
('UI Developer'),
('Sr. UI/UX Designer'),
('Sr. UI/UX Designer'),
('UI/UX Designer'),
('Sr. UI/UX Designer'),
('Graphic Designer'),
('Director- Open Source'),
('Software Developer (Node.js )'),
('Sr.Software Developer (Node.js )'),
('Sr.Software Developer (PHP)'),
('Sr.Software Developer (PHP & Wordpress)'),
('Software Developer (React Native )'),
('Director- Open Source'),
('Software Developer'),
('Software Developer'),
('Sr. Software Developer'),
('Delivery Head'),
('COO'),
('Head-Branding & Communication'),
('Sr. Digital Marketing Executive'),
('Sr. SEO Executive'),
('Social Media Marketing Manager'),
('COO'),
('Business Head'),
('BDM'),
('BDE'),
('Video Editor');

/*Table structure for table `interviewer` */

DROP TABLE IF EXISTS `interviewer`;

CREATE TABLE `interviewer` (
  `A` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `interviewer` */

insert  into `interviewer`(`A`) values 
('Interviewer Name'),
('Abhinav Gupta'),
('Namrata Kumari'),
('Piyush Ahuja'),
('Ankit Singh'),
('Prakhar Anand'),
('Abhinav Gupta'),
('Purushottam'),
('Abhinav Singh'),
('Jullie Singh'),
('Varsha Dhiman'),
('Priya Kaushik'),
('Abhinav Singh'),
('Ankit Singh'),
('Jahar Singh'),
('Dinesh Yadav'),
('Prakhar Anand'),
('Indranil Chatterjee'),
('Dhruv Rawat'),
('Gunjan Manral'),
('Md. Junaid '),
('Vikash Kumar'),
('Bhavna Puri'),
('Kashish Makkar'),
('Himanshu Gupta'),
('Shubham Singh'),
('Rahul Kumar'),
('Ram Kumar'),
('Ravendra Kumar Singh'),
('Naveen shahi'),
('Ankit Malhotra'),
('Deepshikha Garg'),
('Manish Kumar'),
('Ankit Malhotra'),
('Rishabh Arora'),
('Purushottam Kumar'),
('Sumit Ruhela'),
('Arjun Sisodia'),
('Rishabh Anand'),
('Alok Kumar Jha'),
('Siddiqui Sazid'),
('Purushottam Kumar'),
('Abhay Narayan'),
('Akriti Sharma'),
('Deep Verma'),
('Lakshman Kumar'),
('Ankit Singh'),
('Henna Zakir'),
('Kanchan Chauhan'),
('Akshit Chauki'),
('Maneesh Kumar Singh'),
('Ankit Singh'),
('Harjot Kaur'),
('Somesh Mendiratta'),
('Amar Singh'),
('Abhishek Vats');

/*Table structure for table `profiles` */

DROP TABLE IF EXISTS `profiles`;

CREATE TABLE `profiles` (
  `A` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `profiles` */

insert  into `profiles`(`A`) values 
('Project Manager'),
('Sr. Project Manager'),
('Mobile Architect'),
('Web Architect'),
('HR Recruiter'),
('HR Generalist'),
('Accounts Manager'),
('Android Trainee'),
('Android Developer'),
('Sr. Android Developer'),
('iOS Trainee'),
('iOS Developer'),
('Sr iOS Developer'),
('HTML Trainee'),
('HTML Developer'),
('Sr.HTML Developer'),
('UI/UX Trainee'),
('UI/UX Designier'),
('Sr.UI/UX Designer'),
('Graphic Designer Trainee'),
('Graphic Designing'),
('Sr.Graphic Designing'),
('Backend Trainee'),
('Java Developer'),
('Node.Js Developer'),
('Sr.Node.Js Developer'),
('Angular JS Developer'),
('PHP Developer'),
('Sr. PHP Developer'),
('Ionic Developer '),
('Wordpress Developer'),
('Python Developer'),
('React Native Developer'),
('Sr. React Native Developer'),
('System Administrator'),
('AWS and Cloud Engineer'),
('QA Automation Trainee'),
('QA Automation Trainee'),
('Sr. QA Automation Engineer'),
('Content Writer'),
('Sr. Content Writer'),
('SEO Trainee'),
('SEO'),
('Sr. SEO'),
('Digital Marketing Manager'),
('Social Media Marketing Manager'),
('Business Development Executive'),
('Business Development Manager'),
('Business Head'),
('Video Editor Trainee'),
('Video Editor'),
('Executive Assistant'),
('Admin');

/*Table structure for table `tblDepartment` */

DROP TABLE IF EXISTS `tblDepartment`;

CREATE TABLE `tblDepartment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '1' COMMENT '0->Inactive,1->Active',
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `tblDepartment` */

insert  into `tblDepartment`(`id`,`title`,`deleted`,`createdDate`) values 
(1,'HR Department','1','2020-10-15 15:07:29'),
(2,'Accounts Department','1','2020-10-15 15:07:29'),
(3,'Android Department','1','2020-10-15 15:07:29'),
(4,'iOS Department','1','2020-10-15 15:07:29'),
(5,'Frontend Department','1','2020-10-15 15:07:29'),
(6,'Designing Department','1','2020-10-15 15:07:29'),
(7,'Backend Department','1','2020-10-15 15:07:29'),
(8,'QA Department','1','2020-10-15 15:07:29'),
(9,'Digital Marketing ','1','2020-10-15 15:07:29'),
(10,'Business Development ','1','2020-10-15 15:07:29'),
(11,'Administration Department','1','2020-10-15 15:07:29');

/*Table structure for table `tblDesignation` */

DROP TABLE IF EXISTS `tblDesignation`;

CREATE TABLE `tblDesignation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '1' COMMENT '0->Inactive,1->Active',
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

/*Data for the table `tblDesignation` */

insert  into `tblDesignation`(`id`,`title`,`deleted`,`createdDate`) values 
(1,'Director - Mobility','1','2020-10-15 15:08:06'),
(2,'Technical Architect','1','2020-10-15 15:08:06'),
(3,'Project Manger','1','2020-10-15 15:08:06'),
(4,'COO','1','2020-10-15 15:08:06'),
(5,'Mobile Architect and Process Head','1','2020-10-15 15:08:06'),
(6,'Director - Mobility','1','2020-10-15 15:08:06'),
(7,'Director- Open Source','1','2020-10-15 15:08:06'),
(8,'CEO','1','2020-10-15 15:08:06'),
(9,'HR Manager','1','2020-10-15 15:08:06'),
(10,'HR Generalist','1','2020-10-15 15:08:06'),
(11,'HR Recruiter','1','2020-10-15 15:08:06'),
(12,'CEO','1','2020-10-15 15:08:06'),
(13,'COO','1','2020-10-15 15:08:06'),
(14,'Accounts Executive','1','2020-10-15 15:08:06'),
(15,'Accounts Manager','1','2020-10-15 15:08:06'),
(16,'Mobile Architect and Process Head','1','2020-10-15 15:08:06'),
(17,'Software Developer','1','2020-10-15 15:08:06'),
(18,'Software Developer','1','2020-10-15 15:08:06'),
(19,'Software Developer','1','2020-10-15 15:08:06'),
(20,'Sr. Software Developer','1','2020-10-15 15:08:06'),
(21,'Project Manager','1','2020-10-15 15:08:06'),
(22,'Sr. Software Developer','1','2020-10-15 15:08:06'),
(23,'Sr. Software Developer','1','2020-10-15 15:08:06'),
(24,'Software Developer','1','2020-10-15 15:08:06'),
(25,'Software Developer','1','2020-10-15 15:08:06'),
(26,'Sr. UI Developer','1','2020-10-15 15:08:06'),
(27,'UI Developer','1','2020-10-15 15:08:06'),
(28,'Sr. UI/UX Designer','1','2020-10-15 15:08:06'),
(29,'Sr. UI/UX Designer','1','2020-10-15 15:08:06'),
(30,'UI/UX Designer','1','2020-10-15 15:08:06'),
(31,'Sr. UI/UX Designer','1','2020-10-15 15:08:06'),
(32,'Graphic Designer','1','2020-10-15 15:08:06'),
(33,'Director- Open Source','1','2020-10-15 15:08:06'),
(34,'Software Developer (Node.js )','1','2020-10-15 15:08:06'),
(35,'Sr.Software Developer (Node.js )','1','2020-10-15 15:08:06'),
(36,'Sr.Software Developer (PHP)','1','2020-10-15 15:08:06'),
(37,'Sr.Software Developer (PHP & Wordpress)','1','2020-10-15 15:08:06'),
(38,'Software Developer (React Native )','1','2020-10-15 15:08:06'),
(39,'Director- Open Source','1','2020-10-15 15:08:06'),
(40,'Software Developer','1','2020-10-15 15:08:06'),
(41,'Software Developer','1','2020-10-15 15:08:06'),
(42,'Sr. Software Developer','1','2020-10-15 15:08:06'),
(43,'Delivery Head','1','2020-10-15 15:08:06'),
(44,'COO','1','2020-10-15 15:08:06'),
(45,'Head-Branding & Communication','1','2020-10-15 15:08:06'),
(46,'Sr. Digital Marketing Executive','1','2020-10-15 15:08:06'),
(47,'Sr. SEO Executive','1','2020-10-15 15:08:06'),
(48,'Social Media Marketing Manager','1','2020-10-15 15:08:06'),
(49,'COO','1','2020-10-15 15:08:06'),
(50,'Business Head','1','2020-10-15 15:08:06'),
(51,'BDM','1','2020-10-15 15:08:06'),
(52,'BDE','1','2020-10-15 15:08:06'),
(53,'Video Editor','1','2020-10-15 15:08:06');

/*Table structure for table `tblFeedback` */

DROP TABLE IF EXISTS `tblFeedback`;

CREATE TABLE `tblFeedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resumeId` int(11) DEFAULT NULL,
  `roundId` int(11) DEFAULT NULL,
  `profileSkills` int(2) DEFAULT NULL,
  `communication` int(2) DEFAULT NULL,
  `behaviour` int(2) DEFAULT NULL,
  `attiToWordPostion` int(2) DEFAULT NULL,
  `workExperience` int(2) DEFAULT NULL,
  `teamPlayer` int(2) DEFAULT NULL,
  `strength` varchar(255) DEFAULT NULL,
  `weekness` varchar(255) DEFAULT NULL,
  `additionalComment` varchar(255) DEFAULT NULL,
  `totalTime` varchar(255) DEFAULT NULL,
  `recommendation` enum('1','2','3','4') DEFAULT NULL COMMENT '1->Hire,2->Reject,3->OnHold,4-> Strongly Hire',
  `deleted` enum('0','1') DEFAULT '1' COMMENT '0->Inactive,1->Active',
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `resumeId` (`resumeId`),
  KEY `roundId` (`roundId`),
  KEY `createdBy` (`createdBy`),
  KEY `updatedBy` (`updatedBy`),
  CONSTRAINT `tblFeedback_ibfk_1` FOREIGN KEY (`resumeId`) REFERENCES `tblResumes` (`id`),
  CONSTRAINT `tblFeedback_ibfk_2` FOREIGN KEY (`roundId`) REFERENCES `tblRound` (`id`),
  CONSTRAINT `tblFeedback_ibfk_3` FOREIGN KEY (`createdBy`) REFERENCES `tblUser` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `tblFeedback` */

insert  into `tblFeedback`(`id`,`resumeId`,`roundId`,`profileSkills`,`communication`,`behaviour`,`attiToWordPostion`,`workExperience`,`teamPlayer`,`strength`,`weekness`,`additionalComment`,`totalTime`,`recommendation`,`deleted`,`createdDate`,`createdBy`,`updatedDate`,`updatedBy`) values 
(13,10,83,5,5,5,5,5,5,'sdf','jsbkj','fsb','15Min','1','1','2020-10-19 18:11:48',1,NULL,NULL);

/*Table structure for table `tblJob` */

DROP TABLE IF EXISTS `tblJob`;

CREATE TABLE `tblJob` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniqueId` varchar(10) DEFAULT NULL,
  `profile` int(11) DEFAULT NULL,
  `askedby` varchar(50) DEFAULT NULL,
  `minExp` varchar(50) DEFAULT NULL,
  `maxExp` varchar(50) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `description` text,
  `responsiblity` text,
  `skills` text,
  `isVideos` enum('1','2') DEFAULT NULL COMMENT '1->required,2->not required',
  `deleted` enum('0','1') DEFAULT '1' COMMENT '0->Inactive,1->Active',
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `profile` (`profile`),
  KEY `createdBy` (`createdBy`),
  CONSTRAINT `tblJob_ibfk_1` FOREIGN KEY (`profile`) REFERENCES `tblProfile` (`id`),
  CONSTRAINT `tblJob_ibfk_2` FOREIGN KEY (`createdBy`) REFERENCES `tblUser` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tblJob` */

insert  into `tblJob`(`id`,`uniqueId`,`profile`,`askedby`,`minExp`,`maxExp`,`location`,`description`,`responsiblity`,`skills`,`isVideos`,`deleted`,`createdDate`,`createdBy`,`updatedDate`,`updatedBy`) values 
(1,'ABCD',3,'ANKIT','2','3','NOIDA','sdfffffffffffff','sdddddddddddddddddddd','RAJPAL ',NULL,'1','2020-10-05 18:27:48',1,'2020-10-05 06:24:22',NULL),
(2,'BCD2',2,'ABINAV','1','5','NOIDA',NULL,NULL,NULL,NULL,'1','2020-10-03 18:27:53',1,NULL,NULL);

/*Table structure for table `tblOffer` */

DROP TABLE IF EXISTS `tblOffer`;

CREATE TABLE `tblOffer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resumeId` int(11) DEFAULT NULL,
  `jobId` int(11) DEFAULT NULL,
  `joinDate` date DEFAULT NULL,
  `offerCTC` varchar(20) DEFAULT NULL,
  `finalCTC` varchar(20) DEFAULT NULL,
  `confirmJoinDate` date DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '1' COMMENT '0->Inactive,1->Active',
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `resumeId` (`resumeId`),
  KEY `createdBy` (`createdBy`),
  KEY `jobId` (`jobId`),
  CONSTRAINT `tblOffer_ibfk_1` FOREIGN KEY (`resumeId`) REFERENCES `tblResumes` (`id`),
  CONSTRAINT `tblOffer_ibfk_3` FOREIGN KEY (`createdBy`) REFERENCES `tblUser` (`id`),
  CONSTRAINT `tblOffer_ibfk_4` FOREIGN KEY (`jobId`) REFERENCES `tblJob` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tblOffer` */

insert  into `tblOffer`(`id`,`resumeId`,`jobId`,`joinDate`,`offerCTC`,`finalCTC`,`confirmJoinDate`,`deleted`,`createdDate`,`createdBy`,`updatedDate`,`updatedBy`) values 
(1,2,2,'2020-10-14','45','45667','2020-10-14','1','2020-10-14 10:33:31',NULL,'2020-10-14 10:33:31',NULL),
(2,8,2,'2020-10-14','345','sadsa','2020-10-16','1','2020-10-14 10:34:38',NULL,'2020-10-14 10:34:38',NULL),
(3,9,2,'2020-10-15','8.9','2.4','2020-10-19','1','2020-10-19 15:09:12',NULL,'2020-10-19 03:09:12',2),
(4,10,2,'2020-10-12','222',NULL,NULL,'1','2020-10-12 20:05:22',NULL,NULL,NULL);

/*Table structure for table `tblProfile` */

DROP TABLE IF EXISTS `tblProfile`;

CREATE TABLE `tblProfile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '1' COMMENT '0->Inactive,1->Active',
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

/*Data for the table `tblProfile` */

insert  into `tblProfile`(`id`,`title`,`deleted`,`createdDate`) values 
(1,'Project Manager','1','2020-10-15 15:06:53'),
(2,'Sr. Project Manager','1','2020-10-15 15:06:53'),
(3,'Mobile Architect','1','2020-10-15 15:06:53'),
(4,'Web Architect','1','2020-10-15 15:06:53'),
(5,'HR Recruiter','1','2020-10-15 15:06:53'),
(6,'HR Generalist','1','2020-10-15 15:06:53'),
(7,'Accounts Manager','1','2020-10-15 15:06:53'),
(8,'Android Trainee','1','2020-10-15 15:06:53'),
(9,'Android Developer','1','2020-10-15 15:06:53'),
(10,'Sr. Android Developer','1','2020-10-15 15:06:53'),
(11,'iOS Trainee','1','2020-10-15 15:06:53'),
(12,'iOS Developer','1','2020-10-15 15:06:53'),
(13,'Sr iOS Developer','1','2020-10-15 15:06:53'),
(14,'HTML Trainee','1','2020-10-15 15:06:53'),
(15,'HTML Developer','1','2020-10-15 15:06:53'),
(16,'Sr.HTML Developer','1','2020-10-15 15:06:53'),
(17,'UI/UX Trainee','1','2020-10-15 15:06:53'),
(18,'UI/UX Designier','1','2020-10-15 15:06:53'),
(19,'Sr.UI/UX Designer','1','2020-10-15 15:06:53'),
(20,'Graphic Designer Trainee','1','2020-10-15 15:06:53'),
(21,'Graphic Designing','1','2020-10-15 15:06:53'),
(22,'Sr.Graphic Designing','1','2020-10-15 15:06:53'),
(23,'Backend Trainee','1','2020-10-15 15:06:53'),
(24,'Java Developer','1','2020-10-15 15:06:53'),
(25,'Node.Js Developer','1','2020-10-15 15:06:53'),
(26,'Sr.Node.Js Developer','1','2020-10-15 15:06:53'),
(27,'Angular JS Developer','1','2020-10-15 15:06:53'),
(28,'PHP Developer','1','2020-10-15 15:06:53'),
(29,'Sr. PHP Developer','1','2020-10-15 15:06:53'),
(30,'Ionic Developer ','1','2020-10-15 15:06:53'),
(31,'Wordpress Developer','1','2020-10-15 15:06:53'),
(32,'Python Developer','1','2020-10-15 15:06:53'),
(33,'React Native Developer','1','2020-10-15 15:06:53'),
(34,'Sr. React Native Developer','1','2020-10-15 15:06:53'),
(35,'System Administrator','1','2020-10-15 15:06:53'),
(36,'AWS and Cloud Engineer','1','2020-10-15 15:06:53'),
(37,'QA Automation Trainee','1','2020-10-15 15:06:53'),
(38,'QA Automation Trainee','1','2020-10-15 15:06:53'),
(39,'Sr. QA Automation Engineer','1','2020-10-15 15:06:53'),
(40,'Content Writer','1','2020-10-15 15:06:53'),
(41,'Sr. Content Writer','1','2020-10-15 15:06:53'),
(42,'SEO Trainee','1','2020-10-15 15:06:53'),
(43,'SEO','1','2020-10-15 15:06:53'),
(44,'Sr. SEO','1','2020-10-15 15:06:53'),
(45,'Digital Marketing Manager','1','2020-10-15 15:06:53'),
(46,'Social Media Marketing Manager','1','2020-10-15 15:06:53'),
(47,'Business Development Executive','1','2020-10-15 15:06:53'),
(48,'Business Development Manager','1','2020-10-15 15:06:53'),
(49,'Business Head','1','2020-10-15 15:06:53'),
(50,'Video Editor Trainee','1','2020-10-15 15:06:53'),
(51,'Video Editor','1','2020-10-15 15:06:53'),
(52,'Executive Assistant','1','2020-10-15 15:06:53'),
(53,'Admin','1','2020-10-15 15:06:53');

/*Table structure for table `tblResonToReject` */

DROP TABLE IF EXISTS `tblResonToReject`;

CREATE TABLE `tblResonToReject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '1' COMMENT '0->Inactive,1->Active',
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tblResonToReject` */

insert  into `tblResonToReject`(`id`,`title`,`deleted`,`createdDate`) values 
(1,'Weak Communication Skills','1','2020-10-07 19:15:16'),
(2,'Not Presentable','1','2020-10-07 19:15:21'),
(3,'Lack of Career Direction','1','2020-10-07 19:15:39'),
(4,'Salary Issues','1','2020-10-07 19:15:41');

/*Table structure for table `tblResumeQuestion` */

DROP TABLE IF EXISTS `tblResumeQuestion`;

CREATE TABLE `tblResumeQuestion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resumeId` int(11) DEFAULT NULL,
  `manageTeam` text,
  `programingLanguage` text,
  `framework` text,
  `majortask` text,
  `knowTechugo` text,
  `expectationRole` text,
  `deleted` enum('0','1') DEFAULT '1' COMMENT '0->Inactive,1->Active',
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `resumeId` (`resumeId`),
  KEY `createdBy` (`createdBy`),
  CONSTRAINT `tblResumeQuestion_ibfk_1` FOREIGN KEY (`resumeId`) REFERENCES `tblResumes` (`id`),
  CONSTRAINT `tblResumeQuestion_ibfk_2` FOREIGN KEY (`createdBy`) REFERENCES `tblUser` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `tblResumeQuestion` */

insert  into `tblResumeQuestion`(`id`,`resumeId`,`manageTeam`,`programingLanguage`,`framework`,`majortask`,`knowTechugo`,`expectationRole`,`deleted`,`createdDate`,`createdBy`,`updatedDate`,`updatedBy`) values 
(1,1,'It’s important to get to know members of your team individually, not only on a professional level but on a more personal level too. When you put the effort in to get to know a bit more about how your colleagues are doing and what they are interested in, it will build a much better rapport among the team','Node js ,anguler','nodejs,CI,Anguler','With my strong customer service background and problem-solving skills, I feel successful in tasks involving interacting with customers. Customers often acknowledge how they appreciated the quality of service \r\nI provide. I also enjoy fulfilling administrative duties and would love the opportunity to grow and develop my abilities in related tasks','website','Developer','1','2020-10-06 12:42:43',NULL,NULL,NULL),
(2,2,'It’s important to get to know members of your team individually, not only on a professional level but on a more personal level too. \r\nWhen you put the effort in to get to know a bit more about how your colleagues are doing and what they are interested in, it will build a much better rapport among the team','Node js ,anguler','java','With my strong customer service background and problem-solving skills, I feel successful in tasks involving interacting with customers. Customers often acknowledge how they appreciated the quality of service \r\nI provide. I also enjoy fulfilling administrative duties and would love the opportunity to grow and develop my abilities in related tasks','website','Developer','1','2020-10-06 12:42:43',NULL,NULL,NULL),
(3,3,'It’s important to get to know members of your team individually, not only on a professional level but on a more personal level too. \r\nWhen you put the effort in to get to know a bit more about how your colleagues are doing and what they are interested in, it will build a much better rapport among the team','Node js ,anguler','nodejs,CI,Anguler','With my strong customer service background and problem-solving skills, I feel successful in tasks involving interacting with customers. Customers often acknowledge how they appreciated the quality of service \r\nI provide. I also enjoy fulfilling administrative duties and would love the opportunity to grow and develop my abilities in related tasks','website','Developer','1','2020-10-06 12:42:43',NULL,NULL,NULL),
(4,4,'It’s important to get to know members of your team individually, not only on a professional level but on a more personal level too. \r\nWhen you put the effort in to get to know a bit more about how your colleagues are doing and what they are interested in, it will build a much better rapport among the team','Node js ,anguler','nodejs,CI,Anguler','With my strong customer service background and problem-solving skills, I feel successful in tasks involving interacting with customers. Customers often acknowledge how they appreciated the quality of service \r\nI provide. I also enjoy fulfilling administrative duties and would love the opportunity to grow and develop my abilities in related tasks','website','Developer','1','2020-10-06 12:42:43',NULL,NULL,NULL),
(5,5,'It’s important to get to know members of your team individually, not only on a professional level but on a more personal level too. \r\nWhen you put the effort in to get to know a bit more about how your colleagues are doing and what they are interested in, it will build a much better rapport among the team','Node js ,anguler','nodejs,CI,Anguler','With my strong customer service background and problem-solving skills, I feel successful in tasks involving interacting with customers. Customers often acknowledge how they appreciated the quality of service \r\nI provide. I also enjoy fulfilling administrative duties and would love the opportunity to grow and develop my abilities in related tasks','website','Developer','1','2020-10-06 12:42:43',NULL,NULL,NULL),
(6,6,'It’s important to get to know members of your team individually, not only on a professional level but on a more personal level too. \r\nWhen you put the effort in to get to know a bit more about how your colleagues are doing and what they are interested in, it will build a much better rapport among the team','Node js ,anguler','nodejs,CI,Anguler','With my strong customer service background and problem-solving skills, I feel successful in tasks involving interacting with customers. Customers often acknowledge how they appreciated the quality of service \r\nI provide. I also enjoy fulfilling administrative duties and would love the opportunity to grow and develop my abilities in related tasks','website','Developer','1','2020-10-06 12:42:43',NULL,NULL,NULL),
(7,7,'It’s important to get to know members of your team individually, not only on a professional level but on a more personal level too. \r\nWhen you put the effort in to get to know a bit more about how your colleagues are doing and what they are interested in, it will build a much better rapport among the team','Node js ,anguler','nodejs,CI,Anguler','With my strong customer service background and problem-solving skills, I feel successful in tasks involving interacting with customers. Customers often acknowledge how they appreciated the quality of service \r\nI provide. I also enjoy fulfilling administrative duties and would love the opportunity to grow and develop my abilities in related tasks','website','Developer','1','2020-10-06 12:42:43',NULL,NULL,NULL),
(8,8,'It’s important to get to know members of your team individually, not only on a professional level but on a more personal level too. \r\nWhen you put the effort in to get to know a bit more about how your colleagues are doing and what they are interested in, it will build a much better rapport among the team','Node js ,anguler','nodejs,CI,Anguler','With my strong customer service background and problem-solving skills, I feel successful in tasks involving interacting with customers. Customers often acknowledge how they appreciated the quality of service \r\nI provide. I also enjoy fulfilling administrative duties and would love the opportunity to grow and develop my abilities in related tasks','website','Developer','1','2020-10-06 12:42:43',NULL,NULL,NULL),
(9,9,'It’s important to get to know members of your team individually, not only on a professional level but on a more personal level too. \r\nWhen you put the effort in to get to know a bit more about how your colleagues are doing and what they are interested in, it will build a much better rapport among the team','Node js ,anguler','nodejs,CI,Anguler','With my strong customer service background and problem-solving skills, I feel successful in tasks involving interacting with customers. Customers often acknowledge how they appreciated the quality of service \r\nI provide. I also enjoy fulfilling administrative duties and would love the opportunity to grow and develop my abilities in related tasks','website','Developer','1','2020-10-06 12:42:43',NULL,NULL,NULL),
(10,10,'It’s important to get to know members of your team individually, not only on a professional level but on a more personal level too. \r\nWhen you put the effort in to get to know a bit more about how your colleagues are doing and what they are interested in, it will build a much better rapport among the team','Node js ,anguler','nodejs,CI,Anguler','With my strong customer service background and problem-solving skills, I feel successful in tasks involving interacting with customers. Customers often acknowledge how they appreciated the quality of service \r\nI provide. I also enjoy fulfilling administrative duties and would love the opportunity to grow and develop my abilities in related tasks','website','Developer','1','2020-10-06 12:42:43',NULL,NULL,NULL),
(11,11,'It’s important to get to know members of your team individually, not only on a professional level but on a more personal level too. \r\nWhen you put the effort in to get to know a bit more about how your colleagues are doing and what they are interested in, it will build a much better rapport among the team','Node js ,anguler','nodejs,CI,Anguler','With my strong customer service background and problem-solving skills, I feel successful in tasks involving interacting with customers. Customers often acknowledge how they appreciated the quality of service \r\nI provide. I also enjoy fulfilling administrative duties and would love the opportunity to grow and develop my abilities in related tasks','website','Developer','1','2020-10-06 12:42:43',NULL,NULL,NULL),
(12,12,'It’s important to get to know members of your team individually, not only on a professional level but on a more personal level too. \r\nWhen you put the effort in to get to know a bit more about how your colleagues are doing and what they are interested in, it will build a much better rapport among the team','Node js ,anguler','nodejs,CI,Anguler','With my strong customer service background and problem-solving skills, I feel successful in tasks involving interacting with customers. Customers often acknowledge how they appreciated the quality of service \r\nI provide. I also enjoy fulfilling administrative duties and would love the opportunity to grow and develop my abilities in related tasks','website','Developer','1','2020-10-06 12:42:43',NULL,NULL,NULL);

/*Table structure for table `tblResumes` */

DROP TABLE IF EXISTS `tblResumes`;

CREATE TABLE `tblResumes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jobId` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `mobile` varchar(12) DEFAULT NULL,
  `lastCompany` varchar(255) DEFAULT NULL,
  `totalExperince` float(15,1) DEFAULT NULL,
  `resume` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `accept` varchar(20) DEFAULT NULL,
  `reject` varchar(11) DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '1' COMMENT '0->Inactive,1->Active',
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reject` (`reject`),
  KEY `jobId` (`jobId`),
  CONSTRAINT `tblResumes_ibfk_2` FOREIGN KEY (`jobId`) REFERENCES `tblJob` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `tblResumes` */

insert  into `tblResumes`(`id`,`jobId`,`email`,`name`,`mobile`,`lastCompany`,`totalExperince`,`resume`,`video`,`accept`,`reject`,`deleted`,`createdDate`,`createdBy`,`updatedDate`,`updatedBy`) values 
(1,1,'ACBD@gmail.com','RAJPAL','9090909090','BSC',4.6,'http://localhost/RecuriterInterviewPanel/upload/rupeshparmarWA.pdf','https://www.youtube.com/embed/XKu_SEDAykw',NULL,NULL,'1','2020-10-12 20:08:28',2,NULL,NULL),
(2,2,'mnop@gmail.com','JASPAL','0990909090','google',2.3,'http://localhost/RecuriterInterviewPanel/upload/rupeshparmarWA.pdf','https://www.youtube.com/embed/XKu_SEDAykw',NULL,'3,4,','1','2020-10-15 18:55:28',2,'2020-10-15 06:55:28',NULL),
(3,1,'abcd@gmail.com2','MOHAN','345345','wipro',3.0,'http://localhost/RecuriterInterviewPanel/upload/rupeshparmarWA.pdf','https://www.youtube.com/embed/XKu_SEDAykw',NULL,NULL,'1','2020-10-14 10:21:50',2,'2020-10-12 08:23:40',NULL),
(4,1,'abcd@gmail.com3','VIPIN','34543534','hcl',4.0,'http://localhost/RecuriterInterviewPanel/upload/rupeshparmarWA.pdf','https://www.youtube.com/embed/XKu_SEDAykw',NULL,NULL,'1','2020-10-06 15:46:38',2,NULL,NULL),
(5,1,'abcd@gmail.com4','Surbhi','455345','youtube',4.0,'http://localhost/RecuriterInterviewPanel/upload/rupeshparmarWA.pdf','https://www.youtube.com/embed/XKu_SEDAykw',NULL,NULL,'1','2020-10-15 18:55:17',2,NULL,NULL),
(6,1,'abcd@gmail.com5','Suraj','0990909090','faceebok',1.0,'http://localhost/RecuriterInterviewPanel/upload/rupeshparmarWA.pdf','https://www.youtube.com/embed/XKu_SEDAykw',NULL,NULL,'1','2020-10-06 15:46:38',2,NULL,NULL),
(7,1,'abcd@gmail.com6','Amit','345435','chetu',2.0,'http://localhost/RecuriterInterviewPanel/upload/rupeshparmarWA.pdf','https://www.youtube.com/embed/Qp4HjYuy56g',NULL,NULL,'1','2020-10-15 18:55:15',2,NULL,NULL),
(8,2,'abcd@gmail.com7','Raghu','435435','niit',2.0,'http://localhost/RecuriterInterviewPanel/upload/rupeshparmarWA.pdf','https://www.youtube.com/embed/XKu_SEDAykw',NULL,'1,2,3,4,','1','2020-10-15 18:57:20',2,'2020-10-15 06:57:20',NULL),
(9,2,'abcd@gmail.com8','Sumit','0990909090','lal10',2.0,'http://localhost/RecuriterInterviewPanel/upload/rupeshparmarWA.pdf','https://www.youtube.com/embed/XKu_SEDAykw','1',NULL,'1','2020-10-19 15:09:12',2,'2020-10-14 10:05:43',NULL),
(10,2,'abcd@gmail.com9','Manish','23423423','nike',3.0,'http://localhost/RecuriterInterviewPanel/upload/rupeshparmarWA.pdf','https://www.youtube.com/embed/Qp4HjYuy56g',NULL,NULL,'1','2020-10-15 18:55:12',2,'2020-10-15 06:48:28',NULL),
(11,2,'abcd@gmail.com10','Prakash','3453453','nice',3.0,'http://localhost/RecuriterInterviewPanel/upload/rupeshparmarWA.pdf','https://www.youtube.com/embed/XKu_SEDAykw',NULL,NULL,'1','2020-10-15 18:55:13',2,'2020-10-14 10:21:25',NULL),
(12,2,'abcd@gmail.com11','ambuj','0990909090','oracle',2.0,'http://localhost/RecuriterInterviewPanel/upload/rupeshparmarWA.pdf','https://www.youtube.com/embed/zV9tKjPg44',NULL,NULL,'1','2020-10-15 18:55:13',2,'2020-10-15 06:49:03',NULL);

/*Table structure for table `tblRound` */

DROP TABLE IF EXISTS `tblRound`;

CREATE TABLE `tblRound` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resumeId` int(11) DEFAULT NULL,
  `round` int(2) DEFAULT '0',
  `interviewDate` date DEFAULT NULL,
  `interviewTime` varchar(50) DEFAULT NULL,
  `interviewerId` int(11) DEFAULT NULL,
  `interviewTaken` enum('0','1') DEFAULT '0' COMMENT '0->NotTaken,1->Taken',
  `mode` varchar(50) DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '1' COMMENT '0->Inactive,1->Active',
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `resumeId` (`resumeId`),
  KEY `createdBy` (`createdBy`),
  KEY `interviewerId` (`interviewerId`),
  CONSTRAINT `tblRound_ibfk_1` FOREIGN KEY (`resumeId`) REFERENCES `tblResumes` (`id`),
  CONSTRAINT `tblRound_ibfk_2` FOREIGN KEY (`createdBy`) REFERENCES `tblUser` (`id`),
  CONSTRAINT `tblRound_ibfk_3` FOREIGN KEY (`interviewerId`) REFERENCES `tblUser` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=latin1;

/*Data for the table `tblRound` */

insert  into `tblRound`(`id`,`resumeId`,`round`,`interviewDate`,`interviewTime`,`interviewerId`,`interviewTaken`,`mode`,`deleted`,`createdDate`,`createdBy`,`updatedDate`,`updatedBy`) values 
(83,10,1,'2020-10-19','20:42',1,'1','Online','1','2020-10-19 18:11:48',2,'2020-10-19 06:11:48',1);

/*Table structure for table `tblUser` */

DROP TABLE IF EXISTS `tblUser`;

CREATE TABLE `tblUser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniqueId` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `role` enum('0','1') DEFAULT '1' COMMENT '0->Admin,1->Interviewer',
  `mobile` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `otp` int(6) DEFAULT NULL,
  `verified` enum('0','1') DEFAULT '0' COMMENT '0->unverified,1->verified',
  `department` int(11) DEFAULT NULL,
  `designatin` int(11) DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '1' COMMENT '0->Inactive,1->Active',
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `department` (`department`),
  KEY `designatin` (`designatin`),
  CONSTRAINT `tblUser_ibfk_1` FOREIGN KEY (`department`) REFERENCES `tblDepartment` (`id`),
  CONSTRAINT `tblUser_ibfk_2` FOREIGN KEY (`designatin`) REFERENCES `tblDesignation` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tblUser` */

insert  into `tblUser`(`id`,`uniqueId`,`name`,`role`,`mobile`,`email`,`password`,`otp`,`verified`,`department`,`designatin`,`deleted`,`createdDate`,`createdBy`,`updatedDate`,`updatedBy`) values 
(1,NULL,'Raj','1','32435345','rajpal@techugo.com','827ccb0eea8a706c4c34a16891f84e7b',2473,'0',2,1,'1','2020-10-19 18:00:16',NULL,NULL,NULL),
(2,NULL,'Admin','0','43534656','rajpal@techugo.com','827ccb0eea8a706c4c34a16891f84e7b',2473,'0',NULL,NULL,'1','2020-10-19 18:00:16',NULL,NULL,NULL),
(3,NULL,'Ankit','1','5465','ankit@gmail.com','827ccb0eea8a706c4c34a16891f84e7b',1234,'0',3,2,'1','2020-10-12 17:14:34',NULL,'2020-10-07 01:29:26',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
