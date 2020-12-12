-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2020 at 12:10 AM
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
  `Brand_Logo` mediumtext NOT NULL,
  `Brand_Founder` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`Brand_ID`, `Brand_Name`, `Brand_History`, `Brand_Logo`, `Brand_Founder`) VALUES
(1, 'Alexander McQueen', 'Innovative, uncompromising, romantic, upholding the power of emotion and the touch of the human hand: these are all elements that describe the luxury house of Alexander McQueen.\r\n\r\nThe brand is synonymous with modern British couture, renowned for its strong identity and celebration of unbridled creativity. Integral to the McQueen culture is the juxtaposition between contrasting elements: femininity and masculinity, fragility and strength, tradition and modernity, man and machine.\r\n\r\nFounded by the late Lee Alexander McQueen in 1992, and now under the creative direction of Sarah Burton, the house produces critically acclaimed collections, driven by unparalleled vision and respect for craftsmanship.', 'https://cdn.modesens.com/merchant/alexander-mcqueen-logo.jpg', 'Lee Alexander McQueen'),
(2, 'Alexander Wang', 'In 2005, Alexander Wang decided to start his own fashion company proudly putting his name on it. After only 3 years, Wang was awarded the CFDA/Vogue Fashion Fund in 2008. He even worked as Creative Director for Balenciaga from November 2012 to July 2015.\r\n\r\nFun fact: He is born on December 26th, 1983!', 'https://i.pinimg.com/originals/ff/36/90/ff36903c04281a9cf29462e6e20104af.jpg', 'Alexander Wang'),
(3, 'Balenciaga', 'Founded by Cristobal Balenciaga in 1917, the Balenciaga House is defined by a worldwide recognition as a leader in major fashion trends due to its creativity, masterful cuts and exquisite techniques. Since October 2015, Demna Gvasalia, appointed artistic director of Balenciaga\'s collections, continues to uphold the vision, influence and radical style of the House.', 'https://i.pinimg.com/originals/dd/64/e7/dd64e7813b50a6c6b7063f0befdf07d6.jpg', 'Cristóbal Balenciaga'),
(4, 'Bottega Veneta', 'Bottega Veneta has set a new standard for luxury since its birth in Vicenza in 1966. Inspired by Italian culture with a global outlook, the house is defined by a distinctly refined attitude. Bottega Veneta uses noble materials to create considered pieces that become part of their owner’s lives. The house embraces a core philosophy of style, innovation, and luxury, applied to a full offer for women, men, and home.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Bottega_Veneta_logo_3.png/1200px-Bottega_Veneta_logo_3.png', 'Renzo Zengiaro & Michele Taddei'),
(5, 'Givenchy', 'With its world-renowned collections of men’s fashion, women’s fashion and beauty, Givenchy has been sensuously reinterpreting the codes of elegance, sophistication, and femininity since it was founded in 1952.', 'https://cdn.freebiesupply.com/logos/large/2x/givenchy-3-logo-png-transparent.png', 'Hubert de Givenchy'),
(6, 'Gucci', 'Founded in Florence in 1921, Gucci is one of the world\'s leading luxury fashion brands. Boasting a contemporary vision, the brand has re-established its reputation as one of the most influential luxury fashion brands. Launched in 2019, Gucci’s new makeup story reinterprets the codes of traditional beauty, exclusively at Holt Renfrew.', 'https://cdn.shopify.com/s/files/1/0249/5892/6941/products/Gucci-PNG-Image-1024x662_1024x.png?v=1585667118', 'Guccio Gucci'),
(7, 'Jimmy Choo', 'TBD', 'https://images.easyfundraising.org.uk/retailer/cropped/logo-jimmy-choo.png', 'Jimmmy Choo & Tamara Mallon'),
(8, 'Louboutin', 'TBD', 'https://cdn.worldvectorlogo.com/logos/christian-louboutin.svg', 'Christian Louboutin'),
(9, 'Manolo Blahnik', 'TBD', 'https://image.isu.pub/180315122819-d7c12e06654dde74c96d4295c8ef9bc1/jpg/page_1.jpg', 'Manolo Blahnik'),
(10, 'Miu Miu', 'TBD', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8J48dxH0rM-aAbkgW8qCxLSQ3cbktp8YXcg&usqp=CAU', 'Miuccia Prada'),
(11, 'Prada', 'Since 1913, Prada has been synonymous with a distinctive style which has always anticipated, and often initiated, new trends in all fields. Its conceptual aesthetic, combining a cutting-edge approach with a tradition in strong craftsmanship, perfectly interprets a timeless elegance that is the result of constant research and experimentation.', 'data:image/png;base64,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', 'Mario Prada'),
(12, 'Salvatore Ferragamo', 'TBD', 'https://yt3.ggpht.com/ytc/AAUvwnhHB34wy8hB8bq7BDDpRuQCdoBt4g8Wm0wa5tndjA=s900-c-k-c0x00ffffff-no-rj', 'Salvatore Ferragamo'),
(13, 'Stuart Weitzman', 'TBD', 'https://images.squarespace-cdn.com/content/v1/55485a30e4b0680763ed67a8/1450341452984-0QZW2YXHR7RVDGDFRUDD/ke17ZwdGBToddI8pDm48kBtpJ0h6oTA_T7DonTC8zFdZw-zPPgdn4jUwVcJE1ZvWQUxwkmyExglNqGp0IvTJZamWLI2zvYWH8K3-s_4yszcp2ryTI0HqTOaaUohrI8PIWkiAYz5ghgEgSGJuDQ4e1ZKXpRdhEMT7SgthRpD0vyIKMshLAGzx4R3EDFOm1kBS/Stuart+Weitzman+wearbase+brand+profile', 'Stuart Weitzman'),
(14, 'Valentino Garavani', 'The house of Valentino is nested in the heart of Rome, and expresses a point of view on the contemporary world using history as a playground and the Atelier as a place that produces both beauty and thought.\r\n\r\n2016 marked a new beginning, under the Creative Direction of Pierpaolo Piccioli. A new set of values, that are both of the moment and faithful to its heritage, were created: grace and delicacy, both as an attitude and as a silhouette; a celebration of individuality; emotional beauty; the blending and merging of different languages.\r\n\r\nThe idea of contemporary humanism leads a creative quest that revolves around the personality of the wearer. Vision, products, retail spaces share the same traits: from the one-of-a-kind Haute Couture creations to women’s and men’s ready-to-wear and accessories, from eyewear to fragrances to the boutiques, Valentino is synonymous with elegance, pureness, craftsmanship, uniqueness.', 'https://cdn.freebiesupply.com/logos/large/2x/valentino-logo-black-and-white.png', 'Valentino Clemente Ludovico Garavani'),
(15, 'Yves Saint Laurent', 'Founded in 1961, Yves Saint Laurent was the first couture house to introduce, in 1966, the concept of luxury prêt-à-porter with a collection called “Saint Laurent Rive Gauche”, synonymous with youth and freedom. This shift represented a first critical step in the modernization of fashion and revolutionized the socio-cultural landscape.\r\n\r\nThroughout the years, the House’s groundbreaking styles have become iconic cultural and artistic references, and its founder, the couturier Yves Saint Laurent, secured a reputation as one of the twentieth century’s foremost designers.\r\n\r\nPart of the Kering Group, the House kept true to its identity of absolute modernity and fashion authority. Under the creative direction of Anthony Vaccarello, appointed in April 2016, the House offers a broad range of women’s and men’s ready-to-wear products, leather goods, shoes, jewellery, and eyewear. Through a license agreement, it is also a major force in fragrances and cosmetics.', 'https://img2.pngio.com/yves-saint-laurent-logo-png-transparent-svg-vector-freebie-supply-yves-saint-laurent-brand-png-2400_2400.png', 'Yves Saint Laurent & Pierre Bergé'),
(16, 'Little Brand Shoe Store', 'Made with lots of love and stress by two college students who also just so happened to be friends! ', '', 'Viktoriya Marshova & Miguel Cano Gallo');

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
  `Cust_Gender` varchar(20) DEFAULT NULL,
  `Cust_Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Customer_ID`, `Cust_Last_Name`, `Cust_First_Name`, `Cust_Phone_Number`, `Cust_Email_Address`, `Cust_Address_Line`, `Cust_City`, `Cust_Postal_Code`, `Cust_Gender`, `Cust_Password`) VALUES
