-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 06:09 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `productImage` varchar(255) NOT NULL,
  `productBrand` varchar(255) NOT NULL,
  `productPrice` float NOT NULL,
  `product_mid` text NOT NULL,
  `p_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_type` text NOT NULL,
  `product_bm` varchar(255) NOT NULL,
  `model_id` text NOT NULL,
  `price` float NOT NULL,
  `registration_date` date NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_type`, `product_bm`, `model_id`, `price`, `registration_date`, `product_image`) VALUES
(11, 'Laptop', 'ROG Zephyrus Duo 15 SE', 'E34CNKN44VP', 155000, '2021-06-01', '60d997c7786f8.webp'),
(12, 'Laptop', 'Lenovo Legion 7', 'Q2OKCN4M2O', 155000, '2021-06-01', '60d9986983f28.webp'),
(15, 'Accessories', 'Palit GeForce RTX 3060 Dual Video Graphics Card', 'W3VE4VDFG5', 100000, '2021-06-28', '60d9a6ff12b39.jpg'),
(18, 'Laptop', 'MSI Bravo 15/17', 'VN7793G750Z', 125000, '2021-06-29', '60daf6294869e.webp'),
(19, 'PC', 'HP Omen 25L30L', 'IUHIU890JY7C', 225000, '2021-06-30', '60dc46ada9927.webp'),
(20, 'PC', 'Alienware Aurora R10', 'EREGHG65DL', 150000, '2021-06-30', '60dc46e694c14.webp'),
(21, 'PC', 'HP Pavilion Gaming Tower', 'VN779OP750Z', 125000, '2021-06-30', '60dc472a6f8c3.webp'),
(22, 'PC', 'ROG Strix GA15', 'VN77932EI5FS', 230000, '2021-06-30', '60dc475fcd7b8.webp'),
(23, 'Accessories', 'ZOTAC GAMING GeForce RTX™ 2060', 'V79G79YV6D0', 125000, '2021-06-30', '60dc4abfeaade.jpg'),
(24, 'Accessories', 'Hp OMEN X 35 inch WQHD Curved Anti-glare LED Monitor', 'YUJ9YIH776P9', 154000, '2021-06-30', '60dc4b6d0d2e2.jpg'),
(25, 'Accessories', 'AOC CU34G2X 34 inch Curved Gaming Monitor', 'TR6UK93G750Z', 116000, '2021-06-30', '60dc4c50685bd.jpg'),
(27, 'Laptop', 'Lenovo IdeaPad 110', 'UMAIRSAEED2196', 32000, '2021-07-01', '60dcc74c50dc1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `c_id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phoneno` int(11) NOT NULL,
  `birth` date NOT NULL,
  `gender` text NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`c_id`, `first_name`, `last_name`, `email`, `password`, `phoneno`, `birth`, `gender`, `type`) VALUES
(18, 'Haris', 'Rahat', 'haris@admin.com', '$2y$10$J0LiG39PgqHIAb.aHh/bTuC8R4ixW/6jFvwg.sMvrmxAfzRjAEsP.', 2147483647, '2001-01-19', 'Male', 'admin'),
(19, 'Haris', 'Rahat', 'haris@gsolutions.com', '$2y$10$AOrFsXaZkWFTmkh3n572a.709tYWnqV.k7YSPiiArOCigpS/QZZUi', 2147483647, '2001-01-19', 'Male', 'manager'),
(23, 'Umair', 'Saeed', 'umair@gmail.com', '$2y$10$PT2N8OOPNDOY6EI4.qxgS.2Oghd2o65nizt5aSl5xscQQsZBfmNpu', 2147483647, '2021-06-01', 'Male', 'client'),
(24, 'Haris', 'Rahat', 'haris@gmail.com', '$2y$10$TQfQTQ3Azq8.DRN1oBJKluJFPflUYysqIzj8Opliy1gABvMS8TBgi', 2147483647, '2021-07-01', 'Male', 'client'),
(28, 'haris', 'rahat', 'haris@gsolutions.com', '$2y$10$4DeZ0koTX4JtpBpbIEoyfeFfK/nqYHdv3gTdY43nfs6wY5stUADqW', 2147483647, '2021-07-01', 'Select', 'manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
