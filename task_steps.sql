-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 04:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_sql_assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `task_steps`
--

CREATE TABLE `task_steps` (
  `id` int(11) NOT NULL,
  `task` varchar(256) COLLATE utf8mb4_bin NOT NULL,
  `step01` varchar(256) COLLATE utf8mb4_bin NOT NULL,
  `step02` varchar(256) COLLATE utf8mb4_bin NOT NULL,
  `step03` varchar(256) COLLATE utf8mb4_bin NOT NULL,
  `step04` varchar(256) COLLATE utf8mb4_bin NOT NULL,
  `step05` varchar(256) COLLATE utf8mb4_bin NOT NULL,
  `step06` varchar(256) COLLATE utf8mb4_bin NOT NULL,
  `step07` varchar(256) COLLATE utf8mb4_bin NOT NULL,
  `step08` varchar(256) COLLATE utf8mb4_bin NOT NULL,
  `step09` varchar(256) COLLATE utf8mb4_bin NOT NULL,
  `step10` varchar(256) COLLATE utf8mb4_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `task_steps`
--

INSERT INTO `task_steps` (`id`, `task`, `step01`, `step02`, `step03`, `step04`, `step05`, `step06`, `step07`, `step08`, `step09`, `step10`, `created_at`, `updated_at`) VALUES
(1, 'ごみ捨て', '部屋中のごみを集める', 'ゴミ袋を収集所にもっていく', '新しいごみ袋をゴミ箱にセットする', '新しいごみ袋をゴミ箱にセットする', '新しいごみ袋をゴミ箱にセットする', '新しいごみ袋をゴミ箱にセットする', '新しいごみ袋をゴミ箱にセットする', '新しいごみ袋をゴミ箱にセットする', '新しいごみ袋をゴミ箱にセットする', '新しいごみ袋をゴミ箱にセットする', '2022-06-09 23:54:36', '2022-06-09 23:54:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `task_steps`
--
ALTER TABLE `task_steps`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `task_steps`
--
ALTER TABLE `task_steps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
