-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2019 at 05:36 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `character_options`
--

-- --------------------------------------------------------

--
-- Table structure for table `genderoptions`
--

CREATE TABLE `genderoptions` (
  `id` int(10) UNSIGNED NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genderoptions`
--

INSERT INTO `genderoptions` (`id`, `value`) VALUES
(1, 'Male'),
(2, 'Female'),
(3, 'Non-Binary'),
(4, 'None');

-- --------------------------------------------------------

--
-- Table structure for table `goalsoptions`
--

CREATE TABLE `goalsoptions` (
  `id` int(10) UNSIGNED NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `goalsoptions`
--

INSERT INTO `goalsoptions` (`id`, `value`) VALUES
(1, 'Retire to the country'),
(2, 'Become an adventurer'),
(3, 'Have a family'),
(4, 'Avenge stepson');

-- --------------------------------------------------------

--
-- Table structure for table `nameoptions`
--

CREATE TABLE `nameoptions` (
  `id` int(10) UNSIGNED NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nameoptions`
--

INSERT INTO `nameoptions` (`id`, `value`) VALUES
(2, 'Drake'),
(3, 'Jaime'),
(4, 'Jesse '),
(5, 'Hayden'),
(6, 'Micah'),
(7, 'Riley'),
(8, 'Taylor'),
(9, 'Ash');

-- --------------------------------------------------------

--
-- Table structure for table `personality_traitsoptions`
--

CREATE TABLE `personality_traitsoptions` (
  `id` int(10) UNSIGNED NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personality_traitsoptions`
--

INSERT INTO `personality_traitsoptions` (`id`, `value`) VALUES
(1, 'Gruff'),
(2, 'Easygoing'),
(3, 'Inquisitive'),
(4, 'Neurotic'),
(5, 'Agreable'),
(6, 'Charming'),
(7, 'Confident'),
(8, 'Independent'),
(9, 'Optimistic'),
(10, 'Reliable'),
(11, 'Bossy'),
(12, 'Cowardly'),
(13, 'Impulsive'),
(14, 'Thoughtless'),
(15, 'Sarcastic');

-- --------------------------------------------------------

--
-- Table structure for table `physical_traitsoptions`
--

CREATE TABLE `physical_traitsoptions` (
  `id` int(10) UNSIGNED NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `physical_traitsoptions`
--

INSERT INTO `physical_traitsoptions` (`id`, `value`) VALUES
(1, 'Shoulder Tattoo'),
(3, 'Stocky'),
(4, 'Long hair'),
(5, 'Intimidatingly tall'),
(6, 'Clumsy'),
(7, 'Bright colorful eyes');

-- --------------------------------------------------------

--
-- Table structure for table `raceoptions`
--

CREATE TABLE `raceoptions` (
  `id` int(10) UNSIGNED NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `raceoptions`
--

INSERT INTO `raceoptions` (`id`, `value`) VALUES
(1, 'Dragonborn'),
(2, 'Dwarf'),
(3, 'Elf'),
(4, 'Gnome'),
(5, 'Half-Elf'),
(6, 'Halfling'),
(7, 'Half-Orc'),
(8, 'Human'),
(9, 'Tiefling');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genderoptions`
--
ALTER TABLE `genderoptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goalsoptions`
--
ALTER TABLE `goalsoptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nameoptions`
--
ALTER TABLE `nameoptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personality_traitsoptions`
--
ALTER TABLE `personality_traitsoptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `physical_traitsoptions`
--
ALTER TABLE `physical_traitsoptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `raceoptions`
--
ALTER TABLE `raceoptions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genderoptions`
--
ALTER TABLE `genderoptions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `goalsoptions`
--
ALTER TABLE `goalsoptions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `nameoptions`
--
ALTER TABLE `nameoptions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `personality_traitsoptions`
--
ALTER TABLE `personality_traitsoptions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `physical_traitsoptions`
--
ALTER TABLE `physical_traitsoptions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `raceoptions`
--
ALTER TABLE `raceoptions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
