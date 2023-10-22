/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.4.28-MariaDB : Database - arsitek
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`arsitek` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `arsitek`;

/*Table structure for table `tbl_keikutsertaan` */

DROP TABLE IF EXISTS `tbl_keikutsertaan`;

CREATE TABLE `tbl_keikutsertaan` (
  `id_organisasi` int(11) NOT NULL AUTO_INCREMENT,
  `kegiatan` text DEFAULT NULL,
  `peran` varchar(256) DEFAULT NULL,
  `no_sertifikat` varchar(256) DEFAULT NULL,
  `penyelenggara` text DEFAULT NULL,
  `periode` date DEFAULT NULL,
  `file_sertifikat` text DEFAULT NULL,
  `kategori` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id_organisasi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_keikutsertaan` */

/*Table structure for table `tbl_mahasiswa` */

DROP TABLE IF EXISTS `tbl_mahasiswa`;

CREATE TABLE `tbl_mahasiswa` (
  `id_mhs` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(256) DEFAULT NULL,
  `tgl_lahir` varchar(256) DEFAULT NULL,
  `tmp_lahir` varchar(256) DEFAULT NULL,
  `no_ponsel` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `kelamin` varchar(256) DEFAULT NULL,
  `agama` varchar(256) DEFAULT NULL,
  `nik` varchar(256) DEFAULT NULL,
  `alamat_pky` varchar(256) DEFAULT NULL,
  `alamat_asal` varchar(256) DEFAULT NULL,
  `ayah` varchar(256) DEFAULT NULL,
  `ibu` varchar(256) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `dosen_pa` varchar(256) DEFAULT NULL,
  `foto` text DEFAULT NULL,
  PRIMARY KEY (`id_mhs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_mahasiswa` */

/*Table structure for table `tbl_mbkm` */

DROP TABLE IF EXISTS `tbl_mbkm`;

CREATE TABLE `tbl_mbkm` (
  `id_mbkm` int(11) NOT NULL AUTO_INCREMENT,
  `kegiatan` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  PRIMARY KEY (`id_mbkm`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_mbkm` */

/*Table structure for table `tbl_nilai` */

DROP TABLE IF EXISTS `tbl_nilai`;

CREATE TABLE `tbl_nilai` (
  `id_nilai` int(11) NOT NULL AUTO_INCREMENT,
  `semester` int(11) DEFAULT NULL,
  `jml_matkul` int(11) DEFAULT NULL,
  `jml_sks_program` int(11) DEFAULT NULL,
  `jml_sks_lulus` int(11) DEFAULT NULL,
  `file_khs` text DEFAULT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_nilai` */

/*Table structure for table `tbl_skpi` */

DROP TABLE IF EXISTS `tbl_skpi`;

CREATE TABLE `tbl_skpi` (
  `id_skpi` int(11) NOT NULL AUTO_INCREMENT,
  `no_ijazah` varchar(256) DEFAULT NULL,
  `tgl_lulus` date DEFAULT NULL,
  PRIMARY KEY (`id_skpi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_skpi` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(256) DEFAULT NULL,
  `username` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `id_role` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `user` */

insert  into `user`(`id_user`,`nama`,`username`,`password`,`id_role`) values 
(1,'123','123','$2y$10$PlENJmkK85./6WMD1p87muLxVWhSY0II0DVJ8ZHRwPts4BLgbxEN.',1),
(2,NULL,NULL,NULL,NULL),
(3,'321','321','$2y$10$gEeGQVwDKnCaFbitkjVcpu22aHhJN8/h9l4owHQwWrKuAeCZMqTpu',2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
