-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2023 at 12:46 PM
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
-- Database: `locationsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `acceptance`
--

CREATE TABLE `acceptance` (
  `acceptance_id` int(11) NOT NULL,
  `establishment_id` varchar(10) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `namefile` char(60) NOT NULL,
  `filess` varchar(100) NOT NULL COMMENT 'ไฟล์เอกสาร',
  `term` varchar(40) NOT NULL COMMENT 'ภาคเรียน',
  `year` varchar(50) NOT NULL COMMENT 'ปีการศึกษา',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `annotation` varchar(50) NOT NULL COMMENT 'หมายเหตุ',
  `Status_acceptance` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acceptance`
--

INSERT INTO `acceptance` (`acceptance_id`, `establishment_id`, `user_id`, `namefile`, `filess`, `term`, `year`, `created_at`, `updated_at`, `annotation`, `Status_acceptance`) VALUES
(6, '25', '34', '', '1687683167_การติดตั้งอินเทอร์เน็ตเซิร์ฟเวอร์ด้วยระ.pdf', 'ภาคเรียนที่1', '2664-1 selected', '2023-06-25 01:52:47', '2023-06-25 01:52:58', '-s', 'ยังไม่ได้ตอบรับนักศึกษา'),
(7, '25', '14', 'แบบตอบรับและเสนองานนักศึกสหกิจศึกษา', '1691755110_295635478_3322612171295692_7017137312249207826_n.jpg', 'ภาคเรียนที่1', '2656-1', '2023-08-11 04:58:30', '2023-08-11 04:58:30', '-', 'ตอบรับนักศึกษาแล้ว');

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `activity_id` int(3) NOT NULL,
  `title` varchar(30) NOT NULL,
  `business` varchar(50) NOT NULL COMMENT 'วันเวลาทำการ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`activity_id`, `title`, `business`) VALUES
(1, 'ลงทะเบียน', 'วันศุกร ที่18 ธันวาคม 2567 ');

-- --------------------------------------------------------

--
-- Table structure for table `advisor`
--

CREATE TABLE `advisor` (
  `advisor_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advisor`
--

INSERT INTO `advisor` (`advisor_id`, `name`, `course`, `faculty`, `updated_at`, `created_at`) VALUES
(2, 'Nantawat Srilable', 'วิทยาศาสตรบัณฑิต สาขาวิชาเทคโนโลยีสารสนเทศ', 'คณะวิทยาศาสตร์และเทคโนโลยี', '2023-06-25 02:40:48', '2023-06-25 02:40:48'),
(3, 'นันทวัฒน์ ศรีลับแล12', 'วิทยาศาสตรบัณฑิต สาขาวิชาเทคโนโลยีสารสนเทศ', 'คณะวิทยาศาสตร์และเทคโนโลยี', '2023-06-25 02:56:19', '2023-06-25 02:41:06');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'หัวข้อ',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'รายละเอียด',
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'tag บทความ',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `document_id` int(11) NOT NULL,
  `formname` varchar(50) NOT NULL,
  `filess` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`document_id`, `formname`, `filess`, `created_at`, `updated_at`) VALUES
