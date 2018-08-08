-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2018 at 08:17 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dotcc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `activationcode` varchar(255) NOT NULL,
  `forgetpasswordcode` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `role_id`, `name`, `password`, `activationcode`, `forgetpasswordcode`, `email`, `active`) VALUES
(2, 1, 'admin', '611028f613c65f5dd1627c515c724e84', 'bb7d8a896f8577179d69964fc0553f7d', '1d117cfe1395a94218b9308564f70656', 'grthayalan18@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `advertisement_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `locationplaced` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `categoryname` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `categoryname`, `description`, `active`) VALUES
(20, 'action', 'action games', 1),
(21, 'adventure', 'adventure games', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `adddate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `user_id`, `subject`, `content`, `attachment`, `adddate`) VALUES
(20, 12, 'all set', 'work completed', 'BeautyPlus_20161214115942_fast.jpg', '2017-12-31 20:54:16'),
(21, 12, 'video testing', 'testing video downloading attachment', 'test.mp4', '2017-12-31 21:00:13'),
(22, 12, 'kwgdskg', 'jhblhbil', '', '2018-01-02 19:03:07'),
(23, 12, 'kwgdskg', 'jhblhbil', '', '2018-01-02 19:03:37'),
(24, 12, 'kwgdskg', 'jhblhbil', '', '2018-01-02 19:03:41'),
(25, 12, 'kwgdskg', 'jhblhbil', '', '2018-01-02 19:03:44'),
(26, 12, 'sample', 'sss', '', '2018-07-29 14:48:58'),
(27, 12, 'sasas', 'asasas', '', '2018-07-29 22:09:36');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `game_id` int(11) NOT NULL,
  `gamename` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `filetype` varchar(255) DEFAULT NULL,
  `code` longtext,
  `ftppath` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `levels` int(11) NOT NULL,
  `adddate` datetime NOT NULL,
  `editdate` datetime NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`game_id`, `gamename`, `category_id`, `filetype`, `code`, `ftppath`, `image`, `levels`, `adddate`, `editdate`, `active`) VALUES
(35, '2048-master', 21, NULL, NULL, '../games/images/2048-master/index.html', 'battlefield_squad-3840x2160.jpg', 6, '2018-01-05 03:09:59', '2018-01-06 10:10:35', 1),
(38, 'clumsy-birds', 21, NULL, NULL, '../games/images/clumsy-bird-master/index.html', 'logo.png', 16, '2018-01-05 03:13:52', '2018-01-07 08:28:10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gift`
--

CREATE TABLE `gift` (
  `gift_id` int(11) NOT NULL,
  `giftname` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `pointvalue` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gift`
--

INSERT INTO `gift` (`gift_id`, `giftname`, `description`, `image`, `pointvalue`, `active`) VALUES
(3, 'test', 'testt', '2015_halo_5_guardians-3840x2160.jpg', 10000, 1),
(4, 'test', 'testt', '2015_halo_5_guardians-3840x2160.jpg', 10000, 1),
(5, 'test', 'testt', '2015_halo_5_guardians-3840x2160.jpg', 10000, 1),
(6, 'test', 'testt', '2015_halo_5_guardians-3840x2160.jpg', 10000, 1),
(7, 'test', 'testt', '2015_halo_5_guardians-3840x2160.jpg', 10000, 1),
(8, 'test', 'testt', '2015_halo_5_guardians-3840x2160.jpg', 10000, 1),
(9, 'test', 'testt', '2015_halo_5_guardians-3840x2160.jpg', 10000, 1),
(10, 'test', 'testt', '2015_halo_5_guardians-3840x2160.jpg', 10000, 1),
(11, 'test', 'testt', '2015_halo_5_guardians-3840x2160.jpg', 10000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `content` longtext NOT NULL,
  `imagefilepath` varchar(255) NOT NULL,
  `videofilepath` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `content`, `imagefilepath`, `videofilepath`, `active`) VALUES
(4, 'asbahjb', 'Latest news and live updates on politics, arts, entertainment, events in India, World, States and Cities from The Hindu.', 'assassins_creed_chronicles_russia-3840x2160.jpg', '', 1),
(7, 'chania', 'Chania is the capital of the Chania region on the island of Crete. The city can be divided in two parts, the old town and the modern city.   0:03 / 0:10', '', 'thayasnehicover.mp4', 1),
(8, 'machoo', 'And when you\'ve stolen the keys to the kingdom, such as cryptographic secrets, you\'ll probably find you can indeed corrupt, modify or delete data, pal. ... issues, which is why Intel and other vendors had planned to disclose this issue next wee', 'far_cry_himalayas-3840x2160.jpg', 'Kodi - Ei Suzhali Tamil Video _ Dhanush, Trisha _ Santhosh Narayanan_HD.mp4', 1),
(9, 'machoo', 'And when you\'ve stolen the keys to the kingdom, such as cryptographic secrets, you\'ll probably find you can indeed corrupt, modify or delete data, pal. ... issues, which is why Intel and other vendors had planned to disclose this issue next wee', 'far_cry_himalayas-3840x2160.jpg', 'Kodi - Ei Suzhali Tamil Video _ Dhanush, Trisha _ Santhosh Narayanan_HD.mp4', 1),
(10, 'machoo', 'And when you\'ve stolen the keys to the kingdom, such as cryptographic secrets, you\'ll probably find you can indeed corrupt, modify or delete data, pal. ... issues, which is why Intel and other vendors had planned to disclose this issue next wee', 'far_cry_himalayas-3840x2160.jpg', 'Kodi - Ei Suzhali Tamil Video _ Dhanush, Trisha _ Santhosh Narayanan_HD.mp4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderedgift`
--

CREATE TABLE `orderedgift` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gift_id` int(11) NOT NULL,
  `orderdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `playedgames`
--

CREATE TABLE `playedgames` (
  `playedgames_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL,
  `played time` time NOT NULL,
  `played date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `point`
--

CREATE TABLE `point` (
  `point_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL,
  `point` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role`) VALUES
(1, 'ADMIN'),
(2, 'USER');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_forum_answer`
--

CREATE TABLE `tbl_forum_answer` (
  `answer_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `question_id` int(10) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_forum_answer`
--

INSERT INTO `tbl_forum_answer` (`answer_id`, `user_id`, `user_name`, `question_id`, `answer`, `timestamp`) VALUES
(0, 12, 'ThayalanGR', 24, 'asasas', '2018-08-08 05:42:58'),
(1, 1, 'dcdcdcdc', 1, 'yftctfcfctfctctc', '2018-08-04 06:08:59'),
(2, 1, 'dcdcdcdc', 1, 'gvghvfrfrtcrtrc', '2018-08-04 06:08:59'),
(3, 1, 'dcdcdcdc', 1, 'rflmlkcmlkcm', '2018-08-04 12:00:48'),
(4, 1, 'dcdcdcdc', 1, 'rflmlkcmlkcm', '2018-08-04 12:00:48'),
(5, 1, 'dcdcdcdc', 1, 'rflmlkcmlkcm', '2018-08-04 12:00:48'),
(6, 1, 'dcdcdcdc', 1, 'rflmlkcmlkcm', '2018-08-04 12:00:49'),
(7, 1, 'dcdcdcdc', 1, 'rflmlkcmlkcm', '2018-08-04 12:00:49'),
(8, 1, 'dcdcdcdc', 1, 'rflmlkcmlkcm', '2018-08-04 12:00:49'),
(9, 1, 'dcdcdcdc', 1, 'rflmlkcmlkcm', '2018-08-04 12:00:49'),
(10, 1, 'dcdcdcdc', 1, 'rflmlkcmlkcm', '2018-08-04 12:00:49'),
(11, 1, 'dcdcdcdc', 1, 'rflmlkcmlkcm', '2018-08-04 12:00:49'),
(12, 1, 'dcdcdcdc', 1, 'rflmlkcmlkcm', '2018-08-04 12:00:49'),
(13, 1, 'dcdcdcdc', 1, 'rflmlkcmlkcm', '2018-08-04 12:00:49'),
(14, 1, 'dcdcdcdc', 1, 'rflmlkcmlkcm', '2018-08-04 12:00:49'),
(15, 1, 'dcdcdcdc', 1, 'rflmlkcmlkcm', '2018-08-04 12:00:49'),
(16, 1, 'dcdcdcdc', 1, 'rflmlkcmlkcm', '2018-08-04 12:00:49'),
(17, 1, 'dcdcdcdc', 1, 'rflmlkcmlkcm', '2018-08-04 12:00:49'),
(18, 1, 'dcdcdcdc', 1, 'rflmlkcmlkcm', '2018-08-04 12:00:49'),
(19, 1, 'dcdcdcdc', 1, 'evlmflkvmlfvmflv', '2018-08-04 12:00:55'),
(20, 2, 'dweweeee', 1, 'evlmflkvmlfvmflv', '2018-08-04 12:00:55'),
(21, 2, 'dweweeee', 1, 'evlmflkvmlfvmflv', '2018-08-04 12:00:55'),
(22, 2, 'dweweeee', 1, 'evlmflkvmlfvmflv', '2018-08-04 12:00:55'),
(23, 2, 'dweweeee', 1, 'evlmflkvmlfvmflv', '2018-08-04 12:00:56'),
(24, 2, 'dweweeee', 1, 'evlmflkvmlfvmflv', '2018-08-04 12:00:56'),
(25, 2, 'dweweeee', 1, 'evlmflkvmlfvmflv', '2018-08-04 12:00:56'),
(26, 2, 'dweweeee', 1, 'evlmflkvmlfvmflv', '2018-08-04 12:00:56'),
(27, 2, 'dweweeee', 1, 'evlmflkvmlfvmflv', '2018-08-04 12:00:56'),
(28, 2, 'dweweeee', 1, 'evlmflkvmlfvmflv', '2018-08-04 12:00:56'),
(29, 2, 'dweweeee', 1, 'evlmflkvmlfvmflv', '2018-08-04 12:00:56'),
(30, 2, 'dweweeee', 1, 'evlmflkvmlfvmflv', '2018-08-04 12:00:56'),
(31, 2, 'dweweeee', 1, 'evlmflkvmlfvmflv', '2018-08-04 12:00:56'),
(32, 2, 'dweweeee', 1, 'evlmflkvmlfvmflv', '2018-08-04 12:00:56'),
(33, 2, 'dweweeee', 1, 'evlmflkvmlfvmflv', '2018-08-04 12:00:56'),
(34, 2, 'dweweeee', 1, 'evlmflkvmlfvmflv', '2018-08-04 12:00:56'),
(35, 2, 'dweweeee', 16, 'ckjnckjc', '2018-08-04 12:07:38'),
(36, 2, 'dweweeee', 15, 'gcjgvj', '2018-08-04 12:47:06'),
(37, 2, 'dweweeee', 14, '<kbd> ghdgf </kbd>', '2018-08-04 12:48:17'),
(38, 2, 'dweweeee', 17, 'jjjbdbchdcdncjcdncjdn', '2018-08-04 18:11:14'),
(39, 2, 'dweweeee', 17, 'yybuhnjmmimm', '2018-08-05 05:16:31'),
(40, 1, 'dcdcdcdc', 18, 'dcdsccsdc', '2018-08-07 15:52:27'),
(41, 1, 'dcdcdcdc', 18, 'scscsdcsdc', '2018-08-07 15:52:33'),
(42, 1, 'dcdcdcdc', 19, 'sdcscscsdc', '2018-08-07 15:52:46'),
(43, 1, 'dcdcdcdc', 20, 'sfffff', '2018-08-07 16:27:24'),
(44, 1, 'dcdcdcdc', 21, 'yfxdxdxdxdx', '2018-08-07 18:56:03'),
(45, 1, 'dcdcdcdc', 21, 'trdxdxdxdxdx', '2018-08-07 18:56:11'),
(46, 1, 'dcdcdcdc', 21, 'vgvgvg', '2018-08-07 18:56:18'),
(47, 13, '', 18, 'vvvvvvvvvvvvvvvvvvvvvv', '2018-08-07 19:32:51'),
(48, 13, '', 21, 'cccccccccccccc', '2018-08-07 19:32:58'),
(49, 13, '', 21, 'cccccccccccccccccccc', '2018-08-07 19:33:05'),
(50, 13, '', 20, 'cccccccccccccccccccccccc', '2018-08-07 19:33:12'),
(51, 3, 'efdeffffe', 18, 'esesesrerx', '2018-08-07 19:59:23'),
(52, 3, 'efdeffffe', 21, 'sn nzx sn znsz', '2018-08-07 20:00:07'),
(53, 3, 'efdeffffe', 23, 'cskjnjknvjksnv', '2018-08-07 20:14:09'),
(54, 13, 'Raaja Vignesh', 24, 'gfxgfxxcxcx', '2018-08-07 20:16:12'),
(55, 13, 'Raaja Vignesh', 24, 'b b  ', '2018-08-07 20:16:28'),
(56, 13, 'Raaja Vignesh', 24, 'gfxgfxx', '2018-08-07 20:19:03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_forum_question`
--

CREATE TABLE `tbl_forum_question` (
  `question_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_forum_question`
--

INSERT INTO `tbl_forum_question` (`question_id`, `user_id`, `user_name`, `question`, `tags`, `timestamp`) VALUES
(0, 12, 'ThayalanGR', 'd cmnd cnmd cmdcmnd', 'Android', '2018-08-08 06:05:40'),
(1, 1, 'dcdcdcdc', 'Android', 'seryyy', '2018-08-01 14:07:32'),
(2, 1, 'dcdcdcdc', 'vzvvzvzv', 'Web', '2018-08-01 14:07:32'),
(3, 1, 'dcdcdcdc', 'zdsvdsf', 'Android', '2018-08-01 14:07:32'),
(4, 1, 'dcdcdcdc', 'dvvvzvz', 'Android', '2018-08-01 14:07:32'),
(5, 1, 'dcdcdcdc', 'dvvvzvz', 'Android', '2018-08-01 14:07:32'),
(6, 1, 'dcdcdcdc', 'XXxzzxxzx', 'Android', '2018-08-01 16:05:19'),
(7, 1, 'dcdcdcdc', 'cvcvcc', 'Android', '2018-08-01 16:13:05'),
(8, 1, 'dcdcdcdc', 'fvfvnf ', 'Android', '2018-08-01 16:53:07'),
(9, 1, 'dcdcdcdc', 'test\r\n', 'Android', '2018-08-01 16:53:24'),
(10, 191078, '', 'xx', 'Android', '2018-08-01 18:47:09'),
(11, 2, 'dweweeee', '', 'Android', '2018-08-04 06:12:49'),
(12, 2, 'dweweeee', '', 'Android', '2018-08-04 06:21:45'),
(13, 2, 'dweweeee', 'xxmx', 'Android', '2018-08-04 06:22:02'),
(14, 2, 'dweweeee', 'm,dx md x', 'Android', '2018-08-04 06:25:59'),
(15, 2, 'dweweeee', 'sx msx ', 'Android', '2018-08-04 06:26:10'),
(16, 2, 'dweweeee', 'hjhjbjhbjbhjbuhb', 'Web', '2018-08-04 07:53:56'),
(17, 2, 'dweweeee', 'bgbfgbfgbfgbfbfbbgbgbg', 'Android', '2018-08-04 16:58:40'),
(18, 2, 'dweweeee', ' b b n  vfcdcr', 'Android', '2018-08-05 05:16:57'),
(19, 1, 'dcdcdcdc', 'dcdccsdcsc', 'Android', '2018-08-07 15:52:39'),
(20, 1, 'dcdcdcdc', 'dsjnvsdnv', 'Android', '2018-08-07 15:54:26'),
(21, 1, 'dcdcdcdc', 'nn,mn,mn,mn,m\r\n', 'Android', '2018-08-07 17:57:02'),
(22, 3, 'efdeffffe', 'md xd xd xdx ndx ', 'Android', '2018-08-07 20:00:17'),
(23, 3, 'efdeffffe', 'kjncjncncc', 'Android', '2018-08-07 20:14:01'),
(24, 13, 'Raaja Vignesh', 'cgfcgfcgfcg', 'Web', '2018-08-07 20:16:04');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `sno` int(11) NOT NULL,
  `a` varchar(255) NOT NULL,
  `b` varchar(255) NOT NULL,
  `c` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`sno`, `a`, `b`, `c`) VALUES
(1, '0', '0', '0'),
(2, '', '', ''),
(3, '', '', ''),
(4, '', '', ''),
(5, '', '', ''),
(6, 'a', 'b', 'c'),
(7, 'a', 'b', 'c'),
(8, 'a', 'b', 'c'),
(9, '111', '111', '111'),
(10, '111', '111', '111'),
(11, '111', '111', '112'),
(12, '111', '111', '114');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(12) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `activationcode` varchar(255) NOT NULL,
  `forgetpasswordcode` varchar(255) NOT NULL,
  `batchno` varchar(255) NOT NULL,
  `upload_image` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `interest` varchar(255) NOT NULL,
  `exception` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `role_id`, `name`, `birthdate`, `gender`, `email`, `mobile`, `password`, `activationcode`, `forgetpasswordcode`, `batchno`, `upload_image`, `active`, `interest`, `exception`) VALUES
(12, 2, 'ThayalanGR', '1988-05-05', 'male', 'grthayalan18@gmail.com', '8489455901', '4297f44b13955235245b2497399d7a93', '8386c45b0f34184b30ce596a42f4da14', '6115e83e90387ab572a9c85e9ad95e41', 'thayalann', 'freelance.jpg', 1, 'webdevelopment', 'Networking'),
(13, 2, 'Raaja Vignesh', '1999-03-19', 'male', 'rajavignesh36@gmail.com', '9489943518', '5a92c41649a4f14e246a3755eaad0cee', 'fd89145e1e57bcbea505f1497d94f825', '8a085511b837b1b5117594e3e957e72e', '191078', 'FB_IMG_1479739199040.jpg', 1, 'WebDevelopment', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`advertisement_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `UK` (`user_id`) USING BTREE;

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`game_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `gift`
--
ALTER TABLE `gift`
  ADD PRIMARY KEY (`gift_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `orderedgift`
--
ALTER TABLE `orderedgift`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `FK` (`user_id`),
  ADD KEY `fk1` (`gift_id`);

--
-- Indexes for table `playedgames`
--
ALTER TABLE `playedgames`
  ADD PRIMARY KEY (`playedgames_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `game_id` (`game_id`);

--
-- Indexes for table `point`
--
ALTER TABLE `point`
  ADD PRIMARY KEY (`point_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `game_id` (`game_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tbl_forum_answer`
--
ALTER TABLE `tbl_forum_answer`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `tbl_forum_question`
--
ALTER TABLE `tbl_forum_question`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `UK_it77eq964jhfqtu54081ebtio` (`role_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `advertisement_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `game_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `gift`
--
ALTER TABLE `gift`
  MODIFY `gift_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `games_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
