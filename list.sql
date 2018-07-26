-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2018 at 12:02 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `list`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `password` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`password`, `login`) VALUES
('123', 'Alisa');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `glob` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `glob`) VALUES
(1, 'Real Estate', 1),
(2, 'Vehicles', 1),
(3, 'Electronics', 1),
(4, 'Appliaces', 1),
(5, 'Household', 1),
(6, 'Clothing and Fashion', 1),
(7, 'Baby and Kids', 1),
(8, 'Culture and Hobby', 1),
(9, 'Pets and Plants', 1),
(10, 'Tools and Materials', 1),
(11, 'Everything Else', 1),
(12, 'Services', 2),
(13, 'Jobs', 3);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(8);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) NOT NULL,
  `sub_id` int(10) UNSIGNED NOT NULL,
  `description` text NOT NULL,
  `location` varchar(50) NOT NULL,
  `data_of_put` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `data_of_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `info_array` text NOT NULL,
  `us_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `sub_id`, `description`, `location`, `data_of_put`, `data_of_update`, `info_array`, `us_id`) VALUES
(62, 'Ноутбук ASUS Laptop X507UA-BQ040T (90NB0', 32, 'Характеристики Тип корпуса ноутбук  Игровой ноутбук нет  Серия (модель) ASUS X507UB  Размер экрана 15.6 \"  Разрешение экрана 1920x1080  Тип матрицы TN  Сенсорный экран нет  Поверхность экрана матовая ', 'Erebuni', '2018-07-25 11:39:50', '2018-07-25 11:40:10', 'a:6:{s:4:\"type\";s:8:\"Exchange\";s:9:\"condition\";s:3:\"New\";s:5:\"price\";s:6:\"350000\";s:8:\"currency\";s:3:\"AMD\";s:6:\"photos\";a:3:{i:0;s:12:\"816511_1.jpg\";i:1;s:16:\"816511_2 (1).jpg\";i:2;s:12:\"816511_3.jpg\";}s:6:\"status\";s:6:\"Agency\";}', 6),
(63, 'Игровой ноутбук ASUS ROG GL702VM (90NB0D', 32, '17.3 \", 1920x1080, Intel Core i5, 7300HQ, 4 ядра, 2500 МГц, 8 Гб, GeForce GTX 1060M, HDD + SSD, 1.0 Тб + 128 Гб (SSD), NO DVD, Bluetooth, Wi-Fi, DOS, черный', 'Echmiadzin', '2018-07-25 11:47:57', '2018-07-25 11:48:31', 'a:6:{s:4:\"type\";s:7:\"Offered\";s:9:\"condition\";s:3:\"New\";s:5:\"price\";s:6:\"800000\";s:8:\"currency\";s:3:\"AMD\";s:6:\"photos\";a:3:{i:0;s:40:\"27399732_798283790381391_938238728_n.jpg\";i:1;s:95:\"asus_rog_gl702vm_i5_7300hq_8gb_1tb_5.4_128gb_ssd_nodvd_17.3_fhd_ag_gtx1060m_3gb_dos_black_2.jpg\";i:2;s:95:\"asus_rog_gl702vm_i5_7300hq_8gb_1tb_5.4_128gb_ssd_nodvd_17.3_fhd_ag_gtx1060m_3gb_dos_black_3.jpg\";}s:6:\"status\";s:6:\"Agency\";}', 6),
(64, 'Ноутбук HP 17-bs036ur (2FQ82EA)', 32, 'Ноутбук HP 17-bs036ur i3-6006U 17.3\" HD/4GB/500GB/HDG 520/DVD-RW/DOS/Black HP 17-bs036ur, на базе процессора Intel Core i3 имеет прекрасное соотношение цена - качество. Благодаря видеокарте Intel HD G', 'Echmiadzin', '2018-07-25 11:53:53', '2018-07-25 11:54:14', 'a:6:{s:4:\"type\";s:7:\"Offered\";s:9:\"condition\";s:3:\"New\";s:5:\"price\";s:6:\"300000\";s:8:\"currency\";s:3:\"AMD\";s:6:\"photos\";a:4:{i:0;s:79:\"noutbuk_hp_17_bs036ur_i3_6006u_17.3_hd_4gb_500gb_hdg_520_dvd_rw_dos_black_1.jpg\";i:1;s:79:\"noutbuk_hp_17_bs036ur_i3_6006u_17.3_hd_4gb_500gb_hdg_520_dvd_rw_dos_black_2.jpg\";i:2;s:79:\"noutbuk_hp_17_bs036ur_i3_6006u_17.3_hd_4gb_500gb_hdg_520_dvd_rw_dos_black_3.jpg\";i:3;s:79:\"noutbuk_hp_17_bs036ur_i3_6006u_17.3_hd_4gb_500gb_hdg_520_dvd_rw_dos_black_4.jpg\";}s:6:\"status\";s:6:\"Agency\";}', 6),
(65, 'Ноутбук HP x2 10-p001ur (Y5V03EA)', 32, '10.1 \", 1280x800, Intel Atom, x5-Z8350, 4 ядра, 1440 МГц, 2 Гб, HD Graphics 400, SSD, 32 Гб, NO DVD, Bluetooth, Wi-Fi, 3900 мА*ч, Windows 10 Home, красный', 'Echmiadzin', '2018-07-25 11:52:09', '2018-07-25 11:54:14', 'a:6:{s:4:\"type\";s:7:\"Offered\";s:9:\"condition\";s:3:\"New\";s:5:\"price\";s:6:\"200000\";s:8:\"currency\";s:3:\"AMD\";s:6:\"photos\";a:3:{i:0;s:110:\"noutbuk_hp_x2_10_p001ur_atom_x5_z8350_1.44_2gb_32gb_ssd_10.1_hd_touch_stylus_w10_detachable_cardinal_red_1.jpg\";i:1;s:110:\"noutbuk_hp_x2_10_p001ur_atom_x5_z8350_1.44_2gb_32gb_ssd_10.1_hd_touch_stylus_w10_detachable_cardinal_red_2.jpg\";i:2;s:110:\"noutbuk_hp_x2_10_p001ur_atom_x5_z8350_1.44_2gb_32gb_ssd_10.1_hd_touch_stylus_w10_detachable_cardinal_red_3.jpg\";}s:6:\"status\";s:6:\"Agency\";}', 6),
(66, 'Ноутбук HP EliteBook 840 G4 (Z2V66EA)', 32, '14.0 \", 1920x1080, Intel Core i7, 7500U, 2 ядра, 2700 МГц, 16 Гб, HD Graphics 620, SSD, 512 Гб, NO DVD, Bluetooth, Wi-Fi, Windows 10 Pro, черный, серебристый', 'Echmiadzin', '2018-07-25 11:51:04', '2018-07-25 11:54:15', 'a:6:{s:4:\"type\";s:7:\"Offered\";s:9:\"condition\";s:13:\"Please select\";s:5:\"price\";s:7:\"1100000\";s:8:\"currency\";s:3:\"AMD\";s:6:\"photos\";a:3:{i:0;s:12:\"624028_1.jpg\";i:1;s:12:\"624028_2.jpg\";i:2;s:12:\"624028_3.jpg\";}s:6:\"status\";s:6:\"Agency\";}', 6),
(68, 'Pahanjvum e Xoharar', 127, 'ash. partadir ee', 'Please select', '2018-07-25 12:16:57', '2018-07-25 12:17:02', 'a:2:{s:8:\"emp_type\";s:9:\"Temporary\";s:9:\"stat_jobs\";s:5:\"Owner\";}', 6);

