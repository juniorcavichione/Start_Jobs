-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 31/01/2022 às 22:33
-- Versão do servidor: 10.4.22-MariaDB
-- Versão do PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `emprego`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` smallint(6) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(2, 'DevOps'),
(4, 'Desenvolvedor Fullstack'),
(5, 'Dona de casa');

-- --------------------------------------------------------

--
-- Estrutura para tabela `interessados`
--

CREATE TABLE `interessados` (
  `id_interessados` int(11) NOT NULL,
  `id_usuario` tinyint(4) NOT NULL,
  `id_vaga` smallint(6) NOT NULL,
  `solicitacao` varchar(255) NOT NULL,
  `usuario_id` tinyint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `interessados`
--

INSERT INTO `interessados` (`id_interessados`, `id_usuario`, `id_vaga`, `solicitacao`, `usuario_id`) VALUES
(16, 19, 48, '3', 20);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` tinyint(4) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `tipo` enum('administrador','comum','empresa') DEFAULT NULL,
  `Img` varchar(255) NOT NULL,
  `chave` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `tipo`, `Img`, `chave`) VALUES
(19, 'Fernanda Rosenda da silva', 'alfa@alfa.com', '$2y$10$xuoQLGe7cG08I54TSuEKP.2k5/Thn5Ybv4swT4pHgeMe/pLAnHfOS', 'comum', 'Captura de ecrã de 2022-01-28 09-25-14.png', 'NULL'),
(20, 'Adriano Baram Baram', 'alfa_bar@hotmail.com', '$2y$10$TVszdffhB9E0H2mk8txkFubaPVo7cVxdH2zSOd17LPprmYW42x9lu', 'empresa', 'Captura de ecrã de 2021-12-07 16-46-17.png', 'NULL'),
(21, 'chiquinha', 'chiquinha@chaves.com', '$2y$10$apvZRAhUmM/CUMkUIav7Aej2WcPxTcapdQjzIH1Khf9j9/xXdt942', 'empresa', 'WhatsApp Image 2021-11-26 at 10.25.21.jpeg', 'NULL');

-- --------------------------------------------------------

--
-- Estrutura para tabela `vaga`
--

CREATE TABLE `vaga` (
  `id` smallint(6) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `categoria_id` smallint(6) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `beneficio` varchar(255) NOT NULL,
  `salario` decimal(7,2) NOT NULL,
  `localidade` varchar(255) NOT NULL,
  `data` datetime NOT NULL,
  `empresa_id` tinyint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `vaga`
--

INSERT INTO `vaga` (`id`, `nome`, `categoria_id`, `descricao`, `beneficio`, `salario`, `localidade`, `data`, `empresa_id`) VALUES
(48, 'Desenvolvedor', 2, 'Desenvolvedor', 'Vale alimentação', '1400.00', 'são paulo', '2022-01-31 21:46:37', 20),
(49, 'Desenvolvedor Fullstack', 4, 'Trabalho remoto', 'vr va', '5000.00', 'sao paulo', '2022-01-31 02:22:44', 20),
(50, 'Desenvolvedor UI-UX FIGMA', 4, 'Oportunidade unica de trabalho', 'Vale transporte Vr Va seguro vida', '6000.00', 'sao paulo', '2022-01-30 22:39:00', 20),
(51, 'Diarista atendimento apto', 5, 'trabalho duro', 'nenhum', '800.00', 'Penha', '2022-01-31 09:03:00', 21);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `interessados`
--
ALTER TABLE `interessados`
  ADD PRIMARY KEY (`id_interessados`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `fk_interessados_vagaID` (`id_vaga`),
  ADD KEY `empresa_id` (`usuario_id`),
  ADD KEY `empresa_id_2` (`usuario_id`),
  ADD KEY `empresa_id_3` (`usuario_id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `nome` (`nome`),
  ADD KEY `tipo` (`tipo`),
  ADD KEY `endereco` (`Img`);

--
-- Índices de tabela `vaga`
--
ALTER TABLE `vaga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorias_id` (`categoria_id`),
  ADD KEY `id` (`id`),
  ADD KEY `empresa_id` (`empresa_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `interessados`
--
ALTER TABLE `interessados`
  MODIFY `id_interessados` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `vaga`
--
ALTER TABLE `vaga`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `interessados`
--
ALTER TABLE `interessados`
  ADD CONSTRAINT `empresa_id_fk` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `fk_interessados_usuarioID` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `fk_interessados_vagaID` FOREIGN KEY (`id_vaga`) REFERENCES `vaga` (`id`);

--
-- Restrições para tabelas `vaga`
--
ALTER TABLE `vaga`
  ADD CONSTRAINT `fk_vagas_categorias` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`),
  ADD CONSTRAINT `vaga_empresa_id` FOREIGN KEY (`empresa_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
