-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 13/05/2023 às 14:59
-- Versão do servidor: 8.0.30
-- Versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `biblioteca_publica`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `autores`
--

CREATE TABLE `autores` (
  `autores_id` int NOT NULL COMMENT 'identificador sequencial dos autores',
  `autores_nome` varchar(50) NOT NULL COMMENT 'nome do autor',
  `autores_nascimento` date NOT NULL COMMENT 'data de nascimento do autor',
  `autores_nacionalidade` varchar(20) NOT NULL COMMENT 'nacionalidade do autor'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `autores`
--

INSERT INTO `autores` (`autores_id`, `autores_nome`, `autores_nascimento`, `autores_nacionalidade`) VALUES
(1, 'Machado De Assis', '1938-06-21', 'Brasileiro'),
(2, 'H. P. Lovecraft', '1890-08-20', 'Estadunidense');

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `funcionario_id` int NOT NULL COMMENT 'Identificar sequencial do funcionário',
  `funcionario_nome` varchar(30) NOT NULL COMMENT 'Nome do funcionário',
  `funcionario_cargo` int NOT NULL COMMENT 'Cargo do funcionário',
  `funcionario_telefone` int NOT NULL COMMENT 'Número de telefone do funcionário',
  `funcionario_email` varchar(50) NOT NULL COMMENT 'Email do Funcionario'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `genero`
--

CREATE TABLE `genero` (
  `genero_id` int NOT NULL COMMENT 'Identificador sequencial do gênero',
  `genero_nome` varchar(15) NOT NULL COMMENT 'Nome do gênero',
  `genero_classificacao` varchar(10) NOT NULL COMMENT 'Classificação de faixa etaria do gênero'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `livros`
--

CREATE TABLE `livros` (
  `livros_id` int NOT NULL COMMENT 'Identificador sequencial de livros',
  `livros_nome` varchar(30) NOT NULL COMMENT 'Nome do livro',
  `autor_id` int NOT NULL COMMENT 'Identificador sequencial de autor',
  `livro_editoria` varchar(30) NOT NULL COMMENT 'Nome da Editora',
  `genero_id` int NOT NULL COMMENT 'Identificador sequencial do gênero',
  `livro_num_edicao` int NOT NULL COMMENT 'Número da edição do livro'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `movimentacao`
--

CREATE TABLE `movimentacao` (
  `movimentacao_id` int NOT NULL COMMENT 'Identificador sequencial da Moimentação',
  `movimentacao_data_saida` date NOT NULL COMMENT 'Data de Movimentação de Saída',
  `usuario_id` int NOT NULL COMMENT 'Identificador sequencial do usuário',
  `livro_id` int NOT NULL COMMENT 'Identificador sequencial do livro',
  `movimentacao_status` varchar(30) NOT NULL COMMENT 'Status da movimentação dos livros'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int NOT NULL COMMENT 'identificador sequencial de usuário',
  `usuario_nome` varchar(30) NOT NULL COMMENT 'Nome do usuário',
  `usuario_nascimento` date NOT NULL COMMENT 'Data de Nascimento do usuário',
  `usuario_cpf` int NOT NULL COMMENT 'Número do CPF do usuário',
  `usuario_email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'E-mail do usuário',
  `usuario_endereco` varchar(30) NOT NULL COMMENT 'Endereço do usuário',
  `usuario_telefone` int NOT NULL COMMENT 'Número de telefone do usuário'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`autores_id`);

--
-- Índices de tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`funcionario_id`);

--
-- Índices de tabela `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`genero_id`);

--
-- Índices de tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`livros_id`);

--
-- Índices de tabela `movimentacao`
--
ALTER TABLE `movimentacao`
  ADD PRIMARY KEY (`movimentacao_id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autores`
--
ALTER TABLE `autores`
  MODIFY `autores_id` int NOT NULL AUTO_INCREMENT COMMENT 'identificador sequencial dos autores', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `funcionario_id` int NOT NULL AUTO_INCREMENT COMMENT 'Identificar sequencial do funcionário';

--
-- AUTO_INCREMENT de tabela `genero`
--
ALTER TABLE `genero`
  MODIFY `genero_id` int NOT NULL AUTO_INCREMENT COMMENT 'Identificador sequencial do gênero';

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `livros_id` int NOT NULL AUTO_INCREMENT COMMENT 'Identificador sequencial de livros';

--
-- AUTO_INCREMENT de tabela `movimentacao`
--
ALTER TABLE `movimentacao`
  MODIFY `movimentacao_id` int NOT NULL AUTO_INCREMENT COMMENT 'Identificador sequencial da Moimentação';

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int NOT NULL AUTO_INCREMENT COMMENT 'identificador sequencial de usuário';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
