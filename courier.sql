-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2018 at 10:55 PM
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
-- Database: `courier`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `b_id` int(10) NOT NULL,
  `b_name` varchar(50) NOT NULL,
  `b_city` varchar(30) NOT NULL,
  `b_pin_code` int(7) NOT NULL,
  `b_add` varchar(50) NOT NULL,
  `b_timing` varchar(30) NOT NULL,
  `b_state` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`b_id`, `b_name`, `b_city`, `b_pin_code`, `b_add`, `b_timing`, `b_state`, `contact`) VALUES
(101, 'Fastest Courier Services', 'Bhopal', 462002, 'T.T. Nagar,Bhopal', '9:30 AM -7:00 PM', 'M.P.', '7678907890'),
(102, 'DTDC courier', 'Bhopal', 462001, 'Bhopal G.P.O.', '9:30 AM -7:00 PM', '', '8909878679'),
(103, 'Bluedart courier services', 'Bhopal', 462022, 'Arera Hills S.O.', '10:00 AM-7:00 PM', 'M.P.', '8899764534'),
(104, 'Goods courier services', 'Bhopal', 462003, 'Mata Mandir', '9:00 AM- 8:00 PM', 'M.P.', '7789897678'),
(201, 'Flipcart courier services', 'Indore', 452009, 'Lokmanya Nagar', '10:00 AM-7:00 PM', 'M.P.', '7765453409'),
(202, 'DTDC courier', 'Indore', 452013, 'Juni Indore', '9:00 AM- 8:00 PM', 'M.P.', '8765432123'),
(302, 'Java courier services', 'Varanasi', 221007, 'Dindayalpur, Varanasi', '9:00 AM- 8:00 PM', 'U.P.', '9922113344'),
(303, 'Gati Courier Services', 'Agra', 282004, 'Agra University', '10:00 AM-7:00 PM', 'U.P.', '8877665544'),
(304, 'Ekart Courier', 'Ghaziabad', 245201, 'Alipur', '9:30 AM -7:00 PM', 'U.P.', '8769098654'),
(401, 'DTDC courier', 'Lucknow', 226005, 'Adarsh Nagar', '10:00 AM-7:00 PM', 'U.P.', '9967987656'),
(501, 'Cargo courier', 'Vashali', 844114, 'Amia,Vashali', '10:00 AM-7:00 PM', 'Bihar', '9969598600'),
(601, 'Jammu Courier', 'Jammu', 180002, 'Akalpur,Jammu', '10:00 AM-7:00 PM', 'J&K', '7890697856'),
(701, 'Bombay Courier services', 'Mumbai', 400014, 'Dadar Colony', '9:00 AM- 8:00 PM', 'Maharashtra', '7898754675'),
(705, 'Pune Courier Services', 'Pune', 411047, 'Lohogaon', '9:30 AM -7:00 PM', 'Maharashtra', '9080706050'),
(801, 'ravi courier ', 'hissar', 125001, 'hissar', '9:00AM-7:00PM', 'madhya praddesh', '8976778967');

-- --------------------------------------------------------

--
-- Table structure for table `courier`
--

