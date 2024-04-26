-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2023 at 07:59 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artzone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
(5, 'janki', '$2y$04$AkGpv30pYXDk.aJ1GQ0F7OcDCDERZeXIZYgbm7mi5sXuj/afKng46', 'jankichauhan05@gmail.com'),
(7, 'aesha', '$2y$04$5IbshHlPIBans2n5tEeER.GJ3SBnoTbmlJNJL1cQ7MjcloOEMG51K', 'aeshashah123@gmail.com'),
(9, 'vishwa', '$2y$04$Z8ZVyMn2E2a.y2TSXHXzC.ACKrBm7jWVq9uUR3IXg0AB8GILD0RMe', 'vishwaparmar123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id` int(11) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `lname` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `InterestedArts` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `date` date NOT NULL,
  `phone` int(15) NOT NULL,
  `address` varchar(256) NOT NULL,
  `image` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `fname`, `lname`, `username`, `InterestedArts`, `email`, `password`, `date`, `phone`, `address`, `image`) VALUES
(1, 'Janki', 'Chauhan', 'janki24', 'Painting ', 'jankichauhan05@gmail.com', '$2y$04$5AAlnik2sAsWRnA1QLOfD.PBct3OoVSVIpHayQDO.TsWeBLsqmCwG', '2023-09-18', 1234567890, 'Junagadh ', 'profile_1458392893.jpeg'),
(2, 'Aesha', 'Shah', 'aesha123', 'Sketch', 'aeshashah123@gmail.com', '$2y$04$KY1yzNs06laKZROEkEK7n.0BQH/Yhqhrab21y0DeU4gadWG0.4XqC', '2023-09-19', 1234567890, 'Vadodara ', 'profile_1427999970.jpg'),
(3, 'Vishwa', 'Parmar', 'vishwa123', 'Glass Painting', 'vishwaparmar123@gmail.com', '$2y$04$9T4pulKPD4zxOojhG23Tdut4wBjzFj/5mv1hGxvWplisAa0vfiR.G', '2023-09-19', 2147483647, 'Baroda', 'profile_953091427.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `message` varchar(256) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `message`, `date`) VALUES
(1, 'Janki vitthalbhai Chauhan', 'jankichauhan05@gmail.com', 'Hello ', '2023-09-28'),
(2, 'Janki Chauhan', 'jankichauhan05@gmail.com', 'I want to Know about art', '2023-09-28');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `message` varchar(256) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `message`, `date`) VALUES
(1, 'I like your Website', '2023-09-28'),
(4, 'I like it', '2023-09-28');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `post` varchar(256) NOT NULL,
  `uploaded_on` date NOT NULL,
  `email` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `post`, `uploaded_on`, `email`) VALUES
(11, 'sketch.jpg', '2023-09-19', 'aeshashah123@gmail.com'),
(12, 'glasspainting.jpg', '2023-09-19', 'vishwaparmar123@gmail.com'),
(13, 'papercraft.jpg', '2023-09-19', 'khyatichauhan123@gmail.com'),
(33, '4.jpg', '2023-10-02', 'jankichauhan05@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
