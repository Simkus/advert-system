-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 03, 2015 at 01:22 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `symfony`
--

-- --------------------------------------------------------

--
-- Table structure for table `Adverts`
--

CREATE TABLE `Adverts` (
  `id` int(11) NOT NULL,
  `mark` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `attributes` text NOT NULL,
  `mark_id` int(5) NOT NULL,
  `model_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Attributes`
--

CREATE TABLE `Attributes` (
  `id` int(4) NOT NULL,
  `attribute_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Attributes`
--

INSERT INTO `Attributes` (`id`, `attribute_name`) VALUES
(1, 'Attribute 1'),
(2, 'Attribute 2'),
(3, 'Attribute 3'),
(4, 'Attribute 4'),
(5, 'Attribute 5'),
(6, 'Attribute 6'),
(7, 'Attribute 7'),
(8, 'Attribute 8'),
(9, 'Attribute 9'),
(10, 'Attribute 10');

-- --------------------------------------------------------

--
-- Table structure for table `Marks`
--

CREATE TABLE `Marks` (
  `id` int(5) NOT NULL,
  `marks_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Marks`
--

INSERT INTO `Marks` (`id`, `marks_name`) VALUES
(1, 'Mercedes'),
(2, 'BMW'),
(3, 'Audi');

-- --------------------------------------------------------

--
-- Table structure for table `Models`
--

CREATE TABLE `Models` (
  `id` int(11) NOT NULL,
  `models_name` varchar(255) NOT NULL,
  `mark_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Models`
--

INSERT INTO `Models` (`id`, `models_name`, `mark_id`) VALUES
(1, 'Z8', 1),
(2, 'Z4', 1),
(3, '740', 2),
(4, '750', 2),
(5, 'RS2', 3),
(6, 'RS3', 3),
(7, 'A4', 3),
(8, 'A5', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Adverts`
--
ALTER TABLE `Adverts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Attributes`
--
ALTER TABLE `Attributes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `Marks`
--
ALTER TABLE `Marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Models`
--
ALTER TABLE `Models`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Adverts`
--
ALTER TABLE `Adverts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `Attributes`
--
ALTER TABLE `Attributes`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `Marks`
--
ALTER TABLE `Marks`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Models`
--
ALTER TABLE `Models`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
