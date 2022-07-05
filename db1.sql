-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 09:15 PM
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

--
-- Dumping data for table `izdavaci_stanova`
--

INSERT INTO `izdavaci_stanova` (`id`, `ime`, `prezime`, `email`, `lozinka`) VALUES
(5, 'Nemanja', 'Mosurovic', 'nemanja1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `stanovi`
--

CREATE TABLE `stanovi` (
  `id` int(3) NOT NULL,
  `nazivstana` varchar(100) COLLATE utf8mb4_croatian_mysql561_ci NOT NULL,
  `adresa` varchar(100) COLLATE utf8mb4_croatian_mysql561_ci NOT NULL,
  `vrstastana` varchar(50) COLLATE utf8mb4_croatian_mysql561_ci NOT NULL,
  `kvadratura` int(5) NOT NULL,
  `sprat` int(3) NOT NULL,
  `cena` int(9) NOT NULL,
  `gradnja` tinyint(1) NOT NULL,
  `uknjizen` tinyint(1) NOT NULL,
  `namesten` tinyint(1) NOT NULL,
  `dodatnaoprema` varchar(255) COLLATE utf8mb4_croatian_mysql561_ci DEFAULT NULL,
  `nazivslike` varchar(50) COLLATE utf8mb4_croatian_mysql561_ci NOT NULL,
  `idvlasnika` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_croatian_mysql561_ci;

--
-- Dumping data for table `stanovi`
--

INSERT INTO `stanovi` (`id`, `nazivstana`, `adresa`, `vrstastana`, `kvadratura`, `sprat`, `cena`, `gradnja`, `uknjizen`, `namesten`, `dodatnaoprema`, `nazivslike`, `idvlasnika`) VALUES
(1, 'Stan na Dorćolu', 'Dunavska 15', 'Dvosoban', 55, 3, 400, 0, 1, 1, 'Nema dodatnu opremuu', 'portfolio-3.jpg', 5);

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
-- Indexes for table `stanovi`
--
ALTER TABLE `stanovi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idvlasnika` (`idvlasnika`);

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stanovi`
--
ALTER TABLE `stanovi`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stanovi_korisnici`
--
ALTER TABLE `stanovi_korisnici`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stanovi`
--
ALTER TABLE `stanovi`
  ADD CONSTRAINT `idvlasnika` FOREIGN KEY (`idvlasnika`) REFERENCES `izdavaci_stanova` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
