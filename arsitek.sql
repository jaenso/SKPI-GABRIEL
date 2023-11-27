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
  `periode` text DEFAULT NULL,
  `file_sertifikat` text DEFAULT NULL,
  `kategori` varchar(256) DEFAULT NULL,
  `validasi` varchar(256) DEFAULT 'BARU',
  `ket_validasi` varchar(256) DEFAULT 'Pengajuan Baru. Belum Validasi.',
  `nim` varchar(256) DEFAULT NULL,
  `path_sertifikat` text DEFAULT NULL,
  PRIMARY KEY (`id_kegiatan`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_kegiatan` */

insert  into `tbl_kegiatan`(`id_kegiatan`,`kegiatan`,`peran`,`no_sertifikat`,`penyelenggara`,`periode`,`file_sertifikat`,`kategori`,`validasi`,`ket_validasi`,`nim`,`path_sertifikat`) values 
(39,'organisasi','o','o','o','o','FORMULIR_KKN3.pdf','organisasi','TIDAK VALID','Pengajuan Baru. Belum Validasi.','203020503044','./uploads/SERTIFIKAT/FORMULIR_KKN3.pdf'),
(40,'o1','o1','o1','o1','o1','KESANGGUPAN_KKN.pdf','organisasi','BARU','Pengajuan Baru. Belum Validasi.','203020503044','./uploads/SERTIFIKAT/KESANGGUPAN_KKN.pdf'),
(41,'l','l','l','l','l','KESANGGUPAN_KKN1.pdf','prestasi','TIDAK VALID','Pengajuan Baru. Belum Validasi.','203020503044','./uploads/SERTIFIKAT/KESANGGUPAN_KKN1.pdf'),
(42,'ku','ku','ku','ku','ku','FORMULIR_KKN.pdf','pertemuan','TIDAK VALID','Pengajuan Baru. Belum Validasi.','203020503044','./uploads/SERTIFIKAT/FORMULIR_KKN.pdf'),
(43,'pk','pk','pk','pk','pk','FORMULIR_KKN1.pdf','pelatihan','TIDAK VALID','Pengajuan Baru. Belum Validasi.','203020503044','./uploads/SERTIFIKAT/FORMULIR_KKN1.pdf'),
(44,'pn','pn','pn','pn','pn','FORMULIR_KKN2.pdf','penunjang','TIDAK VALID','Pengajuan Baru. Belum Validasi.','203020503044','./uploads/SERTIFIKAT/FORMULIR_KKN2.pdf');

/*Table structure for table `tbl_khs` */

DROP TABLE IF EXISTS `tbl_khs`;

CREATE TABLE `tbl_khs` (
  `id_khs` int(11) NOT NULL AUTO_INCREMENT,
  `semester` int(11) DEFAULT NULL,
  `jml_matkul` int(11) DEFAULT NULL,
  `jml_sks_program` int(11) DEFAULT NULL,
  `jml_sks_lulus` int(11) DEFAULT NULL,
  `validasi` varchar(256) DEFAULT 'BARU',
  `ket_validasi` varchar(256) DEFAULT 'Pengajuan Nilai Baru. Silahkan Input Nilai.',
  `nim` varchar(256) DEFAULT NULL,
  `file_akademik` text DEFAULT NULL,
  `path_akademik` text DEFAULT NULL,
  PRIMARY KEY (`id_khs`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_khs` */

insert  into `tbl_khs`(`id_khs`,`semester`,`jml_matkul`,`jml_sks_program`,`jml_sks_lulus`,`validasi`,`ket_validasi`,`nim`,`file_akademik`,`path_akademik`) values 
(22,12,12,12,12,'VALID','berhasil','203020503044','PROFIL_KKN.jpg','./uploads/AKADEMIK/PROFIL_KKN.jpg'),
(24,1,2,3,4,'BARU','Pengajuan Nilai Baru. Silahkan Input Nilai.','203020503045','berita-1.png','./uploads/AKADEMIK/berita-1.png');

/*Table structure for table `tbl_mahasiswa` */

DROP TABLE IF EXISTS `tbl_mahasiswa`;

CREATE TABLE `tbl_mahasiswa` (
  `id_mhs` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(256) DEFAULT NULL,
  `tgl_lahir` varchar(256) DEFAULT NULL,
  `tempat_lahir` varchar(256) DEFAULT NULL,
  `no_hp` varchar(256) DEFAULT NULL,
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
  `nim` text DEFAULT NULL,
  `angkatan` varchar(11) DEFAULT NULL,
  `prodi` varchar(245) DEFAULT NULL,
  `path_foto` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id_mhs`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_mahasiswa` */

insert  into `tbl_mahasiswa`(`id_mhs`,`nama`,`tgl_lahir`,`tempat_lahir`,`no_hp`,`email`,`kelamin`,`agama`,`nik`,`alamat_pky`,`alamat_asal`,`ayah`,`ibu`,`tgl_masuk`,`dosen_pa`,`foto`,`nim`,`angkatan`,`prodi`,`path_foto`) values 
(3,'Jason Statham','2023-10-27','Sydenham, Inggris','+6287811914076','joshuaevansavero@gmail.com','Pria','Protestan','1234','Jl. Ranying Suring No. 2','Jl. Ranying Suring No. 2','astyu','ASSTT',NULL,'Dr. Rudi Waluyo, S.T., M.T.','NUR.png','203020503044','2023','Teknik Sipil','./uploads/MAHASISWA/NUR.png'),
(5,'Chara Sinta','2023-10-30','Jawa Tengah','+6287811914076','saverojoshua@gmail.com','Pria','Protestan','1234','0','0','astyu','ASSTT',NULL,'Dr. Rudi Waluyo, S.T., M.T.',NULL,'203020503045','2023','Teknik Sipil',NULL);

/*Table structure for table `tbl_matkul` */

DROP TABLE IF EXISTS `tbl_matkul`;

CREATE TABLE `tbl_matkul` (
  `id_matkul` int(11) NOT NULL AUTO_INCREMENT,
  `mata_kuliah` varchar(256) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_matkul`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_matkul` */

insert  into `tbl_matkul`(`id_matkul`,`mata_kuliah`,`semester`) values 
(2,'1',8),
(4,'12345',12345);

/*Table structure for table `tbl_mbkm` */

DROP TABLE IF EXISTS `tbl_mbkm`;

CREATE TABLE `tbl_mbkm` (
  `id_mbkm` int(11) NOT NULL AUTO_INCREMENT,
  `kegiatan` text DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `validasi` varchar(256) DEFAULT 'BARU',
  `ket_validasi` varchar(256) DEFAULT 'Pengajuan Baru. Belum Validasi.',
  `nim` varchar(256) DEFAULT NULL,
  `file_akademik` text DEFAULT NULL,
  `path_akademik` text DEFAULT NULL,
  PRIMARY KEY (`id_mbkm`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_mbkm` */

insert  into `tbl_mbkm`(`id_mbkm`,`kegiatan`,`keterangan`,`validasi`,`ket_validasi`,`nim`,`file_akademik`,`path_akademik`) values 
(7,'12','12','TINJAU ULANG','berhasil','203020503044','tabel_tb_tiket.jpeg','./uploads/AKADEMIK/tabel_tb_tiket.jpeg'),
(8,'123','1234','BARU','Pengajuan Baru. Belum Validasi.','203020503044','Activity_Diagram-Pengunjung.jpg','./uploads/AKADEMIK/Activity_Diagram-Pengunjung.jpg'),
(9,'kontol','kontol','BARU','Pengajuan Baru. Belum Validasi.','203020503044','Activity_Diagram-Pengunjung1.jpg','./uploads/AKADEMIK/Activity_Diagram-Pengunjung1.jpg');

/*Table structure for table `tbl_penilaian` */

DROP TABLE IF EXISTS `tbl_penilaian`;

CREATE TABLE `tbl_penilaian` (
  `id_penilaian` int(11) NOT NULL AUTO_INCREMENT,
  `id_matkul` int(11) DEFAULT NULL,
  `nim` varchar(256) DEFAULT NULL,
  `id_khs` int(11) DEFAULT NULL,
  `nilai` varchar(256) DEFAULT NULL,
  `keterangan` varchar(256) DEFAULT 'Belum Submit',
  PRIMARY KEY (`id_penilaian`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_penilaian` */

insert  into `tbl_penilaian`(`id_penilaian`,`id_matkul`,`nim`,`id_khs`,`nilai`,`keterangan`) values 
(16,2,'203020503045',24,'A','Submit'),
(17,4,'203020503045',24,'B+','Submit'),
(18,4,'203020503044',22,'A','Submit'),
(19,2,'203020503044',22,'B+','Submit'),
(20,2,'203020503044',22,'A','Submit');

/*Table structure for table `tbl_skpi` */

DROP TABLE IF EXISTS `tbl_skpi`;

CREATE TABLE `tbl_skpi` (
  `id_skpi` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(256) DEFAULT NULL,
  `nomor_ijazah` varchar(256) DEFAULT NULL,
  `tanggal_lulus` date DEFAULT NULL,
  `validasi` varchar(256) DEFAULT 'BARU',
  `ket_validasi` varchar(256) DEFAULT 'Pengajuan Baru. Belum Validasi.',
  `file_ijazah` text DEFAULT NULL,
  `path_ijazah` text DEFAULT NULL,
  `file_skpi` text DEFAULT NULL,
  `path_skpi` text DEFAULT NULL,
  `nama_file_skpi` text DEFAULT NULL,
  `status` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id_skpi`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_skpi` */

insert  into `tbl_skpi`(`id_skpi`,`nim`,`nomor_ijazah`,`tanggal_lulus`,`validasi`,`ket_validasi`,`file_ijazah`,`path_ijazah`,`file_skpi`,`path_skpi`,`nama_file_skpi`,`status`) values 
(6,'203020503044','skpi1','2023-11-01','VALID','ok','desc_tbl.jpeg','./uploads/IJAZAH/desc_tbl.jpeg','KTM1.pdf','./uploads/IJAZAH/KTM1.pdf','yang satu udah beres ygy','selesai');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(256) DEFAULT NULL,
  `username` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `id_role` int(11) DEFAULT NULL,
  `validasi` varchar(256) DEFAULT 'tidak_aktif',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `user` */

insert  into `user`(`id_user`,`nama`,`username`,`password`,`id_role`,`validasi`) values 
(1,'Admin','123','$2y$10$PlENJmkK85./6WMD1p87muLxVWhSY0II0DVJ8ZHRwPts4BLgbxEN.',1,'aktif'),
(11,'Jason Statham','203020503044','$2y$10$XB0joOFr7YfZn8kgKLnf2.8gaiXOrHFCJhL/Dz0asUM6/d0E3Nqbu',2,'aktif'),
(13,'Chara','203020503045','$2y$10$Yhn7juWEOvgLVSGsqjB80uBupxQ4N9SB2eP/sELB2u44TRLYPAq3C',2,'aktif');

/* Trigger structure for table `tbl_mahasiswa` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `hapusMahasiswa` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `hapusMahasiswa` AFTER DELETE ON `tbl_mahasiswa` FOR EACH ROW 
BEGIN
    DELETE FROM `USER` WHERE `username` = OLD.`nim`;
END */$$


DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
