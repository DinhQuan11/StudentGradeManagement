-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 08:54 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sgm`
--

-- --------------------------------------------------------

--
-- Table structure for table `diem`
--

CREATE TABLE `diem` (
  `DiemHeSo1` float(4,2) DEFAULT NULL,
  `DiemHeSo2` float(4,2) DEFAULT NULL,
  `DiemHeSo3` float(4,2) DEFAULT NULL,
  `MaHS` varchar(10) DEFAULT NULL,
  `MaMH` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diem`
--

INSERT INTO `diem` (`DiemHeSo1`, `DiemHeSo2`, `DiemHeSo3`, `MaHS`, `MaMH`) VALUES
(7.30, 8.50, 9.00, 'HS001', 'TOAN'),
(8.50, 8.00, 7.30, 'HS001', 'NVAN'),
(7.30, 9.80, 7.50, 'HS001', 'AVAN'),
(7.30, 7.00, 9.50, 'HS001', 'VALY'),
(8.00, 9.30, 9.00, 'HS001', 'HOAH'),
(7.50, 7.50, 7.80, 'HS001', 'SINH'),
(8.30, 8.50, 9.00, 'HS001', 'GDCD'),
(7.30, 6.00, 7.80, 'HS001', 'LISU'),
(7.80, 7.50, 9.00, 'HS001', 'DILY'),
(8.50, 8.80, 9.30, 'HS001', 'GDQP'),
(8.00, 9.00, 9.00, 'HS001', 'TDUC'),
(7.60, 7.40, 6.90, 'HS002', 'TOAN'),
(6.80, 8.60, 7.60, 'HS002', 'NVAN'),
(7.30, 9.50, 7.20, 'HS002', 'AVAN'),
(8.30, 6.80, 6.80, 'HS002', 'VALY'),
(9.80, 7.60, 9.10, 'HS002', 'HOAH'),
(7.00, 9.70, 6.80, 'HS002', 'SINH'),
(6.80, 8.00, 7.50, 'HS002', 'GDCD'),
(7.30, 6.00, 7.80, 'HS002', 'LISU'),
(6.10, 6.80, 6.00, 'HS002', 'DILY'),
(9.60, 10.00, 9.50, 'HS002', 'GDQP'),
(8.10, 8.50, 8.80, 'HS002', 'TDUC'),
(9.00, 8.20, 7.50, 'HS003', 'TOAN'),
(8.20, 7.50, 8.00, 'HS003', 'NVAN'),
(7.50, 8.50, 8.20, 'HS003', 'AVAN'),
(6.50, 7.00, 8.80, 'HS003', 'VALY'),
(8.80, 8.00, 8.50, 'HS003', 'HOAH'),
(7.00, 7.50, 8.30, 'HS003', 'SINH'),
(8.50, 8.80, 8.00, 'HS003', 'GDCD'),
(7.80, 7.00, 7.50, 'HS003', 'LISU'),
(8.00, 8.50, 7.20, 'HS003', 'DILY'),
(8.90, 8.20, 8.50, 'HS003', 'GDQP'),
(9.20, 9.50, 9.00, 'HS003', 'TDUC'),
(7.20, 7.80, 6.50, 'HS004', 'TOAN'),
(8.00, 8.50, 7.00, 'HS004', 'NVAN'),
(7.50, 9.00, 7.80, 'HS004', 'AVAN'),
(7.80, 7.20, 7.20, 'HS004', 'VALY'),
(8.50, 7.80, 8.00, 'HS004', 'HOAH'),
(7.20, 8.00, 7.50, 'HS004', 'SINH'),
(8.00, 8.50, 7.80, 'HS004', 'GDCD'),
(7.00, 6.50, 7.00, 'HS004', 'LISU'),
(8.20, 7.80, 7.00, 'HS004', 'DILY'),
(8.50, 9.00, 8.80, 'HS004', 'GDQP'),
(9.00, 8.80, 8.50, 'HS004', 'TDUC'),
(8.50, 9.00, 8.20, 'HS005', 'TOAN'),
(7.20, 8.80, 7.50, 'HS005', 'NVAN'),
(8.00, 7.50, 8.50, 'HS005', 'AVAN'),
(8.50, 7.00, 8.00, 'HS005', 'VALY'),
(9.20, 8.50, 9.00, 'HS005', 'HOAH'),
(7.80, 8.20, 8.50, 'HS005', 'SINH'),
(8.20, 8.80, 7.00, 'HS005', 'GDCD'),
(7.50, 7.00, 8.20, 'HS005', 'LISU'),
(8.80, 7.50, 8.80, 'HS005', 'DILY'),
(9.00, 9.20, 9.50, 'HS005', 'GDQP'),
(8.50, 8.00, 8.80, 'HS005', 'TDUC'),
(NULL, NULL, NULL, 'HS006', 'TOAN'),
(NULL, NULL, NULL, 'HS006', 'NVAN'),
(NULL, NULL, NULL, 'HS006', 'AVAN'),
(NULL, NULL, NULL, 'HS006', 'VALY'),
(NULL, NULL, NULL, 'HS006', 'HOAH'),
(NULL, NULL, NULL, 'HS006', 'SINH'),
(NULL, NULL, NULL, 'HS006', 'GDCD'),
(NULL, NULL, NULL, 'HS006', 'LISU'),
(NULL, NULL, NULL, 'HS006', 'DILY'),
(NULL, NULL, NULL, 'HS006', 'GDQP'),
(NULL, NULL, NULL, 'HS006', 'TDUC'),
(NULL, NULL, NULL, 'HS007', 'TOAN'),
(NULL, NULL, NULL, 'HS007', 'NVAN'),
(NULL, NULL, NULL, 'HS007', 'AVAN'),
(NULL, NULL, NULL, 'HS007', 'VALY'),
(NULL, NULL, NULL, 'HS007', 'HOAH'),
(NULL, NULL, NULL, 'HS007', 'SINH'),
(NULL, NULL, NULL, 'HS007', 'GDCD'),
(NULL, NULL, NULL, 'HS007', 'LISU'),
(NULL, NULL, NULL, 'HS007', 'DILY'),
(NULL, NULL, NULL, 'HS007', 'GDQP'),
(NULL, NULL, NULL, 'HS007', 'TDUC'),
(NULL, NULL, NULL, 'HS008', 'TOAN'),
(NULL, NULL, NULL, 'HS008', 'NVAN'),
(NULL, NULL, NULL, 'HS008', 'AVAN'),
(NULL, NULL, NULL, 'HS008', 'VALY'),
(NULL, NULL, NULL, 'HS008', 'HOAH'),
(NULL, NULL, NULL, 'HS008', 'SINH'),
(NULL, NULL, NULL, 'HS008', 'GDCD'),
(NULL, NULL, NULL, 'HS008', 'LISU'),
(NULL, NULL, NULL, 'HS008', 'DILY'),
(NULL, NULL, NULL, 'HS008', 'GDQP'),
(NULL, NULL, NULL, 'HS008', 'TDUC'),
(NULL, NULL, NULL, 'HS009', 'TOAN'),
(NULL, NULL, NULL, 'HS009', 'NVAN'),
(NULL, NULL, NULL, 'HS009', 'AVAN'),
(NULL, NULL, NULL, 'HS009', 'VALY'),
(NULL, NULL, NULL, 'HS009', 'HOAH'),
(NULL, NULL, NULL, 'HS009', 'SINH'),
(NULL, NULL, NULL, 'HS009', 'GDCD'),
(NULL, NULL, NULL, 'HS009', 'LISU'),
(NULL, NULL, NULL, 'HS009', 'DILY'),
(NULL, NULL, NULL, 'HS009', 'GDQP'),
(NULL, NULL, NULL, 'HS009', 'TDUC'),
(NULL, NULL, NULL, 'HS010', 'TOAN'),
(NULL, NULL, NULL, 'HS010', 'NVAN'),
(NULL, NULL, NULL, 'HS010', 'AVAN'),
(NULL, NULL, NULL, 'HS010', 'VALY'),
(NULL, NULL, NULL, 'HS010', 'HOAH'),
(NULL, NULL, NULL, 'HS010', 'SINH'),
(NULL, NULL, NULL, 'HS010', 'GDCD'),
(NULL, NULL, NULL, 'HS010', 'LISU'),
(NULL, NULL, NULL, 'HS010', 'DILY'),
(NULL, NULL, NULL, 'HS010', 'GDQP'),
(NULL, NULL, NULL, 'HS010', 'TDUC');

