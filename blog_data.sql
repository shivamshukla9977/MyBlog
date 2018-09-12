-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 17, 2018 at 02:41 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_data`
--

DROP TABLE IF EXISTS `blog_data`;
CREATE TABLE IF NOT EXISTS `blog_data` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `heading` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `u_date` date NOT NULL,
  `u_time` time NOT NULL,
  `image` varchar(100) NOT NULL,
  `blog_text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_data`
--

INSERT INTO `blog_data` (`id`, `heading`, `title`, `u_date`, `u_time`, `image`, `blog_text`) VALUES
(1, 'Photo Graphy Lover', 'My Camera', '2018-08-04', '09:26:39', 'IMG_20171023_133046_742-1.jpg', ' â€œTo me, photography is an art of observation. Itâ€™s about finding something interesting in an ordinary placeâ€¦ Iâ€™ve found it has little to do with the things you see and everything to do with the way you see them.â€\r\nâ€” Elliott Erwitt\r\n \r\n\r\nâ€œThe picture that you took with your camera is the imagination you want to create with reality.â€\r\nâ€” Scott Lorenzo\r\n \r\n\r\nâ€œIf the photographer is interested in the people in front of his lens, and if he is compassionate, itâ€™s already a lot. The instrument is not the camera but the photographer.â€\r\nâ€” Eve Arnold\r\n  '),
(2, 'Morning Bliss', 'Sun Rise', '2018-08-04', '09:26:39', 'LRM_EXPORT_20171109_092735.jpg', ' â€œHow sweet the morning air is! See how that one little cloud floats like a pink feather from some gigantic flamingo. Now the red rim of the sun pushes itself over the London cloud-bank. It shines on a good many folk, but on none, I dare bet, who are on a stranger errand than you and I. How small we feel with our petty ambitions and strivings in the presence of the great elemental forces of Nature!â€ \r\nâ€œAnd yet day and night meet fleetingly at twilight and dawn,\" he said, lowering his voice again and narrowing his eyes and moving his head a quarter of an inch closer to hers. \"And their merging sometimes affords the beholder the most enchanted moments of all the twenty four hours. A sunrise or sunset can be ablaze with brilliance and arouse all the passion, all the yearning, in the soul of the beholder.â€ \r\n      '),
(3, 'Nature Lover', 'Beautiful fog', '2018-08-04', '09:26:39', 'LRM_EXPORT_20171109_080202.jpg', ' Nature is just enough; but men and women must comprehend and accept her suggestions. There is a way that nature speaks, that land speaks. Most of the time we are simply not patient enough, quiet enough, to pay attention to the story. he charming landscape which I saw this morning is indubitably made up of some 20 or 30 farms. Miller owns this field, Locke that, and Manning the woodland beyond. But none of them owns the landscape. There is a property in the horizon which no man has but he whose eye can integrate all the parts, that is, the poet. \r\n      '),
(4, 'Ancient sclupture', 'Past Fort', '2018-04-02', '09:26:39', 'LRM_EXPORT_20171109_092904.jpg', 'Travelers can connect with other bloggers, publications, and companies in the industry by tagging their photos with popular hashtags, including Travel .\r\nYou donâ€™t need to be on safari to capture the local wildlife (though a trip through Africa should be on any animal-loverâ€™s bucket list).\r\n      '),
(5, 'Infinity Wars', 'What A Film...', '2018-08-04', '09:26:39', '2.jpg', 'All my life I dreamed of a day, a moment, when you got what you deserved. And I was always so disappointed. But now, you kill and torture and you call it mercy. The universe has judged you. You asked it for a prize and it told you no. You failed. And do you wanna know why? Because you love nothing. No one. \r\n      '),
(6, 'Gun Bullet!!!', 'Bullet Raja', '2018-08-04', '09:26:39', 'IMG_20171101_172813_124.jpg', ' â€œMemories are bullets. Some whiz by and only spook you. Others tear you open and leave you in pieces.â€ â€œI wanted to paint a picture some day that people would stand before and forget that it was made of paint. I wanted it to creep into them like a bar of music and mushroom there like a soft bullet.â€ â€œTry again; you have millions of alternatives. Fill yourself with the bullets of hope and you will kill failure with one shot.â€\r\n      '),
(7, 'God Of Thunder', 'Thor', '2018-08-04', '09:26:39', 'Thor_IW_Hot_Toys_17.jpg', '\"Thor really likes hair, I guess\r\nso he gets SUPER ANGRY\r\nand he chases down Loki and is like \"Hey\r\nhow about I cut of all of your FACE?!\"\r\nand Loki is like \"But I need my face\r\nfor making infuriating smirks with!\" '),
(8, 'Infinity Wars', 'Avengers- A Good Example Of Team Work', '2018-08-05', '09:26:39', 'avengers-infinity-war-1920x1080-superheroes-marvel-comics-2018-12972.jpg', ' Infinity War saw the passing of some of Marvelâ€™s most iconic heroes, including Spider-Man, Black Panther, Star Lord and Scarlet Witch. Death is a big part of Infinity Warâ€˜s shock factor, but with films such as Spider-Man: Homecoming 2 and the untitled Black Panther sequel already confirmed, itâ€™s all but certain that weâ€™ll see at least some of our heroes resurrected from their dusty fate. This oneâ€™s a bit different from the other deaths in the film. Gamora was physically killed by Thanos when he was searching for the Soul Stone. But we later saw a young Gamora in the Soulworld â€“ a different dimension â€“ where Thanos went after he clicked his fingers. Fans are suggesting that her soul is still alive and she may be resurrected in the second film, ready for Guardians of the Galaxy 3.      '),
(9, 'Light House', 'Beautiful Location', '2018-07-08', '09:26:39', 'Lighthouse.jpg', ' \r\n      '),
(10, 'Team Infinity Racers', 'Formula Bharat', '2018-08-10', '09:26:39', 'image (4).JPG', 'Infinity racers is an officially recognised  automotive club  which was founded in 2016. And has started designing and fabricating there own vehicles. We are part of our SAE collegiate club University institute of technology [R.G.P.V] formed in 2016. Our Club is recognized by SAE India and SAE International. There are several advantages from this club to the students. This Society helps the students to develop practical skills and apply the knowledge learnt in the classroom.\r\n      '),
(11, 'Team Infinity Racers', 'Formula Bharat (blog 2)', '2018-08-10', '09:26:39', 'image (2).JPG', 'We Participated in First ever Electric Solar Vehicle Competition [ESVC] organised by Imperial society of innovative engineers [ISIE] held in Dehradun\r\n\r\n We participated in Indian Karting Challenge[IKR] organised by Imperial society of innovative engineers [ISIE] held in Coimbatore and were placed overall 11th position of 57 teams.\r\n\r\nWe also registered to participate in SAE BAJA in 2016 but due final semester exams, we failed to present the virtual design of All terrain vehicle[ATV] to the judges and hence were not allowed to participate further.\r\n\r\nWe participate in SAE Supra held in Buddha international circuit, Greater Noida and were placed 100th out 126 teams . \r\n      '),
(12, 'Sword', 'Magical Sword', '2018-08-10', '09:48:31', 'wallpaper2you_70079.jpg', 'A sword is a bladed weapon intended for slashing or thrusting that is longer than a knife or dagger. The precise definition of the term varies with the historical epoch or the geographic region under consideration. A sword consists of a long blade attached to a hilt. The blade can be straight or curved. Thrusting swords have a pointed tip on the blade, and tend to be straighter; slashing swords have a sharpened cutting edge on one or both sides of the blade, and are more likely to be curved. Many swords are designed for both thrusting and slashing. \r\n      ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
