-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2023 at 12:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlkvc-nhom4-web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(15) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `level` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `username`, `password`, `email`, `phone`, `dob`, `level`) VALUES
(0, 'Nguyễn Thọ Phong', 'admin', 'c8b7e0c0f529dc849d3b1caed67915a6', 'trinhanhphong1208@gmail.com', '0987401991', '2002-08-12', 0),
(12345, 'Anh Phong', 'Bắc Ninh', '123456789', 'anhphongbn99@gmail.com', '0355348623', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_catergory` varchar(50) NOT NULL,
  `tendmuc` varchar(50) NOT NULL,
  `ndung` varchar(1000) NOT NULL,
  `link_pic` varchar(1000) NOT NULL,
  `link_video` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` varchar(50) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` varchar(12) NOT NULL,
  `address` varchar(255) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `changepass` datetime DEFAULT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fullname`, `dob`, `username`, `password`, `email`, `phonenumber`, `address`, `create_at`, `changepass`, `active`) VALUES
('KH001', 'Nguyễn Thị THỦYu', '2003-08-12', 'thuyhoihop', 'e4ffae87b783d80e73c8eed84dd32105', 'anhphongbn99@gmail.com', '0332566555', 'Hải Phòng', '2022-12-15 10:19:27', NULL, 0),
('kh0011', 'Nguyễn Thọ Phong Bn', '2002-08-12', 'anhphongbn', '969557399086ee720072f796633dc4cf', 'trinhanhphong2222@gmail.com', '0355348699', 'Bắc Ninh66', '2023-03-18 15:56:23', NULL, 0),
('KH01', 'Nguyễn Thọ Phong', '2002-08-12', 'anhphong123321', '95e37c7be7df0031315308e062b9981b', 'trinhanhphong12345@gmail.com', '0322555555', 'Bắc Ninh', '2022-12-15 10:11:51', NULL, 0),
('KH017', 'Nguyễn Thọ Phong Ok', '2002-08-12', 'anhphongok', '0df46b2a368648d75856c3b64493428d', 'trinhanhphong123777@gmail.com', '03333222111', 'Bắc Ninh', '2023-05-16 09:43:11', NULL, 0),
('KH0177', 'Nguyễn Thọ Phong Kk', '2002-08-12', 'anhphonggnm', '22865f12b34335241c285f2dd5a6faef', 'trinhanhphong123666@gmail.com', '0987655555', 'Hà Nội', '2023-06-16 08:19:38', NULL, 0),
('KH02', 'Hoàng Văn Bắc', '2002-08-12', 'Bacdamvac', '829e993582a2f444af710cf3e895d62d', 'trinhanhphong1423bn@gmail.com', '0323232323', 'Hà Nội', '2022-12-15 10:13:45', NULL, 0),
('kh099', 'Nguyễn Thọ Phong Bnnb', '2002-08-12', 'anhphong bnio', '0547d57f2f9e9e175e421f7d2b3dfbff', 'trinhanhphong122223@gmail.com', '0222555888', 'Hải Phòng', '2023-06-16 07:50:43', NULL, 0),
('KH301609', 'Anh Phong', '0000-00-00', 'phongbn', '83a916cdbb3fa18ff49d20d3952ef427', 'trinhanhphong1232002@gmail.com', '', '', '2023-10-25 08:16:51', NULL, 1),
('KH855813', 'Anh Phong', '0000-00-00', 'phongbn99', '83a916cdbb3fa18ff49d20d3952ef427', 'trinhanhphong12cbn151@gmail.com', '0987402002', '', '2023-02-13 08:41:24', NULL, 1),
('KH859017', 'Anh Phong', '2002-08-12', 'anhphong', '25f9e794323b453885f5181f1b624d0b', 'trinhanhphong124534@gmail.com', '0355348622', 'Bắc Ninh', '2022-12-13 08:45:28', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dichvu`
--

CREATE TABLE `dichvu` (
  `madv` varchar(50) NOT NULL,
  `tendv` varchar(50) NOT NULL,
  `giadv` float NOT NULL,
  `makhu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dichvu`
--

INSERT INTO `dichvu` (`madv`, `tendv`, `giadv`, `makhu`) VALUES
('dv1', 'Dịch vụ 1', 100000, 'kv1'),
('dv2', 'Dịch vụ 2', 120000, 'kv2'),
('dv3', 'Dịch vụ 3', 55000, 'kv3'),
('dv4', 'Dịch vụ 4', 100000, 'kv4'),
('null', '', 0, 'null');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `chucvu` varchar(30) NOT NULL,
  `create_at` datetime NOT NULL,
  `luong` double NOT NULL,
  `makhu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `username`, `password`, `fullname`, `email`, `phonenumber`, `dob`, `address`, `chucvu`, `create_at`, `luong`, `makhu`) VALUES
