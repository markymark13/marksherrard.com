-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 12, 2018 at 02:07 PM
-- Server version: 5.6.32-78.1-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `winterma_tnd`
--

-- --------------------------------------------------------

--
-- Table structure for table `Place`
--

CREATE TABLE IF NOT EXISTS `Place` (
  `ID` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Food` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `Zip` int(50) NOT NULL,
  `Area` varchar(50) NOT NULL,
  `Rating` int(50) NOT NULL,
  `Price` int(50) NOT NULL,
  `Date Added` date DEFAULT NULL,
  `Notes` longtext,
  `vote` int(8) NOT NULL,
  `wishlist` tinyint(1) NOT NULL,
  `lat` float(10,7) NOT NULL,
  `lng` float(10,7) NOT NULL,
  `voteWant` int(8) NOT NULL,
  `phpro_user_id` int(11) NOT NULL,
  `googlePlaceID` varchar(50) NOT NULL,
  `googleIcon` varchar(100) NOT NULL,
  `gImage` varchar(75) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=125 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Place`
--

INSERT INTO `Place` (`ID`, `Name`, `Type`, `Food`, `Address`, `City`, `State`, `Zip`, `Area`, `Rating`, `Price`, `Date Added`, `Notes`, `vote`, `wishlist`, `lat`, `lng`, `voteWant`, `phpro_user_id`, `googlePlaceID`, `googleIcon`, `gImage`) VALUES
(74, 'Orenchi Beyond', '', 'Other', 'Orenchi Beyond, Valencia Street, San Francisco, CA, United States', '', '', 0, 'The Mission', 0, 2, '2015-03-09', '', 0, 1, 37.7703400, -122.4227371, 0, 0, '', '', ''),
(4, 'House of Nanking', '', 'Chinese', 'House of Nanking, Kearny Street, San Francisco, CA, United States', '', '', 0, 'Chinatown', 0, 2, '0000-00-00', '', 0, 0, 37.7975616, -122.4054413, 0, 0, '', '', ''),
(6, 'Great Eastern Restuarent', 'Restaurant', 'Chinese', '', 'San Francisco', 'CA', 0, 'Chinatown', 4, 3, '0000-00-00', 'pretty dank', 0, 0, 0.0000000, -34.1234550, 0, 0, '', '', ''),
(7, 'City View', 'Restaurant', 'Chinese', '', 'San Francisco', 'CA', 0, 'Chinatown', 0, 2, '0000-00-00', '', 0, 0, 0.0000000, 0.0000000, 0, 0, '', '', ''),
(8, 'R&G Lounge', '', 'Chinese', 'R&G Lounge, Kearny Street, San Francisco, CA, United States', '', '', 0, 'Chinatown', 0, 4, '0000-00-00', '', 0, 0, 37.7975616, -122.4054413, 0, 0, '', '', ''),
(13, 'Trattoria Contadina', '', 'Italian', 'Trattoria Contadina, Mason Street, San Francisco, CA, United States', '', '', 0, 'North Beach', 0, 3, '0000-00-00', '', 0, 0, 37.8001823, -122.4123306, 0, 0, '', '', ''),
(15, 'Amarena', 'Restaurant', 'Italian', '', 'San Francisco', 'CA', 0, '', 4, 4, '0000-00-00', '', 0, 0, 0.0000000, 0.0000000, 0, 1, '', '', ''),
(19, 'La Fusion', '', 'Latin America', 'La Fusion, Pine Street, San Francisco, CA, United States', '', '', 0, 'Financial District', 0, 2, '0000-00-00', '', 0, 0, 37.7915916, -122.4037781, 0, 1, '', '', ''),
(21, 'Golden Boy Pizza', 'Restaurant', 'Pizza', '', 'San Francisco', 'CA', 0, 'North Beach', 0, 1, '0000-00-00', 'It looks like any other pizza counter from the outside, but there''s more to Golden Boy than meets the eye. The narrow space, walls lined with corrugated metal, feels like a cross between a bunker and a 1950s diner, and that ''50s spirit is immortalized in the mystical James Dean dishcloth, a Shroud-of-Turin-like remnant of cloth mounted in shrine fashion for all to admire. The grease smudges of smoldering eyes, pouting lip, and dangling cigarette are indeed unmistakable. The selection of toppings for the Sicilian-style slices include pesto, clam, garlic, and pepperoni, and beer and wine are available in addition to fountain drinks. 542 Green St. (at Columbus), (415) 982-9738.', 0, 0, 0.0000000, 0.0000000, 0, 0, '', '', ''),
(24, 'Bocadillos', '', 'Tapas', 'Bocadillos, Montgomery Street, San Francisco, CA, United States', '', '', 0, 'Financial District', 0, 2, '0000-00-00', '', 0, 0, 37.7973175, -122.4037018, 0, 1, '', '', ''),
(34, 'Suppenkuche', 'Restaurant', 'German', '', 'San Francisco', 'CA', 0, 'Civic Center', 0, 0, '0000-00-00', 'sister restaurant to biergarten', 1, 0, 0.0000000, 0.0000000, 0, 0, '', '', ''),
(35, 'Patxi''s Chicago Pizza', 'Restaurant', 'Pizza', '', 'San Francisco', 'CA', 0, 'Marina', 0, 0, '0000-00-00', '', 0, 0, 0.0000000, 0.0000000, 0, 0, '', '', ''),
(36, 'ironside', 'Restaurant', '', '', 'San Francisco', 'CA', 0, 'soma', 0, 0, '0000-00-00', '', 0, 0, 0.0000000, 0.0000000, 0, 0, '', '', ''),
(38, '21st amendment', '', 'bar and brewery', '21st Amendment Brewery, 2nd Street, San Francisco, CA, United States', '', '', 0, 'soma', 0, 2, '0000-00-00', '', 1, 0, 37.7825050, -122.3924866, 0, 0, '', '', ''),
(41, 'The House', '', 'Asia Fusion', '1230 Grant Ave, San Francisco, CA 94133, United States', '', '', 0, 'North Beach', 0, 3, '0000-00-00', '', 0, 0, 37.7984276, -122.4070892, 0, 0, '', '', ''),
(42, 'Paprika', '', 'Hungarian', 'Paprika, 24th Street, San Francisco, CA, United States', '', '', 0, 'Mission', 0, 0, '0000-00-00', '', 0, 0, 37.7525520, -122.4132690, 0, 0, '', '', ''),
(43, 'Beretta', '', 'Italian', 'Beretta, Valencia Street, San Francisco, CA, United States', '', '', 0, 'The Mission', 0, 0, '0000-00-00', '', 0, 0, 37.7538567, -122.4206924, 0, 0, '', '', ''),
(91, 'Ristorante franchino', '', 'Italian', '347 Columbus Avenue, San Francisco, CA, United States', '', '', 0, 'North Beach', 0, 2, '2015-03-11', 'Cute ambiance.', -2, 0, 37.7982979, -122.4076614, 0, 0, '', '', ''),
(45, 'Marlowe', '', 'America', 'Marlowe, Brannan Street, San Francisco, CA, United States', '', '', 0, 'Soma', 0, 0, '0000-00-00', '', 0, 0, 37.7770538, -122.3981094, 0, 0, '', '', ''),
(46, 'Gitane', 'Restaurant', '', '', 'San Francisco', 'CA', 0, 'French', 0, 0, '0000-00-00', '', 0, 0, 0.0000000, 0.0000000, 0, 0, '', '', ''),
(47, 'Kin Khao', '', 'Thai', '761 Minna Street, San Francisco, CA, United States', '', '', 0, 'Fidi', 0, 0, '0000-00-00', '', 0, 0, 37.7761841, -122.4134216, 0, 0, '', '', ''),
(87, 'Hops & Hominy', '', 'Brewery', 'Hops & Hominy, Tillman Place, San Francisco, CA, United States', '', '', 0, 'Union Square', 0, 3, '2015-03-10', '', 2, 0, 37.7893944, -122.4056396, 0, 0, '', '', ''),
(88, 'Burma Love', '', 'Asian Fusion', '211 Valencia St, San Francisco, CA 94103, United States', '', '', 0, 'The Mission', 0, 2, '2015-03-10', '', 2, 0, 37.7695961, -122.4222336, 0, 0, '', '', ''),
(89, 'Zarzuela', '', 'Spanish', 'Zarzuela, Hyde Street, San Francisco, CA, United States', '', '', 0, 'Russian Hill', 0, 2, '2015-03-10', '', 0, 1, 37.7993851, -122.4188919, 0, 0, '', '', ''),
(92, 'Cafe Claude', '', 'French', '7 Claude Ln, San Francisco, CA 94108, United States', '', '', 0, 'The Financial District', 0, 3, '2015-03-15', '', 0, 1, 37.7903328, -122.4045181, 0, 0, '', '', ''),
(93, 'brickhouse ', '', 'American', 'Brickhouse Cafe & Bar, Brannan Street, San Francisco, CA, United States', '', '', 0, 'SoMa', 0, 2, '2015-03-26', '', 2, 0, 37.7796021, -122.3952179, 0, 0, '', '', ''),
(94, 'Orenchi Beyond', '', 'Other', 'Orenchi Beyond, Valencia Street, San Francisco, CA, United States', '', '', 0, 'The Mission', 0, 2, '2015-03-27', '', 1, 0, 37.7703400, -122.4227371, 0, 0, '', '', ''),
(95, 'Garaje', '', 'Mexican', '475 3rd Street, San Francisco, CA, United States', '', '', 0, 'SoMa', 0, 2, '2015-03-28', '', 1, 0, 37.7817841, -122.3960419, 0, 0, '', '', ''),
(96, 'Destino', '', 'Peruvian', '1815 Market St, San Francisco, CA, United States', '', '', 0, 'The Mission', 0, 2, '2015-04-16', '', 1, 0, 37.7712975, -122.4238205, 0, 0, '', '', ''),
(97, 'Cha Cha Cha', '', 'Tapas', 'Cha Cha Cha, Mission Street, San Francisco, CA, United States', '', '', 0, 'The Mission', 0, 2, '2015-04-17', '', 2, 0, 37.7598076, -122.4189301, 0, 0, '', '', ''),
(98, 'The Monk''s Kettle', '', 'Pub', 'The Monk''s Kettle, 16th Street, San Francisco, CA, United States', '', '', 0, 'The Mission', 0, 3, '2015-05-21', '', 0, 0, 37.7647285, -122.4229965, 0, 0, '', '', ''),
(99, 'Straw', '', 'American', '203 Octavia Blvd, San Francisco, CA, United States', '', '', 0, 'Hayes Valley', 0, 2, '2015-05-28', '', 0, 0, 37.7739143, -122.4240341, 0, 0, '', '', ''),
(100, 'Southern Pacific Brewing', '', 'Brewery', 'Southern Pacific Brewing, Treat Avenue, San Francisco, CA, United States', '', '', 0, 'The Mission', 0, 2, '2015-06-04', '', 0, 0, 37.7601013, -122.4142303, 0, 0, '', '', ''),
(101, 'Bistro Aix ', '', 'Other', 'Bistro Aix, Steiner Street, San Francisco, CA, United States', '', '', 0, 'The Marina', 0, 2, '2015-07-09', '', 0, 0, 37.8002319, -122.4376144, 0, 0, '', '', ''),
(102, 'Aquitaine', '', 'American', 'Aquitaine Wine Bar & Bistro, Sutter Street, San Francisco, CA, United States', '', '', 0, 'Tenderloin', 0, 2, '2015-08-19', '', 0, 0, 37.7897491, -122.4033051, 0, 0, '', '', ''),
(104, 'Nob Hill Grille', '', 'American', 'Nob Hill Grille, Hyde Street, San Francisco, CA, United States', '', '', 0, 'Nob Hill', 0, 2, '2015-09-01', '', 0, 0, 37.7899170, -122.4174881, 0, 1, '', '', ''),
(113, 'Sauce: Belden Place', '', 'American', 'Sauce: Belden Place, Belden Place, San Francisco, CA, United States', '', '', 0, 'The Financial District', 4, 2, '2015-09-08', 'I am amazed by the outdoor seating of Sauce. It reminds me so much of Europe! I came here with a coworker for my first day and it was a true surprise. I got their Lobster Roll lunch and it is amazing. The lobster roll is lightly butter and toasted with tons of fresh lobster meat. They also give you a side of fried chip with some interesting mayo dip and small salad. Overall, it is an amazing meal and for the price tag of $27, I think it is worth it! \r\n\r\nI heard they got great drinks too. Look forward to coming back and trying more food here. ', 0, 0, 37.7915382, -122.4037628, 0, 0, 'ChIJJ6cxKYqAhYARBtCLiohivmc', '', ''),
(114, 'Southern Pacific Brewing', '', 'Brewery', 'Southern Pacific Brewing, Treat Avenue, San Francisco, CA, United States', '', '', 0, 'The Mission', 4, 0, '2016-04-21', 'Beer and Booze- Solid 4 stars\r\nFood- Solid 2\r\n\r\nThis is located in an old warehouse and offers a really eclectic environment to sip cocktails and beers. They have tons of seating and even at its busiest times you can usually find a place to sit down. Seating outside is at picnic benches and is a great environment for large groups or making new friends. \r\n\r\nPro tip for food: ordering is done at the left side of the bar if you are feeling hungry. Food is OK, typical bar fare. There are so many good places in the area that I would just stick to drinking at this establishment.\r\n\r\nThey have a great selection of local brews and micros as well.', 0, 0, 37.7601013, -122.4142303, 0, 0, 'ChIJn5G9Fzp-j4ARRs66QTw4XAY', '', ''),
(117, 'Fondue Cowboy', '', 'American', 'Fondue Cowboy, Folsom Street, San Francisco, CA, United States', '', '', 0, 'SoMa', 4, 2, '2016-06-29', 'Great cheese and chocolate fondue. One of each will fill two people. I was disappointed to find out they no longer do happy hour discounts on the fondue, but they still discount the wine and the fondue really is worth the cost. ', 0, 0, 37.7776413, -122.4070663, 0, 0, 'ChIJL1VEiIGAhYAR8t45zEfHQvc', '', ''),
(116, 'Bio Cafe', '', 'Other', 'Bio Cafe, O''Farrell Street, San Francisco, CA, United States', '', '', 0, 'The Financial District', 5, 3, '2016-06-28', 'A complete jewel of a place! Tiny shop with big flavors. Everything is homemade - they make their own yogurt and kombucha! The prosciutto and goat cheese roll was served warm. It was perfection in every bite - simple and complementary flavors. ', 0, 0, 37.7865906, -122.4058304, 0, 0, 'ChIJQR4lvIiAhYARCIBPkk4Vy7k', '', ''),
(119, 'Bread and Cocoa', '', 'Other', 'Bread and Cocoa, Sutter Street, San Francisco, CA, United States', '', '', 0, 'Financial District', 4, 1, '2016-09-15', 'I was there yesterday and it was good. the oatmeal was enough (the duble of Starbucks and it comes with milk of choice on the side). I payed 9 for the oatmeal, banana and coffee. The only reason why i dont give them 5 stars its because they dont have restroom when the other restaurant is close', 0, 0, 37.7897263, -122.4036636, 0, 0, 'ChIJedq5o4mAhYARx3coEYEsvh4', '', ''),
(120, 'The Store On the Corner', '', 'Other', 'The Store On the Corner, New Montgomery Street, San Francisco, CA, United States', '', '', 0, 'South of Market', 0, 0, '2016-12-19', 'I would like to recommend this restaurant. Pure Korean food. Cheap and delicious!', 0, 0, 37.7871742, -122.3999557, 0, 0, 'ChIJM9ifGX2AhYARA59X3dP58Q4', '', ''),
(121, 'The Rotunda', '', 'American', 'The Rotunda, Stockton Street, San Francisco, CA, United States', '', '', 0, 'Stockton Street', 4, 2, '2017-01-04', 'I have been here several times. The food is typically excellent and service standard. This time I had the rib eye, which honestly was terrible. The rib eye I have gotten at Delancey St. for $13 is much better. Stick with the lobster club. However,  this place has been good to me over the years and the atmosphere is wonderful. ', 0, 0, 37.7873840, -122.4059372, 0, 0, 'ChIJ2QAWz4iAhYARhwcyOa3aaoQ', '', ''),
(122, 'Rosamunde Sausage Grill', '', 'Other', 'Rosamunde Sausage Grill, Mission Street, San Francisco, CA, United States', '', '', 0, 'Mission District', 4, 1, '2017-01-10', 'Some of the best house-made sausages you can get in San Francisco. I especially love their seasonal sausages with exotic fillings such as wild boar, duck or buffalo. Pretty good selection of craft beers and with decent prices. The place is small and can fill up quickly, but usually not a problem if you come earlier. They also have heated outdoor seating.', 0, 0, 37.7516594, -122.4185638, 0, 0, 'ChIJTdUqwKaAhYARyGg63wTM2qg', '', ''),
(123, 'Foreign Cinema', '', 'American', 'Foreign Cinema, Mission Street, San Francisco, CA, United States', '', '', 0, 'Mission District', 4, 3, '2017-03-30', NULL, 0, 0, 37.7564583, -122.4192886, 0, 0, 'ChIJPwvLyD5-j4AR2fM8C0bbVC8', '', ''),
(124, 'Park Tavern', '', 'American', 'Park Tavern, Stockton Street, San Francisco, CA, United States', '', '', 0, 'North Beach', 5, 0, '2017-07-01', NULL, 0, 0, 37.8010902, -122.4091034, 0, 0, 'ChIJNRipBPGAhYAR1qLFGG_Tby4', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Place`
--
ALTER TABLE `Place`
  ADD PRIMARY KEY (`ID`), ADD KEY `phpro_user_id` (`phpro_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Place`
--
ALTER TABLE `Place`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=125;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
