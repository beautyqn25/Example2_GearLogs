-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2021 at 08:24 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wp_equipment`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_equipment`
--

CREATE TABLE `tbl_equipment` (
  `item` varchar(50) NOT NULL,
  `itemtype` varchar(6) NOT NULL,
  `itemcondition` varchar(7) NOT NULL,
  `quantity` int(11) NOT NULL,
  `memo` varchar(500) NOT NULL,
  `itemid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_equipment`
--

INSERT INTO `tbl_equipment` (`item`, `itemtype`, `itemcondition`, `quantity`, `memo`, `itemid`) VALUES
('Beige Settee', 'Props', 'Fair', 1, 'Outdoor shoots ', 5),
('Canon 24-70mm 2.8', 'Lens', 'Fair', 1, 'Zoom lens', 7),
('Canon 5D MarkII', 'Camera', 'Replace', 1, 'Needs repair ', 8),
('Canon 100mm 2.8', 'Lens', 'Perfect', 1, 'Favorite lens', 10),
('Canon 50mm 1.4', 'Lens', 'Good', 1, 'ok ', 13),
('Canon 85mm 1.8', 'Lens', 'Replace', 1, 'Cracked lens', 66),
('Canon 6D', 'Camera', 'Fair', 1, 'Older but still clickin&#39;.', 67),
('Canon 100mm 2.8', 'Lens', 'Good', 1, 'Macro lens', 68),
('Canon 85mm 1.2', 'Lens', 'Replace', 1, 'Focusing issues', 104),
('Canon 85mm 1.2', 'Lens', 'Repair', 1, 'Favorite lens', 106),
('Canon 50mm 1.2', 'Lens', 'Perfect', 1, 'used very little', 108),
('Moody Background', 'Backgr', 'Good', 1, 'dark mural grays/browns', 109),
('Canon 85mm 1.2', 'Lens', 'Perfect', 1, 'Favorite lens', 112),
('Asus Laptop', 'Office', 'Perfect', 1, 'For business end', 113),
('Adobe Photoshop', 'Office', 'Perfect', 1, 'Editing Software', 114),
('Canon 85mm 1.2', 'Lens', 'Fair', 1, 'Favorite lens', 115),
('Canon 28mm 1.8', 'Lens', 'Good', 1, 'Wide angle lens', 116),
('Christmas Scene', 'Backgr', 'Fair', 1, 'Tree and gifts in scene', 117),
('Canon 100mm 2.8', 'Lens', 'Perfect', 0, 'wish list', 118),
('Canon 85mm 1.2', 'Lens', 'Perfect', 1, 'Favorite lens', 119),
('Canon 85mm 1.2', 'Lens', 'Perfect', 1, 'Favorite lens', 120),
('Canon 85mm 1.2', 'Lens', 'Perfect', 1, 'Favorite lens', 121),
('Canon 85mm 1.2', 'Lens', 'Perfect', 1, 'Favorite lens', 122);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_equipment`
--
ALTER TABLE `tbl_equipment`
  ADD PRIMARY KEY (`itemid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_equipment`
--
ALTER TABLE `tbl_equipment`
  MODIFY `itemid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
