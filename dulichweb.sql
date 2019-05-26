-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Sep 13, 2018 at 08:57 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
--database dulichweb

-- --------------------------------------------------------

-- 
-- Table structure for table `chitiettour`
-- 

CREATE TABLE `chitiettour` ( 
  `MaChiTiet` int(11) NOT NULL auto_increment,
  `IDKhachHang` int(11) NOT NULL,
  `TenTour` varchar(50) NOT NULL, 
  `SoLuong` int(22) NOT NULL,
  `DonGia` int(22) NOT NULL,
  `ThanhTien` int(22) NOT NULL,
  `IDSP` int(11) NOT NULL,
  `ngaylap` date NOT NULL,
  `ngaygiao` date NOT NULL,
  PRIMARY KEY  (`MaChiTiet`),
  KEY `IDDonHang` (`IDKhachHang`),
  KEY `IDSP` (`IDSP`),
  KEY `IDSP_2` (`IDSP`)
) ENGINE=MyISAM ;

-- 
-- Dumping data for table `chitiettour`
-- 
INSERT INTO `chitiettour` VALUES (58, 66, 'Dong Van', 1, 160000, 160000, 1, '2018-09-13', '2018-09-25');
INSERT INTO `chitiettour` VALUES (59, 66, 'Moc Chau', 1, 296000, 296000, 2, '2018-09-13', '2018-09-25');
INSERT INTO `chitiettour` VALUES (70, 81, 'Sapa', 1, 150000, 150000, 3, '2018-09-13', '2018-09-20');
INSERT INTO `chitiettour` VALUES (69, 81, 'Yen Tu', 2, 160000, 320000, 4, '2018-09-13', '2018-09-20');
INSERT INTO `chitiettour` VALUES (62, 78, 'Trang An', 1, 123000, 123000, 5, '2018-09-13', '2018-09-22');
INSERT INTO `chitiettour` VALUES (63, 78, 'Hue', 1, 124500, 124500, 6, '2018-09-13', '2018-09-22');
INSERT INTO `chitiettour` VALUES (64, 79, 'Da Nang', 1, 145000, 145000, 7, '2018-09-13', '2018-09-30');
INSERT INTO `chitiettour` VALUES (65, 79, 'Hoi An', 1, 296000, 296000, 8, '2018-09-13', '2018-09-30');
INSERT INTO `chitiettour` VALUES (66, 79, 'Nha Trang', 1, 145000, 145000, 9, '2018-09-13', '2018-09-30');
INSERT INTO `chitiettour` VALUES (68, 80, 'Mui Ne', 2, 123000, 246000, 10, '2018-09-13', '2018-09-20');
INSERT INTO `chitiettour` VALUES (72, 82, 'Da Lat', 1, 160000, 160000, 11, '2018-09-13', '2018-09-19');
INSERT INTO `chitiettour` VALUES (73, 82, 'Tay Ninh', 1, 95000, 95000, 12, '2018-09-13', '2018-09-19');
INSERT INTO `chitiettour` VALUES (74, 82, 'Tay Nam Bo', 1, 133000, 133000, 13, '2018-09-13', '2018-09-19');
INSERT INTO `chitiettour` VALUES (75, 83, 'Phu Quoc', 2, 160000, 320000, 14, '2018-09-13', '2018-09-26');
INSERT INTO `chitiettour` VALUES (76, 83, 'Vinh', 1, 296000, 296000, 15, '2018-09-13', '2018-09-26');

-- --------------------------------------------------------

-- 
-- Table structure for table `phanloaitour`
-- 

CREATE TABLE `phanloaitour` (
  `IDPhanLoai` int(11) NOT NULL auto_increment,
  `KhuVuc` varchar(50) default NULL,
  `quocgia` varchar(50)  NOT NULL,
  `dienthoai` int(11) NOT NULL,
  `diachi` varchar(100)  NOT NULL,
  PRIMARY KEY  (`IDPhanLoai`),
  KEY `IDPhanLoai` (`IDPhanLoai`)
) ENGINE=MyISAM ;;

-- 
-- Dumping data for table `phanloaitour`
-- 

INSERT INTO `phanloaitour` VALUES (1, 'Miền Bắc', 'Việt Nam', 902321232, 'Vùng 1');
INSERT INTO `phanloaitour` VALUES (2, 'Miền Trung', 'Việt Nam', 8888888, 'Vùng 2');
INSERT INTO `phanloaitour` VALUES (3, 'Miền Nam', 'Việt Nam', 3826999, 'Vùng 3');


-- --------------------------------------------------------

-- 
-- Table structure for table `khachhang`
-- 

CREATE TABLE `khachhang` (
  `IDKhachHang` int(11) NOT NULL auto_increment,
  `TenKH` varchar(100)  NOT NULL,
  `ghichu` varchar(300)  NOT NULL,
  `email` varchar(50)  NOT NULL,
  `SDT` int(11) NOT NULL,
  `DiaChi` varchar(50)  NOT NULL,
  `TongTien` int(11) NOT NULL,
  `NgayGiao` date NOT NULL,
  `DaXuLy` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`IDKhachHang`),
  KEY `IDKhachHang` (`IDKhachHang`)
) ENGINE=MyISAM ;

-- 
-- Dumping data for table `khachhang`
-- 

