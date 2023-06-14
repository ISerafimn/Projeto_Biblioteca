-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 29/05/2023 às 02:04
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
(1, 'Machado De Assis', '1839-07-21', 'Brasileiro'),
(2, 'H. P. Lovecraft', '1890-08-20', 'Estadunidense'),
(7, 'J. K. Rowling', '1965-07-31', 'Britânica'),
(8, 'C. S. Lewis', '1898-11-29', 'Britânico'),
(9, 'Fiódor Dostoiévski', '1821-11-11', 'Russo'),
(10, 'J. R. R. Tolkien', '1892-01-03', 'Britânico'),
(11, 'Carlos Drummond de Andrade', '1902-10-31', 'Brasileiro'),
(12, 'Clarice Lispector', '1920-12-10', 'Ucraniana'),
(13, 'Arthur Conan Doyle', '1859-10-22', 'Britânico');

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `funcionario_id` int NOT NULL COMMENT 'Identificar sequencial do funcionário',
  `funcionario_nome` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'Nome do funcionário',
  `funcionario_cargo` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'Cargo do funcionário',
  `funcionario_telefone` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL COMMENT 'Número de telefone do funcionário',
  `funcionario_email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'Email do Funcionario'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `funcionario`
--

INSERT INTO `funcionario` (`funcionario_id`, `funcionario_nome`, `funcionario_cargo`, `funcionario_telefone`, `funcionario_email`) VALUES
(2, 'Pablo Santos', 'Recepcionista', '11954125235', 'pablosantos44@gmail.com'),
(3, 'Fernando Alves', 'Auxiliar de Biblioteca', '11954475521', 'fernandoalves@hotmail.com'),
(4, 'Douglas Lordeiro', 'Auxiliar de Biblioteca', '11954594234', 'douglaslordeiro@gmail.com'),
(5, 'Marcos Souza', 'Bibliotecário chefe', '11974528457', 'marcossouza@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `genero`
--

CREATE TABLE `genero` (
  `genero_id` int NOT NULL COMMENT 'Identificador sequencial do gênero',
  `genero_nome` varchar(15) NOT NULL COMMENT 'Nome do gênero',
  `genero_classificacao` char(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'Classificação de faixa etaria do gênero'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `genero`
--

INSERT INTO `genero` (`genero_id`, `genero_nome`, `genero_classificacao`) VALUES
(1, 'Romance', '14+'),
(2, 'Fantasia', '12+'),
(3, 'Poesia', '14+'),
(4, 'Romance', '12+'),
(5, 'Conto', '14+'),
(6, 'Terror', '16+'),
(7, 'Ação e aventura', '16+');

-- --------------------------------------------------------

--
-- Estrutura para tabela `livros`
--

CREATE TABLE `livros` (
  `livros_id` int NOT NULL COMMENT 'Identificador sequencial de livros',
  `livros_nome` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'Nome do livro',
  `autor_id` int NOT NULL COMMENT 'Identificador sequencial de autor',
  `livro_editoria` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'Nome da Editora',
  `genero_id` int NOT NULL COMMENT 'Identificador sequencial do gênero',
  `livro_num_edicao` int NOT NULL COMMENT 'Número da edição do livro'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `livros`
--

INSERT INTO `livros` (`livros_id`, `livros_nome`, `autor_id`, `livro_editoria`, `genero_id`, `livro_num_edicao`) VALUES
(1, 'As Crônicas de Nárnia: O Leão, a Feiticeira e o Guarda-Roupa', 8, ' WMF Martins Fontes', 2, 3),
(2, 'Sherlock Holmes - Um estudo em vermelho', 13, 'Principis', 7, 2),
(3, 'O Senhor dos Anéis', 10, 'Martins Fontes', 2, 1),
(4, 'Alguma poesia', 11, 'Record', 3, 15),
(5, 'Dom Casmurro', 1, 'Via Leitura', 1, 1),
(6, 'Memórias do subsolo', 9, 'Penguin-Companhia', 1, 1),
(7, 'Laços de família', 12, 'Rocco', 5, 1),
(8, 'O Chamado de Cthulhu', 2, ' Darkside', 6, 1),
(9, 'Harry Potter e a Pedra Filosofal', 7, 'Rocco', 2, 1),
(10, 'Harry Potter e a Câmara Secreta', 7, 'Rocco', 2, 1),
(11, 'Harry Potter e o Prisioneiro de Azkaban', 7, 'Rocco', 2, 1),
(12, 'Harry Potter e o Cálice de Fogo', 7, 'Rocco', 2, 1),
(13, 'Harry Potter e a Ordem da Fênix', 7, 'Rocco', 2, 1),
(14, 'Harry Potter e o Enigma do Príncipe', 7, 'Rocco', 2, 1),
(15, 'Harry Potter e as Relíquias da Morte', 7, 'Rocco', 2, 1),
(16, 'As aventuras de Sherlock Holmes', 13, 'Principis', 7, 1);

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

--
-- Despejando dados para a tabela `movimentacao`
--

INSERT INTO `movimentacao` (`movimentacao_id`, `movimentacao_data_saida`, `usuario_id`, `livro_id`, `movimentacao_status`) VALUES
(2, '2023-04-11', 1, 2, 'Entregue'),
(3, '2023-03-09', 2, 3, 'Em atraso'),
(4, '2022-12-01', 4, 10, 'Em atraso');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int NOT NULL COMMENT 'identificador sequencial de usuário',
  `usuario_nome` varchar(30) NOT NULL COMMENT 'Nome do usuário',
  `usuario_nascimento` date NOT NULL COMMENT 'Data de Nascimento do usuário',
  `usuario_cpf` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'Número do CPF do usuário',
  `usuario_email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'E-mail do usuário',
  `usuario_endereco` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'Endereço do usuário',
  `usuario_telefone` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'Número de telefone do usuário'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario_nome`, `usuario_nascimento`, `usuario_cpf`, `usuario_email`, `usuario_endereco`, `usuario_telefone`) VALUES
(1, 'RIcardo Almeida', '1999-05-11', '14023365175', 'ricardoalmeida@gmail.com', 'Rua Floresta, N15 Heliópolis SP-04235200', '11652345874'),
(2, 'Pietro Alvarez', '2001-03-07', '02578869245', 'pietroalvarez@gmail.com', 'Vila Marchi, N7 São Bernardo do Campo - SP-098430', '11524536789'),
(3, 'Samyra Bezerra', '2004-09-02', '43185762435', 'samyrabezerra@gmail.com', 'Av. Mercúrio N77 Centro Histórico de São Paulo, São Paulo SP 01026-010', '11943647856'),
(4, 'Paula Nunes ', '1986-10-19', '74586325415', 'paulanunes14@outlook.com', 'Rua Itamarati Brasileiro N28 Heliópolis  São Paulo SP-04236130', '11963254785');

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
  ADD PRIMARY KEY (`funcionario_id`),
  ADD UNIQUE KEY `funcionario_email` (`funcionario_email`);

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
  ADD PRIMARY KEY (`usuario_id`),
  ADD UNIQUE KEY `usuario_cpf` (`usuario_cpf`),
  ADD UNIQUE KEY `usuario_email` (`usuario_email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autores`
--
ALTER TABLE `autores`
  MODIFY `autores_id` int NOT NULL AUTO_INCREMENT COMMENT 'identificador sequencial dos autores', AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `funcionario_id` int NOT NULL AUTO_INCREMENT COMMENT 'Identificar sequencial do funcionário', AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `genero`
--
ALTER TABLE `genero`
  MODIFY `genero_id` int NOT NULL AUTO_INCREMENT COMMENT 'Identificador sequencial do gênero', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `livros_id` int NOT NULL AUTO_INCREMENT COMMENT 'Identificador sequencial de livros', AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `movimentacao`
--
ALTER TABLE `movimentacao`
  MODIFY `movimentacao_id` int NOT NULL AUTO_INCREMENT COMMENT 'Identificador sequencial da Moimentação', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int NOT NULL AUTO_INCREMENT COMMENT 'identificador sequencial de usuário', AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
