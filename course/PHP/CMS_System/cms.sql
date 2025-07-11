-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2025 at 04:31 PM
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
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_posts`
--

CREATE TABLE `all_posts` (
  `p_id` int(10) NOT NULL,
  `p_title` varchar(150) NOT NULL,
  `p_description` varchar(200) NOT NULL,
  `p_content` varchar(5000) NOT NULL,
  `p_pic` varchar(100) NOT NULL,
  `p_date` date NOT NULL,
  `p_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `all_posts`
--

INSERT INTO `all_posts` (`p_id`, `p_title`, `p_description`, `p_content`, `p_pic`, `p_date`, `p_user`) VALUES
(1, 'The First Post of the website', 'pop', 'pop', '{45B321F5-32B7-4B12-9CE2-C109CFFB17E0}.png', '2025-07-09', 8),
(2, 'Pop no.2', 'Hello second post', 'HI', '{03E16398-094A-45BA-B4EA-14CBED560303}.png', '2025-07-11', 8),
(3, 'Bobby masrdon', 'Bobby masrdon had a farm Bobby masrdon Bobby masrdon Bobby masrdon Bobby masrdon Bobby masrdon Bobby masrdon Bobby masrdon ', 'qwdwdadawdqwdwdadawdqwdwdadawdqwdwdad\r\nawdqwdwdadawdqwdwdadawdqwdwdadawdqwdwdadawdq\r\nwdwdadawdqwdwdadawdqwdwdadawdqwdwdadawdqwdwdadawdq\r\nwdwdadawdqwdwdadawdqwdwdadawdqwdwdadawdqwdwdadawdqwdwdadawdqwdwdadawdqwdwdadawdqwdwdadawdqwdwdad\r\nawdqwdwdadawdqwdwdadawdqwdwdadawdqwdwdadawdqwdwdadawd', '{E52A190F-97D5-4B41-96DB-3603906AE211}.png', '2025-07-11', 9);

-- --------------------------------------------------------

--
-- Table structure for table `all_users`
--

CREATE TABLE `all_users` (
  `u_id` int(10) NOT NULL,
  `u_name` varchar(200) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_pwd` varchar(255) NOT NULL,
  `u_pic` varchar(200) NOT NULL,
  `u_dob` varchar(200) NOT NULL,
  `u_country` varchar(200) NOT NULL,
  `u_city` varchar(200) NOT NULL,
  `u_site` varchar(200) NOT NULL,
  `u_bio` varchar(4000) NOT NULL,
  `u_is_admin` varchar(10) NOT NULL DEFAULT 'False'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `all_users`
--

INSERT INTO `all_users` (`u_id`, `u_name`, `u_email`, `u_pwd`, `u_pic`, `u_dob`, `u_country`, `u_city`, `u_site`, `u_bio`, `u_is_admin`) VALUES
(1, 'Admin', 'walso@gmail.com', '', '', '2025-07-07', 'Ireland', 'Athlone', 'https://idontknow.com', 'onec at digni.', 'True'),
(2, 'faruk', 'farz@gmail.com', '$2y$10$nPRgIsohyBelPI9IL2Ibo.DDnCltRR4hAU3DoKXrfzNICjsTthrVG', 'RobloxScreenShot20250427_141322104.png', '2023-07-13', 'Liberia', 'lisbon', 'https://idoknow.com', 'UGhhhhhhh', 'False'),
(3, 'lordguy', 'lordguy@gmail.com', '$2y$10$TXRdaSdRcx59tdM5KHcZHeLwq1AfzVMnxIQak5JR4Gs07y2mu0X.G', 'Tom Clancy\'s Rainbow Six® Siege2025-2-12-18-1-55.jpg', '2025-07-24', 'Chicago', 'illinois', 'https://Lordguy.com', 'Lordguy is cool guy', 'False'),
(4, 'Optimus', 'opt@gmail.com', '$2y$10$9ZQTAg7z9EY7pWNPdUlV6uyRlEQMqCTQ7ZEPiQ7c4mzd8OfQebOTa', '{7BAC201B-1DE6-4514-93D6-989197756F82}.png', '2025-06-26', 'Togo', 'Bernza', 'https://BlueBlog', 'Hello im an aspiring blogger working towards the best blog in the world', 'False'),
(5, 'Frsnk', 'potman@gmail.com', '$2y$10$4bFTowOGrLwTxMN67R7MvOlTUF7vwFS0yEPBeNWVr9XPa6VLmCuTe', '', '2025-07-11', 'Bounty', 'Hemlof', 'https://blog.com', 'Hello', 'False'),
(6, 'bob', 'bob@gmail.com', '$2y$10$wYKYapY5/jTSvF2ccifkMOItK6xOLPTFTtbKhSQvwd9Auh3S5TQvu', '1752071667_RobloxScreenShot20250427_141322104.png', '2025-07-24', 'bobland', 'Rome', 'https://Bob.com', 'Bob blog', 'False'),
(7, 'frunk', 'trunk@gmail.com', '$2y$10$ub0KjtWNprOM7.H.SoA55eb417o3yxNK/a3ez4VXaZLDGBAiqwB6y', '1752072827_{28E82CC7-F00A-48EC-BC0F-99BB90654473}.png', '2025-07-17', 'Mayonnaise', 'Mayo', 'https://Mayofrunk@gmail.com', 'popular poo brain', 'False'),
(8, 'mike', 'mike@gmail.com', '$2y$10$mLEfT0WjO1pUI/Lk0w8Q6e4fYF1k/rxCP/qd70elYn/B.bhLaRn8W', '{45B321F5-32B7-4B12-9CE2-C109CFFB17E0}.png', '1996-08-30', 'UK', 'Manchester', 'https://www.225media.co.uk', 'We help ecommerce brands increase there revenue without increasing adspend', 'False'),
(9, 'link', 'link@gmail.com', '$2y$10$AXNf6fFFpJnUgVdY8vluUuZVxq33RgkRZB.2ylwJp6fwTPmvZavPu', '{2ED64977-6CF2-4B4A-874D-DBDF41514055}.png', '2025-07-10', 'balidone', 'poppo', 'https://www.LegendOfZelda.com', 'my legend my legendmy legendmy legendmy legendmy legendmy legendmy legendmy legendmy legendmy legendmy legendmy legendmy legendmy legendmy legendmy legendmy legendmy legendmy legendmy legendmy legendmy legendmy legendmy legend', 'False');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_posts`
--
ALTER TABLE `all_posts`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `all_users`
--
ALTER TABLE `all_users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_posts`
--
ALTER TABLE `all_posts`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `all_users`
--
ALTER TABLE `all_users`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
