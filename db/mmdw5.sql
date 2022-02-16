-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2022 at 01:55 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `review` text NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `description`, `review`, `images`) VALUES
(1, 'OumuEle Fitness Work Out Machine Exercise', 3000, 'Brand new and high quality\r\nMade for Home Gym\r\nIdeal for basic or advanced workouts\r\nTraining daily with this type of station can lead to stunning results\r\nComplete workout in a small space\r\nPadded bench for comfortable training\r\nCable and bar for pull downs\r\nCable and bar for rowing style exercises\r\n', 'Yep the sleeves are released by a butterfly clamp on each side to take the smaller diameter weights', '72.jpeg'),
(2, 'XMark Adjustable FID Weight Bench, 11-Gauge, 1500 lb. Capacity, 7 Back Pad Positions from Decline to Full Military Press Position, Ergonomic 3 Position Adjustable Seat XM-7630', 799, 'The XMark 7630 adjustable weight bench offers unbeatable comfort and durability from a decline at -20 degrees to military press position.\r\nThis FID weight bench is constructed with a heavy-duty 11-gauge 2\" x 3\" steel mainframe and offers a 7-position adjustable back pad coupled with an ergonomically designed 3-position seat, both made of extra thick 3\" Duracraft padding and covered in sweat and tear-resistant Duraguard vinyl​. The built-in transport wheels make moving and storing this bench a breeze. You can also easily maneuver it in and out of power cages, racks, cable machines, etc.\r\nWith a 1500 lb weight capacity and foothold down bar to complete the package, the XMark 7630 adjustable FID bench makes for the sturdiest and most effective weight bench around and it is a perfect addition to any home gym.\r\n', 'Yes it does love this bench it sturdy aND very easy to use\r\n', '73.jpeg'),
(4, 'FLYBIRD Weight Bench, Adjustable Strength Training Bench for Full Body Workout with Fast', 1200, 'FLYBIRD,which is design and produce fitness equipment for 20 years. Especially in WEIGHT BENCH, the bench was designed with advice of professional coach. You need a durable bench,Not a one month bench\r\nHIGH QUALITY BENCH: Made of Commercial Thickness Steel, past thousands of weight test to ensure safety for workout every-time, Perfect size for most people and 100% reliable data. Not the lied bench.\r\n', 'This bench is great...good quality, sturdy, smooth operation and folds up nicely for easy storage. My only gripe is that it is just too tall. Most weight benches are around 17-18\" high off the ground; this one is 21 inches. ', '74.jpg'),
(5, 'Bowflex SelectTech 552 Adjustable Dumbbell', 500, 'Select the weight you want with the turn of a dial, locking in the weight you select and leaving behind the weight you don’t.\r\n', 'I have not done push-ups with them but I believe they are sturdy enough to do so. I love them! ', '75.jpg'),
(6, 'YOSUDA Indoor Cycling Bike Stationary - Exercise Bike for Home Gym ', 1500, 'Updated version L-007A - well-built exercise bike from the inside out. With its rock-solid foundation and atheletic aesthetic design, it is at the top of the game. Thickened frame tube, precision manufacturing,overcomes the wobbly defect of most of cycle bikes in the market. Give you safer riding. Excellent bearing capacity for rider up to 330LBS. This is an energetic exercising bike, bring you cycling experience which is compared with riding classes! \r\nHigh-density steel tube and precise welding. No wobbly! \r\nUltra smooth and quiet belt drive \r\n40LBS heavy flywheel inspire your potential \r\nAnti-skid cage pedal for safety \r\n2-ways (up/down) adjustable handlebar and 4-ways (forward/back and up/down) adjustable seat \r\nDigital monitor and tablet bracket \r\nInside length: 29-36 inches;Set up size: 44.5*21.7*45.3 inches \r\nMaximum user weight: 330LBS\r\n', 'Hi and thank you for your question! \r\nOur stationary bikes is very quiet. It features in belt driven and pure wool brake pad, gives you a quiet and smooth riding. \r\n\r\n', '76.jpg'),
(7, 'GR8FLEX High Performance Gym - Carbon Fiber Black XL Model', 1000, 'GR8FLEX provides the best gym quality products that also bring your home the styles you want for your workout areas. Registered owners can enjoy it forever and leave worries behind with the lifetime warranty on the entire machine including all parts and accessories. All accessories and kits included are: wing bar, dip bars, leg harness/pulley system, cellphone holder/stand, EZ curl bar, Crunch ab accessory, soft grip handles, extra large squat stand, resistance bands, and mats to protect carpet/floor. GR8FLEX gym itself has 15 different resistance levels. On top of your current resistance level, you can have additional 10 lb, 15 lb, 20 lb, 25 lb, 30 lb, 35 lb, 40 lb, or 50 lb with the resistance bands (two 10-lb resistance bands and two 15-lb resistance bands are included in order to adjust to any of the desired weights listed above). There is no assembly required. All information, instructions, and videos are provided on our website and app so you will always be kept informed with any news.\r\n', '\r\nYes, ready out of the box !! Good working out... ', '77.jpg'),
(8, 'Precor AMT 835 Commercial Series Adaptive Motion Trainer with Open Stride Technology', 2500, 'Bring home the exact same AMT used in fitness clubs worldwide. The Adaptive Motion Trainer (AMT) 835 with Open Stride fits virtually everyone regardless of size and provides an effective low-impact workout. The AMT 835 with Open Stride provides you with an infinite range of stride paths to create a uniquely effective and personalized experience every time - all in one piece of fitness equipment.', '\r\nYes, ready out of the box !! Good working out... \r\n', '79.jpg'),
(9, 'Spirit Fitness XE795 Elliptical', 3000, '9 programmes offer variety, as well as the ability to track your progress and raise the intensity of workouts as you get fitter. Reduce the amount of stress on your hips and back. Step-on Height: 22.8cm Easy-access pedals with a low step-in height make getting on and off safer and easier. 5cm Pedal spacing: Close pedal spacing helps align the body to eliminate stress on the hips and back. LISTEN TO YOUR FAVORITE MUSIC OR WATCH YOUR FAVORITE MOVIE: To make your training even more effective, add a personal touch.', 'It shines among users reviews and it’s the only machine within its class that delivers motivational entertainment at high level. I would definitely recommend the Nautilus E614 because it has all the bells and whistles, and it delivers surprisingly good price-performance value.', '78.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(2, 'mgmgzas', 'mgmg@gmail.com', '245'),
(3, 'koko', 'koko@gmail.com', '2626'),
(4, 'mgmg', 'mgmg@gmail.com', '245');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
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
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
