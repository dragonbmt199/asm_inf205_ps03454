-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2016 at 11:34 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inf205`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contactID` int(12) NOT NULL,
  `contactName` varchar(50) NOT NULL,
  `contactEmail` varchar(50) NOT NULL,
  `contactPhone` varchar(15) NOT NULL,
  `contactDesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contactID`, `contactName`, `contactEmail`, `contactPhone`, `contactDesc`) VALUES
(1, 'Admin', 'admin@gmail.com', '0123456789', 'Welcome To StoreMobile!'),
(2, 'Nguyễn Nhật Vĩnh', 'vinh@fpt.edu.vn', '01659729124', 'Welcome To StoreMobile!'),
(3, 'Nguyễn Anh Tuấn', 'tuannaps01235@fpt.edu.vn', '0123456798', 'Welcome To StoreMobile!'),
(4, 'Phí Đinh Việt Hùng', 'hungpdvps01234@fpt.edu.vn', '0123456789', 'Welcome To StoreMobile!'),
(5, 'Huỳnh Lý Thiện Toàn', 'toanhltps012346', '01321654878', 'Welcome To StoreMobile!');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `orderID` int(12) NOT NULL,
  `productID` int(12) NOT NULL,
  `productPrice` double(10,0) NOT NULL,
  `quantity` int(5) NOT NULL,
  `totals` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`orderID`, `productID`, `productPrice`, `quantity`, `totals`) VALUES
(1, 11, 10990000, 1, 10990000),
(2, 6, 16990000, 2, 33980000),
(3, 12, 15990000, 3, 47970000),
(4, 13, 7990000, 1, 7990000),
(5, 9, 9990000, 1, 9990000);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(12) NOT NULL,
  `orderDate` date NOT NULL,
  `quantityTotals` int(5) NOT NULL,
  `orderTotal` int(10) NOT NULL,
  `userID` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `orderDate`, `quantityTotals`, `orderTotal`, `userID`) VALUES
(1, '2016-08-09', 0, 10990000, 1),
(2, '2016-08-09', 0, 33980000, 2),
(3, '2016-08-09', 0, 47970000, 3),
(4, '2016-08-09', 0, 7990000, 4),
(5, '2016-08-09', 0, 9990000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(12) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `productImage` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `productPrice` double(10,0) NOT NULL,
  `productDesc` text NOT NULL,
  `productCategory` varchar(50) NOT NULL,
  `productBrand` varchar(50) NOT NULL,
  `productGroup` varchar(50) NOT NULL,
  `productSale` varchar(100) NOT NULL,
  `productTooltips` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `productName`, `productImage`, `productPrice`, `productDesc`, `productCategory`, `productBrand`, `productGroup`, `productSale`, `productTooltips`) VALUES
