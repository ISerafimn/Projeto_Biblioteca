-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 15-Nov-2023 às 21:01
-- Versão do servidor: 8.0.30
-- versão do PHP: 8.1.10

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
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `id_autor` int NOT NULL,
  `nome_autor` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pais_autor` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nascimento_autor` int NOT NULL,
  `falecimento_autor` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`id_autor`, `nome_autor`, `pais_autor`, `nascimento_autor`, `falecimento_autor`) VALUES
(1, 'Machado de Assis', 'Brasileiro', 1839, 1908),
(2, 'José Saramago', 'Português', 1922, 2010),
(3, 'William Shakespeare', 'Inglês ', 1564, 1616),
(4, 'Fiódor Dostoiévski', 'Russo', 1821, 1881),
(5, 'Jorge Luís Borges', 'Argentino', 1899, 1986),
(8, 'Stephen King', 'Estadunidense', 1947, NULL),
(9, 'Edgar Allan Poe ', 'Estadunidense', 1809, 1849),
(10, 'H.P. Lovecraft', 'Estadunidense', 1890, 1937),
(11, 'C.S Lewis', 'Reino Unido', 1898, 1963),
(12, 'Rodrigo Bibo', 'Brasil', 1985, NULL),
(13, 'Jonas Madureira', 'Brasil', 1976, NULL),
(14, 'Paul Washer', 'Estados Unidos', 1961, NULL),
(15, 'Friedrich Nietzsche', 'Alemanha', 1844, 1900),
(16, 'Niccolo Machiavelli', 'Itália', 1496, 1527),
(22, 'Patrick Rothfuss', 'Americano', 1973, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `favorito`
--

CREATE TABLE `favorito` (
  `id_favorito` int NOT NULL,
  `id_usuario` int NOT NULL,
  `id_livro` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `favorito`
--

INSERT INTO `favorito` (`id_favorito`, `id_usuario`, `id_livro`) VALUES
(41, 11, 4),
(43, 11, 7),
(45, 11, 23),
(47, 11, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id_funcionario` int NOT NULL,
  `nome_funcionario` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email_funcionario` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `data_funcionario` date NOT NULL,
  `cpf_funcionario` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `senha_funcionario` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_sessao` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id_funcionario`, `nome_funcionario`, `email_funcionario`, `data_funcionario`, `cpf_funcionario`, `senha_funcionario`, `id_sessao`) VALUES
(1, 'Carlos Henri', 'carlosHenri@gmail.com', '2023-07-21', '145481321', '$2y$10$4PokdWw7fSQEjfJmw1AZ4eoPMKsOWr9JUw33ZK2VcLMTGbEnI36oO', 2),
(2, 'Felipe Dorosz', 'felipedorosz@gmail.com', '2002-06-14', '987654321', '$2y$10$4PokdWw7fSQEjfJmw1AZ4eoPMKsOWr9JUw33ZK2VcLMTGbEnI36oO', 2),
(3, 'Gabryel Cambui', 'gabryelcambui@gmail.com', '2004-06-28', '963852741', '$2y$10$4PokdWw7fSQEjfJmw1AZ4eoPMKsOWr9JUw33ZK2VcLMTGbEnI36oO', 2),
(6, 'Igor Serafim Gonçalves', 'igorserafimn@gmail.com', '2004-04-10', '5165', '$2y$10$4PokdWw7fSQEjfJmw1AZ4eoPMKsOWr9JUw33ZK2VcLMTGbEnI36oO', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `genero`
--

CREATE TABLE `genero` (
  `id_genero` int NOT NULL,
  `nome_genero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `genero`
--

INSERT INTO `genero` (`id_genero`, `nome_genero`) VALUES
(1, 'Romance'),
(2, 'Fantasia'),
(3, 'Poesia'),
(5, 'Romance filosófico'),
(6, 'Terror'),
(7, 'Literatura cristã'),
(8, 'Filosofia'),
(9, 'Não Ficção');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `id_livro` int NOT NULL,
  `nome_livro` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `editora_livro` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_genero` int NOT NULL,
  `num_edicao_livro` int NOT NULL,
  `estoque_livro` int NOT NULL,
  `url_imagem_livro` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sinopse_livro` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_autor` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`id_livro`, `nome_livro`, `editora_livro`, `id_genero`, `num_edicao_livro`, `estoque_livro`, `url_imagem_livro`, `sinopse_livro`, `id_autor`) VALUES
(1, 'Dom Casmurro', 'Não Identificada', 1, 1, 4, 'dom-casmurro.webp', 'Machado de Assis (1839-1908), escrevendo Dom Casmurro, produziu um dos maiores livros da literatura universal. Mas criando Capitu, a espantosa menina de \"olhos oblíquos e dissimulados\", de \"olhos de ressaca\", Machado nos legou um incrível mistério, um mistério até hoje indecifrado. Há quase cem anos os estudiosos e especialistas o esmiuçam, o analisam sob todos os aspectos. Em vão. Embora o autor se tenha dado ao trabalho de distribuir pelo caminho todas as pistas para quem quisesse decifrar o enigma, ninguém ainda o desvendou. A alma de Capitu é, na verdade, um labirinto sem saída, um labirinto que Machado também já explorara em personagens como Virgília (Memórias Póstumas de Brás Cubas) e Sofia (Quincas Borba), personagens construídas a partir da ambigüidade psicológica, como Jorge Luis Borges gostaria de ter inventado. ', 1),
(2, 'Memórias póstumas de Brás Cubas', 'Não Identificada', 1, 1, 7, 'memorias-postumas-de-bras-cubas.jpg', 'Após ter morrido, em pleno ano de 1869, Brás Cubas decide por narrar sua história e revisitar os fatos mais importantes de sua vida, a fim de se distrair na eternidade. A partir de então ele relembra de amigos como Quincas Borba, de sua displicente formação acadêmica em Portugal, dos amores de sua vida e ainda do privilégio que teve de nunca ter precisado trabalhar em sua vida.', 1),
(3, 'Ensaio Sobre a Cegueira', 'Não Identificada', 1, 1, 1, 'ensaio-sobre-a-cegueira.jpg', 'Um motorista parado no sinal se descobre subitamente cego. É o primeiro caso de uma \"treva branca\" que logo se espalha incontrolavelmente. Resguardados em quarentena, os cegos se perceberão reduzidos à essência humana, numa verdadeira viagem às trevas.O Ensaio sobre a cegueira é a fantasia de um autor que nos faz lembrar \"a responsabilidade de ter olhos quando os outros os perderam\". José Saramago nos dá, aqui, uma imagem aterradora e comovente de tempos sombrios, à beira de um novo milênio, impondo-se à companhia dos maiores visionários modernos, como Franz Kafka e Elias Canetti.Cada leitor viverá uma experiência imaginativa única. Num ponto onde se cruzam literatura e sabedoria, José Saramago nos obriga a parar, fechar os olhos e ver. Recuperar a lucidez, resgatar o afeto: essas são as tarefas do escritor e de cada leitor, diante da pressão dos tempos e do que se perdeu: \"uma coisa que não tem nome, essa coisa é o que somos\".', 2),
(4, 'O Homem Duplicado', 'Não Identificada', 1, 1, 6, 'o-homem-duplicado.jpg', 'Um motorista parado no sinal se descobre subitamente cego. É o primeiro caso de uma \"treva branca\" que logo se espalha incontrolavelmente. Resguardados em quarentena, os cegos se perceberão reduzidos à essência humana, numa verdadeira viagem às trevas.O Ensaio sobre a cegueira é a fantasia de um autor que nos faz lembrar \"a responsabilidade de ter olhos quando os outros os perderam\". José Saramago nos dá, aqui, uma imagem aterradora e comovente de tempos sombrios, à beira de um novo milênio, impondo-se à companhia dos maiores visionários modernos, como Franz Kafka e Elias Canetti.Cada leitor viverá uma experiência imaginativa única. Num ponto onde se cruzam literatura e sabedoria, José Saramago nos obriga a parar, fechar os olhos e ver. Recuperar a lucidez, resgatar o afeto: essas são as tarefas do escritor e de cada leitor, diante da pressão dos tempos e do que se perdeu: \"uma coisa que não tem nome, essa coisa é o que somos\".', 2),
(5, 'Romeu e Julieta', 'Walcyr Carrasco', 3, 1, 5, 'romeu-e-julieta.jpg', 'A obra-prima de William Shakespeare é uma das maiores histórias de amor infeliz de todos os tempos. Em um mundo repleto de disputa, de intriga e de violência, dois jovens se apaixonam, mas suas famílias, os Montecchios e os Capuletos, estão envolvidas em uma rixa de sangue e não permitem nem sequer que eles se encontrem. A paixão desenfreada, o encontro proibido e a busca pela alma gêmea são alguns dos aspectos que tornam a história de Romeu e Julieta atemporal e uma das mais conhecidas tragédias da literatura.', 3),
(6, 'A Megera Domada', 'Walcyr Carrasco', 1, 1, 2, 'a-megera-domada.jpg', 'Um Rico Mercador De Pádua, Na Itália, Decide Que Sua Filha Mais Jovem, A Doce Bianca, Só Se Casará Depois Da Mais Velha, A Terrível Catarina. Quem Se Atreveria A Querer Conquistar O Coração De Catarina Só Mesmo O Louco Petrúquio, Que Se Revelaria Também Um Grande Estrategista. Divirta-Se Com Esta Comédia Do Século Xvi, Que Trata De Forma Hilariante A Sempre Atual Guerra Dos Sexos!', 3),
(7, 'O Idiota', 'Não Identificada', 3, 1, 2, 'o-idiota.jpg', 'Publicado por volta de 1868-1869, «O Idiota» é, porventura, o mais perfeito dos cinco grandes romances de Dostoiévski - na composição, no estilo, no aprofundamento dos personagens. Foi também, de todos os romances do autor, o mais incompreendido na sua época. Dostoiévski pretende, segundo as suas próprias palavras, «criar a imagem do homem positivamente bom», uma encarnação da beleza, da bondade e da humildade, figura de herói entre Dom Quixote e Cristo, mostrando o que pode acontecer a um homem assim, em contato com a realidade.', 4),
(8, 'Humilhados e Ofendidos', 'Não Identificada', 1, 1, 4, 'humilhados-e-ofendidos.jpg', 'Nesta obra, narrada pelo jovem escritor Ivan, dois enredos vão convergindo gradualmente. Natascha, amiga de infância e amada de Ivan, foge de casa dos pais para casar com Alyosha, o filho do Príncipe Valkovsky que não aprova esta união. Entretanto Ivan conhece Elena, uma órfã de treze anos, que é adotada por Nicolai, o pai de Natascha. E é ao contar a sua triste história que a menina consegue que Nicolai perdoe a sua filha. Uma narrativa envolvente e cativante onde o sofrimento humano é retratado com mestria.', 4),
(12, 'Carrie, a estranha', 'Não Identificada', 6, 1, 1, 'carrie-a-estranha.jpg', 'Carrie é uma adolescente tímida e solitária. Aos 16 anos, é completamente dominada pela mãe, uma fanática religiosa que reprime todas as vontades e descobertas normais aos jovens de sua idade. Para Carrie, tudo é pecado. Viver é enfrentar todo dia o terrível peso da culpa. Para os colegas de escola, e até para os professores, Carrie é uma garota estranha, incapaz de conviver com os outros. Cada vez mais isolada, ela sofre com o sarcasmo e o deboche dos colegas. No entanto, há um segredo por trás de sua aparência frágil...', 8),
(13, 'O corvo', ' Companhia das Letras', 6, 1, 3, 'o-corvo.jpg', 'A morte de uma mulher bela é, sem sombra de dúvida, o tema mais poético do mundo.\" Assim Edgar Allan Poe justificaria a gênese de \"O corvo\", poema publicado sob pseudônimo originalmente em 1845. Mas o que faz com que esses versos hipnotizantes sobre perda e desejo, escritos de modo tão calculado pelo mestre do terror há quase dois séculos, tenham merecido tantos elogios e tamanha controvérsia?\r\nNesta edição, o leitor vai conhecer as traduções mais notáveis de \"O corvo\" para a nossa língua ― as de Fernando Pessoa e Machado de Assis...', 9),
(15, 'A busca por Kadath e outros contos de arrepiar', 'Não Identificada', 6, 1, 1, 'a-busca-por-kadath-e-outros-contos-de-arrepiar.jpg', '\"Carter se perguntava como a Terra continuava a se estender Lá embaixo.\r\nTinha certeza de que estavam em um reino de noite eterna.\"\r\n\r\nNinguém nunca esteve em Kadath, ninguém nunca conseguiu chegar lá. Mas Randolph Carter conhecia seu significado.\r\nA busca por esse lugar onírico é uma das mais famosas viagens ao mundo de H.p. Lovecraft.', 10),
(16, 'Cristianismo puro e simples', 'Thomas Nelson Brasil', 7, 1, 3, 'cristianismo-puro-e-simples.jpg', 'Em um dos períodos mais sombrios da humanidade, a Segunda Guerra Mundial, C.S. Lewis foi convidado pela BBC a fazer uma série de palestras pelo rádio com o intuito de explicar bases da fé cristã de forma simples e clara. Mais tarde, ajustado pelo próprio Lewis, esse material daria origem a Cristianismo puro e simples, um grande clássico da literatura cristã.  ', 11),
(17, 'As crônicas de Nárnia - O leão, a feiticeira e o guarda-roupa: O leão, a feiticeira e o guarda-roupa', ' WMF Martins Fontes', 2, 2, 2, 'as-cronicas-de-narnia-o-leao-a-feiticeira-e-o-guarda-roupa-o-leao-a-feiticeira-e-o-guarda-roupa.jpg', '\'Dizem que Aslam está a caminho. Talvez já tenha chegado\', sussurrou o Castor. Edmundo experimentou uma misteriosa sensação de horror. Pedro sentiu-se valente e vigoroso. Para Susana, foi como se uma música deliciosa tivesse enchido o ar. E Lúcia teve aquele mesmo sentimento que nos desperta a chegada do verão. Assim, no coração da terra encantada de Nárnia, as crianças lançaram-se na mais excitante e mágica aventura que alguém já escreveu.', 11),
(18, 'O Deus que destrói sonhos', 'Thomas Nelson Brasil', 7, 1, 5, 'o-Deus-que-destroi-sonhos.jpg', 'O Deus cristão não pode ser domesticado. \r\n\r\nUma tentação constante que cerca a vida cristã é a inversão do chamado: a presunção de que Deus precisa abençoar nosso caminho e seguir nossos planos e sonhos. Essa postura é enganosa e faz parecer que Deus só é fiel quando nos abençoa. Mas e se Deus derrubar o nosso sorvete, ele deixa de ser fiel? Claro que não! Ele continua sendo um Pai sábio e um Deus misericordioso mesmo em meio às nossas frustrações. Às vezes, ele só quer chamar nossa atenção para o caminho certo. Você já deve ter testemunhado gente adulta se comportando como criança por não ter a vida que pediu a Deus. É porque pediu errado!  \r\n\r\nNeste livro, Rodrigo Bibo, do podcast Bibotalk, apresenta o caminho do discipulado, o meio para “sonhar” o que Deus já planejou. Aprenda a enxergar e seguir a vontade soberana de Deus expressa em Sua Palavra, tendo uma vida de serviço dedicada a Cristo. ', 12),
(19, 'Inteligência humilhada', 'Vida Nova', 7, 1, 3, 'inteligencia-humilhada.jpg', 'Inteligência humilhada é fruto de uma cuidadosa reflexão sobre como se relacionam o conhecimento de Deus e os limites da razão humana. Além disso, é o resgate de uma tradição do pensamento cristão que sempre se recusou a reduzir o debate entre fé e razão nos termos do racionalismo ou do fideísmo. A finalidade do conceito de “inteligência humilhada” é despertar o interesse por uma razão que ora e uma fé que pensa. Seguindo o conselho de João de Salisbúria, Jonas Madureira subiu nos ombros de cinco gigantes da tradição cristã: Agostinho de Hipona, Anselmo da Cantuária, João Calvino, Blaise Pascal e Herman Dooyeweerd. Todos eles serviram de ponto de partida e fundamentação do conceito. Ao longo deste livro, essas cinco vozes, sobretudo a de Agostinho, são ouvidas nos mais diversos assuntos: teologia propriamente dita, revelação natural, problema do mal, gramática da antropologia bíblica, formação de um teólogo entre outros.', 13),
(20, 'O custo do Discipulado', 'Editora Fiel', 7, 1, 3, 'o-custo-do-discipulado.jpg', 'O DISCIPULADO QUE NOS FAZ MAIS PARECIDOS COM JESUS Neste livro, Jonas Madureira nos apresenta o modelo mimético do discipulado cristão. Em sua abordagem, somos primeiro encorajados a ver em Cristo o modelo supremo a ser seguido em nossa vida cristã, e, a partir de Cristo, somos encorajados a ajudar pessoas a serem também imitadoras dele. Em O custo do discipulado, aprendemos que a chamada mais importante de nossa vida é seguir Jesus e que, ao segui-lo, assumimos também o compromisso de levar pessoas a segui-lo.', 13),
(21, 'O verdadeiro Evangelho', 'Editora Fiel', 7, 1, 2, 'verdadeiro-evangelho.jpg', 'Deus tem dado a Paul Washer uma mensagem oportuna e profética para a igreja dos nossos tempos. Ao analisar esta geração, ele afirma que o problema principal não é a dureza do evangelho, mas a ignorância de seu conteúdo. Como resposta a isso, Washer tem pregado em diversas ocasiões as verdades fundamentais do evangelho (o pecado do homem, a justiça de Deus, o sacrifício, a ressurreição de Cristo, etc). Baseado em várias exposições de Romanos 3, o Verdadeiro Evangelho busca apresentar aquilo que Deus fez em Cristo, a fim de ele mesmo ser justo e o justificador daquele que tem fé em Jesus (Rm 3:26).', 14),
(22, 'Assim falou Zaratustra', 'Martin Claret', 5, 1, 2, 'assim-falou-Zaratustra.jpg', 'Após dez anos de isolamento na montanha, Zaratustra decide voltar ao convívio dos homens, a fim de passar adiante o fruto de sua contemplação e anunciar a vinda do Übermensch, ou super-homem. A tarefa do profeta, contudo, será tortuosa, pois poucos são os eleitos e muitos os seus inimigos. Assim falou Zaratustra é um romance filosófico em que Nietzsche toma o nome do sábio persa criador do Zoroastrismo para esmiuçar algumas das questões fundamentais de sua obra, tais como a autossuperação e a necessidade de se libertar de qualquer força que iniba ou limite a vida e a vontade do indivíduo. Nietzsche é tão influente como controverso. Sua crítica à moral e aos valores judaico-cristãos ― um dos aspectos mais marcantes de sua obra ― não raro desperta a hostilidade de leitores e estudiosos. Contudo, suas contribuições marcaram o pensamento ocidental e são leitura obrigatória para qualquer interessado em filosofia.', 15),
(23, 'O Anticristo ', 'L&PM', 8, 1, 1, 'o-anticristo.jpg', 'Escrito em 1888, último ano antes de Friedrich Nietzsche perder a lucidez, este ensaio é uma das mais afiadas análises de que o cristianismo já foi objeto. Dando continuidade ao exame sobre a moral praticado na maioria de seus livros, em O anticristo o autor firma sua posição sobre a doutrina religiosa. Ele mostra como o cristianismo – ao qual chama de maldição – é a vitória dos fracos, doentes e rancorosos sobre os fortes, orgulhosos e saudáveis, persuadindo e induzindo a massa por meio de ideias pré-fabricadas. A partir da comparação com outras religiões, Nietzsche critica com veemência a mudança de foco que o cristianismo opera, uma vez que o centro da vida passa a ser o além e não o mundo presente. Até mesmo Jesus Cristo e o apóstolo Paulo são questionados, assim como grande parte de todos os dogmas cristãos, em um grande exercício filosófico.', 15),
(25, 'O nome do Vento', 'Arqueiro', 2, 1, 12, 'Nome_do_Vento.jpg', 'Ninguém sabe ao certo quem é o herói ou o vilão desse fascinante universo criado por Patrick Rothfuss. Na realidade, essas duas figuras se concentram em Kote, um homem enigmático que se esconde sob a identidade de proprietário da hospedaria Marco do Percurso.', 16);

-- --------------------------------------------------------

--
-- Estrutura da tabela `movimentacao`
--

CREATE TABLE `movimentacao` (
  `id_movimentacao` int NOT NULL,
  `data_saida_movimentacao` date DEFAULT NULL,
  `data_limite_movimentacao` date DEFAULT NULL,
  `data_volta_movimentacao` date DEFAULT NULL,
  `id_usuario` int NOT NULL,
  `id_livro` int NOT NULL,
  `id_status_movimentacao` int NOT NULL,
  `id_funcionario` int DEFAULT NULL COMMENT 'funcionario que fez a checagem da movimentação.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `movimentacao`
--

INSERT INTO `movimentacao` (`id_movimentacao`, `data_saida_movimentacao`, `data_limite_movimentacao`, `data_volta_movimentacao`, `id_usuario`, `id_livro`, `id_status_movimentacao`, `id_funcionario`) VALUES
(21, '2023-08-26', '2023-10-21', NULL, 9, 5, 3, 1),
(22, NULL, NULL, NULL, 9, 18, 3, NULL),
(23, '2023-08-26', '2023-09-02', '2023-08-26', 4, 7, 3, 1),
(24, '2023-10-28', '2023-11-28', '2023-10-28', 9, 5, 3, 1),
(26, NULL, NULL, NULL, 4, 1, 4, NULL),
(29, NULL, NULL, NULL, 10, 4, 4, NULL),
(31, NULL, NULL, NULL, 13, 3, 3, NULL),
(34, NULL, NULL, NULL, 10, 5, 4, NULL),
(35, '2023-10-28', '2023-10-31', NULL, 9, 4, 1, 1),
(49, NULL, NULL, '2023-11-11', 11, 2, 3, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sessao`
--

CREATE TABLE `sessao` (
  `id_sessao` int NOT NULL,
  `cargo_sessao` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sessao`
--

INSERT INTO `sessao` (`id_sessao`, `cargo_sessao`) VALUES
(1, 'usuÃ¡rio'),
(2, 'funcionario');

-- --------------------------------------------------------

--
-- Estrutura da tabela `status_movimentacao`
--

CREATE TABLE `status_movimentacao` (
  `id_status_movimentacao` int NOT NULL,
  `nome_status_movimentacao` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `status_movimentacao`
--

INSERT INTO `status_movimentacao` (`id_status_movimentacao`, `nome_status_movimentacao`) VALUES
(1, 'Em Andamento'),
(2, 'Atrasado'),
(3, 'Entregue'),
(4, 'Aguardando Retirada'),
(5, 'Cancelado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int NOT NULL,
  `nome_usuario` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email_usuario` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `data_usuario` date NOT NULL,
  `cpf_usuario` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `senha_usuario` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `endereco_usuario` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `telefone_usuario` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_sessao` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `email_usuario`, `data_usuario`, `cpf_usuario`, `senha_usuario`, `endereco_usuario`, `telefone_usuario`, `id_sessao`) VALUES
(4, 'Jose Eduardo', 'joseeduardo@gmail.com', '2004-03-14', '789456741', '$2y$10$4PokdWw7fSQEjfJmw1AZ4eoPMKsOWr9JUw33ZK2VcLMTGbEnI36oO', 'Rua do Pato', '156151664', 1),
(9, 'Igor Serafim Gonacalves', 'igorserafimn2@gmail.com', '2004-04-10', '41215451', '$2y$10$4PokdWw7fSQEjfJmw1AZ4eoPMKsOWr9JUw33ZK2VcLMTGbEnI36oO', 'Rua Da lagoa', '1197875', 1),
(10, 'Miguel', 'peewee@gmail.com.br', '2023-08-11', '14567912', '$2y$10$4PokdWw7fSQEjfJmw1AZ4eoPMKsOWr9JUw33ZK2VcLMTGbEnI36oO', 'Rua Da Fantasia', '1197875', 1),
(11, 'Douglas', 'teste@teste', '2023-08-20', '4814654', '$2y$10$4PokdWw7fSQEjfJmw1AZ4eoPMKsOWr9JUw33ZK2VcLMTGbEnI36oO', 'Rua do Indenpendencia', '944', 1),
(12, 'Leticia Camargo', 'leticiacamargo@gmail.com', '2023-09-29', '6525', '$2y$10$4PokdWw7fSQEjfJmw1AZ4eoPMKsOWr9JUw33ZK2VcLMTGbEnI36oO', 'Rua Carnot', '11978758727', 1),
(13, 'Vinicius', 'vinicius13@gmail.com', '2023-09-03', '15151', '$2y$10$4PokdWw7fSQEjfJmw1AZ4eoPMKsOWr9JUw33ZK2VcLMTGbEnI36oO', 'Rua Coronel Vasconcelho', '1197875872', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id_autor`);

--
-- Índices para tabela `favorito`
--
ALTER TABLE `favorito`
  ADD PRIMARY KEY (`id_favorito`),
  ADD KEY `id_livro` (`id_livro`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id_funcionario`),
  ADD UNIQUE KEY `CPF` (`cpf_funcionario`) USING BTREE,
  ADD UNIQUE KEY `EMAIL` (`email_funcionario`) USING BTREE,
  ADD KEY `fk_id_sessao` (`id_sessao`);

--
-- Índices para tabela `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Índices para tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`id_livro`),
  ADD KEY `fk_id_autor` (`id_autor`),
  ADD KEY `fk_id_genero` (`id_genero`);

--
-- Índices para tabela `movimentacao`
--
ALTER TABLE `movimentacao`
  ADD PRIMARY KEY (`id_movimentacao`),
  ADD KEY `fk_id_usuario` (`id_usuario`),
  ADD KEY `fk_id_livro` (`id_livro`),
  ADD KEY `fk_id_status` (`id_status_movimentacao`),
  ADD KEY `fk__checagem_funcionario` (`id_funcionario`) USING BTREE;

--
-- Índices para tabela `sessao`
--
ALTER TABLE `sessao`
  ADD PRIMARY KEY (`id_sessao`);

--
-- Índices para tabela `status_movimentacao`
--
ALTER TABLE `status_movimentacao`
  ADD PRIMARY KEY (`id_status_movimentacao`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `CPF` (`cpf_usuario`) USING BTREE,
  ADD UNIQUE KEY `EMAIL` (`email_usuario`) USING BTREE,
  ADD KEY `fk_sessao` (`id_sessao`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `id_autor` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `favorito`
--
ALTER TABLE `favorito`
  MODIFY `id_favorito` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id_funcionario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `genero`
--
ALTER TABLE `genero`
  MODIFY `id_genero` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `id_livro` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de tabela `movimentacao`
--
ALTER TABLE `movimentacao`
  MODIFY `id_movimentacao` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de tabela `sessao`
--
ALTER TABLE `sessao`
  MODIFY `id_sessao` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `status_movimentacao`
--
ALTER TABLE `status_movimentacao`
  MODIFY `id_status_movimentacao` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `favorito`
--
ALTER TABLE `favorito`
  ADD CONSTRAINT `id_livro` FOREIGN KEY (`id_livro`) REFERENCES `livro` (`id_livro`) ON UPDATE RESTRICT,
  ADD CONSTRAINT `id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `fk_id_sessao` FOREIGN KEY (`id_sessao`) REFERENCES `sessao` (`id_sessao`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `livro`
--
ALTER TABLE `livro`
  ADD CONSTRAINT `fk_id_autor` FOREIGN KEY (`id_autor`) REFERENCES `autor` (`id_autor`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_id_genero` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id_genero`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `movimentacao`
--
ALTER TABLE `movimentacao`
  ADD CONSTRAINT `fk_id_funcionario` FOREIGN KEY (`id_funcionario`) REFERENCES `funcionario` (`id_funcionario`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_id_livro` FOREIGN KEY (`id_livro`) REFERENCES `livro` (`id_livro`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_id_status` FOREIGN KEY (`id_status_movimentacao`) REFERENCES `status_movimentacao` (`id_status_movimentacao`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_sessao` FOREIGN KEY (`id_sessao`) REFERENCES `sessao` (`id_sessao`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
