-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 04-Maio-2017 às 00:33
-- Versão do servidor: 5.7.18-0ubuntu0.17.04.1
-- PHP Version: 7.0.15-1ubuntu4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `teste`
--

CREATE TABLE `teste` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `celular` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `teste`
--

INSERT INTO `teste` (`id`, `nome`, `celular`) VALUES
(1, 'kamila', '9874847234'),
(2, 'teste 1', '123456789012'),
(4, 'teste 3', '6667666777'),
(7, 'teste 4', '123456'),
(8, 'teste 5', '99897789789'),
(9, 'teste 6', '3456789097'),
(10, 'teste 7', '879789789789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teste`
--
ALTER TABLE `teste`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teste`
--
ALTER TABLE `teste`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
