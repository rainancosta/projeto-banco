-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Nov-2020 às 22:04
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banking`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `senha` int(10) NOT NULL,
  `saldo` double(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`cpf`, `nome`, `telefone`, `endereco`, `senha`, `saldo`) VALUES
('00364483224', 'Rômulo Albuquerque', '91998274229', 'Rua Campestre N°47', 6039796, 1140.00),
('03150880230', 'Rainan Costa', '91988443352', 'Rua dos Navegantes Nº33', 123456, 1140.00),
('05363074230', 'FÁBIO FERNANDO DE SOUSA CABRAL', '992658830', 'RUA JOSÉ MARCELINO DE OLIVEIRA 846', 123456, 1140.00);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cpf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
