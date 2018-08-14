-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2018 at 09:43 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `FNAME` varchar(20) NOT NULL,
  `LNAME` varchar(20) NOT NULL,
  `PASS` varchar(20) NOT NULL,
  `EMAILID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `FNAME`, `LNAME`, `PASS`, `EMAILID`) VALUES
(1, 'DEBDUT', 'SAHA', 'debdut@8583', 'deb.saha.3@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `comment` varchar(300) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `name`, `email`, `comment`, `datetime`) VALUES
(1, 'debdut', 'debdut.saha.1@gmail.com', 'this a cool website', '2018-03-29 14:21:30'),
(2, 'Debdut saha ', 'debdut.saha.1@gmail.com', 'your coffee shop is so preeti.      ', '2018-04-17 03:38:18'),
(3, 'jwrvrjkvnrwj', 'nvkenvkrev@gmail.com', '       qnchb chkwcwkbb         ', '2018-04-17 03:41:42'),
(4, 'sarmi roy', 'sarmi.saha.1@gmail.com', 'oh what a coffee shop!!! they are awsome!!!             ', '2018-04-18 14:59:12'),
(5, 'Sagar gharami', 'gharamisagar@gmail.com', '                This is one of the best coffee shop around kolkata.', '2018-04-20 06:48:39'),
(6, 'Sagar gharami', 'gharamisagar@gmail.com', '            aha    ', '2018-04-20 06:49:24'),
(7, 'sneha ', 'meghavia2003@gmail.com', '            your coffee shop is nice    ', '2018-04-20 15:48:25'),
(8, 'Anirban', '', '           very good gandu     ', '2018-04-24 05:43:39'),
(9, 'vacsevsfs', 'fwwsfwsv', 'vsvs@ddv.com', '2018-04-25 04:32:37'),
(10, 'ergdrbddbedbd', ' bbt@gmail.com', 'hqedhkbhaedjjbcuwe                ', '2018-04-25 04:54:11'),
(11, 'sayantika', 'biswas', '  kjbcwckwsbkjwsfws              ', '2018-04-25 04:56:08'),
(12, 'sayantika', 'sayantikab28@gmail.com', '  hkbchewchkebkwae              ', '2018-04-25 04:58:06'),
(13, 'jimmy ', 'aswethgf@gmail.com', '           tyfytudcrtctfrtc     ', '2018-04-25 08:41:21'),
(14, 'kushal', 'kushalbaidya97@gmail.com', 'uhyayueqd        ', '2018-05-08 09:50:15'),
(15, 'ab c', 'abc@gmail.com', 'ijrjivrjrissnvikf         ', '2018-08-04 07:36:49');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `massage` varchar(300) NOT NULL,
  `booking number` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `phone`, `email`, `date`, `massage`, `booking number`) VALUES
(1, 'debdut saha', '8583915287', 'debdut.saha.1@gmail.com', '2018-04-09', 'abcdefgh', 'deb2147483647-09'),
(2, 'Debdut saha ', '8583915287', 'debdut.saha.1@gmail.com', '2018-04-09', 'aws2exg', 'Deb2147483647-09'),
(3, 'deb saha', '8583915287', 'debdut.saha.1@gmail.com', '2018-04-12', 'hevwdvwemd', 'deb2147483647-12'),
(4, 'deb saha', '8583915287', 'debdut.saha.1@gmail.com', '2018-04-12', 'hevwdvwemd', 'deb2147483647-12'),
(5, 'sarmi  roy', '7980437621', 'debdut.saha.1@gmail.com', '2018-04-16', 'want to book for a party', 'sar2147483647-16'),
(6, 'sagar gharami', '8420826515', 'gharamisagar@gmail.com', '2018-11-25', '', 'sag2147483647-25'),
(7, 'sneha roy', '753437284', 'de3jnkcew@gmail.com', '2018-04-14', 'i have been looking for a big table.', 'sne2147483647-14'),
(8, 'Anirban Chowdhury', '8583915287', 'canirban205@gmail.com', '2018-04-25', 'for 6 people', 'Ani2147483647-25'),
(9, 'jimmy misher', '8697538458', 'jeetmis@gmail.com', '2018-04-18', 'zbl566uyjygjtkjylkmrjturj', 'jim2147483647-18'),
(10, 'kushal baidya', '9903364399', 'kushalbaidya97@gmail.com', '2018-05-09', 'Birthday', 'kus2147483647-09'),
(11, 'kushal baidya', '9903364399', 'kushalbaidya97@gmail.com', '2018-05-18', 'birthday', 'kus2147483647-18');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `fname` varchar(78) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `massage` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`fname`, `lname`, `email`, `subject`, `massage`) VALUES
('vacsevsfs', 'fwwsfwsv', 'vsvs@ddv.com', '', ''),
('ccwc mwf', 'fwwsfwsvcbcdv cdc', 'hbaxqxh@hcjvehv.com', 'c hjhjwec', 'vvrvrvrwvvr jcwcjwc'),
('sayantika', 'biswas', 'sayantikab28@gmail.com', 'cghwevgjwe', 'chjwvchjweweb'),
('jimmy', 'misher', 'aswethgf@gmail.com', 'bad quality', ' gvhfjhmnbvmn mhfnbfn'),
('debdut', 'saha', 'abc@gmail.com', 'any', 'jcnadcsnsd');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `massage` varchar(300) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`fname`, `lname`, `email`, `subject`, `massage`, `ID`) VALUES
('', '', 'debdut.saha.1@gmail.com', 'hbjvbfh', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `ID` int(11) NOT NULL,
  `FNAME` varchar(30) NOT NULL,
  `LNAME` varchar(30) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `PHONE` varchar(20) NOT NULL,
  `PASS` varchar(30) NOT NULL,
  `securitykey` varchar(30) NOT NULL,
  `content` varchar(50) NOT NULL,
  `APPROVAL` tinyint(1) NOT NULL,
  `BLOCK` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`ID`, `FNAME`, `LNAME`, `EMAIL`, `PHONE`, `PASS`, `securitykey`, `content`, `APPROVAL`, `BLOCK`) VALUES
(17, 'ergdrbd', 'dbedbd', 'bbt@gmail.com', '353535665', '534535353', 'erg214748364765', 'upload/swami1.jpg', 0, 0),
(18, 'sarmi ', 'roy', 'sarmi.saha.1@gmail.com', '7980345676', '123456789', 'sar2147483647676', 'upload/background2.jpg', 0, 1),
(19, 'Meghdoot', 'saha', 'megh.1@gmail.com', '7869456734', '1234567', 'Meg2147483647734', 'upload/swami4.jpg', 0, 0),
(20, 'sagar', 'gharami', 'gharamisagar@gmail.com', '8420826515', 'Hancock12345', 'sag2147483647515', 'upload/rcclogo.jpeg', 0, 1),
(21, 'sayantika', 'biswas', 'sayantikab28@gmail.com', '7980808628', 'sayantika', 'say2147483647628', 'upload/', 0, 0),
(22, 'sneha', 'roy', 'meghavia2003@gmail.com', '7001704010', '1234', 'sne2147483647010', 'upload/', 0, 1),
(23, 'Anirban', 'Chowdhury', 'canirban205@gmail.com', '9836084853', 'kolkata1', 'Ani2147483647853', 'upload/', 0, 1),
(24, 'jimmy', 'misher', 'aswethgf@gmail.com', '453131321321', '1234567', 'jim2147483647213', 'upload/', 0, 0),
(25, 'kushal', 'baidya', 'kushalbaidya97@gmail.com', '9903364399', 'kushal97', 'kus2147483647399', 'upload/', 0, 1),
(26, 'ab', 'c', 'abc@gmail.com', '675849322', 'debdut', 'ab214748364722', 'upload/IMG20160329140704.jpg', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
