-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2023 at 05:45 PM
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
-- Database: `melani`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_singup`
--

CREATE TABLE `admin_singup` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(200) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `admin_img` varchar(200) NOT NULL,
  `admin_pass1` varchar(200) NOT NULL,
  `admin_pass2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_singup`
--

INSERT INTO `admin_singup` (`id`, `admin_name`, `admin_email`, `admin_img`, `admin_pass1`, `admin_pass2`) VALUES
(1, 'ahmed', 'ahmed@gmail.com', '../assets/new/ . e1.jpg', '123', '123'),
(2, 'mujtaba', 'ahmed1123@gmail.com', '../assets/new/ . 2.jpg', '1234', '1234'),
(3, 'hamza', 'hamza@gmail.com', '../assets/new/ . e4.jpg', '12345', '12345'),
(4, 'jusy', 'jusy@gmail.com', '../assets/new/ . product-f4.jpg', '1a12', '1a12');

-- --------------------------------------------------------

--
-- Table structure for table `categouries`
--

CREATE TABLE `categouries` (
  `c_id` int(11) NOT NULL,
  `categouries` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categouries`
--

INSERT INTO `categouries` (`c_id`, `categouries`) VALUES
(1, 'Cosmatics'),
(2, 'makup'),
(3, 'jwelry'),
(4, 'garments');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(2000) NOT NULL,
  `message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `subject`, `message`) VALUES
(1, 'ahmed', 3241816988, 'mujtaba@gmail.com', 'my message', 'dfhsdfh'),
(2, 'ahmed', 3241816988, 'mujtaba@gmail.com', 'my message', 'dfhsdfh'),
(3, 'ahmed', 3241816988, 'mujtaba@gmail.com', 'my message', 'asdf'),
(4, 'ahmed', 3241816988, 'mujtaba@gmail.com', 'my message', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `d_id` int(11) NOT NULL,
  `valid_until` varchar(200) NOT NULL,
  `d_brand` varchar(200) NOT NULL,
  `d_title` varchar(200) NOT NULL,
  `d_price` int(11) NOT NULL,
  `d_offerp` int(11) NOT NULL,
  `d_img` varchar(200) NOT NULL,
  `d_dess` varchar(2000) NOT NULL,
  `d_disscount` int(11) NOT NULL,
  `d_newT` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`d_id`, `valid_until`, `d_brand`, `d_title`, `d_price`, `d_offerp`, `d_img`, `d_dess`, `d_disscount`, `d_newT`) VALUES
(10, '09/25/2023', 'deal ', 'deal item', 500, 600, '../assets/uploaded_images/ . product-ac8.jpg', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 5, 'on');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `o_fname` varchar(200) NOT NULL,
  `o_lname` varchar(200) NOT NULL,
  `o_email` varchar(200) NOT NULL,
  `o_compeny` varchar(200) NOT NULL,
  `o_country` varchar(200) NOT NULL,
  `o_adress` varchar(2000) NOT NULL,
  `o_adress2` varchar(2000) NOT NULL,
  `o_city` varchar(200) NOT NULL,
  `o_zip` varchar(200) NOT NULL,
  `o_phone` bigint(20) NOT NULL,
  `o_dess` varchar(2000) NOT NULL,
  `o_Pname` varchar(200) NOT NULL,
  `o_Tprice` int(11) NOT NULL,
  `o_paymentM` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `o_fname`, `o_lname`, `o_email`, `o_compeny`, `o_country`, `o_adress`, `o_adress2`, `o_city`, `o_zip`, `o_phone`, `o_dess`, `o_Pname`, `o_Tprice`, `o_paymentM`) VALUES
(13, 'xcv', 'xcv', 'xcv@gmail.com', 'xcv', 'England', 'sec#15/16 house#2426', '', 'karachi baldia town', '75760', 3241816988, 'xcvxcv', '|1111111111111111111111111111111111111111111111', 50, 'cash'),
(14, 'xcv', 'xcv', 'xcv@gmail.com', 'xcv', 'England', 'sec#15/16 house#2426', '', 'karachi baldia town', '75760', 3241816988, 'xcvxcv', '/1111111111111111111111111111111111111111111111', 50, 'cash'),
(15, 'fgh', 'fgh', 'fgh@gmail.com', 'fgh', 'India', 'fgh', 'fgh', 'fgh', 'fgh', 21346578965, 'fghfgh', '/1111111111111111', 1562, 'cahshondelevery'),
(16, 'fgh', 'fgh', 'fgh@gmail.com', 'fgh', 'India', 'fgh', 'fgh', 'fgh', 'fgh', 21346578965, 'fghfgh', '/1111111111111111', 1562, 'cahshondelevery'),
(17, 'fgh', 'fgh', 'fgh@gmail.com', 'fgh', 'India', 'fgh', 'fgh', 'fgh', 'fgh', 21346578965, 'fghfgh', '/1111111111111111', 1562, 'cahshondelevery'),
(18, 'fgh', 'fgh', 'fgh@gmail.com', 'fgh', 'India', 'fgh', 'fgh', 'fgh', 'fgh', 21346578965, 'fghfgh', '/1111111111111111', 1562, 'cahshondelevery');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `brand` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `offerp` int(11) NOT NULL,
  `img` varchar(200) NOT NULL,
  `Dess` varchar(2000) NOT NULL,
  `discount` int(11) NOT NULL,
  `newT` varchar(200) NOT NULL,
  `featured` varchar(200) NOT NULL,
  `sale` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `c_id`, `brand`, `title`, `price`, `offerp`, `img`, `Dess`, `discount`, `newT`, `featured`, `sale`) VALUES
(7, 3, 'r', 'rrrrrrrrrrrrrrrrrrrr', 1500, 2000, '../assets/uploaded_images/ . product-j2.jpg', 'rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr', 12, '', '', ''),
(8, 3, '1', '1111111111111111111111111111111111111111111111', 50, 70, '../assets/uploaded_images/ . product-13.jpg', '1111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111', 20, '', '', 'on'),
(10, 2, '1', '1111111111111111', 12, 12, '../assets/uploaded_images/ . product-ac10.jpg', '1111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111', 50, 'on', 'on', ''),
(11, 2, 'nike', 'ffffffffffffffffffff', 50, 60, '../assets/uploaded_images/ . product-f13.jpg', 'fffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 10, 'on', '', ''),
(12, 1, 'n', 'nnnnnnnn', 1500, 2000, '../assets/uploaded_images/ . product-f4.jpg', 'nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn', 10, 'on', '', ''),
(13, 1, 'r', 'rrrrrrrrrrrrrrrrrrrr', 1500, 2000, '../assets/uploaded_images/ . product-11.jpg', 'rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr', 0, '', '', ''),
(14, 1, 'r', 'rrrrrrrrrrrrrrrrrrrr', 1500, 2000, '../assets/uploaded_images/ . product-11.jpg', 'rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_signup`
--

CREATE TABLE `user_signup` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass1` varchar(200) NOT NULL,
  `pass2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_signup`
--

INSERT INTO `user_signup` (`id`, `name`, `email`, `pass1`, `pass2`) VALUES
(2, 'Ahmed', 'mujtaba56383@gmail.com', '', ''),
(3, 'asd', 'asd@gmail.com', '123', '123'),
(4, 'Mr shadow', 'chotaahmed1234@gmail.com', '1234', '1234'),
(5, 'Ahmed1', 'asd1@gmail.com', '123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_singup`
--
ALTER TABLE `admin_singup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categouries`
--
ALTER TABLE `categouries`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categouries` (`c_id`);

--
-- Indexes for table `user_signup`
--
ALTER TABLE `user_signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_singup`
--
ALTER TABLE `admin_singup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categouries`
--
ALTER TABLE `categouries`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_signup`
--
ALTER TABLE `user_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