(10, 'Gallo', 'Juan ', '5556935522', 'juangallo@icloud.com', NULL, NULL, NULL, NULL, 'ramirez'),
(11, 'Alexandre', 'Lyon', '5656225599', 'alexlyon@gmail.com', NULL, NULL, NULL, NULL, 'paris'),
(12, 'de Niro', 'Robert', '', 'robertDeniro@hotmail', NULL, NULL, NULL, NULL, 'taxi');

-- --------------------------------------------------------

--
-- Table structure for table `cust_comments`
--

CREATE TABLE `cust_comments` (
  `Comment_ID` int(11) NOT NULL,
  `Customer_ID` int(11) NOT NULL,
  `Comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cust_order_item`
--

CREATE TABLE `cust_order_item` (
  `Order_Item_ID` int(11) NOT NULL,
  `Order_ID` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Gender` char(1) NOT NULL
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
  `Product_Size` int(11) NOT NULL,
  `shoe_type` varchar(20) NOT NULL,
  `made_in` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `men_inventory`
--

INSERT INTO `men_inventory` (`Product_ID`, `Brand_ID`, `Product_Name`, `Product_Description`, `Product_Color`, `Product_Img`, `Product_Price`, `Product_Size`, `shoe_type`, `made_in`) VALUES
(1, 5, 'Urban Street Leather Sneakers With Logo Strap', 'These leather slip-on sneakers feature a wide elastic band with GIVENCHY PARIS logo on the front. The style is finished with the signature knotted heel inset featuring a gold GIVENCHY PARIS logo on the back.\r\nUpper: Leather\r\nLining Leather\r\nSole: Rubber\r\nFits true to size', 'Black, Whi', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000053606_01', '805', 10, 'Sneakers', 'Portugal'),
(2, 14, 'Emilio Villalba Giggies Fabric High-Top Sneakers', 'In collaboration with Emilio Villalba, these floral print lace-up sneakers are detailed with tonal jacquard VLTN logo laces and a rubber VLTN tag at the side. Crafted in Italy, the high-tops are mounted on a rubber sole with a debossed VLTN detail.\r\nUpper: Cotton\r\nSole: Rubber\r\nTrim: Leather\r\nRound toe\r\nFlat\r\nLace-up closure', 'Black, Whi', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000150977_01', '1020', 10, 'Sneakers', 'Italy'),
(3, 6, 'Leather Lace-Up Oxford Shoes With Double G', 'Crafted from smooth leather, these formal lace-up shoes are defined by a pointed toe. A miniature version of the Double G appears as a subtle logo detail on the back.\r\nUpper: Leather\r\nSole: Leather\r\nPointed toe\r\nStacked heel\r\nLace-up closure', 'Black', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000210895_01', '1080', 10, 'Dress Shoes', 'Italy'),
(4, 6, 'Ace Liberty Leather Sneakers In Floral Print\r\n', 'In an exclusive collaboration with luxury department store Liberty London, these leather lace-up sneakers are presented in one of Liberty London’s emblematic floral prints. In honour of the collab, they feature \'GUCCI\' printed on one shoe and \'LIBERTY\' printed on the other. The low-tops are finished with a leather detail at the back stamped with the GUCCI logo.\r\nThe sneakers use leather made through an innovative Scrap-less process that minimizes leather scraps and decreases the consumption of new natural resources compared to 	traditional methods.\r\nUpper: Leather\r\nSole: Rubber\r\nRound toe\r\nFlat\r\nLace-up closure', 'Pink, Blue', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000204643_01', '845', 10, 'Sneakers', 'Italy'),
(5, 5, 'Wing Leather Sneakers With Logo Print', 'These lace-up sneakers in leather, feature a wide contrast band with GIVENCHY signature, mixed graphic insets, topstitching and perforations. Made in Italy, the low-tops are detailed with canvas bands on the lacing, and GIVENCHY PARIS signature on the tongue. The lightweight EVA sole is stylized with a contrasting thermoplastic reinforcement and raised GIVENCHY signature on the back.\r\nUpper: Leather\r\nLining: Textile, Leather\r\nSole: Rubber\r\nRound toe\r\nFlat\r\nLace-up closure', 'Black, Red', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000167956_01', '1065', 10, 'Sneakers', 'Italy'),
(6, 12, 'Riley Leather Brogue Oxford Shoes', 'These Italian-crafted lace-up Oxford shoes are made in a smooth leather with brogue detailing and debossed FERRAGAMO signature.\r\nUpper: Leather\r\nAlmond toe\r\nFlat\r\nLace-up closure', 'Black', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000139574_01', '725', 10, 'Dress Shoes', 'Italy'),
(7, 1, 'Oversized Leather Court Sneakers', 'These lace-up court sneakers feature a lightweight signature leopard rubber sole. Crafted in Italy from smooth leather with a contrast suede heel patch, the oversized low-top style is finished with the ALEXANDER MCQUEEN signature on the tongue and heel tab. The trainers come with an additional set of wide, flat shoelaces.\r\nUpper: Leather\r\nSole: Rubber\r\nTrim: Suede\r\nRound toe\r\nOversized sole\r\nLace-up closure', 'White, Bla', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000252083_01', '650', 10, 'Sneakers', 'Italy'),
(8, 14, 'VLTN Leather Hiking Boots', 'These lace-up ankle boots are distinguished by the padded ankle detail and VLTN logo ribbon trim. Made in Italy, the trekking-inspired boots feature a hiking-style lace closure with shiny D-ring hardware and a thick treaded rubber sole for traction.\r\nUpper: Leather\r\nSole: Rubber\r\nTrim: Textile\r\nRound toe\r\nLug sole\r\nLace-up closure', 'Black', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000138991_01', '1390', 10, 'Boots', 'Italy'),
(9, 11, 'Rocksand Leather And Nylon Combat Boots', 'These 90s-inspied lace-up ankle boots are stylized with a chunky lug sole. Made in Italy from spazolatto rois leather and nylon, they are finished with metal eyelets and PRADA enamel metal triangle logo on the side.\r\nUpper: Leather\r\nSole: Rubber\r\nLace-up closure\r\nFits true to size\r\nFlat', 'Black, Tan', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000078486_01', '1085', 10, 'Boots', 'Italy'),
(10, 3, 'Strike Leather Lace-Up Ankle Boots', 'Crafted in smooth, matte leather, these lace-up ankle boots feature an extra round toe accentuated by the rubber bumper that\'s embossed with the BALANCIAGA logo. Made in Italy, the combat style is mounted on a thick toothed rubber lug sole.\r\nUpper: Leather\r\nSole: Rubber\r\nRound toe\r\nLug sole\r\nLace-up closure', 'Black', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000209162_01', '1275', 10, 'Boots', 'Italy'),
(11, 3, 'Speed Knit High-Top Sneakers Sock Sneakers With Lo', 'Decorated with a graffiti BALANCIAGA logo on the sole, these lightweight sock sneakers are constructed in Italy from knit with a rib knit collar and contrasting BALENCIAGA logo printed at the side. The high-tops are mounted on a flexible, molded rubber sole featuring Memory sole technology and BALENCIAGA embossed at the back.\r\nUpper: Knit\r\nSole: Rubber\r\nRound toe\r\nFlat\r\nPull-on', 'Black, Whi', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000067919_01', '1050', 10, 'Sneakers', 'Italy'),
(12, 3, 'Soccer Technical Fabric Sneakers\r\n', 'tailed with topstitching on the upper for a quilted effect. The elasticated rubber tongue features a contrast BALENCIAGA logo while the back tab reveals the BB logo.\r\nUpper: Technical Fabric\r\nSole: Rubber\r\nRound toe\r\nCleated sole\r\nSlip on', 'Black', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000209290_01', '925', 10, 'Sneakers', 'Italy'),
(13, 6, 'Jordaan Leather Loafers', 'These Italian-crafted leather loafers are designed with an elongated toe and finished by the House\'s signature Horsebit detail—an homage to Gucci\'s equestrian roots. They are finished with a stitched detail at the heel.\r\nUpper: Leather\r\nSole: Leather\r\nAlmond toe\r\nStacked heel\r\nSlip-on', 'Black', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000210795_01', '1080', 10, 'Loafers', 'Italy'),
(14, 15, 'Andy Leather Sneakers With Studded Tab', 'These lace-up sneakers are crafted in smooth leather with a worn-looking suede toe and studded heel tab. Made in Italy, the low-tops are finished with the SAINT LAURENT signature in gold-tone at the side, and SAINT LAURENT PARIS embossed on the back of the distressed rubber sole.\r\nUpper: Leather\r\nSole: Rubber\r\nRound toe\r\nFlat\r\nLace-up closure', 'Black', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000167717_01', '795', 10, 'Sneakers', 'Italy'),
(15, 12, 'Angiolo Leather Oxford Shoes', 'These classic lace-up dress shoes are crafted in smooth leather with a plain, almond shaped toe. The Oxfords are set on a low heel.\r\nUpper: Leather\r\nLining: Leather\r\nSole: Rubber\r\nAlmond toe\r\nLow heel\r\nLace-up closure', 'Black', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000139545_01', '1190', 10, 'Dress Shoes', 'Italy'),
(16, 12, 'Seral Velvet Loafers', 'These Italian-crafted velvet loafers are stylized with a Gancini and grosgrain ribbon bit detail. Trimmed in patent leather, the apron highlights the square toe shape.\r\nUpper: Velvet\r\nLining: Leather\r\nSole: Rubber\r\nTrim: Patent Leather\r\nSquare apron toe\r\nFlat heel\r\nSlip-on', 'Black', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000139554_01', '845', 10, 'Loafers', 'Italy'),
(17, 6, 'Ace Leather High-Top Sneakers With Interlocking G', 'This high-top version of GUCCI \'s iconic leather lace-up sneakers are distinguished by the retro-inspired padded details at the ankle and a perforated Interlocking G logo on the side. Made in Italy, the low-tops are finished with a contrast heel tab featuring a silver-toned GUCCI logo.\r\nUpper: Leather\r\nSole: Rubber\r\nRound toe\r\nFlat\r\nLace-up closure', 'White, Gre', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000210931_01', '855', 10, 'Sneakers', 'Italy'),
(18, 15, 'Malibu Canvas High-Top Sneakers In Leopard Print', 'These lace-up sneakers in leopard print canvas are detailed with a SAINT LAURENT-embossed leather heel tab. Made in Italy, the high-tops are finished with the SAINT LAURENT logo sketched at the side of the rubber sole.\r\nUpper: Cotton\r\nSole: Rubber\r\nRound toe\r\nFlat\r\nLace-up closure', 'Leaopard p', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000167677_01', '765', 10, 'Sneakers', 'Italy'),
(19, 3, 'BB Rubber Logo Slide Sandals', 'These rubber slip-on flat sandals are presented in a contrasting allover BB logo striped 	print. Made in Italy, the pool slides are designed with a molded rubber footbed.\r\nUpper: Rubber\r\nSole: Rubber\r\nRound, open toe\r\nFlat\r\nSlip-on', 'Black, Whi', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000209167_01', '450', 10, 'Slides', 'Italy'),
(20, 3, 'Triple S Foam And Mesh Sneakers In Allover Logo Pr', 'In an allover BALENCIAGA logo print, these paneled lace-up sneakers in double foam and mesh, feature an oversized three-layered outsole. The non-leather style is finished two lace systems (one functional), Triple S rubber branding on the tongue, and shoe size embroidered on the toe and BALENCIAGA logo at the side.\r\nUpper: Double Foam, Mesh\r\nSole: Plastic, Rubber\r\nRound toe\r\nLayered sole\r\nLace-up closure', 'Red, Black', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000209140_01', '1390', 10, 'Sneakers', 'Unknown'),
(21, 11, 'Cloudbust Air Technical Fabric Sneakers', 'These sporty lace-up sneakers are made of techno knit fabric with three-dimensional rubber details and a light, flexible air bubble sole for a futuristic feel. The low-tops are complete with the PRADA logo embossed at the side.\r\nUpper: Textile\r\nSole: Rubber\r\nRound toe\r\nFlat\r\nLace-up closure\r\nImported', 'Navy', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000167260_01', '965', 10, 'Sneakers', 'Unknown'),
(22, 3, 'Rubber Logo Slide Sandals', 'These rubber slip-on flat sandals feature a contrast 3D BALENCIAGA logo on the strap. Made in Italy, the pool slides are designed with a molded rubber footbed.\r\nUpper: Rubber\r\nSole: Rubber\r\nRound, open toe\r\nFlat\r\nSlip-on', 'Black, Red', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000119477_01', '395', 10, 'Slides', 'Italy'),
(23, 6, 'Tennis 1977 GG Jacquard Fabric Sneakers', 'Presented in a high-top version, these Gucci Tennis 1977 lace-up sneakers are crafted from a jacquard fabric with the House\'s GG monogram. The high-tops are finished with the signature Web stripe, textured GG motif at the sole, Gucci Tennis 1977 label, and a subtle \'77\' embroidered detail.\r\nUpper: Mini GG Jacquard Fabric\r\nSole: Rubber\r\nTrim: Grosgrain\r\nRound toe\r\nFlat\r\nLace-up closure', 'White, Gre', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000210964_01', '900', 10, 'Sneakers', 'Italy'),
(24, 6, 'Leather Loafers With Web And Interlocking G', 'These Italian-crafted leather loafers with a slightly elongated toe, combines the Web strip with shiny Interlocking G hardware and a traditional leather tassel detail.\r\nUpper: Leather\r\nSole: Leather\r\nAlmond toe\r\nStacked heel\r\nSlip-on', 'Brown', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000204605_01', '1105', 10, 'Loafers', 'Italy'),
(25, 11, 'Leather And Nylon Combat Boots', 'These military-inspired glossy leather and nylon lace-up ankle boots feature PRADA\'s recognizable enameled metal triangle logo at the side. The combat style is accented with silver-toned eyelets and fitted with a pull-loop at the back to pull on.\r\nUpper: Leather, Nylon\r\nSole: Rubber\r\nRound toe\r\nFlat\r\nLace-up closure', 'Black', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000167268_01', '1195', 10, 'Boots', 'Italy'),
(26, 11, 'Techno Stretch Fabric Sneakers', 'These sporty lace-up sneakers are made of Techno Stretch fabric with three-dimensional rubber details for a futuristic feel. The low-tops are complete with the triangle PRADA MILANO logo in contrast at the side.\r\nUpper: Textile\r\nSole: Rubber\r\nRound toe\r\nFlat\r\nLace-up closure', 'Blue, Blac', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000221044_01', '1090', 10, 'Sneakers', 'Italy'),
(27, 12, 'Riley Leather Brogue Oxford Shoes', 'These Italian-crafted lace-up Oxford shoes are made in a grained leather with brogue detailing and debossed FERRAGAMO signature.\r\nUpper: Grained Leather\r\nAlmond toe\r\nFlat\r\nLace-up closure', 'Brown', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000139611_01', '725', 10, 'Dress Shoes', 'Italy'),
(28, 6, 'Leather Slide Sandals With GUCCI Hawaii', 'These slip-on flat sandals are characterized by the GUCCI Hawaii-embroidered leather strap. Made in Italy, the pool slides are designed with a molded rubber footbed with embossed GUCCI logo.\r\nUpper: Italy\r\nSole: Rubber\r\nRound, open toe\r\nFlat\r\nSlip-on', 'Black, Blu', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000211000_01', '485', 10, 'Slides', 'Italy'),
(29, 6, 'Original Gucci Leather Slide Sandals', 'These slip-on flat sandals feature a leather strap with an embossed \"Original Gucci\" motif and play on the Web. Made in Italy, the pool slides are designed with a molded rubber footbed that\'s embossed with the GUCCI signature.\r\nUpper: Leather\r\nSole: Rubber\r\nRound toe\r\nFlat\r\nSlip-on', 'White, Gre', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000211009_01', '485', 10, 'Slides', 'Italy'),
(30, 5, 'Wing Leather Sneakers', 'These grained leather lace-up sneakers feature contrast panels and webbing pull-tabs on the lacing. The low-tops are finished with the GIVENCHY PARIS signature on the side and tongue, and debossed on the sole and heel insets.\r\nUpper: Leather\r\nLining: Textile, Leather\r\nSole: Lightweight Rubber\r\nLace-up closure\r\nFits true to size\r\nFlat', 'White, Bla', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000172279_01', '1065', 10, 'Sneakers', 'Italy'),
(31, 6, 'Suede Horsebit Loafers With Web', 'These Italian-crafted suede loafers with a fold-down heel counter, are finished with GUCCI\'s signature gold-toned Horsebit detail atop of the House Web--a nod to the brand\'s equestrian roots.\r\nUpper: Suede\r\nSole: Leather\r\nTrim: Leather\r\nSlip-on\r\nFits true to size\r\n0.6\" heel height', 'Brown', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000064429_01', '1030', 10, 'Loafers', 'Italy'),
(32, 14, 'Rockstud Leather Derby Shoes', 'TBD', 'Black', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000109146_01', '1330', 10, 'Dress Shoes', 'Italy'),
(33, 1, 'Oversized Leather Sneakers', 'These lace-up sneakers with an exaggerated sole are crafted in Italy from a smooth leather and trimmed with a contrast suede heel patch. The style is finished with the ALEXANDER MCQUEEN signature on the tongue and heel counter.\r\nUpper: Leather\r\nSole: Rubber\r\nTrim: Suede\r\nLace-up closure', 'White, Ora', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000174595_01', '675', 10, 'Sneakers', 'Italy'),
(34, 11, 'Gabardine Logo High-Top Sneakers', 'These gabardine lace-up sneakers are defined by the rubber sole inspired by motocross tires. Made in Italy, the high-top silhouette is finished with a printed triangle PRADA MILANO logo at the side.\r\nUpper: Cotton\r\nSole: Rubber\r\nLace-up closure\r\nFits true to size\r\nFlat', 'Pink, Blac', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000078478_01', '840', 10, 'Sneakers', 'Italy'),
(35, 14, 'Open Leather Sneakers With VLTNSTAR Print', 'These open laced sneakers are constructed in Italy from smooth leather. The low-tops feature the VLTN logo printed at the side and the VALENTINO GARAVANI logo and star detail on the tongue. They are finished with rubber Rockstud trim at heel edge.\r\nUpper: Leather\r\nLining: Leather\r\nSole: Rubber\r\nLace-up closure\r\nFits true to size\r\nFlat', 'White, Bla', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000109109_01', '770', 10, 'Sneakers', 'Italy'),
(36, 6, 'Rhyton Leather Sneakers With Tigers\r\n', 'Oversized, chunky lace-up sneakers with tiger face print at side, GUCCI label on tongue and debossed GUCCI logo on back sole.\r\nUpper: Leather\r\nSole: Rubber\r\nLace-up closure\r\n2.4\" sole', 'White, Gre', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_4311645966_01', '1110', 10, 'Sneakers', 'Italy'),
(37, 6, 'Rhyton Leather Sneakers With Mouth Print', 'Distressed lace-up leather sneakers with mouth and logo printed on the side, and a thick sole with debossed logo at the back.\r\nUpper: Leather\r\nSole: Rubber\r\nLace-up closure\r\n2\" sole', 'Ivory, Red', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_4310990645_01', '1160', 10, 'Sneakers', 'Italy'),
(38, 6, 'Ace Leather Sneakers With Snake Embroidery', 'Lace-up sneakers with embroidered Kingsnake appliqué on signature Web, and contrast red and green metallic patches on the heel counter.\r\nUpper: Leather\r\nSole: Rubber\r\nTrim: Ayers Leather\r\n0.3\" sole', 'White, Gre', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_4309452672_01', '900', 10, 'Sneakers', 'Italy'),
(39, 6, 'New Ace Embroidered Leather Sneakers', 'Lace-up sneakers with a gold embroidered bee on signature Web, and contrast metallic patches on the heel counter.\r\nUpper: Leather\r\nSole: Rubber\r\nTrim: Ayers Leather\r\n0.3\" sole', 'White, Red', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_4308708892_01', '885', 10, 'Sneakers', 'Italy'),
(40, 6, 'Leather Derby Shoes\r\n', 'Lace-up shoes with signature Web stripe around opening.\r\nUpper: Leather\r\nSole: Leather\r\nTrim: Grosgrain\r\nLace-up closure\r\n0.5\" heel', 'Black, Gre', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_4311644407_01', '1160', 10, 'Dress Shoes', 'Italy'),
(41, 15, 'Billy Leather Derby Shoes', 'These lace-up derby shoes are crafted in smooth leather with a stacked heel. The pointed toe silhouette sets defines these lace-ups.\r\nUpper: Leather\r\nSole: Leather\r\nPointed toe\r\nStacked heel\r\nLace-up closure', 'Black', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000167737_01', '1060', 10, 'Dress Shoes', 'Italy'),
(42, 8, 'A Mon Homme', 'An elegant and refined model, the city derby A Mon Homme seduces with its timelessness. Made from black calfskin, it has visible topstitching edged in brogue detailing. Subtle details that reveal the precious savoir-faire of the Maison Christian Louboutin.', 'Black', 'https://images.us.christianlouboutin.com/media/catalog/product/cache/1/thumbnail/1200x/602f0fa2c1f0d1ba5e241f914e856ff9/1/1/8/0/christianlouboutin-amonhomme-1180230_BK01_1_1200x1200_1519399282.jpg', '1295', 10, 'Dress Shoes', 'Italy'),
(43, 8, 'Dandelion Tassel', 'The classic Dandelion is a slip-on city shoe with an elongated silhouette that works with all trouser styles from slim to retro wide-leg. The style is inspired by Christian’s love of nature. This timeless, elegant model is crafted in smooth Black Calf Paris leather and features an iconic Maison Christian Louboutin tassel, a meticulously designed adornment which offers the perfect ‘flop’.', 'Black', 'https://images.us.christianlouboutin.com/media/catalog/product/cache/1/thumbnail/1200x/602f0fa2c1f0d1ba5e241f914e856ff9/3/1/5/0/christianlouboutin-dandeliontassel-3150599_BK01_1_1200x1200_1578421830.jpg', '1195', 10, 'Dress Shoes', 'Italy'),
(44, 8, 'Mortimer', 'The Mortimer has become a mainstay of the Maison’s flats collection. It embodies the essence of the traditional lace-up, reworked with a modern twist. The upper on this model is crafted from glossy Calf Patiné leather in deep brown Havane and features a subtly pointed toecap, divided vamp and hand-stitching for iconic styling. The pièce de résistance comes in the guise of a double monk strap with silver-tone buckle closures.', 'Brown', 'https://images.us.christianlouboutin.com/media/catalog/product/cache/1/thumbnail/1200x/602f0fa2c1f0d1ba5e241f914e856ff9/3/1/7/0/christianlouboutin-mortimer-3170040_BWI3_1_1200x1200_1578065303.jpg', '1195', 10, 'Dress Shoes', 'Italy'),
(45, 8, 'Alpha Male', 'The tapered lines of the Alpha Male shoe have an enticing elegance. This iconic Maison Christian Louboutin model is made from patent calfskin. Its black colour is embellished with tone-on-tone grosgrain trims for a sophisticated style. This shoe rests on a thin sole, making it perfect for city life.', 'Black', 'https://images.us.christianlouboutin.com/media/catalog/product/cache/1/thumbnail/1200x/602f0fa2c1f0d1ba5e241f914e856ff9/3/2/0/0/christianlouboutin-alphamale-3200418_BK01_1_1200x1200_1581940315.jpg', '1145', 10, 'Dress Shoes', 'Italy'),
(46, 8, 'Greggo', 'The slender looking Greggo shoe elegantly wraps the foot. This black Maison Christian Louboutin shoe mixes textures and harmoniously combines patent calfskin and velvet. Its quarters are dressed in a braided finish for a sophisticated style. Tone-on-tone grosgrain trims complete this timeless look.', 'Black', 'https://images.us.christianlouboutin.com/media/catalog/product/cache/1/thumbnail/1200x/602f0fa2c1f0d1ba5e241f914e856ff9/1/2/1/0/christianlouboutin-greggo-1210426_BK01_1_1200x1200_1598352970.jpg', '1250', 10, 'Dress Shoes', 'Italy');

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
  `Product_Size` int(11) NOT NULL,
  `shoe_type` varchar(20) NOT NULL,
  `Made_in` varchar(20) NOT NULL,
  `Heel_Height` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `women_inventory`
--

INSERT INTO `women_inventory` (`Product_ID`, `Brand_ID`, `Product_Name`, `Product_Price`, `Product_Img`, `Product_Description`, `Product_Color`, `Product_Size`, `shoe_type`, `Made_in`, `Heel_Height`) VALUES
(1, 14, 'Rockstud Patent Leather Pumps With Ankle Straps', '1320', 'https://i.pinimg.com/originals/5b/a5/5f/5ba55fdb4ed5077af9d774018c9cde53.jpg', 'Pointed toe pumps with ankle strap detail embellished with signature Rockstud hardware and set on a covered stiletto heel.\r\nUpper: Patent Leather\r\nLining: Leather\r\nSole: Leather\r\nTrim: Metal\r\nBuckle closure\r\n3.9\" heel\r\nMade in Italy', 'Nude', 0, 'Pumps', 'Italy', '3.9\"'),
(2, 11, 'Leather Logo Slingback Pumps', '1085', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000164764_01', 'Crafted in Italy, these leather pumps feature a defined pointed toe and slender slingback strap with an adjustable buckle. The contrasting instep strap is detailed with PRADA\'s recognizable enameled metal triangle logo.\r\nUpper: Leather\r\nLining: Leather\r\nSole: Leather\r\nPointed toe\r\nKitten heel\r\nBuckle closure\r\nMade in Italy', 'Pink, White, Nude', 5, 'Pumps', 'Italy', '2.2\"'),
(3, 9, 'Campaine Patent Mary Jane Pumps', '895', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000161606_01', 'These pointed toe Mary Jane pumps in glossy patent leather, are trimmed with grosgrain and feature an elasticated buttoned strap. Made in Italy, the pumps are mounted on a covered stiletto high heel.\r\nUpper: Patent Leather\r\nLining: Leather\r\nSole: Leather\r\nTrim: Grosgrain\r\nPointed toe\r\nStiletto heel\r\nSlip on\r\nMade in Italy', 'Nude', 5, 'Pumps', 'Italy', '3.5\"'),
(4, 2, 'Julie Leather Crystal Logo Heeled Sandals', '1210', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000155762_01', 'These ankle-strap sandals with a square toe shape feature a crystal-covered strap with the ALEXANDER WANG logo in contrasting crystals. The sparkly style is set on a thin stiletto high heel.\r\nUpper: Crystal, Leather\r\nLining: Leather\r\nSole: Leather\r\nSquare toe\r\nStiletto high heel\r\nBuckle closure\r\nImported', 'Black', 5, 'Sandals', 'Unknown', 'Unknown'),
(5, 7, 'Love 100 Patent Leather Pumps', '750', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_4311573689_01', 'Pointed toe pumps set on high stiletto heel feature JC logo hardware at back.\r\nUpper: Patent Leather\r\nLining: Leather\r\n3.9\" heel\r\nMade in Italy', 'Black', 5, 'Pumps', 'Italy', '3.9\"'),
(6, 4, 'Leather And Mesh Heeled Sandals With Chain', '1470', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000109693_01', 'Made in Italy, these pointed toe sandals are crafted from nappa leather with a mesh overlay chunky gold-finish chain threaded through back loops. The D\'Orsay silhouette is set on a stiletto high heel and rubber-injected sole for comfort and stability.\r\nUpper: Nappa Leather, Mesh\r\nSole: Rubber-Injected Leather\r\nPointed toe\r\nStiletto heel\r\nLobster hook closure\r\nMade in Italy', 'Black', 5, 'Sandals', 'Italy', '3.7\"'),
(7, 7, 'Hawaii/F Leather Sneakers', '550', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000233189_01', 'These leather lace-up sneakers are accented with silver star eyelets, star perforations and JIMMY CHOO embossed at the heel. The chunky sole gives a leg-lengthening effect.\r\nUpper: Leather\r\nLining: Leather\r\nSole: Rubber\r\nRound toe\r\nFlat\r\nLace-up closure\r\nImported', 'White', 5, 'Sneakers', 'Unknown', 'NA'),
(8, 14, 'VLOGO Leather And Mesh Sneakers', '860', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000143940_01', 'Made in Italy, these lace-up sneakers are crafted in panels of leather, suede and mesh with a VLOGO detail at the side. The low-tops are detailed with a toggle on the laces and a rubber VALENTINO GARAVANI label on the tongue.\r\nUpper: Leather, Suede, Mesh\r\nLining: Leather\r\nSole: Leather\r\nRound toe\r\nFlat\r\nLace-up closure\r\nMade in Italy', 'White', 5, 'Sneakers', 'Italy', 'NA'),
(9, 10, 'Canvas Combat Boots', '915', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000188791_01', 'These canvas lace-up combat boots are characterized by the chunky hiker-style sneaker sole featuring the MIU MIU logo at the back. Crafted in Italy, the tongue is detailed with the signature MIU MIU logo ribbon. There is a side zipper to effortlessly put the boots on.\r\nUpper: Cotton\r\nSole: Rubber\r\nRound toe\r\nPlatform, lug sole\r\nLace up front and side zipper closure\r\nMade in Italy', 'Nude, Pink', 5, 'Boots', 'Italy', 'NA'),
(10, 1, 'Oversized Leather Court Sneakers', '650', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000198832_01', 'These lace-up court sneakers feature a lightweight signature leopard rubber sole. Crafted in Italy from a smooth leather with a contrast suede heel patch, the oversized low-top style is finished with the ALEXANDER MCQUEEN signature on the tongue and heel tab. The trainers come with an additional set of wide, flat shoelaces.\r\nUpper: Leather\r\nSole: Rubber\r\nTrim: Suede\r\nRound toe\r\nFlat\r\nLace-up closure\r\nMade in Italy', 'Black, White', 5, 'Sneakers', 'Italy', 'NA'),
(11, 12, 'Pierre Leather Sneakers', '600', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000226401_01', 'Crafted in Italy, these lace-up sneakers are made from supple leather with a perforated Gancini detail at the side. The low-tops are finished with a contrast leather heel tab embossed with SALVATORE FERRAGAMO.\r\nUpper: Leather\r\nLining: Textile Leather\r\nSole: Leather\r\nRound toe\r\nFlat\r\nLace-up closure\r\nMade in Italy', 'Pink, White, Nude', 5, 'Sneakers', 'Italy', 'NA'),
(12, 3, 'Speed Knit High-Top Sock Sneakers With Logo Sole', '995', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000075412_01', 'Decorated with a graffiti BALANCIAGA logo on the sole, these lightweight sock sneakers are constructed in Italy from knit with a rib knit collar and contrasting BALENCIAGA logo printed at the side. The high-tops are mounted on a flexible, molded rubber sole featuring Memory sole technology and BALENCIAGA embossed at the back.\r\nUpper: Knit\r\nSole: Rubber\r\nRound toe\r\nFlat\r\nPull-on\r\nMade in Italy', 'Black, White', 5, 'Sneakers', 'Italy', 'NA'),
(13, 11, 'Gabardine Logo High-Top Sneakers', '790', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000032147_01', 'These lace-up sneakers are defined by the rubber sole inspired by motocross tires. The high-tops are finished with contrast trimming and a printed triangle PRADA MILANO logo at the side.\r\nUpper: Cotton\r\nSole: Rubber\r\nLace-up closure\r\nFits true to size\r\n1.4\" heel height\r\nMade in Italy', 'Black, White', 5, 'Sneakers', 'Italy', 'NA'),
(14, 11, 'Technical Fabric Heeled Knee-High Boots', '1160', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000032151_01', 'These pointed toe tall boots are crafted in Italy from a technical fabric that rises to the knee. The sleek style is set on a stiletto high heel and finished with a metal logo on the sole, a signature detail of PRADA shoes.\r\nUpper: Technical Fabric\r\nSole: Leather\r\nPull-on\r\nFits true to size\r\n3.3\" heel height\r\nMade in Italy', 'Black', 5, 'Boots', 'Italy', '3.3\"'),
(15, 10, 'Velvet Platform Sandals With Crystal Strap', '1040', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000188830_01', 'Crafted in plush velvet, these platform sandals feature a crystal-embellished ankle strap--a sparkly detail that makes this recognizably a MIU MIU shoe. Made in Italy, the sandals are set on a covered block heel and high platform sole while the adjustable, buckled ankle strap secures the foot in place.\r\nUpper: Velvet\r\nSole: Rubber\r\nPointed toe\r\nStructured mid heel\r\nBuckle\r\nFits true to size\r\n5.3\" heel height\r\nMade in Italy', 'Black', 5, 'Sandals', 'Italy', '5.3\"'),
(16, 15, 'Kim 60 Suede Heeled Over-The-Knee Boots', '2255', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000154712_01', 'These Italian-crafted suede thigh-high boots are higher in the front than back. The tall boots feature a pointed toe and are mounted on a thick block heel.\r\nUpper: Suede\r\nSole: Leather\r\nPointed toe\r\nBlock heel\r\nPull-on\r\nFits true to size\r\n2.4\" heel height\r\nMade in Italy', 'Black', 5, 'Boots', 'Italy', '2.4\"'),
(17, 6, 'Original Gucci Leather Slide Sandals', '485', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000149766_01', 'These slip-on flat sandals feature a leather strap with an embossed \"Original Gucci\" motif and play on the Web. Made in Italy, the pool slides are designed with a molded rubber footbed that\'s embossed with the GUCCI signature.\r\nUpper: Leather\r\nSole: Rubber\r\nRound, open toe\r\nFlat\r\nSlip-on', 'Black, Gold, Silver', 5, 'Slides', 'Italy', 'NA'),
(18, 6, 'Patent Leather Heeled Sandals With Double G', '1055', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000149390_01', 'These patent leather sandals are defined by the cage silhouette, pointed toe shape and Double G hardware on the straps. The stiletto style is fitted with closed heel counter, and ankle strap with adjustable buckle closure for a secure fit.\r\nUpper: Patent Leather\r\nPointed, open toe\r\nStiletto heel\r\nBuckle closure', 'Black', 5, 'Sandals', 'Italy', '3.7\"'),
(19, 6, 'Off The Grid GG Nylon Sneakers', '900', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000149686_01', 'Part of the GUCCI Tennis 1977 collection, these lace-up sneakers are made from recycled materials and trims, supporting the House\'s commitment to sustainability. The low-tops upper features regenerated nylon, crafted using recycled sewing thread and trims that display the GG pattern, and the House\'s Web is made from recycled polyester. GUCCI Off The Grid is the first collection from GUCCI Circular Lines—a concept created to support the House\'s vision for circular production.\r\nUpper: GG Nylon ( ECONYL®)\r\nLining: Organic Cotton, Viscose\r\nSole: Rubber\r\nTrim: Recycled Polyester\r\nRound toe\r\nLace-up closure\r\nFits true to size. Italian sizing', 'Black, Green, Red', 5, 'Sneakers', 'Italy', 'NA'),
(20, 6, 'Ace Leather Platform Sneakers With Embroidered Bee', '1030', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_4311495438_01', 'Lace-up sneakers with grooved platform sole, embroidered bee on Web, and contrast metallic patch on heel counter.\r\nUpper: Leather\r\nLining: Leather\r\nSole: Leather', 'Black, White, Green, Red, Gold', 5, 'Sneakers', 'Italy', 'NA'),
(21, 1, 'Oversized Leather Sneakers', '675', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_4311260857_01', 'Lace-up sneakers with an exaggerated sole, and finished with ALEXANDER MCQUEEN signature on tongue and heel counter.\r\nUpper: Leather\r\nSole: Rubber\r\nLace-up closure', 'Black, White', 5, 'Sneakers', 'Italy', 'NA'),
(22, 13, 'Tieland Suede Heeled Over-The-Knee Boots', '1025', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_4311232583_01', 'Stretch thigh-high boots set on a covered block heel, with an almond shaped toe and adjustable tie detail at the back.\r\nUpper: Stretch Suede\r\nLining: Leather\r\nSole: Rubber\r\nShaft height: 22.5\"\r\nShaft circumference: 14\"', 'Black', 5, 'Boots', 'Spain', '2.8\"'),
(23, 5, 'Logo Slide Sandals', '400', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_4311591988_01', 'These slip-on flat sandals with a wide strap featuring a contrasting GIVENCHY PARIS logo. Made in Italy, the pool slides are designed with a molded rubber footbed that\'s embossed with the GIVENCHY PARIS signature.\r\nUpper: Rubber\r\nLining: Rubber\r\nSole: Rubber\r\nSlip-on\r\nFits true to size\r\nFlat', 'Black, White', 5, 'Slides', 'Portugal', 'NA'),
(24, 3, 'Speed High-Top Sock Sneakers', '995', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_4309137794_01', 'Lightweight high-top sneakers in a technical 3D knit with BALENCIAGA logo at side and flexible molded sole embossed with BALENCIAGA at the back.\r\nUpper: Technical Knit\r\nSole: Rubber\r\n0.4\" sole', 'Black, White', 5, 'Sneakers', 'Italy', 'NA'),
(25, 6, 'GG Supreme Canvas Slide Sandals With Strawberry Pr', '405', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_4311496071_01', 'Slip-on flat sandals with a molded footbed and printed strap, a material with low environmental impact.\r\nUpper: GG Supreme Canvas\r\nSole: Rubber', 'Black, Red', 5, 'Slides', 'Italy', 'NA'),
(26, 6, 'Patent Leather D\'Orsay Pumps', '1215', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000149445_01', 'These ankle-strap pumps are characterized by their D\'Orsay silhouette and contrast patent leather cap toe and trim. The retro style is elevated with a thin, stiletto style heel featuring a squared G logo detail.\r\nUpper: Patent Leather, Leather\r\nRound toe\r\nStiletto high heel\r\nBuckle closure', 'Black, White, Pink', 5, 'Pumps', 'Italy', '4\"'),
(27, 3, 'Triple S Clear Sole Foam And Mesh Sneakers', '1390', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000208605_01', 'These paneled lace-up sneakers in double foam and mesh, feature an oversized three-layered outsole with Clear Sole technology. The air bubble creates a more comfortable, lighter shoe with a shock absorber effect. The non-leather style is finished two lace systems (one functional), Triple S rubber branding on the tongue, and shoe size embroidered on the toe and BALENCIAGA logo at the side.\r\nUpper: Double Foam, Mesh\r\nSole: Plastic, Rubber\r\nRound toe\r\nLayered sole\r\nLace-up closure\r\nImported', 'Nude', 5, 'Sneakers', 'Unknown', 'NA'),
(28, 2, 'Ivy Leather Heeled Thong Sandals With Crystal Logo', '1140', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000155744_01', 'These Italian-crafted leather thong sandals with a shaped heel feature asymmetrical crystal-embellished \"a wang\" logo hardware on the straps.\r\nUpper: Leather\r\nLining: Leather\r\nSole: Leather\r\nSquare toe\r\nStiletto heel\r\nSlip-on\r\nFits true to size', 'Pink, Nude', 5, 'Sandals', 'Italy', '2.6\"'),
(29, 6, 'Ace Leather Sneakers With Mystic Cat Print', '1035', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_4311495081_01', 'Lace-up sneakers with three cats at side, and contrast metallic GUCCI logo patch on heel counter.\r\nUpper: Leather\r\nLining: Leather\r\nSole: Leather', 'White, Turquoise, Yellow, Red', 5, 'Sneakers', 'Italy', 'NA'),
(30, 7, 'Cinderella Edit Alia Crystal Pumps', '5125', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_4310304250_01', 'Pointed toe pumps set on a stiletto heel with hand embroidered Swarovski crystal cluster at front.\r\nUpper: Swarovski Crystals, Shimmer Suede\r\nLining: Leather\r\nGemstone: Swarovski Crystals', 'Crystal', 5, 'Sandals', 'Italy', '3.3\"'),
(31, 5, 'Urban Street Leather Sneakers With Logo Strap', '790', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_4309642702_01', 'Slip-on sneakers feature a wide elastic band with GIVENCHY PARIS signature, and knotted inset with logo at the back.\r\nUpper: Leather\r\nLining: Leather\r\nSole: Rubber\r\nTrim: Elastic Fabric', 'Black, White', 5, 'Sneakers', 'Portugal', 'NA'),
(32, 15, 'Bea 105 Patent Leather Heeled Sandals In Babycat P', '1060', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000154630_01', 'These square toe sandals with a slender, adjustable ankle strap are crafted in glossy leopard print patent leather. Made in Italy, the pair is set on a thin, covered stiletto high heel.\r\nUpper: Patent Leather\r\nSole: Leather\r\nSquare, open toe\r\nStiletto heel\r\nBuckle closure', 'Black, Red', 5, 'Sandals', 'Italy', '4.1\"'),
(33, 11, 'Technical Fabric Heeled Ankle Boots\r\n', '1035', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000032136_01', 'These pointed toe sock booties made from technical fabric, are mounted on a slender stiletto heel. The sleek pull-on style is lined with leather on the front to maintain the pointy shape, and the leather sole is finished with the metal PRADA logo.\r\nUpper: Textile\r\nSole: Leather\r\nPull-on\r\nFits true to size', 'Black', 5, 'Boots', 'Italy', '3.3\"'),
(34, 6, 'Metallic Leather Platform Sandals With Double G', '1185', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000022025_01', 'Heeled sandals with platform sole and adjustable ankle strap feature signature Double G hardware on scalloped toe strap.\r\nUpper: Leather\r\nBuckle closure', 'Gold', 5, 'Sandals', 'Italy', '4.5\"'),
(35, 7, 'Diamond/F Crystal Shimmer Suede Sneakers', '4425', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_4311388187_01', 'These lace-up sneakers are crafted Italy from shimmer suede with sparkly crystal application. The futuristic low-tops feature a clear sole and silver lace up fastening.\r\nUpper: Suede\r\nLining: Leather\r\nSole: Rubber\r\nLace-up closure\r\nFits true to size\r\nFlat', 'Clear, Crystal', 5, 'Sneakers', 'Italy', 'NA'),
(36, 3, 'Kinife Knit Logo Pumps', '1050', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000208694_01', 'Printed with the BALENCIAGA logo, these knit pumps is defined by the extreme pointed toe, a signature feature of the Knife range. The silhouette is also defined by the thin stiletto mid-heel.\r\n\r\nUpper: Recycled Knit\r\nSole: Rubber, Plastic\r\nExtreme pointed toe\r\nStiletto mid-heel\r\nSlip-on', 'Black, White', 5, 'Pumps', 'Italy', '3.1\"'),
(37, 3, 'Drapy Jacquard Logo Mules', '995', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000208660_01', 'These open-toe mules are crafted in a BALENCIAGA logo jacquard fabric that\'s been twisted for a knotted effect. The slip-on sandals are mounted on a covered trumpet heel.\r\n\r\nUpper: Jacquard Textile\r\nSole: Rubber, Plastic\r\nRound, open toe\r\nTrumpet heel\r\nSlip-on', 'Black, White', 5, 'Sandals', 'Italy', '3.1\"'),
(38, 9, 'Gable Jewel Crepe de Chine Heeled Mule Sandals', '1185', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000161462_01', 'Crafted in Italy from Crepe de Chine, these open-toe mules feature a decorative crystal buckle on the instep strap. The slip-on sandals are mounted on a stiletto high heel.\r\nUpper: Silk\r\nLining: Leather\r\nSole: Leather\r\nRound, open toe\r\nStiletto heel\r\nSlip-on', 'Grey, Crystal', 5, 'Sandals', 'Italy', '3.5\"'),
(39, 6, 'Ace Leather Sneakers With Kitten', '900', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000149712_01', 'Crafted from leather, GUCCI\'s iconic Ace lace-up sneakers are enhanced with an embroidered kitten and the Web—an homage to the brand\'s equestrian heritage. The back of the low-tops are finished with a contrast leather detail embossed with the GUCCI logo.\r\nUpper: Leather\r\nSole: Rubber\r\nTrim: Web\r\nLace-up closure\r\nFits true to size. Italian sizing', 'White, Green, Red', 5, 'Sneakers', 'Italy', 'NA'),
(40, 7, 'Ray 65 Leather Slingback Pumps', '850', 'https://s7d9.scene7.com/is/image/HoltRenfrew1/m_5000158769_01', 'These nappa leather slingback pumps are crafted in Italy with an elongated point toe and sculpted kick heel, then finished with a JIMMY CHOO logo-woven ribbon trim.\r\nUpper: Nappa Leather\r\nLining: Leather\r\nSole: Leather\r\nPointed toe\r\nStiletto mid-heel\r\nBuckle closure\r\nFits true to size', 'Black, White', 5, 'Pumps', 'Italy', '2.6\"'),
(41, 8, 'Follies Strass', '1145', 'https://images.us.christianlouboutin.com/media/catalog/product/cache/1/thumbnail/1200x/602f0fa2c1f0d1ba5e241f914e856ff9/3/1/8/0/christianlouboutin-folliesstrass-3180466_F065_1_1200x1200_1576237830.jpg', 'Like Cinderella’s glass slipper, the Follies strass will make you the belle of the ball. Crafted with a striking lace mesh upper overlaid with sparkling hand-placed strass from toe to tip, this model features a towering 100-mm stiletto heel encased in soft suede in gorgeous light silk, an understated shade which only serves to enhance the shimmering strass.', 'Nude', 5, 'Pumps', 'Italy', '3.9\"'),
(42, 8, 'D\'Orsay Iriza', '875', 'https://images.us.christianlouboutin.com/media/catalog/product/cache/1/thumbnail/1200x/602f0fa2c1f0d1ba5e241f914e856ff9/3/1/6/0/christianlouboutin-iriza-3160523_BK01_1_1200x1200_1578596527.jpg', 'Christian Louboutin\'s half d\'Orsay Iriza pump in black shiny nappa leather is a timeless classic. Featuring a sensational cutout vamp and 100mm of stiletto heel for an exquisite silhouette of the pointy-toe pump. Expertly placed curves revealing the foot’s natural arch ensure every confident step.', 'Black', 5, 'Pumps', 'Italy', '3.9\"'),
(43, 8, 'Very Privé', '1050', 'https://images.us.christianlouboutin.com/media/catalog/product/cache/1/thumbnail/1200x/602f0fa2c1f0d1ba5e241f914e856ff9/1/1/5/0/christianlouboutin-newveryprive-1150600_BK01_1_1200x1200_1582210493.jpg', 'A Louboutin icon, the New Very Privé pump embodies the glamour of 1950\'s pin-ups and the daring of burlesque. A curved décolleté gently encases the foot, plunging down to a revealing toe cleavage that finishes in a sensual peep toe. The upper is incorporated into a concealed platform and teeters vertiginously over a 120-mm stiletto heel. This season’s offering comes in vampish glossy black patent leather, lined with signature red.', 'Black', 5, 'Pumps', 'Italy', '4.7\"'),
(44, 8, 'Hot Chick', '875', 'https://images.us.christianlouboutin.com/media/catalog/product/cache/1/thumbnail/1200x/602f0fa2c1f0d1ba5e241f914e856ff9/3/2/0/0/christianlouboutin-hotchick-3200380_BK01_1_1200x1200_1594119073.jpg', 'A modern style, the Hot Chick stiletto pump is made of black nappa leather. Its pointed-toe and curved openings unveil the foot with elegance. Its 100mm heel raises the silhouette with weightlessness, marking the savoir-faire of the Maison Christian Louboutin.', 'Black', 5, 'Pumps', 'Italy', '3.9\"'),
(45, 8, 'Galavati', '1075', 'https://images.us.christianlouboutin.com/media/catalog/product/cache/1/thumbnail/1200x/602f0fa2c1f0d1ba5e241f914e856ff9/1/2/0/0/christianlouboutin-galativi-1200557_CM47_1_1200x1200_1572437015.jpg', 'The Galativi pump merges black Veau Velours with tonal fishnet, unveiling the foot with elegance. Its deep-cut décolleté, 100mm of slim heel and delicate finishes join its slender upper, revealing with each step the savoir-faire of the Maison Christian Louboutin.', 'Black', 5, 'Pumps', 'Italy', '3.9\"');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`Brand_ID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- Indexes for table `cust_comments`
--
ALTER TABLE `cust_comments`
  ADD PRIMARY KEY (`Comment_ID`);

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
  ADD PRIMARY KEY (`Order_ID`);

--
-- Indexes for table `women_inventory`
--
ALTER TABLE `women_inventory`
  ADD PRIMARY KEY (`Product_ID`),
  ADD KEY `fk_women_product_brand` (`Brand_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `Customer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cust_comments`
--
ALTER TABLE `cust_comments`
  MODIFY `Comment_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Order_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `men_inventory`
--
ALTER TABLE `men_inventory`
  ADD CONSTRAINT `fk_men_product_brand` FOREIGN KEY (`Brand_ID`) REFERENCES `brands` (`Brand_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `women_inventory`
--
ALTER TABLE `women_inventory`
  ADD CONSTRAINT `fk_women_product_brand` FOREIGN KEY (`Brand_ID`) REFERENCES `brands` (`Brand_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
