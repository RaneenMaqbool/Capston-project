-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2021 at 07:28 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(3) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `admin_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`, `image`, `admin_name`) VALUES
(2, 'raneenforsan97@gmail.com', '123456', 'Admin.jpg', 'Raneen Forsan');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(3) NOT NULL,
  `price` int(255) NOT NULL,
  `image` text NOT NULL,
  `qty` varchar(255) NOT NULL,
  `total` int(3) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `price`, `image`, `qty`, `total`, `name`) VALUES
(13, 50, 'watchess1.jpg', '2', 0, 'Watches  men');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `cart_id` int(3) NOT NULL,
  `price` int(5) NOT NULL,
  `image` text NOT NULL,
  `qty` int(3) NOT NULL,
  `total` int(9) NOT NULL,
  `name` varchar(255) NOT NULL,
  `alltotal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`cart_id`, `price`, `image`, `qty`, `total`, `name`, `alltotal`) VALUES
(13, 50, 'watchess1.jpg', 2, 200, 'Watches  men', 100);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(3) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_description` varchar(255) NOT NULL,
  `category_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_description`, `category_image`) VALUES
(49, 'Woman Clothes', '', 'd11.jpg'),
(51, 'Elegant bags', '', 'bags.jpg'),
(52, 'Men Shoes', '', 'sashoes.jpg'),
(53, 'Men Clothes', '', 'Formal clothes1.jpg'),
(54, 'Waman shoes', 'Elegant shoes', 'cat222.jpg'),
(55, 'Acessories', '', 'hut.jpg'),
(56, 'Furniture', '', 'furniture.webp'),
(57, 'Electronics', '', 'صشصش.jpg'),
(58, 'Flats', '', 'homee.jpg'),
(59, 'Vehicles', '', 'vechicels.jpg'),
(60, 'Toys', 'Toys', 'toys.jpg'),
(61, 'Phones', '', 's-l1600.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `message_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `subject`, `phone`, `message`, `message_id`) VALUES
('Raneen Forsan', 'raneenforsan97@gmail.com', 'Problem of website', '0788653882', 'I have problem with my cart please contact me ', 10);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(3) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_password` varchar(255) NOT NULL,
  `customer_mobile` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_mobile`, `image`) VALUES
