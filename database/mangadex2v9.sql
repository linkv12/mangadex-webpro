-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 23, 2019 at 03:07 PM
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
  `langguage` varchar(64) NOT NULL,
  `idScanGroup` int(11) NOT NULL,
  `uploader` varchar(256) NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  `upload_time` varchar(64) NOT NULL,
  `idThread` int(11) DEFAULT NULL
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
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `idComment` int(11) NOT NULL,
  `idThread` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `comment` varchar(1024) NOT NULL
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
-- Table structure for table `langguage`
--

CREATE TABLE `langguage` (
  `langguage` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `langguage`
--

INSERT INTO `langguage` (`langguage`) VALUES
('English'),
('Indonesia');

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
  `og_langguage` varchar(64) NOT NULL,
  `cover` varchar(256) NOT NULL DEFAULT 'default_manga_cover.png',
  `pub_status` varchar(64) NOT NULL,
  `updated_on` varchar(64) NOT NULL,
  `idThread` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manga`
--

INSERT INTO `manga` (`idManga`, `Title`, `Author`, `Artist`, `description`, `og_langguage`, `cover`, `pub_status`, `updated_on`, `idThread`) VALUES
(1, 'Monster Musume', 'Aldrin', 'Tgn kiri aldrin', 'sehat', 'English', 'default_manga_cover.png', 'Langsung complete', '03-04-2019, 22:50:23', NULL),
(2, 'Mangaka is dead', 'kuku', 'klan', 'hiiiiiiiiiiiiiiiiii', 'English', 'default_manga_cover.png', 'Complete', '03-04-2019, 22:50:24', NULL),
(3, 'aaaaaaa', 'aaaaaaaaaaaaa', 'aaaaaaaaaaaa', 'bbbbbbbbbb', 'English', 'default_manga_cover.png', 'On Going', '03-04-2019, 22:50:25', NULL),
(4, 'akankah skip', 'oo', 'p', 'q', 'English', 'default_manga_cover.png', 'On Going', '15-04-2019, 04:23:08', NULL),
(5, 'abc', 'asd', 'qwe', 'qweasdzxc', 'English', 'default_manga_cover.png', 'ongoing', '15-04-2019, 12:14:16', NULL),
(6, 'fff', 'sdasd', 'dsad', 'q', 'English', 'default_manga_cover.png', 'Complete', '23-04-2019, 14:56:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manga_alt_title`
--

CREATE TABLE `manga_alt_title` (
  `idManga` int(11) NOT NULL,
  `alt_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manga_alt_title`
--

INSERT INTO `manga_alt_title` (`idManga`, `alt_name`) VALUES
(2, 'ALdrin strike again');

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

--
-- Dumping data for table `manga_genre`
--

INSERT INTO `manga_genre` (`idManga`, `genre`) VALUES
(3, 'Comedy');

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
(1, 0, 0, 0),
(2, 0, 0, 0),
(3, 0, 0, 0),
(4, 0, 0, 0),
(5, 0, 0, 0),
(6, 0, 0, 0);

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
  `relative_path` varchar(256) NOT NULL,
  `file_name` varchar(1024) NOT NULL,
  `picture_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `regis`
--

CREATE TABLE `regis` (
  `username` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `regis_time` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regis`
--

INSERT INTO `regis` (`username`, `email`, `regis_time`) VALUES
('admin', 'admin@admin.com', '03-04-2019, 22:50:23');

-- --------------------------------------------------------

--
-- Table structure for table `scan_group`
--

CREATE TABLE `scan_group` (
  `idScanGroup` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `alt_name` varchar(256) NOT NULL,
  `leader` varchar(256) NOT NULL,
  `banner` varchar(256) NOT NULL DEFAULT 'default_group_banner.png',
  `idThread` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scan_group`
--

INSERT INTO `scan_group` (`idScanGroup`, `name`, `alt_name`, `leader`, `banner`, `idThread`) VALUES
(2, 'no_group', 'no_groupe', 'admin', 'default_group_banner.png', NULL);

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
-- Table structure for table `thread`
--

CREATE TABLE `thread` (
  `idThread` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `created` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thread`
--

INSERT INTO `thread` (`idThread`, `username`, `created`) VALUES
(3, 'admin', '01-01-1970, 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(256) NOT NULL,
  `user_level` int(1) NOT NULL DEFAULT '1',
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `website` varchar(256) DEFAULT NULL,
  `avatar` varchar(256) NOT NULL DEFAULT 'default_avatar.jpg',
  `biography` varchar(1024) DEFAULT NULL,
  `joined_date` varchar(64) NOT NULL,
  `idSetting` int(11) NOT NULL DEFAULT '1',
  `idScanGroup` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `user_level`, `email`, `password`, `website`, `avatar`, `biography`, `joined_date`, `idSetting`, `idScanGroup`) VALUES
('admin', 5, 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', NULL, 'default_avatar.jpg', NULL, '03-04-2019, 22:50:23', 1, 2),
('pandemonium', 1, 'pandemonium@nitrous.com', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, 'default_avatar.jpg', NULL, '23-04-2019, 13:43:01', 1, NULL);

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
  ADD KEY `chapter_ibfk_3` (`idScanGroup`),
  ADD KEY `langguage` (`langguage`),
  ADD KEY `idThread` (`idThread`);

--
-- Indexes for table `chapter_stat`
--
ALTER TABLE `chapter_stat`
  ADD PRIMARY KEY (`idChapter`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idComment`),
  ADD KEY `idThread` (`idThread`);

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
-- Indexes for table `langguage`
--
ALTER TABLE `langguage`
  ADD PRIMARY KEY (`langguage`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `manga`
--
ALTER TABLE `manga`
  ADD PRIMARY KEY (`idManga`),
  ADD KEY `og_langguage` (`og_langguage`),
  ADD KEY `idThread` (`idThread`);

--
-- Indexes for table `manga_alt_title`
--
ALTER TABLE `manga_alt_title`
  ADD PRIMARY KEY (`idManga`);

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
  ADD KEY `leader` (`leader`),
  ADD KEY `scan_group_ibfk_2` (`idThread`);

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
-- Indexes for table `thread`
--
ALTER TABLE `thread`
  ADD PRIMARY KEY (`idThread`),
  ADD KEY `username` (`username`);

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
  MODIFY `idChapter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `idComment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `group_stat`
--
ALTER TABLE `group_stat`
  MODIFY `idGroupStat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `manga`
--
ALTER TABLE `manga`
  MODIFY `idManga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `idPicture` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=309;

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
-- AUTO_INCREMENT for table `thread`
--
ALTER TABLE `thread`
  MODIFY `idThread` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  ADD CONSTRAINT `chapter_ibfk_3` FOREIGN KEY (`idScanGroup`) REFERENCES `scan_group` (`idScanGroup`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chapter_ibfk_4` FOREIGN KEY (`langguage`) REFERENCES `langguage` (`langguage`),
  ADD CONSTRAINT `chapter_ibfk_5` FOREIGN KEY (`idThread`) REFERENCES `thread` (`idThread`);

--
-- Constraints for table `chapter_stat`
--
ALTER TABLE `chapter_stat`
  ADD CONSTRAINT `chapter_stat_ibfk_1` FOREIGN KEY (`idChapter`) REFERENCES `chapter` (`idChapter`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`idThread`) REFERENCES `thread` (`idThread`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `manga`
--
ALTER TABLE `manga`
  ADD CONSTRAINT `manga_ibfk_1` FOREIGN KEY (`og_langguage`) REFERENCES `langguage` (`langguage`),
  ADD CONSTRAINT `manga_ibfk_2` FOREIGN KEY (`idThread`) REFERENCES `thread` (`idThread`);

--
-- Constraints for table `manga_alt_title`
--
ALTER TABLE `manga_alt_title`
  ADD CONSTRAINT `manga_alt_title_ibfk_1` FOREIGN KEY (`idManga`) REFERENCES `manga` (`idManga`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `scan_group_ibfk_1` FOREIGN KEY (`leader`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `scan_group_ibfk_2` FOREIGN KEY (`idThread`) REFERENCES `thread` (`idThread`);

--
-- Constraints for table `scan_group_link`
--
ALTER TABLE `scan_group_link`
  ADD CONSTRAINT `scan_group_link_ibfk_1` FOREIGN KEY (`idScanGroup`) REFERENCES `scan_group` (`idScanGroup`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `thread`
--
ALTER TABLE `thread`
  ADD CONSTRAINT `thread_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

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
