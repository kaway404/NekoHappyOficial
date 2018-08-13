-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Ago-2018 às 21:19
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
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `cry` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `cry`, `email`, `password`, `usuario`, `admin`, `avatar`) VALUES
(10, 'nekohapy_85d9235d10cf197950d843e56b47021ff02b0cee', 'kaway@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'kaway', 0, 'default.jpg'),
(11, 'nekohapy_70909c345cd056c3d4dcd0f5a056fb33e88aaa23', 'anelise@hotmail.com', 'e718576aa3e35cdc17a72ac4d6a7bb2772f5fc32', 'anelise', 0, 'default.jpg'),
(12, 'nekohapy_800f7e501a3f1a0444a94b324e046b2859f9fb44', 'ininja212@gmail.com', '705314e475103d30f98e4457435b746d7181601f', 'SukyT', 0, 'default.jpg'),
(13, 'nekohapy_c3da8be1a37068d5cda6fdea08af092ed13417e3', 'luizfelipe34@hotmail.com.br', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Me verifica', 0, 'default.jpg'),
(14, 'nekohapy_2c7eb72c3889dc7409783fb5cd46b574bc775848', 'schirlei@hotmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'schirlei', 0, 'default.jpg'),
(15, 'nekohapy_3883e02b80831d294453b441ef68b4c5db90f9a3', 'anelise51@hotmail.com', '3c555211cad6a0bd179cd6baa104f5bb9beb88e1', 'anelise51', 0, 'default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
