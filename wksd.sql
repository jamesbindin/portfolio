-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2020 at 06:49 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wksd`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(20) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `subscription_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `first_name`, `last_name`, `email`, `address`, `password`, `subscription_id`) VALUES
(5, 'james', 'bindin', 'email@email.com', '123, road, city, AB3 3UY', 'N3RDZlFtbTdRUEVBcUxCMzhwTE00Zz09', 2),
(36, 'test', 'test', 'test@test.com', 'jlksdjflkjsdlfjsd', 'N3RDZlFtbTdRUEVBcUxCMzhwTE00Zz09', 4);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` float(4,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `name`, `description`, `price`, `image`) VALUES
(1, 'margherita', 'classic margherita pizza with a sourdough crust. Authentic tomato sauce topped with mozzarella cheese.', 10.99, 'img/items/margherita.jpg'),
(2, 'neapolitan', 'Authentic Neapolitan with a sourdough base. Crispy thin crust topped with home made tomato sauce with fresh mozzarella and basil.', 10.99, 'img/items/neapolitan.jpg'),
(3, 'chicken fajita', 'spicy fajita pizza on a sourdough base. Tomato base with mozzarella cheese. Topped with charred onion, bell pepper chicken and fresh chilli spiced with cumin. ', 12.99, 'img/items/fajita.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(20) NOT NULL,
  `customer_id` int(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `customer_id`, `date`) VALUES
(52, 5, '2020-09-10 13:36:32'),
(53, 5, '2020-09-10 13:36:38'),
(54, 5, '2020-09-10 13:37:09'),
(55, 5, '2020-09-10 13:37:11'),
(56, 5, '2020-09-10 13:56:28'),
(57, 5, '2020-09-10 13:56:30'),
(62, 5, '2020-09-11 19:02:37'),
(63, 5, '2020-09-12 16:18:22'),
(64, 5, '2020-09-13 17:51:21'),
(65, 5, '2020-09-15 15:07:25'),
(66, 5, '2020-09-15 15:23:03'),
(67, 5, '2020-09-15 15:23:45'),
(68, 5, '2020-09-15 15:24:42'),
(69, 5, '2020-09-15 15:24:58'),
(70, 5, '2020-09-15 15:25:15'),
(71, 5, '2020-09-15 15:25:25'),
(72, 5, '2020-09-15 15:26:00'),
(73, 5, '2020-09-15 15:26:57'),
(74, 5, '2020-09-15 15:27:43'),
(75, 5, '2020-09-15 15:28:26'),
(76, 5, '2020-09-15 15:28:53'),
(77, 5, '2020-09-15 15:30:06'),
(78, 5, '2020-09-15 15:30:38'),
(79, 5, '2020-09-15 15:36:07'),
(80, 5, '2020-09-15 15:37:07'),
(81, 5, '2020-09-15 15:37:21'),
(82, 5, '2020-09-15 15:37:52'),
(83, 5, '2020-09-15 15:38:55'),
(84, 5, '2020-09-15 15:39:29'),
(85, 5, '2020-09-15 15:39:53'),
(86, 5, '2020-09-15 15:40:36'),
(87, 5, '2020-09-15 15:40:55'),
(88, 5, '2020-09-15 15:41:09'),
(90, 5, '2020-09-15 17:04:32'),
(91, 5, '2020-09-15 17:08:27'),
(92, 5, '2020-09-15 17:12:50'),
(93, 5, '2020-09-15 17:29:37'),
(94, 5, '2020-09-15 17:30:41'),
(95, 5, '2020-09-15 17:30:42'),
(96, 5, '2020-09-15 17:30:43'),
(97, 5, '2020-09-15 17:30:43'),
(98, 5, '2020-09-15 17:30:44'),
(99, 5, '2020-09-15 17:44:22'),
(100, 5, '2020-09-15 17:48:29'),
(101, 5, '2020-09-15 17:49:59'),
(102, 5, '2020-09-15 17:50:01'),
(103, 5, '2020-09-15 17:50:26'),
(104, 5, '2020-09-15 17:50:31'),
(105, 5, '2020-09-15 17:52:12'),
(106, 5, '2020-09-15 18:29:05'),
(107, 5, '2020-09-15 18:40:58'),
(108, 5, '2020-09-16 14:16:32'),
(109, 5, '2020-09-16 15:10:01'),
(110, 5, '2020-09-16 15:22:18'),
(111, 5, '2020-09-16 15:22:24'),
(112, 5, '2020-09-16 15:24:37'),
(113, 5, '2020-09-16 15:25:37'),
(114, 5, '2020-09-16 15:25:56'),
(115, 5, '2020-09-16 15:26:40'),
(116, 5, '2020-09-16 15:27:08'),
(117, 5, '2020-09-16 15:27:37'),
(118, 5, '2020-09-16 15:28:18'),
(119, 5, '2020-09-16 15:28:45'),
(120, 5, '2020-09-16 15:29:28'),
(121, 5, '2020-09-16 15:29:51'),
(122, 5, '2020-09-16 15:30:20');

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `order_item_id` int(20) NOT NULL,
  `order_id` int(20) NOT NULL,
  `item_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`order_item_id`, `order_id`, `item_id`) VALUES