(1, 'Nokia Lumia 930', 'sp1_nokia930_152x210.jpg', 10990000, 'Nokia Lumia 930', 'Smath Phone', 'Nokia', 'Điện thoại', 'K. mãi trị giá đến 1.000.00₫', ' <b> Màn hình: Ratina HD, 5. inches </b><br />\r\n                      <b> HĐH: iOS 8</b> <br />\r\n                      <b> CUP: A8 64 bit</b><br />\r\n                      <b> Camera: 8.0MP, 1 SIM</b> <br />\r\n                      <b> Pin: 2915 mAh</b> <br />'),
(2, 'Sony Xperia Z3', 'sp5_xperiaz3_152x210.jpg', 14990000, 'Sony Xperia Z3', 'Smath Phone', 'Sony', 'Điện thoại', '', ' <b> Màn hình: Ratina HD, 5. inches </b><br />\r\n                      <b> HĐH: iOS 8</b> <br />\r\n                      <b> CUP: A8 64 bit</b><br />\r\n                      <b> Camera: 8.0MP, 1 SIM</b> <br />\r\n                      <b> Pin: 2915 mAh</b> <br />'),
(3, 'Pantech Vega Iron 2 A910S', 'sp4_vega910s_152x210.jpg', 8190000, 'Pantech Vega Iron 2 A910S', 'Điện thoại sách tay', 'Sky', 'Điện thoại', '', ' <b> Màn hình: Ratina HD, 5. inches </b><br />\r\n                      <b> HĐH: iOS 8</b> <br />\r\n                      <b> CUP: A8 64 bit</b><br />\r\n                      <b> Camera: 8.0MP, 1 SIM</b> <br />\r\n                      <b> Pin: 2915 mAh</b> <br />'),
(4, 'Oppo R1', 'sp3_oppor1_152_510.jpg', 6990000, 'Oppo R1', 'Smath Phone', 'Oppo', 'Điện thoại', 'Có khuyến mãi', ' <b> Màn hình: Ratina HD, 5. inches </b><br />\r\n                      <b> HĐH: iOS 8</b> <br />\r\n                      <b> CUP: A8 64 bit</b><br />\r\n                      <b> Camera: 8.0MP, 1 SIM</b> <br />\r\n                      <b> Pin: 2915 mAh</b> <br />'),
(5, 'Sony Xperia M4 Aqua Dual', 'sp6_xperam4_152x210.jpg', 6490000, 'Sony Xperia M4 Aqua Dual', 'Smath Phone', 'Sony', 'Điện thoại', '', ' <b> Màn hình: Ratina HD, 5. inches </b><br />\r\n                      <b> HĐH: iOS 8</b> <br />\r\n                      <b> CUP: A8 64 bit</b><br />\r\n                      <b> Camera: 8.0MP, 1 SIM</b> <br />\r\n                      <b> Pin: 2915 mAh</b> <br />'),
(6, 'HTC One M9', 'sp2_htconem9_152x210.jpg', 16990000, 'HTC One M9', 'Smath Phone', 'HTC', 'Điện thoại', 'K. mãi trị giá đến 1.250.00₫', ' <b> Màn hình: Ratina HD, 5. inches </b><br />\r\n                      <b> HĐH: iOS 8</b> <br />\r\n                      <b> CUP: A8 64 bit</b><br />\r\n                      <b> Camera: 8.0MP, 1 SIM</b> <br />\r\n                      <b> Pin: 2915 mAh</b> <br />'),
(7, 'iPhone 6 Plus 64GB', 'iphone664gb.png', 19590000, 'iPhone 6 Plus 64GB', 'Smath Phone', 'IPhone', 'Điện thoại', '', ' <b> Màn hình: Ratina HD, 5. inches </b><br />\r\n                      <b> HĐH: iOS 8</b> <br />\r\n                      <b> CUP: A8 64 bit</b><br />\r\n                      <b> Camera: 8.0MP, 1 SIM</b> <br />\r\n                      <b> Pin: 2915 mAh</b> <br />'),
(8, 'Samsung Note 4', 'ssgalaxys4.png', 14990000, 'Samsung Note 4', 'Smath Phone', 'Samsung', 'Điện thoại', 'K. mãi trị giá đến 1.000.00₫', '<b> Màn hình: QuadHD, 5.7 inches </b><br />\r\n                      <b> HĐH: Androi 4.4 (KitKat)</b> <br />\r\n                      <b> CUP: 8 Nhân, RAM 3GB</b><br />\r\n                      <b> Camera: 16MB, 1 SIM</b> <br />\r\n                      <b> Pin: 3220 mAh</b> <br />'),
(9, 'HTC Desire Eye', 'htcdesirieye.png', 9990000, 'HTC Desire Eye', 'Smath Phone', 'HTC', 'Điện thoại', '', '<b> Màn hình: FullHD, 5.2 inches </b><br />\r\n                      <b> HĐH: Androi 4.4 (KitKat)</b> <br />\r\n                      <b> CUP: 4 Nhân 2.26Ghz, RAM 2GB</b><br />\r\n                      <b> Camera: 13MB Dual, 1 SIM</b> <br />\r\n                      <b> Pin: 2400 mAh</b> <br />'),
(10, 'OPPO R5', 'oppor5.png', 10000000, 'OPPO R5', 'Smath Phone', 'Oppo', 'Điện thoại', '', ' <b> Màn hình: FullHD, 5.2 inches  </b><br />\r\n                      <b> HĐH: Androi 4.4 (KitKat)</b> <br />\r\n                      <b> CUP: 8 Nhân 1.5Ghz, RAM 2GB</b><br />\r\n                      <b> Camera: 13MB, 1 SIM</b> <br />\r\n                      <b> Pin: 2000 mAh</b> <br />'),
(11, 'Sony Xperia Z2', 'sony-xperia-z2-png.png', 10990000, 'Sony Xperia Z2', 'Smath Phone', 'Sony', 'Điện thoại', '', '<b> Màn hình: FullHD, 5.2 inches  </b><br />\r\n                      <b> HĐH: Androi 4.4 (KitKat)</b> <br />\r\n                      <b> CUP: 8 Nhân 2.3Ghz, RAM 3GB</b><br />\r\n                      <b> Camera: 20.7MB</b> <br />\r\n                      <b> Pin: 3200 mAh</b> <br />'),
(12, 'LG G4', 'lg-g4-leather2-400x534.png', 15990000, 'LG G4', 'Smath Phone', 'LG', 'Điện thoại', 'K. mãi trị giá đến 1.000.00₫', '<b> Màn hình: QuadHD, 5.5 inches </b><br />\r\n                      <b> HĐH: Android 5</b> <br />\r\n                      <b> CUP: 6 Nhân, RAM 3GB</b><br />\r\n                      <b> Camera: 16MB, 2 SIM </b> <br />\r\n                      <b> Pin: 3000 mAh</b> <br />'),
(13, 'Nokia Lumia 830', 'nokia-lumia-830-png-1.png', 7990000, 'Nokia Lumia 830', 'Smath Phone', 'Nokia', 'Điện thoại', 'K. mãi trị giá đến 1.000.00₫', '  <b> Màn hình:5.0 inches </b><br />\r\n                      <b> HĐH: Windows Phone 8.1</b> <br />\r\n                      <b> CPU: 4 Nhân 1.2Ghz, RAM 1G</b> <br />\r\n                      <b> Camera: 10MB </b> <br />\r\n                      <b> Pin: 2200 mAh</b> <br />'),
(14, 'Pentech Vega Iron 2 A910S', 'pantech-vega-iron-2-a910s-1-400x533.png', 10990000, 'Pentech Vega Iron 2 A910S', 'Điện thoại sách tay', 'Sky', 'Điện thoại', '', '  <b> Màn hình: FullHD, 5.3 inches  </b><br />\r\n                      <b> HĐH: Androi 4.4 (KitKat)</b> <br />\r\n                      <b> CUP: 4 Nhân 2.6Ghz, RAM 3GB</b><br />\r\n                      <b> Camera: 13MB, 1 SIM</b> <br />\r\n                      <b> Pin: 3220 mAh</b> <br />'),
(15, 'HTC One M9', 'htc-one-m9-tra-gop-400x533.png', 16990000, 'HTC One M9', 'Smath Phone', 'HTC', 'Điện thoại', 'K. mãi trị giá đến 1.250.00₫', '  <b> Màn hình: FullHD, 5.0 inches  </b><br />\r\n                      <b> HĐH: Androi 5.0 (Lollipop)</b> <br />\r\n                      <b> CUP: 8 Nhân, RAM 3GB</b><br />\r\n                      <b> Camera: 20.7MB</b> <br />\r\n                      <b> Pin: 2840 mAh</b> <br />'),
(16, 'Samsung Galaxy A7', 'samsung-galaxy-a7-icon-2-400x500.png', 9990000, 'Samsung Galaxy A7', 'Smath Phone', 'Samsung', 'Điện thoại', '', '  <b> Màn hình: FullHD, 5.5 inches  </b><br />\r\n                      <b> HĐH: Androi 4.4 (KitKat)</b> <br />\r\n                      <b> CUP: 8 Nhân, RAM 2GB</b><br />\r\n                      <b> Camera: 13MB, 2 SIM</b> <br />\r\n                      <b> Pin: 2600 mAh</b> <br />'),
(17, 'Philips i908', 'philips-i908.png', 4990000, 'Philips i908', 'Điện thoại cũ', 'Philips', 'Điện thoại', 'Giảm thêm 90.000₫ - 600.000₫', '<b> Màn hình: FullHD, 5.0 inches  </b><br />\r\n                      <b> HĐH: Androi 4.4 (KitKat)</b> <br />\r\n                      <b> CUP: 8 Nhân 1.7Ghz, RAM 2GB</b><br />\r\n                      <b> Camera: 13MB, 2 SIM</b> <br />\r\n                      <b> Pin: 3000 mAh</b> <br />'),
(18, 'Samsung Galaxy E5', 'samsung-galaxy-e5-400x533.png', 4990000, 'Samsung Galaxy E5', 'Smath Phone', 'Samsung', 'Điện thoại', 'K. mãi trị giá đến 300.00₫', '<b> Màn hình: FullHD, 5.0 inches  </b><br />\r\n                      <b> HĐH: Androi 4.4 (KitKat)</b> <br />\r\n                      <b> CUP: 4 Nhân 1.2 Ghz, RAM 2GB</b><br />\r\n                      <b> Camera: 8.0MB, 2 SIM</b> <br />\r\n                      <b> Pin: 2400 mAh</b> <br />');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `sodienthoai` varchar(15) NOT NULL,
  `permissions` tinyint(1) NOT NULL COMMENT '1: Admin 0: User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `fullname`, `username`, `password`, `email`, `diachi`, `sodienthoai`, `permissions`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@gmail.com', 'TP.HCM', '123456789', 1),
(2, 'Nguyễn Nhật Vĩnh', 'vinhnnps03454', 'admin', 'vinhnnps03454@fpt.edu.vn', 'TP.HCM', '1659729124', 1),
(3, 'Phí Đinh Việt Hùng', 'hungpdvps01234', 'users', 'hungpdvps01234@fpt.edu.vn', 'TP.HCM', '123456789', 0),
(4, 'Nguyễn Anh Tuấn', 'tuannaps01235', 'users', 'tuannaps01235@fpt.edu.vn', 'TP.HCM', '123456798', 0),
(5, 'Huỳnh Lý Thiện Toàn', 'toanhltps012346', 'users', 'toanhltps012346@fpt.edu.vn', 'TP.HCM', '1321654878', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contactID`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`orderID`,`productID`),
  ADD UNIQUE KEY `productID` (`productID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD UNIQUE KEY `userID` (`userID`),
  ADD UNIQUE KEY `orderID` (`orderID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`),
  ADD UNIQUE KEY `productImage` (`productImage`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contactID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `orderID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `orders` (`orderID`),
  ADD CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
