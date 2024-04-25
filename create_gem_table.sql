-- Dumping database structure for php_gem
DROP DATABASE IF EXISTS `onlineshopdemo`;
CREATE DATABASE IF NOT EXISTS `onlineshopdemo` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `onlineshopdemo`;

-- Dumping structure for table onlineshopdemo.gem
DROP TABLE IF EXISTS `gem`;
CREATE TABLE IF NOT EXISTS `gem` (
  `Gem_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `Remaining` int(11) UNSIGNED DEFAULT 0,
  KEY `Index 1` (`Gem_ID`)
);

-- Dumping structure for table onlineshopdemo.order
DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `Order_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Client_Name` varchar(255) NOT NULL,
  `Client_Email` varchar(255) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Order_Time` timestamp NOT NULL,
  `Gem_ID` int(11) DEFAULT NULL,
  KEY `Index 1` (`Order_ID`),
  PRIMARY KEY (`Order_ID`)
);

-- Dumping structure for table onlineshopdemo.staff
DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `Staff_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Name` text DEFAULT NULL,
  KEY `Index 1` (`Staff_ID`),
  PRIMARY KEY (`Staff_ID`)
);