INSERT INTO `khachhang` VALUES (81, 'Luat', '1', '1@gmail.com', 12345678, '1a', 470000, '2018-09-20', 1);
INSERT INTO `khachhang` VALUES (82, 'Hung', '2', '2@gmail.com', 12345678, '2a', 610000, '2018-09-19', 1);
INSERT INTO `khachhang` VALUES (83, 'Hoang', '3', '3@gmail.com', 123456789, '3a', 749000, '2018-09-26', 1);
INSERT INTO `khachhang` VALUES (78, 'Chi', '',  'a@gmail.com', 2147483647, '1b', 247500, '2018-09-22', 1);
INSERT INTO `khachhang` VALUES (79, 'Hien', '',  'b@gmail.com', 2147483647, '2b', 586000, '2018-09-30', 1);
INSERT INTO `khachhang` VALUES (80, 'Linh', '4',  '4@gmail.com', 2147483647, '4a', 406000, '2018-09-20', 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `menu`
-- 

CREATE TABLE `menu` (
  `idmenu` int(11) NOT NULL auto_increment,
  `english` varchar(100)  NOT NULL,
  `vietnamese` varchar(100)  NOT NULL,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY  (`idmenu`)
) ENGINE=MyISAM ;

-- 
-- Dumping data for table `menu`
-- 

INSERT INTO `menu` VALUES (1, 'Home', 'Trang Chủ', 'home.php');
INSERT INTO `menu` VALUES (2, 'About Us', 'Giới Thiệu', 'home.php?action=gioithieu');
INSERT INTO `menu` VALUES (3, 'Tour', 'Tour', 'home.php?action=TenTour');
INSERT INTO `menu` VALUES (4, 'News', 'Tin Tức', 'home.php?action=tintuc');
INSERT INTO `menu` VALUES (5, 'Contacts', 'Liên Hệ', 'home.php?action=lienhe');

-- --------------------------------------------------------

-- 
-- Table structure for table `TenTour`
-- 

CREATE TABLE `TenTour` (
  `IDSP` int(11) NOT NULL auto_increment,
  `IDPhanLoai` int(11) default NULL,
  `TenSP` varchar(50)  default NULL,
  `Gia` int(11) default NULL,
  `hinh` text,
  `spnoibat` tinyint(4) NOT NULL default '0',
  `mota` text  NOT NULL,
  PRIMARY KEY  (`IDSP`),
  KEY `IDPhanLoai` (`IDPhanLoai`),
  KEY `IDPhanLoai_2` (`IDPhanLoai`)
) ENGINE=MyISAM ;

-- 
-- Dumping data for table `TenTour`
-- 

INSERT INTO `TenTour` VALUES (1, 1, 'Dong Van', 222000, 'images/01.jpg', 1, '');
INSERT INTO `TenTour` VALUES (2, 1, 'Moc Chau', 362000, 'images/02.jpg', 0,'' );
INSERT INTO `TenTour` VALUES (5, 1, 'Trang An', 385000, 'images/05.jpg', 0, '');
INSERT INTO `TenTour` VALUES (6, 2, 'Hue', 235000, 'images/06.jpg', 0, '');
INSERT INTO `TenTour` VALUES (9, 2, 'Da Nang', 146000, 'images/09.jpg', 0, '.');
INSERT INTO `TenTour` VALUES (7, 2, 'Hoi An', 123000, 'images/07.jpg', 0, '');
INSERT INTO `TenTour` VALUES (8, 2, 'Nha Trang', 145000, 'images/08.jpg', 0, '');
INSERT INTO `TenTour` VALUES (10, 3, 'Mui Ne', 132500, 'images/10.jpg', 0, '');
INSERT INTO `TenTour` VALUES (11, 3, 'Da Lat', 146000, 'images/11.jpg', 0, '');
INSERT INTO `TenTour` VALUES (12, 2, 'Tay Ninh', 150000, 'images/12.jpg', 0, '');
INSERT INTO `TenTour` VALUES (13, 3, 'Tay Nam Bo', 296000, 'images/13.jpg', 1, '');
INSERT INTO `TenTour` VALUES (14, 3, 'Phu Quoc', 95000, 'images/14.jpg', 0,'');
INSERT INTO `TenTour` VALUES (15, 2, 'Vinh', 132000, 'images/15.jpg', 0,'');
-- --------------------------------------------------------

-- 
-- Table structure for table `thanhvien`
-- 

CREATE TABLE `thanhvien` (
  `username` varchar(15) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `email` varchar(60) NOT NULL,
  `diachi` text NOT NULL,
  `sdt` int(15) NOT NULL,
  `idGroup` int(11) NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=MyISAM ;

-- 
-- Dumping data for table `thanhvien`
-- 

INSERT INTO `thanhvien` VALUES ('trang123', '123456', 'trang@gmail.com', '13 asdasdasd', 2147483647, 1);
INSERT INTO `thanhvien` VALUES ('trang321', '123456', 'sadasldk@gmail.com', 'sdadasd', 13123123, 0);
INSERT INTO `thanhvien` VALUES ('teo123', '123456', 'kcnfob@yaoo.com', 'cjofrghoeir', 2147483647, 0);
INSERT INTO `thanhvien` VALUES ('vanteo', '123456', 'teo@yfhv.comesd', 'pghcy', 12345677, 0);
INSERT INTO `thanhvien` VALUES ('thaomy', '123456', 'mytran@yahoo.com', 'bien hoa', 12345678, 0);
INSERT INTO `thanhvien` VALUES ('vynguyen', '123456', 'vynguyen@yahoo.com', 'can tho', 909000111, 0);
INSERT INTO `thanhvien` VALUES ('trangminh', '123456', 'hao@yahoo.com', 'bh', 12345678, 0);
INSERT INTO `thanhvien` VALUES ('heocon', '123456', 'heocon@yahoo.com', 'nongtrai', 12345678, 0);
INSERT INTO `thanhvien` VALUES ('ngocloi', '123456', 'laii@jfkhgk.com', 'hcm', 123456789, 0);
