-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Nov-2022 às 23:16
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `miauchei`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargo`
--

CREATE TABLE `cargo` (
  `cod_cargo` int(11) NOT NULL,
  `nome_cargo` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `bairro` varchar(255) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `cod` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `cod_funcionario` int(11) NOT NULL,
  `nome_funcionario` varchar(255) DEFAULT NULL,
  `cod_telefone` int(11) DEFAULT NULL,
  `cod_endereco` int(11) DEFAULT NULL,
  `rg_funcionario` int(11) DEFAULT NULL,
  `cod_cargo` int(11) DEFAULT NULL,
  `sobrenome_funcionario` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `guards`
--

CREATE TABLE `guards` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `guards`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts_animais_adocao`
--

CREATE TABLE `posts_animais_adocao` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `guards` int(11) NOT NULL,
  `image` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `username` varchar(50) NOT NULL,
  `nome_pet` varchar(50) NOT NULL,
  `raca` varchar(50) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `idade_pet` varchar(50) NOT NULL,
  `profile_image` text NOT NULL,
  `descricao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `posts_animais_adocao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts_animais_perdidos`
--

CREATE TABLE `posts_animais_perdidos` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `guards` int(11) NOT NULL,
  `image` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `username` varchar(50) NOT NULL,
  `profile_image` text NOT NULL,
  `nome_pet` varchar(255) NOT NULL,
  `raca` varchar(255) NOT NULL,
  `sexo` varchar(255) NOT NULL,
  `idade_pet` int(11) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `data_que_perdeu` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `posts_animais_perdidos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `cod_usuario` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `administrator` tinyint(1) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `posts` int(11) DEFAULT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `usuario`
--

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`cod_cargo`);

--
-- Índices para tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`cod`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`cod_funcionario`),
  ADD KEY `FK_funcionario_telefone` (`cod_telefone`),
  ADD KEY `FK_funcionario_endereco` (`cod_endereco`),
  ADD KEY `FK_funcionario_cargo` (`cod_cargo`);

--
-- Índices para tabela `guards`
--
ALTER TABLE `guards`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `posts_animais_adocao`
--
ALTER TABLE `posts_animais_adocao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `posts_animais_perdidos`
--
ALTER TABLE `posts_animais_perdidos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `guards`
--
ALTER TABLE `guards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de tabela `posts_animais_adocao`
--
ALTER TABLE `posts_animais_adocao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `posts_animais_perdidos`
--
ALTER TABLE `posts_animais_perdidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