('nv01', 'nhanvien1', '827ccb0eea8a706c4c34a16891f84e7b', 'Nguyễn Thị Thủy', 'ebetnnr@gmail.com', '0355348622', '2000-11-16', 'Vĩnh Phúc', 'Tiếp tân', '2022-11-20 08:55:58', 13123123, 'kv2'),
('NV011', 'anhphong', '827ccb0eea8a706c4c34a16891f84e7b', 'Hoàng Văn Bắc', 'trinhanhphong123@gmail.com', '0355348622', '2002-08-12', 'Đầm Vạc', 'Quản lý vé', '2022-12-15 09:25:21', 20000000, 'kv2'),
('NV0112', 'anhphongg', '827ccb0eea8a706c4c34a16891f84e7b', 'Nguyễn Thọ Phong', 'trinhanhphong1423@gmail.com', '0355348622', '2002-08-12', 'Bắc Ninh', 'Tiếp tân', '2022-12-15 09:25:49', 2000000, 'kv1'),
('nv02', 'nhanvien2', '827ccb0eea8a706c4c34a16891f84e7b', 'Phong Bắc Ninh', 'ebetnnr@gmail.com', '0393829381', '2022-11-16', 'Bắc Ninhkk', 'Tiếp tân', '2022-11-20 08:55:58', 13123123, 'kv2'),
('nv020', 'anhphongcbn', '827ccb0eea8a706c4c34a16891f84e7b', 'Phong Cbn', 'trinhanhphong123cbn@gmail.com', '0321654987', '2023-08-15', 'Bac Ninh', 'Tiếp tân', '2023-03-24 16:04:02', 10000000, 'kv2'),
('nv06', 'cecrv', '827ccb0eea8a706c4c34a16891f84e7b', 'Tạ Đình Công', 'nuynmuj@gmail.com', '098765434', '2002-12-12', 'Yên Lạc', 'Tiếp tân', '2022-12-09 02:18:18', 15000, 'kv1'),
('nv123456', 'anhphongbmwi', '827ccb0eea8a706c4c34a16891f84e7b', 'Phongbnbn', 'trinhanhphong133923@gmail.com', '0111222333', '2002-08-12', 'Bắc Ninh', 'Tiếp tân', '2023-03-24 12:36:19', 60000009, 'kv001'),
('nv9999', 'anhphong99', '827ccb0eea8a706c4c34a16891f84e7b', 'Phong Bn', 'trinhanhphong12399@gmail.com', '0222233366', '2002-08-12', 'Bắc Ninh', 'Tiếp tân', '2023-03-24 12:26:42', 5000000, 'kv1');

-- --------------------------------------------------------

--
-- Table structure for table `lsdatve`
--

