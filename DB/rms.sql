
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `AdminChngDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `AdminChngDate`) VALUES
(1, 'admin', '1234', '2022-10-23 15:16:00');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

-- CREATE TABLE `result` (
--   `id` int(255) NOT NULL,
--   `name` text NOT NULL,
--   `roll` varchar(8) NOT NULL,
--   `fname` text NOT NULL,
--   `dob` date NOT NULL,
--   `contact` int(10) NOT NULL,
--   `imgpath` text NOT NULL,
--   `maths` int(255) NOT NULL,
--   `english` int(255) NOT NULL,
--   `phy` int(255) NOT NULL,
--   `dsa` int(255) NOT NULL,
--   `be` int(255) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `result` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `roll` varchar(8) NOT NULL,
  `dob` date NOT NULL,
  `contact` int(10) NOT NULL,
  `os` int(255) NOT NULL,
  `oops` int(255) NOT NULL,
  `se` int(255) NOT NULL,
  `ai` int(255) NOT NULL,
  `cd` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `name`, `roll`, `dob`, `contact`, `os`, `oops`, `se`, `ai`, `cd`) VALUES
(48, 'Aratrik Basak', '22cse38', '2002-07-11', 2147483647, 100, 100, 100, 100, 100),
(49, 'Avik Dey', '22ece69',  '2002-12-09', 2147483647, 100, 100, 100, 100, 100),
(50, 'Doari', '22cse49', '2001-12-31', 2147483647, 100, 100, 100, 100, 100),
(51, 'Patra', '22cse31',  '2001-08-14', 2147483647, 100, 100, 100, 100, 100),
(52, 'Rahul', '22bsc420', '2002-08-28', 747855263, 100, 100, 100, 100, 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
