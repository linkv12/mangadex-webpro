-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 12, 2019 at 12:40 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mangadex2`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE `chapter` (
  `idChapter` varchar(256) NOT NULL,
  `idManga` varchar(256) NOT NULL,
  `chapter_number` int(11) NOT NULL,
  `chapter_title` varchar(256) NOT NULL,
  `chapter_group` varchar(256) NOT NULL,
  `uploader` varchar(256) NOT NULL,
  `view` int(11) NOT NULL,
  `age` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chapter_comment`
--

CREATE TABLE `chapter_comment` (
  `idChapter` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `comment` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chapter_stat`
--

CREATE TABLE `chapter_stat` (
  `idChapter` varchar(256) NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `filter_langguage`
--

CREATE TABLE `filter_langguage` (
  `idSetting` varchar(256) NOT NULL,
  `language` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filter_langguage`
--

INSERT INTO `filter_langguage` (`idSetting`, `language`) VALUES
('000', 'English');

-- --------------------------------------------------------

--
-- Table structure for table `group_stat`
--

CREATE TABLE `group_stat` (
  `idGroupStat` varchar(256) NOT NULL,
  `view` int(11) NOT NULL,
  `follow` int(11) NOT NULL,
  `total_chapter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manga`
--

CREATE TABLE `manga` (
  `idManga` varchar(256) NOT NULL,
  `Title` varchar(256) NOT NULL,
  `Author` varchar(256) NOT NULL,
  `Artist` varchar(256) NOT NULL,
  `description` varchar(2048) NOT NULL,
  `cover` varchar(256) NOT NULL DEFAULT 'default_manga_cover.png',
  `pub_status` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manga_alt_title`
--

CREATE TABLE `manga_alt_title` (
  `idManga` varchar(256) NOT NULL,
  `alt_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manga_comment`
--

CREATE TABLE `manga_comment` (
  `idManga` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `comment` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manga_demographic`
--

CREATE TABLE `manga_demographic` (
  `idManga` varchar(256) NOT NULL,
  `demographic` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manga_genre`
--

CREATE TABLE `manga_genre` (
  `idManga` varchar(256) NOT NULL,
  `genre` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manga_link`
--

CREATE TABLE `manga_link` (
  `idManga` varchar(256) NOT NULL,
  `manga_update` varchar(512) DEFAULT NULL,
  `raw` varchar(512) DEFAULT NULL,
  `official` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manga_stat`
--

CREATE TABLE `manga_stat` (
  `idManga` varchar(256) NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  `follow` int(11) NOT NULL DEFAULT '0',
  `total` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manga_theme`
--

CREATE TABLE `manga_theme` (
  `idManga` varchar(256) NOT NULL,
  `theme` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `idPicture` varchar(256) NOT NULL,
  `idChapter` varchar(256) NOT NULL,
  `file_name` varchar(1024) NOT NULL,
  `picture_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scan_group`
--

CREATE TABLE `scan_group` (
  `idScanGroup` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `alt_name` varchar(256) NOT NULL,
  `leader` varchar(256) NOT NULL,
  `banner` varchar(256) NOT NULL DEFAULT 'default_group_banner.png',
  `idGroupStat` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scan_group_comment`
--

CREATE TABLE `scan_group_comment` (
  `idScanGroup` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `comment` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scan_group_link`
--

CREATE TABLE `scan_group_link` (
  `idScanGroup` varchar(256) NOT NULL,
  `website` varchar(256) NOT NULL,
  `discord` varchar(256) NOT NULL,
  `irc` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `idSetting` varchar(256) NOT NULL,
  `ui_langguage` varchar(64) NOT NULL DEFAULT 'English',
  `site_theme` varchar(64) NOT NULL DEFAULT 'Light'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`idSetting`, `ui_langguage`, `site_theme`) VALUES
('000', 'English', 'Light');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(256) NOT NULL,
  `user_level` int(1) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `avatar` varchar(256) NOT NULL DEFAULT 'default_avatar.png',
  `idSetting` varchar(256) NOT NULL DEFAULT '000',
  `scan_group_name` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`idChapter`);

--
-- Indexes for table `chapter_comment`
--
ALTER TABLE `chapter_comment`
  ADD PRIMARY KEY (`idChapter`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `chapter_stat`
--
ALTER TABLE `chapter_stat`
  ADD PRIMARY KEY (`idChapter`);

--
-- Indexes for table `filter_langguage`
--
ALTER TABLE `filter_langguage`
  ADD PRIMARY KEY (`idSetting`);

--
-- Indexes for table `group_stat`
--
ALTER TABLE `group_stat`
  ADD PRIMARY KEY (`idGroupStat`);

--
-- Indexes for table `manga`
--
ALTER TABLE `manga`
  ADD PRIMARY KEY (`idManga`);

--
-- Indexes for table `manga_alt_title`
--
ALTER TABLE `manga_alt_title`
  ADD PRIMARY KEY (`idManga`);

--
-- Indexes for table `manga_comment`
--
ALTER TABLE `manga_comment`
  ADD PRIMARY KEY (`idManga`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `manga_demographic`
--
ALTER TABLE `manga_demographic`
  ADD PRIMARY KEY (`idManga`);

--
-- Indexes for table `manga_genre`
--
ALTER TABLE `manga_genre`
  ADD PRIMARY KEY (`idManga`);

--
-- Indexes for table `manga_link`
--
ALTER TABLE `manga_link`
  ADD PRIMARY KEY (`idManga`);

--
-- Indexes for table `manga_stat`
--
ALTER TABLE `manga_stat`
  ADD PRIMARY KEY (`idManga`);

--
-- Indexes for table `manga_theme`
--
ALTER TABLE `manga_theme`
  ADD PRIMARY KEY (`idManga`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`idPicture`),
  ADD KEY `idChapter` (`idChapter`);

--
-- Indexes for table `scan_group`
--
ALTER TABLE `scan_group`
  ADD PRIMARY KEY (`idScanGroup`),
  ADD UNIQUE KEY `scan_name` (`name`),
  ADD UNIQUE KEY `idGroupStat` (`idGroupStat`);

--
-- Indexes for table `scan_group_comment`
--
ALTER TABLE `scan_group_comment`
  ADD PRIMARY KEY (`idScanGroup`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `scan_group_link`
--
ALTER TABLE `scan_group_link`
  ADD PRIMARY KEY (`idScanGroup`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`idSetting`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD KEY `idSetting` (`idSetting`),
  ADD KEY `scan_group_name` (`scan_group_name`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chapter_comment`
--
ALTER TABLE `chapter_comment`
  ADD CONSTRAINT `chapter_comment_ibfk_1` FOREIGN KEY (`idChapter`) REFERENCES `chapter` (`idChapter`) ON DELETE CASCADE,
  ADD CONSTRAINT `chapter_comment_ibfk_2` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `chapter_stat`
--
ALTER TABLE `chapter_stat`
  ADD CONSTRAINT `chapter_stat_ibfk_1` FOREIGN KEY (`idChapter`) REFERENCES `chapter` (`idChapter`);

--
-- Constraints for table `filter_langguage`
--
ALTER TABLE `filter_langguage`
  ADD CONSTRAINT `filter_langguage_ibfk_1` FOREIGN KEY (`idSetting`) REFERENCES `setting` (`idSetting`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manga_alt_title`
--
ALTER TABLE `manga_alt_title`
  ADD CONSTRAINT `manga_alt_title_ibfk_1` FOREIGN KEY (`idManga`) REFERENCES `manga` (`idManga`) ON DELETE CASCADE;

--
-- Constraints for table `manga_comment`
--
ALTER TABLE `manga_comment`
  ADD CONSTRAINT `manga_comment_ibfk_1` FOREIGN KEY (`idManga`) REFERENCES `manga` (`idManga`) ON DELETE CASCADE,
  ADD CONSTRAINT `manga_comment_ibfk_2` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `manga_demographic`
--
ALTER TABLE `manga_demographic`
  ADD CONSTRAINT `manga_demographic_ibfk_1` FOREIGN KEY (`idManga`) REFERENCES `manga` (`idManga`);

--
-- Constraints for table `manga_genre`
--
ALTER TABLE `manga_genre`
  ADD CONSTRAINT `manga_genre_ibfk_1` FOREIGN KEY (`idManga`) REFERENCES `manga` (`idManga`);

--
-- Constraints for table `manga_link`
--
ALTER TABLE `manga_link`
  ADD CONSTRAINT `manga_link_ibfk_1` FOREIGN KEY (`idManga`) REFERENCES `manga` (`idManga`);

--
-- Constraints for table `manga_stat`
--
ALTER TABLE `manga_stat`
  ADD CONSTRAINT `manga_stat_ibfk_1` FOREIGN KEY (`idManga`) REFERENCES `manga` (`idManga`);

--
-- Constraints for table `manga_theme`
--
ALTER TABLE `manga_theme`
  ADD CONSTRAINT `manga_theme_ibfk_1` FOREIGN KEY (`idManga`) REFERENCES `manga` (`idManga`);

--
-- Constraints for table `picture`
--
ALTER TABLE `picture`
  ADD CONSTRAINT `picture_ibfk_1` FOREIGN KEY (`idChapter`) REFERENCES `chapter` (`idChapter`) ON DELETE CASCADE;

--
-- Constraints for table `scan_group`
--
ALTER TABLE `scan_group`
  ADD CONSTRAINT `scan_group_ibfk_1` FOREIGN KEY (`idGroupStat`) REFERENCES `group_stat` (`idGroupStat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `scan_group_comment`
--
ALTER TABLE `scan_group_comment`
  ADD CONSTRAINT `scan_group_comment_ibfk_1` FOREIGN KEY (`idScanGroup`) REFERENCES `scan_group` (`idScanGroup`) ON DELETE CASCADE,
  ADD CONSTRAINT `scan_group_comment_ibfk_2` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `scan_group_link`
--
ALTER TABLE `scan_group_link`
  ADD CONSTRAINT `scan_group_link_ibfk_1` FOREIGN KEY (`idScanGroup`) REFERENCES `scan_group` (`idScanGroup`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idSetting`) REFERENCES `setting` (`idSetting`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`scan_group_name`) REFERENCES `scan_group` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
