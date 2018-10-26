SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `addAccount` (IN `user` VARCHAR(50), IN `pass` VARCHAR(50), IN `utype` INT(1))  MODIFIES SQL DATA
INSERT INTO sys_account(username,password,userType) VALUES (user, SHA1(pass), utype)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `addRentable` (IN `_rate` INT(7) UNSIGNED, IN `_type` VARCHAR(30), IN `_desc` VARCHAR(500), IN `_path` VARCHAR(500))  MODIFIES SQL DATA
INSERT INTO rentable(monthlyRate, type, detailDesc, path) VALUES (_rate, _type, _desc, _path)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updateAccount` (IN `_id` INT(2), IN `user` VARCHAR(50), IN `pass` VARCHAR(50), IN `utype` INT(1), IN `_status` INT(1))  MODIFIES SQL DATA
UPDATE sys_account SET username = user, password = SHA1(pass), status = _status, userType = utype WHERE id = _id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updateRentable` (IN `_id` INT(3), IN `_monthlyRate` INT(7), IN `_type` VARCHAR(25), IN `_desc` VARCHAR(500))  MODIFIES SQL DATA
UPDATE rentable SET montlyRate = _monthlyRate, type = _type, detailDesc = _desc WHERE id = _id$$

DELIMITER ;

CREATE TABLE IF NOT EXISTS `rentable` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `montlyRate` int(7) NOT NULL,
  `type` varchar(25) NOT NULL,
  `detailDesc` varchar(500) NOT NULL,
  `path` varchar(500) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `sys_account` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userType` int(1) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `sys_account` (`id`, `username`, `password`, `userType`, `status`) VALUES
(1, 'admin@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 1),
(2, 'sample', '8151325dcdbae9e0ff95f9f9658432dbedfdb209', 2, 1);

CREATE TABLE IF NOT EXISTS `tenant` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(150) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `account` int(2) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `account` (`account`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `tenant` (`id`, `fullname`, `birthdate`, `email`, `contact`, `occupation`, `account`, `status`) VALUES
(1, 'christian paul_rojero_tupas', '1998-12-08', 'christianpaultupas@gmail.com', '09094527651', 'student', 2, 1);


ALTER TABLE `tenant`
  ADD CONSTRAINT `tenant_ibfk_1` FOREIGN KEY (`account`) REFERENCES `sys_account` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
