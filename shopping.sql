-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2017 at 03:11 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(50) NOT NULL,
  `f_id` int(50) NOT NULL,
  `m_add` varchar(300) NOT NULL,
  `user_id` int(50) NOT NULL,
  `f_title` varchar(100) NOT NULL,
  `f_images` text NOT NULL,
  `qty` int(200) NOT NULL,
  `price` int(200) NOT NULL,
  `total_amount` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `f_id`, `m_add`, `user_id`, `f_title`, `f_images`, `qty`, `price`, `total_amount`) VALUES
(59, 3, '0', 15, 'butter paneer', 'images.JFIF', 1, 200, 200),
(60, 1, '0', 0, 'salma', 'jai.JPG', 1, 400, 400),
(61, 6, '0', 15, 'bua', 'bua.JPG', 1, 100, 100),
(63, 2, '0', 15, 'indian-vegetarian', 'indian-vegetarian-recipes-veg-recipes.JPG', 1, 300, 300);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `c_id` int(250) NOT NULL,
  `c_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`c_id`, `c_title`) VALUES
(1, 'VEGETARIAN'),
(2, 'NON-VEGETARIAN'),
(3, 'CHINESE'),
(4, 'FAST N FOOD'),
(5, 'CRUNCHY DOSA'),
(6, 'MASALA COMBINATION');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` int(100) NOT NULL,
  `food_cat` int(100) NOT NULL,
  `food_range` int(100) NOT NULL,
  `food_title` varchar(200) NOT NULL,
  `food_price` int(100) NOT NULL,
  `food_desc` text NOT NULL,
  `food_images` text NOT NULL,
  `food_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `food_cat`, `food_range`, `food_title`, `food_price`, `food_desc`, `food_images`, `food_keywords`) VALUES
(2, 1, 3, 'indian-vegetarian', 300, 'indian vegetarian-recipes-veg-recipes', 'indian-vegetarian-recipes-veg-recipes.JPG', 'indian,vegetarian,recipes,veg-recipes'),
(3, 1, 5, 'butter paneer', 200, '', 'images.JFIF', ''),
(5, 1, 2, 'armour', 200, 'armourfood', 'armour-food.JPG', 'armourfood'),
(6, 1, 3, 'bua', 100, '', 'bua.JPG', ''),
(8, 1, 2, 'chana-masala', 80, '', 'chana-masala-vegan-vegetarian.jPG', ''),
(10, 4, 1, 'Daveli', 20, '', 'daveli.JPG', ''),
(12, 6, 6, 'Mutter-Paneer', 123, '', 'Mutter-Paneer.JPG', ''),
(13, 6, 6, 'non-veg-food', 120, '', 'non-veg-food-2917727.JPG', ''),
(14, 5, 4, 'veg toast', 40, '', 'veg toast.JPG', ''),
(15, 1, 3, 'Paneer Tikka', 110, 'Paneer tikka is an Indian dish made from chunks of paneer marinated in spices', 'paneertikka.JFIF', 'Paneer tikka'),
(16, 1, 3, 'Paneer Pulao', 130, 'paneer pulao recipe', 'paneerpulao.JFIF', 'paneer,pulao'),
(17, 1, 2, 'Mixed Veg', 60, 'Mix Veg Sabzi or Mix Vegetable Sabzi', 'mixveg.JFIF', 'Mixed, Veg'),
(18, 2, 3, 'Chicken Curry', 120, 'Chicken curry is a common delicacy in Asia', 'Chickencurry.JPG', 'Chicken,curry'),
(19, 1, 3, 'Mushroom Masala', 150, 'Mushroom Masala', 'mushroom.JPG', 'Mushroom,Masala'),
(20, 1, 2, 'Palak Paneer', 90, 'Palak Paneer', 'Palak-Paneer.JPG', 'Palak,Paneer'),
(21, 1, 3, 'Paneer Butter Masala', 140, 'Paneer Butter Masala', 'Paneer Butter Masala.JPG', 'Paneer ,Butter, Masala'),
(22, 1, 1, 'Aloo Gobi', 49, 'aloo-gobi', 'aloo-gobi.JPG', 'aloo,gobi');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(100) NOT NULL,
  `c_id` int(100) NOT NULL,
  `r_id` int(100) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `p_title` text NOT NULL,
  `p_img1` text NOT NULL,
  `p_img2` text NOT NULL,
  `p_img3` text NOT NULL,
  `p_price` int(200) NOT NULL,
  `p_desc` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ranges`
--

CREATE TABLE `ranges` (
  `r_id` int(250) NOT NULL,
  `r_prices` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ranges`
--

INSERT INTO `ranges` (`r_id`, `r_prices`) VALUES
(1, 'less than 50'),
(2, '50 to 100'),
(3, '100 to 150'),
(4, '150 to 200'),
(5, '200 to 250'),
(7, 'less than 500'),
(8, '500 to 1000'),
(9, '1000 to 2000'),
(10, '2000 to 5000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(250) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `email` varchar(120) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address1` varchar(200) NOT NULL,
  `address2` varchar(200) NOT NULL,
  `city` text NOT NULL,
  `pin_code` varchar(11) NOT NULL,
  `state` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `f_name`, `l_name`, `email`, `mobile`, `password`, `address1`, `address2`, `city`, `pin_code`, `state`) VALUES
(15, 'Niraj', 'Kumar', 'nirajindia99@gmail.com', '8434734799', 'niraj@123', 'dimna', 'hill will colony flat no- 333 ', 'jamshedpur', '831012', 'jharkhand'),
(16, 'n', 'k', 'niraj@gmail.com', '9430912367', 'niraj@1', 'dimna', 'mango ', 'jamshedpur', '832310', 'jharkhand'),
(17, 'Niraj', 'Kumar', 'nirajindia@gmail.com', '8521109949', 'icando', 'hill will colony halt no : 233', 'Dimna chowk ', 'Jamshedpur', '831012', 'Jharkhand');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `ranges`
--
ALTER TABLE `ranges`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `c_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ranges`
--
ALTER TABLE `ranges`
  MODIFY `r_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