-- --------------------------------------------------------

--
-- Table structure for table `statement`
--

CREATE TABLE `statement` (
  `id` int(10) UNSIGNED NOT NULL,
  `sub_id` int(10) UNSIGNED NOT NULL,
  `us_id` int(11) NOT NULL,
  `data_of_put` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `info_array` text NOT NULL,
  `done` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `statement`
--

INSERT INTO `statement` (`id`, `sub_id`, `us_id`, `data_of_put`, `info_array`, `done`) VALUES
(135, 127, 6, '2018-07-25 12:16:24', 's:82:\"{\"location\":\"Please select\",\"name\":\"\",\"description\":\"\",\"emp_type\":\"Please select\"}\";', 0),
(136, 1, 6, '2018-07-25 20:15:46', 's:229:\"{\"location\":\"Please select\",\"name\":\"\",\"description\":\"\",\"type\":\"Offered\",\"address\":\"\",\"constype\":\"Please select\",\"rooms\":\"Please select\",\"floor\":\"Please select\",\"floorbuild\":\"Please select\",\"price\":\"\",\"currency\":\"AMD\",\"photos\":[]}\";', 0),
(138, 100, 6, '2018-07-25 21:26:09', 's:127:\"{\"location\":\"Avan\",\"name\":\"d\",\"description\":\"ddddddddddd\",\"type\":\"Offered\",\"price\":\"dddddddddddd\",\"currency\":\"AMD\",\"photos\":[]}\";', 0),
(139, 100, 6, '2018-07-25 21:26:25', 's:121:\"{\"location\":\"Avan\",\"name\":\"d\",\"description\":\"ddddd\",\"type\":\"Offered\",\"price\":\"dddddddddddd\",\"currency\":\"AMD\",\"photos\":[]}\";', 0),
(140, 100, 6, '2018-07-25 21:40:29', 's:213:\"{\"location\":\"Avan\",\"name\":\"1010\",\"type\":\"Offered\",\"currency\":\"AMD\",\"photos\":[\"955a2cd7470534c0092160e940039ed5_consumer-goods-cliparts-free-download-clip-art-free-clip-art-consumer-online-clipart_1300-1271.jpeg\"]}\";', 0),
(142, 100, 6, '2018-07-25 21:43:36', 's:114:\"{\"location\":\"Erebuni\",\"name\":\"ppppp\",\"description\":\"pppppppppppppp\",\"type\":\"Offered\",\"currency\":\"AMD\",\"photos\":[]}\";', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `bajin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `cat_id`, `bajin`) VALUES
(1, 'Apartments', 1, 'For Sale'),
(2, 'Houses', 1, 'For Sale'),
(3, 'Land', 1, 'For Sale'),
(4, 'Commerical Properties', 1, 'For Sale'),
(5, 'Garages', 1, 'For Sale'),
(6, 'Other', 1, 'For Sale'),
(8, 'Aparments', 1, 'For Rent'),
(9, 'Houses', 1, 'For Rent'),
(10, 'Commerical Properties', 1, 'For Rent'),
(11, 'Garages', 1, 'For Rent'),
(12, 'Other', 1, 'For Rent'),
(13, 'Passenger Cars', 2, 'Passenger Cars'),
(14, 'Cars from Abroad', 2, 'Passenger Cars'),
(15, 'Car Parts', 2, 'Passenger Cars'),
(16, 'Car Electronics', 2, 'Passenger Cars'),
(17, 'Motorcycles', 2, 'Motorcycles'),
(18, 'Parts and Accsessoires', 2, 'Motorcycles'),
(19, 'Bicycles', 2, 'Bicycles'),
(20, 'Parts and Accsessoires', 2, 'Bicycles'),
(21, 'Buses', 2, 'Commerical Vehicles'),
(22, 'Agriculture Vehicles', 2, 'Commerical Vehicles'),
(23, 'Construction and Heavy Machinery', 2, 'Commerical Vehicles'),
(24, 'Personal Transportation', 2, 'Other Transport'),
(25, 'ATVs and Snowmobiles', 2, 'Other Transport'),
(26, 'RVs and Trailers', 2, 'Other Transport'),
(27, 'Boats and Water Transport', 2, 'Other Transport'),
(28, 'Other', 2, ''),
(29, 'Phones', 3, 'Phones'),
(30, 'Accessories and Parts', 3, 'Phones'),
(31, 'Numbers and SIM Cards', 3, 'Phones'),
(32, 'Notebooks', 3, 'Computers'),
(33, 'Computers', 3, 'Computers'),
(34, 'Tablets', 3, 'Computers'),
(35, 'Computer Games', 3, 'Games and Consoles'),
(36, 'Televisions', 3, 'TV and Video'),
(37, 'Media Players', 3, 'TV and Video'),
(38, 'Cameras', 3, 'Photo and Video Equipment'),
(39, 'Video Cameras', 3, 'Photo and Video Equipment'),
(40, 'Players and Stereos', 3, 'Audio'),
(41, 'Other', 3, ''),
(52, 'Washers and Dryers', 4, 'Home Appliances'),
(53, 'Kitchen Applicances', 4, 'Home Appliances'),
(54, 'Heaters', 4, 'Heating and Cooling'),
(55, 'Air Conditioning', 4, 'Heating and Cooling'),
(56, 'Sewing Machines', 4, 'Home Appliances'),
(57, 'Sofas and Armchairs', 5, 'Furniture'),
(58, 'Tables and Chairs', 5, 'Furniture'),
(59, 'Bedroom Furniture', 5, 'Furniture'),
(60, 'Lighting', 5, 'Interior Items'),
(61, 'Everything Else', 5, 'Interior Items'),
(62, ' Glassware', 5, 'Interior Items'),
(63, 'Other', 5, ''),
(64, 'Women\'s Clothing', 6, 'Clothing'),
(65, 'Men\'s Clothing', 6, 'Clothing'),
(66, 'Women\'s Shoes', 6, ' Shoes'),
(67, 'Men\'s  Shoes', 6, 'Shoes'),
(68, 'Watches', 6, 'Accessories'),
(69, 'Handbags and Wallets', 6, 'Accessories'),
(70, ' Perfume', 6, ' Perfume'),
(71, 'Cosmetics', 6, 'Perfume'),
(72, 'Beauty and Health', 6, 'Perfume'),
(73, ' For Weddings', 6, 'Wedding'),
(74, 'For Girls', 7, 'Children\'s Clothing'),
(75, 'For Boys', 7, 'Children\'s Clothing'),
(76, 'Toys', 7, 'Toys'),
(77, 'Strollers', 7, 'Toys'),
(78, 'Children\'s Furniture', 7, 'Toys'),
(79, 'Other', 7, ''),
(80, 'Collectible Items', 8, 'Antiques and Art'),
(81, 'Arts Objects', 8, 'Antiques and Art'),
(82, 'Arts and Crafts', 8, 'Antiques and Art'),
(83, 'Music Instruments', 8, 'Instruments'),
(84, 'Sports and Fitness', 8, 'Sports'),
(85, 'Hunting and Fishing', 8, 'Sports'),
(86, 'Books and Magazines', 8, 'Books'),
(87, 'Dogs', 9, 'Animals'),
(88, 'Fish and Aquarium', 9, 'Animals'),
(89, 'Farm Animals', 9, 'Animals'),
(90, 'Pet Products', 9, 'Pet Products'),
(91, 'House Plants', 9, 'Plants'),
(92, 'Outdoor Plants', 9, 'Plants'),
(93, 'Everything for the Garden', 9, 'Plants'),
(94, 'Hand Tools', 10, 'Tools'),
(95, 'Machine Tools', 10, 'Tools'),
(96, 'Manufacturing Equipment', 10, 'Tools'),
(97, 'Medical Equipment', 10, 'Tools'),
(98, 'Gardening Equipment', 10, 'Tools'),
(99, 'Other', 10, 'Tools'),
(100, 'Building Materials', 10, 'Materials'),
(101, 'Electrical', 10, 'Materials'),
(102, 'Other', 10, 'Materials'),
(103, 'Furniture To Order', 12, 'Construction and Repairs'),
(104, 'Construction Services', 12, 'Construction and Repairs'),
(105, 'Electrictrical Work', 12, 'Construction and Repairs'),
(106, 'Cars for Hire', 12, 'Transportation'),
(107, 'Car Service and Repair', 12, 'Transportation'),
(108, 'Computers and Internet', 12, 'Electronics'),
(109, 'Phones and Electronics', 12, 'Electronics'),
(110, 'Foreign Languages', 12, 'Education and Teaching'),
(111, 'Courses and Seminars', 12, 'Education and Teaching'),
(112, 'Everything Else', 12, 'Education and Teaching'),
(113, 'Accounting and Finance', 12, 'Business Services'),
(114, 'Translations and Texts', 12, 'Business Services'),
(115, 'Everything Else', 12, 'Business Services'),
(116, 'Appliance Repair', 12, 'Domestic Services'),
(117, 'Child Care', 12, 'Domestic Services'),
(118, 'Beauty and Makeup', 12, 'Beauty and Health'),
(119, 'Haircuts and Hair', 12, 'Beauty and Health'),
(120, 'Medicine and Dentistry', 12, 'Beauty and Health'),
(121, 'Everything Else', 12, 'Beauty and Health'),
(122, 'Restaurants and Catering', 12, 'Events and Celebrations'),
(123, 'Event Management', 12, 'Events and Celebrations'),
(124, 'Travel and Tourism', 12, 'Travel and Tourism'),
(125, 'Media and Design', 12, 'Media and Design'),
(126, 'Other', 12, ''),
(127, 'Office and Secretary', 13, 'Office'),
(128, 'Finance and Legal', 13, 'Office'),
(129, 'Media and Design', 13, 'Office'),
(130, 'Business and Marketing', 13, 'Business'),
(131, 'Food and Restaurants', 13, 'Business'),
(132, 'Transportation and Taxi', 13, 'Business'),
(133, 'Construction&nbsp; and Architecture', 13, 'Architecture'),
(134, 'Manufacturing and Production', 13, 'Architecture'),
(135, 'Education and Teaching', 13, 'Education'),
(136, 'Medicine and Health', 13, 'Medicine'),
(137, 'Resumes', 13, 'Looking for a Job'),
(138, 'Other', 13, '');

-- --------------------------------------------------------

--
-- Table structure for table `subcat_inputs`
--

CREATE TABLE `subcat_inputs` (
  `sub_id` int(10) UNSIGNED NOT NULL,
  `sub_input` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subcat_inputs`
--

INSERT INTO `subcat_inputs` (`sub_id`, `sub_input`) VALUES
(1, 'location'),
(1, 'type'),
(1, 'price'),
(1, 'title'),
(1, 'description'),
(1, 'photos'),
(1, 'address'),
(1, 'constype'),
(1, 'rooms'),
(1, 'living space'),
(1, 'floor'),
(1, 'floorbuild'),
(1, 'status_realest'),
(2, 'location'),
(2, 'type'),
(2, 'price'),
(2, 'title'),
(2, 'description'),
(2, 'address'),
(2, 'constype'),
(2, 'rooms'),
(2, 'living space'),
(2, 'status_realest'),
(2, 'photos'),
(3, 'location'),
(3, 'type'),
(3, 'price'),
(3, 'title'),
(3, 'description'),
(3, 'photos'),
(3, 'Land size'),
(3, 'status_realest'),
(4, 'location'),
(4, 'typemin'),
(4, 'price'),
(4, 'title'),
(4, 'description'),
(4, 'photos'),
(4, 'address'),
(4, 'constype'),
(4, 'living space'),
(4, 'status_realest'),
(5, 'location'),
(5, 'type'),
(5, 'price'),
(5, 'title'),
(5, 'description'),
(5, 'photos'),
(5, 'address'),
(5, 'status_realest'),
(6, 'location'),
(6, 'type'),
(6, 'price'),
(6, 'description'),
(6, 'photos'),
(6, 'address'),
(6, 'status_realest'),
(6, 'title'),
(8, 'location'),
(8, 'typemin'),
(8, 'price rent'),
(8, 'title'),
(8, 'description'),
(8, 'photos'),
(8, 'address'),
(8, 'constype'),
(8, 'rooms'),
(8, 'living space'),
(8, 'floor'),
(8, 'floorbuild'),
(8, 'status_realest'),
(9, 'location'),
(9, 'typemin'),
(9, 'price rent'),
(9, 'title'),
(9, 'description'),
(9, 'photos'),
(9, 'status_realest'),
(9, 'address'),
(9, 'constype'),
(9, 'rooms'),
(9, 'living space'),
(10, 'location'),
(10, 'typemin'),
(10, 'price'),
(10, 'title'),
(10, 'description'),
(10, 'photos'),
(10, 'address'),
(10, 'living space'),
(10, 'status_realest'),
(11, 'location'),
(11, 'type'),
(11, 'price'),
(11, 'title'),
(11, 'description'),
(11, 'photos'),
(11, 'address'),
(11, 'status_realest'),
(12, 'location'),
(12, 'typemin'),
(12, 'price'),
(12, 'title'),
(12, 'description'),
(12, 'photos'),
(12, 'address'),
(12, 'status_realest'),
(13, 'location'),
(13, 'type'),
(13, 'price'),
(13, 'title'),
(13, 'description'),
(13, 'photos'),
(13, 'make'),
(13, 'model'),
(13, 'year'),
(13, 'mileage'),
(13, 'engine'),
(13, 'transmission'),
(13, 'wheel'),
(13, 'customs'),
(13, 'status_vehicles'),
(14, 'location'),
(14, 'type'),
(14, 'price'),
(14, 'title'),
(14, 'description'),
(14, 'photos'),
(14, 'status_vehicles'),
(14, 'make'),
(14, 'model'),
(14, 'year'),
(14, 'mileage'),
(14, 'engine'),
(14, 'transmission'),
(14, 'wheel'),
(15, 'location'),
(15, 'type'),
(15, 'price'),
(15, 'title'),
(15, 'description'),
(15, 'photos'),
(15, 'make'),
(16, 'location'),
(16, 'type'),
(16, 'price'),
(16, 'title'),
(16, 'description'),
(16, 'photos'),
(16, 'condition'),
(17, 'location'),
(17, 'type'),
(17, 'price'),
(17, 'title'),
(17, 'description'),
(17, 'photos'),
(17, 'condition'),
(18, 'location'),
(18, 'type'),
(18, 'price'),
(18, 'title'),
(18, 'description'),
(18, 'photos'),
(19, 'location'),
(19, 'type'),
(19, 'price'),
(19, 'title'),
(19, 'description'),
(19, 'photos'),
(19, 'condition'),
(20, 'location'),
(20, 'type'),
(20, 'price'),
(20, 'title'),
(20, 'description'),
(20, 'photos'),
(21, 'location'),
(21, 'type'),
(21, 'title'),
(21, 'price'),
(21, 'description'),
(21, 'photos'),
(22, 'location'),
(22, 'price'),
(22, 'title'),
(22, 'description'),
(22, 'photos'),
(23, 'location'),
(23, 'price'),
(23, 'title'),
(23, 'description'),
(23, 'photos'),
(23, 'type_veh'),
(24, 'location'),
(24, 'type'),
(24, 'price'),
(24, 'title'),
(24, 'description'),
(24, 'photos'),
(24, 'condition'),
(25, 'location'),
(25, 'type'),
(25, 'price'),
(25, 'title'),
(25, 'description'),
(25, 'photos'),
(25, 'condition'),
(26, 'location'),
(26, 'type'),
(26, 'price'),
(26, 'title'),
(26, 'description'),
(26, 'photos'),
(27, 'location'),
(27, 'type'),
(27, 'price'),
(27, 'title'),
(27, 'description'),
(27, 'photos'),
(27, 'condition'),
(28, 'location'),
(28, 'type'),
(28, 'price'),
(28, 'title'),
(28, 'description'),
(28, 'photos'),
(29, 'location'),
(29, 'type'),
(29, 'price'),
(29, 'title'),
(29, 'description'),
(29, 'photos'),
(30, 'location'),
(30, 'type'),
(30, 'price'),
(30, 'title'),
(30, 'description'),
(30, 'photos'),
(31, 'location'),
(31, 'type'),
(31, 'price'),
(31, 'title'),
(31, 'description'),
(32, 'location'),
(32, 'type'),
(32, 'condition'),
(32, 'price'),
(32, 'title'),
(32, 'description'),
(32, 'photos'),
(32, 'status_realest'),
(33, 'location'),
(33, 'type'),
(33, 'price'),
(33, 'title'),
(33, 'description'),
(33, 'photos'),
(33, 'status_realest'),
(33, 'condition'),
(34, 'location'),
(34, 'type'),
(34, 'price'),
(34, 'title'),
(34, 'description'),
(34, 'photos'),
(34, 'condition'),
(34, 'status_realest'),
(35, 'location'),
(35, 'type'),
(35, 'price'),
(35, 'title'),
(35, 'description'),
(35, 'photos'),
(36, 'location'),
(36, 'type'),
(36, 'price'),
(36, 'title'),
(36, 'description'),
(36, 'photos'),
(36, 'make'),
(36, 'condition'),
(37, 'location'),
(37, 'type'),
(37, 'price'),
(37, 'title'),
(37, 'description'),
(37, 'photos'),
(37, 'condition'),
(15, 'type_car_part'),
(22, 'type_veh'),
(38, 'location'),
(38, 'type_veh'),
(38, 'price'),
(38, 'title'),
(38, 'description'),
(38, 'photos'),
(38, 'condition'),
(39, 'location'),
(39, 'type_veh'),
(39, 'price'),
(39, 'title'),
(39, 'description'),
(39, 'photos'),
(39, 'condition'),
(40, 'location'),
(40, 'type'),
(40, 'price'),
(40, 'title'),
(40, 'description'),
(40, 'photos'),
(40, 'condition'),
(41, 'location'),
(41, 'type'),
(41, 'price'),
(41, 'title'),
(41, 'description'),
(41, 'photos'),
(52, 'location'),
(52, 'type'),
(52, 'price'),
(52, 'title'),
(52, 'description'),
(52, 'photos'),
(52, 'condition'),
(53, 'location'),
(53, 'type'),
(53, 'price'),
(53, 'title'),
(53, 'description'),
(53, 'photos'),
(53, 'condition'),
(54, 'location'),
(54, 'type'),
(54, 'price'),
(54, 'description'),
(54, 'photos'),
(54, 'condition'),
(54, 'title'),
(55, 'location'),
(55, 'type'),
(55, 'price'),
(55, 'title'),
(55, 'description'),
(55, 'photos'),
(55, 'condition'),
(56, 'location'),
(56, 'type'),
(56, 'price'),
(56, 'title'),
(56, 'description'),
(56, 'photos'),
(56, 'condition'),
(57, 'location'),
(57, 'type'),
(57, 'price'),
(57, 'title'),
(57, 'description'),
(57, 'photos'),
(57, 'condition'),
(58, 'location'),
(58, 'type'),
(58, 'condition'),
(58, 'price'),
(58, 'title'),
(58, 'description'),
(58, 'photos'),
(59, 'location'),
(59, 'type'),
(59, 'condition'),
(59, 'price'),
(59, 'title'),
(59, 'description'),
(59, 'photos'),
(60, 'location'),
(60, 'type'),
(60, 'price'),
(60, 'title'),
(60, 'description'),
(60, 'photos'),
(61, 'location'),
(61, 'type'),
(61, 'price'),
(61, 'title'),
(61, 'description'),
(61, 'photos'),
(62, 'location'),
(62, 'type'),
(62, 'price'),
(62, 'title'),
(62, 'description'),
(62, 'photos'),
(62, 'condition'),
(63, 'location'),
(63, 'type'),
(63, 'price'),
(63, 'title'),
(63, 'description'),
(63, 'photos'),
(64, 'location'),
(64, 'type_veh'),
(64, 'condition'),
(64, 'price'),
(64, 'title'),
(64, 'description'),
(64, 'photos'),
(65, 'location'),
(65, 'type'),
(65, 'condition'),
(65, 'price'),
(65, 'title'),
(65, 'description'),
(65, 'photos'),
(66, 'location'),
(66, 'type'),
(66, 'condition'),
(66, 'Shoes size'),
(66, 'price'),
(66, 'title'),
(66, 'description'),
(66, 'photos'),
(67, 'location'),
(67, 'type'),
(67, 'Shoes size'),
(67, 'condition'),
(67, 'price'),
(67, 'title'),
(67, 'photos'),
(67, 'description'),
(68, 'location'),
(68, 'type'),
(68, 'price'),
(68, 'title'),
(68, 'description'),
(68, 'photos'),
(69, 'location'),
(69, 'type'),
(69, 'condition'),
(69, 'price'),
(69, 'title'),
(69, 'description'),
(69, 'photos'),
(70, 'location'),
(70, 'type'),
(70, 'price'),
(70, 'title'),
(70, 'description'),
(70, 'photos'),
(71, 'location'),
(71, 'type'),
(71, 'price'),
(71, 'title'),
(71, 'description'),
(71, 'photos'),
(72, 'location'),
(72, 'type'),
(72, 'price'),
(72, 'title'),
(72, 'description'),
(72, 'photos'),
(73, 'location'),
(73, 'type_veh'),
(73, 'condition'),
(73, 'price'),
(73, 'title'),
(73, 'description'),
(73, 'photos'),
(74, 'location'),
(74, 'type_veh'),
(74, 'condition'),
(74, 'price'),
(74, 'title'),
(74, 'description'),
(74, 'photos'),
(75, 'location'),
(75, 'type_veh'),
(75, 'condition'),
(75, 'price'),
(75, 'title'),
(75, 'description'),
(75, 'photos'),
(76, 'location'),
(76, 'type'),
(76, 'condition'),
(76, 'price'),
(76, 'title'),
(76, 'description'),
(76, 'photos'),
(77, 'location'),
(77, 'type'),
(77, 'condition'),
(77, 'price'),
(77, 'title'),
(77, 'description'),
(77, 'photos'),
(78, 'location'),
(78, 'type'),
(78, 'condition'),
(78, 'price'),
(78, 'title'),
(78, 'description'),
(78, 'photos'),
(79, 'location'),
(79, 'type'),
(79, 'price'),
(79, 'title'),
(79, 'description'),
(79, 'photos'),
(80, 'location'),
(80, 'type'),
(80, 'price'),
(80, 'title'),
(80, 'description'),
(80, 'photos'),
(81, 'location'),
(81, 'type'),
(81, 'price'),
(81, 'title'),
(81, 'description'),
(81, 'photos'),
(82, 'location'),
(82, 'type'),
(82, 'price'),
(82, 'title'),
(82, 'description'),
(82, 'photos'),
(83, 'location'),
(83, 'type_veh'),
(83, 'price'),
(83, 'title'),
(83, 'description'),
(83, 'photos'),
(84, 'location'),
(84, 'type'),
(84, 'price'),
(84, 'title'),
(84, 'description'),
(84, 'photos'),
(85, 'location'),
(85, 'type'),
(85, 'price'),
(85, 'title'),
(85, 'description'),
(85, 'photos'),
(86, 'location'),
(86, 'type'),
(86, 'price'),
(86, 'title'),
(86, 'description'),
(86, 'photos'),
(87, 'location'),
(87, 'type'),
(87, 'price'),
(87, 'title'),
(87, 'description'),
(87, 'photos'),
(88, 'location'),
(88, 'type'),
(88, 'price'),
(88, 'title'),
(88, 'description'),
(88, 'photos'),
(89, 'location'),
(89, 'type'),
(89, 'price'),
(89, 'title'),
(89, 'description'),
(89, 'photos'),
(90, 'location'),
(90, 'type'),
(90, 'price'),
(90, 'title'),
(90, 'description'),
(90, 'photos'),
(91, 'location'),
(91, 'type'),
(91, 'price'),
(91, 'title'),
(91, 'description'),
(91, 'photos'),
(92, 'location'),
(92, 'type'),
(92, 'price'),
(92, 'title'),
(92, 'description'),
(92, 'photos'),
(93, 'location'),
(93, 'type'),
(93, 'price'),
(93, 'title'),
(93, 'description'),
(93, 'photos'),
(94, 'location'),
(94, 'type_veh'),
(94, 'price'),
(94, 'title'),
(94, 'description'),
(94, 'photos'),
(95, 'location'),
(95, 'type_veh'),
(95, 'price'),
(95, 'title'),
(95, 'description'),
(95, 'photos'),
(96, 'location'),
(96, 'type_veh'),
(96, 'price'),
(96, 'title'),
(96, 'description'),
(96, 'photos'),
(97, 'location'),
(97, 'type_veh'),
(97, 'price'),
(97, 'title'),
(97, 'description'),
(97, 'photos'),
(98, 'location'),
(98, 'type_veh'),
(98, 'price'),
(98, 'title'),
(98, 'description'),
(98, 'photos'),
(99, 'location'),
(99, 'type_veh'),
(99, 'price'),
(99, 'title'),
(99, 'description'),
(99, 'photos'),
(100, 'location'),
(100, 'type'),
(100, 'price'),
(100, 'title'),
(100, 'description'),
(100, 'photos'),
(101, 'location'),
(101, 'type'),
(101, 'price'),
(101, 'title'),
(101, 'description'),
(101, 'photos'),
(102, 'location'),
(102, 'type'),
(102, 'price'),
(102, 'title'),
(102, 'description'),
(102, 'photos'),
(103, 'location'),
(103, 'title'),
(103, 'description'),
(103, 'photos'),
(104, 'location'),
(104, 'title'),
(104, 'Please select'),
(104, 'photos'),
(105, 'location'),
(105, 'title'),
(105, 'description'),
(105, 'photos'),
(106, 'location'),
(106, 'title'),
(106, 'description'),
(106, 'photos'),
(107, 'location'),
(107, 'title'),
(107, 'description'),
(107, 'photos'),
(108, 'location'),
(108, 'title'),
(108, 'description'),
(108, 'photos'),
(109, 'location'),
(109, 'title'),
(109, 'description'),
(109, 'photos'),
(110, 'location'),
(110, 'title'),
(110, 'description'),
(110, 'photos'),
(111, 'location'),
(111, 'title'),
(111, 'description'),
(111, 'photos'),
(112, 'location'),
(112, 'title'),
(112, 'description'),
(112, 'photos'),
(113, 'location'),
(113, 'title'),
(113, 'description'),
(113, 'photos'),
(114, 'location'),
(114, 'title'),
(114, 'description'),
(114, 'photos'),
(115, 'location'),
(115, 'title'),
(115, 'description'),
(115, 'photos'),
(116, 'location'),
(116, 'title'),
(116, 'description'),
(116, 'photos'),
(117, 'location'),
(117, 'title'),
(117, 'description'),
(117, 'photos'),
(118, 'location'),
(118, 'title'),
(118, 'description'),
(118, 'photos'),
(119, 'location'),
(119, 'title'),
(119, 'description'),
(119, 'photos'),
(120, 'location'),
(120, 'title'),
(120, 'photos'),
(120, 'description'),
(121, 'location'),
(121, 'title'),
(121, 'photos'),
(121, 'description'),
(122, 'location'),
(122, 'title'),
(122, 'description'),
(122, 'photos'),
(123, 'location'),
(123, 'title'),
(123, 'description'),
(123, 'photos'),
(124, 'location'),
(124, 'title'),
(124, 'description'),
(124, 'photos'),
(125, 'location'),
(125, 'title'),
(125, 'description'),
(125, 'photos'),
(126, 'location'),
(126, 'title'),
(126, 'description'),
(126, 'photos'),
(127, 'location'),
(127, 'emp_type'),
(127, 'job_shcedule'),
(127, 'salary_from'),
(127, 'title'),
(127, 'description'),
(127, 'status_jobs'),
(128, 'location'),
(128, 'emp_type'),
(128, 'job_shcedule'),
(128, 'salary_from'),
(128, 'title'),
(128, 'description'),
(128, 'status_jobs'),
(129, 'location'),
(129, 'emp_type'),
(129, 'job_shcedule'),
(129, 'salary_from'),
(129, 'title'),
(129, 'description'),
(129, 'status_jobs'),
(130, 'location'),
(130, 'emp_type'),
(130, 'job_shcedule'),
(130, 'salary_from'),
(130, 'title'),
(130, 'description'),
(130, 'status_jobs'),
(131, 'location'),
(131, 'emp_type'),
(131, 'job_shcedule'),
(131, 'salary_from'),
(131, 'title'),
(131, 'description'),
(131, 'status_jobs'),
(132, 'location'),
(132, 'emp_type'),
(132, 'job_shcedule'),
(132, 'salary_from'),
(132, 'title'),
(132, 'description'),
(132, 'status_jobs'),
(133, 'location'),
(133, 'emp_type'),
(133, 'job_shcedule'),
(133, 'salary_from'),
(133, 'title'),
(133, 'description'),
(133, 'status_jobs'),
(134, 'location'),
(134, 'emp_type'),
(134, 'job_shcedule'),
(134, 'salary_from'),
(134, 'title'),
(134, 'description'),
(134, 'status_jobs'),
(135, 'location'),
(135, 'emp_type'),
(135, 'job_shcedule'),
(135, 'salary_from'),
(135, 'title'),
(135, 'description'),
(135, 'status_jobs'),
(136, 'location'),
(136, 'emp_type'),
(136, 'job_shcedule'),
(136, 'salary_from'),
(136, 'title'),
(136, 'description'),
(136, 'status_jobs'),
(138, 'location'),
(138, 'emp_type'),
(138, 'job_shcedule'),
(138, 'salary_from'),
(138, 'title'),
(138, 'description'),
(138, 'status_jobs'),
(137, 'location'),
(137, 'edu'),
(137, 'work_exp'),
(137, 'title'),
(137, 'description');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `image` varchar(150) NOT NULL,
  `data_of_signup` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `wallet_number` int(6) NOT NULL,
  `contact_information` text NOT NULL,
  `location_user` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `mail`, `image`, `data_of_signup`, `wallet_number`, `contact_information`, `location_user`) VALUES
(2, 'Alis', '123', 'alisamargaryan12@gmail.com', 'avatar3.png', '2018-07-13 06:01:24', 100002, 'a:4:{s:6:\"number\";s:9:\"055112269\";s:5:\"skype\";s:0:\"\";s:5:\"viber\";s:9:\"055112269\";s:8:\"WhatsApp\";s:0:\"\";}', 'Պռոշյան'),
(3, 'Ani', 'ani123a', 'ani@mail.ru', '6bdaec9be73689626a9a23ae61b0145d1.jpg', '2018-07-21 13:03:35', 100003, 'a:4:{s:6:\"number\";s:4:\"2412\";s:5:\"skype\";s:4:\"MMMM\";s:5:\"viber\";s:10:\"5251452145\";s:8:\"WhatsApp\";s:7:\"4141414\";}\r\n', 'Արաբկիր'),
(4, 'Aram', '147', 'aram@mail.ru', 'free1.png', '2018-07-13 07:54:47', 100004, 'a:4:{s:6:\"number\";s:9:\"010256970\";s:5:\"skype\";s:0:\"\";s:5:\"viber\";s:9:\"010659710\";s:8:\"WhatsApp\";s:0:\"\";}', 'Ավան'),
(5, 'Musho', '555', '777', 'coloriage-de-loup-monstre-loup-coloriage-de-loup-mandala.jpg', '2018-07-21 12:50:32', 100005, 'a:4:{s:6:\"number\";s:4:\"2412\";s:5:\"skype\";s:4:\"MMMM\";s:5:\"viber\";s:10:\"5251452145\";s:8:\"WhatsApp\";s:7:\"4141414\";}', 'Էրեբունի'),
(6, 'Musho', '1111', 'Musho@mail', 'h1.jpg', '2018-07-25 12:10:56', 100006, 'a:4:{s:6:\"number\";s:3:\"110\";s:5:\"skype\";s:7:\"bghjgbv\";s:5:\"viber\";s:8:\"45454165\";s:8:\"WhatsApp\";s:6:\"454521\";}', 'Արաբկիր');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statement`
--
ALTER TABLE `statement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `statement`
--
ALTER TABLE `statement`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
