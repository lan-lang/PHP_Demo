-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2019 �?11 �?23 �?06:24
-- 服务器版本: 5.5.53
-- PHP 版本: 5.6.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `zsh`
--

-- --------------------------------------------------------

--
-- 表的结构 `liuyanbiao`
--

CREATE TABLE IF NOT EXISTS `liuyanbiao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `liuyan` varchar(100) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=107 ;

--
-- 转存表中的数据 `liuyanbiao`
--

INSERT INTO `liuyanbiao` (`id`, `username`, `liuyan`, `time`) VALUES
(105, '123', '123', '1574485800'),
(104, '123', '123', '1574485581'),
(102, '123', '213', '1574484170'),
(103, '123', '123', '1574485387'),
(101, '123', '', '1574440091'),
(100, '123', '123', '1574439977'),
(97, '123', '的哦哦哦&amp;nbsp;', '1574333980'),
(98, '123', '123', '1574439879'),
(99, '123', '123', '1574439943'),
(106, '123', '12321', '1574486133');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
