-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2024 at 07:10 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `election`
--

-- --------------------------------------------------------

--
-- Table structure for table `address_data`
--

CREATE TABLE `address_data` (
  `id` int(11) NOT NULL,
  `address_title` varchar(50) NOT NULL,
  `address_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address_data`
--

INSERT INTO `address_data` (`id`, `address_title`, `address_type`) VALUES
(4, 'KPK', 'province'),
(5, 'punjab', 'province'),
(6, 'punjab', 'province'),
(7, 'sher garh', 'uc'),
(8, 'sher garh', 'uc'),
(10, 'takht bhai', 'tehsil'),
(11, 'sher garh', 'tehsil'),
(12, 'sher garh', 'tehsil'),
(13, 'sher garh', 'tehsil'),
(14, 'KPK', 'tehsil'),
(15, 'KPK', 'tehsil'),
(16, 'mardan', 'district'),
(17, 'mardan', 'district'),
(18, 'new', 'tehsil'),
(19, 'new uc', 'uc');

-- --------------------------------------------------------

--
-- Table structure for table `add_area`
--

CREATE TABLE `add_area` (
  `id` int(11) NOT NULL,
  `area_title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_area`
--

INSERT INTO `add_area` (`id`, `area_title`) VALUES
(1, 'NA 45'),
(2, 'hello'),
(3, 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `add_candidate`
--

CREATE TABLE `add_candidate` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cell` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `categary` varchar(50) NOT NULL,
  `party_name` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `uc` varchar(50) NOT NULL,
  `tehsil` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `candidate_image` varchar(100) NOT NULL,
  `party_logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_candidate`
--

INSERT INTO `add_candidate` (`id`, `name`, `cell`, `gender`, `categary`, `party_name`, `area`, `uc`, `tehsil`, `district`, `province`, `candidate_image`, `party_logo`) VALUES
(5, 'jjjjj', 'jjjjjj', '', 'jjjjjjjjjj', 'jjjjjjjjj', '0', 'jjjjjjjjjjj', 'jjjjjjjjj', 'jjjjjjjjjjj', 'jjjjjjjjjj', 'uploads/collrge friend (3) - Copy.jpg', ''),
(6, 'jjjjj', 'jjjjjj', '', 'jjjjjjjjjj', 'jjjjjjjjj', '0', 'jjjjjjjjjjj', 'jjjjjjjjj', 'jjjjjjjjjjj', 'jjjjjjjjjj', 'uploads/collrge friend (3) - Copy.jpg', 'uploads/'),
(7, 'ssss', 'ssssssss', '', 'sssssssss', 'sssssssss', '0', 'ssssssssss', 'sssssssss', 'sssssssss', 'ssssssss', 'uploads/download (1).png', 'uploads/download (1).png'),
(8, 'ssss', 'ssssssss', '', 'sssssssss', 'sssssssss', '0', 'ssssssssss', 'sssssssss', 'sssssssss', 'ssssssss', 'uploads/download (1).png', 'uploads/download (1).png'),
(9, 'ssss', 'ssssssss', '', 'sssssssss', 'sssssssss', '0', 'ssssssssss', 'sssssssss', 'sssssssss', 'ssssssss', 'uploads/download (1).png', 'uploads/download (1).png'),
(10, 'qqqqqqqqq', 'qqqq', '', 'qqq', 'qq', '0', 'qq', 'qqq', 'q', 'qqq', 'uploads/collrge friend (84).jpg', 'uploads/collrge friend (3) - Copy.jpg'),
(11, 'qqqqqqqqq', 'qqqq', '', 'qqq', 'qq', '0', 'qq', 'qqq', 'q', 'qqq', 'uploads/collrge friend (84).jpg', 'uploads/collrge friend (3) - Copy.jpg'),
(12, 'qqqqqqqqq', 'qqqq', '', 'qqq', 'qq', '0', 'qq', 'qqq', 'q', 'qqq', 'uploads/collrge friend (84).jpg', 'uploads/collrge friend (3) - Copy.jpg'),
(13, 'qqqqqqqqq', 'qqqq', '', 'qqq', 'qq', '0', 'qq', 'qqq', 'q', 'qqq', 'uploads/collrge friend (84).jpg', 'uploads/collrge friend (3) - Copy.jpg'),
(14, 'hhhh', 'jlkjljkjklkj', '', 'mna', 'muslim league', '0', 'sher garh', 'takht bhai', 'mardan', 'KPK', 'uploads/collrge friend (3) - Copy.jpg', 'uploads/collrge friend (3) - Copy.jpg'),
(16, 'new', 'new', '', 'mna', 'muslim league', '0', 'sher garh', 'takht bhai', 'mardan', 'KPK', 'uploads/collrge friend (3) - Copy.jpg', 'uploads/collrge friend (3) - Copy.jpg'),
(17, 'new', 'new', '', 'mna', 'muslim league', '0', 'sher garh', 'takht bhai', 'mardan', 'KPK', 'uploads/collrge friend (3) - Copy.jpg', 'uploads/collrge friend (3) - Copy.jpg'),
(18, 'new', 'new', '', 'mna', 'muslim league', '0', 'sher garh', 'takht bhai', 'mardan', 'KPK', 'uploads/collrge friend (3) - Copy.jpg', 'uploads/collrge friend (3) - Copy.jpg'),
(19, 'new', 'new', '', 'mna', 'muslim league', 'NA 45', 'sher garh', 'takht bhai', 'mardan', 'KPK', 'uploads/collrge friend (3) - Copy.jpg', 'uploads/collrge friend (3) - Copy.jpg'),
(20, 'lllll', 'lll', '', 'mna', 'muslim league', 'NA 45', 'sher garh', 'takht bhai', 'mardan', 'KPK', 'uploads/collrge friend (3) - Copy.jpg', 'uploads/collrge friend (24).jpg'),
(21, 'sadam hussain', '03419116614', '', 'mna', 'muslim league', 'NA 45', 'sher garh', 'takht bhai', 'mardan', 'KPK', 'uploads/collrge friend (72).jpg', 'uploads/download (1).jpg'),
(22, 'ahmad', '9808080', 'Male', 'mna', 'muslim league', 'NA 45', 'sher garh', 'takht bhai', 'mardan', 'KPK', 'uploads/123559707-hand-drawing-creative-social-media-sketch-on-light-background-communication-and-ne', 'uploads/114656537-database-icon-simple-flat-logo-of-database-03-vector.jpg'),
(23, 'ahmad', '9808080', 'Male', 'mna', 'muslim league', 'NA 45', 'sher garh', 'takht bhai', 'mardan', 'KPK', 'uploads/123559707-hand-drawing-creative-social-media-sketch-on-light-background-communication-and-ne', 'uploads/114656537-database-icon-simple-flat-logo-of-database-03-vector.jpg'),
(24, 'ahmad', '9808080', 'Male', 'mna', 'muslim league', 'NA 45', 'sher garh', 'takht bhai', 'mardan', 'KPK', 'uploads/123559707-hand-drawing-creative-social-media-sketch-on-light-background-communication-and-ne', 'uploads/114656537-database-icon-simple-flat-logo-of-database-03-vector.jpg'),
(25, 'mohib', '03419116614', 'Male', 'mna', 'muslim league', 'NA 45', 'sher garh', 'takht bhai', 'mardan', 'KPK', 'uploads/222222222222.jpg', 'uploads/bg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `add_categary`
--

CREATE TABLE `add_categary` (
  `id` int(11) NOT NULL,
  `categary_title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_categary`
--

INSERT INTO `add_categary` (`id`, `categary_title`) VALUES
(1, 'mna');

-- --------------------------------------------------------

--
-- Table structure for table `add_party`
--

CREATE TABLE `add_party` (
  `id` int(11) NOT NULL,
  `party_title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_party`
--

INSERT INTO `add_party` (`id`, `party_title`) VALUES
(1, 'muslim league');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_result`
--

CREATE TABLE `candidate_result` (
  `idd` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `categary` varchar(50) NOT NULL,
  `party_name` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `total_votes` varchar(50) NOT NULL,
  `path` varchar(50) NOT NULL,
  `path1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate_result`
--

INSERT INTO `candidate_result` (`idd`, `id`, `name`, `categary`, `party_name`, `area`, `total_votes`, `path`, `path1`) VALUES
(1, 24, 'ahmad', 'mna', '', 'NA 45', '0', 'uploads/123559707-hand-drawing-creative-social-med', 'uploads/114656537-database-icon-simple-flat-logo-o'),
(2, 24, 'ahmad', 'mna', '', 'NA 45', '0', 'uploads/123559707-hand-drawing-creative-social-med', 'uploads/114656537-database-icon-simple-flat-logo-o'),
(3, 22, 'ahmad', 'mna', 'muslim league', 'NA 45', '0', 'uploads/123559707-hand-drawing-creative-social-med', 'uploads/114656537-database-icon-simple-flat-logo-o'),
(4, 22, 'ahmad', 'mna', 'muslim league', 'NA 45', '0', 'uploads/123559707-hand-drawing-creative-social-med', 'uploads/114656537-database-icon-simple-flat-logo-o'),
(5, 0, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `cell_no` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `title`, `address`, `cell_no`, `email`, `phone_no`, `link`) VALUES
(8, 'fff', 'dfa', '11111111111', 'asadpk27@gmail.com', 'fasdf', 'fff');

-- --------------------------------------------------------

--
-- Table structure for table `costed_votes`
--

CREATE TABLE `costed_votes` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `costed_by` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `costed_votes`
--

INSERT INTO `costed_votes` (`id`, `cid`, `costed_by`) VALUES
(115, 21, '1610262818325'),
(116, 21, '1610262818326'),
(117, 21, '1610262818327'),
(118, 20, '1610262818328'),
(119, 20, '1610262818329'),
(120, 23, '1610288776652'),
(121, 25, '161062818324');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `description` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `title`, `description`, `date`, `path`) VALUES
(1, 'computer programming', 'fffff', '11/020/1987', 'uploads/a.png'),
(2, 'admission open', 'admission opn for male', '11/020/1987', 'uploads/114656537-database-icon-simple-flat-logo-of-database-03-vector.jpg'),
(3, 'bscs admission open', 'download form and submit to colege ', '20/10/2021', 'uploads/success.gif'),
(4, 'new notification', 'new notification testing', '29-01-2024', 'uploads/75603435_932107620523171_6562043062816604160_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cell_no` varchar(50) NOT NULL,
  `select` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `last_name`, `email`, `cell_no`, `select`, `date`, `username`, `password`) VALUES
(6, 'asad', 'ali', 'asadpk27@gmail.com', '03419116614', 'Male', '2020-11-24', 'asad', 'asadali');

-- --------------------------------------------------------

--
-- Table structure for table `st_signup`
--

CREATE TABLE `st_signup` (
  `id` int(11) NOT NULL,
  `cnic` varchar(13) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `area_of_vote` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `st_signup`
--

INSERT INTO `st_signup` (`id`, `cnic`, `gender`, `area_of_vote`, `username`, `password`) VALUES
(10, '0', '', '', 'khan', 'khan'),
(11, '0', '', '', 'jamal', 'jamal'),
(12, '0', '', '', 'numan', 'numan'),
(13, '2147483647', '', 'NA 45', 'asad', 'asad'),
(14, '2147483647', '', 'NA 45', 'ali', 'ali'),
(15, '2147483647', '', 'NA 45', 'ali', 'ali'),
(16, '161026281888', '', 'NA 45', 'new', 'new'),
(17, '1610262818324', '', 'NA 45', 'asad', 'asad'),
(18, '161062818324', 'Male', 'NA 45', 'asad', 'asad'),
(19, '161062818324', 'Male', 'NA 45', 'asad', 'asad'),
(20, '161062818324', 'Male', 'NA 45', 'ahmad', 'ahmad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_data`
--
ALTER TABLE `address_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_area`
--
ALTER TABLE `add_area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_candidate`
--
ALTER TABLE `add_candidate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_categary`
--
ALTER TABLE `add_categary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_party`
--
ALTER TABLE `add_party`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_result`
--
ALTER TABLE `candidate_result`
  ADD PRIMARY KEY (`idd`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `costed_votes`
--
ALTER TABLE `costed_votes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `st_signup`
--
ALTER TABLE `st_signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address_data`
--
ALTER TABLE `address_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `add_area`
--
ALTER TABLE `add_area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `add_candidate`
--
ALTER TABLE `add_candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `add_categary`
--
ALTER TABLE `add_categary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `add_party`
--
ALTER TABLE `add_party`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `candidate_result`
--
ALTER TABLE `candidate_result`
  MODIFY `idd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `costed_votes`
--
ALTER TABLE `costed_votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `st_signup`
--
ALTER TABLE `st_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
