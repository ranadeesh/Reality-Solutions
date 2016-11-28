-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2016 at 06:57 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `realdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `apartments`
--

CREATE TABLE IF NOT EXISTS `apartments` (
  `apartments_type` varchar(40) NOT NULL,
  `address` varchar(100) NOT NULL,
  `monthly_rent` varchar(40) NOT NULL,
  `lease_availability` varchar(5) NOT NULL,
  `forsale` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apartments`
--

INSERT INTO `apartments` (`apartments_type`, `address`, `monthly_rent`, `lease_availability`, `forsale`) VALUES
('single bedroom flat', '44 eleborn place western ave Albany. NY-', 'n', 'y', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE IF NOT EXISTS `appointments` (
  `Date` varchar(12) NOT NULL,
  `with` varchar(30) NOT NULL,
  `time` varchar(40) NOT NULL,
  `place` varchar(30) NOT NULL,
  `contactinfo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `purchase_order` varchar(11) NOT NULL,
  `order_name` varchar(50) NOT NULL,
  `order_address` varchar(50) NOT NULL,
  `order_total` varchar(50) NOT NULL,
  `order_date` varchar(50) NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `session` varchar(50) NOT NULL,
  `shipping_cost` decimal(7,0) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `plots`
--

CREATE TABLE IF NOT EXISTS `plots` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plot_no` varchar(10) NOT NULL,
  `plot_type` varchar(40) NOT NULL,
  `plot_title` varchar(100) NOT NULL,
  `description` varchar(150) NOT NULL,
  `address` varchar(40) NOT NULL,
  `monthly_rent` varchar(40) NOT NULL,
  `lease_availability` varchar(5) NOT NULL,
  `forsale` varchar(3) NOT NULL,
  `plot_img` varchar(150) NOT NULL,
  `contact` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `plots`
--

INSERT INTO `plots` (`id`, `plot_no`, `plot_type`, `plot_title`, `description`, `address`, `monthly_rent`, `lease_availability`, `forsale`, `plot_img`, `contact`) VALUES
(3, '43', 'commercial', 'Capitol Hill Restoration Society', 'Neighboring the United States Congress and the Supreme Court, the historic district is where monumental, white-stone Washington intersects with a quir', 'CA', '1000', 'no', 'no', 'plot2.jpg', '564565456'),
(6, '43', 'residential', 'SunSentinel', 'While the ever-growing boundaries of Capitol Hill are disputed, the historic district is clearly defined. As designated by the District of Columbia’s ', 'LA', '1300', 'no', 'no', 'plot3.jpg', '456534554'),
(7, '444', 'Residencial', 'Capitol Hill-3', '', 'Alabama', '456', 'Yes', 'kjh', '44433plot1.jpg', '4567788543'),
(10, '33', 'Commercial', 'Capitol Hill-2', '', 'Alabama', '475', 'Yes', 'nnn', '3376plot3.jpg', '4567788543'),
(11, '76', 'Commercial', 'Capitol Hill-1', 'gggggggggg', 'Alabama', '421', 'Yes', 'Yes', '7676plot3.jpg', '4567788543');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `solditem_type` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `sold_to` varchar(50) NOT NULL,
  `sold_amount` varchar(50) NOT NULL,
  `balance` varchar(50) NOT NULL,
  `payment_done` varchar(50) NOT NULL,
  `payment_remaining` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `plot_id` int(11) NOT NULL,
  `plot_no` int(11) NOT NULL,
  `sale_value` int(11) NOT NULL,
  `date_of_sale` varchar(15) NOT NULL,
  `sold` varchar(5) NOT NULL,
  `advance` double NOT NULL,
  `balanceamout` double NOT NULL,
  `installment` varchar(5) NOT NULL,
  `contactinfo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `usertype` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `maritalstatus` varchar(10) NOT NULL,
  `DOB` varchar(12) NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `emp_id`, `lastname`, `firstname`, `username`, `password`, `usertype`, `email`, `gender`, `maritalstatus`, `DOB`, `address`) VALUES
(1, 11, 'bb', 'aa', 'admin', '12', 'admin', 'test3@gmail.com', 'male', 'single', '12/12/2001', 'kkkk'),
(2, 22, 'bb', 'aaa', 'admin', '12', 'employee', 'test3@gmail.com', 'male', 'single', '12/12/2001', 'gggghhh'),
(3, 33, 'bb', 'aa', 'test', '12', 'employee', 'anitasoma@gmail.com', 'male', 'single', '21-12-21', 'pppp'),
(4, 44, 'bb', 'aa', 'test', '12', 'employee', 'anitasoma@gmail.com', 'male', 'single', '21-12-21', 'pppp'),
(5, 55, 'bb', 'anita', 'admin', '12', 'employee', 'test3@gmail.com', 'female', 'single', '21-12-21', 'kk'),
(6, 33, 'bb', 'aa', 'admin', '12', 'employee', 'asoma05@gmail.com', 'male', 'married', 'aa', 'aaa'),
(7, 77, 'bb', 'aa', 'admin', '12', 'employee', 'anitasoma@gmail.com', 'female', 'single', '12/12/2001', 'jjj');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
