-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2019 at 04:55 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineexam`
--

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(20) NOT NULL,
  `qus` varchar(200) DEFAULT NULL,
  `op1` varchar(100) DEFAULT NULL,
  `op2` varchar(100) DEFAULT NULL,
  `op3` varchar(100) DEFAULT NULL,
  `op4` varchar(100) DEFAULT NULL,
  `markoption` varchar(5) DEFAULT NULL,
  `rightoption` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `qus`, `op1`, `op2`, `op3`, `op4`, `markoption`, `rightoption`) VALUES
(1, 'What is the worst case time complexity for search, insert and delete operations in a general Binary Search Tree?', 'O(n) for all', 'O(Logn) for all', 'O(Logn) for search and insert, and O(n) for delete', 'O(Logn) for search, and O(n) for insert and delete', '2', '1'),
(2, 'We are given a set of n distinct elements and an unlabeled binary tree with n nodes. In how many ways can we populate the tree with the given set so that it becomes a binary search tree', '0', '1', 'n!', '(1/(n+1)).2nCn', '3', '2'),
(3, 'The preorder traversal sequence of a binary search tree is 30, 20, 10, 15, 25, 23, 39, 35, 42. Which one of the following is the postorder traversal sequence of the same tree?', '10, 20, 15, 23, 25, 35, 42, 39, 30', '15, 10, 25, 23, 20, 42, 35, 39, 30', '15, 20, 10, 23, 25, 42, 35, 39, 30', '15, 10, 23, 25, 20, 35, 42, 39, 30', '0', '4'),
(4, 'Which of the following traversals is sufficient to construct BST from given traversals 1) Inorder 2) Preorder 3) Postorder', 'Any one of the given three traversals is sufficient', 'Either 2 or 3 is sufficient', '2 and 3', '1 and 3', '2', '2'),
(5, 'Which of the following operations is not O(1) for an array of sorted data. You may assume that array elements are distinct.', 'Find the ith largest element', 'Find the ith smallest element', 'Delete an element', 'All of the above', '0', '3'),
(6, 'Which of the followings is/are automatically added to every class, if we do not write our own.', 'Copy Constructor', 'Assignment Operator', 'A constructor without any parameter', 'All of the above', '0', '4'),
(7, 'Which of the following is true about constructors. 1) They cannot be virtual. 2) They cannot be private. 3) They are automatically called by new operator.', 'All 1, 2, and 3', 'Only 1 and 3', 'Only 1 and 2', 'Only 2 and 3', '2', '2'),
(8, 'What does the following C-statement declare?\r\nint ( * f) (int * ) ;', 'A function that takes an integer pointer as argument and returns an integer.', 'A function that takes an integer as argument and returns an integer pointer.', 'A pointer to a function that takes an integer pointer as argument and returns an integer.', 'A function that takes an integer pointer as argument and returns a function pointer.', '0', '3'),
(9, 'Which one of the following is correct?', 'Java applets can not be written in any programming language', 'An applet is not a small program', 'An applet can be run on its own', 'Applets are embedded in another applications', '0', '4'),
(10, 'What is the use of final keyword in Java?', 'When a class is made final, a sublcass of it can not be created.', 'When a method is final, it can not be overridden.', 'When a variable is final, it can be assigned value only once.', 'All of the above', '0', '4'),
(11, 'Which of the following in Object Oriented Programming is supported by Function overloading and default arguments features of C++.', 'Inheritance', 'Polymorphism', 'Encapsulation', 'None of the above', '4', '2');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(20) NOT NULL,
  `rightoption` varchar(20) DEFAULT NULL,
  `satyam979324` varchar(20) DEFAULT NULL,
  `kapil` varchar(20) DEFAULT NULL,
  `dfdfaman` varchar(20) DEFAULT NULL,
  `anm` varchar(20) DEFAULT NULL,
  `deep` varchar(20) DEFAULT NULL,
  `shiv` varchar(20) DEFAULT NULL,
  `deep231` varchar(20) DEFAULT NULL,
  `aman123` varchar(20) DEFAULT NULL,
  `aman456` varchar(20) DEFAULT NULL,
  `aman45` varchar(20) DEFAULT NULL,
  `ad` varchar(20) DEFAULT NULL,
  `aman1` varchar(20) DEFAULT NULL,
  `satyam` varchar(20) DEFAULT NULL,
  `asd` varchar(20) DEFAULT NULL,
  `gauravkumarsd29` varchar(20) DEFAULT NULL,
  `ssss` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `rightoption`, `satyam979324`, `kapil`, `dfdfaman`, `anm`, `deep`, `shiv`, `deep231`, `aman123`, `aman456`, `aman45`, `ad`, `aman1`, `satyam`, `asd`, `gauravkumarsd29`, `ssss`) VALUES
(1, '1', '1', '2', NULL, NULL, '2', '0', '3', '2', '0', '1', '0', '0', NULL, '2', '2', '2'),
(2, '2', '2', '0', NULL, NULL, '2', '0', '0', '0', '0', '0', '0', '0', NULL, '2', '3', '3'),
(3, '4', '2', '0', NULL, NULL, '0', '0', '0', '3', '0', '0', '0', '2', NULL, '0', '0', '0'),
(4, '2', '0', '0', NULL, NULL, '3', '0', '0', '0', '0', '0', '0', '0', NULL, '0', '3', '2'),
(5, '3', '0', '0', NULL, NULL, '3', '0', '0', '1', '0', '1', '0', '2', NULL, '0', '0', '0'),
(6, '4', '0', '0', NULL, NULL, '0', '0', '0', '3', '0', '2', '0', '2', NULL, '2', '0', '0'),
(7, '2', '0', '0', NULL, NULL, '0', '0', '0', '4', '0', '3', '0', '2', NULL, '0', '2', '2'),
(8, '3', '0', '2', NULL, NULL, '3', '0', '3', '2', '0', '2', '0', '2', NULL, '2', '0', '0'),
(9, '10', '0', '2', NULL, NULL, '2', '0', '3', '3', '0', '1', '0', '0', NULL, '2', '3', '0'),
(10, '4', '0', '3', NULL, NULL, '0', '0', '2', '3', '0', '2', '0', '3', NULL, '1', '0', '0'),
(11, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', NULL, '2', '3', '4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `name` varchar(20) NOT NULL,
  `father` varchar(20) DEFAULT NULL,
  `address` varchar(70) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL,
  `collage` varchar(40) DEFAULT NULL,
  `course` varchar(30) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `gender` varchar(40) DEFAULT NULL,
  `mob` varchar(45) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `times` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `father`, `address`, `email`, `pass`, `collage`, `course`, `dob`, `gender`, `mob`, `status`, `times`) VALUES
(1, 'an', 'jk', 'gd', 'anm@gmail.com', '1234', 'njnjn', 'kjnjk', '02-01-1997', 'hjjjjjjhj', '1234567890', '1', '00:12:00.000000'),
(4, 'dkfjd', 'kdjf', 'kdjf', 'kapil@gmail.com', 'dkdk', 'dkdk', 'kdfj', '2019-02-21', 'male', '2147483647', '1', '00:12:00.000000'),
(6, 'Aman singh', 'abhay', 'pbh', 'aman@gmail.com', '1234', 'nitc', 'mca', '2019-02-14', 'male', '8815094811', '1', '00:02:05.000000'),
(7, 'kapil', 'chhipa', 'dkfjsdfkj', 'dfdfaman@gmail.com', 'abcd', 'nitc', 'mca', '2019-02-11', 'male', '5757575757', '1', NULL),
(8, 'kapil', 'chhipa', 'dkfjsdfkj', 'dfdfaman@gmail.com', 'abcd', 'nitc', 'mca', '2019-02-11', 'male', '5757575757', '1', NULL),
(9, 'deepanshu', 'kk', 'sehore', 'deep@gmail.com', '12345678', 'nitc', 'MCA', '1996-02-01', 'male', '12345', '1', NULL),
(11, 'sataym singh', 'fds', 'sdfa', 'satyam979324@gmail.com', '1234', 'sdfds', 'MCA', '2019-02-13', 'male', '7894561230', '1', NULL),
(12, 'shiv', 'kjklmj', 'bhopal', 'shiv@gmail.com', '1234', 'mk', 'mkl', '2019-02-15', 'male', '8815094811', '1', '23:59:59.000000'),
(13, 'jnjnjnj', 'knnnnnnnnnl', 'jkkkkkkkk', 'aman1@gmail.com', '1234', 'mmmm', 'jvjvjh', '2019-02-13', 'male', '7894561230', '1', '1551260173'),
(14, 'aman', 'abhay', 'lkadsadas', 'aman45@gmail.com', '1234', 'asd', 'asd', '2019-02-20', 'male', '7894561230', '1', '1551197933'),
(15, 'aman ', 'ssasklajlk', 'laslkslakd', 'aman123@gmail.com', '1234', 'kljvnmk', 'mca', '2019-02-15', 'male', '1234567890', '1', '1551188381'),
(16, 'aman', 'cmxzc', 'zczmx.m.', 'aman456@gmail.com', '1234', 'dkljlklz', 'mca', '2019-02-20', 'male', '7894561230', '1', '1551196509'),
(18, 'deepanshu', 'rathore', 'mega hostal, nit hostal', 'deep231@gmail.com', '12345678', 'NITC', 'MCA', '1996-08-23', 'male', '7000927112', '1', '1551122382'),
(19, 'satyam', 'sandjsdaj', 'kkkadskl', 'satyam@gmail.com', '1234', 'mcasa', 'mca', '2019-09-14', 'male', '8842564280', '1', '1551260979'),
(20, 'kaaaaaaaa', 'asdkl', 'adskjdasjn', 'aman789@gmail.com', '1234', 'akmdaskl', 'sdkkkds', '2019-02-21', 'male', '88457963210', '1', '1551215756'),
(22, 'Aman singh', 'sddajkasjk', 'jnksjandjaksnk', 'aman120@gmail.com', '1234', 'anjndj', 'aklnasdkl', '2019-02-14', 'male', '8815094811', '1', '1551217361'),
(23, 'dhio', 'dkllk', 'sakdk', 'aman30@gmail.com', '1234', 'skklslsf', 'sfl;sf', '2019-02-20', 'male', '456791230', '1', '1551218398'),
(24, 'mani', 'manjaj', 'saj', 'mani@gmail.com', '1234', '', '', '', '', '', '1', '1551220428'),
(25, 'Aman ', 'dssajjkas', 'dsjnjks', 'ad@gmail.com', '1234', 'dssjs', 'kdskjlk', '2019-02-13', 'male', '8794561230', '1', '1551258990'),
(26, 'Aman singh', 'djknsdk', 'djdkkd', 'as@gmail.com', '1234', 'dkskld', 'dskfslk', '2019-02-15', 'male', '8456973210', '1', '1551258891'),
(27, 'aman ', 'shivijk', 'jsdkkds', 'asd@gmail.com', '1234', 'mdjsd', 'kasjk', '2019-02-14', 'male', '7894561230', '1', '1551268426'),
(28, 'GAURAV KUMAR', 'GOPAL PRASAD SAH', 'mega hostal, nit hostal', 'gauravkumarsd29@gmail.com', '7903070935', 'nitc', 'mca', '2016-04-06', 'male', '7903070935', '1', '1551273515'),
(29, 'jsdkjdkj', 'snkjfdsk', 'aljadsl', 'ssss@gmail.com', '1234', 'dfkjsjk', 'khkj', '2019-02-21', 'male', '7894561230', '1', '1551279514');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
