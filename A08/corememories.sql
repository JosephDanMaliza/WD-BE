-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2024 at 08:52 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(300) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, 'family.png', "I’ll never forget the moment when my dad came home from Vanuatu. We spent two unforgettable days at a resort, having fun with Mom\'s friends, my Grandma, and cousins from Dad\'s side. It was a special time filled with laughter, bonding, and making memories that I’ll always cherish.", NULL),
(2, 1, 'highschoolfriends.png', "I’ll always cherish the time when we didn’t have to worry about our future and could just be carefree, laughing all day long. One of my favorite memories was when we spent hours together on a bed, streaming horror movies. It was simple, fun, and filled with so much laughter and good times.", NULL),
(3, 1, 'bestfriends1.png', "My best friends, who mean the world to me, refused to be apart and ended up at PUP together. One of my favorite memories is planning our resort trip for two months, mostly me taking the lead in organizing everything.", NULL),
(4, 1, 'bestfriends2.png', "These are the friends I made in college, and after 3 years, I’m grateful to have met them. They’re some of my most cherished people, and this moment is my favorite, especially after weeks of not seeing each other due to the semestral break.", NULL),
(5, 2, 'toven.png', "This is Toven, the oldest dog in the house and my favorite. I remember begging my mom to let me have him after my Godfather offered him to me. Now, he\'s the oldest and most gentle companion, always cuddling with me in bed every day.", NULL),
(6, 2, 'chico.png', "This is Chico, He’s the second baby in the house with soft, smooth fur and a loving, obedient nature. Though he’s often sick and we worry about him, we love him deeply. He occasionally cuddles with me in bed, but prefers his own space and when I’m away he rolls around my bed contentedly.", NULL),
(7, 2, 'loki.png', "This is Loki, The youngest and most energetic dog, he\'s the mischievous one who doesn\'t realize his size. The biggest dog in the house, he often accidentally knocks everyone over. I love him because he matches my energy, and we spend hours playing together. I\'m so glad we got him.", NULL),
(8, 3, 'midtermzumba.png', "First year of college memories! This picture was taken just before our performance as Group 1. I had so much fun dancing with these people, laughing, bonding, and getting tired together during practice. It was exhausting, but it’s a memory I’ll always cherish.", NULL),
(9, 3, 'finalshiphop.png', "Before our final performance in P.E., it was a mix of fun and exhaustion (no kidding). It was really tiring, but totally worth it! Our whole section came together, showing support and working hard to create something amazing. In the end, it all paid off and was an unforgettable experience.", NULL),
(10, 3, '1styearSintafest.png', "My first college volleyball competition was a mix of excitement and frustration. Sitting on the bench was tough, especially since our team lacked synergy. But looking back, it was all part of the experience, and honestly, it was just for fun. I’ve learned a lot from it.", NULL),
(11, 4, 'genshin.png', "Genshin Impact was the first game I truly became addicted to. I remember staying up all night just to finish a mini-challenge, completely hooked by the game. After finishing my schoolwork in high school, I’d dive straight into playing, losing track of time in that immersive world.", NULL),
(12, 4, 'hsr.png', "\r\nThe thrill of leveling up my characters, upgrading relics, and tweaking strategies still sticks with me. Each milestone felt like a win, and those late-night sessions in Honkai remind me of the passion and dedication I put into the game.", NULL),
(13, 4, 'stardew.png', "\r\nI initially thought the game looked boring, but playing with friends in co-op changed my mind. It was so much fun, and soon I enjoyed playing solo too. The satisfaction of achieving things kept me coming back for more.", NULL);

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'Love Island', "A haven of love, where the bonds of family, friends, and self shine brighter than anything else.", "Love Island is the heart of my existence, where every cherished relationship breathes life into who I am. It’s where the echoes of family and friends\' laughter, the unconditional support of my parents, and the loyal embrace of friends who’ve never left my side define my world. This island isn’t just a place but a testament to the love that has shaped me, from the smallest gestures to the grandest moments. Here, love isn\'t just a feeling; it\'s the foundation that holds everything together, reminding me that no matter the distance or time, I am never alone.", NULL, 'love.png', 'inactive'),
(2, 'Animal Island', "A sacred sanctuary for all animals, an island where my love for animals prospers and comes to life", "This island shows my haven of connection with animals. A place with memories playing and having fun with the beauty of wildlife. This island mostly contains memories with my childhood dogs and the cats my family and I feed outside of our house. Every experience here is important to me, and it shows my love for animals. ", NULL, 'animal.png', 'inactive'),
(3, 'Dance & Sport Island', "A vibrant arena of rhythm and athleticism, where my passion for dancing and sports keeps me moving.", "Dance & Sport Island is where passion ignites and every movement tells a story, from the thrill of a perfect volleyball spike or a fierce badminton rally to the serene focus of swimming laps. The dance floor is the island\'s heartbeat, where music pulses through me and every step becomes a vibrant expression of who I am. Here, I find strength in teamwork, joy in motion, and a rhythm that fuels my soul.", NULL, 'dancesports.png', 'inactive'),
(4, 'Gaming Island', "An island of boundless adventure, where every quest pulls you into a thrilling journey and every victory stands as a testament to unyielding courage.", "Gaming Island is where reality fades and fantasy reigns, a world forged by adventure and the art of storytelling. Here, I face impossible odds, form unbreakable alliances, and shape my destiny in realms of magic and peril. Each quest pushes my limits, each battle strengthens my will, and every victory proves the power of perseverance. This island is not just an escape; it\'s where dreams are born, imagination soars, and I am reminded that within me lies the strength to conquer any challenge.", NULL, 'gaming.png', 'inactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
