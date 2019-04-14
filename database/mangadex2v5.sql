-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 14, 2019 at 11:00 AM
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
-- Table structure for table `baca`
--

CREATE TABLE `baca` (
  `idBaca` int(11) NOT NULL,
  `idChapter` int(11) NOT NULL,
  `username` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE `chapter` (
  `idChapter` int(11) NOT NULL,
  `idManga` int(11) NOT NULL,
  `chapter_number` int(11) NOT NULL,
  `chapter_title` varchar(256) NOT NULL,
  `idScanGroup` int(11) NOT NULL,
  `uploader` varchar(256) NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  `upload_time` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chapter`
--

INSERT INTO `chapter` (`idChapter`, `idManga`, `chapter_number`, `chapter_title`, `idScanGroup`, `uploader`, `view`, `upload_time`) VALUES
(1, 1, 0, 'Prologue', 2, 'admin', 0, '2019-04-14, 00:00:00'),
(2, 1, 1, 'Aldrin strike again', 2, 'admin', 0, '69-69-2069, 69:69:69');

-- --------------------------------------------------------

--
-- Table structure for table `chapter_comment`
--

CREATE TABLE `chapter_comment` (
  `idChapter` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `comment` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chapter_stat`
--

CREATE TABLE `chapter_stat` (
  `idChapter` int(11) NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `filter_langguage`
--

CREATE TABLE `filter_langguage` (
  `idSetting` int(11) NOT NULL,
  `language` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filter_langguage`
--

INSERT INTO `filter_langguage` (`idSetting`, `language`) VALUES
(1, 'English');

-- --------------------------------------------------------

--
-- Table structure for table `group_stat`
--

CREATE TABLE `group_stat` (
  `idGroupStat` int(11) NOT NULL,
  `idScanGroup` int(11) NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  `follow` int(11) NOT NULL DEFAULT '0',
  `total_chapter` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_stat`
--

INSERT INTO `group_stat` (`idGroupStat`, `idScanGroup`, `view`, `follow`, `total_chapter`) VALUES
(2, 2, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `manga`
--

CREATE TABLE `manga` (
  `idManga` int(11) NOT NULL,
  `Title` varchar(256) NOT NULL,
  `Author` varchar(256) NOT NULL,
  `Artist` varchar(256) NOT NULL,
  `description` varchar(2048) NOT NULL,
  `cover` varchar(256) NOT NULL DEFAULT 'default_manga_cover.png',
  `pub_status` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manga`
--

INSERT INTO `manga` (`idManga`, `Title`, `Author`, `Artist`, `description`, `cover`, `pub_status`) VALUES
(1, 'Monster Musume', 'Aldrin', 'Tgn kiri aldrin', 'Coli 3 kasli sehari sehat', 'default_manga_cover.png', 'Langsung complete');

-- --------------------------------------------------------

--
-- Table structure for table `manga_alt_title`
--

CREATE TABLE `manga_alt_title` (
  `idManga` int(11) NOT NULL,
  `alt_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manga_comment`
--

CREATE TABLE `manga_comment` (
  `idManga` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `comment` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manga_demographic`
--

CREATE TABLE `manga_demographic` (
  `idManga` int(11) NOT NULL,
  `demographic` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manga_genre`
--

CREATE TABLE `manga_genre` (
  `idManga` int(11) NOT NULL,
  `genre` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manga_link`
--

CREATE TABLE `manga_link` (
  `idManga` int(11) NOT NULL,
  `manga_update` varchar(512) DEFAULT NULL,
  `raw` varchar(512) DEFAULT NULL,
  `official` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manga_stat`
--

CREATE TABLE `manga_stat` (
  `idManga` int(11) NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  `follow` int(11) NOT NULL DEFAULT '0',
  `total` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manga_stat`
--

INSERT INTO `manga_stat` (`idManga`, `view`, `follow`, `total`) VALUES
(1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `manga_theme`
--

CREATE TABLE `manga_theme` (
  `idManga` int(11) NOT NULL,
  `theme` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `idPicture` int(11) NOT NULL,
  `idChapter` int(11) NOT NULL,
  `file_name` varchar(1024) NOT NULL,
  `picture_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`idPicture`, `idChapter`, `file_name`, `picture_number`) VALUES
(1, 1, '1asdasjg.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `regis`
--

CREATE TABLE `regis` (
  `username` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `regis_time` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scan_group`
--

CREATE TABLE `scan_group` (
  `idScanGroup` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `alt_name` varchar(256) NOT NULL,
  `leader` varchar(256) NOT NULL,
  `banner` varchar(256) NOT NULL DEFAULT 'default_group_banner.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scan_group`
--

INSERT INTO `scan_group` (`idScanGroup`, `name`, `alt_name`, `leader`, `banner`) VALUES
(2, 'onanimous', 'anonimus', 'admin', 'default_group_banner.png');

-- --------------------------------------------------------

--
-- Table structure for table `scan_group_comment`
--

CREATE TABLE `scan_group_comment` (
  `idScanGroup` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `comment` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scan_group_link`
--

CREATE TABLE `scan_group_link` (
  `idScanGroup` int(11) NOT NULL,
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
  `idSetting` int(11) NOT NULL,
  `ui_langguage` varchar(64) NOT NULL DEFAULT 'English',
  `site_theme` varchar(64) NOT NULL DEFAULT 'Light'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`idSetting`, `ui_langguage`, `site_theme`) VALUES
(1, 'English', 'Light');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(256) NOT NULL,
  `user_level` int(1) NOT NULL DEFAULT '1',
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `avatar` varchar(256) NOT NULL DEFAULT 'default_avatar.png',
  `idSetting` int(11) NOT NULL DEFAULT '1',
  `idScanGroup` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `user_level`, `email`, `password`, `avatar`, `idSetting`, `idScanGroup`) VALUES
('admin', 5, 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3\r\n ', 'default_avatar.png', 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baca`
--
ALTER TABLE `baca`
  ADD PRIMARY KEY (`idBaca`),
  ADD KEY `idChapter` (`idChapter`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`idChapter`),
  ADD KEY `idManga` (`idManga`),
  ADD KEY `uploader` (`uploader`),
  ADD KEY `chapter_ibfk_3` (`idScanGroup`);

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
  ADD PRIMARY KEY (`idGroupStat`),
  ADD KEY `idScanGroup` (`idScanGroup`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

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
-- Indexes for table `regis`
--
ALTER TABLE `regis`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `scan_group`
--
ALTER TABLE `scan_group`
  ADD PRIMARY KEY (`idScanGroup`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `leader` (`leader`);

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
  ADD KEY `idScanGroup` (`idScanGroup`),
  ADD KEY `idSetting` (`idSetting`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baca`
--
ALTER TABLE `baca`
  MODIFY `idBaca` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chapter`
--
ALTER TABLE `chapter`
  MODIFY `idChapter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `group_stat`
--
ALTER TABLE `group_stat`
  MODIFY `idGroupStat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `manga`
--
ALTER TABLE `manga`
  MODIFY `idManga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `idPicture` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `scan_group`
--
ALTER TABLE `scan_group`
  MODIFY `idScanGroup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `idSetting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baca`
--
ALTER TABLE `baca`
  ADD CONSTRAINT `baca_ibfk_1` FOREIGN KEY (`idChapter`) REFERENCES `chapter` (`idChapter`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `baca_ibfk_2` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `chapter`
--
ALTER TABLE `chapter`
  ADD CONSTRAINT `chapter_ibfk_1` FOREIGN KEY (`idManga`) REFERENCES `manga` (`idManga`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chapter_ibfk_2` FOREIGN KEY (`uploader`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chapter_ibfk_3` FOREIGN KEY (`idScanGroup`) REFERENCES `scan_group` (`idScanGroup`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chapter_comment`
--
ALTER TABLE `chapter_comment`
  ADD CONSTRAINT `chapter_comment_ibfk_1` FOREIGN KEY (`idChapter`) REFERENCES `chapter` (`idChapter`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chapter_comment_ibfk_2` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chapter_stat`
--
ALTER TABLE `chapter_stat`
  ADD CONSTRAINT `chapter_stat_ibfk_1` FOREIGN KEY (`idChapter`) REFERENCES `chapter` (`idChapter`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `filter_langguage`
--
ALTER TABLE `filter_langguage`
  ADD CONSTRAINT `filter_langguage_ibfk_1` FOREIGN KEY (`idSetting`) REFERENCES `setting` (`idSetting`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `group_stat`
--
ALTER TABLE `group_stat`
  ADD CONSTRAINT `group_stat_ibfk_1` FOREIGN KEY (`idScanGroup`) REFERENCES `scan_group` (`idScanGroup`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manga_alt_title`
--
ALTER TABLE `manga_alt_title`
  ADD CONSTRAINT `manga_alt_title_ibfk_1` FOREIGN KEY (`idManga`) REFERENCES `manga` (`idManga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manga_comment`
--
ALTER TABLE `manga_comment`
  ADD CONSTRAINT `manga_comment_ibfk_1` FOREIGN KEY (`idManga`) REFERENCES `manga` (`idManga`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `manga_comment_ibfk_2` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manga_demographic`
--
ALTER TABLE `manga_demographic`
  ADD CONSTRAINT `manga_demographic_ibfk_1` FOREIGN KEY (`idManga`) REFERENCES `manga` (`idManga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manga_genre`
--
ALTER TABLE `manga_genre`
  ADD CONSTRAINT `manga_genre_ibfk_1` FOREIGN KEY (`idManga`) REFERENCES `manga` (`idManga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manga_link`
--
ALTER TABLE `manga_link`
  ADD CONSTRAINT `manga_link_ibfk_1` FOREIGN KEY (`idManga`) REFERENCES `manga` (`idManga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manga_stat`
--
ALTER TABLE `manga_stat`
  ADD CONSTRAINT `manga_stat_ibfk_1` FOREIGN KEY (`idManga`) REFERENCES `manga` (`idManga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manga_theme`
--
ALTER TABLE `manga_theme`
  ADD CONSTRAINT `manga_theme_ibfk_1` FOREIGN KEY (`idManga`) REFERENCES `manga` (`idManga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `picture`
--
ALTER TABLE `picture`
  ADD CONSTRAINT `picture_ibfk_1` FOREIGN KEY (`idChapter`) REFERENCES `chapter` (`idChapter`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `regis`
--
ALTER TABLE `regis`
  ADD CONSTRAINT `regis_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `scan_group`
--
ALTER TABLE `scan_group`
  ADD CONSTRAINT `scan_group_ibfk_1` FOREIGN KEY (`leader`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `scan_group_comment`
--
ALTER TABLE `scan_group_comment`
  ADD CONSTRAINT `scan_group_comment_ibfk_1` FOREIGN KEY (`idScanGroup`) REFERENCES `scan_group` (`idScanGroup`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `scan_group_comment_ibfk_2` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `scan_group_link`
--
ALTER TABLE `scan_group_link`
  ADD CONSTRAINT `scan_group_link_ibfk_1` FOREIGN KEY (`idScanGroup`) REFERENCES `scan_group` (`idScanGroup`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idScanGroup`) REFERENCES `scan_group` (`idScanGroup`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`idSetting`) REFERENCES `setting` (`idSetting`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
