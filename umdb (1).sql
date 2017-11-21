-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2017 at 06:24 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ttl` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama`, `ttl`, `email`) VALUES
('osman', 'osman', 'Adrian Hartanto Osman', '1-1-1997', 'adrian15ti@mahasiswa.pcr.ac.id');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `nama_film` varchar(255) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `nama_film`, `kategori`) VALUES
(1, 'No Game No Life Zero', 'Anime'),
(2, 'Thor', 'Marvel'),
(3, 'Thor - The Dark World', 'Marvel'),
(4, 'Thor - Ragnarok', 'Marvel'),
(5, 'Jigsaw', 'Thriller');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`username`, `password`) VALUES
('mushigen', 'primal135');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `nama_film` varchar(30) NOT NULL,
  `review` text NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `nama_film`, `review`, `username`) VALUES
(1, 'No Game No Life Zero', 'Story : 10/10\r\nThe story is well written for both anime and Light Novel; Volume 6, content delivery is very good and easy to understand. However, it is important to watch the TV anime before proceed to the movie since not everything explain from scratch.\r\n\r\nArt : 10/10\r\nIf you like colorful anime you know NGNL have it but dark-themed of NGNL surprisingly went along with the story theme. It\'s the great war after all. Well drawn background and coloring, expected nothing less.\r\n\r\nCharacter : 10/10\r\nThis part might containing a spoiler however reading this will not spoiling your experience.\r\nAuthor, or rather Tet, made Riku and Shuvi similar to Sora and Shiro, keep in mind that they are not same person ( same VA though ) and Tet mentioned that he alter the story a bit so that the REAL story remain untold. In reality, probably that actually Riku and Shuvi look nothing like Sora and Shiro, but since it is 6000 years ago, the story look more interesting if the character similar to someone that we already know, Sora and Shiro. If they created entirely new character, we might not get the similar experience. ( Can you imagine an NGNL without loli heroine? )\r\n\r\nSound : 8/10\r\nThe sound is good, but not great. The OST goes well with anime with good impression but there\'s nothing catchy. If you fall in love with the anime, sound is not something that you\'ll hype, still it is good.\r\n\r\nEnjoyment : 10/10\r\nWatched this twice at cinema, further explanation is not required.', 'michael');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ttl` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `ttl`, `email`) VALUES
('kevin', 'kevin', 'Kevin', '16-04-2000', 'kevinmaster100@gmail.com'),
('michael', 'michael', 'Michael', '12-06-1997', 'michael15ti@mahasiswa.pcr.ac.id');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_username_member` (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `fk_username_member` FOREIGN KEY (`username`) REFERENCES `user` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
