-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2022 at 06:23 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
  time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;

/*!40101 SET NAMES utf8mb4 */
;

--
-- Database: `clarins`
--
-- --------------------------------------------------------
--
-- Table structure for table `brands`
--
<<<<<<< Updated upstream
CREATE TABLE if not exists `brands` (
  `brandID` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `description` text DEFAULT NULL,
  `create_by` datetime DEFAULT current_timestamp()
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
=======

-- CREATE TABLE `brands` (
--   `brandID` int(11) NOT NULL,
--   `name` varchar(40) NOT NULL,
--   `description` text DEFAULT NULL,
--   `create_by` datetime DEFAULT current_timestamp()
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
>>>>>>> Stashed changes

--
-- Dumping data for table `brands`
--
INSERT INTO
  `brands` (`brandID`, `name`, `description`, `create_by`)
VALUES
  (
    1,
    'Clarins',
    'France native Jacques Courtin-Clarins founded Clarins back in 1954 with a dream to make women feel as beautiful as they are. Selling skincare and cosmetics, the brand hopes to make an impact on people’s confidence as well as their skin health and external beauty.\r\nSince the 50s, Clarins has grown way beyond France and their products have found their way into stores around the world. Today, there are even Clarins Skin Spas in several places internationally. \r\nThe brand also offers personalized skincare advice and other services that extend beyond a simple exchange of money for makeup.\r\nMaking their products from their headquarters in France, Clarins is a giant in the world of skincare and makeup with decades of experience in the industry to back up their claims.',
    '2022-08-25 23:05:58'
  ),
  (
    2,
    '3ce',
    '3ce stands for 3 Concept eyes and the brand was launched in 2009 by Fashion brand StyleNanda. The style of products caters to urban, confident and modern women which is in start contrast to a lot of girly and cutesy packaging that is popular in Korea. They focus on using a primary color palette of pinks, oranges and beiges, and they also focus on multipurpose products that are meant to be mixed, matched to best suit an array of skin tones. The brand is known for it’s clean and bold image.',
    '2022-08-25 23:08:06'
  ),
  (
    3,
    'Bioderma',
    'To get the perfect product formula, Bioderma is selected from the purest ingredients, using natural ingredients that are better tolerated by the skin. Thanks to that, Bioderma does not have a strong scent or a quick effect like other cosmetic brands. Instead of a mild scent, after using for a while, the effect of improving and restoring the skin from the inside is obvious.\r\nBioderma applies biosafety principles to effectively improve tolerability and strengthen the skin&#039;s resistance. Furthermore, each product line is clinically tested before being released to the market.',
    '2022-08-25 23:10:17'
  ),
  (
    4,
    'Lancome',
    'Founded in 1935 by the visionary pioneer Armand Petitjean, with the wish of spreading the spirit and taste of French elegance around the world, Lancôme immediately embodied the essence of beauty.  Today more than ever, the brand aims to offer every woman the possibility to blossom and embrace her beauty and femininity whatever her age or skin color. Lancôme affirms that happiness is the most attractive beauty. It’s a skin deep emotion, awakening every sense. \r\nWith more than 80 years of history, Lancôme has a robust portfolio of products powered by cutting-edge science and French sensoriality. We enhance femininity through pleasure. The feeling of happiness and pampering in every touch.',
    '2022-08-25 23:11:31'
  ),
  (
    5,
    'Mac Cosmetics',
    'The brand was launched in 1984 by Frank Toskan and Frank Angelo—and it quickly became a force to be reckoned with.\r\nOver the years, the brand has come to stand for something so much bigger than makeup: equality, expression, and kindness.\r\nAlthough MAC was founded in Toronto, it now operates from its headquarters in NYC. The brand’s products are sold in more than 100 countries worldwide, and it operates more than 500 stores.',
    '2022-08-25 23:14:11'
  ),
  (
    6,
    'Kiehl&#039;s',
    'Kiehl&#039;s cosmetics brand was born in 1851 in the United States and is now a brand under the &quot;tycoon&quot; L&#039;oreal. Kiehl&#039;s is famous for its wide range of body care products, hair care, skincare cosmetics, men&#039;s products and always puts quality and mind in parallel with its brand. Especially famous for skin care products thanks to its unique formula and made from natural ingredients to help bring back healthy and radiant skin. Comprehensive care and solve many skin problems from restoration, regeneration to brightening or anti-aging with essence nutrients from nature.',
    '2022-08-25 23:15:29'
  );

--
-- Indexes for dumped tables
--
--
-- Indexes for table `brands`
--
ALTER TABLE
  `brands`
ADD
  PRIMARY KEY (`brandID`),
ADD
  UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE
  `brands`
MODIFY
  `brandID` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 7;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;