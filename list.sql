-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 12 2018 г., 11:00
-- Версия сервера: 10.1.28-MariaDB
-- Версия PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `list`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `password` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`password`, `login`) VALUES
('123', 'Alisa');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `glob` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
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
-- Структура таблицы `image`
--

CREATE TABLE `image` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(7);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) NOT NULL,
  `sub_id` int(10) UNSIGNED NOT NULL,
  `description` char(1) NOT NULL,
  `location` varchar(50) NOT NULL,
  `data_of_put` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `data_of_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `info_array` varchar(200) NOT NULL,
  `us_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `statement`
--

CREATE TABLE `statement` (
  `id` int(10) UNSIGNED NOT NULL,
  `sub_id` int(10) UNSIGNED NOT NULL,
  `us_id` int(11) NOT NULL,
  `data_of_put` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `info_array` varchar(50) NOT NULL,
  `done` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `bajin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `subcategories`
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
(35, 'omputer Games', 3, 'Games and Consoles'),
(36, 'Televisions', 3, 'TV and Video'),
(37, 'Media Players', 3, 'TV and Video'),
(38, 'ameras', 3, 'Photo and Video Equipment'),
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
(133, 'Construction and Construction and Architecture', 13, 'Architecture'),
(134, 'Manufacturing and Production', 13, 'Architecture'),
(135, 'Education and Teaching', 13, 'Education'),
(136, 'Medicine and Health', 13, 'Medicine'),
(137, 'Resumes', 13, ''),
(138, 'Other', 13, '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `password` int(10) UNSIGNED NOT NULL,
  `mail` char(1) NOT NULL,
  `image` varchar(150) NOT NULL,
  `data_of_signup` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `wallet_number` int(6) NOT NULL,
  `contact_information` varchar(250) NOT NULL,
  `location_user` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`product_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `statement`
--
ALTER TABLE `statement`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `image`
--
ALTER TABLE `image`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `statement`
--
ALTER TABLE `statement`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
