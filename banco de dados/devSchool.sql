-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Dez-2020 às 17:05
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `devschool`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id_aluno` int(10) UNSIGNED NOT NULL,
  `educador_id_educador` int(10) UNSIGNED NOT NULL,
  `nome_aluno` varchar(255) DEFAULT NULL,
  `nota1_aluno` double DEFAULT NULL,
  `nota2_aluno` double NOT NULL,
  `nota3_aluno` double NOT NULL,
  `nota4_aluno` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id_aluno`, `educador_id_educador`, `nome_aluno`, `nota1_aluno`, `nota2_aluno`, `nota3_aluno`, `nota4_aluno`) VALUES
(1, 2, 'Paulo Gessy Júnior', 10, 5, 6, 9),
(2, 3, 'Júlia Margarida ', 2, 5, 0, 1),
(3, 3, 'Maria Clara da SIlva', 10, 2, 5, 6),
(4, 2, 'Jorge dos Santos Sousa', 4, 2, 1, 0),
(5, 2, 'Luiza Santana', 5, 7, 3, 8),
(6, 4, 'Maria Valentina dos Santos ', 10, 9, 8, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `educador`
--

CREATE TABLE `educador` (
  `id_educador` int(10) UNSIGNED NOT NULL,
  `nome_educador` varchar(255) NOT NULL,
  `senha_educador` varchar(255) NOT NULL,
  `email_educador` varchar(255) DEFAULT NULL,
  `tipo_educador` int(1) DEFAULT 1,
  `foto_educador` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `educador`
--

INSERT INTO `educador` (`id_educador`, `nome_educador`, `senha_educador`, `email_educador`, `tipo_educador`, `foto_educador`) VALUES
(1, 'Matheus', '827ccb0eea8a706c4c34a16891f84e7b', 'sousam150@gmail.com', 1, '28112020183148-foto_Matheus.jpg'),
(2, 'Lucas', '827ccb0eea8a706c4c34a16891f84e7b', 'lucas@gmail.com', 2, ''),
(3, 'João', '827ccb0eea8a706c4c34a16891f84e7b', 'joão@gmail.com', 2, ''),
(4, 'Cristiana', '827ccb0eea8a706c4c34a16891f84e7b', 'cristiana@gmail.com', 2, '28112020194752-Foto_cristina.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id_aluno`),
  ADD KEY `aluno_FKIndex1` (`educador_id_educador`);

--
-- Índices para tabela `educador`
--
ALTER TABLE `educador`
  ADD PRIMARY KEY (`id_educador`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id_aluno` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `educador`
--
ALTER TABLE `educador`
  MODIFY `id_educador` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
