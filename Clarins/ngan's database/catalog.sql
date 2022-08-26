-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2022 at 06:01 PM
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
-- Table structure for table `catalogs`
--
<<<<<<< Updated upstream
CREATE TABLE if not exists `catalogs` (
  `catalogID` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `category` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `create_by` datetime DEFAULT current_timestamp()
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
=======

-- CREATE TABLE `catalogs` (
--   `catalogID` int(11) NOT NULL,
--   `name` varchar(40) NOT NULL,
--   `category` int(11) DEFAULT NULL,
--   `description` text DEFAULT NULL,
--   `create_by` datetime DEFAULT current_timestamp()
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
>>>>>>> Stashed changes

--
-- Dumping data for table `catalogs`
--
INSERT INTO
  `catalogs` (
    `catalogID`,
    `name`,
    `category`,
    `description`,
    `create_by`
  )
VALUES
  (
    1,
    'Shampoo &amp; Conditioner',
    1,
    'Just like stars, we are all different which means we all have different types of hair and different ways of taking care of it.  Products to use for your hair can be complicated but here we have products for all types of hair including oily, dry, coloured, wavy, straight or curly or even hair with dandruff.',
    '2022-08-25 22:06:53'
  ),
  (
    2,
    'Hair Styling &amp; Treatments',
    1,
    'Oftentimes, shampoo and conditioner is not enough to tame our hair which is why you might need hairstyling treatments. It can be hard to find the right products when you’re not a professional hairstylist. We never want our community to have a bad hair day again! So find the best treatment products such as hair sprays, texturizer sprays, hair shines, volumizers, pomades,  hair gels, and hair wax.',
    '2022-08-25 22:07:59'
  ),
  (
    3,
    'Cleansers &amp; Toners',
    4,
    'Remove makeup and deeply cleanse from pollution and impurities. Refresh and revitalize to prep your skin for its routine. We offers a selection of toners and cleansers with an optimal efficacy for naturally beautiful skin.',
    '2022-08-25 22:10:09'
  ),
  (
    4,
    'Serums',
    4,
    'Concentrated with botanical ingredients, our hydrating, soothing and anti-aging serums are the first step to every skincare routine, whatever your skin type or concern: dry, oily, sensitive, overactive, aging, mature or needing radiance. They deliver potent benefits deep within skin’s surface that help create your best skin.',
    '2022-08-25 22:11:12'
  ),
  (
    5,
    'Eye Care',
    4,
    'The thin skin in the eye area needs specific care. Find out how to revive and illuminate your look, and protect the eye contour against visible signs of aging or fatigue.',
    '2022-08-25 22:12:45'
  ),
  (
    6,
    'Lip &amp; Neck Care',
    4,
    'Some parts of your face are more sensitive than others. It is important to treat these zones with the appropriate products. Eye, lip and neck moisturisers protect these sensitive areas. Serums and creams will tone the skin around your eyes. This skin is subject to creases and wrinkles. In the same way, the lips’ outline also requires an anti-chapping targeted treatment. The neck cleavage area is often forgotten, despite being particularly fragile. Appropriate treatment will prevent the emergence of wrinkles. With the eye, lip and neck care range, you can moisturise and protect your face and neck every day.\r\n ',
    '2022-08-25 22:16:57'
  ),
  (
    7,
    'Body Treatment Oils',
    5,
    'Body oils are formed with active plant-based ingredients and essential oils. We have taken these beauty elixirs and transformed them into special treatments that envelop the body in satin softness. A body oil massage awakens the senses and nourishes skin, for a pampering experience that enhances both body and soul. Welcome to pure peace of mind.',
    '2022-08-25 22:27:25'
  ),
  (
    8,
    'Bath &amp; Shower',
    5,
    'Product about bath &amp; shower products such as bar soaps, body scrubs, bubble bath, bath treatments and more.',
    '2022-08-25 22:29:45'
  ),
  (
    9,
    'Hand &amp; Foot care',
    5,
    'Hands and feet are the most prominent organs of our body. Next to our face there is no other part of our body that is so much in the public eye, as the hands, feet. It do a lot of work like holding, picking etc. Well kept hands are a true reflection of one’s personality. Hence to keep them looking good and working well a take care your hand and foot becarefully.\r\n',
    '2022-08-25 22:36:30'
  ),
  (
    10,
    'Lipsticks',
    2,
    'Dress lips in the best with a lipstick for the ultimate glamorous finish. Sensual, high colour, with a touch of romance to see you through the day. Pull your make-up look together, or go bare-faced but for a slick of colour with a our lipstick that elevates your beauty to the next level.',
    '2022-08-25 22:40:30'
  ),
  (
    11,
    'Eyebrows',
    2,
    'Whether arched, sculpted, or raised, your eyebrows play a significant part in lending your face structure and expression, and using make-up can help tame or shape them to soften your features. Sculpt, shape, shade, and colour: whether you like them thick, thin, long or rounded, brows can say a lot about who you are!',
    '2022-08-25 22:41:17'
  ),
  (
    12,
    'EyeLiners',
    2,
    'A thousand and one nights... A smudge of kohl has always been women&#039;s first port of call for a sultry gaze designed to enthral. Velvety black, silky and smooth, deep and dark: embrace the our approach to eyeliner as an art form. The perfect combination of high-tech design and enchanting formulas.',
    '2022-08-25 22:42:10'
  ),
  (
    13,
    'Mascaras',
    2,
    'Mascara: setting hearts aflutter! Stretch, shape, lengthen, thicken, and fan... All eyes on you. Our shop whips out its secret weapon of seduction, for lashes that melt hearts.',
    '2022-08-25 22:43:03'
  ),
  (
    14,
    'Concealers',
    2,
    'We all try to hide those under eye shadows which make us look so off colour. These unwanted traces of tiredness darken our face. Fortunately, concealers exist and can easily correct this minor flaw. A corrector stick or pencil will allow you to discreetly hide your under eye shadows. Concealer is applied either over foundation or directly onto the skin. Fixing it with a little powder will help ensure it lasts all day long. Start from the inner corner of the eye and apply your concealer carefully. Your face will be fresh, alert and soft.',
    '2022-08-25 22:44:04'
  ),
  (
    15,
    'Sun Protection',
    6,
    'Protecting yourself using sun care products, like sun creams and facial sunscreens, prior to sun exposure is absolutely essential to protect against UV damage, premature aging and to gain a safe, golden tan. Whether you are looking for an everyday face sunscreen or sun care products before a sun-bathing session, our beauty experts have all the free sun care advice that you need to achieve a natural tan, safely.',
    '2022-08-25 22:48:16'
  ),
  (
    16,
    'After Sun',
    6,
    'Using after sun after long summer days can help soothe and cool down your skin. Sunbathing can cause dryness, burning or tightness, making after sun the ideal choice to nourish your skin and prolong your fresh tan. Shop our extensive collection of after sun products now, perfect for the warmer months.',
    '2022-08-25 22:48:44'
  ),
  (
    17,
    'Women&#039;s Perfume',
    3,
    'Once upon a time, a woman was expected to have a signature scent. Nowadays, we are more likely to treat fragrance as an accessory, changing our perfume daily, or even more often, to suit our busy lives and shifting moods.',
    '2022-08-25 22:51:57'
  ),
  (
    18,
    'Men&#039;s Perfume',
    3,
    'When looking for the next scent for men, it needs to bring you confidence and compliments. Our shop will bring you the best experience with extremely guaranteed perfume quality',
    '2022-08-25 22:54:44'
  );

--
-- Indexes for dumped tables
--
--
-- Indexes for table `catalogs`
--
ALTER TABLE
  `catalogs`
ADD
  PRIMARY KEY (`catalogID`);

--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table `catalogs`
--
ALTER TABLE
  `catalogs`
MODIFY
  `catalogID` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 19;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;