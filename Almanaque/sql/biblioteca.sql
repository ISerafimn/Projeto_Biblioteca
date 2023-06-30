-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 30/06/2023 às 23:04
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
(2, 'Memórias póstumas de Brás Cubas', 'Romance', 'Não Identificada', 1, 7, 'https://grupoautentica.com.br/img/capas/x/memorias-postumas-de-bras-cubas-1926-20210607162801.jpg', 'Após ter morrido, em pleno ano de 1869, Brás Cubas decide por narrar sua história e revisitar os fatos mais importantes de sua vida, a fim de se distrair na eternidade. A partir de então ele relembra de amigos como Quincas Borba, de sua displicente formação acadêmica em Portugal, dos amores de sua vida e ainda do privilégio que teve de nunca ter precisado trabalhar em sua vida.', 1),
(3, 'Ensaio Sobre a Cegueira', 'Romance', 'Não Identificada', 1, 3, 'https://m.media-amazon.com/images/I/71Hr1-by3UL._AC_UF1000,1000_QL80_.jpg', 'Um motorista parado no sinal se descobre subitamente cego. É o primeiro caso de uma \"treva branca\" que logo se espalha incontrolavelmente. Resguardados em quarentena, os cegos se perceberão reduzidos à essência humana, numa verdadeira viagem às trevas.O Ensaio sobre a cegueira é a fantasia de um autor que nos faz lembrar \"a responsabilidade de ter olhos quando os outros os perderam\". José Saramago nos dá, aqui, uma imagem aterradora e comovente de tempos sombrios, à beira de um novo milênio, impondo-se à companhia dos maiores visionários modernos, como Franz Kafka e Elias Canetti.Cada leitor viverá uma experiência imaginativa única. Num ponto onde se cruzam literatura e sabedoria, José Saramago nos obriga a parar, fechar os olhos e ver. Recuperar a lucidez, resgatar o afeto: essas são as tarefas do escritor e de cada leitor, diante da pressão dos tempos e do que se perdeu: \"uma coisa que não tem nome, essa coisa é o que somos\".', 2),
(4, 'O Homem Duplicado', 'Romance', 'Não Identificada', 1, 7, 'https://m.media-amazon.com/images/I/71qDCQnj7TL._AC_UF1000,1000_QL80_.jpg', 'Um motorista parado no sinal se descobre subitamente cego. É o primeiro caso de uma \"treva branca\" que logo se espalha incontrolavelmente. Resguardados em quarentena, os cegos se perceberão reduzidos à essência humana, numa verdadeira viagem às trevas.O Ensaio sobre a cegueira é a fantasia de um autor que nos faz lembrar \"a responsabilidade de ter olhos quando os outros os perderam\". José Saramago nos dá, aqui, uma imagem aterradora e comovente de tempos sombrios, à beira de um novo milênio, impondo-se à companhia dos maiores visionários modernos, como Franz Kafka e Elias Canetti.Cada leitor viverá uma experiência imaginativa única. Num ponto onde se cruzam literatura e sabedoria, José Saramago nos obriga a parar, fechar os olhos e ver. Recuperar a lucidez, resgatar o afeto: essas são as tarefas do escritor e de cada leitor, diante da pressão dos tempos e do que se perdeu: \"uma coisa que não tem nome, essa coisa é o que somos\".', 2),
(5, 'Romeu e Julieta', 'Poesia', 'Walcyr Carrasco', 1, 5, 'https://m.media-amazon.com/images/I/51g1BgvzwUL._SY344_BO1,204,203,200_QL70_ML2_.jpg', 'A obra-prima de William Shakespeare é uma das maiores histórias de amor infeliz de todos os tempos. Em um mundo repleto de disputa, de intriga e de violência, dois jovens se apaixonam, mas suas famílias, os Montecchios e os Capuletos, estão envolvidas em uma rixa de sangue e não permitem nem sequer que eles se encontrem. A paixão desenfreada, o encontro proibido e a busca pela alma gêmea são alguns dos aspectos que tornam a história de Romeu e Julieta atemporal e uma das mais conhecidas tragédias da literatura.', 3),
(6, 'A Megera Domada', 'Romance', 'Walcyr Carrasco', 1, 2, 'https://m.media-amazon.com/images/I/51nK+HfD54L._SX341_BO1,204,203,200_.jpg', 'Um Rico Mercador De Pádua, Na Itália, Decide Que Sua Filha Mais Jovem, A Doce Bianca, Só Se Casará Depois Da Mais Velha, A Terrível Catarina. Quem Se Atreveria A Querer Conquistar O Coração De Catarina Só Mesmo O Louco Petrúquio, Que Se Revelaria Também Um Grande Estrategista. Divirta-Se Com Esta Comédia Do Século Xvi, Que Trata De Forma Hilariante A Sempre Atual Guerra Dos Sexos!', 3),
(7, 'O Idiota', 'Poesia', 'Não Identificada', 1, 2, 'https://m.media-amazon.com/images/I/41BguKPL7AL.jpg', 'Publicado por volta de 1868-1869, «O Idiota» é, porventura, o mais perfeito dos cinco grandes romances de Dostoiévski - na composição, no estilo, no aprofundamento dos personagens. Foi também, de todos os romances do autor, o mais incompreendido na sua época. Dostoiévski pretende, segundo as suas próprias palavras, «criar a imagem do homem positivamente bom», uma encarnação da beleza, da bondade e da humildade, figura de herói entre Dom Quixote e Cristo, mostrando o que pode acontecer a um homem assim, em contato com a realidade.', 4),
(8, 'Humilhados e Ofendidos', 'Romance', 'Não Identificada', 1, 4, 'https://m.media-amazon.com/images/I/41eKgwYBngL.jpg', 'Nesta obra, narrada pelo jovem escritor Ivan, dois enredos vão convergindo gradualmente. Natascha, amiga de infância e amada de Ivan, foge de casa dos pais para casar com Alyosha, o filho do Príncipe Valkovsky que não aprova esta união. Entretanto Ivan conhece Elena, uma órfã de treze anos, que é adotada por Nicolai, o pai de Natascha. E é ao contar a sua triste história que a menina consegue que Nicolai perdoe a sua filha. Uma narrativa envolvente e cativante onde o sofrimento humano é retratado com mestria.', 4),
(9, 'Ficções', 'Romance', 'Não Identificada', 1, 3, 'https://m.media-amazon.com/images/I/51wuDcf2I2L.jpg', 'Ficções reúne os contos publicados por Borges em 1941 sob o título de O jardim de veredas que se bifurcam (com exceção de \"A aproximação a Almotásim\", incorporado a outra obra) e outras dez narrativas com o subtítulo de Artifícios. Nesses textos, o leitor se defronta com um narrador inquisitivo que expõe, com elegância e economia de meios, de forma paradoxal e lapidar, suas conjecturas e perplexidades sobre o universo, retomando motivos recorrentes em seus poemas e ensaios desde o início de sua carreira: o tempo, a eternidade, o infinito. Chamam a atenção a frase enxuta, o poder de síntese e o rigor da construção, que tem algo da poesia e outro tanto da prosa filosófica, sem nunca perder o humor desconcertante...', 5),
(10, 'O aleph', 'Romance', 'Não Identificada', 1, 6, 'https://m.media-amazon.com/images/I/41e7Yq1honL.jpg', 'Publicado em 1949, O aleph é considerado pela crítica um dos pontos culminantes da ficção de Borges. Em sua maioria, \"as peças deste livro correspondem ao gênero fantástico\", esclarece o autor no epílogo da obra. Nelas, ele exerce seu modo característico de manipular a \"realidade\": as coisas da vida real deslizam para contextos incomuns e ganham significados extraordinários, ao mesmo tempo em que fenômenos bizarros se introduzem em cenários prosaicos. Os motivos borgeanos recorrentes do tempo, do infinito, da imortalidade e da perplexidade metafísica jamais se perdem na pura abstração; ao contrário, ganham carnadura concreta nas tramas, nas imagens, na sintaxe, que também são capazes de resgatar uma profunda sondagem do processo histórico argentino...', 5);

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
  MODIFY `id_livro` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
