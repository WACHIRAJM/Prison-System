-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2019 at 10:20 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prison_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `user_name`, `user_password`) VALUES
(1, 'John Wachira', 'johnwachira1');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(11) NOT NULL,
  `too` varchar(100) NOT NULL,
  `national_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `too`, `national_id`, `name`, `subject`, `message`) VALUES
(1, 'asdf', 16567, 'zsdfg', 'sdfghn', 'dfgbnmj'),
(2, 'john', 3467788, 'wadvnvng', 'stealing', 'this has stolen '),
(3, 'Kalms Oti', 12345, 'jay sam', 'killing', 'I found him killing someone in kasee village'),
(4, 'rtyew4', 34567, 'wersdtfyhgj', 'erty', 'wqerty'),
(5, 'sab', 345, 'bas', 'stealing', 'he stall my car');

-- --------------------------------------------------------

--
-- Table structure for table `courtinfo`
--

CREATE TABLE `courtinfo` (
  `id` int(11) NOT NULL,
  `case_no` varchar(20) NOT NULL,
  `court_location` varchar(50) NOT NULL,
  `post_keywords` varchar(100) NOT NULL,
  `judge_name` varchar(50) NOT NULL,
  `punishment` varchar(50) NOT NULL,
  `periodofpunishment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courtinfo`
--

INSERT INTO `courtinfo` (`id`, `case_no`, `court_location`, `post_keywords`, `judge_name`, `punishment`, `periodofpunishment`) VALUES
(1, 'a12345gh', 'ke  gd', '1234', 'werv', 'wfbnj', '23rd april 2112 to 4th march 2200');

-- --------------------------------------------------------

--
-- Table structure for table `prisoners_profile`
--

CREATE TABLE `prisoners_profile` (
  `id` int(11) NOT NULL,
  `post_name` varchar(40) NOT NULL,
  `post_date` date NOT NULL,
  `post_id` int(10) NOT NULL,
  `post_keywords` varchar(100) NOT NULL,
  `post_image` text NOT NULL,
  `post_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prisoners_profile`
--

INSERT INTO `prisoners_profile` (`id`, `post_name`, `post_date`, `post_id`, `post_keywords`, `post_image`, `post_description`) VALUES
(9, 'john kalulu', '2027-04-19', 12345678, '12345678,john,kalulu', 'FB_IMG_1518947973033.jpg', 'Arrested for stilling. He was born in 1922\r\nAugust, he is six feet tall with a hairy body. He used to operate with one of the most dangerous gangsters in town. He was the leader of the gangsters.\r\nThis is a project documentation where the idea was to come up with an automated system for prison management that automate the routine function of the prison management system and overcome the problem associated with the current system. Also make computerized crime record to enable professionals and non-professionals to handle criminal related matter with ease. This documentation shows how the research itself was carried thereby identifying the problems and offering solutions for them while choosing an appropriate system methodology for the proposed automated system. The methodology is explained in detail specifying requirements the system meets during implementation, justification for the reason why the applied methodology is used is also included in this documentation.'),
(10, 'ching chong', '2027-04-19', 90, '90, chong', 'IMG_20150102_220237.jpg', 'he was from china.\r\nOnce a sentence is passed the prison officer becomes the middle men between the government and the prisoners. The prisoner on his/her own part will do anything within his or her own limit to see that he does not spent a minute beyond the sentence given while the government will not want to do away with the prisoners until every bits of the jail terms or otherwise is completely secured. The instruments used by prison officer to see that both parties are satisfied this is the computation of sentence. Hence it is defined as the earliest day release and the latest day release of the prisoners. To this end a micro-computer based will be developed to alert the prison the prison staff of the capability of a computer for effective services. In this project attention will be based on automated system for prison management.'),
(11, 'last born', '2027-04-19', 34, '34, last,born', 'IMG-20180607-WA0001.jpg', 'The introduction of computers has brought many has brought many changes to various fields such as prisons, health sectors, hotel, bank and in business sector generally. Just because it helps to carry out complex and lengthy analytical operation very rapidly to effective communication system, it is also time saving, versatile flexible storage of large information and reduce human labor. \r\nThe prison is a very large yard where prisoners, warders and other prisons staff reside. Researchers and prisons staff like any other human will always apply the latest technology in the field so as to reduce stress encountered in their field. An automated system for prison management is the collection of register cases for each prisoner entering the prison for automated diary generator. A good system for prison service should be automated because it enhances the administrative and experience to design, develop and implement automated system for prison management for prison defense and security.  \r\n'),
(12, 'drs name', '2027-04-19', 5670, 'drs,name,5670', 'IMG_20170116_171554.jpg', 'A user shall be able to file a complaint at any time and any location. Multiple users shall be able to use the application simultaneously without experiencing any technical difficulties. Users shall be able to use this system from any web browser supporting the latest versions of HTML. Users shall be able to view both day and night wardens on duty as well as booking appointment so that they can be able to communicate with the relevant people. Users shall be able to view prisonersâ€™ profile, inmate court information as well as prisoners criminal record.\r\nDuring data collection, we investigated and found out how the current system operates, not only that but also tried out which problems are faced and how best they can be settled. The users described some of the basic requirements of the system this includes file complaint, Report missing person, view prison wardens on duty, booking appointment, view prisonerâ€™s profile, inmate court information, prisoners criminal record and prisoners family information.\r\n'),
(13, 'wsnft', '2029-04-19', 1356, '98', '1454078905647.jpg', 'ssgfgg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `national_id` int(8) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `phone_no` int(13) NOT NULL,
  `residence` varchar(10) NOT NULL,
  `full_name` varchar(40) NOT NULL,
  `image` text,
  `descripion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `national_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `adress` varchar(30) NOT NULL,
  `phone_no` int(12) NOT NULL,
  `visited_person` varchar(50) NOT NULL,
  `gifts` varchar(200) NOT NULL,
  `frequency` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `national_id`, `name`, `adress`, `phone_no`, `visited_person`, `gifts`, `frequency`) VALUES
(1, 45566, 'gfff vggh', '455f fgg', 875444, 'fghh ggyyy', 'fgghb ghhy ggyy', 'fgggg yjjjj hhjj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courtinfo`
--
ALTER TABLE `courtinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prisoners_profile`
--
ALTER TABLE `prisoners_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courtinfo`
--
ALTER TABLE `courtinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prisoners_profile`
--
ALTER TABLE `prisoners_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
