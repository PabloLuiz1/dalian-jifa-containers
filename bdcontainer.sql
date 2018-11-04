-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Dez-2017 às 20:39
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdcontainer`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbficha`
--

CREATE TABLE `tbficha` (
  `codFicha` int(11) NOT NULL,
  `blFicha` varchar(10) NOT NULL,
  `containerFicha` varchar(21) NOT NULL,
  `paisFicha` varchar(15) NOT NULL,
  `navioFicha` varchar(100) NOT NULL,
  `localizacaoFicha` varchar(300) NOT NULL,
  `dataFicha` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbficha`
--

INSERT INTO `tbficha` (`codFicha`, `blFicha`, `containerFicha`, `paisFicha`, `navioFicha`, `localizacaoFicha`, `dataFicha`) VALUES
(4, '2', '2C', '2N', '2P', '2L', NULL),
(5, '3', '3C', '3N', '3P', 'https://www.google.com.br/', NULL),
(6, '4', '4C', '4N', '4P', '4L', '2017-12-19'),
(9, '1234567890', 'Teste', 'MSC SARA ELENA', 'China', 'https://www.marinetraffic.com/en/ais/home/shipid:3768388/zoom:13', '2017-01-31'),
(10, '0987654321', 'CONTAINER', 'BRASIL', 'PÃ‰ROLA NEGRA', 'https://www.marinetraffic.com/en/ais/home/shipid:3768388/zoom:13', '2005-12-12'),
(11, '2', '1', '1', '1', '1', '2017-12-12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `codUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(50) NOT NULL,
  `loginUsuario` varchar(15) NOT NULL,
  `senhaUsuario` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbusuario`
--

INSERT INTO `tbusuario` (`codUsuario`, `nomeUsuario`, `loginUsuario`, `senhaUsuario`) VALUES
(1, 'Lemes', 'lemes', '8460360');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbficha`
--
ALTER TABLE `tbficha`
  ADD PRIMARY KEY (`codFicha`);

--
-- Indexes for table `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`codUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbficha`
--
ALTER TABLE `tbficha`
  MODIFY `codFicha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `codUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
