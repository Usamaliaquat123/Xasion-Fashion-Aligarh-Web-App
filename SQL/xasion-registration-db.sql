-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2017 at 05:24 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xasion-registration-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `categorie` varchar(256) NOT NULL,
  `product_id` int(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_title` varchar(200) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `Qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `categorie`, `product_id`, `user_id`, `product_title`, `product_image`, `Qty`, `price`, `total_amount`) VALUES
(123, 'shirt', 3, 0, 'Simons', 'Shirts/3.png', 1, 850, 850),
(124, 'shirt', 4, 0, 'Kings', 'Shirts/4.png', 1, 980, 980),
(127, 'shirt', 3, 4, 'Simons', 'Shirts/3.png', 1, 850, 850),
(128, 'shirt', 2, 4, 'Cammelion', 'Shirts/2.png', 1, 930, 930),
(129, 'shirt', 1, 4, 'Dolce & Gabbana', 'Shirts/1.png', 1, 999, 999),
(130, 'shirt', 4, 4, 'Kings', 'Shirts/4.png', 1, 980, 980);

-- --------------------------------------------------------

--
-- Table structure for table `xasions_users`
--

CREATE TABLE `xasions_users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `pwd` varchar(1000) NOT NULL,
  `ShippingAddress` varchar(256) NOT NULL,
  `type` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xasions_users`
--

INSERT INTO `xasions_users` (`id`, `firstname`, `lastname`, `email`, `pwd`, `ShippingAddress`, `type`) VALUES
(2, 'Usama', 'liaquat', 'inconnent12345@outlook.com', '1Daniyal', 'Hello', 'Admin'),
(3, 'daniyal', 'ali', 'dq@dq.com', 'usama', '', 'Users'),
(4, 'fahad', 'liaquat', 'inconnent123456@outlook.com', '1Daniyal', '', 'Users');

-- --------------------------------------------------------

--
-- Table structure for table `xasion_categorie_bodyspray`
--

CREATE TABLE `xasion_categorie_bodyspray` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `Price` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xasion_categorie_bodyspray`
--

INSERT INTO `xasion_categorie_bodyspray` (`id`, `name`, `Price`, `image`) VALUES
(1, 'Blue Seduction Perfume', '5500', '1.png'),
(2, 'Michael Jordan Perfume', '8500', '2.png'),
(3, 'David Beckham Perfume', '11500', '3.png');

-- --------------------------------------------------------

--
-- Table structure for table `xasion_categorie_glass`
--

CREATE TABLE `xasion_categorie_glass` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `Price` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `xasion_categorie_jeans`
--

CREATE TABLE `xasion_categorie_jeans` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `Price` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xasion_categorie_jeans`
--

