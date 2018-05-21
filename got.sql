-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Maio-2018 às 05:25
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `got`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `familia`
--

CREATE TABLE `familia` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `quantidade_membros` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `familia`
--

INSERT INTO `familia` (`id`, `nome`, `quantidade_membros`) VALUES
(1, 'Stark', 3335),
(2, 'Arryn', 233),
(3, 'Tully', 323),
(4, 'Greyjoy', 233),
(5, 'Lannister', 341),
(6, 'Baratheon', 343);

-- --------------------------------------------------------

--
-- Estrutura da tabela `guerra`
--

CREATE TABLE `guerra` (
  `id` int(11) NOT NULL,
  `id_familia_desafiadora` int(11) DEFAULT NULL,
  `id_familia_desafiada` int(11) DEFAULT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_fim` date DEFAULT NULL,
  `id_familia_vencedora` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `guerra`
--

INSERT INTO `guerra` (`id`, `id_familia_desafiadora`, `id_familia_desafiada`, `data_inicio`, `data_fim`, `id_familia_vencedora`) VALUES
(1, 1, 2, '2017-05-01', '2018-05-24', 2),
(2, 5, 6, '2018-10-11', '2019-10-31', 6),
(4, 1, 1, '1985-10-27', '1985-10-27', 1),
(5, 3, 4, '1990-10-27', '2000-10-27', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `familia`
--
ALTER TABLE `familia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guerra`
--
ALTER TABLE `guerra`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `familia`
--
ALTER TABLE `familia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `guerra`
--
ALTER TABLE `guerra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
