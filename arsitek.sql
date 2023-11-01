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
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_kegiatan` */

insert  into `tbl_kegiatan`(`id_kegiatan`,`kegiatan`,`peran`,`no_sertifikat`,`penyelenggara`,`periode`,`file_sertifikat`,`kategori`,`validasi`,`ket_validasi`,`nim`,`path_sertifikat`) values 
(21,'file2','file2','file2','file2','23213','AdminLTE_3_Merdeka_Belajar_Kampus_Merdeka.pdf','prestasi','VALID','Pengajuan Baru. Belum Validasi.','203020503044','./uploads/SERTIFIKAT/AdminLTE_3_Merdeka_Belajar_Kampus_Merdeka.pdf'),
(22,'file3','file3','file3','file3','21 Oktoner','AdminLTE_3_Merdeka_Belajar_Kampus_Merdeka1.pdf','pertemuan','VALID','Pengajuan Baru. Belum Validasi.','203020503044','./uploads/SERTIFIKAT/AdminLTE_3_Merdeka_Belajar_Kampus_Merdeka1.pdf'),
(23,'file4','file4','file4','file4','file4','AdminLTE_3_Merdeka_Belajar_Kampus_Merdeka4.pdf','pelatihan','VALID','Pengajuan Baru. Belum Validasi.','203020503044','./uploads/SERTIFIKAT/AdminLTE_3_Merdeka_Belajar_Kampus_Merdeka4.pdf'),
(27,'hayu hore lagi kita cpna ;oat','apakah bisa','sekali lagi','sekali lagi','sekali lagi','223020503157_Alvin_Valerian_Tugas03.pdf','organisasi','VALID','Pengajuan Baru. Belum Validasi.','203020503044','./uploads/SERTIFIKAT/223020503157_Alvin_Valerian_Tugas03.pdf'),
(32,'pelatihan berhasil','pelatihan berhasil','pelatihan berhasil','pelatihan berhasil','pelatihan berhasil','sampel_siateks1.pdf','pelatihan','BARU','Pengajuan Baru. Belum Validasi.',NULL,'./uploads/SERTIFIKAT/sampel_siateks1.pdf'),
(38,'12345','12345','12345','12345','12345','223030503218_One_Dhylan_barletyano_Tugas_SS_Modul_3.pdf','prestasi','BARU','Pengajuan Baru. Belum Validasi.','203020503044','./uploads/SERTIFIKAT/223030503218_One_Dhylan_barletyano_Tugas_SS_Modul_3.pdf');

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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_khs` */

insert  into `tbl_khs`(`id_khs`,`semester`,`jml_matkul`,`jml_sks_program`,`jml_sks_lulus`,`validasi`,`ket_validasi`,`nim`,`file_akademik`,`path_akademik`) values 
(13,40,6,20,122,'VALID','OKE','203020503044','flora2.png','./uploads/AKADEMIK/flora2.png'),
(15,2,7,21,130,'VALID','astajim\r\n','203020503044','organisasi.png','./uploads/AKADEMIK/organisasi.png'),
(17,12,123456123,123452,12345123,'BARU','Pengajuan Nilai Baru. Silahkan Input Nilai.','203020503044','1234_drawio_(3).png','./uploads/AKADEMIK/1234_drawio_(3).png'),
(18,11,12345,123452,12345123,'BARU','Pengajuan Nilai Baru. Silahkan Input Nilai.','203020503045','flora4.png','./uploads/AKADEMIK/flora4.png'),
(19,123545,12345,123452,12345123,'BARU','Pengajuan Nilai Baru. Silahkan Input Nilai.','203020503044','WhatsApp_Image_2023-10-29_at_00_01_42.jpeg','./uploads/AKADEMIK/WhatsApp_Image_2023-10-29_at_00_01_42.jpeg'),
(20,8,8,8,8,'BARU','Pengajuan Nilai Baru. Silahkan Input Nilai.','203020503044','WhatsApp_Image_2023-10-29_at_00_11_12.jpeg','./uploads/AKADEMIK/WhatsApp_Image_2023-10-29_at_00_11_12.jpeg'),
(21,1,1,1,1,'BARU','Pengajuan Nilai Baru. Silahkan Input Nilai.','203020503044','WhatsApp_Image_2023-10-29_at_14_56_41.jpeg','./uploads/AKADEMIK/WhatsApp_Image_2023-10-29_at_14_56_41.jpeg');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_mahasiswa` */

insert  into `tbl_mahasiswa`(`id_mhs`,`nama`,`tgl_lahir`,`tempat_lahir`,`no_hp`,`email`,`kelamin`,`agama`,`nik`,`alamat_pky`,`alamat_asal`,`ayah`,`ibu`,`tgl_masuk`,`dosen_pa`,`foto`,`nim`,`angkatan`,`prodi`,`path_foto`) values 
(3,'Jason Statham','2023-10-27','Sydenham, Inggris','+6287811914076','joshuaevansavero@gmail.com','Pria','Protestan','1234','Jl. Ranying Suring No. 2','Jl. Ranying Suring No. 2','astyu','ASSTT',NULL,'Dr. Rudi Waluyo, S.T., M.T.','NUR.png','203020503044','2023','Teknik Sipil','./uploads/MAHASISWA/NUR.png'),
(5,'Chara Sinta','2023-10-30','Jawa Tengah','+6287811914076','saverojoshua@gmail.com','Pria','Protestan','1234','0','0','astyu','ASSTT',NULL,'Dr. Rudi Waluyo, S.T., M.T.',NULL,'203020503045','2023','Teknik Sipil',NULL);

/*Table structure for table `tbl_matkul` */

DROP TABLE IF EXISTS `tbl_matkul`;

CREATE TABLE `tbl_matkul` (
  `id_matkul` int(11) NOT NULL AUTO_INCREMENT,
  `mata_kuliah` text DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_matkul`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_matkul` */

insert  into `tbl_matkul`(`id_matkul`,`mata_kuliah`,`semester`) values 
(2,'Algoritma Pemograman II',7),
(4,'Keamanan Jaringan',5),
(5,'Basis Data II',2);

/*Table structure for table `tbl_mbkm` */

DROP TABLE IF EXISTS `tbl_mbkm`;

CREATE TABLE `tbl_mbkm` (
  `id_mbkm` int(11) NOT NULL AUTO_INCREMENT,
  `kegiatan` text DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `validasi` varchar(11) DEFAULT 'BARU',
  `ket_validasi` varchar(256) DEFAULT 'Pengajuan Baru. Belum Validasi.',
  `nim` varchar(256) DEFAULT NULL,
  `file_akademik` text DEFAULT NULL,
  `path_akademik` text DEFAULT NULL,
  PRIMARY KEY (`id_mbkm`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_mbkm` */

