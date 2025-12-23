-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 23/12/2025 às 23:52
-- Versão do servidor: 9.1.0
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `maqtm`
--
CREATE DATABASE IF NOT EXISTS `maqtm` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `maqtm`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `comentarioGuid` int NOT NULL AUTO_INCREMENT,
  `userGuid` int NOT NULL,
  `comicGuid` int NOT NULL,
  `respostaGuid` int DEFAULT NULL,
  `conteudo` text COLLATE utf8mb4_general_ci NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`comentarioGuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `hqs`
--

CREATE TABLE IF NOT EXISTS `hqs` (
  `comicGuid` int NOT NULL AUTO_INCREMENT,
  `userGuid` int NOT NULL,
  `saveData` text COLLATE utf8mb4_general_ci NOT NULL,
  `titulo` text COLLATE utf8mb4_general_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_general_ci NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `views` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`comicGuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `userGuid` int NOT NULL AUTO_INCREMENT,
  `nome` text COLLATE utf8mb4_general_ci NOT NULL,
  `email` text COLLATE utf8mb4_general_ci NOT NULL,
  `senha` text COLLATE utf8mb4_general_ci NOT NULL,
  `dataNasc` date NOT NULL,
  `apelido` text COLLATE utf8mb4_general_ci NOT NULL,
  `pfp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Default',
  `moderador` tinyint(1) NOT NULL DEFAULT '0',
  `dataDeCriaçao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`userGuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `votos_estrela`
--

CREATE TABLE IF NOT EXISTS `votos_estrela` (
  `votoGuid` int NOT NULL AUTO_INCREMENT,
  `userGuid` int NOT NULL,
  `comicGuid` int NOT NULL,
  `estrelas` int NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`votoGuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `votos_genero`
--

CREATE TABLE IF NOT EXISTS `votos_genero` (
  `votoGuid` int NOT NULL AUTO_INCREMENT,
  `userGuid` int NOT NULL,
  `comicGuid` int NOT NULL,
  `roteiro` int NOT NULL,
  `romance` int NOT NULL,
  `diversao` int NOT NULL,
  `humor` int NOT NULL,
  `inovacao` int NOT NULL,
  `aventura` int NOT NULL,
  `arte` int NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`votoGuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
