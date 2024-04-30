-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 30, 2024 at 05:13 PM
-- Server version: 10.4.30-MariaDB-1:10.4.30+maria~ubu2004
-- PHP Version: 8.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `DBtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `ID` int(11) NOT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Content` text DEFAULT NULL,
  `AuthorID` int(11) DEFAULT NULL,
  `CreatedAt` datetime DEFAULT current_timestamp(),
  `Status` enum('draft','published','archived') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`ID`, `Title`, `Content`, `AuthorID`, `CreatedAt`, `Status`) VALUES
(1, 'Queen of Shadows', 'Queen of Shadows is from a Novel series \"Throne of Glass\" by Sarah J. Maas, the story follows the journey of Celaena Sardothien, an 18 yr old Assassin, who participates in a deadly tournament to get freedom and then uncovering some of darkest secrets of her true identity, finally setting up the stage for an epic Battle to reclaim what\'s rightfully her\'s.', 1, '2024-04-30 11:58:33', 'published'),
(2, 'Oliver Twist', 'The story follows the titular orphan, who, after being raised in a workhouse, escapes to London, where he meets a gang of juvenile pickpockets led by the elderly criminal Fagin, discovers the secrets of his parentage, and reconnects with his remaining family.', 2, '2024-04-30 15:42:14', 'published');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `Description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `Name`, `Price`, `Image`, `Description`) VALUES
(1, 'Acer Aspire 5', 70000.00, 'https://www.pexels.com/photo/macbook-pro-near-iphone-and-apple-fruit-18105/pexels-photo-18105.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500', 'It is powered by a Core i3 processor and it comes with 8GB of RAM. The Acer Aspire 5 packs 128GB of HDD storage.'),
(2, 'Lenovo Legion 7 ', 164500.00, 'no image', 'The Legion 7 AMD Advantage Edition laptop boasts improved visuals with a new 16 WQXGA display and 165Hz refresh rate.'),
(3, 'Acre Predator Helios 16', 182990.00, 'no image', 'Dive into the future of gaming with the Helios 16 AI gaming laptop / PC, backed by DLSS 3.5 technology'),
(4, 'Dell Alienware M15 ', 301174.00, 'no image', 'Intel Core i7-12700H Processor/16GB/512GB/NVIDIA RTX 3060 (6GB GDDR6)/15.6\" (39.62cm) FHD 165 Hz/Win 11 + MSO\'21/15 Months McAfee/Dark Side of The Moon/2.69kg.');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`ID`, `Name`, `Email`) VALUES
(1, 'Aki Hirotaka', 'hirotaka@gmail.com'),
(2, 'Hinata', 'hina@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `AuthorID` (`AuthorID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`AuthorID`) REFERENCES `Users` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
