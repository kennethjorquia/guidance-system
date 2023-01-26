-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2023 at 05:18 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upload`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_upload`
--

CREATE TABLE `tb_upload` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `category` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_upload`
--

INSERT INTO `tb_upload` (`id`, `name`, `description`, `category`, `date`, `image`) VALUES
(0, 'Tipus', 'payatot asdjhfgajhsgdjfhsadfasjhdfgjhasgdjhfgajhsdg jg\r\ndfkjhakdjhfjkahsdjf\r\nsdnfk\r\n;dsgkl\r\nsdjg\r\ns;ldgj', 'Guidance Post', '2023-01-22', '63cd1d70ec08c.jpg'),
(0, 'Marilyn', 'maganda yatn smnabfjhasgdkjhflkjashdflkjhalk jhckjascjukfhkjhfjkhklfchslkdhfkcshjlkfjsldjfkjgjhfgvajfvkjadskghk', 'Job Post', '2023-01-22', '63cd2e21d3963.jpg'),
(0, 'etlog', 'djgfdghdjhgdhgdjgh g dhgfdcgdehthgttctctect', 'Job Post', '2023-01-22', '63cd4a025ad42.jpg'),
(0, 'wowo', 'kajdgfhoaudghodigh', 'Job Post', '2023-01-25', '63d13334432a1.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
