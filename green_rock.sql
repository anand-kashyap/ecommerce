-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2017 at 10:52 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `green_rock2`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brand`) VALUES
(1, 'Levis'),
(2, 'Espirit'),
(3, 'Ether'),
(4, 'Highlander'),
(5, 'HRX'),
(6, 'Jainish');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `parent`, `url`) VALUES
(1, 'Men', 0, ''),
(2, 'Women', 0, ''),
(3, 'Shirts', 1, '/ecommerce/men_shirts.php'),
(4, 'Pants', 1, '/ecommerce/men_pants.php'),
(5, 'Dresses', 2, '/ecommerce/women_dresses.php'),
(6, 'Jeans', 2, '/ecommerce/women_jeans.php'),
(7, 'T-shirts', 1, '/ecommerce/men_tshirts.php');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `list_price` decimal(10,2) NOT NULL,
  `brand` int(11) NOT NULL,
  `categories` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `featured` tinyint(4) NOT NULL,
  `sizes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `list_price`, `brand`, `categories`, `image`, `description`, `featured`, `sizes`) VALUES
(1, 'Levis Shirt', '20.99', '17.99', 1, '3', '/ecommerce/images/levisshirt.jpeg', 'This is an amazing shirt.You must try this one asap.', 1, 'M:10,L:6,XL:2'),
(2, 'Espirit T-shirt', '12.99', '15.99', 2, '7', '/ecommerce/images/espirit.jpg', 'Great t-shirt for summer. Pair it with white sneakers to get a fashionable look.', 1, 'M:15,L:20,XL:10'),
(3, 'Ether Formal Shirt', '10.99', '14.99', 3, '3', '/ecommerce/images/ether.jpg', 'Rock this formal shirt with dark colored trousers to make sure heads turn around when walk by.', 1, 'M:12,L:20,XL:17'),
(5, 'HRX T-Shirt', '16.99', '30.99', 5, '7', '/ecommerce/images/hrx.jpg', 'Rock this t-Shirt with dark colored jeans to make sure heads turn around when walk by.', 1, 'S:8,M:10,L:15,XL:10'),
(6, 'Levis Shirt', '25.99', '27.99', 1, '3', '/ecommerce/images/levisshirt.jpeg', 'This is an amazing shirt.You must try this one asap.', 0, 'M:10,L:6,XL:2'),
(7, 'Ether Formal Shirt', '10.99', '14.99', 3, '3', '/ecommerce/images/ether.jpg', 'Rock this formal shirt with dark colored trousers to make sure heads turn around when walk by.', 0, 'M:12,L:20,XL:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
