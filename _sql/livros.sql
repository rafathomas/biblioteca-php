-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18-Jun-2019 às 15:47
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `livros`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados`
--

CREATE TABLE IF NOT EXISTS `dados` (
  `idLivro` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) NOT NULL,
  `Categoria` varchar(50) NOT NULL,
  `Autor` varchar(100) NOT NULL,
  PRIMARY KEY (`idLivro`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- Extraindo dados da tabela `dados`
--

INSERT INTO `dados` (`idLivro`, `Nome`, `Categoria`, `Autor`) VALUES
(28, 'diario de um banana', 'COMEDIA', 'Jeff Kenny'),
(29, 'A InquisiÃ§Ã£o', 'ACAO', 'Taran matharu'),
(30, 'querido diario otario', 'COMEDIA', 'Jim benton'),
(32, 'Guerra dos tronos', 'FICCAO', 'Gueorge R.R. Martin'),
(33, 'Harry potter', 'FICCAO', 'J. K. ROWLING'),
(34, 'MAIS LINDO QUE A LUA', 'ROMANCE', 'Julia Quinn'),
(35, 'MarÃ© Congelada', 'FICCAO', 'Morgan Rhodes'),
(36, 'A teoria de tudo', 'ROMANCE', 'Jane howking');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
