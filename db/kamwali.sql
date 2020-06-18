-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2020 at 05:34 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kamwali`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp1`
--

CREATE TABLE `emp1` (
  `id` int(100) NOT NULL,
  `name` varchar(25) NOT NULL,
  `age` int(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `location` varchar(39) NOT NULL,
  `city` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp1`
--

INSERT INTO `emp1` (`id`, `name`, `age`, `gender`, `location`, `city`) VALUES
(1, 'jyoti', 25, 'female', 'bhopal', 'bhopal'),
(2, 'payal', 23, 'female', 'hyderabad', 'hyderabad'),
(3, 'aditya singh', 23, 'female', 'bhopal', 'bhopal');

-- --------------------------------------------------------

--
-- Table structure for table `ex`
--

CREATE TABLE `ex` (
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `password`) VALUES
(1, 'aditya123', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `maid`
--

CREATE TABLE `maid` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `age` varchar(30) NOT NULL,
  `apply` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `gender` varchar(30) NOT NULL,
  `citySelect` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `pic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maid`
--

INSERT INTO `maid` (`id`, `name`, `email`, `age`, `apply`, `date`, `gender`, `citySelect`, `location`, `address`, `pic`) VALUES
(58, '', '', '', '', '0000-00-00', '', 'Bhopal', 'Bhopal', '', 'image/'),
(59, 'adi', 'adityasinghrajput862@gmail.com', '35', 'House Maids', '2020-07-03', 'male', 'Bhopal', 'Bhopal', 'L-31,Adarsh colony,', 'image/545915.jpg'),
(60, '', '', '', '', '0000-00-00', '', 'Bhopal', 'Bhopal', '', 'image/'),
(61, 'aditya singh', '', '35', 'House Maids', '2020-06-24', 'male', 'Bhopal', 'Bhopal', '', 'image/download.jpg'),
(62, '', '', '', '', '0000-00-00', '', 'Bhopal', 'Bhopal', '', 'image/'),
(63, '', '', '', '', '0000-00-00', '', 'Bhopal', 'Bhopal', '', 'image/'),
(64, '', '', '', '', '0000-00-00', '', 'Hyderabad', 'Hyderabad', '', 'image/'),
(65, '', '', '', '', '0000-00-00', '', 'Bhopal', 'Bhopal', '', 'image/'),
(66, 'asdf', '', '22', 'Baby Sitters', '2020-06-25', 'female', 'Bhopal', 'Bhopal', '', 'image/people.png'),
(67, '', '', '', '', '0000-00-00', '', 'Bhopal', 'Bhopal', '', 'image/'),
(68, '', '', '', '', '0000-00-00', '', 'Bhopal', 'Bhopal', '', 'image/'),
(69, '', '', '', '', '0000-00-00', '', 'Bhopal', 'Bhopal', '', 'image/'),
(70, '', '', '', '', '0000-00-00', '', 'Bhopal', 'Bhopal', '', 'image/'),
(71, '', '', '', '', '0000-00-00', '', 'Bhopal', 'Bhopal', '', 'image/'),
(72, '', '', '', '', '0000-00-00', '', 'Bhopal', 'Bhopal', '', 'image/'),
(73, '', '', '', '', '0000-00-00', '', 'Bhopal', 'Bhopal', '', 'image/'),
(74, 'kunj bihari', '', '55', 'House Maids', '2020-06-20', 'female', 'Bhopal', 'Bhopal', '', 'image/wp3534328-tokyo-ghoul-4k-wallpapers.jpg'),
(75, '', '', '', '', '0000-00-00', '', 'Bhopal', 'Bhopal', '', 'image/'),
(76, '', '', '', '', '0000-00-00', '', 'Bhopal', 'Bhopal', '', 'image/'),
(77, '', '', '', '', '0000-00-00', '', 'Bhopal', 'Bhopal', '', 'image/'),
(78, '', '', '', '', '0000-00-00', '', 'Bhopal', 'Bhopal', '', 'image/'),
(79, '', '', '', '', '0000-00-00', '', 'Bhopal', 'Bhopal', '', 'image/'),
(80, '', '', '', '', '0000-00-00', '', 'Bhopal', 'Bhopal', '', 'image/'),
(81, '', '', '', '', '0000-00-00', '', 'Bhopal', 'Bhopal', '', 'image/'),
(82, '', '', '', '', '0000-00-00', '', 'Bhopal', 'Bhopal', '', 'image/'),
(83, '', '', '', '', '0000-00-00', '', 'Bhopal', 'Bhopal', '', 'image/'),
(84, '', '', '', '', '0000-00-00', '', 'Bhopal', 'Bhopal', '', 'image/'),
(85, 'aditya singh', '', '22', 'House Maids', '2020-06-24', 'male', 'Bhopal', 'Bhopal', '', 'image/wp3534308-tokyo-ghoul-4k-wallpapers.jpg'),
(86, 'omba', '', '24', 'House Maids', '2020-06-24', 'male', 'Bhopal', 'Bhopal', '', 'image/cropped-1920-1080-120604.jpg'),
(87, '', '', '', '', '0000-00-00', '', 'Bhopal', 'Bhopal', '', 'image/'),
(88, 'aditi singh', '', '35', 'Baby Sitters', '2020-06-15', 'female', 'Bhopal', 'Bhopal', '', 'image/545915.jpg'),
(89, 'ombi', '', '22', 'Baby Sitters', '2020-06-30', 'female', 'Bhopal', 'Bhopal', '', 'image/208994.jpg'),
(90, 'chama', '', '22', 'Baby Sitters', '2020-06-30', 'female', 'Bhopal', 'Bhopal', '', 'image/57yz3gM-itachi-wallpaper.jpg'),
(91, '', '', '', '', '0000-00-00', '', 'Bhopal', 'Bhopal', '', 'image/'),
(92, '', '', '', '', '0000-00-00', '', 'Bhopal', 'Bhopal', '', 'image/'),
(93, '', '', '', '', '0000-00-00', '', 'Bhopal', 'Bhopal', '', 'image/'),
(94, '', '', '', '', '0000-00-00', '', 'Bhopal', 'Bhopal', '', 'image/'),
(95, '', '', '', '', '0000-00-00', '', 'Bhopal', 'Bhopal', '', 'image/'),
(96, '', '', '', '', '0000-00-00', '', 'Bhopal', 'Bhopal', '', 'image/'),
(97, '', '', '', '', '0000-00-00', '', 'Bhopal', 'Bhopal', '', 'image/'),
(98, 'ashish singh', '', '22', 'Cook', '2020-06-25', 'male', 'Bhopal', 'Bhopal', '', 'image/208994.jpg'),
(99, '', '', '', '', '0000-00-00', '', 'Bhopal', 'Bhopal', '', 'image/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp1`
--
ALTER TABLE `emp1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maid`
--
ALTER TABLE `maid`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp1`
--
ALTER TABLE `emp1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `maid`
--
ALTER TABLE `maid`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
