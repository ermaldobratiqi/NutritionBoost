-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2021 at 12:36 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nutritionboost`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `Article_id` int(11) NOT NULL,
  `img_url` varchar(512) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `ShortDesc` varchar(1000) NOT NULL,
  `Body` varchar(7000) NOT NULL,
  `FileName` varchar(100) NOT NULL,
  `Author` varchar(50) NOT NULL,
  `Date_Created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`Article_id`, `img_url`, `Title`, `ShortDesc`, `Body`, `FileName`, `Author`, `Date_Created`) VALUES
(1, 'https://static.stacker.com/s3fs-public/styles/properly_sized_image/s3/00001510_2.png', 'Cereals', 'Many of us start our day with a bowl of cereal, but in some cases, this breakfast choice can actually contain many harmful ingredients.\r\n\r\nSome breakfast cereals (specifically those aimed at children) contain preservatives to make them last longer, artificial dyes, flavourings and high amounts of sugar. An article published in the Journal of American Dietetic Association found that cereals marketed at children contained more: sodium, carbohydrates, sugar and calories per gram than those not marketed to children. Where possible, try to stick to cereals that are high in fibre and low in sugar.', '', 'Cereals', 'Edit Azizi', '0000-00-00 00:00:00'),
(2, 'https://fiverr-res.cloudinary.com/images/t_main1,q_auto,f_auto,q_auto,f_auto/gigs/103405899/original/40e0c05187a29c5915ab31590f54506217a322c2/make-simple-healthy-drinks-for-the-morning-moves.jpg', 'Drinks', 'SMOOTHIES SHAKES AND JUICES ARE THE BEST EARLY MORNING RISERS TO BE CONSUMED ON A DAILY BASIS BUT ALL SHOULD BE PROPERLY COMBINED AND MADE INTO A COMPLETE JUICE OR PULP TO BE CONSUME REFRIGERATE IN PROPER TEMPERATURE TO BE CONSUMED IN A DAY.COMBINATION OF FRUITS,VEGGIES,EGGS,MILK,JUICES MAKE A COMPLETE DRINK TO REFRESH OUR BODY ON A DAILY BASIS.\r\n\r\n', '', 'Best Drinks', 'Edit Azizi', '0000-00-00 00:00:00'),
(3, 'https://www.livingandloving.co.za/wp-content/uploads/2016/11/What-is-a-balanced-diet.jpg', 'Healthy Breakfast', 'Food and drink provide the energy and nutrients that a young child needs to grow and thrive. Compared to adults, children need more nutritious foods for their size to support growth, develop bones, build muscle and provide the energy needed to actively explore the world.', 'Healthy Breakfast', 'Healthy Breakfast', 'Edit Azizi', '0000-00-00 00:00:00'),
(4, 'https://arc-anglerfish-arc2-prod-gmg.s3.amazonaws.com/public/R7LDMYLQBVBHRAUXXQF7UVU6VA.jpg', 'Caloric Food', 'Calories are the basic unit of energy used for measuring the energy in food and we all need a certain number of calories to maintain the body\'s vital functions. The number of calories a person needs depends on factors such as age, gender, and lean muscle mass.\r\n\r\nEating too few calories for a prolonged period of time causes a person to become underweight leading to muscle atrophy, weakened immunity, and eventually, organ failure. Conversely, eating too many calories causes a person to become overweight then obese, increasing their chances of heart disease, type II diabetes, and cancer.', 'Caloric Food', 'Caloric Food', 'Edit Azizi', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `img_url` varchar(500) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `ShortDesc` varchar(1000) NOT NULL,
  `Author` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `img_url`, `Title`, `ShortDesc`, `Author`) VALUES
(2, 'https://scontent.fprn2-1.fna.fbcdn.net/v/t1.0-9/134429487_4145879475440001_6811752912990929767_o.jpg?_nc_cat=104&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=tkBk6O2P1KEAX_56rUw&_nc_ht=scontent.fprn2-1.fna&oh=9f5968bf8988bd405fd07140d5f84b7a&oe=606CCF35', 'Ermal Dobratiqi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Ermal Dobratiqi'),
(3, 'https://scontent.fprn2-1.fna.fbcdn.net/v/t1.0-9/69700016_1311321722362713_8262782754060500992_n.jpg?_nc_cat=104&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=dthjxwMk3uYAX8p6Ll8&_nc_ht=scontent.fprn2-1.fna&oh=374675e646ddd16533b374259b7e714a&oe=606DBA90', 'Edit Azizi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Ermal Dobratiqi'),
(4, 'https://scontent.fprn2-1.fna.fbcdn.net/v/t1.15752-9/135889435_468477331213324_5733093606260559122_n.jpg?_nc_cat=109&ccb=1-3&_nc_sid=ae9488&_nc_ohc=V-O3PGzu9i8AX9saTBP&_nc_ht=scontent.fprn2-1.fna&oh=9860e992bb9208d4fd7e8c8b853ba59e&oe=606EC184', 'Rudina Kadolli', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Ermal Dobratiqi');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comments` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`id`, `firstname`, `lastname`, `email`, `comments`) VALUES
(1, 'asd', 'asd', 'asd', 'asd'),
(3, 'Ermal', 'Dobratiqi', 'ermaldobratiqi@hotmail.com', 'FINALYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYY'),
(5, 'Edit', 'Azizi', 'editazizi@gmail.com', 'Conflict of Nations WW3\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tips`
--

CREATE TABLE `tips` (
  `id` int(11) NOT NULL,
  `img_url` varchar(512) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Date_Created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tips`
--

INSERT INTO `tips` (`id`, `img_url`, `Title`, `Author`, `Date_Created`) VALUES
(3, 'https://beyondfitmom.com/wp-content/uploads/2013/12/HEALHTY-TRAVEL-SNACK.jpg', 'Healthy Travel Snacks', 'Ermal Dobratiqi', '0000-00-00'),
(5, 'https://i.pinimg.com/originals/7e/b2/24/7eb224893fcaffe02272032d20d97b32.png', 'Top 7 Healthy Eating Tips', 'Ermal Dobratiqi', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `User_type` varchar(10) NOT NULL,
  `Created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `FirstName`, `LastName`, `Email`, `Password`, `User_type`, `Created_at`) VALUES
(1, 'Ermal', 'Dobratiqi', 'ermaldobratiqi@hotmail.com', '202cb962ac59075b964b07152d234b70', 'admin', '0000-00-00 00:00:00'),
(5, 'Edit', 'Azizi', 'editazizi10@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`Article_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tips`
--
ALTER TABLE `tips`
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
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `Article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tips`
--
ALTER TABLE `tips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
