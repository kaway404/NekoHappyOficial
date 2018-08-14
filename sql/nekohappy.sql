-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Ago-2018 às 20:29
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nekohappy`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `passwordchange`
--

CREATE TABLE `passwordchange` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `cry` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `cry` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `background` text NOT NULL,
  `cover` text NOT NULL,
  `config` int(11) NOT NULL,
  `game` text NOT NULL,
  `movie` text NOT NULL,
  `pincode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `cry`, `email`, `password`, `usuario`, `admin`, `avatar`, `background`, `cover`, `config`, `game`, `movie`, `pincode`) VALUES
(10, 'nekohapy_85d9235d10cf197950d843e56b47021ff02b0cee', 'kaway@hotmail.com', 'b7eb6c689c037217079766fdb77c3bac3e51cb4c', 'kaway', 0, 'nekohappy_5ee3e30b2aa97a6b720510c98cdf364b9d696592bca643e9251f5302bb298c72b96764022db37303.png', '', '', 1, '', '', '4002'),
(11, 'nekohapy_70909c345cd056c3d4dcd0f5a056fb33e88aaa23', 'anelise@hotmail.com', 'e718576aa3e35cdc17a72ac4d6a7bb2772f5fc32', 'anelise', 0, '1.jpg', '', '', 0, '', '', ''),
(12, 'nekohapy_800f7e501a3f1a0444a94b324e046b2859f9fb44', 'ininja212@gmail.com', '705314e475103d30f98e4457435b746d7181601f', 'SukyT', 0, '2.png', '', '', 0, '', '', ''),
(13, 'nekohapy_c3da8be1a37068d5cda6fdea08af092ed13417e3', 'luizfelipe34@hotmail.com.br', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Me verifica', 0, '3.jpg', '', '', 0, '', '', ''),
(14, 'nekohapy_2c7eb72c3889dc7409783fb5cd46b574bc775848', 'schirlei@hotmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'schirlei', 0, '4.jpg', '', '', 0, '', '', ''),
(15, 'nekohapy_3883e02b80831d294453b441ef68b4c5db90f9a3', 'anelise51@hotmail.com', '3c555211cad6a0bd179cd6baa104f5bb9beb88e1', 'anelise51', 0, '2.png', '', '', 0, '', '', ''),
(16, 'nekohapy_ff9358742103ddc441d6fad617497413480957f1', 'mateusheckertg@gmail.com', '1cb09364452f9a307f94c045215ba7bb84c1b967', 'Mateus Heckert GonÃ§alves', 0, 'nekohappy_aa0c1b9fd357c81227f35088228429aa04442a77dbed5368f1637c7720919da9cf784ddb80ec7288.png', '', '', 0, '', '', ''),
(17, 'nekohapy_9a863f159e7e406d7cde8437a1ccd28663829a3d', 'evertonaugustoo@gmail.com', 'e5d02517b5ad6b3cacdb0ceb6c05f62abe44fe67', 'BabidP', 0, 'default.jpg', '', '', 0, '', '', ''),
(18, 'nekohappy_2e6f9b0d5885b6010f9167787445617f553a735f', 'teste', '0501280037c4ae533058392d31811d5666f2f647', 'nani', 0, 'default.jpg', '', '', 0, '', '', ''),
(19, '', '', '', '', 0, '', '', '', 0, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `passwordchange`
--
ALTER TABLE `passwordchange`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `passwordchange`
--
ALTER TABLE `passwordchange`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
