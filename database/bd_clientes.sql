-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 15-Maio-2024 às 17:57
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
-- Estrutura da tabela `tb_clientes`
--

DROP TABLE IF EXISTS `tb_clientes`;
CREATE TABLE IF NOT EXISTS `tb_clientes` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nascto` date NOT NULL,
  `fotoUrl` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_clientes`
--

INSERT INTO `tb_clientes` (`codigo`, `nome`, `email`, `telefone`, `nascto`, `fotoUrl`, `senha`) VALUES
(44, 'sarah        ', 'sarah@gmail.com        ', '(11)94918-5984', '4444-05-04', 'fotosClientes/fd39b31739c437281a405ec562b98191.jpg', '202cb962ac59075b964b07152d234b70'),
(38, 'joão gonçalves cigarrinho  ', 'joao@gmail.com  ', '(11)95454-5466', '5412-04-12', 'fotosClientes/67dbb8b3f8d89fffb0bddc46b20ec6dc.jpg', 'd41d8cd98f00b204e9800998ecf8427e'),
(37, 'Filipe  ', 'filipe@gmail.com  ', '(11)95465-4654', '4545-05-04', 'fotosClientes/fd655784abb88b4999580a23936dcb17.jpg', 'd41d8cd98f00b204e9800998ecf8427e'),
(32, 'marcelooo ', 'marcelo@gmail.com      ', '(11)95454-5454', '1560-02-15', 'fotosClientes/6617256dd51f5ca3b446ad9fb53e6581.jpg', 'd41d8cd98f00b204e9800998ecf8427e'),
(31, 'joaozinho3', 'ju@gmail.com     ', '(11)94918-5984', '2010-10-10', 'fotosClientes/785af9cfa051bed13a625a6a5bf833b6.jpg', 'd41d8cd98f00b204e9800998ecf8427e'),
(41, 'Lais Arruda    ', 'lais2@gmail.com    ', '(11)91654-6545', '1111-12-15', 'fotosClientes/e1cb670a6d02c7d97ea9f990489ca1b3.jpg', 'd41d8cd98f00b204e9800998ecf8427e'),
(36, 'Luis Arrombado   ', 'luisinho@gmail.com   ', '(11)54954-5642', '2006-04-22', 'fotosClientes/c32e5e4c3afe7c15b57fc13f5fe050cd.jpg', 'd41d8cd98f00b204e9800998ecf8427e'),
(27, 'marcia    ', 'marcia@gmail.com    ', '(11)95869-6985', '2000-02-02', 'fotosClientes/9ee2bd2d3c11108e8cbd352c4b4f9660.jpg', 'd41d8cd98f00b204e9800998ecf8427e'),
(28, 'ana julia ', 'anajulia@gmail.com ', '(11)59856-2563', '2006-08-07', 'fotosClientes/5ad4216b5ed3a75efb53b83196fc68c1.jpg', 'd41d8cd98f00b204e9800998ecf8427e'),
(45, 'Alison Arruda de Oliveira', 'alisonoliveira0116@gmail.com', '(11)96070-6320', '2003-01-16', 'fotosClientes/e0f992ead88e24f2218a2358134ef432.jpg', 'c0a83ee5739e4fabd1f428edf47ee611'),
(26, 'mariana', 'mariana@gmail.com', '(11)25896-3258', '1996-02-01', 'fotosClientes/b63164c293508f21af1de9b607472b9f.jpg', 'd41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_users`
--

DROP TABLE IF EXISTS `tb_users`;
CREATE TABLE IF NOT EXISTS `tb_users` (
  `Coduser` int NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Senha` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Data` date NOT NULL,
  `Telefone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Cep` int NOT NULL,
  `Foto` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nivel` int NOT NULL,
  PRIMARY KEY (`Coduser`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_users`
--

INSERT INTO `tb_users` (`Coduser`, `Nome`, `Email`, `Senha`, `Data`, `Telefone`, `Cep`, `Foto`, `nivel`) VALUES
(1, 'Alison Arruda de Oliveira', 'Alisonoliveira0116@gmail.com', 'alison123', '2003-01-16', '11960706320', 8345560, '', 3),
(2, 'Luís Henrique Lourenço', 'hicklourenco@gmail.com', 'luis123', '2006-04-22', '11991220435', 8253540, '', 3),
(3, 'Filipe Takara', 'filipereidelas@gmail.com', 'filipe123', '2006-07-26', '11963256126', 0, '', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
