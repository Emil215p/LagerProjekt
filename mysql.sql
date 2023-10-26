-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 26, 2023 at 12:30 PM
-- Server version: 8.0.34-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `LagerProjekt`
--
CREATE DATABASE IF NOT EXISTS `LagerProjekt` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `LagerProjekt`;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `zip` int NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `address`, `zip`, `city`, `phone`, `email`, `password`) VALUES
(96, 'Jeg Tester Mig', 'Test 1', 3333, 'Nutcacity', '77777777', 'jtm@mail.com', '$2y$10$eUrmsPgFunr81X61jp3R2eJ1sUE9y0D.p6UVNQQDI3hYf.Tu7i73.'),
(97, 'Emil Kool Korm', 'Østers 5, 2', 5500, 'Moddelfart', '+4566570213', 'emil215p@lasagna.dk', '$2y$10$0JP5znegqIfKjvv8JhRRy.py2Uc3yANuL3v/Zkrghzp3C6jO8kTMi'),
(98, 'Jeg Tester Dig', 'Og Dig 2', 5700, 'Kogense', '+4522570213', 'shit@lort.piss', '$2y$10$QEGmHgVRhwB64xGKRVN1U.9h5qiIKz9CxBQcMzoB2gy4IfIv4xAZ2'),
(101, 'Hej', 'Kurt', 5323, 'Lasagne', '52135654', 'damn@mail.dk', '$2y$10$L5kb.4NowF32JnQDyU/pHObUAegy7m1z5TgdImfy.uTg781QY2Yk2'),
(102, 'Emil215p ', 'Ha', 5400, 'Bogense', '66666666', 'Gaiemaul@maul.com', '$2y$10$24BINb9qbJYtfQz/MqaM0.Xzl0zIH7Cenh8SL.bvsfCVo.OnE9HoS'),
(103, 'Emil215p ', 'Ha', 5400, 'Bogense', '666666', 'Fakemail@mail.com', '$2y$10$ZPtd77H/xPmMNu97Bb.JaeWrlmqHPBRko9CSbAZy1zi7uklYr3yxS'),
(104, '45456456', 'ergerg 5', 5443, 'Herj', '55332213', 'emil@gmail.com', '$2y$10$sMhzsXfguVzHo9bAsVeCYuX8kMz10f1f.0.PLHTG4XRraNDqPB3m.'),
(105, 'Hej John', 'Lorte', 5421, 'Broen', '75432945', 'lasagnekok@mail.dk', '$2y$10$48OmQElpF7G5HwcDR/93VeNS3n3Q.FwbWrVYcFB/GxcZOsuOO2UzO'),
(106, 'Test', 'No', 5400, 'Bogense', '+9999999999', 'test@Fakemail.com', '$2y$10$0joSGgo7dRQby9CNuM4vgO40u0A5z2HOPNYsz6OzvYG0nzFcfMhim'),
(107, 'Emil Ja Tak', 'Kagen 3', 4212, 'Hej', '22580212', 'gmail@emil.dk', '$2y$10$bAcECf9glOo7TTHKweunrO365j7mMDIJztXsqZj.MiLLGFR2w3FUq');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `name`, `address`, `phone`) VALUES
(1, 'Dasus', 'Chokolade 1', '27541236'),
(2, 'Dwell', 'Lasagne 4', '26832364'),
(3, 'MenQ', 'Spisevænget 23', '45642176');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int UNSIGNED NOT NULL,
  `customer_id` int UNSIGNED NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `date`) VALUES
(65, 96, '2023-10-19'),
(66, 96, '2023-10-20'),
(67, 96, '2023-10-20'),
(68, 96, '2023-10-20'),
(69, 96, '2023-10-20'),
(70, 96, '2023-10-20'),
(71, 103, '2023-10-24'),
(72, 96, '2023-10-26');

-- --------------------------------------------------------

--
-- Table structure for table `orderslines`
--

CREATE TABLE `orderslines` (
  `id` int UNSIGNED NOT NULL,
  `product_id` int UNSIGNED NOT NULL,
  `order_id` int UNSIGNED NOT NULL,
  `amount` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderslines`
--

INSERT INTO `orderslines` (`id`, `product_id`, `order_id`, `amount`) VALUES
(42, 7, 65, 1),
(43, 8, 65, 1),
(44, 9, 65, 1),
(45, 7, 66, 1),
(46, 2, 66, 1),
(47, 9, 66, 1),
(48, 7, 67, 1),
(49, 8, 67, 1),
(50, 9, 67, 1),
(51, 7, 68, 1),
(52, 2, 68, 1),
(53, 1, 68, 1),
(54, 8, 69, 1),
(55, 7, 69, 1),
(56, 2, 69, 1),
(57, 8, 70, 1),
(58, 9, 70, 5),
(59, 2, 71, 1),
(60, 7, 72, 1),
(61, 8, 72, 1),
(62, 9, 72, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int UNSIGNED NOT NULL,
  `manufacturer_id` int UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int NOT NULL,
  `image` text COLLATE utf8mb4_general_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `manufacturer_id`, `name`, `price`, `quantity`, `image`, `code`) VALUES
(1, 1, 'DUF Gaming 404FF', 4000.00, 50, 'DUF404.jpg', 'RyzGL'),
(2, 2, 'Dunkdad 3', 5500.00, 112, 'dad3.jpg', 'u6YT4'),
(7, 1, 'DOG DRIX FX101DS', 20000.00, 30, '101DS.jpg', 'o2Gll'),
(8, 2, 'Tower Family PC', 1000.00, 200, 'TFPC.jpg', 'l2K72'),
(9, 3, 'MenQ XP1023P', 1500.00, 125, '2411.jpg', 'OeRfH'),
(10, 2, 'Ditanium 9760', 10000.00, 10, 'itanium.jpg', 'OwZON');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `TestID` int NOT NULL,
  `Testen` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Tester` text COLLATE utf8mb4_general_ci NOT NULL,
  `Tost` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`TestID`, `Testen`, `Tester`, `Tost`) VALUES
(1, 'Lasagne', 'Hej, mit navn er john.', '2023-08-01'),
(2, 'Pizza rolls', 'Chokolade smager godt.', '2023-08-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`) USING BTREE;

--
-- Indexes for table `orderslines`
--
ALTER TABLE `orderslines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`) USING BTREE,
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `manufacturer_id` (`manufacturer_id`) USING BTREE;

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`TestID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `orderslines`
--
ALTER TABLE `orderslines`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `TestID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `orderslines`
--
ALTER TABLE `orderslines`
  ADD CONSTRAINT `orderslines_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `orderslines_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_manufacturer_id_foreign` FOREIGN KEY (`manufacturer_id`) REFERENCES `manufacturers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
