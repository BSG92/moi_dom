-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 03, 2022 at 05:19 PM
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
-- Table structure for table `prices_construction-finishing-works`
--

CREATE TABLE `prices_construction-finishing-works` (
  `id` int(2) NOT NULL,
  `name_work` varchar(255) NOT NULL,
  `measured_by` enum('кв.м','м.п','-','шт') NOT NULL,
  `price` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prices_construction-finishing-works`
--

INSERT INTO `prices_construction-finishing-works` (`id`, `name_work`, `measured_by`, `price`) VALUES
(1, 'Комплекс: демонтаж и монтаж перегородки', '-', 13000),
(2, 'Грунтование поверхностей', 'кв.м', 100),
(3, 'Оштукатуривание стен', 'кв.м', 400),
(4, 'Шпатлевание стен', 'кв.м', 300),
(5, 'Устройство подоконников', 'шт', 600),
(6, 'Устройство оконных откосов из ГКЛ', 'м.п', 500),
(7, 'Устройство дверных откосов', 'м.п', 500),
(8, 'Устройство напольного керамогранита', 'кв.м', 1400),
(9, 'Устройство сантехнических коробов', 'кв.м', 1300),
(10, 'Устройство стен из кафеля', 'кв.м', 1400),
(11, 'Устройство ревизионного лючка под плитку', 'шт', 2100),
(12, 'Монтаж линолеума', 'кв.м', 300),
(13, 'Монтаж линолеума', 'кв.м', 300),
(14, 'Устройство кухонного фартука из кафеля', 'кв.м', 1400),
(15, 'Установка межкомнатной двери', 'шт', 3600),
(16, 'Установка входной двери', 'шт', 3200),
(17, 'Устройство напольного плинтуса', 'м.п', 200),
(18, 'Покраска оконных и дверных откосов', 'м.п', 300),
(19, 'Устройство натяжных потолков ', 'кв.м', 800),
(20, 'Устройство душевого поддона ', 'шт', 8500);

-- --------------------------------------------------------

--
-- Table structure for table `prices_electrical-works`
--

CREATE TABLE `prices_electrical-works` (
  `id` int(2) NOT NULL,
  `name_work` varchar(255) NOT NULL,
  `measured_by` enum('шт','м.п','точка','') NOT NULL,
  `price` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prices_electrical-works`
--

INSERT INTO `prices_electrical-works` (`id`, `name_work`, `measured_by`, `price`) VALUES
(1, 'Штробление пазогребневых, бетонных и монолитных стен под кабель.Размер штробы до 20х20', 'м.п', 700),
(2, 'Прокладка трехжильного кабеля сечением 1,5 мм', 'м.п', 200),
(3, 'Прокладка трехжильного кабеля сечением 2,5 мм', 'м.п', 150),
(4, 'Сверление отверстия под соединительную коробку, розетку, выключатель  в бетоне, монолите', 'шт', 600),
(5, 'Демонтаж автомата, УЗО, ДИФ автомата ', 'шт', 350),
(6, 'Коммутация соединительной коробки в готовом отверстии (скрытая электропроводка)', 'шт', 600),
(7, 'Установка розеток и выключателей в готовое отверстие (скрытая электропроводка)', 'шт', 500),
(8, 'Установка и подключение канального вентилятора', 'шт', 1200),
(9, 'Установка люстры и светильника', 'шт', 1200),
(10, 'Установка светильников и закладных под люстру', 'точка', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `prices_plumbing-works`
--

CREATE TABLE `prices_plumbing-works` (
  `id` int(2) NOT NULL,
  `name_work` varchar(255) NOT NULL,
  `measured_by` enum('шт','м.п','точка') NOT NULL,
  `price` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prices_plumbing-works`
--

INSERT INTO `prices_plumbing-works` (`id`, `name_work`, `measured_by`, `price`) VALUES
(1, 'Установка счётчика', 'шт', 1700),
(2, 'Установка кран шаровый 1/2\"', 'шт', 500);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(4) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `review` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `email`, `phone`, `review`, `date`) VALUES
(2, 'Buddika Gunawardena', 'buddika@testing.ru', '+7533576515', 'This is a great project. Highly recommend them', '2022-02-25 16:12:18'),
(3, 'Сардор', 'sardor@gmail.com', '+1532153', 'Хорошая строительная компания', '2022-02-27 11:54:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prices_construction-finishing-works`
--
ALTER TABLE `prices_construction-finishing-works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prices_electrical-works`
--
ALTER TABLE `prices_electrical-works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prices_plumbing-works`
--
ALTER TABLE `prices_plumbing-works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prices_construction-finishing-works`
--
ALTER TABLE `prices_construction-finishing-works`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `prices_electrical-works`
--
ALTER TABLE `prices_electrical-works`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `prices_plumbing-works`
--
ALTER TABLE `prices_plumbing-works`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
