-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2024 at 07:24 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `express-tyres-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id` int(11) NOT NULL,
  `excerp` varchar(100) NOT NULL,
  `manu_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `excerp`, `manu_name`, `description`, `image`, `created_at`) VALUES
(1, '', 'Dunlop', 'Description', '0', '2024-07-11 08:17:07'),
(3, '', 'Anchee', '', '0', '2024-07-11 08:17:56'),
(4, '', 'Antares', '', '0', '2024-07-11 08:18:08');

-- --------------------------------------------------------

--
-- Table structure for table `tyres`
--

CREATE TABLE `tyres` (
  `tid` int(11) NOT NULL,
  `tyre_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `fuel_efficiency` varchar(20) NOT NULL,
  `wet-grip` varchar(255) NOT NULL,
  `road_noise` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `tyre_type` varchar(255) NOT NULL,
  `season_type` int(12) NOT NULL DEFAULT 1,
  `budget_tyre` int(12) NOT NULL DEFAULT 1,
  `tyre_price` varchar(255) NOT NULL,
  `manu_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tyres`
--

INSERT INTO `tyres` (`tid`, `tyre_name`, `image`, `fuel_efficiency`, `wet-grip`, `road_noise`, `size`, `tyre_type`, `season_type`, `budget_tyre`, `tyre_price`, `manu_id`, `p_id`) VALUES
(1, 'ECONO DRIVE', 'https://d2zcaovilvu9ff.cloudfront.net/images/tyre_catalog/tyresoft_uk/econodrive.jpg?v=10.2', 'B', 'B', '72', '225/55 R17 109/107H', 'car', 1, 1, '127.05', 1, 8),
(2, ' FASTRESPONSE', 'https://d2zcaovilvu9ff.cloudfront.net/images/tyre_catalog/tyresoft_uk/econodrive.jpg?v=10.2', 'B', 'B', '72', '225/55 R17 109/107H', 'car', 1, 1, '57.05', 1, 9),
(5, 'AC808', 'https://www.xpress-tyres.co.uk/assets/images/placeholder.png', 'c', 'c', '71', '195/60 R15 88H', 'Car', 0, 0, '51.75', 3, 11),
(6, 'Jamal Khan', 'afa', 'C', 'D', '72', '265/65 R17 112S', 'Car', 2, 1, '28500', 1, 8),
(7, 'Note 10 Pro', 'https://d2zcaovilvu9ff.cloudfront.net/images/tyre_catalog/tyresoft_biz/grandtrek_at20.png?v=10.2', 'C', 'B', '70', '225/45 R17 94Y', 'Car', 1, 1, '40000', 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tyre_patteren`
--

CREATE TABLE `tyre_patteren` (
  `pid` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `manu_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tyre_patteren`
--

INSERT INTO `tyre_patteren` (`pid`, `p_name`, `manu_id`, `created_at`) VALUES
(8, 'ECONO DRIVE', 1, '2024-07-11 09:28:30'),
(9, 'FASTRESPONSE', 4, '2024-07-11 09:28:44'),
(10, 'GRANDTREK AT20', 1, '2024-07-11 09:29:12'),
(11, 'AC808', 3, '2024-07-11 09:29:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `company_phone` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `verified` int(11) NOT NULL DEFAULT 0,
  `token` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `phone`, `password`, `company_name`, `country`, `city`, `address`, `postcode`, `company_phone`, `created_at`, `verified`, `token`, `admin`) VALUES
(7, 'Akif', 'Ullah', 'akifullah0317@gmail.com', '03176186273', '$2y$10$XLQfg0QCivNlrPlVoKBzS.Cf4x8wWamkZ76gDNjGWGIpQEUxr6TAm', 'Webspires', 'uk', 'Charsadda', 'Charsadda, KP, Pakistan', '24420', '03176186273', '2024-07-08 12:39:16', 0, '36bfb1b5a5229a37491376c13b3c55bc', 1),
(8, 'Akif', 'Ullah', 'akifullah@gmail.com', '03176186273', '$2y$10$XLQfg0QCivNlrPlVoKBzS.Cf4x8wWamkZ76gDNjGWGIpQEUxr6TAm', 'Webspires', 'uk', 'Charsadda', 'Charsadda, KP, Pakistan', '24420', '03176186273', '2024-07-08 12:39:16', 0, '36bfb1b5a5229a37491376c13b3c55bc', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tyres`
--
ALTER TABLE `tyres`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `tyre_patteren`
--
ALTER TABLE `tyre_patteren`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tyres`
--
ALTER TABLE `tyres`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tyre_patteren`
--
ALTER TABLE `tyre_patteren`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
