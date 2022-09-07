-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Mar-2019 às 21:09
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_cinema`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente`
--

CREATE TABLE `tb_cliente` (
  `cli_id` int(11) NOT NULL,
  `cli_nome` varchar(45) DEFAULT NULL,
  `cli_login` varchar(45) DEFAULT NULL,
  `cli_senha` varchar(45) DEFAULT NULL,
  `cli_cpf` varchar(45) DEFAULT NULL,
  `cli_telefone` varchar(45) DEFAULT NULL,
  `cli_estado` varchar(45) DEFAULT NULL,
  `cli_cidade` varchar(45) DEFAULT NULL,
  `cli_bairro` varchar(45) DEFAULT NULL,
  `cli_logradouro` varchar(45) DEFAULT NULL,
  `cli_nomelogra` varchar(45) DEFAULT NULL,
  `cli_numero` varchar(45) DEFAULT NULL,
  `cli_img` varchar(250) DEFAULT NULL,
  `cli_sobrenome` varchar(250) NOT NULL,
  `cli_status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_cliente`
--

INSERT INTO `tb_cliente` (`cli_id`, `cli_nome`, `cli_login`, `cli_senha`, `cli_cpf`, `cli_telefone`, `cli_estado`, `cli_cidade`, `cli_bairro`, `cli_logradouro`, `cli_nomelogra`, `cli_numero`, `cli_img`, `cli_sobrenome`, `cli_status`) VALUES
(1, 'TestNome', 'TestUser', 'TestSenha', 'TestCpf', 'TestTelefone', 'TestEstado', 'TestCidade', 'TestBairro', 'TestLogradouro', 'TestNomeLogra', 'TestNumero', NULL, '', ''),
(2, 'segseg', 'segwserg', '', '', '', '', '', '', '', '', '', NULL, '', ''),
(3, 'lala', 'lala@gmail', '12345', '55555555555', '88888888', 'CE', 'Alagoas', 'CaiÃ§ara', 'rua', 'Do GÃ¡s', '1414', '1553683987d41d8cd98f00b204e9800998ecf8427e5c9b5613bd6ef.jpeg', 'lolo', ''),
(7, 'dfv', 'dfvd@cdd', 'fgbndfgb', 'dfvdfv', 'dfvdf', 'vfvdfv', 'dfvdfv', 'dfvdfv', 'dfvdfv', 'dfvdfv', 'dfvdf', 'usuariosemfoto.jpg', 'dff', '0'),
(8, 'rrrr', 'opp@gmail', '123', '55555555555', '33333333333', 'hj,vjh,', 'bh,,', 'cvh,c,', 'cv,c,', 'cvh,h', '535', 'usuariosemfoto.jpg', 'rrrrr', '1'),
(10, 'hhhhhhh', 'ogg@gmail', '123', 'dfvdfv', 'dfvdf', 'CE', 'dfvdfv', 'dfvdfv', 'dfvdfv', 'Do GÃ¡s', '1414', '1553687397d41d8cd98f00b204e9800998ecf8427e5c9b63656be1c.jpg', 'dff', '1'),
(11, 'lala', 'jessica@gmail', '123', 'dfvdfv', 'dfvdf', 'vfvdfv', 'dfvdfv', 'dfvdfv', 'dfvdfv', 'dfvdfv', 'dfvdf', 'usuariosemfoto.jpg', 'lolo', '1'),
(12, 'Wenica', 'Wenica@sousa', '123', '2589', '90906666666', 'CE', 'Crato', 'Padre CÃ­cero', 'rua', 'Do GÃ¡s', '1414', '1553690482d41d8cd98f00b204e9800998ecf8427e5c9b6f7281375.jpg', 'AraÃºjo', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_filme`
--

CREATE TABLE `tb_filme` (
  `fil_id` int(11) NOT NULL,
  `fil_nome` varchar(45) DEFAULT NULL,
  `fil_indicacao` varchar(45) DEFAULT NULL,
  `fil_categoria` varchar(45) DEFAULT NULL,
  `fil_sinopse` varchar(45) DEFAULT NULL,
  `fil_cartaz` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_filme`
--

INSERT INTO `tb_filme` (`fil_id`, `fil_nome`, `fil_indicacao`, `fil_categoria`, `fil_sinopse`, `fil_cartaz`) VALUES
(1, 'FilmeNome', 'FilmeIndicacao', 'FilmeCategoria', 'FilmeSinopse', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_ingresso`
--

CREATE TABLE `tb_ingresso` (
  `ing_id` int(11) NOT NULL,
  `ing_acento` varchar(45) DEFAULT NULL,
  `ing_data` varchar(45) DEFAULT NULL,
  `ing_valor` varchar(45) DEFAULT NULL,
  `ing_tipo` varchar(45) DEFAULT NULL,
  `fil_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_ingresso`
--

INSERT INTO `tb_ingresso` (`ing_id`, `ing_acento`, `ing_data`, `ing_valor`, `ing_tipo`, `fil_id`) VALUES
(1, 'IngressoAcento', 'IngressoData', 'IngressoValor', 'IngressoTipo', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_sala`
--

CREATE TABLE `tb_sala` (
  `sal_id` int(11) NOT NULL,
  `sal_numero` int(45) DEFAULT NULL,
  `sal_tipo` varchar(45) DEFAULT NULL,
  `sal_data` varchar(45) DEFAULT NULL,
  `fil_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_sala`
--

INSERT INTO `tb_sala` (`sal_id`, `sal_numero`, `sal_tipo`, `sal_data`, `fil_id`) VALUES
(1, 55, 'SalaTipo', 'SalaData', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_vendas`
--

CREATE TABLE `tb_vendas` (
  `ven_id` int(11) NOT NULL,
  `cli_id` int(11) DEFAULT NULL,
  `ing_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_cliente`
--
ALTER TABLE `tb_cliente`
  ADD PRIMARY KEY (`cli_id`);

--
-- Indexes for table `tb_filme`
--
ALTER TABLE `tb_filme`
  ADD PRIMARY KEY (`fil_id`);

--
-- Indexes for table `tb_ingresso`
--
ALTER TABLE `tb_ingresso`
  ADD PRIMARY KEY (`ing_id`),
  ADD KEY `fil_id` (`fil_id`);

--
-- Indexes for table `tb_sala`
--
ALTER TABLE `tb_sala`
  ADD PRIMARY KEY (`sal_id`),
  ADD KEY `fil_id` (`fil_id`);

--
-- Indexes for table `tb_vendas`
--
ALTER TABLE `tb_vendas`
  ADD PRIMARY KEY (`ven_id`),
  ADD KEY `cli_id` (`cli_id`),
  ADD KEY `ing_id` (`ing_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_cliente`
--
ALTER TABLE `tb_cliente`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_filme`
--
ALTER TABLE `tb_filme`
  MODIFY `fil_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_ingresso`
--
ALTER TABLE `tb_ingresso`
  MODIFY `ing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_sala`
--
ALTER TABLE `tb_sala`
  MODIFY `sal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_vendas`
--
ALTER TABLE `tb_vendas`
  MODIFY `ven_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_ingresso`
--
ALTER TABLE `tb_ingresso`
  ADD CONSTRAINT `tb_ingresso_ibfk_1` FOREIGN KEY (`fil_id`) REFERENCES `tb_filme` (`fil_id`);

--
-- Limitadores para a tabela `tb_sala`
--
ALTER TABLE `tb_sala`
  ADD CONSTRAINT `tb_sala_ibfk_1` FOREIGN KEY (`fil_id`) REFERENCES `tb_filme` (`fil_id`);

--
-- Limitadores para a tabela `tb_vendas`
--
ALTER TABLE `tb_vendas`
  ADD CONSTRAINT `tb_vendas_ibfk_1` FOREIGN KEY (`cli_id`) REFERENCES `tb_cliente` (`cli_id`),
  ADD CONSTRAINT `tb_vendas_ibfk_2` FOREIGN KEY (`ing_id`) REFERENCES `tb_ingresso` (`ing_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