-- --------------------------------------------------------

--
-- Table structure for table `giaovien`
--

CREATE TABLE `giaovien` (
  `MaGV` varchar(10) NOT NULL,
  `TenGV` varchar(50) NOT NULL,
  `SDTGV` varchar(10) NOT NULL,
  `EmailGV` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `giaovien`
--

INSERT INTO `giaovien` (`MaGV`, `TenGV`, `SDTGV`, `EmailGV`) VALUES
('GV001', 'Nguyễn Thị Hương', '0912345678', 'ant@teacher.com'),
('GV002', 'Trần Văn Long', '0987654321', 'longtv@teacher.com');

-- --------------------------------------------------------

--
-- Table structure for table `giaovienhocsinh`
--

CREATE TABLE `giaovienhocsinh` (
  `MaGV` varchar(10) DEFAULT NULL,
  `MaHS` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hanhkiem`
--

CREATE TABLE `hanhkiem` (
  `MaHK` varchar(10) NOT NULL,
  `TenHK` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hanhkiem`
--

INSERT INTO `hanhkiem` (`MaHK`, `TenHK`) VALUES
('K', 'Khá'),
('T', 'Tốt'),
('TB', 'Trung bình'),
('Y', 'Yếu');

-- --------------------------------------------------------

--
-- Table structure for table `hocsinh`
--

CREATE TABLE `hocsinh` (
  `MaHS` varchar(10) NOT NULL,
  `TenHS` varchar(255) NOT NULL,
  `GioiTinh` varchar(10) NOT NULL,
  `NgaySinh` date NOT NULL,
  `DanToc` varchar(255) DEFAULT NULL,
  `TonGiao` varchar(255) DEFAULT NULL,
  `DiaChi` varchar(255) DEFAULT NULL,
  `MaLop` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hocsinh`
--

INSERT INTO `hocsinh` (`MaHS`, `TenHS`, `GioiTinh`, `NgaySinh`, `DanToc`, `TonGiao`, `DiaChi`, `MaLop`) VALUES
('HS001', 'Phan Minh Quang', 'Nam', '2003-01-01', 'Kinh', 'Không', 'TPHCM', '12A'),
('HS002', 'Trịnh Thị Ngọc', 'Nữ', '2003-01-01', 'Kinh', 'Không', 'TPHCM', '12A'),
('HS003', 'Đặng Văn Thanh', 'Nam', '2003-01-01', 'Kinh', 'Không', 'TPHCM', '12A'),
('HS004', 'Vũ Thị Hương', 'Nữ', '2003-01-01', 'Kinh', 'Không', 'TPHCM', '12A'),
('HS005', 'Lý Văn Đức', 'Nam', '2003-01-01', 'Kinh', 'Không', 'TPHCM', '12A'),
('HS006', 'Nguyễn Vân Anh', 'Nữ', '2003-01-01', 'Kinh', 'Không', 'TPHCM', '12B'),
('HS007', 'Lê Thị Mai', 'Nữ', '2003-01-01', 'Kinh', 'Không', 'TPHCM', '12B'),
('HS008', 'Trương Minh Hiếu', 'Nam', '2003-01-01', 'Kinh', 'Không', 'TPHCM', '12B'),
('HS009', 'Ngô Thị Hà', 'Nữ', '2003-01-01', 'Kinh', 'Không', 'TPHCM', '12B'),
('HS010', 'Nguyễn Văn Sang', 'Nam', '2003-01-01', 'Kinh', 'Không', 'TPHCM', '12B');

-- --------------------------------------------------------

--
-- Table structure for table `hocsinhhanhkiem`
--

CREATE TABLE `hocsinhhanhkiem` (
  `MaHS` varchar(10) DEFAULT NULL,
  `MaHK` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hocsinhhanhkiem`
--

INSERT INTO `hocsinhhanhkiem` (`MaHS`, `MaHK`) VALUES
('HS001', 'T'),
('HS002', 'T'),
('HS003', 'K'),
('HS004', 'T'),
('HS005', 'K'),
('HS006', 'T'),
('HS007', 'T'),
('HS008', 'K'),
('HS009', 'T'),
('HS010', 'K');

-- --------------------------------------------------------

--
-- Table structure for table `lophoc`
--

CREATE TABLE `lophoc` (
  `MaLop` varchar(10) NOT NULL,
  `TenLop` varchar(10) NOT NULL,
  `SiSoLop` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lophoc`
--

INSERT INTO `lophoc` (`MaLop`, `TenLop`, `SiSoLop`) VALUES
('10A', '10A', 5),
('10B', '10B', 5),
('11A', '11A', 5),
('11B', '11B', 5),
('12A', '12A', 5),
('12B', '12B', 5);

-- --------------------------------------------------------

--
-- Table structure for table `lophocgiaovien`
--

CREATE TABLE `lophocgiaovien` (
  `MaLop` varchar(10) DEFAULT NULL,
  `MaGV` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `MaMH` varchar(10) NOT NULL,
  `TenMH` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`MaMH`, `TenMH`) VALUES
('AVAN', 'Anh văn'),
('DILY', 'Địa lý'),
('GDCD', 'Giáo dục công dân'),
('GDQP', 'Quốc phòng'),
('HOAH', 'Hóa học'),
('LISU', 'Lịch sử'),
('NVAN', 'Ngữ văn'),
('SINH', 'Sinh học'),
('TDUC', 'Thể dục'),
('TOAN', 'Toán'),
('VALY', 'Vật lý');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Role` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Username`, `Password`, `Role`) VALUES
(1, 'admin', '$2y$10$3fCjqAgxa.0CPYPsSTqR2ePOEIg/guB0OLR1Y2SwC2Jwa9JMQwliy', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diem`
--
ALTER TABLE `diem`
  ADD KEY `MaHS` (`MaHS`),
  ADD KEY `MaMH` (`MaMH`);

--
-- Indexes for table `giaovien`
--
ALTER TABLE `giaovien`
  ADD PRIMARY KEY (`MaGV`);

--
-- Indexes for table `giaovienhocsinh`
--
ALTER TABLE `giaovienhocsinh`
  ADD KEY `MaGV` (`MaGV`),
  ADD KEY `MaHS` (`MaHS`);

--
-- Indexes for table `hanhkiem`
--
ALTER TABLE `hanhkiem`
  ADD PRIMARY KEY (`MaHK`);

--
-- Indexes for table `hocsinh`
--
ALTER TABLE `hocsinh`
  ADD PRIMARY KEY (`MaHS`),
  ADD KEY `MaLop` (`MaLop`);

--
-- Indexes for table `hocsinhhanhkiem`
--
ALTER TABLE `hocsinhhanhkiem`
  ADD KEY `MaHS` (`MaHS`),
  ADD KEY `MaHK` (`MaHK`);

--
-- Indexes for table `lophoc`
--
ALTER TABLE `lophoc`
  ADD PRIMARY KEY (`MaLop`);

--
-- Indexes for table `lophocgiaovien`
--
ALTER TABLE `lophocgiaovien`
  ADD KEY `MaLop` (`MaLop`),
  ADD KEY `MaGV` (`MaGV`);

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`MaMH`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `diem`
--
ALTER TABLE `diem`
  ADD CONSTRAINT `diem_ibfk_1` FOREIGN KEY (`MaHS`) REFERENCES `hocsinh` (`MaHS`),
  ADD CONSTRAINT `diem_ibfk_2` FOREIGN KEY (`MaMH`) REFERENCES `monhoc` (`MaMH`);

--
-- Constraints for table `giaovienhocsinh`
--
ALTER TABLE `giaovienhocsinh`
  ADD CONSTRAINT `giaovienhocsinh_ibfk_1` FOREIGN KEY (`MaGV`) REFERENCES `giaovien` (`MaGV`),
  ADD CONSTRAINT `giaovienhocsinh_ibfk_2` FOREIGN KEY (`MaHS`) REFERENCES `hocsinh` (`MaHS`);

--
-- Constraints for table `hocsinh`
--
ALTER TABLE `hocsinh`
  ADD CONSTRAINT `hocsinh_ibfk_1` FOREIGN KEY (`MaLop`) REFERENCES `lophoc` (`MaLop`);

--
-- Constraints for table `hocsinhhanhkiem`
--
ALTER TABLE `hocsinhhanhkiem`
  ADD CONSTRAINT `hocsinhhanhkiem_ibfk_1` FOREIGN KEY (`MaHS`) REFERENCES `hocsinh` (`MaHS`),
  ADD CONSTRAINT `hocsinhhanhkiem_ibfk_2` FOREIGN KEY (`MaHK`) REFERENCES `hanhkiem` (`MaHK`);

--
-- Constraints for table `lophocgiaovien`
--
ALTER TABLE `lophocgiaovien`
  ADD CONSTRAINT `lophocgiaovien_ibfk_1` FOREIGN KEY (`MaLop`) REFERENCES `lophoc` (`MaLop`),
  ADD CONSTRAINT `lophocgiaovien_ibfk_2` FOREIGN KEY (`MaGV`) REFERENCES `giaovien` (`MaGV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
