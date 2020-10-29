-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2020 at 07:56 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mycard`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_form`
--

CREATE TABLE `about_form` (
  `about_id` int(11) NOT NULL,
  `specialities` varchar(600) NOT NULL,
  `mission` varchar(1000) NOT NULL,
  `approach` varchar(1000) NOT NULL,
  `own_words` varchar(1000) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_form`
--

INSERT INTO `about_form` (`about_id`, `specialities`, `mission`, `approach`, `own_words`, `user_id`) VALUES
(3, '<p><span xss=\"removed\">We have consulted multiple companies in the area of application design and development.</span></p><p><span xss=\"removed\">It is crucial that your idea speaks to the end customer, causes positive emotions, and expresses the values of your company.</span></p><p><span xss=\"removed\">We live and breathe web, which is the main area of our focus.</span></p><p><span xss=\"removed\">         </span></p>', '<div xss=\"removed\"><p xss=\"removed\"><span xss=removed>We hope to provide you with similar success through our outstanding project development and maintenance services.</span><br></p></div><div xss=\"removed\"></div>', '<div xss=\"removed\"><p xss=\"removed\"><span xss=removed>We\'re passionate about client\'s success and go the extra mile to ensure ultimate satisfaction.</span></p><p xss=\"removed\"><span xss=removed>When working with Keights India Technologies, you\'re in good hands.</span><br></p></div><div xss=\"removed\"></div>', '<div xss=\"removed\"><p xss=\"removed\"><b>Keights India Technologies</b> has always aimed at being a boutique, consultative web development & web designing firm.</p><p xss=\"removed\">Our work has demonstrated significant achievement in business growth and brand development helping our clients to garner lasting results.</p><p xss=\"removed\">we hope to provide you with similar success through our outstanding project development and maintenance services. </p></div><div xss=\"removed\"></div>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `card_id` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `company_info_id` int(11) NOT NULL,
  `about_form_id` int(11) NOT NULL,
  `services_id` int(11) NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`card_id`, `url`, `company_info_id`, `about_form_id`, `services_id`, `gallery_id`, `user_id`, `views`) VALUES
(1, 'keights', 3, 3, 3, 9, 1, 114);

-- --------------------------------------------------------

--
-- Table structure for table `company_info`
--

CREATE TABLE `company_info` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `nature_business` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `website` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `facebook_link` varchar(255) NOT NULL,
  `insta_link` varchar(255) NOT NULL,
  `twitter_link` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_info`
--

INSERT INTO `company_info` (`company_id`, `company_name`, `nature_business`, `address`, `email`, `owner`, `image`, `website`, `phone`, `facebook_link`, `insta_link`, `twitter_link`, `user_id`) VALUES
(3, 'Keights India', 'Technologies', 'Unit No. S/6, Sai Sangh CHS LTD. Plot No. 3/2, Sector - 28 Nerul(West) Navi Mumbai-400706', 'info@keights.in', 'john', 'keights_logo.png', 'https://www.keights.in', '7715020010', 'https://www.facebook.com/KeightsIndia/', 'https://plus.google.com/u/0/100474324878795536819', 'https://twitter.com/KeightsIndia', 1);

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `enquiry_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `text` varchar(300) NOT NULL,
  `card_id` int(11) NOT NULL,
  `added_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`enquiry_id`, `name`, `email`, `phone`, `text`, `card_id`, `added_at`) VALUES
(1, 'John', 'john@mail.com', '1234567890', 'I need Your Service', 1, '2020-09-11 00:13:43'),
(2, 'John Boy', 'john@mail.com', '1234567890', 'I need Your Service', 2, '2020-09-11 00:13:43'),
(3, 'Rachel', 'rach@mail.com', '1234567890', 'I need Your Service', 1, '2020-09-11 00:13:43'),
(4, 'Chandler', 'chan@mail.com', '7234867890', 'I need Your Service', 1, '2020-09-11 00:13:43'),
(5, 'Monica', 'chanMon@mail.com', '7234867891', 'I need Your Service', 1, '2020-09-11 00:13:43'),
(6, 'Zatch', 'zee@mail.com', '7234827891', 'I need Your Service', 1, '2020-09-11 00:13:43'),
(7, 'Ross', 'Geller@mail.com', '7234337891', 'I need Your Service', 1, '2020-09-11 00:13:43'),
(57, 'john', 'john@mail.com', '1234567890', 'htt', 1, '2020-09-13 20:49:51'),
(58, 'john', 'john@mail.com', '1234567890', 'green', 1, '2020-09-16 12:53:05');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `rating` float NOT NULL,
  `card_id` int(11) NOT NULL,
  `added_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `name`, `feedback`, `rating`, `card_id`, `added_at`) VALUES
(11, 'John', 'Awesome!!!!', 4, 1, '2020-09-13 20:51:20'),
(13, 'john', 'good', 1, 1, '2020-09-16 12:51:18'),
(14, 'john', 'good services.', 4, 1, '2020-09-16 13:14:58');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `image_1` varchar(255) NOT NULL,
  `image_2` varchar(255) NOT NULL,
  `image_3` varchar(255) NOT NULL,
  `image_4` varchar(255) NOT NULL,
  `image_5` varchar(255) NOT NULL,
  `image_6` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `image_6`, `user_id`) VALUES
(9, 'school.jpg', 'amorize.jpg', 'ico.jpg', 'kama.jpg', 'krayrr.jpg', 'sap.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `services_id` int(11) NOT NULL,
  `services` varchar(2000) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`services_id`, `services`, `user_id`) VALUES
(3, '<div xss=\"removed\"><p xss=\"removed\"><span xss=\"removed\">At <b>keights India Technologies</b> we want to offer the widest and the most efficient services to your company. </span><span xss=\"removed\">Join and get a new level!</span><br></p></div><div xss=\"removed\"></div>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `company`, `password`, `status`) VALUES
(1, 'keights', 'keights@mail.com', 'keights', '123456789', 'completed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_form`
--
ALTER TABLE `about_form`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`card_id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `card_id` (`card_id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `company_info`
--
ALTER TABLE `company_info`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`enquiry_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`services_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_form`
--
ALTER TABLE `about_form`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company_info`
--
ALTER TABLE `company_info`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `enquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `services_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
