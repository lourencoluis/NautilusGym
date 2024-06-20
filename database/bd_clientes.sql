-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 19-Jun-2024 às 20:42
-- Versão do servidor: 8.0.27
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_clientes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_academias`
--

DROP TABLE IF EXISTS `tb_academias`;
CREATE TABLE IF NOT EXISTS `tb_academias` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `foto1` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `foto2` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `modalidade1` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `modalidade2` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `modalidade3` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `modalidade4` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `modalidade5` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_academias`
--

INSERT INTO `tb_academias` (`codigo`, `nome`, `endereco`, `telefone`, `foto1`, `foto2`, `modalidade1`, `modalidade2`, `modalidade3`, `modalidade4`, `modalidade5`) VALUES
(21, 'paulista', 'avenida paulista', '1195848454', '../fotoAcademias/9fa3d659ec4200a3de1dcad26e34de2e.jpg', '../fotoAcademias/fd4721f85667859f0bee4b9ba25f2342.jpg', 'modalidadeA', 'modalidadeB', 'modalidadeA', 'modalidadeB', 'modalidadeA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_clientes`
--

DROP TABLE IF EXISTS `tb_clientes`;
CREATE TABLE IF NOT EXISTS `tb_clientes` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_clientes`
--

INSERT INTO `tb_clientes` (`codigo`, `nome`, `email`, `telefone`) VALUES
(1, 'Matheus', 'matheus_otario@gmail.com', '11 99999-9999'),
(2, 'Vinícius', 'vinicius_tempo@gmail.com', '11 98989-9898'),
(4, 'Auricio', 'aurislisboa@gmail.com', '11 94231-7890');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produtos`
--

DROP TABLE IF EXISTS `tb_produtos`;
CREATE TABLE IF NOT EXISTS `tb_produtos` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `preco` int NOT NULL,
  `categoria` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quantidade` int NOT NULL,
  `descricao` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `foto1` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `foto2` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_produtos`
--

INSERT INTO `tb_produtos` (`codigo`, `nome`, `preco`, `categoria`, `quantidade`, `descricao`, `foto1`, `foto2`) VALUES
(10, 'Esteira', 1500, 'Aparelhos', 15, 'para treinamentos em casa', '../fotoProdutos/2b93158946095c5ad5b9b0b4d8366e97.jpg', '../fotoProdutos/e576df02ab87cc42843c325794af187a.jpg'),
(9, 'Halter 2 em 1', 30, 'Acessorios', 25, 'pegue esta promoção imediatamente , compre 1 halter e receba 2', '../fotoProdutos/6003f3b909bd59b98c89fad3f0cb77d0.jpg', '../fotoProdutos/7e13c54ab19f2f276d01746a9422e1f2.jpg'),
(8, 'Trembolona', 150, 'Suplementos', 100, 'quer crescer ? use TREMBOLONAAA', '../fotoProdutos/756329a705f62ad4831da495ede601cd.jpg', '../fotoProdutos/5aa19b42a5453987412a8766d297d688.jpg'),
(7, 'Regata', 35, 'Roupas', 40, 'Regata nas cores Branca e Cinza', '../fotoProdutos/e198bf6a1ddf12e423bc1f990ea61934.jpg', '../fotoProdutos/c964e78d753ae04af55ca9500084e930.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_users`
--

DROP TABLE IF EXISTS `tb_users`;
CREATE TABLE IF NOT EXISTS `tb_users` (
  `Coduser` int NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Senha` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Data` date NOT NULL,
  `Telefone` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Cep` int NOT NULL,
  `Foto` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nivel` int NOT NULL,
  `Plano` int NOT NULL,
  PRIMARY KEY (`Coduser`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_users`
--

INSERT INTO `tb_users` (`Coduser`, `Nome`, `Email`, `Senha`, `Data`, `Telefone`, `Cep`, `Foto`, `nivel`, `Plano`) VALUES
(18, 'Alison Arruda de Oliveira', 'alisonoliveira0116@gmail.com', 'c0a83ee5739e4fabd1f428edf47ee611', '2003-01-16', '11960706320', 8345, 'https://api.dicebear.com/8.x/initials/svg?seed=Ali', 3, 1),
(3, 'Filipe Takara', 'filipereidelas@gmail.com', 'filipe123', '2006-07-26', '11963256126', 0, '', 3, 0),
(5, 'Filipe Takara', 'kenititakara@gmail.com', 'acacbabe477e92db71788243b06347', '2006-07-27', '11963256126', 456468545, 'https://api.dicebear.com/8.x/initials/svg?seed=Fil', 1, 0),
(9, 'Luis Lourenço', 'hicklourenco@gmail.com', '3a8b38402b2703b93fcc4925901141e6', '2006-04-22', '11991220435', 8253540, 'https://api.dicebear.com/8.x/initials/svg?seed=Lui', 3, 0),
(10, 'João Lima', 'joao@gmail.com', '202cb962ac59075b964b07152d234b70', '1981-03-03', '11', 123321123, 'https://api.dicebear.com/8.x/initials/svg?seed=Joã', 1, 0),
(17, 'Filipe Takara', 'lala@gmail.gg.com', '4b07f4d92f3dfc0b1c478bcdcfe626a8', '2024-05-08', '11478456987', 0, 'https://api.dicebear.com/8.x/initials/svg?seed=Fil', 2, 0),
(19, 'jailson', 'jaja@gmail.com', '202cb962ac59075b964b07152d234b70', '5445-04-15', '1848454584', 5454, 'https://api.dicebear.com/8.x/initials/svg?seed=jai', 1, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
