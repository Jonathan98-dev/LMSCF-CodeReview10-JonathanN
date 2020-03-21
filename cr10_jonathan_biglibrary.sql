-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2020 at 03:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr10_jonathan_biglibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `Title` varchar(300) NOT NULL,
  `imagelink` varchar(500) NOT NULL,
  `Author` varchar(300) NOT NULL,
  `description` varchar(1500) NOT NULL,
  `publishdate` date NOT NULL DEFAULT current_timestamp(),
  `publisher` varchar(300) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `Title`, `imagelink`, `Author`, `description`, `publishdate`, `publisher`, `type`) VALUES
(1, 'Changed Title', 'https://images-na.ssl-images-amazon.com/images/I/41i2Sdwf7mL._SX325_BO1,204,203,200_.jpg', 'John Ronald Reuel Tolkien', 'Sauron, the Dark Lord, has gathered to him the Rings of Power - the means by which he will be able to rule the world. All he lacks in his plan for dominion is the Ruling Ring, which has fallen into the hands of the hobbit Bilbo Baggins.', '1954-07-29', 'Harper Collins', 'Book'),
(2, 'The Lord of the Rings', 'https://images-na.ssl-images-amazon.com/images/I/41i2Sdwf7mL._SX325_BO1,204,203,200_.jpg', 'Changed Author Name', 'Sauron, the Dark Lord, has gathered to him the Rings of Power - the means by which he will be able to rule the world. All he lacks in his plan for dominion is the Ruling Ring, which has fallen into the hands of the hobbit Bilbo Baggins.', '1954-07-29', 'Harper Collins', 'Book'),
(4, 'Deleted Id 3', 'https://images-na.ssl-images-amazon.com/images/I/41i2Sdwf7mL._SX325_BO1,204,203,200_.jpg', 'Jonathan', 'Changed Description', '1954-07-29', 'Publisher', 'None'),
(5, 'The Lord of the Rings', 'https://images-na.ssl-images-amazon.com/images/I/41i2Sdwf7mL._SX325_BO1,204,203,200_.jpg', 'John Ronald Reuel Tolkien', 'Sauron, the Dark Lord, has gathered to him the Rings of Power - the means by which he will be able to rule the world. All he lacks in his plan for dominion is the Ruling Ring, which has fallen into the hands of the hobbit Bilbo Baggins.', '1954-07-29', 'Harper Collins', 'Book'),
(6, 'The Lord of the Rings', 'https://images-na.ssl-images-amazon.com/images/I/41i2Sdwf7mL._SX325_BO1,204,203,200_.jpg', 'John Ronald Reuel Tolkien', 'Sauron, the Dark Lord, has gathered to him the Rings of Power - the means by which he will be able to rule the world. All he lacks in his plan for dominion is the Ruling Ring, which has fallen into the hands of the hobbit Bilbo Baggins.', '1954-07-29', 'Harper Collins', 'Book'),
(7, 'The Lord of the Rings', 'https://images-na.ssl-images-amazon.com/images/I/41i2Sdwf7mL._SX325_BO1,204,203,200_.jpg', 'John Ronald Reuel Tolkien', 'Sauron, the Dark Lord, has gathered to him the Rings of Power - the means by which he will be able to rule the world. All he lacks in his plan for dominion is the Ruling Ring, which has fallen into the hands of the hobbit Bilbo Baggins.', '1954-07-29', 'Harper Collins', 'Book'),
(8, 'The Lord of the Rings', 'https://images-na.ssl-images-amazon.com/images/I/41i2Sdwf7mL._SX325_BO1,204,203,200_.jpg', 'John Ronald Reuel Tolkien', 'Sauron, the Dark Lord, has gathered to him the Rings of Power - the means by which he will be able to rule the world. All he lacks in his plan for dominion is the Ruling Ring, which has fallen into the hands of the hobbit Bilbo Baggins.', '1954-07-29', 'Harper Collins', 'Book'),
(9, 'The Lord of the Rings', 'https://images-na.ssl-images-amazon.com/images/I/41i2Sdwf7mL._SX325_BO1,204,203,200_.jpg', 'John Ronald Reuel Tolkien', 'Sauron, the Dark Lord, has gathered to him the Rings of Power - the means by which he will be able to rule the world. All he lacks in his plan for dominion is the Ruling Ring, which has fallen into the hands of the hobbit Bilbo Baggins.', '1954-07-29', 'Harper Collins', 'Book'),
(10, 'The Lord of the Rings', 'https://images-na.ssl-images-amazon.com/images/I/41i2Sdwf7mL._SX325_BO1,204,203,200_.jpg', 'John Ronald Reuel Tolkien', 'Sauron, the Dark Lord, has gathered to him the Rings of Power - the means by which he will be able to rule the world. All he lacks in his plan for dominion is the Ruling Ring, which has fallen into the hands of the hobbit Bilbo Baggins.', '1954-07-29', 'Harper Collins', 'Book'),
(11, 'The Lord of the Rings', 'https://images-na.ssl-images-amazon.com/images/I/41i2Sdwf7mL._SX325_BO1,204,203,200_.jpg', 'John Ronald Reuel Tolkien', 'Sauron, the Dark Lord, has gathered to him the Rings of Power - the means by which he will be able to rule the world. All he lacks in his plan for dominion is the Ruling Ring, which has fallen into the hands of the hobbit Bilbo Baggins.', '1954-07-29', 'Harper Collins', 'Book'),
(12, 'The Lord of the Rings', 'https://images-na.ssl-images-amazon.com/images/I/41i2Sdwf7mL._SX325_BO1,204,203,200_.jpg', 'John Ronald Reuel Tolkien', 'Sauron, the Dark Lord, has gathered to him the Rings of Power - the means by which he will be able to rule the world. All he lacks in his plan for dominion is the Ruling Ring, which has fallen into the hands of the hobbit Bilbo Baggins.', '1954-07-29', 'Harper Collins', 'Book'),
(13, 'The Lord of the Rings', 'https://images-na.ssl-images-amazon.com/images/I/41i2Sdwf7mL._SX325_BO1,204,203,200_.jpg', 'John Ronald Reuel Tolkien', 'Sauron, the Dark Lord, has gathered to him the Rings of Power - the means by which he will be able to rule the world. All he lacks in his plan for dominion is the Ruling Ring, which has fallen into the hands of the hobbit Bilbo Baggins.', '1954-07-29', 'Harper Collins', 'Book'),
(14, 'The Lord of the Rings', 'https://images-na.ssl-images-amazon.com/images/I/41i2Sdwf7mL._SX325_BO1,204,203,200_.jpg', 'John Ronald Reuel Tolkien', 'Sauron, the Dark Lord, has gathered to him the Rings of Power - the means by which he will be able to rule the world. All he lacks in his plan for dominion is the Ruling Ring, which has fallen into the hands of the hobbit Bilbo Baggins.', '1954-07-29', 'Harper Collins', 'Book');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
