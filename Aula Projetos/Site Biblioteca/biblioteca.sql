-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Maio-2022 às 12:18
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluguel`
--

CREATE TABLE `aluguel` (
  `aluguel_id` int(11) NOT NULL,
  `dt_retirada` date DEFAULT NULL,
  `dt_devolucao` date DEFAULT NULL,
  `livro_id` int(11) DEFAULT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  `endereco_retirada` varchar(255) DEFAULT NULL,
  `valor_total` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aluguel`
--

INSERT INTO `aluguel` (`aluguel_id`, `dt_retirada`, `dt_devolucao`, `livro_id`, `cliente_id`, `endereco_retirada`, `valor_total`) VALUES
(1, '2022-04-07', '2022-04-12', 1, 2, NULL, NULL),
(2, '2022-04-07', '2022-04-12', 2, 6, NULL, NULL),
(3, '2022-04-05', '2022-04-10', 5, 3, NULL, NULL),
(4, '2022-04-05', '2022-04-10', 3, 1, NULL, NULL),
(5, '2022-04-05', '2022-04-10', 4, 1, NULL, NULL),
(6, '2022-04-05', '2022-04-30', 5, 1, NULL, NULL),
(7, '2022-04-05', '2022-04-30', 1, 2, NULL, NULL),
(8, '2022-04-07', '2022-04-12', 6, 6, NULL, NULL),
(9, '2022-03-05', '2022-03-10', 10, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `autor_id` int(11) NOT NULL,
  `nm_autor` varchar(255) DEFAULT NULL,
  `dt_nasc` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`autor_id`, `nm_autor`, `dt_nasc`) VALUES
(1, 'Lucas', '1982-03-26'),
(2, 'José', '1998-04-10'),
(3, 'Heitor', '1982-04-16'),
(4, 'Naiara', '1988-04-06'),
(5, 'Bruna', '2000-08-25'),
(6, 'Isaac', '1972-11-15'),
(7, 'Lucas', '1998-12-10'),
(8, 'João Silva', '1995-10-01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `categoria_id` int(11) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`categoria_id`, `descricao`) VALUES
(1, 'Ficção'),
(2, 'Ciência'),
(3, 'História'),
(4, 'Matemática'),
(5, 'Português');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cliente_id` int(11) NOT NULL,
  `nm_cliente` varchar(255) DEFAULT NULL,
  `sexo` varchar(255) DEFAULT NULL,
  `cpf` varchar(255) DEFAULT NULL,
  `dt_nascimento` date DEFAULT NULL,
  `rua` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `resposta_seg` varchar(255) DEFAULT NULL,
  `comp_endereco` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cliente_id`, `nm_cliente`, `sexo`, `cpf`, `dt_nascimento`, `rua`, `bairro`, `numero`, `email`, `telefone`, `senha`, `resposta_seg`, `comp_endereco`) VALUES
(1, 'João Augusto', NULL, NULL, '2002-05-03', 'Rua josé', 'Jardim Paulista', 25, NULL, '(12)99879-9598', NULL, NULL, NULL),
(2, 'Julio Cesar', NULL, NULL, '2005-06-27', 'Rua Manacas', 'Jd. Oriente', 36, NULL, '(11)99595-9595', NULL, NULL, NULL),
(3, 'Waldir Pereira', NULL, NULL, '1999-12-10', 'Rua Figueiras', 'Centro', 42, NULL, '(11)99632-5659', NULL, NULL, NULL),
(4, 'Julia Andrade', NULL, NULL, '1985-11-16', 'Rua Vilaça', 'Jd. das industrias', 1111, NULL, '(12)99526-8549', NULL, NULL, NULL),
(5, 'Maria da Silva', NULL, NULL, '1998-10-25', 'Rua Manacas', 'Centro', 255, NULL, '(12)91232-2659', NULL, NULL, NULL),
(6, 'Marcia Maria', NULL, NULL, '2006-05-04', 'Av Dr. Heitor José', 'Centro', 177, NULL, '(12)99648-9564', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `editora`
--

CREATE TABLE `editora` (
  `editora_id` int(11) NOT NULL,
  `nm_editora` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `editora`
--

INSERT INTO `editora` (`editora_id`, `nm_editora`) VALUES
(1, 'Editora Manazo'),
(2, 'Editora Sol'),
(3, 'Editora Alegria'),
(4, 'Editora Venus'),
(5, 'Editora Familia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `livro_id` int(11) NOT NULL,
  `nm_livro` varchar(255) DEFAULT NULL,
  `edicao` varchar(255) DEFAULT NULL,
  `editora_id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `autor_id` int(11) NOT NULL,
  `capa` blob DEFAULT NULL,
  `valor_unitario` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`livro_id`, `nm_livro`, `edicao`, `editora_id`, `categoria_id`, `autor_id`, `capa`, `valor_unitario`) VALUES
(1, 'Star Wars', '10', 1, 1, 2, NULL, NULL),
(2, 'Guia dos Mochileiros', '2', 1, 1, 2, NULL, NULL),
(3, 'Segunda Guerra', '1', 2, 3, 3, NULL, NULL),
(4, 'Roma', '3', 3, 3, 4, NULL, NULL),
(5, 'Quimica Avançada', '1', 3, 2, 5, NULL, NULL),
(6, 'Laboratório', '10', 4, 2, 5, NULL, NULL),
(7, 'Gramática', '6', 3, 5, 6, NULL, NULL),
(8, 'Gramática 2', '6', 4, 5, 6, NULL, NULL),
(9, 'Matemática Discreta', '5', 3, 4, 5, NULL, NULL),
(10, 'Matemática Avançada', '10', 4, 4, 5, NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluguel`
--
ALTER TABLE `aluguel`
  ADD PRIMARY KEY (`aluguel_id`),
  ADD KEY `livro_id` (`livro_id`),
  ADD KEY `cliente_id` (`cliente_id`);

--
-- Índices para tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`autor_id`);

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cliente_id`);

--
-- Índices para tabela `editora`
--
ALTER TABLE `editora`
  ADD PRIMARY KEY (`editora_id`);

--
-- Índices para tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`livro_id`),
  ADD KEY `editora_id` (`editora_id`),
  ADD KEY `categoria_id` (`categoria_id`),
  ADD KEY `autor_id` (`autor_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluguel`
--
ALTER TABLE `aluguel`
  MODIFY `aluguel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `autor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `categoria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cliente_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `editora`
--
ALTER TABLE `editora`
  MODIFY `editora_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `livro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `aluguel`
--
ALTER TABLE `aluguel`
  ADD CONSTRAINT `aluguel_ibfk_1` FOREIGN KEY (`livro_id`) REFERENCES `livro` (`livro_id`),
  ADD CONSTRAINT `aluguel_ibfk_2` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`cliente_id`);

--
-- Limitadores para a tabela `livro`
--
ALTER TABLE `livro`
  ADD CONSTRAINT `livro_ibfk_1` FOREIGN KEY (`editora_id`) REFERENCES `editora` (`editora_id`),
  ADD CONSTRAINT `livro_ibfk_2` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`categoria_id`),
  ADD CONSTRAINT `livro_ibfk_3` FOREIGN KEY (`autor_id`) REFERENCES `autor` (`autor_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
