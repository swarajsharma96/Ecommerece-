-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 18, 2019 at 06:53 PM
-- Server version: 10.2.3-MariaDB-log
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banners`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 0,
  `is_deleted` tinyint(4) DEFAULT 0,
  `modified_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `phone`, `password`, `details`, `created_at`, `picture`, `is_active`, `is_deleted`, `modified_at`) VALUES
(36, 'trishna', 'swarajsharma6663@gmail.com', '01811113430', '11', 'bepok details', '2019-12-12 10:16:20', 'IMG_1576440463_02.png', 1, 0, '2019-12-15 08:07:43'),
(37, 'swarup', 'swarupsharma79@gmail.com', '01998660240', '11', 'few details updated', '2019-12-12 10:17:53', 'IMG_1576440479_03.png', 1, 0, '2019-12-15 08:07:59'),
(38, 'swarup', 'swaraj@gmail.com', '01811113430', '22', 'few details updated', '2019-12-15 09:22:27', 'IMG_1576444947_01.png', 1, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `unit_price` int(11) DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `picture`, `product_title`, `qty`, `unit_price`, `total_price`, `created_at`, `updated_at`) VALUES
(1, '11', 4, 'IMG_1576444851_image-3.jpg', 'swarup', 4, 100, 400, '2019-12-16 06:57:45', NULL),
(2, '22', 6, 'IMG_1576456706_image-1.jpg', 'joya', 3, 120, 360, '2019-12-16 06:59:20', NULL),
(3, '1862408767_1576693592', 12, 'IMG_1576612057_image02.jpg', 'Jacket', 1, 550, 550, '2019-12-18 06:33:23', NULL),
(6, '1862408767_1576693592', 7, 'IMG_1576520641_image-1.jpg', 'DSLR', 2, 200, 400, '2019-12-18 06:37:33', '2019-12-18 06:49:15');

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` tinyint(11) NOT NULL DEFAULT 0,
  `is_deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`id`, `name`, `link`, `details`, `picture`, `is_active`, `is_deleted`) VALUES
(21, 'SWARAJ SHARMA', 'www.google.commmmm also', 'no more details here', 'IMG_1575429503_index3.jpg', 1, 0),
(22, 'Atiqua vai update', 'www.swaraj.com', 'no more details here', 'IMG_1575429565_1546713155853.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `comment`, `picture`) VALUES
(2, 'Swarup sharma updated', 'swarajsharma6663@gmail.com', 'Bio', 'Hey bro what\'s up?', ''),
(3, 'swarup', 'swaraj@gmail.com', 'Math', 'Cache memory', ''),
(4, 'trishna', 'trishnash@gmail.com', 'no choose', 'no comment bro', ''),
(5, 'Jadu', 'jadugopal45@gmail.com', 'Doctor', 'Better person than other', ''),
(6, 'gvai', 'swewfytef@gmail.com', 'Biology+Ict', 'no way', NULL),
(9, 'sagor updated', 'swarajsharma6663@gmail.com', 'No choose', 'no way', 'IMG_1574481374_download.jpg'),
(10, 'swarup', 'swarupsharma4546@gmail.com', 'Biology', 'no way', 'IMG_1574481473_download 2.png'),
(11, 'kutubi', 'swewfytef@gmail.com', 'No choose', 'no way', 'IMG_1574481888_index3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `title`, `description`, `link`) VALUES
(2, 'o vai hode tui', 'ki holo', 'www.joy.com'),
(3, 'swaraj', 'kmn achen', 'www.sharma2.com'),
(5, 'oi kene color', 'ki holo2', 'www.goooglee.com'),
(6, 'rohit', 'kmn achen', 'www.link.com'),
(7, 'vai jan up', 'kichu na', 'www.joy.com.org.ini');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mrp` float DEFAULT NULL,
  `details` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 0,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `modified_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `email`, `phone`, `password`, `mrp`, `details`, `created_at`, `picture`, `is_active`, `is_deleted`, `modified_at`) VALUES
(7, 'DSLR', 'sharma@gmail.com', '01881111112', '22', 200, 'Products is best', '2019-12-16 06:24:01', 'IMG_1576520641_image-1.jpg', 1, 0, '2019-12-17 07:46:37'),
(8, 'Asus Laptop', 'kakon@gmail.com', '0130233344', '33', 2500, 'outlook is well', '2019-12-16 06:25:21', 'IMG_1576520721_image-4.jpg', 1, 0, '2019-12-17 07:46:45'),
(9, 'Projector', 'swaraj@gmail.com', '01811113430', '22', 36000, 'Latest generation', '2019-12-17 07:23:31', 'IMG_1576610611_image-2.jpg', 1, 0, NULL),
(10, 'Dress', 'trishnash@gmail.com', '01998660240', '33', 500, 'Pretty Dress', '2019-12-17 07:24:38', 'IMG_1576610678_image04.jpg', 1, 0, NULL),
(11, 'Shoe', 'trishnash@gmail.com', '01811113430', '55', 670, 'Well', '2019-12-17 07:45:04', 'IMG_1576611904_image03.jpg', 1, 0, NULL),
(12, 'Jacket', 'shiprarani34@yahoo.com', '01811113430', '22', 550, 'few details', '2019-12-17 07:47:37', 'IMG_1576612057_image02.jpg', 1, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reason` text COLLATE utf8_unicode_ci NOT NULL,
  `subscriber` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `reason`, `subscriber`) VALUES
(2, 'swarajsharma6663@gmail.com', 'No reason r', 'Yes'),
(3, 'swarupsharma79@gmail.com', 'more excuse have showen', 'yes'),
(4, 'trishnash@gmail.com', 'no reason', 'Yeap'),
(6, 'shiprarani34@yahoo.com', 'excuse me', 'Yeap'),
(7, 'atiquevai@yahoo.com', 'no excuse', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`) VALUES
(25, 'sharma', 'swarajsharma6663@gmail.com', '01811113430', '11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
