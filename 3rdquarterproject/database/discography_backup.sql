-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2020 at 05:26 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3rdquarterproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `discography`
--

CREATE TABLE `discography` (
  `disc_id` int(255) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `album_name` text NOT NULL,
  `track_num` int(20) UNSIGNED NOT NULL,
  `track_name` varchar(120) NOT NULL,
  `track_length` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discography`
--

INSERT INTO `discography` (`disc_id`, `date`, `album_name`, `track_num`, `track_name`, `track_length`) VALUES
(1, '1993-02-22', 'Pablo Honey', 1, 'You', '3:29'),
(2, '1993-02-22', 'Pablo Honey', 2, 'Creep', '3:56'),
(3, '1993-02-22', 'Pablo Honey', 3, 'How Do You?', '2:12'),
(4, '1993-02-22', 'Pablo Honey', 4, 'Stop Whispering', '5:26'),
(5, '1993-02-22', 'Pablo Honey', 5, 'Thinking About You', '2:41'),
(6, '1993-02-22', 'Pablo Honey', 6, 'Anyone Can Play Guitar', '3:38'),
(7, '1993-02-22', 'Pablo Honey', 7, 'Ripcord', '3:10'),
(8, '1993-02-22', 'Pablo Honey', 8, 'Vegetable', '3:13'),
(9, '1993-02-22', 'Pablo Honey', 9, 'Prove Yourself', '2:25'),
(10, '1993-02-22', 'Pablo Honey', 10, 'I Can\'t', '4:13'),
(11, '1993-02-22', 'Pablo Honey', 11, 'Lurgee', '3:08'),
(12, '1993-02-22', 'Pablo Honey', 12, 'Blow Out', '4:40'),
(13, '1995-03-13', 'The Bends', 1, 'Planet Telex', '4:19'),
(14, '1995-03-13', 'The Bends', 2, 'The Bends', '4:06'),
(15, '1995-03-13', 'The Bends', 3, 'High and Dry', '4:17'),
(16, '1995-03-13', 'The Bends', 4, 'Fake Plastic Trees', '4:50'),
(17, '1995-03-13', 'The Bends', 5, 'Bones', '3:09'),
(18, '1995-03-13', 'The Bends', 6, '(Nice Dream)', '3:53'),
(19, '1995-03-13', 'The Bends', 7, 'Just', '3:54'),
(20, '1995-03-13', 'The Bends', 8, 'My Iron Lung', '4:36'),
(21, '1995-03-13', 'The Bends', 9, 'Bullet Proof...I Wish I Was', '3:28'),
(22, '1995-03-13', 'The Bends', 10, 'Black Star', '4:07'),
(23, '1995-03-13', 'The Bends', 11, 'Sulk', '3:42'),
(24, '1995-03-13', 'The Bends', 12, 'Street Spirit (Fade Out)', '4:12'),
(25, '1997-05-21', 'OK Computer', 1, 'Airbag', '4:44'),
(26, '1997-05-21', 'OK Computer', 2, 'Paranoid Android', '6:23'),
(27, '1997-05-21', 'OK Computer', 3, 'Subterranean Homesick Alien', '4:27'),
(28, '1997-05-21', 'OK Computer', 4, 'Exit Music (For A Film)', '4:24'),
(29, '1997-05-21', 'OK Computer', 5, 'Let Down', '4:59'),
(30, '1997-05-21', 'OK Computer', 6, 'Karma Police', '4:21'),
(31, '1997-05-21', 'OK Computer', 7, 'Fitter Happier', '1:57'),
(32, '1997-05-21', 'OK Computer', 8, 'Electioneering', '3:50'),
(33, '1997-05-21', 'OK Computer', 9, 'Climbing Up the Walls', '4:45'),
(34, '1997-05-21', 'OK Computer', 10, 'No Surprises', '3:48'),
(35, '1997-05-21', 'OK Computer', 11, 'Lucky', '4:19'),
(36, '1997-05-21', 'OK Computer', 12, 'The Tourist', '5:24'),
(37, '2000-10-02', 'Kid A', 1, 'Everything in Its Right Place', '4:11'),
(38, '2000-10-02', 'Kid A', 2, 'Kid A', '4:44'),
(39, '2000-10-02', 'Kid A', 3, 'The National Anthem', '5:51'),
(40, '2000-10-02', 'Kid A', 4, 'How to Disappear Completely', '5:56'),
(41, '2000-10-02', 'Kid A', 5, 'Treefingers', '3:42'),
(42, '2000-10-02', 'Kid A', 6, 'Optimistic', '5:15'),
(43, '2000-10-02', 'Kid A', 7, 'In Limbo', '3:31'),
(44, '2000-10-02', 'Kid A', 8, 'Idioteque', '5:09'),
(45, '2000-10-02', 'Kid A', 9, 'Morning Bell', '4:35'),
(56, '2000-10-02', 'Kid A', 10, 'Motion Picture Soundtrack', '7:00'),
(57, '2001-06-05', 'Amnesiac', 1, 'Packt Like Sardines in a Crushd Tin Box', '4:00'),
(58, '2001-06-05', 'Amnesiac', 2, 'Pyramid Song', '4:49'),
(59, '2001-06-05', 'Amnesiac', 3, 'Pulk/Pull Revolving Doors', '4:07'),
(60, '2001-06-05', 'Amnesiac', 4, 'You and Whose Army?', '3:11'),
(61, '2001-06-05', 'Amnesiac', 5, 'I Might Be Wrong', '4:54'),
(62, '2001-06-05', 'Amnesiac', 6, 'Knives Out', '4:15'),
(63, '2001-06-05', 'Amnesiac', 7, 'Morning Bell/Amnesiac', '3:14'),
(64, '2001-06-05', 'Amnesiac', 8, 'Dollars and Cents', '4:52'),
(65, '2001-06-05', 'Amnesiac', 9, 'Hunting Bears', '2:01'),
(66, '2001-06-05', 'Amnesiac', 10, 'Like Spinning Plates', '3:57'),
(67, '2001-06-05', 'Amnesiac', 11, 'Life in a Glasshouse', '4:34'),
(68, '2003-06-09', 'Hail to the Thief', 1, '2 + 2 = 5.', '3:19'),
(69, '2003-06-09', 'Hail to the Thief', 2, 'Sit down. Stand up.', '4:19'),
(70, '2003-06-09', 'Hail to the Thief', 3, 'Sail to the Moon.', '4:18'),
(71, '2003-06-09', 'Hail to the Thief', 4, 'Backdrifts.', '5:22'),
(72, '2003-06-09', 'Hail to the Thief', 5, 'Go to Sleep.', '3:21'),
(73, '2003-06-09', 'Hail to the Thief', 6, 'Where I End and You Begin.', '4:29'),
(74, '2003-06-09', 'Hail to the Thief', 7, 'We suck Young Blood.', '4:56'),
(75, '2003-06-09', 'Hail to the Thief', 8, 'The Gloaming.', '3:32'),
(76, '2003-06-09', 'Hail to the Thief', 9, 'There. There.', '5:25'),
(77, '2003-06-09', 'Hail to the Thief', 10, 'I Will.', '1:59'),
(78, '2003-06-09', 'Hail to the Thief', 11, 'A Punchup at a Wedding.', '4:57'),
(79, '2003-06-09', 'Hail to the Thief', 12, 'Myxomatosis.', '3:52'),
(80, '2003-06-09', 'Hail to the Thief', 13, 'Scatterbrain.', '3:21'),
(81, '2003-06-09', 'Hail to the Thief', 14, 'A Wolf at the Door.', '3:21'),
(82, '2007-10-10', 'In Rainbows', 1, '15 Step', '3:58'),
(83, '2007-10-10', 'In Rainbows', 2, 'Bodysnatchers', '4:02'),
(84, '2007-10-10', 'In Rainbows', 3, 'Nude', '4:15'),
(85, '2007-10-10', 'In Rainbows', 4, 'Weird Fishes/Arpeggi', '5:18'),
(86, '2007-10-10', 'In Rainbows', 5, 'All I Need', '3:49'),
(87, '2007-10-10', 'In Rainbows', 6, 'Faust Arp', '2:10'),
(88, '2007-10-10', 'In Rainbows', 7, 'Reckoner', '4:50'),
(89, '2007-10-10', 'In Rainbows', 8, 'House of Cards', '5:28'),
(90, '2007-10-10', 'In Rainbows', 9, 'Jigsaw Falling into Place', '4:09'),
(91, '2007-10-10', 'In Rainbows', 10, 'Videotape', '4:40'),
(92, '2007-10-10', 'The King of Limbs', 1, 'Bloom', '5:15'),
(93, '2007-10-10', 'The King of Limbs', 2, 'Morning Mr Magpie', '4:41'),
(94, '2007-10-10', 'The King of Limbs', 3, 'Little by Little', '4:27'),
(95, '2007-10-10', 'The King of Limbs', 4, 'Feral', '3:13'),
(96, '2007-10-10', 'The King of Limbs', 5, 'Lotus Flower', '5:01'),
(97, '2007-10-10', 'The King of Limbs', 6, 'Codex', '4:47'),
(98, '2007-10-10', 'The King of Limbs', 7, 'Give Up the Ghost', '4:50'),
(99, '2007-10-10', 'The King of Limbs', 8, 'Separator', '5:20'),
(100, '2016-05-08', 'A Moon Shaped Pool', 1, 'Burn the Witch', '3:40'),
(101, '2016-05-08', 'A Moon Shaped Pool', 2, 'Daydreaming', '6:24'),
(102, '2016-05-08', 'A Moon Shaped Pool', 3, 'Decks Dark', '4:41'),
(103, '2016-05-08', 'A Moon Shaped Pool', 4, 'Desert Island Disk', '3:44'),
(104, '2016-05-08', 'A Moon Shaped Pool', 5, 'Ful Stop', '6:07'),
(105, '2016-05-08', 'A Moon Shaped Pool', 6, 'Glass Eyes', '2:52'),
(106, '2016-05-08', 'A Moon Shaped Pool', 7, 'Identikit', '4:26'),
(107, '2016-05-08', 'A Moon Shaped Pool', 8, 'The Numbers', '5:45'),
(108, '2016-05-08', 'A Moon Shaped Pool', 9, 'Present Tense', '5:06'),
(109, '2016-05-08', 'A Moon Shaped Pool', 10, 'Tinker Tailor Soldier Sailor Rich Man Poor Man Beggar Man Thief', '5:03'),
(110, '2016-05-08', 'A Moon Shaped Pool', 11, 'True Love Waits', '4:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `discography`
--
ALTER TABLE `discography`
  ADD PRIMARY KEY (`disc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `discography`
--
ALTER TABLE `discography`
  MODIFY `disc_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
