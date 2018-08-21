-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Ago-2018 às 20:12
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
-- Estrutura da tabela `background`
--

CREATE TABLE `background` (
  `id` int(11) NOT NULL,
  `url` text NOT NULL,
  `quem` text NOT NULL,
  `ativo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `background`
--

INSERT INTO `background` (`id`, `url`, `quem`, `ativo`) VALUES
(1, 'back.jpg', 'kaway', 1),
(2, 'back_old.jpg', 'kaway', 1),
(3, 'back2.jpg', 'kaway', 1),
(4, 'back2.png', 'kaway', 1),
(5, 'back3.jpg', 'kaway', 1),
(6, 'back4.png', 'kaway', 1),
(7, 'back5.jpg', 'kaway', 1),
(8, 'doctor.jpg', 'kaway', 1),
(9, 'char.png', 'kaway', 1),
(10, 'naruto.jpg', 'kaway', 1),
(11, 'lol1.png', 'kaway', 1),
(12, 'lol2.jpg', 'kaway', 1),
(13, 'lol3.jpg', 'kaway', 1),
(14, 'v.jpg', 'kaway', 1),
(15, 'dbz.jpg', 'kaway', 1),
(16, 'senhor.jpg', 'kaway', 1),
(17, 'pixel.gif', 'kaway', 1),
(18, 'pixel2.gif', 'kaway', 1),
(19, 'pixel3.gif', 'kaway', 1),
(20, 'pixel4.gif', 'kaway', 1),
(21, 'pixel5.gif', 'kaway', 1),
(22, 'pixel6.gif', 'kaway', 1),
(23, 'pixel7.gif', 'kaway', 1),
(24, 'bed.gif', 'kaway', 1),
(25, 'computer.gif', 'kaway', 1),
(26, 'sprite.gif', 'kaway', 1),
(27, 'ok.gif', 'kaway', 1),
(28, 'estra.gif', 'kaway', 1),
(29, 'quarzo.gif', 'kaway', 1),
(30, 'macaco.gif', 'kaway', 1),
(31, 'navegando.gif', 'kaway', 1),
(32, 'neve.gif', 'kaway', 1),
(33, 'pokemon.jpg', 'kaway', 1),
(34, 'one.png', 'kaway', 1),
(35, 'one.gif', 'kaway', 1);

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
(2, 32, 'bbd123185b4717aeebd9b7f2b930b6e7a937944b'),
(3, 32, '61a22c6a80f2c5ab21eaa6768ee691511c0d9f6b808f7ccff4a92b14c25cf966f55c2d2634dc531f808f7ccff4a92b14c25cf966f55c2d2634dc531f');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `cry` varchar(255) NOT NULL,
  `wtf` varchar(2555) NOT NULL,
  `cool` varchar(2555) NOT NULL,
  `baby` varchar(2555) NOT NULL,
  `very` varchar(2555) NOT NULL,
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

INSERT INTO `user` (`id`, `cry`, `wtf`, `cool`, `baby`, `very`, `nani`, `email`, `password`, `usuario`, `admin`, `avatar`, `background`, `cover`, `config`, `game`, `movie`, `pincode`, `ip`) VALUES
(34, 'nekohappy_85d9235d10cf197950d843e56b47021ff02b0cee', 'bf992983549deddabbf86febd0394232c945a65e', 'nekohappy_481b14b71a290ee3cc676def49270be7dd371242', 'e476b9430485135b6825ca3ca3b5b68e', '524c7e4905d1b8c38b4acb9ef869c279e0faa35b', 'nekohappy_a71d59175cc145b0e90023f8c8b29d65ba9f209b', 'kaway@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'kaway', 0, 'nekohappy_9bc18a0ed7f1a266a9ece4d74ef4eaa2f603e17e0730e99d1dc7f0e7227e45646929b3075744a9e7.png', '', '', 1, 'Counter Strike Global Offensive', 'A rede social', '4002', '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `background`
--
ALTER TABLE `background`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `background`
--
ALTER TABLE `background`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `passwordchange`
--
ALTER TABLE `passwordchange`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