(1, 'แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา (สก.01)', 'sss', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `establishment`
--

CREATE TABLE `establishment` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `images` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `establishment`
--

INSERT INTO `establishment` (`id`, `name`, `address`, `phone`, `images`, `created_at`, `updated_at`) VALUES
(1, '44wxxx14dd', 'urussssssss', '0979902000', '1685787448_thumb-1920-973967.jpg', '0000-00-00 00:00:00', '2023-06-03 03:17:28'),
(3, 'บริษทเอฟ4', 'uru', '0979905246', '1692697794_licensed-หห.jpg', '0000-00-00 00:00:00', '2023-08-22 02:49:54'),
(10, 'aswws wwwsww', 'uru', '0979905246', '', '0000-00-00 00:00:00', NULL),
(22, 'ssq', 'uru', '0979905246', '1685785853_WIN_25650210_22_01_57_Pro.jpg', '2023-06-02 11:08:56', '2023-06-03 02:50:53'),
(25, 'นันทวัฒน์ ศรีลับแล', 'sssw', '0979905246', '1685815183_339392063_633555165250492_4524505260011598964_n.jpg', '2023-06-03 10:59:43', '2023-06-03 10:59:43'),
(26, 'นันทวัฒน์ ศรีลับแล', 'sssw', '0979905246', '1685904682_Agile-Methodology-Infographic-v2-1024x353.jpg', '2023-06-04 11:51:22', '2023-06-04 11:51:22'),
(27, '0gggffgssss 0ssssss', 'sssw', '0979905246', '1685904858_295635478_3322612171295692_7017137312249207826_n.jpg', '2023-06-04 11:54:18', '2023-06-04 11:54:18'),
(28, 'sssss', 'uru', '0979905246', '1685904900_agile-01.png', '2023-06-04 11:55:00', '2023-06-05 10:39:01'),
(29, 'Nantawat Srilable', 'sssw', '66843813', '1685951641_Agile-Methodology-Infographic-v2-1024x353.jpg', '2023-06-05 00:54:01', '2023-06-05 00:54:01'),
(30, 'Nantawat Srilable', 'sssw', '6684381', '1685952931_295635478_3322612171295692_7017137312249207826_n.jpg', '2023-06-05 01:15:31', '2023-06-05 01:15:31'),
(31, 'Nantawat Srilable', 'sssw', '6843813976', '1685953525_295635478_3322612171295692_7017137312249207826_n.jpg', '2023-06-05 01:25:25', '2023-06-05 01:25:25');

-- --------------------------------------------------------

--
-- Table structure for table `evaluationdocument`
--

CREATE TABLE `evaluationdocument` (
  `Evaluationdocument_id` int(11) NOT NULL,
  `files1` varchar(100) NOT NULL,
  `files2` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evaluationdocument`
--

INSERT INTO `evaluationdocument` (`Evaluationdocument_id`, `files1`, `files2`, `created_at`, `updated_at`) VALUES
(3, '1687857363_Doc4-รูปแบบการจัดวางและแบบอักษรโครงงาน.pdf', '1687857363_การติดตั้งอินเทอร์เน็ตเซิร์ฟเวอร์ด้วยระ.pdf', '2023-06-27 02:16:03', '2023-06-27 02:16:03');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `term` varchar(40) NOT NULL COMMENT 'ภาคเรียนที่',
  `year` varchar(40) NOT NULL COMMENT 'ปีการศึกษา',
  `user_id` int(3) NOT NULL,
  `Statusevents` char(50) NOT NULL COMMENT 'รับทราบและยืนยันเวลานัดนิเทศ',
  `List_teacher` char(80) NOT NULL COMMENT 'รายชื่ออาจารย์',
  `Statustime` char(60) NOT NULL COMMENT 'ขอเปลี่ยนเวลานัดนิเทศ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start`, `end`, `created_at`, `updated_at`, `term`, `year`, `user_id`, `Statusevents`, `List_teacher`, `Statustime`) VALUES
(1, 'บริษัทเอ', '2023-09-19 16:00:43', '2023-06-21 16:12:43', '2023-06-13 11:05:09', '2023-09-20 04:12:57', 'ภาคเรียนที่1', '2665', 64, 'รับทราบและยืนยันเวลานัดนิเทศแล้ว', '1เอ 2บี 3 ดี', '2024-09-24T18:00'),
(5, 'ดีจ้า', '2023-06-23 15:41:00', '2023-06-24 16:42:00', '2023-06-25 10:40:58', '2023-10-11 06:24:29', 'ภาคเรียนที่1', '2665', 14, 'ยังไม่ได้รับทราบและยืนยันเวลานัดนิเทศ', '', '2023-10-12T21:24'),
(6, 'sss', '2023-06-20 05:04:00', '2023-06-21 05:06:00', '2023-06-26 10:01:10', '2023-08-11 06:41:08', 'ภาคเรียนที่1', '2664', 16, '', '', '0000-00-00 00:00:00'),
(7, 'sss1', '2023-06-20 00:16:00', '2023-06-22 00:16:00', '2023-06-26 10:16:32', '2023-06-26 10:16:32', 'ภาคเรียนที่2', '2664', 0, '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `informdetails`
--

CREATE TABLE `informdetails` (
  `informdetails_id` int(11) NOT NULL,
  `namefile` char(60) NOT NULL,
  `files` varchar(250) NOT NULL,
  `annotation` varchar(50) NOT NULL,
  `Status_informdetails` varchar(40) NOT NULL,
  `establishment` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informdetails`
--

INSERT INTO `informdetails` (`informdetails_id`, `namefile`, `files`, `annotation`, `Status_informdetails`, `establishment`, `user_id`, `created_at`, `updated_at`) VALUES
(6, 'แบบแจ้งรายละเอียดการปฏิบัติงาน(สก.07)', '1696842801_IMG_7763.jfif', '-', 'รอตรวจสอบ', '-', 14, '2023-09-17 02:01:03', '2023-10-09 02:13:21'),
(7, 'แบบแจ้งแผนปฏิบัติงานสหกิจศึกษา(สก.08)', '1696846034_จับภาพ555.PNG', '-', 'รอตรวจสอบ', '-', 14, '2023-09-17 02:27:51', '2023-10-09 03:07:14'),
(8, 'แบบแจ้งโครงร่างรายงานการปฏิบัติงานสหกิจศึกษา(สก.09)', '1694942910_339295569_1442041269893887_4414186191625066120_n.jpg', '-', 'ไม่ผ่าน', '-', 14, '2023-09-17 02:28:30', '2023-09-17 02:28:30');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_01_26_191645_create_users_table', 1),
(4, '2023_01_26_191903_create_user01s_table', 2),
(8, '2022_03_30_072300_create_contents_table', 3),
(15, '2014_10_12_000000_create_users_table', 4),
(16, '2014_10_12_100000_create_password_resets_table', 4),
(17, '2019_08_19_000000_create_failed_jobs_table', 4),
(19, '2023_02_21_183812_create_companies_table', 5),
(20, '2023_06_02_170551_create_establishments_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` int(11) NOT NULL,
  `namefile` char(60) NOT NULL,
  `filess` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Status_registers` varchar(40) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `annotation` varchar(40) NOT NULL COMMENT 'หมาเหตุ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`id`, `namefile`, `filess`, `created_at`, `updated_at`, `Status_registers`, `user_id`, `annotation`) VALUES
(73, 'แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา(สก01)', '1696674802_271854470_4794455643977387_8483285600847450539_n.jpg', '2023-10-07 03:33:22', '2023-10-07 03:33:22', 'รอตรวจสอบ', '62', '-'),
(76, 'ใบสมัครงานสหกิจศึกษา(สก03)', '1696839514_187941644_945272756405487_2225899565542849021_n.jpg', '2023-10-09 01:13:47', '2023-10-09 01:18:34', 'รอตรวจสอบ', '14', '-'),
(77, 'แบบคำรองขอหนังสือขอความอนุเคราะหรับนักศึกษาสหกิจศึกษา(สก04)', '1696840195_187941644_945272756405487_2225899565542849021_n.jpg', '2023-10-09 01:25:08', '2023-10-09 01:29:55', 'ไม่ผ่าน', '14', 'gvd'),
(80, 'บัตรประชาชน', '1696841072_72786431_p0_master1200.jpg', '2023-10-09 01:42:45', '2023-10-09 01:44:32', 'รอตรวจสอบ', '14', '-'),
(81, 'บัตรนักศึกษา', '1696841523_licensed-หห.jpg', '2023-10-09 01:51:50', '2023-10-09 01:52:03', 'รอตรวจสอบ', '14', '-'),
(82, 'ผลการเรียน', '1696841777_IMG_5991.jpg', '2023-10-09 01:56:05', '2023-10-09 01:56:17', 'รอตรวจสอบ', '14', '-'),
(83, 'ประวัติส่วนตัว(resume)', '1696842057_จับภาพ555.PNG', '2023-10-09 02:00:45', '2023-10-09 02:00:57', 'รอตรวจสอบ', '14', '-'),
(87, 'แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา(สก01)', '1697876072_IMG_5991.jpg', '2023-10-21 01:14:33', '2023-10-21 01:14:33', '', '14', '-');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(11) NOT NULL,
  `namefile` char(60) NOT NULL,
  `filess` varchar(100) NOT NULL,
  `Status_report` varchar(30) NOT NULL,
  `annotation` varchar(40) NOT NULL COMMENT 'หมายเหตุ',
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`report_id`, `namefile`, `filess`, `Status_report`, `annotation`, `user_id`, `created_at`, `updated_at`) VALUES
(9, 'รายงานโครงการ', '1696847406_จับdd.PNG', 'รอตรวจสอบ', '-', 14, '2023-06-10 03:24:49', '2023-10-09 03:30:06'),
(10, 'PowerPoint การนำเสนอ', '1695119624_licensed-หห.jpg', 'รอตรวจสอบ', '-', 14, '2023-09-19 03:33:08', '2023-09-19 03:37:32'),
(11, 'PowerPoint การนำเสนอ', '1696847851_339392063_633555165250492_4524505260011598964_n.jpg', 'รอตรวจสอบ', '-', 14, '2023-10-09 03:36:00', '2023-10-09 03:37:31'),
(12, 'Onepage ของโครงการ (โปสเตอร์)', '1696848128_จับdd.PNG', 'รอตรวจสอบ', '-', 14, '2023-10-09 03:41:58', '2023-10-09 03:42:08'),
(13, 'รายงานสรุปโครงการ(ไม่เกิน 5 หน้า)', '1696848336_337555875_1161633477962897_7988021558661205392_n.jpg', 'รอตรวจสอบ', '-', 14, '2023-10-09 03:45:26', '2023-10-09 03:45:36');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `term` varchar(50) NOT NULL COMMENT 'ภาคเรียน',
  `year` varchar(40) NOT NULL COMMENT 'ปีการศึกษา',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `title`, `start`, `end`, `term`, `year`, `created_at`, `updated_at`) VALUES
(1, 'dd', '2023-06-15 23:46:55', '2023-06-17 23:46:55', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `studentinformation`
--

CREATE TABLE `studentinformation` (
  `id` int(3) NOT NULL,
  `fname` char(40) NOT NULL,
  `user_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentinformation`
--

INSERT INTO `studentinformation` (`id`, `fname`, `user_id`) VALUES
(1, 'ddd', 14);

-- --------------------------------------------------------

--
-- Table structure for table `supervision`
--

CREATE TABLE `supervision` (
  `supervision_id` int(11) NOT NULL COMMENT 'ผลการนิเทศงาน',
  `Status_supervision` varchar(40) NOT NULL,
  `establishment_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `term` varchar(40) NOT NULL COMMENT 'ภาคเรียน',
  `year` varchar(10) NOT NULL COMMENT 'ปีการศึกษา',
  `score` varchar(10) NOT NULL COMMENT 'คะแนน',
  `filess` varchar(100) NOT NULL COMMENT 'ไฟล์',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` varchar(10) NOT NULL,
  `annotation` varchar(40) NOT NULL COMMENT 'หมายเหตุ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supervision`
--

INSERT INTO `supervision` (`supervision_id`, `Status_supervision`, `establishment_id`, `student_id`, `term`, `year`, `score`, `filess`, `created_at`, `updated_at`, `user_id`, `annotation`) VALUES
(3, 'รอตรวจสอบเอกสาร', 1, 62, 'ภาคเรียนที่1', '2500-1', '520', '1687455112_Doc4-รูปแบบการจัดวางและแบบอักษรโครงงาน.pdf', '2023-06-22 02:14:40', '2023-06-24 02:19:15', '35', '-');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test` varchar(100) NOT NULL,
  `color` varchar(20) NOT NULL COMMENT 'สี',
  `id` int(3) NOT NULL,
  `role` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test`, `color`, `id`, `role`) VALUES
('teee', 'student4', 1, '1'),
('นันทวัฒน์ ศรีลับแล', 'student5', 6, '1');

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE `timeline` (
  `timeline_id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `register_id` int(11) NOT NULL,
  `report_id` varchar(10) NOT NULL,
  `informdetails_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`timeline_id`, `user_id`, `register_id`, `report_id`, `informdetails_id`) VALUES
(1, '62', 40, '9', '2'),
(3, '14', 40, '9', '2');

-- --------------------------------------------------------

--
-- Table structure for table `userrole`
--

CREATE TABLE `userrole` (
  `id` int(3) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userrole`
--

INSERT INTO `userrole` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '1234567', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(123) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'รหัสผ่าน',
  `role` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `images` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'รูปโปรไฟล์',
  `Student_ID` char(11) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'รหัสนักศึกษา',
  `address` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ที่อยู่',
  `postcode` char(5) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'รหัสไปรษณีย์',
  `faculty` char(30) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'คณะ',
  `course` char(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'หลักสูตร',
  `GPA` float(6,2) NOT NULL COMMENT 'เกรดเฉลี่ย(GPA)',
  `telephonenumber` char(10) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `status` char(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'สถานะยืนยันตัวตน',
  `statusestablishment` char(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `establishment` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `role`, `created_at`, `updated_at`, `images`, `Student_ID`, `address`, `postcode`, `faculty`, `course`, `GPA`, `telephonenumber`, `status`, `statusestablishment`, `establishment`) VALUES
(14, 'User', 'user', 'user@cambotutorial.com', '$2y$10$Hm8bTZs47/B5HLzoqIlV4./TiuS5niyDqGqXwbBVycehwVzYP7Mce', 'student', '2023-02-18 03:22:32', '2023-10-20 04:19:24', '1693995483_icon-5359553_1280.webp', '62042380105', '7/1', '53130', 'คณะวิทยาศาสตร์และเทคโนโลยี', 'วิทยาการคอมพิวเตอร์', 2.00, '0978805487', 'ยืนยันตัวตนแล้ว', 'ยืนยันได้สถานประกอบการแล้ว', 'นันทวัฒน์ ศรีลับแล'),
(15, 'Editor', 'test1', 'editor@cambotutorial.com', '$2y$10$Hm8bTZs47/B5HLzoqIlV4./TiuS5niyDqGqXwbBVycehwVzYP7Mce', 'officer', '2023-02-18 03:22:32', '2023-02-18 03:22:32', '', '', '', '', '', '', 0.00, '', '', '', ''),
(16, 'Admin', 'admin', 'admin@cambotutorial.com', '$2y$10$Hm8bTZs47/B5HLzoqIlV4./TiuS5niyDqGqXwbBVycehwVzYP7Mce', 'admin', '2023-02-18 03:22:32', '2023-02-18 03:22:32', '', '', '', '', '', '', 0.00, '', '', '', ''),
(34, 'test4', 'test3', 'beer451220@gmail.com', '12345678', 'student', '2023-02-21 12:56:35', '2023-08-25 09:45:30', '1692981930_Agile-Methodology-Infographic-v2-1024x353.jpg', '', '', '', '', '', 0.00, '', '', '', ''),
(35, 'teacher', 'test', 'beer750220@gmail.com', '$2y$10$Hm8bTZs47/B5HLzoqIlV4./TiuS5niyDqGqXwbBVycehwVzYP7Mce', 'teacher', '2023-03-02 10:37:08', '2023-03-02 10:37:08', '', '', '', '', '', '', 0.00, '', '', '', ''),
(57, 'admin', 'admin1', 'wat41ww0220@gmail.com', '$2y$10$Hm8bTZs47/B5HLzoqIlV4./TiuS5niyDqGqXwbBVycehwVzYP7Mce', 'admin', '2023-03-25 05:00:30', '2023-03-25 05:00:30', '', '', '', '', '', '', 0.00, '', '', '', ''),
(62, 'นันทวัฒน์ ศรีลับแล', '62042380105', 'beerwqww450220@gmail.com', '$2y$10$Hm8bTZs47/B5HLzoqIlV4./TiuS5niyDqGqXwbBVycehwVzYP7Mce', 'student', '2023-06-02 02:57:39', '2023-06-02 02:57:39', '', '', '', '', '', '', 0.00, '', '', '', ''),
(69, 'test test', 'u6204s2380105@uru.ac.th', 'u62042380105@uru.ac.th', '$2y$10$WMH.bUEF7/dQiphGETMFx.//C4AY6Z26yFlXu.LKomYnuKmOmxB/2', 'student', '2023-07-16 03:36:55', '2023-07-16 03:36:55', '', '', '', '', '', '', 0.00, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acceptance`
--
ALTER TABLE `acceptance`
  ADD PRIMARY KEY (`acceptance_id`);

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `advisor`
--
ALTER TABLE `advisor`
  ADD PRIMARY KEY (`advisor_id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`document_id`);

--
-- Indexes for table `establishment`
--
ALTER TABLE `establishment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evaluationdocument`
--
ALTER TABLE `evaluationdocument`
  ADD PRIMARY KEY (`Evaluationdocument_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `informdetails`
--
ALTER TABLE `informdetails`
  ADD PRIMARY KEY (`informdetails_id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `studentinformation`
--
ALTER TABLE `studentinformation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `supervision`
--
ALTER TABLE `supervision`
  ADD PRIMARY KEY (`supervision_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timeline`
--
ALTER TABLE `timeline`
  ADD PRIMARY KEY (`timeline_id`);

--
-- Indexes for table `userrole`
--
ALTER TABLE `userrole`
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
-- AUTO_INCREMENT for table `acceptance`
--
ALTER TABLE `acceptance`
  MODIFY `acceptance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `activity_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advisor`
--
ALTER TABLE `advisor`
  MODIFY `advisor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `document_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `establishment`
--
ALTER TABLE `establishment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `evaluationdocument`
--
ALTER TABLE `evaluationdocument`
  MODIFY `Evaluationdocument_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informdetails`
--
ALTER TABLE `informdetails`
  MODIFY `informdetails_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `studentinformation`
--
ALTER TABLE `studentinformation`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supervision`
--
ALTER TABLE `supervision`
  MODIFY `supervision_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ผลการนิเทศงาน', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `timeline_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userrole`
--
ALTER TABLE `userrole`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
