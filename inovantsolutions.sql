-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2021 at 12:56 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inovantsolutions`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `product_id`, `quantity`, `added_date`) VALUES
(1, 1, 1, 2, '2021-03-11 05:17:38'),
(3, 1, 12, 1, '2021-03-11 11:46:31');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `added_date`) VALUES
(1, 'product1', '121212.00', '2021-03-10 18:41:15'),
(12, 'product 2', '2101.00', '2021-03-11 11:45:11');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `product_image_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`product_image_id`, `product_id`, `image_path`) VALUES
(1, 1, 'http://localhost/inovantsolutions/assets/admin/product-images/1615402176915_banner1.jpg'),
(2, 1, 'http://localhost/inovantsolutions/assets/admin/product-images/1615402270964_banner1.jpg'),
(11, 12, 'http://localhost/inovantsolutions/assets/admin/product-images/1615463111923_banner1.jpg'),
(12, 12, 'http://localhost/inovantsolutions/assets/admin/product-images/1615463111432_banner1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`) VALUES
(1, 'Rajesh', 'Kumar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`product_image_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `product_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
