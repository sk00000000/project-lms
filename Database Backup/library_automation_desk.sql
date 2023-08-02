-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 05:37 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library_automation_desk`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bookid` int(10) NOT NULL,
  `bookcategoryid` int(10) NOT NULL,
  `bookname` varchar(50) NOT NULL,
  `bookdescription` text NOT NULL,
  `bookimg` varchar(100) NOT NULL,
  `bookcost` float(10,2) NOT NULL,
  `author` varchar(25) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookid`, `bookcategoryid`, `bookname`, `bookdescription`, `bookimg`, `bookcost`, `author`, `status`) VALUES
(1, 3, 'Computer Application', 'test', '28120Desert.jpg', 750.00, 'sridhar', 'Active'),
(2, 5, 'Software Engineering', 'abt smile', '19081librarybook.jpg', 2000.00, 'ratheesh', 'Active'),
(3, 5, 'C Programming', 'anju', '7176courses-image3.jpg', 100.00, 'anu', 'Active'),
(4, 5, 'GENERAL KNOWLEDGE GYAN', 'CHHATTISGARH GENERAL KNOWLEDGE, (CHHATTISGARH GK) LUCENT PUBLICATION, CHHATTISGARH SAMANYA GYAN HINDI ALL COMPETITIVE EXAMS', '14455genkn.jpg', 212.00, 'LUCENT PUBLICATION', 'Active'),
(5, 5, 'General Knowledge 2018', 'An editorial team of highly skilled professionals at Arihant, works hand in glove to ensure that the students receive the best and accurate content through our books. From inception till the book comes out from print, the whole team comprising of authors, editors, proof-readers and various other involved in shaping the book put in their best efforts, knowledge and experience to produce the rigorous content the students receive. Keeping in mind the specific requirements of the students and various examinations, the carefully designed exam oriented and exam ready content comes out only after intensive research and analysis. The experts have adopted whole new style of presenting the content which is easily understandable, leaving behind the old traditional methods which once used to be the most effective. They have been developing the latest content and updates as per the needs and requirements of the students making our books a hallmark for quality and reliability for the past 15 years.', '3087941t9BhIL8mL._SX331_BO1,204,203,200_.jpg', 200.00, 'LUCENT PUBLICATION', 'Active'),
(6, 6, 'IEEE System engineering', 'Systems engineering is an interdisciplinary field of engineering and engineering management that focuses on how to design and manage complex systems over their Life cycles. At its core, systems engineering utilizes systems thinking principles to organize this body of knowledge.', '32236download.png', 450.00, 'Pankaj Jalote', 'Active'),
(7, 7, 'Financial', 'Financial', '1231584368Blue Modern Our Services Digital Marketing Facebook Cover.png', 2500.00, 'Akash Chopra', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `bookcategory`
--

CREATE TABLE `bookcategory` (
  `bookcategoryid` int(10) NOT NULL,
  `bookcategory` varchar(50) NOT NULL,
  `bookdescription` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookcategory`
--

