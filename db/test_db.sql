-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 04:26 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `package` varchar(255) NOT NULL,
  `date_booked` varchar(100) NOT NULL,
  `add_on` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `text` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `title`, `text`, `price`) VALUES
(1, 'Sunset Cruise', 'Great for travelling couples and honeymooners, it also includes buffet dinner on cruise', 200),
(2, 'Mangrove Tour', 'Offers some truly unforgettable sights and experiences on this tour while passing through winding river, you will observe the wonders of the park\'s marine ecosystem, its flora and fauna and the natural inhabitants\r\n', 120),
(3, 'Island Hoping', 'Visit Langkawi\'s popular islands on a boat tour, perfect for nature lovers and also witness magnificent eagles', 50),
(4, 'enjoy the view', '', 0),
(5, 'the docks', '', 0),
(6, 'dinner on cruise', '', 0),
(7, 'Mangrove area', '', 0),
(8, 'Fish farm', '', 0),
(9, 'Bat cave', '', 0),
(10, 'Eagle watching', '', 0),
(11, 'Dayang Bunting Island', '', 0),
(12, 'Beras Basah Island', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`) VALUES
(48, 'u.aqillah@graduate.utm.my', '$2y$10$nMaYwT35ec2FKasYNd4QM.tE40KljLVntv3C.60Vte5Mu3mFgNNDi', 'Ummu'),
(49, 'ahmad@graduate.utm.my', '61243c7b9a4022cb3f8dc3106767ed12', 'ahmad'),
(51, 'liana@gmail.com', '$2y$10$vpdmHq3QjA26gSiTCLtlyupfszW6i.0MuzK9x9xagW12pV8HsVH4.', 'liana'),
(52, 'ummu@gmail.com', 'a8801e6033db28cb4887ed114983942a', 'Ummu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
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
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
