-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2024 at 07:12 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmequipmentrentals`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_contact`
--

CREATE TABLE `admin_contact` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_type` varchar(70) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_contact`
--

INSERT INTO `admin_contact` (`id`, `email`, `user_type`, `message`) VALUES
(1, 'rahul58@gmail.com', 'buyer', 'Heyy there!');

-- --------------------------------------------------------

--
-- Table structure for table `booked_orders`
--

CREATE TABLE `booked_orders` (
  `id` int(11) NOT NULL,
  `product_name` varchar(355) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `email` varchar(355) DEFAULT NULL,
  `contact_no` varchar(20) DEFAULT NULL,
  `address` varchar(455) DEFAULT NULL,
  `product_type` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booked_orders`
--

INSERT INTO `booked_orders` (`id`, `product_name`, `quantity`, `email`, `contact_no`, `address`, `product_type`) VALUES
(1, 'Plant-based fertilizer', 1, 'gayatrimore555@gmail.com', '7875273306', 'Malegaon, Nashik', NULL),
(2, 'apples', 2, 'gayatrimore416@gmail.com', '8957689059', 'India, Maharashtra, Nashik', 'crops'),
(3, 'oranges', 5, 'samarthshaha@gmail.com', '7875273306', 'Malegaon nasik\r\nHouse number 20 behind morya mall shivaji nagar', 'crops'),
(4, 'stowberry', 1, 'samarthshaha@gmail.com', '7875273306', 'Malegaon nasik\r\nHouse number 20 behind morya mall shivaji nagar', 'crops');

-- --------------------------------------------------------

--
-- Table structure for table `posted_services`
--

CREATE TABLE `posted_services` (
  `id` int(11) NOT NULL,
  `service` varchar(255) DEFAULT NULL,
  `service_picture` varchar(455) DEFAULT NULL,
  `title` varchar(355) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `service_type` varchar(250) DEFAULT NULL,
  `rate` decimal(10,2) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `email` varchar(355) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posted_services`
--

INSERT INTO `posted_services` (`id`, `service`, `service_picture`, `title`, `quantity`, `service_type`, `rate`, `location`, `email`) VALUES
(1, 'on', 'carrot.jpg', 'carrot', 5, 'on', 30.00, 'india', 'sid@gmail.com'),
(2, 'Crops', 'rice.jpg', 'Rice', 20, 'Sell', 50.00, 'India', 'rahul58@gmail.com'),
(3, 'Machinery', 'recent-img1.jpg', 'Tractor', 3, 'Rent', 2000.00, 'Pune, Maharashtra', 'samarthshaha@gmail.com'),
(4, 'Machinery', 'mover.jpg', 'Mover', 2, 'Rent', 20000.00, 'Pune, Maharashtra', 'johndoe785@gmail.com'),
(5, 'Crops', 'template.jpg', 'Construction Service', 1, 'Sell', 50000.00, 'Nashik, Maharashtra', 'samarthshaha@gmail.com'),
(6, 'Fertilizers', 'Superphosphate.jpg', 'Fertilizer', 2, 'Sell', 200.00, 'Nashik, Maharashtra', 'samarthshaha@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `sold_products`
--

CREATE TABLE `sold_products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `product_type` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact_number` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sold_products`
--

INSERT INTO `sold_products` (`id`, `product_name`, `quantity`, `product_type`, `email`, `contact_number`, `address`, `description`) VALUES
(1, 'Fresh Potato', 3, 'crops', 'hemangirai95@gmail.com', '8006879564', 'India, Maharashtra.', '3kg Potatos'),
(2, 'Fresh Potato', 3, 'crops', 'hemangirai95@gmail.com', '8006879564', 'India, Maharashtra.', '3kg Potatos'),
(3, 'Fresh Potato', 3, 'crops', 'hemangirai95@gmail.com', '8006879564', 'India, Maharashtra.', '3kg Potatos'),
(4, 'Fresh Potato', 3, 'crops', 'hemangirai95@gmail.com', '8006879564', 'India, Maharashtra.', '3kg Potatos');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `user_type` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `mobile`, `user_type`, `password`) VALUES
(1, 'Rahul', 'rahul58@gmail.com', '8005873567', 'Buyer', 'rahul123'),
(2, 'john doe', 'johndoe785@gmail.com', '9056489799', 'Seller', 'john123'),
(3, 'shreya jain', 'shreyajain99@gmail.com', '8967502879', 'Seller', 'shreya123'),
(4, 'samarth shaha', 'samarthshaha@gmail.com', '9922067354', 'Seller', 'samarth123'),
(5, 'sid', 'sid@gmail.com', '8007568794', 'Buyer', 'sid123'),
(6, 'sneha singh', 'sneha555@gmail.com', '9012345678', 'Seller', 'sneha123');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(11) NOT NULL,
  `profile_picture` varchar(355) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`id`, `profile_picture`, `username`, `bio`, `email`) VALUES
(1, '????\0JFIF\0\0\0\0\0\0???ICC_PROFILE\0\0\0?\0\0\0\00\0\0mntrRGB XYZ \0\0\0\0\0\0\0\0\0\0\0\0acsp\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0??\0\0\0\0\0?-\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0	desc\0\0\0?\0\0\0$rXYZ\0\0\0\0\0gXYZ\0\0(\0\0\0bXYZ\0\0<\0\0\0wtpt\0\0P\0\0\0rTRC\0\0d\0\0\0(gTRC\0\0d\0\0\0(bTRC\0\0d\0\0\0(cprt\0\0?\0\0\0<mluc\0\0\0\0\0\0\0\0\0\0enUS\0\0\0\0\0\0\0s\0R\0G\0BXYZ \0\0\0\0\0\0o?\0\08?\0\0?XYZ \0\0\0\0\0\0b?\0\0??\0\0?X', 'Rental Hub', 'Location: Maharashtra', NULL),
(2, '?PNG\r\n\Z\n\0\0\0\rIHDR\0\0\0\0\0\0\0\0\0??h?\0\0\0 cHRM\0\0z&\0\0??\0\0?\0\0\0??\0\0u0\0\0?`\0\0:?\0\0p??Q<\0\0\0bKGD\0?\0?\0?????\0\0?\0IDATx???y??F??{ǎPH?YsŌ??>??޻????pNw{???s?U9I???????m0????[?t?m??FKO<z??\0\0\0\0\0????/\0\0\0\0\0??\0\0\0\0\0t\0\0\0\0?\0\0\0\0?	0\0\0\0\0?`\0\0\0\0@\'?\0\0\0\0?N ?\0\0\0\0?@\0\0\0\0\0:?\0\0\0\0\0t\0\0\0\0?\0\0\0\0?	0\0\0\0\0?`\0\0\0\0@\'?\0\0\0\0?N ?\0\0\0\0?@\0\0\0\0\0:?\0\0\0\0\0t\0\0\0\0?\0\0\0\0?	0\0\0\0\0?', 'agroo site', 'agroo site', NULL),
(3, '????\0JFIF\0\0\0\0\0\0??\0?\0					\"\"*%%*424DD\\					\"\"*%%*424DD\\??\0h \"\0??\0\0\0\0\0\0\0\0\0\0\0\0\0\0	??\0\0\0\0\0??9?s??9?s??9?s??O??tD [g?|???h?????Kx?X??b??#?))h?_?n?Zo°?\\J)?&V??3\")?j7*P??r??	?.?????s??9?s??9?P?S\0;?u?{,l[?7?????jN}??r??|(', 'tourisms', 'tourist services', NULL),
(4, '????\0JFIF\0\0H\0H\0\0??\0C\0\n\n\n		\n\Z%\Z# , #&\')*)-0-(0%()(??\0C\n\n\n\n(\Z\Z((((((((((((((((((((((((((((((((((((((((((((((((((??\044\"\0??\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0??\0\0\0\0\0\0\0\0\0\0\0\0\0\0??\0\0\0\0+fƈ??.?J2?It?????@?x????I?HLQp?2???`??$?w?d?h?A46!?\n????!?#\r2mAH\n??)???h??;?I t?$', 'plant healthcare', 'plant doctor consultancies', NULL),
(5, 'uploaded-profile-pictures/animal-worksample1.jpg', 'animal consultancies', 'we are animal consultant.\r\ncontact: +91 9067795574', NULL),
(6, 'uploaded-profile-pictures/crops-cover-bg.jpg', 'goods providers', 'we offer fresh fruits from our farm.', NULL),
(7, 'barnwood-builders.png', 'Barn Builders', 'Welcome! we are Barnyard Builders.', NULL),
(8, 'plant-cover.png', 'Plant Health Consultant', 'We are doctors, specialized in plant heath.', NULL),
(9, 'agro-tourism-consultants.png', 'agroo tourism', 'our team offers tourism services.\r\ncontact @: +91 9956608679', 'rahul58@gmail.com'),
(10, 'construction-team2.jpeg', 'Barn Builder', 'We build shelters for your animal livings.', 'johndoe785@gmail.com'),
(11, 'leeks-3.jpg', 'Shreya\'s Shopy', 'Hey there, I\'m a farmer and I offer fresh veggies from my farm.', 'shreyajain99@gmail.com'),
(12, 'Potato-1.jpg', 'Samarth Goods', 'Location: Maharashtra, india', 'samarthshaha@gmail.com'),
(13, 'corn-3.jpg', 'Farm Fresh Corns', 'we serve fresh corns to you.', 'samarthshaha@gmail.com'),
(14, 'carrot.jpg', 'fresh carrots', 'book your order.', 'samarthshaha@gmail.com'),
(15, 'fairy 3.png', 'sid', 'Nashik, Maharashtra', 'sid@gmail.com'),
(16, 'fairy 1.png', 'sid', 'Maharashtra', 'sid@gmail.com'),
(17, 'fairy 1.png', 'sid', 'Maharashtra', 'sid@gmail.com'),
(18, 'fairy 5.png', 'sid', 'Maharashtra', 'sid@gmail.com'),
(19, 'fairy 5.png', 'sid', 'Maharashtra', 'sid@gmail.com'),
(20, 'rice-4.jpg', 'Sneha\'s Grocery', 'I offer variety of food items.', 'sneha555@gmail.com'),
(21, 'rice-4.jpg', 'Sneha\'s Grocery', 'Contact at: 8956745375', 'sneha555@gmail.com'),
(22, 'rice-4.jpg', 'Sneha\'s Grocery', 'Contact at: 8956745375', 'sneha555@gmail.com'),
(23, 'rice-4.jpg', 'Sneha\'s Grocery', 'Contact at: 8956745375', 'sneha555@gmail.com'),
(24, 'rice-4.jpg', 'Sneha\'s Grocery', 'I offer variety of food items.', 'sneha555@gmail.com'),
(25, 'logo.png', 'sid', 'Hey there...Hope you are doing great!\r\nI\'m Developer of this site.', 'sid@gmail.com'),
(26, 'logo.png', 'sid', 'Hey there...Hope you are doing great!\r\nI\'m Developer of this site.', 'sid@gmail.com'),
(27, 'pexels-lamar-belina-6995567.jpg', 'Samarth\'s Services', 'contact me @ +91 8007649586', 'samarthshaha@gmail.com'),
(28, 'cauliflower1.jpg', 'Sneha\'s Grocery', 'Contact at: 8956745375', 'sneha555@gmail.com'),
(29, 'cauliflower1.jpg', 'Sneha\'s Grocery', 'Contact at: 8956745375', 'sneha555@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_contact`
--
ALTER TABLE `admin_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booked_orders`
--
ALTER TABLE `booked_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posted_services`
--
ALTER TABLE `posted_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sold_products`
--
ALTER TABLE `sold_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_contact`
--
ALTER TABLE `admin_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booked_orders`
--
ALTER TABLE `booked_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posted_services`
--
ALTER TABLE `posted_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sold_products`
--
ALTER TABLE `sold_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
