-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Maio-2025 às 13:34
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbcomercio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcontato`
--

CREATE TABLE `tbcontato` (
  `idContato` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `assunto` varchar(40) DEFAULT NULL,
  `mensagem` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbcontato`
--

INSERT INTO `tbcontato` (`idContato`, `nome`, `email`, `assunto`, `mensagem`) VALUES
(1, 'Clodoaldo Bastos', 'clodoaldo@gmail.com', 'Fazer o projeto muito loko', 'Quando iremos iniciar o projeto?');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbcontato`
--
ALTER TABLE `tbcontato`
  ADD PRIMARY KEY (`idContato`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcontato`
--
ALTER TABLE `tbcontato`
  MODIFY `idContato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
