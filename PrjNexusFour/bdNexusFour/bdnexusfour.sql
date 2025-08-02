-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14/05/2025 às 15:51
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdnexusfour`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbfabricante`
--

CREATE TABLE `tbfabricante` (
  `idFabricante` int(11) NOT NULL,
  `nomeFabricante` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbfabricante`
--

INSERT INTO `tbfabricante` (`idFabricante`, `nomeFabricante`) VALUES
(1, 'Logitech'),
(2, 'Corsair');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbfornecedor`
--

CREATE TABLE `tbfornecedor` (
  `idFornecedor` int(11) NOT NULL,
  `nomeFornecedor` varchar(100) NOT NULL,
  `contatoFornecedor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbfornecedor`
--

INSERT INTO `tbfornecedor` (`idFornecedor`, `nomeFornecedor`, `contatoFornecedor`) VALUES
(1, 'TechDistribuidora', 'suporte.techdistribuidora@gmail.com'),
(2, 'MegaInfo Supply', 'vendas.megainfo@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbproduto`
--

CREATE TABLE `tbproduto` (
  `idProduto` int(11) NOT NULL,
  `nomeProduto` varchar(100) NOT NULL,
  `descProduto` varchar(255) NOT NULL,
  `precoProduto` double NOT NULL,
  `dataVencimentoProduto` date NOT NULL,
  `dataFabricacaoProduto` date NOT NULL,
  `idFabricante` int(11) NOT NULL,
  `idFornecedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbproduto`
--

INSERT INTO `tbproduto` (`idProduto`, `nomeProduto`, `descProduto`, `precoProduto`, `dataVencimentoProduto`, `dataFabricacaoProduto`, `idFabricante`, `idFornecedor`) VALUES
(1, 'Mouse Gamer Logitech G502', 'Mouse gamer com 11 botões programáveis, 25.600 DPI, iluminação RGB', 249.9, '0000-00-00', '0000-00-00', 1, 1),
(2, 'Teclado Mecânico Corsair K70', 'Teclado mecânico com switches Cherry MX, iluminação RGB e estrutura em alumínio.', 599.9, '0000-00-00', '0000-00-00', 2, 2),
(3, 'Headset Corsair HS50', 'Headset com som estéreo de alta qualidade, microfone destacável e estrutura reforçada', 299, '0000-00-00', '0000-00-00', 2, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `idUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(200) NOT NULL,
  `emailUsuario` varchar(255) NOT NULL,
  `cpfUsuario` varchar(11) NOT NULL,
  `enderecoUsuario` varchar(255) NOT NULL,
  `sexoUsuario` varchar(40) NOT NULL,
  `dataNascUsuario` date NOT NULL,
  `telefoneUsuario` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbusuario`
--

INSERT INTO `tbusuario` (`idUsuario`, `nomeUsuario`, `emailUsuario`, `cpfUsuario`, `enderecoUsuario`, `sexoUsuario`, `dataNascUsuario`, `telefoneUsuario`) VALUES
(1, 'Carlos Silva', 'carlos.silva@gmail.com', '12345678901', 'Rua das Palmeiras, 150 - São Paulo/SP', 'Masculino', '0000-00-00', '11999998888'),
(2, 'Fernanda Costa', 'fernanda.costa@gmail.com', '98765432100', 'Av. Brasil, 2500 - Rio de Janeiro/RJ', 'Feminino', '0000-00-00', '21988887777');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbfabricante`
--
ALTER TABLE `tbfabricante`
  ADD PRIMARY KEY (`idFabricante`);

--
-- Índices de tabela `tbfornecedor`
--
ALTER TABLE `tbfornecedor`
  ADD PRIMARY KEY (`idFornecedor`);

--
-- Índices de tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD PRIMARY KEY (`idProduto`),
  ADD KEY `idFabricante` (`idFabricante`),
  ADD KEY `idFornecedor` (`idFornecedor`);

--
-- Índices de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbfabricante`
--
ALTER TABLE `tbfabricante`
  MODIFY `idFabricante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tbfornecedor`
--
ALTER TABLE `tbfornecedor`
  MODIFY `idFornecedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD CONSTRAINT `tbproduto_ibfk_1` FOREIGN KEY (`idFabricante`) REFERENCES `tbfabricante` (`idFabricante`),
  ADD CONSTRAINT `tbproduto_ibfk_2` FOREIGN KEY (`idFornecedor`) REFERENCES `tbfornecedor` (`idFornecedor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
