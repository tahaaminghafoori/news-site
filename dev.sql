-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 23, 2022 at 06:55 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `uname` text NOT NULL,
  `umail` text NOT NULL,
  `pass` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `uname`, `umail`, `pass`, `status`) VALUES
(1, 'ادمین', 'admin', 'admin@localhost', '21232f297a57a5a743894a0e4a801fc3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `id` int(11) NOT NULL,
  `cname` text NOT NULL,
  `menu` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`id`, `cname`, `menu`) VALUES
(1, 'cat1', 1),
(2, 'cat2', 1),
(3, 'cat3', 0),
(4, 'cat4', 0);

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `stitle` text NOT NULL,
  `sname` text NOT NULL,
  `surl` text NOT NULL,
  `sdesc` text NOT NULL,
  `skey` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `stitle`, `sname`, `surl`, `sdesc`, `skey`) VALUES
(1, 'DEV', 'DEV', 'localhost', 'tagdev', 'tagdev');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `pname` text NOT NULL,
  `pdesc` text NOT NULL,
  `pimage` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `menu` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `pname`, `pdesc`, `pimage`, `status`, `menu`) VALUES
(3, 'tt', 'tt', 'assets/img/content/about/about_bg.jpg', 1, 1),
(4, 'tt', 'tt', 'assets/img/content/about/about_bg.jpg', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `pname` text NOT NULL,
  `pdate` bigint(20) NOT NULL,
  `pimage` text NOT NULL,
  `pauthor` text NOT NULL,
  `pdesc` text NOT NULL,
  `pcat` text NOT NULL,
  `ptag` text NOT NULL,
  `phits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `pname`, `pdate`, `pimage`, `pauthor`, `pdesc`, `pcat`, `ptag`, `phits`) VALUES
(1, 'test1', 1647880354, 'assets/img/content/thumb/post-8.jpg', '1', 'testddhgfdegfurgyuygr gruifgrfuogrfuyegfuigtrqoiwugftrioqwurgfuow', '3 2', '1', 17),
(2, 'test', 1647880354, 'assets/img/content/thumb/post-8.jpg', '1', 'testdtghstrhtrhyrthyrt', '1 3', '1', 101),
(3, 'test2', 1647880354, 'assets/img/content/thumb/post-8.jpg', '1', 'testdtghstrhtrhyrthyrt', '1 2', '1', 99);

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `tname` text NOT NULL,
  `tcount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id`, `tname`, `tcount`) VALUES
(1, '11', 2),
(2, '12', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
