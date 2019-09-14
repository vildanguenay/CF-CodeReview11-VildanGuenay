-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2019 at 04:47 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `first_name`, `last_name`) VALUES
(1, 'George', 'Test'),
(2, 'Aldous', 'Huxley'),
(3, 'Chris', 'Stringer'),
(4, 'Catherine', 'McKenzie'),
(5, 'Mark', 'Edwards'),
(6, 'Mark', 'Manson'),
(7, 'J.R.R.', 'Tolkien'),
(8, 'Richard', 'Greene'),
(9, 'Bernard', 'Lietaer'),
(10, 'Jia', 'Jiang'),
(28, 'Aldous', 'Huxley'),
(29, 'Aldous', 'Huxley'),
(30, 'Aldous', 'Huxley'),
(31, 'Aldous', 'Huxley'),
(32, 'Aldous', 'Huxley'),
(33, 'Aldous', 'Huxley');

-- --------------------------------------------------------

--
-- Table structure for table `medium`
--

CREATE TABLE `medium` (
  `medium_id` int(11) NOT NULL,
  `ISBN` int(11) DEFAULT NULL,
  `title` varchar(150) DEFAULT 'NULL',
  `fk_author_id` int(11) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `fk_publisher_id` int(11) DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medium`
--

INSERT INTO `medium` (`medium_id`, `ISBN`, `title`, `fk_author_id`, `type`, `description`, `publish_date`, `fk_publisher_id`, `image`) VALUES
(1, 1328869334, '1984', 1, 'book', 'With extraordinary relevance and renewed popularity, George Orwellï¿½s 1984 takes on new life in this hardcover edition.', '2017-04-04', 1, 'https://images-na.ssl-images-amazon.com/images/I/410ZirPKXKL._SX331_BO1,204,203,200_.jpg'),
(2, 2147483647, 'Brave New World and Brave New World Revisited', 2, 'book', 'The astonishing novel Brave New World, originally published in 1932, presents Aldous Huxley\'s vision of the future - of a world utterly transformed.', '2005-06-05', 2, 'https://images-na.ssl-images-amazon.com/images/I/4105jZhS76L._SX330_BO1,204,203,200_.jpg'),
(3, 141037202, 'The Origin of Our Species', 3, 'DVD', 'An unique perspective on the status of current evolutionary thinking.', '2012-05-31', 3, 'https://images-na.ssl-images-amazon.com/images/I/51dNdysej1L._SX324_BO1,204,203,200_.jpg'),
(4, 1542040345, 'I\'ll Never Tell', 4, 'book', 'Deeply buried secrets make for a disturbing family reunion in bestselling author Catherine McKenzie’s tantalizing novel of psychological suspense.', '2019-06-01', 4, 'https://images-na.ssl-images-amazon.com/images/I/41N6Ggq3dBL.jpg'),
(5, 62884026, 'The Subtle Art of Not Giving a Fuck', 6, 'book', 'A Counterintuitive Approach to Living a Good Life is a deeply inspiring book about values and purpose cleverly disguised in crude four-letter vulgarity, negativity and apocalyptic doom.', '2010-07-03', 5, 'https://images-na.ssl-images-amazon.com/images/I/5169XTCidBL._SX329_BO1,204,203,200_.jpg'),
(6, 54792822, 'The Hobbit', 7, 'DVD', 'Bilbo Baggins is a hobbit who enjoys a comfortable, unambitious life, rarely traveling any farther than his pantry or cellar. But his contentment is disturbed when the wizard Gandalf and a company of dwarves arrive on his doorstep.', '2012-09-18', 6, 'https://images-na.ssl-images-amazon.com/images/I/51uLvJlKpNL._SX321_BO1,204,203,200_.jpg'),
(7, 812699610, 'Mr. Robot and Philosophy', 8, 'book', 'Mr. Robot has been hailed, not only as one of the most haunting and unnerving dramas ever to appear on television, but also as the first accurate popular presentation of how computer hacking and cyberterrorism actually work.', '2017-07-01', 7, 'https://images-na.ssl-images-amazon.com/images/I/41Qg6o3azML._SX332_BO1,204,203,200_.jpg'),
(8, 62984045, 'The Devil\'s Work', 5, 'book', 'A thrill-ride of a book, relishing the unexpected and unsettling the reader at every turn. It’s deliciously terrifying.', '2016-09-13', 10, 'https://images-na.ssl-images-amazon.com/images/I/51bAIuzKMdL.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `publisher_id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `size` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`publisher_id`, `name`, `city`, `size`) VALUES
(1, 'Houghton Mifflin Harcourt', 'Dublin', 'big'),
(2, 'Harper Perennial Modern Classics', 'New York', 'big'),
(3, ' Penguin Books Ltd', 'London', 'big'),
(4, 'Lake Union Publishing', 'Seattle', 'small'),
(5, 'HarperCollins', 'Hamburg', 'medium'),
(6, 'Houghton Mifflin Harcourt', 'Dublin', 'big'),
(7, 'Open Court', 'Chicago', 'medium'),
(8, 'Arrow Books Ltd', 'London', 'big'),
(9, 'Harmony', 'New York', 'big'),
(10, 'Thomas & Mercer', 'Münster', 'medium'),
(18, 'Harper Perennial Modern Classics', 'New York', 'big'),
(19, 'Harper Perennial Modern Classics', 'New York', 'big'),
(20, 'Harper Perennial Modern Classics', 'New York', 'big'),
(21, 'Harper Perennial Modern Classics', 'New York', 'big'),
(22, 'Harper Perennial Modern Classics', 'New York', 'big'),
(23, 'Harper Perennial Modern Classics', 'New York', 'big');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `medium`
--
ALTER TABLE `medium`
  ADD PRIMARY KEY (`medium_id`),
  ADD KEY `fk_author_id` (`fk_author_id`),
  ADD KEY `fk_publisher_id` (`fk_publisher_id`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `medium`
--
ALTER TABLE `medium`
  MODIFY `medium_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `medium`
--
ALTER TABLE `medium`
  ADD CONSTRAINT `medium_ibfk_1` FOREIGN KEY (`fk_author_id`) REFERENCES `author` (`author_id`),
  ADD CONSTRAINT `medium_ibfk_2` FOREIGN KEY (`fk_publisher_id`) REFERENCES `publisher` (`publisher_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
