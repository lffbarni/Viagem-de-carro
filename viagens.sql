-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Ago-2022 às 20:09
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `viagens`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `viagens`
--

CREATE TABLE `viagens` (
  `id` int(11) NOT NULL,
  `motorista` varchar(100) NOT NULL,
  `localOrigem` varchar(200) NOT NULL,
  `localDestino` varchar(200) NOT NULL,
  `quilometragem` decimal(10,2) NOT NULL,
  `litrosCombustivel` decimal(10,2) NOT NULL,
  `modeloCarro` varchar(200) NOT NULL,
  `valorCombustivel` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `viagens`
--

INSERT INTO `viagens` (`id`, `motorista`, `localOrigem`, `localDestino`, `quilometragem`, `litrosCombustivel`, `modeloCarro`, `valorCombustivel`) VALUES
(1, '1', '1', '1', '1.00', '1.00', '1', '1.00'),
(11, 'ronalkdo', 'rio', 'saulk', '111.00', '98092.00', 'vectra', '98092.00'),
(12, 'ronalkdo', 'rio', 'saulk', '111.00', '98092.00', 'vectra', '98092.00'),
(13, '2', '3', '4', '5.00', '6.00', '1', '6.00'),
(14, 'gabibi', 'rio do sul', 'vidal ramos', '60.00', '6.00', 'Ferrari', '6.00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `viagens`
--
ALTER TABLE `viagens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `viagens`
--
ALTER TABLE `viagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
