-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2023 at 12:57 PM
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
-- Database: `db_aqua_fishes`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` text NOT NULL,
  `admin_password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'Sreehari', 'fishesaqua@gmail.com', 987654321);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `booking_amount` varchar(50) NOT NULL,
  `booking_status` char(1) NOT NULL DEFAULT '0',
  `payment_status` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`booking_id`, `user_id`, `booking_date`, `booking_amount`, `booking_status`, `payment_status`) VALUES
(53, 1, '2023-10-18', '350.00', '2', '1'),
(54, 1, '2023-10-18', '50.00', '2', '1'),
(59, 1, '2023-10-18', '250.00', '2', '1'),
(60, 1, '2023-10-18', '4500.00', '2', '1'),
(61, 10, '2023-10-19', '9980.00', '2', '1'),
(62, 10, '2023-10-19', '650.00', '2', '1'),
(63, 10, '2023-10-19', '3000.00', '2', '1'),
(64, 10, '2023-10-19', '2049.00', '2', '1'),
(65, 12, '2023-10-19', '1700.00', '2', '1'),
(66, 13, '2023-10-19', '1479.00', '2', '1'),
(67, 13, '2023-10-19', '1050.00', '2', '1'),
(68, 14, '2023-10-19', '400.00', '2', '1'),
(69, 14, '2023-10-19', '1299.00', '2', '1'),
(70, 15, '2023-10-20', '2000.00', '2', '1'),
(71, 14, '2023-10-20', '1100.00', '2', '1'),
(72, 16, '2023-10-24', '800.00', '2', '1'),
(73, 14, '2023-10-25', '300.00', '1', '1'),
(74, 16, '2023-10-25', '100.00', '1', '1'),
(76, 16, '2023-10-28', '999.00', '1', '1'),
(77, 16, '2023-10-28', '50.00', '0', ''),
(78, 14, '2023-10-31', '2199.00', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `cart_quantity` varchar(50) NOT NULL DEFAULT '1',
  `cart_status` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `booking_id`, `product_id`, `cart_quantity`, `cart_status`) VALUES
