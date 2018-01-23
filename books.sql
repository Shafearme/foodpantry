-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 23, 2018 at 02:53 PM
-- Server version: 5.6.32-78.1
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pixelqua_phptest`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `LastName` text CHARACTER SET utf8mb4 NOT NULL,
  `FirstName` text CHARACTER SET utf8mb4 NOT NULL,
  `Title` text CHARACTER SET utf8mb4 NOT NULL,
  `Genre` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`LastName`, `FirstName`, `Title`, `Genre`) VALUES
('Rowling', 'JK', 'Harry Potter', 'Fantasy'),
('Stead', 'Rebecca', 'When You Reach Me', 'Coming-of-Age, Science Fiction'),
('Kongisburg', 'EL', 'From the Mixed-Up Files', 'Mystery'),
('Tolkien', 'JRR', 'The Hobbit', 'Fantasy');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
