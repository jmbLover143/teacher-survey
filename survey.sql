-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2020 at 11:28 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'aclc143');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `id` varchar(90) NOT NULL,
  `images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `images`) VALUES
('REIS', 'FB_IMG_1482987128294.jpg'),
('HYEU', 'FB_IMG_1493654828013.jpg'),
('GMAQ', 'FB_IMG_1482134168011.jpg'),
('ZSOJ', 'FB_IMG_1479047196737.jpg'),
('TWNE', 'FB_IMG_1482134168011.jpg'),
('HKON', 'FB_IMG_1493654828013.jpg'),
('CBDS', 'FB_IMG_1493654828013.jpg'),
('ESKZ', 'FB_IMG_1498664528908.jpg'),
('JCYE', 'download (2).jpg'),
('KLYX', 'images (11).jpg'),
('TIHW', 'download (2).jpg'),
('ZBOK', 'images (11).jpg'),
('COXJ', 'Capture6.PNG'),
('UFDH', 'images (13).jpg'),
('XGLT', 'jhon mhar berador '),
('CGSQ', 'j'),
('LVUI', 'jhon mhar berador '),
('BVDC', 'jhon mhar berador '),
('RLTB', 'jhon mhar berador ');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `images` varchar(100) NOT NULL,
  `total` varchar(20) NOT NULL,
  `av` varchar(50) NOT NULL,
  `com` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`id`, `name`, `images`, `total`, `av`, `com`) VALUES
('FVDI', 'hazel san', 'images (9).jpg', '142', '94.666666666667', 'sana all'),
('FVDI', 'hazel san', 'images (9).jpg', '142', '94.666666666667', 'sana all'),
('HUNZ', 'tanga', 'download (2).jpg', '133', '88.666666666667', 'ang bait po niya '),
('ITSF', 'maynard aurelio', 'images (6).jpg', '143', '95.333333333333', 'ang bait po niya samin po'),
('AXFE', 'hillary joy muyalde', 'Capture3.PNG', '147', '98', 'ang ganda po ni maam'),
('ZJLS', 'raplh sajona', 'images (7).jpg', '146', '97.333333333333', 'sasasasas'),
('ZJLS', 'raplh sajona', 'images (7).jpg', '144', '96', 'wqwqwqw'),
('ZJLS', 'raplh sajona', 'images (7).jpg', '74', '49.333333333333', 'rererer'),
('WJZO', 'billy pantua', 'images (18).jpg', '137', '91.333333333333', 'yuyuyuyuyu'),
('ZJLS', 'raplh sajona', 'images (7).jpg', '147', '98', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
('ZJLS', 'raplh sajona', 'images (7).jpg', '148', '98.666666666667', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq'),
('ZJLS', 'raplh sajona', 'images (7).jpg', '149', '99.333333333333', 'dahjdklhajklhjklgljkglkdagjldkgajkdgajkdsgkjagjdkgajkdgjkagdjkgakldgakjdgklagdkjgakjdgakldglakgdkagd'),
('ZJLS', 'raplh sajona', 'images (7).jpg', '120', '80', 'adjadklhaldhjklg glkjgkj gjklg jkg kjg jkgljk gkj gjlg kljg jkg jkg lkjg kljg ljg lkjg kljg jlkg jg '),
('ZJLS', 'raplh sajona', 'images (7).jpg', '139', '92.666666666667', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
('WJZO', 'billy pantua', 'images (18).jpg', '150', '100', 'sasasasasasa'),
('HUNZ', 'tanga', 'download (2).jpg', '147', '98', 'wewewewe'),
('AXON', 'emman ogrimen', 'images (11).jpg', '147', '98', 'sasasa'),
('CGOI', 'hillary joy muyalde', 'images (9).jpg', '145', '96.666666666667', 'sample'),
('AXON', 'emman ogrimen', 'images (6).jpg', '146', '97.333333333333', 'aASASASA'),
('AXON', 'emman ogrimen', 'images (6).jpg', '146', '97.333333333333', 'sasasasasasa'),
('VSEI', 'lucky simbulan', 'images (9).jpg', '145', '96.666666666667', 'sasasa'),
('VSEI', 'lucky simbulan', 'images (9).jpg', '133', '88.666666666667', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
('VSEI', 'lucky simbulan', 'images (9).jpg', '141', '94', 'siya po ay mabait at sobrang galing magturo . he is so good'),
('VSEI', 'lucky simbulan', 'images (9).jpg', '142', '94.666666666667', '[poppopopopopopopop'),
('VSEI', 'lucky simbulan', 'images (9).jpg', '150', '100', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq'),
('VSEI', 'lucky simbulan', 'images (9).jpg', '142', '94.666666666667', 'SAMPLE sample sample sample sample sample sample sample sameple'),
('VSEI', 'lucky simbulan', 'images (9).jpg', '150', '100', 'ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss'),
('VSEI', 'lucky simbulan', 'images (9).jpg', '149', '99.333333333333', 'sasasasasppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppp'),
('VSEI', 'lucky simbulan', 'images (9).jpg', '141', '94', 'sasasasa');

-- --------------------------------------------------------

--
-- Table structure for table `studentaccounts`
--

CREATE TABLE `studentaccounts` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentaccounts`
--

INSERT INTO `studentaccounts` (`username`, `password`) VALUES
('student1', '11111'),
('student2', '22222'),
('student3', '33333'),
('student4', '44444'),
('student5', '55555');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `room` varchar(20) NOT NULL,
  `images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `subject`, `dept`, `date`, `time`, `room`, `images`) VALUES
('XTAO', 'ann', 'mathematics', 'nature', 'march 5 2019', '10am', '201', 'Capture5.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `teacher-info`
--

CREATE TABLE `teacher-info` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `room` varchar(20) NOT NULL,
  `images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacheraccounts`
--

CREATE TABLE `teacheraccounts` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `images` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacheraccounts`
--

INSERT INTO `teacheraccounts` (`username`, `password`, `images`, `name`) VALUES
('QDWF', 'QDWF', NULL, NULL),
('CNPL', 'CNPL', NULL, NULL),
('DTSW', 'DTSW', NULL, NULL),
('UOQP', 'UOQP', NULL, NULL),
('BSDM', 'BSDM', NULL, NULL),
('AZDG', 'AZDG', NULL, NULL),
('XKLE', 'XKLE', NULL, NULL),
('JCSH', 'JCSH', NULL, NULL),
('XOQG', 'XOQG', NULL, NULL),
('VSEI', 'VSEI', 'download (2).jpg', 'lucky simbulan'),
('AXON', 'AXON', 'images (11).jpg', 'emman ogrimen'),
('CGOI', 'CGOI', 'images (16).jpg', 'hillary joy muyalde'),
('XTAO', 'XTAO', 'Capture5.PNG', 'ann');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
