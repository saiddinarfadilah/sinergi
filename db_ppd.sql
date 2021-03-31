/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.11-MariaDB : Database - db_ppd
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_ppd` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_ppd`;

/*Table structure for table `anggaran` */

DROP TABLE IF EXISTS `anggaran`;

CREATE TABLE `anggaran` (
  `id_anggran` int(8) NOT NULL,
  `nama` varchar(32) DEFAULT NULL,
  `jumlah` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id_anggran`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `anggaran` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `tgl` date DEFAULT NULL,
  `pemohon` varchar(64) DEFAULT NULL,
  `divisi` varchar(32) DEFAULT NULL,
  `tipe` varchar(32) DEFAULT NULL,
  `metode` varchar(24) DEFAULT NULL,
  `no_rek` int(16) DEFAULT NULL,
  `penerima` varchar(64) DEFAULT NULL,
  `keterangan` varchar(256) DEFAULT NULL,
  `lampiran` blob DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`id`,`tgl`,`pemohon`,`divisi`,`tipe`,`metode`,`no_rek`,`penerima`,`keterangan`,`lampiran`) values 
(3,'2021-04-01','Said Dinar Fadilah','IT Development','Infak','Transfer',448985730,'Ridwan','pembagian sembako fakir miskin',NULL),
(19,'2021-04-01','Said Dinar','IT SUPPORT','Infak','tunai',667778,'Rizki','','coba.docx'),
(20,'2021-04-02','Vicky','IT SUPPORT','Infak','tunai',696785,'Saya sendiri','','coba.docx');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
