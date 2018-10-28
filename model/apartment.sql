SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apartment`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `addAccount` (IN `user` VARCHAR(50), IN `pass` VARCHAR(50), IN `utype` INT(1))  MODIFIES SQL DATA
INSERT INTO sys_account(username,password,userType) VALUES (user, SHA1(pass), utype)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `addRentable` (IN `_rate` INT(7) UNSIGNED, IN `_type` VARCHAR(30), IN `_desc` VARCHAR(500), IN `_path` VARCHAR(500))  MODIFIES SQL DATA
INSERT INTO rentable(montlyRate, type, detailDesc, path) VALUES (_rate, _type, _desc, _path)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updateAccount` (IN `_id` INT(2), IN `user` VARCHAR(50), IN `pass` VARCHAR(50), IN `utype` INT(1), IN `_status` INT(1))  MODIFIES SQL DATA
UPDATE sys_account SET username = user, password = SHA1(pass), status = _status, userType = utype WHERE id = _id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updateRentable` (IN `_id` INT(3), IN `_monthlyRate` INT(7), IN `_type` VARCHAR(25), IN `_desc` VARCHAR(500))  MODIFIES SQL DATA
UPDATE rentable SET montlyRate = _monthlyRate, type = _type, detailDesc = _desc WHERE id = _id$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `rentable`
--

CREATE TABLE `rentable` (
  `id` int(3) NOT NULL,
  `montlyRate` int(7) NOT NULL,
  `type` varchar(25) NOT NULL,
  `detailDesc` varchar(500) NOT NULL,
  `path` varchar(500) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rentable`
--

-- --------------------------------------------------------

--
-- Table structure for table `sys_account`
--

CREATE TABLE `sys_account` (
  `id` int(2) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userType` int(1) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys_account`
--

INSERT INTO `sys_account` (`id`, `username`, `password`, `userType`, `status`) VALUES
(1, 'admin@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 1),
(2, 'sample', '8151325dcdbae9e0ff95f9f9658432dbedfdb209', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

CREATE TABLE `tenant` (
  `id` int(3) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `unitID` int(3) NOT NULL,
  `account` int(2) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '1 - pending, 2 - tenant, 3 - past'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenant`
--

INSERT INTO `tenant` (`id`, `fullname`, `birthdate`, `email`, `contact`, `occupation`, `unitID`, `account`, `status`) VALUES
(1, 'christian paul_rojero_tupas', '1998-12-08', 'christianpaultupas@gmail.com', '09094527651', 'student', 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tripping_schedule`
--

CREATE TABLE `tripping_schedule` (
  `id` int(5) NOT NULL,
  `date` datetime NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `unit_keycode`
--

CREATE TABLE `unit_keycode` (
  `id` int(3) NOT NULL,
  `unitID` int(3) NOT NULL,
  `keycode` varchar(15) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit_keycode`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rentable`
--
ALTER TABLE `rentable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_account`
--
ALTER TABLE `sys_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenant`
--
ALTER TABLE `tenant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account` (`account`),
  ADD KEY `unitID` (`unitID`);

--
-- Indexes for table `tripping_schedule`
--
ALTER TABLE `tripping_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit_keycode`
--
ALTER TABLE `unit_keycode`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unitID` (`unitID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rentable`
--
ALTER TABLE `rentable`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sys_account`
--
ALTER TABLE `sys_account`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tenant`
--
ALTER TABLE `tenant`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tripping_schedule`
--
ALTER TABLE `tripping_schedule`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unit_keycode`
--
ALTER TABLE `unit_keycode`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tenant`
--
ALTER TABLE `tenant`
  ADD CONSTRAINT `tenant_ibfk_1` FOREIGN KEY (`account`) REFERENCES `sys_account` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tenant_ibfk_2` FOREIGN KEY (`unitID`) REFERENCES `rentable` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `unit_keycode`
--
ALTER TABLE `unit_keycode`
  ADD CONSTRAINT `unit_keycode_ibfk_1` FOREIGN KEY (`unitID`) REFERENCES `rentable` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
