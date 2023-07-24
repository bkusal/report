-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2023 at 01:49 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kushal_crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `phone`, `email`, `password`, `created_at`) VALUES
(1, 'Kushal', 2147483647, 'Kushal@1gmail.com', '111111', '2023-07-07 03:37:19'),
(2, 'Nirmala', 2147483647, 'bnirmala44@gmail.com', '$2y$10$GqT4TGtrkjZEjVhDA97K2e6rp3yk3vEyPuhq0KQbtMBuYggdywbO6', '2023-07-07 04:34:21'),
(4, '', 0, 'Luffy', '$2y$10$kt92ad5axGPVPsToYsy8Hu5/y8powToiLGDmqIL9gNlo6VqJFqLh.', '2023-07-07 09:00:40'),
(5, '', 0, '', '$2y$10$a9Q9ob0X0X/MlYl.4Cqt5eBTjqHzqHmI8hoyxXk5c72cYxXFhVmhK', '2023-07-11 01:57:09'),
(6, 'name', 2147483647, 'nam11@gmail.com', '$2y$10$bqdZ7zk7UrpVji8QUi8dvOfMC569kXPqeihlbEIwrMztDMmLnGS/S', '2023-07-11 09:18:11'),
(7, 'bind', 2147483647, 'bin@gmail.com', '$2y$10$a78NyjBffTYabd7HYi8azus0QsFhfoYuPdMPegMuzE5jLh7Vx.9wq', '2023-07-11 09:23:28'),
(8, 'dupendra', 2147483647, 'dup@gmail.com', '$2y$10$YuTqvHEmRm6T5h5rCsjfY.YSq9CmQAEN8A9DtRPENdaz1ZaEaC472', '2023-07-13 00:57:40'),
(11, 'safal', 2147483647, 'safalsub@gmail.com', '$2y$10$Kd/rsgIVKX2S2j0a8CbT8OmBW96dzdwc6teV8whxHWJaOEmYze.ta', '2023-07-18 11:30:33'),
(12, 'nirbhik', 2147483647, 'nirbhik11@gmail.com', '$2y$10$c2XPk6U5UqpKD.C8ZDZVUu6Ds1ZQqT4tcmOhb5e8wN09HAtTUTP52', '2023-07-18 11:32:09'),
(13, 'Manish', 2147483647, 'manu@gmail.com', '$2y$10$BVZrZgRMpBxjcSQ9LZTx6Oi4wGEs/Lx0M68h4Us5XtfpkPRKSjR4y', '2023-07-19 06:39:40'),
(14, 'Saman', 2147483647, 'saman2@gmail.com', '$2y$10$aB5g.U.k7l5cVxE0qMkmZ.bDIfmT.6x1EyGXwYdy4TsHqWE47zVxi', '2023-07-20 11:53:36');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(225) NOT NULL,
  `reply` varchar(225) NOT NULL,
  `sender` varchar(225) NOT NULL,
  `created-at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `reply`, `sender`, `created-at`) VALUES
(1, '', 'Kushal Budhathoki', '2023-07-24 10:18:33.273821'),
(3, '', 'Bishal', '2023-07-24 10:19:51.797007'),
(4, '', 'kjn,mn', '2023-07-24 10:50:46.611481');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `phone` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `description`, `email`, `phone`, `created_at`) VALUES
(2, 'Ram', 'sdfsdfsadf', 'ram1@gmail.com', 2147483647, '2023-07-06 08:13:50'),
(5, 'Rukesh', 'Dari', 'rukesh1@gmail.com', 2147483647, '2023-07-13 02:02:17'),
(6, 'Bishal', 'I am Bishal Khatri.', 'bishal11@gmail.com', 2147483647, '2023-07-18 05:18:39');

-- --------------------------------------------------------

--
-- Table structure for table `customer_queries`
--

CREATE TABLE `customer_queries` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `description` varchar(225) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_queries`
--

INSERT INTO `customer_queries` (`id`, `subject`, `product_id`, `customer_id`, `description`, `image`) VALUES
(1, 'report', 1, 2, 'sadfasd', 'images/1689939733.png'),
(2, 'report', 2, 5, 'sadfsdaf', 'images/1689941326.png'),
(3, 'sdfs', 1, 2, 'dsfsd', 'images/1689941386.png'),
(4, 'sdfd', 1, 2, 'sdfdsf', 'images/1689942044.png'),
(5, 'report', 1, 2, 'dsf', 'images/1689942135.png');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `description`, `created_at`) VALUES
(1, 'Computer', 'Electronic device', '2023-07-06 11:08:23'),
(2, 'Mouse', 'Hardware device', '2023-07-06 11:49:18'),
(7, 'CPU', 'Dell CPU system.', '2023-07-18 05:19:42'),
(8, 'Ram', '8 gb ram required.', '2023-07-18 05:22:01'),
(10, 'Keyboard', 'alsdkjfl', '2023-07-18 05:51:19'),
(11, 'Book', 'lsdkfj', '2023-07-24 00:58:57'),
(12, 'HDMI', '', '2023-07-24 01:32:33'),
(14, 'USB', '', '2023-07-24 01:35:02'),
(15, 'Port', '', '2023-07-24 01:36:14'),
(16, 'CPU', 'kkkk', '2023-07-24 01:39:51'),
(17, 'CPU', 'kkkk', '2023-07-24 01:44:36'),
(18, 'HDMI', 'iii', '2023-07-24 01:47:24'),
(19, 'Keyboard', 'kkk', '2023-07-24 01:52:11'),
(20, 'Ram', 'rrrr', '2023-07-24 02:28:44'),
(21, 'Motherboard', 'processor', '2023-07-24 05:39:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_queries`
--
ALTER TABLE `customer_queries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_queries_customer_id` (`customer_id`),
  ADD KEY `customer_queries_product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer_queries`
--
ALTER TABLE `customer_queries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_queries`
--
ALTER TABLE `customer_queries`
  ADD CONSTRAINT `customer_queries_customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customer_queries_product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
