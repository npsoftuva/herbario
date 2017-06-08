-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Jun-2017 às 20:57
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

create database herbario;

use herbario;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `herbario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `collections`
--

CREATE TABLE `collections` (
  `id` int(11) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `register` int(10) UNSIGNED NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  `local_id` int(10) UNSIGNED NOT NULL,
  `determination_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `collections_collectors`
--

CREATE TABLE `collections_collectors` (
  `collector_id` int(11) UNSIGNED NOT NULL,
  `collection_id` int(11) UNSIGNED NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `collectors`
--

CREATE TABLE `collectors` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `determinations`
--

CREATE TABLE `determinations` (
  `id` int(11) UNSIGNED NOT NULL,
  `determiner` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `families`
--

CREATE TABLE `families` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `info` varchar(255) DEFAULT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `genres`
--

CREATE TABLE `genres` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `info` varchar(255) DEFAULT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  `family_id` int(11) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `locals`
--

CREATE TABLE `locals` (
  `id` int(11) UNSIGNED NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `latitude` varchar(25) DEFAULT NULL,
  `longitude` varchar(25) DEFAULT NULL,
  `altitude` decimal(6,6) DEFAULT NULL,
  `state` varchar(100) NOT NULL,
  `local` varchar(255) DEFAULT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `species`
--

CREATE TABLE `species` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `info` varchar(255) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  `genre_id` int(11) UNSIGNED NOT NULL,
  `collection_id` int(11) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collectors`
--
ALTER TABLE `collectors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `determinations`
--
ALTER TABLE `determinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `families`
--
ALTER TABLE `families`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locals`
--
ALTER TABLE `locals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `species`
--
ALTER TABLE `species`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `collectors`
--
ALTER TABLE `collectors`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `determinations`
--
ALTER TABLE `determinations`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `families`
--
ALTER TABLE `families`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `locals`
--
ALTER TABLE `locals`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `species`
--
ALTER TABLE `species`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
