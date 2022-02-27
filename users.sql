-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2022 at 05:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `audit`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `picture` varchar(60) NOT NULL,
  `name` varchar(150) NOT NULL,
  `designation` varchar(60) NOT NULL,
  `dept` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `user_id`, `picture`, `name`, `designation`, `dept`) VALUES
('admin', 'admin', 0, './audimg/Dr-Sridhar-V.jpg', 'Admin', 'Administration', 'NMIT admin'),
('auditor1', '1234', 1, './audimg/Dr-Sridhar-V.jpg', 'Dr. V Sridhar', 'Dean - Academic', 'NMIT council'),
('auditor2', '1234', 2, './audimg/Dr-Kiran.jpg', 'Dr. Kiran Aithal', 'Professor', 'Mechanical Engineering'),
('auditor3', '1234', 3, './audimg/Dr-Nalini.png', 'Dr. Nalini', 'Professor', 'Computer Science and Engineering');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
