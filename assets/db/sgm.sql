-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2023 at 12:07 PM
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
(7.00, 8.00, 9.00, 'HS001', 'TOAN'),
(8.00, 8.00, 9.00, 'HS001', 'NVAN'),
(7.00, 8.00, 7.00, 'HS001', 'AVAN');

-- --------------------------------------------------------

--
-- Table structure for table `giaovien`
--

CREATE TABLE `giaovien` (
  `MaGV` varchar(10) NOT NULL,
  `TenGV` varchar(50) NOT NULL,
  `SDTGV` varchar(10) NOT NULL,
  `EmailGV` varchar(50) NOT NULL,
  `MaLop` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `giaovien`
--

INSERT INTO `giaovien` (`MaGV`, `TenGV`, `SDTGV`, `EmailGV`, `MaLop`) VALUES
('GV001', 'Nguyễn Thị A', '0123456789', 'ant@teacher.com', '12A'),
('GV002', 'Lê Thị B', '0123456788', 'blt@teacher.com', '12B');

-- --------------------------------------------------------

--
-- Table structure for table `giaovienhocsinh`
--

CREATE TABLE `giaovienhocsinh` (
  `MaGV` varchar(10) DEFAULT NULL,
  `MaHS` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `giaovienhocsinh`
--

INSERT INTO `giaovienhocsinh` (`MaGV`, `MaHS`) VALUES
('GV001', 'HS001'),
('GV001', 'HS002'),
('GV001', 'HS003'),
('GV001', 'HS004'),
('GV001', 'HS005'),
('GV002', 'HS006'),
('GV002', 'HS007'),
('GV002', 'HS008'),
('GV002', 'HS009'),
('GV002', 'HS010');

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
  `TenHS` varchar(50) NOT NULL,
  `GioiTinh` varchar(10) NOT NULL,
  `NgaySinh` date NOT NULL,
  `DanToc` varchar(50) DEFAULT NULL,
  `TonGiao` varchar(50) DEFAULT NULL,
  `DiaChi` varchar(100) DEFAULT NULL,
  `MaLop` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hocsinh`
--

INSERT INTO `hocsinh` (`MaHS`, `TenHS`, `GioiTinh`, `NgaySinh`, `DanToc`, `TonGiao`, `DiaChi`, `MaLop`) VALUES
('HS001', 'Nguyễn Văn A', 'Nam', '2003-01-01', 'Kinh', 'Không', 'TPHCM', '12A'),
('HS002', 'Trần Thị B', 'Nữ', '2003-01-01', 'Kinh', 'Không', 'TPHCM', '12A'),
('HS003', 'Nguyễn Văn A', 'Nam', '2003-01-01', 'Kinh', 'Không', 'TPHCM', '12A'),
('HS004', 'Trần Thị B', 'Nữ', '2003-01-01', 'Kinh', 'Không', 'TPHCM', '12A'),
('HS005', 'Nguyễn Văn A', 'Nam', '2003-01-01', 'Kinh', 'Không', 'TPHCM', '12A'),
('HS006', 'Trần Thị B', 'Nữ', '2003-01-01', 'Kinh', 'Không', 'TPHCM', '12B'),
('HS007', 'Trần Thị B', 'Nữ', '2003-01-01', 'Kinh', 'Không', 'TPHCM', '12B'),
('HS008', 'Nguyễn Văn A', 'Nam', '2003-01-01', 'Kinh', 'Không', 'TPHCM', '12B'),
('HS009', 'Trần Thị B', 'Nữ', '2003-01-01', 'Kinh', 'Không', 'TPHCM', '12B'),
('HS010', 'Nguyễn Văn A', 'Nam', '2003-01-01', 'Kinh', 'Không', 'TPHCM', '12B'),
('HS011', 'cc', 'Nữ', '2003-01-01', 'cc', 'cc', 'cc', '11A'),
('HS012', 'cc', 'Nữ', '2003-12-12', 'cc', 'cc', 'cc', '11A'),
('HS014', 'cc', 'Nam', '0000-00-00', 'cc', 'cc', 'cc', '12A'),
('HS015', 'cc', 'Nam', '0000-00-00', 'cc', 'cc', 'cc', '12A'),
('HS016', 'cc', 'Nam', '0000-00-00', 'cc', 'cc', 'cc', '12A'),
('HS017', 'cc', 'Nam', '0000-00-00', 'cc', 'cc', 'cc', '12A'),
('HS018', 'cc', 'Nam', '0000-00-00', 'cc', 'cc', 'cc', '12A');

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
('HS001', 'T'),
('HS001', 'K'),
('HS001', 'T'),
('HS001', 'K'),
('HS001', 'T'),
('HS001', 'T'),
('HS001', 'K'),
('HS001', 'T'),
('HS001', 'K');

-- --------------------------------------------------------

--
-- Table structure for table `lophoc`
--

CREATE TABLE `lophoc` (
  `MaLop` varchar(10) NOT NULL,
  `TenLop` varchar(10) NOT NULL,
  `SiSoLop` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lophoc`
--

INSERT INTO `lophoc` (`MaLop`, `TenLop`, `SiSoLop`) VALUES
('10A', '10A', 5),
('10B', '10B', 5),
('10C', '10C', 5),
('11A', '11A', 5),
('11B', '11B', 5),
('11C', '11C', 5),
('12A', '12A', 5),
('12B', '12B', 5),
('12C', '12C', 5);

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
('TOAN', 'Toán'),
('VALY', 'Vật lý');

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
  ADD PRIMARY KEY (`MaGV`),
  ADD KEY `MaLop` (`MaLop`);

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
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`MaMH`);

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
-- Constraints for table `giaovien`
--
ALTER TABLE `giaovien`
  ADD CONSTRAINT `giaovien_ibfk_1` FOREIGN KEY (`MaLop`) REFERENCES `lophoc` (`MaLop`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
