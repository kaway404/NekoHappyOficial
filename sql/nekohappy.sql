-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Ago-2018 às 18:05
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
(23, 'nekohappy_dfd22d81d69d38cc3026a4ef11517a41341c7ed1', 'nekohappy_f4f59e822581d785ba910fbf3f268eca79db8204', 'xande@hotmail.com', '43a3844c5fcedefbaf4af4a953fbbfa5dcfd4b49', 'xande', 0, 'nekohappy_df44fbc1d827dd65e5a47fc20de86b6a897bdf598452df2c902261073a842835cbc4ca723d31bd22.png', '', '', 0, '', '', '4002', '9090'),
(25, 'nekohappy_85d9235d10cf197950d843e56b47021ff02b0cee', 'nekohappy_30f71f43b12ca95f367ff0db537c4f7a32ecb36d', 'kaway@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'kaway', 0, 'nekohappy_bd15ec20c7428c94a3efaa6b174d638c8b37c6def64e03165a1f09934b53dd2271a580cb4407eb56.png', '', '', 1, 'Counter Strike Global Offensive', 'A rede social', '5151', '::1'),
(26, 'nekohappy_70909c345cd056c3d4dcd0f5a056fb33e88aaa23', 'nekohappy_f474c370f979a7a9679d509d3eebcf3edd3c3b1a', 'anelise@hotmail.com', 'c3cdda1f9e5d093622cda7ca2de3cd116f6d5aa0', 'esnupp404', 0, 'nekohappy_567de9c84abf07be2b7d288e20478e937e8b9fa9bdb1890f72dc8c9b51d5f35fbb7c516d6e542ccf.png', '', '', 1, '', '', '2006', '::1'),
(27, 'nekohappy_ebacd2ece17e8a0dbc480e019651779b055e328b', 'nekohappy_fda16b119e2adf8f360f68e0dae47e2d456af4cf', 'felisbina@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'felisbina', 0, 'default.jpg', '', '', 1, '', '', '5151', '::1'),
(28, 'nekohappy_9e1bde28872c89feff8f5f8acc7d461c615dea27', 'nekohappy_c811172c23634448276398a709a5b2c50ab05474', 'naruto@hotmail.com', '20beed61f5d64368b9aba66e91a1d2a090a0d4ae', 'Naruto Uzumaki', 0, 'nekohappy_f467b04f6bd12253137393d1972e5817ac063afac871a24d693ebf111378c135c9996ded26e28ad6.png', '', '', 1, '', '', '404', '::1'),
(29, 'nekohappy_ad7d63c9e2e8b580eeeff5b54815ba85c83982b6', 'nekohappy_f1492cd6cfb968d8b51b3746a3ae08f28aa3cd68', 'nani@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'xande123', 0, 'nekohappy_e126b961d9a5ea4f93cd0ce85ad61e78ba3677f0bca643e9251f5302bb298c72b96764022db37303.png', '', '', 1, 'League Of Legends', 'It a coisa', '5151', '::1'),
(30, 'nekohappy_728ad755c4454333e40354fe8250249f4c29f9e7', 'nekohappy_4925d1205b5f83cd1ffd4ef64f3f85fa5386cd99', 'emailqualquer@outlook.com', '7751a23fa55170a57e90374df13a3ab78efe0e99', 'onwint', 0, 'nekohappy_63a8bbe91c6b232b9afa30e6bb0f02a51a9066114dc4c858d144de4fc298472d2d88e76ea7556d0d.png', '', '', 1, 'league of legends', 'novinhas na cama 2', '123', '177.95.88.74');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
