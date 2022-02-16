-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2022 at 01:49 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mmdw5`
--

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `user_id`, `question`, `answer`) VALUES
(10, 4, 'WHAT PRODUCTS ARE AVAILABLE AT GOLD IS GYM NUTRITION?', 'At Gold is Gym Nutrition, you will find everything you need for a legendary workout – whether you want to finally achieve more success in the gym or you are already moving at bodybuilding level. We offer top-class fitness food and supplements that have it all. Our range includes not only basic products like whey protein, protein drinks, shakes and bars, but also high-quality shots, liquids, powders and caps. In addition, you will find a variety of vegan, soy-free, gluten-free and low-fat products.'),
(11, 4, 'HOW DO YOU ENSURE PRODUCT QUALITY AND SAFETY?', 'The quality and safety of our nutrition products is not only a top priority for our product developers, but also for our entire team. '),
(12, 3, 'The quality and safety of our nutrition products is not only a top priority for our product developers, but also for our entire team. ', 'Do not worry, each of our products has been thoroughly tested by qualified nutritionists and are not harmful to you. Please follow the recommended intake for each product. Are you suffering from a chronic illness, pregnant or breastfeeding? Then you should always discuss the consumption of fitness food with your doctor. Better safe than sorry! '),
(13, 4, 'WHAT IS THE SHELF LIFE OF OPENED PRODUCTS?', 'This differs from product to product. The instant consumption products (such as bars) should be consumed immediately for an ideal taste experience. Stock products such as powders etc. can be stored in a cool, dry and dark place in their sealed packaging until the stated best-before date. Please note the best-before date (\"BBD\") on the packaging, not to be confused with the production date, which is marked with \"L\" or \"LOT\".'),
(14, 4, 'ARE GOLD IS GYM NUTRITION PRODUCTS ALSO SUITABLE FOR BEGINNERS?', 'Yes! Our products are suitable for everyone who wants to achieve their personal, small or large training goal. Have you just started training or are you not yet that experienced? With the right basic products such as shakes, bars and drinks, Gold is Gym Nutrition supports you every day anew on your individual path! And who knows, maybe with our help you will soon no longer be a beginner! '),
(15, 4, 'WHICH OF YOUR PRODUCTS ARE MANUFACTURED ACCORDING TO THE CFM METHOD?', ', produced in Germany according to the highest standards, is obtained using the CFM method. Thanks to the special microfiltration process, the gently extracted whey protein has a very high biological value. It is digested within a very short time and is quickly available to your muscles. The shake consists of 90% whey protein isolate, contains only 0.2g sugar and 0.3g fat per serving. This makes the high-quality protein shake ideal for competitive athletes or those on a diet.'),
(16, 3, 'I ACCIDENTALLY ORDERED THE WRONG PRODUCT/SIZE. WHAT CAN I DO?', 'Please note that we cannot change your order once you have completed it. Send us a message via our contact form. '),
(17, 4, 'CAN I GIVE YOU FEEDBACK?', 'We are pleased to receive your tips and wishes. If you are not so happy or have general suggestions, we are glad to receive them in order to further optimise our processes. '),
(18, 4, 'CAN I ALSO BUY THE PRODUCTS IN THE STORE?', 'You can also buy our Gold is Gym products in our Gold is Gym studios in Germany.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
