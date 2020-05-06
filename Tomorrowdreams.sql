-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 05, 2020 at 05:26 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE  "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Tomorrowdreams`
--

-- --------------------------------------------------------

--
-- Table structure for table `Tomorrowdreams`
--
-- Creation: May 05, 2020 at 12:33 PM
--

CREATE TABLE `Tomorrowdreams` (
  `id_Tomorrowdreams` int(11) NOT NULL,
  `Prénom` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `E-mail` varchar(255) NOT NULL,
  `Mobile` text NOT NULL,
  `date_de_naissance` date NOT NULL,
  `sexe` varchar(5) NOT NULL DEFAULT 'Femme',
  `Password` int(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Numero` varchar(255) NOT NULL,
  `Commune` varchar(255) NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `Pays` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Tomorrowdreams`
--
ALTER TABLE `Tomorrowdreams`
  ADD PRIMARY KEY (`id_Tomorrowdreams`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Tomorrowdreams`
--
ALTER TABLE `Tomorrowdreams`
  MODIFY `id_Tomorrowdreams` int(11) NOT NULL AUTO_INCREMENT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
