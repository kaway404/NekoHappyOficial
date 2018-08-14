-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Ago-2018 às 22:14
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

--
-- Extraindo dados da tabela `passwordchange`
--

INSERT INTO `passwordchange` (`id`, `iduser`, `cry`) VALUES
(10, 10, 'c9eecc0ee42f56f219a572b4ac6c6e3a6ab1dcdb'),
(11, 16, '32f2305dbf0b1926c42e283b69bdde0547864b42'),
(12, 10, '078afae0651953d8e43b36a9b220a82f25d76ce7'),
(13, 10, '0641cc804518970fb8bc529819b4201f9794499a'),
(14, 12, 'e63ee59b62c5564ed4cc7620be2b1830e647f2d5'),
(15, 0, 'ca80297d8916d9b6f9abc31777ecedb1c9716b6b');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `cry` varchar(255) NOT NULL,
  `nani` varchar(255) NOT NULL,
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
  `pincode` varchar(10) NOT NULL,
  `ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `cry`, `nani`, `email`, `password`, `usuario`, `admin`, `avatar`, `background`, `cover`, `config`, `game`, `movie`, `pincode`, `ip`) VALUES
(23, 'nekohappy_dfd22d81d69d38cc3026a4ef11517a41341c7ed1', 'nekohappy_f4f59e822581d785ba910fbf3f268eca79db8204', 'xande@hotmail.com', '43a3844c5fcedefbaf4af4a953fbbfa5dcfd4b49', 'xande', 0, 'nekohappy_df44fbc1d827dd65e5a47fc20de86b6a897bdf598452df2c902261073a842835cbc4ca723d31bd22.png', '', '', 1, '', '', '4002', '1');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
