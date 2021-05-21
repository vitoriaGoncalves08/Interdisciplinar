-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 20, 2021 at 11:44 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbInterdiciplinar`
--
CREATE DATABASE IF NOT EXISTS `dbInterdiciplinar` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dbInterdiciplinar`;

-- --------------------------------------------------------

--
-- Table structure for table `tbpalavra`
--

CREATE TABLE `tbpalavra` (
  `idPalavra` int(11) NOT NULL,
  `nomePalavra` varchar(100) NOT NULL DEFAULT '',
  `traducaoPalavra` varchar(100) NOT NULL DEFAULT '',
  `descricaoPalavra` varchar(4000) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbpalavra`
--

INSERT INTO `tbpalavra` (`idPalavra`, `nomePalavra`, `traducaoPalavra`, `descricaoPalavra`) VALUES
(1, 'Algorithm', 'Algoritmo', 'Uma série de instruções ou passos de procedimentos para a\r\nsolução de um problema específico.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbpalavra`
--
ALTER TABLE `tbpalavra`
  ADD PRIMARY KEY (`idPalavra`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbpalavra`
--
ALTER TABLE `tbpalavra`
  MODIFY `idPalavra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