insert  into `tbl_mbkm`(`id_mbkm`,`kegiatan`,`keterangan`,`validasi`,`ket_validasi`,`nim`,`file_akademik`,`path_akademik`) values 
(1,'MBKM','BKM','VALID','oke\r\n','203020503044','Screenshot_391.png','./uploads/AKADEMIK/Screenshot_391.png'),
(6,'1234','1234','VALID','Sesuai\r\n','203020503044','SUPRAYITNO1.png','./uploads/AKADEMIK/SUPRAYITNO1.png');

/*Table structure for table `tbl_nilai` */

DROP TABLE IF EXISTS `tbl_nilai`;

CREATE TABLE `tbl_nilai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_matkul` varchar(256) DEFAULT NULL,
  `nilai` varchar(256) DEFAULT NULL,
  `nim` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_nilai` */

insert  into `tbl_nilai`(`id`,`id_matkul`,`nilai`,`nim`) values 
(10,'Keamanan Jaringan','A',NULL),
(11,'Keamanan Jaringan','B+',NULL),
(12,'Keamanan Jaringan','B+',NULL),
(13,'Keamanan Jaringan','B',NULL),
(14,'Basis Data II','B+',NULL);

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
  PRIMARY KEY (`id_skpi`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_skpi` */

insert  into `tbl_skpi`(`id_skpi`,`nim`,`nomor_ijazah`,`tanggal_lulus`,`validasi`,`ket_validasi`,`file_ijazah`,`path_ijazah`,`file_skpi`,`path_skpi`,`nama_file_skpi`) values 
(4,'203020503044','JAYA RAYA','2023-10-26','VALID','ok','1234_drawio_(3).png','./uploads/IJAZAH/1234_drawio_(3).png','223020503157_Alvin_Valerian_Latihan-02.pdf','./uploads/IJAZAH/223020503157_Alvin_Valerian_Latihan-02.pdf','SEMOGA BERHASIL');

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `user` */

insert  into `user`(`id_user`,`nama`,`username`,`password`,`id_role`,`validasi`) values 
(1,'Admin','123','$2y$10$PlENJmkK85./6WMD1p87muLxVWhSY0II0DVJ8ZHRwPts4BLgbxEN.',1,'aktif'),
(3,'Gabriel Ambatukan','321','$2y$10$gEeGQVwDKnCaFbitkjVcpu22aHhJN8/h9l4owHQwWrKuAeCZMqTpu',2,'aktif'),
(11,'Jason Statham','203020503044','$2y$10$XB0joOFr7YfZn8kgKLnf2.8gaiXOrHFCJhL/Dz0asUM6/d0E3Nqbu',2,'aktif'),
(13,'Chara','203020503045','$2y$10$Yhn7juWEOvgLVSGsqjB80uBupxQ4N9SB2eP/sELB2u44TRLYPAq3C',2,'tidak_aktif');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
