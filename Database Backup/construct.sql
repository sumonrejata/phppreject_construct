-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2022 at 05:55 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `construct`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `comple_cases`
--

CREATE TABLE `comple_cases` (
  `id` int(100) NOT NULL,
  `the_title` varchar(255) NOT NULL,
  `the_content` varchar(255) NOT NULL,
  `the_btn` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comple_cases`
--

INSERT INTO `comple_cases` (`id`, `the_title`, `the_content`, `the_btn`) VALUES
(1, 'fdfgdf', 'gdfgfd', 'dfgfdg'),
(2, 'sdfsdf', 'dfdsf', 'dfdfds');

-- --------------------------------------------------------

--
-- Table structure for table `comple_cases_info`
--

CREATE TABLE `comple_cases_info` (
  `id` int(100) NOT NULL,
  `the_title` varchar(255) NOT NULL,
  `the_content` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `sub_tag` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comple_cases_info`
--

INSERT INTO `comple_cases_info` (`id`, `the_title`, `the_content`, `thumbnail`, `sub_tag`) VALUES
(1, 'Marckting', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali', 'completed_case_3.png', 'fgdfdsf');

-- --------------------------------------------------------

--
-- Table structure for table `construct_about`
--

CREATE TABLE `construct_about` (
  `id` int(100) NOT NULL,
  `the_title` varchar(100) NOT NULL,
  `the_content` varchar(255) NOT NULL,
  `about_image` varchar(255) NOT NULL,
  `read_more` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `construct_about`
--

INSERT INTO `construct_about` (`id`, `the_title`, `the_content`, `about_image`, `read_more`) VALUES
(19, 'We are more trusted then 5000 clients', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru dolor sit amet, consectetur adipn.', 'team-2.jpg', 'Learn More '),
(25, 'fgdfds', 'dfdsfdsf', 'team-2.jpg', 'Learn More '),
(26, 'fgdfds', 'dfdsfdsf', 'team-2.jpg', 'Learn More '),
(27, 'We are more trusted then 5000 clients', 'dfdsfdsf', 'team-3.jpg', 'Learn More '),
(28, 'fgdfds', 'dfdsfdsf', 'team-1.jpg', 'Learn More '),
(29, 'ghghgh', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru dolor sit amet, consectetur adipn.', '', 'Learn More ');

-- --------------------------------------------------------

--
-- Table structure for table `home_contact`
--

CREATE TABLE `home_contact` (
  `id` int(100) NOT NULL,
  `the_title` varchar(255) NOT NULL,
  `the_content` varchar(255) NOT NULL,
  `contact_btn` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_contact`
--

INSERT INTO `home_contact` (`id`, `the_title`, `the_content`, `contact_btn`) VALUES
(1, 'Request for Call Back', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore,', 'Contact Us'),
(2, 'Request for Call Back', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore,', 'Contact Us'),
(3, 'Request for Call Back', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore,', 'Contact Us');

-- --------------------------------------------------------

--
-- Table structure for table `recent_project`
--

CREATE TABLE `recent_project` (
  `id` int(100) NOT NULL,
  `the_title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `the_img` varchar(255) NOT NULL,
  `about_button` varchar(100) NOT NULL,
  `the_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recent_project`
--

INSERT INTO `recent_project` (`id`, `the_title`, `description`, `the_img`, `about_button`, `the_date`) VALUES
(19, 'gdg', '', 'team-3.jpg', '', '2022-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `service_post`
--

CREATE TABLE `service_post` (
  `id` int(100) NOT NULL,
  `the_title` varchar(200) NOT NULL,
  `the_content` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_post`
--

INSERT INTO `service_post` (`id`, `the_title`, `the_content`, `thumbnail`) VALUES
(1, 'Strategic Planning', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.', 'rcent_3.png'),
(2, 'Strategic Planning', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.', 'rcent_3.png');

-- --------------------------------------------------------

--
-- Table structure for table `service_title`
--

CREATE TABLE `service_title` (
  `id` int(100) NOT NULL,
  `the_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_title`
--

INSERT INTO `service_title` (`id`, `the_title`) VALUES
(1, 'Our Services'),
(2, 'Our Services'),
(3, 'Our Services'),
(4, 'Our Services'),
(5, 'Our Services'),
(6, 'Our Services'),
(7, 'Our Services'),
(8, 'Our Services'),
(9, 'Our Services'),
(10, 'Our Services'),
(11, 'Our Services'),
(12, 'Our Services');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(20) NOT NULL,
  `the_title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `the_title`) VALUES
(1, 'Teams'),
(2, 'Teams'),
(3, 'Teams');

-- --------------------------------------------------------

--
-- Table structure for table `teams_info`
--

CREATE TABLE `teams_info` (
  `id` int(100) NOT NULL,
  `the_title` varchar(255) NOT NULL,
  `the_degnation` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teams_info`
--

INSERT INTO `teams_info` (`id`, `the_title`, `the_degnation`, `thumbnail`) VALUES
(1, 'Md.Tanjim Ahamed', 'CEO', 'team-1.jpg'),
(2, 'Md.Milton', 'Hardware', 'team-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(100) NOT NULL,
  `the_title` varchar(255) NOT NULL,
  `the_content` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comple_cases`
--
ALTER TABLE `comple_cases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comple_cases_info`
--
ALTER TABLE `comple_cases_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `construct_about`
--
ALTER TABLE `construct_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_contact`
--
ALTER TABLE `home_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recent_project`
--
ALTER TABLE `recent_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_post`
--
ALTER TABLE `service_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_title`
--
ALTER TABLE `service_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams_info`
--
ALTER TABLE `teams_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comple_cases`
--
ALTER TABLE `comple_cases`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comple_cases_info`
--
ALTER TABLE `comple_cases_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `construct_about`
--
ALTER TABLE `construct_about`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `home_contact`
--
ALTER TABLE `home_contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `recent_project`
--
ALTER TABLE `recent_project`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `service_post`
--
ALTER TABLE `service_post`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service_title`
--
ALTER TABLE `service_title`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teams_info`
--
ALTER TABLE `teams_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