CREATE TABLE `courier` (
  `cons_id` int(10) NOT NULL,
  `b_id` int(10) NOT NULL,
  `from_city` varchar(15) NOT NULL,
  `to_city` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courier`
--

INSERT INTO `courier` (`cons_id`, `b_id`, `from_city`, `to_city`) VALUES
(10001, 101, 'Bhopal', 'Indore'),
(10002, 102, 'Bhopal', 'Indore'),
(10003, 103, 'Bhopal', 'Lucknow'),
(10004, 201, 'Indore', 'Mumbai'),
(10006, 104, 'Bhopal', 'Agra'),
(10007, 202, 'Indore', 'Bhopal'),
(10008, 201, 'Indore', 'Varanasi'),
(10009, 401, 'Lucknow', 'Mumbai'),
(10010, 401, 'Lucknow', 'Varanasi'),
(10011, 401, 'Lucknow', 'Agra'),
(10012, 302, 'Varanasi', 'Hissar'),
(10013, 302, 'Varanasi', 'Jammu'),
(10014, 303, 'Agra', 'Bhopal'),
(10015, 303, 'Agra', 'Vaishali'),
(10016, 801, 'Hissar', 'Indore'),
(10017, 801, 'Hissar', 'Jammu'),
(10018, 501, 'Vaishali', 'Jammu'),
(10019, 501, 'Vaishali', 'Mumbai'),
(10020, 501, 'Vaishali', 'Varanasi'),
(10021, 501, 'Vaishali', 'Mumbai'),
(10022, 601, 'Jammu', 'Mumbai'),
(10023, 601, 'Jammu', 'Pune'),
(10024, 701, 'Mumbai', 'Indore'),
(10025, 705, 'Pune', 'Mumbai'),
(10026, 705, 'Pune', 'Agra'),
(10027, 401, 'Lucknow', 'Hissar');

-- --------------------------------------------------------

--
-- Table structure for table `courier_status`
--

CREATE TABLE `courier_status` (
  `cons_id` int(10) NOT NULL,
  `current_state` varchar(30) NOT NULL,
  `date` varchar(15) NOT NULL,
  `time` varchar(15) NOT NULL,
  `emp_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courier_status`
--

INSERT INTO `courier_status` (`cons_id`, `current_state`, `date`, `time`, `emp_id`) VALUES
(10001, 'dispatch', '03-11-2017', '4:00PM', 1003),
(10003, 'not dispatch', '02-11-2017', '2:00PM', 1012),
(10004, 'dispatched', '01-11-2017', '11:00AM', 1091),
(10006, 'receive', '06-11-2017', '3:00PM', 1022),
(10007, 'dispatched', '07-11-2017', '12:30PM', 1021),
(10008, 'received', '10-11-2017', '10:00AM', 1022),
(10009, 'received', '11-12-2017', '3:30PM', 1069),
(10009, 'received', '12-11-2017', '2:30PM', 1069),
(10010, 'dispatched', '12-11-2017', '5:00PM', 1069),
(10011, 'dispatched', '13-11-2017', '1:00PM', 1069),
(10012, 'received', '13-11-2017', '1:20PM', 1057),
(10013, 'not dispatched', '15-11-2017', '5:00PM', 1057),
(10014, 'received', '16-11-2017', '8:00PM', 1065),
(10015, 'dispatched', '16-11-2017', '3:00PM', 1065),
(10018, 'dispatched', '17-11-2017', '2:00PM', 1073),
(10019, 'dispatched', '20-11-2017', '4:00PM', 1073),
(10020, 'received', '21-11-2017', '1:20PM', 1073),
(10021, 'not dispatched', '22-11-2017', '12:30PM', 1073),
(10022, 'received', '23-11-2017', '3:00PM', 1077),
(10023, 'dispatched', '24-11-2017', '5:00PM', 1078),
(10024, 'dispatched', '25-11-2017', '4:00PM', 1083),
(10025, 'received', '22-11-2017', '3:30PM', 1087),
(10026, 'dispatched', '22-11-2017', '2:20PM', 1087),
(10027, 'received', '25-11-2017', '6:00PM', 1069),
(10001, 'Item Dispatch To Branch', '03-11-2017', '4:00PM', 1022),
(10002, 'Dispatched', '03-11-2017', '2:00PM', 1007),
(10002, 'ConsignMent Recieved By', '03-11-2017', '2:00PM', 1022),
(10003, 'ConsignMent Recieved By', '04-11-2017', '4:00PM', 1069);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(10) NOT NULL,
  `cust_name` varchar(30) NOT NULL,
  `cust_add` varchar(50) NOT NULL,
  `cust_city` varchar(30) NOT NULL,
  `cust_pin_code` int(7) NOT NULL,
  `cust_state` varchar(30) NOT NULL,
  `cust_contact` varchar(10) NOT NULL,
  `b_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_add`, `cust_city`, `cust_pin_code`, `cust_state`, `cust_contact`, `b_id`) VALUES
(100001, 'Suresh Prajapati', 'T.T. Nagar', 'Bhopal', 462002, 'M.P.', '9935667788', 101),
(100002, 'Sunny Deol', 'Barkheda', 'Bhopal', 462022, 'M.P.', '9988776655', 102),
(100003, 'Nekram', 'Barkheda Nathu', 'Bhopal', 462044, 'M.P.', '8877660099', 103),
(100004, 'Kamla', 'Basai', 'Bhopal', 463106, 'M.P.', '7755432987', 104),
(100006, 'Manohar', 'Bairagarh', 'Bhopal', 462030, 'M.P.', '7897654398', 101),
(100007, 'Vikas Ojha', 'Arwaliya', 'Bhopal', 462038, 'M.P.', '9083070566', 102),
(100008, 'Deepak Lal', 'AIIMS', 'Bhopal', 462020, 'M.P.', '7787347649', 104),
(100009, 'Neeraj', 'Ayodhaya Nagar', 'Bhopla', 462041, 'M.P.', '8711223446', 104),
(100010, 'Shushan Gupta', 'Bagroda', 'Bhopal', 462026, 'M.P.', '8899634537', 104),
(100011, 'Santosh rai', 'Bairagarh', 'Bhopal', 462030, 'M.P.', '7734645097', 103),
(100012, 'ganpat Prajapati', 'Barkheda', 'Bhopal', 464993, 'M.P.', '7463634734', 101),
(100013, 'Dineshlal', 'Basai B.O', 'Bhopal', 463106, 'M.P.', '8877665544', 102),
(100014, 'Harshit Sonkar', 'Bhel H.O', 'Bhopal', 462022, 'M.P.', '8568474847', 103),
(100015, 'Lakshman Agrawal', 'Chouk', 'Bhopal', 462001, 'M.P.', '8485694953', 101),
(100016, 'Ravi jangra', 'Gunga B.O', 'Indore', 462101, 'M.P.', '8487448367', 201),
(100017, 'Dinesh Shakywar', 'Indore Cat S.O', 'Indore', 452013, 'M.P.', '9089879868', 202),
(100018, 'Arpit yadav', 'Lokmanya Nagar', 'Indore', 452009, 'M.P.', '8473463999', 201),
(100019, 'Sachin Baba', 'Indore Industrial Area S.O', 'Indore', 452003, 'M.P.', '8387347673', 201),
(100020, 'Shivani', 'Indore Ram Bagh S.O', 'Indore', 452007, 'M.P.', '9966328419', 202),
(100021, 'Richa jain', 'Arera Hills S.O', 'Bhopal', 462027, 'M.P.', '9483637746', 102),
(100022, 'Anam', 'Chouk S.O', 'Bhopal', 462001, 'M.P.', '7454373630', 101),
(100023, 'Saurabh Maurya', 'Dindayalpur, Varanasi', 'Varanasi', 221007, 'U.P.', '7475943759', 302),
(100024, 'Shubham', 'Dindayalpur, varanasi', 'Varanasi', 221007, 'U.P.', '8637548934', 302),
(100025, 'Ramu', 'Agra University', 'Agra', 282004, 'U.P.', '9987373735', 303),
(100026, 'Harendra tyagi', 'Agwar B.O', 'Agra', 283202, 'U.P.', '9987463720', 304),
(100027, 'Nekram Prajapati', 'Alipur', 'Ghaziabad', 245201, 'U.P.', '7788110088', 401),
(100029, 'Ashwani sharma', 'Adarsh Nagar', 'Lucknow', 226005, 'U.P.', '9975325438', 401),
(100030, 'Abhishek Shakya', 'Aashiana', 'Lucknow', 226012, 'U.P.', '9486734588', 401),
(100031, 'Rohit Kumar', 'Amia', 'Vashali', 226005, 'Bihar', '8875904320', 501),
(100032, 'Sachin Kunwar', 'Amritpur', 'Vashali', 844113, 'Bihar', '9094949485', 501),
(100033, 'sunny Sambyal', 'Akalpur', 'Jammu', 844114, 'J&K', '9866543225', 601),
(100034, 'Ankita Bawaria', 'Agra Chak', 'Jammu', 181102, 'J&K', '9776545786', 601),
(100035, 'Rohan Anand', 'Dadar Nagar', 'Mumbai', 400014, 'Maharashtra', '9876543799', 701),
(100036, 'Manish Kumar', 'Antop Hill', 'Mumbai', 400037, 'Maharashtra', '8399586849', 701),
(100037, 'Yashi Agrawal', 'Lohogaon', 'Pune', 411047, 'Maharashtra', '9867985600', 705),
(100038, 'Manohar', 'MANIT', 'bhopal', 462003, 'M.P.', '9898765678', 101);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(10) NOT NULL,
  `b_id` int(10) NOT NULL,
  `emp_name` varchar(30) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `emp_add` varchar(50) NOT NULL,
  `emp_city` varchar(30) NOT NULL,
  `emp_state` varchar(30) NOT NULL,
  `emp_contact` varchar(10) NOT NULL,
  `emp_prof` varchar(30) NOT NULL,
  `emp_age` int(2) NOT NULL,
  `emp_salary` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `b_id`, `emp_name`, `gender`, `emp_add`, `emp_city`, `emp_state`, `emp_contact`, `emp_prof`, `emp_age`, `emp_salary`) VALUES
(1001, 101, 'Raju', 'male', 'Mata Mandir', 'Bhopal', 'madhya praddesh', '9938948378', 'Manager', 25, 22000),
(1002, 101, 'Sanju ', 'Male', 'T.T. Nagar chauraha', 'Bhopal', 'madhya praddesh', '9090808071', 'Assistent', 26, 22000),
(1003, 101, 'Ajay', 'Male', 'New Market', 'Bhopal', 'utter pradesh', '8997653428', 'Delivery Boy', 26, 15000),
(1004, 101, 'Sushi Kumar', 'Male', 'Kamlanagar', 'Bhopal', 'utter pradesh', '7498764599', 'Delivery Boy', 30, 15000),
(1005, 102, 'Sumesh Chaudhary', 'Male', '10 No. Market', 'Bhopal', 'M.P.', '9989653487', 'Manager', 32, 18000),
(1006, 102, 'Pratap', 'Male', 'Habibganj', 'Bhopal', 'M.P.', '9398938767', 'Assistent', 28, 18000),
(1007, 102, 'Ram', 'Male', 'New Market', 'Bhopal', 'M.P.', '8318960954', 'Delivery Boy', 23, 15000),
(1008, 102, 'Dinesh Singh', 'Male', 'Moti Masjid', 'Bhopal', 'M.P.', '8754848594', 'Delivery Boy', 27, 15000),
(1009, 103, 'Daamu', 'Male', 'VIP Road', 'Bhopal', 'M.P.', '7865983699', 'Manager', 35, 21000),
(1010, 103, 'Dharmendra Shaikh', 'Male', 'Nehrunagar', 'Bhopal', 'M.P.', '9474727483', 'Assistent', 33, 17000),
(1012, 103, 'Ramsurat kumar', 'Male', 'Kolar Road', 'Bhopal', 'M.P.', '9987546790', 'Delivery Boy', 24, 17000),
(1013, 104, 'Prashant', 'Male', 'Arear colony', 'Bhopal', 'M.P.', '9765645348', 'Manager', 27, 25000),
(1017, 201, 'Akhilesh yadav', 'Male', 'Khajrana', 'Indore', 'M.P.', '9745746547', 'Manager', 40, 33000),
(1018, 201, 'Rahul', 'Male', 'Alwasa', 'Indore', 'M.P.', '7473534868', 'Assistent', 29, 28000),
(1021, 202, 'Surajdas', 'Male', 'Palas', 'Bhopal', 'M.P.', '7653457758', 'Assistent', 30, 34000),
(1022, 201, 'Dhyanchand', 'Male', 'ATWADA', 'Indore', 'M.P.', '7656567456', 'Delivery Boy', 34, 25000),
(1056, 302, 'Deepak Bhardwaj', 'Male', 'Nai Basti', 'Varanasi', 'U.P.', '7654329890', 'Assistent', 30, 33000),
(1057, 302, 'Kamal', 'Male', 'Kachahari Chauraha', 'Varanasi', 'U.P.', '8654328098', 'Delivery Boy', 21, 24000),
(1058, 302, 'Madan', 'Male', 'Bhelupur', 'Varanasi', 'U.P.', '8956464532', 'Manager', 32, 27000),
(1063, 303, 'Virendra Kumar', 'Male', 'Agra University', 'Agra', 'U.P.', '7458547487', 'Manager', 29, 40000),
(1064, 303, 'Rakesh rajput', 'Male', 'Agra Chauk', 'Agra', 'U.P.', '6563457845', 'Assistent', 45, 38000),
(1065, 303, 'Jamal siddaki', 'Male', 'Arela', 'Agra', 'U.P.', '9524753446', 'Delivery Boy', 31, 35000),
(1066, 303, 'Sudhesh', 'Male', 'Baman', 'Agra', 'U.P.', '6745235437', 'Delivery Boy', 34, 36000),
(1067, 401, 'Priyam', 'Male', 'Adarshnagar', 'Lucknow', 'U.P.', '7773763545', 'Manager', 45, 38000),
(1068, 401, 'Taarik patel', 'Male', 'Alambagh', 'Lucknow', 'U.P.', '7858856886', 'Assistent', 40, 40000),
(1069, 401, 'Omprakash jaiswal', 'Male', 'Amausi', 'Lucknow', 'U.P.', '9988776655', 'Delivery Boy', 42, 37000),
(1070, 101, 'anshu', 'Male', 'manit', 'bhopal', 'madhya praddesh', '7798564323', 'Deliver Boy', 22, 20000),
(1072, 501, 'Tiwari lal', 'Male', 'Anjani', 'Vashali', 'Bihar', '9747548494', 'Assistent', 25, 25000),
(1073, 501, 'Ekram raj', 'Male', 'Bishanpur arara', 'Vashali', 'Bihar', '9976495673', 'Delivery Boy', 33, 25000),
(1074, 501, 'Sundardas', 'Male', 'Adalpur', 'Vashali', 'Bihar', '8875745476', 'Manager', 40, 28000),
(1075, 102, 'Patel', 'Male', 'arera colony', 'bhopal', 'madhya praddesh', '25000', 'Assistant', 22, 501),
(1076, 601, 'Nijamuddin', 'Male', 'Abtal', 'Jammu', 'J&K', '9876545399', 'Assistent', 42, 40000),
(1077, 601, 'Sarfraj Yusuf', 'Male', 'Akalpur', 'Jammu', 'J&K', '9887667609', 'Delivery Boy', 33, 33000),
(1078, 601, 'Kamal Khan', 'Male', 'Akhnoor', 'Jammu', 'J&K', '7645879944', 'Delivery Boy', 38, 35000),
(1081, 701, 'Amit Bhagel', 'Male', 'Dadar colony', 'Mumbai', 'Maharashtra', '8877654334', 'Assistent', 55, 45000),
(1082, 701, 'Vivek Jamwal', 'Male', 'Chamabaug', 'Mumbai', 'Maharashtra', '7864112345', 'Assistent', 50, 55000),
(1083, 701, 'Sunny Deol', 'Male', 'Antop Hill', 'Mumbai', 'Maharashtra', '7765432388', 'Delivery Boy', 45, 45000),
(1084, 701, 'Sudhanshu joshi', 'Male', 'Dada colony', 'Danda Mumbai', 'Maharashtra', '8877669944', 'Delivery Boy', 35, 40000),
(1085, 705, 'Girish jayant', 'Male', 'Lohogaon', 'Pune', 'Maharashtra', '8811223388', 'Assistent', 56, 55000),
(1086, 705, 'Pravin Patel', 'Male', 'Lal baug', 'Pune', 'Maharashtra', '9080707645', 'Assistent', 46, 50000),
(1087, 705, 'Dushyan', 'Male', 'Nehrunagar', 'Pune', 'Maharashtra', '9077889956', 'Delivery Boy', 45, 44000),
(1091, 104, 'shukla', 'Male', 'Jasrana', 'Agra', 'utter pradesh', '9867095666', 'assistant', 23, 24000),
(1092, 103, 'Rahman Singh', 'male', 'New Market near police station', 'Bhopal', 'madhya praddesh', '8976567876', 'Delivery Boy', 30, 20000),
(1093, 501, 'Richa Jain', 'Female', 'MP Nagar', 'Bhopal', 'madhya praddesh', '8989787867', 'Manager', 22, 35000),
(1094, 104, 'Sandeep Singh', 'Male', 'Nehru Nagar', 'Bhopal', 'madhya praddesh', '7347859687', 'Delivery Boy', 26, 16000),
(1096, 101, 'ramkumar', 'male', 'h--5 bhopal', 'bhopal', 'madhya praddesh', '9893114371', 'Assistance', 22, 25000);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_no` varchar(10) NOT NULL,
  `sh_id` int(10) NOT NULL,
  `invoice_date` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_no`, `sh_id`, `invoice_date`) VALUES
('IN0001', 1000001, '03-11-2017'),
('IN0002', 1000002, '06-11-2017'),
('IN0003', 1000003, '07-11-2017'),
('IN0004', 1000004, '04-11-2017'),
('IN0005', 1000006, '03-11-2017'),
('IN0006', 1000007, '02-11-2017'),
('IN0007', 1000008, '21-10-2017'),
('IN0008', 1000009, '22-10-2017'),
('IN0009', 1000010, '24-10-2017'),
('IN0010', 1000011, '29-10-2017'),
('IN0011', 1000012, '12-10-2017'),
('IN0012', 1000014, '05-11-2017'),
('IN0013', 1000015, '05-11-2017'),
('IN0014', 1000017, '12-11-2017'),
('IN0015', 1000018, '03-11-2017'),
('IN0016', 1000019, '01-11-2017'),
('IN0017', 1000020, '08-11-2017'),
('IN0018', 1000021, '22-10-2017'),
('IN0019', 1000022, '21-11-2017'),
('IN0020', 1000023, '12-11-2017'),
('IN0021', 1000024, '09-11-2017'),
('IN0022', 1000025, '17-03-2018');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `emp_id` int(10) NOT NULL,
  `emp_prof` varchar(20) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `password` varchar(16) NOT NULL,
  `b_id` int(10) NOT NULL,
  `answer` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`emp_id`, `emp_prof`, `email_id`, `password`, `b_id`, `answer`) VALUES
(1001, 'admin', 'admin@gmail.com', 'admin', 101, '08/08/1995'),
(1002, 'assistant', 'sanju345@gmail.com', '77777777', 101, 'vvic'),
(1003, 'delivery boy', 'ajay000@gmail.com', 'ajay111', 101, '12/09/1993'),
(1004, 'delivery boy', 'sushil12@gmail.com', 'sushil234', 101, 'pradeep'),
(1005, 'manager', 'sumeshchaudhary@gmail.com', '44444444', 102, 'shubham'),
(1006, 'assistant', 'pratapKumar@gmail.com', 'pratap_123', 102, 'manu'),
(1007, 'delivery boy', 'ram22@gmail.com', 'ram00000', 102, 'shubham'),
(1008, 'delivery boy', 'dineshkumar@gmail.com', 'dinesh345', 102, 'prakash'),
(1009, 'manager', 'daamu123@gmail.com', '55555555', 103, '02-08-1992'),
(1010, 'assistant', 'dharmendra@gmail.com', 'dharmendra90', 103, '12-11-1993'),
(1012, 'delivery boy', 'ramsurat@gmail.com', 'ramsurat110', 103, 'ranbhoomi'),
(1013, 'manager', 'prashant12@gmail.com', '123prashant', 104, 'gaban'),
(1017, 'manager', 'akhilesh67@gmail.com', 'akhilesh13', 201, '13-06-1990'),
(1018, 'assistant', 'rahul55@gmail.com', 'rahul098', 201, 'Ramesh'),
(1021, 'assistant', 'surajdas89@gmail.com', 'suraj666', 202, 'titli'),
(1022, 'delivery boy', 'dhyanchad123@gmail.com', 'dhanu1234', 201, 'half girlfriend'),
(1056, 'assistant', 'deepak980@gmail.com', 'depak4546', 302, 'vikas'),
(1057, 'delivery boy', 'kamal333@gmail.com', 'kamal345', 302, 'b s inter college'),
(1058, 'manager', 'madan777@gmail.com', 'madan1267', 302, '03-05-1992'),
(1063, 'manager', 'viru@gmail.com', 'viru1000', 303, '14-06-1990'),
(1064, 'assistant', 'raka51@gmail.com', 'rakesh000', 303, 'tanya'),
(1065, 'delivery boy', 'jamalsiddaki@gmail.com', 'jamal456', 303, 'uday'),
(1066, 'delivery boy', 'sudhesh90@gmail.com', 'sudhesh555', 303, 'rakesh'),
(1067, 'manager', 'priyam100@gmail.com', '1245priyam', 401, 'ram'),
(1068, 'assistant', 'taarikpatel@gmail.com', 'tarik0000', 401, 'sita'),
(1069, 'delivery boy', 'omijaiswal@gmail.com', 'omprakash90', 401, 'gita'),
(1070, 'deliver boy', 'anshu13@gmail.com', 'anshu12345', 101, 'ramayan'),
(1072, 'assistant', 'tiwarilal@gmail.com', 'laltiwari124', 501, 'mahabharata'),
(1073, 'delivery boy', 'ekram@gmail.com', 'ekram333', 501, 'up college'),
(1074, 'manager', 'sundaradas@gmail.com', 'sundar234', 501, 'central school'),
(1075, 'assistant', 'patel100@gmail.com', 'patel56', 102, 'saint marry'),
(1076, 'assistant', 'nijamuddin@gmail.com', 'nijam123', 601, 'b s inter college'),
(1077, 'delivery boy', 'yusuf@gmail.com', 'sarfaraaj23', 601, 'vvic'),
(1078, 'delivery boy', 'kamalkhan134@gmail.com', 'kamal0989', 601, 'nekram'),
(1081, 'assistant', 'bhagel12@gmail.com', 'amil3456', 701, 'anupam'),
(1082, 'assistant', 'vivekjamwal@gmail.com', 'jamwal345', 701, 'saurav'),
(1083, 'delivery boy', 'sunnydeol@gmail.com', 'deol123456', 701, 'priyam'),
(1084, 'delivery boy', 'sudhanshu876@gmail.com', 'joshi456', 701, 'ravi'),
(1085, 'assistant', 'girish00@gmail.com', 'girish789', 705, 'kamal'),
(1086, 'assistant', 'praveenpatel3@gmail.com', 'praveenpatel12', 705, 'aan ka maan'),
(1087, 'delivery boy', 'dushyanta33@gmail.com', 'dushyant9458', 705, 'shantidoot'),
(1091, 'assistant', 'shukla11@gmail.com', 'shukla2323', 104, 'kwins college'),
(1092, 'delivery boy', 'arrahman@gmail.com', 'rahaman4444', 103, 'anudayal public school'),
(1093, 'manager', 'jainricha84@gmail.com', 'jain123456', 501, 'laxmi convent school'),
(1094, 'delivery boy', 'sandeep123@gmail.com', '33333333', 104, 'vidya');

-- --------------------------------------------------------

--
-- Table structure for table `shipments`
--

CREATE TABLE `shipments` (
  `sh_id` int(10) NOT NULL,
  `cons_id` int(10) NOT NULL,
  `cust_id` int(10) NOT NULL,
  `emp_id` int(10) NOT NULL,
  `sh_type` varchar(30) NOT NULL,
  `sh_weight` int(10) NOT NULL,
  `sh_price` int(10) NOT NULL,
  `sh_quantity` int(10) NOT NULL,
  `receiver_name` varchar(30) NOT NULL,
  `receiver_contact` varchar(10) NOT NULL,
  `receiver_add` varchar(50) NOT NULL,
  `receiver_city` varchar(30) NOT NULL,
  `receiver_state` varchar(30) NOT NULL,
  `receiver_pin_code` int(7) NOT NULL,
  `booking_time` varchar(30) NOT NULL,
  `booking_date` varchar(30) NOT NULL,
  `b_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipments`
--

INSERT INTO `shipments` (`sh_id`, `cons_id`, `cust_id`, `emp_id`, `sh_type`, `sh_weight`, `sh_price`, `sh_quantity`, `receiver_name`, `receiver_contact`, `receiver_add`, `receiver_city`, `receiver_state`, `receiver_pin_code`, `booking_time`, `booking_date`, `b_id`) VALUES
(1000001, 10001, 100001, 1001, 'document', 40, 46, 1, 'Ram Manohar', '6798457800', 'Aurangpura B.O', 'Indore', 'M.P.', 453001, '11:00 AM', '03-11-2017', 101),
(1000002, 10001, 100001, 1001, 'document', 50, 60, 1, 'Shaanu', '7765098766', 'Dindayalpur, Varanasi', 'varanasi', 'U.P.', 221007, '11:30 AM', '01-11-2017', 101),
(1000003, 10001, 100001, 1001, 'Document', 100, 92, 2, 'Payal Sharma', '8448907656', 'Agra University', 'Agra', 'U.P.', 282004, '12:30 PM', '07-11-2017', 101),
(1000004, 10001, 100001, 1001, 'Box', 1000, 4000, 2, 'Dayaram', '7689056789', 'Agra H.O', 'Agra', 'U.P.', 282001, '3:00 PM', '04-11-2017', 101),
(1000006, 10002, 100002, 1002, 'Paper Bundle', 2000, 400, 2, 'Vinay Jadeja', '8998567845', 'Lanka Gate BHU', 'varanasi', 'U.P.', 221005, '4:12 PM', '03-11-2017', 101),
(1000007, 10002, 100002, 1002, 'document', 100, 60, 1, 'Sarvesh Yadav', '9456874433', 'Adarsh Nagar', 'Lucknow', 'U.P.', 226005, '5:00 PM', '02-11-2017', 101),
(1000008, 10002, 100002, 1002, 'Medicine Box', 200, 80, 1, 'satyendra Pathak', '8765543213', 'Alipur', 'Ghaziabad', 'U.P.', 245201, '7:00 PM', '21-10-2017', 101),
(1000009, 10003, 100003, 1003, 'document', 50, 46, 1, 'pratap singh', '9987664433', 'Juni', 'Indore', 'M.P.', 452007, '2:00 PM', '22-10-2017', 101),
(1000010, 10004, 100004, 1004, 'document', 90, 150, 1, 'Pratyash Sachan', '7798123456', 'A N L Colony S.O', 'Lucknow', 'U.P.', 226004, '1:30 PM', '24-10-2017', 101),
(1000011, 10004, 100004, 1004, 'clothes', 1000, 250, 4, 'Manmohan', '7766554433', 'Pandeypur', 'varanasi', 'U.P.', 221002, '10:30 PM', '29-10-2017', 101),
(1000012, 10004, 100004, 1004, 'document', 100, 60, 1, 'Laxman', '9988789623', 'Chapaith B.O', 'Vashali', 'Bihar', 844112, '10:51 AM', '05-10-2017', 101),
(1000014, 10004, 100004, 1004, 'Present Box', 700, 200, 1, 'Vimla', '7687908354', 'Indore Cat S.O', 'Indore', 'M.P.', 452013, '11:30 AM', '05-11-2017', 101),
(1000015, 10003, 100003, 1003, 'document', 30, 46, 1, 'Hunny singh', '6798345879', 'Belwar B.O', 'Vashali', 'Bihar', 844111, '2:30 PM', '05-11-2017', 101),
(1000017, 10006, 100006, 1006, 'document', 30, 46, 1, 'rajat chaudhary', '8878900976', 'Dhamarra B.O', 'Bhopal', 'M.P.', 462101, '2:30 PM', '12-11-2017', 102),
(1000018, 10006, 100006, 1006, 'Paper type', 300, 200, 2, 'Naman Lal', '7440987654', 'H.E. Hospital S.O', 'Bhopal', 'M.P.', 462024, '6:00 PM', '03-11-2017', 102),
(1000019, 10007, 100007, 1007, 'Gift type', 200, 150, 1, 'tanveer', '9935789056', 'Antop Hill S.O', 'Mumbai', 'Maharashtra', 400037, '11:44 AM', '01-11-2017', 102),
(1000020, 10007, 100007, 1007, 'document', 50, 60, 1, 'Harsh Maurya', '9098780965', 'Chamarbaug', 'Mumbai', 'Maharashtra', 400012, '3:00 PM', '08-11-2017', 102),
(1000021, 10008, 100008, 1008, 'document', 50, 60, 1, 'Tridev kumar', '7890451134', 'Null Bazar S.O', 'Mumbai', 'Maharashtra', 400003, '12:45 PM', '22-10-2017', 102),
(1000022, 10008, 100009, 1008, 'Present', 200, 100, 1, 'Ravi Raj', '4567432378', 'Adlehar B.O', 'Jammu', 'J&K', 181131, '2:30 PM', '21-11-2017', 102),
(1000023, 10009, 100010, 1010, 'document', 150, 300, 2, 'Rajveer singh', 'Akalpur', '6788554366', 'Jammu', 'J&K', 180002, '11:00 AM', '12-11-2017', 103),
(1000024, 10009, 100012, 1010, 'clothe', 1000, 400, 3, 'Dayashankar prasad', '4567890976', 'Arnia S.O', 'Jammu', 'J&K', 181131, '12:01 AM', '09-11-2017', 103),
(1000025, 10001, 100001, 1001, 'document', 100, 100, 2, 'pradeep', '9098786788', 'sa 19/137 dindayalpur', 'varanasi', 'utter pradesh', 221007, '5:23PM', '17-03-2018', 101),
(1000027, 10001, 100038, 1002, 'Gift', 100, 100, 1, 'Anchal', '7886543456', 'IIM Indore', 'Indore', 'madhya praddesh', 452003, '6:00 PM', '09-11-2018', 101);

-- --------------------------------------------------------

--
-- Table structure for table `shipment_status`
--

CREATE TABLE `shipment_status` (
  `sh_id` int(10) NOT NULL,
  `current_status` varchar(30) NOT NULL,
  `Date` varchar(15) NOT NULL,
  `Time` varchar(15) NOT NULL,
  `emp_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipment_status`
--

INSERT INTO `shipment_status` (`sh_id`, `current_status`, `Date`, `Time`, `emp_id`) VALUES
(1000001, 'booked', '03-11-2017', '11:00 AM', 1001),
(1000002, 'booked', '01-11-2017', '11:30 AM', 1001),
(1000003, 'booked', '07-11-2017', '12:30 PM', 1001),
(1000004, 'booked', '04-11-2017', '3:00 PM', 1001),
(1000006, 'dispatched', '03-11-2017', '4:12 PM', 1002),
(1000007, 'booked', '02-11-2017', '5:00 PM', 1002),
(1000008, 'booked', '21-10-2017', '7:00 PM', 1002),
(1000009, 'booked', '22-10-2017', '2:00 PM', 1003),
(1000010, 'dispatched', '24-10-2017', '1:30 PM', 1004),
(1000011, 'dispatched', '29-10-2017', '10:30 PM', 1004),
(1000012, 'booked', '12-10-2017', '10:51 AM', 1004),
(1000014, 'booked', '05-11-2017', '11:30 AM', 1004),
(1000015, 'dispatched', '05-11-2017', '2:30 PM', 1003),
(1000017, 'dispatched', '12-11-2017', '2:30 PM', 1006),
(1000018, 'booked', '03-11-2017', '6:00 PM', 1006),
(1000019, 'booked', '01-11-2017', '11:44 AM', 1007),
(1000020, 'dispatched', '08-11-2017', '3:00 PM', 1007),
(1000021, 'dispatched', '22-10-2017', '12:45 PM', 1008),
(1000022, 'booked', '21-11-2017', '2:30 PM', 1008),
(1000023, 'booked', '12-11-2017', '11:00 AM', 1010),
(1000024, 'dispatched', '09-11-2017', '12:01 AM', 1010),
(1000025, 'booked', '17-03-2018', '5:23 PM', 1001),
(1000002, 'Shipment Dispatched By', '02--11-2017', '8:00PM', 1002),
(1000002, 'Shipment Recieved By', '03-11-2017', '1:30PM', 1069),
(1000001, 'Shipment Recieved By', '04-11-2017', '5:00 PM', 1022),
(1000001, 'Shipment is out for delivery', '05-11-2017', '10:00 AM', 1022),
(1000001, 'Delivered', '05-11-2017', '12:01 PM', 1022),
(1000003, 'Shipment Dispatched By', '07-11-2017', '4:30 PM', 1002),
(1000003, 'Shipment Recieved By', '08-11-2017', '6:00 PM', 1063),
(1000003, 'Shipment is out for delivery', '09-11-2017', '10:00 AM', 1065),
(1000003, 'Delivered', '09-11-2017', '12:30 PM', 1065),
(1000001, 'Shipment is out for delivery', '09-11-2017', '10:00 AM', 1065),
(1000012, 'Shipment Recieved By', '06-11-2017', '5:30 PM', 1056),
(1000012, 'Shipment Dispatched By', '07-11-2017', '10:30 AM', 1057),
(1000012, 'Shipment Recieved By', '08-11-2017', '4:00 PM', 1073),
(1000012, 'Shipment is out for delivery', '10-11-2017', '11:00 AM', 1072),
(1000012, 'Delivered', '10-11-2017', '1:00 PM', 1073);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`b_id`) USING BTREE;

--
-- Indexes for table `courier`
--
ALTER TABLE `courier`
  ADD PRIMARY KEY (`cons_id`),
  ADD KEY `b_id` (`b_id`);

--
-- Indexes for table `courier_status`
--
ALTER TABLE `courier_status`
  ADD KEY `cons_id` (`cons_id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`),
  ADD KEY `b_id` (`b_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`),
  ADD KEY `b_id` (`b_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_no`),
  ADD KEY `sh_id` (`sh_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`emp_id`),
  ADD UNIQUE KEY `password` (`password`),
  ADD UNIQUE KEY `emp_id` (`emp_id`),
  ADD UNIQUE KEY `email_id` (`email_id`);

--
-- Indexes for table `shipments`
--
ALTER TABLE `shipments`
  ADD PRIMARY KEY (`sh_id`),
  ADD KEY `cons_id` (`cons_id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `shipment_status`
--
ALTER TABLE `shipment_status`
  ADD KEY `sh_id` (`sh_id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courier`
--
ALTER TABLE `courier`
  ADD CONSTRAINT `courier_ibfk_1` FOREIGN KEY (`b_id`) REFERENCES `branch` (`b_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `courier_status`
--
ALTER TABLE `courier_status`
  ADD CONSTRAINT `courier_status_ibfk_1` FOREIGN KEY (`cons_id`) REFERENCES `courier` (`cons_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `courier_status_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`b_id`) REFERENCES `branch` (`b_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`b_id`) REFERENCES `branch` (`b_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`sh_id`) REFERENCES `shipments` (`sh_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shipment_status`
--
ALTER TABLE `shipment_status`
  ADD CONSTRAINT `shipment_status_ibfk_1` FOREIGN KEY (`sh_id`) REFERENCES `shipments` (`sh_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shipment_status_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
