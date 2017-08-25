-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 08 月 25 日 11:00
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `new`
--
CREATE DATABASE IF NOT EXISTS `new` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `new`;

-- --------------------------------------------------------

--
-- 表的结构 `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `number` int(8) NOT NULL COMMENT '学号',
  `biaoqian` varchar(4) COLLATE utf8_bin NOT NULL COMMENT '信息标签',
  `content` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '内容',
  `dateline` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='发布内容' AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `content`
--

INSERT INTO `content` (`id`, `number`, `biaoqian`, `content`, `dateline`) VALUES
(7, 15407315, '失物招领', '本人于今天丢失了一条金毛，非常着急，希望好心人看到能告诉我，必有重谢，联系电话123466789', '2017-08-23-13-48-05'),
(8, 15407316, '二手出售', '本人有一个电脑出售，八成新，有意者联系我，15469856', '2017-08-23-14-42-00'),
(9, 15407317, '广告发布', '周末有一个传单兼职，有亿元的同学可以来试试，没小时十快，电话123456789', '2017-08-23-14-48-44'),
(10, 15407315, '二手出售', '二手电脑出售，欢迎资讯', '2017-08-24-03-26-34'),
(11, 15407215, '失物招领', '本人又丢失东西了，哈哈哈 啊啊 发电方式电话反馈是否会饭卡货到付款', '2017-08-24-03-43-43'),
(12, 15407315, '失物招领', '好像没啥董西要丢的了，哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈', '2017-08-24-07-30-32');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` char(20) COLLATE utf8_bin NOT NULL COMMENT '用户名',
  `number` int(8) NOT NULL COMMENT '学号',
  `passworld` varchar(20) COLLATE utf8_bin NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=26 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `name`, `number`, `passworld`) VALUES
(20, '刘如超', 15407315, '123456'),
(21, '刘三', 15407316, '654321'),
(22, '张五', 15407317, '123456'),
(23, '二超', 15407317, '123456'),
(24, 'fjeiaf', 15407318, '123456zxc'),
(25, '丽丽', 15407215, '123456zxc');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
