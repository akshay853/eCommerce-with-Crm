-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2019 at 10:59 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(23) NOT NULL,
  `username` varchar(30) NOT NULL,
  `title` varchar(45) NOT NULL,
  `content` varchar(34) NOT NULL,
  `date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `username`, `title`, `content`, `date`) VALUES
(9, 'ak', 'Good website', 'I Really like the experience', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `lead`
--

CREATE TABLE `lead` (
  `lead_id` int(23) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `add_lead` varchar(34) NOT NULL,
  `phonenumber` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lead`
--

INSERT INTO `lead` (`lead_id`, `contact`, `add_lead`, `phonenumber`) VALUES
(5, '34', 'Rajeev', '8138992517'),
(6, '34', 'bibin', '8997838837'),
(7, '35', 'anish', '6757869856'),
(8, '36', 'babu', '6746476478'),
(9, '34', 'Roshin', '9139885625');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(7) NOT NULL,
  `user_name` varchar(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(12) NOT NULL,
  `title` varchar(56) NOT NULL,
  `content` varchar(45) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'YES'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `title`, `content`, `status`) VALUES
(1, ' ff', ' ytyt', 'YES'),
(2, 'tielejk', 'hbshjgsdsgdsg', 'YES'),
(3, 'ddsadsaddasdsadd', 'zxasdsad', 'YES'),
(4, 'uhuj', 'dfdf', 'YES'),
(5, 'test', 'testere', 'YES'),
(6, 'fsdf', 'sdfsdfds', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(20) NOT NULL,
  `customer_id` int(20) NOT NULL,
  `order_items` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `customer_id`, `order_items`, `status`, `date`) VALUES
(1, 34, 'a:1:{s:4:"cart";a:2:{i:30;a:11:{s:10:"product_id";s:2:"30";s:15:"added_seller_id";s:2:"17";s:11:"productname";s:5:"shirt";s:11:"productcost";s:4:"2000";s:15:"productcategory";s:5:"Dress";s:12:"productbrand";s:12:"north public";s:18:"productdescription";s:13:"black checks ";s:8:"discount";s:2:"10";s:12:"productimage";s:8:"1-18.jpg";s:10:"cart_count";i:3;s:9:"sub_total";i:6000;}i:32;a:11:{s:10:"product_id";s:2:"32";s:15:"added_seller_id";s:2:"19";s:11:"productname";s:7:"watches";s:11:"productcost";s:5:"12000";s:15:"productcategory";s:7:"watches";s:12:"productbrand";s:12:"swiss swatch";s:18:"productdescription";s:17:"nice good quality";s:8:"discount";s:2:"12";s:12:"productimage";s:6:"15.jpg";s:10:"cart_count";i:5;s:9:"sub_total";i:60000;}}}', 'completed', '2019-03-24'),
(2, 34, 'a:1:{s:4:"cart";a:2:{i:30;a:11:{s:10:"product_id";s:2:"30";s:15:"added_seller_id";s:2:"17";s:11:"productname";s:5:"shirt";s:11:"productcost";s:4:"2000";s:15:"productcategory";s:5:"Dress";s:12:"productbrand";s:12:"north public";s:18:"productdescription";s:13:"black checks ";s:8:"discount";s:2:"10";s:12:"productimage";s:8:"1-18.jpg";s:10:"cart_count";i:3;s:9:"sub_total";i:6000;}i:32;a:11:{s:10:"product_id";s:2:"32";s:15:"added_seller_id";s:2:"19";s:11:"productname";s:7:"watches";s:11:"productcost";s:5:"12000";s:15:"productcategory";s:7:"watches";s:12:"productbrand";s:12:"swiss swatch";s:18:"productdescription";s:17:"nice good quality";s:8:"discount";s:2:"12";s:12:"productimage";s:6:"15.jpg";s:10:"cart_count";i:5;s:9:"sub_total";i:60000;}}}', 'completed', '2019-03-24');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(23) NOT NULL,
  `added_seller_id` int(20) NOT NULL,
  `productname` varchar(34) NOT NULL,
  `productcost` float NOT NULL,
  `productcategory` varchar(45) NOT NULL,
  `productbrand` varchar(23) NOT NULL,
  `productdescription` varchar(100) NOT NULL,
  `discount` int(3) NOT NULL,
  `productimage` varchar(200) NOT NULL,
  `recommended_status` varchar(3) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `added_seller_id`, `productname`, `productcost`, `productcategory`, `productbrand`, `productdescription`, `discount`, `productimage`, `recommended_status`) VALUES