(62, 52, 3),
(63, 53, 3),
(64, 55, 3),
(65, 57, 3),
(73, 62, 1),
(74, 62, 1),
(75, 62, 2),
(76, 63, 1),
(77, 63, 2),
(78, 63, 3),
(79, 63, 3),
(80, 64, 2),
(81, 64, 3),
(82, 65, 1),
(83, 65, 1),
(84, 65, 2),
(85, 65, 3),
(86, 66, 3),
(87, 67, 3),
(88, 68, 3),
(89, 69, 3),
(90, 70, 2),
(91, 71, 1),
(92, 72, 3),
(93, 73, 3),
(94, 74, 3),
(95, 75, 3),
(96, 76, 3),
(97, 77, 3),
(98, 78, 3),
(99, 79, 3),
(100, 80, 3),
(101, 81, 3),
(102, 82, 3),
(103, 83, 3),
(104, 84, 3),
(105, 85, 3),
(106, 86, 3),
(107, 87, 3),
(108, 88, 3),
(110, 90, 3),
(111, 91, 3),
(112, 92, 3),
(113, 92, 3),
(114, 93, 2),
(115, 93, 3),
(116, 98, 3),
(117, 99, 2),
(118, 99, 3),
(119, 100, 3),
(120, 102, 3),
(121, 104, 3),
(122, 105, 2),
(123, 105, 3),
(124, 105, 3),
(125, 106, 1),
(126, 106, 1),
(127, 106, 2),
(128, 106, 2),
(129, 106, 2),
(130, 106, 2),
(131, 106, 2),
(132, 106, 3),
(133, 106, 3),
(134, 106, 3),
(135, 106, 3),
(136, 106, 3),
(137, 107, 1),
(138, 107, 2),
(139, 108, 2),
(140, 109, 1),
(141, 111, 3),
(142, 112, 3),
(143, 113, 3),
(144, 114, 3),
(145, 115, 3),
(146, 116, 3),
(147, 117, 3),
(148, 118, 3),
(149, 119, 3),
(150, 120, 3),
(151, 120, 3),
(152, 120, 3),
(153, 120, 3),
(154, 120, 3),
(155, 121, 3),
(156, 121, 3),
(157, 121, 3),
(158, 121, 3),
(159, 122, 3),
(160, 122, 3),
(161, 122, 3),
(162, 122, 3),
(163, 122, 1),
(164, 122, 1),
(165, 122, 1),
(166, 122, 2),
(167, 122, 2),
(168, 122, 2),
(169, 122, 2);

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `subscription_id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`subscription_id`, `name`) VALUES
(1, 'mix and match'),
(2, 'bread lover'),
(3, 'breakfast deal'),
(4, 'none');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `idx_subscription_id` (`subscription_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `idx_customer_id` (`customer_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`order_item_id`),
  ADD KEY `idx_order_id` (`order_id`),
  ADD KEY `idx_item_id` (`item_id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`subscription_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `order_item_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `subscription_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `fk_customer_subscription_id` FOREIGN KEY (`subscription_id`) REFERENCES `subscription` (`subscription_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_order_customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_item`
--
ALTER TABLE `order_item`
  ADD CONSTRAINT `fk_order_item_item_id` FOREIGN KEY (`item_id`) REFERENCES `item` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_order_item_order_id` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
