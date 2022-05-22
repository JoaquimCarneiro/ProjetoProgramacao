-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 12-Abr-2022 às 23:58
-- Versão do servidor: 10.7.3-MariaDB
-- versão do PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Banco de dados: `loginsys300`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `active_guests`
--

CREATE TABLE `active_guests` (
  `ip` varchar(50) NOT NULL,
  `timestamp` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `active_guests`
--

INSERT INTO `active_guests` (`ip`, `timestamp`) VALUES
('192.168.1.66', 1649629121);

-- --------------------------------------------------------

--
-- Estrutura da tabela `active_users`
--

CREATE TABLE `active_users` (
  `username` varchar(30) NOT NULL,
  `timestamp` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `banned_users`
--

CREATE TABLE `banned_users` (
  `username` varchar(30) NOT NULL,
  `timestamp` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(32) DEFAULT NULL,
  `userid` varchar(32) DEFAULT NULL,
  `activation_key` varchar(32) NOT NULL,
  `userlevel` tinyint(1) UNSIGNED NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `timestamp` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`username`, `password`, `userid`, `activation_key`, `userlevel`, `email`, `timestamp`) VALUES
('admin', 'd7a465da34ae0b538469aa9ec24aee13', '5179cf83d9d4dd1686fda8cd5e73404d', '', 9, 'quimkaos@gmail.com', 1649244744);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `active_guests`
--
ALTER TABLE `active_guests`
  ADD PRIMARY KEY (`ip`);

--
-- Índices para tabela `active_users`
--
ALTER TABLE `active_users`
  ADD PRIMARY KEY (`username`);

--
-- Índices para tabela `banned_users`
--
ALTER TABLE `banned_users`
  ADD PRIMARY KEY (`username`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

