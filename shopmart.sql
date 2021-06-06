-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2020 at 07:00 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopmart`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(500) NOT NULL,
  `heading` varchar(200) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `image`, `heading`, `status`, `created_at`) VALUES
(1, '1579333560hero-6.jpg', 'Fancy Sarees', 'active', '2020-02-13 09:11:43'),
(2, '1579333608hero-4.jpg', 'Embroidery Sarees', 'active', '2020-01-30 08:22:09'),
(3, '1579333636hero-7.jpg', 'Designer Kurti', 'active', '2020-01-23 07:03:20'),
(4, '1579333662hero-5.jpg', 'Banarasi Saree', 'inactive', '2020-02-13 09:11:34'),
(6, '1581585023sarvaangi-banner3-1920x743.jpg', 'Banarasi Saree', 'active', '2020-02-13 09:10:23');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `qualification` varchar(30) DEFAULT NULL,
  `experience` varchar(30) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `name`, `email`, `mobile`, `qualification`, `experience`, `address`) VALUES
(1, 'Shubham Jha', 'shubham71099@gmail.com', '7383988791', 'BCA', '1', 'Dindoli, Surat'),
(2, 'Virat Kohli', 'virat@gmail.com', '7847974866', 'PhD', '5', 'Mumbai'),
(3, 'Ajay Parmar', 'ajay@gmail.com', '7990870521', 'BCA', '1', 'Godadara, Surat');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `des` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `des`, `created_at`) VALUES
(1, 'Wedding Lehanga', 'All kind of Lehanga', '2020-01-13 16:38:54'),
(2, 'Rajasthani Saree', 'All kind of Rajasthani Sarees', '2020-01-13 16:44:49'),
(5, 'Banarasi Saree', 'Largest range of saree', '2020-01-29 07:28:33'),
(6, 'Silk Saree', 'All range of silk sarees', '2020-01-29 07:29:21'),
(7, 'Prints Saree', 'All kinds of prints saree', '2020-01-29 07:29:46'),
(8, 'Bandhani Saree', 'Latest Collections', '2020-01-29 07:30:32'),
(10, 'Kurti', 'Latest Kurti', '2020-01-29 07:36:02');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'Shubham Jha', 'shubham71099@gmail.com', 'I want to know sknc'),
(4, 'Kid\'s Footwear', 'shubham71099@gmail.com', 'dfghjk'),
(14, 'edws', 'ajaynareshparmar@gmail.com', 'dwjshndjkxZJN'),
(16, 'Ajay Parmar', 'ajaynareshparmar@gmail.com', 'I want a shirt'),
(17, 'Jerry', 'ajaynareshparmar@gmail.com', 'i want a saree'),
(18, 'Harshal', 'harshalpatil9510@gmail.com', 'I want to buy sarees'),
(21, 'wjshgvb', 'ajaynareshparmar@gmail.com', 'khgvhjgvjhbng'),
(23, 'Shubham Jha', 'ajaynareshparmar@gmail.com', 'efdv'),
(25, 'Abhishek Jha', 'abhishekjha25112001@gmail.com', 'i want to but a shirt'),
(28, 'Shubham Jha', 'shubham71099@gmail.com', 'I want know about Return Policy');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Shubham Jha', 'customer@gmail.com', NULL, '$2y$10$Zn/aoAfWGzrg1oTM13wMD.F1jVKIiNg8GnM79nkSuXRdY2TzIOKE6', NULL, '2020-02-28 02:31:01', '2020-02-28 02:31:01'),
(2, 'Ajay Parmar', 'ajay@gmail.com', NULL, '$2y$10$ot3YPny5.ysjcW.ktvfbmeTYkOV3j1E.zO4N6AVWDrPn.tzTR3X8m', NULL, '2020-02-28 02:42:24', '2020-02-28 02:42:24'),
(3, 'Harshal Patil', 'harshal@gmail.com', NULL, '$2y$10$vKhgeQdcE0BxWFPPdasBFeGLj/1foM14GXnEPc32XnfVXZBMuSoFO', NULL, '2020-02-28 03:28:57', '2020-02-28 03:28:57'),
(4, 'Shubham Jha', 'shubham@gmail.com', NULL, '$2y$10$lEP02BGVz3y75QBj/VgiqepUWmfps8/GM6nenyUt9g5GuhtGW.ZMW', NULL, '2020-02-28 03:40:43', '2020-02-28 03:40:43'),
(6, 'njbjnbn', 'hbb@gmail.com', NULL, '$2y$10$EEJXXHLENODdwTykrEk50OQLMpJepYuh8vSS3xrI9.TH4LjoE5EJC', NULL, '2020-02-28 07:22:21', '2020-02-28 07:22:21'),
(9, 'Mukesh Ambani', 'mukesh@gmail.com', NULL, '$2y$10$nDEsK2fZiWol4dJsmLq94.cHODItRFtDNQlGc4PEDfPkukdCVn.A6', NULL, '2020-04-11 11:25:23', '2020-04-11 11:25:23');

-- --------------------------------------------------------

--
-- Table structure for table `customer_address`
--

CREATE TABLE `customer_address` (
  `id` bigint(20) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `flat` varchar(100) DEFAULT NULL,
  `society` varchar(200) DEFAULT NULL,
  `landmark` varchar(200) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `pincode` varchar(50) DEFAULT NULL,
  `cid` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_address`
