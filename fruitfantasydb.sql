-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 17, 2022 at 05:10 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fruitfantasydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcatagories`
--

CREATE TABLE `tblcatagories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `products` varchar(6) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcatagories`
--

INSERT INTO `tblcatagories` (`id`, `name`, `products`, `description`) VALUES
(1, 'Apple', '5', 'apple, (Malus domestica), fruit of the domesticated tree Malus domestica (family Rosaceae), one of the most widely cultivated tree fruits.'),
(2, 'Citrus', '12', 'Citrus fruits are high in vitamin C, a nutrient known to help give your immune system a boost. It encourages your immune system to produce white blood cells, which are necessary to fight infections.'),
(3, 'Stone Fruit', '6', 'Stone fruits arenâ€™t as potassium-rich as, say, bananas. But since most Americans struggle to get the recommended 4,700 milligrams per day, every little bit you can get makes a difference, especially if youâ€™re trying to lower your blood pressure.');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `categoryName` varchar(100) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `categoryName`, `quantity`, `description`) VALUES
(1, 'Pink Lady', 'Apple', '199', 'This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.'),
(2, 'Bramley', 'Apple', '222', 'This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fName` varchar(100) NOT NULL,
  `lName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `passw` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fName`, `lName`, `email`, `phone`, `passw`, `gender`) VALUES
(1, 'aaab', 'bbb', 'ab@gmail.com', '099000888', '1', 'male'),
(3, 'Rasula', 'Makbul', 'emu.cfs@gmail.com', '+8801723564000', '123', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcatagories`
--
ALTER TABLE `tblcatagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcatagories`
--
ALTER TABLE `tblcatagories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
