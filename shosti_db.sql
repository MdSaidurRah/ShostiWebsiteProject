-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2026 at 12:26 AM
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
-- Database: `shosti_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_logs`
--

CREATE TABLE `access_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `actionName` varchar(100) DEFAULT NULL,
  `workingDomain` varchar(100) DEFAULT NULL,
  `note` varchar(500) DEFAULT NULL,
  `reference` varchar(150) DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `access_logs`
--

INSERT INTO `access_logs` (`id`, `userId`, `actionName`, `workingDomain`, `note`, `reference`, `createdBy`, `updatedBy`, `createdAt`, `updatedAt`) VALUES
(5072, 2, 'Successful Login Attempt', 'System', '', NULL, 2, 2, '2026-03-01 08:39:19', '2026-03-01 08:39:19'),
(5073, 2, 'Successful Login Attempt', 'System', '', NULL, 2, 2, '2026-04-02 05:13:24', '2026-04-02 05:13:24'),
(5074, 2, 'Successful Login Attempt', 'System', '', NULL, 2, 2, '2026-04-02 07:05:45', '2026-04-02 07:05:45'),
(5075, 2, 'Successful Login Attempt', 'System', '', NULL, 2, 2, '2026-04-03 03:30:30', '2026-04-03 03:30:30'),
(5076, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-03 03:48:35', '2026-04-03 03:48:35'),
(5077, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-03 03:48:40', '2026-04-03 03:48:40'),
(5078, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-03 03:49:01', '2026-04-03 03:49:01'),
(5079, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-03 03:49:38', '2026-04-03 03:49:38'),
(5080, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-03 03:51:13', '2026-04-03 03:51:13'),
(5081, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-03 03:53:22', '2026-04-03 03:53:22'),
(5082, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-03 03:55:10', '2026-04-03 03:55:10'),
(5083, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-03 03:55:20', '2026-04-03 03:55:20'),
(5084, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-03 03:56:11', '2026-04-03 03:56:11'),
(5085, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-03 03:56:16', '2026-04-03 03:56:16'),
(5086, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-03 03:56:20', '2026-04-03 03:56:20'),
(5087, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-03 03:57:02', '2026-04-03 03:57:02'),
(5088, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-03 03:59:15', '2026-04-03 03:59:15'),
(5089, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-03 03:59:21', '2026-04-03 03:59:21'),
(5090, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-03 04:00:21', '2026-04-03 04:00:21'),
(5091, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-03 04:01:36', '2026-04-03 04:01:36'),
(5092, 2, 'Business Service Submit.', 'Business Service', '', NULL, 2, 2, '2026-04-03 04:02:57', '2026-04-03 04:02:57'),
(5093, 2, 'Business Service Update.', 'Business Service', '', NULL, 2, 2, '2026-04-03 04:03:12', '2026-04-03 04:03:12'),
(5094, 2, 'Business Service Update.', 'Business Service', '', NULL, 2, 2, '2026-04-03 04:04:45', '2026-04-03 04:04:45'),
(5095, 2, 'Business Service Update.', 'Business Service', '', NULL, 2, 2, '2026-04-03 04:04:55', '2026-04-03 04:04:55'),
(5096, 2, 'Business Service Update.', 'Business Service', '', NULL, 2, 2, '2026-04-03 04:07:10', '2026-04-03 04:07:10'),
(5097, 2, 'Business Ad Submit.', 'Business Ad', '', NULL, 2, 2, '2026-04-03 04:07:29', '2026-04-03 04:07:29'),
(5098, 2, 'Business Ad Submit.', 'Business Ad', '', NULL, 2, 2, '2026-04-03 04:07:39', '2026-04-03 04:07:39'),
(5099, 2, 'Business Ad Update.', 'Business Ad', '', NULL, 2, 2, '2026-04-03 04:07:56', '2026-04-03 04:07:56'),
(5100, 2, 'Banner Submit.', 'Banner ', '', NULL, 2, 2, '2026-04-03 04:08:37', '2026-04-03 04:08:37'),
(5101, 2, 'Banner Update.', 'Banner', '11', NULL, 2, 2, '2026-04-03 04:08:49', '2026-04-03 04:08:49'),
(5102, 2, 'Business Client Submit.', 'Business Client', '', NULL, 2, 2, '2026-04-03 04:09:18', '2026-04-03 04:09:18'),
(5103, 2, 'Business Product Submit.', 'Business Product', '', NULL, 2, 2, '2026-04-03 04:10:03', '2026-04-03 04:10:03'),
(5104, 2, 'Business Client Submit.', 'Business Client', '', NULL, 2, 2, '2026-04-03 04:16:56', '2026-04-03 04:16:56'),
(5105, 2, 'Business Brands Submit.', 'Business Brands', '', NULL, 2, 2, '2026-04-03 04:40:29', '2026-04-03 04:40:29'),
(5106, 2, 'Business Brands Update.', 'Business Brands', '', NULL, 2, 2, '2026-04-03 04:40:41', '2026-04-03 04:40:41'),
(5107, 2, 'Business Brands Update.', 'Business Brands', '', NULL, 2, 2, '2026-04-03 04:40:46', '2026-04-03 04:40:46'),
(5108, 2, 'Gallery Submit.', 'Gallery ', '', NULL, 2, 2, '2026-04-03 05:37:06', '2026-04-03 05:37:06'),
(5109, 2, 'Gallery Submit.', 'Gallery ', '', NULL, 2, 2, '2026-04-03 05:37:29', '2026-04-03 05:37:29'),
(5110, 2, 'Gallery Submit.', 'Gallery ', '', NULL, 2, 2, '2026-04-03 05:39:08', '2026-04-03 05:39:08'),
(5111, 2, 'Banner Update.', 'Banner', '14', NULL, 2, 2, '2026-04-03 05:48:32', '2026-04-03 05:48:32'),
(5112, 2, 'Banner Update.', 'Banner', '14', NULL, 2, 2, '2026-04-03 05:48:36', '2026-04-03 05:48:36'),
(5113, 2, 'Banner Update.', 'Banner', '14', NULL, 2, 2, '2026-04-03 05:48:40', '2026-04-03 05:48:40'),
(5114, 2, 'Banner Update.', 'Banner', '14', NULL, 2, 2, '2026-04-03 05:48:43', '2026-04-03 05:48:43'),
(5115, 2, 'Banner Update.', 'Banner', '14', NULL, 2, 2, '2026-04-03 05:48:48', '2026-04-03 05:48:48'),
(5116, 2, 'Banner Update.', 'Banner', '14', NULL, 2, 2, '2026-04-03 05:49:06', '2026-04-03 05:49:06'),
(5117, 2, 'Banner Update.', 'Banner', '14', NULL, 2, 2, '2026-04-03 05:49:30', '2026-04-03 05:49:30'),
(5118, 2, 'Banner Update.', 'Banner', '14', NULL, 2, 2, '2026-04-03 05:50:36', '2026-04-03 05:50:36'),
(5119, 2, 'Banner Update.', 'Banner', '14', NULL, 2, 2, '2026-04-03 05:52:08', '2026-04-03 05:52:08'),
(5120, 2, 'Banner Update.', 'Banner', '14', NULL, 2, 2, '2026-04-03 05:53:12', '2026-04-03 05:53:12'),
(5121, 2, 'Business Package Submit.', 'Business Package', '', NULL, 2, 2, '2026-04-03 06:30:37', '2026-04-03 06:30:37'),
(5122, 2, 'Business Package Submit.', 'Business Package', '', NULL, 2, 2, '2026-04-03 06:34:16', '2026-04-03 06:34:16'),
(5123, 2, 'Business package Update.', 'Business package', '', NULL, 2, 2, '2026-04-03 06:40:08', '2026-04-03 06:40:08'),
(5124, 2, 'Business package Update.', 'Business package', '', NULL, 2, 2, '2026-04-03 06:40:12', '2026-04-03 06:40:12'),
(5125, 2, 'Business package Update.', 'Business package', '', NULL, 2, 2, '2026-04-03 06:40:15', '2026-04-03 06:40:15'),
(5126, 2, 'Business package Update.', 'Business package', '', NULL, 2, 2, '2026-04-03 06:40:18', '2026-04-03 06:40:18'),
(5127, 2, 'Business package Update.', 'Business package', '', NULL, 2, 2, '2026-04-03 06:40:22', '2026-04-03 06:40:22'),
(5128, 2, 'Business package Update.', 'Business package', '', NULL, 2, 2, '2026-04-03 06:40:25', '2026-04-03 06:40:25'),
(5129, 2, 'Business package Update.', 'Business package', '', NULL, 2, 2, '2026-04-03 06:40:30', '2026-04-03 06:40:30'),
(5130, 2, 'Business Package Submit.', 'Business Package', '', NULL, 2, 2, '2026-04-03 06:44:33', '2026-04-03 06:44:33'),
(5131, 2, 'Business Service Update.', 'Business Service', '', NULL, 2, 2, '2026-04-03 06:47:51', '2026-04-03 06:47:51'),
(5132, 2, 'Blog Created', 'Blog', '11', NULL, 2, 2, '2026-04-03 06:49:48', '2026-04-03 06:49:48'),
(5133, 2, 'Blog Updated', 'Blog', '11', NULL, 2, 2, '2026-04-03 06:50:07', '2026-04-03 06:50:07'),
(5134, 2, 'Blog Updated', 'Blog', '11', NULL, 2, 2, '2026-04-03 06:50:12', '2026-04-03 06:50:12'),
(5135, 2, 'Blog Updated', 'Blog', '11', NULL, 2, 2, '2026-04-03 06:50:17', '2026-04-03 06:50:17'),
(5136, 2, 'Successful Login Attempt', 'System', '', NULL, 2, 2, '2026-04-05 05:32:06', '2026-04-05 05:32:06'),
(5137, 2, 'News submit.', 'News content', '', NULL, 2, 2, '2026-04-05 05:38:45', '2026-04-05 05:38:45'),
(5138, 2, 'News submit.', 'News content', '', NULL, 2, 2, '2026-04-05 05:39:55', '2026-04-05 05:39:55'),
(5139, 2, 'Successful Login Attempt', 'System', '', NULL, 2, 2, '2026-04-07 16:08:06', '2026-04-07 16:08:06'),
(5140, 2, 'Successful Login Attempt', 'System', '', NULL, 2, 2, '2026-04-07 19:28:54', '2026-04-07 19:28:54'),
(5141, 2, 'News Update.', 'News content', '', NULL, 2, 2, '2026-04-07 19:34:22', '2026-04-07 19:34:22'),
(5142, 2, 'News Update.', 'News content', '', NULL, 2, 2, '2026-04-07 19:34:42', '2026-04-07 19:34:42'),
(5143, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-07 20:56:16', '2026-04-07 20:56:16'),
(5144, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-07 20:56:21', '2026-04-07 20:56:21'),
(5145, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-07 21:03:52', '2026-04-07 21:03:52'),
(5146, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-07 21:04:28', '2026-04-07 21:04:28'),
(5147, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-07 21:09:15', '2026-04-07 21:09:15'),
(5148, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-07 21:10:20', '2026-04-07 21:10:20'),
(5149, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-07 21:10:24', '2026-04-07 21:10:24'),
(5150, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-07 21:10:31', '2026-04-07 21:10:31'),
(5151, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-07 21:10:37', '2026-04-07 21:10:37'),
(5152, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-07 21:10:42', '2026-04-07 21:10:42'),
(5153, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-07 21:14:55', '2026-04-07 21:14:55'),
(5154, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-07 21:14:59', '2026-04-07 21:14:59'),
(5155, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-07 21:15:04', '2026-04-07 21:15:04'),
(5156, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-07 21:15:08', '2026-04-07 21:15:08'),
(5157, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-07 21:15:12', '2026-04-07 21:15:12'),
(5158, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-07 21:15:15', '2026-04-07 21:15:15'),
(5159, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-07 21:16:11', '2026-04-07 21:16:11'),
(5160, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-07 21:16:29', '2026-04-07 21:16:29'),
(5161, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-07 21:16:33', '2026-04-07 21:16:33'),
(5162, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-07 21:16:40', '2026-04-07 21:16:40'),
(5163, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-07 21:16:44', '2026-04-07 21:16:44'),
(5164, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-07 21:17:13', '2026-04-07 21:17:13'),
(5165, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-07 21:17:17', '2026-04-07 21:17:17'),
(5166, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-07 21:17:31', '2026-04-07 21:17:31'),
(5167, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-07 21:21:55', '2026-04-07 21:21:55'),
(5168, 2, 'Business Project Submit.', 'Business Project', '', NULL, 2, 2, '2026-04-07 21:27:21', '2026-04-07 21:27:21'),
(5169, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-07 21:29:16', '2026-04-07 21:29:16'),
(5170, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-07 21:29:29', '2026-04-07 21:29:29'),
(5171, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-07 21:29:48', '2026-04-07 21:29:48'),
(5172, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-07 21:30:48', '2026-04-07 21:30:48'),
(5173, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-07 21:31:09', '2026-04-07 21:31:09'),
(5174, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-07 21:31:23', '2026-04-07 21:31:23'),
(5175, 2, 'Business Project Update.', 'Business Project', '', NULL, 2, 2, '2026-04-07 21:31:32', '2026-04-07 21:31:32'),
(5176, 2, 'Gallery Submit.', 'Gallery ', '', NULL, 2, 2, '2026-04-07 21:57:38', '2026-04-07 21:57:38'),
(5177, 2, 'Gallery Submit.', 'Gallery ', '', NULL, 2, 2, '2026-04-07 21:58:20', '2026-04-07 21:58:20'),
(5178, 2, 'Gallery Submit.', 'Gallery ', '', NULL, 2, 2, '2026-04-07 22:04:00', '2026-04-07 22:04:00'),
(5179, 2, 'Gallery Submit.', 'Gallery ', '', NULL, 2, 2, '2026-04-07 22:11:55', '2026-04-07 22:11:55'),
(5180, 2, 'Gallery Submit.', 'Gallery ', '', NULL, 2, 2, '2026-04-07 22:12:12', '2026-04-07 22:12:12'),
(5181, 2, 'Gallery Submit.', 'Gallery ', '', NULL, 2, 2, '2026-04-07 22:12:46', '2026-04-07 22:12:46'),
(5182, 2, 'Banner Update.', 'Banner', '20', NULL, 2, 2, '2026-04-07 22:17:13', '2026-04-07 22:17:13'),
(5183, 2, 'Banner Update.', 'Banner', '19', NULL, 2, 2, '2026-04-07 22:17:16', '2026-04-07 22:17:16'),
(5184, 2, 'Banner Update.', 'Banner', '16', NULL, 2, 2, '2026-04-07 22:17:18', '2026-04-07 22:17:18'),
(5185, 2, 'Banner Update.', 'Banner', '20', NULL, 2, 2, '2026-04-07 22:25:59', '2026-04-07 22:25:59');

-- --------------------------------------------------------

--
-- Table structure for table `access_permission`
--

CREATE TABLE `access_permission` (
  `id` int(10) UNSIGNED NOT NULL,
  `userRole` varchar(100) DEFAULT NULL,
  `permission` varchar(100) DEFAULT NULL,
  `accessPermissionStatus` varchar(10) DEFAULT 'ACTIVE',
  `createdBy` int(11) DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `access_permission`
--

INSERT INTO `access_permission` (`id`, `userRole`, `permission`, `accessPermissionStatus`, `createdBy`, `updatedBy`, `createdAt`, `updatedAt`) VALUES
(1, 'Admin', 'all-user', 'ACTIVE', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Admin', 'view-user', 'ACTIVE', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Admin', 'add-user', 'ACTIVE', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Admin', 'delete-user', 'ACTIVE', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Admin', 'all-news', 'ACTIVE', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Admin', 'add-user', 'ACTIVE', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Admin', 'all-notice', 'ACTIVE', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Admin', 'add-user', 'ACTIVE', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Admin', 'all-event', 'ACTIVE', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Admin', 'add-user', 'ACTIVE', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Admin', 'all-report', 'ACTIVE', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Admin', 'add-user', 'ACTIVE', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Admin', 'user-profile-view', 'ACTIVE', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(462, 'Admin', 'role-permission', 'ACTIVE', NULL, NULL, '2025-03-09 19:06:44', '2025-03-09 19:06:44'),
(463, 'Admin', 'get-all-role-permission', 'ACTIVE', NULL, NULL, '2025-03-09 19:07:47', '2025-03-09 19:07:47'),
(464, 'Admin', 'get-all-role', 'ACTIVE', NULL, NULL, '2025-03-09 19:08:04', '2025-03-09 19:08:04'),
(465, 'Admin', 'get-all-permission', 'ACTIVE', NULL, NULL, '2025-03-09 19:08:11', '2025-03-09 19:08:11'),
(466, 'Admin', 'save-permission', 'ACTIVE', NULL, NULL, '2025-03-09 19:08:19', '2025-03-09 19:08:19'),
(467, 'Admin', 'save-role', 'ACTIVE', NULL, NULL, '2025-03-09 19:08:26', '2025-03-09 19:08:26'),
(468, 'Admin', 'assign-role-permission', 'ACTIVE', NULL, NULL, '2025-03-09 19:08:32', '2025-03-09 19:08:32'),
(469, 'Admin', 'delete-role-permission', 'ACTIVE', NULL, NULL, '2025-03-09 19:08:33', '2025-03-09 19:08:33'),
(470, 'Admin', 'account', 'ACTIVE', NULL, NULL, '2025-03-09 19:17:28', '2025-03-09 19:17:28'),
(471, 'Admin', 'add-account', 'ACTIVE', NULL, NULL, '2025-03-09 19:17:33', '2025-03-09 19:17:33'),
(472, 'Admin', 'store-account', 'ACTIVE', NULL, NULL, '2025-03-09 19:17:36', '2025-03-09 19:17:36'),
(473, 'Admin', 'show-account', 'ACTIVE', NULL, NULL, '2025-03-09 19:17:40', '2025-03-09 19:17:40'),
(474, 'Admin', 'edit-account', 'ACTIVE', NULL, NULL, '2025-03-09 19:17:44', '2025-03-09 19:17:44'),
(475, 'Admin', 'update-account', 'ACTIVE', NULL, NULL, '2025-03-09 19:17:50', '2025-03-09 19:17:50'),
(476, 'Admin', 'delete-account', 'ACTIVE', NULL, NULL, '2025-03-09 19:18:01', '2025-03-09 19:18:01'),
(477, 'Admin', 'gat-all-account', 'ACTIVE', NULL, NULL, '2025-03-09 19:18:02', '2025-03-09 19:18:02'),
(478, 'Admin', 'accountadjustment', 'ACTIVE', NULL, NULL, '2025-03-09 19:18:21', '2025-03-09 19:18:21'),
(479, 'Admin', 'add-accountadjustment', 'ACTIVE', NULL, NULL, '2025-03-09 19:18:26', '2025-03-09 19:18:26'),
(480, 'Admin', 'store-accountadjustment', 'ACTIVE', NULL, NULL, '2025-03-09 19:18:30', '2025-03-09 19:18:30'),
(481, 'Admin', 'show-accountadjustment', 'ACTIVE', NULL, NULL, '2025-03-09 19:18:34', '2025-03-09 19:18:34'),
(482, 'Admin', 'edit-accountadjustment', 'ACTIVE', NULL, NULL, '2025-03-09 19:18:39', '2025-03-09 19:18:39'),
(483, 'Admin', 'update-accountadjustment', 'ACTIVE', NULL, NULL, '2025-03-09 19:18:43', '2025-03-09 19:18:43'),
(484, 'Admin', 'delete-accountadjustment', 'ACTIVE', NULL, NULL, '2025-03-09 19:18:51', '2025-03-09 19:18:51'),
(485, 'Admin', 'gat-all-accountadjustment', 'ACTIVE', NULL, NULL, '2025-03-09 19:18:52', '2025-03-09 19:18:52'),
(486, 'Admin', 'transaction', 'ACTIVE', NULL, NULL, '2025-03-09 19:19:00', '2025-03-09 19:19:00'),
(487, 'Admin', 'add-transaction', 'ACTIVE', NULL, NULL, '2025-03-09 19:19:04', '2025-03-09 19:19:04'),
(488, 'Admin', 'store-transaction', 'ACTIVE', NULL, NULL, '2025-03-09 19:19:07', '2025-03-09 19:19:07'),
(489, 'Admin', 'show-transaction', 'ACTIVE', NULL, NULL, '2025-03-09 19:19:11', '2025-03-09 19:19:11'),
(490, 'Admin', 'edit-transaction', 'ACTIVE', NULL, NULL, '2025-03-09 19:19:16', '2025-03-09 19:19:16'),
(491, 'Admin', 'update-transaction', 'ACTIVE', NULL, NULL, '2025-03-09 19:19:20', '2025-03-09 19:19:20'),
(492, 'Admin', 'delete-transaction', 'ACTIVE', NULL, NULL, '2025-03-09 19:19:25', '2025-03-09 19:19:25'),
(493, 'Admin', 'gat-all-transaction', 'ACTIVE', NULL, NULL, '2025-03-09 19:19:26', '2025-03-09 19:19:26'),
(494, 'Admin', 'expense', 'ACTIVE', NULL, NULL, '2025-03-09 19:19:38', '2025-03-09 19:19:38'),
(495, 'Admin', 'add-expense', 'ACTIVE', NULL, NULL, '2025-03-09 19:19:43', '2025-03-09 19:19:43'),
(496, 'Admin', 'store-expense', 'ACTIVE', NULL, NULL, '2025-03-09 19:19:47', '2025-03-09 19:19:47'),
(497, 'Admin', 'show-expense', 'ACTIVE', NULL, NULL, '2025-03-09 19:19:51', '2025-03-09 19:19:51'),
(498, 'Admin', 'edit-expense', 'ACTIVE', NULL, NULL, '2025-03-09 19:19:55', '2025-03-09 19:19:55'),
(499, 'Admin', 'update-expense', 'ACTIVE', NULL, NULL, '2025-03-09 19:19:59', '2025-03-09 19:19:59'),
(500, 'Admin', 'delete-expense', 'ACTIVE', NULL, NULL, '2025-03-09 19:20:03', '2025-03-09 19:20:03'),
(501, 'Admin', 'gat-all-expense', 'ACTIVE', NULL, NULL, '2025-03-09 19:20:06', '2025-03-09 19:20:06'),
(502, 'Admin', 'expensehead', 'ACTIVE', NULL, NULL, '2025-03-09 19:20:11', '2025-03-09 19:20:11'),
(503, 'Admin', 'add-expensehead', 'ACTIVE', NULL, NULL, '2025-03-09 19:20:15', '2025-03-09 19:20:15'),
(504, 'Admin', 'store-expensehead', 'ACTIVE', NULL, NULL, '2025-03-09 19:20:19', '2025-03-09 19:20:19'),
(505, 'Admin', 'show-expensehead', 'ACTIVE', NULL, NULL, '2025-03-09 19:20:24', '2025-03-09 19:20:24'),
(506, 'Admin', 'edit-expensehead', 'ACTIVE', NULL, NULL, '2025-03-09 19:20:28', '2025-03-09 19:20:28'),
(507, 'Admin', 'update-expensehead', 'ACTIVE', NULL, NULL, '2025-03-09 19:20:32', '2025-03-09 19:20:32'),
(508, 'Admin', 'delete-expensehead', 'ACTIVE', NULL, NULL, '2025-03-09 19:20:44', '2025-03-09 19:20:44'),
(509, 'Admin', 'gat-all-expensehead', 'ACTIVE', NULL, NULL, '2025-03-09 19:20:45', '2025-03-09 19:20:45'),
(510, 'Admin', 'expensesubhead', 'ACTIVE', NULL, NULL, '2025-03-09 19:20:55', '2025-03-09 19:20:55'),
(511, 'Admin', 'add-expensesubhead', 'ACTIVE', NULL, NULL, '2025-03-09 19:21:15', '2025-03-09 19:21:15'),
(512, 'Admin', 'store-expensesubhead', 'ACTIVE', NULL, NULL, '2025-03-09 19:21:20', '2025-03-09 19:21:20'),
(513, 'Admin', 'show-expensesubhead', 'ACTIVE', NULL, NULL, '2025-03-09 19:21:24', '2025-03-09 19:21:24'),
(514, 'Admin', 'edit-expensesubhead', 'ACTIVE', NULL, NULL, '2025-03-09 19:21:28', '2025-03-09 19:21:28'),
(515, 'Admin', 'update-expensesubhead', 'ACTIVE', NULL, NULL, '2025-03-09 19:21:33', '2025-03-09 19:21:33'),
(516, 'Admin', 'delete-expensesubhead', 'ACTIVE', NULL, NULL, '2025-03-09 19:21:38', '2025-03-09 19:21:38'),
(517, 'Admin', 'gat-all-expensesubhead', 'ACTIVE', NULL, NULL, '2025-03-09 19:21:39', '2025-03-09 19:21:39'),
(518, 'Admin', 'advance', 'ACTIVE', NULL, NULL, '2025-03-09 19:21:49', '2025-03-09 19:21:49'),
(519, 'Admin', 'add-advance', 'ACTIVE', NULL, NULL, '2025-03-09 19:21:53', '2025-03-09 19:21:53'),
(520, 'Admin', 'store-advance', 'ACTIVE', NULL, NULL, '2025-03-09 19:21:57', '2025-03-09 19:21:57'),
(521, 'Admin', 'show-advance', 'ACTIVE', NULL, NULL, '2025-03-09 19:22:01', '2025-03-09 19:22:01'),
(522, 'Admin', 'edit-advance', 'ACTIVE', NULL, NULL, '2025-03-09 19:22:05', '2025-03-09 19:22:05'),
(523, 'Admin', 'update-advance', 'ACTIVE', NULL, NULL, '2025-03-09 19:22:09', '2025-03-09 19:22:09'),
(524, 'Admin', 'delete-advance', 'ACTIVE', NULL, NULL, '2025-03-09 19:22:14', '2025-03-09 19:22:14'),
(525, 'Admin', 'gat-all-advance', 'ACTIVE', NULL, NULL, '2025-03-09 19:22:17', '2025-03-09 19:22:17'),
(526, 'Admin', 'program', 'ACTIVE', NULL, NULL, '2025-03-09 19:22:22', '2025-03-09 19:22:22'),
(527, 'Admin', 'add-program', 'ACTIVE', NULL, NULL, '2025-03-09 19:22:29', '2025-03-09 19:22:29'),
(528, 'Admin', 'store-program', 'ACTIVE', NULL, NULL, '2025-03-09 19:22:33', '2025-03-09 19:22:33'),
(529, 'Admin', 'show-program', 'ACTIVE', NULL, NULL, '2025-03-09 19:22:40', '2025-03-09 19:22:40'),
(530, 'Admin', 'edit-program', 'ACTIVE', NULL, NULL, '2025-03-09 19:22:45', '2025-03-09 19:22:45'),
(531, 'Admin', 'update-program', 'ACTIVE', NULL, NULL, '2025-03-09 19:22:49', '2025-03-09 19:22:49'),
(532, 'Admin', 'delete-program', 'ACTIVE', NULL, NULL, '2025-03-09 19:22:54', '2025-03-09 19:22:54'),
(533, 'Admin', 'gat-all-program', 'ACTIVE', NULL, NULL, '2025-03-09 19:23:02', '2025-03-09 19:23:02'),
(534, 'Admin', 'location', 'ACTIVE', NULL, NULL, '2025-03-09 19:23:07', '2025-03-09 19:23:07'),
(535, 'Admin', 'add-location', 'ACTIVE', NULL, NULL, '2025-03-09 19:23:11', '2025-03-09 19:23:11'),
(536, 'Admin', 'store-location', 'ACTIVE', NULL, NULL, '2025-03-09 19:23:16', '2025-03-09 19:23:16'),
(537, 'Admin', 'show-location', 'ACTIVE', NULL, NULL, '2025-03-09 19:23:20', '2025-03-09 19:23:20'),
(538, 'Admin', 'edit-location', 'ACTIVE', NULL, NULL, '2025-03-09 19:23:24', '2025-03-09 19:23:24'),
(539, 'Admin', 'update-location', 'ACTIVE', NULL, NULL, '2025-03-09 19:23:28', '2025-03-09 19:23:28'),
(540, 'Admin', 'delete-location', 'ACTIVE', NULL, NULL, '2025-03-09 19:23:33', '2025-03-09 19:23:33'),
(541, 'Admin', 'gat-all-location', 'ACTIVE', NULL, NULL, '2025-03-09 19:23:37', '2025-03-09 19:23:37'),
(542, 'Admin', 'project', 'ACTIVE', NULL, NULL, '2025-03-09 19:23:43', '2025-03-09 19:23:43'),
(543, 'Admin', 'add-project', 'ACTIVE', NULL, NULL, '2025-03-09 19:23:47', '2025-03-09 19:23:47'),
(544, 'Admin', 'store-project', 'ACTIVE', NULL, NULL, '2025-03-09 19:23:51', '2025-03-09 19:23:51'),
(545, 'Admin', 'show-project', 'ACTIVE', NULL, NULL, '2025-03-09 19:23:56', '2025-03-09 19:23:56'),
(546, 'Admin', 'edit-project', 'ACTIVE', NULL, NULL, '2025-03-09 19:24:00', '2025-03-09 19:24:00'),
(547, 'Admin', 'update-project', 'ACTIVE', NULL, NULL, '2025-03-09 19:24:05', '2025-03-09 19:24:05'),
(548, 'Admin', 'delete-project', 'ACTIVE', NULL, NULL, '2025-03-09 19:24:09', '2025-03-09 19:24:09'),
(549, 'Admin', 'gat-all-project', 'ACTIVE', NULL, NULL, '2025-03-09 19:24:17', '2025-03-09 19:24:17'),
(550, 'Admin', 'employee', 'ACTIVE', NULL, NULL, '2025-03-09 19:24:31', '2025-03-09 19:24:31'),
(551, 'Admin', 'add-employee', 'ACTIVE', NULL, NULL, '2025-03-09 19:24:35', '2025-03-09 19:24:35'),
(552, 'Admin', 'store-employee', 'ACTIVE', NULL, NULL, '2025-03-09 19:24:40', '2025-03-09 19:24:40'),
(553, 'Admin', 'show-employee', 'ACTIVE', NULL, NULL, '2025-03-09 19:24:50', '2025-03-09 19:24:50'),
(554, 'Admin', 'edit-employee', 'ACTIVE', NULL, NULL, '2025-03-09 19:24:55', '2025-03-09 19:24:55'),
(555, 'Admin', 'update-employee', 'ACTIVE', NULL, NULL, '2025-03-09 19:24:59', '2025-03-09 19:24:59'),
(556, 'Admin', 'delete-employee', 'ACTIVE', NULL, NULL, '2025-03-09 19:25:03', '2025-03-09 19:25:03'),
(557, 'Admin', 'gat-all-employee', 'ACTIVE', NULL, NULL, '2025-03-09 19:25:05', '2025-03-09 19:25:05'),
(558, 'Admin', 'all-user', 'ACTIVE', NULL, NULL, '2025-03-09 19:25:21', '2025-03-09 19:25:21'),
(559, 'Admin', 'dashboard', 'ACTIVE', NULL, NULL, '2025-03-09 19:25:47', '2025-03-09 19:25:47'),
(560, 'Accountant', 'employee', 'ACTIVE', NULL, NULL, '2025-03-09 19:30:45', '2025-03-09 19:30:45'),
(561, 'Accountant', 'add-employee', 'ACTIVE', NULL, NULL, '2025-03-09 19:30:49', '2025-03-09 19:30:49'),
(562, 'Accountant', 'store-employee', 'ACTIVE', NULL, NULL, '2025-03-09 19:30:53', '2025-03-09 19:30:53'),
(563, 'Accountant', 'show-employee', 'ACTIVE', NULL, NULL, '2025-03-09 19:30:57', '2025-03-09 19:30:57'),
(564, 'Accountant', 'edit-employee', 'ACTIVE', NULL, NULL, '2025-03-09 19:31:02', '2025-03-09 19:31:02'),
(565, 'Accountant', 'update-employee', 'ACTIVE', NULL, NULL, '2025-03-09 19:31:09', '2025-03-09 19:31:09'),
(566, 'Accountant', 'gat-all-employee', 'ACTIVE', NULL, NULL, '2025-03-09 19:31:16', '2025-03-09 19:31:16'),
(567, 'Accountant', 'expense', 'ACTIVE', NULL, NULL, '2025-03-09 19:31:30', '2025-03-09 19:31:30'),
(568, 'Accountant', 'add-expense', 'ACTIVE', NULL, NULL, '2025-03-09 19:31:34', '2025-03-09 19:31:34'),
(569, 'Accountant', 'store-expense', 'ACTIVE', NULL, NULL, '2025-03-09 19:31:38', '2025-03-09 19:31:38'),
(570, 'Accountant', 'show-expense', 'ACTIVE', NULL, NULL, '2025-03-09 19:31:42', '2025-03-09 19:31:42'),
(571, 'Accountant', 'edit-expense', 'ACTIVE', NULL, NULL, '2025-03-09 19:31:46', '2025-03-09 19:31:46'),
(572, 'Accountant', 'update-expense', 'ACTIVE', NULL, NULL, '2025-03-09 19:31:53', '2025-03-09 19:31:53'),
(573, 'Accountant', 'gat-all-expense', 'ACTIVE', NULL, NULL, '2025-03-09 19:32:09', '2025-03-09 19:32:09'),
(574, 'Admin', 'store-user', 'ACTIVE', NULL, NULL, '2025-03-10 19:25:39', '2025-03-10 19:25:39'),
(575, 'Admin', 'update-user', 'ACTIVE', NULL, NULL, '2025-03-10 19:29:35', '2025-03-10 19:29:35'),
(576, 'Admin', 'system-information', 'ACTIVE', NULL, NULL, '2025-03-13 07:40:29', '2025-03-13 07:40:29'),
(577, 'Admin', 'add-system-information', 'ACTIVE', NULL, NULL, '2025-03-13 07:40:35', '2025-03-13 07:40:35'),
(578, 'Admin', 'store-system-information', 'ACTIVE', NULL, NULL, '2025-03-13 07:40:42', '2025-03-13 07:40:42'),
(579, 'Admin', 'view-system-information', 'ACTIVE', NULL, NULL, '2025-03-13 07:40:47', '2025-03-13 07:40:47'),
(580, 'Admin', 'edit-system-information', 'ACTIVE', NULL, NULL, '2025-03-13 07:40:52', '2025-03-13 07:40:52'),
(581, 'Admin', 'update-system-information', 'ACTIVE', NULL, NULL, '2025-03-13 07:40:58', '2025-03-13 07:40:58'),
(582, 'Admin', 'delete-system-information', 'ACTIVE', NULL, NULL, '2025-03-13 07:41:04', '2025-03-13 07:41:04'),
(583, 'Admin', 'get-system-information', 'ACTIVE', NULL, NULL, '2025-03-13 07:41:17', '2025-03-13 07:41:17'),
(584, 'Admin', 'project-expense', 'ACTIVE', NULL, NULL, '2025-03-13 13:21:34', '2025-03-13 13:21:34'),
(585, 'Admin', 'project-expense-head-add', 'ACTIVE', NULL, NULL, '2025-03-13 21:41:12', '2025-03-13 21:41:12'),
(586, 'Admin', 'expensechildhead', 'ACTIVE', NULL, NULL, '2025-03-14 09:57:22', '2025-03-14 09:57:22'),
(587, 'Admin', 'add-expensechildhead', 'ACTIVE', NULL, NULL, '2025-03-14 09:57:26', '2025-03-14 09:57:26'),
(588, 'Admin', 'store-expensechildhead', 'ACTIVE', NULL, NULL, '2025-03-14 09:57:30', '2025-03-14 09:57:30'),
(589, 'Admin', 'show-expensechildhead', 'ACTIVE', NULL, NULL, '2025-03-14 09:57:36', '2025-03-14 09:57:36'),
(590, 'Admin', 'update-expensechildhead', 'ACTIVE', NULL, NULL, '2025-03-14 09:57:43', '2025-03-14 09:57:43'),
(591, 'Admin', 'get-all-expensechildhead', 'ACTIVE', NULL, NULL, '2025-03-14 09:57:55', '2025-03-14 09:57:55'),
(592, 'Admin', 'expense-report', 'ACTIVE', NULL, NULL, '2025-03-20 04:56:26', '2025-03-20 04:56:26'),
(593, 'Admin', 'generate-expense-report', 'ACTIVE', NULL, NULL, '2025-03-20 05:52:36', '2025-03-20 05:52:36'),
(594, 'Admin', 'expense-report-print', 'ACTIVE', NULL, NULL, '2025-03-20 07:53:31', '2025-03-20 07:53:31'),
(595, 'Admin', 'budget-assignment', 'ACTIVE', NULL, NULL, '2025-03-20 11:14:24', '2025-03-20 11:14:24'),
(596, 'Admin', 'project-budget', 'ACTIVE', NULL, NULL, '2025-03-20 11:14:57', '2025-03-20 11:14:57'),
(597, 'Admin', 'project-expense-head-add', 'ACTIVE', NULL, NULL, '2025-03-20 11:15:04', '2025-03-20 11:15:04'),
(598, 'Admin', 'project-expense-sub-head-add', 'ACTIVE', NULL, NULL, '2025-03-20 11:15:12', '2025-03-20 11:15:12'),
(599, 'Admin', 'project-expense-child-head-add', 'ACTIVE', NULL, NULL, '2025-03-20 11:15:13', '2025-03-20 11:15:13'),
(600, 'Admin', 'project-budget-allocation', 'ACTIVE', NULL, NULL, '2025-03-20 12:36:24', '2025-03-20 12:36:24'),
(601, 'Admin', 'project-budget-allocation-head', 'ACTIVE', NULL, NULL, '2025-03-20 12:38:34', '2025-03-20 12:38:34'),
(602, 'Admin', 'project-budget-allocation-sub-head', 'ACTIVE', NULL, NULL, '2025-03-20 12:38:42', '2025-03-20 12:38:42'),
(603, 'Admin', 'project-budget-allocation-child-head', 'ACTIVE', NULL, NULL, '2025-03-20 12:38:43', '2025-03-20 12:38:43'),
(604, 'Admin', 'project-budget-allocation-print', 'ACTIVE', NULL, NULL, '2025-03-20 12:44:04', '2025-03-20 12:44:04'),
(605, 'Admin', 'fund-distribution', 'ACTIVE', NULL, NULL, '2025-03-20 13:54:46', '2025-03-20 13:54:46'),
(606, 'Admin', 'project-fund-received', 'ACTIVE', NULL, NULL, '2025-03-21 06:35:09', '2025-03-21 06:35:09'),
(607, 'Admin', 'project-expenditure-record', 'ACTIVE', NULL, NULL, '2025-03-21 06:35:15', '2025-03-21 06:35:15'),
(608, 'Admin', 'project-cheque-management', 'ACTIVE', NULL, NULL, '2025-03-21 06:35:22', '2025-03-21 06:35:22'),
(609, 'Admin', 'project-advance', 'ACTIVE', NULL, NULL, '2025-03-21 06:35:23', '2025-03-21 06:35:23'),
(610, 'Admin', 'employee-advance', 'ACTIVE', NULL, NULL, '2025-03-22 20:30:09', '2025-03-22 20:30:09'),
(611, 'Admin', 'get-employee-advance', 'ACTIVE', NULL, NULL, '2025-03-22 21:27:24', '2025-03-22 21:27:24'),
(612, 'Admin', 'excel-export', 'ACTIVE', NULL, NULL, '2025-03-23 07:38:25', '2025-03-23 07:38:25'),
(613, 'Admin', 'add-account-funds', 'ACTIVE', NULL, NULL, '2025-04-22 11:53:33', '2025-04-22 11:53:33'),
(614, 'Admin', 'add-account-transfer', 'ACTIVE', NULL, NULL, '2025-04-22 15:05:58', '2025-04-22 15:05:58'),
(615, 'Admin', 'project-fund-allocation', 'ACTIVE', NULL, NULL, '2025-04-22 17:59:51', '2025-04-22 17:59:51'),
(616, 'Admin', 'get-all-expense-sub-head', 'ACTIVE', NULL, NULL, '2025-04-25 05:44:14', '2025-04-25 05:44:14'),
(617, 'Admin', 'donor', 'ACTIVE', NULL, NULL, '2025-05-01 05:56:05', '2025-05-01 05:56:05'),
(618, 'Admin', 'add-donor', 'ACTIVE', NULL, NULL, '2025-05-01 05:56:12', '2025-05-01 05:56:12'),
(619, 'Admin', 'store-donor', 'ACTIVE', NULL, NULL, '2025-05-01 05:56:16', '2025-05-01 05:56:16'),
(620, 'Admin', 'show-donor', 'ACTIVE', NULL, NULL, '2025-05-01 05:56:23', '2025-05-01 05:56:23'),
(621, 'Admin', 'edit-donor', 'ACTIVE', NULL, NULL, '2025-05-01 05:56:33', '2025-05-01 05:56:33'),
(622, 'Admin', 'update-donor', 'ACTIVE', NULL, NULL, '2025-05-01 05:56:38', '2025-05-01 05:56:38'),
(623, 'Admin', 'delete-donor', 'ACTIVE', NULL, NULL, '2025-05-01 05:56:46', '2025-05-01 05:56:46'),
(624, 'Admin', 'get-all-donors', 'ACTIVE', NULL, NULL, '2025-05-01 05:57:02', '2025-05-01 05:57:02'),
(625, 'Admin', 'loan', 'ACTIVE', NULL, NULL, '2025-05-01 06:02:12', '2025-05-01 06:02:12'),
(626, 'Admin', 'add-loan', 'ACTIVE', NULL, NULL, '2025-05-01 06:02:15', '2025-05-01 06:02:15'),
(627, 'Admin', 'store-loan', 'ACTIVE', NULL, NULL, '2025-05-01 06:02:19', '2025-05-01 06:02:19'),
(628, 'Admin', 'show-loan', 'ACTIVE', NULL, NULL, '2025-05-01 06:02:23', '2025-05-01 06:02:23'),
(629, 'Admin', 'edit-loan', 'ACTIVE', NULL, NULL, '2025-05-01 06:02:27', '2025-05-01 06:02:27'),
(630, 'Admin', 'update-loan', 'ACTIVE', NULL, NULL, '2025-05-01 06:02:32', '2025-05-01 06:02:32'),
(631, 'Admin', 'delete-loan', 'ACTIVE', NULL, NULL, '2025-05-01 06:02:38', '2025-05-01 06:02:38'),
(632, 'Admin', 'get-all-loans', 'ACTIVE', NULL, NULL, '2025-05-01 06:02:48', '2025-05-01 06:02:48'),
(633, 'Admin', 'authorization', 'ACTIVE', NULL, NULL, '2025-05-01 06:12:58', '2025-05-01 06:12:58'),
(634, 'Admin', 'add-authorization', 'ACTIVE', NULL, NULL, '2025-05-01 06:13:02', '2025-05-01 06:13:02'),
(635, 'Admin', 'store-authorization', 'ACTIVE', NULL, NULL, '2025-05-01 06:13:05', '2025-05-01 06:13:05'),
(636, 'Admin', 'show-authorization', 'ACTIVE', NULL, NULL, '2025-05-01 06:13:10', '2025-05-01 06:13:10'),
(637, 'Admin', 'edit-authorization', 'ACTIVE', NULL, NULL, '2025-05-01 06:13:15', '2025-05-01 06:13:15'),
(638, 'Admin', 'update-authorization', 'ACTIVE', NULL, NULL, '2025-05-01 06:13:21', '2025-05-01 06:13:21'),
(639, 'Admin', 'delete-authorization', 'ACTIVE', NULL, NULL, '2025-05-01 06:13:27', '2025-05-01 06:13:27'),
(640, 'Admin', 'get-all-authorization', 'ACTIVE', NULL, NULL, '2025-05-01 06:13:40', '2025-05-01 06:13:40'),
(641, 'Admin', 'petty-cash', 'ACTIVE', NULL, NULL, '2025-05-03 19:40:21', '2025-05-03 19:40:21'),
(642, 'Admin', 'add-petty-cash', 'ACTIVE', NULL, NULL, '2025-05-03 19:40:24', '2025-05-03 19:40:24'),
(643, 'Admin', 'store-petty-cash', 'ACTIVE', NULL, NULL, '2025-05-03 19:40:30', '2025-05-03 19:40:30'),
(644, 'Admin', 'show-petty-cash', 'ACTIVE', NULL, NULL, '2025-05-03 19:40:35', '2025-05-03 19:40:35'),
(645, 'Admin', 'edit-petty-cash', 'ACTIVE', NULL, NULL, '2025-05-03 19:40:40', '2025-05-03 19:40:40'),
(646, 'Admin', 'update-petty-cash', 'ACTIVE', NULL, NULL, '2025-05-03 19:40:46', '2025-05-03 19:40:46'),
(647, 'Admin', 'delete-petty-cash', 'ACTIVE', NULL, NULL, '2025-05-03 19:40:52', '2025-05-03 19:40:52'),
(648, 'Admin', 'get-all-petty-cash', 'ACTIVE', NULL, NULL, '2025-05-03 19:41:02', '2025-05-03 19:41:02'),
(649, 'Admin', 'project-loan', 'ACTIVE', NULL, NULL, '2025-05-06 19:53:03', '2025-05-06 19:53:03'),
(650, 'Admin', 'project-petty-cash', 'ACTIVE', NULL, NULL, '2025-05-06 19:53:04', '2025-05-06 19:53:04'),
(651, 'Admin\r\n', 'petty-cash-deposit', 'ACTIVE', NULL, NULL, '2025-05-16 11:24:06', '2025-05-16 11:24:06'),
(652, 'Admin', 'get-loan-amount', 'ACTIVE', NULL, NULL, '2025-05-17 12:49:15', '2025-05-17 12:49:15'),
(653, 'Admin', 'loan-adjuestment', 'ACTIVE', NULL, NULL, '2025-05-17 18:48:51', '2025-05-17 18:48:51'),
(661, 'Admin', 'salaryadvance', 'ACTIVE', NULL, NULL, '2025-05-27 15:46:39', '2025-05-27 15:46:39'),
(662, 'Admin', 'add-salaryadvance', 'ACTIVE', NULL, NULL, '2025-05-27 15:46:43', '2025-05-27 15:46:43'),
(663, 'Admin', 'store-salaryadvance', 'ACTIVE', NULL, NULL, '2025-05-27 15:46:48', '2025-05-27 15:46:48'),
(664, 'Admin', 'show-salaryadvance', 'ACTIVE', NULL, NULL, '2025-05-27 15:46:55', '2025-05-27 15:46:55'),
(665, 'Admin', 'edit-salaryadvance', 'ACTIVE', NULL, NULL, '2025-05-27 15:47:01', '2025-05-27 15:47:01'),
(666, 'Admin', 'update-salaryadvance', 'ACTIVE', NULL, NULL, '2025-05-27 15:47:08', '2025-05-27 15:47:08'),
(667, 'Admin', 'delete-salaryadvance', 'ACTIVE', NULL, NULL, '2025-05-27 15:47:13', '2025-05-27 15:47:13'),
(668, 'Admin', 'get-all-salaryadvance', 'ACTIVE', NULL, NULL, '2025-05-27 15:47:23', '2025-05-27 15:47:23'),
(669, 'Admin', 'branch', 'ACTIVE', NULL, NULL, '2025-05-27 18:40:27', '2025-05-27 18:40:27'),
(670, 'Admin', 'add-branch', 'ACTIVE', NULL, NULL, '2025-05-27 18:40:30', '2025-05-27 18:40:30'),
(671, 'Admin', 'store-branch', 'ACTIVE', NULL, NULL, '2025-05-27 18:40:38', '2025-05-27 18:40:38'),
(672, 'Admin', 'show-branch', 'ACTIVE', NULL, NULL, '2025-05-27 18:40:52', '2025-05-27 18:40:52'),
(673, 'Admin', 'edit-branch', 'ACTIVE', NULL, NULL, '2025-05-27 18:40:57', '2025-05-27 18:40:57'),
(674, 'Admin', 'update-branch', 'ACTIVE', NULL, NULL, '2025-05-27 18:41:04', '2025-05-27 18:41:04'),
(675, 'Admin', 'delete-branch', 'ACTIVE', NULL, NULL, '2025-05-27 18:41:09', '2025-05-27 18:41:09'),
(676, 'Admin', 'get-all-branch', 'ACTIVE', NULL, NULL, '2025-05-27 18:41:14', '2025-05-27 18:41:14'),
(677, 'Admin', 'loaninstallment', 'ACTIVE', NULL, NULL, '2025-05-27 18:41:22', '2025-05-27 18:41:22'),
(678, 'Admin', 'add-loaninstallment', 'ACTIVE', NULL, NULL, '2025-05-27 18:41:25', '2025-05-27 18:41:25'),
(679, 'Admin', 'store-loaninstallment', 'ACTIVE', NULL, NULL, '2025-05-27 18:41:32', '2025-05-27 18:41:32'),
(680, 'Admin', 'show-loaninstallment', 'ACTIVE', NULL, NULL, '2025-05-27 18:41:37', '2025-05-27 18:41:37'),
(681, 'Admin', 'edit-loaninstallment', 'ACTIVE', NULL, NULL, '2025-05-27 18:41:45', '2025-05-27 18:41:45'),
(682, 'Admin', 'update-loaninstallment', 'ACTIVE', NULL, NULL, '2025-05-27 18:41:51', '2025-05-27 18:41:51'),
(683, 'Admin', 'delete-loaninstallment', 'ACTIVE', NULL, NULL, '2025-05-27 18:41:55', '2025-05-27 18:41:55'),
(684, 'Admin', 'get-all-loaninstallment', 'ACTIVE', NULL, NULL, '2025-05-27 18:42:01', '2025-05-27 18:42:01'),
(685, 'Admin', 'salarytable', 'ACTIVE', NULL, NULL, '2025-05-27 18:48:32', '2025-05-27 18:48:32'),
(686, 'Admin', 'add-salarytable', 'ACTIVE', NULL, NULL, '2025-05-27 18:48:35', '2025-05-27 18:48:35'),
(687, 'Admin', 'store-salarytable', 'ACTIVE', NULL, NULL, '2025-05-27 18:48:39', '2025-05-27 18:48:39'),
(688, 'Admin', 'show-salarytable', 'ACTIVE', NULL, NULL, '2025-05-27 18:48:45', '2025-05-27 18:48:45'),
(689, 'Admin', 'edit-salarytable', 'ACTIVE', NULL, NULL, '2025-05-27 18:48:50', '2025-05-27 18:48:50'),
(690, 'Admin', 'update-salarytable', 'ACTIVE', NULL, NULL, '2025-05-27 18:48:54', '2025-05-27 18:48:54'),
(691, 'Admin', 'delete-salarytable', 'ACTIVE', NULL, NULL, '2025-05-27 18:48:58', '2025-05-27 18:48:58'),
(692, 'Admin', 'get-all-salarytable', 'ACTIVE', NULL, NULL, '2025-05-27 18:49:03', '2025-05-27 18:49:03'),
(693, 'Admin', 'project-salary-sheet', 'ACTIVE', NULL, NULL, '2025-05-28 17:33:46', '2025-05-28 17:33:46'),
(694, 'Admin', 'project-employee-check', 'ACTIVE', NULL, NULL, '2025-05-28 19:06:17', '2025-05-28 19:06:17'),
(695, 'Admin', 'documenttype', 'ACTIVE', NULL, NULL, '2025-05-29 09:02:41', '2025-05-29 09:02:41'),
(696, 'Admin', 'add-documenttype', 'ACTIVE', NULL, NULL, '2025-05-29 09:02:44', '2025-05-29 09:02:44'),
(697, 'Admin', 'store-documenttype', 'ACTIVE', NULL, NULL, '2025-05-29 09:02:51', '2025-05-29 09:02:51'),
(698, 'Admin', 'show-documenttype', 'ACTIVE', NULL, NULL, '2025-05-29 09:02:58', '2025-05-29 09:02:58'),
(699, 'Admin', 'edit-documenttype', 'ACTIVE', NULL, NULL, '2025-05-29 09:03:03', '2025-05-29 09:03:03'),
(700, 'Admin', 'delete-documenttype', 'ACTIVE', NULL, NULL, '2025-05-29 09:03:08', '2025-05-29 09:03:08'),
(701, 'Admin', 'get-all-documenttype', 'ACTIVE', NULL, NULL, '2025-05-29 09:03:14', '2025-05-29 09:03:14'),
(702, 'Admin', 'referancedocuments', 'ACTIVE', NULL, NULL, '2025-05-29 09:23:48', '2025-05-29 09:23:48'),
(703, 'Admin', 'add-referancedocuments', 'ACTIVE', NULL, NULL, '2025-05-29 09:23:54', '2025-05-29 09:23:54'),
(704, 'Admin', 'store-referancedocuments', 'ACTIVE', NULL, NULL, '2025-05-29 09:24:00', '2025-05-29 09:24:00'),
(705, 'Admin', 'show-referancedocuments', 'ACTIVE', NULL, NULL, '2025-05-29 09:24:06', '2025-05-29 09:24:06'),
(706, 'Admin', 'edit-referancedocuments', 'ACTIVE', NULL, NULL, '2025-05-29 09:24:13', '2025-05-29 09:24:13'),
(707, 'Admin', 'update-referancedocuments', 'ACTIVE', NULL, NULL, '2025-05-29 09:24:23', '2025-05-29 09:24:23'),
(708, 'Admin', 'delete-referancedocuments', 'ACTIVE', NULL, NULL, '2025-05-29 09:24:29', '2025-05-29 09:24:29'),
(709, 'Admin', 'get-all-referancedocuments', 'ACTIVE', NULL, NULL, '2025-05-29 09:24:37', '2025-05-29 09:24:37'),
(710, 'Admin', 'store-salarysheet', 'ACTIVE', NULL, NULL, '2025-05-29 10:22:30', '2025-05-29 10:22:30'),
(711, 'Admin', 'project-salary-check', 'ACTIVE', NULL, NULL, '2025-05-29 16:31:17', '2025-05-29 16:31:17'),
(712, 'Admin', 'salary-sheet', 'ACTIVE', NULL, NULL, '2025-05-29 17:12:25', '2025-05-29 17:12:25'),
(713, 'Admin', 'salarysheet-detail', 'ACTIVE', NULL, NULL, '2025-05-29 17:54:13', '2025-05-29 17:54:13'),
(714, 'Admin', 'salarysheet-approval', 'ACTIVE', NULL, NULL, '2025-05-29 18:39:28', '2025-05-29 18:39:28'),
(715, 'Admin', 'existing-loan-check', 'ACTIVE', NULL, NULL, '2025-05-29 19:22:51', '2025-05-29 19:22:51'),
(716, 'Admin', 'donor-projects', 'ACTIVE', NULL, NULL, '2025-06-15 08:46:20', '2025-06-15 08:46:20'),
(717, 'Admin', 'project-salary-head-setup', 'ACTIVE', NULL, NULL, '2025-06-15 10:13:42', '2025-06-15 10:13:42'),
(718, 'Admin', 'show-employee-profile', 'ACTIVE', NULL, NULL, '2025-06-24 09:13:27', '2025-06-24 09:13:27'),
(719, 'Admin', 'salarysheet-print', 'ACTIVE', NULL, NULL, '2025-06-24 17:44:13', '2025-06-24 17:44:13'),
(721, 'Admin', 'project-fund-balance', 'ACTIVE', NULL, NULL, '2025-06-27 20:19:06', '2025-06-27 20:19:06'),
(722, 'Admin', 'user-profile', 'ACTIVE', NULL, NULL, '2025-08-10 20:21:01', '2025-08-10 20:21:01'),
(723, 'Admin', 'change-password', 'ACTIVE', NULL, NULL, '2025-08-10 20:24:18', '2025-08-10 20:24:18'),
(724, 'Admin', 'update-password', 'ACTIVE', NULL, NULL, '2025-08-10 20:24:19', '2025-08-10 20:24:19'),
(725, 'Admin', 'user-signature-update', 'ACTIVE', NULL, NULL, '2025-08-10 21:14:29', '2025-08-10 21:14:29'),
(726, 'Admin', 'project-salary-setup', 'ACTIVE', NULL, NULL, '2025-08-26 20:06:24', '2025-08-26 20:06:24'),
(727, 'Admin', 'project-salary-setup-save', 'ACTIVE', NULL, NULL, '2025-08-26 20:38:27', '2025-08-26 20:38:27');

-- --------------------------------------------------------

--
-- Table structure for table `access_register`
--

CREATE TABLE `access_register` (
  `id` int(11) NOT NULL,
  `entityCategory` varchar(50) DEFAULT NULL,
  `titleNote` varchar(255) DEFAULT NULL,
  `entityId` int(11) DEFAULT NULL,
  `visitorIP` varchar(15) DEFAULT NULL,
  `createdAt` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `access_register`
--

INSERT INTO `access_register` (`id`, `entityCategory`, `titleNote`, `entityId`, `visitorIP`, `createdAt`) VALUES
(262, 'News', 'Kanzen Karate stars get fighting fit at Abertay ahead of world championships in Mexico', 217, NULL, '2024-08-29 00:17:17'),
(263, 'News', 'Kanzen Karate stars get fighting fit at Abertay ahead of world championships in Mexico', 217, NULL, '2024-08-29 00:19:51'),
(264, 'News', 'Abertay University sustainability project recognised at major national awards ceremony', 216, NULL, '2024-08-29 11:42:04'),
(265, 'News', 'Abertay University sustainability project recognised at major national awards ceremony', 216, NULL, '2024-08-30 17:36:16'),
(266, 'News', 'Abertay University sustainability project recognised at major national awards ceremony', 216, NULL, '2024-08-30 17:39:35'),
(267, 'News', 'Abertay University sustainability project recognised at major national awards ceremony', 216, NULL, '2024-08-30 17:39:40'),
(268, 'News', 'Abertay University sustainability project recognised at major national awards ceremony', 216, NULL, '2024-08-30 17:39:52'),
(269, 'News', 'Abertay University sustainability project recognised at major national awards ceremony', 216, NULL, '2024-08-30 17:42:33'),
(270, 'News', 'Abertay University sustainability project recognised at major national awards ceremony', 216, NULL, '2024-08-30 17:43:17'),
(271, 'News', 'Abertay University sustainability project recognised at major national awards ceremony', 216, NULL, '2024-08-30 17:43:39'),
(272, 'News', 'Abertay University sustainability project recognised at major national awards ceremony', 216, NULL, '2024-08-30 17:43:43'),
(273, 'News', 'Abertay University sustainability project recognised at major national awards ceremony', 216, NULL, '2024-08-30 17:43:56'),
(274, 'News', 'Abertay University sustainability project recognised at major national awards ceremony', 216, NULL, '2024-08-30 17:54:20'),
(275, 'News', 'Abertay University sustainability project recognised at major national awards ceremony', 216, NULL, '2024-08-30 17:54:37'),
(276, 'News', 'Abertay University sustainability project recognised at major national awards ceremony', 216, NULL, '2024-08-30 17:55:43'),
(277, 'News', 'Abertay University sustainability project recognised at major national awards ceremony', 216, NULL, '2024-08-30 17:56:00'),
(278, 'News', 'Abertay University sustainability project recognised at major national awards ceremony', 216, NULL, '2024-08-30 17:56:55'),
(279, 'News', 'Abertay University sustainability project recognised at major national awards ceremony', 216, NULL, '2024-08-30 17:57:36'),
(280, 'News', 'Abertay University sustainability project recognised at major national awards ceremony', 216, NULL, '2024-08-30 17:58:43'),
(281, 'News', 'Abertay University sustainability project recognised at major national awards ceremony', 216, NULL, '2024-08-30 17:59:37'),
(282, 'News', 'Abertay University sustainability project recognised at major national awards ceremony', 216, NULL, '2024-08-30 18:00:24'),
(283, 'News', 'Abertay University sustainability project recognised at major national awards ceremony', 216, NULL, '2024-08-30 18:00:49'),
(284, 'News', 'Abertay University sustainability project recognised at major national awards ceremony', 216, NULL, '2024-08-30 18:01:50'),
(285, 'News', 'Kanzen Karate stars get fighting fit at Abertay ahead of world championships in Mexico', 217, NULL, '2024-09-01 17:14:12'),
(286, 'News', 'Kanzen Karate stars get fighting fit at Abertay ahead of world championships in Mexico', 217, NULL, '2024-09-01 17:15:18'),
(287, 'News', 'Kanzen Karate stars get fighting fit at Abertay ahead of world championships in Mexico', 217, NULL, '2024-09-01 20:50:23'),
(288, 'News', 'Kanzen Karate stars get fighting fit at Abertay ahead of world championships in Mexico', 217, NULL, '2024-09-02 00:30:37'),
(289, 'News', '5G drones project aims to transform mountain search and rescue', 215, NULL, '2024-09-02 00:31:56'),
(290, 'News', 'Kanzen Karate stars get fighting fit at Abertay ahead of world championships in Mexico', 217, NULL, '2024-09-02 00:34:53'),
(291, 'News', 'Kanzen Karate stars get fighting fit at Abertay ahead of world championships in Mexico', 217, NULL, '2024-09-02 00:35:05'),
(292, 'News', '5G drones project aims to transform mountain search and rescue', 215, NULL, '2024-09-02 00:41:33'),
(293, 'News', 'EduInnTech University creative arts courses receive industry accreditation from The Rookies', 214, NULL, '2024-09-02 00:41:40'),
(294, 'News', 'Kanzen Karate stars get fighting fit at Abertay ahead of world championships in Mexico', 217, NULL, '2024-09-02 01:31:21'),
(295, 'Notice', 'Workshop on National ICT Act 2020', 42, NULL, '2024-09-02 01:31:23'),
(296, 'Upcoming Activity', 'Showcasing the University at the National Eisteddfod', 218, NULL, '2024-09-02 01:31:26'),
(297, 'Research Activity', 'Kanzen Karate stars get fighting fit at Abertay ahead of world championships in Mexico', 217, NULL, '2024-09-02 01:31:29'),
(298, 'Campus Activities', 'EduInnTech University creative arts courses receive industry accreditation from The Rookies', 214, NULL, '2024-09-02 01:31:32');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `short_note` varchar(500) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `cover_image` varchar(255) DEFAULT 'uploads/blog-cover/dummy_blog-cover.jpg',
  `author` varchar(255) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `view_counts` int(11) DEFAULT NULL,
  `download_counts` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `title`, `short_note`, `slug`, `content`, `cover_image`, `author`, `publish_date`, `view_counts`, `download_counts`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 1, 'The Future of Artificial Intelligence', 'Artificial Intelligence', 'the-future-of-artificial-intelligence', '<p>The Future of Artifi<strong>cial Intelligence asd as</strong>df asdf as asf</p><p><br></p><p>asdfasd fasdf asdf asdf</p><p><br></p><p>asd fasd fasdf asdf as</p><p><br></p><p>asd fasdf asdf asdfa sd</p>', 'uploads/blog-cover/2_1758913531_blog-cover.png', 'John Doe', '2025-09-03', 127, NULL, 'Published', '2025-09-02 17:59:56', '2025-09-27 05:12:10', NULL, NULL),
(2, 1, 'Top 10 Web Development Trends in 2025', 'Development Trends in 2025', 'top-10-web-development-trends-in-2025', '<p>From AI-powered coding assistants to edge computing, here are the top web development trends to watch in 2025...From AI-powered coding assistants to edge computing, here are the top web development trends to watch in 2025...From AI-powered coding assistants to edge computing, here are the top web development trends to watch in 2025...From AI-powered coding assistants to edge computing, here are the top web development trends to watch in 2025...From AI-powered coding assistants to edge computing, here are the top web development trends to watch in 2025...From AI-powered coding assistants to edge computing, here are the top web development trends to watch in 2025...From AI-powered coding assistants to edge computing, here are the top web development trends to watch in 2025...</p>', 'uploads/blog-cover/2_1758830470_blog-cover.jpg', 'Jane Smith', '2025-09-03', 268, NULL, 'Published', '2025-09-02 17:59:56', '2025-09-27 04:39:27', NULL, NULL),
(9, 1, 'ডিজিটাল নিরাপত্তায় সিসিটিভি ক্যামেরা', 'ডিজিটাল নিরাপত্তায় সিসিটিভি ক্যামেরা', 'dijital-nirapttay-sisitivi-kzamera', '<p>ডিজিটাল নিরাপত্তায় সিসিটিভি ক্যামেরা</p>', 'uploads/blog-cover/2_1761329527_blog-cover.jpg', 'Admin', '2025-10-25', 67, NULL, 'Published', '2025-10-25 04:12:07', '2025-10-25 04:13:39', NULL, NULL),
(10, 4, 'বাংলাদেশের জাতীয় নির্বাচনে AI-এর প্রভাব', 'বাংলাদেশের জাতীয় নির্বাচনে AI-এর প্রভাব', 'bangladeser-jateey-nirwacne-ai-er-prvab', '<p>বাংলাদেশের জাতীয় নির্বাচনে AI-এর প্রভাব </p>', 'uploads/blog-cover/2_1765779845_blog-cover.png', 'Saidur Rahman', NULL, 2, 0, 'Published', '2025-12-15 17:24:05', '2025-12-15 17:41:00', 2, 2),
(11, 11, 'dsfgas df sdf asdfasdf', 'asdf asdf', 'dsfgas-df-sdf-asdfasdf', '<p> asdf asdf asdfasdfsdf dfgsdfgsdfg sdfg sdfgsdg</p>', 'uploads/blog-cover/2_1775199017_blog-cover.png', 'asdfasdf', NULL, 0, 0, 'Published', '2026-04-03 06:49:48', '2026-04-03 06:50:17', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Technology', 'technology', NULL, '2025-09-02 17:59:34', '2025-09-02 17:59:34', NULL, NULL),
(4, 'Education', 'education', NULL, '2025-09-02 17:59:34', '2025-09-02 17:59:34', NULL, NULL),
(11, 'Innovation', 'innovation', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_contents`
--

CREATE TABLE `blog_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` longtext NOT NULL,
  `topic_cover_image` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT 0,
  `publish_date` date DEFAULT NULL,
  `content_status` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_contents`
--

INSERT INTO `blog_contents` (`id`, `blog_id`, `title`, `content`, `topic_cover_image`, `order`, `publish_date`, `content_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Introduction', 'Asia is full of breathtaking destinations, from beaches to mountains. In this article, we explore the top 7 travel spots you must visit in 2025.', NULL, 1, NULL, 'Active', '2025-09-03 16:40:56', '2025-09-03 16:40:56'),
(2, 1, 'Bali, Indonesia', 'Known for its stunning beaches, rice terraces, and vibrant culture, Bali is a must-visit spot for travelers seeking both adventure and relaxation.', 'bali.jpg', 2, NULL, 'Active', '2025-09-03 16:40:56', '2025-09-03 16:40:56'),
(14, 9, 'df asdf asdf asd', '<p>sdasfsd fasdf asdf asdf asdf asdf asdfa sdfa sdfasd fas fasdfsdasfsd fasdf asdf asdf asdf asdf asdfa sdfa sdfasd fas fasdsdasfsd fasdf asdf asdf asdf asdf asdfa sdfa sdfasd fas fasdsdasfsd fasdf asdf asdf asdf asdf asdfa sdfa sdfasd fas fasdsdasfsd fasdf asdf asdf asdf asdf asdfa sdfa sdfasd fas fasdsdasfsd fasdf asdf asdf asdf asdf asdfa sdfa sdfasd fas fasdsdasfsd fasdf asdf asdf asdf asdf asdfa sdfa sdfasd fas fasdsdasfsd fasdf asdf asdf asdf asdf asdfa sdfa sdfasd fas fasdsdasfsd fasdf asdf asdf asdf asdf asdfa sdfa sdfasd fas fasd</p>', 'uploads/topic-cover/2_1761330811_topic-cover.jpg', 0, '2025-10-25', 'ACTIVE', '2025-10-25 04:33:31', '2025-10-25 06:09:28');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(11) NOT NULL,
  `branch_name` varchar(100) DEFAULT NULL,
  `branch_address` varchar(100) DEFAULT NULL,
  `branch_status` varchar(20) DEFAULT NULL,
  `entityObjectOrder` int(11) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `business_advertisements`
--

CREATE TABLE `business_advertisements` (
  `id` int(11) NOT NULL,
  `ad_title` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `cover_photo` varchar(255) DEFAULT NULL,
  `reference_link` varchar(500) DEFAULT NULL,
  `ad_category` varchar(20) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `business_advertisements`
--

INSERT INTO `business_advertisements` (`id`, `ad_title`, `slug`, `cover_photo`, `reference_link`, `ad_category`, `status`, `created_by`, `created_at`) VALUES
(1, 'ECommerce Platform', 'ecommerce-platform', 'uploads/ad-cover/2_1758256641_ad-cover.jpg', NULL, 'Banner', 'ACTIVE', NULL, NULL),
(9, 'asdf asdfasd', 'asdf-asdfasd', 'uploads/ad-cover/2_1775189249_ad-cover.png', NULL, 'Banner', NULL, 2, NULL),
(10, 'rrrrrrrrrrrrrrrrrrrr', 'rrrrrrrrrrrrrrrrrrrr', 'uploads/ad-cover/2_1775189276_ad-cover.png', NULL, 'Banner', NULL, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `business_clients`
--

CREATE TABLE `business_clients` (
  `id` int(11) NOT NULL,
  `client_name` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `company_logo` varchar(255) DEFAULT NULL,
  `reference_link` varchar(500) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `business_clients`
--

INSERT INTO `business_clients` (`id`, `client_name`, `slug`, `address`, `company_logo`, `reference_link`, `status`, `created_by`, `created_at`) VALUES
(1, 'SUAD', 'champion-academy', 'Dhaka,Bangladesh', 'website/assets/img/clients/logo (1).png', NULL, 'ACTIVE', NULL, NULL),
(2, 'SIMPLE FUNDATATION', 'devlink-foundation', 'Dhaka,Bangladesh', 'website/assets/img/clients/logo (3).png', NULL, 'ACTIVE', NULL, NULL),
(3, 'SK PROPERTIES', 'aid-bd-org', 'Dhaka,Bangladesh', 'website/assets/img/clients/logo (2).png', NULL, 'ACTIVE', NULL, NULL),
(8, 'SARA', 'shostic-arc-studio', 'Dhaka,Bangladesh', 'website/assets/img/clients/logo (4).png', NULL, 'ACTIVE', NULL, NULL),
(9, 'PDS', 'shostic-arc-studio', 'Dhaka,Bangladesh', 'website/assets/img/clients/logo (5).png', NULL, 'ACTIVE', NULL, NULL),
(10, 'OTOBI', 'OTOBI', 'Dhaka,Bangladesh', 'website/assets/img/clients/logo (6).png', NULL, 'ACTIVE', NULL, NULL),
(11, 'ONE DESIGNER', 'ONE DESIGNER', 'Dhaka,Bangladesh', 'website/assets/img/clients/logo (7).png', NULL, 'ACTIVE', NULL, NULL),
(12, 'POETICGEM', 'POETICGEM', 'Dhaka,Bangladesh', 'website/assets/img/clients/logo (8).png', NULL, 'ACTIVE', NULL, NULL),
(13, 'GCL', 'GCL', 'Dhaka,Bangladesh', 'website/assets/img/clients/logo (9).png', NULL, 'ACTIVE', NULL, NULL),
(14, 'DAB', 'GCL', 'Dhaka,Bangladesh', 'website/assets/img/clients/logo (10).png', NULL, 'ACTIVE', NULL, NULL),
(15, 'DESGIN CHAMBER', 'GCL', 'Dhaka,Bangladesh', 'website/assets/img/clients/logo (11).png', NULL, 'ACTIVE', NULL, NULL),
(16, 'ONE DESIGNER', 'ONE DESIGNER', 'Dhaka,Bangladesh', 'website/assets/img/clients/logo (12).png', NULL, 'ACTIVE', NULL, NULL),
(17, 'SIMPLE FUNDATATION', 'SIMPLE FUNDATATION', 'Dhaka,Bangladesh', 'website/assets/img/clients/logo (13).png', NULL, 'ACTIVE', NULL, NULL),
(19, 'asdfas', 'asdfas', '<p>dfasdfsadf</p>', 'uploads/client-logo/2_1775189358_client-logo.png', NULL, 'Published', NULL, NULL),
(20, 'ddddd', 'ddddd', '<p>asdfsadf</p>', 'uploads/client-logo/2_1775189816_client-logo.png', NULL, 'Published', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `business_packages`
--

CREATE TABLE `business_packages` (
  `id` int(11) NOT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `size` varchar(100) DEFAULT NULL,
  `package_type` varchar(100) DEFAULT NULL,
  `cover_photo` varchar(255) DEFAULT NULL,
  `reference_link` varchar(500) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `business_packages`
--

INSERT INTO `business_packages` (`id`, `slug`, `title`, `description`, `duration`, `price`, `size`, `package_type`, `cover_photo`, `reference_link`, `status`, `created_by`, `created_at`) VALUES
(14, 'asdfas-fas', 'asdfas fas', '<p>df asdfasdf asdfasdf</p>', 'asdf3wr', 'werwerwe', NULL, NULL, 'uploads/pacakge-cover/2_1775197837_pacakge-cover.png', NULL, 'Published', NULL, '2026-04-03 06:30:37'),
(15, 'asdfasdf-sdfg-sdfgdfg', 'asdfasdf sdfg sdfgdfg', '<p>asdfasdfasdf dsf asdf asdfasdf</p>', 'asdfasdf44444444', 'asdfasdffgdsdfgsdfg', 'fffffffffffff', NULL, 'uploads/package-cover/2_1775198430_package-cover.png', NULL, 'INACTIVE', NULL, '2026-04-03 06:34:16'),
(16, 'essential', 'Essential', '<p><span style=\"background-color: rgb(255, 255, 255); color: rgb(108, 117, 125);\">as dfasdf asd fgfsrdfdgfs gsdfg asdfg adsg sdfg sdfg sdfg sdfg sdfg sdfg sdf gsdf</span></p>', '2 Month', 'Price : 500000', 'Size : 1500/Sft', NULL, 'uploads/pacakge-cover/2_1775198673_pacakge-cover.png', NULL, 'Published', NULL, '2026-04-03 06:44:33');

-- --------------------------------------------------------

--
-- Table structure for table `business_products`
--

CREATE TABLE `business_products` (
  `id` int(11) NOT NULL,
  `product_title` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `short_note` varchar(500) DEFAULT NULL,
  `product_defination` varchar(500) DEFAULT NULL,
  `cover_photo` varchar(255) DEFAULT NULL,
  `reference_link` varchar(500) DEFAULT NULL,
  `product_category` int(11) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `business_products`
--

INSERT INTO `business_products` (`id`, `product_title`, `slug`, `short_note`, `product_defination`, `cover_photo`, `reference_link`, `product_category`, `status`, `created_by`, `created_at`) VALUES
(1, 'ECommerce Platform', 'ecommerce-platform', NULL, NULL, 'uploads/product-cover/2_1758258792_product-cover.jpg', NULL, NULL, 'ACTIVE', NULL, NULL),
(2, 'Job Portal Platform', 'job-portal-platform', NULL, NULL, 'uploads/product-cover/2_1758258856_product-cover.jpg', NULL, NULL, 'ACTIVE', NULL, NULL),
(3, 'Point of Sale (POS)', 'point-of-sale-pos', NULL, NULL, 'uploads/product-cover/2_1758258922_product-cover.jpg', NULL, NULL, 'ACTIVE', NULL, NULL),
(4, 'Accounting Software', 'accounting-software', NULL, NULL, 'uploads/product-cover/2_1758258655_product-cover.jpg', NULL, NULL, 'ACTIVE', NULL, NULL),
(5, 'School Management Software', 'school-management-software', NULL, NULL, 'uploads/product-cover/2_1757443024_product-cover.jpg', NULL, NULL, NULL, NULL, NULL),
(6, 'Banngladesh', 'banngladesh', NULL, '<p> asdf asdfa sdfasasdfas df asdf asdf dasf asdf asdfaBanngladesh sdfa sdfasdfa </p>', 'uploads/product-cover/2_1757443024_product-cover.jpg', NULL, NULL, NULL, 2, NULL),
(7, 'ddddddddddddd', 'ddddddddddddd', NULL, '<p>dddasdfasdf</p>', 'uploads/product-cover/2_1775189403_product-cover.png', NULL, NULL, NULL, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `business_product_entity`
--

CREATE TABLE `business_product_entity` (
  `id` int(11) NOT NULL,
  `product_title` varchar(100) DEFAULT NULL,
  `product_description` varchar(1000) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `reference_link` varchar(500) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `business_product_entity`
--

INSERT INTO `business_product_entity` (`id`, `product_title`, `product_description`, `product_id`, `reference_link`, `status`) VALUES
(1, 'Software Developement', NULL, 2, NULL, NULL),
(2, 'Software Developement', NULL, 2, NULL, NULL),
(3, 'Digital Marketing', NULL, 2, NULL, NULL),
(4, 'Creative Learnign', NULL, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `business_projects`
--

CREATE TABLE `business_projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(200) NOT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `project_description` longtext DEFAULT NULL,
  `project_type` varchar(50) DEFAULT NULL,
  `project_category` varchar(100) DEFAULT NULL,
  `project_photo` varchar(255) DEFAULT NULL,
  `service_category` varchar(60) DEFAULT NULL,
  `project_visibility` varchar(50) DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_name` varchar(150) DEFAULT NULL,
  `contact_person` varchar(120) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `site_address` text DEFAULT NULL,
  `city` varchar(80) DEFAULT NULL,
  `area` varchar(80) DEFAULT NULL,
  `postcode` varchar(20) DEFAULT NULL,
  `latitude` decimal(10,7) DEFAULT NULL,
  `longitude` decimal(10,7) DEFAULT NULL,
  `project_status` varchar(50) DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_projects`
--

INSERT INTO `business_projects` (`id`, `category_id`, `name`, `slug`, `project_description`, `project_type`, `project_category`, `project_photo`, `service_category`, `project_visibility`, `client_id`, `client_name`, `contact_person`, `phone`, `email`, `site_address`, `city`, `area`, `postcode`, `latitude`, `longitude`, `project_status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 'Greem House', NULL, NULL, 'Interior', 'Kitchen', 'website/assets/img/projects/interior/Architectural (3).png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ACTIVE', NULL, NULL, '2026-03-01 04:52:06', '2026-03-01 08:19:04', NULL),
(2, 3, 'Chowdhury House', 'chowdhury-house', NULL, 'Interior', 'Residence', 'website/assets/img/projects/interior/Architectural (8).png', NULL, 'Hidden', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Completed', 2, NULL, '2026-03-01 04:52:56', '2026-04-07 21:21:55', NULL),
(3, 3, 'Neel Diganta', NULL, NULL, 'Interior', 'Kitchen', 'website/assets/img/projects/interior/Architectural (11).png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ACTIVE', NULL, NULL, '2026-03-01 04:53:10', '2026-03-01 08:18:57', NULL),
(4, 3, 'Swapno Bari', NULL, NULL, 'Interior', 'Kitchen', 'website/assets/img/projects/interior/Architectural (14).png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ACTIVE', NULL, NULL, '2026-03-01 04:53:22', '2026-03-01 08:18:54', NULL),
(5, 2, 'Ace Enterprises', NULL, NULL, 'Interior', 'Office', 'website/assets/img/projects/interior/Interior-(1).png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ACTIVE', NULL, NULL, '2026-03-01 04:55:11', '2026-03-01 08:18:47', NULL),
(6, 2, 'Alpha Enterprises', NULL, NULL, 'Interior', 'Office', 'website/assets/img/projects/interior/Interior-(2).png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ACTIVE', NULL, NULL, '2026-03-01 04:55:55', '2026-03-01 08:18:43', NULL),
(7, 2, 'Zeron Group of Company', NULL, NULL, 'Interior', 'Office', 'website/assets/img/projects/interior/Interior-(3).png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ACTIVE', NULL, NULL, '2026-03-01 04:56:09', '2026-03-01 08:18:39', NULL),
(8, 2, 'Brilliance Group', '', NULL, 'Interior', 'Office', 'website/assets/img/projects/interior/Interior-(4).png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ACTIVE', NULL, NULL, '2026-03-01 04:56:16', '2026-04-03 03:49:38', NULL),
(9, 2, 'Byte Solutions', NULL, NULL, 'Interior', 'Office', 'website/assets/img/projects/interior/Interior-(5).png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ACTIVE', NULL, NULL, '2026-03-01 04:56:22', '2026-03-01 08:18:34', NULL),
(10, 2, 'Beacon Holdings\r\n', NULL, NULL, 'Interior', 'Office', 'website/assets/img/projects/interior/Interior-(6).png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ACTIVE', NULL, NULL, '2026-03-01 04:56:27', '2026-03-01 08:18:31', NULL),
(11, 2, 'Caliber Enterprises', NULL, NULL, 'Interior', 'Office', 'website/assets/img/projects/interior/Interior-(7).png', NULL, NULL, NULL, 'Mr. Rahim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ACTIVE', NULL, NULL, '2026-03-01 04:56:32', '2026-03-01 08:18:28', NULL),
(12, 2, 'Driven Solutions', NULL, NULL, 'Interior', 'Office', 'website/assets/img/projects/interior/Interior-(8).png', NULL, NULL, NULL, 'Fahim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ACTIVE', NULL, NULL, '2026-03-01 04:56:37', '2026-03-01 08:18:25', NULL),
(13, 2, 'Focus Group', NULL, NULL, 'Interior', 'Office', 'website/assets/img/projects/interior/Interior-(9).png', NULL, NULL, NULL, 'Sahin Khan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ACTIVE', NULL, NULL, '2026-03-01 04:56:43', '2026-03-01 08:18:23', NULL),
(14, 2, 'Future Horizons\r\n', NULL, NULL, 'Interior', 'Office', 'website/assets/img/projects/interior/Interior-(10).png', NULL, NULL, NULL, 'sahjahan khan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ACTIVE', NULL, NULL, '2026-03-01 04:56:48', '2026-03-01 08:18:21', NULL),
(15, 2, 'Fresh Start Holdings\r\n', NULL, NULL, 'Interior', 'Office', 'website/assets/img/projects/interior/Interior-(11).png', NULL, NULL, NULL, 'Fariha khanum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ACTIVE', NULL, NULL, '2026-03-01 04:56:54', '2026-03-01 08:18:18', NULL),
(16, 2, 'Growth Solutions\r\n', NULL, NULL, 'Interior', 'Office', 'website/assets/img/projects/interior/Interior-(12).png', NULL, NULL, NULL, 'sahjahan khan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ACTIVE', NULL, NULL, '2026-03-01 04:56:59', '2026-03-01 08:18:16', NULL),
(17, 2, 'Guardian Ventures\r\n', NULL, NULL, 'Interior', 'Office', 'website/assets/img/projects/interior/Interior-(13).png', NULL, NULL, NULL, 'sahjahan khan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ACTIVE', NULL, NULL, '2026-03-01 04:59:39', '2026-03-01 08:18:13', NULL),
(18, 1, 'Halo Technologies\r\n', NULL, NULL, 'Interior', 'Residence', 'website/assets/img/projects/interior/resident (1).png', NULL, NULL, NULL, 'sahjahan khan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ACTIVE', NULL, NULL, '2026-03-01 04:59:46', '2026-03-01 08:18:01', NULL),
(19, 1, 'Paradigm Holdings', NULL, NULL, 'Interior', 'Residence', '\nwebsite/assets/img/projects/interior/resident (3).png', NULL, NULL, NULL, 'Riya Khanum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ACTIVE', NULL, NULL, '2026-03-01 04:59:52', '2026-03-01 08:18:04', NULL),
(20, 1, 'Quantum Solutions\r\n', NULL, NULL, 'Interior', 'Residence', 'website/assets/img/projects/interior/resident (4).png', NULL, NULL, NULL, 'Sarif', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ACTIVE', NULL, NULL, '2026-03-01 05:00:12', '2026-03-01 08:18:06', NULL),
(21, 0, 'Rally Ventures', NULL, NULL, 'Interior', 'Residence', 'website/assets/img/projects/interior/resident (5).png', NULL, NULL, NULL, 'sahjahan khan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ACTIVE', NULL, NULL, '2026-03-01 05:00:18', '2026-03-01 07:38:22', NULL),
(22, 0, 'Sapphire Ventures\r\n', NULL, NULL, 'Interior', 'Residence', 'website/assets/img/projects/interior/resident (6).png', NULL, NULL, NULL, 'Riya Khanum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ACTIVE', NULL, NULL, '2026-03-01 05:00:23', '2026-03-01 07:38:22', NULL),
(23, 0, 'Titan Innovations\r\n', NULL, NULL, 'Interior', 'Residence', 'website/assets/img/projects/interior/resident (7).png', NULL, NULL, NULL, 'sahjahan khan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ACTIVE', NULL, NULL, '2026-03-01 05:00:28', '2026-03-01 07:38:22', NULL),
(24, 0, 'Umbra Innovations\r\n', NULL, NULL, 'Interior', 'Residence', 'website/assets/img/projects/interior/resident (8).png', NULL, NULL, NULL, 'Rakib kha', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ACTIVE', NULL, NULL, '2026-03-01 05:00:40', '2026-03-01 07:38:22', NULL),
(25, 0, 'Unity Holdings\r\n', '', '<p> dsfgasdf asdf asdf dsf dsafgdfgsdfg</p>', 'Interior', 'Residence', 'website/assets/img/projects/interior/resident (9).png', NULL, NULL, NULL, 'Tasrif Ahmed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ACTIVE', NULL, NULL, '2026-03-01 05:00:46', '2026-04-03 03:48:40', NULL),
(26, 0, 'Vanguard Enterprises\r\n', NULL, NULL, 'Interior', 'Residence', 'website/assets/img/projects/interior/resident (10).png', NULL, NULL, NULL, 'Saddam Hussain', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ACTIVE', NULL, NULL, '2026-03-01 05:00:51', '2026-03-01 07:38:22', NULL),
(27, 0, 'Win Enterprises\r\n', NULL, NULL, 'Interior', 'Residence', 'website/assets/img/projects/interior/resident-(2).png', NULL, 'Published', NULL, 'Rahat Khan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Published', NULL, NULL, '2026-03-01 05:03:34', '2026-04-07 21:43:21', NULL),
(28, 0, 'Windfall Enterprises', 'windfall-enterprises', NULL, 'Exterior', NULL, 'website/assets/img/projects/exterior/exterior (4).png', NULL, NULL, NULL, 'MR.Korim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running', 2, NULL, '2026-03-01 05:03:44', '2026-04-07 21:31:32', NULL),
(29, 0, 'Worldview Enterprises asd fasdf', 'worldview-enterprises-asd-fasdf', '<p> sdfg sdfgsdfg sdfg sd asdf asdf asdf</p>', 'Consultancy', 'Office', 'uploads/project-cover/2_1775596651_project-cover.png', NULL, 'Hidden', NULL, 'Rakib kha', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running', 2, NULL, '2026-03-01 05:03:50', '2026-04-07 21:17:31', NULL),
(30, 0, 'Xpert Innovations', 'xpert-innovations', NULL, 'Exterior', NULL, 'website/assets/img/projects/exterior/exterior-(33).jpg', NULL, NULL, NULL, 'Saddam Hussain', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running', 2, NULL, '2026-03-01 05:03:56', '2026-04-07 21:31:23', NULL),
(31, 0, 'Xperience Holdings', 'xperience-holdings', NULL, 'Exterior', 'Kitchen', 'website/assets/img/projects/exterior/exterior-(34).jpg', NULL, NULL, NULL, 'Riya Khanum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Completed', 2, NULL, '2026-03-01 05:04:02', '2026-04-07 21:31:09', NULL),
(32, 0, 'Exterior', 'exterior', '<p>sda sdf asdf asdf asd dgsdfg sd sdsa dasdfasdf asdf asdf asdf asdf asdf asdffgsdfasdf asdf asdf asdf asdfg</p>', 'Consultancy', 'Residence', 'uploads/project-cover/2_1775188510_project-cover.png', NULL, 'Published', NULL, 'MR.Korim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running', 2, NULL, '2026-03-01 05:06:04', '2026-04-07 21:39:55', NULL),
(33, NULL, 'sadfasd', 'sadfasd', '<p>fasdfasdfasdf</p>', 'Consultancy', 'Office', 'uploads/project-cover/2_1775597241_project-cover.png', NULL, 'Published', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Completed', 2, NULL, '2026-04-07 21:27:21', '2026-04-07 21:29:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `business_services`
--

CREATE TABLE `business_services` (
  `id` int(11) NOT NULL,
  `service_title` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `short_note` varchar(500) DEFAULT NULL,
  `service_defination` varchar(500) DEFAULT NULL,
  `cover_photo` varchar(255) DEFAULT NULL,
  `reference_link` varchar(500) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `business_services`
--

INSERT INTO `business_services` (`id`, `service_title`, `slug`, `short_note`, `service_defination`, `cover_photo`, `reference_link`, `status`, `created_by`, `created_at`) VALUES
(1, 'Interior Design & Execution', 'Interior Design & Execution', '', 'End-to-end bespoke interior solutions, seamlessly blending design excellence with flawless execution.', NULL, NULL, 'ACTIVE', NULL, '2025-09-09 18:13:51'),
(2, 'Residential Interior\r\n', 'Residential Interior\r\n', 'We deliver professional website development services designed to align with and advance your business objectives.', 'Thoughtfully curated living spaces that reflect elegance, comfort, and your personal lifestyle.', NULL, NULL, 'ACTIVE', NULL, '2025-09-09 18:13:51'),
(3, 'Duplex Interior', 'digital-marketing', NULL, 'Luxurious duplex interiors designed with harmony, flow, and refined spatial aesthetics.', 'uploads/service-cover/2_1757442030_service-cover.jpg', NULL, 'ACTIVE', NULL, '2025-09-09 18:13:51'),
(4, 'Commercial Space Interior', 'Commercial Space Interior', NULL, 'Elegant commercial interiors that enhance brand identity and elevate customer experience.', NULL, NULL, 'ACTIVE', NULL, '2025-09-09 18:13:51'),
(5, 'Office Space Interior\r\n', 'Office Space Interior\r\n', 'We deliver ICT consultancy services tailored to facilitate and enhance your automation initiatives.', 'Professionally crafted office environments that inspire productivity and sophistication.', 'uploads/service-cover/2_1757441999_service-cover.jpg', NULL, 'ACTIVE', 2, '2025-09-09 18:15:49'),
(6, 'Restaurant Interior', 'Restaurant Interior', NULL, 'Distinctive dining spaces designed to create memorable ambiance and visual impact.', NULL, NULL, 'ACTIVE', NULL, '2026-03-01 06:19:06'),
(7, 'Renovation Work\r\n', 'Renovation Work\r\n', NULL, 'Transforming existing spaces with refined design upgrades and modern functionality', NULL, NULL, 'ACTIVE', NULL, '2026-03-01 06:19:30'),
(8, 'Architectural Consultancy', 'Architectural Consultancy', NULL, 'Expert architectural guidance ensuring timeless design, precision, and structural clarity.', NULL, NULL, 'ACTIVE', NULL, '2026-03-01 06:20:03'),
(9, 'Custom Furniture Design\r\n', 'Custom Furniture Design\r\n', NULL, 'Handcrafted furniture pieces tailored to complement your space with elegance.', NULL, NULL, 'ACTIVE', NULL, '2026-03-01 06:20:25'),
(10, 'Exterior & Landscaping', 'exterior-landscaping', NULL, '<p>Graceful exterior and landscape designs that enhance architectural presence.</p>', 'uploads/service-cover/2_1775198871_service-cover.png', NULL, 'ACTIVE', NULL, '2026-03-01 06:20:47'),
(11, 'Building Design\r\n', 'Building Design\r\n', NULL, 'Innovative building designs that balance aesthetics, functionality, and longevity.', NULL, NULL, 'ACTIVE', NULL, '2026-03-01 06:21:06'),
(12, 'Exterior Treatment\r\n', 'Exterior Treatment\r\n', NULL, 'Premium façade treatments that elevate the visual identity of your property.', NULL, NULL, 'ACTIVE', NULL, '2026-03-01 06:21:25'),
(13, 'asdf asdf asdf asdf', 'asdf-asdf-asdf-asdf', NULL, '<p>sdf asdf asdf asdf asdf</p>', 'uploads/service-cover/2_1775188992_service-cover.png', NULL, 'Published', 2, '2026-04-03 04:02:57');

-- --------------------------------------------------------

--
-- Table structure for table `business_service_entity`
--

CREATE TABLE `business_service_entity` (
  `id` int(11) NOT NULL,
  `entity_title` varchar(100) DEFAULT NULL,
  `entity_defination` varchar(500) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `reference_link` varchar(500) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `business_service_entity`
--

INSERT INTO `business_service_entity` (`id`, `entity_title`, `entity_defination`, `service_id`, `reference_link`, `status`) VALUES
(1, 'Software Developement', NULL, 2, NULL, NULL),
(2, 'Software Developement', NULL, 2, NULL, NULL),
(3, 'Digital Marketing', NULL, 2, NULL, NULL),
(4, 'Creative Learnign', NULL, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `consultation_form`
--

CREATE TABLE `consultation_form` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `location` varchar(150) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `type` varchar(150) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `query_status` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `consultation_form`
--

INSERT INTO `consultation_form` (`id`, `name`, `phone`, `location`, `size`, `type`, `message`, `query_status`, `created_at`, `updated_at`) VALUES
(1, 'Saidur Rahman', '01717560539', 'Dhaka', '3', 'Interior Design', 'safd fasdfasdf', NULL, '2026-02-27 10:53:35', '2026-02-27 10:53:35'),
(2, 'Saidur Rahman', '01717560539', 'Dhaka', '3', 'Architectural Consultancy', 'asdf asdf asdf asdf', NULL, '2026-02-27 10:55:26', '2026-02-27 10:55:26');

-- --------------------------------------------------------

--
-- Table structure for table `documenttype`
--

CREATE TABLE `documenttype` (
  `id` int(11) NOT NULL,
  `type_name` varchar(100) DEFAULT NULL,
  `type_category` varchar(100) DEFAULT NULL,
  `documenttype_status` varchar(20) DEFAULT NULL,
  `entityObjectOrder` int(11) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `employee_name` varchar(100) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `education_qualification` varchar(255) DEFAULT NULL,
  `contact_no` varchar(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `date_of_join` date DEFAULT NULL,
  `branch_name` varchar(100) DEFAULT NULL,
  `monthly_salary` double DEFAULT NULL,
  `photograph` varchar(255) DEFAULT 'uploads/dummy/person.jpg',
  `employee_status` varchar(20) DEFAULT NULL,
  `entityObjectOrder` int(11) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `project_id`, `employee_name`, `designation`, `education_qualification`, `contact_no`, `email`, `date_of_join`, `branch_name`, `monthly_salary`, `photograph`, `employee_status`, `entityObjectOrder`, `createdAt`, `createdBy`, `updatedAt`, `updatedBy`) VALUES
(13, NULL, 'Zakaria Jony', 'Founder and CEO', 'MA in Interior, B.Arch, IDEB: 69580,  IDAB: P-250205', NULL, NULL, NULL, NULL, NULL, 'uploads/dummy/person.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, 'Antor Kumar Roy', 'Interior Architect', 'Diploma in Civil, Bachelor of Architecture', NULL, NULL, NULL, NULL, NULL, 'uploads/dummy/person.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, 'Md. Shakil', 'Lead visualizer', ' B.Sc. in Civil', NULL, NULL, NULL, NULL, NULL, 'uploads/dummy/person.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, 'Abu Sakib Tanim', 'Project Manager\n', 'Bachelor of Architecture', NULL, NULL, NULL, NULL, NULL, 'uploads/dummy/person.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, 'Mrs. Fatima', 'Draft Man', 'Diploma in Architect, B.Sc. in Civil', NULL, NULL, NULL, NULL, NULL, 'uploads/dummy/person.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(18, NULL, 'Rakib Hossain', 'Site Engineer', 'Diploma in Architect', NULL, NULL, NULL, NULL, NULL, 'uploads/dummy/person.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(19, NULL, 'Saidur Rahman', 'IT Expart', ' B.Sc. in Computer Science', NULL, NULL, NULL, NULL, NULL, 'uploads/dummy/person.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(20, NULL, 'Md. Asad', 'Accounts', 'BBA, MBA (Major in Accounting) ', NULL, NULL, NULL, NULL, NULL, 'uploads/dummy/person.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(21, NULL, 'Mizanur Rahman', 'Marketing Executive', 'Masters in Marketing', NULL, NULL, NULL, NULL, NULL, 'uploads/dummy/person.jpg', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `gallery_image` varchar(255) DEFAULT NULL,
  `reference_link` varchar(500) DEFAULT NULL,
  `item_category` varchar(20) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `slug`, `gallery_image`, `reference_link`, `item_category`, `status`, `created_by`, `created_at`) VALUES
(15, 'Gallery One', '', 'uploads/gallery-item/2_1775599057_gallery-item.jpg', 'gsdfg', 'first', 'Published', NULL, NULL),
(16, 'Second', 'second', 'uploads/gallery-item/2_1775599100_gallery-item.jpg', 'asdfasdfsadfas dfasdf asdf', 'second', 'Published', NULL, NULL),
(17, 'Thirdasdf asdf asdf', '', 'uploads/gallery-item/2_1775599440_gallery-item.png', 'asdfasdfsadfas dfasdf asdf', 'third', 'Published', NULL, NULL),
(18, 'sDfasdfa', '', 'uploads/gallery-item/2_1775599915_gallery-item.jpg', 'sdf', 'fourth', 'Published', NULL, NULL),
(19, 'as    dddd ddddeeee eee', 'as-dddd-ddddeeee-eee', 'uploads/gallery-item/2_1775599932_gallery-item.png', 'asdfasdfsadfas dfasdf asdf', 'fifth', 'Published', NULL, NULL),
(20, 'fggdfgrte ert er ert ertert ert asdf asdf asdf', 'fggdfgrte-ert-er-ert-ertert-ert-asdf-asdf-asdf', 'uploads/gallery-item/2_1775599966_gallery-item.jpg', 'ert ertert asdf asdf asdf', 'sixth', 'Published', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `info_key_note`
--

CREATE TABLE `info_key_note` (
  `id` int(11) NOT NULL,
  `infoKeyword` varchar(200) DEFAULT NULL,
  `infoKeyValue` varchar(1000) DEFAULT NULL,
  `infoKeyStatus` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info_key_note`
--

INSERT INTO `info_key_note` (`id`, `infoKeyword`, `infoKeyValue`, `infoKeyStatus`) VALUES
(4, 'campus_address', 'Purbachal American City, Kanchan, Rupganj, Narayanganj-1461, Dhaka, Bangladesh', 'ACTIVE'),
(5, 'site_promo_video', 'https://www.youtube.com/embed/qm4ZjwRCfb4', 'ACTIVE'),
(6, 'total_current-students', '7000', 'ACTIVE'),
(7, 'total_active-facutly_members', '200', 'ACTIVE'),
(8, 'total_graduates', '8000', 'ACTIVE'),
(9, 'total_research_papers', '600', 'ACTIVE'),
(10, 'journal_papers', '250', 'ACTIVE'),
(11, 'conference_papers', '350', 'ACTIVE'),
(12, 'annual_research_budget', '2.7', 'ACTIVE'),
(13, 'Social Media Link', 'https://www.facebook.com/EduInnTech', 'ACTIVE'),
(14, 'youtube_channel_links', 'https://www.youtube.com/user/greenuniversitybd', 'ACTIVE'),
(15, 'twitter_links', 'https://twitter.com/i/flow/login?redirect_after_login=%2Fgreenvarsity', 'ACTIVE'),
(16, 'linkedin_links', 'https://www.linkedin.com/school/greenuniversity/', 'ACTIVE'),
(17, 'instagram_links', 'https://www.instagram.com/greenuniversitybd/', 'ACTIVE'),
(18, 'pinterest_links', 'https://www.pinterest.com/greenuniversitybd/', 'ACTIVE'),
(19, 'Mission', 'EduInnTech Smart University\'s mission is to promote the public welfare by exercising an influence in behalf of humanity and civilization, teaching the blessings of liberty regulated by law, and inculcating love and reverence for the great principles of government as derived from the inalienable rights of man to life, liberty, and the pursuit of happiness', 'ACTIVE'),
(20, 'Vision', 'To be at the forefront of creating knowledge and fostering innovation, Stanford University aims to prepare future leaders who will make a meaningful impact on the world, promoting the values of freedom, responsibility, and justice.', 'ACTIVE'),
(21, 'Welcome Message', 'We are delighted to welcome you to another exciting academic year at EduInnTech Smart University. As we embark on this journey together, we are reminded of the unique opportunities and challenges that lie ahead. Whether you are a new member of our community or a returning one, we are thrilled to have you with us.', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `invoice_name` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `invoice_status` varchar(20) DEFAULT NULL,
  `entityObjectOrder` int(11) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `invoice_name`, `date`, `invoice_status`, `entityObjectOrder`, `createdAt`, `createdBy`, `updatedAt`, `updatedBy`) VALUES
(4, 'Payment', 'asdfasdfasdf', 'ACTIVE', NULL, NULL, 2, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `location` varchar(100) DEFAULT NULL,
  `location_details` varchar(100) DEFAULT NULL,
  `location_status` varchar(20) DEFAULT NULL,
  `entityObjectOrder` int(11) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `location`, `location_details`, `location_status`, `entityObjectOrder`, `createdAt`, `createdBy`, `updatedAt`, `updatedBy`) VALUES
(4, 'Mymensingh', 'Mymensingh', 'ACTIVE', NULL, NULL, 2, NULL, NULL),
(5, 'Chapainawabganj', 'Chapainawabganj', 'ACTIVE', NULL, NULL, 2, NULL, NULL),
(6, 'Dhaka', 'Dhaka', 'ACTIVE', NULL, NULL, 2, NULL, NULL),
(7, 'Satkhira', 'Satkhira', 'ACTIVE', NULL, NULL, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_08_03_091033_create_access_logs_table', 1),
(5, '2023_08_04_150558_create_system_key_table_table', 1),
(6, '2023_08_07_112921_create_site_people', 1),
(7, '2023_08_07_122136_create_faculty_table', 1),
(8, '2023_08_07_123038_create_department_table', 1),
(9, '2023_08_07_124728_create_news_table', 1),
(10, '2023_08_07_141127_create_notice_table', 1),
(11, '2023_08_07_142250_create_event_table', 1),
(12, '2023_08_07_143501_create_news_content_table', 1),
(13, '2023_08_07_143729_create_notice_content_table', 1),
(14, '2023_08_07_143925_create_event_content_table', 1),
(15, '2023_08_09_094712_create_access_permission_table', 1),
(16, '2023_08_21_095204_create_target_audience_table', 1),
(17, '2023_09_07_145056_create_slider_banner_table', 1),
(18, '2023_09_07_145127_create_message_table', 1),
(19, '2023_09_07_145153_create_campus_life_table', 1),
(20, '2023_09_07_145246_create_upcoming_events_table', 1),
(21, '2023_09_07_145314_create_research_grants_table', 1),
(22, '2023_09_07_145333_create_info_note_table', 1),
(23, '2023_09_07_145353_create_promo_video_table', 1),
(24, '2023_09_11_115243_create_alumni_table', 1),
(25, '2023_09_11_144016_create_roles_table', 1),
(26, '2023_09_11_144105_create_permission_table', 1),
(27, '2023_09_13_130851_create_office_table', 1),
(28, '2023_09_13_131402_create_admin_staff_table', 1),
(29, '2023_09_18_125848_create_facutly_members_table', 2),
(30, '2023_09_18_132155_create_faculty_members_table', 3),
(31, '2023_09_19_150546_create_important_links_table', 3),
(32, '2023_09_19_151021_create_profile_links_table', 3),
(33, '2023_09_20_102649_create_management_committee_table', 3),
(34, '2023_09_20_102855_create_committee_member_table', 3),
(35, '2023_10_17_110424_create_office_information_table', 4),
(36, '2023_10_18_162126_create_faculty_research_table', 5),
(37, '2023_10_18_162135_create_faculty_others_table', 5),
(38, '2023_10_18_162142_create_peoples_other_info_table', 5),
(39, '2023_10_18_162150_create_faculty_awards_table', 5),
(40, '2023_10_18_162158_create_faculty_publication_table', 5),
(41, '2023_10_18_162204_create_faculty_exprience_table', 5),
(42, '2023_10_19_092513_create_faculty_educations_table', 6),
(43, '2023_10_19_085817_create_people_others_inforation_table', 7),
(44, '2023_10_21_141313_create_documents_table', 7),
(45, '0001_01_01_000001_create_cache_table', 8),
(46, '2024_11_03_235449_create_course_table', 9),
(47, '2024_12_11_111447_create_prospective_students_table', 10),
(48, '2025_09_02_235510_create_blog_categories_table', 11),
(49, '2025_09_02_235720_create_blogs_table', 12),
(50, '2025_09_06_021550_create_website_pages_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `package_title` varchar(255) DEFAULT NULL,
  `slug` varchar(300) DEFAULT NULL,
  `package_type` varchar(100) DEFAULT NULL,
  `package_size` varchar(100) DEFAULT NULL,
  `package_description` varchar(1000) DEFAULT NULL,
  `package_price` int(11) DEFAULT NULL,
  `development_duration` varchar(100) DEFAULT NULL,
  `package_status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `package_title`, `slug`, `package_type`, `package_size`, `package_description`, `package_price`, `development_duration`, `package_status`) VALUES
(1, 'Essential', 'essential', 'Essential', '1000/sft', 'as dfasdf asd fgfsrdfdgfs gsdfg asdfg adsg sdfg sdfg sdfg sdfg sdfg sdfg sdf gsdf', 500000, '2 Month', 'ACTIVE'),
(2, 'Extended Living', 'extended_living', 'Extended Living', '1500/Sft', 'as dfasdf asd fgfsrdfdgfs gsdfg asdfg adsg sdfg sdfg sdfg sdfg sdfg sdfg sdf gsdf', 1000000, '3 Month', 'ACTIVE'),
(3, 'Luxury ', 'luxury ', 'Luxury ', '1800/Sft', 'as dfasdf asd fgfsrdfdgfs gsdfg asdfg adsg sdfg sdfg sdfg sdfg sdfg sdfg sdf gsdf', 1500000, '5 Month', 'ACTIVE'),
(4, 'Ultra Luxury', 'ultra_luxury', 'Ultra Luxury', '2200/Sft', 'asdfasdfasdfasdf asfsd asd gfadsf asdf asdf asdf asdf asdfa sd aewsdf asdf ads', 2000000, '6 Month', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `partnership_brands`
--

CREATE TABLE `partnership_brands` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `company_logo` varchar(255) DEFAULT NULL,
  `reference_link` varchar(500) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partnership_brands`
--

INSERT INTO `partnership_brands` (`id`, `name`, `slug`, `address`, `company_logo`, `reference_link`, `status`, `created_by`, `created_at`) VALUES
(1, 'SUAD', 'champion-academy', 'Dhaka,Bangladesh', 'website/assets/img/brand_logo/brand (1).png', NULL, 'ACTIVE', NULL, NULL),
(2, 'SIMPLE FUNDATATION', 'devlink-foundation', 'Dhaka,Bangladesh', 'website/assets/img/brand_logo/brand (2).png', NULL, 'ACTIVE', NULL, NULL),
(3, 'SK PROPERTIES', 'aid-bd-org', 'Dhaka,Bangladesh', 'website/assets/img/brand_logo/brand (3).png', NULL, 'ACTIVE', NULL, NULL),
(4, 'SARA', 'shostic-arc-studio', 'Dhaka,Bangladesh', 'website/assets/img/brand_logo/brand (4).png', NULL, 'ACTIVE', NULL, NULL),
(5, 'PDS', 'shostic-arc-studio', 'Dhaka,Bangladesh', 'website/assets/img/brand_logo/brand (5).png', NULL, 'ACTIVE', NULL, NULL),
(6, 'OTOBI', 'OTOBI', 'Dhaka,Bangladesh', 'website/assets/img/brand_logo/brand (6).png', NULL, 'ACTIVE', NULL, NULL),
(7, 'ONE DESIGNER', 'ONE DESIGNER', 'Dhaka,Bangladesh', 'website/assets/img/brand_logo/brand (7).png', NULL, 'ACTIVE', NULL, NULL),
(8, 'POETICGEM', 'POETICGEM', 'Dhaka,Bangladesh', 'website/assets/img/brand_logo/brand (8).png', NULL, 'ACTIVE', NULL, NULL),
(9, 'GCL', 'GCL', 'Dhaka,Bangladesh', 'website/assets/img/brand_logo/brand (9).png', NULL, 'ACTIVE', NULL, NULL),
(10, 'DAB', 'GCL', 'Dhaka,Bangladesh', 'website/assets/img/brand_logo/brand (10).png', NULL, 'ACTIVE', NULL, NULL),
(11, 'DESGIN CHAMBER', 'GCL', 'Dhaka,Bangladesh', 'website/assets/img/brand_logo/brand (11).png', NULL, 'ACTIVE', NULL, NULL),
(12, 'ONE DESIGNER', 'POETICGEM', 'Dhaka,Bangladesh', 'website/assets/img/brand_logo/brand (12).png', NULL, 'ACTIVE', NULL, NULL),
(13, 'SIMPLE FUNDATATION', 'SIMPLE FUNDATATION', 'Dhaka,Bangladesh', 'website/assets/img/brand_logo/brand (13).png', NULL, 'ACTIVE', NULL, NULL),
(14, 'DAB', 'POETICGEM', 'Dhaka,Bangladesh', 'website/assets/img/brand_logo/brand (14).png', NULL, 'ACTIVE', NULL, NULL),
(20, 'asdfasdfasdf sdfgsdfg sdfgsdfg', 'asdfasdfasdf-sdfgsdfg-sdfgsdfg', '<p>asdfa sd fasdf sadf</p>', 'uploads/client-logo/2_1775191229_client-logo.png', NULL, 'Published', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullName` varchar(50) DEFAULT NULL,
  `peopleCategory` varchar(20) DEFAULT NULL,
  `photo` varchar(100) DEFAULT 'uploads/images/persons/dummy-person-photo.png',
  `email` varchar(100) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `contactNo` varchar(11) DEFAULT NULL,
  `shortJobDescription` varchar(1000) DEFAULT NULL,
  `faculty_id` int(10) UNSIGNED DEFAULT NULL,
  `facultyName` varchar(100) DEFAULT NULL,
  `department_id` int(10) UNSIGNED DEFAULT NULL,
  `slugTitle` varchar(255) DEFAULT NULL,
  `departmentName` varchar(100) DEFAULT NULL,
  `passingYear` varchar(4) DEFAULT NULL,
  `office_id` int(11) DEFAULT NULL,
  `officeName` varchar(100) DEFAULT NULL,
  `committeeName` varchar(100) DEFAULT NULL,
  `committee_id` int(11) DEFAULT NULL,
  `profileLink` varchar(255) DEFAULT NULL,
  `joinDate` timestamp NULL DEFAULT NULL,
  `employmentType` varchar(50) DEFAULT NULL,
  `peopleStatus` varchar(50) DEFAULT 'ACTIVE',
  `peopleOrder` int(11) DEFAULT NULL,
  `websiteValidity` varchar(50) DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `position` varchar(50) DEFAULT NULL,
  `institutionName` varchar(100) DEFAULT NULL,
  `centerName` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `fullName`, `peopleCategory`, `photo`, `email`, `designation`, `contactNo`, `shortJobDescription`, `faculty_id`, `facultyName`, `department_id`, `slugTitle`, `departmentName`, `passingYear`, `office_id`, `officeName`, `committeeName`, `committee_id`, `profileLink`, `joinDate`, `employmentType`, `peopleStatus`, `peopleOrder`, `websiteValidity`, `createdBy`, `updatedBy`, `createdAt`, `updatedAt`, `position`, `institutionName`, `centerName`) VALUES
(133, 'Ahsan Habib', 'Faculty Member', 'uploads/images/peoples/Faculty Member/2_1734497989_Faculty Member.jpg', 'jameson.hughes@eit_su.com', 'Principal', NULL, NULL, 1, 'Faculty of Science and Engineering', NULL, 'ahsan-habib', 'Department Of Electrical And Electronics Engineering', NULL, NULL, NULL, NULL, NULL, 'https://green.edu.bd/faculty-profile/dept-of-eee/ms-rabeya-akter-rabu/', NULL, 'Permanent', 'ACTIVE', 1, NULL, NULL, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL),
(134, 'Md. Shofikul Islam', 'Faculty Member', 'uploads/images/peoples/Faculty Member/2_1734497726_Faculty Member.jpg', 'samantha.mccormick@eit_su.com', 'Co-ordinator', '1777207242', NULL, 3, 'Faculty of Arts & Social Science', NULL, 'md-shofikul-islam', 'Department Of English', NULL, NULL, NULL, NULL, NULL, 'https://green.edu.bd/faculty-profile/dept-of-english/ms-atiya-fairooz/', NULL, 'Permanent', 'ACTIVE', 2, NULL, NULL, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL),
(135, 'Fatema Tuz Johora', 'Faculty Member', 'uploads/images/peoples/Faculty Member/2_1736185881_Faculty Member.jpg', 'jasiah.villanueva@eit_su.com', 'Teacher', NULL, NULL, 1, 'Faculty of Science and Engineering', NULL, 'fatema-tuz-johora', 'Department Of Electrical And Electronics Engineering', NULL, NULL, NULL, NULL, NULL, 'https://green.edu.bd/faculty-profile/dept-of-eee/mr-ashiqur-rahman/', NULL, NULL, 'ACTIVE', 85, NULL, NULL, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL),
(143, 'Junaid Hasan', 'Faculty Member', 'uploads/images/peoples/Faculty Member/2_1734498089_Faculty Member.jpg', 'oscar.ford@eit_su.com', 'Teacher', NULL, NULL, 1, 'Faculty of Science and Engineering', NULL, 'junaid-hasan', 'Department Of Textile Engineering', NULL, NULL, NULL, NULL, NULL, 'https://green.edu.bd/faculty-profile/dept-of-cse/ms-babe-sultana/', NULL, NULL, 'ACTIVE', 105, NULL, NULL, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL),
(144, 'Md. Musfiqul Islam', 'Faculty Member', 'uploads/images/peoples/Faculty Member/2_1734497826_Faculty Member.jpg', 'alexandra.bradford@eit_su.com', 'Teacher', NULL, NULL, 1, 'Faculty of Science and Engineering', NULL, 'md-musfiqul-islam', 'Department Of Law', NULL, NULL, NULL, NULL, NULL, 'https://green.edu.bd/faculty-profile/dept-of-eee/mr-mohammad-asif-ul-haq/', NULL, 'Permanent', 'ACTIVE', 55, NULL, NULL, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL),
(145, 'Mst. Rumi Akter', 'Faculty Member', 'uploads/images/peoples/Faculty Member/2_1735101272_Faculty Member.jpg', 'ander.middleton@eit_su.com', 'Teacher, Bangla', NULL, NULL, 1, 'Faculty of Science and Engineering', NULL, 'mst-rumi-akter', 'Department Of Textile Engineering', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Permanent', 'INACTIVE', 1000, NULL, NULL, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL),
(146, 'Sadikur Rahman', 'Faculty Member', 'uploads/images/peoples/Faculty Member/2_1734497520_Faculty Member.jpg', 'madalyn.willis@eit_su.com', '\r\nTeacher, GED', NULL, NULL, 4, 'Faculty of Law', NULL, 'sadikur-rahman', 'Department Of Law', NULL, NULL, NULL, NULL, NULL, 'https://green.edu.bd/faculty-profile/dept-of-law/dr-md-arifuzzaman/', NULL, 'Permanent', 'ACTIVE', 10, NULL, NULL, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL),
(147, 'Shahin Alam', 'Faculty Member', 'uploads/images/peoples/Faculty Member/2_1734497490_Faculty Member.jpg', 'colette.fitzgerald@eit_su.com', '\r\nTeacher', NULL, NULL, 1, 'Faculty of Science and Engineering', NULL, 'shahin-alam', 'Department Of Law', NULL, NULL, NULL, NULL, NULL, 'https://green.edu.bd/faculty-profile/dept-of-eee/mr-md-najmul-huda-bijoy/', NULL, NULL, 'ACTIVE', 115, NULL, NULL, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL),
(148, 'Shoronika Hasan', 'Faculty Member', 'uploads/images/peoples/Faculty Member/2_1734497470_Faculty Member.jpg', 'peyton.kennedy@eit_su.com', 'Teacher, Mathematics and Science', NULL, NULL, 1, NULL, NULL, 'shoronika-hasan', 'Department Of Textile Engineering', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'INACTIVE', 80, NULL, 2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL),
(149, 'Md. Mamun Miah', 'Alumni', 'uploads/images/peoples/Alumni/2_1735101317_Alumni.jpg', 'brianna.sloan@eit_su.com', 'Chief Chef', NULL, NULL, 2, NULL, 7, 'md-mamun-miah', 'Department Of Computer Science And Engineering', '2011', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ACTIVE', 110, NULL, 2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 'Eco NGO', NULL),
(150, 'Md. Liton Ali', 'Alumni', 'uploads/images/peoples/Alumni/2_1735101310_Alumni.jpg', 'ocean.mcintyre@eit_su.com', 'Assistant Chef', NULL, NULL, 3, NULL, 7, 'md-liton-ali', 'Department Of Computer Science And Engineering', '2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ACTIVE', 20, NULL, 2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 'Social Bank', NULL),
(152, 'Md Sohan Sheikh', 'Alumni', 'uploads/images/peoples/Alumni/2_1735101303_Alumni.jpg', 'joe.hudson@eit_su.com', 'Office Assistant', NULL, NULL, 2, NULL, 8, 'md-sohan-sheikh', 'Department Of Electrical And Electronics Engineering', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ACTIVE', 104, NULL, 2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 'ABC Computer Ltd', NULL),
(153, 'Tarek Rahman', 'Alumni', 'uploads/images/peoples/Alumni/2_1735101292_Alumni.jpg', 'yousef.pitts@eit_su.com', 'Office Assistant', NULL, NULL, 1, NULL, 8, 'tarek-rahman', 'Department Of Electrical And Electronics Engineering', '2015', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ACTIVE', 102, NULL, 2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 'Power Company', NULL),
(154, 'Opu Sheikh', 'Visitor', 'uploads/images/peoples/2_1737042427_.jpg', 'deacon.whitney@eit_su.com', 'Security Guard', NULL, NULL, NULL, NULL, NULL, 'opu-sheikh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ACTIVE', 101, NULL, 2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL),
(314, 'Mst. Rumi Aeeeeeeeeeeeee', NULL, 'uploads/images/peoples/2_1737042613_.jpg', 'saidur@suntech.com', 'Office Assistant', '1777207242', NULL, NULL, NULL, NULL, 'mst-rumi-aeeeeeeeeeeeee', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Permanent', 'INACTIVE', NULL, NULL, 2, 2, '2025-01-16 15:50:13', '2025-01-16 15:50:13', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permission` varchar(100) DEFAULT NULL,
  `permissionStatus` varchar(10) DEFAULT 'ACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`id`, `permission`, `permissionStatus`, `created_at`, `updated_at`) VALUES
(2, 'all-user', 'ACTIVE', NULL, NULL),
(3, 'view-user', 'ACTIVE', NULL, NULL),
(4, 'add-user', 'ACTIVE', NULL, NULL),
(5, 'delete-user', 'ACTIVE', NULL, NULL),
(6, 'all-news', 'ACTIVE', NULL, NULL),
(7, 'add-user', 'ACTIVE', NULL, NULL),
(14, 'user-profile-view', 'ACTIVE', NULL, NULL),
(15, 'edit-profile', 'ACTIVE', NULL, NULL),
(16, 'password-change', 'ACTIVE', NULL, NULL),
(248, 'contact-us-query', 'ACTIVE', NULL, NULL),
(249, 'project-salary-setup', 'ACTIVE', NULL, NULL),
(250, 'project-salary-setup-save', 'ACTIVE', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_category`
--

CREATE TABLE `project_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) DEFAULT NULL,
  `category_cover_photo` varchar(255) DEFAULT NULL,
  `category_status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_category`
--

INSERT INTO `project_category` (`id`, `category_name`, `category_cover_photo`, `category_status`) VALUES
(1, 'Residance', 'website/assets/img/projects/interior/Architectural (3).png', 'ACTIVE'),
(2, 'Office', '\nwebsite/assets/img/projects/interior/resident (3).png', 'ACTIVE'),
(3, 'Kitchen', 'website/assets/img/projects/interior/Architectural (14).png', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `promotional_videos`
--

CREATE TABLE `promotional_videos` (
  `id` int(11) NOT NULL,
  `video_title` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `video_thumbnail` varchar(255) DEFAULT NULL,
  `reference_link` varchar(500) DEFAULT NULL,
  `video_source` varchar(40) DEFAULT NULL,
  `video_category` varchar(20) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `promotional_videos`
--

INSERT INTO `promotional_videos` (`id`, `video_title`, `slug`, `video_thumbnail`, `reference_link`, `video_source`, `video_category`, `status`, `created_by`, `created_at`) VALUES
(1, 'ECommerce Platform', NULL, NULL, 'https://www.youtube.com/embed/ZWUbZ76yRUk', NULL, NULL, 'ACTIVE', NULL, NULL),
(2, 'Job Portal Platform', 'job-portal-platform', 'uploads/ad-cover/2_1757448842_ad-cover.jpg', 'https://www.youtube.com/embed/ZWUbZ76yRUk', 'Poster', NULL, 'ACTIVE', NULL, NULL),
(6, 'Banngladesh', 'banngladesh', 'uploads/ad-cover/2_1757448825_ad-cover.jpg', 'https://www.youtube.com/embed/ZWUbZ76yRUk', 'Banner', NULL, NULL, 2, NULL),
(7, 'Back to School  ffff', 'back-to-school-ffff', 'uploads/thum_photo/2_1758569887_thum_photo.jpg', 'https://www.youtube.com/embed/SzMiJFOa6w8', 'Published', 'Banner', 'ACTIVE', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `referancedocuments`
--

CREATE TABLE `referancedocuments` (
  `id` int(11) NOT NULL,
  `project_id` varchar(100) DEFAULT NULL,
  `document_title` varchar(100) DEFAULT NULL,
  `document_category` varchar(20) DEFAULT NULL,
  `file_location` varchar(255) DEFAULT NULL,
  `referancedocuments_status` varchar(20) DEFAULT NULL,
  `entityObjectOrder` int(11) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(50) DEFAULT NULL,
  `roleStatus` varchar(10) DEFAULT 'ACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `roleStatus`, `created_at`, `updated_at`) VALUES
(2, 'Super Admin', 'ACTIVE', NULL, NULL),
(3, 'Admin', 'ACTIVE', NULL, NULL),
(4, 'Accountant', 'ACTIVE', NULL, NULL),
(5, 'User', 'ACTIVE', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `section` varchar(100) DEFAULT NULL,
  `class_id` varchar(100) DEFAULT NULL,
  `section_status` varchar(20) DEFAULT NULL,
  `entityObjectOrder` int(11) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `section`, `class_id`, `section_status`, `entityObjectOrder`, `createdAt`, `createdBy`, `updatedAt`, `updatedBy`) VALUES
(4, 'Doyel', 'Class VI', 'ACTIVE', NULL, NULL, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('5tzAbNiVAM7gAFLHlzFpnhuSQCYLR56htJvvqEfA', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib2tJYnh0SEtQQzR6cFMxN1BDb2tXcUwyUkoxWVJTRVViYWVxMEFDciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1742763655),
('f6TcDvMy1FyZNIZ6hxLMEtVQ5B5YKKmUj7InCNIR', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU1hNemsxdTRSd21JTGJZcGR2b2dSUXVIdTNVdmRzS3l2TWprY2NDRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1728485432),
('k5uc1I6XGjGn3DO56bRuPR6PKBRlxasDeQ7tKoAX', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRkhyME9peU9oR0tsUldSOEFsdnJSckJMUXNZSXlQVWNLZk9acHUyeCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1728486912),
('PmYFP4loEYMPVGen2AIw76dUFcCBBLAj53jYwkRc', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiOXJVeDlUT3lRcm1GY3UxazdjVDViRDZyZVJZNTA5dXR6SzVLVDR1MSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9ncmFtL21hc3Rlci1vZi1zY2llbmNlLWluLWN5YmVyLXNlY3VyaXR5Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo2OiJsb2NhbGUiO3M6MjoiZW4iO30=', 1728487244),
('wTCyBSYmhYKFZBtJG4br4YyBW5Itx8OK3LYpbMVY', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRjNnbWxKNnpHdGEyc0NoWEw2dWNlNWY0QlpnS2gybjdwbFpPUFhsVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1728933534),
('wzSaEKy2FFqKOLw7YSGYTtaEZg6sbcFlc2ya9sIQ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMFRiVkJwNjc0VElGdDZrR3lyVm5DVTlSbVh0ZGNOY292MHlLOFB5YiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1728933528);

-- --------------------------------------------------------

--
-- Table structure for table `site_banners`
--

CREATE TABLE `site_banners` (
  `id` int(11) NOT NULL,
  `banner_title` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `reference_link` varchar(500) DEFAULT NULL,
  `banner_category` varchar(20) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `site_banners`
--

INSERT INTO `site_banners` (`id`, `banner_title`, `slug`, `banner_image`, `reference_link`, `banner_category`, `status`, `created_by`, `created_at`) VALUES
(8, 'Site Banner', 'site-banner', 'uploads/project-cover/2_1758255488_project-cover.jpg', NULL, 'SITE BANNER', 'ACTIVE', NULL, NULL),
(9, 'Footer', 'footer', 'uploads/banner/2_1758425558_banner.jpg', NULL, 'FOOTER BANNER', 'ACTIVE', NULL, NULL),
(10, 'Page Title', 'page-title', 'uploads/banner/2_1758624407_banner.jpg', NULL, 'INNER COVER', 'ACTIVE', NULL, NULL),
(11, 'sadfasdfas dfasdf', 'sadfasdfas-dfasdf', 'uploads/banner/2_1775189317_banner.png', NULL, 'SITE BANNER', 'Published', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `system_information`
--

CREATE TABLE `system_information` (
  `id` int(11) NOT NULL,
  `information_key` varchar(100) DEFAULT NULL,
  `information_value` varchar(500) DEFAULT NULL,
  `information_key_status` varchar(20) DEFAULT NULL,
  `createdAt` datetime DEFAULT current_timestamp(),
  `createdBy` int(11) DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedBy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `system_information`
--

INSERT INTO `system_information` (`id`, `information_key`, `information_value`, `information_key_status`, `createdAt`, `createdBy`, `updated_at`, `updatedBy`) VALUES
(1, 'Phone No', '+8801601382688, +8801886382688', 'ACTIVE', '2025-03-13 14:00:40', 2, '2025-03-13 14:00:40', 2),
(2, 'System Name', 'AidBD System Account Management System', 'ACTIVE', '2025-03-13 14:10:36', 2, '2025-03-13 14:10:36', NULL),
(3, 'Address', 'House 11, Road 4, Block B, Sector 17, Uttara Model Town, Dhaka.', 'ACTIVE', '2025-03-13 14:12:26', 2, '2025-03-13 14:12:26', NULL),
(4, 'Email', 'info@aidbd.org', 'ACTIVE', '2025-03-13 14:13:25', 2, '2025-03-13 14:13:25', NULL),
(5, 'Organization Website', 'Shosti Arc Studio', 'ACTIVE', '2025-03-13 14:13:54', 2, '2025-03-13 14:13:54', 2),
(6, 'System URL', 'https://shostiarcstudio.com', NULL, '2025-03-13 14:14:18', 2, '2025-03-13 14:14:18', 2),
(7, 'Official Logo', 'assets/img/aid-logo.jpg', 'ACTIVE', '2025-03-13 14:28:29', 2, '2025-03-13 14:28:29', NULL),
(8, 'Organization Name', 'Aidbd.org', 'ACTIVE', '2025-03-13 14:43:26', 2, '2025-03-13 14:43:26', NULL),
(9, 'Trade License', 'TRAD/DNCC/040116/2025', 'ACTIVE', '2026-04-05 11:38:45', NULL, '2026-04-05 11:38:45', NULL),
(10, 'TIN', '449308880231', 'ACTIVE', '2026-04-05 11:39:55', NULL, '2026-04-05 11:39:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `technical_expertise`
--

CREATE TABLE `technical_expertise` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `logo` varchar(200) DEFAULT NULL,
  `technical_experties_status` varchar(20) DEFAULT NULL,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `technical_expertise`
--

INSERT INTO `technical_expertise` (`id`, `name`, `logo`, `technical_experties_status`, `createdAt`) VALUES
(1, 'Laravel', 'website/assets/images/logo-carousel/Laravel.jpg', 'ACTIVE', '2025-02-26 16:26:21'),
(2, 'Vuejs', 'website/assets/images/logo-carousel/vuejs.jpg', 'ACTIVE', '2025-02-26 16:26:50'),
(3, 'ASP.Net', 'website/assets/images/logo-carousel/asp.net.jpg', 'ACTIVE', '2025-02-26 16:27:01'),
(4, 'PHP', 'website/assets/images/logo-carousel/PHP.jpg', 'ACTIVE', '2025-02-26 16:27:09'),
(5, 'Java', 'website/assets/images/logo-carousel/Java.jpg', 'ACTIVE', '2025-02-26 16:27:16'),
(6, 'Flutter ', 'website/assets/images/logo-carousel/Flutter.jpg', 'ACTIVE', '2025-02-26 16:28:59'),
(7, 'SQL Server', 'website/assets/images/logo-carousel/MS-SQL.jpg', 'ACTIVE', '2025-02-26 16:29:06'),
(8, 'MySql', 'website/assets/images/logo-carousel/Mysql.jpg', 'ACTIVE', '2025-02-26 16:29:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `userContactNo` varchar(15) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `userRole` varchar(20) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `userType` varchar(20) DEFAULT NULL,
  `userStatus` varchar(15) DEFAULT 'INACTIVE',
  `systemUniqueId` int(11) DEFAULT NULL,
  `userPhoto` varchar(500) DEFAULT 'uploads/dummy/person.jpg',
  `signature` varchar(255) DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `userContactNo`, `password`, `userRole`, `designation`, `department_id`, `department`, `userType`, `userStatus`, `systemUniqueId`, `userPhoto`, `signature`, `createdBy`, `updatedBy`, `created_at`, `updated_at`) VALUES
(2, 'Saidur', 'saidur@eduinntech.com', '01852012518', '$2y$10$CRmEhMsMnQG4LCkEC8SsyOO8ZSukCTOijNfuSb1GfAjH6klUVmVg.', 'Admin', NULL, 9, 'EIT SU', NULL, 'ACTIVE', 20230922, 'uploads/user-photos/1_1751395748_user-photo.jpg', 'uploads/user-photos/1_1754860513_signature.jpg', 12, NULL, '2023-07-31 22:51:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visitor_access_log`
--

CREATE TABLE `visitor_access_log` (
  `id` int(11) NOT NULL,
  `visitorIP` varchar(15) DEFAULT NULL,
  `visitorCountry` varchar(100) DEFAULT NULL,
  `visitorRegion` varchar(100) DEFAULT NULL,
  `visitorCity` varchar(100) DEFAULT NULL,
  `visitorZip` varchar(10) DEFAULT NULL,
  `hitTime` time DEFAULT NULL,
  `hitDate` date DEFAULT NULL,
  `hitPath` varchar(1000) DEFAULT NULL,
  `hitUrl` varchar(1000) DEFAULT NULL,
  `hitMethod` varchar(30) DEFAULT NULL,
  `siteName` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitor_access_log`
--

INSERT INTO `visitor_access_log` (`id`, `visitorIP`, `visitorCountry`, `visitorRegion`, `visitorCity`, `visitorZip`, `hitTime`, `hitDate`, `hitPath`, `hitUrl`, `hitMethod`, `siteName`) VALUES
(25449, '127.0.0.1', NULL, NULL, NULL, NULL, '13:22:10', '2026-03-01', 'http://127.0.0.1:8000/projects/interior', 'projects/interior', 'GET', 'EduInnTech Site'),
(25450, '127.0.0.1', NULL, NULL, NULL, NULL, '13:22:17', '2026-03-01', 'http://127.0.0.1:8000/projects/interior/kitchen', 'projects/interior/kitchen', 'GET', 'EduInnTech Site'),
(25451, '127.0.0.1', NULL, NULL, NULL, NULL, '13:22:25', '2026-03-01', 'http://127.0.0.1:8000/projects/interior', 'projects/interior', 'GET', 'EduInnTech Site'),
(25452, '127.0.0.1', NULL, NULL, NULL, NULL, '13:25:31', '2026-03-01', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25453, '127.0.0.1', NULL, NULL, NULL, NULL, '13:26:32', '2026-03-01', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25454, '127.0.0.1', NULL, NULL, NULL, NULL, '13:27:29', '2026-03-01', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25455, '127.0.0.1', NULL, NULL, NULL, NULL, '13:28:27', '2026-03-01', 'http://127.0.0.1:8000/projects/interior', 'projects/interior', 'GET', 'EduInnTech Site'),
(25456, '127.0.0.1', NULL, NULL, NULL, NULL, '13:28:31', '2026-03-01', 'http://127.0.0.1:8000/projects/interior/kitchen', 'projects/interior/kitchen', 'GET', 'EduInnTech Site'),
(25457, '127.0.0.1', NULL, NULL, NULL, NULL, '13:28:51', '2026-03-01', 'http://127.0.0.1:8000/projects/interior', 'projects/interior', 'GET', 'EduInnTech Site'),
(25458, '127.0.0.1', NULL, NULL, NULL, NULL, '13:29:05', '2026-03-01', 'http://127.0.0.1:8000/services', 'services', 'GET', 'EduInnTech Site'),
(25459, '127.0.0.1', NULL, NULL, NULL, NULL, '13:29:35', '2026-03-01', 'http://127.0.0.1:8000/services', 'services', 'GET', 'EduInnTech Site'),
(25460, '127.0.0.1', NULL, NULL, NULL, NULL, '13:32:26', '2026-03-01', 'http://127.0.0.1:8000/services', 'services', 'GET', 'EduInnTech Site'),
(25461, '127.0.0.1', NULL, NULL, NULL, NULL, '13:33:09', '2026-03-01', 'http://127.0.0.1:8000/services', 'services', 'GET', 'EduInnTech Site'),
(25462, '127.0.0.1', NULL, NULL, NULL, NULL, '13:33:14', '2026-03-01', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25463, '127.0.0.1', NULL, NULL, NULL, NULL, '13:35:52', '2026-03-01', 'http://127.0.0.1:8000/services', 'services', 'GET', 'EduInnTech Site'),
(25464, '127.0.0.1', NULL, NULL, NULL, NULL, '13:35:55', '2026-03-01', 'http://127.0.0.1:8000/projects/interior', 'projects/interior', 'GET', 'EduInnTech Site'),
(25465, '127.0.0.1', NULL, NULL, NULL, NULL, '13:36:00', '2026-03-01', 'http://127.0.0.1:8000/projects/exterior', 'projects/exterior', 'GET', 'EduInnTech Site'),
(25466, '127.0.0.1', NULL, NULL, NULL, NULL, '13:41:06', '2026-03-01', 'http://127.0.0.1:8000/projects/exterior', 'projects/exterior', 'GET', 'EduInnTech Site'),
(25467, '127.0.0.1', NULL, NULL, NULL, NULL, '13:42:30', '2026-03-01', 'http://127.0.0.1:8000/projects/exterior', 'projects/exterior', 'GET', 'EduInnTech Site'),
(25468, '127.0.0.1', NULL, NULL, NULL, NULL, '13:43:18', '2026-03-01', 'http://127.0.0.1:8000/projects/exterior', 'projects/exterior', 'GET', 'EduInnTech Site'),
(25469, '127.0.0.1', NULL, NULL, NULL, NULL, '13:43:47', '2026-03-01', 'http://127.0.0.1:8000/projects/interior', 'projects/interior', 'GET', 'EduInnTech Site'),
(25470, '127.0.0.1', NULL, NULL, NULL, NULL, '13:45:50', '2026-03-01', 'http://127.0.0.1:8000/projects/interior', 'projects/interior', 'GET', 'EduInnTech Site'),
(25471, '127.0.0.1', NULL, NULL, NULL, NULL, '13:48:21', '2026-03-01', 'http://127.0.0.1:8000/projects/interior', 'projects/interior', 'GET', 'EduInnTech Site'),
(25472, '127.0.0.1', NULL, NULL, NULL, NULL, '13:51:00', '2026-03-01', 'http://127.0.0.1:8000/projects/interior', 'projects/interior', 'GET', 'EduInnTech Site'),
(25473, '127.0.0.1', NULL, NULL, NULL, NULL, '13:51:12', '2026-03-01', 'http://127.0.0.1:8000/projects/interior', 'projects/interior', 'GET', 'EduInnTech Site'),
(25474, '127.0.0.1', NULL, NULL, NULL, NULL, '13:51:39', '2026-03-01', 'http://127.0.0.1:8000/projects/interior', 'projects/interior', 'GET', 'EduInnTech Site'),
(25475, '127.0.0.1', NULL, NULL, NULL, NULL, '13:52:22', '2026-03-01', 'http://127.0.0.1:8000/projects/interior', 'projects/interior', 'GET', 'EduInnTech Site'),
(25476, '127.0.0.1', NULL, NULL, NULL, NULL, '13:52:59', '2026-03-01', 'http://127.0.0.1:8000/projects/interior', 'projects/interior', 'GET', 'EduInnTech Site'),
(25477, '127.0.0.1', NULL, NULL, NULL, NULL, '13:53:09', '2026-03-01', 'http://127.0.0.1:8000/projects/interior', 'projects/interior', 'GET', 'EduInnTech Site'),
(25478, '127.0.0.1', NULL, NULL, NULL, NULL, '13:54:42', '2026-03-01', 'http://127.0.0.1:8000/projects/interior', 'projects/interior', 'GET', 'EduInnTech Site'),
(25479, '127.0.0.1', NULL, NULL, NULL, NULL, '13:55:25', '2026-03-01', 'http://127.0.0.1:8000/projects/interior', 'projects/interior', 'GET', 'EduInnTech Site'),
(25480, '127.0.0.1', NULL, NULL, NULL, NULL, '13:55:33', '2026-03-01', 'http://127.0.0.1:8000/projects/interior', 'projects/interior', 'GET', 'EduInnTech Site'),
(25481, '127.0.0.1', NULL, NULL, NULL, NULL, '14:02:27', '2026-03-01', 'http://127.0.0.1:8000/projects/interior', 'projects/interior', 'GET', 'EduInnTech Site'),
(25482, '127.0.0.1', NULL, NULL, NULL, NULL, '14:03:12', '2026-03-01', 'http://127.0.0.1:8000/projects/interior', 'projects/interior', 'GET', 'EduInnTech Site'),
(25483, '127.0.0.1', NULL, NULL, NULL, NULL, '14:03:51', '2026-03-01', 'http://127.0.0.1:8000/projects/interior', 'projects/interior', 'GET', 'EduInnTech Site'),
(25484, '127.0.0.1', NULL, NULL, NULL, NULL, '14:04:10', '2026-03-01', 'http://127.0.0.1:8000/projects/interior', 'projects/interior', 'GET', 'EduInnTech Site'),
(25485, '127.0.0.1', NULL, NULL, NULL, NULL, '14:04:33', '2026-03-01', 'http://127.0.0.1:8000/projects/interior', 'projects/interior', 'GET', 'EduInnTech Site'),
(25486, '127.0.0.1', NULL, NULL, NULL, NULL, '14:05:00', '2026-03-01', 'http://127.0.0.1:8000/projects/interior', 'projects/interior', 'GET', 'EduInnTech Site'),
(25487, '127.0.0.1', NULL, NULL, NULL, NULL, '14:05:42', '2026-03-01', 'http://127.0.0.1:8000/projects/interior', 'projects/interior', 'GET', 'EduInnTech Site'),
(25488, '127.0.0.1', NULL, NULL, NULL, NULL, '14:07:22', '2026-03-01', 'http://127.0.0.1:8000/projects/interior', 'projects/interior', 'GET', 'EduInnTech Site'),
(25489, '127.0.0.1', NULL, NULL, NULL, NULL, '14:07:31', '2026-03-01', 'http://127.0.0.1:8000/projects/interior/kitchen', 'projects/interior/kitchen', 'GET', 'EduInnTech Site'),
(25490, '127.0.0.1', NULL, NULL, NULL, NULL, '14:16:19', '2026-03-01', 'http://127.0.0.1:8000/projects/interior', 'projects/interior', 'GET', 'EduInnTech Site'),
(25491, '127.0.0.1', NULL, NULL, NULL, NULL, '14:16:21', '2026-03-01', 'http://127.0.0.1:8000/projects/interior', 'projects/interior', 'GET', 'EduInnTech Site'),
(25492, '127.0.0.1', NULL, NULL, NULL, NULL, '14:16:44', '2026-03-01', 'http://127.0.0.1:8000/projects/interior', 'projects/interior', 'GET', 'EduInnTech Site'),
(25493, '127.0.0.1', NULL, NULL, NULL, NULL, '14:16:46', '2026-03-01', 'http://127.0.0.1:8000/projects/site.webmanifest', 'projects/site.webmanifest', 'GET', 'EduInnTech Site'),
(25494, '127.0.0.1', NULL, NULL, NULL, NULL, '14:16:47', '2026-03-01', 'http://127.0.0.1:8000/projects/interior', 'projects/interior', 'GET', 'EduInnTech Site'),
(25495, '127.0.0.1', NULL, NULL, NULL, NULL, '14:16:47', '2026-03-01', 'http://127.0.0.1:8000/projects/site.webmanifest', 'projects/site.webmanifest', 'GET', 'EduInnTech Site'),
(25496, '127.0.0.1', NULL, NULL, NULL, NULL, '14:16:49', '2026-03-01', 'http://127.0.0.1:8000/projects/site.webmanifest', 'projects/site.webmanifest', 'GET', 'EduInnTech Site'),
(25497, '127.0.0.1', NULL, NULL, NULL, NULL, '14:16:50', '2026-03-01', 'http://127.0.0.1:8000/projects/Kitchen', 'projects/Kitchen', 'GET', 'EduInnTech Site'),
(25498, '127.0.0.1', NULL, NULL, NULL, NULL, '14:17:08', '2026-03-01', 'http://127.0.0.1:8000/projects/Kitchen', 'projects/Kitchen', 'GET', 'EduInnTech Site'),
(25499, '127.0.0.1', NULL, NULL, NULL, NULL, '14:19:58', '2026-03-01', 'http://127.0.0.1:8000/projects/Kitchen', 'projects/Kitchen', 'GET', 'EduInnTech Site'),
(25500, '127.0.0.1', NULL, NULL, NULL, NULL, '14:20:43', '2026-03-01', 'http://127.0.0.1:8000/projects/Kitchen', 'projects/Kitchen', 'GET', 'EduInnTech Site'),
(25501, '127.0.0.1', NULL, NULL, NULL, NULL, '14:20:54', '2026-03-01', 'http://127.0.0.1:8000/projects/Kitchen', 'projects/Kitchen', 'GET', 'EduInnTech Site'),
(25502, '127.0.0.1', NULL, NULL, NULL, NULL, '14:20:55', '2026-03-01', 'http://127.0.0.1:8000/projects/site.webmanifest', 'projects/site.webmanifest', 'GET', 'EduInnTech Site'),
(25503, '127.0.0.1', NULL, NULL, NULL, NULL, '14:20:57', '2026-03-01', 'http://127.0.0.1:8000/projects/site.webmanifest', 'projects/site.webmanifest', 'GET', 'EduInnTech Site'),
(25504, '127.0.0.1', NULL, NULL, NULL, NULL, '14:21:19', '2026-03-01', 'http://127.0.0.1:8000/projects/Kitchen', 'projects/Kitchen', 'GET', 'EduInnTech Site'),
(25505, '127.0.0.1', NULL, NULL, NULL, NULL, '14:21:20', '2026-03-01', 'http://127.0.0.1:8000/projects/site.webmanifest', 'projects/site.webmanifest', 'GET', 'EduInnTech Site'),
(25506, '127.0.0.1', NULL, NULL, NULL, NULL, '14:21:21', '2026-03-01', 'http://127.0.0.1:8000/projects/site.webmanifest', 'projects/site.webmanifest', 'GET', 'EduInnTech Site'),
(25507, '127.0.0.1', NULL, NULL, NULL, NULL, '14:23:47', '2026-03-01', 'http://127.0.0.1:8000/projects/Kitchen', 'projects/Kitchen', 'GET', 'EduInnTech Site'),
(25508, '127.0.0.1', NULL, NULL, NULL, NULL, '14:23:48', '2026-03-01', 'http://127.0.0.1:8000/projects/site.webmanifest', 'projects/site.webmanifest', 'GET', 'EduInnTech Site'),
(25509, '127.0.0.1', NULL, NULL, NULL, NULL, '14:23:50', '2026-03-01', 'http://127.0.0.1:8000/projects/site.webmanifest', 'projects/site.webmanifest', 'GET', 'EduInnTech Site'),
(25510, '127.0.0.1', NULL, NULL, NULL, NULL, '14:23:54', '2026-03-01', 'http://127.0.0.1:8000/projects/interior', 'projects/interior', 'GET', 'EduInnTech Site'),
(25511, '127.0.0.1', NULL, NULL, NULL, NULL, '14:23:55', '2026-03-01', 'http://127.0.0.1:8000/projects/site.webmanifest', 'projects/site.webmanifest', 'GET', 'EduInnTech Site'),
(25512, '127.0.0.1', NULL, NULL, NULL, NULL, '14:23:56', '2026-03-01', 'http://127.0.0.1:8000/projects/Office', 'projects/Office', 'GET', 'EduInnTech Site'),
(25513, '127.0.0.1', NULL, NULL, NULL, NULL, '14:23:57', '2026-03-01', 'http://127.0.0.1:8000/projects/site.webmanifest', 'projects/site.webmanifest', 'GET', 'EduInnTech Site'),
(25514, '127.0.0.1', NULL, NULL, NULL, NULL, '14:23:59', '2026-03-01', 'http://127.0.0.1:8000/projects/site.webmanifest', 'projects/site.webmanifest', 'GET', 'EduInnTech Site'),
(25515, '127.0.0.1', NULL, NULL, NULL, NULL, '14:24:01', '2026-03-01', 'http://127.0.0.1:8000/projects/site.webmanifest', 'projects/site.webmanifest', 'GET', 'EduInnTech Site'),
(25516, '127.0.0.1', NULL, NULL, NULL, NULL, '14:24:08', '2026-03-01', 'http://127.0.0.1:8000/projects/interior', 'projects/interior', 'GET', 'EduInnTech Site'),
(25517, '127.0.0.1', NULL, NULL, NULL, NULL, '14:24:09', '2026-03-01', 'http://127.0.0.1:8000/projects/site.webmanifest', 'projects/site.webmanifest', 'GET', 'EduInnTech Site'),
(25518, '127.0.0.1', NULL, NULL, NULL, NULL, '14:24:11', '2026-03-01', 'http://127.0.0.1:8000/projects/Kitchen', 'projects/Kitchen', 'GET', 'EduInnTech Site'),
(25519, '127.0.0.1', NULL, NULL, NULL, NULL, '14:24:11', '2026-03-01', 'http://127.0.0.1:8000/projects/site.webmanifest', 'projects/site.webmanifest', 'GET', 'EduInnTech Site'),
(25520, '127.0.0.1', NULL, NULL, NULL, NULL, '14:24:12', '2026-03-01', 'http://127.0.0.1:8000/projects/site.webmanifest', 'projects/site.webmanifest', 'GET', 'EduInnTech Site'),
(25521, '127.0.0.1', NULL, NULL, NULL, NULL, '14:24:14', '2026-03-01', 'http://127.0.0.1:8000/projects/site.webmanifest', 'projects/site.webmanifest', 'GET', 'EduInnTech Site'),
(25522, '127.0.0.1', NULL, NULL, NULL, NULL, '14:24:45', '2026-03-01', 'http://127.0.0.1:8000/portfolio', 'portfolio', 'GET', 'EduInnTech Site'),
(25523, '127.0.0.1', NULL, NULL, NULL, NULL, '14:25:21', '2026-03-01', 'http://127.0.0.1:8000/projects/exterior', 'projects/exterior', 'GET', 'EduInnTech Site'),
(25524, '127.0.0.1', NULL, NULL, NULL, NULL, '14:26:28', '2026-03-01', 'http://127.0.0.1:8000/portfolio', 'portfolio', 'GET', 'EduInnTech Site'),
(25525, '127.0.0.1', NULL, NULL, NULL, NULL, '14:26:33', '2026-03-01', 'http://127.0.0.1:8000/projects/exterior', 'projects/exterior', 'GET', 'EduInnTech Site'),
(25526, '127.0.0.1', NULL, NULL, NULL, NULL, '14:26:38', '2026-03-01', 'http://127.0.0.1:8000/projects/interior', 'projects/interior', 'GET', 'EduInnTech Site'),
(25527, '127.0.0.1', NULL, NULL, NULL, NULL, '14:26:41', '2026-03-01', 'http://127.0.0.1:8000/interior-project/Kitchen', 'interior-project/Kitchen', 'GET', 'EduInnTech Site'),
(25528, '127.0.0.1', NULL, NULL, NULL, NULL, '14:26:42', '2026-03-01', 'http://127.0.0.1:8000/interior-project/site.webmanifest', 'interior-project/site.webmanifest', 'GET', 'EduInnTech Site'),
(25529, '127.0.0.1', NULL, NULL, NULL, NULL, '14:26:43', '2026-03-01', 'http://127.0.0.1:8000/interior-project/site.webmanifest', 'interior-project/site.webmanifest', 'GET', 'EduInnTech Site'),
(25530, '127.0.0.1', NULL, NULL, NULL, NULL, '14:26:53', '2026-03-01', 'http://127.0.0.1:8000/interior-project/Kitchen', 'interior-project/Kitchen', 'GET', 'EduInnTech Site'),
(25531, '127.0.0.1', NULL, NULL, NULL, NULL, '14:26:53', '2026-03-01', 'http://127.0.0.1:8000/interior-project/site.webmanifest', 'interior-project/site.webmanifest', 'GET', 'EduInnTech Site'),
(25532, '127.0.0.1', NULL, NULL, NULL, NULL, '14:26:55', '2026-03-01', 'http://127.0.0.1:8000/interior-project/site.webmanifest', 'interior-project/site.webmanifest', 'GET', 'EduInnTech Site'),
(25533, '127.0.0.1', NULL, NULL, NULL, NULL, '14:27:05', '2026-03-01', 'http://127.0.0.1:8000/interior-project/Kitchen', 'interior-project/Kitchen', 'GET', 'EduInnTech Site'),
(25534, '127.0.0.1', NULL, NULL, NULL, NULL, '14:27:06', '2026-03-01', 'http://127.0.0.1:8000/interior-project/site.webmanifest', 'interior-project/site.webmanifest', 'GET', 'EduInnTech Site'),
(25535, '127.0.0.1', NULL, NULL, NULL, NULL, '14:27:07', '2026-03-01', 'http://127.0.0.1:8000/interior-project/site.webmanifest', 'interior-project/site.webmanifest', 'GET', 'EduInnTech Site'),
(25536, '127.0.0.1', NULL, NULL, NULL, NULL, '14:30:12', '2026-03-01', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25537, '127.0.0.1', NULL, NULL, NULL, NULL, '14:30:52', '2026-03-01', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25538, '127.0.0.1', NULL, NULL, NULL, NULL, '14:31:05', '2026-03-01', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25539, '127.0.0.1', NULL, NULL, NULL, NULL, '14:31:49', '2026-03-01', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25540, '127.0.0.1', NULL, NULL, NULL, NULL, '14:32:23', '2026-03-01', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25541, '127.0.0.1', NULL, NULL, NULL, NULL, '14:33:00', '2026-03-01', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25542, '127.0.0.1', NULL, NULL, NULL, NULL, '14:33:31', '2026-03-01', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25543, '127.0.0.1', NULL, NULL, NULL, NULL, '14:34:06', '2026-03-01', 'http://127.0.0.1:8000/services', 'services', 'GET', 'EduInnTech Site'),
(25544, '127.0.0.1', NULL, NULL, NULL, NULL, '14:35:47', '2026-03-01', 'http://127.0.0.1:8000/services', 'services', 'GET', 'EduInnTech Site'),
(25545, '127.0.0.1', NULL, NULL, NULL, NULL, '14:35:54', '2026-03-01', 'http://127.0.0.1:8000/quatation', 'quatation', 'GET', 'EduInnTech Site'),
(25546, '127.0.0.1', NULL, NULL, NULL, NULL, '14:36:49', '2026-03-01', 'http://127.0.0.1:8000/quatation', 'quatation', 'GET', 'EduInnTech Site'),
(25547, '127.0.0.1', NULL, NULL, NULL, NULL, '14:40:21', '2026-03-01', 'http://127.0.0.1:8000/quatation', 'quatation', 'GET', 'EduInnTech Site'),
(25548, '127.0.0.1', NULL, NULL, NULL, NULL, '14:42:32', '2026-03-01', 'http://127.0.0.1:8000/quatation', 'quatation', 'GET', 'EduInnTech Site'),
(25549, '127.0.0.1', NULL, NULL, NULL, NULL, '14:43:36', '2026-03-01', 'http://127.0.0.1:8000/quatation', 'quatation', 'GET', 'EduInnTech Site'),
(25550, '127.0.0.1', NULL, NULL, NULL, NULL, '14:43:43', '2026-03-01', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25551, '127.0.0.1', NULL, NULL, NULL, NULL, '14:44:49', '2026-03-01', 'http://127.0.0.1:8000/services', 'services', 'GET', 'EduInnTech Site'),
(25552, '127.0.0.1', NULL, NULL, NULL, NULL, '16:04:31', '2026-03-01', 'http://127.0.0.1:8000/services', 'services', 'GET', 'EduInnTech Site'),
(25553, '127.0.0.1', NULL, NULL, NULL, NULL, '16:04:35', '2026-03-01', 'http://127.0.0.1:8000/portfolio', 'portfolio', 'GET', 'EduInnTech Site'),
(25554, '127.0.0.1', NULL, NULL, NULL, NULL, '16:04:41', '2026-03-01', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25555, '127.0.0.1', NULL, NULL, NULL, NULL, '16:16:03', '2026-03-01', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25556, '127.0.0.1', NULL, NULL, NULL, NULL, '16:25:05', '2026-03-01', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25557, '127.0.0.1', NULL, NULL, NULL, NULL, '16:27:33', '2026-03-01', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25558, '127.0.0.1', NULL, NULL, NULL, NULL, '11:12:03', '2026-04-02', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25559, '127.0.0.1', NULL, NULL, NULL, NULL, '11:12:34', '2026-04-02', 'http://127.0.0.1:8000/services', 'services', 'GET', 'EduInnTech Site'),
(25560, '127.0.0.1', NULL, NULL, NULL, NULL, '11:12:40', '2026-04-02', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25561, '127.0.0.1', NULL, NULL, NULL, NULL, '11:12:51', '2026-04-02', 'http://127.0.0.1:8000/contact-us', 'contact-us', 'GET', 'EduInnTech Site'),
(25562, '127.0.0.1', NULL, NULL, NULL, NULL, '11:12:57', '2026-04-02', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25563, '127.0.0.1', NULL, NULL, NULL, NULL, '11:13:00', '2026-04-02', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25564, '127.0.0.1', NULL, NULL, NULL, NULL, '11:13:10', '2026-04-02', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25565, '127.0.0.1', NULL, NULL, NULL, NULL, '11:13:41', '2026-04-02', 'http://127.0.0.1:8000/services', 'services', 'GET', 'EduInnTech Site'),
(25566, '127.0.0.1', NULL, NULL, NULL, NULL, '11:14:35', '2026-04-02', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25567, '127.0.0.1', NULL, NULL, NULL, NULL, '11:14:38', '2026-04-02', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25568, '127.0.0.1', NULL, NULL, NULL, NULL, '13:05:01', '2026-04-02', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25569, '127.0.0.1', NULL, NULL, NULL, NULL, '13:05:04', '2026-04-02', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25570, '127.0.0.1', NULL, NULL, NULL, NULL, '13:06:39', '2026-04-02', 'http://127.0.0.1:8000/services', 'services', 'GET', 'EduInnTech Site'),
(25571, '127.0.0.1', NULL, NULL, NULL, NULL, '13:07:17', '2026-04-02', 'http://127.0.0.1:8000/services', 'services', 'GET', 'EduInnTech Site'),
(25572, '127.0.0.1', NULL, NULL, NULL, NULL, '09:29:55', '2026-04-03', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25573, '127.0.0.1', NULL, NULL, NULL, NULL, '09:30:14', '2026-04-03', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25574, '127.0.0.1', NULL, NULL, NULL, NULL, '10:01:48', '2026-04-03', 'http://127.0.0.1:8000/services', 'services', 'GET', 'EduInnTech Site'),
(25575, '127.0.0.1', NULL, NULL, NULL, NULL, '11:53:59', '2026-04-03', 'http://127.0.0.1:8000/portfolio', 'portfolio', 'GET', 'EduInnTech Site'),
(25576, '127.0.0.1', NULL, NULL, NULL, NULL, '11:54:06', '2026-04-03', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25577, '127.0.0.1', NULL, NULL, NULL, NULL, '12:15:57', '2026-04-03', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25578, '127.0.0.1', NULL, NULL, NULL, NULL, '12:54:11', '2026-04-03', 'http://127.0.0.1:8000/contact-us', 'contact-us', 'GET', 'EduInnTech Site'),
(25579, '127.0.0.1', NULL, NULL, NULL, NULL, '12:54:15', '2026-04-03', 'http://127.0.0.1:8000/portfolio', 'portfolio', 'GET', 'EduInnTech Site'),
(25580, '127.0.0.1', NULL, NULL, NULL, NULL, '12:54:18', '2026-04-03', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25581, '127.0.0.1', NULL, NULL, NULL, NULL, '12:54:23', '2026-04-03', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25582, '127.0.0.1', NULL, NULL, NULL, NULL, '11:31:40', '2026-04-05', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25583, '127.0.0.1', NULL, NULL, NULL, NULL, '11:31:52', '2026-04-05', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25584, '127.0.0.1', NULL, NULL, NULL, NULL, '11:36:48', '2026-04-05', 'http://127.0.0.1:8000/terms-of-use', 'terms-of-use', 'GET', 'EduInnTech Site'),
(25585, '127.0.0.1', NULL, NULL, NULL, NULL, '11:38:38', '2026-04-05', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25586, '127.0.0.1', NULL, NULL, NULL, NULL, '22:05:49', '2026-04-07', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25587, '127.0.0.1', NULL, NULL, NULL, NULL, '22:28:33', '2026-04-07', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25588, '127.0.0.1', NULL, NULL, NULL, NULL, '22:28:40', '2026-04-07', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25589, '127.0.0.1', NULL, NULL, NULL, NULL, '23:21:44', '2026-04-07', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25590, '127.0.0.1', NULL, NULL, NULL, NULL, '01:52:14', '2026-04-08', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25591, '127.0.0.1', NULL, NULL, NULL, NULL, '01:52:51', '2026-04-08', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25592, '127.0.0.1', NULL, NULL, NULL, NULL, '01:52:58', '2026-04-08', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25593, '127.0.0.1', NULL, NULL, NULL, NULL, '01:53:04', '2026-04-08', 'http://127.0.0.1:8000/contact-us', 'contact-us', 'GET', 'EduInnTech Site'),
(25594, '127.0.0.1', NULL, NULL, NULL, NULL, '01:59:46', '2026-04-08', 'http://127.0.0.1:8000/contact-us', 'contact-us', 'GET', 'EduInnTech Site'),
(25595, '127.0.0.1', NULL, NULL, NULL, NULL, '01:59:50', '2026-04-08', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25596, '127.0.0.1', NULL, NULL, NULL, NULL, '01:59:54', '2026-04-08', 'http://127.0.0.1:8000/contact-us', 'contact-us', 'GET', 'EduInnTech Site'),
(25597, '127.0.0.1', NULL, NULL, NULL, NULL, '02:00:30', '2026-04-08', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25598, '127.0.0.1', NULL, NULL, NULL, NULL, '02:02:58', '2026-04-08', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25599, '127.0.0.1', NULL, NULL, NULL, NULL, '02:03:40', '2026-04-08', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25600, '127.0.0.1', NULL, NULL, NULL, NULL, '02:04:07', '2026-04-08', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25601, '127.0.0.1', NULL, NULL, NULL, NULL, '02:08:28', '2026-04-08', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25602, '127.0.0.1', NULL, NULL, NULL, NULL, '02:16:52', '2026-04-08', 'http://127.0.0.1:8000/projects/interior', 'projects/interior', 'GET', 'EduInnTech Site'),
(25603, '127.0.0.1', NULL, NULL, NULL, NULL, '02:17:10', '2026-04-08', 'http://127.0.0.1:8000/interior-project/Residance', 'interior-project/Residance', 'GET', 'EduInnTech Site'),
(25604, '127.0.0.1', NULL, NULL, NULL, NULL, '02:17:48', '2026-04-08', 'http://127.0.0.1:8000/interior-project/Residance', 'interior-project/Residance', 'GET', 'EduInnTech Site'),
(25605, '127.0.0.1', NULL, NULL, NULL, NULL, '02:17:49', '2026-04-08', 'http://127.0.0.1:8000/interior-project/site.webmanifest', 'interior-project/site.webmanifest', 'GET', 'EduInnTech Site'),
(25606, '127.0.0.1', NULL, NULL, NULL, NULL, '02:17:50', '2026-04-08', 'http://127.0.0.1:8000/interior-project/site.webmanifest', 'interior-project/site.webmanifest', 'GET', 'EduInnTech Site'),
(25607, '127.0.0.1', NULL, NULL, NULL, NULL, '02:17:53', '2026-04-08', 'http://127.0.0.1:8000/projects/interior', 'projects/interior', 'GET', 'EduInnTech Site'),
(25608, '127.0.0.1', NULL, NULL, NULL, NULL, '02:17:56', '2026-04-08', 'http://127.0.0.1:8000/interior-project/Residance', 'interior-project/Residance', 'GET', 'EduInnTech Site'),
(25609, '127.0.0.1', NULL, NULL, NULL, NULL, '02:17:56', '2026-04-08', 'http://127.0.0.1:8000/interior-project/Office', 'interior-project/Office', 'GET', 'EduInnTech Site'),
(25610, '127.0.0.1', NULL, NULL, NULL, NULL, '02:17:57', '2026-04-08', 'http://127.0.0.1:8000/interior-project/Kitchen', 'interior-project/Kitchen', 'GET', 'EduInnTech Site'),
(25611, '127.0.0.1', NULL, NULL, NULL, NULL, '02:17:59', '2026-04-08', 'http://127.0.0.1:8000/interior-project/site.webmanifest', 'interior-project/site.webmanifest', 'GET', 'EduInnTech Site'),
(25612, '127.0.0.1', NULL, NULL, NULL, NULL, '02:18:01', '2026-04-08', 'http://127.0.0.1:8000/interior-project/site.webmanifest', 'interior-project/site.webmanifest', 'GET', 'EduInnTech Site'),
(25613, '127.0.0.1', NULL, NULL, NULL, NULL, '02:18:01', '2026-04-08', 'http://127.0.0.1:8000/interior-project/site.webmanifest', 'interior-project/site.webmanifest', 'GET', 'EduInnTech Site'),
(25614, '127.0.0.1', NULL, NULL, NULL, NULL, '02:18:03', '2026-04-08', 'http://127.0.0.1:8000/interior-project/site.webmanifest', 'interior-project/site.webmanifest', 'GET', 'EduInnTech Site'),
(25615, '127.0.0.1', NULL, NULL, NULL, NULL, '02:18:03', '2026-04-08', 'http://127.0.0.1:8000/interior-project/site.webmanifest', 'interior-project/site.webmanifest', 'GET', 'EduInnTech Site'),
(25616, '127.0.0.1', NULL, NULL, NULL, NULL, '02:18:05', '2026-04-08', 'http://127.0.0.1:8000/interior-project/site.webmanifest', 'interior-project/site.webmanifest', 'GET', 'EduInnTech Site'),
(25617, '127.0.0.1', NULL, NULL, NULL, NULL, '02:18:11', '2026-04-08', 'http://127.0.0.1:8000/projects/exterior', 'projects/exterior', 'GET', 'EduInnTech Site'),
(25618, '127.0.0.1', NULL, NULL, NULL, NULL, '02:18:34', '2026-04-08', 'http://127.0.0.1:8000/projects/exterior', 'projects/exterior', 'GET', 'EduInnTech Site'),
(25619, '127.0.0.1', NULL, NULL, NULL, NULL, '02:18:41', '2026-04-08', 'http://127.0.0.1:8000/services', 'services', 'GET', 'EduInnTech Site'),
(25620, '127.0.0.1', NULL, NULL, NULL, NULL, '02:20:56', '2026-04-08', 'http://127.0.0.1:8000/services', 'services', 'GET', 'EduInnTech Site'),
(25621, '127.0.0.1', NULL, NULL, NULL, NULL, '02:22:12', '2026-04-08', 'http://127.0.0.1:8000/services', 'services', 'GET', 'EduInnTech Site'),
(25622, '127.0.0.1', NULL, NULL, NULL, NULL, '02:22:16', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25623, '127.0.0.1', NULL, NULL, NULL, NULL, '02:22:47', '2026-04-08', 'http://127.0.0.1:8000/interior-project/Office', 'interior-project/Office', 'GET', 'EduInnTech Site'),
(25624, '127.0.0.1', NULL, NULL, NULL, NULL, '02:22:49', '2026-04-08', 'http://127.0.0.1:8000/interior-project/site.webmanifest', 'interior-project/site.webmanifest', 'GET', 'EduInnTech Site'),
(25625, '127.0.0.1', NULL, NULL, NULL, NULL, '02:22:50', '2026-04-08', 'http://127.0.0.1:8000/interior-project/site.webmanifest', 'interior-project/site.webmanifest', 'GET', 'EduInnTech Site'),
(25626, '127.0.0.1', NULL, NULL, NULL, NULL, '02:23:12', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25627, '127.0.0.1', NULL, NULL, NULL, NULL, '02:25:56', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25628, '127.0.0.1', NULL, NULL, NULL, NULL, '02:28:00', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25629, '127.0.0.1', NULL, NULL, NULL, NULL, '02:28:13', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25630, '127.0.0.1', NULL, NULL, NULL, NULL, '02:29:15', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25631, '127.0.0.1', NULL, NULL, NULL, NULL, '02:29:53', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25632, '127.0.0.1', NULL, NULL, NULL, NULL, '02:30:14', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25633, '127.0.0.1', NULL, NULL, NULL, NULL, '02:30:34', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25634, '127.0.0.1', NULL, NULL, NULL, NULL, '02:31:41', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25635, '127.0.0.1', NULL, NULL, NULL, NULL, '02:32:22', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25636, '127.0.0.1', NULL, NULL, NULL, NULL, '02:32:52', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25637, '127.0.0.1', NULL, NULL, NULL, NULL, '02:35:08', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25638, '127.0.0.1', NULL, NULL, NULL, NULL, '02:36:08', '2026-04-08', 'http://127.0.0.1:8000/interior-project/Residance', 'interior-project/Residance', 'GET', 'EduInnTech Site'),
(25639, '127.0.0.1', NULL, NULL, NULL, NULL, '02:36:09', '2026-04-08', 'http://127.0.0.1:8000/interior-project/site.webmanifest', 'interior-project/site.webmanifest', 'GET', 'EduInnTech Site'),
(25640, '127.0.0.1', NULL, NULL, NULL, NULL, '02:36:10', '2026-04-08', 'http://127.0.0.1:8000/interior-project/Office', 'interior-project/Office', 'GET', 'EduInnTech Site'),
(25641, '127.0.0.1', NULL, NULL, NULL, NULL, '02:36:12', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25642, '127.0.0.1', NULL, NULL, NULL, NULL, '02:36:13', '2026-04-08', 'http://127.0.0.1:8000/interior-project/site.webmanifest', 'interior-project/site.webmanifest', 'GET', 'EduInnTech Site'),
(25643, '127.0.0.1', NULL, NULL, NULL, NULL, '02:36:14', '2026-04-08', 'http://127.0.0.1:8000/interior-project/site.webmanifest', 'interior-project/site.webmanifest', 'GET', 'EduInnTech Site'),
(25644, '127.0.0.1', NULL, NULL, NULL, NULL, '02:36:16', '2026-04-08', 'http://127.0.0.1:8000/interior-project/site.webmanifest', 'interior-project/site.webmanifest', 'GET', 'EduInnTech Site'),
(25645, '127.0.0.1', NULL, NULL, NULL, NULL, '02:36:37', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25646, '127.0.0.1', NULL, NULL, NULL, NULL, '02:37:13', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25647, '127.0.0.1', NULL, NULL, NULL, NULL, '02:37:41', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25648, '127.0.0.1', NULL, NULL, NULL, NULL, '02:37:56', '2026-04-08', 'http://127.0.0.1:8000/services', 'services', 'GET', 'EduInnTech Site'),
(25649, '127.0.0.1', NULL, NULL, NULL, NULL, '02:38:07', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25650, '127.0.0.1', NULL, NULL, NULL, NULL, '02:38:28', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25651, '127.0.0.1', NULL, NULL, NULL, NULL, '02:38:43', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25652, '127.0.0.1', NULL, NULL, NULL, NULL, '02:38:54', '2026-04-08', 'http://127.0.0.1:8000/interior-project/Office', 'interior-project/Office', 'GET', 'EduInnTech Site'),
(25653, '127.0.0.1', NULL, NULL, NULL, NULL, '02:38:55', '2026-04-08', 'http://127.0.0.1:8000/interior-project/site.webmanifest', 'interior-project/site.webmanifest', 'GET', 'EduInnTech Site'),
(25654, '127.0.0.1', NULL, NULL, NULL, NULL, '02:39:04', '2026-04-08', 'http://127.0.0.1:8000/about-us', 'about-us', 'GET', 'EduInnTech Site'),
(25655, '127.0.0.1', NULL, NULL, NULL, NULL, '02:39:08', '2026-04-08', 'http://127.0.0.1:8000/portfolio', 'portfolio', 'GET', 'EduInnTech Site'),
(25656, '127.0.0.1', NULL, NULL, NULL, NULL, '02:39:11', '2026-04-08', 'http://127.0.0.1:8000/about-us', 'about-us', 'GET', 'EduInnTech Site'),
(25657, '127.0.0.1', NULL, NULL, NULL, NULL, '02:39:13', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25658, '127.0.0.1', NULL, NULL, NULL, NULL, '02:40:02', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25659, '127.0.0.1', NULL, NULL, NULL, NULL, '02:40:20', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25660, '127.0.0.1', NULL, NULL, NULL, NULL, '02:41:50', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25661, '127.0.0.1', NULL, NULL, NULL, NULL, '02:42:39', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25662, '127.0.0.1', NULL, NULL, NULL, NULL, '02:43:01', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25663, '127.0.0.1', NULL, NULL, NULL, NULL, '02:45:00', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25664, '127.0.0.1', NULL, NULL, NULL, NULL, '02:45:10', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25665, '127.0.0.1', NULL, NULL, NULL, NULL, '02:45:29', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25666, '127.0.0.1', NULL, NULL, NULL, NULL, '02:45:33', '2026-04-08', 'http://127.0.0.1:8000/portfolio', 'portfolio', 'GET', 'EduInnTech Site'),
(25667, '127.0.0.1', NULL, NULL, NULL, NULL, '02:46:28', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25668, '127.0.0.1', NULL, NULL, NULL, NULL, '02:46:50', '2026-04-08', 'http://127.0.0.1:8000/contact-us', 'contact-us', 'GET', 'EduInnTech Site'),
(25669, '127.0.0.1', NULL, NULL, NULL, NULL, '02:46:53', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25670, '127.0.0.1', NULL, NULL, NULL, NULL, '02:47:09', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25671, '127.0.0.1', NULL, NULL, NULL, NULL, '02:47:25', '2026-04-08', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25672, '127.0.0.1', NULL, NULL, NULL, NULL, '02:47:28', '2026-04-08', 'http://127.0.0.1:8000/services', 'services', 'GET', 'EduInnTech Site'),
(25673, '127.0.0.1', NULL, NULL, NULL, NULL, '02:47:34', '2026-04-08', 'http://127.0.0.1:8000/portfolio', 'portfolio', 'GET', 'EduInnTech Site'),
(25674, '127.0.0.1', NULL, NULL, NULL, NULL, '02:47:52', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25675, '127.0.0.1', NULL, NULL, NULL, NULL, '02:48:12', '2026-04-08', 'http://127.0.0.1:8000/contact-us', 'contact-us', 'GET', 'EduInnTech Site'),
(25676, '127.0.0.1', NULL, NULL, NULL, NULL, '02:48:15', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25677, '127.0.0.1', NULL, NULL, NULL, NULL, '02:57:03', '2026-04-08', 'http://127.0.0.1:8000/services', 'services', 'GET', 'EduInnTech Site'),
(25678, '127.0.0.1', NULL, NULL, NULL, NULL, '02:57:08', '2026-04-08', 'http://127.0.0.1:8000/contact-us', 'contact-us', 'GET', 'EduInnTech Site'),
(25679, '127.0.0.1', NULL, NULL, NULL, NULL, '02:57:10', '2026-04-08', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25680, '127.0.0.1', NULL, NULL, NULL, NULL, '03:02:38', '2026-04-08', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25681, '127.0.0.1', NULL, NULL, NULL, NULL, '03:02:51', '2026-04-08', 'http://127.0.0.1:8000/projects/interior', 'projects/interior', 'GET', 'EduInnTech Site'),
(25682, '127.0.0.1', NULL, NULL, NULL, NULL, '03:02:54', '2026-04-08', 'http://127.0.0.1:8000/interior-project/Office', 'interior-project/Office', 'GET', 'EduInnTech Site'),
(25683, '127.0.0.1', NULL, NULL, NULL, NULL, '03:02:55', '2026-04-08', 'http://127.0.0.1:8000/interior-project/site.webmanifest', 'interior-project/site.webmanifest', 'GET', 'EduInnTech Site'),
(25684, '127.0.0.1', NULL, NULL, NULL, NULL, '03:02:56', '2026-04-08', 'http://127.0.0.1:8000/interior-project/site.webmanifest', 'interior-project/site.webmanifest', 'GET', 'EduInnTech Site'),
(25685, '127.0.0.1', NULL, NULL, NULL, NULL, '03:16:06', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25686, '127.0.0.1', NULL, NULL, NULL, NULL, '03:28:10', '2026-04-08', 'http://127.0.0.1:8000/interior-project/Office', 'interior-project/Office', 'GET', 'EduInnTech Site'),
(25687, '127.0.0.1', NULL, NULL, NULL, NULL, '03:28:12', '2026-04-08', 'http://127.0.0.1:8000/interior-project/site.webmanifest', 'interior-project/site.webmanifest', 'GET', 'EduInnTech Site'),
(25688, '127.0.0.1', NULL, NULL, NULL, NULL, '03:28:14', '2026-04-08', 'http://127.0.0.1:8000/interior-project/site.webmanifest', 'interior-project/site.webmanifest', 'GET', 'EduInnTech Site'),
(25689, '127.0.0.1', NULL, NULL, NULL, NULL, '03:32:27', '2026-04-08', 'http://127.0.0.1:8000/services', 'services', 'GET', 'EduInnTech Site'),
(25690, '127.0.0.1', NULL, NULL, NULL, NULL, '03:32:29', '2026-04-08', 'http://127.0.0.1:8000/portfolio', 'portfolio', 'GET', 'EduInnTech Site'),
(25691, '127.0.0.1', NULL, NULL, NULL, NULL, '03:32:32', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25692, '127.0.0.1', NULL, NULL, NULL, NULL, '03:32:38', '2026-04-08', 'http://127.0.0.1:8000/portfolio', 'portfolio', 'GET', 'EduInnTech Site'),
(25693, '127.0.0.1', NULL, NULL, NULL, NULL, '03:34:21', '2026-04-08', 'http://127.0.0.1:8000/portfolio', 'portfolio', 'GET', 'EduInnTech Site'),
(25694, '127.0.0.1', NULL, NULL, NULL, NULL, '03:35:06', '2026-04-08', 'http://127.0.0.1:8000/portfolio', 'portfolio', 'GET', 'EduInnTech Site'),
(25695, '127.0.0.1', NULL, NULL, NULL, NULL, '03:35:30', '2026-04-08', 'http://127.0.0.1:8000/services', 'services', 'GET', 'EduInnTech Site'),
(25696, '127.0.0.1', NULL, NULL, NULL, NULL, '03:35:32', '2026-04-08', 'http://127.0.0.1:8000/portfolio', 'portfolio', 'GET', 'EduInnTech Site'),
(25697, '127.0.0.1', NULL, NULL, NULL, NULL, '03:35:36', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25698, '127.0.0.1', NULL, NULL, NULL, NULL, '03:35:40', '2026-04-08', 'http://127.0.0.1:8000/portfolio', 'portfolio', 'GET', 'EduInnTech Site'),
(25699, '127.0.0.1', NULL, NULL, NULL, NULL, '03:41:23', '2026-04-08', 'http://127.0.0.1:8000/portfolio', 'portfolio', 'GET', 'EduInnTech Site'),
(25700, '127.0.0.1', NULL, NULL, NULL, NULL, '03:41:40', '2026-04-08', 'http://127.0.0.1:8000/portfolio', 'portfolio', 'GET', 'EduInnTech Site'),
(25701, '127.0.0.1', NULL, NULL, NULL, NULL, '03:41:53', '2026-04-08', 'http://127.0.0.1:8000/portfolio', 'portfolio', 'GET', 'EduInnTech Site'),
(25702, '127.0.0.1', NULL, NULL, NULL, NULL, '03:42:12', '2026-04-08', 'http://127.0.0.1:8000/portfolio', 'portfolio', 'GET', 'EduInnTech Site'),
(25703, '127.0.0.1', NULL, NULL, NULL, NULL, '03:42:34', '2026-04-08', 'http://127.0.0.1:8000/portfolio', 'portfolio', 'GET', 'EduInnTech Site'),
(25704, '127.0.0.1', NULL, NULL, NULL, NULL, '03:43:24', '2026-04-08', 'http://127.0.0.1:8000/portfolio', 'portfolio', 'GET', 'EduInnTech Site'),
(25705, '127.0.0.1', NULL, NULL, NULL, NULL, '03:44:09', '2026-04-08', 'http://127.0.0.1:8000/portfolio', 'portfolio', 'GET', 'EduInnTech Site'),
(25706, '127.0.0.1', NULL, NULL, NULL, NULL, '03:44:43', '2026-04-08', 'http://127.0.0.1:8000/portfolio', 'portfolio', 'GET', 'EduInnTech Site'),
(25707, '127.0.0.1', NULL, NULL, NULL, NULL, '03:45:04', '2026-04-08', 'http://127.0.0.1:8000/portfolio', 'portfolio', 'GET', 'EduInnTech Site'),
(25708, '127.0.0.1', NULL, NULL, NULL, NULL, '03:45:18', '2026-04-08', 'http://127.0.0.1:8000/portfolio', 'portfolio', 'GET', 'EduInnTech Site'),
(25709, '127.0.0.1', NULL, NULL, NULL, NULL, '03:45:33', '2026-04-08', 'http://127.0.0.1:8000/portfolio', 'portfolio', 'GET', 'EduInnTech Site'),
(25710, '127.0.0.1', NULL, NULL, NULL, NULL, '03:49:42', '2026-04-08', 'http://127.0.0.1:8000/portfolio', 'portfolio', 'GET', 'EduInnTech Site'),
(25711, '127.0.0.1', NULL, NULL, NULL, NULL, '03:50:52', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25712, '127.0.0.1', NULL, NULL, NULL, NULL, '03:51:07', '2026-04-08', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25713, '127.0.0.1', NULL, NULL, NULL, NULL, '03:55:51', '2026-04-08', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25714, '127.0.0.1', NULL, NULL, NULL, NULL, '03:56:29', '2026-04-08', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25715, '127.0.0.1', NULL, NULL, NULL, NULL, '03:57:55', '2026-04-08', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25716, '127.0.0.1', NULL, NULL, NULL, NULL, '03:58:28', '2026-04-08', 'http://127.0.0.1:8000/quotation', 'quotation', 'GET', 'EduInnTech Site'),
(25717, '127.0.0.1', NULL, NULL, NULL, NULL, '03:58:37', '2026-04-08', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25718, '127.0.0.1', NULL, NULL, NULL, NULL, '03:59:07', '2026-04-08', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25719, '127.0.0.1', NULL, NULL, NULL, NULL, '04:00:29', '2026-04-08', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25720, '127.0.0.1', NULL, NULL, NULL, NULL, '04:02:16', '2026-04-08', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25721, '127.0.0.1', NULL, NULL, NULL, NULL, '04:03:15', '2026-04-08', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25722, '127.0.0.1', NULL, NULL, NULL, NULL, '04:04:21', '2026-04-08', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25723, '127.0.0.1', NULL, NULL, NULL, NULL, '04:06:09', '2026-04-08', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25724, '127.0.0.1', NULL, NULL, NULL, NULL, '04:07:30', '2026-04-08', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25725, '127.0.0.1', NULL, NULL, NULL, NULL, '04:08:10', '2026-04-08', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25726, '127.0.0.1', NULL, NULL, NULL, NULL, '04:08:44', '2026-04-08', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25727, '127.0.0.1', NULL, NULL, NULL, NULL, '04:10:29', '2026-04-08', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25728, '127.0.0.1', NULL, NULL, NULL, NULL, '04:11:10', '2026-04-08', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25729, '127.0.0.1', NULL, NULL, NULL, NULL, '04:12:58', '2026-04-08', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25730, '127.0.0.1', NULL, NULL, NULL, NULL, '04:14:33', '2026-04-08', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25731, '127.0.0.1', NULL, NULL, NULL, NULL, '04:15:50', '2026-04-08', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25732, '127.0.0.1', NULL, NULL, NULL, NULL, '04:17:22', '2026-04-08', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25733, '127.0.0.1', NULL, NULL, NULL, NULL, '04:17:32', '2026-04-08', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25734, '127.0.0.1', NULL, NULL, NULL, NULL, '04:20:28', '2026-04-08', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site'),
(25735, '127.0.0.1', NULL, NULL, NULL, NULL, '04:21:23', '2026-04-08', 'http://127.0.0.1:8000', '/', 'GET', 'EduInnTech Site');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_contactus_message`
--

CREATE TABLE `visitor_contactus_message` (
  `id` int(11) NOT NULL,
  `visitor_name` varchar(100) DEFAULT NULL,
  `visitor_email` varchar(100) DEFAULT NULL,
  `visitor_contact_no` varchar(15) DEFAULT NULL,
  `visitor_message` varchar(1000) DEFAULT NULL,
  `subject` varchar(500) DEFAULT NULL,
  `submission_time` datetime DEFAULT NULL,
  `reply_status` varchar(20) DEFAULT NULL,
  `message_status` varchar(20) DEFAULT 'Received',
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitor_contactus_message`
--

INSERT INTO `visitor_contactus_message` (`id`, `visitor_name`, `visitor_email`, `visitor_contact_no`, `visitor_message`, `subject`, `submission_time`, `reply_status`, `message_status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(7, 'Saidur Rahman', 'sabiq@eduinntech.com', NULL, 'asdasdfasdfasdfasdf', 'asdfa sdfasdfasdf', NULL, NULL, 'Received', NULL, '2026-02-27 10:30:28', NULL, '2026-02-27 10:30:28'),
(8, 'Saidur Rahman', 'sabiq@eduinntech.com', '01705417271', 'asdfasdfasd', 'asdfa sdfasdfasdf', NULL, NULL, 'Received', NULL, '2026-02-27 10:34:01', NULL, '2026-02-27 10:34:01'),
(9, 'Saidur Rahman', 'sabiq@eduinntech.com', '01705417271', 'sdfa sdafsd asdf asdf', 'asdfa sdfasdfasdf', NULL, NULL, 'Received', NULL, '2026-02-27 10:38:58', NULL, '2026-02-27 10:38:58'),
(10, 'Saidur Rahman', 'info@cholokrishi.com', '01705417271', 'DSf asdfasdf asd', 'sdfasdfas fdas', NULL, NULL, 'Received', NULL, '2026-02-27 10:41:20', NULL, '2026-02-27 10:41:20'),
(11, 'Saidur Rahman', 'sabiq@eduinntech.com', '01705417271', 'bbbb bbbb bbbbgf   f fg fg', 'asdfa sdfasdfasdf', NULL, NULL, 'Received', NULL, '2026-02-28 10:07:15', NULL, '2026-02-28 10:07:15');

-- --------------------------------------------------------

--
-- Table structure for table `website_pages`
--

CREATE TABLE `website_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `read_count` int(11) DEFAULT NULL,
  `status` enum('Draft','Published') NOT NULL DEFAULT 'Draft',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `website_pages`
--

INSERT INTO `website_pages` (`id`, `title`, `slug`, `content`, `category_id`, `meta_title`, `meta_description`, `meta_keywords`, `read_count`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'Privacy Policy', 'privacy-policy', '<!DOCTYPE html>\r\n<html lang=\"en\">\r\n<head>\r\n    <meta charset=\"UTF-8\">\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n    <title>About Us</title>\r\n    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap\" rel=\"stylesheet\">\r\n    <style>\r\n        /* General Styles */\r\n        body {\r\n            font-family: \'Poppins\', sans-serif;\r\n            margin: 0;\r\n            padding: 0;\r\n            line-height: 1.6;\r\n            color: #333;\r\n            background-color: #f4f4f4;\r\n        }\r\n\r\n        .container {\r\n            max-width: 1100px;\r\n            margin: auto;\r\n            overflow: hidden;\r\n            padding: 0 2rem;\r\n        }\r\n\r\n        h1, h2, h3 {\r\n            font-weight: 600;\r\n            margin-bottom: 1rem;\r\n        }\r\n\r\n        p {\r\n            margin-bottom: 1.5rem;\r\n        }\r\n\r\n        /* Navbar */\r\n        .navbar {\r\n            display: flex;\r\n            justify-content: space-between;\r\n            align-items: center;\r\n            background: #fff;\r\n            padding: 1rem 2rem;\r\n            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);\r\n        }\r\n\r\n        .logo {\r\n            font-size: 1.5rem;\r\n            font-weight: 600;\r\n            color: #4CAF50;\r\n            text-decoration: none;\r\n        }\r\n\r\n        .nav-links {\r\n            list-style: none;\r\n            display: flex;\r\n        }\r\n\r\n        .nav-links li {\r\n            margin-left: 20px;\r\n        }\r\n\r\n        .nav-links a {\r\n            color: #555;\r\n            text-decoration: none;\r\n            font-weight: 400;\r\n            transition: color 0.3s ease;\r\n        }\r\n\r\n        .nav-links a:hover, .nav-links a.active {\r\n            color: #4CAF50;\r\n        }\r\n\r\n        /* Hero Section */\r\n        .hero {\r\n            background: url(\'https://images.unsplash.com/photo-1542744095-291d1f67b57b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D\') no-repeat center center/cover;\r\n            height: 40vh;\r\n            display: flex;\r\n            justify-content: center;\r\n            align-items: center;\r\n            text-align: center;\r\n            color: #fff;\r\n            position: relative;\r\n        }\r\n\r\n        .hero::before {\r\n            content: \'\';\r\n            position: absolute;\r\n            top: 0;\r\n            left: 0;\r\n            width: 100%;\r\n            height: 100%;\r\n            background-color: rgba(0, 0, 0, 0.5);\r\n        }\r\n\r\n        .hero-content {\r\n            position: relative;\r\n            z-index: 1;\r\n        }\r\n\r\n        .hero h1 {\r\n            font-size: 3rem;\r\n            margin-bottom: 0.5rem;\r\n        }\r\n\r\n        .hero p {\r\n            font-size: 1.2rem;\r\n            max-width: 600px;\r\n            margin: auto;\r\n        }\r\n\r\n        /* About Section */\r\n        .about-section {\r\n            padding: 4rem 0;\r\n            background: #fff;\r\n        }\r\n\r\n        .about-content {\r\n            flex: 1;\r\n            padding-right: 2rem;\r\n        }\r\n\r\n        .about-content h2 {\r\n            color: #4CAF50;\r\n        }\r\n\r\n        .about-image {\r\n            flex: 1;\r\n            text-align: center;\r\n        }\r\n\r\n        .about-image img {\r\n            width: 100%;\r\n            max-width: 500px;\r\n            height: auto;\r\n            border-radius: 10px;\r\n            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);\r\n        }\r\n\r\n        .about-section .container {\r\n            display: flex;\r\n            align-items: center;\r\n            gap: 2rem;\r\n        }\r\n\r\n        /* Team Section */\r\n        .team-section {\r\n            background-color: #f9f9f9;\r\n            padding: 4rem 0;\r\n            text-align: center;\r\n        }\r\n\r\n        .team-section h2 {\r\n            color: #4CAF50;\r\n            margin-bottom: 3rem;\r\n        }\r\n\r\n        .team-grid {\r\n            display: grid;\r\n            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));\r\n            gap: 2rem;\r\n        }\r\n\r\n        .team-member {\r\n            background: #fff;\r\n            padding: 2rem;\r\n            border-radius: 10px;\r\n            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);\r\n            transition: transform 0.3s ease;\r\n        }\r\n\r\n        .team-member:hover {\r\n            transform: translateY(-10px);\r\n        }\r\n\r\n        .team-member img {\r\n            width: 150px;\r\n            height: 150px;\r\n            border-radius: 50%;\r\n            object-fit: cover;\r\n            margin-bottom: 1rem;\r\n            border: 3px solid #4CAF50;\r\n        }\r\n\r\n        .team-member h3 {\r\n            margin: 0;\r\n            color: #333;\r\n        }\r\n\r\n        .team-member p {\r\n            color: #777;\r\n            font-weight: 300;\r\n        }\r\n\r\n        /* Footer */\r\n        footer {\r\n            background: #333;\r\n            color: #fff;\r\n            text-align: center;\r\n            padding: 1.5rem 0;\r\n        }\r\n\r\n        footer p {\r\n            margin: 0;\r\n        }\r\n\r\n        /* Media Queries for responsiveness */\r\n        @media (max-width: 768px) {\r\n            .navbar {\r\n                flex-direction: column;\r\n                text-align: center;\r\n            }\r\n\r\n            .nav-links {\r\n                margin-top: 1rem;\r\n                flex-direction: column;\r\n                align-items: center;\r\n            }\r\n\r\n            .nav-links li {\r\n                margin: 10px 0;\r\n            }\r\n\r\n            .about-section .container {\r\n                flex-direction: column;\r\n            }\r\n\r\n            .about-content {\r\n                padding-right: 0;\r\n            }\r\n        }\r\n    </style>\r\n</head>\r\n<body>\r\n    <header>\r\n        <nav class=\"navbar\">\r\n            <a href=\"#\" class=\"logo\">Company Logo</a>\r\n            <ul class=\"nav-links\">\r\n                <li><a href=\"#\">Home</a></li>\r\n                <li><a href=\"#\" class=\"active\">About Us</a></li>\r\n                <li><a href=\"#\">Services</a></li>\r\n                <li><a href=\"#\">Contact</a></li>\r\n            </ul>\r\n        </nav>\r\n    </header>\r\n\r\n    <main>\r\n        <section class=\"hero\">\r\n            <div class=\"hero-content\">\r\n                <h1>Our Story</h1>\r\n                <p>Learn about our mission, vision, and the people behind our success.</p>\r\n            </div>\r\n        </section>\r\n\r\n        <section class=\"about-section\">\r\n            <div class=\"container\">\r\n                <div class=\"about-content\">\r\n                    <h2>Who We Are</h2>\r\n                    <p>We are a passionate team dedicated to delivering high-quality solutions that make a difference. Our journey began with a simple idea: to create a product that not only meets but exceeds our customers\' expectations. We believe in innovation, integrity, and putting our customers first.</p>\r\n                    \r\n                    <h3>Our Mission</h3>\r\n                    <p>To empower businesses and individuals through cutting-edge technology and exceptional service.</p>\r\n\r\n                    <h3>Our Vision</h3>\r\n                    <p>To be a global leader in our industry, known for our commitment to excellence and our positive impact on the world.</p>\r\n                </div>\r\n                <div class=\"about-image\">\r\n                    <img src=\"https://images.unsplash.com/photo-1552581234-2c555364175b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D\" alt=\"Team collaborating\">\r\n                </div>\r\n            </div>\r\n        </section>\r\n\r\n        <section class=\"team-section\">\r\n            <div class=\"container\">\r\n                <h2>Meet the Team</h2>\r\n                <div class=\"team-grid\">\r\n                    <div class=\"team-member\">\r\n                        <img src=\"https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D\" alt=\"Jane Doe\">\r\n                        <h3>Jane Doe</h3>\r\n                        <p>CEO & Founder</p>\r\n                    </div>\r\n                    <div class=\"team-member\">\r\n                        <img src=\"https://images.unsplash.com/photo-1544723795-3fb6469f5b89?q=80&w=1956&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D\" alt=\"John Smith\">\r\n                        <h3>John Smith</h3>\r\n                        <p>Chief Technology Officer</p>\r\n                    </div>\r\n                    <div class=\"team-member\">\r\n                        <img src=\"https://images.unsplash.com/photo-1599566150163-29194dcaad36?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D\" alt=\"Emily White\">\r\n                        <h3>Emily White</h3>\r\n                        <p>Lead Designer</p>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </section>\r\n    </main>\r\n\r\n    <footer>\r\n        <div class=\"container\">\r\n            <p>&copy; 2024 Your Company. All rights reserved.</p>\r\n        </div>\r\n    </footer>\r\n</body>\r\n</html>', NULL, 'Privacy Policy - My Website', 'Read our privacy policy to understand how we handle your data.', 'privacy, policy, data protection, user privacy', 92, 'Published', 1, 1, '2025-09-05 20:17:55', '2025-09-05 20:17:55'),
(7, 'Software Architecture', 'software-architecture', '<!DOCTYPE html>\r\n<html lang=\"en\">\r\n<head>\r\n    <meta charset=\"UTF-8\">\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n    <title>Software Architecture</title>\r\n    <style>\r\n        body {\r\n            font-family: Arial, sans-serif;\r\n            line-height: 1.6;\r\n            margin: 0;\r\n            padding: 0;\r\n            background-color: #f4f4f4;\r\n            color: #333;\r\n        }\r\n        header {\r\n            background: #333;\r\n            color: #fff;\r\n            padding: 1rem 0;\r\n            text-align: center;\r\n        }\r\n        .container {\r\n            width: 80%;\r\n            margin: auto;\r\n            overflow: hidden;\r\n            padding: 2rem 0;\r\n        }\r\n        h1, h2, h3 {\r\n            color: #333;\r\n        }\r\n        .section {\r\n            background: #fff;\r\n            padding: 20px;\r\n            margin-bottom: 20px;\r\n            border-radius: 8px;\r\n            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);\r\n        }\r\n        .section-title {\r\n            border-bottom: 2px solid #ccc;\r\n            padding-bottom: 10px;\r\n            margin-bottom: 20px;\r\n        }\r\n        ul {\r\n            list-style-type: none;\r\n            padding: 0;\r\n        }\r\n        ul li {\r\n            background: #eee;\r\n            margin: 5px 0;\r\n            padding: 10px;\r\n            border-left: 5px solid #555;\r\n            transition: border-left 0.3s ease;\r\n        }\r\n        ul li:hover {\r\n            border-left: 5px solid #007BFF;\r\n        }\r\n        .code-block {\r\n            background: #282c34;\r\n            color: #fff;\r\n            padding: 15px;\r\n            border-radius: 5px;\r\n            overflow-x: auto;\r\n            font-family: \'Courier New\', Courier, monospace;\r\n        }\r\n        .section img {\r\n            max-width: 100%;\r\n            height: auto;\r\n            display: block; /* Ensures the image takes its own line */\r\n            margin: 20px auto; /* Centers the image */\r\n            border-radius: 5px;\r\n            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);\r\n        }\r\n        footer {\r\n            text-align: center;\r\n            padding: 1rem 0;\r\n            background: #333;\r\n            color: #fff;\r\n            margin-top: 20px;\r\n        }\r\n    </style>\r\n</head>\r\n<body>\r\n\r\n    <header>\r\n        <h1>Software Architecture</h1>\r\n        <p>The Foundation of a Robust System</p>\r\n    </header>\r\n\r\n    <div class=\"container\">\r\n\r\n        <div class=\"section\">\r\n            <h2 class=\"section-title\">What is Software Architecture?</h2>\r\n            <p>\r\n                Software architecture refers to the fundamental structures of a software system and the discipline of creating such structures and systems. Each structure comprises software elements, their externally visible properties, and the relationships among them.\r\n            </p>\r\n            <p>\r\n                It is concerned with making high-level design choices and defining the overall blueprint of the system. These choices impact the system\'s performance, maintainability, scalability, and security.\r\n            </p>\r\n            <p>Here\'s a visual representation of how architecture forms the backbone:</p>\r\n            <img src=\"https://via.placeholder.com/600x300?text=Software+Architecture+Concept\" alt=\"Software Architecture Concept\">\r\n        </div>\r\n\r\n        <div class=\"section\">\r\n            <h2 class=\"section-title\">Key Architectural Patterns</h2>\r\n            <p>Architectural patterns are reusable solutions to common problems in software architecture. They help developers and architects communicate and structure their systems more effectively.</p>\r\n            <ul>\r\n                <li>\r\n                    <strong>Monolithic Architecture:</strong> A traditional, single-tiered software application where all components are tightly coupled and run together as one service.\r\n                </li>\r\n                <li>\r\n                    <strong>Microservices Architecture:</strong> An application is broken down into a collection of small, independent services, each running in its own process and communicating with other services.\r\n                    <p>A visual of microservices communication:</p>\r\n                    <img src=\"https://via.placeholder.com/600x300?text=Microservices+Diagram\" alt=\"Microservices Diagram\">\r\n                </li>\r\n                <li>\r\n                    <strong>Layered (N-Tier) Architecture:</strong> The system is divided into logical layers, such as Presentation, Business Logic, and Data Access, to separate concerns.\r\n                    <p>An example of a layered architecture:</p>\r\n                    <img src=\"https://via.placeholder.com/600x300?text=Layered+Architecture+Diagram\" alt=\"Layered Architecture Diagram\">\r\n                </li>\r\n                <li><strong>Event-Driven Architecture:</strong> Components are decoupled and communicate through events. A central message queue or broker facilitates this communication.</li>\r\n                <li><strong>Client-Server Architecture:</strong> A distributed application structure that partitions tasks or workloads between the providers of a resource or service (servers) and service requesters (clients).</li>\r\n            </ul>\r\n        </div>\r\n\r\n        <div class=\"section\">\r\n            <h2 class=\"section-title\">Architectural Principles</h2>\r\n            <p>Good software architecture is guided by several key principles:</p>\r\n            <ul>\r\n                <li><strong>Separation of Concerns:</strong> Dividing a computer program into distinct sections, such that each section addresses a separate concern.</li>\r\n                <li><strong>Loose Coupling:</strong> Components are independent and have minimal dependencies on each other.</li>\r\n                <li><strong>High Cohesion:</strong> The elements within a module or component belong together and work to achieve a single, well-defined purpose.</li>\r\n                <li><strong>Scalability:</strong> The ability of the system to handle a growing amount of work by adding resources.</li>\r\n                <li><strong>Maintainability:</strong> The ease with which a system can be modified, corrected, or enhanced.</li>\r\n            </ul>\r\n        </div>\r\n\r\n        <div class=\"section\">\r\n            <h2 class=\"section-title\">Example: Simple Microservices Diagram</h2>\r\n            <p>This is a conceptual diagram of a simple microservices architecture.</p>\r\n            <div class=\"code-block\">\r\n            \r\n            </div>\r\n        </div>\r\n\r\n    </div>\r\n\r\n    <footer>\r\n        <p>&copy; 2025 EduINNTECH. All Rights Reserved.</p>\r\n    </footer>\r\n\r\n</body>\r\n</html>', 4, NULL, NULL, NULL, 97, 'Published', 2, 2, '2025-09-06 08:17:42', '2025-09-06 08:28:28'),
(8, 'Sysstem design principal', 'sysstem-design-principal', '<!doctype html>\r\n<html lang=\"en\">\r\n<head>\r\n  <meta charset=\"utf-8\" />\r\n  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />\r\n  <title>System Design Principles — Example</title>\r\n  <link href=\"https://cdn.jsdelivr.net/npm/prismjs@1.29.0/themes/prism.css\" rel=\"stylesheet\" />\r\n  <style>\r\n    :root{--bg:#0f1724;--card:#0b1220;--muted:#94a3b8;--accent:#7c3aed}\r\n    body{font-family:Inter,ui-sans-serif,system-ui,-apple-system,\"Segoe UI\",Roboto,\"Helvetica Neue\",Arial;margin:0;background:linear-gradient(180deg,#071029 0%, #081025 100%);color:#e6eef6}\r\n    header{padding:28px 32px;border-bottom:1px solid rgba(255,255,255,0.03)}\r\n    .container{max-width:1000px;margin:28px auto;padding:0 16px}\r\n    h1{font-size:26px;margin:0 0 8px}\r\n    p.lead{color:var(--muted);margin-top:0}\r\n    .grid{display:grid;grid-template-columns:1fr 360px;gap:20px}\r\n    .card{background:linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));border:1px solid rgba(255,255,255,0.03);padding:18px;border-radius:12px;box-shadow:0 6px 18px rgba(2,6,23,0.6)}\r\n    .principle{margin-bottom:12px}\r\n    .principle h3{margin:0 0 6px;font-size:18px}\r\n    .muted{color:var(--muted);font-size:14px}\r\n    pre{overflow:auto;border-radius:8px;padding:12px}\r\n    .example-title{display:flex;justify-content:space-between;align-items:center}\r\n    .btn{background:var(--accent);color:white;padding:6px 10px;border-radius:8px;border:none;cursor:pointer}\r\n    aside .card{position:sticky;top:20px}\r\n    footer{max-width:1000px;margin:20px auto 60px;color:var(--muted);font-size:13px;padding:0 16px}\r\n    .pill{display:inline-block;background:rgba(124,58,237,0.12);color:var(--accent);padding:6px 8px;border-radius:999px;font-size:12px}\r\n    details summary{cursor:pointer}\r\n  </style>\r\n</head>\r\n<body>\r\n  <header>\r\n    <div class=\"container\">\r\n      <h1>System Design Principles</h1>\r\n      <p class=\"lead\">A concise reference of core system design principles with short examples and an architecture snippet (copy the HTML to use locally).</p>\r\n    </div>\r\n  </header>\r\n\r\n  <main class=\"container\">\r\n    <div class=\"grid\">\r\n      <section class=\"card\">\r\n        <div class=\"principle\">\r\n          <h3>1. Scalability</h3>\r\n          <p class=\"muted\">Design systems that handle growth in load by adding resources (vertical) or adding more machines (horizontal).</p>\r\n          <ul>\r\n            <li>Prefer horizontal scaling where possible.</li>\r\n            <li>Stateless services simplify scaling.</li>\r\n          </ul>\r\n        </div>\r\n\r\n        <div class=\"principle\">\r\n          <h3>2. Availability & Reliability</h3>\r\n          <p class=\"muted\">Keep the system responsive and correct despite failures.</p>\r\n          <ul>\r\n            <li>Use redundancy and failover.</li>\r\n            <li>Design for graceful degradation.</li>\r\n          </ul>\r\n        </div>\r\n\r\n        <div class=\"principle\">\r\n          <h3>3. Partitioning (Sharding)</h3>\r\n          <p class=\"muted\">Split data/work across multiple nodes to reduce per-node load.</p>\r\n          <ul>\r\n            <li>Shard by user ID, geography, or time-window depending on access patterns.</li>\r\n          </ul>\r\n        </div>\r\n\r\n        <div class=\"principle\">\r\n          <h3>4. Data Consistency & CAP Tradeoffs</h3>\r\n          <p class=\"muted\">Understand CAP: Consistency, Availability, Partition tolerance — you cannot fully have all three in distributed systems.</p>\r\n          <ul>\r\n            <li>Choose between strong consistency (synchronous replication) or eventual consistency (async replication) based on requirements.</li>\r\n          </ul>\r\n        </div>\r\n\r\n        <div class=\"principle\">\r\n          <h3>5. Caching</h3>\r\n          <p class=\"muted\">Reduce latency and load with caches (CDN, in-memory caches like Redis).</p>\r\n          <ul>\r\n            <li>Cache invalidation is hard—use TTL and versioning.</li>\r\n          </ul>\r\n        </div>\r\n\r\n        <div class=\"principle\">\r\n          <h3>6. Load Balancing</h3>\r\n          <p class=\"muted\">Distribute traffic across servers to avoid hotspots and single points of failure.</p>\r\n        </div>\r\n\r\n        <div class=\"principle\">\r\n          <h3>7. Observability</h3>\r\n          <p class=\"muted\">Logs, metrics, and traces help detect and diagnose problems quickly.</p>\r\n          <ul>\r\n            <li>Instrument key business flows; set meaningful alerts.</li>\r\n          </ul>\r\n        </div>\r\n\r\n        <div class=\"principle\">\r\n          <h3>8. Security & Privacy</h3>\r\n          <p class=\"muted\">Always design with threat models, least privilege, encryption in transit and at rest.</p>\r\n        </div>\r\n\r\n        <hr />\r\n\r\n        <div class=\"example\">\r\n          <div class=\"example-title\"><strong>Example: URL Shortener (high-level)</strong> <span class=\"pill\">Quick</span></div>\r\n          <pre><code class=\"language-js\">// Components (high level)\r\n// - API servers (stateless)\r\n// - Database (sharded), e.g., user-based shards\r\n// - Cache (Redis) for lookups\r\n// - Message queue for async analytics\r\n\r\n// Flow:\r\n// 1. Client -> Load Balancer -> API Server\r\n// 2. API checks cache for short->long mapping\r\n// 3. If miss, read from DB and populate cache\r\n// 4. Writes: generate ID, write to DB and invalidate related caches\r\n</code></pre>\r\n        </div>\r\n\r\n        <details>\r\n          <summary><strong>Architecture snippet (ASCII)</strong></summary>\r\n          <pre><code>//   Internet\r\n//     |\r\n//  Load Balancer\r\n//  /    |    \\\r\n// API1 API2  API3   (stateless)\r\n//  |     |     |\r\n//  +-> Cache (Redis) <-+\r\n//  |                   |\r\n//  +-> DB (Shard A/B/C)+-> Message Queue -> Analytics\r\n</code></pre>\r\n        </details>\r\n\r\n      </section>\r\n\r\n      <aside>\r\n        <div class=\"card\">\r\n          <h3>Quick Tips</h3>\r\n          <ul>\r\n            <li>Start simple — iterate and measure.</li>\r\n            <li>Benchmark critical paths early.</li>\r\n            <li>Automate deployments and rollbacks.</li>\r\n            <li>Prefer simple, observable designs over clever ones.</li>\r\n          </ul>\r\n          <hr />\r\n          <h3>Mini Checklist</h3>\r\n          <ol>\r\n            <li>Are the services stateless where possible?</li>\r\n            <li>Is there a clear caching strategy?</li>\r\n            <li>Do you have redundancy for critical components?</li>\r\n            <li>Can you deploy changes safely (canary/blue-green)?</li>\r\n          </ol>\r\n          <hr />\r\n          <button class=\"btn\" id=\"showCode\">Show compact HTML snippet</button>\r\n          <div id=\"compact\" style=\"margin-top:12px;display:none\">\r\n            <pre><code class=\"language-markup\">&lt;!-- Compact example: basic health-check endpoint --&gt;\r\n&lt;script type=\"text/javascript\"&gt;\r\n  // pretend this is an API server health check\r\n  function health(){ return {status:\'ok\',uptime:process.uptime ? process.uptime() : \'n/a\'} }\r\n&lt;/script&gt;\r\n</code></pre>\r\n          </div>\r\n        </div>\r\n\r\n        <div class=\"card\" style=\"margin-top:16px\">\r\n          <h3>Further Reading</h3>\r\n          <p class=\"muted\">CAP theorem, load balancing algorithms, consensus (Raft/Paxos), distributed caches, and observability.</p>\r\n        </div>\r\n      </aside>\r\n    </div>\r\n  </main>\r\n\r\n  <footer>\r\n    <div class=\"container\">Created for: <strong>System Design Principles</strong> • Copy this file and open in a browser. Want a printable PDF or architecture SVG? Ask and I’ll add it.</div>\r\n  </footer>\r\n\r\n  <script src=\"https://cdn.jsdelivr.net/npm/prismjs@1.29.0/prism.js\"></script>\r\n  <script src=\"https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-javascript.min.js\"></script>\r\n  <script>\r\n    document.getElementById(\'showCode\').addEventListener(\'click\', function(){\r\n      var el = document.getElementById(\'compact\');\r\n      el.style.display = (el.style.display === \'none\') ? \'block\' : \'none\';\r\n    });\r\n  </script>\r\n</body>\r\n</html>', 5, NULL, NULL, NULL, 91, 'Published', 2, NULL, '2025-09-06 16:44:51', '2025-09-06 16:44:51'),
(9, 'Application Component Checklist', 'application-component-checklist', '<!doctype html>\r\n<html lang=\"en\">\r\n<head>\r\n  <meta charset=\"utf-8\" />\r\n  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />\r\n  <title>Application Component Checklist</title>\r\n  <link href=\"https://cdn.jsdelivr.net/npm/prismjs@1.29.0/themes/prism.css\" rel=\"stylesheet\" />\r\n   <style>\r\n    :root{--bg:#ffffff;--card:#f5f5f5;--muted:#555555;--accent:#7c3aed}\r\n    body{font-family:Inter,ui-sans-serif,system-ui,-apple-system,\"Segoe UI\",Roboto,\"Helvetica Neue\",Arial;margin:0;background:linear-gradient(180deg,#f0f4f8 0%, #d9e2ec 100%);color:#1a202c}\r\n    header{padding:28px 32px;border-bottom:1px solid rgba(0,0,0,0.05)}\r\n    .container{max-width:1000px;margin:28px auto;padding:0 16px}\r\n    h1{font-size:26px;margin:0 0 8px}\r\n    p.lead{color:var(--muted);margin-top:0}\r\n    .grid{display:grid;grid-template-columns:1fr;gap:20px}\r\n    .card{background:var(--card);border:1px solid rgba(0,0,0,0.05);padding:18px;border-radius:12px;box-shadow:0 6px 18px rgba(0,0,0,0.1)}\r\n    h3{margin-top:0}\r\n    .muted{color:var(--muted);font-size:14px}\r\n    ul,ol{margin:0 0 12px 20px}\r\n    footer{max-width:1000px;margin:20px auto 60px;color:var(--muted);font-size:13px;padding:0 16px;text-align:center}\r\n    .diagram{margin:30px auto;text-align:center}\r\n    .diagram img{max-width:100%;border-radius:10px;box-shadow:0 4px 12px rgba(0,0,0,0.1)}\r\n  </style>\r\n</head>\r\n<body>\r\n  <header>\r\n    <div class=\"container\">\r\n      <h1>Application Component Checklist</h1>\r\n      <p class=\"lead\">A detailed reference checklist to ensure every critical aspect of an application is designed, built, and maintained effectively.</p>\r\n    </div>\r\n  </header>\r\n\r\n  <main class=\"container\">\r\n    <div class=\"grid\">\r\n      <section class=\"card\">\r\n        <h3>Core Application Components (Detailed)</h3>\r\n        <ol>\r\n          <li><strong>User Interface (UI)</strong>\r\n            <ul>\r\n              <li><em>Description:</em> The UI is the layer through which users interact with the system, combining layout, design, and interaction flows.</li>\r\n              <li><em>Applications:</em> Web portals, mobile apps, dashboards, kiosks, and embedded device interfaces.</li>\r\n              <li><em>Best Practices:</em> Responsive design, accessibility (WCAG 2.1), consistent navigation, intuitive icons, and clear visual hierarchy.</li>\r\n              <li><em>Challenges:</em> Balancing aesthetics and usability, ensuring accessibility for all users, managing cross-device consistency, and maintaining performance with complex visuals.</li>\r\n              <li><em>Tools & Techniques:</em> Figma, Sketch, Adobe XD, React/Vue UI frameworks, Bootstrap, Tailwind CSS, ARIA for accessibility, usability testing.</li>\r\n            </ul>\r\n          </li>\r\n          <li><strong>Authentication & Authorization</strong>\r\n            <ul>\r\n              <li><em>Description:</em> Mechanisms to verify identity (authentication) and assign permissions (authorization).</li>\r\n              <li><em>Applications:</em> Secure login for apps, access restrictions in enterprise systems, API key validation, cloud IAM services.</li>\r\n              <li><em>Best Practices:</em> Use strong password hashing (bcrypt/Argon2), implement MFA, adopt RBAC/ABAC, session management with JWT or OAuth 2.0.</li>\r\n              <li><em>Challenges:</em> Preventing brute force attacks, managing session expiration, ensuring smooth user experience while enforcing strict security.</li>\r\n              <li><em>Tools & Techniques:</em> Auth0, Okta, Firebase Auth, Keycloak, JWT libraries, OAuth 2.0, OpenID Connect, PAM for enterprise systems.</li>\r\n            </ul>\r\n          </li>\r\n          <li><strong>API Layer</strong>\r\n            <ul>\r\n              <li><em>Description:</em> A communication bridge that exposes application functionalities to external or internal consumers.</li>\r\n              <li><em>Applications:</em> REST/GraphQL APIs for web/mobile apps, microservices communication, public APIs for third-party integration.</li>\r\n              <li><em>Best Practices:</em> Version APIs, provide OpenAPI/Swagger documentation, enforce throttling and rate limiting, secure with API keys or OAuth.</li>\r\n              <li><em>Challenges:</em> Handling backward compatibility, preventing misuse (API abuse/DDoS), monitoring usage and scaling.</li>\r\n              <li><em>Tools & Techniques:</em> Postman, Swagger/OpenAPI, GraphQL, Kong API Gateway, Apigee, rate limiting libraries, API monitoring tools.</li>\r\n            </ul>\r\n          </li>\r\n          <li><strong>Data Layer</strong>\r\n            <ul>\r\n              <li><em>Description:</em> The storage and retrieval component for structured, semi-structured, or unstructured data.</li>\r\n              <li><em>Applications:</em> Relational databases (MySQL, PostgreSQL), NoSQL (MongoDB, Redis), file storage, data lakes.</li>\r\n              <li><em>Best Practices:</em> Normalize where appropriate, use indexing for performance, enable encryption at rest and in transit, implement regular backups.</li>\r\n              <li><em>Challenges:</em> Ensuring scalability for large datasets, handling distributed data consistency, avoiding single points of failure.</li>\r\n              <li><em>Tools & Techniques:</em> MySQL, PostgreSQL, MongoDB, Redis, Cassandra, Hadoop, Spark, backup & replication tools, database monitoring (Percona, pgAdmin).</li>\r\n            </ul>\r\n          </li>\r\n          <li><strong>Business Logic</strong>\r\n            <ul>\r\n              <li><em>Description:</em> The core rules and workflows that drive how the application processes data and delivers value.</li>\r\n              <li><em>Applications:</em> E-commerce cart calculations, banking transaction validation, workflow automation in enterprise apps.</li>\r\n              <li><em>Best Practices:</em> Keep business logic isolated, use design patterns (Strategy, Factory, Observer), write comprehensive test coverage, document workflows.</li>\r\n              <li><em>Challenges:</em> Avoiding code duplication, keeping logic adaptable to business changes, ensuring maintainability in large codebases.</li>\r\n              <li><em>Tools & Techniques:</em> UML diagrams, BPMN modeling tools, unit/integration testing frameworks (JUnit, PyTest), design pattern libraries, workflow engines like Camunda or Zeebe.</li>\r\n            </ul>\r\n          </li>\r\n          <li><strong>Logging & Monitoring</strong>\r\n            <ul>\r\n              <li><em>Description:</em> Processes that capture application events, errors, and performance metrics for visibility and troubleshooting.</li>\r\n              <li><em>Applications:</em> Centralized logging with ELK, monitoring uptime with Prometheus/Grafana, alerting via Datadog or PagerDuty.</li>\r\n              <li><em>Best Practices:</em> Use structured logs, correlate logs with request IDs, set up automated alerts for anomalies, monitor SLAs.</li>\r\n              <li><em>Challenges:</em> Handling log volume at scale, ensuring privacy in logs (masking sensitive data), preventing alert fatigue.</li>\r\n              <li><em>Tools & Techniques:</em> ELK Stack (Elasticsearch, Logstash, Kibana), Graylog, Prometheus, Grafana, Datadog, Splunk, structured logging libraries (Winston, Log4j).</li>\r\n            </ul>\r\n          </li>\r\n          <li><strong>Security</strong>\r\n            <ul>\r\n              <li><em>Description:</em> Safeguards that protect the application, data, and users from threats and vulnerabilities.</li>\r\n              <li><em>Applications:</em> Web application firewalls (WAF), penetration testing, vulnerability scanning, SSL/TLS encryption.</li>\r\n              <li><em>Best Practices:</em> Follow OWASP guidelines, apply principle of least privilege, enforce secure coding practices, run regular audits.</li>\r\n              <li><em>Challenges:</em> Staying updated against evolving threats, dependency vulnerabilities, balancing security with usability.</li>\r\n              <li><em>Tools & Techniques:</em> OWASP ZAP, Burp Suite, Nessus, Qualys, WAFs (AWS WAF, Cloudflare), static code analyzers, SSL/TLS libraries.</li>\r\n            </ul>\r\n          </li>\r\n          <li><strong>Deployment & CI/CD</strong>\r\n            <ul>\r\n              <li><em>Description:</em> Processes and pipelines that automate building, testing, and releasing applications.</li>\r\n              <li><em>Applications:</em> Jenkins, GitHub Actions, GitLab CI, cloud-native pipelines on AWS, Azure, or GCP.</li>\r\n              <li><em>Best Practices:</em> Automate builds/tests, use infrastructure as code (Terraform, Ansible), adopt canary/blue-green deployments, ensure rollback mechanisms.</li>\r\n              <li><em>Challenges:</em> Managing environment consistency (dev/staging/prod), minimizing downtime, handling failed deployments safely.</li>\r\n              <li><em>Tools & Techniques:</em> Jenkins, GitHub Actions, GitLab CI/CD, CircleCI, Travis CI, Docker, Kubernetes, Terraform, Ansible, Helm charts.</li>\r\n            </ul>\r\n          </li>\r\n        </ol>\r\n      </section>\r\n\r\n      \r\n    </div>\r\n  </main>\r\n\r\n  <footer>\r\n    <div class=\"container\">\r\n      Created for: <strong>Application Component Checklist</strong> • Copy this file and open in a browser.<br>\r\n      © 2025 Saidur Rahman. All rights reserved.\r\n    </div>\r\n  </footer>\r\n</body>\r\n</html>', 4, NULL, NULL, NULL, 101, 'Published', 2, 2, '2025-09-06 16:53:27', '2025-09-06 17:11:36'),
(10, 'Website Components', 'website-components', '<!doctype html>\r\n<html lang=\"en\">\r\n<head>\r\n  <meta charset=\"utf-8\" />\r\n  <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />\r\n  <title>Website Components — Reference</title>\r\n  <style>\r\n    :root{\r\n      --bg:#1a1f36;\r\n      --card:#0b1220;\r\n      --muted:#9aa4b2;\r\n      --accent:#60a5fa;\r\n      --glass: rgba(255,255,255,0.03);\r\n      --radius:12px;\r\n      --max-width:1100px;\r\n      color-scheme: dark;\r\n      color: #e6eef6;\r\n      font-family: Inter, ui-sans-serif, system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial;\r\n    }\r\n    *{box-sizing:border-box}\r\n    html,body{height:100%}\r\n    body{\r\n      margin:0;\r\n      background: var(--bg);\r\n      display:flex;\r\n      justify-content:center;\r\n      padding:32px 16px;\r\n      -webkit-font-smoothing:antialiased;\r\n      -moz-osx-font-smoothing:grayscale;\r\n    }\r\n\r\n    .container{\r\n      width:100%;\r\n      max-width:var(--max-width);\r\n      background:linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));\r\n      border-radius:16px;\r\n      padding:28px;\r\n      box-shadow: 0 6px 30px rgba(2,6,23,0.7);\r\n      border: 1px solid rgba(255,255,255,0.03);\r\n    }\r\n\r\n    header{\r\n      display:flex;\r\n      align-items:center;\r\n      gap:16px;\r\n      margin-bottom:18px;\r\n    }\r\n    .logo{\r\n      width:56px;\r\n      height:56px;\r\n      background:linear-gradient(135deg,var(--accent), #7dd3fc);\r\n      border-radius:10px;\r\n      display:grid;place-items:center;font-weight:700;color:#04253a;\r\n      box-shadow:0 6px 18px rgba(96,165,250,0.12);\r\n      font-size:18px\r\n    }\r\n    h1{font-size:20px;margin:0}\r\n    p.lead{margin:0;color:var(--muted);font-size:13px}\r\n\r\n    nav.topnav{display:flex;gap:8px;margin-top:14px}\r\n    .chip{background:var(--glass);padding:6px 10px;border-radius:999px;font-size:12px;color:var(--muted)}\r\n\r\n    main{display:grid;grid-template-columns:1fr 340px;gap:20px;margin-top:22px}\r\n\r\n    .card{background:linear-gradient(180deg, rgba(255,255,255,0.01), rgba(255,255,255,0.02));padding:18px;border-radius:var(--radius);border:1px solid rgba(255,255,255,0.02)}\r\n    .card h2{margin:0 0 8px 0;font-size:16px}\r\n    .card p{margin:0;color:var(--muted);font-size:13px}\r\n\r\n    /* content list styling */\r\n    section.category{margin-bottom:14px}\r\n    section.category summary{cursor:pointer;padding:12px 14px;border-radius:10px;background:transparent;list-style:none;display:flex;justify-content:space-between;align-items:center}\r\n    section.category[open] summary{background:linear-gradient(90deg, rgba(96,165,250,0.06), rgba(125,211,252,0.02));border:1px solid rgba(96,165,250,0.06)}\r\n    section.category details > div.content{padding:12px 14px;border-radius:8px;margin-top:10px;background:rgba(255,255,255,0.01)}\r\n\r\n    ul.components{padding-left:18px;margin:6px 0 12px 0}\r\n    ul.components li{margin:8px 0}\r\n    li .sub{display:block;color:var(--muted);font-size:13px;margin-top:4px}\r\n\r\n    aside.right{\r\n      position:relative\r\n    }\r\n    .toc{max-height:66vh;overflow:auto;padding:12px}\r\n    .toc a{display:block;padding:8px 10px;border-radius:8px;color:var(--muted);text-decoration:none;font-size:13px}\r\n    .toc a:hover{background:rgba(255,255,255,0.02);color:#dff2ff}\r\n\r\n    footer.small{margin-top:18px;color:var(--muted);font-size:13px;text-align:center}\r\n\r\n    /* responsive */\r\n    @media (max-width:980px){\r\n      main{grid-template-columns:1fr}\r\n      aside.right{order:2}\r\n    }\r\n\r\n    /* print-friendly */\r\n    @media print{\r\n      body{background:white;color:black}\r\n      .container{box-shadow:none;border:none}\r\n    }\r\n  </style>\r\n</head>\r\n<body>\r\n  <div class=\"container\">\r\n    <header>\r\n      <div class=\"logo\">WC</div>\r\n      <div>\r\n        <h1>Website Components — Broad Reference</h1>\r\n        <p class=\"lead\">A structured checklist of common website components grouped by purpose (layout, content, interactive features, e-commerce, etc.). Use the TOC on the right to jump to categories.</p>\r\n        <nav class=\"topnav\" aria-label=\"shortcuts\">\r\n          <div class=\"chip\">Printable</div>\r\n          <div class=\"chip\">Accessible</div>\r\n          <div class=\"chip\">Responsive</div>\r\n        </nav>\r\n      </div>\r\n    </header>\r\n\r\n    <main>\r\n      <div>\r\n        <article class=\"card\">\r\n          <h2>Core Layout &amp; Structure</h2>\r\n          <p>Building blocks that appear on nearly every website.</p>\r\n\r\n          <details class=\"category\" open>\r\n            <summary><strong>Header &amp; Navigation</strong><small> — logo, menus, search, CTAs</small></summary>\r\n            <div class=\"content\">\r\n              <ul class=\"components\">\r\n                <li>Logo — brand mark or wordmark\r\n                  <span class=\"sub\">Best practice: link to homepage, use SVG for crisp scaling.</span>\r\n                </li>\r\n                <li>Navigation Menu — primary / secondary\r\n                  <span class=\"sub\">Best practice: keyboard accessible, clear hierarchy.</span>\r\n                </li>\r\n                <li>Search Bar, Contact / CTA, Language Switcher</li>\r\n              </ul>\r\n            </div>\r\n          </details>\r\n\r\n          <details class=\"category\">\r\n            <summary><strong>Footer</strong><small> — links, legal, contact</small></summary>\r\n            <div class=\"content\">\r\n              <ul class=\"components\">\r\n                <li>Quick Links / Sitemap</li>\r\n                <li>Social Icons, Contact Info, Newsletter Signup</li>\r\n                <li>Copyright &amp; Legal Links</li>\r\n              </ul>\r\n            </div>\r\n          </details>\r\n\r\n          <details class=\"category\">\r\n            <summary><strong>Sidebar (optional)</strong><small> — related items, ads</small></summary>\r\n            <div class=\"content\">\r\n              <ul class=\"components\">\r\n                <li>Quick Navigation, Promotions, Widgets</li>\r\n              </ul>\r\n            </div>\r\n          </details>\r\n\r\n        </article>\r\n\r\n        <article class=\"card\" style=\"margin-top:16px\">\r\n          <h2>Content Components</h2>\r\n          <p>Elements used to present content clearly and attractively.</p>\r\n\r\n          <details class=\"category\" open>\r\n            <summary><strong>Hero Section</strong><small> — banner, heading, CTA</small></summary>\r\n            <div class=\"content\">\r\n              <ul class=\"components\">\r\n                <li>Large headline, supporting copy, background image or video</li>\r\n                <li>CTAs and microcopy — guide user action</li>\r\n              </ul>\r\n            </div>\r\n          </details>\r\n\r\n          <details class=\"category\">\r\n            <summary><strong>Text &amp; Media</strong></summary>\r\n            <div class=\"content\">\r\n              <ul class=\"components\">\r\n                <li>Headings &amp; body text</li>\r\n                <li>Images &amp; galleries, embedded video</li>\r\n                <li>Icons, illustrations, tables, charts, downloadable files</li>\r\n              </ul>\r\n            </div>\r\n          </details>\r\n\r\n        </article>\r\n\r\n        <article class=\"card\" style=\"margin-top:16px\">\r\n          <h2>Interactive Components</h2>\r\n          <p>Components that respond to user input and improve engagement.</p>\r\n\r\n          <details class=\"category\" open>\r\n            <summary><strong>Forms</strong><small> — contact, login, register</small></summary>\r\n            <div class=\"content\">\r\n              <ul class=\"components\">\r\n                <li>Contact Form, Signup / Registration, Login</li>\r\n                <li>Validation, Captcha / Bot protection, File Uploads</li>\r\n              </ul>\r\n            </div>\r\n          </details>\r\n\r\n          <details class=\"category\">\r\n            <summary><strong>Controls &amp; Widgets</strong></summary>\r\n            <div class=\"content\">\r\n              <ul class=\"components\">\r\n                <li>Buttons (primary/secondary), sliders, carousels</li>\r\n                <li>Tabs / accordions (use &lt;details&gt; for no-JS collapsibles), modals</li>\r\n                <li>Tooltips, hover states, pagination / infinite scroll</li>\r\n              </ul>\r\n            </div>\r\n          </details>\r\n\r\n        </article>\r\n\r\n        <article class=\"card\" style=\"margin-top:16px\">\r\n          <h2>Functional Components</h2>\r\n          <p>Feature-driven parts that provide real user utility.</p>\r\n\r\n          <details class=\"category\" open>\r\n            <summary><strong>Authentication &amp; Profiles</strong></summary>\r\n            <div class=\"content\">\r\n              <ul class=\"components\">\r\n                <li>Login / Signup, User Dashboard, Profile Settings</li>\r\n              </ul>\r\n            </div>\r\n          </details>\r\n\r\n          <details class=\"category\">\r\n            <summary><strong>E‑commerce</strong><small> — product flow &amp; checkout</small></summary>\r\n            <div class=\"content\">\r\n              <ul class=\"components\">\r\n                <li>Product listing &amp; pages, cart, checkout, payment gateway, order tracking</li>\r\n              </ul>\r\n            </div>\r\n          </details>\r\n\r\n          <details class=\"category\">\r\n            <summary><strong>Search &amp; Filters</strong></summary>\r\n            <div class=\"content\">\r\n              <ul class=\"components\">\r\n                <li>Auto-suggest search, faceted filters, sorting</li>\r\n              </ul>\r\n            </div>\r\n          </details>\r\n\r\n        </article>\r\n\r\n        <article class=\"card\" style=\"margin-top:16px\">\r\n          <h2>Navigation &amp; User Flow</h2>\r\n          <details class=\"category\" open>\r\n            <summary><strong>Patterns</strong></summary>\r\n            <div class=\"content\">\r\n              <ul class=\"components\">\r\n                <li>Breadcrumbs, mega menu, sticky nav</li>\r\n                <li>Back-to-top, progress indicators (multi-step forms)</li>\r\n              </ul>\r\n            </div>\r\n          </details>\r\n        </article>\r\n\r\n        <article class=\"card\" style=\"margin-top:16px\">\r\n          <h2>Communication &amp; Engagement</h2>\r\n          <details class=\"category\" open>\r\n            <summary><strong>Channels</strong></summary>\r\n            <div class=\"content\">\r\n              <ul class=\"components\">\r\n                <li>Live chat / chatbot, social feeds, testimonials, forums</li>\r\n                <li>Newsletter signup, push notifications</li>\r\n              </ul>\r\n            </div>\r\n          </details>\r\n        </article>\r\n\r\n        <article class=\"card\" style=\"margin-top:16px\">\r\n          <h2>Technical &amp; Utility</h2>\r\n          <details class=\"category\" open>\r\n            <summary><strong>Helpers</strong></summary>\r\n            <div class=\"content\">\r\n              <ul class=\"components\">\r\n                <li>Loading spinners, skeletons, error pages (404/500), maintenance page</li>\r\n                <li>Cookie consent, dark mode toggle, language selector, print styles</li>\r\n              </ul>\r\n            </div>\r\n          </details>\r\n        </article>\r\n\r\n        <article class=\"card\" style=\"margin-top:16px\">\r\n          <h2>Analytics, SEO &amp; Security</h2>\r\n          <details class=\"category\" open>\r\n            <summary><strong>Essentials</strong></summary>\r\n            <div class=\"content\">\r\n              <ul class=\"components\">\r\n                <li>Meta tags, structured data (schema.org), sitemap, robots.txt</li>\r\n                <li>Analytics integration, SSL/HTTPS, GDPR/privacy compliance, captchas</li>\r\n              </ul>\r\n            </div>\r\n          </details>\r\n        </article>\r\n\r\n        <footer class=\"small\">This reference is a condensed checklist — adapt to your project\'s needs (simple landing page vs large product site).</footer>\r\n      </div>\r\n\r\n      <aside class=\"right card\">\r\n        <h2>Contents</h2>\r\n        <div class=\"toc\">\r\n          <a href=\"#\">Core Layout &amp; Structure</a>\r\n          <a href=\"#\">Content Components</a>\r\n          <a href=\"#\">Interactive Components</a>\r\n          <a href=\"#\">Functional Components</a>\r\n          <a href=\"#\">Navigation &amp; User Flow</a>\r\n          <a href=\"#\">Communication &amp; Engagement</a>\r\n          <a href=\"#\">Technical &amp; Utility</a>\r\n          <a href=\"#\">Analytics, SEO &amp; Security</a>\r\n        </div>\r\n\r\n        <h3 style=\"margin-top:12px\">Quick tips</h3>\r\n        <ul style=\"color:var(--muted);font-size:13px;padding-left:18px\">\r\n          <li>Prioritize accessibility (ARIA, keyboard nav).</li>\r\n          <li>Design mobile-first — test on small screens.</li>\r\n          <li>Keep components reusable and documented.</li>\r\n        </ul>\r\n\r\n      </aside>\r\n    </main>\r\n  </div>\r\n</body>\r\n</html>', 4, NULL, NULL, NULL, 105, 'Published', 2, 2, '2025-09-07 07:13:02', '2025-09-07 07:16:34');
INSERT INTO `website_pages` (`id`, `title`, `slug`, `content`, `category_id`, `meta_title`, `meta_description`, `meta_keywords`, `read_count`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(11, 'Type of Application', 'type-of-application', '<!DOCTYPE html>\r\n<html lang=\"en\">\r\n<head>\r\n  <meta charset=\"UTF-8\">\r\n  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n  <title>Types of Applications</title>\r\n  <!-- Bootstrap 5 CSS -->\r\n  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">\r\n  <!-- Font Awesome -->\r\n  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">\r\n  <style>\r\n    body {\r\n      background-color: #f8f9fa;\r\n    }\r\n    .category {\r\n      border-radius: 12px;\r\n      box-shadow: 0 4px 10px rgba(0,0,0,0.1);\r\n      margin-bottom: 20px;\r\n      transition: transform 0.2s;\r\n    }\r\n    .category:hover {\r\n      transform: translateY(-3px);\r\n    }\r\n    .category h2 {\r\n      font-size: 1.3rem;\r\n      color: #0d6efd;\r\n    }\r\n    .category h2 i {\r\n      color: #20c997;\r\n      margin-right: 8px;\r\n    }\r\n    footer {\r\n      background: #212529;\r\n      color: white;\r\n      padding: 15px;\r\n      text-align: center;\r\n      margin-top: 30px;\r\n    }\r\n  </style>\r\n</head>\r\n<body>\r\n\r\n  <!-- Header -->\r\n  <header class=\"bg-dark text-white text-center py-4 mb-4\">\r\n    <h1><i class=\"fa-solid fa-layer-group\"></i> Types of Applications</h1>\r\n  </header>\r\n\r\n  <!-- Container -->\r\n  <div class=\"container\">\r\n\r\n    <!-- Category Card -->\r\n    <div class=\"card category\">\r\n      <div class=\"card-body\">\r\n        <h2><i class=\"fa-solid fa-globe\"></i> Web Applications</h2>\r\n        <ul>\r\n          <li>Static Web Apps – Portfolio sites</li>\r\n          <li>Dynamic Web Apps – Facebook, Twitter</li>\r\n          <li>E-Commerce Apps – Amazon, Daraz</li>\r\n          <li>Progressive Web Apps (PWA) – Starbucks PWA</li>\r\n        </ul>\r\n      </div>\r\n    </div>\r\n\r\n    <div class=\"card category\">\r\n      <div class=\"card-body\">\r\n        <h2><i class=\"fa-solid fa-mobile-screen-button\"></i> Mobile Applications</h2>\r\n        <ul>\r\n          <li>Native Apps – iOS (Swift), Android (Kotlin)</li>\r\n          <li>Hybrid Apps – Instagram, Uber</li>\r\n          <li>Mobile Web Apps – Browser-based versions</li>\r\n          <li>Games – PUBG, Clash of Clans</li>\r\n        </ul>\r\n      </div>\r\n    </div>\r\n\r\n    <div class=\"card category\">\r\n      <div class=\"card-body\">\r\n        <h2><i class=\"fa-solid fa-desktop\"></i> Desktop Applications</h2>\r\n        <ul>\r\n          <li>Productivity Apps – MS Office, Notepad++</li>\r\n          <li>Design/Editing Apps – Photoshop, AutoCAD</li>\r\n          <li>Communication Apps – Skype, Zoom</li>\r\n          <li>Gaming Apps – GTA V, Valorant</li>\r\n        </ul>\r\n      </div>\r\n    </div>\r\n\r\n    <div class=\"card category\">\r\n      <div class=\"card-body\">\r\n        <h2><i class=\"fa-solid fa-cloud\"></i> Cloud Applications</h2>\r\n        <ul>\r\n          <li>Storage Apps – Google Drive, Dropbox</li>\r\n          <li>Collaboration Apps – Google Docs, Trello</li>\r\n          <li>Streaming Apps – Netflix, Spotify</li>\r\n          <li>SaaS – Salesforce, Microsoft 365</li>\r\n        </ul>\r\n      </div>\r\n    </div>\r\n\r\n    <div class=\"card category\">\r\n      <div class=\"card-body\">\r\n        <h2><i class=\"fa-solid fa-building\"></i> Enterprise Applications</h2>\r\n        <ul>\r\n          <li>ERP – SAP, Oracle ERP</li>\r\n          <li>CRM – Salesforce, Zoho CRM</li>\r\n          <li>HRM – Workday, BambooHR</li>\r\n          <li>SCM – IBM Sterling, Infor SCM</li>\r\n        </ul>\r\n      </div>\r\n    </div>\r\n\r\n    <div class=\"card category\">\r\n      <div class=\"card-body\">\r\n        <h2><i class=\"fa-solid fa-microchip\"></i> Embedded Applications</h2>\r\n        <ul>\r\n          <li>Smart Devices – Smart TVs, Smartwatches</li>\r\n          <li>Automobiles – Tesla Autopilot</li>\r\n          <li>Home Appliances – Microwaves, Washing Machines</li>\r\n          <li>Medical Devices – Pacemakers, Monitors</li>\r\n        </ul>\r\n      </div>\r\n    </div>\r\n\r\n    <div class=\"card category\">\r\n      <div class=\"card-body\">\r\n        <h2><i class=\"fa-solid fa-gamepad\"></i> Gaming Applications</h2>\r\n        <ul>\r\n          <li>Mobile Games – Candy Crush, Subway Surfers</li>\r\n          <li>PC/Console Games – FIFA, Call of Duty</li>\r\n          <li>VR/AR Games – Beat Saber, Pokémon GO</li>\r\n          <li>Educational Games – Duolingo</li>\r\n        </ul>\r\n      </div>\r\n    </div>\r\n\r\n    <div class=\"card category\">\r\n      <div class=\"card-body\">\r\n        <h2><i class=\"fa-solid fa-robot\"></i> AI & Machine Learning Applications</h2>\r\n        <ul>\r\n          <li>Chatbots – ChatGPT, Google Assistant</li>\r\n          <li>Image Recognition – Google Lens, FaceApp</li>\r\n          <li>Recommendation Systems – Netflix, Amazon</li>\r\n          <li>Predictive Analytics – Stock forecasting apps</li>\r\n        </ul>\r\n      </div>\r\n    </div>\r\n\r\n    <div class=\"card category\">\r\n      <div class=\"card-body\">\r\n        <h2><i class=\"fa-solid fa-industry\"></i> Industry-Specific Applications</h2>\r\n        <ul>\r\n          <li>Healthcare – Telemedicine apps</li>\r\n          <li>Finance – PayPal, bKash</li>\r\n          <li>Education – Coursera, Google Classroom</li>\r\n          <li>Agriculture – Drone monitoring apps</li>\r\n        </ul>\r\n      </div>\r\n    </div>\r\n\r\n  </div>\r\n\r\n  <!-- Footer -->\r\n  <footer>\r\n    &copy; 2025 EduINNTECH. All rights reserved.\r\n  </footer>\r\n\r\n  <!-- Bootstrap 5 JS -->\r\n  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"></script>\r\n</body>\r\n</html>', 5, NULL, NULL, NULL, 105, 'Published', 2, 2, '2025-09-10 09:05:35', '2025-09-10 09:07:52'),
(12, 'Cybersecurity Measures for Applications', 'cybersecurity-measures-for-applications', '<!DOCTYPE html>\r\n<html lang=\"en\">\r\n<head>\r\n    <meta charset=\"UTF-8\">\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n    <title>Cybersecurity Measures for Applications</title>\r\n    <!-- Bootstrap 5 CSS -->\r\n    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">\r\n    <style>\r\n        body {\r\n            background-color: #f4f7fa;\r\n            font-family: \'Segoe UI\', Tahoma, Geneva, Verdana, sans-serif;\r\n            padding: 20px;\r\n        }\r\n        .section-title {\r\n            background-color: #0d6efd;\r\n            color: white;\r\n            padding: 10px 15px;\r\n            border-radius: 5px;\r\n            margin-top: 20px;\r\n            margin-bottom: 10px;\r\n        }\r\n        .measure-list {\r\n            list-style: none;\r\n            padding-left: 0;\r\n        }\r\n        .measure-list li {\r\n            margin-bottom: 8px;\r\n            padding: 8px 12px;\r\n            background-color: #e9ecef;\r\n            border-left: 5px solid #0d6efd;\r\n            border-radius: 4px;\r\n        }\r\n        .measure-list li span {\r\n            margin-right: 8px;\r\n        }\r\n        .summary {\r\n            background-color: #ffc107;\r\n            padding: 12px 15px;\r\n            border-radius: 5px;\r\n            margin-top: 20px;\r\n        }\r\n        .emoji {\r\n            font-size: 1.2em;\r\n        }\r\n    </style>\r\n</head>\r\n<body>\r\n\r\n    <div class=\"container\">\r\n        <h1 class=\"text-center mb-4\">🔒 Cybersecurity Measures for Applications</h1>\r\n\r\n        <!-- Section Template -->\r\n        <div>\r\n            <div class=\"section-title\">1. General Security Practices (for all apps)</div>\r\n            <ul class=\"measure-list\">\r\n                <li><span>✅</span>Authentication & Authorization – Use strong passwords, multi-factor authentication (MFA), role-based access control.</li>\r\n                <li><span>✅</span>Data Encryption – Encrypt sensitive data (AES-256, TLS/SSL).</li>\r\n                <li><span>✅</span>Secure Coding – Follow OWASP Top 10 guidelines to prevent SQL Injection, XSS, CSRF, etc.</li>\r\n                <li><span>✅</span>Regular Updates & Patching – Keep libraries, frameworks, and dependencies up-to-date.</li>\r\n                <li><span>✅</span>Logging & Monitoring – Track user activities, detect suspicious behaviors, use SIEM tools.</li>\r\n                <li><span>✅</span>Backup & Recovery – Regular backups with disaster recovery plans.</li>\r\n            </ul>\r\n        </div>\r\n\r\n        <div>\r\n            <div class=\"section-title\">2. Web Application Security 🌐</div>\r\n            <ul class=\"measure-list\">\r\n                <li><span>✅</span>Web Application Firewall (WAF) – Protects against common attacks.</li>\r\n                <li><span>✅</span>Input Validation & Sanitization – Prevents SQL injection, XSS.</li>\r\n                <li><span>✅</span>HTTPS Everywhere – Force SSL/TLS for secure communication.</li>\r\n                <li><span>✅</span>Session Management – Use secure cookies, set timeouts.</li>\r\n                <li><span>✅</span>CAPTCHA – Prevents automated bot attacks.</li>\r\n            </ul>\r\n        </div>\r\n\r\n        <div>\r\n            <div class=\"section-title\">3. Mobile Application Security 📱</div>\r\n            <ul class=\"measure-list\">\r\n                <li><span>✅</span>Secure Storage – Don’t store passwords in plain text, use encrypted storage.</li>\r\n                <li><span>✅</span>App Permissions Control – Request only required permissions.</li>\r\n                <li><span>✅</span>Code Obfuscation – Makes reverse-engineering harder.</li>\r\n                <li><span>✅</span>Secure APIs – Authenticate & encrypt API calls.</li>\r\n                <li><span>✅</span>Device Security Checks – Detect rooted/jailbroken devices.</li>\r\n            </ul>\r\n        </div>\r\n\r\n        <div>\r\n            <div class=\"section-title\">4. Desktop Application Security 💻</div>\r\n            <ul class=\"measure-list\">\r\n                <li><span>✅</span>Code Signing Certificates – Verify software integrity.</li>\r\n                <li><span>✅</span>Least Privilege Principle – Run apps with minimal required permissions.</li>\r\n                <li><span>✅</span>Anti-Malware Integration – Protect from trojans, ransomware.</li>\r\n                <li><span>✅</span>Secure Installers/Updaters – Verify software before updates.</li>\r\n                <li><span>✅</span>Sandboxing – Isolate apps from system-level resources.</li>\r\n            </ul>\r\n        </div>\r\n\r\n        <div>\r\n            <div class=\"section-title\">5. Cloud Application Security ☁️</div>\r\n            <ul class=\"measure-list\">\r\n                <li><span>✅</span>Identity & Access Management (IAM) – Control who accesses cloud resources.</li>\r\n                <li><span>✅</span>Encryption at Rest & in Transit – Protect cloud data.</li>\r\n                <li><span>✅</span>DDoS Protection – Use cloud provider security services.</li>\r\n                <li><span>✅</span>API Gateway Security – Authenticate APIs with OAuth 2.0, JWT.</li>\r\n                <li><span>✅</span>Regular Security Audits – Penetration testing & compliance checks.</li>\r\n            </ul>\r\n        </div>\r\n\r\n        <div>\r\n            <div class=\"section-title\">6. Enterprise Applications (ERP, CRM, HRM, etc.) 🏢</div>\r\n            <ul class=\"measure-list\">\r\n                <li><span>✅</span>Role-Based Access Control (RBAC) – Ensure employees access only what they need.</li>\r\n                <li><span>✅</span>Database Security – Encrypt sensitive employee and customer data.</li>\r\n                <li><span>✅</span>Compliance – Follow GDPR, HIPAA, PCI-DSS, ISO 27001 depending on industry.</li>\r\n                <li><span>✅</span>Audit Logs – Monitor employee activity and data usage.</li>\r\n                <li><span>✅</span>Segregation of Duties (SoD) – Avoid conflict of interest in finance & HR systems.</li>\r\n            </ul>\r\n        </div>\r\n\r\n        <div>\r\n            <div class=\"section-title\">7. Embedded & IoT Applications ⚙️</div>\r\n            <ul class=\"measure-list\">\r\n                <li><span>✅</span>Secure Boot – Prevent unauthorized firmware.</li>\r\n                <li><span>✅</span>Firmware Updates – Regular patching.</li>\r\n                <li><span>✅</span>Network Segmentation – Isolate IoT devices from critical systems.</li>\r\n                <li><span>✅</span>Minimal Attack Surface – Disable unnecessary services.</li>\r\n                <li><span>✅</span>Strong Device Authentication – Unique device IDs and keys.</li>\r\n            </ul>\r\n        </div>\r\n\r\n        <div>\r\n            <div class=\"section-title\">8. AI & Machine Learning Applications 🤖</div>\r\n            <ul class=\"measure-list\">\r\n                <li><span>✅</span>Model Security – Prevent model theft and adversarial attacks.</li>\r\n                <li><span>✅</span>Data Privacy – Protect training data from leaks.</li>\r\n                <li><span>✅</span>Bias & Fairness Checks – Ensure AI is not manipulated.</li>\r\n                <li><span>✅</span>Access Control – Restrict AI API usage to verified clients.</li>\r\n                <li><span>✅</span>Explainability & Monitoring – Detect anomalies in predictions.</li>\r\n            </ul>\r\n        </div>\r\n\r\n        <div>\r\n            <div class=\"section-title\">9. Gaming Applications 🎮</div>\r\n            <ul class=\"measure-list\">\r\n                <li><span>✅</span>Anti-Cheat Systems – Prevent hacking and cheating.</li>\r\n                <li><span>✅</span>Account Security – MFA for player logins.</li>\r\n                <li><span>✅</span>In-App Purchase Security – Protect against fraud.</li>\r\n                <li><span>✅</span>Server Protection – Prevent DDoS attacks on game servers.</li>\r\n                <li><span>✅</span>Player Privacy – Secure chat and friend list data.</li>\r\n            </ul>\r\n        </div>\r\n\r\n        <div class=\"summary\">\r\n            <h5>⚡ In short:</h5>\r\n            <ul>\r\n                <li>Web apps → Protect against OWASP Top 10 threats.</li>\r\n                <li>Mobile apps → Secure storage, obfuscation, API security.</li>\r\n                <li>Cloud apps → IAM, encryption, compliance.</li>\r\n                <li>Enterprise apps → RBAC, audit logs, compliance.</li>\r\n                <li>IoT/Embedded → Secure firmware, device authentication.</li>\r\n            </ul>\r\n        </div>\r\n\r\n    </div>\r\n\r\n</body>\r\n</html>', 4, NULL, NULL, NULL, 97, 'Published', 2, NULL, '2025-09-10 09:42:10', '2025-09-10 09:42:10'),
(13, 'IT Career Path', 'it-career-path', '<!doctype html>\r\n<html lang=\"en\">\r\n<head>\r\n  <meta charset=\"utf-8\" />\r\n  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />\r\n  <title>IT Careers — Quick Reference</title>\r\n  <style>\r\n    :root{\r\n      --bg:#1e1e2f; --card:#2a2a40; --muted:#c7c7d1; --accent:#ffb74d; --glass: rgba(255,255,255,0.05);\r\n      --glass-2: rgba(255,255,255,0.03);\r\n      font-family: Inter, ui-sans-serif, system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial;\r\n    }\r\n    *{box-sizing:border-box}\r\n    body{margin:0;background:linear-gradient(180deg,#141423 0%, #1c1c30 100%);color:#f1f1f7;min-height:100vh}\r\n    .wrap{max-width:1100px;margin:40px auto;padding:28px;background:linear-gradient(180deg,var(--glass),transparent);border-radius:14px;box-shadow:0 6px 30px rgba(0,0,0,0.6);backdrop-filter: blur(6px)}\r\n    header{display:flex;align-items:center;gap:16px}\r\n    .logo{width:64px;height:64px;border-radius:12px;background:linear-gradient(135deg,var(--accent),#ff7043);display:flex;align-items:center;justify-content:center;font-weight:700;color:#1e1e2f}\r\n    h1{margin:0;font-size:20px}\r\n    p.lead{margin:6px 0 18px;color:var(--muted)}\r\n\r\n    .controls{display:flex;gap:12px;flex-wrap:wrap;margin:18px 0}\r\n    .search{flex:1;min-width:220px}\r\n    input[type=search]{width:100%;padding:10px 12px;border-radius:10px;border:1px solid rgba(255,255,255,0.1);background:transparent;color:inherit}\r\n    .chip{padding:8px 12px;background:var(--card);border-radius:999px;border:1px solid rgba(255,255,255,0.08);color:var(--muted);font-size:13px}\r\n\r\n    .grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:14px}\r\n    .card{background:linear-gradient(180deg,var(--card),var(--glass-2));padding:16px;border-radius:12px;border:1px solid rgba(255,255,255,0.05)}\r\n    .card h3{margin:0 0 8px;font-size:16px;color:var(--accent)}\r\n    .card p{margin:0 0 10px;color:var(--muted);font-size:13px}\r\n    ul.roles{list-style:none;padding:0;margin:0;display:grid;gap:6px}\r\n    ul.roles li{padding:8px;border-radius:8px;background:rgba(255,255,255,0.04);font-size:14px}\r\n\r\n    footer{margin-top:18px;color:var(--muted);font-size:13px;display:flex;justify-content:space-between;align-items:center}\r\n\r\n    /* small helpers */\r\n    .badge{display:inline-block;padding:6px 8px;border-radius:8px;background:rgba(255,255,255,0.05);font-size:12px}\r\n    @media (max-width:520px){.wrap{margin:16px;padding:16px}}\r\n  </style>\r\n</head>\r\n<body>\r\n  <main class=\"wrap\">\r\n    <header>\r\n      <div class=\"logo\">IT</div>\r\n      <div>\r\n        <h1>IT Careers — Quick Reference</h1>\r\n        <p class=\"lead\">Grouped list of common IT careers. Use the search box to filter roles. Click a card to copy its list.</p>\r\n      </div>\r\n    </header>\r\n\r\n    <div class=\"controls\">\r\n      <div class=\"search\">\r\n        <input id=\"q\" type=\"search\" placeholder=\"Search careers (e.g., \'security\', \'data\', \'frontend\')\" />\r\n      </div>\r\n      <div class=\"chip\">Total groups: <span id=\"count\">0</span></div>\r\n    </div>\r\n\r\n    <div id=\"grid\" class=\"grid\">\r\n      <!-- cards injected by JS -->\r\n    </div>\r\n\r\n    <footer>\r\n      <div class=\"badge\">Tip: narrow search by domain (e.g., \'cloud\', \'devops\', \'ux\')</div>\r\n      <div>&copy; EduINNTECH</div>\r\n    </footer>\r\n  </main>\r\n\r\n  <script>\r\n    const data = [\r\n      { title: \'Software & Application Development\', desc:\'Build applications, websites, and mobile apps.\', roles:[\r\n        \'Software Developer / Engineer\',\'Web Developer (Frontend / Backend / Full-Stack)\',\'Mobile App Developer\',\'Game Developer\',\'Cloud Application Developer\',\'DevOps Engineer\',\'QA Engineer / Software Tester\',\'UI/UX Designer\'\r\n      ]},\r\n\r\n      { title: \'Networking & Systems\', desc:\'Manage networks, servers and infrastructure.\', roles:[\r\n        \'Network Administrator\',\'Systems Administrator\',\'IT Support Specialist / Helpdesk Technician\',\'Cloud Engineer / Cloud Architect\',\'Virtualization Engineer\',\'Site Reliability Engineer (SRE)\'\r\n      ]},\r\n  { title: \'Infrastructure & Hardware\', desc:\'Hardware, embedded systems and cloud infra.\', roles:[\r\n        \'Computer Hardware Engineer\',\'Embedded Systems Engineer\',\'Electronics & IoT Technician\',\'Cloud Infrastructure Specialist\'\r\n      ]},\r\n  \r\n      { title: \'Specialized Roles\', desc:\'Niche and complementary IT careers.\', roles:[\r\n        \'Technical Writer\',\'ERP Specialist (SAP, Oracle)\',\'CRM Specialist (Salesforce)\',\'GIS Specialist\',\'Multimedia & Animation Specialist\'\r\n      ]},\r\n      { title: \'Data & Analytics\', desc:\'Collect, analyse and model data to drive decisions.\', roles:[\r\n        \'Data Analyst\',\'Data Scientist\',\'Database Administrator (DBA)\',\'Business Intelligence (BI) Developer\',\'Big Data Engineer\',\'Machine Learning Engineer\',\'AI Engineer / Researcher\'\r\n      ]},\r\n      { title: \'Cybersecurity\', desc:\'Protect systems, data and users from threats.\', roles:[\r\n        \'Cybersecurity Analyst\',\'Penetration Tester / Ethical Hacker\',\'Security Engineer\',\'SOC Analyst\',\'Digital Forensics Specialist\',\'Cryptographer\',\'Information Security Manager\',\'Application Security Engineer\'\r\n      ]},\r\n      { title: \'Project & Product Management\', desc:\'Plan, deliver and manage IT projects and products.\', roles:[\r\n        \'IT Project Manager\',\'Product Manager (Tech)\',\'Scrum Master / Agile Coach\',\'Business Analyst (IT)\',\'Technical Program Manager\'\r\n      ]},\r\n      { title: \'Emerging Technologies\', desc:\'Working on next-gen tech and research.\', roles:[\r\n        \'AI Specialist\',\'Blockchain Developer\',\'IoT Engineer\',\'Robotics Engineer\',\'AR/VR Developer\',\'Quantum Computing Researcher\'\r\n      ]},\r\n      { title: \'AI & Future Careers\', desc:\'Roles shaping the future of Artificial Intelligence and upcoming tech.\', roles:[\r\n        \'Generative AI Specialist\',\'AI Ethics Officer\',\'AI Product Manager\',\'Conversational AI Designer\',\'Edge AI Engineer\',\'Autonomous Systems Engineer\',\'Synthetic Data Specialist\',\'Digital Twin Engineer\',\'Neurotechnology Specialist\',\'Sustainable IT & Green Tech Expert\'\r\n      ]},\r\n    \r\n    { title: \'IT Governance & Strategy\', desc:\'Governance, compliance and leadership roles.\', roles:[\r\n        \'IT Auditor\',\'Compliance Analyst\',\'IT Consultant\',\'Chief Information Officer (CIO)\',\'Chief Technology Officer (CTO)\'\r\n      ]}\r\n    ];\r\n\r\n    const grid = document.getElementById(\'grid\');\r\n    const countEl = document.getElementById(\'count\');\r\n\r\n    function render(list){\r\n      grid.innerHTML = \'\';\r\n      list.forEach(group => {\r\n        const card = document.createElement(\'article\');\r\n        card.className = \'card\';\r\n        card.tabIndex = 0;\r\n        card.innerHTML = `\r\n          <h3>${group.title}</h3>\r\n          <p>${group.desc}</p>\r\n          <ul class=\"roles\">${group.roles.map(r=>`<li>${r}</li>`).join(\'\')}</ul>\r\n        `;\r\n        // copy on click: copy roles as newline list\r\n        card.addEventListener(\'click\', ()=>{\r\n          const text = group.roles.join(\'\\n\');\r\n          navigator.clipboard?.writeText(text).then(()=>{\r\n            const old = card.querySelector(\'h3\').textContent;\r\n            card.querySelector(\'h3\').textContent = \'Copied ✔ \' + old;\r\n            setTimeout(()=>{ card.querySelector(\'h3\').textContent = old },1200);\r\n          }).catch(()=>{\r\n            alert(\'Copy failed — your browser may block clipboard access.\');\r\n          });\r\n        });\r\n        grid.appendChild(card);\r\n      });\r\n      countEl.textContent = list.length;\r\n    }\r\n\r\n    // initial render\r\n    render(data);\r\n\r\n    // search/filter\r\n    const q = document.getElementById(\'q\');\r\n    q.addEventListener(\'input\', ()=>{\r\n      const v = q.value.trim().toLowerCase();\r\n      if(!v) return render(data);\r\n      const filtered = data.map(group=>{\r\n        const hay = (group.title + \' \' + group.desc + \' \' + group.roles.join(\' \')).toLowerCase();\r\n        return hay.includes(v) ? group : null;\r\n      }).filter(Boolean);\r\n      render(filtered);\r\n    });\r\n  </script>\r\n</body>\r\n</html>', 4, NULL, NULL, NULL, 114, 'Published', 2, 2, '2025-09-20 01:39:14', '2025-09-20 01:49:53'),
(14, 'Software Requirment Collection Form', 'software-requirment-collection-form', '<!doctype html>\r\n<html lang=\"en\">\r\n<head>\r\n  <meta charset=\"utf-8\" />\r\n  <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />\r\n  <title>Software Requirement Collection Form</title>\r\n  <style>\r\n    :root{\r\n      --bg:#f6f8fb; --card:#ffffff; --accent:#0b63d9; --muted:#6b7280; --radius:10px;\r\n      --max-width:900px;\r\n      font-family: Inter, system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial;\r\n    }\r\n    *{box-sizing:border-box}\r\n    body{margin:0;background:var(--bg);color:#0f1724;display:flex;align-items:center;justify-content:center;padding:32px}\r\n    .container{width:100%;max-width:var(--max-width)}\r\n    .card{background:var(--card);border-radius:var(--radius);box-shadow:0 6px 18px rgba(12,20,40,0.08);padding:28px}\r\n    h1{margin:0 0 8px;font-size:20px}\r\n    p.lead{margin:0 0 20px;color:var(--muted)}\r\n\r\n    form .grid{display:grid;grid-template-columns:repeat(2,1fr);gap:16px}\r\n    @media (max-width:800px){form .grid{grid-template-columns:1fr}}\r\n\r\n    label{display:block;font-size:13px;margin-bottom:6px;color:#0b1220}\r\n    .field{margin-bottom:14px}\r\n    input[type=\"text\"], input[type=\"email\"], input[type=\"tel\"], input[type=\"date\"], input[type=\"number\"], select, textarea{\r\n      width:100%;padding:10px 12px;border:1px solid #e6e9ef;border-radius:8px;font-size:14px;background:#fff;\r\n    }\r\n    textarea{min-height:110px;resize:vertical}\r\n    .section-title{margin:18px 0 8px;font-weight:600;color:#0b1220}\r\n    .muted{color:var(--muted);font-size:13px}\r\n\r\n    .checkbox-row{display:flex;gap:12px;flex-wrap:wrap}\r\n    .checkbox{display:flex;align-items:center;gap:8px}\r\n    .checkbox input{width:16px;height:16px}\r\n\r\n    .actions{display:flex;gap:10px;align-items:center;margin-top:18px}\r\n    .btn{background:var(--accent);color:#fff;padding:10px 14px;border-radius:8px;border:none;cursor:pointer}\r\n    .btn.secondary{background:#eef2ff;color:var(--accent);border:1px solid #dbeafe}\r\n\r\n    .note{font-size:13px;color:var(--muted);margin-top:8px}\r\n\r\n    /* subtle form section card */\r\n    .subcard{background:#fbfdff;border:1px solid #eef2f9;padding:12px;border-radius:8px}\r\n\r\n    footer{margin-top:16px;font-size:13px;color:var(--muted)}\r\n  </style>\r\n</head>\r\n<body>\r\n  <div class=\"container\">\r\n    <div class=\"card\" role=\"region\" aria-labelledby=\"form-title\">\r\n      <h1 id=\"form-title\">Software Requirement Collection Form</h1>\r\n      <p class=\"lead\">Please complete this form to help us understand your project needs. Fields marked with * are recommended.</p>\r\n\r\n      <form id=\"requirement-form\" novalidate>\r\n\r\n        <div class=\"section\">\r\n          <div class=\"section-title\">1. General Information</div>\r\n          <div class=\"grid\">\r\n            <div class=\"field\">\r\n              <label for=\"project-name\">Project Name *</label>\r\n              <input id=\"project-name\" name=\"project_name\" type=\"text\" placeholder=\"e.g. Inventory Management System\" required />\r\n            </div>\r\n            <div class=\"field\">\r\n              <label for=\"org-name\">Organization / Client</label>\r\n              <input id=\"org-name\" name=\"organization\" type=\"text\" placeholder=\"Organization or company name\" />\r\n            </div>\r\n\r\n            <div class=\"field\">\r\n              <label for=\"contact-name\">Point of Contact (Name &amp; Designation) *</label>\r\n              <input id=\"contact-name\" name=\"contact_name\" type=\"text\" placeholder=\"Full name and title\" required />\r\n            </div>\r\n            <div class=\"field\">\r\n              <label for=\"email\">Email *</label>\r\n              <input id=\"email\" name=\"email\" type=\"email\" placeholder=\"name@company.com\" required />\r\n            </div>\r\n\r\n            <div class=\"field\">\r\n              <label for=\"phone\">Phone</label>\r\n              <input id=\"phone\" name=\"phone\" type=\"tel\" placeholder=\"+8801XXXXXXXXX\" />\r\n            </div>\r\n            <div class=\"field\">\r\n              <label for=\"date\">Date</label>\r\n              <input id=\"date\" name=\"date\" type=\"date\" />\r\n            </div>\r\n          </div>\r\n        </div>\r\n\r\n        <div class=\"section\">\r\n          <div class=\"section-title\">2. Project Overview</div>\r\n          <div class=\"field\">\r\n            <label for=\"brief\">Brief description of the project *</label>\r\n            <textarea id=\"brief\" name=\"brief\" placeholder=\"Summarize the project in 2–3 sentences\" required></textarea>\r\n          </div>\r\n          <div class=\"field\">\r\n            <label for=\"purpose\">Primary purpose of the software</label>\r\n            <textarea id=\"purpose\" name=\"purpose\" placeholder=\"e.g. automate invoicing, CRM, reporting\"></textarea>\r\n          </div>\r\n        </div>\r\n\r\n        <div class=\"section\">\r\n          <div class=\"section-title\">3. Objectives &amp; Goals</div>\r\n          <div class=\"field\">\r\n            <label for=\"objectives\">Key business objectives</label>\r\n            <textarea id=\"objectives\" name=\"objectives\" placeholder=\"List 3–5 measurable objectives (e.g., reduce manual processing time by 50%)\"></textarea>\r\n          </div>\r\n          <div class=\"field\">\r\n            <label for=\"benefits\">Expected benefits</label>\r\n            <textarea id=\"benefits\" name=\"benefits\" placeholder=\"e.g. efficiency, cost reduction, compliance\"></textarea>\r\n          </div>\r\n        </div>\r\n\r\n        <div class=\"section\">\r\n          <div class=\"section-title\">4. Target Users</div>\r\n          <div class=\"grid\">\r\n            <div class=\"field\">\r\n              <label for=\"users\">Who will use the software?</label>\r\n              <input id=\"users\" name=\"users\" type=\"text\" placeholder=\"e.g. staff, customers, administrators\" />\r\n            </div>\r\n            <div class=\"field\">\r\n              <label for=\"user-count\">Number of expected users</label>\r\n              <input id=\"user-count\" name=\"user_count\" type=\"number\" min=\"1\" placeholder=\"Approximate number\" />\r\n            </div>\r\n          </div>\r\n          <div class=\"field\">\r\n            <label>User access levels required</label>\r\n            <div class=\"checkbox-row\">\r\n              <label class=\"checkbox\"><input type=\"checkbox\" name=\"role_admin\"> Admin</label>\r\n              <label class=\"checkbox\"><input type=\"checkbox\" name=\"role_manager\"> Manager</label>\r\n              <label class=\"checkbox\"><input type=\"checkbox\" name=\"role_staff\"> Staff</label>\r\n              <label class=\"checkbox\"><input type=\"checkbox\" name=\"role_customer\"> Customer</label>\r\n              <label class=\"checkbox\"><input type=\"checkbox\" name=\"role_other\"> Other</label>\r\n            </div>\r\n          </div>\r\n        </div>\r\n\r\n        <div class=\"section\">\r\n          <div class=\"section-title\">5. Functional Requirements</div>\r\n          <div class=\"field subcard\">\r\n            <label for=\"features\">Core features (list primary features)</label>\r\n            <textarea id=\"features\" name=\"features\" placeholder=\"1. User management\\n2. Product catalog\\n3. Order processing\"></textarea>\r\n            <p class=\"note\">Tip: Start each feature on a new line and be as specific as possible.</p>\r\n          </div>\r\n\r\n          <div class=\"grid\">\r\n            <div class=\"field\">\r\n              <label for=\"reports\">Reports / Analytics needed</label>\r\n              <textarea id=\"reports\" name=\"reports\" placeholder=\"Describe required reports or KPIs\"></textarea>\r\n            </div>\r\n            <div class=\"field\">\r\n              <label>Integrations with existing systems</label>\r\n              <select name=\"integration\">\r\n                <option value=\"none\">None / Not decided</option>\r\n                <option value=\"yes\">Yes — specify below</option>\r\n                <option value=\"unknown\">Unknown</option>\r\n              </select>\r\n            </div>\r\n          </div>\r\n\r\n          <div class=\"field\">\r\n            <label for=\"integration-details\">If yes, list systems or APIs to integrate (ERP, payment gateway, LDAP, etc.)</label>\r\n            <textarea id=\"integration-details\" name=\"integration_details\" placeholder=\"e.g. SAP, QuickBooks, Stripe, REST API endpoints\"></textarea>\r\n          </div>\r\n        </div>\r\n\r\n        <div class=\"section\">\r\n          <div class=\"section-title\">6. Non-Functional Requirements</div>\r\n          <div class=\"grid\">\r\n            <div class=\"field\">\r\n              <label for=\"performance\">Performance &amp; Scalability expectations</label>\r\n              <input id=\"performance\" name=\"performance\" type=\"text\" placeholder=\"e.g. support 500 concurrent users\" />\r\n            </div>\r\n            <div class=\"field\">\r\n              <label for=\"security\">Security requirements</label>\r\n              <input id=\"security\" name=\"security\" type=\"text\" placeholder=\"e.g. 2FA, encryption at rest\" />\r\n            </div>\r\n          </div>\r\n          <div class=\"field\">\r\n            <label for=\"compliance\">Compliance / Regulatory requirements</label>\r\n            <textarea id=\"compliance\" name=\"compliance\" placeholder=\"e.g. GDPR, HIPAA, local tax regulations\"></textarea>\r\n          </div>\r\n        </div>\r\n\r\n        <div class=\"section\">\r\n          <div class=\"section-title\">7. Technology Preferences</div>\r\n          <div class=\"grid\">\r\n            <div class=\"field\">\r\n              <label for=\"platform\">Preferred platform</label>\r\n              <select id=\"platform\" name=\"platform\">\r\n                <option>Web</option>\r\n                <option>Mobile (iOS / Android)</option>\r\n                <option>Desktop</option>\r\n                <option>Hybrid</option>\r\n                <option>Not sure / Recommend</option>\r\n              </select>\r\n            </div>\r\n            <div class=\"field\">\r\n              <label for=\"os\">Operating systems / browsers</label>\r\n              <input id=\"os\" name=\"os\" type=\"text\" placeholder=\"e.g. Windows 10+, iOS 13+, Chrome, Firefox\" />\r\n            </div>\r\n          </div>\r\n          <div class=\"field\">\r\n            <label for=\"db\">Database / Third-party tools preferences</label>\r\n            <input id=\"db\" name=\"database\" type=\"text\" placeholder=\"e.g. MySQL, PostgreSQL, Firebase\" />\r\n          </div>\r\n        </div>\r\n\r\n        <div class=\"section\">\r\n          <div class=\"section-title\">8. Timeline &amp; Budget</div>\r\n          <div class=\"grid\">\r\n            <div class=\"field\">\r\n              <label for=\"start\">Expected start date</label>\r\n              <input id=\"start\" name=\"start_date\" type=\"date\" />\r\n            </div>\r\n            <div class=\"field\">\r\n              <label for=\"complete\">Desired completion date</label>\r\n              <input id=\"complete\" name=\"completion_date\" type=\"date\" />\r\n            </div>\r\n          </div>\r\n          <div class=\"field\">\r\n            <label for=\"budget\">Estimated budget range</label>\r\n            <input id=\"budget\" name=\"budget\" type=\"text\" placeholder=\"e.g. $10,000 - $25,000\" />\r\n          </div>\r\n        </div>\r\n\r\n        <div class=\"section\">\r\n          <div class=\"section-title\">9. Additional Notes</div>\r\n          <div class=\"field\">\r\n            <label for=\"notes\">Other important considerations or special requests</label>\r\n            <textarea id=\"notes\" name=\"notes\" placeholder=\"Licensing, support SLAs, data retention, custom terms\"></textarea>\r\n          </div>\r\n        </div>\r\n\r\n        <div class=\"section\">\r\n          <div class=\"section-title\">10. Approval</div>\r\n          <div class=\"grid\">\r\n            <div class=\"field\">\r\n              <label for=\"prepared\">Prepared by (Client)</label>\r\n              <input id=\"prepared\" name=\"prepared_by\" type=\"text\" />\r\n            </div>\r\n            <div class=\"field\">\r\n              <label for=\"approved\">Approved by (Management)</label>\r\n              <input id=\"approved\" name=\"approved_by\" type=\"text\" />\r\n            </div>\r\n          </div>\r\n          <div class=\"field\">\r\n            <label for=\"approved-date\">Approval date</label>\r\n            <input id=\"approved-date\" name=\"approval_date\" type=\"date\" />\r\n          </div>\r\n        </div>\r\n\r\n        <div class=\"actions\">\r\n          <button type=\"submit\" class=\"btn\">Submit</button>\r\n          <button type=\"reset\" class=\"btn secondary\">Reset</button>\r\n         <button type=\"button\" class=\"btn\" id=\"export-txt\">Export to TXT</button>\r\n          <div class=\"note\">You can copy &amp; paste this form into your CMS or use it as a printable intake form.</div>\r\n        </div>\r\n\r\n      </form>\r\n\r\n      <footer>\r\n        <div class=\"muted\">Tip: Provide as much detail as possible to reduce discovery time and accelerate delivery.</div>\r\n      </footer>\r\n    </div>\r\n  </div>\r\n<script>\r\n    document.getElementById(\'export-txt\').addEventListener(\'click\', () => {\r\n      const form = document.getElementById(\'requirement-form\');\r\n      let textContent = \'\';\r\n      form.querySelectorAll(\'input, textarea, select\').forEach(field => {\r\n        const label = field.previousElementSibling ? field.previousElementSibling.innerText : field.name;\r\n        const value = field.value || \'\';\r\n        textContent += `${label}: ${value}\\n`;\r\n      });\r\n      const blob = new Blob([textContent], {type: \'text/plain\'});\r\n      const link = document.createElement(\'a\');\r\n      link.href = URL.createObjectURL(blob);\r\n      link.download = \'Software_Requirement_Form.txt\';\r\n      link.click();\r\n    });\r\n  </script>\r\n</body>\r\n</html>', 11, NULL, NULL, NULL, 95, 'Published', 2, 2, '2025-09-21 13:13:40', '2025-09-21 13:18:33'),
(15, 'Application Securiy', 'application-securiy', '<!DOCTYPE html>\r\n<html lang=\"en\">\r\n<head>\r\n    <meta charset=\"UTF-8\">\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n    <title>Application Security Checklist</title>\r\n    <style>\r\n        body {\r\n            font-family: Arial, sans-serif;\r\n            background: #f7f7f7;\r\n            padding: 20px;\r\n        }\r\n        h1 {\r\n            text-align: center;\r\n            color: #333;\r\n        }\r\n        h2 {\r\n            color: #1f4e79;\r\n            margin-top: 30px;\r\n        }\r\n        ul {\r\n            list-style: none;\r\n            padding-left: 0;\r\n        }\r\n        li {\r\n            margin-bottom: 10px;\r\n        }\r\n        label {\r\n            display: flex;\r\n            align-items: center;\r\n            cursor: pointer;\r\n        }\r\n        input[type=\"checkbox\"] {\r\n            margin-right: 10px;\r\n            transform: scale(1.2);\r\n        }\r\n        .section {\r\n            background: #fff;\r\n            padding: 20px;\r\n            margin-bottom: 20px;\r\n            border-radius: 8px;\r\n            box-shadow: 0 0 8px rgba(0,0,0,0.1);\r\n        }\r\n    </style>\r\n</head>\r\n<body>\r\n\r\n    <h1>Application Security Checklist</h1>\r\n\r\n    <div class=\"section\">\r\n        <h2>1. Authentication & Authorization</h2>\r\n        <ul>\r\n            <li><label><input type=\"checkbox\"> Enforce strong password policies</label></li>\r\n            <li><label><input type=\"checkbox\"> Implement multi-factor authentication (MFA)</label></li>\r\n            <li><label><input type=\"checkbox\"> Ensure proper session management</label></li>\r\n            <li><label><input type=\"checkbox\"> Verify user roles and permissions</label></li>\r\n            <li><label><input type=\"checkbox\"> Account lockout after repeated failed logins</label></li>\r\n        </ul>\r\n    </div>\r\n\r\n    <div class=\"section\">\r\n        <h2>2. Input Validation & Data Handling</h2>\r\n        <ul>\r\n            <li><label><input type=\"checkbox\"> Validate input on client and server side</label></li>\r\n            <li><label><input type=\"checkbox\"> Sanitize input to prevent SQL Injection, XSS, command injection</label></li>\r\n            <li><label><input type=\"checkbox\"> Use parameterized queries / prepared statements</label></li>\r\n            <li><label><input type=\"checkbox\"> Encode output properly (HTML, JSON, XML)</label></li>\r\n            <li><label><input type=\"checkbox\"> Restrict file uploads by type, size, and content</label></li>\r\n        </ul>\r\n    </div>\r\n\r\n    <div class=\"section\">\r\n        <h2>3. Data Protection & Encryption</h2>\r\n        <ul>\r\n            <li><label><input type=\"checkbox\"> Encrypt sensitive data at rest</label></li>\r\n            <li><label><input type=\"checkbox\"> Encrypt data in transit using TLS 1.2+</label></li>\r\n            <li><label><input type=\"checkbox\"> Securely store and hash passwords (bcrypt, Argon2)</label></li>\r\n            <li><label><input type=\"checkbox\"> Avoid storing sensitive data in logs or URLs</label></li>\r\n            <li><label><input type=\"checkbox\"> Use secure key management practices</label></li>\r\n        </ul>\r\n    </div>\r\n\r\n    <div class=\"section\">\r\n        <h2>4. Application Configuration</h2>\r\n        <ul>\r\n            <li><label><input type=\"checkbox\"> Disable debug or verbose error messages in production</label></li>\r\n            <li><label><input type=\"checkbox\"> Remove default credentials and unnecessary services</label></li>\r\n            <li><label><input type=\"checkbox\"> Keep software and dependencies up-to-date</label></li>\r\n            <li><label><input type=\"checkbox\"> Implement Content Security Policy (CSP) headers</label></li>\r\n            <li><label><input type=\"checkbox\"> Set proper HTTP headers (X-Frame-Options, X-XSS-Protection, HSTS)</label></li>\r\n        </ul>\r\n    </div>\r\n\r\n    <div class=\"section\">\r\n        <h2>5. Logging & Monitoring</h2>\r\n        <ul>\r\n            <li><label><input type=\"checkbox\"> Log security-relevant events</label></li>\r\n            <li><label><input type=\"checkbox\"> Protect log integrity and restrict access</label></li>\r\n            <li><label><input type=\"checkbox\"> Monitor for suspicious activity</label></li>\r\n            <li><label><input type=\"checkbox\"> Set up alerting for critical incidents</label></li>\r\n        </ul>\r\n    </div>\r\n\r\n    <div class=\"section\">\r\n        <h2>6. Error & Exception Handling</h2>\r\n        <ul>\r\n            <li><label><input type=\"checkbox\"> Do not expose stack traces or system info</label></li>\r\n            <li><label><input type=\"checkbox\"> Provide generic error messages to users</label></li>\r\n            <li><label><input type=\"checkbox\"> Log detailed errors securely for developers</label></li>\r\n        </ul>\r\n    </div>\r\n\r\n    <div class=\"section\">\r\n        <h2>7. API Security</h2>\r\n        <ul>\r\n            <li><label><input type=\"checkbox\"> Authenticate all API endpoints</label></li>\r\n            <li><label><input type=\"checkbox\"> Use tokens or OAuth2 for authorization</label></li>\r\n            <li><label><input type=\"checkbox\"> Rate-limit API requests</label></li>\r\n            <li><label><input type=\"checkbox\"> Validate and sanitize all API inputs</label></li>\r\n            <li><label><input type=\"checkbox\"> Use HTTPS for API communication</label></li>\r\n        </ul>\r\n    </div>\r\n\r\n    <div class=\"section\">\r\n        <h2>8. Third-Party Libraries & Dependencies</h2>\r\n        <ul>\r\n            <li><label><input type=\"checkbox\"> Scan for known vulnerabilities in libraries</label></li>\r\n            <li><label><input type=\"checkbox\"> Use trusted sources for dependencies only</label></li>\r\n            <li><label><input type=\"checkbox\"> Remove unused or deprecated libraries</label></li>\r\n        </ul>\r\n    </div>\r\n\r\n    <div class=\"section\">\r\n        <h2>9. Secure Development Practices</h2>\r\n        <ul>\r\n            <li><label><input type=\"checkbox\"> Follow the principle of least privilege</label></li>\r\n            <li><label><input type=\"checkbox\"> Conduct regular security code reviews</label></li>\r\n            <li><label><input type=\"checkbox\"> Perform threat modeling during design phase</label></li>\r\n            <li><label><input type=\"checkbox\"> Implement secure coding guidelines (OWASP Top 10)</label></li>\r\n            <li><label><input type=\"checkbox\"> Conduct static and dynamic code analysis</label></li>\r\n        </ul>\r\n    </div>\r\n\r\n    <div class=\"section\">\r\n        <h2>10. Testing & Vulnerability Management</h2>\r\n        <ul>\r\n            <li><label><input type=\"checkbox\"> Perform penetration testing periodically</label></li>\r\n            <li><label><input type=\"checkbox\"> Test for OWASP Top 10 vulnerabilities</label></li>\r\n            <li><label><input type=\"checkbox\"> Fix vulnerabilities based on severity and priority</label></li>\r\n            <li><label><input type=\"checkbox\"> Track vulnerability remediation</label></li>\r\n            <li><label><input type=\"checkbox\"> Implement bug bounty / responsible disclosure programs</label></li>\r\n        </ul>\r\n    </div>\r\n\r\n    <div class=\"section\">\r\n        <h2>11. Backup & Disaster Recovery</h2>\r\n        <ul>\r\n            <li><label><input type=\"checkbox\"> Encrypt backups and store securely</label></li>\r\n            <li><label><input type=\"checkbox\"> Test backup restoration regularly</label></li>\r\n            <li><label><input type=\"checkbox\"> Maintain incident response plan</label></li>\r\n        </ul>\r\n    </div>\r\n\r\n</body>\r\n</html>', 1, NULL, NULL, NULL, 108, 'Published', 2, NULL, '2025-09-21 14:18:52', '2025-09-21 14:18:52');
INSERT INTO `website_pages` (`id`, `title`, `slug`, `content`, `category_id`, `meta_title`, `meta_description`, `meta_keywords`, `read_count`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(16, 'Software Development Agreement', 'software-development-agreement', '<!doctype html>\r\n<html lang=\"en\">\r\n<head>\r\n  <meta charset=\"utf-8\">\r\n  <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">\r\n  <title>Software Development Agreement - Template</title>\r\n  <style>\r\n    :root{--bg:#f7fafc;--card:#ffffff;--muted:#6b7280;--accent:#0f62fe;--border:#e6edf3}\r\n    *{box-sizing:border-box}\r\n    body{font-family:Inter, ui-sans-serif, system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial; background:var(--bg); color:#0f1724; margin:0; line-height:1.55}\r\n    .wrap{max-width:980px;margin:28px auto;padding:24px}\r\n    .card{background:var(--card);border:1px solid var(--border);border-radius:12px;padding:28px;box-shadow:0 6px 18px rgba(15,23,36,0.04)}\r\n    header{display:flex;align-items:center;justify-content:space-between;margin-bottom:18px}\r\n    header h1{font-size:20px;margin:0}\r\n    header p{margin:0;color:var(--muted)}\r\n    .meta{display:flex;gap:12px;flex-wrap:wrap;margin-bottom:18px}\r\n    .meta .box{padding:10px 12px;border-radius:8px;background:#f1f5f9;border:1px solid #eef2f7;color:#0b1220;font-weight:600}\r\n    .actions{display:flex;gap:8px}\r\n    .btn{border:0;padding:10px 12px;border-radius:8px;font-weight:600;cursor:pointer}\r\n    .btn.primary{background:var(--accent);color:white}\r\n    .btn.ghost{background:transparent;border:1px solid var(--border)}\r\n    main h2{font-size:16px;margin-top:22px;margin-bottom:8px}\r\n    .clause{margin-bottom:12px}\r\n    .clause h3{font-size:14px;margin:0 0 6px 0}\r\n    .clause p, .clause ul{margin:0 0 8px 0;color:#12202b}\r\n    ul{padding-left:20px}\r\n    table{width:100%;border-collapse:collapse;margin-top:8px}\r\n    td, th{padding:8px;border:1px solid #eef2f7;text-align:left}\r\n    .two-col{display:grid;grid-template-columns:1fr 1fr;gap:14px}\r\n    .signature{display:flex;gap:28px;margin-top:20px}\r\n    .sig-block{flex:1;padding:14px;border-radius:8px;border:1px dashed #e6edf3;background:#fbfdff}\r\n    footer{margin-top:18px;color:var(--muted);font-size:13px}\r\n    /* Print styles */\r\n    @media print{\r\n      body{background:white}\r\n      .wrap{box-shadow:none;margin:0;padding:0}\r\n      .actions{display:none}\r\n    }\r\n    /* Responsive */\r\n    @media (max-width:700px){.two-col{grid-template-columns:1fr}}\r\n  </style>\r\n</head>\r\n<body>\r\n  <div class=\"wrap\">\r\n    <div class=\"card\">\r\n      <header>\r\n        <div>\r\n          <h1>Software Development Agreement (SDA)</h1>\r\n          <p>Effective Date: <strong>[Date]</strong></p>\r\n        </div>\r\n        <div class=\"actions\">\r\n          <button class=\"btn primary\" onclick=\"window.print()\">Print / Save as PDF</button>\r\n          <button class=\"btn ghost\" id=\"copyBtn\">Copy HTML</button>\r\n        </div>\r\n      </header>\r\n\r\n      <section class=\"meta\">\r\n        <div class=\"box\">Developer: <strong>[Software Company Name]</strong></div>\r\n        <div class=\"box\">Client: <strong>[Client Name]</strong></div>\r\n        <div class=\"box\">Jurisdiction: <strong>[Jurisdiction]</strong></div>\r\n      </section>\r\n\r\n      <main>\r\n        <p>This <strong>Software Development Agreement</strong> (\"Agreement\") is entered into as of the Effective Date above between the Developer and the Client. The Parties agree as follows:</p>\r\n\r\n        <div class=\"clause\">\r\n          <h2>1. Definitions</h2>\r\n          <ul>\r\n            <li><strong>Software</strong>: the application, system, and related materials to be developed as described in Exhibit A.</li>\r\n            <li><strong>Specifications</strong>: detailed requirements in Exhibit A.</li>\r\n            <li><strong>Deliverables</strong>: outputs to be delivered, listed in Exhibit B.</li>\r\n            <li><strong>Acceptance</strong>: Client\'s written confirmation that a Deliverable meets the Specifications.</li>\r\n          </ul>\r\n        </div>\r\n\r\n        <div class=\"clause\">\r\n          <h2>2. Project Scope & Services</h2>\r\n          <p>The Developer shall design, develop, test, and deliver the Software in accordance with Exhibit A and the Deliverables set out in Exhibit B. Services include project planning, system design, development, quality assurance, deployment, and documentation as specified.</p>\r\n        </div>\r\n\r\n        <div class=\"clause\">\r\n          <h2>3. Client Responsibilities</h2>\r\n          <ul>\r\n            <li>Provide information, content, and access required for development in a timely manner.</li>\r\n            <li>Appoint a project representative for approvals and communication.</li>\r\n            <li>Review and provide feedback within the timeframes set out in Exhibit C.</li>\r\n            <li>Make payments per Section 5.</li>\r\n          </ul>\r\n        </div>\r\n\r\n        <div class=\"clause\">\r\n          <h2>4. Project Timeline</h2>\r\n          <p>The Project Schedule is in Exhibit C. Delays caused by the Client (late approvals, missing resources) will extend timelines accordingly.</p>\r\n        </div>\r\n\r\n        <div class=\"clause\">\r\n          <h2>5. Fees & Payment Terms</h2>\r\n          <ul>\r\n            <li><strong>Total Project Fee:</strong> <em>[Amount & Currency]</em></li>\r\n            <li><strong>Payment Schedule:</strong> see Exhibit C (Milestones & Payment %).</li>\r\n            <li>Third-party costs (licenses, hosting) are billed separately with prior approval.</li>\r\n            <li>Late payments may incur interest of <em>[X% per month]</em> after <em>[X days]</em> past due.</li>\r\n          </ul>\r\n        </div>\r\n\r\n        <div class=\"clause\">\r\n          <h2>6. Change Requests</h2>\r\n          <p>Any change to scope shall be made by a written Change Request describing the change, cost impact, and schedule impact. No change is effective until signed by both Parties.</p>\r\n        </div>\r\n\r\n        <div class=\"clause\">\r\n          <h2>7. Acceptance Testing</h2>\r\n          <p>The Developer shall deliver the Software for Client testing. The Client has <strong>[X days]</strong> to perform acceptance testing. If the Client provides no written defects within the acceptance period, the Deliverable will be deemed accepted.</p>\r\n        </div>\r\n\r\n        <div class=\"clause\">\r\n          <h2>8. Intellectual Property</h2>\r\n          <p>Upon full payment, ownership of the Software and associated IP shall transfer to the Client, except Developer\'s Pre-Existing Materials (tools, libraries, frameworks). The Developer grants a perpetual, royalty-free license to use Pre-Existing Materials included in the Software.</p>\r\n        </div>\r\n\r\n        <div class=\"clause\">\r\n          <h2>9. Confidentiality</h2>\r\n          <p>Both Parties shall keep confidential any non-public information exchanged and not disclose it except as required by law. This obligation survives termination for <strong>[X years]</strong>.</p>\r\n        </div>\r\n\r\n        <div class=\"clause\">\r\n          <h2>10. Warranties & Remedies</h2>\r\n          <ul>\r\n            <li>The Developer warrants the Software will substantially conform to the Specifications for <strong>[X months]</strong> after Acceptance.</li>\r\n            <li>Developer does not warrant the Software will be error-free. The Developer\'s sole obligation for breach of warranty is to correct defects discovered within the warranty period.</li>\r\n          </ul>\r\n        </div>\r\n\r\n        <div class=\"clause\">\r\n          <h2>11. Support & Maintenance</h2>\r\n          <p>Bug fixes during the warranty period are provided at no additional cost. Ongoing support and enhancements require a separate Support & Maintenance Agreement.</p>\r\n        </div>\r\n\r\n        <div class=\"clause\">\r\n          <h2>12. Termination</h2>\r\n          <p>Either Party may terminate this Agreement with <strong>[X days]</strong> written notice if the other Party materially breaches and fails to cure within <strong>[X days]</strong>. Upon termination, the Client pays for work performed up to the termination date and the Developer delivers work-in-progress upon receipt of payment.</p>\r\n        </div>\r\n\r\n        <div class=\"clause\">\r\n          <h2>13. Indemnification</h2>\r\n          <p>The Developer shall indemnify the Client from third-party claims that the Software infringes third-party IP, provided the Client promptly notifies the Developer and allows the Developer to control defense and settlement. The Client shall indemnify the Developer for claims arising from Client-provided materials, data, or instructions.</p>\r\n        </div>\r\n\r\n        <div class=\"clause\">\r\n          <h2>14. Limitation of Liability</h2>\r\n          <p>Neither Party shall be liable for indirect, incidental, or consequential damages. The Developer\'s aggregate liability shall not exceed the total fees paid by the Client under this Agreement.</p>\r\n        </div>\r\n\r\n        <div class=\"clause\">\r\n          <h2>15. Force Majeure</h2>\r\n          <p>Neither Party is liable for delays caused by events beyond reasonable control, including acts of God, war, strikes, or government actions.</p>\r\n        </div>\r\n\r\n        <div class=\"clause\">\r\n          <h2>16. Governing Law & Dispute Resolution</h2>\r\n          <p>This Agreement is governed by the laws of <strong>[Jurisdiction]</strong>. Disputes shall be resolved by <strong>[arbitration/mediation/courts]</strong> in <strong>[Location]</strong> unless otherwise agreed.</p>\r\n        </div>\r\n\r\n        <div class=\"clause\">\r\n          <h2>17. Miscellaneous</h2>\r\n          <ul>\r\n            <li>This Agreement (including Exhibits) constitutes the entire agreement between the Parties.</li>\r\n            <li>No amendment is effective unless in writing and signed by both Parties.</li>\r\n            <li>Neither Party may assign the Agreement without the other\'s written consent, except to an affiliate or successor by merger.</li>\r\n            <li>Notices must be in writing and sent to the addresses in the header of this Agreement.</li>\r\n          </ul>\r\n        </div>\r\n\r\n        <div class=\"two-col\">\r\n          <div>\r\n            <h2>Signatures</h2>\r\n            <p>IN WITNESS WHEREOF, the Parties have executed this Agreement as of the Effective Date.</p>\r\n            <div class=\"signature\">\r\n              <div class=\"sig-block\">\r\n                <div><strong>Developer</strong></div>\r\n                <p>Name: __________________________</p>\r\n                <p>Title: __________________________</p>\r\n                <p>Signature: ______________________</p>\r\n                <p>Date: __________________________</p>\r\n              </div>\r\n\r\n              <div class=\"sig-block\">\r\n                <div><strong>Client</strong></div>\r\n                <p>Name: __________________________</p>\r\n                <p>Title: __________________________</p>\r\n                <p>Signature: ______________________</p>\r\n                <p>Date: __________________________</p>\r\n              </div>\r\n            </div>\r\n          </div>\r\n\r\n          <div>\r\n            <h2>Exhibits (Summary)</h2>\r\n            <h3>Exhibit A - Project Scope & Specifications</h3>\r\n            <p>The Software will include modules such as User Management, Dashboard & Analytics, Admin Panel, Integration with third-party services, Reports & Exports, and Mobile Responsiveness. Detailed feature list should be appended here.</p>\r\n\r\n            <h3>Exhibit B - Deliverables</h3>\r\n            <ul>\r\n              <li>Prototype: Wireframes & UI/UX designs</li>\r\n              <li>Alpha Version: Core functionality</li>\r\n              <li>Beta Version: Feature-complete for testing</li>\r\n              <li>Final Release: Stable software after acceptance</li>\r\n              <li>Documentation and Training</li>\r\n            </ul>\r\n\r\n            <h3>Exhibit C - Project Timeline & Milestones</h3>\r\n            <table>\r\n              <thead>\r\n                <tr><th>Milestone</th><th>Description</th><th>Delivery Date</th><th>Payment %</th></tr>\r\n              </thead>\r\n              <tbody>\r\n                <tr><td>Milestone 1</td><td>Signing of Agreement</td><td>[Date]</td><td>20%</td></tr>\r\n                <tr><td>Milestone 2</td><td>Prototype & UI/UX approval</td><td>[Date]</td><td>20%</td></tr>\r\n                <tr><td>Milestone 3</td><td>Beta version delivery</td><td>[Date]</td><td>30%</td></tr>\r\n                <tr><td>Milestone 4</td><td>Final delivery & acceptance</td><td>[Date]</td><td>30%</td></tr>\r\n              </tbody>\r\n            </table>\r\n\r\n          </div>\r\n        </div>\r\n\r\n        <footer>\r\n          <p>Template generated for convenience. Replace bracketed placeholders (e.g., [Date], [Amount & Currency], [Jurisdiction]) with actual values before signing. Consider review by legal counsel to ensure compliance with local laws and regulations.</p>\r\n        </footer>\r\n      </main>\r\n    </div>\r\n  </div>\r\n\r\n  <script>\r\n    // Copy HTML button\r\n    document.getElementById(\'copyBtn\').addEventListener(\'click\', async function(){\r\n      try{\r\n        await navigator.clipboard.writeText(document.documentElement.outerHTML);\r\n        this.textContent = \'Copied!\';\r\n        setTimeout(()=> this.textContent = \'Copy HTML\', 2000);\r\n      }catch(e){\r\n        alert(\'Copy failed — you can select and copy the page source manually.\');\r\n      }\r\n    });\r\n  </script>\r\n</body>\r\n</html>', 1, NULL, NULL, NULL, 87, 'Published', 2, 2, '2025-09-23 06:20:02', '2025-09-23 06:28:03'),
(17, 'Software Handover Checklist', 'software-handover-checklist', '<!doctype html>\r\n<html lang=\"en\">\r\n<head>\r\n  <meta charset=\"utf-8\" />\r\n  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />\r\n  <title>Software Handover Checklist — Champion Academy</title>\r\n  <style>\r\n    :root{\r\n      --bg:#0f1724; --card:#0b1220; --muted:#9aa4b2; --accent:#6ee7b7; --accent-2:#60a5fa; --glass:rgba(255,255,255,0.04);\r\n      --radius:12px; --pad:18px;\r\n      font-family: Inter, ui-sans-serif, system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial;\r\n    }\r\n    html,body{height:100%;}\r\n    body{\r\n      margin:0; background:linear-gradient(180deg,#071027 0%, #071827 50%); color:#e6eef6; -webkit-font-smoothing:antialiased; padding:36px; box-sizing:border-box;\r\n    }\r\n    .container{max-width:980px;margin:0 auto;}\r\n    header{display:flex;gap:18px;align-items:center;justify-content:space-between;margin-bottom:18px}\r\n    h1{font-size:20px;margin:0}\r\n    p.lead{color:var(--muted);margin:4px 0 0;font-size:13px}\r\n\r\n    .card{background:linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01)); border-radius:var(--radius); padding:var(--pad); box-shadow:0 6px 24px rgba(2,6,23,0.6);}\r\n\r\n    .controls{display:flex;gap:12px;align-items:center}\r\n    button{background:transparent;border:1px solid rgba(255,255,255,0.06);color:var(--accent-2);padding:8px 12px;border-radius:10px;cursor:pointer;font-weight:600}\r\n    button.ghost{border:1px dashed rgba(255,255,255,0.04);color:var(--muted)}\r\n\r\n    .progress-wrap{margin:18px 0}\r\n    .progress{height:12px;background:var(--glass);border-radius:999px;overflow:hidden}\r\n    .progress > i{display:block;height:100%;background:linear-gradient(90deg,var(--accent),var(--accent-2));width:0%;transition:width .25s ease}\r\n    .progress-meta{display:flex;justify-content:space-between;font-size:13px;color:var(--muted);margin-top:8px}\r\n\r\n    .section{margin-top:18px}\r\n    .section h3{margin:0 0 10px 0;font-size:15px}\r\n    .items{display:grid;grid-template-columns:repeat(2,1fr);gap:10px}\r\n    .item{display:flex;align-items:flex-start;gap:12px;padding:12px;border-radius:10px;background:rgba(255,255,255,0.02);border:1px solid rgba(255,255,255,0.02)}\r\n    .item label{flex:1;cursor:pointer}\r\n    .item input[type=checkbox]{width:18px;height:18px;border-radius:6px;margin-top:3px}\r\n    .small{font-size:13px;color:var(--muted);margin-top:6px}\r\n\r\n    footer{margin-top:20px;display:flex;justify-content:space-between;align-items:center}\r\n    .actions{display:flex;gap:10px}\r\n\r\n    @media (max-width:720px){\r\n      .items{grid-template-columns:1fr}\r\n      header{flex-direction:column;align-items:flex-start;gap:8px}\r\n      .controls{width:100%;justify-content:space-between}\r\n    }\r\n  </style>\r\n</head>\r\n<body>\r\n  <div class=\"container\">\r\n    <header>\r\n      <div>\r\n        <h1>Software Handover Checklist</h1>\r\n        <p class=\"lead\">Use this checklist to verify every item before final project handover.</p>\r\n      </div>\r\n      <div class=\"controls\">\r\n        <button id=\"printBtn\">Print / Save PDF</button>\r\n        <button id=\"resetBtn\" class=\"ghost\">Reset</button>\r\n      </div>\r\n    </header>\r\n\r\n    <div class=\"card\">\r\n      <div class=\"progress-wrap\">\r\n        <div class=\"progress\"><i id=\"bar\"></i></div>\r\n        <div class=\"progress-meta\"><span id=\"countText\">0 of 0 completed</span><span id=\"percentText\">0%</span></div>\r\n      </div>\r\n\r\n      <!-- Sections -->\r\n\r\n      <section class=\"section\">\r\n        <h3>Documentation</h3>\r\n        <div class=\"items\" id=\"docs\">\r\n          <div class=\"item\"><input type=\"checkbox\" data-group=\"docs\" id=\"c1\"><label for=\"c1\">Project overview & scope document<div class=\"small\">Purpose, deliverables, timeline</div></label></div>\r\n          <div class=\"item\"><input type=\"checkbox\" data-group=\"docs\" id=\"c2\"><label for=\"c2\">Technical documentation (architecture, APIs)</label></div>\r\n          <div class=\"item\"><input type=\"checkbox\" data-group=\"docs\" id=\"c3\"><label for=\"c3\">User manuals / user guide</label></div>\r\n          <div class=\"item\"><input type=\"checkbox\" data-group=\"docs\" id=\"c4\"><label for=\"c4\">Administrator guide (install, deploy)</label></div>\r\n          <div class=\"item\"><input type=\"checkbox\" data-group=\"docs\" id=\"c5\"><label for=\"c5\">Maintenance & troubleshooting guide</label></div>\r\n          <div class=\"item\"><input type=\"checkbox\" data-group=\"docs\" id=\"c6\"><label for=\"c6\">Change log & version history</label></div>\r\n        </div>\r\n      </section>\r\n\r\n      <section class=\"section\">\r\n        <h3>Source Code & Assets</h3>\r\n        <div class=\"items\" id=\"code\">\r\n          <div class=\"item\"><input type=\"checkbox\" data-group=\"code\" id=\"c7\"><label for=\"c7\">Source code repository (Git) access / ZIP</label></div>\r\n          <div class=\"item\"><input type=\"checkbox\" data-group=\"code\" id=\"c8\"><label for=\"c8\">Database schema, migration & seed scripts</label></div>\r\n          <div class=\"item\"><input type=\"checkbox\" data-group=\"code\" id=\"c9\"><label for=\"c9\">Configuration files & env examples</label></div>\r\n          <div class=\"item\"><input type=\"checkbox\" data-group=\"code\" id=\"c10\"><label for=\"c10\">Design files and static assets</label></div>\r\n          <div class=\"item\"><input type=\"checkbox\" data-group=\"code\" id=\"c11\"><label for=\"c11\">Third-party libraries & licenses list</label></div>\r\n          <div class=\"item\"><input type=\"checkbox\" data-group=\"code\" id=\"c12\"><label for=\"c12\">Build scripts & CI/CD pipelines</label></div>\r\n        </div>\r\n      </section>\r\n\r\n      <section class=\"section\">\r\n        <h3>Deployment & Environment</h3>\r\n        <div class=\"items\" id=\"deploy\">\r\n          <div class=\"item\"><input type=\"checkbox\" data-group=\"deploy\" id=\"c13\"><label for=\"c13\">Production deployment tested</label></div>\r\n          <div class=\"item\"><input type=\"checkbox\" data-group=\"deploy\" id=\"c14\"><label for=\"c14\">Staging / test environment details</label></div>\r\n          <div class=\"item\"><input type=\"checkbox\" data-group=\"deploy\" id=\"c15\"><label for=\"c15\">Server & hosting credentials (shared securely)</label></div>\r\n          <div class=\"item\"><input type=\"checkbox\" data-group=\"deploy\" id=\"c16\"><label for=\"c16\">Domain, DNS, SSL certificate info</label></div>\r\n          <div class=\"item\"><input type=\"checkbox\" data-group=\"deploy\" id=\"c17\"><label for=\"c17\">Backup & recovery procedures</label></div>\r\n          <div class=\"item\"><input type=\"checkbox\" data-group=\"deploy\" id=\"c18\"><label for=\"c18\">Monitoring & logging setup documented</label></div>\r\n        </div>\r\n      </section>\r\n\r\n      <section class=\"section\">\r\n        <h3>Credentials & Access</h3>\r\n        <div class=\"items\" id=\"access\">\r\n          <div class=\"item\"><input type=\"checkbox\" data-group=\"access\" id=\"c19\"><label for=\"c19\">Admin/system login credentials</label></div>\r\n          <div class=\"item\"><input type=\"checkbox\" data-group=\"access\" id=\"c20\"><label for=\"c20\">Database credentials</label></div>\r\n          <div class=\"item\"><input type=\"checkbox\" data-group=\"access\" id=\"c21\"><label for=\"c21\">API keys & 3rd party tokens (placeholders)</label></div>\r\n          <div class=\"item\"><input type=\"checkbox\" data-group=\"access\" id=\"c22\"><label for=\"c22\">Email/SMTP & notification settings</label></div>\r\n          <div class=\"item\"><input type=\"checkbox\" data-group=\"access\" id=\"c23\"><label for=\"c23\">Payment gateway / SMS provider access</label></div>\r\n          <div class=\"item\"><input type=\"checkbox\" data-group=\"access\" id=\"c24\"><label for=\"c24\">Access transfer steps documented</label></div>\r\n        </div>\r\n      </section>\r\n\r\n      <section class=\"section\">\r\n        <h3>Testing & QA</h3>\r\n        <div class=\"items\" id=\"qa\">\r\n          <div class=\"item\"><input type=\"checkbox\" data-group=\"qa\" id=\"c25\"><label for=\"c25\">Test cases & results shared</label></div>\r\n          <div class=\"item\"><input type=\"checkbox\" data-group=\"qa\" id=\"c26\"><label for=\"c26\">UAT sign-off from client</label></div>\r\n          <div class=\"item\"><input type=\"checkbox\" data-group=\"qa\" id=\"c27\"><label for=\"c27\">Bug tracker status cleared</label></div>\r\n          <div class=\"item\"><input type=\"checkbox\" data-group=\"qa\" id=\"c28\"><label for=\"c28\">Performance & load test reports</label></div>\r\n          <div class=\"item\"><input type=\"checkbox\" data-group=\"qa\" id=\"c29\"><label for=\"c29\">Security review / vulnerability scans</label></div>\r\n          <div class=\"item\"><input type=\"checkbox\" data-group=\"qa\" id=\"c30\"><label for=\"c30\">Accessibility checklist (if applicable)</label></div>\r\n        </div>\r\n      </section>\r\n\r\n      <section class=\"section\">\r\n        <h3>Training, Support & Legal</h3>\r\n        <div class=\"items\" id=\"final\">\r\n          <div class=\"item\"><input type=\"checkbox\" data-group=\"final\" id=\"c31\"><label for=\"c31\">Training sessions delivered & materials shared</label></div>\r\n          <div class=\"item\"><input type=\"checkbox\" data-group=\"final\" id=\"c32\"><label for=\"c32\">Support & warranty terms documented</label></div>\r\n          <div class=\"item\"><input type=\"checkbox\" data-group=\"final\" id=\"c33\"><label for=\"c33\">Contact person for technical support</label></div>\r\n          <div class=\"item\"><input type=\"checkbox\" data-group=\"final\" id=\"c34\"><label for=\"c34\">Final invoice & payment confirmation</label></div>\r\n          <div class=\"item\"><input type=\"checkbox\" data-group=\"final\" id=\"c35\"><label for=\"c35\">IP rights transfer documented & signed</label></div>\r\n          <div class=\"item\"><input type=\"checkbox\" data-group=\"final\" id=\"c36\"><label for=\"c36\">Client acknowledgment of handover</label></div>\r\n        </div>\r\n      </section>\r\n\r\n      <footer>\r\n        <div class=\"actions\">\r\n          <button id=\"selectAll\">Mark all</button>\r\n          <button id=\"clearCompleted\" class=\"ghost\">Clear completed</button>\r\n        </div>\r\n        <div style=\"color:var(--muted);font-size:13px\">Prepared by <strong>EduINNTECH</strong></div>\r\n      </footer>\r\n    </div>\r\n  </div>\r\n\r\n  <script>\r\n    const checkboxes = Array.from(document.querySelectorAll(\'input[type=checkbox]\'));\r\n    const bar = document.getElementById(\'bar\');\r\n    const countText = document.getElementById(\'countText\');\r\n    const percentText = document.getElementById(\'percentText\');\r\n    const printBtn = document.getElementById(\'printBtn\');\r\n    const resetBtn = document.getElementById(\'resetBtn\');\r\n    const selectAll = document.getElementById(\'selectAll\');\r\n    const clearCompleted = document.getElementById(\'clearCompleted\');\r\n\r\n    function updateProgress(){\r\n      const total = checkboxes.length;\r\n      const done = checkboxes.filter(c=>c.checked).length;\r\n      const pct = total? Math.round(done/total*100) : 0;\r\n      bar.style.width = pct + \'%\';\r\n      countText.textContent = `${done} of ${total} completed`;\r\n      percentText.textContent = pct + \'%\';\r\n    }\r\n\r\n    checkboxes.forEach(cb => cb.addEventListener(\'change\', updateProgress));\r\n    updateProgress();\r\n\r\n    printBtn.addEventListener(\'click\', ()=>window.print());\r\n    resetBtn.addEventListener(\'click\', ()=>{\r\n      if(!confirm(\'Reset all checklist items?\')) return;\r\n      checkboxes.forEach(c=>c.checked=false); updateProgress();\r\n    });\r\n\r\n    selectAll.addEventListener(\'click\', ()=>{checkboxes.forEach(c=>c.checked=true); updateProgress();});\r\n    clearCompleted.addEventListener(\'click\', ()=>{checkboxes.filter(c=>c.checked).forEach(c=>c.checked=false); updateProgress();});\r\n\r\n    // Persist state in sessionStorage (so refresh keeps status)\r\n    const storageKey = \'handover_checklist_state_v1\';\r\n    function saveState(){\r\n      const state = checkboxes.map(c=>c.checked ? 1 : 0).join(\'\');\r\n      sessionStorage.setItem(storageKey, state);\r\n    }\r\n    function loadState(){\r\n      const state = sessionStorage.getItem(storageKey);\r\n      if(!state) return;\r\n      checkboxes.forEach((c,i)=>{ c.checked = state[i]===\'1\'; });\r\n      updateProgress();\r\n    }\r\n    checkboxes.forEach(c=>c.addEventListener(\'change\', saveState));\r\n    loadState();\r\n  </script>\r\n</body>\r\n</html>', 1, NULL, NULL, NULL, 143, 'Published', 2, 2, '2025-09-27 15:51:50', '2025-09-27 15:54:28'),
(18, 'Website Maintenance Agreement', 'website-maintenance-agreement', '<!doctype html>\r\n<html lang=\"en\">\r\n<head>\r\n  <meta charset=\"utf-8\" />\r\n  <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />\r\n  <title>Website Maintenance Agreement — [Your Company]</title>\r\n  <style>\r\n    :root{\r\n      --bg:#f3f4f6;\r\n      --card:#ffffff;\r\n      --muted:#6b7280;\r\n      --accent:#0ea5a4;\r\n      --accent-dark:#0b7f7d;\r\n      --glass: rgba(255,255,255,0.6);\r\n      --radius:14px;\r\n      --max:900px;\r\n      --mono: \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif;\r\n    }\r\n    *{box-sizing:border-box}\r\n    body{\r\n      margin:0;\r\n      font-family:var(--mono);\r\n      background:linear-gradient(180deg,var(--bg),#eef2f7);\r\n      color:#111827;\r\n      -webkit-font-smoothing:antialiased;\r\n      -moz-osx-font-smoothing:grayscale;\r\n      padding:40px 20px;\r\n      display:flex;\r\n      justify-content:center;\r\n    }\r\n    .container{\r\n      width:100%;\r\n      max-width:var(--max);\r\n      background:var(--card);\r\n      border-radius:20px;\r\n      box-shadow:0 10px 30px rgba(2,6,23,0.08);\r\n      overflow:hidden;\r\n    }\r\n    header{\r\n      padding:28px 32px;\r\n      background:linear-gradient(90deg, rgba(14,165,164,0.06), rgba(59,130,246,0.03));\r\n      display:flex;\r\n      align-items:center;\r\n      gap:18px;\r\n    }\r\n    .logo{\r\n      width:64px;height:64px;border-radius:12px;background:linear-gradient(135deg,var(--accent),#60a5fa);display:flex;align-items:center;justify-content:center;color:white;font-weight:700;font-size:18px\r\n    }\r\n    h1{font-size:20px;margin:0}\r\n    .sub{color:var(--muted);font-size:13px;margin-top:6px}\r\n\r\n    main{display:grid;grid-template-columns:1fr;gap:24px;padding:28px 32px}\r\n\r\n    .meta{display:flex;gap:12px;flex-wrap:wrap}\r\n    .meta .pill{background:var(--glass);padding:10px 12px;border-radius:10px;font-size:13px;color:var(--muted)}\r\n\r\n    .cards{display:flex;gap:12px;flex-wrap:wrap}\r\n    .plan{flex:1 1 200px;background:linear-gradient(180deg,#fff,#fbfdff);border-radius:12px;padding:14px;border:1px solid rgba(15,23,42,0.04)}\r\n    .plan h3{margin:0 0 6px 0}\r\n    .price{font-size:18px;color:var(--accent-dark);font-weight:700}\r\n    .btn{display:inline-block;padding:8px 12px;border-radius:10px;background:var(--accent);color:#fff;text-decoration:none;font-weight:600;margin-top:10px}\r\n\r\n    .section{background:#fff;border-radius:12px;padding:18px;border:1px solid rgba(15,23,42,0.04)}\r\n    .section h2{margin-top:0}\r\n    dl{display:grid;grid-template-columns:170px 1fr;gap:12px 18px}\r\n    dt{color:var(--muted);font-size:13px}\r\n    dd{margin:0;font-size:14px}\r\n\r\n    .clauses{display:flex;flex-direction:column;gap:12px}\r\n    .clause{padding:12px;border-left:4px solid rgba(14,165,164,0.12);background:linear-gradient(180deg,rgba(14,165,164,0.02),transparent);border-radius:8px}\r\n    .clause h3{margin:0;font-size:15px}\r\n    .clause p{margin:6px 0 0 0;color:var(--muted);font-size:14px}\r\n\r\n    .signatures{display:flex;gap:18px;margin-top:18px;flex-wrap:wrap}\r\n    .sig{flex:1;background:linear-gradient(180deg,#fff,#fbfdff);padding:14px;border-radius:12px;border:1px dashed rgba(15,23,42,0.06);min-height:90px;display:flex;flex-direction:column;justify-content:space-between}\r\n    .sig .name{font-weight:700}\r\n    .sig .role{color:var(--muted);font-size:13px}\r\n\r\n    footer{padding:18px 32px;background:#fbfdff;border-top:1px solid rgba(15,23,42,0.03);display:flex;justify-content:space-between;align-items:center;gap:12px}\r\n    .muted{color:var(--muted);font-size:13px}\r\n\r\n    .actions{display:flex;gap:8px}\r\n    .outline{background:transparent;border:1px solid rgba(15,23,42,0.06);padding:10px 12px;border-radius:10px}\r\n\r\n    /* responsive */\r\n    @media (max-width:760px){\r\n      dl{grid-template-columns:1fr}\r\n      .cards{flex-direction:column}\r\n      .signatures{flex-direction:column}\r\n      footer{flex-direction:column;align-items:flex-start}\r\n    }\r\n\r\n    /* Print friendly */\r\n    @media print{\r\n      body{background:white;padding:0}\r\n      .container{box-shadow:none;border-radius:0}\r\n      header,footer{display:none}\r\n    }\r\n  </style>\r\n</head>\r\n<body>\r\n  <div class=\"container\" role=\"document\">\r\n    <header>\r\n      <div class=\"logo\">WM</div>\r\n      <div>\r\n        <h1>Website Maintenance Agreement</h1>\r\n        <div class=\"sub\">Prepared for <strong>[Client Name]</strong> — Prepared by <strong>[Your Company]</strong></div>\r\n      </div>\r\n    </header>\r\n\r\n    <main>\r\n      <section class=\"section\">\r\n        <div style=\"display:flex;justify-content:space-between;align-items:center;gap:12px;flex-wrap:wrap\">\r\n          <div>\r\n            <strong>Agreement Date:</strong> <span class=\"muted\">[Date]</span><br>\r\n            <strong>Term:</strong> <span class=\"muted\">6 months minimum (auto-renews monthly)</span>\r\n          </div>\r\n          <div class=\"meta\">\r\n            <div class=\"pill\">Client: [Client Company]</div>\r\n            <div class=\"pill\">Provider: [Your Company]</div>\r\n            <div class=\"pill\">Governing Law: [Country/State]</div>\r\n          </div>\r\n        </div>\r\n\r\n        <hr style=\"margin:14px 0;border:none;border-top:1px solid rgba(15,23,42,0.04)\">\r\n\r\n        <h2>Scope of Services</h2>\r\n        <p class=\"muted\">The Service Provider agrees to provide the following website maintenance services as part of the chosen plan.</p>\r\n        <ul style=\"margin:10px 0 0 18px;color:var(--muted)\">\r\n          <li>Regular CMS, theme, and plugin updates; server patches.</li>\r\n          <li>Automated & manual backups (files + database) and restore support.</li>\r\n          <li>Security monitoring, malware scanning, and basic remediation.</li>\r\n          <li>Content updates, performance optimization, and SEO maintenance.</li>\r\n          <li>Basic bug fixes, uptime monitoring, and monthly reporting.</li>\r\n        </ul>\r\n      </section>\r\n\r\n      <section class=\"section\">\r\n        <h2>Service Plans & Pricing</h2>\r\n        <div class=\"cards\">\r\n          <div class=\"plan\" aria-labelledby=\"basic\">\r\n            <h3 id=\"basic\">Basic Plan <span class=\"muted\" style=\"font-weight:600\">(Essential)</span></h3>\r\n            <div class=\"price\">$150 / month</div>\r\n            <p class=\"muted\" style=\"margin-top:8px\">Weekly backups, monthly updates, uptime monitoring, minor fixes.</p>\r\n          </div>\r\n\r\n          <div class=\"plan\" aria-labelledby=\"standard\">\r\n            <h3 id=\"standard\">Standard Plan <span class=\"muted\" style=\"font-weight:600\">(Growth)</span></h3>\r\n            <div class=\"price\">$300 / month</div>\r\n            <p class=\"muted\" style=\"margin-top:8px\">Everything in Basic + content updates (4 hrs/mo), performance & SEO audits, monthly reports.</p>\r\n          </div>\r\n\r\n          <div class=\"plan\" aria-labelledby=\"premium\">\r\n            <h3 id=\"premium\">Premium Plan <span class=\"muted\" style=\"font-weight:600\">(Full Service)</span></h3>\r\n            <div class=\"price\">$600 / month</div>\r\n            <p class=\"muted\" style=\"margin-top:8px\">Everything in Standard + priority support, advanced security, unlimited content updates, UX improvements.</p>\r\n          </div>\r\n        </div>\r\n\r\n        <div style=\"margin-top:12px;font-size:13px;color:var(--muted)\">Optional Add-ons: E-commerce maintenance (+$200/mo), Marketing & SEO (+$250/mo), Social media management (+$150/mo).</div>\r\n      </section>\r\n\r\n      <section class=\"section\">\r\n        <h2>Payment & SLA</h2>\r\n        <dl>\r\n          <dt>Payment Terms</dt>\r\n          <dd>Monthly in advance. Late payments incur 5% fee after 7 days. Non-payment >30 days may suspend service.</dd>\r\n\r\n          <dt>Response Time</dt>\r\n          <dd>Standard/Premium: within 24 hours. Basic: within 72 hours.</dd>\r\n\r\n          <dt>Resolution Time</dt>\r\n          <dd>Most issues will be resolved within 3 business days unless classified as critical (escalated immediately).</dd>\r\n\r\n          <dt>Uptime Guarantee</dt>\r\n          <dd>Dependent on hosting provider SLA. Provider will monitor and notify client of outages.</dd>\r\n        </dl>\r\n      </section>\r\n\r\n      <section class=\"section\">\r\n        <h2>Terms, Liability & Confidentiality</h2>\r\n        <div class=\"clauses\">\r\n          <div class=\"clause\">\r\n            <h3>Term & Termination</h3>\r\n            <p>Minimum 6 months. Either party may terminate with 30 days written notice. No refunds for partial months.</p>\r\n          </div>\r\n          <div class=\"clause\">\r\n            <h3>Liability</h3>\r\n            <p>Provider is not liable for third-party hosting, plugins, or force majeure. Maximum liability is fees paid in last 3 months.</p>\r\n          </div>\r\n          <div class=\"clause\">\r\n            <h3>Confidentiality</h3>\r\n            <p>Both parties will keep credentials, data, and business information confidential and secure.</p>\r\n          </div>\r\n        </div>\r\n      </section>\r\n\r\n      <section class=\"section\">\r\n        <h2>Onboarding Checklist</h2>\r\n        <ul style=\"margin:8px 0 0 18px;color:var(--muted)\">\r\n          <li>Hosting & cPanel or SSH access</li>\r\n          <li>CMS admin credentials (WordPress, Laravel, etc.)</li>\r\n          <li>Domain registrar access (optional)</li>\r\n          <li>Google Analytics & Search Console access</li>\r\n          <li>Branding assets: logo, colors, fonts</li>\r\n        </ul>\r\n\r\n        <div style=\"margin-top:14px;display:flex;justify-content:space-between;gap:12px;align-items:center;flex-wrap:wrap\">\r\n          <div class=\"muted\">Monthly Report Example: uptime, updates applied, backups, security checks, content changes, performance scores.</div>\r\n          <div class=\"actions\">\r\n            <button class=\"outline\" onclick=\"window.print()\">Print Contract</button>\r\n            <a class=\"btn\" href=\"#sign\">Sign & Accept</a>\r\n          </div>\r\n        </div>\r\n      </section>\r\n\r\n      <section class=\"section\" id=\"sign\">\r\n        <h2>Signatures</h2>\r\n        <div class=\"signatures\">\r\n          <div class=\"sig\">\r\n            <div>\r\n              <div class=\"name\">[Client Name]</div>\r\n              <div class=\"role\">Client</div>\r\n            </div>\r\n            <div class=\"muted\">Signature: _________________________ Date: __________</div>\r\n          </div>\r\n\r\n          <div class=\"sig\">\r\n            <div>\r\n              <div class=\"name\">[Your Company]</div>\r\n              <div class=\"role\">Service Provider</div>\r\n            </div>\r\n            <div class=\"muted\">Signature: _________________________ Date: __________</div>\r\n          </div>\r\n        </div>\r\n\r\n        <p style=\"margin-top:12px;color:var(--muted);font-size:13px\">By signing above both parties agree to the terms and scope described in this Agreement.</p>\r\n      </section>\r\n\r\n    </main>\r\n\r\n    <footer>\r\n      <div class=\"muted\">Prepared by [Your Company] • Contact: [email@yourcompany.com] • Phone: [Your Phone]</div>\r\n      <div class=\"muted\">Version 1.0</div>\r\n    </footer>\r\n  </div>\r\n</body>\r\n</html>', 1, NULL, NULL, NULL, 84, 'Published', 2, NULL, '2025-09-27 16:01:47', '2025-09-27 16:01:47'),
(19, 'Website Analysis Checklist', 'website-analysis-checklist', '<!DOCTYPE html>\r\n<html lang=\"en\">\r\n<head>\r\n<meta charset=\"UTF-8\">\r\n<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n<title>Website Analysis Checklist</title>\r\n<style>\r\n  body {\r\n    font-family: \'Segoe UI\', Tahoma, Geneva, Verdana, sans-serif;\r\n    background-color: #f4f4f9;\r\n    margin: 0;\r\n    padding: 20px;\r\n    color: #333;\r\n  }\r\n  h1 {\r\n    text-align: center;\r\n    color: #4b6cb7;\r\n    margin-bottom: 30px;\r\n  }\r\n  table {\r\n    width: 100%;\r\n    border-collapse: collapse;\r\n    background-color: #fff;\r\n    box-shadow: 0 4px 6px rgba(0,0,0,0.1);\r\n  }\r\n  th, td {\r\n    padding: 15px 20px;\r\n    text-align: left;\r\n  }\r\n  th {\r\n    background: linear-gradient(90deg, #4b6cb7, #182848);\r\n    color: #fff;\r\n    font-size: 18px;\r\n  }\r\n  tr:nth-child(even) {\r\n    background-color: #f9f9f9;\r\n  }\r\n  td ul {\r\n    margin: 0;\r\n    padding-left: 20px;\r\n  }\r\n  td ul li {\r\n    margin-bottom: 5px;\r\n  }\r\n  @media(max-width:768px){\r\n    th, td {\r\n      padding: 10px;\r\n      font-size: 14px;\r\n    }\r\n  }\r\n</style>\r\n</head>\r\n<body>\r\n\r\n<h1>Website Analysis Checklist (5 Ws)</h1>\r\n\r\n<table>\r\n  <tr>\r\n    <th>Category (5 Ws)</th>\r\n    <th>Checklist Points</th>\r\n  </tr>\r\n  <tr>\r\n    <td>Who</td>\r\n    <td>\r\n      <ul>\r\n        <li>Identify target audience (age, location, interests)</li>\r\n        <li>Website owner/management</li>\r\n        <li>Competitor analysis</li>\r\n        <li>User demographics & engagement</li>\r\n      </ul>\r\n    </td>\r\n  </tr>\r\n  <tr>\r\n    <td>What</td>\r\n    <td>\r\n      <ul>\r\n        <li>Website purpose (informational, e-commerce, branding)</li>\r\n        <li>Content types (blogs, products, services)</li>\r\n        <li>Features (forms, search, chat, payment gateway)</li>\r\n        <li>Key performance indicators (bounce rate, conversion, CTR)</li>\r\n      </ul>\r\n    </td>\r\n  </tr>\r\n  <tr>\r\n    <td>When</td>\r\n    <td>\r\n      <ul>\r\n        <li>Last updated/redesigned date</li>\r\n        <li>Peak visitor times & seasonality</li>\r\n        <li>Content relevancy timeline</li>\r\n        <li>Scheduled updates/maintenance</li>\r\n      </ul>\r\n    </td>\r\n  </tr>\r\n  <tr>\r\n    <td>Where</td>\r\n    <td>\r\n      <ul>\r\n        <li>Traffic sources (organic, paid, social, referrals)</li>\r\n        <li>Visitor locations (geography)</li>\r\n        <li>SEO ranking & performance</li>\r\n        <li>User drop-off points in funnel</li>\r\n      </ul>\r\n    </td>\r\n  </tr>\r\n  <tr>\r\n    <td>Why</td>\r\n    <td>\r\n      <ul>\r\n        <li>User intent (research, purchase, support)</li>\r\n        <li>Trust & credibility signals</li>\r\n        <li>Reasons for bounce rate</li>\r\n        <li>Conversion analysis</li>\r\n      </ul>\r\n    </td>\r\n  </tr>\r\n</table>\r\n\r\n</body>\r\n</html>', 1, NULL, NULL, NULL, 83, 'Published', 2, NULL, '2025-09-27 20:18:04', '2025-09-27 20:18:04');
INSERT INTO `website_pages` (`id`, `title`, `slug`, `content`, `category_id`, `meta_title`, `meta_description`, `meta_keywords`, `read_count`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(20, 'Customer Journey Map — Template', 'customer-journey-map-template', '<!doctype html>\r\n<html lang=\"en\">\r\n<head>\r\n  <meta charset=\"utf-8\" />\r\n  <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />\r\n  <title>Customer Journey Map — Template</title>\r\n  <style>\r\n    :root{\r\n      --bg:#f6f8fa; --card:#ffffff; --muted:#6b7280;\r\n      --accent-1:#0ea5a4; --accent-2:#7c3aed; --accent-3:#f59e0b; --accent-4:#ef4444;\r\n      --glass: rgba(255,255,255,0.6);\r\n      --radius:12px;\r\n      font-family: Inter, system-ui, -apple-system, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial;\r\n    }\r\n    *{box-sizing:border-box}\r\n    body{margin:0;background:linear-gradient(180deg,var(--bg),#fff);color:#0f172a}\r\n    .wrap{max-width:1200px;margin:36px auto;padding:20px}\r\n    header{display:flex;align-items:center;justify-content:space-between;margin-bottom:18px}\r\n    header h1{font-size:20px;margin:0}\r\n    header p{margin:0;color:var(--muted);font-size:13px}\r\n\r\n    /* Stage grid */\r\n    .stages{display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:16px}\r\n    .stage{background:var(--card);border-radius:var(--radius);padding:16px;box-shadow:0 6px 18px rgba(15,23,42,0.06);border:1px solid rgba(15,23,42,0.03)}\r\n    .stage .title{display:flex;align-items:center;gap:10px;margin-bottom:8px}\r\n    .pill{padding:6px 10px;border-radius:999px;font-size:12px;color:#fff;font-weight:600}\r\n    .pill.awareness{background:linear-gradient(90deg,var(--accent-1),#06b6d4)}\r\n    .pill.consider{background:linear-gradient(90deg,var(--accent-2),#9f7aea)}\r\n    .pill.purchase{background:linear-gradient(90deg,var(--accent-3),#fbbf24)}\r\n    .pill.retention{background:linear-gradient(90deg,var(--accent-4),#fb7185)}\r\n    .stage h3{margin:0;font-size:16px}\r\n    small.desc{color:var(--muted);display:block;margin-top:6px}\r\n\r\n    .grid-two{display:grid;grid-template-columns:1fr 1fr;gap:10px;margin-top:12px}\r\n    .block{background:var(--glass);padding:10px;border-radius:10px}\r\n    .block h4{margin:0 0 6px 0;font-size:13px}\r\n    .block p{margin:0;color:var(--muted);font-size:13px;line-height:1.4}\r\n\r\n    .emotions{display:flex;gap:8px;align-items:center}\r\n    .emoji{font-size:20px}\r\n    .meter{height:8px;background:#e6e9ee;border-radius:999px;overflow:hidden;flex:1}\r\n    .meter > i{display:block;height:100%}\r\n    .meter.positive > i{background:linear-gradient(90deg,#16a34a,#34d399);width:66%}\r\n    .meter.neutral > i{background:linear-gradient(90deg,#f59e0b,#fbbf24);width:40%}\r\n    .meter.negative > i{background:linear-gradient(90deg,#ef4444,#fb7185);width:18%}\r\n\r\n    .footer{margin-top:18px;color:var(--muted);font-size:13px}\r\n\r\n    /* wide table view */\r\n    .table-view{margin-top:26px;background:transparent;overflow:auto}\r\n    table{width:100%;border-collapse:collapse;background:var(--card);border-radius:10px;overflow:hidden;box-shadow:0 6px 18px rgba(2,6,23,0.04)}\r\n    th,td{padding:12px 14px;text-align:left;border-bottom:1px solid #f1f5f9;font-size:14px}\r\n    th{background:#fafafa;font-weight:700;color:#111827}\r\n\r\n    /* responsive tweaks */\r\n    @media (max-width:640px){.grid-two{grid-template-columns:1fr}}\r\n  </style>\r\n</head>\r\n<body>\r\n  <div class=\"wrap\">\r\n    <header>\r\n      <div>\r\n        <h1>Customer Journey Map — Template</h1>\r\n        <p>A compact, printable HTML/CSS template to visualize customer journeys and opportunities.</p>\r\n      </div>\r\n      <div class=\"meta\" style=\"text-align:right;color:var(--muted);font-size:13px\">\r\n        <div>Stages: Awareness → Consideration → Purchase → Retention</div>\r\n      </div>\r\n    </header>\r\n\r\n    <section class=\"stages\">\r\n      <!-- Awareness -->\r\n      <article class=\"stage\">\r\n        <div class=\"title\">\r\n          <span class=\"pill awareness\">Awareness</span>\r\n          <h3>Discovering the brand</h3>\r\n        </div>\r\n        <small class=\"desc\">First contact channels and initial impressions.</small>\r\n        <div class=\"grid-two\">\r\n          <div class=\"block\">\r\n            <h4>Customer actions</h4>\r\n            <p>Searches on Google, sees social ad, visits blog post.</p>\r\n          </div>\r\n          <div class=\"block\">\r\n            <h4>Touchpoints</h4>\r\n            <p>Ads, organic search, social posts, word-of-mouth.</p>\r\n          </div>\r\n        </div>\r\n\r\n        <div style=\"margin-top:10px\" class=\"grid-two\">\r\n          <div class=\"block\">\r\n            <h4>Emotions</h4>\r\n            <div class=\"emotions\"><div class=\"emoji\">🙂</div><div class=\"meter neutral\"><i></i></div></div>\r\n          </div>\r\n          <div class=\"block\">\r\n            <h4>Pain points</h4>\r\n            <p>Ad is vague; landing page slow; unclear value prop.</p>\r\n          </div>\r\n        </div>\r\n\r\n        <div style=\"margin-top:10px\" class=\"block\">\r\n          <h4>Opportunities</h4>\r\n          <p>Improve ad clarity, speed up landing page, add clear CTA.</p>\r\n        </div>\r\n      </article>\r\n\r\n      <!-- Consideration -->\r\n      <article class=\"stage\">\r\n        <div class=\"title\">\r\n          <span class=\"pill consist\">Consideration</span>\r\n          <h3>Evaluating options</h3>\r\n        </div>\r\n        <small class=\"desc\">Comparing features, pricing, and reviews.</small>\r\n        <div class=\"grid-two\">\r\n          <div class=\"block\">\r\n            <h4>Customer actions</h4>\r\n            <p>Reads product pages, compares prices, requests demo.</p>\r\n          </div>\r\n          <div class=\"block\">\r\n            <h4>Touchpoints</h4>\r\n            <p>Product pages, comparison sites, demo sign-up, email.</p>\r\n          </div>\r\n        </div>\r\n\r\n        <div style=\"margin-top:10px\" class=\"grid-two\">\r\n          <div class=\"block\">\r\n            <h4>Emotions</h4>\r\n            <div class=\"emotions\"><div class=\"emoji\">🤔</div><div class=\"meter neutral\"><i></i></div></div>\r\n          </div>\r\n          <div class=\"block\">\r\n            <h4>Pain points</h4>\r\n            <p>Lack of clear comparison, no pricing transparency, slow support.</p>\r\n          </div>\r\n        </div>\r\n\r\n        <div style=\"margin-top:10px\" class=\"block\">\r\n          <h4>Opportunities</h4>\r\n          <p>Add comparison matrix, publish pricing tiers, improve live chat.</p>\r\n        </div>\r\n      </article>\r\n\r\n      <!-- Purchase -->\r\n      <article class=\"stage\">\r\n        <div class=\"title\">\r\n          <span class=\"pill purchase\">Purchase</span>\r\n          <h3>Converting to customer</h3>\r\n        </div>\r\n        <small class=\"desc\">Checkout, payment and onboarding experience.</small>\r\n        <div class=\"grid-two\">\r\n          <div class=\"block\">\r\n            <h4>Customer actions</h4>\r\n            <p>Adds to cart, enters payment, completes order, receives confirmation.</p>\r\n          </div>\r\n          <div class=\"block\">\r\n            <h4>Touchpoints</h4>\r\n            <p>Checkout page, payment gateway, order email, onboarding guide.</p>\r\n          </div>\r\n        </div>\r\n\r\n        <div style=\"margin-top:10px\" class=\"grid-two\">\r\n          <div class=\"block\">\r\n            <h4>Emotions</h4>\r\n            <div class=\"emotions\"><div class=\"emoji\">🎉</div><div class=\"meter positive\"><i></i></div></div>\r\n          </div>\r\n          <div class=\"block\">\r\n            <h4>Pain points</h4>\r\n            <p>Unexpected fees, confusing checkout flow, slow confirmation.</p>\r\n          </div>\r\n        </div>\r\n\r\n        <div style=\"margin-top:10px\" class=\"block\">\r\n          <h4>Opportunities</h4>\r\n          <p>Simplify checkout, show total cost upfront, improve confirmation speed.</p>\r\n        </div>\r\n      </article>\r\n\r\n      <!-- Retention -->\r\n      <article class=\"stage\">\r\n        <div class=\"title\">\r\n          <span class=\"pill retention\">Retention</span>\r\n          <h3>Keeping and delighting customers</h3>\r\n        </div>\r\n        <small class=\"desc\">Support, engagement, loyalty and advocacy.</small>\r\n        <div class=\"grid-two\">\r\n          <div class=\"block\">\r\n            <h4>Customer actions</h4>\r\n            <p>Uses product, contacts support, participates in surveys, refers friends.</p>\r\n          </div>\r\n          <div class=\"block\">\r\n            <h4>Touchpoints</h4>\r\n            <p>In-app messages, email campaigns, customer success calls, community forum.</p>\r\n          </div>\r\n        </div>\r\n\r\n        <div style=\"margin-top:10px\" class=\"grid-two\">\r\n          <div class=\"block\">\r\n            <h4>Emotions</h4>\r\n            <div class=\"emotions\"><div class=\"emoji\">🤝</div><div class=\"meter positive\"><i></i></div></div>\r\n          </div>\r\n          <div class=\"block\">\r\n            <h4>Pain points</h4>\r\n            <p>Poor onboarding, unhelpful support, no loyalty incentives.</p>\r\n          </div>\r\n        </div>\r\n\r\n        <div style=\"margin-top:10px\" class=\"block\">\r\n          <h4>Opportunities</h4>\r\n          <p>Create better onboarding flows, reward referrals, proactive outreach.</p>\r\n        </div>\r\n      </article>\r\n\r\n    </section>\r\n\r\n    <section class=\"table-view\">\r\n      <table>\r\n        <thead>\r\n          <tr>\r\n            <th>Stage</th>\r\n            <th>Actions</th>\r\n            <th>Touchpoints</th>\r\n            <th>Emotions</th>\r\n            <th>Pain Points</th>\r\n            <th>Opportunities</th>\r\n          </tr>\r\n        </thead>\r\n        <tbody>\r\n          <tr>\r\n            <td>Awareness</td>\r\n            <td>Searches, sees ad, visits blog</td>\r\n            <td>Ads, social, search</td>\r\n            <td>🙂 Neutral</td>\r\n            <td>Unclear value</td>\r\n            <td>Improve messaging</td>\r\n          </tr>\r\n          <tr>\r\n            <td>Consideration</td>\r\n            <td>Reads pages, compares, requests demo</td>\r\n            <td>Product pages, email</td>\r\n            <td>🤔 Unsure</td>\r\n            <td>No pricing</td>\r\n            <td>Publish pricing & compare</td>\r\n          </tr>\r\n          <tr>\r\n            <td>Purchase</td>\r\n            <td>Checkout, pay, onboard</td>\r\n            <td>Checkout, payment gateway</td>\r\n            <td>🎉 Positive</td>\r\n            <td>Unexpected fees</td>\r\n            <td>Simplify checkout</td>\r\n          </tr>\r\n          <tr>\r\n            <td>Retention</td>\r\n            <td>Uses product, contacts support</td>\r\n            <td>In-app, email, support</td>\r\n            <td>🤝 Loyal</td>\r\n            <td>Poor onboarding</td>\r\n            <td>Reward referrals</td>\r\n          </tr>\r\n        </tbody>\r\n      </table>\r\n    </section>\r\n\r\n    <div class=\"footer\">\r\n      Tip: Copy this file, adapt stage names and copy to match your product and customer persona. Print-friendly and mobile-responsive.\r\n    </div>\r\n  </div>\r\n</body>\r\n</html>', 4, NULL, NULL, NULL, 79, 'Published', 2, NULL, '2025-10-04 17:37:40', '2025-10-04 17:37:40'),
(21, 'Software Architecture Document', 'software-architecture-document', '<!DOCTYPE html>\r\n<html lang=\"en\">\r\n<head>\r\n    <meta charset=\"UTF-8\">\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n    <title>Software Architecture Document - Table of Contents</title>\r\n    <style>\r\n        * {\r\n            margin: 0;\r\n            padding: 0;\r\n            box-sizing: border-box;\r\n        }\r\n\r\n        body {\r\n            font-family: \'Segoe UI\', Tahoma, Geneva, Verdana, sans-serif;\r\n            line-height: 1.6;\r\n            color: #333;\r\n            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);\r\n            min-height: 100vh;\r\n            padding: 20px;\r\n        }\r\n\r\n        .container {\r\n            max-width: 1000px;\r\n            margin: 0 auto;\r\n            background: white;\r\n            border-radius: 15px;\r\n            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);\r\n            overflow: hidden;\r\n        }\r\n\r\n        .header {\r\n            background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);\r\n            color: white;\r\n            padding: 40px;\r\n            text-align: center;\r\n        }\r\n\r\n        .header h1 {\r\n            font-size: 2.5em;\r\n            margin-bottom: 10px;\r\n            font-weight: 300;\r\n        }\r\n\r\n        .header .subtitle {\r\n            font-size: 1.1em;\r\n            opacity: 0.9;\r\n            font-weight: 300;\r\n        }\r\n\r\n        .toc-container {\r\n            padding: 40px;\r\n        }\r\n\r\n        .toc-section {\r\n            margin-bottom: 10px;\r\n        }\r\n\r\n        .toc-item {\r\n            padding: 12px 20px;\r\n            margin: 2px 0;\r\n            border-left: 4px solid transparent;\r\n            transition: all 0.3s ease;\r\n            cursor: pointer;\r\n            display: flex;\r\n            align-items: center;\r\n        }\r\n\r\n        .toc-item:hover {\r\n            background: #f8f9fa;\r\n            border-left-color: #3498db;\r\n            transform: translateX(5px);\r\n        }\r\n\r\n        .level-1 {\r\n            font-weight: 600;\r\n            font-size: 1.2em;\r\n            color: #2c3e50;\r\n            background: #f8f9fa;\r\n            border-radius: 8px;\r\n            margin-top: 15px;\r\n        }\r\n\r\n        .level-2 {\r\n            padding-left: 30px;\r\n            font-weight: 500;\r\n            color: #34495e;\r\n        }\r\n\r\n        .level-3 {\r\n            padding-left: 50px;\r\n            color: #5d6d7e;\r\n            font-size: 0.95em;\r\n        }\r\n\r\n        .level-4 {\r\n            padding-left: 70px;\r\n            color: #7f8c8d;\r\n            font-size: 0.9em;\r\n        }\r\n\r\n        .section-number {\r\n            display: inline-block;\r\n            width: 30px;\r\n            font-weight: 600;\r\n            color: #3498db;\r\n        }\r\n\r\n        .improvements-section {\r\n            background: #e8f4fc;\r\n            margin: 30px 0;\r\n            padding: 25px;\r\n            border-radius: 10px;\r\n            border-left: 5px solid #3498db;\r\n        }\r\n\r\n        .improvements-section h3 {\r\n            color: #2c3e50;\r\n            margin-bottom: 15px;\r\n        }\r\n\r\n        .improvements-list {\r\n            list-style-type: none;\r\n        }\r\n\r\n        .improvements-list li {\r\n            padding: 8px 0;\r\n            display: flex;\r\n            align-items: flex-start;\r\n        }\r\n\r\n        .improvements-list li:before {\r\n            content: \"✓\";\r\n            color: #27ae60;\r\n            font-weight: bold;\r\n            margin-right: 10px;\r\n        }\r\n\r\n        .footer {\r\n            text-align: center;\r\n            padding: 20px;\r\n            background: #f8f9fa;\r\n            color: #7f8c8d;\r\n            font-size: 0.9em;\r\n        }\r\n\r\n        @media (max-width: 768px) {\r\n            .container {\r\n                margin: 10px;\r\n                border-radius: 10px;\r\n            }\r\n            \r\n            .header {\r\n                padding: 30px 20px;\r\n            }\r\n            \r\n            .header h1 {\r\n                font-size: 2em;\r\n            }\r\n            \r\n            .toc-container {\r\n                padding: 20px;\r\n            }\r\n            \r\n            .toc-item {\r\n                padding: 10px 15px;\r\n            }\r\n            \r\n            .level-2 { padding-left: 25px; }\r\n            .level-3 { padding-left: 40px; }\r\n            .level-4 { padding-left: 55px; }\r\n        }\r\n    </style>\r\n</head>\r\n<body>\r\n    <div class=\"container\">\r\n        <div class=\"header\">\r\n            <h1>Software Architecture Document</h1>\r\n            <div class=\"subtitle\">Table of Contents</div>\r\n        </div>\r\n\r\n        <div class=\"toc-container\">\r\n            <div class=\"toc-section\">\r\n                <div class=\"toc-item level-1\">\r\n                    <span class=\"section-number\">1.</span> Introduction\r\n                </div>\r\n                <div class=\"toc-item level-2\">\r\n                    <span class=\"section-number\">1.1</span> Purpose of the Document\r\n                </div>\r\n                <div class=\"toc-item level-2\">\r\n                    <span class=\"section-number\">1.2</span> Project Scope and Objectives\r\n                </div>\r\n                <div class=\"toc-item level-3\">\r\n                    <span class=\"section-number\">1.2.1</span> Problem Statement\r\n                </div>\r\n                <div class=\"toc-item level-3\">\r\n                    <span class=\"section-number\">1.2.2</span> System Objectives\r\n                </div>\r\n                <div class=\"toc-item level-2\">\r\n                    <span class=\"section-number\">1.3</span> Stakeholders\r\n                </div>\r\n                <div class=\"toc-item level-2\">\r\n                    <span class=\"section-number\">1.4</span> Constraints, Assumptions, and Dependencies\r\n                </div>\r\n                <div class=\"toc-item level-2\">\r\n                    <span class=\"section-number\">1.5</span> Glossary and Acronyms\r\n                </div>\r\n            </div>\r\n\r\n            <div class=\"toc-section\">\r\n                <div class=\"toc-item level-1\">\r\n                    <span class=\"section-number\">2.</span> System Requirements\r\n                </div>\r\n                <div class=\"toc-item level-2\">\r\n                    <span class=\"section-number\">2.1</span> Functional Requirements\r\n                </div>\r\n                <div class=\"toc-item level-2\">\r\n                    <span class=\"section-number\">2.2</span> Non-Functional Requirements\r\n                </div>\r\n                <div class=\"toc-item level-3\">\r\n                    <span class=\"section-number\">2.2.1</span> Performance\r\n                </div>\r\n                <div class=\"toc-item level-3\">\r\n                    <span class=\"section-number\">2.2.2</span> Reliability and Availability\r\n                </div>\r\n                <div class=\"toc-item level-3\">\r\n                    <span class=\"section-number\">2.2.3</span> Security\r\n                </div>\r\n                <div class=\"toc-item level-3\">\r\n                    <span class=\"section-number\">2.2.4</span> Usability\r\n                </div>\r\n                <div class=\"toc-item level-3\">\r\n                    <span class=\"section-number\">2.2.5</span> Modifiability and Maintainability\r\n                </div>\r\n                <div class=\"toc-item level-3\">\r\n                    <span class=\"section-number\">2.2.6</span> Portability and Adaptability\r\n                </div>\r\n                <div class=\"toc-item level-3\">\r\n                    <span class=\"section-number\">2.2.7</span> Other Qualities (Throughput, Configurability, etc.)\r\n                </div>\r\n            </div>\r\n\r\n            <div class=\"toc-section\">\r\n                <div class=\"toc-item level-1\">\r\n                    <span class=\"section-number\">3.</span> Architectural Overview\r\n                </div>\r\n                <div class=\"toc-item level-2\">\r\n                    <span class=\"section-number\">3.1</span> Architectural Drivers and Goals\r\n                </div>\r\n                <div class=\"toc-item level-2\">\r\n                    <span class=\"section-number\">3.2</span> Architectural Patterns & Styles\r\n                </div>\r\n                <div class=\"toc-item level-2\">\r\n                    <span class=\"section-number\">3.3</span> High-Level System Architecture\r\n                </div>\r\n                <div class=\"toc-item level-2\">\r\n                    <span class=\"section-number\">3.4</span> Key Architectural Decisions and Rationale\r\n                </div>\r\n                <div class=\"toc-item level-2\">\r\n                    <span class=\"section-number\">3.5</span> Technology Stack\r\n                </div>\r\n            </div>\r\n\r\n            <div class=\"toc-section\">\r\n                <div class=\"toc-item level-1\">\r\n                    <span class=\"section-number\">4.</span> Architectural Views\r\n                </div>\r\n                <div class=\"toc-item level-2\">\r\n                    <span class=\"section-number\">4.1</span> Logical View (Module Structures)\r\n                </div>\r\n                <div class=\"toc-item level-3\">\r\n                    <span class=\"section-number\">4.1.1</span> Subsystem Decomposition\r\n                </div>\r\n                <div class=\"toc-item level-3\">\r\n                    <span class=\"section-number\">4.1.2</span> Key Abstractions and Relationships\r\n                </div>\r\n                <div class=\"toc-item level-2\">\r\n                    <span class=\"section-number\">4.2</span> Process View (Component-and-Connector Structures)\r\n                </div>\r\n                <div class=\"toc-item level-3\">\r\n                    <span class=\"section-number\">4.2.1</span> Runtime Components and Interactions\r\n                </div>\r\n                <div class=\"toc-item level-3\">\r\n                    <span class=\"section-number\">4.2.2</span> Concurrency and Data Flow\r\n                </div>\r\n                <div class=\"toc-item level-2\">\r\n                    <span class=\"section-number\">4.3</span> Development View\r\n                </div>\r\n                <div class=\"toc-item level-3\">\r\n                    <span class=\"section-number\">4.3.1</span> Module Organization\r\n                </div>\r\n                <div class=\"toc-item level-3\">\r\n                    <span class=\"section-number\">4.3.2</span> Reuse and Sharing\r\n                </div>\r\n                <div class=\"toc-item level-2\">\r\n                    <span class=\"section-number\">4.4</span> Physical View (Allocation Structures)\r\n                </div>\r\n                <div class=\"toc-item level-3\">\r\n                    <span class=\"section-number\">4.4.1</span> Deployment Diagram\r\n                </div>\r\n                <div class=\"toc-item level-3\">\r\n                    <span class=\"section-number\">4.4.2</span> Infrastructure & Environment\r\n                </div>\r\n            </div>\r\n\r\n            <!-- Additional sections follow the same pattern -->\r\n            <div class=\"toc-section\">\r\n                <div class=\"toc-item level-1\">\r\n                    <span class=\"section-number\">5.</span> Detailed Component Design\r\n                </div>\r\n                <div class=\"toc-item level-2\">\r\n                    <span class=\"section-number\">5.1</span> [Component #1]\r\n                </div>\r\n                <div class=\"toc-item level-3\">\r\n                    <span class=\"section-number\">5.1.1</span> Responsibility\r\n                </div>\r\n                <div class=\"toc-item level-3\">\r\n                    <span class=\"section-number\">5.1.2</span> Interface/API Specification\r\n                </div>\r\n                <div class=\"toc-item level-3\">\r\n                    <span class=\"section-number\">5.1.3</span> Data Structures and Processing Logic\r\n                </div>\r\n                <div class=\"toc-item level-3\">\r\n                    <span class=\"section-number\">5.1.4</span> Dependencies and Interactions\r\n                </div>\r\n                <div class=\"toc-item level-2\">\r\n                    <span class=\"section-number\">5.2</span> [Component #2]\r\n                </div>\r\n                <div class=\"toc-item level-2\">\r\n                    <span class=\"section-number\">5.3</span> [Component #n]\r\n                </div>\r\n                <div class=\"toc-item level-2\">\r\n                    <span class=\"section-number\">5.4</span> Data Design\r\n                </div>\r\n                <div class=\"toc-item level-3\">\r\n                    <span class=\"section-number\">5.4.1</span> Database Schema\r\n                </div>\r\n                <div class=\"toc-item level-3\">\r\n                    <span class=\"section-number\">5.4.2</span> Data Persistence Strategy\r\n                </div>\r\n            </div>\r\n\r\n            <div class=\"improvements-section\">\r\n                <h3>Key Improvements in This Version:</h3>\r\n                <ul class=\"improvements-list\">\r\n                    <li><strong>Logical Progression:</strong> Clear flow from \"Why\" to \"What\" to \"How\"</li>\r\n                    <li><strong>Standardized Terminology:</strong> Uses industry-standard architectural terms</li>\r\n                    <li><strong>4+1 Architectural View Model:</strong> Comprehensive coverage of different perspectives</li>\r\n                    <li><strong>Removed Redundancy:</strong> Consolidated repetitive sections</li>\r\n                    <li><strong>Enhanced Comprehensiveness:</strong> Added cross-cutting concerns and system evolution</li>\r\n                    <li><strong>Professional Structure:</strong> Follows established software architecture documentation standards</li>\r\n                </ul>\r\n            </div>\r\n        </div>\r\n\r\n        <div class=\"footer\">\r\n            Software Architecture Document | Updated Table of Contents | Professional Template\r\n        </div>\r\n    </div>\r\n\r\n    <script>\r\n        // Add click functionality to navigate (simulated)\r\n        document.querySelectorAll(\'.toc-item\').forEach(item => {\r\n            item.addEventListener(\'click\', function() {\r\n                const sectionNumber = this.querySelector(\'.section-number\').textContent;\r\n                alert(`Navigating to section ${sectionNumber}`);\r\n                // In a real implementation, this would scroll to the corresponding section\r\n                // or navigate to another page\r\n            });\r\n        });\r\n    </script>\r\n</body>\r\n</html>', 1, NULL, NULL, NULL, 63, 'Published', 2, NULL, '2025-10-13 18:33:21', '2025-10-13 18:33:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_logs`
--
ALTER TABLE `access_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `access_permission`
--
ALTER TABLE `access_permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `access_register`
--
ALTER TABLE `access_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_blog_category_id_foreign` (`category_id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_contents`
--
ALTER TABLE `blog_contents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_blog_contents_blog` (`blog_id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_advertisements`
--
ALTER TABLE `business_advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_clients`
--
ALTER TABLE `business_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_packages`
--
ALTER TABLE `business_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_products`
--
ALTER TABLE `business_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_product_entity`
--
ALTER TABLE `business_product_entity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_projects`
--
ALTER TABLE `business_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_services`
--
ALTER TABLE `business_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_service_entity`
--
ALTER TABLE `business_service_entity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `consultation_form`
--
ALTER TABLE `consultation_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documenttype`
--
ALTER TABLE `documenttype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_key_note`
--
ALTER TABLE `info_key_note`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partnership_brands`
--
ALTER TABLE `partnership_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `project_category`
--
ALTER TABLE `project_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotional_videos`
--
ALTER TABLE `promotional_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referancedocuments`
--
ALTER TABLE `referancedocuments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `site_banners`
--
ALTER TABLE `site_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_information`
--
ALTER TABLE `system_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technical_expertise`
--
ALTER TABLE `technical_expertise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor_access_log`
--
ALTER TABLE `visitor_access_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor_contactus_message`
--
ALTER TABLE `visitor_contactus_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_pages`
--
ALTER TABLE `website_pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `website_pages_slug_unique` (`slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access_logs`
--
ALTER TABLE `access_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5186;

--
-- AUTO_INCREMENT for table `access_permission`
--
ALTER TABLE `access_permission`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=728;

--
-- AUTO_INCREMENT for table `access_register`
--
ALTER TABLE `access_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=299;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `blog_contents`
--
ALTER TABLE `blog_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `business_advertisements`
--
ALTER TABLE `business_advertisements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `business_clients`
--
ALTER TABLE `business_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `business_packages`
--
ALTER TABLE `business_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `business_products`
--
ALTER TABLE `business_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `business_product_entity`
--
ALTER TABLE `business_product_entity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `business_projects`
--
ALTER TABLE `business_projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `business_services`
--
ALTER TABLE `business_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `business_service_entity`
--
ALTER TABLE `business_service_entity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `consultation_form`
--
ALTER TABLE `consultation_form`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `documenttype`
--
ALTER TABLE `documenttype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `info_key_note`
--
ALTER TABLE `info_key_note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `partnership_brands`
--
ALTER TABLE `partnership_brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=315;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_category`
--
ALTER TABLE `project_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `promotional_videos`
--
ALTER TABLE `promotional_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `referancedocuments`
--
ALTER TABLE `referancedocuments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `site_banners`
--
ALTER TABLE `site_banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `system_information`
--
ALTER TABLE `system_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `technical_expertise`
--
ALTER TABLE `technical_expertise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `visitor_access_log`
--
ALTER TABLE `visitor_access_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25736;

--
-- AUTO_INCREMENT for table `visitor_contactus_message`
--
ALTER TABLE `visitor_contactus_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `website_pages`
--
ALTER TABLE `website_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_blog_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `blog_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blog_contents`
--
ALTER TABLE `blog_contents`
  ADD CONSTRAINT `fk_blog_contents_blog` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
