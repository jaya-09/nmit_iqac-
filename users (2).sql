-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2022 at 07:40 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

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
('auditor1', '1234', 1, './audimg/Dr-Nalini.png', 'Dr. Nalini', 'Professor', 'Computer Science and Engineering'),
('auditor2', '1234', 2, './audimg/hs.prashanth.png', 'Dr. Prashanth H S', 'Professor', 'Electronics and Communication Engineering'),
('auditor3', '1234', 3, './audimg/Madhusudhan-Acharya.png', 'Dr. Madhusudhan', 'Professor', 'Mechanical Engineering'),
('auditor4', '1234', 4, './audimg/kapilan.png', 'Dr. Kapilan', 'Professor', 'Mechanical Engineering'),
('auditor5', '1234', 5, './audimg/srinivas.png', 'Dr.D B Srinivas', 'Professor', 'Information science and Engineering'),
('auditor6', '1234', 6, './audimg/swarnaltha.png', 'Dr.Swarna Latha K S ', 'Professor', 'Information science and Engineering'),
('auditor7', '1234', 7, './audimg/Jairaj-C.png', 'Dr.Jairaj ', ' Assoc.Professor', 'Civil Engineering'),
('auditor8', '1234', 8, './audimg/karunakara-rai.png', 'Dr.Karunakar Rai ', 'Assoc.Professor', 'Electronics & Communication Engineering'),
('auditor9', '1234', 9, './audimg/adityashasthry.png', 'Dr.Aditya Sastry ', 'Assoc.Professor', 'Information science and Engineering'),
('auditor10', '1234', 10, './audimg/madhu-patil.png', 'Dr.Madhu Paptil', 'Assoc.Professor', 'Electronics & Communication Engineering'),
('auditor11', '1234', 11, './audimg/mangula-b.png', 'Dr.Manjula', 'Assoc.Professor', 'Electronics & Communication Engineering'),
('auditor12', '1234', 12, './audimg/chaitra.png', 'Dr.Chaitra H V', 'Assoc.Professor', 'Computer Science & Engineering'),
('auditor13', '1234', 13, './audimg/vani-new.png', 'Dr.Vani', 'Assoc.Professor', 'Computer Science & Engineering'),
('auditor14', '1234', 14, './audimg/archana-new.png', 'Dr.Archana Naik ', 'Assoc.Professor', 'Computer Science & Engineering'),
('auditor15', '1234', 15, './audimg/Ramesh-Babu-N.png', 'Dr.Ramesh Babu', 'Assoc.Professor', 'Mechanical Engineering'),
('auditor16', '1234', 16, './audimg/Chethan-KS.png', 'Dr.Chethan KS', 'Assoc.Professor', 'Mechanical Engineering'),
('auditor17', '1234', 17, './audimg/archana.png', 'Dr.Archana Mathur', 'Assoc.Professor', 'Information Science & Engineering'),
('auditor18', '1234', 18, './audimg/N-Samanvita.png', 'Dr.Samnanvitha', 'Assoc.Professor', 'Electrical & Electronics Engineering'),
('auditor19', '1234', 19, './audimg/Srikanth-H-V.png', 'Dr.Shrikanth H V', 'Assoc.Professor', 'Aeronautical Engineering'),
('auditor20', '1234', 20, './audimg/Vinayaka-N.png', 'Dr.Vinayaka N', 'Assoc.Professor', 'Aeronautical Engineering'),
('auditor21', '1234', 21, './audimg/hitha.png', 'Dr.Hitha D Shetty', 'Assoc.Professor', 'Physics'),
('auditor22', '1234', 22, './audimg/jagadeesha.png', 'Dr.Jagadeesha S', 'Asst.Professor', 'Mathematics'),
('auditor23', '1234', 23, './audimg/aravinda.png', 'Dr.Aravind', 'Assoc.Professor', 'Chemistry'),
('auditor24', '1234', 24, './audimg/kshama.png', 'Dr.Kshama Shetty', 'Assoc.Professor', 'Chemistry');

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
