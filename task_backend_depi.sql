-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2024 at 06:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task_backend_depi`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `created_at`) VALUES
(2, 1, 2, '2024-08-23 03:17:00'),
(3, 1, 2, '2024-08-23 03:17:02'),
(4, 1, 2, '2024-08-23 03:26:22'),
(5, 1, 2, '2024-08-23 03:26:28'),
(6, 1, 2, '2024-08-23 03:26:35'),
(8, 1, 2, '2024-08-23 03:26:44'),
(9, 1, 2, '2024-08-23 03:26:47'),
(10, 1, 2, '2024-08-23 03:27:18'),
(11, 1, 2, '2024-08-23 03:27:54'),
(12, 1, 2, '2024-08-23 03:29:38'),
(13, 1, 2, '2024-08-23 03:31:43'),
(14, 1, 2, '2024-08-23 03:31:47'),
(15, 1, 2, '2024-08-23 03:35:16'),
(16, 1, 2, '2024-08-23 03:36:12'),
(17, 1, 2, '2024-08-23 03:36:19'),
(18, 1, 2, '2024-08-23 03:36:46'),
(19, 1, 2, '2024-08-23 04:00:26'),
(21, 1, 2, '2024-08-24 03:46:19'),
(22, 6, 2, '2024-08-24 03:49:02'),
(23, 6, 2, '2024-08-24 04:50:22'),
(29, 1, 2, '2024-08-24 23:02:37'),
(32, 11, 2, '2024-08-25 01:05:23'),
(33, 11, 3, '2024-08-25 01:10:14'),
(35, 11, 6, '2024-08-25 01:11:16'),
(36, 13, 6, '2024-08-25 01:13:29'),
(37, 28, 3, '2024-08-25 02:34:03');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `created_at`) VALUES
(2, 'labtop', 'this labtop is so strong and powerful if you are a gamer it will sutable for you.', '300000', '2024-08-25 02:42:57'),
(3, 'ipone 1722', 'this ipone is so great to have such itfd', '10000', '2024-08-25 01:21:42'),
(5, 'smart phone', 'this phone you use it in diffrent fidls ', '3000', '2024-08-24 21:26:27'),
(6, 'air podes', 'air podes it work wireless', '7000', '2024-08-24 21:28:16'),
(8, 'lenevo', 'lenovo is a great kind of labtob i recommed it for every one who want to start programming', '20000', '2024-08-25 02:44:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `username` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `type` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `type`, `password`, `create_at`) VALUES
(1, 'eslam', 'eslam@gmail.com', 'admin', '111111', '2024-08-24 04:35:24'),
(6, '30209302100374', 'mohame@mgao.com', 'client', '111111', '2024-08-24 04:35:30'),
(7, 'mohamed', 'mohaem@gmail.com', 'client', '11122233', '2024-08-24 04:35:40'),
(8, 'ahmed sayed', 'ahmed@gmail.com', 'client', '1234567', '2024-08-24 04:35:47'),
(9, 'ahemd sayed', 'Ahemd@gmail.com', 'client', '1112233', '2024-08-24 04:35:58'),
(10, 'marwaare', 'marww@gggdm.com', 'client', '223444', '2024-08-24 04:42:10'),
(11, 'mahmoud', 'mahmoud@gmail.com', 'client', '1234567', '2024-08-25 00:53:15'),
(12, 'sayed', 'sayed@gmail.com', 'client', '1234567', '2024-08-25 01:09:55'),
(13, 'abdelbakey', 'abdelbakey@gmail.com', 'client', '11223344', '2024-08-25 01:11:06'),
(14, 'walaa', 'walaa@gmailc.com', 'client', '1234567', '2024-08-25 01:22:43'),
(15, 'lament', 'lamet@gmail.com', 'client', '1234555', '2024-08-25 01:23:29'),
(16, 'fadynamg', 'fadey@gmail.com', 'client', '123455', '2024-08-25 01:25:23'),
(17, 'samedn', 'samed@gmai.com', 'client', '111222', '2024-08-25 01:27:41'),
(18, 'saraali', 'ali@gmai.com', 'client', '13323222', '2024-08-25 01:35:32'),
(19, 'safadi m', 'safaid@gami.com', 'client', '111222', '2024-08-25 02:01:14'),
(20, 'saamir', 'samir@gmail.com', 'client', '1234566', '2024-08-25 02:02:43'),
(21, 'sahmeds', 'samed@gma.com', 'client', '111111', '2024-08-25 02:03:30'),
(22, 'samdheddas', 'dksajk@gmai.om', 'client', '123444', '2024-08-25 02:07:38'),
(23, 'samham', 'sehem@gmai.cocm', 'client', '122233', '2024-08-25 02:11:51'),
(24, 'peoesol', 'poefd@gmai.com', 'client', '21212322', '2024-08-25 02:19:09'),
(25, 'samy', 'samey@gmai.com', 'client', '11111111', '2024-08-25 02:27:18'),
(26, 'gamilaf', 'poe@gmai.com', 'client', '13434333', '2024-08-25 02:28:30'),
(27, 'abdo', 'abdo@gmai.com', 'client', '124455', '2024-08-25 02:30:01'),
(28, 'marwa', 'marwa@gmail.com', 'client', '223444', '2024-08-25 02:31:43'),
(29, 'redges', 'redgdir@gmai.oc', 'client', '1111111', '2024-08-25 02:32:55'),
(30, 'omar', 'omar@gmail.com', 'client', '344433', '2024-08-25 02:33:40'),
(31, 'new user', 'user@gmai.com', 'client', '122322', '2024-08-25 02:45:11'),
(32, 'new user', 'userafmd@d.con', 'client', '22222', '2024-08-25 02:45:51'),
(33, 'new user', 'new@mai.com', 'client', '11223', '2024-08-25 02:46:39'),
(34, 'new user', 'fdk@gmai.com', 'client', '122322', '2024-08-25 02:47:53'),
(35, 'userfd', 'user@gmai.co', 'client', '1112333', '2024-08-25 02:48:37'),
(36, 'userff', 'user@gmai.co', 'client', '2322332', '2024-08-25 02:50:12'),
(37, 'new user', 'user@gmai.cd', 'client', '122322', '2024-08-25 02:50:48'),
(38, 'sanmy', 'samy@gmail.co', 'client', '1223222', '2024-08-25 02:52:34'),
(39, 'gafdf', 'fdfd@gami.com', 'client', '111111', '2024-08-25 02:57:02'),
(40, 'new user', 're@gmai.co', 'client', '122322', '2024-08-25 02:59:07'),
(41, 'new user', 'fdn@gmaic.om', 'client', '122322', '2024-08-25 02:59:17'),
(42, 'new user', 'fdn@gmaic.om', 'client', '122322', '2024-08-25 02:59:24'),
(43, 'reiad', 'reidad@gmail.com', 'client', '2223333', '2024-08-25 02:59:50'),
(44, 'redref', 'fdfd@gmal.com', 'client', '12343', '2024-08-25 03:00:33'),
(45, 'ahemd', 'ahmed@aga.con', 'client', '1111111', '2024-08-25 03:01:42'),
(46, 'zaid gamial', 'ziald@gmail.com', 'client', '1133443', '2024-08-25 03:06:42'),
(47, 'samir', 'samair@gmail.com', 'client', '11111222', '2024-08-25 03:10:15'),
(48, 'redffi', 'redifre@gmia.cm', 'client', '22222', '2024-08-25 03:12:15'),
(49, 'omdaafd', 'omda@gmail.com', 'client', '1122334', '2024-08-25 03:13:16'),
(50, 'registed', 'registed@gmail.com', 'client', '222222', '2024-08-25 03:18:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
