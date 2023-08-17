-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2023 at 01:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `authorized_persons`
--

CREATE TABLE `authorized_persons` (
  `id` int(11) NOT NULL,
  `customer_account_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `father_name` varchar(100) DEFAULT NULL,
  `mother_name` varchar(100) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `sex` enum('Male','Female') DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `e_tin` varchar(20) DEFAULT NULL,
  `image_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `authorized_persons_contact`
--

CREATE TABLE `authorized_persons_contact` (
  `a_p_contact_id` int(11) NOT NULL,
  `a_p_id` int(11) NOT NULL,
  `present_address` varchar(200) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `permanent_address` varchar(200) DEFAULT NULL,
  `permanent_telephone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bo_applicant`
--

CREATE TABLE `bo_applicant` (
  `applicant_id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `incase_of_individual` varchar(50) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `father_husband_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `passport_number` varchar(50) DEFAULT NULL,
  `issue_place` varchar(255) DEFAULT NULL,
  `issue_date` date DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `residency` varchar(50) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bo_applicant`
--

INSERT INTO `bo_applicant` (`applicant_id`, `full_name`, `title`, `contact_person`, `incase_of_individual`, `occupation`, `father_husband_name`, `mother_name`, `passport_number`, `issue_place`, `issue_date`, `expiry_date`, `date_of_birth`, `residency`, `nationality`) VALUES
(1, 'Mohammad Nazrul Islam', 'mr', '', 'Male', 'Business', 'MD Abdul Kuddus', 'Arifa Khatun', '', '', '0000-00-00', '0000-00-00', '1973-04-18', 'resident', 'BAN'),
(2, 'Aruba Salim', '', '', 'Female', 'House Wife', 'Mohammad Salim', 'Farzana Parveen', '', '', '0000-00-00', '0000-00-00', '0000-00-00', 'resident', 'BAN'),
(3, 'G.M. Salman Tanvir', 'mr', '', 'Male', 'Service Holder', 'Gazi Abdul Mannan', 'Nazma Begum', '', '', '0000-00-00', '0000-00-00', '0000-00-00', 'resident', 'BAN'),
(4, 'MD Hossain Ahmed Shamim', 'NA', '', 'Male', 'Service Holder', 'MD Shahidul Islam', 'Josna Begum', '', '', '0000-00-00', '0000-00-00', '0000-00-00', 'resident', 'BAN'),
(5, 'Antu Sheel', 'mr', '', 'Male', 'Service Holder', 'Mintu Shil', 'Popy Shil ', '', '', '0000-00-00', '0000-00-00', '0000-00-00', 'resident', 'BAN'),
(6, 'AHM Aminul Islam', 'NA', '', 'Male', 'Service Holder', 'Abdul Kuddus Bhuiyan', 'Shamsunnar Begum', '', '', '0000-00-00', '0000-00-00', '0000-00-00', 'resident', 'BAN'),
(7, 'MD Towfiq Ahmed Sakib', 'mr', '', 'Male', 'Service Holder', 'MD Abdul Mutalab', 'Shajada Begum', '', '', '0000-00-00', '0000-00-00', '0000-00-00', 'resident', 'BAN'),
(8, 'MD Jamirul Islam', 'mr', '', 'Male', 'Service Holder', 'MD Alam Islam', 'Jamena Begum ', '', '', '0000-00-00', '0000-00-00', '0000-00-00', 'resident', 'BAN'),
(9, 'Anirban Sarkar', 'mrs', '', 'Female', 'Service Holder', 'Manindra Nath Sarkar', 'Suchitra Roy', '', '', '0000-00-00', '0000-00-00', '0000-00-00', 'resident', 'BAN'),
(10, 'Towfiqur Rahman Toki', 'mrs', '', 'Female', 'Service Holder', 'Mizanur Rahman', 'Dilara Begum', '', '', '0000-00-00', '0000-00-00', '0000-00-00', 'resident', 'BAN'),
(11, 'Irine Afroza Aurpa', 'mrs', '', 'Female', 'Service Holder', 'Hazi MD Amir Hossain Talukder', 'Sonia Akter', '', '', '0000-00-00', '0000-00-00', '0000-00-00', 'resident', 'BAN'),
(12, 'MD Sohrab Hossain', 'mr', '', 'Female', 'Service Holder', 'MD Abdul Alim', 'Saira Khatun', '', '', '0000-00-00', '0000-00-00', '0000-00-00', 'resident', 'BAN'),
(13, 'Rafia Akter', 'mrs', '', 'Female', 'Service Holder', 'A.K.M. Sabur', 'Asma Khanam', '', '', '0000-00-00', '0000-00-00', '0000-00-00', 'resident', 'BAN');

-- --------------------------------------------------------

--
-- Table structure for table `bo_bankdetails`
--

CREATE TABLE `bo_bankdetails` (
  `bank_id` int(11) NOT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `branch_name` varchar(255) DEFAULT NULL,
  `account_number` varchar(50) DEFAULT NULL,
  `routing_number` varchar(50) DEFAULT NULL,
  `electronic_dividend_credit` varchar(50) DEFAULT NULL,
  `tax_exemption` varchar(50) DEFAULT NULL,
  `tin_tax_number` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `bo_bankdetails`(`bank_id`, `bank_name`, `branch_name`, `account_number`, `routing_number`, `electronic_dividend_credit`, `tax_exemption`, `tin_tax_number`) VALUES 
(1,'','','','','','',''),
(2,'','','','','','',''),
(3,'','','','','','',''),
(4,'','','','','','',''),
(5,'','','','','','',''),
(6,'','','','','','',''),
(7,'','','','','','',''),
(8,'','','','','','',''),
(9,'','','','','','',''),
(10,'','','','','','',''),
(11,'','','','','','',''),
(12,'','','','','','',''),
(13,'','','','','','','');
-- --------------------------------------------------------

--
-- Table structure for table `bo_boform`
--

CREATE TABLE `bo_boform` (
  `form_id` int(11) NOT NULL,
  `application_number` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `bo_category` varchar(255) DEFAULT NULL,
  `bo_type` varchar(255) DEFAULT NULL,
  `participant_id` varchar(255) DEFAULT NULL,
  `bo_id` varchar(255) DEFAULT NULL,
  `account_opened` date DEFAULT NULL,
  `reference_number` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `date_of_registration` date DEFAULT NULL,
  `registration_number` varchar(255) DEFAULT NULL,
  `existing_depository` varchar(50) DEFAULT NULL,
  `depository_account_code` varchar(255) DEFAULT NULL,
  `contact_id` int(11) DEFAULT NULL,
  `applicant_id` int(11) DEFAULT NULL,
  `bank_id` int(11) DEFAULT NULL,
  `cycle_id` int(11) DEFAULT NULL,
  `customer_account_id` int(11) DEFAULT NULL,
  `form_completed` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bo_boform`
--

INSERT INTO `bo_boform` (`form_id`, `application_number`, `date`, `bo_category`, `bo_type`, `participant_id`, `bo_id`, `account_opened`, `reference_number`, `company_name`, `date_of_registration`, `registration_number`, `existing_depository`, `depository_account_code`, `contact_id`, `applicant_id`, `bank_id`, `cycle_id`, `customer_account_id`, `form_completed`) VALUES
(1, '', '0000-00-00', 'Regular', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', 1, 1, 1, 1, 1, 1),
(2, '', '0000-00-00', 'Regular', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', 2, 2, 2, 2, 2, 1),
(3, '', '0000-00-00', 'Regular', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', 3, 3, 3, 3, 3, 1),
(4, '', '0000-00-00', 'Regular', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', 4, 4, 4, 4, 4, 1),
(5, '', '0000-00-00', 'Regular', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', 5, 5, 5, 5, 5, 1),
(6, '', '0000-00-00', 'Regular', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', 6, 6, 6, 6, 6, 1),
(7, '', '0000-00-00', 'Regular', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', 7, 7, 7, 7, 7, 1),
(8, '', '0000-00-00', 'Regular', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', 8, 8, 8, 8, 8, 1),
(9, '', '0000-00-00', 'Regular', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', 9, 9, 9, 9, 9, 1),
(10, '', '0000-00-00', 'Regular', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', 10, 10, 10, 10, 10, 1),
(11, '', '0000-00-00', 'Regular', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', 11, 11, 11, 11, 11, 1),
(12, '', '0000-00-00', 'Regular', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', 12, 12, 12, 12, 12, 1),
(13, '', '0000-00-00', 'Regular', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', 13, 13, 13, 13, 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bo_contactdetails`
--

CREATE TABLE `bo_contactdetails` (
  `contact_id` int(11) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `post_code` varchar(50) DEFAULT NULL,
  `state_division` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `mobile_phone` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bo_contactdetails`
--

INSERT INTO `bo_contactdetails` (`contact_id`, `address`, `city`, `post_code`, `state_division`, `country`, `telephone`, `mobile_phone`, `fax`, `email`) VALUES
(1, 'HALDI ARABIYAN HOUSE,ZAKIR HOSSAIN ROAD,KHULSHI,CTG', 'CTG', '4000', 'CTG', 'Bangladesh', '', '01735469857', '', 'nazrulislam@gmail.com'),
(2, '334/5, AHMED NAGAR(NORTH) P.S- MIRPUR MODEL, DHAKA 1216', 'Dhaka', '1216', 'Dhaka', 'Bangladesh', '', '', '', 'arubasalim@gmail.com'),
(3, 'HOLDING-71, SYEDA NIBAS-44,SYLHET SADAR', 'Sylhet', '3100', 'Sylhet', 'Bangladesh', '', '', '', 'salmantanvir@gmail.com'),
(4, 'FLAT-5/B,BLOCK-3,SHELTECH GRAND PALACE,58,59/A, DINNONATH SEN ROAD, GENDARIA, DHAKA-1204', 'Dhaka', '1204', 'Dhaka', 'Bangladesh', '', '', '', 'hossainahmed@gmail.com'),
(5, 'LUCKY MANSION(5TH FLOOR), GOSHAILDANGA KALI BARI, 36 NO WARD,DOUBLE MOURING', 'CTG', '1041', 'CTG', 'Bangladesh', '', '', '', 'antusheel@gmail.com'),
(6, '31,Topkhana Road,Eastern Castle,H-2/304,Dhaka', 'Dhaka', '1000', 'Dhaka', 'Bangladesh', '', '', '', 'aminulislam@gmail.com'),
(7, 'KAFCO HOUSING COLONY,UTTAR BANDAR,ANOWARA,CTG', 'CTG', '4376', 'CTG', 'Bangladesh', '', '', '', 'towfiqahmed@gmail.com'),
(8, 'WEST SHEWRAPARA MIRPUR', 'Dhaka', '1216', 'Dhaka', 'Bangladesh', '', '', '', 'jamirulislam@gmail.com'),
(9, 'HOLDING NO-13/A, BARIK BUILDING, MAYOR GOLI, SHOLOSHAHAR 2 NO. GATE, KULSHI, CHATTOGRAM.', 'CTG', '4209', 'CTG', 'Bangladesh', '', '', '', 'anirbansarkar@gmail.com'),
(10, 'HOUSE-11, ROAD-07, CHAD UDDAN, MOHAMMADPUR, DHAKA-1207', 'Bhola', '8340', 'Bhola', 'Bangladesh', '', '', '', 'towfiqurrahman@gmail.com'),
(11, 'TALUKDER BARI, HAT VOGDIA, VOGDIA-1530, LOUHAJANG, MUNSHIGANJ.', 'Munshiganj', '1530', 'Munshiganj', 'Bangladesh', '', '', '', 'irineafroza@gmail.com'),
(12, 'Gorpara, Lakshmanpur-7430, Sharsha, Jashore', 'Jessore', '7430', 'Jessore', 'Bangladesh', '', '', '', 'sohrabhossain@gmail.com'),
(13, 'MASRONG, RAYERHAT-8530, BANARI PARA, BARISAL', 'Barisal', '8530', 'Barisal', 'Bangladesh', '', '', '', 'rafiaakter@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `bo_introducer`
--

CREATE TABLE `bo_introducer` (
  `id` int(11) NOT NULL,
  `form_id` int(11) DEFAULT NULL,
  `introducer_id` varchar(255) DEFAULT NULL,
  `introducer_name` varchar(255) DEFAULT NULL,
  `introducer_number` varchar(255) DEFAULT NULL,
  `introducer_email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bo_introducer`
--

INSERT INTO `bo_introducer` (`id`, `form_id`, `introducer_id`, `introducer_name`, `introducer_number`, `introducer_email`) VALUES
(1, 1, '1923654', 'Mohammad Jashed Alam', '01732645987', 'jashedalam@gmail.com'),
(2, 2, '2009680', 'Md. Mosarraf Hossain', '01700000000', 'mosarrafhossain@gmail.com'),
(3, 3, '2430125', 'Uzzal Kumar Roy', '01823654759', 'uzzalkumar@gmail.com'),
(4, 4, '1406320', 'MD Tariqul Alam', '01756234125', ''),
(5, 5, '2109780', 'Mohammad Shamim Parvez', '01356247856', 'shamimparvez@gmail.com'),
(6, 6, '1903577', 'S.M. Tanveer Hasan', '01623547852', ''),
(7, 7, '2303912', 'Mohammad Nabi Hossain', '01723542685', ''),
(8, 8, '1206283', 'Adib Islam Khan', '01623547895', ''),
(9, 9, '2642035', 'Pritom Roy', '01423546895', 'pritomroy@gmail.com'),
(10, 10, '2111794', 'MD Fahim Al Rashid', '01300000000', 'fahimal@gmail.com'),
(11, 11, '2106766', 'MD Mehdi Hasan', '01756234125', 'mehdihasan@gmail.com'),
(13, 13, '2106766', 'MD Mehdi Hasan', '01756234125', 'mehdihasan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `bo_photo_sig`
--

CREATE TABLE `bo_photo_sig` (
  `id` int(11) NOT NULL,
  `form_id` int(11) DEFAULT NULL,
  `applicant1_photo` varchar(255) DEFAULT NULL,
  `applicant1_sign` varchar(255) DEFAULT NULL,
  `applicant2_photo` varchar(255) DEFAULT NULL,
  `applicant2_sig` varchar(255) DEFAULT NULL,
  `auth_signatory_photo` varchar(255) DEFAULT NULL,
  `auth_signatory_sig` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bo_statementcycle`
--

CREATE TABLE `bo_statementcycle` (
  `cycle_id` int(11) NOT NULL,
  `statement_cycle_code` varchar(50) DEFAULT NULL,
  `other_statement_cycle_code` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `bo_statementcycle`(`cycle_id`, `statement_cycle_code`, `other_statement_cycle_code`) VALUES
('1','',''),
('2','',''),
('3','',''),
('4','',''),
('5','',''),
('6','',''),
('7','',''),
('8','',''),
('9','',''),
('10','',''),
('11','',''),
('12','',''),
('13','','');

-- --------------------------------------------------------

--
-- Table structure for table `cle_application`
--

CREATE TABLE `cle_application` (
  `id` int(11) NOT NULL,
  `exchanges` varchar(255) DEFAULT NULL,
  `dse_trading_id` varchar(50) DEFAULT NULL,
  `cse_trading_id` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_accounts`
--

CREATE TABLE `customer_accounts` (
  `id` int(11) NOT NULL,
  `client_code` varchar(10) DEFAULT NULL,
  `link_code` varchar(10) DEFAULT NULL,
  `account_type` enum('Cash','Margin') NOT NULL,
  `name_choice` varchar(255) DEFAULT NULL,
  `name_company` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `branch_name` varchar(255) DEFAULT NULL,
  `account_number` varchar(255) DEFAULT NULL,
  `routing_number` varchar(255) DEFAULT NULL,
  `user_id` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_accounts`
--

INSERT INTO `customer_accounts` (`id`, `client_code`, `link_code`, `account_type`, `name_choice`, `name_company`, `bank_name`, `branch_name`, `account_number`, `routing_number`, `user_id`) VALUES
(1, '', '', 'Cash', 'no', '', '', '', '', '', '2'),
(2, '', '', 'Cash', 'no', '', '', '', '', '', '3'),
(3, '', '', 'Cash', 'no', '', '', '', '', '', '4'),
(4, '', '', 'Cash', 'no', '', '', '', '', '', '5'),
(5, '', '', 'Cash', 'no', '', '', '', '', '', '6'),
(6, '', '', 'Cash', 'no', '', '', '', '', '', '7'),
(7, '', '', 'Cash', 'no', '', '', '', '', '', '8'),
(8, '', '', 'Cash', 'no', '', '', '', '', '', '9'),
(9, '', '', 'Cash', 'no', '', '', '', '', '', '10'),
(10, '', '', 'Cash', 'no', '', '', '', '', '', '11'),
(11, '', '', 'Cash', 'no', '', '', '', '', '', '12'),
(12, '', '', 'Cash', 'no', '', '', '', '', '', '13'),
(13, '', '', 'Cash', 'no', '', '', '', '', '', '14');

-- --------------------------------------------------------

--
-- Table structure for table `f_a_h`
--

CREATE TABLE `f_a_h` (
  `id` int(11) NOT NULL,
  `customer_account_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `father_name` varchar(100) DEFAULT NULL,
  `mother_name` varchar(100) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `sex` enum('Male','Female') DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `e_tin` varchar(20) DEFAULT NULL,
  `image_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `f_a_h`
--

INSERT INTO `f_a_h` (`id`, `customer_account_id`, `name`, `father_name`, `mother_name`, `date_of_birth`, `sex`, `nationality`, `occupation`, `e_tin`, `image_link`) VALUES
(1, 1, 'Mohammad Nazrul Islam', 'MD Abdul Kuddus', 'Arifa Khatun', '1973-04-18', 'Male', 'BAN', 'Business', '452315203980', ''),
(2, 2, 'Aruba Salim', 'Mohammad Salim', 'Farzana Parveen', '1988-06-27', 'Female', 'BAN', 'House Wife', '', ''),
(3, 3, 'G.M. Salman Tanvir', 'Gazi Abdul Mannan', 'Nazma Begum', '0000-00-00', 'Male', 'BAN', 'Service Holder', '', ''),
(4, 4, 'MD Hossain Ahmed Shamim', 'MD. Shahidul Islam', 'Josna Begum', '0000-00-00', 'Male', 'BAN', 'Service Holder', '', ''),
(5, 5, 'Antu Sheel', 'Mintu Shil', 'Popy Shil', '0000-00-00', 'Male', 'BAN', 'Service Holder', '', ''),
(6, 6, 'AHM Aminul Islam', 'Abdul Kuddus Bhuiyan', 'Shamsunnahar Begum', '0000-00-00', 'Male', 'BAN', 'Service Holder', '', ''),
(7, 7, 'MD Towfiq Ahmed Sakib', 'MD Abdul Mutalab', 'Shajada Begum', '0000-00-00', 'Male', 'BAN', 'Service Holder', '', ''),
(8, 8, 'MD Jamirul Islam', 'MD Alam Islam', 'Jamena Begum', '0000-00-00', 'Male', 'BAN', 'Service Holder', '', ''),
(9, 9, 'Anirban Sarkar', 'Manindra Nath Sarkar', 'Suchitra Roy', '0000-00-00', 'Female', 'BAN', 'Service Holder', '', ''),
(10, 10, 'Towfiqur Rahman Toki', 'Mizanur Rahman', 'Dilara Begum', '0000-00-00', 'Female', 'BAN', 'Service Holder', '', ''),
(11, 11, 'Irine Afroza Aurpa', 'Hazi MD Amir Hossain Talukder', 'Sonia Akter', '0000-00-00', 'Female', 'BAN', 'Service Holder', '', ''),
(12, 12, 'MD Sohrab Hossain', 'MD Abdul Alim', 'Saira Khatun', '0000-00-00', 'Female', 'BAN', 'Service Holder', '', ''),
(13, 13, 'Rafia Akter', 'A.K.M. Sabur', 'Asma Khanam', '0000-00-00', 'Female', 'BAN', 'Service Holder', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `f_a_h_contact`
--

CREATE TABLE `f_a_h_contact` (
  `f_a_h_contact_id` int(11) NOT NULL,
  `f_a_h_id` int(11) NOT NULL,
  `present_address` varchar(200) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `permanent_address` varchar(200) DEFAULT NULL,
  `permanent_telephone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `f_a_h_contact`
--

INSERT INTO `f_a_h_contact` (`f_a_h_contact_id`, `f_a_h_id`, `present_address`, `mobile`, `telephone`, `permanent_address`, `permanent_telephone`, `email`) VALUES
(1, 1, 'HALDI ARABIYAN HOUSE,ZAKIR HOSSAIN ROAD,KHULSHI,CTG', '01735469857', '3698542', 'HALDI ARABIYAN HOUSE,ZAKIR HOSSAIN ROAD,KHULSHI,CTG', '3698542', 'nazrulislam@gmail.com'),
(2, 2, '334/5, AHMED NAGAR(NORTH) P.S- MIRPUR MODEL, DHAKA 1216', '', '', 'NAYATOLA, ATIAR COLONY, DIB ROAD, SAIDPUR, NILPHAMARI \n', '', 'arubasalim@gmail.com'),
(3, 3, 'HOLDING-71, SYEDA NIBAS-44,SYLHET SADAR', '', '', '15 ROY PARA CROSS ROAD,KHULNA', '', 'salmantanvir@gmail.com'),
(4, 4, 'FLAT-5/B,BLOCK-3,SHELTECH GRAND PALACE,58,59/A, DINNONATH SEN ROAD, GENDARIA, DHAKA-1204', '', '', 'VILL:GULPOKORIA, P.O:SHAHPUR, P.S:NABINAGAR, DIST:BRAHMANBARIA', '', 'hossainahmed@gmail.com'),
(5, 5, 'LUCKY MANSION(5TH FLOOR), GOSHAILDANGA KALI BARI, 36 NO WARD,DOUBLE MOURING,\r\n', '', '', 'GURUDAS SHIL\'S BARI, VILL: DHARMAPUR, P.O - DHARMAPUR\r\n', '', 'antusheel@gmail.com'),
(6, 6, '31,Topkhana Road,Eastern Castle,H-2/304,Dhaka', '', '', '31,Topkhana Road,Eastern Castle,H-2/304,Dhaka', '', 'aminulislam@gmail.com'),
(7, 7, 'KAFCO HOUSING COLONY,UTTAR BANDAR,ANOWARA,CTG', '', '', '171,DHULPARA,ANAYETPUR, P.O: BAU MADRASHA,TANGAIL', '', 'towfiqahmed@gmail.com'),
(8, 8, 'WEST SHEWRAPARA MIRPUR', '', '', 'WEST SHEWRAPARA MIRPUR', '', 'jamirulislam@gmail.com'),
(9, 9, 'HOLDING NO-13/A, BARIK BUILDING, MAYOR GOLI, SHOLOSHAHAR 2 NO. GATE, KULSHI, CHATTOGRAM.', '', '', 'HOLDING NO-13, A, BARIK BUILDING, MAYOR GOLI, SHOLOSHAHAR 2 NO. GATE, KULSHI, CHATTOGRAM.', '', 'anirbansarkar@gmail.com'),
(10, 10, 'HOUSE-11, ROAD-07, CHAD UDDAN, MOHAMMADPUR, DHAKA-1207', '', '', 'MIZANUR RAHMAN SIRS HOUSE, EASTERN PARA, ZINNAGOR, CHAR FASION, BHOLA', '', 'towfiqurrahman@gmail.com'),
(11, 11, 'TALUKDER BARI, HAT VOGDIA, VOGDIA-1530, LOUHAJANG, MUNSHIGANJ.', '', '', 'TALUKDER BARI, HAT VOGDIA, VOGDIA-1530, LOUHAJANG, MUNSHIGANJ.', '', 'irineafroza@gmail.com'),
(12, 12, 'Gorpara, Lakshmanpur-7430, Sharsha, Jashore', '', '', 'Gorpara, Lakshmanpur-7430, Sharsha, Jashore', '', 'sohrabhossain@gmail.com'),
(13, 13, 'MASRONG, RAYERHAT-8530, BANARI PARA, BARISAL', '', '', 'MASRONG, RAYERHAT-8530, BANARI PARA, BARISAL', '', 'rafiaakter@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `guardian_contact`
--

CREATE TABLE `guardian_contact` (
  `guardian_contact_id` int(11) NOT NULL,
  `guardian_id` int(11) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `post_code` varchar(20) DEFAULT NULL,
  `state_division` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `mobile_phone` varchar(20) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `j_a_h`
--

CREATE TABLE `j_a_h` (
  `id` int(11) NOT NULL,
  `customer_account_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `father_name` varchar(100) DEFAULT NULL,
  `mother_name` varchar(100) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `sex` enum('Male','Female') DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `e_tin` varchar(20) DEFAULT NULL,
  `image_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `j_a_h_contact`
--

CREATE TABLE `j_a_h_contact` (
  `j_a_h_contact_id` int(11) NOT NULL,
  `j_a_h_id` int(11) NOT NULL,
  `present_address` varchar(200) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `permanent_address` varchar(200) DEFAULT NULL,
  `permanent_telephone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kyc_form`
--

CREATE TABLE `kyc_form` (
  `id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `bo_id` varchar(30) DEFAULT NULL,
  `internal_reference` varchar(50) DEFAULT NULL,
  `account_name` varchar(100) DEFAULT NULL,
  `opening_officer` varchar(30) DEFAULT NULL,
  `source_of_fund` text DEFAULT NULL,
  `beneficial_owner` text DEFAULT NULL,
  `passport_number` varchar(20) DEFAULT NULL,
  `passport_photocopy` enum('Yes','No') DEFAULT NULL,
  `voter_id_card_number` varchar(20) DEFAULT NULL,
  `voter_id_photocopy` enum('Yes','No') DEFAULT NULL,
  `national_id_number` varchar(20) DEFAULT NULL,
  `national_id_photocopy` enum('Yes','No') DEFAULT NULL,
  `tin_number` varchar(20) DEFAULT NULL,
  `tin_photocopy` enum('Yes','No') DEFAULT NULL,
  `var_reg_number` varchar(20) DEFAULT NULL,
  `var_reg_photocopy` enum('Yes','No') DEFAULT NULL,
  `driving_license_number` varchar(20) DEFAULT NULL,
  `driving_license_photocopy` enum('Yes','No') DEFAULT NULL,
  `customer_occupation` text DEFAULT NULL,
  `comments` text DEFAULT NULL,
  `officer_signature` varchar(255) DEFAULT NULL,
  `manager_id` varchar(100) DEFAULT NULL,
  `verified_id` varchar(100) DEFAULT NULL,
  `branch_name` varchar(50) DEFAULT NULL,
  `submission_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kyc_form`
--

INSERT INTO `kyc_form` (`id`, `form_id`, `bo_id`, `internal_reference`, `account_name`, `opening_officer`, `source_of_fund`, `beneficial_owner`, `passport_number`, `passport_photocopy`, `voter_id_card_number`, `voter_id_photocopy`, `national_id_number`, `national_id_photocopy`, `tin_number`, `tin_photocopy`, `var_reg_number`, `var_reg_photocopy`, `driving_license_number`, `driving_license_photocopy`, `customer_occupation`, `comments`, `officer_signature`, `manager_id`, `verified_id`, `branch_name`, `submission_date`) VALUES
(1, 1, '0304986119939807', '', 'Mohammad Nazrul Islam', 'Mr. Shams', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'https://i.ibb.co/fXK9kRW/c8f4f8266e4c.png', '123', '', 'Dhanmondi', '2023-08-15 07:27:24'),
(2, 2, '0461509154242666', '', 'Aruba Salim', 'Mr. Shams', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'https://i.ibb.co/fXK9kRW/c8f4f8266e4c.png', '123', '', 'Dhanmondi', '2023-08-15 07:28:24'),
(3, 3, '0639762088958203', '', 'G.M. Salman Tanvir', 'Ms. Shilpa', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'https://i.ibb.co/fXK9kRW/c8f4f8266e4c.png', '298', '', 'Dhanmondi', '2023-08-15 07:29:18'),
(4, 4, '0661578355812796', '', 'MD Hossain Ahmed Shamim', 'Mr. David', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'https://i.ibb.co/fXK9kRW/c8f4f8266e4c.png', '176', '', 'Banani', '2023-08-15 07:29:54'),
(5, 5, '2805233791388979', '', 'Antu Sheel', 'Mr. David', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'https://i.ibb.co/fXK9kRW/c8f4f8266e4c.png', '176', '', 'Banani', '2023-08-15 07:30:10'),
(6, 6, '5622546574110792', '', 'AHM Aminul Islam', 'Mr. David', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'https://i.ibb.co/fXK9kRW/c8f4f8266e4c.png', '176', '', 'Banani', '2023-08-15 07:30:24'),
(7, 7, '4024608399776790', '', 'MD Towfiq Ahmed Sakib', 'Mr. Kamal', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'https://i.ibb.co/fXK9kRW/c8f4f8266e4c.png', '145', '', 'Banani', '2023-08-15 07:30:48'),
(8, 8, '0682937688193275', '', 'MD Jamirul Islam', 'Ms. Akter ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '196', '', 'Banani', '2023-08-15 07:31:03'),
(9, 9, '6995100731271228', '', 'Anirban Sarkar', 'Ms. Aurpa', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '235', '', 'CTG', '2023-08-15 07:31:24'),
(10, 10, '0589772405733875', '', 'Towfiqur Rahman Toki', 'Mr. Akram', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'https://i.ibb.co/fXK9kRW/c8f4f8266e4c.png', '222', '', 'Sylhet', '2023-08-15 07:32:03'),
(11, 11, '1597579460096231', '', 'Irine Afroza Aurpa', 'Mr. Akram', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'https://i.ibb.co/fXK9kRW/c8f4f8266e4c.png', '222', '', 'Sylhet', '2023-08-15 07:32:27'),
(12, 12, '7489952020962231', '', 'MD Sohrab Hossain', 'Mr. Mattu', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'https://i.ibb.co/fXK9kRW/c8f4f8266e4c.png', '132', '', 'Sylhet', '2023-08-15 07:33:17'),
(13, 13, '1474082350053406', '', 'Rafia Akter', 'Mr. Mattu', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'https://i.ibb.co/fXK9kRW/c8f4f8266e4c.png', '132', '', 'Sylhet', '2023-08-15 07:33:35');

-- --------------------------------------------------------

--
-- Table structure for table `nominee_contact`
--

CREATE TABLE `nominee_contact` (
  `nominee_contact_id` int(11) NOT NULL,
  `nominee_id` int(11) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `post_code` varchar(20) DEFAULT NULL,
  `state_division` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `mobile_phone` varchar(20) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nominee_contact`
--

INSERT INTO `nominee_contact` (`nominee_contact_id`, `nominee_id`, `address`, `city`, `post_code`, `state_division`, `country`, `telephone`, `mobile_phone`, `fax`, `email`) VALUES
(1, 1, 'HALDI ARABIYAN HOUSE,ZAKIR HOSSAIN ROAD,KHULSHI,CTG', 'CTG', '4000', 'CTG', 'Bangladesh', '', '0130000000', '', 'nazrulislam@gmail.com'),
(3, 3, '334/5, AHMED NAGAR(NORTH) P.S- MIRPUR MODEL, DHAKA 1216', 'Dhaka', '1216', 'Dhaka', 'Bangladesh', '', '', '', ''),
(4, 4, '334/5, AHMED NAGAR(NORTH) P.S- MIRPUR MODEL, DHAKA 1216', 'Dhaka', '1216', 'Dhaka', 'Bangladesh', '', '', '', ''),
(5, 5, 'FARUK MIAH COLONI,TERO ROTON,SYLHET', 'Sylhet', '3100', 'Sylhet', 'Bangladesh', '', '', '', ''),
(7, 7, 'FLAT-5/B,BLOCK-3,SHELTECH GRAND PALACE,58,59/A, DINNONATH SEN ROAD, GENDARIA, DHAKA-1204', 'Dhaka', '1204', 'Dhaka', 'Bangladesh', '', '', '', ''),
(9, 9, 'LUCKY MANSION(5TH FLOOR), GOSHAILDANGA KALI BARI, 36 NO WARD,DOUBLE MOURING,', 'CTG', '1041', 'CTG', 'Bangladesh', '', '', '', ''),
(13, 13, 'KAFCO HOUSING COLONY,UTTAR BANDAR,ANOWARA,CTG', 'CTG', '4376', 'CTG', 'Bangladesh', '', '', '', ''),
(15, 15, 'WEST SHEWRAPARA MIRPUR', 'Dhaka', '1216', 'Dhaka', '', '', '', '', ''),
(17, 17, 'HOLDING NO-13, A, BARIK BUILDING, MAYOR GOLI, SHOLOSHAHAR 2 NO. GATE, KULSHI, CHATTOGRAM.', 'CTG', '4209', 'CTG', 'Bangladesh', '', '', '', ''),
(19, 19, 'HOUSE-11, ROAD-07, CHAD UDDAN, MOHAMMADPUR', 'Bhola', '8340', 'Bhola', 'Bangladesh', '', '', '', ''),
(21, 21, 'TALUKDER BARI, HAT VOGDIA, VOGDIA-1530, LOUHAJANG, MUNSHIGANJ.', 'Munshiganj', '1530', 'Munshiganj', 'Bangladesh', '', '', '', ''),
(25, 25, 'MASRONG, RAYERHAT-8530, BANARI PARA, BARISAL', 'Barisal', '8530', 'Barisal', 'Bangladesh', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `nom_application`
--

CREATE TABLE `nom_application` (
  `nom_application_id` int(11) NOT NULL,
  `application_no` varchar(50) DEFAULT NULL,
  `bo_open_date` date DEFAULT NULL,
  `cdbl_participant_id` varchar(50) DEFAULT NULL,
  `account_holder_bo_id` varchar(50) DEFAULT NULL,
  `account_holder_name` varchar(100) DEFAULT NULL,
  `form_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nom_application`
--

INSERT INTO `nom_application` (`nom_application_id`, `application_no`, `bo_open_date`, `cdbl_participant_id`, `account_holder_bo_id`, `account_holder_name`, `form_id`) VALUES
(1, '', '0000-00-00', '', '', '', 1),
(2, '', '0000-00-00', '', '', '', 2),
(3, '', '0000-00-00', '', '', '', 3),
(4, '', '0000-00-00', '', '', '', 4),
(5, '', '0000-00-00', '', '', '', 5),
(6, '', '0000-00-00', '', '', '', 6),
(7, '', '0000-00-00', '', '', '', 7),
(8, '', '0000-00-00', '', '', '', 8),
(9, '', '0000-00-00', '', '', '', 9),
(10, '', '0000-00-00', '', '', '', 10),
(11, '', '0000-00-00', '', '', '', 11),
(13, '', '0000-00-00', '', '', '', 13);

-- --------------------------------------------------------

--
-- Table structure for table `nom_guardian`
--

CREATE TABLE `nom_guardian` (
  `nom_guardian_id` int(11) NOT NULL,
  `nominee_id` int(11) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `short_name` varchar(50) DEFAULT NULL,
  `relationship` varchar(100) DEFAULT NULL,
  `dob_minority` date DEFAULT NULL,
  `maturity_date` date DEFAULT NULL,
  `passport_number` varchar(50) DEFAULT NULL,
  `issue_place` varchar(100) DEFAULT NULL,
  `issue_date` date DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `residency` varchar(20) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `signature` varchar(255) DEFAULT NULL,
  `number_gur` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nom_nominee`
--

CREATE TABLE `nom_nominee` (
  `nom_nominee_id` int(11) NOT NULL,
  `application_id` int(11) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `short_name` varchar(50) DEFAULT NULL,
  `title` varchar(10) DEFAULT NULL,
  `relationship` varchar(100) DEFAULT NULL,
  `percentage` decimal(5,2) DEFAULT NULL,
  `passport_number` varchar(50) DEFAULT NULL,
  `issue_place` varchar(100) DEFAULT NULL,
  `issue_date` date DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `residency` varchar(20) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `signature` varchar(255) DEFAULT NULL,
  `number_nom` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nom_nominee`
--

INSERT INTO `nom_nominee` (`nom_nominee_id`, `application_id`, `full_name`, `short_name`, `title`, `relationship`, `percentage`, `passport_number`, `issue_place`, `issue_date`, `expiry_date`, `residency`, `nationality`, `date_of_birth`, `photo`, `signature`, `number_nom`) VALUES
(1, 1, 'Israth Jahan', '', 'ms', 'Spouse', 100.00, '', '', '0000-00-00', '0000-00-00', 'resident', 'Mohammad', '0000-00-00', '', '', 1),
(3, 2, 'MD Parvez', '', '', 'Spouse', 50.00, '', '', '0000-00-00', '0000-00-00', 'resident', 'BAN', '0000-00-00', '', '', 1),
(4, 2, 'MD Shatil', '', 'Mr.', 'Son', 50.00, '', '', '0000-00-00', '0000-00-00', 'resident', 'Bangladesh', '0000-00-00', '', '', 2),
(5, 3, 'Shamsun Nahar', '', 'ms', 'Spouse', 100.00, '', '', '0000-00-00', '0000-00-00', 'resident', 'Bangladesh', '0000-00-00', '', '', 1),
(7, 4, 'Anowara Akter', '', 'NA', 'Spouse', 100.00, '', '', '0000-00-00', '0000-00-00', 'resident', 'BAN', '0000-00-00', '', '', 1),
(9, 5, 'Pranta Shill', '', 'mr', 'Brother', 0.00, '', '', '0000-00-00', '0000-00-00', 'resident', 'BAN', '0000-00-00', '', '', 1),
(13, 7, 'Nusrat Jahan Bristy', '', 'ms', 'Spouse', 100.00, '', '', '0000-00-00', '0000-00-00', 'resident', 'Ban', '0000-00-00', '', '', 1),
(15, 8, 'Marupsha', '', 'mrs', 'Spouse', 100.00, '', '', '0000-00-00', '0000-00-00', 'resident', 'BAN', '0000-00-00', '', '', 1),
(17, 9, 'Manika Dhar', '', 'mrs', 'Spouse', 100.00, '', '', '0000-00-00', '0000-00-00', 'resident', 'BAN', '0000-00-00', '', '', 1),
(19, 10, 'Sadia Rahman Easa', '', 'ms', 'Sister', 100.00, '', '', '0000-00-00', '0000-00-00', 'resident', 'BAN', '0000-00-00', '', '', 1),
(21, 11, 'Sufe Ahmad', '', 'mr', 'Spouse', 100.00, '', '', '0000-00-00', '0000-00-00', 'resident', 'BAN', '0000-00-00', '', '', 1),
(25, 13, 'Asma Khanam', '', 'mrs', 'Mother', 100.00, '', '', '0000-00-00', '0000-00-00', 'resident', 'BAN', '0000-00-00', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `poa_contact`
--

CREATE TABLE `poa_contact` (
  `poa_contact_id` int(11) NOT NULL,
  `poa_form_id` int(11) DEFAULT NULL,
  `poaFullName` varchar(100) DEFAULT NULL,
  `poaShortName` varchar(100) DEFAULT NULL,
  `poaTitle` varchar(10) DEFAULT NULL,
  `poaaddress` varchar(255) DEFAULT NULL,
  `poacity` varchar(50) DEFAULT NULL,
  `postcode` varchar(20) DEFAULT NULL,
  `state_division` varchar(50) DEFAULT NULL,
  `poacountry` varchar(50) DEFAULT NULL,
  `poatelephone` varchar(20) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `poafax` varchar(20) DEFAULT NULL,
  `poaemail` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `poa_form`
--

CREATE TABLE `poa_form` (
  `poa_form_id` int(11) NOT NULL,
  `applicationNo` varchar(50) DEFAULT NULL,
  `accdate` date DEFAULT NULL,
  `participantID` varchar(50) DEFAULT NULL,
  `accountHolderName` varchar(100) DEFAULT NULL,
  `passportNumber` varchar(50) DEFAULT NULL,
  `issuePlace` varchar(100) DEFAULT NULL,
  `issueDate` date DEFAULT NULL,
  `expiryDate` date DEFAULT NULL,
  `residency` varchar(20) DEFAULT NULL,
  `poanationality` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `poaStartDate` date DEFAULT NULL,
  `poaEndDate` date DEFAULT NULL,
  `remarks` text DEFAULT NULL,
  `poa_photo` varchar(255) DEFAULT NULL,
  `poa_sig` varchar(255) DEFAULT NULL,
  `fa_sig` varchar(255) DEFAULT NULL,
  `sa_sig` varchar(255) DEFAULT NULL,
  `form_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `usertype`) VALUES
(1, 'Syed Ali', 'syedali@gmail.com', 'syed1234', 'admin'),
(2, 'Mohammad Nazrul Islam', 'nazrulislam@gmail.com', 'nazrul1234', 'client'),
(3, 'Aruba Salim', 'arubasalim@gmail.com', 'aruba1234', 'client'),
(4, 'G.M. Salman Tanvir', 'salmantanvir@gmail.com', 'salman1234', 'client'),
(5, 'MD Hossain Ahmed Shamim', 'hossainahmed@gmail.com', 'hossain1234', 'client'),
(6, 'Antu Sheel', 'antusheel@gmail.com', 'antu1234', 'client'),
(7, 'AHM Aminul Islam', 'aminulislam@gmail.com', 'aminul1234', 'client'),
(8, 'MD Towfiq Ahmed Sakib', 'towfiqahmed@gmail.com', 'towfiq1234', 'client'),
(9, 'MD Jamirul Islam', 'jamirulislam@gmail.com', 'jamirul1234', 'client'),
(10, 'Anirban Sarkar', 'anirbansarkar@gmail.com', 'anirban1234', 'client'),
(11, 'Towfiqur Rahman Toki', 'towfiqurrahman@gmail.com', 'towfiqur1234', 'client'),
(12, 'Irine Afroza Aurpa', 'irineafroza@gmail.com', 'irine1234', 'client'),
(13, 'MD Sohrab Hossain', 'sohrabhossain@gmail.com', 'sohrab1234', 'client'),
(14, 'Rafia Akter', 'rafiaakter@gmail.com', 'rafia1234', 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authorized_persons`
--
ALTER TABLE `authorized_persons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_account_id` (`customer_account_id`);

--
-- Indexes for table `authorized_persons_contact`
--
ALTER TABLE `authorized_persons_contact`
  ADD PRIMARY KEY (`a_p_contact_id`),
  ADD KEY `a_p_contact_ibfk_1` (`a_p_id`);

--
-- Indexes for table `bo_applicant`
--
ALTER TABLE `bo_applicant`
  ADD PRIMARY KEY (`applicant_id`);

--
-- Indexes for table `bo_bankdetails`
--
ALTER TABLE `bo_bankdetails`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `bo_boform`
--
ALTER TABLE `bo_boform`
  ADD PRIMARY KEY (`form_id`),
  ADD KEY `contact_id` (`contact_id`),
  ADD KEY `applicant_id` (`applicant_id`),
  ADD KEY `bank_id` (`bank_id`),
  ADD KEY `cycle_id` (`cycle_id`),
  ADD KEY `customer_account_id` (`customer_account_id`);

--
-- Indexes for table `bo_contactdetails`
--
ALTER TABLE `bo_contactdetails`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `bo_introducer`
--
ALTER TABLE `bo_introducer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `form_id` (`form_id`);

--
-- Indexes for table `bo_photo_sig`
--
ALTER TABLE `bo_photo_sig`
  ADD PRIMARY KEY (`id`),
  ADD KEY `form_id` (`form_id`);

--
-- Indexes for table `bo_statementcycle`
--
ALTER TABLE `bo_statementcycle`
  ADD PRIMARY KEY (`cycle_id`);

--
-- Indexes for table `cle_application`
--
ALTER TABLE `cle_application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_accounts`
--
ALTER TABLE `customer_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_a_h`
--
ALTER TABLE `f_a_h`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_account_id` (`customer_account_id`);

--
-- Indexes for table `f_a_h_contact`
--
ALTER TABLE `f_a_h_contact`
  ADD PRIMARY KEY (`f_a_h_contact_id`),
  ADD KEY `f_a_h_contact_ibfk_1` (`f_a_h_id`);

--
-- Indexes for table `guardian_contact`
--
ALTER TABLE `guardian_contact`
  ADD PRIMARY KEY (`guardian_contact_id`),
  ADD KEY `guardian_id` (`guardian_id`);

--
-- Indexes for table `j_a_h`
--
ALTER TABLE `j_a_h`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_account_id` (`customer_account_id`);

--
-- Indexes for table `j_a_h_contact`
--
ALTER TABLE `j_a_h_contact`
  ADD PRIMARY KEY (`j_a_h_contact_id`),
  ADD KEY `j_a_h_contact_ibfk_1` (`j_a_h_id`);

--
-- Indexes for table `kyc_form`
--
ALTER TABLE `kyc_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nominee_contact`
--
ALTER TABLE `nominee_contact`
  ADD PRIMARY KEY (`nominee_contact_id`),
  ADD KEY `nominee_id` (`nominee_id`);

--
-- Indexes for table `nom_application`
--
ALTER TABLE `nom_application`
  ADD PRIMARY KEY (`nom_application_id`),
  ADD KEY `form_id` (`form_id`);

--
-- Indexes for table `nom_guardian`
--
ALTER TABLE `nom_guardian`
  ADD PRIMARY KEY (`nom_guardian_id`),
  ADD KEY `nominee_id` (`nominee_id`);

--
-- Indexes for table `nom_nominee`
--
ALTER TABLE `nom_nominee`
  ADD PRIMARY KEY (`nom_nominee_id`),
  ADD KEY `application_id` (`application_id`);

--
-- Indexes for table `poa_contact`
--
ALTER TABLE `poa_contact`
  ADD PRIMARY KEY (`poa_contact_id`),
  ADD KEY `poa_form_id` (`poa_form_id`);

--
-- Indexes for table `poa_form`
--
ALTER TABLE `poa_form`
  ADD PRIMARY KEY (`poa_form_id`),
  ADD KEY `form_id` (`form_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authorized_persons`
--
ALTER TABLE `authorized_persons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `authorized_persons_contact`
--
ALTER TABLE `authorized_persons_contact`
  MODIFY `a_p_contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bo_applicant`
--
ALTER TABLE `bo_applicant`
  MODIFY `applicant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `bo_bankdetails`
--
ALTER TABLE `bo_bankdetails`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `bo_boform`
--
ALTER TABLE `bo_boform`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `bo_contactdetails`
--
ALTER TABLE `bo_contactdetails`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `bo_introducer`
--
ALTER TABLE `bo_introducer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `bo_photo_sig`
--
ALTER TABLE `bo_photo_sig`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `bo_statementcycle`
--
ALTER TABLE `bo_statementcycle`
  MODIFY `cycle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cle_application`
--
ALTER TABLE `cle_application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_accounts`
--
ALTER TABLE `customer_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `f_a_h`
--
ALTER TABLE `f_a_h`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `f_a_h_contact`
--
ALTER TABLE `f_a_h_contact`
  MODIFY `f_a_h_contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `guardian_contact`
--
ALTER TABLE `guardian_contact`
  MODIFY `guardian_contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `j_a_h`
--
ALTER TABLE `j_a_h`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `j_a_h_contact`
--
ALTER TABLE `j_a_h_contact`
  MODIFY `j_a_h_contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kyc_form`
--
ALTER TABLE `kyc_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `nominee_contact`
--
ALTER TABLE `nominee_contact`
  MODIFY `nominee_contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `nom_application`
--
ALTER TABLE `nom_application`
  MODIFY `nom_application_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `nom_guardian`
--
ALTER TABLE `nom_guardian`
  MODIFY `nom_guardian_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `nom_nominee`
--
ALTER TABLE `nom_nominee`
  MODIFY `nom_nominee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `poa_contact`
--
ALTER TABLE `poa_contact`
  MODIFY `poa_contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `poa_form`
--
ALTER TABLE `poa_form`
  MODIFY `poa_form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `authorized_persons`
--
ALTER TABLE `authorized_persons`
  ADD CONSTRAINT `authorized_persons_ibfk_1` FOREIGN KEY (`customer_account_id`) REFERENCES `customer_accounts` (`id`);

--
-- Constraints for table `authorized_persons_contact`
--
ALTER TABLE `authorized_persons_contact`
  ADD CONSTRAINT `a_p_contact_ibfk_1` FOREIGN KEY (`a_p_id`) REFERENCES `authorized_persons` (`id`);

--
-- Constraints for table `bo_boform`
--
ALTER TABLE `bo_boform`
  ADD CONSTRAINT `bo_boform_ibfk_1` FOREIGN KEY (`contact_id`) REFERENCES `bo_contactdetails` (`contact_id`),
  ADD CONSTRAINT `bo_boform_ibfk_2` FOREIGN KEY (`applicant_id`) REFERENCES `bo_applicant` (`applicant_id`),
  ADD CONSTRAINT `bo_boform_ibfk_3` FOREIGN KEY (`bank_id`) REFERENCES `bo_bankdetails` (`bank_id`),
  ADD CONSTRAINT `bo_boform_ibfk_4` FOREIGN KEY (`cycle_id`) REFERENCES `bo_statementcycle` (`cycle_id`),
  ADD CONSTRAINT `bo_boform_ibfk_5` FOREIGN KEY (`customer_account_id`) REFERENCES `customer_accounts` (`id`);

--
-- Constraints for table `bo_introducer`
--
ALTER TABLE `bo_introducer`
  ADD CONSTRAINT `bo_introducer_ibfk_1` FOREIGN KEY (`form_id`) REFERENCES `bo_boform` (`form_id`);

--
-- Constraints for table `bo_photo_sig`
--
ALTER TABLE `bo_photo_sig`
  ADD CONSTRAINT `bo_photo_sig_ibfk_1` FOREIGN KEY (`form_id`) REFERENCES `bo_boform` (`form_id`);

--
-- Constraints for table `f_a_h`
--
ALTER TABLE `f_a_h`
  ADD CONSTRAINT `f_a_h_ibfk_1` FOREIGN KEY (`customer_account_id`) REFERENCES `customer_accounts` (`id`);

--
-- Constraints for table `f_a_h_contact`
--
ALTER TABLE `f_a_h_contact`
  ADD CONSTRAINT `f_a_h_contact_ibfk_1` FOREIGN KEY (`f_a_h_id`) REFERENCES `f_a_h` (`id`);

--
-- Constraints for table `guardian_contact`
--
ALTER TABLE `guardian_contact`
  ADD CONSTRAINT `guardian_contact_ibfk_1` FOREIGN KEY (`guardian_id`) REFERENCES `nom_guardian` (`nom_guardian_id`);

--
-- Constraints for table `j_a_h`
--
ALTER TABLE `j_a_h`
  ADD CONSTRAINT `j_a_h_ibfk_1` FOREIGN KEY (`customer_account_id`) REFERENCES `customer_accounts` (`id`);

--
-- Constraints for table `j_a_h_contact`
--
ALTER TABLE `j_a_h_contact`
  ADD CONSTRAINT `j_a_h_contact_ibfk_1` FOREIGN KEY (`j_a_h_id`) REFERENCES `j_a_h` (`id`);

--
-- Constraints for table `nominee_contact`
--
ALTER TABLE `nominee_contact`
  ADD CONSTRAINT `nominee_contact_ibfk_1` FOREIGN KEY (`nominee_id`) REFERENCES `nom_nominee` (`nom_nominee_id`);

--
-- Constraints for table `nom_application`
--
ALTER TABLE `nom_application`
  ADD CONSTRAINT `nom_application_ibfk_1` FOREIGN KEY (`form_id`) REFERENCES `bo_boform` (`form_id`);

--
-- Constraints for table `nom_guardian`
--
ALTER TABLE `nom_guardian`
  ADD CONSTRAINT `nom_guardian_ibfk_1` FOREIGN KEY (`nominee_id`) REFERENCES `nom_nominee` (`nom_nominee_id`);

--
-- Constraints for table `nom_nominee`
--
ALTER TABLE `nom_nominee`
  ADD CONSTRAINT `nom_nominee_ibfk_1` FOREIGN KEY (`application_id`) REFERENCES `nom_application` (`nom_application_id`);

--
-- Constraints for table `poa_contact`
--
ALTER TABLE `poa_contact`
  ADD CONSTRAINT `poa_contact_ibfk_1` FOREIGN KEY (`poa_form_id`) REFERENCES `poa_form` (`poa_form_id`);

--
-- Constraints for table `poa_form`
--
ALTER TABLE `poa_form`
  ADD CONSTRAINT `poa_form_ibfk_1` FOREIGN KEY (`form_id`) REFERENCES `bo_boform` (`form_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
