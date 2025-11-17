-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 17/11/2025 às 16:45
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
-- Estrutura para tabela `hqs`
--

DROP TABLE IF EXISTS `hqs`;
CREATE TABLE IF NOT EXISTS `hqs` (
  `comicGuid` int NOT NULL AUTO_INCREMENT,
  `userGuid` int NOT NULL,
  `saveData` text COLLATE utf8mb4_general_ci NOT NULL,
  `titulo` text COLLATE utf8mb4_general_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_general_ci NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`comicGuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `userGuid` int NOT NULL AUTO_INCREMENT,
  `nome` text COLLATE utf8mb4_general_ci NOT NULL,
  `email` text COLLATE utf8mb4_general_ci NOT NULL,
  `senha` text COLLATE utf8mb4_general_ci NOT NULL,
  `dataNasc` date NOT NULL,
  `apelido` text COLLATE utf8mb4_general_ci NOT NULL,
  `pfp` text COLLATE utf8mb4_general_ci NOT NULL,
  `moderador` tinyint(1) NOT NULL DEFAULT '0',
  `dataDeCriaçao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`userGuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
