-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 06-Jul-2017 às 11:16
-- Versão do servidor: 5.6.31-0ubuntu0.15.10.1
-- PHP Version: 5.6.11-1ubuntu3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `base_DB`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `mercadorias`
--

CREATE TABLE IF NOT EXISTS `mercadorias` (
  `idMercadoria` int(11) NOT NULL,
  `Codigo_Mercadoria` int(11) NOT NULL COMMENT 'Código da mercadoria, números inteiros.',
  `Tipo_Mercadoria` varchar(150) NOT NULL COMMENT 'Tipo da Mercadoria.',
  `Nome_Mercadoria` varchar(150) NOT NULL COMMENT 'Nome da Mercadoria.',
  `Quantidade` int(11) NOT NULL COMMENT 'Quantidade de Mercadoria.',
  `Preco` decimal(9,2) NOT NULL COMMENT 'Preço da Mercadoria.',
  `Tipo_Negocio` varchar(80) NOT NULL COMMENT 'Tipo do Negócio (Compra ou Venda).'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mercadorias`
--
ALTER TABLE `mercadorias`
  ADD PRIMARY KEY (`idMercadoria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mercadorias`
--
ALTER TABLE `mercadorias`
  MODIFY `idMercadoria` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
