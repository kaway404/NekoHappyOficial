-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Ago-2018 às 21:04
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
-- Estrutura da tabela `attempt_change_password`
--

CREATE TABLE `attempt_change_password` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpass` int(11) NOT NULL,
  `datet` datetime NOT NULL,
  `exce` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `attempt_change_password`
--

INSERT INTO `attempt_change_password` (`id`, `iduser`, `idpass`, `datet`, `exce`) VALUES
(1, 46, 0, '2018-08-26 16:26:42', 0),
(2, 46, 0, '2018-08-26 16:26:44', 0),
(3, 46, 0, '2018-08-26 16:26:44', 0),
(4, 46, 0, '2018-08-26 16:26:44', 0),
(5, 46, 0, '2018-08-26 16:36:44', 1);

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
(3, 32, '61a22c6a80f2c5ab21eaa6768ee691511c0d9f6b808f7ccff4a92b14c25cf966f55c2d2634dc531f808f7ccff4a92b14c25cf966f55c2d2634dc531f'),
(4, 36, '61a22c6a80f2c5ab21eaa6768ee691511c0d9f6b62b08b65e6b81c9d1c83064948cf89f109e43d6a62b08b65e6b81c9d1c83064948cf89f109e43d6a');

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagem`
--

CREATE TABLE `postagem` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `cry` varchar(2555) NOT NULL,
  `title` text NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `postagem`
--

INSERT INTO `postagem` (`id`, `iduser`, `cry`, `title`, `texto`) VALUES
(1, 34, 'd202750940086586510f15f598078654bd8ebc00', 'NekoHappy oficial', 'Seja bem vindo ao NekoHappy'),
(2, 36, '22b12122f313a7928fe37f3834d4c2a5c19939b6', 'eu  sou lgal', 'vida la vida'),
(5, 36, '69b09167e0e962a7bc676584bf75512978ef3f8f', 'Teste', 'teste'),
(6, 34, 'df9b1d6e4051eb28f6d82598696a49abab7642e8', 'Hey dude', 'Coe'),
(7, 37, 'b710c824ed3aa435e16c993a164b184f10d588f8', 'VAI TOMA NO CU', 'VAI TOMA NO CU, VAI PO CARALHO, VAI SE FUDE, VAI PA PUTA QUEU PARIU '),
(8, 39, '6ffe40cd023d87ef2a96cfc77d04c898d3e85305', '', 'AAAAAAAAAAAAHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHH'),
(9, 39, '59896b5d54f36d96ae9965bb083c3257fe1ce1ea', '', 'TESTE DE TEXTOOO\n'),
(10, 34, '9b2c0e375fe4dc149cca7ba5a0a7d180609e16ec', '', 'teste'),
(11, 39, 'd0a265a2bfb53c036caee64a96a58e53773b0a83', 'TITULOOOOO', 'TITULO DO TITULO'),
(12, 40, '11ea1e308bc8a4d59f321a9751c3f27200c5ac3b', 'OLÃ', 'QUE BELA REDE SOCIAL EM'),
(13, 41, 'c335d73e6f5cef3012bc968298ac19d648e44e42', '', 'Quero dizer que o Kaway casou cmg, ehisto'),
(14, 34, '254da7ba244fa31f78dd0a80af3fe0ab705aff04', '', 'Quero dizer que eu casei tb com o Artemis, bjo'),
(15, 41, 'acaac64606cf02a42ece4e2165f2d361ce3a35bd', '', 'Te amo <3 '),
(16, 34, '5d28d698939b13f0d8a056fcbd80612abfebe9b9', 'Ok', 'Let it go'),
(17, 42, 'ca229398268e2ecbf8a9799fe0d54a9fb14172b0', '', 'Olha o pastellllll'),
(18, 34, 'd48f8a9c4bebd2fd782ce866904d2663443114d0', 'ooo', 'pastel'),
(19, 42, '9d15723e945ceba2ef03d42e3e50001395ae2e6b', '', 'que rede social interativa e livre para todos os publicos\n'),
(20, 34, '88f3de75f9f51fda68fa2dddf90e5c70ad435cc9', 'Livre para todas as idades', 'hehe'),
(21, 43, '1f4860b6f7be0e0487d2ef7abaa2a534d11b83ee', 'VEGETAAAA OLHA BEEEM', 'WOOOOOOOOO'),
(22, 36, 'c0808b5070663429436555c73e6a74dca775fe01', '', 'viva la vida de bosta'),
(23, 46, 'adf7d7a889c523aefd5087b1c45ed9f8882f168a', 'EU ESTIVE AQUI', 'EU ESTIVE AQUI'),
(24, 48, 'fca81523e2a7becd44f9461cc9c73afc231ec169', 'Oi', 'mark zuckerberg vai me vigiar rsrsrsrs'),
(25, 48, '59c7ec8200069a08160cf33a690394f94cb9561e', 'Aviso:', 'Quando o kaway ficar rico e famoso com essa rede social eu quero 15% dos lucros da empresa. Obrigado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `text` text NOT NULL,
  `tipo` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tag`
--

INSERT INTO `tag` (`id`, `iduser`, `text`, `tipo`, `img`) VALUES
(1, 34, 'VAPORWAVE', '1', 'vapor.png'),
(2, 34, 'reddit', '2', 'reddit.png'),
(3, 34, 'sexy', '3', 'sexy.png'),
(4, 34, 'ok', '4', 'ok.png');

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
  `ip` varchar(255) NOT NULL,
  `tuturial` int(11) NOT NULL,
  `exp` int(11) NOT NULL,
  `lvl` int(11) NOT NULL,
  `tag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `cry`, `wtf`, `cool`, `baby`, `very`, `nani`, `email`, `password`, `usuario`, `admin`, `avatar`, `background`, `cover`, `config`, `game`, `movie`, `pincode`, `ip`, `tuturial`, `exp`, `lvl`, `tag`) VALUES