--

INSERT INTO `customer_address` (`id`, `name`, `mobile`, `flat`, `society`, `landmark`, `city`, `state`, `pincode`, `cid`) VALUES
(2, 'Shubham Jha', '7383988791', '245', 'Govardhan Nagar', 'Dindoli', 'Surat', 'Gujarat', '394210', 4),
(5, 'hbn', 'hjnm', 'jh', 'jnm', 'jk', 'm', 'jkm', 'hjn', 4),
(6, 'Test', '7847974866', '55', 'Mansarovar', 'Godadara', 'Surat', 'Gujarat', '394210', 1),
(7, 'Ajay Parmar', '7990870521', '81', 'Madhav Park Row House', 'Godadara', 'Surat', 'Gujarat', '395010', 2),
(8, 'Harshal', '9478945855', '188', 'Umiya Nagar', 'Navagam', 'Surat', 'Gujarat', '394210', 3),
(9, 'Mukesh Ambani', '8888811111', '121', 'Ambani Villa', 'Juhu Bich', 'Mumbai', 'Maharastra', '485502', 9);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `image`) VALUES
(1, '1579338378logo.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_11_121335_create_category_table', 2),
(5, '2020_02_27_080134_create_customers_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('shubham71099@gmail.com', '$2y$10$UjkywEmaNEneoL7zeLY5FuhopH5YT6CYMSlrE4lhRKkgHiT.4kQqm', '2019-12-20 09:29:56');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `scat_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `des` varchar(500) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `image` varchar(500) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `scat_id`, `name`, `price`, `des`, `status`, `image`, `created_at`) VALUES
(2, 5, 'Banarasi Saree', 499, 'Shop the Best Quality Banarasi Saree. Best Material Quality. ', 'inactive', '1580283687saree.jpeg', '2020-02-28 15:46:41'),
(3, 7, 'Prints Saree', 399, 'Shop the Best Quality Prints Saree . Best Material Quality.', 'inactive', '1580283775saree2.jpg', '2020-02-28 15:35:00'),
(4, 10, 'Designer Kurti', 499, 'Best Quality Kurti', 'inactive', '1581665393Capture1.JPG', '2020-02-28 15:35:06'),
(6, 1, 'Wedding Lehanga', 4999, 'Wedding Lehanga for dulhan in marriage', 'active', '1582898185wed5.jpg', '2020-02-28 13:56:55'),
(7, 1, 'Fabric Lehanga', 3999, 'Lehanga for dulhan', 'inactive', '1582898290wed4.jpg', '2020-02-28 15:44:44'),
(8, 1, 'Wedding Lehanga', 1999, 'Wedding Lehanga for dulhan', 'active', '1582898341wed3.jpg', '2020-02-28 13:59:01'),
(9, 1, 'Wedding Lehanga', 2999, 'Wedding Lehanga', 'active', '1582898374wed2.jpg', '2020-02-28 13:59:34'),
(10, 1, 'Wedding Lehanga', 4999, 'Wedding Lehanga for dulhan', 'active', '1582898425wed1.jpg', '2020-02-28 14:00:25'),
(11, 10, 'Designer Kurti', 599, 'Designer Kurti for woman', 'active', '1582903893613jc+ytv0L._UY606_.jpg', '2020-02-28 15:31:34'),
(12, 10, 'Stylish Kurti', 699, 'Stylish Kurti for women', 'active', '1582903942260-2602619_kurti-top.png', '2020-03-09 05:33:18'),
(13, 5, 'Latest Banarasi Saree', 999, 'Latest Banarasi Saree for Woman', 'active', '1582904046img-20190309-wa0145.jpg', '2020-02-28 15:34:06'),
(14, 7, 'Prints Saree', 399, 'Prints saree with good Material . 6.0 Meter Cut with Blouse', 'active', '1582904257shilpa-shetty-multi-colour-printed-saree-61254-800x1100.jpg', '2020-02-28 15:37:37'),
(15, 8, 'Designer Bandhani Saree', 599, 'Designer Bandhani Saree for Woman. 6.0 Meter Cut with Blouse', 'active', '15829045631581665571saree1 - Copy (2).jpg', '2020-02-28 15:42:43'),
(16, 6, 'Silk Saree', 599, 'Silk Saree for Woman. 6.0 Meter Cut with Blouse', 'active', '1582904662Orange-Colour-linen-Square-Pri-1555590649-2.jpg', '2020-02-28 15:44:22'),
(17, 6, 'Silk Saree', 599, 'Silk Saree with Good Fabric. 6.0 Meter  Cut with Blouse.', 'active', '158290477911465470456690-Ligalz-Navy-Crepe-Printed-Saree-5481465470456559-1.jpg', '2020-02-28 15:46:19');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `id` bigint(20) NOT NULL,
  `cid` bigint(20) NOT NULL,
  `aid` bigint(20) NOT NULL,
  `pid` bigint(20) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `quantity` varchar(50) DEFAULT NULL,
  `amount` varchar(200) DEFAULT NULL,
  `mode` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `order_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`id`, `cid`, `aid`, `pid`, `name`, `price`, `quantity`, `amount`, `mode`, `status`, `order_at`) VALUES
(1, 4, 2, 8, 'Wedding Lehanga', '1999', '2', '3998', 'cod', 'Shipped', '2020-04-11 16:21:11'),
(2, 2, 7, 13, 'Latest Banarasi Saree', '999', '1', '999', 'cod', 'Dispatched', '2020-04-11 16:22:59'),
(3, 3, 8, 16, 'Silk Saree', '599', '2', '1198', 'cod', 'Out for Delivery', '2020-04-11 16:27:42'),
(4, 9, 9, 10, 'Wedding Lehanga', '4999', '1', '4999', 'cod', 'Shipped', '2020-04-11 16:58:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Shubham Jha', 'admin@shopmart.com', NULL, '$2y$10$yaDzrDJdTUd5z0FChY8zh.SxpqLmVkmW.8om37W7R5vy5QEuKhJCu', 'Tut5v33jpq2EYoZaVBT53WhPOtX48XhrJcDKrBiFik2DUCKLQEcSQRA2ueXe', '2019-12-12 02:40:03', '2019-12-12 02:40:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_ibfk_1` (`scat_id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer_address`
--
ALTER TABLE `customer_address`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`scat_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