INSERT INTO `xasion_categorie_jeans` (`id`, `name`, `Price`, `image`) VALUES
(1, 'Silons Jeans', '3000', '1.jpg'),
(2, 'Plain Black Jeans', '2000', '2.jpg'),
(3, 'Light blue jeans', '4500', '3.jpg'),
(4, 'Dark Brown jeans', '5500', '4.jpg'),
(5, 'Black and Brown Jeans', '6300', '5.jpg'),
(6, 'Dark Blue Jeans', '5300', '6.jpg'),
(7, 'light black jeans', '4400', '7.jpg'),
(8, 'light blue jeans', '5500', '8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `xasion_categorie_kurta`
--

CREATE TABLE `xasion_categorie_kurta` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xasion_categorie_kurta`
--

INSERT INTO `xasion_categorie_kurta` (`id`, `name`, `Price`, `image`) VALUES
(1, 'Arions Sherwani', '17000', '1.png'),
(2, 'Sartz Kurta', '12000', '2.jpg'),
(3, 'Camlson Kurta', '12500', '3.jpg'),
(4, 'Camlson Sions Kurta', '18500', '4.jpg'),
(5, 'Camlson Sherwani', '20500', '5.png'),
(6, 'Fzal''s Sherwani', '16500', '6.jpg'),
(8, 'Silmon''s Sherwani', '22500', '8.jpg'),
(9, 'Gold''s Sherwani', '15000', '7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `xasion_categorie_shirts`
--

CREATE TABLE `xasion_categorie_shirts` (
  `id` int(11) NOT NULL,
  `Name` varchar(256) NOT NULL,
  `Price` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xasion_categorie_shirts`
--

INSERT INTO `xasion_categorie_shirts` (`id`, `Name`, `Price`, `image`) VALUES
(1, 'Dolce & Gabbana', '999', '1.png'),
(3, 'Simons', '850', '3.png'),
(4, 'Kings', '980', '4.png'),
(5, 'Wald Stuck', '950', '5.png'),
(6, 'Humanity', '850', '6.png'),
(7, 'Cancy', '800', '7.png'),
(8, 'DevOp''s', '950', '8.png'),
(9, 'Cammelion', '930', '2.png');

-- --------------------------------------------------------

--
-- Table structure for table `xasion_categorie_watch`
--

CREATE TABLE `xasion_categorie_watch` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `Price` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xasion_categorie_watch`
--

INSERT INTO `xasion_categorie_watch` (`id`, `name`, `Price`, `image`) VALUES
(1, 'Sky (iOs)', '53,290.00', '1.png'),
(2, 'Camson(iOs)', '14,290.00', '2.png'),
(3, 'Snufsios(Android)', '10,290.00', '3.png'),
(4, 'hamnsion', '1,290.00', '4.png'),
(5, 'kamnsion', '600.00', '5.png'),
(6, 'rlsonic', '3,500.00', '6.png'),
(7, 'Apple One', '45,550.00', '7.png'),
(8, 'Apple One (S9)', '65,699.00', '8.png');

-- --------------------------------------------------------

--
-- Table structure for table `xasion_feedback`
--

CREATE TABLE `xasion_feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xasion_feedback`
--

INSERT INTO `xasion_feedback` (`id`, `name`, `email`, `message`) VALUES
(1, 'Simon', 'Robbnson', 'I want to buy your product. What can do first!');

-- --------------------------------------------------------

--
-- Table structure for table `xasion_subscriber`
--

CREATE TABLE `xasion_subscriber` (
  `id` int(11) NOT NULL,
  `email` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xasion_subscriber`
--

INSERT INTO `xasion_subscriber` (`id`, `email`) VALUES
(1, 'inconnent123456@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xasions_users`
--
ALTER TABLE `xasions_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xasion_categorie_bodyspray`
--
ALTER TABLE `xasion_categorie_bodyspray`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xasion_categorie_glass`
--
ALTER TABLE `xasion_categorie_glass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xasion_categorie_jeans`
--
ALTER TABLE `xasion_categorie_jeans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xasion_categorie_kurta`
--
ALTER TABLE `xasion_categorie_kurta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xasion_categorie_shirts`
--
ALTER TABLE `xasion_categorie_shirts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xasion_categorie_watch`
--
ALTER TABLE `xasion_categorie_watch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xasion_feedback`
--
ALTER TABLE `xasion_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xasion_subscriber`
--
ALTER TABLE `xasion_subscriber`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
--
-- AUTO_INCREMENT for table `xasions_users`
--
ALTER TABLE `xasions_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `xasion_categorie_bodyspray`
--
ALTER TABLE `xasion_categorie_bodyspray`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `xasion_categorie_glass`
--
ALTER TABLE `xasion_categorie_glass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `xasion_categorie_jeans`
--
ALTER TABLE `xasion_categorie_jeans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `xasion_categorie_kurta`
--
ALTER TABLE `xasion_categorie_kurta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `xasion_categorie_shirts`
--
ALTER TABLE `xasion_categorie_shirts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `xasion_categorie_watch`
--
ALTER TABLE `xasion_categorie_watch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `xasion_feedback`
--
ALTER TABLE `xasion_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `xasion_subscriber`
--
ALTER TABLE `xasion_subscriber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
