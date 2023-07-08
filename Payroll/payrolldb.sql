-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2023 at 01:51 PM
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
-- Database: `payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `payrolldb`
--

CREATE TABLE `payrolldb` (
  `name` varchar(50) NOT NULL,
  `dailypay` int(11) NOT NULL,
  `hoursworked` int(11) NOT NULL,
  `daysworked` int(11) NOT NULL,
  `miscpay` int(11) NOT NULL,
  `grossincome` int(11) NOT NULL,
  `tax` int(11) NOT NULL,
  `hmo` int(11) NOT NULL,
  `sss` int(11) NOT NULL,
  `pagibig` int(11) NOT NULL,
  `benefits` int(11) NOT NULL,
  `totalded` int(11) NOT NULL,
  `Sweldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payrolldb`
--

INSERT INTO `payrolldb` (`name`, `dailypay`, `hoursworked`, `daysworked`, `miscpay`, `grossincome`, `tax`, `hmo`, `sss`, `pagibig`, `benefits`, `totalded`, `Sweldo`) VALUES
('Mark Sennizer', 2, 2, 2, 2, 0, 1, 1, 1, 2, 2, 0, 0),
('Gustavo Fring', 3, 2, 3, 2, 0, 5, 5, 5, 5, 5, 0, 0),
('Gustavo Fring', 3, 2, 3, 2, 0, 5, 5, 5, 5, 5, 0, 0),
('Robert Santos', 3, 2, 3, 2, 0, 5, 5, 5, 5, 5, 0, 0),
('Robert Santos', 3, 2, 3, 2, 0, 5, 5, 5, 5, 5, 0, 0),
('Robert Santos', 3, 2, 3, 2, 0, 5, 5, 5, 5, 5, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