(34, 'nekohappy_85d9235d10cf197950d843e56b47021ff02b0cee', 'bf992983549deddabbf86febd0394232c945a65e', 'nekohappy_481b14b71a290ee3cc676def49270be7dd371242', 'e476b9430485135b6825ca3ca3b5b68e', '524c7e4905d1b8c38b4acb9ef869c279e0faa35b', 'nekohappy_a71d59175cc145b0e90023f8c8b29d65ba9f209b', 'kaway@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'kaway', 1, 'nekohappy_642341daaea37c4af7bfa47ad3cf7a7097185eb750bb1698f98787bf32533b47f8df5e71934b8923.png', 'estra.gif', 'pixel6.gif', 1, 'Counter Strike Global Offensive', 'A rede social', '4002', '::1', 2, 1, 14, 0),
(35, 'nekohappy_f7310e76f2d7ff0e840b570fbaf07e19bfe2f23f', '2e9ca66b0d5b55d5d19acf5d09a4c3db551093ba', 'nekohappy_89d6af6459064d78e88f573a184241ac7f9eda81', '1ad721207f4e1b32f5791728e0ee6115', '0165d10b483b47b285e3c5496793f271ebf8ab3a', 'nekohappy_7855972c424277e550ed3ed58b63dc08655f5fcc', 'kaway404@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'kaway404', 0, 'nekohappy_9d6773aae2b0a4f9e8f33d27d1ec85119f215331bca643e9251f5302bb298c72b96764022db37303.png', '', '', 1, 'CSGO', 'A rede', '4002', '::1', 0, 0, 0, 0),
(36, 'nekohappy_70909c345cd056c3d4dcd0f5a056fb33e88aaa23', '57846d3576f4b2eb5c494a5f8b3b11234ffef098', 'nekohappy_a1bd5bc60c796e14b937b1b0ccf990cce6caebe3', 'edd79c7b5e66321dca8210ea022645a3', 'dabe34f65b393e313a88753d6928df5d67b84e5c', 'nekohappy_7868812b47588635d9141eb86daa91b7d0115de0', 'anelise@hotmail.com', 'a873d476f684dd7a02e0ff310c060f547e3b1459', 'anelise', 0, 'nekohappy_332fdb34e6aa36641ee1521906df01fbbdff83a80730e99d1dc7f0e7227e45646929b3075744a9e7.png', '', '', 1, 'paladins', 'o diario de anne frank', '2006', '127.0.0.1', 2, 1, 0, 0),
(37, 'nekohappy_150857d7eaab3d95fda9c8517663b8e99d9cf47a', 'a6b33a7fc2f6f18ec1b104356c7efbf9f1730b48', 'nekohappy_5ae31a07b367676bb0ae54e23186665e26fed604', '5816b0d763e1b50a221069eb6cfef946', '98784398d9ff359557c0d7020cbff5af3786a8ae', 'nekohappy_a641079e077719e953176ca3f6c42667e6c55cd7', 'ducdll8@gmail.com', '25e7a11fbfa48063c59190eb39676cfaff4443f6', 'vitor', 0, 'default.jpg', '', '', 1, 'EEEE', 'EE', '4002', '177.148.195.150', 1, 0, 0, 0),
(38, 'nekohappy_ad7d63c9e2e8b580eeeff5b54815ba85c83982b6', '7198b48be99a40dce69836d8819b6af4138fc100', 'nekohappy_03539c89021715575beda48bde55f6a887799b3b', '4721ea63db427063c6c48e9bb2feb67c', '99d5943fb9c14e0d354af844cae12bc296c5fcac', 'nekohappy_04ec542c6a18ca19c40cd77a41dde0ff1e27ce0a', 'nani@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'Joaquin', 0, 'nekohappy_52332320ac924cb1339cbeaed77c257f4ab524ac50bb1698f98787bf32533b47f8df5e71934b8923.png', '', '', 1, '23', '123', '123', '127.0.0.1', 1, 0, 0, 0),
(39, 'nekohappy_ff9358742103ddc441d6fad617497413480957f1', '9b2e899429614a97e8d42b1f1f7e8322ff9688fd', 'nekohappy_ac02524209b3638ead53fc43957d6914dbcb64ec', '37c7cc1a8c671d19f9e78ad018df95d2', '719a7d951f7623b6d4af3a4ca6e2c22abefaa7c1', 'nekohappy_5cc1173b6289eec1939110b07638b408563c60c6', 'mateusheckertg@gmail.com', '1cb09364452f9a307f94c045215ba7bb84c1b967', 'Mateus Heckert GonÃ§alves', 0, 'nekohappy_4a40685cd8f7b106284ee521f0a17267fa9766bbb55f2396c5358fe52920605e0f872cdd9bf3ecbb.png', '', '', 1, 'Tomb Raider', 'V de VinganÃ§a', '2003', '189.11.144.118', 1, 0, 0, 0),
(40, 'nekohappy_8d79f497ebc60742f4fa0eae67b68f768deaa969', '73bc3a79a3b99cefc9cdb945e6fdf3aee0784fe5', 'nekohappy_6e31fbc65a77fa8b355b751d3d47ca2391f345ba', '112825328ff5d02edfd49f6102c55392', '93f5f055a02a8ca738a66baac60cdeb190711f65', 'nekohappy_026edfe116cd5a779706723026bd56cdda5b0d79', 'pauloricardoprogramador@gmail.com', '2e6f9b0d5885b6010f9167787445617f553a735f', 'Kamisama', 0, 'default.jpg', '', '', 1, 'Nenhum', 'A Rede Social', '09920', '179.212.90.86', 1, 0, 0, 0),
(41, 'nekohappy_bea98933afb95e133573e63f08cdd4b6c4f82521', '416320d6c47b2a412d48bfe2d671502dec3c9490', 'nekohappy_acedfe17207dcaae8a54e9b61d04a9f72bd4140b', 'eed56721d042e4cb4ae3e1d552ec2695', 'afae628134946d58a77ff0f13134524884f2fb59', 'nekohappy_d17c09e983ddcc30886ffc1f436daaa35a815e96', 'exhioa@gmail.com', '6f18dcf68fad5d86f94ef30ade6a17ca12da6957', 'Ãrtemis chan', 0, 'default.jpg', '', '', 1, 'Tibia', 'Finalmente 18', '0016', '216.66.6.75', 1, 0, 0, 0),
(42, 'nekohappy_794f5911b98ef8e5bc8ab033adb6cc202a0158ac', 'd590c7586d14963af399d5f9e93efb2f82552a3c', 'nekohappy_1b720f89cad5e70963c4c55c900d31653613c3f5', 'c387055f92010513ac5bba8bbcd0a4af', '3ea4ece00d160084615febe4a460cdc59181d6eb', 'nekohappy_c2857edf4f87c98ebb5535aa0683ac3fd359f09e', 'ozumratotfm@gmail.com', '3ec641500cb7c60517aa8530180a061fc6d74f5a', 'RhuaN', 0, 'nekohappy_336b40e615e2f8c3352504340c5892477fa0a3858df12240574de834d6f381ab157a41ae5d9c265e.png', '', '', 1, 'CSGO', 'Titanic', '2005', '177.40.186.255', 1, 0, 0, 0),
(43, 'nekohappy_4ad8bc0f9d52b43c50b80067f4f4f0aa6d795ab0', 'db41fa85f4efb905cec204ec3a92cf0ccc5d67db', 'nekohappy_9136eae5fa47ad21ce50601a84c3c22f94a68fe2', 'c8cba29a8638b28b6224b174a03ca8f6', '65cb1d72689a6815b4bd07bdaaec664abaa3d988', 'nekohappy_f3b654a81d8a57faa72fd93af80323775b53b849', 'athenasiqueira@gmail.com', '513e47278ae23abea3183830c2b31334531b850d', 'Gin-chan', 0, 'nekohappy_4c89f20cfb5d85aa89c63ce98c74637935eb434b74d1252f07f31356e3267f11cee99d20984c977a.png', '', '', 1, 'Way of the Samurai 3', 'O Auto da Compadecida', '0108', '177.10.131.59', 1, 0, 0, 0),
(44, 'nekohappy_4ebb4595eab529e499b9b866707a956aee2bf4ab', '61981ced498c5f4cb4c6b1a444250d1a144ce0e3', 'nekohappy_455a3274491e8379d4957f8b9f99fa5cdd00bd9b', '2bcdf93e6ef8ef33f89a9fb9d1698b87', 'a55708eb1da421cdff4b35618df04a44aee20244', 'nekohappy_5aa1f2d5ec6bc9bd066d1cb35ae4a2e1d7b7a513', 'gf', 'd1908adb54b465e781ae81ad352ee1c735dfa6ad', 'gff', 0, 'default.jpg', '', '', 1, 'tyytyt', 'tyytyt', '57yty', '127.0.0.1', 1, 0, 0, 0),
(45, 'nekohappy_fbccadf1505bf0c34c072829a67447632d52c046', '9151623f1525d0b5143c3f39725e251889bba84a', 'nekohappy_ff1a64f3bb5538eeadc7b9c1d434861eca573c3e', '7d08c5cc0b3f751023095827b8097c87', '5cc786ecdebf48a357eb9c4b36d234976d3cf7c6', 'nekohappy_62a6c18599f244d6be2516beec9ab12f4fc0f146', 'wtf@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'sate404', 0, 'nekohappy_ea26abb57bfc1d728629a96dc3596f875b7d3cd6baec9c15b077d7e7d945ff1fc9d4da0db1cff413.png', '', '', 1, 'CSGO', 'Nani', '4002', '127.0.0.1', 2, 0, 0, 0),
(46, 'nekohappy_65bcf5a56abf865237c7ef2ae14c539ee349ac76', '620c441912f8a907c57c9425df7f7be50af64eb3', 'nekohappy_c5ef19d328c8f251e8250dbdc435008d19b73495', '43a2393f48c613e906bfe82ad680ef4d', 'dc72542e311b58e7e5c59d8c5ba3eec7ecba223d', 'nekohappy_28259fbedfa5b9f75df56cc4fbf72d8d5e74cb64', 'igorg849@gmail.com', '3685b33d96b40dfa75f9092aeb533995991c2782', 'Hellok1', 0, 'default.jpg', '', '', 1, 'The Last Of Us', 'Vingadores', '1111', '191.35.19.242', 2, 1, 0, 0),
(47, 'nekohappy_f3ecda401e1bb6d7f6708736639162bb3864fa7d', '4bc02f3b292f933d162294b4d711f20ef3d3a32e', 'nekohappy_ecabf3cc0fdf9b7dc86e2e6aadb0a97a44c159c0', 'c018ec413fd844f6d736309f426da5ec', 'e8774fd1e42ac0c1ba70d3c1938b167dc1e03774', 'nekohappy_a148eb5f7afa6e1f894ba8fbc200b3fa2ba58060', 'sad@hotmail.com', 'b4914600112ba18af7798b6c1a1363728ae1d96f', 'sad', 0, 'nekohappy_6f455a104e20f63c0cb5590889d36cc7e1118f715781e5348c29bf2882aebe248f7da05c6b45a6e9.png', '', '', 1, 'sad', 'sad', 'sad', '127.0.0.1', 2, 0, 0, 0),
(48, 'nekohappy_38d7ae0d6d56cb7e0ba4fc53c5a600d63783b867', 'aea2d968166c23e7641445e7dc8a2f71d9479891', 'nekohappy_7b34695d70d8924c1ec4d0c3284f2148b7396a0d', '20153bcbc2933057f77d86ed33125c64', '666a374c95833502bce4ea9a1b4659b0987e1d4a', 'nekohappy_37f953d950023232f9fb865666ed89feffe014fe', 'cauabar26@gmail.com', '8191d9a31272d5e1405f60470269c17bc5380f46', 'cauabar', 0, 'nekohappy_522d4932f778e97005015401fafb3cceb16ea885201aea88ba307fe4a6778d87a810c3046c1e57a3.png', '', '', 1, 'League of legends', 'Boruto', '4002', '45.236.239.56', 2, 2, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usertag`
--

CREATE TABLE `usertag` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `tag` int(11) NOT NULL,
  `tipo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usertag`
--

INSERT INTO `usertag` (`id`, `iduser`, `tag`, `tipo`) VALUES
(1, 34, 1, '1'),
(2, 34, 1, '2'),
(3, 34, 1, '3'),
(4, 34, 1, '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attempt_change_password`
--
ALTER TABLE `attempt_change_password`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `postagem`
--
ALTER TABLE `postagem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertag`
--
ALTER TABLE `usertag`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attempt_change_password`
--
ALTER TABLE `attempt_change_password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `background`
--
ALTER TABLE `background`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `passwordchange`
--
ALTER TABLE `passwordchange`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `postagem`
--
ALTER TABLE `postagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `usertag`
--
ALTER TABLE `usertag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
