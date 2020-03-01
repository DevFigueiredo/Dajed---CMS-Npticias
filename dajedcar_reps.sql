-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 01/03/2020 às 12:39
-- Versão do servidor: 5.6.47-cll-lve
-- Versão do PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dajedcar_reps`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `estudante`
--

CREATE TABLE `estudante` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `genero` varchar(100) DEFAULT NULL,
  `telefone` varchar(12) DEFAULT NULL,
  `sobre_mim` text,
  `curso` varchar(250) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `republica_contato`
--

CREATE TABLE `republica_contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `idade` varchar(20) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `curso` varchar(250) NOT NULL,
  `sexo` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mensagem` text NOT NULL,
  `fk_republica` int(11) NOT NULL,
  `tempo` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `republica_contato`
--

INSERT INTO `republica_contato` (`id`, `nome`, `idade`, `telefone`, `curso`, `sexo`, `email`, `mensagem`, `fk_republica`, `tempo`) VALUES
(57, 'Amanda', '19', '85982185961', 'analise e desenvolvimento de sistemas', 'Feminino', 'allonsmandy@gmail.com', 'oi gente, entao, eu nao passei no ifsp ainda, to em 44 lugar de 20 vagas kkkk mas eu gostaria de entrar logo em contato pra saber de valores e mais informações, se nao der agora tento ir no meio do ano! vamos conversar?', 4, '0000-00-00 00:00:00'),
(59, 'Rafaela', '21', '11959776926', 'Engenharia ', 'Feminino', 'rafaelaaparecidasr@hotmail.com', 'Sou do 3 semestre de engenharia, gostaria de saber valor, e se os quartos são separados entra homem e mulher ', 3, '0000-00-00 00:00:00'),
(61, 'Paola Kamila Jardim Lopes', '18', '11946330328', 'Engenheira Civil', 'Feminino', 'paolakkonka@gmail.com', '\r\n.', 6, '0000-00-00 00:00:00'),
(62, 'Leticia Marques', '17', '19986094895', 'Engenharia Civil', 'Feminino', 'letejumarques02@gmail.com', 'Calma e com foco nos estudos', 7, '0000-00-00 00:00:00'),
(63, 'Leticia Marques', '17', '19986094895', 'Engenharia Civil', 'Feminino', 'letejumarques02@gmail.com', 'Calma e com foco nos estudos', 6, '0000-00-00 00:00:00'),
(64, 'DANILO HENRIQUE OLIVEIRA SOUZA', '22', '12996257525', 'Tecnologia em Analise e Desenvolvimento de Sistemas', 'Masculino', 'danilohensouza@gmail.com', 'Já venho de duas universidades,  UNESP  e IF Bragança Paulista.  Já tenho experiência em dividir quarto e casa e sempre priorizei o diálogo nas resoluções de problemas.  Acho que é só isso, me contratem por favor kkkk', 3, '0000-00-00 00:00:00'),
(65, 'Jhenifer ', '19', '11985600157', 'matemática ', 'Feminino', 'jheniferbarretto@outlook.com', 'provavelmente vou cursar matemática agora no primeiro semestre, estou esperando a lista de espera sair. mas como não tenho onde ficar se passar, estou vendo lugares pra morar. gostei muita da rep de vcs, principalmente pq queria morar só com meninas e tbm por ser bem perto da facul. Queria poder entrar em contato pra conhecer vcs, saber mais detalhes, preços certinhos e tal', 6, '0000-00-00 00:00:00'),
(66, 'Rodrigo', '29', '18996602503', 'Professor', 'Masculino', 'rodrigohist_ufms@hotmail.com', 'Novo em caraguá, vim pra dar aula.', 3, '0000-00-00 00:00:00'),
(67, 'jhenifer Barretto ', '19', '11985600157', 'Matemática ', 'Feminino', 'jheniferbarretto@outlook.com', 'Tenho 19 anos, sou de sp capital, passei em matemática agora no primeiro semestre e to procurando um lugar pra morar. ', 6, '0000-00-00 00:00:00'),
(68, 'jhenifer barretto ', '19', '11985600157', 'matemática ', 'Feminino', 'jheniferbarretto@outlook.com', 'Tenho 19 anos, sou de São Paulo capital, passei em matemática agora no 1º semestre e to procurando lugar pra morar. ', 4, '0000-00-00 00:00:00'),
(69, 'Miguel Palmeira', '17', '12996320142', 'Eng Civil', 'Masculino', 'miguel-palmeira@hotmail.com', 'Tô procurando uma rep pra morarrr, qual seria o preço + - ?', 3, '0000-00-00 00:00:00'),
(72, 'Lucas Dionisio Alves Gianfaldoni', '17', '12992581368', 'Fisica', 'Masculino', 'lucasgianfaldoni@gmail.com', 'Sou joseense, estou procurando algum local para me hospedar sendo república ou kitnet, sou bem de boas e eclético', 3, '0000-00-00 00:00:00'),
(75, 'Matheus', '25', '18996061598', 'Matemática', 'Masculino', 'matheus.bocardo@hotmail.com', 'Sou de Osvaldo druz, preciso de um local urgente ', 3, '0000-00-00 00:00:00'),
(77, 'Thaisa Iugas de Lima', '18', '11974825222', 'Matemática', 'Feminino', 'thaisa.iugaslima@gmail.com', 'Me chamo Thaisa Iugas de Lima e tenho 18 anos de idade.... Moro em Jundiaí e irei fazer o curso de matemática na IFSP.... Gostaria de entrar em contato com vocês para arrumar uma república..... Irei amanhã para realizar a inscrição e queria conhecer a república de vocês!!!', 4, '0000-00-00 00:00:00'),
(83, 'Thaisa Iugas de Lima', '18', '11974825222', 'Matemática', 'Feminino', 'thaisa.iugaslima@gmail.com', 'Me chamo Thaisa Iugas de Lima e tenho 18 anos de idade.... Moro em Jundiaí e irei fazer o curso de matemática na IFSP.... Gostaria de entrar em contato com vocês para arrumar uma república..... Irei amanhã para realizar a inscrição e queria conhecer a república de vocês!!!', 6, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `republica_formulario`
--

CREATE TABLE `republica_formulario` (
  `id` int(11) NOT NULL,
  `questao` varchar(250) DEFAULT NULL,
  `tipo_questao` int(1) NOT NULL,
  `fk_republica` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `republica_formulario`
--

INSERT INTO `republica_formulario` (`id`, `questao`, `tipo_questao`, `fk_republica`) VALUES
(7, 'Você Fuma?', 2, 1),
(8, 'Você Bebe?', 2, 1),
(9, 'Você é sociável ?', 2, 1),
(10, 'Você gosta de tecnologia ?', 2, 1),
(11, 'Você vem de onde ?', 1, 1),
(12, 'Por que escolheu morar em Republica ?', 3, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `republica_formulario_respostas`
--

CREATE TABLE `republica_formulario_respostas` (
  `id` int(11) NOT NULL,
  `resposta` text,
  `fk_questao_formulario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `republica_imagens`
