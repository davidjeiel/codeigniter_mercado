-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Dez-2018 às 12:51
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mercado`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `descricao` text,
  `preco` decimal(10,2) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `vendido` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `nome`, `descricao`, `preco`, `usuario_id`, `vendido`) VALUES
(1, 'Bola de futebol', 'Assinada pelo Zico', '300.00', 1, 0),
(2, 'HD Externo', '3 Teras', '400.00', 1, 0),
(3, 'Garrafa de 2 litros', 'Bebida qualquer', '10.50', 1, 0),
(4, 'Chocolate', 'Sabor chocolate branco', '31.00', NULL, 1),
(5, 'Celular Samsung', 'Note 8', '2600.00', NULL, 0),
(6, 'TV LG', '4K', '2600.00', NULL, 0),
(7, 'Chrome Cast', 'teste', '300.00', NULL, 0),
(8, 'NoteBook HP', 'SSD 528', '2000.00', NULL, 0),
(9, 'Cadeira design', 'De madeira', '150.00', NULL, 0),
(10, 'Mesa de bar', 'De aço inox', '120.00', 6, 0),
(11, 'Mesa de vidro', '1,2m²\r\n8 cadeiras\r\nEstofados de pena de ganço\r\n', '1800.00', 6, 0),
(12, 'Curso JavaScript', NULL, '1500.00', 6, 0),
(13, 'Curso de HTML', 'Curso de <b>desenvolvimento</b> web', '900.00', 6, 0),
(14, 'Filme: Inimigo Publico', '2h\r\nJhonny Deep\r\nChristian Balle\r\nChanning Tattoon', '35.00', 6, 0),
(15, 'TV Samsung', 'Descrição teste', '800.00', 6, 0),
(16, 'Móvel de decoração da sala', 'Móvel de apoio de quadros', '300.00', 6, 0),
(17, 'Carro Sedan', 'Virtuos 200 1.0', '15000.00', 6, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(255) DEFAULT NULL,
  `email_usuario` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Cadastro de usuários';

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome_usuario`, `email_usuario`, `senha`) VALUES
(1, 'David', 'davidjeiel@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(3, 'teste', 'teste', '698dc19d489c4e4db73e28a713eab07b'),
(4, 'David Jeiel', 'davidjeiel@hotmail.com.br', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'David Jeiel', 'davidjeiel@hotmail.com.br', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'David', 'davidjeiel@gmail.com', 'b7f815277255cdb089780b825ea6afad');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` int(11) NOT NULL,
  `produto_id` int(11) NOT NULL,
  `comprador_id` int(11) NOT NULL,
  `data_de_entrega` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id`, `produto_id`, `comprador_id`, `data_de_entrega`) VALUES
(1, 3, 6, '0000-00-00'),
(2, 3, 6, '0000-00-00'),
(3, 2, 6, '0000-00-00'),
(4, 3, 6, '0000-00-00'),
(5, 3, 6, '2018-09-01'),
(6, 4, 6, '2018-12-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indexes for table `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
