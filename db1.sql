-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 10:47 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `izdavaci_stanova`
--

CREATE TABLE `izdavaci_stanova` (
  `id` int(100) NOT NULL,
  `ime` varchar(20) COLLATE utf8mb4_croatian_mysql561_ci NOT NULL,
  `prezime` varchar(25) COLLATE utf8mb4_croatian_mysql561_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_croatian_mysql561_ci NOT NULL,
  `lozinka` varchar(100) COLLATE utf8mb4_croatian_mysql561_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_croatian_mysql561_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stanovi_korisnici`
--

CREATE TABLE `stanovi_korisnici` (
  `id` int(100) NOT NULL,
  `ime` varchar(20) COLLATE utf8mb4_croatian_mysql561_ci NOT NULL,
  `prezime` varchar(25) COLLATE utf8mb4_croatian_mysql561_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_croatian_mysql561_ci NOT NULL,
  `lozinka` varchar(100) COLLATE utf8mb4_croatian_mysql561_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_croatian_mysql561_ci;

--
-- Dumping data for table `stanovi_korisnici`
--

INSERT INTO `stanovi_korisnici` (`id`, `ime`, `prezime`, `email`, `lozinka`) VALUES
(1, 'Nemanja', 'Mosurovic', 'nemanja@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `izdavaci_stanova`
--
ALTER TABLE `izdavaci_stanova`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stanovi_korisnici`
--
ALTER TABLE `stanovi_korisnici`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `izdavaci_stanova`
--
ALTER TABLE `izdavaci_stanova`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stanovi_korisnici`
--
ALTER TABLE `stanovi_korisnici`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
