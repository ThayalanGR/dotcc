-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2018 at 06:42 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `credits`
--

CREATE TABLE `credits` (
  `credits_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `credits` int(11) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `date1` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credits`
--

INSERT INTO `credits` (`credits_id`, `userid`, `credits`, `reason`, `date1`) VALUES
(19, 12, 12, 'this is for testing', '2018-08-09 14:46:40'),
(20, 12, 12, 'this is for testing', '2018-08-09 14:47:33'),
(21, 13, 17, 'this is for second testing', '2018-08-09 14:48:01'),
(22, 12, 11, 'dded', '2018-08-09 14:48:36'),
(23, 12, 11, 'aasaa', '2018-08-09 14:49:31'),
(24, 12, 11, 'asasa', '2018-08-09 14:49:49'),
(25, 12, 10, 'test success', '2018-08-09 15:00:50'),
(26, 12, 10, 'test success', '2018-08-09 15:03:17'),
(27, 12, 10, 'test success', '2018-08-09 15:03:33'),
(28, 12, 11, 'Registration Bonus Credits', '2018-08-09 16:42:56'),
(29, 0, 25, 'Registration Bonus Credits', '2018-08-09 15:06:12'),
(30, 16, 25, 'Registration Bonus Credits', '2018-08-09 15:10:19'),
(31, 17, 25, 'Registration Bonus Credits', '2018-08-09 15:27:11');

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
(56, 13, 'Raaja Vignesh', 24, 'gfxgfxx', '2018-08-07 20:19:03'),
(57, 12, 'ThayalanGR', 25, 'jdbcjkdbcdbc', '2018-08-08 06:23:04'),
(58, 12, 'ThayalanGR', 25, 'x c cb cc ', '2018-08-08 06:23:18'),
(59, 12, 'ThayalanGR', 24, 'xc c c b cbccbc c', '2018-08-08 06:23:30'),
(60, 12, 'ThayalanGR', 26, 'c  cbn cnb cnbc ', '2018-08-08 06:24:05'),
(61, 12, 'ThayalanGR', 24, 'asasa', '2018-08-08 06:56:08'),
(62, 12, 'ThayalanGR', 26, 'asas', '2018-08-08 06:56:23'),
(63, 12, 'ThayalanGR', 15, 'asasas', '2018-08-08 06:56:38'),
(64, 12, 'ThayalanGR', 18, 'ydfydfyrfd', '2018-08-08 06:57:12'),
(65, 12, 'ThayalanGR', 25, 'rtyery', '2018-08-08 06:57:28'),
(66, 12, 'ThayalanGR', 20, 'asasa', '2018-08-08 07:12:38'),
(67, 12, 'ThayalanGR', 21, 'asasas', '2018-08-08 07:12:46'),
(68, 12, 'ThayalanGR', 21, 'asasasasasddfddd', '2018-08-08 07:13:06'),
(69, 12, 'ThayalanGR', 26, 'asasa', '2018-08-08 07:36:21'),
(70, 12, 'ThayalanGR', 26, 'asasas', '2018-08-08 07:36:32'),
(71, 12, 'ThayalanGR', 26, 'asasas', '2018-08-08 07:36:48'),
(72, 12, 'ThayalanGR', 24, 'asasas', '2018-08-08 07:37:13'),
(73, 12, 'ThayalanGR', 28, 'rtgfdgfg', '2018-08-08 07:46:59'),
(74, 17, 'ThayalanGR', 29, 'here it is this is my soluton', '2018-08-09 15:31:02');

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
(24, 13, 'Raaja Vignesh', 'cgfcgfcgfcg', 'Web', '2018-08-07 20:16:04'),
(25, 12, 'ThayalanGR', 'cd,c dm,c dmc ', 'Android', '2018-08-08 06:22:56'),
(26, 12, 'ThayalanGR', 'cb dc dc c bc ', 'Android', '2018-08-08 06:23:56'),
(27, 12, 'ThayalanGR', 'sfasa', 'Android', '2018-08-08 07:39:30'),
(28, 12, 'ThayalanGR', 'sdsdsdsdsdsdsds', 'Android', '2018-08-08 07:39:52'),
(29, 12, 'ThayalanGR', 'wewewew', 'Web', '2018-08-08 09:48:37');

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
(17, 2, 'ThayalanGR', '1999-05-11', 'male', 'grthayalan18@gmail.com', '8489455901', '0154bbe213b9b5884c745a4f2e0660c0', '2330cb4e4632614f37860f46e8f630c2', '022efa627c65ef6950ab45dcdb6b5bb6', '191106', 'freelance.jpg', 1, 'WebDevelopment', 'Android');

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
-- Indexes for table `credits`
--
ALTER TABLE `credits`
  ADD PRIMARY KEY (`credits_id`);

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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `credits`
--
ALTER TABLE `credits`
  MODIFY `credits_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orderedgift`
--
ALTER TABLE `orderedgift`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `playedgames`
--
ALTER TABLE `playedgames`
  MODIFY `playedgames_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `point`
--
ALTER TABLE `point`
  MODIFY `point_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_forum_answer`
--
ALTER TABLE `tbl_forum_answer`
  MODIFY `answer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `tbl_forum_question`
--
ALTER TABLE `tbl_forum_question`
  MODIFY `question_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `games_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `orderedgift`
--
ALTER TABLE `orderedgift`
  ADD CONSTRAINT `FK` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk1` FOREIGN KEY (`gift_id`) REFERENCES `gift` (`gift_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `playedgames`
--
ALTER TABLE `playedgames`
  ADD CONSTRAINT `playedgames_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `playedgames_ibfk_2` FOREIGN KEY (`game_id`) REFERENCES `games` (`game_id`);

--
-- Constraints for table `point`
--
ALTER TABLE `point`
  ADD CONSTRAINT `point_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `point_ibfk_2` FOREIGN KEY (`game_id`) REFERENCES `games` (`game_id`);

--
-- Constraints for table `tbl_forum_answer`
--
ALTER TABLE `tbl_forum_answer`
  ADD CONSTRAINT `tbl_forum_answer_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `tbl_forum_question` (`question_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
