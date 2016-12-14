-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2016 at 01:47 PM
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `apt_type` varchar(40) NOT NULL,
  `apt_title` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `monthly_rent` varchar(40) NOT NULL,
  `lease_availability` varchar(5) NOT NULL,
  `forsale` varchar(3) NOT NULL,
  `plot_type` varchar(50) NOT NULL,
  `plot_no` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `apt_no` int(11) NOT NULL,
  `apt_img` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

 

--
-- Table structure for table `appointments`
--

CREATE TABLE IF NOT EXISTS `appointments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(15) NOT NULL,
  `time` varchar(40) NOT NULL,
  `withwhom` varchar(30) NOT NULL,
  `place` varchar(30) NOT NULL,
  `contactinfo` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

 
-- Table structure for table `complaints`
--

CREATE TABLE IF NOT EXISTS `complaints` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `date_of_submited` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

 

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

 

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `purchase_order` varchar(15) NOT NULL,
  `solditem_type` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `sold_to` varchar(50) NOT NULL,
  `sold_date` varchar(15) NOT NULL,
  `sold_amount` double NOT NULL,
  `advance_amt` double NOT NULL,
  `payment_remaining` double NOT NULL,
  `payment_done` varchar(50) NOT NULL,
  `session` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

 
-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_type` varchar(30) NOT NULL,
  `property_no` int(11) NOT NULL,
  `sale_value` double NOT NULL,
  `date_of_sale` varchar(50) NOT NULL,
  `sold` varchar(5) NOT NULL,
  `advance` double NOT NULL,
  `balanceamout` double NOT NULL,
  `installment` varchar(5) NOT NULL,
  `contactinfo` varchar(50) NOT NULL,
  `sale_order` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

 

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

 