(30, 17, 'shirt', 2000, 'Dress', 'north public', 'black checks ', 10, '1-18.jpg', 'YES'),
(32, 19, 'watches', 12000, 'watches', 'swiss swatch', 'nice good quality', 12, '15.jpg', 'YES'),
(33, 17, 'pant', 2363, 'jeans', 'alen solly', 'blue', 2, '5-1.jpg', 'NO'),
(34, 17, 'shoes', 3000, 'sneaker', 'nike', 'sneaker,nevy blue', 20, '1-2.jpg', 'NO'),
(35, 17, 'Bag', 1000, 'fashion', 'sky bags', 'grey,one side,bag bags', 10, 'bag.jpg', 'NO'),
(36, 17, 'T-shirt', 990, 'Dress', 'north public', 'blue', 5, '16.jpg', 'NO'),
(37, 17, 'Toy Police Car', 300, 'Toys', 'Raya', 'Wonderfull Toy car for kids of all age.', 10, 'police.png', 'NO'),
(38, 17, 'Toy Ambulance', 350, 'Toys', 'Raya', 'A Toy miniature Ambulance car made from die cast', 10, 'mechanic.png', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(5) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`) VALUES
(1, 'aslam'),
(2, 'anu');

-- --------------------------------------------------------

--
-- Table structure for table `seller_login`
--

CREATE TABLE `seller_login` (
  `seller_id` int(15) NOT NULL,
  `seller_name` varchar(11) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seller_register`
--

CREATE TABLE `seller_register` (
  `seller_id` int(23) NOT NULL,
  `firstname` varchar(23) NOT NULL,
  `secondname` varchar(23) NOT NULL,
  `companyname` varchar(34) NOT NULL,
  `username` varchar(35) NOT NULL,
  `address` varchar(23) NOT NULL,
  `password` varchar(35) NOT NULL,
  `conformpassword` varchar(35) NOT NULL,
  `email` varchar(23) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `sellerimage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller_register`
--

INSERT INTO `seller_register` (`seller_id`, `firstname`, `secondname`, `companyname`, `username`, `address`, `password`, `conformpassword`, `email`, `phonenumber`, `sellerimage`) VALUES
(17, 'AKSHAYA', 'ak', 'AK group', 'ak', 'ak nivas,peringathoor', '963', '123', 'aslammocheri@gmail.com', '7034505776', 's-eagle_head_free_vector_6387.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff_login`
--

CREATE TABLE `staff_login` (
  `staff_id` int(20) NOT NULL,
  `staff_name` varchar(34) NOT NULL,
  `staff_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff_register`
--

CREATE TABLE `staff_register` (
  `staff_id` int(23) NOT NULL,
  `firstname` char(43) NOT NULL,
  `secondname` char(12) NOT NULL,
  `address` varchar(23) NOT NULL,
  `gender` varchar(23) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(34) NOT NULL,
  `conformpassword` varchar(34) NOT NULL,
  `email` varchar(46) NOT NULL,
  `staffimage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_register`
--

INSERT INTO `staff_register` (`staff_id`, `firstname`, `secondname`, `address`, `gender`, `username`, `password`, `conformpassword`, `email`, `staffimage`) VALUES
(21, 'naina', 'a', 'naina nivas', 'female', 'naina', '852', '123', 'er@pol.lk', '2-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(4) NOT NULL,
  `student_name` varchar(15) NOT NULL,
  `student_phno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `task_id` int(20) NOT NULL,
  `title` varchar(15) NOT NULL,
  `description` varchar(25) NOT NULL,
  `staff_id` int(20) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'NEW',
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`task_id`, `title`, `description`, `staff_id`, `status`, `date`) VALUES
(22, 'Phonecall', 'call Amal', 0, 'COMPLETED', '0000-00-00'),
(25, 'SEND Mail', 'email client urgent', 0, 'COMPLETED', '0000-00-00'),
(26, 'get Address', 'get Client address', 0, 'COMPLETED', '0000-00-00'),
(27, 'send sms', 'send sms to ashok', 0, 'PENDING', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user_history`
--

CREATE TABLE `user_history` (
  `id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `action` varchar(50) NOT NULL,
  `product` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_history`
--

INSERT INTO `user_history` (`id`, `username`, `action`, `product`, `status`, `date`) VALUES
(1, 'amal', 'Viewed', 'shirt', 'Not Purchased', '0000-00-00 00:00:00'),
(2, 'amal', 'Viewed', 'watches', 'Not Purchased', '0000-00-00 00:00:00'),
(3, 'amal', 'Viewed', 'watches', 'Not Purchased', '0000-00-00 00:00:00'),
(4, 'amal', 'Viewed', 'watches', 'Not Purchased', '0000-00-00 00:00:00'),
(5, 'amal', 'Viewed', 'watches', 'Not Purchased', '0000-00-00 00:00:00'),
(6, 'amal', 'Viewed', 'watches', 'Not Purchased', '0000-00-00 00:00:00'),
(7, 'amal', 'Viewed', 'watches', 'Not Purchased', '0000-00-00 00:00:00'),
(8, 'amal', 'Viewed', 'watches', 'Not Purchased', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `customer_id` int(7) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `user_password` varchar(16) NOT NULL,
  `date_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`customer_id`, `user_name`, `user_password`, `date_login`) VALUES
(1, 'neethu', 'acd', '0000-00-00 00:00:00'),
(2, 'neethu', '', '0000-00-00 00:00:00'),
(3, 'fhgfhg', 'fghgfh', '0000-00-00 00:00:00'),
(4, 'neethu', '', '0000-00-00 00:00:00'),
(5, 'neethu', 'frvvgv', '0000-00-00 00:00:00'),
(6, 'neethu', '', '0000-00-00 00:00:00'),
(7, 'asd', 'asd', '0000-00-00 00:00:00'),
(8, 'abc', 'abc', '0000-00-00 00:00:00'),
(9, '', '', '0000-00-00 00:00:00'),
(10, 'shi', 'shi', '0000-00-00 00:00:00'),
(11, '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `user_id` int(12) NOT NULL,
  `firstname` varchar(13) NOT NULL,
  `secondname` varchar(14) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(45) NOT NULL,
  `state` varchar(34) NOT NULL,
  `district` varchar(23) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `email` varchar(23) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(23) NOT NULL,
  `conform_password` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`user_id`, `firstname`, `secondname`, `gender`, `address`, `state`, `district`, `phonenumber`, `email`, `username`, `password`, `conform_password`) VALUES
(34, 'amalraj', 'raj', 'male', 'pk', 'kerala', 'kannur', '8330890748', 'unni@g.com', 'amal', 'test', '1234'),
(35, 'vismaya', 'vis', 'female', 'vismaya  nivas', 'kerala', 'kannur', '2147483647', 'vis@gmail.com', 'vis', '123', '123'),
(36, 'aparna', 'appu', 'female', 'appu nivas', 'kerala', 'kannur', '2147483647', 'appu@gmail.com', 'appu', '123', '123'),
(37, 'alan', 'walker', 'male', 'green villa', 'kerala', 'kannur', '7897877654', 'al@gmail.com', 'alan', '123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lead`
--
ALTER TABLE `lead`
  ADD PRIMARY KEY (`lead_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_login`
--
ALTER TABLE `seller_login`
  ADD PRIMARY KEY (`seller_id`);

--
-- Indexes for table `seller_register`
--
ALTER TABLE `seller_register`
  ADD PRIMARY KEY (`seller_id`);

--
-- Indexes for table `staff_login`
--
ALTER TABLE `staff_login`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `staff_register`
--
ALTER TABLE `staff_register`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `user_history`
--
ALTER TABLE `user_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `lead`
--
ALTER TABLE `lead`
  MODIFY `lead_id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(7) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `seller_login`
--
ALTER TABLE `seller_login`
  MODIFY `seller_id` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `seller_register`
--
ALTER TABLE `seller_register`
  MODIFY `seller_id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `staff_login`
--
ALTER TABLE `staff_login`
  MODIFY `staff_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staff_register`
--
ALTER TABLE `staff_register`
  MODIFY `staff_id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `task_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `user_history`
--
ALTER TABLE `user_history`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `customer_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `user_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
