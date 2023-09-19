-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2023 at 10:52 AM
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
-- Database: `idcard`
--

-- --------------------------------------------------------

--
-- Table structure for table `iddata`
--

CREATE TABLE `iddata` (
  `uid` int(11) NOT NULL,
  `orgName` varchar(100) NOT NULL,
  `orgAddress` varchar(300) NOT NULL,
  `orgPhone` varchar(20) NOT NULL,
  `prollno` varchar(30) NOT NULL,
  `pname` varchar(40) NOT NULL,
  `pposition` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `pphone` varchar(20) NOT NULL,
  `paddress` varchar(300) NOT NULL,
  `pblood` varchar(20) NOT NULL,
  `orglogo` varchar(200) NOT NULL,
  `pphoto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iddata`
--

INSERT INTO `iddata` (`uid`, `orgName`, `orgAddress`, `orgPhone`, `prollno`, `pname`, `pposition`, `dob`, `pphone`, `paddress`, `pblood`, `orglogo`, `pphoto`) VALUES
(56, 'QUEEN MARY HIGHER SECONDARY SCHOOL', 'KANDAMANGALAM,VILLUPURAM,TAMILNADU', '7899920022', '99002', 'GAJINI', 'XII-F', '2023-01-11', '002929992', 'NO.8999,NERUJI STREET,VEERANAM POST ,VILLUPURAM T.K', 'O+ve', './uploads/avatar.jpg', './uploads/avatar.jpg'),
(57, 'kanapthy school', 'mangalore', '2453463', '45525', 'kirupa', 'X-E', '2023-01-26', '999000005', 'No:399,Mariyamman Temple Street,A.R Palayam,Veeranam(Post),Villupuram(T.K).', 'B+ve', 'uploads/8821171_447.jpg', 'uploads/IMG_20210422_094244.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `upass` varchar(100) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `uphone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `uname`, `upass`, `uemail`, `uphone`) VALUES
(10, 'yogeshwari', '92992', 'yogeshvari@gmail.com', '900829222'),
(11, 'kavi', 'kavi', 'kavi@gmail.com', '89002982210'),
(12, 'vinoth', 'vinoth', 'vinoth@gmail.com', '7380293902'),
(13, 'vinoth', 'vinoth', 'vinoth@gmail.com', '7380293902'),
(14, 'vicky', '9078882', 'vicky2001@gmail.com', '73736749992');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `iddata`
--
ALTER TABLE `iddata`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `iddata`
--
ALTER TABLE `iddata`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
