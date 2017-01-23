-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2016 at 12:14 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stryker`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `address` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`address`, `phone`, `email`) VALUES
('10th Floor, Vatika Business Park', '9873642626', 'akshat95tyagi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `SERVICE` tinyint(1) NOT NULL COMMENT 'SERVICE',
  `STAFF_FRIENDLINESS` tinyint(1) NOT NULL COMMENT 'STAFF FRIENDLINESS',
  `FOOD_QUALITY` tinyint(1) NOT NULL COMMENT 'STAFF FRIENDLINESS',
  `ATMOSPHERE` tinyint(1) NOT NULL COMMENT 'ATMOSPHERE',
  `CLEANLINESS` tinyint(1) NOT NULL COMMENT 'CLEANLINESS',
  `TIMELINESS` tinyint(1) NOT NULL COMMENT 'TIMELINESS',
  `DATE` datetime NOT NULL COMMENT 'DATE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='To store feedback';

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`SERVICE`, `STAFF_FRIENDLINESS`, `FOOD_QUALITY`, `ATMOSPHERE`, `CLEANLINESS`, `TIMELINESS`, `DATE`) VALUES
(5, 5, 5, 4, 4, 5, '2016-07-05 11:02:16'),
(5, 4, 4, 5, 5, 4, '2016-07-05 11:45:10'),
(4, 5, 5, 4, 4, 5, '2016-07-05 11:45:20'),
(5, 4, 5, 5, 4, 4, '2016-07-05 11:50:05');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `email` varchar(30) NOT NULL,
  `index` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`f_name`, `l_name`, `username`, `password`, `email`, `index`) VALUES
('Akshat', 'Tyagi', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'akshat95tyagi@gmail.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE IF NOT EXISTS `menu_items` (
  `index` int(11) unsigned NOT NULL,
  `id` varchar(20) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_category` varchar(50) NOT NULL,
  `type` varchar(15) NOT NULL,
  `weekly` varchar(30) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `Monday` tinyint(1) NOT NULL,
  `Tuesday` tinyint(1) NOT NULL,
  `Wednesday` tinyint(1) NOT NULL,
  `Thursday` tinyint(1) NOT NULL,
  `Friday` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`index`, `id`, `item_name`, `item_category`, `type`, `weekly`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`) VALUES
(111, '2', 'Chicken', 'Main-Course', 'Non-Vegetarian', 'yes', 1, 1, 1, 1, 1),
(126, '2', 'Rajma', 'Main-Course', 'Vegetarian', 'yes', 1, 1, 1, 1, 1),
(127, '2', 'Pav Bhaji', 'Special', 'Vegetarian', 'yes', 1, 1, 1, 1, 1),
(128, '2', 'Cucumber', 'Salad', 'Vegetarian', 'yes', 1, 1, 0, 1, 0),
(129, '2', 'Tomato', 'Salad', 'Vegetarian', 'yes', 1, 1, 1, 0, 1),
(130, '2', 'Onion', 'Salad', 'Vegetarian', 'yes', 0, 0, 1, 1, 1),
(131, '2', 'Corn Salad', 'Salad', 'Vegetarian', 'yes', 0, 1, 1, 1, 1),
(132, '2', 'Pasta', 'Salad', 'Vegetarian', 'yes', 1, 1, 0, 0, 0),
(133, '2', 'Dal', 'Main-Course', 'Vegetarian', 'yes', 1, 1, 1, 1, 0),
(134, '2', 'Roti', 'Main-Course', 'Vegetarian', 'yes', 1, 1, 1, 1, 1),
(135, '2', 'Rice', 'Main-Course', 'Vegetarian', 'yes', 0, 1, 1, 1, 1),
(136, '2', 'Chocolate', 'Dessert', 'Vegetarian', 'yes', 1, 0, 0, 1, 1),
(137, '2', 'Ice Cream', 'Dessert', 'Vegetarian', 'yes', 1, 1, 1, 0, 1),
(138, '2', 'Pani Puri', 'Special', 'Vegetarian', 'yes', 1, 1, 1, 1, 1),
(139, '2', 'Mutton', 'Main-Course', 'Non-Vegetarian', 'yes', 1, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu_param`
--

CREATE TABLE IF NOT EXISTS `menu_param` (
  `date_set` date NOT NULL,
  `is_set` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_param`
--

INSERT INTO `menu_param` (`date_set`, `is_set`) VALUES
('2016-07-13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu_weekly`
--

CREATE TABLE IF NOT EXISTS `menu_weekly` (
  `index` int(11) NOT NULL,
  `date` date NOT NULL,
  `menu_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `ID` int(11) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Comment` varchar(150) NOT NULL,
  `Date-Time` datetime(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`ID`, `First_Name`, `Last_Name`, `Email`, `Comment`, `Date-Time`) VALUES
(9, 'Akshat', 'Tyagi', 'akshat95tyagi@gmail.com', 'Kindly ensure that the number of seats are commensurate to the number of employees. \r\nBest Regards,\r\nAkshat Tyagi', '2016-07-05 11:44:57.000000'),
(10, 'akshat', 'akshat', 'sknxslknsc@gmail.com', 'ldjvdljbvdljbvldsjbvdljvbdljvbsdljbvsdljvbsdljvdljvbdljvbdljvbdsljvbdljvbdljvbdljvbdlsjbvdsljbvdjlbvdjlvbdlsjbvdlsjbvjldbvljdsbvldjbvdsljbvdsljvbdjvbd', '2016-07-05 14:21:44.000000'),
(12, 'sdbvdkshb', 'kddb ', 'dlsndcdc@ddd.com', 'dknkdnv', '2016-07-05 14:49:42.000000');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `index` int(3) NOT NULL,
  `title` varchar(40) CHARACTER SET ascii NOT NULL,
  `article` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`index`, `title`, `article`) VALUES
(79, 'Welcome to the Cafeteria', 'Welcome to the new cafeteria website. Kindly submit any feedback or issues you might face. Watch this space for any updates or announcements.'),
(80, 'Closed on Wednesday', 'The Cafeteria shall remian closed on Wednesday on account of Eid.');

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE IF NOT EXISTS `rules` (
  `index` int(10) NOT NULL,
  `item` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`index`, `item`) VALUES
(3, 'Smoking and chewing tobacco is not allowed in the premises'),
(4, 'Do not carry alcoholic baverages'),
(14, 'Do not litter on the cafeteria premises.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`index`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`index`,`id`);

--
-- Indexes for table `menu_weekly`
--
ALTER TABLE `menu_weekly`
  ADD PRIMARY KEY (`index`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`index`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`index`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `index` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `index` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=140;
--
-- AUTO_INCREMENT for table `menu_weekly`
--
ALTER TABLE `menu_weekly`
  MODIFY `index` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `index` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `rules`
--
ALTER TABLE `rules`
  MODIFY `index` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
