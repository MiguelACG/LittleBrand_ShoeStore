-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 01:45 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `littlebranddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `Brand_ID` int(11) NOT NULL,
  `Brand_Name` varchar(50) NOT NULL,
  `Brand_History` mediumtext NOT NULL,
  `Brand_Logo` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `Comment_ID` int(11) NOT NULL,
  `Customer_ID` int(11) NOT NULL,
  `Comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Customer_ID` int(11) NOT NULL,
  `Cust_Last_Name` varchar(50) NOT NULL,
  `Cust_First_Name` varchar(50) NOT NULL,
  `Cust_Phone_Number` varchar(10) NOT NULL,
  `Cust_Email_Address` varchar(20) NOT NULL,
  `Cust_Address_Line` varchar(20) DEFAULT NULL,
  `Cust_City` varchar(50) DEFAULT NULL,
  `Cust_Postal_Code` varchar(10) DEFAULT NULL,
  `Cust_Gender` varchar(20) NOT NULL,
  `Cust_Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `Location_ID` int(11) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Street_Line` varchar(50) NOT NULL,
  `Postal_Code` varchar(10) NOT NULL,
  `Phone_Number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `men_inventory`
--

CREATE TABLE `men_inventory` (
  `Product_ID` int(11) NOT NULL,
  `Brand_ID` int(11) NOT NULL,
  `Product_Name` varchar(50) NOT NULL,
  `Product_Description` mediumtext NOT NULL,
  `Product_Color` varchar(10) NOT NULL,
  `Product_Img` mediumtext NOT NULL,
  `Product_Price` decimal(10,0) NOT NULL,
  `Product_Size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_ID` int(11) NOT NULL,
  `Customer_ID` int(11) NOT NULL,
  `Delivery_Address` varchar(50) NOT NULL,
  `Delivery_Phone` varchar(10) NOT NULL,
  `Order_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `Order_Item_ID` int(11) NOT NULL,
  `Order_ID` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `women_inventory`
--

CREATE TABLE `women_inventory` (
  `Product_ID` int(11) NOT NULL,
  `Brand_ID` int(11) NOT NULL,
  `Product_Name` varchar(50) NOT NULL,
  `Product_Price` decimal(10,0) NOT NULL,
  `Product_Img` mediumtext NOT NULL,
  `Product_Description` mediumtext NOT NULL,
  `Product_Color` varchar(50) NOT NULL,
  `Product_Size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`Brand_ID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`Comment_ID`),
  ADD KEY `fk_customer_comment` (`Customer_ID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`Location_ID`);

--
-- Indexes for table `men_inventory`
--
ALTER TABLE `men_inventory`
  ADD PRIMARY KEY (`Product_ID`),
  ADD KEY `fk_men_product_brand` (`Brand_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_ID`),
  ADD KEY `fk_customer_order` (`Customer_ID`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`Order_Item_ID`),
  ADD KEY `fk_order_item` (`Order_ID`),
  ADD KEY `fk_order_product_women` (`Product_ID`);

--
-- Indexes for table `women_inventory`
--
ALTER TABLE `women_inventory`
  ADD PRIMARY KEY (`Product_ID`),
  ADD KEY `fk_women_product_brand` (`Brand_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_customer_comment` FOREIGN KEY (`Customer_ID`) REFERENCES `customers` (`Customer_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `men_inventory`
--
ALTER TABLE `men_inventory`
  ADD CONSTRAINT `fk_men_product_brand` FOREIGN KEY (`Brand_ID`) REFERENCES `brands` (`Brand_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_customer_order` FOREIGN KEY (`Customer_ID`) REFERENCES `customers` (`Customer_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_item`
--
ALTER TABLE `order_item`
  ADD CONSTRAINT `fk_order_item` FOREIGN KEY (`Order_ID`) REFERENCES `orders` (`Order_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_order_product_men` FOREIGN KEY (`Product_ID`) REFERENCES `men_inventory` (`Product_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_order_product_women` FOREIGN KEY (`Product_ID`) REFERENCES `women_inventory` (`Product_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `women_inventory`
--
ALTER TABLE `women_inventory`
  ADD CONSTRAINT `fk_women_product_brand` FOREIGN KEY (`Brand_ID`) REFERENCES `brands` (`Brand_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
