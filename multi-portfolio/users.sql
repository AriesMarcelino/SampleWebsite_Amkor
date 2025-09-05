-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2025 at 06:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_pic` varchar(255) DEFAULT 'default.png',
  `followers` int(11) DEFAULT 0,
  `following` int(11) DEFAULT 0,
  `bio` text DEFAULT NULL,
  `background` text DEFAULT NULL,
  `skills` text DEFAULT NULL,
  `hobbies` text DEFAULT NULL,
  `projects` int(11) DEFAULT 0,
  `awards` int(11) DEFAULT 0,
  `years_experience` int(11) DEFAULT 0,
  `email` varchar(100) DEFAULT NULL,
  `facebook` varchar(200) DEFAULT NULL,
  `instagram` varchar(200) DEFAULT NULL,
  `x_account` varchar(200) DEFAULT NULL,
  `certificate` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `profile_pic`, `followers`, `following`, `bio`, `background`, `skills`, `hobbies`, `projects`, `awards`, `years_experience`, `email`, `facebook`, `instagram`, `x_account`, `certificate`) VALUES
(1, 'jinwoo', '1234', 'john.png', 120, 80, 'Hi, I am Jinwoo, a web developer who loves coding and design.', 'Graduated with a degree in Information Technology, worked on several web projects.', 'HTML, CSS, PHP, MySQL, JavaScript', 'Gaming, Reading, Cycling', 8, 3, 5, 'jinwoo.sung@example.com', 'https://facebook.com/sungjinwoo', 'https://instagram.com/sungjinwoo', 'https://x.com/sungjinwoo', 3),
(2, 'aries', 'abcd', 'mary.jpg', 200, 150, 'Hello, I am Aries, a graphic designer with a passion for arts and creativity.', 'Studied Fine Arts and now working as a freelance designer.', 'Photoshop, Illustrator, Figma, Branding', 'Drawing, Photography, Traveling', 12, 5, 7, 'aries.santos@example.com', 'https://facebook.com/ariessantos', 'https://instagram.com/ariessantos', 'https://x.com/ariessantos', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
