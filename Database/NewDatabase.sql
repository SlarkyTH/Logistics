/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 5.7.17-log : Database - logistic
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`logistic` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `logistic`;

/*Table structure for table `car` */

DROP TABLE IF EXISTS `car`;

CREATE TABLE `car` (
  `Car_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Car_License` varchar(50) NOT NULL,
  `Car_Type` varchar(50) NOT NULL,
  `Car_Brand` varchar(50) NOT NULL,
  `Car_Model` varchar(50) NOT NULL,
  `Car_Year` int(4) NOT NULL,
  `Car_Color` varchar(20) NOT NULL,
  `Car_Picture` varchar(100) NOT NULL,
  `Driver_Id` int(11) NOT NULL,
  PRIMARY KEY (`Car_Id`),
  UNIQUE KEY `Driver_Id` (`Driver_Id`),
  KEY `Driver_Id_2` (`Driver_Id`),
  CONSTRAINT `car_ibfk_1` FOREIGN KEY (`Driver_Id`) REFERENCES `driver` (`Driver_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `car` */

/*Table structure for table `customer` */

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `Cus_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Cus_Name` varchar(50) NOT NULL,
  `Cus_Address` varchar(50) NOT NULL,
  `Cus_District` varchar(50) NOT NULL,
  `Cus_Area` varchar(50) NOT NULL,
  `Cus_Province` varchar(50) NOT NULL,
  `Cus_Code` int(5) NOT NULL,
  `Cus_Tel` varchar(15) NOT NULL,
  `Cus_Fax` varchar(15) NOT NULL,
  `Cus_Email` varchar(50) NOT NULL,
  `Cus_Website` varchar(50) NOT NULL,
  `Cus_Contacts` varchar(50) NOT NULL,
  `Cus_Telcontacts` varchar(15) NOT NULL,
  PRIMARY KEY (`Cus_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `customer` */

insert  into `customer`(`Cus_Id`,`Cus_Name`,`Cus_Address`,`Cus_District`,`Cus_Area`,`Cus_Province`,`Cus_Code`,`Cus_Tel`,`Cus_Fax`,`Cus_Email`,`Cus_Website`,`Cus_Contacts`,`Cus_Telcontacts`) values (1,'cus','151/1','77','th','ng',11554,'0977774741','8858','cus@gmail.com','www.cus.com','1121','021417474');

/*Table structure for table `driver` */

DROP TABLE IF EXISTS `driver`;

CREATE TABLE `driver` (
  `Driver_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Driver_Name` varchar(50) NOT NULL,
  `Driver_Lastname` varchar(50) NOT NULL,
  `Driver_Nickname` varchar(50) NOT NULL,
  `Driver_Birthday` date NOT NULL,
  `Driver_License` varchar(50) NOT NULL,
  `Driver_Allowed` date NOT NULL,
  `Driver_Expired` date NOT NULL,
  `Driver_Startwork` date NOT NULL,
  `Enter_Id` int(11) NOT NULL,
  PRIMARY KEY (`Driver_Id`),
  KEY `Enter_Id` (`Enter_Id`),
  CONSTRAINT `driver_ibfk_1` FOREIGN KEY (`Enter_Id`) REFERENCES `entrepreneur` (`Enter_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `driver` */

/*Table structure for table `entrepreneur` */

DROP TABLE IF EXISTS `entrepreneur`;

CREATE TABLE `entrepreneur` (
  `Enter_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Enter_Name` varchar(50) NOT NULL,
  `Enter_Company` varchar(50) NOT NULL,
  `Enter_Address` varchar(50) NOT NULL,
  `Enter_District` varchar(50) NOT NULL,
  `Enter_Area` varchar(50) NOT NULL,
  `Enter_Province` varchar(50) NOT NULL,
  `Enter_Code` int(5) NOT NULL,
  `Enter_Tel` varchar(15) NOT NULL,
  `Enter_Fax` varchar(15) NOT NULL,
  `Enter_Email` varchar(50) NOT NULL,
  `Enter_Website` varchar(50) NOT NULL,
  `Enter_user_ref` varchar(20) NOT NULL,
  PRIMARY KEY (`Enter_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `entrepreneur` */

insert  into `entrepreneur`(`Enter_Id`,`Enter_Name`,`Enter_Company`,`Enter_Address`,`Enter_District`,`Enter_Area`,`Enter_Province`,`Enter_Code`,`Enter_Tel`,`Enter_Fax`,`Enter_Email`,`Enter_Website`,`Enter_user_ref`) values (2,'วิศวะ สื่อสุวรรณ','CoAivy Co.,LTD.','248 หมู่4 ต.โรงเข้','ต.โรงเข้','อ.บ้านแพ้ว','จ.สมุทรสาคร',74120,'0829776767','829776767','wisawa.ws@gmail.com','http://www.myweb.com','334807850838962'),(3,'test','test.co.th','118-88','7','th','nh',11515,'0866137525','','test1@gmail.com','','314628753966992'),(4,'cus','test.co.th','118-88','7','th','nh',11515,'0866137525','99','test1@gmail.com','www.cus.com','096266775802490');

/*Table structure for table `expenses` */

DROP TABLE IF EXISTS `expenses`;

CREATE TABLE `expenses` (
  `Expen_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Expen_Oil` int(5) NOT NULL,
  `Expen_Gas` int(5) NOT NULL,
  `Expen_Tickets` int(5) NOT NULL,
  `Expen_Freeway` int(5) NOT NULL,
  `Expen_Shop` int(5) NOT NULL,
  `Expen_Weight` int(5) NOT NULL,
  `Expen_Overtime` int(5) NOT NULL,
  `Expen_Accom` int(5) NOT NULL,
  `Expen_Fine` int(5) NOT NULL,
  `Expen_Allowan` int(5) NOT NULL,
  `Expen_Other` int(5) NOT NULL,
  `Car_Id` int(11) NOT NULL,
  PRIMARY KEY (`Expen_Id`),
  KEY `Car_Id` (`Car_Id`),
  CONSTRAINT `expenses_ibfk_1` FOREIGN KEY (`Car_Id`) REFERENCES `car` (`Car_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `expenses` */

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `log_user` varchar(20) NOT NULL,
  `log_passwd` varchar(20) NOT NULL,
  `log_user_ref` varchar(20) NOT NULL,
  `log_user_type` varchar(20) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `login` */

insert  into `login`(`log_id`,`log_user`,`log_passwd`,`log_user_ref`,`log_user_type`) values (1,'admin','admin','334807850838962','entrepreneur'),(2,'user','user','361335737757339','sender'),(3,'test','test','314628753966992','entrepreneur'),(4,'cus','cus','096266775802490','customer');

/*Table structure for table `product` */

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `Pro_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Pro_Name` varchar(50) NOT NULL,
  `Pro_Shipping` varchar(50) NOT NULL,
  `Pro_Namesource` varchar(50) NOT NULL,
  `Pro_Provisource` varchar(50) NOT NULL,
  `Pro_Deltime` varchar(50) NOT NULL,
  `Pro_Deldate` date NOT NULL,
  `Pro_Destination` varchar(50) NOT NULL,
  `Pro_Prodestination` varchar(50) NOT NULL,
  `Pro_Sendtime` datetime NOT NULL,
  `Enter_Id` int(11) NOT NULL,
  `Cus_Id` int(11) NOT NULL,
  PRIMARY KEY (`Pro_Id`),
  KEY `Enter_Id` (`Enter_Id`),
  KEY `Cus_Id` (`Cus_Id`),
  CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Enter_Id`) REFERENCES `entrepreneur` (`Enter_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `product_ibfk_2` FOREIGN KEY (`Cus_Id`) REFERENCES `customer` (`Cus_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `product` */

insert  into `product`(`Pro_Id`,`Pro_Name`,`Pro_Shipping`,`Pro_Namesource`,`Pro_Provisource`,`Pro_Deltime`,`Pro_Deldate`,`Pro_Destination`,`Pro_Prodestination`,`Pro_Sendtime`,`Enter_Id`,`Cus_Id`) values (2,'iphone','','','','','0000-00-00','','','0000-00-00 00:00:00',2,1),(4,'guitar','','','','','0000-00-00','','','0000-00-00 00:00:00',2,1);

/*Table structure for table `product_quantity` */

DROP TABLE IF EXISTS `product_quantity`;

CREATE TABLE `product_quantity` (
  `ProQ_Id` int(11) NOT NULL AUTO_INCREMENT,
  `ProQ_Typebox` varchar(50) NOT NULL,
  `ProQ_Weight` int(3) NOT NULL,
  `ProQ_Size` varchar(10) NOT NULL,
  `Pro_Id` int(11) NOT NULL,
  PRIMARY KEY (`ProQ_Id`),
  KEY `Pro_Id` (`Pro_Id`),
  CONSTRAINT `product_quantity_ibfk_1` FOREIGN KEY (`Pro_Id`) REFERENCES `product` (`Pro_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `product_quantity` */

/*Table structure for table `sender` */

DROP TABLE IF EXISTS `sender`;

CREATE TABLE `sender` (
  `sen_id` int(11) NOT NULL AUTO_INCREMENT,
  `sen_name` varchar(20) NOT NULL,
  `sen_company` varchar(30) NOT NULL,
  `sen_address` varchar(20) NOT NULL,
  `sen_district` varchar(20) NOT NULL,
  `sen_area` varchar(20) NOT NULL,
  `sen_province` varchar(20) NOT NULL,
  `sen_code` int(5) NOT NULL,
  `sen_tel` varchar(15) NOT NULL,
  `sen_fax` varchar(15) NOT NULL,
  `sen_email` varchar(50) NOT NULL,
  `sen_website` varchar(100) NOT NULL,
  `sen_user_ref` varchar(20) NOT NULL,
  PRIMARY KEY (`sen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `sender` */

insert  into `sender`(`sen_id`,`sen_name`,`sen_company`,`sen_address`,`sen_district`,`sen_area`,`sen_province`,`sen_code`,`sen_tel`,`sen_fax`,`sen_email`,`sen_website`,`sen_user_ref`) values (1,'รวิวรรณ','กุ๊กกู๋','1111','โรงเข้','บ้านแพ้ว','สมุทรสาคร',73000,'0863938435','-','aivy_black@hotmal.com','http://www.myweb.net','361335737757339'),(2,'ชื่นใจ','Google','545','81','Nongchok','Nongchock',10530,'0887774741','-','google@gmail.com','https://www.google.com','361335738874715');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
