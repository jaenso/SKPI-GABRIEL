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

/*Table structure for table `tbl_kegiatan` */

DROP TABLE IF EXISTS `tbl_kegiatan`;

CREATE TABLE `tbl_kegiatan` (
  `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT,
  `kegiatan` text DEFAULT NULL,
  `peran` varchar(256) DEFAULT NULL,
  `no_sertifikat` varchar(256) DEFAULT NULL,
  `penyelenggara` text DEFAULT NULL,
  `periode` date DEFAULT NULL,
  `file_sertifikat` text DEFAULT NULL,
  `kategori` varchar(256) DEFAULT NULL,
  `status` varchar(256) DEFAULT 'BARU',
  `keterangan` varchar(256) DEFAULT 'Pengajuan Baru. Belum Validasi.',
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_kegiatan`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_kegiatan` */

insert  into `tbl_kegiatan`(`id_kegiatan`,`kegiatan`,`peran`,`no_sertifikat`,`penyelenggara`,`periode`,`file_sertifikat`,`kategori`,`status`,`keterangan`,`id_user`) values 
(1,'123423','file_organisasi','file_organisasi','file_organisasi','0000-00-00',NULL,'organisasi','BARU','Pengajuan Baru. Belum Validasi.',NULL),
(2,'file_organisasi','file_organisasi','file_organisasi','file_organisasi','2023-10-20',NULL,'organisasi','BARU','Pengajuan Baru. Belum Validasi.',NULL),
(3,'file_organisasi3','file_organisasi3','file_organisasi3','file_organisasi3','2023-10-27',NULL,'prestasi','BARU','Pengajuan Baru. Belum Validasi.',NULL),
(4,'prestasi gabriel','prestasi gabriel','prestasi gabriel bisa','prestasi gabriel','0000-00-00',NULL,'prestasi','BARU','Pengajuan Baru. Belum Validasi.',NULL),
(5,'pertemuan berhasil','pertemuan berhasil','pertemuan berhasil','pertemuan berhasil','2023-10-22',NULL,'pertemuan','BARU','Pengajuan Baru. Belum Validasi.',NULL),
(6,'cek berhasil','pelatihan','pelatihan','pelatihan','2023-10-22',NULL,'pelatihan','BARU','Pengajuan Baru. Belum Validasi.',NULL),
(7,'last','last','last','pekerjaan','2023-10-22',NULL,'penunjang','BARU','Pengajuan Baru. Belum Validasi.',NULL),
(11,'test','test','test','test','2023-10-25',NULL,'organisasi','BARU','Pengajuan Baru. Belum Validasi.',NULL),
(12,'1234123','1234123','1234123','1234123','2023-10-25',NULL,'organisasi','BARU','Pengajuan Baru. Belum Validasi.',NULL),
(13,'ayp bisa','mudahan bisa','mudahan bisa','gpersaya','2023-10-25',NULL,'organisasi','BARU','Pengajuan Baru. Belum Validasi.',NULL);

/*Table structure for table `tbl_khs` */

DROP TABLE IF EXISTS `tbl_khs`;

CREATE TABLE `tbl_khs` (
  `id_khs` int(11) NOT NULL AUTO_INCREMENT,
  `semester` int(11) DEFAULT NULL,
  `jml_matkul` int(11) DEFAULT NULL,
  `jml_sks_program` int(11) DEFAULT NULL,
  `jml_sks_lulus` int(11) DEFAULT NULL,
  `file_khs` text DEFAULT NULL,
  `status` varchar(11) DEFAULT 'BARU',
  `keterangan` varchar(256) DEFAULT 'Pengajuan Nilai Baru. Silahkan Input Nilai.',
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_khs`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_khs` */

insert  into `tbl_khs`(`id_khs`,`semester`,`jml_matkul`,`jml_sks_program`,`jml_sks_lulus`,`file_khs`,`status`,`keterangan`,`id_user`) values 
(6,8,6,20,120,NULL,'BARU','Pengajuan Nilai Baru. Silahkan Input Nilai.',3);

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
  `keterangan` text DEFAULT NULL,
  `status` varchar(11) DEFAULT 'BARU',
  `ket_status` varchar(256) DEFAULT 'Pengajuan Baru. Belum Validasi.',
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_mbkm`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_mbkm` */

insert  into `tbl_mbkm`(`id_mbkm`,`kegiatan`,`gambar`,`keterangan`,`status`,`ket_status`,`id_user`) values 
(1,'1234',NULL,'1234','BARU','Pengajuan Baru. Belum Validasi.',NULL),
(2,'mau kemana mbkm',NULL,'mau kemana mbkm','BARU','Pengajuan Baru. Belum Validasi.',3);

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
  `status` varchar(256) DEFAULT 'tidak_aktif',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `user` */

insert  into `user`(`id_user`,`nama`,`username`,`password`,`id_role`,`status`) values 
(1,'123','123','$2y$10$PlENJmkK85./6WMD1p87muLxVWhSY0II0DVJ8ZHRwPts4BLgbxEN.',1,'aktif'),
(3,'Gabriel Ambatukan','321','$2y$10$gEeGQVwDKnCaFbitkjVcpu22aHhJN8/h9l4owHQwWrKuAeCZMqTpu',2,'aktif'),
(5,'Akun Terkunci','terkunci','$2y$10$JS0QhShBzENvZpRfoIklOOaOiCtm2MhqLnyKYW3bRkoFa8x2a8Lc.',2,'aktif'),
(6,'masih terkunci','masihterkunci','$2y$10$JTCNXMVc3DtXhaNgFqbjs.yXIHY7272uSwKVTxwZKVlMBjJJGe95y',2,'aktif');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
