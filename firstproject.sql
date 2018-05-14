-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 14, 2018 at 09:42 AM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.1.16-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `firstproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `completedprojects`
--

CREATE TABLE `completedprojects` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `imgname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `completedprojects`
--

INSERT INTO `completedprojects` (`id`, `title`, `content`, `imgname`) VALUES
(1, 'Front End Project with HTML/CSS', 'A project completed for OlotuDv using pure HTML/CSS', 'uploads/project1.png'),
(2, 'Developers SQ Project using Bootstrap Framework', 'This work was completed using Bootstrap frame version 4.0.', 'uploads/project2.png'),
(3, 'Customized Google Homepage project.', 'Project completed using pure HTML and CSS with Keyframe animations.', 'uploads/project5.png'),
(4, 'Javascript Calculator and Stop watch timer', 'This is a pure Javascript project.The calculator calculates basic maths operations. A stop watch timer was also incorporated in this project.', 'uploads/project6.png'),
(5, 'Admin management page ', 'This page was developed using pure HTML/CSS, PHP, Javascript, Jquery framework, Mysql Database with Ajax functionalities.', 'uploads/projectlast.png');

-- --------------------------------------------------------

--
-- Table structure for table `contactmessage`
--

CREATE TABLE `contactmessage` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactmessage`
--

INSERT INTO `contactmessage` (`id`, `name`, `email`, `content`) VALUES
(1, 'Ubuntu sq', 'ubuntu@olotusquare.devsq', 'Please, I want to go to Isiokpo to collect 1 or 2 things.'),
(2, 'Phil Ubuntu', 'Phil.Ubuntu@olotusquare.co', 'I need a customized Bootstrap Homepage. can you do that for me?'),
(3, 'CK Ubuntu', 'Deniro@olotusquare.co', 'Please, I am getting too much errors in my mysql database. Can you fix it for me? drop me an email. Thanks');

-- --------------------------------------------------------

--
-- Table structure for table `edittable`
--

CREATE TABLE `edittable` (
  `Profilepic` text NOT NULL,
  `skills` text,
  `hobbies` text,
  `bio` text,
  `likes` int(255) NOT NULL DEFAULT '0',
  `star1` int(255) NOT NULL DEFAULT '0',
  `star2` int(255) NOT NULL DEFAULT '0',
  `star3` int(255) NOT NULL DEFAULT '0',
  `star4` int(255) NOT NULL DEFAULT '0',
  `star5` int(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `edittable`
--

INSERT INTO `edittable` (`Profilepic`, `skills`, `hobbies`, `bio`, `likes`, `star1`, `star2`, `star3`, `star4`, `star5`) VALUES
('uploads/chidi.jpg', 'Html/Css, Javascript, Php, Tensorflow', 'Video game, Swimming, Music.', 'Focused and dedicated to duty.  However, I don\'t like missing my break period.', 8, 5, 4, 2, 2, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `completedprojects`
--
ALTER TABLE `completedprojects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactmessage`
--
ALTER TABLE `contactmessage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `completedprojects`
--
ALTER TABLE `completedprojects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contactmessage`
--
ALTER TABLE `contactmessage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
