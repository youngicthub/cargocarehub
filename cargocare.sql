-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 13, 2024 at 04:49 PM
-- Server version: 8.0.36-cll-lve
-- PHP Version: 8.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `satelite_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `tracking`
--

CREATE TABLE `tracking` (
  `id` int NOT NULL,
  `tracking_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sender_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sender_contact` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sender_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sender_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dispatch_location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `receiver_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `receiver_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `receiver_contact` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `receiver_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dispatch_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `delivery_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `product_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `percentage_on_delivery` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `current_location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tracking`
--

INSERT INTO `tracking` (`id`, `tracking_number`, `sender_name`, `sender_contact`, `sender_email`, `sender_address`, `status`, `dispatch_location`, `receiver_email`, `receiver_name`, `receiver_contact`, `receiver_address`, `dispatch_date`, `delivery_date`, `current_location`, `date`) VALUES
(7, 'ZNPB5K8WJA', 'Elon musk', '2', 'teslacompany081@gmail.com', 'West Jakarta city, Uk', 'Active', 'Uk', 'michaelconvery9@gmail.com', 'Michael Convery', '07718953096', '3 skipness drive, Glasgow Scotland G514rs', '2024-02-09', '2024-02-11', NULL, '2024-02-09 17:16:08'),
(8, 'G97M5BIWYZ', 'Elon', '3', 'info@satelitetrans.com', 'Satellitetrans', 'Active', 'Texas', 'hymee1973@gmail.com', 'Jamie D-Ann Penland', '14406909025', '2425 W River Rd N Apt 305\r\nElyria Ohio USA 44035', '2024-02-11', '2024-02-13', NULL, '2024-02-11 00:08:58'),
(9, 'JC4X6QD92O', 'Elon', '5', 'info@satelitetrans.com', '2425 W River Rd N Apt 305\r\nElyria Ohio USA 44035', 'Active', 'USA', 'tammyefry@gmail.com', 'Tammy  Elizabeth Fry', '8', '736 Low Gap Rd Clarkesville GA 30523', '2024-02-12', '2024-02-14', NULL, '2024-02-12 22:10:19'),
(10, 'UNXV6LJEQ4', 'Satellite trans', '447342965220', 'info@satelitetrans.com', 'West Jakarta city, UK', 'Active', 'United Kingdom', 'andreagehrig9@gmail.com', 'Andrea Gehrig', '61413002670', '6 Griffiths Street Beaumaris, VIC, Australia', '2024-02-22', '2024-03-07', '', '2024-02-22 10:18:55'),
(11, 'VB1LX9KE4I', 'Satellite trans', '447342965220', 'info@satelitetrans.com', 'West Jakarta city, UK', 'Active', 'United Kingdom', 'andreagehrig9@gmail.com', 'Andrea Gehrig', '61413002670', '6 Griffiths Street Beaumaris, VIC, Australia', '2024-02-22', '2024-03-07', 'United Kingdom', '2024-02-22 10:47:27'),
(12, 'JO4WRG13AX', 'Mary', '5', 'info@satelitetrans.com', '15th prince street', 'Active', 'Canada', 'sdwainright8@gmail.com', 'Shannon wainwright', '8', '3914 Locust Avenue\r\nSarasota \r\nFlorida', '2024-02-25', '2024-02-27', '', '2024-02-25 12:04:49'),
(13, 'PY7V2QTAL9', 'Dr Mary', '4', 'info@satelitetrans.com', '4 lake street', 'Active', 'Uk', 'namvetmp6566@gmail.com', 'James A Svoboda', '17', '17980 W Julia Dr\r\nHauser, ID 83854\r\nU.S.A.', '2024-02-26', '2024-02-28', NULL, '2024-02-27 00:46:00'),
(14, 'LQKMYDPCTR', 'Elon musk', '1', 'info@satelitetrans.com', 'Usa', 'Active', 'USA', 'Freedomunity2024@proton.me', 'Nicholas Ewanchuk', '3', 'Port McNeil\r\nBritish Columbia\r\nV0N2R0\r\nCanada', '2024-03-02', '2024-03-05', NULL, '2024-03-02 21:07:11'),
(15, 'TYMF5W31JS', 'Satellite trans', '7342965220', 'info@satelitetrans.com', 'West Jakarta', 'Active', 'United Kingdom', 'Gaelicsiobhan3@gmail.com', 'Siobhan spillane', '7596350491', '27 Golan road Northern Ireland', '2024-03-05', '2024-03-11', NULL, '2024-03-04 17:27:52'),
(16, 'OFKBNXVITH', 'Georgina', '4', 'info@satelitetrans.com', 'Florida', 'Active', 'Canada', 'magurnett@bigpond.com', 'Mick Gurnett', '1', '74 Golden Valley Road \r\nTallebudgera Valley \r\nQueensland \r\n4228\r\nAustralia', '2024-03-05', '2024-03-07', NULL, '2024-03-05 13:13:04'),
(17, '5EZQVTSNHO', 'Elon', '3', 'info@satelitetrans.com', 'No 15 east west', 'Active', 'USA', 'Mamigirma@gmail.com', 'Mohammed Girma', '6', 'Liban Hussein \r\nKreuzkapellenstraÃŸe 68\r\n81249 mÃ¼nchen \r\nGermany', '2024-03-05', '2024-03-07', NULL, '2024-03-05 14:22:50'),
(18, 'OLD32Q4AXK', 'Georgina', '3', 'info@satelitetrans.com', 'No 10 east west', 'Active', 'Italy', 'guidomuggianu@gmail.com', 'Guido Muggianu', '393457620916', 'Via Emilio Lussu 11\r\nTriei Italy', '2024-03-05', '2024-03-07', 'Canada border', '2024-03-05 18:16:49'),
(19, '0NBO85Y36Z', 'Chase', '02', 'info@satelitetrans.com', 'California', 'Active', 'California', 'Noelythetravler@gmail.com', 'Noel prichard', '3', '3831 N Lakeshore Blvd \r\nLoomis CA 95650', '2024-03-09', '2024-03-10', '', '2024-03-09 21:38:58'),
(20, 'RI0G18OJDH', 'Satellite trans', '447342965220', 'info@satelitetrans.com', 'West Yorkshire', 'Active', 'United Kingdom', 'gingervertican@gmail.com', 'CARRIER GINGER', '9092658954', '2244 Rivermont Ave Apt 303\r\nLynchburg, Va 24503', '2024-03-23', '2024-04-06', '', '2024-03-22 17:14:18'),
(21, '3VCKQ6ZEI8', 'Satellite trans', '7342965220', 'info@satelitetrans.com', 'West Yorkshire', 'On hold', 'United Kingdom', 'jay@azsrs.biz', 'Jay Tubbs', '9286999399', '5100 E Denali Drive Flagstaff Arizona', '2024-04-04', '2024-04-18', 'United States', '2024-04-04 17:35:30'),
(22, '0KNUTV7LBA', 'Satellite trans', '9', 'info@satelitetrans.com', 'West Yorkshire', 'On hold', 'United Kingdom', 'Andrea.krsinic@gmail.com', 'Andrea krsinic', '64212960033', 'New Zealand', '2024-04-13', '2024-04-20', 'New Zealand', '2024-04-13 08:59:05'),
(23, '90CD7W4QRE', 'Satellite trans', '9', 'info@satelitetrans.com', 'West Yorkshire', 'Active', 'United Kingdom', '1knoll1@gmail.com', 'Denise Knoll', '7607741774', 'USA', '2024-04-14', '2024-04-28', NULL, '2024-04-14 19:11:27'),
(24, '0E1LPHCOWJ', 'Brooke Baldwin', '45', 'info@satelitetrans.com', 'Private', 'Active', 'Los Angeles', 'ghuston2273@gmail.com', 'Samuel Gabriel Huston', '1', '1241Victor Rd Macedon New York 14502', '2024-04-16', '2024-04-19', NULL, '2024-04-16 20:33:06'),
(25, '60BYI7MGRW', 'Satellite trans', '9', 'info@satelitetrans.com', 'USA', 'Active', 'United Kingdom', 'yulia.sherstneva@hotmail.co.uk', 'Yulia sherstneva', '07961393207', 'West Sussex', '2024-04-30', '2024-05-01', '', '2024-04-30 19:51:24'),
(26, '7DFAY6QRTS', 'Satellite trans', '8458610951', 'info@satelitetrans.com', 'London, England', 'Active', 'London,England', 'Ballotpark@icloud.com', 'Sandra Razo', '2107271644', '7002 Comanche Star, San Antonio, Texas\r\n78233', '2024-05-23', '2024-05-28', 'United States', '2024-05-23 08:43:39'),
(27, '61U54R9TWD', 'Rebecca', '44', 'uplands@y7mail.com', 'USA', 'On hold', 'Uk', 'uplands@y7mail.com', 'Cranston Chant', '6', 'Avenue Broadbeach Qld \r\nzip code 4218\r\nAustralia', '2024-05-24', '2024-05-26', 'Australia Border', '2024-05-24 14:10:47'),
(28, 'J9A2NKZTBM', 'Rebecca', '44', 'Rebecca@gmail.com', 'USA', 'Active', 'Uk', 'Annebuhler@aol.com', 'Anne Buhler', '3', '345 Nursery Rd\r\nVictoria TX \r\nZip code 77904', '2024-05-24', '2024-05-26', NULL, '2024-05-25 21:17:04'),
(29, '8MVW27KLDP', 'Satellite trans', '8458610951', 'info@satelitetrans.com', 'West Yorkshire', 'Active', 'New York', 'siagianvicsi@gmail.com', 'Viktor Siagian', '6281380889220', 'Indonesia', '2024-05-29', '2024-05-31', '', '2024-05-29 13:21:09'),
(30, 'SFMDV5A3HB', 'Dr Taylor', '1', 'Drtaylor@gmail.com', 'Canada', 'Active', 'Uk', 'Rfillippleo@aol.com', 'Rosalie Fillippleo', '3', '298 Milton Avenue \r\nStaten Island, New York \r\n10306', '2024-05-30', '2024-06-01', NULL, '2024-05-30 03:59:05'),
(31, '5ZK7GIU2QO', 'Dr  Taylor', '1', 'Drtaylor@gmail.com', 'USA', 'Active', 'Uk', 'zuritagerardo94@gmail.com', 'Gerardo Zurita Jiménez', '5', 'Circuito Mixes 113 Fraccionamiento Colinas de Monte Alban Oaxaca, Oaxaca Mexico C.P. 68159', '2024-05-30', '2024-06-01', NULL, '2024-05-30 04:15:57'),
(32, 'TV3FMZO7IN', 'Dan', '08130078945', 'youngicthub@gmail.com', '1 Ada George', 'Active', 'America', 'youngdan947@gmail.com', 'Frank', '871440057361', 'AkwaMan', '2024-01-02', '2024-02-03', NULL, '2024-06-01 23:46:18'),
(33, '6KI1NU4ZLA', 'Cindy McKenzie', '4', 'CindyMcKenzie&amp;gmail.com', 'USA', 'Active', 'Uk', 'Helle@logon.dk', 'Helle Ohlenschlager', '2', 'Noerrevænget 37\r\nDK - 5000 Odense C\r\nDenmark', '2024-06-03', '2024-06-05', 'Berlin', '2024-06-03 19:08:45'),
(34, '5Q6SEG4AUV', 'Lesuer lara', '3', 'Lesuerlara@gmail.com', 'Uk', 'Active', 'Uk', 'keithsnyder@charter.net', 'Keith R. Snyder', '9', '205 W. South Avenue\r\nCity: Houghton\r\nState: MI\r\nZIP: 49931\r\nUSA', '2024-06-06', '2024-06-08', NULL, '2024-06-06 02:04:36'),
(35, '5S7HVXZYF6', 'Dr Olivia', '3', 'DrOlivia@gmail.com', 'USA', 'Active', 'Uk', 'lsgrandma1@gmail.com', 'Lillie Soles', '5', '401 Glengarry Dr \r\nFairdale, ky', '2024-06-06', '2024-06-08', NULL, '2024-06-06 19:35:36'),
(36, 'FGQ8VCZ17W', 'Elon R Musk', '1', 'Private@gmail.com', 'USA', 'Active', 'USA', 'solartom2025@gmail.com', 'Tom Bodnar', '4', 'Hüttigweiler\r\n66557 Illingen\r\nDrosselweg 3\r\nGermany', '2024-06-12', '2024-06-14', 'Munich', '2024-06-12 13:49:39'),
(37, 'B24RQ7XNYP', 'Satellite trans', '8458610951', 'info@satelitetrans.com', 'New York', 'Active', 'New York City', 'lydiafrost12@gmail.com', 'Lydia frost', '07729810194', 'Leicester', '2024-06-16', '2024-06-19', NULL, '2024-06-16 16:37:51'),
(38, 'DKVHIC1M5P', 'Satellite trans', '8458610951', 'info@satelitetrans.com', 'New York', 'Active', 'London UK', 'sparklecitydude@gmail.com', 'Paul w hill', '8647061366', 'South Carolina', '2024-06-16', '2024-06-21', 'London UK', '2024-06-16 20:57:43'),
(39, '6A0LRTXCZS', 'Dr olivia', '3', 'Olivia@gmail.com', 'Uk', 'Active', 'Uk', 'sseyer5@yahoo.com', 'Stephanie Seyer', '9', '354 Wheeler Drive\r\nScott City, MO. 63780', '2024-06-25', '2024-06-27', 'Garden city', '2024-06-25 20:18:41'),
(40, 'VBE4GYR1JF', 'Yvan Salamon', '1', 'Yvansalamon@gmail.com', 'USA', 'Active', 'Canada', 'Sandilegaultcarriere@gmail.com', 'Sandi carriere', '1', '15 prince street Kirkland Lake Ontario P2N2T3', '2024-06-28', '2024-06-30', 'Ontario Canada', '2024-06-28 21:39:45'),
(41, 'RAUQ2WP7LH', 'Satellite trans', '8458610951', 'info@satelitetrans.com', 'West Yorkshire', 'Active', 'United Kingdom', 'darrellhair2@gmail.com', 'Hairl Darrell', '2172208742', 'United States', '2024-07-04', '2024-07-18', NULL, '2024-07-02 22:19:34'),
(42, '5QN79HRJLF', 'Satellite trans', '8458610951', 'info@satelitetrans.com', 'West Yorkshire', 'Active', 'United Kingdom', 'ak47famz@gmail.com', 'Smith Katrina', '9185234828', '4063 e 22nd pl Tulsa Oklahoma\r\nUSA', '2024-07-04', '2024-07-03', NULL, '2024-07-03 13:41:44'),
(43, '97B0QJTSNM', 'Nurse Cindy', '2', 'Nursecindy@gmail.com', 'Uk', 'On hold', 'USA', 'Fivei@macatawa.org', 'Cindy  Immink', '6', '5880 Preservation Dr\r\nHamilton \r\nMI\r\nUSA', '2024-07-06', '2024-07-08', '', '2024-07-06 13:58:18'),
(44, 'L43R7MQ9ZJ', 'Satellite trans', '8458610951', 'info@satelitetrans.com', 'West Yorkshire', 'Active', 'United States', 'marcianozschuschen35@gmail.com', 'Endely zschuschen', '0611333780', 'Gravinlousesingel 22 nieuwegein 3434DH nieuwegein', '2024-07-12', '2024-07-13', 'United States', '2024-07-11 17:21:56'),
(45, 'GC20DYVWST', 'Satellite trans', '8458610951', 'info@satelitetrans.com', 'United States', 'On hold', 'United States', 'leahbon50@btinternet.com', 'Devlin Sean', '00447502104452', 'UK', '2024-07-14', '2024-07-25', '', '2024-07-13 13:00:41'),
(46, 'DYX8PQ0WRK', 'Maggie', '4', 'Maggie@gmail.com', 'USA', 'Active', 'Australia', 'rebeccahayes71@gmail.com', 'Rebbeca Hayes', '61412601254', '3 Arafura Court Hallett Cove 5158 South Australia', '2024-07-14', '2024-07-16', NULL, '2024-07-14 13:12:52'),
(47, '2EBOD9YZH3', 'Olivia', '1', 'Olivia@gmail.com', 'Usa', 'Active', 'USA', 'Iriemon88@gmail.com', 'Carla Gibson', '2503091717', '126-7760 Okanagan Landing rd\r\nVernon BC. \r\nV1H 1Z4\r\nCanada', '2024-07-18', '2024-07-20', 'Canada', '2024-07-18 21:44:17'),
(48, 'QYPR58DVXC', 'Satellite trans', '8458610951', 'info@satelitetrans.com', 'West Yorkshire', 'Active', 'Washington DC', 'sylviatkac1@gmail.com', 'Sylvia Cynthia Tkac', '0409463808', 'Angurugu Lot 545A post code 0822\r\nGroote Eylandt Northern Territory\r\nAustralia', '2024-07-21', '2024-07-24', NULL, '2024-07-20 12:13:28'),
(49, 'IXO5WSU06M', 'Satellite trans', '8458610951', 'info@satelitetrans.com', 'West Yorkshire', 'Active', 'England', 'drjhilaire01@gmail.com', 'Hilaire James', '2603484379', '3985 Ravenswood Rd Apt 201 Ft Lauderdale FL 33312', '2024-07-28', '2024-07-31', NULL, '2024-07-28 13:06:57'),
(50, 'L6CFIQO04X', 'Dr olivia', '1', 'Drolivia@gmail.com', 'Usa', 'Active', 'USA', 'martin-smith42@sky.com', 'Martin smith', '07776292827', '311 Market Street, Eastleigh, Hampshire, SO50 5QE', '2024-07-31', '2024-08-02', NULL, '2024-07-31 18:33:29'),
(51, 'QX7KD1N0ZC', 'Sandra bullock', '1', 'Sandrabullock@gmail.com', 'Arlington, Virginia', 'Inactive', 'Spain- UNITED STATES', 'blue66bird@yahoo.com', 'Dennis Duryea', '9199495841', '1201 Antler point Dr Durham NC\r\n27713', '2024-08-08', '2024-08-10', NULL, '2024-08-08 21:08:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracking`
--
ALTER TABLE `tracking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tracking`
--
ALTER TABLE `tracking`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
