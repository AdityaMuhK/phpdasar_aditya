/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.27-MariaDB : Database - db_sekolah
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_sekolah` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `db_sekolah`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(225) DEFAULT NULL,
  `username` varchar(225) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `admin` */

insert  into `admin`(`id`,`email`,`username`,`password`) values 
(1,'adityamuhamadkurniawan@gmail.com','adit','12345678'),
(2,'adityamuhamadkurniawan@gmail.com','adit','12345'),
(3,'adityamuhamadkurniawan@gmail.com','adit','123'),
(4,'adityamuhammadk@gmail.com','adit','1111'),
(5,'adityamuhamadkurniawan@gmail.com','user','12345');

/*Table structure for table `alokasi_mapel` */

DROP TABLE IF EXISTS `alokasi_mapel`;

CREATE TABLE `alokasi_mapel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_mapel` int(11) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_mapel` (`id_mapel`),
  KEY `id_kelas` (`id_kelas`),
  CONSTRAINT `alokasi_mapel_ibfk_1` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id`),
  CONSTRAINT `alokasi_mapel_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `alokasi_mapel` */

/*Table structure for table `guru` */

DROP TABLE IF EXISTS `guru`;

CREATE TABLE `guru` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_guru` varchar(225) DEFAULT NULL,
  `nik` int(11) DEFAULT NULL,
  `gender` varchar(225) DEFAULT NULL,
  `id_mapel` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_mapel` (`id_mapel`),
  CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `guru` */

/*Table structure for table `kelas` */

DROP TABLE IF EXISTS `kelas`;

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tingkat_kelas` int(11) DEFAULT NULL,
  `jurusan_kelas` varchar(225) DEFAULT NULL,
  `id_sekolah` int(11) DEFAULT NULL,
  `id_walikelas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_sekolah` (`id_sekolah`),
  KEY `id_walikelas` (`id_walikelas`),
  CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`id_sekolah`) REFERENCES `sekolah` (`id`),
  CONSTRAINT `kelas_ibfk_2` FOREIGN KEY (`id_walikelas`) REFERENCES `walikelas` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `kelas` */

/*Table structure for table `mapel` */

DROP TABLE IF EXISTS `mapel`;

CREATE TABLE `mapel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_mapel` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `mapel` */

/*Table structure for table `sekolah` */

DROP TABLE IF EXISTS `sekolah`;

CREATE TABLE `sekolah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_sekolah` varchar(225) DEFAULT NULL,
  `alamat_sekolah` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `sekolah` */

insert  into `sekolah`(`id`,`nama_sekolah`,`alamat_sekolah`) values 
(2,'SMK BINUS','mondosari'),
(3,'sewrf','edrf');

/*Table structure for table `siswa` */

DROP TABLE IF EXISTS `siswa`;

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_siswa` varchar(225) DEFAULT NULL,
  `nisn` int(11) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_kelas` (`id_kelas`),
  CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `siswa` */

/*Table structure for table `walikelas` */

DROP TABLE IF EXISTS `walikelas`;

CREATE TABLE `walikelas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_guru` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_guru` (`id_guru`),
  CONSTRAINT `walikelas_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `walikelas` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
