-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/08/2021 às 04:58
-- Versão do servidor: 10.4.18-MariaDB
-- Versão do PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `matics2`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `earnings`
--

CREATE TABLE `earnings` (
  `id_earning` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `value` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `finance_month`
--

CREATE TABLE `finance_month` (
  `id_finance_month` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date` date NOT NULL,
  `credit` decimal(15,2) NOT NULL,
  `earning` decimal(15,2) NOT NULL,
  `expense` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `finance_month`
--

INSERT INTO `finance_month` (`id_finance_month`, `id_user`, `date`, `credit`, `earning`, `expense`) VALUES
(11, 1, '2021-08-01', '1000.00', '5000.00', '11123.00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `mesages`
--

CREATE TABLE `mesages` (
  `id_message` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `icon_type` varchar(30) NOT NULL,
  `icon` int(11) NOT NULL,
  `date` varchar(10) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `mesages`
--

INSERT INTO `mesages` (`id_message`, `id_user`, `link`, `icon_type`, `icon`, `date`, `message`) VALUES
(1, 1, 'http://google.com.br', 'success', 1, '10/10/2021', 'Lucas Lindo, tesão, bonito e gostosão');

-- --------------------------------------------------------

--
-- Estrutura para tabela `sub_users`
--

CREATE TABLE `sub_users` (
  `id_sub_user` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `passwd` varchar(60) NOT NULL,
  `access` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `sub_users`
--

INSERT INTO `sub_users` (`id_sub_user`, `id_user`, `name`, `email`, `cpf`, `passwd`, `access`) VALUES
(1, 1, 'Lucas Henrique Souza', 'lucas@hotmail.com', '123', '123', '111111111111');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `msg_counter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id_user`, `cpf`, `msg_counter`) VALUES
(1, '00423430114', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `earnings`
--
ALTER TABLE `earnings`
  ADD PRIMARY KEY (`id_earning`);

--
-- Índices de tabela `finance_month`
--
ALTER TABLE `finance_month`
  ADD PRIMARY KEY (`id_finance_month`);

--
-- Índices de tabela `mesages`
--
ALTER TABLE `mesages`
  ADD PRIMARY KEY (`id_message`);

--
-- Índices de tabela `sub_users`
--
ALTER TABLE `sub_users`
  ADD PRIMARY KEY (`id_sub_user`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `earnings`
--
ALTER TABLE `earnings`
  MODIFY `id_earning` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `finance_month`
--
ALTER TABLE `finance_month`
  MODIFY `id_finance_month` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `mesages`
--
ALTER TABLE `mesages`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `sub_users`
--
ALTER TABLE `sub_users`
  MODIFY `id_sub_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
