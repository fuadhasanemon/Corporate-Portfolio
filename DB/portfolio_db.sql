-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2022 at 03:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `image` varchar(20) NOT NULL,
  `active_status` tinyint(2) NOT NULL DEFAULT 1 COMMENT '0= inActive, 1=active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `title`, `sub_title`, `details`, `image`, `active_status`) VALUES
(1, 'Lorem ipsum is a placeholder text commonly used to demonstrate the', 'Lorem ipsum is a placeholder text commonly used to demonstrate the', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', 'image1.jpeg', 0),
(2, 'ki obostha vhai', 'ki obostha', 'vala aso ni fuad', 'emon.pmg', 1),
(3, 'SVSL nkl  ', 'Dvklnvln S', 'VkSDN kSN> ', '', 0),
(4, 'vjsbs', 'VJbKJVBe', 'JVBKJj', '', 1),
(5, 'Fuad hasas', 'Hasan ', 'Emon', '1655901928.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(150) NOT NULL,
  `active_status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inActive,1=active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `active_status`) VALUES
(1, 'web design', 1),
(2, 'web development', 1);

-- --------------------------------------------------------

--
-- Table structure for table `our_projects`
--

CREATE TABLE `our_projects` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_link` varchar(255) NOT NULL,
  `project_thumb` varchar(255) NOT NULL,
  `active_status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0= inActive, 1=active	'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `our_projects`
--

INSERT INTO `our_projects` (`id`, `category_id`, `project_name`, `project_link`, `project_thumb`, `active_status`) VALUES
(1, 1, 'lms', '0', '1655987391.png', 1),
(2, 2, 'mms', '0', '1655987536.png', 1),
(3, 1, 'SBDSB', '0', '1655987744.jpg', 1),
(4, 2, 'nabir foundation', 'http://localhost/lfwf_assignment/project/admin/ourProjects/projectAdd.php', '1655988000.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_projects`
--
ALTER TABLE `our_projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `our_projects`
--
ALTER TABLE `our_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
