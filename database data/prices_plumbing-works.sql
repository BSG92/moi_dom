-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 08, 2022 at 01:53 PM
-- Server version: 10.5.15-MariaDB-0+deb11u1
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moi_dom`
--

-- --------------------------------------------------------

--
-- Table structure for table `prices_plumbing-works`
--

CREATE TABLE `prices_plumbing-works` (
  `id` int(2) NOT NULL,
  `name_work` varchar(255) NOT NULL,
  `measured_by` enum('шт','м.п','точка','-') NOT NULL,
  `price` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prices_plumbing-works`
--

INSERT INTO `prices_plumbing-works` (`id`, `name_work`, `measured_by`, `price`) VALUES
(1, 'Установка счётчика', 'шт', 1700),
(2, 'Установка кран шаровый 1/2\"', 'шт', 500),
(3, 'Установка фильтр косой', 'шт', 300),
(4, 'Установка кран шаровый 3/4\"', 'шт', 400),
(5, 'Установка фильтр косой', 'шт', 300),
(6, 'Установка обратный  клапан', 'шт', 300),
(7, 'Демонтаж водяного полотенцесушителя', 'шт', 600),
(8, 'Установка водяного полотенцесушителя', 'шт', 2500),
(9, 'Монтаж полипропиленовых труб', 'точка', 1900),
(10, 'Монтаж канализационных труб', 'точка', 800),
(11, 'Штроба по бетону', 'м.п', 350),
(12, 'Бурение отверстий под трубы в стене', 'шт', 350),
(13, 'Установка канализационного стояка', 'шт', 1650),
(14, 'Установка смесителя с душем', 'шт', 900),
(15, 'Установка раковины', 'шт', 800),
(16, 'Установка тумбы, пьедестала под раковину', 'шт', 600),
(17, 'Установка сифона пластик', 'шт', 600),
(18, 'Герметизация стыков силиконом', 'м.п', 60),
(19, 'Установка смесителя', 'шт', 650),
(24, 'Установка унитаза со сборкой', 'шт', 2500),
(25, 'Герметизация подошвы унитаза силиконом', '-', 150),
(26, 'Установка фильтра очистки', 'шт', 1650),
(27, 'Установка трапа для душевого поддона', 'шт', 1350);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prices_plumbing-works`
--
ALTER TABLE `prices_plumbing-works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prices_plumbing-works`
--
ALTER TABLE `prices_plumbing-works`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
