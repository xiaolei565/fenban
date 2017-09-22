

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


--

-- --------------------------------------------------------

--
-- 表的结构 `test`
--

CREATE TABLE `test` (
  `id` int(10) DEFAULT NULL COMMENT '排序',
  `stunum` int(10) DEFAULT NULL COMMENT '学号',
  `name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '姓名',
  `sex` text COLLATE utf8_unicode_ci COMMENT '性别',
  `idnum` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '身份证号',
  `majorin` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '专业',
  `class` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '班级',
  `col` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '学院'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `test`
--

INSERT INTO `test` (`id`, `stunum`, `name`, `sex`, `idnum`, `majorin`, `class`, `col`) VALUES

(NULL, 2017300001, '倪星月', '女', '340102199807082025', '地质工程', '地质17-1', '地球与环境学院'),
(NULL, 2017300002, '梁萌萌', '女', '34031120000109162X', '地质工程', '地质17-1', '地球与环境学院'),


COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