(18, 'Raneen Forsan', 'raneenforsan97@gmail.com', '123456', ' 0788653882', 'im1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lastorders`
--

CREATE TABLE `lastorders` (
  `order_id` int(3) NOT NULL,
  `customer_id` int(3) NOT NULL,
  `total` int(255) NOT NULL,
  `vendor_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lastorders`
--

INSERT INTO `lastorders` (`order_id`, `customer_id`, `total`, `vendor_id`) VALUES
(19, 18, 100, 2),
(20, 18, 100, 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(3) NOT NULL,
  `customer_id` int(3) NOT NULL,
  `vendor_id` int(3) NOT NULL,
  `qty` int(3) NOT NULL,
  `imageee` text NOT NULL,
  `price` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `vendor_id`, `qty`, `imageee`, `price`, `name`, `total`) VALUES
(7, 18, 2, 2, 'watchess1.jpg', 50, 'Watches  men', 100);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_desc` text NOT NULL,
  `vendor_phone` varchar(255) NOT NULL,
  `images` text NOT NULL,
  `vendor_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_title`, `post_desc`, `vendor_phone`, `images`, `vendor_name`) VALUES
(10, 'Best Choice Products 5-Piece Kitchen Dining Table Set for Dining Room, Kitchen,', 'MPG/MPGe : cars 31 Highway / 21 City , Engine:Intercooled Turbo Premium Unleaded I-4 2.3L/140 cu in,seating:4,Housepower:310,Overall crash safety rating 5/5 stars	', '0788653882', 'imageimageimage.jpg', 'Raneen Forsan');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_desc` varchar(255) NOT NULL,
  `vendor_phone` varchar(11) NOT NULL,
  `images` text NOT NULL,
  `vendor_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_desc`, `vendor_phone`, `images`, `vendor_name`) VALUES
(4, '2019 Ford Mustang EcoBoost Premium', 'MPG/MPGe : cars 31 Highway / 21 City , Engine:Intercooled Turbo Premium Unleaded I-4 2.3L/140 cu in,seating:4,Housepower:310,Overall crash safety rating 5/5 stars', '0776532579', 'Car.webp', 'Atomkit Company'),
(5, 'Best Choice Products 5-Piece Kitchen Dining Table Set for Dining Room, Kitchen,', 'Best Choice Products 5-Piece Kitchen Dining Table Set for Dining Room, Kitchen, Dinette, Compact Space w/Glass Tabletop.', '0776532579', 'fur.jpg', 'Atomkit Company'),
(6, '2021 Dell Inspiron 17 3793 17.3', '2021 Dell Inspiron 17 3793 17.3\" FHD 1080p LED Laptop, Intel Core i7-1065G7 Processor, 8GB RAM, 2TB HDD, Intel Iris Plus Graphics, DVD, HDMI, Windows 10 Home, Black, W/ IFT Accessories', '0776532579', 'googlelaptop.jpg', 'Atomkit Company');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_des` text NOT NULL,
  `images` text NOT NULL,
  `category_id` int(3) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `vendor_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_des`, `images`, `category_id`, `qty`, `vendor_id`) VALUES
(93, 'Elegant dress', 100, '95% Polyester, 5% Spandex\r\nZipper closure\r\nMaterials: Jersey, 95% Polyester, 5% Spandex,stretchy fabric\r\nScoop Neck, Flutter Sleeve, High Waist, Above Knee, Invisible Zipper Back\r\nVintage and Elegant Style,Fit and Flare Casual Dress;Perfect for Spring,Summer,and Fall.\r\nOccasion: Casual, Beach, Evening, Wedding, Party, Work, Dating, Outdoors.\r\nThe material is thick and comfortable.Please refer to the size measurement below', 'dress2class.jpg', 49, '6', 2),
(94, 'Elegant dress', 100, '95% Polyester, 5% Spandex\r\nZipper closure\r\nMaterials: Jersey, 95% Polyester, 5% Spandex,stretchy fabric\r\nScoop Neck, Flutter Sleeve, High Waist, Above Knee, Invisible Zipper Back\r\nVintage and Elegant Style,Fit and Flare Casual Dress;Perfect for Spring,Summer,and Fall.\r\nOccasion: Casual, Beach, Evening, Wedding, Party, Work, Dating, Outdoors.\r\nThe material is thick and comfortable.Please refer to the size measurement below', 'dress4class1.jpg', 49, '6', 2),
(95, 'Elegant dress', 100, '95% Polyester, 5% Spandex\r\nZipper closure\r\nMaterials: Jersey, 95% Polyester, 5% Spandex,stretchy fabric\r\nScoop Neck, Flutter Sleeve, High Waist, Above Knee, Invisible Zipper Back\r\nVintage and Elegant Style,Fit and Flare Casual Dress;Perfect for Spring,Summer,and Fall.\r\nOccasion: Casual, Beach, Evening, Wedding, Party, Work, Dating, Outdoors.\r\nThe material is thick and comfortable.Please refer to the size measurement below', 'dress5class1.jpg', 49, '6', 2),
(96, 'Elegant dress', 100, '95% Polyester, 5% Spandex\r\nZipper closure\r\nMaterials: Jersey, 95% Polyester, 5% Spandex,stretchy fabric\r\nScoop Neck, Flutter Sleeve, High Waist, Above Knee, Invisible Zipper Back\r\nVintage and Elegant Style,Fit and Flare Casual Dress;Perfect for Spring,Summer,and Fall.\r\nOccasion: Casual, Beach, Evening, Wedding, Party, Work, Dating, Outdoors.\r\nThe material is thick and comfortable.Please refer to the size measurement below', 'dress6class1.jpg', 49, '6', 2),
(97, 'Elegant dress', 100, '95% Polyester, 5% Spandex\r\nZipper closure\r\nMaterials: Jersey, 95% Polyester, 5% Spandex,stretchy fabric\r\nScoop Neck, Flutter Sleeve, High Waist, Above Knee, Invisible Zipper Back\r\nVintage and Elegant Style,Fit and Flare Casual Dress;Perfect for Spring,Summer,and Fall.\r\nOccasion: Casual, Beach, Evening, Wedding, Party, Work, Dating, Outdoors.\r\nThe material is thick and comfortable.Please refer to the size measurement below', 'dressclass1.jpg', 49, '6', 2),
(98, 'Elegant dress', 100, '95% Polyester, 5% Spandex\r\nZipper closure\r\nMaterials: Jersey, 95% Polyester, 5% Spandex,stretchy fabric\r\nScoop Neck, Flutter Sleeve, High Waist, Above Knee, Invisible Zipper Back\r\nVintage and Elegant Style,Fit and Flare Casual Dress;Perfect for Spring,Summer,and Fall.\r\nOccasion: Casual, Beach, Evening, Wedding, Party, Work, Dating, Outdoors.\r\nThe material is thick and comfortable.Please refer to the size measurement below', 'image3class1.jpg', 49, '6', 2),
(99, 'Fashioned dress', 50, 'MISSMAY Women\'s Vintage Floral Lace Half Sleeve Boat Neck Formal Swing Dress .90% Nylon, 10% Spandex\r\nImported\r\nZipper closure\r\nSize RECOMMEND: US 0/2(X-Small), US 4/6(Small), US 8/10(Medium), US 12/14(Large), US 16/18(X-Large),US 20 (XX-Large)\r\nAbove Knee,Left Side Hidden Zipper,Floral Pattern\r\nRetro Elegant Style, Suit for Evening,Cocktail,Wedding Party and Formal Occasion\r\nPlease Note that This Dress is Stretchy and Please Refer to the Size Chart in Left Product Description Picture\r\nCare Instructions:Please Put The Dress Into A Laundry Bag For Wash It With Low Temperature and Iron Carefully in Low Temperature Too\r\n\r\n', 'image1class2.jpg', 49, '9', 2),
(100, 'Fashioned dress', 50, 'MISSMAY Women\'s Vintage Floral Lace Half Sleeve Boat Neck Formal Swing Dress 90% Nylon, 10% Spandex\r\nImported\r\nZipper closure\r\nSize RECOMMEND: US 0/2(X-Small), US 4/6(Small), US 8/10(Medium), US 12/14(Large), US 16/18(X-Large),US 20 (XX-Large)\r\nAbove Knee,Left Side Hidden Zipper,Floral Pattern\r\nRetro Elegant Style, Suit for Evening,Cocktail,Wedding Party and Formal Occasion\r\nPlease Note that This Dress is Stretchy and Please Refer to the Size Chart in Left Product Description Picture\r\nCare Instructions:Please Put The Dress Into A Laundry Bag For Wash It With Low Temperature and Iron Carefully in Low Temperature Too\r\n', 'image2class2.jpg', 49, '9', 2),
(101, 'Fashioned dress', 50, 'MISSMAY Women\'s Vintage Floral Lace Half Sleeve Boat Neck Formal Swing Dress 90% Nylon, 10% Spandex\r\nImported\r\nZipper closure\r\nSize RECOMMEND: US 0/2(X-Small), US 4/6(Small), US 8/10(Medium), US 12/14(Large), US 16/18(X-Large),US 20 (XX-Large)\r\nAbove Knee,Left Side Hidden Zipper,Floral Pattern\r\nRetro Elegant Style, Suit for Evening,Cocktail,Wedding Party and Formal Occasion\r\nPlease Note that This Dress is Stretchy and Please Refer to the Size Chart in Left Product Description Picture\r\nCare Instructions:Please Put The Dress Into A Laundry Bag For Wash It With Low Temperature and Iron Carefully in Low Temperature Too\r\n ', 'image3class2.jpg', 49, '9', 2),
(102, 'Fashioned dress', 50, 'MISSMAY Women\'s Vintage Floral Lace Half Sleeve Boat Neck Formal Swing Dress 90% Nylon, 10% Spandex\r\n', 'image4class2.jpg', 49, '9', 2),
(103, 'Fashioned dress', 50, 'MISSMAY Women\'s Vintage Floral Lace Half Sleeve Boat Neck Formal Swing Dress\r\n 90% Nylon, 10% Spandex\r\nImported\r\nZipper closure\r\nSize RECOMMEND: US 0/2(X-Small), US 4/6(Small), US 8/10(Medium), US 12/14(Large), US 16/18(X-Large),US 20 (XX-Large)\r\nAbove Knee,Left Side Hidden Zipper,Floral Pattern\r\nRetro Elegant Style, Suit for Evening,Cocktail,Wedding Party and Formal Occasion\r\nPlease Note that This Dress is Stretchy and Please Refer to the Size Chart in Left Product Description Picture\r\nCare Instructions:Please Put The Dress Into A Laundry Bag For Wash It With Low Temperature and Iron Carefully in Low Temperature Too', 'image5class2.jpg', 49, '9', 2),
(104, 'Fashioned dress', 50, 'MISSMAY Women\'s Vintage Floral Lace Half Sleeve Boat Neck Formal Swing Dress 90% Nylon, 10% Spandex\r\n', 'image6class2.jpg', 49, '9', 2),
(117, 'Bags Fashion', 30, 'Dreubea Women  Leather Handbag Tote Shoulder Bag Crossbody Purse', 'bag1class1.jpg', 51, '8', 2),
(118, 'Bags Fsshion', 30, 'Dreubea Women  Leather Handbag Tote Shoulder Bag Crossbody Purse', 'bag2class1.jpg', 51, '8', 2),
(119, 'Bags Fsshion', 30, 'Dreubea Women  Leather Handbag Tote Shoulder Bag Crossbody Purse', 'bag3class1.jpg', 51, '8', 2),
(120, 'Bags Fsshion', 30, 'Dreubea Women  Leather Handbag Tote Shoulder Bag Crossbody Purse', 'bag4class1.jpg', 51, '8', 2),
(121, 'Bags Fsshion', 30, 'Dreubea Women  Leather Handbag Tote Shoulder Bag Crossbody Purse', 'bag5class1.jpg', 51, '8', 2),
(122, 'Bags Fsshion', 30, 'Dreubea Women  Leather Handbag Tote Shoulder Bag Crossbody Purse', 'bag6class1.jpg', 51, '8', 2),
(123, 'Elegant Bags', 80, 'Dreubea Womens Handbag Tote Shoulder Purse Leather Crossbody Bag', 'classimage1.jpg', 51, '16', 2),
(124, 'Elegant Bags', 80, 'Dreubea Womens Handbag Tote Shoulder Purse Leather Crossbody Bag', 'classimage2.jpg', 51, '16', 2),
(125, 'Elegant Bags', 80, 'Dreubea Womens Handbag Tote Shoulder Purse Leather Crossbody Bag', 'classimage3.jpg', 51, '16', 2),
(126, 'Elegant Bags', 80, 'Dreubea Womens Handbag Tote Shoulder Purse Leather Crossbody Bag', 'classimage5.jpg', 51, '16', 2),
(127, 'Elegant Bags', 80, 'Dreubea Womens Handbag Tote Shoulder Purse Leather Crossbody Bag', 'classimage6.jpg', 51, '16', 2),
(128, 'Elegant Bags', 80, 'Dreubea Womens Handbag Tote Shoulder Purse Leather Crossbody Bag', 'image7class.jpg', 51, '16', 2),
(135, 'Formal shoes', 50, 'DREAM PAIRS Bruno Marc Moda Italy Men\'s Prince Classic Modern Formal Oxford Wingtip Lace Up Dress Shoes\r\n canvas-and-synthetic\r\nImported\r\nWood sole\r\nDesigned in USA\r\nWooden Heel height: 1\" (approx)\r\nPremium Faux Leather Lining, Latex Cushioned Footbed.\r\nLace-up construction，Classic Brogue Wing Tip Design.\r\nFlexible and Comfort oxfords with ornamental perforated patterns.', 'boot1image1.jpg', 52, '20', 2),
(136, 'Formal shoes', 50, 'DREAM PAIRS Bruno Marc Moda Italy Men\'s Prince Classic Modern Formal Oxford Wingtip Lace Up Dress Shoes\r\n', 'boot2image2.jpg', 52, '20', 2),
(137, 'Formal shoes', 50, 'DREAM PAIRS Bruno Marc Moda Italy Men\'s Prince Classic Modern Formal Oxford Wingtip Lace Up Dress Shoes\r\n', 'boot3image3.jpg', 52, '20', 2),
(138, 'Formal shoes', 50, 'DREAM PAIRS Bruno Marc Moda Italy Men\'s Prince Classic Modern Formal Oxford Wingtip Lace Up Dress Shoes\r\n', 'boot4image4.jpg', 52, '20', 2),
(139, 'Formal shoes', 50, 'DREAM PAIRS Bruno Marc Moda Italy Men\'s Prince Classic Modern Formal Oxford Wingtip Lace Up Dress Shoes\r\n', 'boot5image5.jpg', 52, '20', 2),
(140, 'Formal shoes', 50, 'DREAM PAIRS Bruno Marc Moda Italy Men\'s Prince Classic Modern Formal Oxford Wingtip Lace Up Dress Shoes\r\n', 'image6boot6.jpg', 52, '20', 2),
(141, 'Sport shoes', 100, 'Damyuan Men\'s Sport Gym Running Shoes Walking Shoes Casual Lace Up Lightweight.Rubber sole\r\nMens running shoes SOLE:Rubber sole is durable and flexible, it can free bending with you for increased comfort\r\nBreathable mesh upper：Lightweight support and breathable that make your foot always keeps dry and cool.\r\nNon-slip: The rubber outsole offers impact cushioning, anti-twist, abrasion-resistant and anti-slip performance', 'boot i6.jpg', 52, '8', 2),
(142, 'Sport shoes', 100, 'Damyuan Men\'s Sport Gym Running Shoes Walking Shoes Casual Lace Up Lightweight.Rubber sole\r\n', 'booti1.jpg', 52, '8', 2),
(143, 'Sport shoes', 100, 'Damyuan Men\'s Sport Gym Running Shoes Walking Shoes Casual Lace Up Lightweight.Rubber sole\r\n', 'booti2.jpg', 52, '8', 2),
(144, 'Sport shoes', 100, 'Damyuan Men\'s Sport Gym Running Shoes Walking Shoes Casual Lace Up Lightweight.Rubber sole\r\n', 'booti4.jpg', 52, '8', 2),
(145, 'Sport shoes', 100, 'Damyuan Men\'s Sport Gym Running Shoes Walking Shoes Casual Lace Up Lightweight.Rubber sole\r\n', 'booti55.jpg', 52, '8', 2),
(146, 'Sport shoes', 100, 'Damyuan Men\'s Sport Gym Running Shoes Walking Shoes Casual Lace Up Lightweight.Rubber sole\r\n', 'imagei3.jpg', 52, '8', 2),
(147, 'Formal Suit ', 300, 'P&L Men\'s Blazer Premium Stretch Classic Fit Sport Coat Suit Jacket\r\nButton closure\r\nWorld Class Comfort Premium Fabric - 66% Polyester, 32% Viscose Rayon, 2% SPANDEX\r\nClassic Fit Suit, 2 Button, Single Breasted, Dual Side Vent Jacket. Fashionable colors appropriate for all occasions\r\nPremium fabric for year round use, Provides a comfortable range of motion and doesn’t constrict your arms\r\nOuter and inner pockets allow for secure, discrete storage of small items\r\nA must in any wardrobe, this handsome premium blazer ensures to keep you looking sharp at all times.', 'formal1.jpg', 53, '6', 2),
(148, 'Formal Suit ', 300, 'P&L Men\'s Blazer Premium Stretch Classic Fit Sport Coat Suit Jacket\r\n', 'formal2.jpg', 53, '6', 2),
(149, 'Formal Suit ', 300, 'P&L Men\'s Blazer Premium Stretch Classic Fit Sport Coat Suit Jacket\r\n', 'formal3.jpg', 53, '6', 2),
(150, 'Formal Suit ', 300, 'P&L Men\'s Blazer Premium Stretch Classic Fit Sport Coat Suit Jacket\r\n', 'formal4.jpg', 53, '6', 2),
(151, 'Formal Suit ', 300, 'P&L Men\'s Blazer Premium Stretch Classic Fit Sport Coat Suit Jacket\r\n', 'formal5.jpg', 53, '6', 2),
(152, 'Formal Suit ', 300, 'P&L Men\'s Blazer Premium Stretch Classic Fit Sport Coat Suit Jacket\r\n', 'formal6.jpg', 53, '6', 2),
(153, 'Formal Shirt ', 50, 'Aimeilgot Mens Long/Short Sleeve Shirts Linen Casual Button Down Tees Spread Collar Plain Shirts\r\n Button closure\r\nHand Wash\r\nFabric：55% Linen+45% Cotton,comfortable,skin-friendly\r\nFeatures:Standard collar,Long/Short sleeve,Front-Pocket,Solid shirts,Linen cotton shirts,Button up, Lightweight\r\nFashionable Men\'s Long/Short -sleeved classic shirt,and trendy shirt.This shirts will become a staple in wardrobe .You can easily match jeans, casual pants or shorts, etc.Creating a simple but fashionable effect for you\r\nOccasions:Stylish and Modern Design is perfect all occasions,such as business work,daily life, casual outings,party,vacation, beach and summer activities, etc.', 'class4.1.jpg', 53, '30', 2),
(154, 'Formal Shirt ', 50, 'Aimeilgot Mens Long/Short Sleeve Shirts Linen Casual Button Down Tees Spread Collar Plain Shirts\r\n', 'class4.2.jpg', 53, '30', 2),
(155, 'Formal Shirt ', 50, 'Aimeilgot Mens Long/Short Sleeve Shirts Linen Casual Button Down Tees Spread Collar Plain Shirts\r\n', 'class4.3.jpg', 53, '30', 2),
(156, 'Formal Shirt ', 50, 'Aimeilgot Mens Long/Short Sleeve Shirts Linen Casual Button Down Tees Spread Collar Plain Shirts\r\n', 'class4.4.jpg', 53, '30', 2),
(157, 'Formal Shirt ', 50, 'Aimeilgot Mens Long/Short Sleeve Shirts Linen Casual Button Down Tees Spread Collar Plain Shirts\r\n', 'class5.5.jpg', 53, '30', 2),
(158, 'Formal Shirt ', 50, 'Aimeilgot Mens Long/Short Sleeve Shirts Linen Casual Button Down Tees Spread Collar Plain Shirts\r\n', 'image4444rr.jpg', 53, '30', 2),
(159, 'Shoes Elegant and formal', 60, 'Richealnana Women\'s Classic Pumps Pointed Toe Sexy High Heels\r\n', 'shoesclas2.jpg', 54, '', 2),
(160, 'Shoes Elegant and formal', 60, 'Richealnana Women\'s Classic Pumps Pointed Toe Sexy High Heels\r\n', 'shoesclass1.jpg', 54, '', 2),
(161, 'Shoes Elegant and formal', 60, 'Richealnana Women\'s Classic Pumps Pointed Toe Sexy High Heels\r\n', 'shoesclass3.jpg', 54, '', 2),
(162, 'Shoes Elegant and formal', 60, 'Richealnana Women\'s Classic Pumps Pointed Toe Sexy High Heels\r\n', 'shoesclass4.jpg', 54, '', 2),
(163, 'Shoes Elegant and formal', 60, 'Richealnana Women\'s Classic Pumps Pointed Toe Sexy High Heels\r\n', 'shoesclass5.jpg', 54, '', 2),
(164, 'Shoes Elegant and formal', 60, 'Richealnana Women\'s Classic Pumps Pointed Toe Sexy High Heels\r\n', 'shoesclass6.jpg', 54, '', 2),
(165, 'Mid heal shoes', 60, 'Richealnana Women\'s Classic Pumps Pointed Toe Sexy High Heels', 'boot22.jpg', 54, '8', 2),
(167, 'Mid heal shoes', 60, 'Richealnana Women\'s Classic Pumps Pointed Toe Sexy High Heels', 'boot23.jpg', 54, '8', 2),
(168, 'Mid heal shoes', 60, 'Richealnana Women\'s Classic Pumps Pointed Toe Sexy High Heels', 'boot89.jpg', 54, '8', 2),
(169, 'Winter Hut', 50, 'REDESS Women Winter Pompom Beanie Hat with Warm Fleece Lined, Thick Slouchy Snow Knit Skull Ski Cap\r\n', 'hut1.jpg', 55, '50', 2),
(170, 'Winter Hut', 50, 'REDESS Women Winter Pompom Beanie Hat with Warm Fleece Lined, Thick Slouchy Snow Knit Skull Ski Cap\r\n', 'hut2.jpg', 55, '50', 2),
(171, 'Winter Hut', 50, 'REDESS Women Winter Pompom Beanie Hat with Warm Fleece Lined, Thick Slouchy Snow Knit Skull Ski Cap\r\n', 'hut3.jpg', 55, '50', 2),
(172, 'Winter Hut', 50, 'REDESS Women Winter Pompom Beanie Hat with Warm Fleece Lined, Thick Slouchy Snow Knit Skull Ski Cap\r\n', 'hut4.jpg', 55, '50', 2),
(173, 'Winter Hut', 50, 'REDESS Women Winter Pompom Beanie Hat with Warm Fleece Lined, Thick Slouchy Snow Knit Skull Ski Cap\r\n', 'hut5.jpg', 55, '50', 2),
(174, 'Winter Hut', 50, 'REDESS Women Winter Pompom Beanie Hat with Warm Fleece Lined, Thick Slouchy Snow Knit Skull Ski Cap\r\n', 'hut6.jpg', 55, '50', 2),
(175, 'Brand watch', 100, 'BENYAR - Stylish Wrist Watch for Men, Genuine Silicone Strap Watches, Perfect Quartz Movement, Waterproof and Scratch Resistant, Analog Chronograph Quartz Business Watches\r\n', 'watch1.jpg', 55, '8', 2),
(176, 'Brand watch', 100, 'BENYAR - Stylish Wrist Watch for Men, Genuine Silicone Strap Watches, Perfect Quartz Movement, Waterproof and Scratch Resistant, Analog Chronograph Quartz Business Watches\r\n', 'watch2.jpg', 55, '8', 2),
(177, 'Brand watch', 100, 'BENYAR - Stylish Wrist Watch for Men, Genuine Silicone Strap Watches, Perfect Quartz Movement, Waterproof and Scratch Resistant, Analog Chronograph Quartz Business Watches\r\n', 'watch3.jpg', 55, '8', 2),
(178, 'Watches  men', 50, 'BENYAR - Stylish Wrist Watch for Men, Genuine Silicone Strap Watches, Perfect Quartz Movement, Waterproof and Scratch Resistant, Analog Chronograph Quartz Business Watches\r\n', 'watches3.jpg', 55, '8', 2),
(179, 'Watches  men', 50, 'BENYAR - Stylish Wrist Watch for Men, Genuine Silicone Strap Watches, Perfect Quartz Movement, Waterproof and Scratch Resistant, Analog Chronograph Quartz Business Watches\r\n', 'watchess1.jpg', 55, '8', 2),
(180, 'Watches  men', 50, 'BENYAR - Stylish Wrist Watch for Men, Genuine Silicone Strap Watches, Perfect Quartz Movement, Waterproof and Scratch Resistant, Analog Chronograph Quartz Business Watches\r\n', 'watchess2.jpg', 55, '8', 2),
(181, 'Keter Urban', 40, 'Keter Urban Knit Pouf Ottoman Set of 2 with Storage Table for Patio and Room Décor-Perfect for Balcony, Deck, and Outdoor Seating, Dune/Misty Blue', 'imaaa6.jpg', 56, '90', 2),
(182, 'Best Choice Products Set of 2 Decorative ', 200, 'Best Choice Products Set of 2 Decorative Round Accent Side Coffee End Table Nightstands for Living Room, Bedroom, Office, Home Décor w/Nesting Design, Hexagon & Diamond Patterns - Gold', 'lab33.webp', 56, '8', 2),
(183, 'Nidouillet 3 Tier Tempered', 40, 'Best Choice Products Set of 2 Decorative Round Accent Side Coffee End Table Nightstands for Living Room, Bedroom, Office, Home Décor w/Nesting Design, Hexagon & Diamond Patterns - Gold', 'imaha.jpg', 56, '6', 2),
(184, 'Wooden Mid-Century Modern', 50, 'Best Choice Products Wooden Mid-Century Modern Coffee Table, Accent Furniture for Living Room, Indoor, Home Décor w/Open Storage Shelf, Wood Grain Finish - Brown', 'lab11.jpg', 56, '8', 2),
(185, 'REYADE Snack Side Table', 100, 'REYADE Snack Side Table, C Shaped Mobile End Table, Wood Accent Furniture with Metal Frame for Sofa Couch and Bed in Living Room or Bedroom, Black', 'lab22.jpg', 56, '12', 2),
(186, 'Clarice Tall Wingback', 100, 'Great Deal Furniture Clarice Tall Wingback Tufted Fabric Accent Chair, Vintage Club Seat for Living Room (Light Beige)', 'lab44.jpg', 56, '6', 2),
(187, 'Washing  Gootrades Mini Portable', 700, 'Gootrades Mini Portable Washer and Dryer-Super Energy Saving\"40W\",Small Foldable Washing Machine for Baby Clothes,Underwear,Sock in Travel Apartments,Fully Automatic', 'waches.jpg', 57, '8', 2),
(188, 'Grey Fridge  ', 900, 'Midea 3.1 Cu. Ft. Compact Refrigerator, WHD-113FB1 - Black', 'Friedege grey.jpg', 57, '12', 2),
(189, 'Laptop Lenovo', 500, 'Lenovo Chromebook S330 Laptop, 14-Inch FHD (1920 x 1080) Display, MediaTek MT8173C Processor, 4GB LPDDR3, 64GB eMMC, Chrome OS, 81JW0000US, Business Black', 'laptoplaptop.jpg', 57, '12', 2),
(190, 'Screen TV', 200, 'All-New Toshiba 32LF221U21 32-inch Smart HD 720p TV - Fire TV Edition, Released 2020', 'ScreenTV.webp', 57, '6', 2),
(191, 'vaccuum cleaner', 200, 'Eureka WhirlWind Bagless Canister Vacuum Cleaner, Lightweight Vac for Carpets and Hard Floors, Blue', 'n0n0n0.webp', 57, '100', 2),
(192, 'Toshiba Microwave ', 300, 'Eureka WhirlWind Bagless Canister Vacuum Cleaner, Lightweight Vac for Carpets and Hard Floors, Blue', 'gagagaga.webp', 57, '5', 2),
(193, 'Haven Ridge Villa', 700, 'New Villa home at Haven Ridge Three rooms and 2 bath rooms . new construction ', 'flat1.jpg', 58, '1', 2),
(194, 'Villa Homestead Jordan Tabarboor', 589, 'New Villa home at Tabarboor Three rooms and 2 bath rooms . new construction	', 'mnmnmn.jpg', 58, '1', 2),
(195, 'New Villa home at Abdoun  new construction	', 9000, 'New Villa home at Abdoun   Three rooms and 2 bath rooms . new construction, three living room	', 'flat5.jpg', 58, '1', 2),
(196, '2019 Subaru WRX Limited', 300, 'EPA Classification: Compact Cars, MPG:24 Highway / 18 City ,Engine: Intercooled Turbo Premium Unleaded H-4 2.0L/122 cu in,Seating:5', 'car1v.jpg', 59, '4', 2),
(197, '2019 Subaru WRX Limited', 300, 'EPA Classification: Compact Cars, MPG:24 Highway / 18 City ,Engine: Intercooled Turbo Premium Unleaded H-4 2.0L/122 cu in,Seating:5', 'car2v.jpg', 59, '4', 2),
(198, '2019 Subaru WRX Limited', 300, 'EPA Classification: Compact Cars, MPG:24 Highway / 18 City ,Engine: Intercooled Turbo Premium Unleaded H-4 2.0L/122 cu in,Seating:5', 'car3v.jpg', 59, '4', 2),
(202, '2020 Jeep Gladiator Altitude', 33, 'MPG:24 Highway / 18 City ,Engine: Regular Unleaded V-6 3.6L/220 cu in,Seating:5,wheel base:137.3	', 'car4t.jpg', 59, '8', 2),
(203, '2020 Jeep Gladiator Altitude', 33, 'MPG:24 Highway / 18 City ,Engine: Regular Unleaded V-6 3.6L/220 cu in,Seating:5,wheel base:137.3	', 'car4t2.jpg', 59, '8', 2),
(204, '2020 Jeep Gladiator Altitude', 33, 'MPG:24 Highway / 18 City ,Engine: Regular Unleaded V-6 3.6L/220 cu in,Seating:5,wheel base:137.3	', 'car4t3.jpg', 59, '8', 2),
(205, 'Hurtle 3-Wheeled Scooter for Kids', 51, 'Hurtle 3-Wheeled Scooter for Kids - Wheel LED Lights, Adjustable Lean-to-Steer Handlebar, and Foldable Seat - Sit or Stand Ride with Brake for Boys and Girls Ages 1-14 Years Old', 'image1s.jpg', 60, '6', 2),
(206, 'Hurtle 3-Wheeled Scooter for Kids', 51, 'Hurtle 3-Wheeled Scooter for Kids - Wheel LED Lights, Adjustable Lean-to-Steer Handlebar, and Foldable Seat - Sit or Stand Ride with Brake for Boys and Girls Ages 1-14 Years Old', 'image2s.jpg', 60, '6', 2),
(207, 'Hurtle 3-Wheeled Scooter for Kids', 51, 'Hurtle 3-Wheeled Scooter for Kids - Wheel LED Lights, Adjustable Lean-to-Steer Handlebar, and Foldable Seat - Sit or Stand Ride with Brake for Boys and Girls Ages 1-14 Years Old', 'image3s.jpg', 60, '6', 2),
(208, 'Hurtle 3-Wheeled Scooter for Kids', 51, 'Hurtle 3-Wheeled Scooter for Kids - Wheel LED Lights, Adjustable Lean-to-Steer Handlebar, and Foldable Seat - Sit or Stand Ride with Brake for Boys and Girls Ages 1-14 Years Old', 'image4s.jpg', 60, '6', 2),
(209, 'Hurtle 3-Wheeled Scooter for Kids', 51, 'Hurtle 3-Wheeled Scooter for Kids - Wheel LED Lights, Adjustable Lean-to-Steer Handlebar, and Foldable Seat - Sit or Stand Ride with Brake for Boys and Girls Ages 1-14 Years Old', 'image5s.jpg', 60, '6', 2),
(210, 'Hurtle 3-Wheeled Scooter for Kids', 51, 'Hurtle 3-Wheeled Scooter for Kids - Wheel LED Lights, Adjustable Lean-to-Steer Handlebar, and Foldable Seat - Sit or Stand Ride with Brake for Boys and Girls Ages 1-14 Years Old', 'image6s.jpg', 60, '6', 2),
(211, 'BONAOK Bluetooth Wireless Microphone', 33, 'BONAOK Bluetooth Wireless Microphone,with Controllable LED Lights, Portable Handheld Karaoke Speaker Machine Birthday Home Party for Android/iPhone/PC or All Smartphone', 'mi1.jpg', 60, '8', 2),
(212, 'BONAOK Bluetooth Wireless Microphone', 33, 'BONAOK Bluetooth Wireless Microphone,with Controllable LED Lights, Portable Handheld Karaoke Speaker Machine Birthday Home Party for Android/iPhone/PC or All Smartphone', 'mi2.jpg', 60, '8', 2),
(213, 'BONAOK Bluetooth Wireless Microphone', 33, 'BONAOK Bluetooth Wireless Microphone,with Controllable LED Lights, Portable Handheld Karaoke Speaker Machine Birthday Home Party for Android/iPhone/PC or All Smartphone', 'mi3.jpg', 60, '8', 2),
(214, 'BONAOK Bluetooth Wireless Microphone', 33, 'BONAOK Bluetooth Wireless Microphone,with Controllable LED Lights, Portable Handheld Karaoke Speaker Machine Birthday Home Party for Android/iPhone/PC or All Smartphone', 'mi4.jpg', 60, '8', 2),
(215, 'BONAOK Bluetooth Wireless Microphone', 33, 'BONAOK Bluetooth Wireless Microphone,with Controllable LED Lights, Portable Handheld Karaoke Speaker Machine Birthday Home Party for Android/iPhone/PC or All Smartphone', 'mi5.jpg', 60, '8', 2),
(216, 'BONAOK Bluetooth Wireless Microphone', 33, 'BONAOK Bluetooth Wireless Microphone,with Controllable LED Lights, Portable Handheld Karaoke Speaker Machine Birthday Home Party for Android/iPhone/PC or All Smartphone', 'mi6.jpg', 60, '8', 2),
(217, 'Apple iPhone 7', 164, 'Apple iPhone 7, 32GB, Black -memory:32GB', 'phone1.jpg', 61, '6', 2),
(218, 'OUKITEL WP5 (2020) Rugged Cell Phone', 135, 'OUKITEL WP5 (2020) Rugged Cell Phone Unlocked, Android 10 Smartphone 8000mAh Battery IP68 Waterproof, 5.5', 'phone2.jpg', 61, '8', 2),
(219, 'Samsung Galaxy S9', 246, 'Samsung Galaxy S9, 64GB, Midnight Black - Fully Unlocked (Renewed) Roll over image to zoom in Samsung Galaxy S9, 64GB, Midnight Black - Fully Unlocked (Renewed)', 'phone3.jpg', 61, '8', 2);

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendor_id` int(3) NOT NULL,
  `vendor_name` varchar(255) NOT NULL,
  `manager_name` varchar(255) NOT NULL,
  `vendor_email` varchar(255) NOT NULL,
  `vendor_password` varchar(255) NOT NULL,
  `vendor_mobile` char(88) NOT NULL,
  `image` text NOT NULL,
  `image2` text NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendor_id`, `vendor_name`, `manager_name`, `vendor_email`, `vendor_password`, `vendor_mobile`, `image`, `image2`, `category`) VALUES
(17, 'Favily', 'Ahmad Ali Saleh Alsalaymeh', 'Favily2021@favily.com', '123456', '0782354555', 'attachment_87409860.jpg', 'licwe.PNG', 'Elegant bags,Men Shoes,Men Clothes,Flats');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `vendor_id` int(3) NOT NULL,
  `vendor_name` varchar(255) NOT NULL,
  `manager_name` varchar(255) NOT NULL,
  `vendor_email` varchar(255) NOT NULL,
  `vendor_password` varchar(255) NOT NULL,
  `vendor_mobile` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `image2` text NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`vendor_id`, `vendor_name`, `manager_name`, `vendor_email`, `vendor_password`, `vendor_mobile`, `image`, `image2`, `category`) VALUES
(2, 'Atomkit ', 'Raneen Forsan', 'Atomkit21@Atomkit.com', '123456', '0776532579', 'Company1.gif', 'licence.png', 'Waman Clothes ,Shoes,Accessories,Furniture'),
(3, 'Giant Owl', 'Rama Adel Esam Algandor', 'GaintOwl@gmail.com', '123456', '0766543228', 'Giant Owl.gif', 'licence.png', 'Shoes,Accessories,Furniture'),
(4, 'Chrome', 'Elian Ali  Khaled Alsarsak', 'Chrome@company.com', '123456', '0782354555', 'chrome.gif', 'licence.png', 'Laptops,Electronics'),
(5, 'Pinterest', 'Noor Ahmad Ali Maqbul', 'Pintrest32@company.jo', '123456', '0772134567', 'pinterest.gif', 'licence.png', 'Waman Clothes ,Shoes,Accessories,Furniture,Flats,Cars,Laptops,Man Clothes,Kids Clothes,Smart Phones,Electronics,Bags');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `lastorders`
--
ALTER TABLE `lastorders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `vendor_id` (`vendor_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `product_ibfk_1` (`vendor_id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendor_id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `cart_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `message_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `lastorders`
--
ALTER TABLE `lastorders`
  MODIFY `order_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendor_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `vendor_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`vendor_id`) REFERENCES `product` (`vendor_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`vendor_id`) REFERENCES `vendors` (`vendor_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
