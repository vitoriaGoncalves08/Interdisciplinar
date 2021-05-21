-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Maio-2021 às 03:15
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbinterdiciplinar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpalavra`
--

CREATE TABLE `tbpalavra` (
  `idPalavra` int(11) NOT NULL,
  `nomePalavra` varchar(100) NOT NULL DEFAULT '',
  `traducaoPalavra` varchar(100) NOT NULL DEFAULT '',
  `descricaoPalavra` varchar(4000) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbpalavra`
--

INSERT INTO `tbpalavra` (`idPalavra`, `nomePalavra`, `traducaoPalavra`, `descricaoPalavra`) VALUES
(1, 'Algorithm', 'Algoritmo', 'Uma série de instruções ou passos de procedimentos para a\r\nsolução de um problema específico.'),
(2, 'Caption', 'Legenda', 'Legenda, título ou cabeçalho.'),
(3, 'Alt Key', 'Tecla Alt', 'Tecla especial em um teclado de pc usada para ativar funções especiais.'),
(4, 'Flowchart', 'Gráfico', 'Gráfico/Diagrama que mostra a informação como uma série de linhas ou blocos.'),
(5, 'Amplifier', 'Amplificador', 'Equipamento que utiliza uma pequena quantidade de energia para controlar uma quantidade maior.'),
(6, 'Close File', 'Fecha arquivo', 'Função que executa o fechamento de um arquivo dentro de um programa.'),
(7, 'Analog or Digital Converter', 'Conversor Analógico ou Digital', 'Circuito eletrônico que tem a função de converter uma grandeza digital em uma grandeza analógica (ou vice-versa).'),
(8, 'Data Control', 'Controle de Dados', 'Controle de dados, gerenciamento de dados.'),
(9, 'Auto Activate', 'Ativar Automaticamente', 'Função que permite a ativação automática de algo.'),
(10, 'Backup(No MS-DOS)', 'Cópia de segurança', 'Comando para salvar dados de um disco rígido em disquet,       Copia arquivos de uma origem para um destino.'),
(11, 'BOS(BASIC OPERATING SYSTEM)', 'Sistema Operacional Básico', 'É o conjunto de programas que gerenciam recursos, processadores, armazenamento, dispositivos de entrada e saída e dados da máquina e seus periféricos. O Sistema Operacional cria uma plataforma comum.'),
(12, 'Button', 'Botão', 'Elementos interativos da interface, que permitem que os usuários acessem funcionalidades, executem ações ou naveguem pela interface.'),
(13, 'Bug', 'Inseto(de forma geral)', 'Erro, falha em programas de Software.'),
(14, 'Byte', 'Grupo de bites ou dígitos binários', 'É uma unidade de informação digital equivalente a oito bits.'),
(15, 'CapsLock', 'Trava das Maiúsculas', 'Tecla que permite que todos os caracteres sejam digitados em maiúsculos.'),
(16, 'Compiler', 'Compilar', 'Converter um programa de linguagem de alto nivel em programa em código de máquina que pode ser executado diretamente.'),
(17, 'Data Field', 'Campo de Dados', 'Parte de uma situação instrução de computador que contém a posição do dado.'),
(18, 'DOS (Disk Operating System)', 'Sistema Operacional em Discos', 'Software de sistema operacional usado na maioria dos computadores e que provê a abstração e gerenciamento dos dispositivos de armazenamento secundário e as informações neles contidas.'),
(19, 'Directory', 'Diretório ou Lista', 'Estrutura utilizada para organizar arquivos em um computador ou um arquivo que contém referências a outros arquivos.'),
(20, 'Display', 'Exibição', 'Exibir, mostrar informação.'),
(21, 'Extract File', 'Extrair Arquivo', 'Comando executado quando se tem uma pasta compactada e se faz necessária a descompactação da mesma.'),
(22, 'Edge', 'Bordas/Margem', 'Detalhe que se dá nas bordas de determinado elemento.'),
(23, 'Failure', 'Falha, Avaria ou Pane', 'Qualquer problema grave causado por defeito no hardware ou software.'),
(24, 'File set', 'Conjunto de arquivos', 'Usado para manter documentos ou outros itens em ordem.'),
(25, 'Flowchart', 'Fluxograma', 'Representação gráfica de um procedimento, problema ou sistema, cujas etapas ou módulos são ilustrados de forma encadeada por meio de símbolos geométricos interconectados, diagrama para representação de um algoritmo.'),
(26, 'Hardware', 'Unidades Físicas', 'Circuitos integrados, discos e mecanismos que compõem um computador ou seus periféricos.'),
(27, 'Hide Edges', 'Esconder, Ocultar Bordas', 'Esconder de vista, descoberta ou obscurecer a borda ou margem.'),
(28, 'Integer', 'Número Inteiro', 'Formado pelo conjunto dos números naturais e seus opostos aditivos.'),
(29, 'Ink', 'Tinta', 'Tinta de caneta, de impressora que contém pigmentos ou corantes e é usado para colorir uma superfície para produzir uma imagem, texto ou design.'),
(30, 'USB(Universal Serial Bus)', 'Porta Serial Universal', 'É um tipo de conexão para ligar e usar(Plug and Play) que permite a conexão de periféricos sem a necessidade de desligar o computador.'),
(31, 'Tab', 'Tabular, aba', 'Organiza textos em colunas.'),
(32, 'Screen', 'Tela', 'Dispositivo de exibição do computador, acoplada ou não no dispositivo.'),
(33, 'Scroll', 'Rolagem', 'Rolar a tela.'),
(34, 'Server', 'Servidor', 'Software ou computador, com sistema de computação centralizada que fornece serviços a uma rede de computadores, chamada de cliente.'),
(35, 'Set up', 'Configuração', 'Preparar equipamento para operação.'),
(36, 'Shift', 'Mudança', 'Muda, Deslocar, Mudança.'),
(37, 'Short cut', 'Atalho', 'Caminho derivado de um principal, pelo qual se encurtam distâncias e/ou se chega mais rapidamente ao lugar de destino. Na computação, um atalho de arquivo é um identificador em uma interface do usuário que permite ao usuário encontrar um arquivo ou recurso localizado em um diretório ou pasta diferente do local em que o atalho está localizado.'),
(38, 'Ram(Random Access Memory)', 'Memória de acesso aleatório', 'É um tipo de memória que permite a leitura e a escrita, utilizada como memória primária em sistemas eletrônicos digitais.'),
(39, 'Reset', 'Redefinir, Restaurar, Inicializar', 'Desligar e religar um computador ou equipamento, por falha ou incorreção no seu funcionamento, fazendo-o funcionar corretamente.'),
(40, 'Ruler', 'Régua', 'Régua também é chamada de: regra. uma tira de madeira, metal ou outro material, com bordas retas graduadas geralmente em milímetros ou polegadas, usadas para medir e desenhar linhas retas.'),
(41, 'ROM(Read Only Memory)', 'Memória Somente para Leitura', 'Diferentemente da RAM não são voláteis, mantendo os dados gravados após o desligamento do computador.'),
(42, 'Password', 'Senha', 'Senha ou palavra-passe, ou ainda palavra-chave ou password, é uma palavra ou código secreto previamente convencionado entre as partes como forma de reconhecimento.'),
(43, 'Lock', 'Travar, Bloquear', 'Bloqueio de algo ou um dispositivo.'),
(44, 'Load', 'Carregar', 'Carregamento de diversos tipos, carga, acumular.');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbpalavra`
--
ALTER TABLE `tbpalavra`
  ADD PRIMARY KEY (`idPalavra`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbpalavra`
--
ALTER TABLE `tbpalavra`
  MODIFY `idPalavra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