CREATE TABLE `lsdatve` (
  `mave` varchar(30) NOT NULL,
  `ngaydat` datetime NOT NULL,
  `ngaythamquan` date NOT NULL,
  `treem` int(11) NOT NULL,
  `nguoilon` int(11) NOT NULL,
  `thanhtien` double NOT NULL,
  `makhu` varchar(50) NOT NULL,
  `id` varchar(30) NOT NULL,
  `madv` varchar(30) NOT NULL,
  `matrochoi` varchar(30) NOT NULL,
  `trangthai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lsdatve`
--

INSERT INTO `lsdatve` (`mave`, `ngaydat`, `ngaythamquan`, `treem`, `nguoilon`, `thanhtien`, `makhu`, `id`, `madv`, `matrochoi`, `trangthai`) VALUES
('KVC017445', '2022-12-15 19:43:46', '2025-02-15', 1, 1, 405000, 'kv4', 'KH859017', 'dv3', 'tc3', 'Thành công'),
('KVC061205', '2022-12-15 19:34:31', '2002-08-12', 5, 5, 1600000, 'kv001', 'KH859017', 'dv1', 'tc2', 'Thành công'),
('KVC116284', '2023-03-20 17:42:10', '2001-01-11', 5, 5, 895000, 'kv4', 'KH855813', 'dv3', 'tc4', 'Thành công'),
('KVC141255', '2023-03-18 16:16:50', '2009-08-12', 5, 5, 1300000, 'kv1', 'KH855813', 'dv1', 'tc1', 'Thành công'),
('KVC179803', '2022-12-15 09:33:03', '2026-12-15', 2, 5, 1580000, 'kv2', 'KH859017', 'dv1', 'tc3', 'Thành công'),
('KVC216024', '2022-12-15 09:31:37', '2023-12-15', 2, 5, 1550000, 'kv2', 'KH859017', 'dv2', 'tc2', 'Đã hủy'),
('KVC306072', '2023-03-24 17:03:32', '2023-08-12', 5, 5, 1550000, 'kv001', 'KH855813', 'dv1', 'tc1', 'Thành công'),
('KVC327614', '2023-06-16 08:17:30', '2001-08-12', 5, 5, 940000, 'kv4', 'KH855813', 'dv4', 'tc4', 'Đã hủy'),
('KVC797469', '2022-12-15 19:41:43', '2022-12-15', 4, 2, 655000, 'kv4', 'KH859017', 'dv3', 'tc3', 'Thành công'),
('KVC862080', '2022-12-15 09:33:18', '2027-12-15', 3, 4, 705000, 'kv4', 'KH859017', 'dv3', 'tc1', 'Thành công'),
('KVC892981', '2023-03-20 17:05:53', '2000-09-12', 5, 4, 1205000, 'kv1', 'KH855813', 'dv3', 'tc3', 'Thành công'),
('KVC928951', '2023-03-24 12:05:42', '2023-03-24', 5, 5, 1245000, 'kv1', 'KH855813', 'dv3', 'tc4', 'Đã hủy'),
('KVC989356', '2023-05-16 13:16:58', '2002-08-12', 3, 5, 495000, 'nv011', 'KH855813', 'dv1', 'tc1', 'Thành công');

-- --------------------------------------------------------

--
-- Table structure for table `thongtinkvc`
--

CREATE TABLE `thongtinkvc` (
  `makhu` varchar(50) NOT NULL,
  `tenkhu` varchar(50) NOT NULL,
  `vitri` varchar(50) NOT NULL,
  `dientich` float NOT NULL,
  `giomo` time NOT NULL,
  `giodong` time NOT NULL,
  `gialon` float NOT NULL,
  `gianho` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thongtinkvc`
--

INSERT INTO `thongtinkvc` (`makhu`, `tenkhu`, `vitri`, `dientich`, `giomo`, `giodong`, `gialon`, `gianho`) VALUES
('kv001', 'Làng nghề', 'Tòa B', 0, '14:52:00', '12:00:00', 150000, 120000),
('kv1', 'Khu vực VIP', 'Tòa A', 100, '07:00:00', '22:00:00', 150000, 70000),
('kv2', 'Khu vực 2', 'Tòa B', 50, '07:30:00', '22:00:00', 200000, 140000),
('kv3', 'Khu vực 3', 'Tòa C', 40, '07:30:00', '22:00:00', 250000, 170000),
('kv4', 'Khu vực 4', 'Toà A', 0, '14:07:00', '18:06:00', 100000, 50000),
('Kv99', 'Các Trò Chơi', 'Tòa A4', 0, '08:30:00', '11:50:00', 150000, 120000),
('null', '', '', 0, '00:00:00', '00:00:00', 0, 0),
('nv011', 'khu abc', '2', 2, '15:00:00', '20:00:00', 50000, 15000);

-- --------------------------------------------------------

--
-- Table structure for table `trochoi`
--

CREATE TABLE `trochoi` (
  `matrochoi` varchar(50) NOT NULL,
  `tentrochoi` varchar(50) NOT NULL,
  `banggia` double NOT NULL,
  `vitri` varchar(10) NOT NULL,
  `makhu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trochoi`
--

INSERT INTO `trochoi` (`matrochoi`, `tentrochoi`, `banggia`, `vitri`, `makhu`) VALUES
('null', '', 0, '', 'null'),
('tc1', 'Trò chơi 1', 100000, '', 'kv1'),
('tc2', 'Trò chơi 2', 150000, '', 'kv2'),
('tc3', 'Trò chơi 3', 200000, '', 'kv3'),
('tc4', 'Trò chơi 4', 90000, '2', 'kv4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_catergory`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`madv`),
  ADD KEY `makhu` (`makhu`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `makhu` (`makhu`);

--
-- Indexes for table `lsdatve`
--
ALTER TABLE `lsdatve`
  ADD PRIMARY KEY (`mave`),
  ADD KEY `id` (`id`),
  ADD KEY `madv` (`madv`),
  ADD KEY `matrochoi` (`matrochoi`),
  ADD KEY `makhu` (`makhu`),
  ADD KEY `makhu_2` (`makhu`);

--
-- Indexes for table `thongtinkvc`
--
ALTER TABLE `thongtinkvc`
  ADD PRIMARY KEY (`makhu`);

--
-- Indexes for table `trochoi`
--
ALTER TABLE `trochoi`
  ADD PRIMARY KEY (`matrochoi`),
  ADD UNIQUE KEY `makhu_3` (`makhu`),
  ADD KEY `makhu` (`makhu`),
  ADD KEY `makhu_2` (`makhu`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dichvu`
--
ALTER TABLE `dichvu`
  ADD CONSTRAINT `dichvu_ibfk_1` FOREIGN KEY (`makhu`) REFERENCES `thongtinkvc` (`makhu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`makhu`) REFERENCES `thongtinkvc` (`makhu`);

--
-- Constraints for table `lsdatve`
--
ALTER TABLE `lsdatve`
  ADD CONSTRAINT `lsdatve_ibfk_2` FOREIGN KEY (`id`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `lsdatve_ibfk_3` FOREIGN KEY (`makhu`) REFERENCES `thongtinkvc` (`makhu`);

--
-- Constraints for table `trochoi`
--
ALTER TABLE `trochoi`
  ADD CONSTRAINT `trochoi_ibfk_1` FOREIGN KEY (`makhu`) REFERENCES `thongtinkvc` (`makhu`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
