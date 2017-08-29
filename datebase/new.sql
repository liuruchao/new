-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 08 月 29 日 07:45
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
-- 表的结构 `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(255) NOT NULL AUTO_INCREMENT COMMENT '序号',
  `title` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '标题',
  `description` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '描述',
  `picturn` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '插图',
  `content` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='简讯' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`id`, `title`, `description`, `picturn`, `content`) VALUES
(1, '第一个', '我的第一个标题发货的卡萨jfk电话发卡号发的话费卡还记得发回复的咯额回复回复可见啊发', 'http://att.bbs.duowan.com/forum/201503/13/1017095yhmpmpmhm2dj72t.jpg', '内容是我也不知道'),
(2, '有一个', '打发打发非得喝酒咯额很疯狂的话腐恶符合卡的划分开额开发防护看我发哈分喝咖啡', 'http://img1.imgtn.bdimg.com/it/u=4226583571,1837239880&fm=26&gp=0.jpg', '发的法发'),
(3, '的复合卡积分和', 'd''fa''e''fa''d', 'http://pic41.nipic.com/20140518/18472880_102522365000_2.jpg', '发额发的法饿饭f''sa''f');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='发布内容' AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `content`
--

INSERT INTO `content` (`id`, `number`, `biaoqian`, `content`, `dateline`) VALUES
(7, 15407315, '失物招领', '本人于今天丢失了一条金毛，非常着急，希望好心人看到能告诉我，必有重谢，联系电话123466789', '2017-08-23-13-48-05'),
(8, 15407316, '二手出售', '本人有一个电脑出售，八成新，有意者联系我，15469856', '2017-08-23-14-42-00'),
(9, 15407317, '广告发布', '周末有一个传单兼职，有亿元的同学可以来试试，没小时十快，电话123456789', '2017-08-23-14-48-44'),
(10, 15407315, '二手出售', '二手电脑出售，欢迎资讯', '2017-08-24-03-26-34'),
(11, 15407215, '失物招领', '本人又丢失东西了，哈哈哈 啊啊 发电方式电话反馈是否会饭卡货到付款', '2017-08-24-03-43-43'),
(12, 15407315, '失物招领', '好像没啥董西要丢的了，哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈', '2017-08-24-07-30-32'),
(14, 15407315, '失物招领', '15642gjghfgfhg', '08-27-Sun-02-55'),
(15, 98765432, '失物招领', 'hjkhjghjghjghjg', '08-27-Sun-02-59'),
(16, 15407319, '失物招领', 'fdsafadfdfaefadfdsafd', '08-29-Tue-06-24'),
(17, 15407315, '失物招领', 'hfdkajfbkasdjfhka', '2017-08-29-06-40-32'),
(18, 123, '失物招领', 'fdsafdf', '2017-08-29-06-41-34'),
(19, 15407315, '失物招领', 'hjkhugkhjkhkh', '08-29-Tue-06-44');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=37 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `name`, `number`, `passworld`) VALUES
(20, '刘如超', 15407315, '123456'),
(21, '刘三', 15407316, '654321'),
(22, '张五', 15407317, '123456'),
(23, '二超', 15407317, '123456'),
(24, 'fjeiaf', 15407318, '123456zxc'),
(25, '丽丽', 15407215, '123456zxc'),
(26, '', 0, ''),
(27, 'fds', 98765432, '98765432'),
(28, '', 0, ''),
(29, '', 0, ''),
(30, '', 0, ''),
(31, '', 0, ''),
(32, '', 0, ''),
(33, '', 0, ''),
(34, '', 0, ''),
(35, '流ui', 15407319, '123456'),
(36, '尼玛必', 123, '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
