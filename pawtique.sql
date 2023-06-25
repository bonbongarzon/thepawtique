-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 26, 2023 at 01:59 AM
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
-- Database: `pawtique`
--

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `id` int(11) NOT NULL,
  `owner_email` varchar(100) NOT NULL,
  `petname` varchar(100) NOT NULL,
  `pet_dob` date NOT NULL,
  `species` varchar(100) NOT NULL,
  `breed` varchar(200) NOT NULL,
  `color` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `updatedVaccines` varchar(100) NOT NULL,
  `isMicrochipped` varchar(100) NOT NULL,
  `remarks` varchar(365) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`id`, `owner_email`, `petname`, `pet_dob`, `species`, `breed`, `color`, `sex`, `updatedVaccines`, `isMicrochipped`, `remarks`) VALUES
(3, 'mark@example.com', 'Max', '2018-07-10', 'Cat', 'German Shepherd', 'Black and Tan', 'Male', 'No', 'Yes', 'Active and energetic'),
(4, 'sara@example.com', 'Luna', '2021-01-03', 'Cat', 'Maine Coon', 'Tabby', 'Female', 'Yes', 'Yes', 'Loves to play with toys'),
(5, 'mike@example.com', 'Rocky', '2017-09-18', 'Dog', 'Bulldog', 'White', 'Male', 'No', 'No', 'Likes long walks'),
(6, 'amy@example.com', 'Coco', '2019-11-20', 'Dog', 'Poodle', 'Apricot', 'Female', 'No', 'No', 'Hypoallergenic breed'),
(7, 'david@example.com', 'Oreo', '2020-06-06', 'Cat', 'British Shorthair', 'Black and White', 'Male', 'Yes', 'No', 'Loves to cuddle'),
(8, 'emily@example.com', 'Simba', '2018-04-14', 'Cat', 'Persian', 'Gray', 'Male', 'Yes', 'No', 'Requires grooming'),
(9, 'alex@example.com', 'Milo', '2021-08-02', 'Dog', 'Labrador Retriever', 'Chocolate', 'Male', 'Yes', 'Yes', 'Great with kids'),
(10, 'jessica@example.com', 'Ginger', '2019-03-08', 'Cat', 'Ragdoll', 'Cream', 'Female', 'No', 'No', 'Gentle and calm');

-- --------------------------------------------------------

--
-- Table structure for table `petsDetails`
--

CREATE TABLE `petsDetails` (
  `id` int(11) NOT NULL,
  `owner_email` varchar(255) NOT NULL,
  `petname` varchar(255) NOT NULL,
  `breed` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petsDetails`
--

INSERT INTO `petsDetails` (`id`, `owner_email`, `petname`, `breed`) VALUES
(1, 'Sample', 'Sample1', 'Sample2');

-- --------------------------------------------------------

--
-- Table structure for table `sample`
--

CREATE TABLE `sample` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'Bon', 'Garzon', 'bonbongarzon18@gmail.com', 'Bonbon'),
(2, 'Bon', 'Garzon', 'bonbongarzon18@gmail.com', 'Bonbon'),
(3, 'Bon', 'Garzon', 'bonbongarzon18@gmail.com', 'Bonbon'),
(4, 'Bon', 'Garzon', 'bonbongarzon18@gmail.com', 'Bonbon'),
(5, 'Sofia', 'Carson', 'sofiacarson@gmail.com', 'sofiacarson'),
(6, 'Jess', 'Blyte', 'jessblyte@gmail.com', 'jess'),
(7, 'Sample', 'Sample', 'Sample', 'Sample'),
(8, 'Sample', 'Sample', 'Sample', 'Sample');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petsDetails`
--
ALTER TABLE `petsDetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sample`
--
ALTER TABLE `sample`
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
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `petsDetails`
--
ALTER TABLE `petsDetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sample`
--
ALTER TABLE `sample`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
