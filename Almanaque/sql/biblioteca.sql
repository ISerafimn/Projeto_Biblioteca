-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 02/07/2023 às 01:34
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
(5, 'Jorge Luís Borges', 'Argentino', 1899, 1986),
(8, 'Stephen King', 'Estadunidense', 1947, NULL),
(9, 'Edgar Allan Poe ', 'Estadunidense', 1809, 1849),
(10, 'H.P. Lovecraft', 'Estadunidense', 1890, 1937),
(11, 'C.S Lewis', 'Reino Unido', 1898, 1963),
(12, 'Rodrigo Bibo', 'Brasil', 1985, NULL),
(13, 'Jonas Madureira', 'Brasil', 1976, NULL),
(14, 'Paul Washer', 'Estados Unidos', 1961, NULL),
(15, 'Friedrich Nietzsche', 'Alemanha', 1844, 1900),
(16, 'Niccolo Machiavelli', 'Itália', 1496, 1527);

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
(10, 'O aleph', 'Romance', 'Não Identificada', 1, 6, 'https://m.media-amazon.com/images/I/41e7Yq1honL.jpg', 'Publicado em 1949, O aleph é considerado pela crítica um dos pontos culminantes da ficção de Borges. Em sua maioria, \"as peças deste livro correspondem ao gênero fantástico\", esclarece o autor no epílogo da obra. Nelas, ele exerce seu modo característico de manipular a \"realidade\": as coisas da vida real deslizam para contextos incomuns e ganham significados extraordinários, ao mesmo tempo em que fenômenos bizarros se introduzem em cenários prosaicos. Os motivos borgeanos recorrentes do tempo, do infinito, da imortalidade e da perplexidade metafísica jamais se perdem na pura abstração; ao contrário, ganham carnadura concreta nas tramas, nas imagens, na sintaxe, que também são capazes de resgatar uma profunda sondagem do processo histórico argentino...', 5),
(11, 'It: A coisa', 'Terror', 'Não Identificada', 1, 2, 'https://m.media-amazon.com/images/I/51z0s3GcvwL._SX346_BO1,204,203,200_.jpg', 'Durante as férias de 1958, em uma pacata cidadezinha chamada Derry, um grupo de sete amigos começa a ver coisas estranhas. Um conta que viu um palhaço, outro que viu uma múmia. Finalmente, acabam descobrindo que estavam todos vendo a mesma coisa: um ser sobrenatural e maligno que pode assumir várias formas. É assim que Bill, Beverly, Eddie, Ben, Richie, Mike e Stan enfrentam a Coisa pela primeira vez...', 8),
(12, 'Carrie, a estranha', 'Terror', 'Não Identificada', 1, 1, 'https://m.media-amazon.com/images/I/51ca8fuem0L._SX331_BO1,204,203,200_.jpg', 'Carrie é uma adolescente tímida e solitária. Aos 16 anos, é completamente dominada pela mãe, uma fanática religiosa que reprime todas as vontades e descobertas normais aos jovens de sua idade. Para Carrie, tudo é pecado. Viver é enfrentar todo dia o terrível peso da culpa. Para os colegas de escola, e até para os professores, Carrie é uma garota estranha, incapaz de conviver com os outros. Cada vez mais isolada, ela sofre com o sarcasmo e o deboche dos colegas. No entanto, há um segredo por trás de sua aparência frágil...', 8),
(13, 'O corvo', 'Terror', ' Companhia das Letras', 1, 3, 'https://m.media-amazon.com/images/I/515xkV5l3XL._SX331_BO1,204,203,200_.jpg', 'A morte de uma mulher bela é, sem sombra de dúvida, o tema mais poético do mundo.\" Assim Edgar Allan Poe justificaria a gênese de \"O corvo\", poema publicado sob pseudônimo originalmente em 1845. Mas o que faz com que esses versos hipnotizantes sobre perda e desejo, escritos de modo tão calculado pelo mestre do terror há quase dois séculos, tenham merecido tantos elogios e tamanha controvérsia?\r\nNesta edição, o leitor vai conhecer as traduções mais notáveis de \"O corvo\" para a nossa língua ― as de Fernando Pessoa e Machado de Assis...', 9),
(14, 'O chamado de Cthulhu e outros contos', 'Terror', 'Não Identificada', 1, 3, 'https://m.media-amazon.com/images/I/51t-2xkikXL._SX331_BO1,204,203,200_.jpg', 'O Chamado de Cthulhu é um conto do norte-americano H.P. Lovecraft que logo se tornou um clássico do terror. Foi escrito em 1926 e publicado pela primeira vez na revista estadunidense Weird Tales em fevereiro de 1928. Cthulhu é um deus que nas primeiras páginas do conto aparece como um ídolo de argila quase indescritível, possuindo um culto multimilenar dedicado a trazê-lo de volta, o seu retorno desencadearia o fim da humanidade. Neste livro, encontramos esse clássico e mais sete contos consagrados do autor na literatura de terror.', 10),
(15, 'A busca por Kadath e outros contos de arrepiar', 'Terror', 'Não Identificada', 1, 1, 'https://m.media-amazon.com/images/I/51kkSKSfcBL.jpg', '\"Carter se perguntava como a Terra continuava a se estender Lá embaixo.\r\nTinha certeza de que estavam em um reino de noite eterna.\"\r\n\r\nNinguém nunca esteve em Kadath, ninguém nunca conseguiu chegar lá. Mas Randolph Carter conhecia seu significado.\r\nA busca por esse lugar onírico é uma das mais famosas viagens ao mundo de H.p. Lovecraft.', 10),
(16, 'Cristianismo puro e simples', 'Literatura cristã', 'Thomas Nelson Brasil', 1, 3, 'https://m.media-amazon.com/images/I/91YQ3e1VNKL.jpg', 'Em um dos períodos mais sombrios da humanidade, a Segunda Guerra Mundial, C.S. Lewis foi convidado pela BBC a fazer uma série de palestras pelo rádio com o intuito de explicar bases da fé cristã de forma simples e clara. Mais tarde, ajustado pelo próprio Lewis, esse material daria origem a Cristianismo puro e simples, um grande clássico da literatura cristã.  ', 11),
(17, 'As crônicas de Nárnia - O leão, a feiticeira e o guarda-roupa: O leão, a feiticeira e o guarda-roupa', 'Fantasia', ' WMF Martins Fontes', 2, 2, 'https://m.media-amazon.com/images/I/7158aW38zxL.jpg', '\'Dizem que Aslam está a caminho. Talvez já tenha chegado\', sussurrou o Castor. Edmundo experimentou uma misteriosa sensação de horror. Pedro sentiu-se valente e vigoroso. Para Susana, foi como se uma música deliciosa tivesse enchido o ar. E Lúcia teve aquele mesmo sentimento que nos desperta a chegada do verão. Assim, no coração da terra encantada de Nárnia, as crianças lançaram-se na mais excitante e mágica aventura que alguém já escreveu.', 11),
(18, 'O Deus que destrói sonhos', 'Literatura cristã', 'Thomas Nelson Brasil', 1, 5, 'https://m.media-amazon.com/images/I/51uLDBFvH4L._SX332_BO1,204,203,200_.jpg', 'O Deus cristão não pode ser domesticado. \r\n\r\nUma tentação constante que cerca a vida cristã é a inversão do chamado: a presunção de que Deus precisa abençoar nosso caminho e seguir nossos planos e sonhos. Essa postura é enganosa e faz parecer que Deus só é fiel quando nos abençoa. Mas e se Deus derrubar o nosso sorvete, ele deixa de ser fiel? Claro que não! Ele continua sendo um Pai sábio e um Deus misericordioso mesmo em meio às nossas frustrações. Às vezes, ele só quer chamar nossa atenção para o caminho certo. Você já deve ter testemunhado gente adulta se comportando como criança por não ter a vida que pediu a Deus. É porque pediu errado!  \r\n\r\nNeste livro, Rodrigo Bibo, do podcast Bibotalk, apresenta o caminho do discipulado, o meio para “sonhar” o que Deus já planejou. Aprenda a enxergar e seguir a vontade soberana de Deus expressa em Sua Palavra, tendo uma vida de serviço dedicada a Cristo. ', 12),
(19, 'Inteligência humilhada', 'Literatura cristã', 'Vida Nova', 1, 3, 'https://m.media-amazon.com/images/P/B0735JH8PQ.01._SCLZZZZZZZ_SX500_.jpg', 'Inteligência humilhada é fruto de uma cuidadosa reflexão sobre como se relacionam o conhecimento de Deus e os limites da razão humana. Além disso, é o resgate de uma tradição do pensamento cristão que sempre se recusou a reduzir o debate entre fé e razão nos termos do racionalismo ou do fideísmo. A finalidade do conceito de “inteligência humilhada” é despertar o interesse por uma razão que ora e uma fé que pensa. Seguindo o conselho de João de Salisbúria, Jonas Madureira subiu nos ombros de cinco gigantes da tradição cristã: Agostinho de Hipona, Anselmo da Cantuária, João Calvino, Blaise Pascal e Herman Dooyeweerd. Todos eles serviram de ponto de partida e fundamentação do conceito. Ao longo deste livro, essas cinco vozes, sobretudo a de Agostinho, são ouvidas nos mais diversos assuntos: teologia propriamente dita, revelação natural, problema do mal, gramática da antropologia bíblica, formação de um teólogo entre outros.', 13),
(20, 'O custo do Discipulado', 'Literatura cristã', 'Editora Fiel', 1, 3, 'https://m.media-amazon.com/images/I/51NQiWbfrPL._SX331_BO1,204,203,200_.jpg', 'O DISCIPULADO QUE NOS FAZ MAIS PARECIDOS COM JESUS Neste livro, Jonas Madureira nos apresenta o modelo mimético do discipulado cristão. Em sua abordagem, somos primeiro encorajados a ver em Cristo o modelo supremo a ser seguido em nossa vida cristã, e, a partir de Cristo, somos encorajados a ajudar pessoas a serem também imitadoras dele. Em O custo do discipulado, aprendemos que a chamada mais importante de nossa vida é seguir Jesus e que, ao segui-lo, assumimos também o compromisso de levar pessoas a segui-lo.', 13),
(21, 'O verdadeiro Evangelho', 'Literatura cristã', 'Editora Fiel', 1, 2, 'https://m.media-amazon.com/images/I/51GMzLzGPEL._SX374_BO1,204,203,200_.jpg', 'Deus tem dado a Paul Washer uma mensagem oportuna e profética para a igreja dos nossos tempos. Ao analisar esta geração, ele afirma que o problema principal não é a dureza do evangelho, mas a ignorância de seu conteúdo. Como resposta a isso, Washer tem pregado em diversas ocasiões as verdades fundamentais do evangelho (o pecado do homem, a justiça de Deus, o sacrifício, a ressurreição de Cristo, etc). Baseado em várias exposições de Romanos 3, o Verdadeiro Evangelho busca apresentar aquilo que Deus fez em Cristo, a fim de ele mesmo ser justo e o justificador daquele que tem fé em Jesus (Rm 3:26).', 14),
(22, 'Assim falou Zaratustra', 'Romance filosófico', 'Martin Claret', 1, 2, 'https://m.media-amazon.com/images/I/51+cuZsnIrS._SX312_BO1,204,203,200_.jpg', 'Após dez anos de isolamento na montanha, Zaratustra decide voltar ao convívio dos homens, a fim de passar adiante o fruto de sua contemplação e anunciar a vinda do Übermensch, ou super-homem. A tarefa do profeta, contudo, será tortuosa, pois poucos são os eleitos e muitos os seus inimigos. Assim falou Zaratustra é um romance filosófico em que Nietzsche toma o nome do sábio persa criador do Zoroastrismo para esmiuçar algumas das questões fundamentais de sua obra, tais como a autossuperação e a necessidade de se libertar de qualquer força que iniba ou limite a vida e a vontade do indivíduo. Nietzsche é tão influente como controverso. Sua crítica à moral e aos valores judaico-cristãos ― um dos aspectos mais marcantes de sua obra ― não raro desperta a hostilidade de leitores e estudiosos. Contudo, suas contribuições marcaram o pensamento ocidental e são leitura obrigatória para qualquer interessado em filosofia.', 15),
(23, 'O Anticristo ', 'Filisofia', 'L&PM', 1, 1, 'https://m.media-amazon.com/images/I/41h6cOG0U3L._SX298_BO1,204,203,200_.jpg', 'Escrito em 1888, último ano antes de Friedrich Nietzsche perder a lucidez, este ensaio é uma das mais afiadas análises de que o cristianismo já foi objeto. Dando continuidade ao exame sobre a moral praticado na maioria de seus livros, em O anticristo o autor firma sua posição sobre a doutrina religiosa. Ele mostra como o cristianismo – ao qual chama de maldição – é a vitória dos fracos, doentes e rancorosos sobre os fortes, orgulhosos e saudáveis, persuadindo e induzindo a massa por meio de ideias pré-fabricadas. A partir da comparação com outras religiões, Nietzsche critica com veemência a mudança de foco que o cristianismo opera, uma vez que o centro da vida passa a ser o além e não o mundo presente. Até mesmo Jesus Cristo e o apóstolo Paulo são questionados, assim como grande parte de todos os dogmas cristãos, em um grande exercício filosófico.', 15),
(24, 'O Príncipe Maquiavel', 'não ficção ', 'Pé da Letra', 1, 2, 'https://m.media-amazon.com/images/I/41I2nopLitL._SX324_BO1,204,203,200_.jpg', 'Mesmo que você nunca tenha ouvido falarem nicolau maquiavel, deve conhecer o termo maquiavélico. Dizemos que uma pessoa a e maquiavélica quando faz qualquer coisas para atingir seu objetivo. Os gins justificam os meios. Esta e a síntese do pensamento maquiavélico que conhecemos hoje. Porem, ao contrário do que muita gente pensa, essa frase não esta em nenhum livro.', 16);

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
  MODIFY `id_autor` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id_funcionario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `id_livro` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