(82, 53, 26, '1', '1'),
(83, 53, 27, '3', '1'),
(84, 53, 25, '3', '1'),
(85, 54, 25, '1', '0'),
(86, 55, 31, '1', '1'),
(87, 56, 25, '1', '1'),
(88, 56, 26, '1', '1'),
(89, 56, 27, '1', '1'),
(90, 57, 24, '1', '1'),
(91, 57, 28, '1', '1'),
(92, 57, 29, '1', '1'),
(93, 57, 26, '1', '1'),
(94, 57, 30, '1', '1'),
(95, 57, 31, '1', '1'),
(96, 58, 30, '1', '1'),
(97, 58, 29, '1', '1'),
(98, 59, 34, '1', '1'),
(99, 60, 29, '5', '1'),
(100, 60, 30, '4', '1'),
(101, 60, 31, '6', '1'),
(102, 61, 36, '20', '1'),
(103, 62, 24, '5', '1'),
(104, 62, 25, '4', '1'),
(105, 62, 26, '4', '1'),
(106, 63, 28, '5', '1'),
(107, 63, 31, '5', '1'),
(108, 64, 40, '1', '1'),
(109, 64, 41, '1', '1'),
(110, 65, 37, '1', '1'),
(111, 65, 42, '1', '1'),
(112, 66, 37, '1', '1'),
(113, 66, 45, '1', '1'),
(114, 66, 43, '1', '1'),
(115, 67, 41, '1', '1'),
(116, 68, 38, '2', '1'),
(117, 69, 36, '1', '1'),
(118, 69, 37, '1', '1'),
(119, 70, 31, '1', '1'),
(120, 70, 42, '1', '1'),
(121, 70, 37, '1', '1'),
(122, 71, 41, '1', '1'),
(123, 71, 27, '1', '1'),
(124, 72, 37, '1', '1'),
(125, 73, 29, '1', '1'),
(126, 74, 24, '1', '1'),
(127, 74, 25, '1', '1'),
(129, 75, 24, '1', '0'),
(130, 75, 29, '1', '0'),
(132, 76, 40, '1', '1'),
(138, 77, 29, '1', '0'),
(139, 78, 39, '1', '1'),
(140, 78, 40, '1', '1'),
(141, 77, 24, '1', '0'),
(142, 77, 28, '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(7, 'Aquarium Fishes'),
(10, 'Fish Food'),
(13, 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint`
--

CREATE TABLE `tbl_complaint` (
  `complaint_title` varchar(50) NOT NULL,
  `complaint_content` varchar(50) NOT NULL,
  `complaint_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `complaint_date` varchar(40) NOT NULL,
  `complaint_reply` varchar(100) NOT NULL DEFAULT 'Waiting for Reply....',
  `complaint_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_complaint`
--

INSERT INTO `tbl_complaint` (`complaint_title`, `complaint_content`, `complaint_id`, `user_id`, `complaint_date`, `complaint_reply`, `complaint_status`) VALUES
('', 'site issue', 3, 13, '2023-10-19', 'please check after 1 hr', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`district_id`, `district_name`) VALUES
(45, ' Kasaragod'),
(50, ' Kannur'),
(62, ' Wayanad'),
(63, ' Kozhikode'),
(64, ' Malappuram'),
(65, 'Palakkad '),
(66, ' Thrissur'),
(67, ' Ernakulam'),
(68, ' Idukki'),
(69, ' Kottayam'),
(70, ' Alappuzha'),
(71, ' Pathanamthitta'),
(72, ' Kollam'),
(73, ' Thiruvananthapuram');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_feedback` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fishtype`
--

CREATE TABLE `tbl_fishtype` (
  `fishtype_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `place_id` int(11) NOT NULL,
  `place_name` varchar(50) NOT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`place_id`, `place_name`, `district_id`) VALUES
(1, 'Muvattupuzha', 1),
(2, 'chalakudy', 2),
(3, 'pala', 3),
(21, 'Kanhangad', 19),
(22, '	Kasaragod', 19),
(23, 'Nileshwar', 19),
(24, 'Uppala', 19),
(25, 'Kumbla', 19),
(26, 'Bekal', 19),
(31, 'Mattanur', 20),
(32, 'Iritty', 20),
(36, 'Payyanur', 20),
(37, 'Parassinikkadavu ', 20),
(38, 'Kurumathur', 20),
(39, 'Sulthan Bathery', 21),
(40, 'Vythir', 21),
(41, 'Mananthavady', 21),
(42, 'Kalpetta', 21),
(43, 'Beypore', 22),
(44, 'Kappad', 22),
(45, 'Koyilandy', 22),
(46, 'Ramanattukara', 22),
(47, 'Vatakara', 22),
(48, ' Manjeri', 23),
(49, ' Tirur', 23),
(50, 'Kondotty', 23),
(51, 'Kottakkal', 23),
(52, 'Nilambur', 23),
(53, 'Karippur', 23),
(54, 'Chittur', 24),
(55, ' Ottappalam', 24),
(56, 'Pattambi', 24),
(57, 'Alathur', 24),
(58, 'Mannarkkad', 24),
(59, 'Puthur ', 25),
(60, 'Chalakudy', 25),
(61, 'Peramangalam', 25),
(62, 'Mannuthy', 25),
(63, 'Ollur', 25),
(64, 'Kochi ', 26),
(65, 'Kothamangalam', 26),
(66, 'Aluva', 26),
(69, 'Angamaly', 26),
(70, 'Muvattupuzha', 26),
(71, 'Kattappana', 27),
(72, 'Thodupuzha', 27),
(73, 'Vagamon', 27),
(74, 'Periyar', 27),
(75, 'Ettumanoor', 28),
(76, 'Pala', 27),
(77, 'Kottayam', 28),
(78, 'Vaikom', 28),
(79, 'Changanassery', 28),
(80, 'Cherthala', 29),
(81, 'Chingoli', 29),
(82, 'Haripad', 29),
(83, 'Ezhupunna', 29),
(84, 'Adoor', 30),
(85, 'Thiruvalla', 30),
(86, 'Pandalam', 30),
(87, 'Pathanamthitta', 30),
(88, 'Punalur', 31),
(89, 'Chavara', 31),
(90, 'Kollam', 31),
(91, 'Neyyattinkara', 33),
(92, 'Nedumangad', 33),
(93, '	Varkala', 33),
(94, 'Thampanoor', 33),
(97, 'Bekal', 45),
(99, 'Nileshwar', 45),
(100, 'Kanhangad', 45),
(101, 'Kasaragod', 45),
(102, 'Anthoor', 50),
(103, 'Iritty', 50),
(104, 'Koothuparambu', 50),
(105, 'Panoor', 50),
(106, 'Thalassery', 50),
(107, 'Kalpetta', 62),
(108, 'Mananthavady', 62),
(109, 'Sulthanbathery', 62),
(110, 'Kunnamangalam', 63),
(111, 'Balussery', 63),
(112, 'Elathur', 63),
(113, 'Vatakara', 63),
(114, 'Tirur', 64),
(115, 'Perinthalmanna', 64),
(116, ' Nilambur', 64),
(117, ' Ponnani', 64),
(118, 'Manjeri', 64),
(119, ' Ottapalam', 65),
(120, 'Pattambi', 65),
(121, 'Chittur', 65),
(122, 'Malampuzha', 65),
(123, 'Chalakudy', 66),
(124, 'U', 0),
(125, 'Chavakkad', 66),
(126, 'Guruvayoor', 66),
(127, 'Kunnamkulam', 66),
(128, 'Kodungallur', 66),
(129, ' Aluva', 67),
(130, 'Muvattupuzha', 67),
(131, ' Angamaly', 67),
(132, ' Piravom', 67),
(133, 'Thrikkakara', 67),
(134, 'Kattappana', 68),
(135, 'Thodupuzha', 68),
(136, 'Adimali', 68),
(137, 'Elamdesam', 68),
(138, 'Changanacherry', 69),
(139, 'Erattupetta', 69),
(140, 'Ettumanoor', 69),
(141, 'Pala', 69),
(142, 'Vaikom', 69),
(143, 'Chengannoor', 70),
(144, 'Cherthala', 70),
(145, 'Haripad', 70),
(146, 'Kayamkulam', 70),
(147, 'Mavelikara', 70),
(148, 'Thiruvalla', 71),
(149, 'Adoor', 71),
(150, 'Pandalam', 71),
(151, 'Pathanamthitta', 71),
(153, 'Karunagappally', 72),
(154, 'Kottarakkara ', 72),
(155, 'Chadayamangalam', 72),
(156, 'Anchal', 72),
(157, 'Punalur', 72),
(158, 'Neyyattinkara', 73),
(159, 'Varkala', 73),
(160, 'Nedumangad', 73),
(161, 'Attingal', 73);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_photo` varchar(50) NOT NULL,
  `product_description` varchar(1000) NOT NULL,
  `subcategory_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `product_price`, `product_photo`, `product_description`, `subcategory_id`) VALUES
(24, 'Poecilia Reticulata', '50', 'pp.jpg', 'The guppy (Poecilia reticulata), also known as millionfish or the rainbow fish, is one of the world\'s most widely distributed tropical fish and one of the most popular freshwater aquarium fish species. ', 18),
(25, 'Micropoecilia Picta', '50', 'micropoecilia-picta-red.jpg', 'The Picta Swamp Guppy is known from slow-moving canals and drainage ditches at the edges of swamps. The water may be fresh or mildly brackish and there is dense aquatic vegetation. The aquarium should be biologically mature before this delicate species is added.', 18),
(26, 'Lyretail', '50', 'Red-Albino-Lyretail.b197b0.webp', 'They attain lengths of five centimetres (two inches). Female lyretails are drab olive or beige, but the males are brilliantly speckled and spotted with reds, yellows, greens, and blues. The tail is fan-shaped with extended filaments at the top and bottom giving the appearance of a lyre.', 18),
(27, 'Tuxedo Guppies', '50', 'tex.jpg', 'White Tuxedo Guppy, as the name indicates, is of white color and looks very classy. The shinning white-silvery body of this guppy fish makes it unique and one of the kinds. ... Although guppies are small size fish, they require space for swimming freely. At the same time, they want plenty of hiding spots in the tank.', 18),
(28, 'Siamese fighting fish', '300', 'betta.jpg', 'The Siamese fighting fish, a native of Thailand, was domesticated there for use in contests. Combat consists mainly of fin nipping and is accompanied by a display of extended gill covers, spread fins, and intensified colouring. The fish, elongated and slender, grows to a length of about 6.5 centimetres (2.5 inches).', 19),
(29, 'Betta mahachaiensis', '300', 'download.jpg', 'Betta mahachaiensis is a species of bubble-nesting betta native to Thailand, where it occurs naturally near the Gulf of Thailand. It is typically seen in stagnant waters in swamps, pools, and ponds. The species can be found in brackish waters, with salinity levels between 1.1 and 10.6 parts per thousand.', 19),
(30, 'Super Delta', '300', 'super-delta-tail (1).jpg', 'Super Delta (aka SD or SDT) – Enhanced version of the Delta; one step closer to the Halfmoon variety in that their tails have a span between 130 -170 degrees. Half-Sun – Combtail with caudal fin going 180°, like a half-moon.', 19),
(31, 'Feather Tail', '300', 'feathertail.jpg', 'A kind of halfmoon Betta, the rosetail (or feathertail Betta) also sports a fan-like tail, but has excessive branching and overlapping in its fin rays that resembles the ruffled appearance of a rose.', 19),
(35, 'Flower Horn', '450', 'flower chichlid.webp', 'Flower Horns are most recognizable for the large hump on their foreheads. This structure is called a nuchal hump or kok and usually more distinctive on male Flower Horns. There are a few varieties of Flower Horns available in the commercial market. The most common and most recognizable is the Red Dragon Flower Horn.', 23),
(36, 'African Chichlid', '499', 'african.jpg', 'Cichlids are rather deep-bodied and have one nostril (rather than the usual two) on each side of the head. The lateral line is discontinuous, and there are three or more anal spines. They generally have rounded tails and, though sizable for aquarium fishes, usually do not grow longer than about 30 cm (12 inches)', 23),
(37, 'FRONTOSA CICHLID FISH', '800', 'licensed-image.jpg', 'The Frontosa Cichlid (Cyphotilapia frontosa) is a deep water Tanganyikan species that grows to a larger size than most other cichlids that inhabit the massive rift lake. It inhabits dim, deep, still waters in the lake and prefers these same conditions in the aquarium.', 23),
(38, ' RAINBOW OB PEACOCK CICHLID FISH', '200', 'LF-FemOBPEA5CM_.jpg', 'Rainbow Cichlid (Herotilapia multispinosa) is an increasingly popular species among many cichlid enthusiasts due to its generally peaceful disposition and vivid coloration as it matures. Adults have brilliant multi-coloration.', 23),
(39, 'RED PIGEON BLOOD DISCUS', '900', 'Red-Maze-Pigeon-2021.jpg', 'The body of the Pigeon Blood Discus is bright orange with black marbling. The fins are brown with a turquoise hue. The overall coloration of Discus will vary depending on mood and overall health of the fish. The Discus has surpassed the Angelfish as the most popular freshwater aquarium fish.', 25),
(40, ' Milleninum Golden Discus', '999', 'images.jpg', 'These fish are disc-shaped and can reach up to 10 inches. They aren\'t easy to keep so only experienced aquarists should own them. Discus fish are extremely popular in the hobby, as such, they have been highly hybridized.', 25),
(41, 'BLUE DIAMOND DISCUS FISH', '1050', 'b70d9ffbfdac6470a204a4f9c98688da.jpg', 'Blue Diamond Discus are colorful, graceful and charismatic tank inhabitants. Blue Diamond Discus are considered to require a high level of care than other fish. It is recommended that they are homed in 3ft+ aquarium with stable and clean water. For this reason alone they are not considered a beginners aquarist.\nBlue Diamond Discus are colorful, graceful and charismatic tank inhabitants. Blue Diamond Discus are considered to require a high level of care than other fish. It is recommended that they are homed in 3ft+ aquarium with stable and clean water. For this reason alone they are not considered a beginners aquarist.\nBlue Diamond Discus are colorful, graceful and charismatic tank inhabitants. Blue Diamond Discus are considered to require a high level of care than other fish. It is recommended that they are homed in 3ft+ aquarium with stable and clean water. For this reason alone they are not considered a beginners aquarist.\n', 25),
(42, 'SNOW WHITE DISCUS', '900', 'Snow-White-Discus.jpg', 'The Snow White Discus is a selectively bred variant that showcases a predominantly white coloration. These fish are known for their striking appearance, with their bodies primarily covered in a snowy white hue. While their base color is white, they may exhibit subtle patterns or markings in lighter shades.', 25),
(43, 'Foodie Puppies Optimum Betta Fish Food (20 gm)', '199', 'bettafood.jpg', 'Optimum Betta Fish Food is a special nutritional formulation for all Betta fish. It is complete and balanced, in addition to being fortified with Spirulina to enhance the color of your fish. Rich in Vitamin C and Vitamin E, promotes resistance to stress and improves immunity to infectious disease.', 26),
(44, 'Hikari Tropical Discus Bio-Gold Aquarium Pellet ', '390', '71bvAaXPH4L._SY879_.jpg', 'A pellet perfectly designed for the normal feeding action of discus. Absorbs water quickly and becomes soft taking on a worm-like texture. Best of all it retains its shape.', 27),
(45, 'Hikari Tropical Micro Pellets Aquarium', '480', '51As20vM-KL.jpg', 'Our unique “Micro Coating” eliminates nutrition loss and water clouding. The premium-select marine & vegetable protein mix is ideal for small tropical fish who require larger energy reserves. A balance of Krill and Spirulina offers vivid coloration.', 27),
(46, '   TAIYO All Life Stages Tropical Flakes Fish Food', '290', '61JCtO8INVL._SX522_.jpg', 'Scientifically developed Active Life formula blend with rich in proteins, amino acids, vitamins, spirulina, mariegold, fiber which boosts immunity system for optimal health. Natural pigment like Astaxanthin the algae ,enhances to intensify the radiant color in fishes and also supports maturation and reproduction.', 26),
(47, 'Virya Zigzag Collar Neck --10inches Round Ends Aqu', '550', 'aqur.jpg', 'The typical hobbyist aquarium includes a filtration system, an artificial lighting system, an air diffuser and pump, and a heater or chiller depending on the aquarium\'s inhabitants.10inches Round Ends Aquarium Tank  (5.4 L)', 29),
(48, '125 Gallon Aquarium', '2500', '125-gallon-aqua-1080x720.jpg', 'A typical 125 gallon aquarium is equivalent to 473.2 L. The standard dimensions are 72″ L x 18″ W x 21″ H (182.9 L x 45.7 W x 53.3 H cm). These may vary given the shape and design of the individual tank.', 29);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rating`
--

CREATE TABLE `tbl_rating` (
  `rating_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating_date` varchar(50) NOT NULL,
  `rating_comment` varchar(100) NOT NULL,
  `rating_value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_rating`
--

INSERT INTO `tbl_rating` (`rating_id`, `product_id`, `user_id`, `rating_date`, `rating_comment`, `rating_value`) VALUES
(1, 24, 2, '2023-10-15 16:43:43', 'sdghghjds', 3),
(2, 24, 2, '2023-10-15 16:45:25', 'kjfzkjdgfdskjg', 3),
(3, 26, 3, '2023-10-17 12:45:16', 'good', 3),
(4, 27, 1, '2023-10-18 16:43:27', 'good fish', 3),
(5, 26, 1, '2023-10-18 17:05:07', 'best wishes', 4),
(6, 36, 10, '2023-10-19 09:29:34', 'Good Fish', 4),
(7, 25, 10, '2023-10-19 09:38:45', 'great', 3),
(8, 37, 13, '2023-10-19 13:10:16', 'high quality', 5),
(9, 43, 13, '2023-10-19 13:10:46', 'average\n', 2),
(10, 42, 15, '2023-10-20 10:53:44', 'good', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock`
--

CREATE TABLE `tbl_stock` (
  `stock_id` int(11) NOT NULL,
  `stock_quantity` int(11) NOT NULL,
  `stock_date` date NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_stock`
--

INSERT INTO `tbl_stock` (`stock_id`, `stock_quantity`, `stock_date`, `product_id`) VALUES
(2, 45, '2023-09-22', 31),
(3, 10, '2023-09-22', 27),
(4, 7, '2023-09-22', 29),
(5, 10, '2023-10-07', 24),
(6, 10, '2023-10-07', 25),
(7, 10, '2023-10-07', 26),
(8, 10, '2023-10-07', 27),
(9, 10, '2023-10-07', 28),
(10, 10, '2023-10-07', 30),
(11, 10, '2023-10-10', 27),
(12, 100, '2023-10-18', 34),
(13, 20, '2023-10-18', 29),
(14, 20, '2023-10-18', 35),
(15, 20, '2023-10-18', 36),
(16, 20, '2023-10-18', 37),
(17, 20, '2023-10-18', 37),
(18, 25, '2023-10-18', 38),
(19, 25, '2023-10-18', 39),
(20, 25, '2023-10-18', 40),
(21, 25, '2023-10-18', 41),
(22, 25, '2023-10-18', 42),
(23, 25, '2023-10-18', 43),
(24, 25, '2023-10-18', 45),
(25, 20, '2023-10-18', 46),
(26, 25, '2023-10-18', 44),
(27, 25, '2023-10-19', 36),
(28, 10, '2023-10-19', 48),
(29, 2, '2023-10-20', 47),
(30, 0, '2023-10-20', 47),
(31, 25, '2023-10-20', 47);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategory`
--

CREATE TABLE `tbl_subcategory` (
  `subcategory_id` int(11) NOT NULL,
  `subcategory_name` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_subcategory`
--

INSERT INTO `tbl_subcategory` (`subcategory_id`, `subcategory_name`, `category_id`) VALUES
(18, 'Guppy', 7),
(19, 'Betta', 7),
(23, 'Chichlid', 7),
(25, 'Discus Fish', 7),
(26, 'Flakes', 10),
(27, 'Pellet', 10),
(29, 'Aquariums', 13);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_address` varchar(50) NOT NULL,
  `place_id` int(11) NOT NULL,
  `user_contact` varchar(12) NOT NULL,
  `user_email` text NOT NULL,
  `user_password` text NOT NULL,
  `user_delivery_address` varchar(100) NOT NULL,
  `user_doj` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_address`, `place_id`, `user_contact`, `user_email`, `user_password`, `user_delivery_address`, `user_doj`) VALUES
(10, 'sreehari      ', '   kuzhuppilly  house    ', 1, '   987654321', 'sree@gmail.com', 'Sree@123', 'kuzhuppilly', '2023-03-10'),
(11, 'Anson', 'piravom house', 69, ' 8943567878', 'anson123@gmail.com', 'Anson@123', 'Piravom House', '2023-08-19'),
(12, 'Sarath', 'vikom house', 93, ' 9876543210', 'sarathanand619@gmail.com', 'Sarath@123', 'vikom', '2023-10-19'),
(13, 'Thomas Joy', 'kunnur house', 80, ' 9876904590', 'thomasmathewjoy2003@gmail.com', 'Thomas@123', 'konnorr koxxezh', '2023-10-19'),
(14, 'Farhan T P', 'malayamkudi house', 23, ' 9998765092', 'tpfarhan@gmail.com', 'Farhan@123', 'malayamkudi house', '2023-10-19'),
(15, 'Dhanya', 'bpc college piravom', 65, ' 8976548976', 'dhanyajob@gmail.com', 'Dhanya@123', 'bpc college piravom', '2023-10-19'),
(16, 'Sreehari Babu', 'kuzhuppilly ', 89, ' 8921119441', 'sreesreehari353@gmail.com', 'Sreehari@987', 'kuzhuppilly ', '2023-10-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `tbl_place`
--
ALTER TABLE `tbl_place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  ADD PRIMARY KEY (`subcategory_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `tbl_place`
--
ALTER TABLE `tbl_place`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
