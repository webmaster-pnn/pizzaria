-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Ago-2019 às 11:22
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizzaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `cate_id` int(11) NOT NULL,
  `cate_nome` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `cli_id` int(11) NOT NULL,
  `cli_nome` varchar(30) NOT NULL,
  `cli_sobrenome` varchar(30) NOT NULL,
  `cli_sexo` char(1) NOT NULL,
  `cli_nascimento` varchar(30) NOT NULL,
  `cli_cpf` varchar(18) NOT NULL,
  `cli_telefone` varchar(20) DEFAULT NULL,
  `cli_celular` varchar(20) NOT NULL,
  `cli_email` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL,
  `end_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`cli_id`, `cli_nome`, `cli_sobrenome`, `cli_sexo`, `cli_nascimento`, `cli_cpf`, `cli_telefone`, `cli_celular`, `cli_email`, `user_id`, `end_id`) VALUES
(1, 'Carlos Henrique Pereira', 'Júnior', 'M', '0222-04-10', '14892313742', '2222222222', '2222222222', 'carlos@gmail.com', 1, 1),
(2, 'josess', 'Júnior', 'M', '0001-01-01', '14892313742', '2222222222', '2222222222', 'jose@gmail.com', 1, 1),
(3, 'Carlos Henrique Pereira', 'Júnior', 'M', '0001-01-01', '14892313742', '2222222222', '2222222222', 'carlos@gmail.com', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE `enderecos` (
  `end_id` int(11) NOT NULL,
  `end_cep` varchar(10) NOT NULL,
  `end_rua` varchar(50) NOT NULL,
  `end_bairro` varchar(50) NOT NULL,
  `end_cidade` varchar(50) NOT NULL,
  `end_estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`end_id`, `end_cep`, `end_rua`, `end_bairro`, `end_cidade`, `end_estado`) VALUES
(1, '28940-00', 'R. das Tulípas', 'Jardim Arco Iris', 'São Pedro da Aldeia', 'Rio de Janeiro'),
(2, '28940-00', 'R. das Tulípas', 'Jardim Arco Iris', 'São Pedro da Aldeia', 'Rio de Janeiro'),
(3, '28940-00', 'R. das Tulípas', 'Jardim Arco Iris', 'São Pedro da Aldeia', 'Rio de Janeiro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `func_id` int(11) NOT NULL,
  `func_nome` varchar(30) NOT NULL,
  `func_sobrenome` varchar(30) NOT NULL,
  `func_cpf` varchar(15) NOT NULL,
  `func_telefone` varchar(20) DEFAULT NULL,
  `func_celular` varchar(20) NOT NULL,
  `func_sexo` char(1) NOT NULL,
  `user_id` int(11) NOT NULL,
  `end_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `ped_id` int(11) NOT NULL,
  `ped_data` date NOT NULL,
  `ped_hora` time NOT NULL,
  `ped_pag_forma` varchar(20) NOT NULL,
  `ped_status` varchar(20) NOT NULL,
  `cli_id` int(11) NOT NULL,
  `func_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `prod_id` int(11) NOT NULL,
  `prod_nome` varchar(20) NOT NULL,
  `prod_preco` varchar(10) NOT NULL,
  `prod_tamanho` varchar(5) NOT NULL,
  `prod_descricao` varchar(50) NOT NULL,
  `prod_quantidade` int(11) NOT NULL,
  `prod_img` varchar(30) NOT NULL,
  `prod_ativo` tinyint(1) NOT NULL,
  `cate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `user_id` int(11) NOT NULL,
  `user_nome` varchar(30) NOT NULL,
  `user_senha` varchar(15) NOT NULL,
  `user_tipo` varchar(20) NOT NULL,
  `user_img` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`user_id`, `user_nome`, `user_senha`, `user_tipo`, `user_img`) VALUES
(1, 'user1', '123456', 'cliente', NULL),
(2, 'user1', '123456', 'cliente', NULL),
(3, 'carlos@gmail.com', '123456', 'cliente', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cli_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `end_id` (`end_id`);

--
-- Indexes for table `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`end_id`);

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`func_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `end_id` (`end_id`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`ped_id`),
  ADD KEY `cli_id` (`cli_id`),
  ADD KEY `func_id` (`func_id`),
  ADD KEY `prod_id` (`prod_id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `cate_id` (`cate_id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `end_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `func_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `ped_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `usuarios` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `clientes_ibfk_2` FOREIGN KEY (`end_id`) REFERENCES `enderecos` (`end_id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD CONSTRAINT `funcionarios_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `usuarios` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `funcionarios_ibfk_2` FOREIGN KEY (`end_id`) REFERENCES `enderecos` (`end_id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`cli_id`) REFERENCES `clientes` (`cli_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`func_id`) REFERENCES `funcionarios` (`func_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pedidos_ibfk_3` FOREIGN KEY (`prod_id`) REFERENCES `produtos` (`prod_id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`cate_id`) REFERENCES `categorias` (`cate_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
