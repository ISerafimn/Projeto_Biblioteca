-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 19/06/2023 às 19:45
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
-- Banco de dados: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `autor`
--

CREATE TABLE `autor` (
  `id_autor` int NOT NULL,
  `nome_autor` varchar(50) NOT NULL,
  `pais_autor` varchar(50) NOT NULL,
  `nascimento_autor` int NOT NULL,
  `falecimento_autor` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `autor`
--

INSERT INTO `autor` (`id_autor`, `nome_autor`, `pais_autor`, `nascimento_autor`, `falecimento_autor`) VALUES
(1, 'Machado de Assis', 'Brasileiro', 1839, 1908),
(2, 'José Saramago', 'Português', 1922, 2010),
(3, 'William Shakespeare', 'Inglês ', 1564, 1616),
(4, 'Fiódor Dostoiévski', 'Russo', 1821, 1881),
(5, 'Jorge Luís Borges', 'Argentino', 1899, 1986);

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id_funcionario` int NOT NULL,
  `nome_funcionario` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email_funcionario` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `data_funcionario` date NOT NULL,
  `cpf_funcionario` int NOT NULL,
  `senha_funcionario` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `funcionario`
--

INSERT INTO `funcionario` (`id_funcionario`, `nome_funcionario`, `email_funcionario`, `data_funcionario`, `cpf_funcionario`, `senha_funcionario`) VALUES
(1, 'Igor Serafim', 'igorserafimn@gmail.com', '2004-04-10', 147256145, '123'),
(2, 'Felipe Dorosz', 'felipedorosz@gmail.com', '2002-06-14', 987654321, '456'),
(3, 'Gabryel Cambui', 'gabryelcambui@gmail.com', '2004-06-28', 963852741, '789'),
(4, 'ewrewd', 'igorserafimedwsfn@gmail.com', '2023-06-02', 5616, '1111');

-- --------------------------------------------------------

--
-- Estrutura para tabela `livro`
--

CREATE TABLE `livro` (
  `id_livro` int NOT NULL,
  `nome_livro` varchar(150) NOT NULL,
  `genero_livro` varchar(50) NOT NULL,
  `editora_livro` varchar(50) NOT NULL,
  `num_edicao_livro` int NOT NULL,
  `estoque_livro` int NOT NULL,
  `url_imagem_livro` varchar(5000) DEFAULT NULL,
  `sinopse_livro` varchar(1000) DEFAULT NULL,
  `id_autor` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `livro`
--

INSERT INTO `livro` (`id_livro`, `nome_livro`, `genero_livro`, `editora_livro`, `num_edicao_livro`, `estoque_livro`, `url_imagem_livro`, `sinopse_livro`, `id_autor`) VALUES
(1, 'Dom Casmurro', 'Romance', 'Não Identificada', 1, 4, 'https://guiadoestudante.abril.com.br/wp-content/uploads/sites/4/2016/10/dom-casmurro-capa5.jpg?quality=100&strip=info', 'Machado de Assis (1839-1908), escrevendo Dom Casmurro, produziu um dos maiores livros da literatura universal. Mas criando Capitu, a espantosa menina de \"olhos oblíquos e dissimulados\", de \"olhos de ressaca\", Machado nos legou um incrível mistério, um mistério até hoje indecifrado. Há quase cem anos os estudiosos e especialistas o esmiuçam, o analisam sob todos os aspectos. Em vão. Embora o autor se tenha dado ao trabalho de distribuir pelo caminho todas as pistas para quem quisesse decifrar o enigma, ninguém ainda o desvendou. A alma de Capitu é, na verdade, um labirinto sem saída, um labirinto que Machado também já explorara em personagens como Virgília (Memórias Póstumas de Brás Cubas) e Sofia (Quincas Borba), personagens construídas a partir da ambigüidade psicológica, como Jorge Luis Borges gostaria de ter inventado. ', 1),
(2, 'Memórias póstumas de Brás Cubas', 'Terror', 'Não Identificada', 1, 7, 'https://grupoautentica.com.br/img/capas/x/memorias-postumas-de-bras-cubas-1926-20210607162801.jpg', 'Após ter morrido, em pleno ano de 1869, Brás Cubas decide por narrar sua história e revisitar os fatos mais importantes de sua vida, a fim de se distrair na eternidade. A partir de então ele relembra de amigos como Quincas Borba, de sua displicente formação acadêmica em Portugal, dos amores de sua vida e ainda do privilégio que teve de nunca ter precisado trabalhar em sua vida.', 1);
(3, 'Dom Casmurro', 'Fantasia', 'Não Identificada', 1, 4, 'https://guiadoestudante.abril.com.br/wp-content/uploads/sites/4/2016/10/dom-casmurro-capa5.jpg?quality=100&strip=info', 'Machado de Assis (1839-1908), escrevendo Dom Casmurro, produziu um dos maiores livros da literatura universal. Mas criando Capitu, a espantosa menina de \"olhos oblíquos e dissimulados\", de \"olhos de ressaca\", Machado nos legou um incrível mistério, um mistério até hoje indecifrado. Há quase cem anos os estudiosos e especialistas o esmiuçam, o analisam sob todos os aspectos. Em vão. Embora o autor se tenha dado ao trabalho de distribuir pelo caminho todas as pistas para quem quisesse decifrar o enigma, ninguém ainda o desvendou. A alma de Capitu é, na verdade, um labirinto sem saída, um labirinto que Machado também já explorara em personagens como Virgília (Memórias Póstumas de Brás Cubas) e Sofia (Quincas Borba), personagens construídas a partir da ambigüidade psicológica, como Jorge Luis Borges gostaria de ter inventado. ', 1),
(4, 'Memórias póstumas de Brás Cubas', 'Terror', 'Não Identificada', 1, 7, 'https://grupoautentica.com.br/img/capas/x/memorias-postumas-de-bras-cubas-1926-20210607162801.jpg', 'Após ter morrido, em pleno ano de 1869, Brás Cubas decide por narrar sua história e revisitar os fatos mais importantes de sua vida, a fim de se distrair na eternidade. A partir de então ele relembra de amigos como Quincas Borba, de sua displicente formação acadêmica em Portugal, dos amores de sua vida e ainda do privilégio que teve de nunca ter precisado trabalhar em sua vida.', 1);
(5, 'Dom Casmurro', 'Aventura', 'Não Identificada', 1, 4, 'https://guiadoestudante.abril.com.br/wp-content/uploads/sites/4/2016/10/dom-casmurro-capa5.jpg?quality=100&strip=info', 'Machado de Assis (1839-1908), escrevendo Dom Casmurro, produziu um dos maiores livros da literatura universal. Mas criando Capitu, a espantosa menina de \"olhos oblíquos e dissimulados\", de \"olhos de ressaca\", Machado nos legou um incrível mistério, um mistério até hoje indecifrado. Há quase cem anos os estudiosos e especialistas o esmiuçam, o analisam sob todos os aspectos. Em vão. Embora o autor se tenha dado ao trabalho de distribuir pelo caminho todas as pistas para quem quisesse decifrar o enigma, ninguém ainda o desvendou. A alma de Capitu é, na verdade, um labirinto sem saída, um labirinto que Machado também já explorara em personagens como Virgília (Memórias Póstumas de Brás Cubas) e Sofia (Quincas Borba), personagens construídas a partir da ambigüidade psicológica, como Jorge Luis Borges gostaria de ter inventado. ', 1),
(6, 'Memórias póstumas de Brás Cubas', 'Poesia', 'Não Identificada', 1, 7, 'https://grupoautentica.com.br/img/capas/x/memorias-postumas-de-bras-cubas-1926-20210607162801.jpg', 'Após ter morrido, em pleno ano de 1869, Brás Cubas decide por narrar sua história e revisitar os fatos mais importantes de sua vida, a fim de se distrair na eternidade. A partir de então ele relembra de amigos como Quincas Borba, de sua displicente formação acadêmica em Portugal, dos amores de sua vida e ainda do privilégio que teve de nunca ter precisado trabalhar em sua vida.', 1);
(7, 'Dom Casmurro', 'Ficcao', 'Não Identificada', 1, 4, 'https://guiadoestudante.abril.com.br/wp-content/uploads/sites/4/2016/10/dom-casmurro-capa5.jpg?quality=100&strip=info', 'Machado de Assis (1839-1908), escrevendo Dom Casmurro, produziu um dos maiores livros da literatura universal. Mas criando Capitu, a espantosa menina de \"olhos oblíquos e dissimulados\", de \"olhos de ressaca\", Machado nos legou um incrível mistério, um mistério até hoje indecifrado. Há quase cem anos os estudiosos e especialistas o esmiuçam, o analisam sob todos os aspectos. Em vão. Embora o autor se tenha dado ao trabalho de distribuir pelo caminho todas as pistas para quem quisesse decifrar o enigma, ninguém ainda o desvendou. A alma de Capitu é, na verdade, um labirinto sem saída, um labirinto que Machado também já explorara em personagens como Virgília (Memórias Póstumas de Brás Cubas) e Sofia (Quincas Borba), personagens construídas a partir da ambigüidade psicológica, como Jorge Luis Borges gostaria de ter inventado. ', 1),
(8, 'Memórias póstumas de Brás Cubas', 'Fantasia', 'Não Identificada', 1, 7, 'https://grupoautentica.com.br/img/capas/x/memorias-postumas-de-bras-cubas-1926-20210607162801.jpg', 'Após ter morrido, em pleno ano de 1869, Brás Cubas decide por narrar sua história e revisitar os fatos mais importantes de sua vida, a fim de se distrair na eternidade. A partir de então ele relembra de amigos como Quincas Borba, de sua displicente formação acadêmica em Portugal, dos amores de sua vida e ainda do privilégio que teve de nunca ter precisado trabalhar em sua vida.', 1);
(9, 'Dom Casmurro', 'Conto', 'Não Identificada', 1, 4, 'https://guiadoestudante.abril.com.br/wp-content/uploads/sites/4/2016/10/dom-casmurro-capa5.jpg?quality=100&strip=info', 'Machado de Assis (1839-1908), escrevendo Dom Casmurro, produziu um dos maiores livros da literatura universal. Mas criando Capitu, a espantosa menina de \"olhos oblíquos e dissimulados\", de \"olhos de ressaca\", Machado nos legou um incrível mistério, um mistério até hoje indecifrado. Há quase cem anos os estudiosos e especialistas o esmiuçam, o analisam sob todos os aspectos. Em vão. Embora o autor se tenha dado ao trabalho de distribuir pelo caminho todas as pistas para quem quisesse decifrar o enigma, ninguém ainda o desvendou. A alma de Capitu é, na verdade, um labirinto sem saída, um labirinto que Machado também já explorara em personagens como Virgília (Memórias Póstumas de Brás Cubas) e Sofia (Quincas Borba), personagens construídas a partir da ambigüidade psicológica, como Jorge Luis Borges gostaria de ter inventado. ', 1),
(10, 'Memórias póstumas de Brás Cubas', 'Poesia', 'Não Identificada', 1, 7, 'https://grupoautentica.com.br/img/capas/x/memorias-postumas-de-bras-cubas-1926-20210607162801.jpg', 'Após ter morrido, em pleno ano de 1869, Brás Cubas decide por narrar sua história e revisitar os fatos mais importantes de sua vida, a fim de se distrair na eternidade. A partir de então ele relembra de amigos como Quincas Borba, de sua displicente formação acadêmica em Portugal, dos amores de sua vida e ainda do privilégio que teve de nunca ter precisado trabalhar em sua vida.', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `movimentacao`
--

CREATE TABLE `movimentacao` (
  `id_movimentacao` int NOT NULL,
  `data_saida_movimentacao` date NOT NULL,
  `data_volta_movimentacao` date NOT NULL,
  `id_usuario` int NOT NULL,
  `id_livro` int NOT NULL,
  `status_movimentacao` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int NOT NULL,
  `nome_usuario` varchar(50) NOT NULL,
  `email_usuario` varchar(50) NOT NULL,
  `data_usuario` date NOT NULL,
  `cpf_usuario` int NOT NULL,
  `senha_usuario` varchar(20) NOT NULL,
  `endereco_usuario` varchar(50) NOT NULL,
  `telefone_usuario` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `email_usuario`, `data_usuario`, `cpf_usuario`, `senha_usuario`, `endereco_usuario`, `telefone_usuario`) VALUES
(1, 'carlos', 'carlso@hamj', '2004-08-13', 4318, '123', 'vava', 4001),
(2, 'Daniel Oliveira', 'danieloliveira@gmail.com', '2007-06-07', 159357842, '147', 'Rua do Roxa of Hair', 8004222),
(3, 'Adriano Cardoso', 'adrianocardoso@gmail.com', '1997-06-11', 164751364, '789', 'Rua Monte Longe', 78415478),
(4, 'José Eduardo', 'joseeduardo@gmail.com', '2004-03-14', 789456741, '647', 'Rua do Pato', 156151664),
(5, 'dgtrsfdzfs', 'igorse4@gmail.com', '2023-06-07', 5427, '11978758727', 'Rua Da Fantasia', 119787587);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id_autor`);

--
-- Índices de tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id_funcionario`),
  ADD UNIQUE KEY `CPF` (`cpf_funcionario`) USING BTREE,
  ADD UNIQUE KEY `EMAIL` (`email_funcionario`) USING BTREE;

--
-- Índices de tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`id_livro`),
  ADD KEY `fk_id_autor` (`id_autor`);

--
-- Índices de tabela `movimentacao`
--
ALTER TABLE `movimentacao`
  ADD PRIMARY KEY (`id_movimentacao`),
  ADD KEY `fk_id_usuario` (`id_usuario`),
  ADD KEY `fk_id_livro` (`id_livro`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `CPF` (`cpf_usuario`) USING BTREE,
  ADD UNIQUE KEY `EMAIL` (`email_usuario`) USING BTREE;

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `id_autor` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id_funcionario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `id_livro` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `movimentacao`
--
ALTER TABLE `movimentacao`
  MODIFY `id_movimentacao` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `livro`
--
ALTER TABLE `livro`
  ADD CONSTRAINT `fk_id_autor` FOREIGN KEY (`id_autor`) REFERENCES `autor` (`id_autor`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Restrições para tabelas `movimentacao`
--
ALTER TABLE `movimentacao`
  ADD CONSTRAINT `fk_id_livro` FOREIGN KEY (`id_livro`) REFERENCES `livro` (`id_livro`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
