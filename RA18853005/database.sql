-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Set-2021 às 18:58
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ra18853005`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `courses`
--

CREATE TABLE `courses` (
  `id` int(10) NOT NULL,
  `nameCourse` varchar(150) NOT NULL,
  `description` varchar(300) NOT NULL,
  `dateStart` date NOT NULL,
  `dateFinish` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `courses`
--

INSERT INTO `courses` (`id`, `nameCourse`, `description`, `dateStart`, `dateFinish`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sistemas para Internet', 'Desde o desenvolvimento até implantação de páginas para sites na internet, e-commerce e aplicativos. ', '2020-01-01', '2023-06-01', 'ATIVO', '2021-09-30 21:51:43', '2021-09-30 21:51:43'),
(2, 'Sistemas de Informação', 'O curso de Sistemas de Informação tem enfoque prático e visa capacitar seus alunos para atuar nas áreas de planejamento, análise, utilização e avaliação de Tecnologias da Informação.', '2019-01-01', '2022-06-01', 'ATIVO', '2021-09-30 21:53:03', '2021-09-30 21:53:21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `students`
--

CREATE TABLE `students` (
  `id` int(10) NOT NULL,
  `name` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `course` int(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `students`
--

INSERT INTO `students` (`id`, `name`, `password`, `email`, `phone`, `course`, `status`, `created_at`, `updated_at`) VALUES
(1, 'José Henrique Ferreira Nascimento', '689098', 'zehenrique0822@gmail.com', '18981114238', 1, 'ATIVO', '2021-09-30 21:56:18', '2021-09-30 21:56:18'),
(2, 'João Vitor Nascimento Silva', 'Juliana123456', 'jv.zyzz.legado@gmail.com', '18996267501', 2, 'INATIVO', '2021-09-30 21:56:59', '2021-09-30 21:56:59');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
