SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE shop;

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

INSERT INTO `product` (`id`, `image`, `name`, `price`) VALUES
(1, 'img/products/computador.jpg', 'Computador', '2000.00'),
(2, 'img/products/notebook.jpg','Notebook', '1800.00'),
(3, 'img/products/roteador.jpg','Roteador', '180.00'),
(4, 'img/products/modem.jpg','Modem', '300.00'),
(5, 'img/products/pendrive.jpg','Pendrive', '80.00');
