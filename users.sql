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
('nalini.n@nmit.ac.in', '1234', 1, './audimg/Dr-Nalini.png', 'Dr. Nalini', 'Professor', 'Computer Science and Engineering'),
('prashantha.hs@nmit.ac.in', '1234', 2, './audimg/hs.prashanth.png', 'Dr. Prashanth H S', 'Professor', 'Electronics and Communication Engineering'),
('madhusudhan.acharya@nmit.ac.in', '1234', 3, './audimg/Madhusudhan-Acharya.png', 'Dr. Madhusudhan', 'Professor', 'Mechanical Engineering'),
('kapilan.n@nmit.ac.in', '1234', 4, './audimg/kapilan.png', 'Dr. Kapilan', 'Professor', 'Mechanical Engineering'),
('srinivas.db@nmit.ac.in', '1234', 5, './audimg/srinivas.png', 'Dr.D B Srinivas', 'Professor', 'Information science and Engineering'),
('swarnalatha.ks@nmit.ac.in', '1234', 6, './audimg/swarnaltha.png', 'Dr.Swarna Latha K S ', 'Professor', 'Information science and Engineering'),
('jairaj@nmit.ac.in', '1234', 7, './audimg/Jairaj-C.png', 'Dr.Jairaj ', ' Assoc.Professor', 'Civil Engineering'),
('karunakara.rai@nmit.ac.in', '1234', 8, './audimg/karunakara-rai.png', 'Dr.Karunakar Rai ', 'Assoc.Professor', 'Electronics & Communication Engineering'),
('adityashastry.k@nmit.ac.in', '1234', 9, './audimg/adityashasthry.png', 'Dr.Aditya Sastry ', 'Assoc.Professor', 'Information science and Engineering'),
('madhu.patil@nmit.ac.in', '1234', 10, './audimg/madhu-patil.png', 'Dr.Madhu Paptil', 'Assoc.Professor', 'Electronics & Communication Engineering'),
('manjula.bm@nmit.ac.in', '1234', 11, './audimg/mangula-b.png', 'Dr.Manjula', 'Assoc.Professor', 'Electronics & Communication Engineering'),
('chaitra.hv@nmit.ac.in', '1234', 12, './audimg/chaitra.png', 'Dr.Chaitra H V', 'Assoc.Professor', 'Computer Science & Engineering'),
('vani.v@nmit.ac.in', '1234', 13, './audimg/vani-new.png', 'Dr.Vani', 'Assoc.Professor', 'Computer Science & Engineering'),
('archana.naik@nmit.ac.in', '1234', 14, './audimg/archana-new.png', 'Dr.Archana Naik ', 'Assoc.Professor', 'Computer Science & Engineering'),
('rameshbabu.n@nmit.ac.in', '1234', 15, './audimg/Ramesh-Babu-N.png', 'Dr.Ramesh Babu', 'Assoc.Professor', 'Mechanical Engineering'),
('chethan.ks@nmit.ac.in', '1234', 16, './audimg/Chethan-KS.png', 'Dr.Chethan KS', 'Assoc.Professor', 'Mechanical Engineering'),
('archana.mathur@nmit.ac.in', '1234', 17, './audimg/archana.png', 'Dr.Archana Mathur', 'Assoc.Professor', 'Information Science & Engineering'),
('samanvitha.n@nmit.ac.in', '1234', 18, './audimg/N-Samanvita.png', 'Dr.Samnanvitha', 'Assoc.Professor', 'Electrical & Electronics Engineering'),
('srikanth.hv@nmit.ac.in', '1234', 19, './audimg/Srikanth-H-V.png', 'Dr.Shrikanth H V', 'Assoc.Professor', 'Aeronautical Engineering'),
('vinayaka.n@nmit.ac.in', '1234', 20, './audimg/Vinayaka-N.png', 'Dr.Vinayaka N', 'Assoc.Professor', 'Aeronautical Engineering'),
('hitha.d.shetty@nmit.ac.in', '1234', 21, './audimg/hitha.png', 'Dr.Hitha D Shetty', 'Assoc.Professor', 'Physics'),
('jagadeesha.s@nmit.ac.in', '1234', 22, './audimg/jagadeesha.png', 'Dr.Jagadeesha S', 'Asst.Professor', 'Mathematics'),
('aravinda.t@nmit.ac.in', '1234', 23, './audimg/aravinda.png', 'Dr.Aravind', 'Assoc.Professor', 'Chemistry'),
('kshama.shetty@nmit.ac.in', '1234', 24, './audimg/kshama.png', 'Dr.Kshama Shetty', 'Assoc.Professor', 'Chemistry');

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