INSERT INTO `bookcategory` (`bookcategoryid`, `bookcategory`, `bookdescription`, `status`) VALUES
(3, 'Database Engineering', 'books', 'Active'),
(4, 'psychology', ' study abt mind', 'Active'),
(5, 'General Knowledge', 'General Knowledge books ', 'Active'),
(6, 'System engineering', 'System engineering ', 'Active'),
(7, 'Bcom Books', ' ', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `book_stock`
--

CREATE TABLE `book_stock` (
  `book_stock_id` int(10) NOT NULL,
  `bookid` int(10) NOT NULL,
  `branchid` int(10) NOT NULL,
  `purchasedate` date NOT NULL,
  `qty` int(10) NOT NULL,
  `cost` float(10,2) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_stock`
--

INSERT INTO `book_stock` (`book_stock_id`, `bookid`, `branchid`, `purchasedate`, `qty`, `cost`, `status`) VALUES
(9, 5, 127, '2019-02-07', 20, 500.00, 'Active'),
(10, 5, 127, '2019-02-21', 25, 500.00, 'Active'),
(11, 5, 127, '2019-02-07', 10, 10.00, 'Active'),
(12, 6, 127, '2019-02-13', 25, 100.00, 'Active'),
(13, 1, 126, '2019-02-20', 10, 250.00, 'Active'),
(14, 1, 127, '2019-02-15', 5, 500.00, 'Active'),
(15, 7, 129, '2022-03-19', 10, 5000.00, 'Active'),
(16, 2, 126, '2022-03-18', 3, 250.00, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branchid` int(10) NOT NULL,
  `branchname` varchar(50) NOT NULL,
  `branchdescription` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branchid`, `branchname`, `branchdescription`, `status`) VALUES
(126, 'BE Branch', 'BE Branch', 'Active'),
(127, 'MCA branch', 'MCA branches', 'Active'),
(128, 'BCA', 'BCA branch', 'Active'),
(129, 'History Branch', 'History Branch provides books history library', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courseid` int(10) NOT NULL,
  `branchid` int(10) NOT NULL,
  `course` varchar(50) NOT NULL,
  `coursenote` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseid`, `branchid`, `course`, `coursenote`, `status`) VALUES
(1, 126, 'BCA', 'bca source ', 'Active'),
(2, 126, 'MCA', 'bca source ', 'Active'),
(5, 126, 'BA', 'Computer science engineering..', 'Active'),
(6, 129, 'History', 'History', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `finesettings`
--

CREATE TABLE `finesettings` (
  `daytokeep` int(10) NOT NULL,
  `penaltycost` float(10,2) NOT NULL,
  `nobooks` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finesettings`
--

INSERT INTO `finesettings` (`daytokeep`, `penaltycost`, `nobooks`) VALUES
(14, 2.00, 3);

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

CREATE TABLE `librarian` (
  `librarian_id` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `type` varchar(10) NOT NULL,
  `loginid` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `librarian`
--

INSERT INTO `librarian` (`librarian_id`, `name`, `type`, `loginid`, `password`, `status`) VALUES
(1, 'Mahesh kiran', 'Admin', 'admin', 'adminadminadmin', 'Active'),
(2, 'joyal', 'Librarian', 'librarian', 'librarianlibrarianlibrarian', 'Active'),
(3, 'Raj kiran', 'Librarian', 'rajkirana', 'q1w2e3r4/', 'Active'),
(4, 'Neetha', 'Librarian', 'neetha', 'q1w2e3r4/', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `penalty`
--

CREATE TABLE `penalty` (
  `penaltyid` int(10) NOT NULL,
  `penalty_type` varchar(25) NOT NULL COMMENT 'Lost, Days',
  `transactionid` int(10) NOT NULL,
  `bookid` int(10) NOT NULL,
  `cost` float(10,2) NOT NULL,
  `penaltydate` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penalty`
--

INSERT INTO `penalty` (`penaltyid`, `penalty_type`, `transactionid`, `bookid`, `cost`, `penaltydate`, `status`) VALUES
(2, '', 2, 7, 100.00, '2022-03-19', 'Active'),
(3, '', 3, 7, 250.00, '2022-03-19', 'Active'),
(4, '', 4, 3, 0.00, '2022-03-19', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentid` int(10) NOT NULL,
  `courseid` int(10) NOT NULL,
  `studentname` varchar(25) NOT NULL,
  `studentimg` varchar(255) NOT NULL,
  `rollno` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `contactno` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentid`, `courseid`, `studentname`, `studentimg`, `rollno`, `password`, `emailid`, `contactno`, `status`) VALUES
(1, 2, 'anju', '', '2255446', '451278', 'anju@gmail.com', '784512', 'Active'),
(2, 2, 'anju abc', '14994Lib.jpg', '16499607', 'anjusha', 'anjushamullacherry@gmail.com', '7510184008', 'Active'),
(3, 1, 'Manoj kumar', '1305341t9BhIL8mL._SX331_BO1,204,203,200_.jpg', '123456789', '123456789', 'manoj@gamilc.om', '7894561230', 'Active'),
(4, 5, 'Prithvi', '18396download.png', '1111230', '11156789', 'jyosh@gmail.com', '7894561230', 'Active'),
(5, 5, 'Hetmyer', '1728download.png', '231231', '231231', 'jyosh@gmail.com', '7894561230', 'Active'),
(6, 5, 'Jyosha', '10458Nokia 7.1.png', '7894561230', '123456789', 'jyosh@gmail.com', '7894561230', 'Active'),
(7, 1, 'Nikki', '145685464713256148_274255649575672_5622693739226368535_n.jpg', '101010', 'q1w2e3r4/', 'nikki@gmail.com', '7894561230', 'Active'),
(8, 1, 'Prashanth kumar', '89295621013256148_274255649575672_5622693739226368535_n.jpg', '252525', 'q1w2e3r4/', '252525@gmail.com', '7894561230', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transationid` int(10) NOT NULL,
  `studentid` int(10) NOT NULL,
  `bookid` int(10) NOT NULL,
  `transtype` varchar(50) NOT NULL,
  `bookingdate` date NOT NULL,
  `borrowdate` datetime NOT NULL,
  `returndate` datetime NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transationid`, `studentid`, `bookid`, `transtype`, `bookingdate`, `borrowdate`, `returndate`, `status`) VALUES
(2, 7, 7, 'Returned', '2022-03-19', '2022-03-19 12:30:57', '2022-03-19 12:31:19', 'Active'),
(3, 8, 7, 'Returned', '2022-03-19', '2022-03-19 12:44:29', '2022-03-19 12:45:46', 'Active'),
(4, 8, 3, 'Returned', '2022-03-01', '2022-03-02 12:50:07', '2022-03-19 12:52:07', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `bookcategory`
--
ALTER TABLE `bookcategory`
  ADD PRIMARY KEY (`bookcategoryid`);

--
-- Indexes for table `book_stock`
--
ALTER TABLE `book_stock`
  ADD PRIMARY KEY (`book_stock_id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branchid`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseid`);

--
-- Indexes for table `librarian`
--
ALTER TABLE `librarian`
  ADD PRIMARY KEY (`librarian_id`);

--
-- Indexes for table `penalty`
--
ALTER TABLE `penalty`
  ADD PRIMARY KEY (`penaltyid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentid`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transationid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `bookid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bookcategory`
--
ALTER TABLE `bookcategory`
  MODIFY `bookcategoryid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `book_stock`
--
ALTER TABLE `book_stock`
  MODIFY `book_stock_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branchid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `courseid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `librarian`
--
ALTER TABLE `librarian`
  MODIFY `librarian_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penalty`
--
ALTER TABLE `penalty`
  MODIFY `penaltyid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studentid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transationid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
