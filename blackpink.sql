-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2021 at 11:02 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blackpink`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bank_id` int(10) NOT NULL,
  `bank_name` varchar(20) NOT NULL,
  `bank_username` varchar(99) NOT NULL,
  `bank_num` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bank_id`, `bank_name`, `bank_username`, `bank_num`) VALUES
(1, 'K-bank', 'lisa', '123456789'),
(2, 'SCB', 'rose', '987654321');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `CartID` int(99) NOT NULL,
  `username` varchar(99) NOT NULL,
  `Pname` varchar(99) NOT NULL,
  `price` int(20) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(99) NOT NULL,
  `username` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `all_product` varchar(999) NOT NULL,
  `Total` int(99) NOT NULL,
  `address` varchar(999) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `img` varchar(99) NOT NULL,
  `status` varchar(1) NOT NULL,
  `track` varchar(10) NOT NULL,
  `bank_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `username`, `name`, `all_product`, `Total`, `address`, `phone`, `img`, `status`, `track`, `bank_id`) VALUES
(21, 'dome', 'นาย พีรพัฒน์ เจริญไทย', 'ICE CREAM DIGITA SINGLE  x  1<br>THE ALBUM VERSION 3  x  1<br>ICE CREAM INSTRUMENTAL DIGITAL SINGLE  x  1<br>DIGITAL ALBUM  x  1<br>', 2530, '99/99 olympus ', '0123456789', 'k-bank1.jpg', '1', 'TH111', 1),
(22, 'dome', 'นาย พีรพัฒน์ เจริญไทย', 'LOVESICK GIRLS SWEATPANTS II  x  1<br>', 1990, '99/99 olympus ', '0123456789', 'scb1.jpg', '1', '123', 2),
(23, 'bebybibibi', 'Nattarika Seankaew', 'ICE CREAM INSTRUMENTAL DIGITAL SINGLE  x  1<br>THE ALBUM VERSION 1  x  1<br>STANDARD CD  x  1<br>', 1950, '14/13 KKU 46000', '0934527512', 'sbc2.jpg', '1', '22', 2),
(24, 'test2', 'test test', 'ICE CREAM DIGITA SINGLE  x  1<br>ICE CREAM INSTRUMENTAL DIGITAL SINGLE  x  2<br>', 1700, 'kku', '1234', 'k-bank2.jpg', '1', 'th123', 1),
(25, 'test2', 'test test', 'test2  x  1<br>test  x  1<br>', 1100, 'kku', '1234', 'sbc2.jpg', '1', '1234', 2),
(29, 'dome', 'นาย พีรพัฒน์ เจริญไทย', 'หลับแซ่บ 4ตัว 100  x  1<br>', 30, '99/99 olympus ', '0123456789', '167225821_463242098427689_4255699061630308544_n.jpg', '1', '24444', 1),
(30, 'dome', 'นาย พีรพัฒน์ เจริญไทย', 'หลับแซ่บ 4ตัว 100  x  1<br>HYLT SWEATPANTS  x  1<br>', 2020, '99/99 olympus ', '0123456789', 'k-bank1.jpg', '1', '1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(10) NOT NULL,
  `product_name` varchar(99) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_img` varchar(99) NOT NULL,
  `product_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_img`, `product_type`) VALUES
(1, 'ICE CREAM DIGITA SINGLE', 500, './img/MUSIC/ICE_CREAM_DIGITA_SINGLE.png', 'music'),
(2, 'THE ALBUM VERSION 3', 730, './img/MUSIC/THE_ALBUM_VERSION_3.png', 'music'),
(3, 'ICE CREAM INSTRUMENTAL DIGITAL SINGLE', 600, './img/MUSIC/ICE_CREAM_INSTRUMENTAL_DIGITAL_SINGLE.png', 'music'),
(4, 'DIGITAL ALBUM', 700, './img/MUSIC/DIGITAL_ALBUM.png', 'music'),
(5, 'STANDARD CD', 650, './img/MUSIC/STANDARD_CD.png', 'music'),
(6, 'STANDARD LP', 700, './img/MUSIC/STANDARD_LP.png', 'music'),
(7, 'THE ALBUM VERSION 1', 700, './img/MUSIC/THE_ALBUM_VERSION_1.png', 'music'),
(8, 'THE ALBUM VERSION 2', 700, './img/MUSIC/THE_ALBUM_VERSION_2.png', 'music'),
(9, 'THE ALBUM VERSION 4', 700, './img/MUSIC/THE_ALBUM_VERSION_4.png', 'music'),
(10, 'BLACKPINK LS', 2000, './img/shirt/BLACKPINK_LS.png', 'shirt'),
(11, 'HOW YOU LIKE THAT HOODIE I', 2900, './img/shirt/HOW_YOU_LIKE_THAT_HOODIE_I.png', 'shirt'),
(12, 'HOW YOU LIKE THAT HOODIE II', 2500, './img/shirt/HOW_YOU_LIKE_THAT_HOODIE_II.png', 'shirt'),
(13, 'HOW YOU LIKE THAT MARBLE LS II', 2700, './img/shirt/HOW_YOU_LIKE_THAT_MARBLE_LS_II.png', 'shirt'),
(14, 'HOW YOU LIKE THAT MARBLE LS I', 3500, './img/shirt/HOW_YOU_LIKE_THAT_MARBLE_LS_I.png', 'shirt'),
(15, 'HYLT CROP HOODIE', 2590, './img/shirt/HYLT_CROP_HOODIE.png', 'shirt'),
(16, 'ICE CREAM T SHIRT II', 4500, './img/shirt/ICE_CREAM_T_SHIRT_II.png', 'shirt'),
(17, 'ICE CREAM CRE NECK PULLOVER', 3900, './img/shirt/ICE_CREAM_CRE_NECK_PULLOVER.png', 'shirt'),
(19, 'LOVESICK GIRLS SWEATPANTS I', 2000, './img/pants/LOVESICK_GIRLS_SWEATPANTS_I.png', 'pants'),
(20, 'HYLT SWEATPANTS', 1990, './img/pants/HYLT_SWEATPANTS.png', 'pants'),
(21, 'LOVESICK GIRLS SWEATPANTS II', 1990, './img/pants/LOVESICK_GIRLS_SWEATPANTS_II.png', 'pants'),
(23, 'BLACKPINK TOTE', 690, './img/other/BLACKPINK_TOTE.png', 'other'),
(24, 'BLACKPINK DAD HAT', 990, './img/other/BLACKPINK_DAD_HAT.png', 'other'),
(37, 'หลับแซ่บ 4ตัว 100', 30, './img/MUSIC/167225821_463242098427689_4255699061630308544_n.jpg', 'music'),
(38, 'testafasfa', 30, './img/MUSIC/images.jfif', 'music');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `address` varchar(99) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `fname`, `lname`, `address`, `mail`, `phone`) VALUES
('admin', '202cb962ac59075b964b07152d234b70', 'admin', 'admin', 'admin', 'admin@gmail.com', '1212121212'),
('bebybibibi', 'e10adc3949ba59abbe56e057f20f883e', 'Nattarika', 'Seankaew', '14/13 KKU 46000', 'bebybibibi@gmail.com', '0934527512'),
('dome', '202cb962ac59075b964b07152d234b70', 'นาย พีรพัฒน์', 'เจริญไทย', '99/99 olympus ', 'peeraphat.ch@kkumail.com', '0123456789'),
('test', '202cb962ac59075b964b07152d234b70', 'Tom', 'samit', 'usa', 'tom@gmail.com', '0981452367'),
('test2', '202cb962ac59075b964b07152d234b70', 'test', 'test', 'kku', 'kku@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CartID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bank_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `CartID` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
