# Host: localhost  (Version 5.5.5-10.1.36-MariaDB)
# Date: 2019-07-24 14:04:25
# Generator: MySQL-Front 5.4  (Build 4.10)
# Internet: http://www.mysqlfront.de/

/*!40101 SET NAMES utf8 */;

#
# Structure for table "master_bhnbaku"
#

DROP TABLE IF EXISTS `master_bhnbaku`;
CREATE TABLE `master_bhnbaku` (
  `bb_id` int(6) NOT NULL AUTO_INCREMENT,
  `tanggal_bb` date DEFAULT NULL,
  `lupin_bb` int(10) DEFAULT NULL,
  `tapioka_bb` int(10) DEFAULT NULL,
  `ragi_bb` int(10) DEFAULT NULL,
  PRIMARY KEY (`bb_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "master_bhnbaku"
#

INSERT INTO `master_bhnbaku` VALUES (1,'2019-05-01',3,3,150),(2,'2019-05-04',10,4,200),(3,'2019-05-07',2,2,100),(4,'2019-05-10',9,9,450);

#
# Structure for table "master_brgjadi"
#

DROP TABLE IF EXISTS `master_brgjadi`;
CREATE TABLE `master_brgjadi` (
  `bj_id` int(6) NOT NULL AUTO_INCREMENT,
  `tanggal_bj` date DEFAULT NULL,
  `nama_bj` varchar(50) DEFAULT NULL,
  `packing50gr_bj` int(10) DEFAULT NULL,
  `packing75gr_bj` int(10) DEFAULT NULL,
  `packing150gr_bj` int(10) DEFAULT NULL,
  `packingtabung_bj` int(10) DEFAULT NULL,
  `tp_id` int(6) DEFAULT NULL,
  PRIMARY KEY (`bj_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "master_brgjadi"
#

INSERT INTO `master_brgjadi` VALUES (1,'2019-05-03','Kripik Tempe Lupin',17,17,17,30,1),(2,'2019-05-06','Kripik Tempe Lupin',15,15,15,2,2),(3,'2019-05-10','Kripik Tempe Lupin',12,12,12,20,3),(4,'2019-05-13','Kripik Tempe Lupin',10,15,10,20,4);

#
# Structure for table "master_bumbu"
#

DROP TABLE IF EXISTS `master_bumbu`;
CREATE TABLE `master_bumbu` (
  `bu_id` int(6) NOT NULL AUTO_INCREMENT,
  `tanggal_bu` date DEFAULT NULL,
  `bwgputih_bu` int(10) DEFAULT NULL,
  `kemiri_bu` int(10) DEFAULT NULL,
  `penyedap_bu` int(10) DEFAULT NULL,
  `tepungberas_bu` int(10) DEFAULT NULL,
  `air_bu` int(10) DEFAULT NULL,
  `pb_id` int(6) DEFAULT NULL,
  PRIMARY KEY (`bu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "master_bumbu"
#

INSERT INTO `master_bumbu` VALUES (1,'2019-05-01',1500,750,150,1500,750,1),(2,'2019-05-04',2000,1000,200,2000,1000,2),(3,'2019-05-07',1000,500,100,1000,500,3),(4,'2019-05-10',4500,2250,450,4500,2250,4);

#
# Structure for table "surat_jalan"
#

DROP TABLE IF EXISTS `surat_jalan`;
CREATE TABLE `surat_jalan` (
  `sj_id` int(6) NOT NULL AUTO_INCREMENT,
  `tanggal_sj` date DEFAULT NULL,
  `qty_sj` int(10) DEFAULT NULL,
  `berat_sj` int(10) DEFAULT NULL,
  `jumlahberat_sj` int(10) DEFAULT NULL,
  `keterangan_sj` varchar(50) DEFAULT NULL,
  `pbb_id` int(7) DEFAULT NULL,
  PRIMARY KEY (`sj_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "surat_jalan"
#

INSERT INTO `surat_jalan` VALUES (1,'2019-05-01',2,5,10,'Permintaan bahan baku',12),(3,'2019-05-04',5,2,10,'Permintaan bahan baku',13),(4,'2019-05-07',3,10,30,'Permintaan bahan baku',15),(5,'2019-05-10',5,5,25,'Permintaan bahan baku',18);

#
# Structure for table "transaksi_belibumbu"
#

DROP TABLE IF EXISTS `transaksi_belibumbu`;
CREATE TABLE `transaksi_belibumbu` (
  `pb_id` int(6) NOT NULL AUTO_INCREMENT,
  `tanggal_pb` date DEFAULT NULL,
  `bwgputih_pb` int(10) DEFAULT NULL,
  `kemiri_pb` int(10) DEFAULT NULL,
  `penyedap_pb` int(10) DEFAULT NULL,
  `tepungberas_pb` int(10) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  PRIMARY KEY (`pb_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "transaksi_belibumbu"
#

INSERT INTO `transaksi_belibumbu` VALUES (1,'2019-07-01',500,50,50,500,60000),(2,'2019-05-04',1000,500,100,1000,80000),(3,'2019-05-07',500,250,50,500,45000),(4,'2019-05-10',500,250,50,500,50000);

#
# Structure for table "transaksi_brgmasuk"
#

DROP TABLE IF EXISTS `transaksi_brgmasuk`;
CREATE TABLE `transaksi_brgmasuk` (
  `bm_id` int(6) NOT NULL AUTO_INCREMENT,
  `tanggal_bm` date DEFAULT NULL,
  `nama_bm` varchar(50) DEFAULT NULL,
  `jumlah_bm` int(10) DEFAULT NULL,
  `keterangan_bm` varchar(50) DEFAULT NULL,
  `sj_id` int(6) DEFAULT NULL,
  `bb_id` int(6) DEFAULT NULL,
  `pbb_id` int(7) DEFAULT NULL,
  PRIMARY KEY (`bm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "transaksi_brgmasuk"
#

INSERT INTO `transaksi_brgmasuk` VALUES (1,'2019-05-01','Kacang Lupin',50,'barang masuk kacang lupin split',1,1,12),(2,'2019-05-04','Kacang Lupin',30,'barang masuk kacang lupin split',3,2,13),(3,'2019-07-09','Kacang Lupin',10,'barang masuk kacang lupin split',1,1,14),(4,'2019-05-07','Kacang Lupin',25,'barang masuk kacang lupin split',4,3,15),(5,'2019-05-10','Kacang Lupin',10,'barang masuk kacang lupin split',5,4,18);

#
# Structure for table "transaksi_detil_distbrgjadi"
#

DROP TABLE IF EXISTS `transaksi_detil_distbrgjadi`;
CREATE TABLE `transaksi_detil_distbrgjadi` (
  `packing50gr_dbj` int(10) DEFAULT NULL,
  `packing75gr_dbj` int(10) DEFAULT NULL,
  `packing150gr_dbj` int(10) DEFAULT NULL,
  `packingtabung_dbj` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "transaksi_detil_distbrgjadi"
#

INSERT INTO `transaksi_detil_distbrgjadi` VALUES (7,6,10,10),(7,6,10,10),(19,23,21,17),(7,6,10,10),(100,100,100,100);

#
# Structure for table "transaksi_distbrgjadi"
#

DROP TABLE IF EXISTS `transaksi_distbrgjadi`;
CREATE TABLE `transaksi_distbrgjadi` (
  `dbj_id` int(7) NOT NULL AUTO_INCREMENT,
  `tanggal_dbj` date DEFAULT NULL,
  `nama_dbj` varchar(50) DEFAULT NULL,
  `packing50gr_dbj` int(11) NOT NULL,
  `packing75gr_dbj` int(11) NOT NULL,
  `packing150gr_dbj` int(11) NOT NULL,
  `packingtabung_dbj` int(11) NOT NULL,
  PRIMARY KEY (`dbj_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "transaksi_distbrgjadi"
#

INSERT INTO `transaksi_distbrgjadi` VALUES (1,'2019-05-01','Kripik Tempe Lupin',100,100,100,100),(2,'2019-05-02','Kripik Tempe Lupin',200,200,200,200),(3,'2019-05-03','Kripik Tempe Lupin',200,200,200,200),(4,'2019-05-04','Kripik Tempe Lupin',300,300,300,300),(5,'2019-05-05','Kripik Tempe Lupin',400,400,400,400),(6,'2019-05-06','Kripik Tempe Lupin',200,200,200,200),(7,'2019-07-08','Kripik Tempe Lupin',100,100,100,100),(8,'2019-07-09','Kripik Tempe Lupin',100,100,100,100),(9,'2019-07-10','Kripik Tempe Lupin',250,250,250,250),(10,'2019-07-24','Kacang Lupin',10,100,100,100);

#
# Structure for table "transaksi_pbb"
#

DROP TABLE IF EXISTS `transaksi_pbb`;
CREATE TABLE `transaksi_pbb` (
  `pbb_id` int(7) NOT NULL AUTO_INCREMENT,
  `tanggal_pbb` date DEFAULT NULL,
  `kacanglupin_pbb` int(10) DEFAULT NULL,
  `keterangan_pbb` varchar(50) DEFAULT NULL,
  `bb_id` int(6) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`pbb_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

#
# Data for table "transaksi_pbb"
#

INSERT INTO `transaksi_pbb` VALUES (12,'2019-05-01',10,'Permintaan bahan baku',1,1),(13,'2019-05-04',10,'Permintaan bahan baku',2,1),(15,'2019-05-07',30,'Permintaan bahan baku',3,1),(18,'2019-05-10',25,'Permintaan bahan baku',4,1);

#
# Structure for table "transaksi_thpproduk"
#

DROP TABLE IF EXISTS `transaksi_thpproduk`;
CREATE TABLE `transaksi_thpproduk` (
  `tp_id` int(6) NOT NULL AUTO_INCREMENT,
  `tanggal_tp` date DEFAULT NULL,
  `nama_tp` varchar(50) NOT NULL,
  `perendaman_tp` int(10) DEFAULT NULL,
  `perebusan_tp` int(10) DEFAULT NULL,
  `peragian_tp` int(10) DEFAULT NULL,
  `pemotongan_tp` int(10) DEFAULT NULL,
  `penggorengan_tp` int(10) DEFAULT NULL,
  `keterangan_tp` varchar(50) DEFAULT NULL,
  `bb_id` int(6) DEFAULT NULL,
  `bu_id` int(6) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`tp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "transaksi_thpproduk"
#

INSERT INTO `transaksi_thpproduk` VALUES (1,'2019-05-01','Proses Pembuatan Kripik Tempe Lupin',8,8,9,8,8,'Cuaca cerah proses 2 hari',1,1,1),(2,'2019-05-04','Proses Pembuatan Kripik Tempe Lupin',10,10,11,10,10,'Cuaca cerah proses 2 hari',2,2,1),(3,'2019-05-07','Proses Pembuatan Kripik Tempe Lupin',6,6,7,6,7,'Cuaca tidak mendukung (hujan) proses 3 hari',3,3,1),(4,'2019-05-11','Proses Pembuatan Kripik Tempe Lupin',6,6,6,7,6,'Cuaca cerah proses 2 hari',4,4,1);

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `level` int(1) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (1,'waha12','fc7da4c7bdd16815b8e0d0042b533f80af37b428','Susandi Wiwaha','jalan deplu',1,'profil/avatar041.png'),(2,'akualdo','bc304ee1e541f85af61766ef59bfeb042087c1b4','Aldo Santoso','jalan angkasa',2,'profil/avatar52.png'),(8,'gerald','522fd801a68f76967bbd07150454d8973c948a36','Gerald Wahyudi','jalan melati',3,'profil/man-21.png'),(13,'bertus','c251b17c2dee4ec7b01efe9f299bfd92244ae384','Bertus Antony','jalan seskoal',4,'profil/user2-160x1601.jpg'),(14,'yulvey','7beb9411feb44f4d3bb6d9e8e34065fd1d295992','Yulvey Hasan','jalan kemandoran',5,'profil/sparda1.png');