--

CREATE TABLE `republica_imagens` (
  `id` int(11) NOT NULL,
  `principal` tinyint(1) DEFAULT NULL,
  `imagem` varchar(250) DEFAULT NULL,
  `fk_republica` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `republica_imagens`
--

INSERT INTO `republica_imagens` (`id`, `principal`, `imagem`, `fk_republica`) VALUES
(1, 1, 'images/rep1.jpg', 1),
(2, 0, 'images/rep2.jpg', 1),
(3, 0, 'images/rep3.jpg', 1),
(4, 0, 'images/rep4.jpg', 1),
(6, 1, 'images/rep_pokas/ju1.jpeg', 4),
(7, 0, 'images/rep_pokas/ju2.jpeg', 4),
(8, 0, 'images/rep_pokas/ju3.jpeg', 4),
(9, 0, 'images/rep_pokas/ju4.jpeg', 4),
(10, 0, 'images/rep_pokas/ju5.jpeg', 4),
(11, 0, 'images/rep_pokas/ju6.jpeg', 4),
(12, 0, 'images/rep_pokas/ju7.jpeg', 4),
(13, 0, 'images/rep_pokas/ju8.jpeg', 4),
(14, 0, 'images/rep_pokas/ju9.jpeg', 4),
(15, 0, 'images/rep_pokas/ju10.jpeg', 4),
(16, 0, 'images/rep_pokas/ju11.jpeg', 4),
(17, 0, 'images/rep_pokas/ju12.jpeg', 4),
(18, 0, 'images/rep_pokas/ju13.jpeg', 4),
(19, 0, 'images/rep_pokas/ju14.jpeg', 4),
(20, 0, 'images/rep_pokas/ju15.jpeg', 4),
(21, 1, 'images/nova_rep/nova_rep.jpeg', 3),
(22, NULL, 'images/nova_rep/nova_rep_1.jpeg', 3),
(23, NULL, 'images/nova_rep/nova_rep_2.jpeg', 3),
(24, NULL, 'images/nova_rep/nova_rep_3.jpeg', 3),
(25, NULL, 'images/nova_rep/nova_rep_4.jpeg', 3),
(26, NULL, 'images/nova_rep/nova_rep_5.jpeg', 3),
(27, NULL, 'images/nova_rep/nova_rep_6.jpeg', 3),
(28, NULL, 'images/nova_rep/nova_rep_7.jpeg', 3),
(29, NULL, 'images/nova_rep/nova_rep_8.jpeg', 3),
(30, NULL, 'images/nova_rep/nova_rep_9.jpeg', 3),
(31, NULL, 'images/nova_rep/nova_rep_10.jpeg', 3),
(32, NULL, 'images/nova_rep/nova_rep_11.jpeg', 3),
(33, NULL, 'images/nova_rep/nova_rep_12.jpeg', 3),
(34, NULL, 'images/nova_rep/nova_rep_13.jpeg', 3),
(35, NULL, 'images/nova_rep/nova_rep_14.jpeg', 3),
(36, NULL, 'images/nova_rep/nova_rep_15.jpeg', 3),
(37, NULL, 'images/nova_rep/nova_rep_16.jpeg', 3),
(38, NULL, 'images/nova_rep/nova_rep_17.jpeg', 3),
(39, NULL, 'images/nova_rep/nova_rep_18.jpeg', 3),
(40, NULL, 'images/nova_rep/nova_rep_19.jpeg', 3),
(41, NULL, 'images/nova_rep/nova_rep_20.jpeg', 3),
(42, NULL, 'images/nova_rep/nova_rep_21.jpeg', 3),
(43, NULL, 'images/nova_rep/nova_rep_22.jpeg', 3),
(44, NULL, 'images/nova_rep/nova_rep_23.jpeg', 3),
(45, NULL, 'images/nova_rep/nova_rep_24.jpeg', 3),
(46, NULL, 'images/nova_rep/nova_rep_25.jpeg', 3),
(47, 1, 'images/Rep_matemagicos/5e32428d6619b.jpeg', 6),
(48, 0, 'images/Rep_matemagicos/5e32428da8b41.jpeg', 6),
(49, 0, 'images/Rep_matemagicos/5e3242902c95b.jpeg', 6),
(50, 0, 'images/Rep_matemagicos/5e3242908b8cf.jpeg', 6),
(51, 1, 'images/Rep._das_meninas/5e3242c77328c.jpeg', 7),
(52, 0, 'images/Rep._das_meninas/5e3242c787ba4.jpeg', 7);

-- --------------------------------------------------------

--
-- Estrutura para tabela `republica_info`
--

CREATE TABLE `republica_info` (
  `id` int(11) NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  `titulo` varchar(250) DEFAULT NULL,
  `fk_responsavel` int(11) DEFAULT NULL,
  `capacidade` int(2) DEFAULT NULL,
  `descricao` text,
  `qtd_quartos` int(2) DEFAULT NULL,
  `qtd_banheiros` int(11) NOT NULL,
  `tam_quarto` varchar(100) NOT NULL,
  `qtd_quintal` int(11) NOT NULL,
  `qtd_garagem` int(11) NOT NULL,
  `qtd_vagas` int(11) NOT NULL,
  `perfil_republica` text,
  `telefone` varchar(12) DEFAULT NULL,
  `valor_total` varchar(10) DEFAULT NULL,
  `pessoas_quarto` int(11) NOT NULL,
  `localizacao` text NOT NULL,
  `bairro` varchar(200) NOT NULL,
  `fk_republica_tipo` int(11) NOT NULL,
  `esgotado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `republica_info`
--

INSERT INTO `republica_info` (`id`, `ativo`, `titulo`, `fk_responsavel`, `capacidade`, `descricao`, `qtd_quartos`, `qtd_banheiros`, `tam_quarto`, `qtd_quintal`, `qtd_garagem`, `qtd_vagas`, `perfil_republica`, `telefone`, `valor_total`, `pessoas_quarto`, `localizacao`, `bairro`, `fk_republica_tipo`, `esgotado`) VALUES
(1, 0, 'Coalas Rep', 1, 4, 'Casa muito top para voce morar com a gente, e o povo é tudo estudioso. \r\n\r\nMas o condominio é charo pra caralho', 1, 1, '10', 0, 1, 2, 'Pessoas legais pra caralho', '(12)98148265', '400,00', 4, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.1661002677592!2d-45.433374285382044!3d-23.63422187017132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cd633fe3342473%3A0x2af6710d56d785d2!2sR.%20Jorge%20Leite%20Vieira%2C%20100%20-%20Poiares%2C%20Caraguatatuba%20-%20SP%2C%2011673-010!5e0!3m2!1spt-BR!2sbr!4v1579560449553!5m2!1spt-BR!2sbr\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>', '', 1, 0),
(3, 1, 'República Sendo Montada - Elke', 2, 10, 'República Mista sendo montada, caso se interesse se inscreva no site ou entre em contato pelo Whatsapp do site.<br/>\r\n\r\nCasa muito interessante e será uma república muito organizada e focada para os estudos\r\n', 4, 3, 'N/A', 1, 1, 12, 'Casa grande com 4 quartos, sala, cozinha, quintal gigante, piscina,  área de plantas, lavanderia...', '12981806877\r', 'A COMBINAR', 3, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.9669368454242!2d-45.42709708502075!3d-23.641355084643358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cd631a6d88ba8d%3A0xfd4b429dd6d01fe1!2sR.%20Gen.%20Os%C3%B3rio%2C%20196%20-%20Parque%20Balneario%20Poiares%2C%20Caraguatatuba%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1580353405098!5m2!1spt-BR!2sbr\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>', 'Indaiá', 3, 0),
(4, 1, 'Rep Pokas', 3, 9, ' \r\nQuartos grandes com ar condicionado, camas de casal.\r\nDuas salas, uma de estudo com mesa de vidro para 8 pessoas. \r\nDuas cozinhas com fogão geladeira, panelas, pratos.<br/>\r\nÁrea de serviço com tanque e máquina de lavar.\r\nPiscina.<br/>\r\nRep apenas para meninas, bairro populoso sem perigo, rua próxima a feira de quinta e domingo, supermercado', 4, 4, 'N/A', 1, 10, 9, 'REPUBLICA FEMININA ', ' 11 97405160', 'A COMBINAR', 2, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.1659630722997!2d-45.43337428502092!3d-23.634226784646803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cd633fe3342473%3A0x2af6710d56d785d2!2sR.%20Jorge%20Leite%20Vieira%2C%20100%20-%20Poiares%2C%20Caraguatatuba%20-%20SP%2C%2011673-010!5e0!3m2!1spt-BR!2sbr!4v1579611885831!5m2!1spt-BR!2sbr\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>', 'Indaiá', 2, 0),
(6, 1, 'Rep matemágicos', 4, 4, 'Uma sala, duas sacadas com vista para o mar, uma cozinha, uma lavanderia, dois banheiros, um quarto, uma suíte, duas vagas na garagem, ducha e bicicletário\r\n\r\n<br><strong>O valor da Republica é considerado apenas  o Condomínio, Água e o valor do Aluguel.\r\n- Demais despesas são a parte.</strong>', 2, 1, 'N/A', 0, 0, 2, 'Gostamos de sair bastante, somos extrovertidas, organizadas e estudamos juntas :D', '12 99781-510', '290', 2, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.0892276857426!2d-45.42530188538197!3d-23.63697537027321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cd6311bbb81e7f%3A0x2e98daadd3569ebc!2sAv.%20Minas%20Gerais%2C%201505%20-%20Indai%C3%A1%2C%20Caraguatatuba%20-%20SP%2C%2011665-280!5e0!3m2!1spt-BR!2sbr!4v1580316813358!5m2!1spt-BR!2sbr\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>', 'Indaia', 2, 0),
(7, 1, ' Rep. das meninas', 5, 3, 'Descrição: Uma vaga disponível para ocupar um quarto individual em um apartamento em condomínio fechado. \r\n', 2, 1, 'N/A', 1, 1, 1, ' Rep para meninas com foco nos estudos e boa convivência. Apartamento para maior segurança. ', '(11)99476727', 'A Combinar', 2, '', 'Indaia', 2, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `republica_regras`
--

CREATE TABLE `republica_regras` (
  `id` int(11) NOT NULL,
  `regra` varchar(250) DEFAULT NULL,
  `fk_republica` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `republica_regras`
--

INSERT INTO `republica_regras` (`id`, `regra`, `fk_republica`) VALUES
(1, 'Proibido Fumar', 1),
(2, 'Proibido Beber', 1),
(4, 'Será realizado um contrato com as regras', 3),
(5, 'Será feito contrato com os pais dos alunos sobre as regras da república', 1),
(8, 'Avisar quanto vier convidados', 4),
(9, 'Limpeza por conta dos moradores', 4),
(10, 'Regras restritas somente ao responsável da republica que fará uma entrevista com os interessados através do primeiro contato ', 7);

-- --------------------------------------------------------

--
-- Estrutura para tabela `republica_responsavel`
--

CREATE TABLE `republica_responsavel` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) DEFAULT NULL,
  `idade` varchar(2) DEFAULT NULL,
  `genero` varchar(100) DEFAULT NULL,
  `curso` varchar(250) DEFAULT NULL,
  `telefone` varchar(12) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `usuario` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `ativo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `republica_responsavel`
--

INSERT INTO `republica_responsavel` (`id`, `nome`, `idade`, `genero`, `curso`, `telefone`, `email`, `usuario`, `senha`, `ativo`) VALUES
(1, 'Daniel', '20', 'Masculino', 'Analise e Desenv. Sistemas', '12981948265', 'miranda.f@aluno.ifsp.edu.br', 'daniel.figueiredo', 'sapato521', 1),
(2, 'Elke Fabiana', '34', 'Feminino', 'Analise e Desenv. de Sitemas', '1283383829', 'elkefabiana@ifspcaragua.net', 'elke.fabiana', 'didico12', 1),
(3, 'Juliana Caroline da Silva Sousa', '21', 'Feminino', 'Matematica', '11974051602', 'julianacaroline.ifsp@gmail.com', 'juliana.caroline', 'hd87g238gd3g196d8', 0),
(4, 'Camila Ferreira Alves', '18', 'Feminino', 'Matemática', '12997815104', 'camila.ferreeirah@gmail.com', 'camila.ferreira', '12345678uhgvcdfr', 1),
(5, 'Amanda Cristina', '21', 'femenino', 'Engenharia Civil', '(11)99476727', 'amanda1cristina1@gmail.com', 'AmandaCristina', 'didikp', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `republica_tags`
--

CREATE TABLE `republica_tags` (
  `id` int(11) NOT NULL,
  `nome_tag` varchar(100) DEFAULT NULL,
  `fk_republica` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `republica_tags`
--

INSERT INTO `republica_tags` (`id`, `nome_tag`, `fk_republica`) VALUES
(1, 'Amigavel', 1),
(2, 'Perto do IFSP', 1),
(3, 'Apartamento', 1),
(4, 'Churrasqueira', 1),
(5, 'Piscina', 1),
(6, 'Sociavel', 3),
(7, 'Ar Condicionado', 4),
(8, ' 800 Metros do IFSP', 4),
(9, 'Piscina', 4),
(10, 'Churrasqueira', 4),
(11, 'Amigavel', 3),
(12, 'Perto do IFSP', 3),
(13, 'Sociavel', 3),
(14, 'Piscina', 3),
(15, 'Churrasqueira', 3),
(18, 'Próximo ao IFSP   ', 7),
(19, 'Seguro ', 7),
(20, 'Foco em Estudos', 7),
(21, 'Calmo', 7),
(22, 'Residencial Marseille', 6),
(23, '3 ruas da faculdade', 6);

-- --------------------------------------------------------

--
-- Estrutura para tabela `republica_tipo`
--

CREATE TABLE `republica_tipo` (
  `id` int(11) NOT NULL,
  `tipo` varchar(250) DEFAULT NULL,
  `cor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `republica_tipo`
--

INSERT INTO `republica_tipo` (`id`, `tipo`, `cor`) VALUES
(1, 'HOMENS', 'tag_new'),
(2, 'MULHERES', 'tag_featured'),
(3, 'MISTA', 'tag_offer');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `estudante`
--
ALTER TABLE `estudante`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `republica_contato`
--
ALTER TABLE `republica_contato`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_republica` (`fk_republica`);

--
-- Índices de tabela `republica_formulario`
--
ALTER TABLE `republica_formulario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_republica` (`fk_republica`);

--
-- Índices de tabela `republica_formulario_respostas`
--
ALTER TABLE `republica_formulario_respostas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_questao_formulario` (`fk_questao_formulario`);

--
-- Índices de tabela `republica_imagens`
--
ALTER TABLE `republica_imagens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_republica` (`fk_republica`);

--
-- Índices de tabela `republica_info`
--
ALTER TABLE `republica_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_responsavel` (`fk_responsavel`),
  ADD KEY `fk_republica_tipo` (`fk_republica_tipo`);

--
-- Índices de tabela `republica_regras`
--
ALTER TABLE `republica_regras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_republica` (`fk_republica`);

--
-- Índices de tabela `republica_responsavel`
--
ALTER TABLE `republica_responsavel`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `republica_tags`
--
ALTER TABLE `republica_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_republica` (`fk_republica`);

--
-- Índices de tabela `republica_tipo`
--
ALTER TABLE `republica_tipo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `estudante`
--
ALTER TABLE `estudante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `republica_contato`
--
ALTER TABLE `republica_contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT de tabela `republica_formulario`
--
ALTER TABLE `republica_formulario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `republica_formulario_respostas`
--
ALTER TABLE `republica_formulario_respostas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `republica_imagens`
--
ALTER TABLE `republica_imagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de tabela `republica_info`
--
ALTER TABLE `republica_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `republica_regras`
--
ALTER TABLE `republica_regras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `republica_responsavel`
--
ALTER TABLE `republica_responsavel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `republica_tags`
--
ALTER TABLE `republica_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `republica_tipo`
--
ALTER TABLE `republica_tipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `republica_contato`
--
ALTER TABLE `republica_contato`
  ADD CONSTRAINT `republica_contato_ibfk_1` FOREIGN KEY (`fk_republica`) REFERENCES `republica_info` (`id`);

--
-- Restrições para tabelas `republica_formulario`
--
ALTER TABLE `republica_formulario`
  ADD CONSTRAINT `republica_formulario_ibfk_1` FOREIGN KEY (`fk_republica`) REFERENCES `republica_info` (`id`);

--
-- Restrições para tabelas `republica_formulario_respostas`
--
ALTER TABLE `republica_formulario_respostas`
  ADD CONSTRAINT `republica_formulario_respostas_ibfk_1` FOREIGN KEY (`fk_questao_formulario`) REFERENCES `republica_formulario` (`id`);

--
-- Restrições para tabelas `republica_imagens`
--
ALTER TABLE `republica_imagens`
  ADD CONSTRAINT `republica_imagens_ibfk_1` FOREIGN KEY (`fk_republica`) REFERENCES `republica_info` (`id`);

--
-- Restrições para tabelas `republica_info`
--
ALTER TABLE `republica_info`
  ADD CONSTRAINT `fk_republica_tipo` FOREIGN KEY (`fk_republica_tipo`) REFERENCES `republica_tipo` (`id`),
  ADD CONSTRAINT `republica_info_ibfk_1` FOREIGN KEY (`fk_responsavel`) REFERENCES `republica_responsavel` (`id`);

--
-- Restrições para tabelas `republica_regras`
--
ALTER TABLE `republica_regras`
  ADD CONSTRAINT `republica_regras_ibfk_1` FOREIGN KEY (`fk_republica`) REFERENCES `republica_info` (`id`);

--
-- Restrições para tabelas `republica_tags`
--
ALTER TABLE `republica_tags`
  ADD CONSTRAINT `republica_tags_ibfk_1` FOREIGN KEY (`fk_republica`) REFERENCES `republica_info` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
