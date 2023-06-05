-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 01, 2021 at 07:53 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amirstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_db`
--

CREATE TABLE `admin_db` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_db`
--

INSERT INTO `admin_db` (`id`, `first_name`, `last_name`, `dob`, `email`, `phone`, `password`, `gender`) VALUES
(1, 'AMIR', 'QASEM','2000-09-30', 'amir2020046@gmail.com', '05526610178', '886ac06d97e30709db2247562ad8ce0f','male');


-- --------------------------------------------------------
CREATE TABLE `User_db` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `User_db` (`id`, `name`, `email`, `password`) VALUES
(1, 'ahmed', 'ahmed1234@gmail.com','886ac06d97e30709db2247562ad8ce0f');
--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `cust_name` varchar(100) NOT NULL,
  `purchases` varchar(500) NOT NULL,
  `total_bill` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `card_cvc` int(11) NOT NULL,
  `bank_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `cust_name`, `purchases`, `total_bill`, `email`, `phone`, `card_cvc`, `bank_name`) VALUES
(8, 'Papa ki pari', 'Vans * 3 : $45,\r\nBAHULYA * 3 : $15,\r\nLevi\\\'s * 3 : $129,\r\nVan Heusen * 3 : $42,\r\nWD * 3 : $42,\r\nHaha  * 3 : $12735,\r\n361 Cap * 1 : $555,\r\n:Total: $13563', 13563, 'admin@admin.com', '9854245785', 881, 'john Bank'),
(9, 'Foo Bar', '361 Cap * 1 : $555,\r\nHaha  * 1 : $4245,\r\nWD * 1 : $14,\r\nLee Jeans * 1 : $42,\r\nDiverse * 1 : $30,\r\nBAHULYA * 1 : $5,\r\nSandal for Women * 1 : $14,\r\n:Total: $4905', 4905, 'foo@bar.com', '9145782457', 457, 'World Bank'),
(10, 'Kaka Shree', '361 Cap * 1 : $555,\r\nHaha  * 1 : $4245,\r\nDiverse * 1 : $30,\r\nRolex * 1 : $100,\r\nCalvin Klein * 1 : $25,\r\nBAHULYA * 1 : $5,\r\nVans * 1 : $15,\r\n:Total: $4975', 4975, 'kaka@kaka.com', '9851044578', 565, 'NIBL'),
(11, 'Sushant Bhattarai', 'Nike * 1 : $555,\r\nNamed chain * 1 : $989,\r\nDiverse * 1 : $30,\r\nWD * 1 : $14,\r\nCalvin Klein * 1 : $25,\r\nNike Socks * 1 : $12,\r\nVans * 5 : $75,\r\n:Total: $1700', 1700, 'sushantb2055@gmail.com', '9862232143', 443, 'Sanima Bank');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `rating`, `image`, `category`) VALUES
(17, '361 Cap', 555, 5, 'product_60b4c448d4b47_cap6.webp', 'Cap'),
(18, 'Haha ', 4245, 5, 'product_60b4c46cd6df1_chain1.jpg', 'Chain'),
(19, 'Calvin Klein', 25, 4, 'product_60b5015ad005c_pant3.jpeg', 'Pant'),
(21, 'Lee Jeans', 42, 4, 'product_60b501ab17a11_pant2.jpeg', 'Pant'),
(22, 'Nike', 555, 3, 'product_60b501d3eb056_caps2.webp', 'Cap'),
(25, 'Tiekart', 14, 1, 'product_60b50245d5539_cap5.jpg', 'Cap'),
(26, 'Named chain', 989, 5, 'product_60b502914fe60_chain2.jpg', 'Chain'),
(27, 'Nike Socks', 12, 1, 'product_60b503544a498_socks1.png', 'Socks'),
(28, 'Rolex', 100, 4, 'product_60b505dbcbd07_watch1.jpg', 'Watch'),
(29, 'WD', 14, 5, 'product_60b5060d6f367_watch2.jpg', 'Watch'),
(30, 'Van Heusen', 14, 4, 'product_60b5069723582_shirt2.jpg', 'Shirt'),
(31, 'Diverse', 30, 2, 'product_60b506af4ee5e_shirt4.webp', 'Shirt'),
(32, 'Allen Solly', 14, 4, 'product_60b506cdbd40c_shirt6.jpg', 'Shirt'),
(35, 'Vans', 15, 4, 'product_60b507c90f4e6_shoes3.gif', 'Shoes'),
(36, '5 sets socks', 10, 4, 'product_60b66fa9b3308_socks3.jpg', 'Socks'),
(37, '6 in 1 set', 14, 3, 'product_60b66fd312da3_socks2.jpg', 'Socks'),
(38, 'Pinky', 150, 4, 'product_60b67010cfb64_watch8.jpg', 'Watch'),
(39, 'Browny', 100, 3, 'product_60b670269c15d_watch7.jpg', 'Watch'),
(40, 'Silver Chain', 25, 3, 'product_60b67056517b7_chain5.jpg', 'Chain'),
(41, 'Food chain', 15, 2, 'product_60b67074bcaf4_chain3.jpg', 'Chain'),
(42, 'Chinos For Men', 25, 5, 'product_60b670b2497ac_pant6.jpeg', 'Pant'),
(43, 'Skechers for Women', 17, 4, 'product_60b67117d5b27_shoes3.jpg', 'Shoes'),
(44, 'Loafers', 26, 3, 'product_60b6712b96543_shoes4.jpg', 'Shoes'),
(45, 'New Balance', 50, 5, 'product_60b6717254357_shoes5.jpg', 'Shoes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_db`
--
ALTER TABLE `admin_db`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_db`
--
ALTER TABLE `admin_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
