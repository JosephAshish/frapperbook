-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 10:13 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frappebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `businessname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `businessemail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `finyearstart` date NOT NULL,
  `finyearend` date NOT NULL,
  `noofinvoice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalamt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `businessname`, `businessemail`, `country`, `currency`, `finyearstart`, `finyearend`, `noofinvoice`, `totalamt`, `created_at`, `updated_at`) VALUES
(1, 'joseph ashish', 'abcgroup', 'josephashish12345678910@gmail.com', 'India', 'inr', '2021-06-01', '2021-06-30', NULL, NULL, '2021-06-02 00:03:48', '2021-06-02 00:03:48'),
(2, 'tcsgrp', 'tcs', 'tcs@gmail.com', 'india', 'inr', '2021-06-23', '2021-07-02', NULL, NULL, '2021-06-02 00:40:04', '2021-06-02 00:40:04'),
(3, 'tcsgrp', 'tcs', 'tcs@gmail.com', 'India', 'inr', '2021-05-31', '2021-06-22', NULL, NULL, '2021-06-02 00:41:43', '2021-06-02 00:41:43'),
(4, 'infosysgrp', 'infosys', 'info@sys.com', 'ind', 'inr', '2021-06-04', '2021-06-25', NULL, NULL, '2021-06-02 01:03:05', '2021-06-02 01:03:05'),
(5, 'joseph ashish', 'tcs', 'imca-108@scmsgroup.org', 'India', 'inr', '2021-06-04', '2021-07-08', NULL, NULL, '2021-06-02 01:05:12', '2021-06-02 01:05:12'),
(6, 'joseph ashish', 'tcs', 'imca-108@scmsgroup.org', 'India', 'inr', '2021-06-04', '2021-07-08', NULL, NULL, '2021-06-02 01:06:02', '2021-06-02 01:06:02'),
(7, 'joseph ashish', 'abcgroup', 'imca-108@scmsgroup.org', 'India', 'inr', '2021-06-16', '2021-06-24', NULL, NULL, '2021-06-02 01:06:21', '2021-06-02 01:06:21'),
(8, 'joseph ashish', 'tcs', 'josephashish12345678910@gmail.com', 'India', 'inr', '2021-06-08', '2021-06-23', NULL, NULL, '2021-06-02 01:07:55', '2021-06-02 01:07:55'),
(9, 'joseph ashish', 'abcgroup', 'josephashish12345678910@gmail.com', 'India', 's', '2021-06-30', '2021-07-02', NULL, NULL, '2021-06-02 01:16:34', '2021-06-02 01:16:34'),
(10, 'wipro', 'wiproin', 'wipro@in.com', 'India', 'inr', '2021-06-24', '2021-06-18', NULL, NULL, '2021-06-02 01:19:02', '2021-06-02 01:19:02');

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
(1, '2021_06_01_195035_create_files_table', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
