-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2018 at 05:01 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elib`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `call_number` text NOT NULL,
  `title` text NOT NULL,
  `author` text NOT NULL,
  `category` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `call_number`, `title`, `author`, `category`) VALUES
(1, '2012-1234', 'How to be OP', 'Justine Romero', 'OP Guides'),
(2, '2012-1235', 'How to main Yasuo', 'Gerard Sopsop', 'Lol Guides'),
(3, '2012-0000', 'Tips on Everything', 'Third Iringan', 'Guides'),
(4, '2012-7654', 'How to Maokai', 'Dohn Miranda', 'Lol Guides'),
(5, '2011-1111', 'Genji Main', 'Joe Pan', 'Games');

-- --------------------------------------------------------

--
-- Table structure for table `copy`
--

CREATE TABLE `copy` (
  `id` int(11) NOT NULL,
  `access_number` text NOT NULL,
  `available` int(11) NOT NULL,
  `parent` text NOT NULL,
  `date_borrowed` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `copy`
--

INSERT INTO `copy` (`id`, `access_number`, `available`, `parent`, `date_borrowed`) VALUES
(1, '1234', 1, 'How to be OP', ''),
(2, '1235', 1, 'How to be OP', ''),
(3, '1236', 1, 'How to be OP', ''),
(4, '1237', 1, 'How to be OP', ''),
(5, '1238', 1, 'How to be OP', ''),
(6, '4321', 1, 'How to main Yasuo', ''),
(7, '4322', 1, 'How to main Yasuo', ''),
(8, '4323', 1, 'How to main Yasuo', ''),
(9, '4324', 1, 'How to main Yasuo', ''),
(10, '4325', 1, 'How to main Yasuo', ''),
(11, '0', 1, 'Tips on Everything', ''),
(12, '1', 1, 'Tips on Everything', ''),
(13, '2', 1, 'Tips on Everything', ''),
(14, '3', 1, 'Tips on Everything', ''),
(15, '4', 0, 'Tips on Everything', '2018-02-28'),
(16, '5', 1, 'Tips on Everything', ''),
(17, '6', 1, 'Tips on Everything', ''),
(18, '7', 1, 'Tips on Everything', ''),
(19, '8', 1, 'Tips on Everything', ''),
(20, '9', 1, 'Tips on Everything', ''),
(21, '321', 0, 'How to Maokai', '2018-02-28'),
(22, '322', 0, 'How to Maokai', '2018-03-02'),
(23, '9990', 1, 'Genji Main', ''),
(24, '9991', 1, 'Genji Main', ''),
(25, '9992', 1, 'Genji Main', '');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `copy` text NOT NULL,
  `user` text NOT NULL,
  `amount` int(11) NOT NULL,
  `date` text NOT NULL,
  `ref_no` int(11) NOT NULL,
  `date_returned` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `copy`, `user`, `amount`, `date`, `ref_no`, `date_returned`) VALUES
(1, '1234', '2012-001', 0, '2018-02-28', 1001, '2018-02-28'),
(2, '1235', '2012-002', 0, '2018-02-28', 1002, '2018-02-28'),
(3, '1236', '2012-003', 0, '2018-02-28', 1003, '2018-02-28'),
(4, '4321', '2012-004', 0, '2018-02-28', 1004, '2018-02-28'),
(5, '4', '2012-003', 30, '2018-02-25', 1005, ''),
(6, '321', '2012-005', 30, '2018-02-25', 1006, ''),
(7, '322', '2012-001', 5, '2018-03-02', 1007, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `id_code` text NOT NULL,
  `name` text NOT NULL,
  `batch` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `id_code`, `name`, `batch`) VALUES
(1, '2012-001', 'Justine Romero', '2018'),
(2, '2012-002', 'Judd Puerto', '2018'),
(3, '2012-003', 'Remigio Iringan', '2018'),
(4, '2012-004', 'Gerard Sopsop', '2018'),
(5, '2012-005', 'Martin Miranda', '2018');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `copy`
--
ALTER TABLE `copy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `copy`
--
ALTER TABLE `copy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
