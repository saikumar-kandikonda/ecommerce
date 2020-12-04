-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Dec 04, 2020 at 09:43 AM
-- Server version: 8.0.18
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `productid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2020_11_20_110008_create_users_table', 5),
(7, '2020_11_21_161414_create_products_table', 5),
(8, '2020_11_22_120537_create_cart_table', 5),
(5, '2020_11_25_090202_create_migrationerrors_table', 4),
(9, '2020_11_23_132900_create_orders_table', 5),
(10, '2020_11_26_124807_create_wishlist_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `productid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `paymentmethod` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `paymentstatus` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `productid`, `userid`, `status`, `paymentmethod`, `paymentstatus`, `address`, `created_at`, `updated_at`) VALUES
(1, 17, 1, 'pending', 'online', 'successful', 'hyd', NULL, NULL),
(2, 15, 1, 'pending', 'EMI', 'successful', 'khj', NULL, NULL),
(3, 13, 1, 'pending', 'EMI', 'successful', 'khj', NULL, NULL),
(4, 15, 2, 'pending', 'online', 'successful', 'dfd', NULL, NULL),
(5, 17, 2, 'pending', 'online', 'successful', 'dfd', NULL, NULL),
(6, 13, 2, 'pending', 'online', 'successful', 'dfd', NULL, NULL),
(7, 20, 1, 'pending', 'Delivery', 'successful', 'hyd', NULL, NULL),
(8, 17, 1, 'pending', 'online', 'successful', 'dff', NULL, NULL),
(9, 18, 1, 'pending', 'online', 'successful', 'dff', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `productname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gallery` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `Gender`, `productname`, `description`, `gallery`, `created_at`, `updated_at`) VALUES
(28, 'Roadster', '599', 'shirts', 'male', 'Men Grey & Black Regular Fit Printed Casual Shirt                   ', 'Maroon printed casual shirt, has a mandarin collar with a short button placket, long sleeves with roll-up tab features, a chest pocket, a curved hem                                                 ', '\\asset\\images\\shirts_men\\shirt1.jpg', NULL, NULL),
(27, 'WROGN', '1109', 'shirts', 'male', 'Maroon Printed Slim Fit Casual Shirt\n                                                    ', 'Grey and black printed casual shirt, has a mandarin collar collar, button placket, long sleeves, curved hem  ', '\\asset\\images\\shirts_men\\shirt2.jpg', NULL, NULL),
(26, 'WROGN', '1239', 'shirts', 'male', 'Men Navy Slim Fit Printed Casual Shirt\n                ', 'Navy blue printed casual shirt, has a spread collar, a full button placket, long sleeves, a patch pocket, a curved hem\n                ', '\\asset\\images\\shirts_men\\shirt3.jpg', NULL, NULL),
(25, 'WROGN', '1139', 'shirts', 'male', 'Men Navy Slim Fit Printed Casual Shirt\n                ', 'Navy blue printed casual shirt, has a spread collar, a full button placket, long sleeves, a patch pocket, a curved hem\n                ', '\\asset\\images\\shirts_men\\shirt4.jpg', NULL, NULL),
(24, 'WROGN', '1649', 'shirts', 'male', 'Navy Blue Slim Fit Checked Casual Shirt\n                ', 'Navy blue checked casual shirt, has a spread collar, a full button placket, long sleeves, a patch pocket, curved hem ', '\\asset\\images\\shirts_men\\shirt5.jpg', NULL, NULL),
(23, 'HIGHLANDER', '714', 'shirts', 'male', 'Men Olive Green & Black Slim Fit Checked Casual Shirt', 'Olive Green and Black checked casual shirt, has a spread collar, long sleeves, button placket, curved hem, and 1 patch pocket', '\\asset\\images\\shirts_men\\shirt6.jpg', NULL, NULL),
(29, 'Roadster', '899', 'shirts', 'male', 'Men Maroon Regular Fit Solid Casual Shirt                                                               ', 'Maroon solid casual shirt, has a mandarin collar, button placket, long sleeves, curved hem                                                                            ', '\\asset\\images\\shirts_men\\shirt7.jpg', NULL, NULL),
(30, 'Roadster', '899', 'shirts', 'male', 'Men Teal Green Regular Fit Solid Casual Shirt                                                                       ', 'Teal Green solid casual shirt, has a mandarin collar, long sleeves, button placket, curved hem, and 1 patch pocket                                                                            ', '\\asset\\images\\shirts_men\\shirt8.jpg', NULL, NULL),
(31, 'Roadster', '899', 'shirts', 'male', 'Men Teal Green Regular Fit Solid Casual Shirt                                                                       ', 'Teal Green solid casual shirt, has a mandarin collar, long sleeves, button placket, curved hem, and 1 patch pocket                                                                            ', '\\asset\\images\\shirts_men\\shirt9.jpg', NULL, NULL),
(32, 'Mast & Harbour', '1499', 'shirts', 'male', 'Men Blue Regular Fit Solid Casual Linen Shirt\n                ', 'Blue solid casual shirt, has a button-down collar, long sleeves, button placket, curved hem, and 1 patch pocket\n\n                ', '\\asset\\images\\shirts_men\\shirt10.jpg', NULL, NULL),
(33, 'Roadster', '599', 'shirts', 'male', 'Men Grey & Black Regular Fit Printed Casual Shirt                   ', 'Maroon printed casual shirt, has a mandarin collar with a short button placket, long sleeves with roll-up tab features, a chest pocket, a curved hem                                                 ', '\\asset\\images\\shirts_men\\shirt11.jpg', NULL, NULL),
(34, 'WROGN', '1109', 'shirts', 'male', 'Maroon Printed Slim Fit Casual Shirt\r\n                                                    ', 'Grey and black printed casual shirt, has a mandarin collar collar, button placket, long sleeves, curved hem  ', '\\asset\\images\\shirts_men\\shirt12.jpg', NULL, NULL),
(35, 'WROGN', '1239', 'shirts', 'male', 'Men Navy Slim Fit Printed Casual Shirt\r\n                ', 'Navy blue printed casual shirt, has a spread collar, a full button placket, long sleeves, a patch pocket, a curved hem\r\n                ', '\\asset\\images\\shirts_men\\shirt13.jpg', NULL, NULL),
(36, 'WROGN', '1139', 'shirts', 'male', 'Men Navy Slim Fit Printed Casual Shirt\r\n                ', 'Navy blue printed casual shirt, has a spread collar, a full button placket, long sleeves, a patch pocket, a curved hem\r\n                ', '\\asset\\images\\shirts_men\\shirt14.jpg', NULL, NULL),
(37, 'WROGN', '1649', 'shirts', 'male', 'Navy Blue Slim Fit Checked Casual Shirt\r\n                ', 'Navy blue checked casual shirt, has a spread collar, a full button placket, long sleeves, a patch pocket, curved hem ', '\\asset\\images\\shirts_men\\shirt15.jpg', NULL, NULL),
(38, 'HIGHLANDER', '714', 'shirts', 'male', 'Men Olive Green & Black Slim Fit Checked Casual Shirt', 'Olive Green and Black checked casual shirt, has a spread collar, long sleeves, button placket, curved hem, and 1 patch pocket', '\\asset\\images\\shirts_men\\shirt16.jpg', NULL, NULL),
(39, 'Roadster', '899', 'shirts', 'male', 'Men Maroon Regular Fit Solid Casual Shirt                                                               ', 'Maroon solid casual shirt, has a mandarin collar, button placket, long sleeves, curved hem                                                                            ', '\\asset\\images\\shirts_men\\shirt17.jpg', NULL, NULL),
(40, 'Roadster', '899', 'shirts', 'male', 'Men Teal Green Regular Fit Solid Casual Shirt                                                                       ', 'Teal Green solid casual shirt, has a mandarin collar, long sleeves, button placket, curved hem, and 1 patch pocket                                                                            ', '\\asset\\images\\shirts_men\\shirt18.jpg', NULL, NULL),
(41, 'Roadster', '899', 'shirts', 'male', 'Men Teal Green Regular Fit Solid Casual Shirt                                                                       ', 'Teal Green solid casual shirt, has a mandarin collar, long sleeves, button placket, curved hem, and 1 patch pocket                                                                            ', '\\asset\\images\\shirts_men\\shirt19.jpg', NULL, NULL),
(42, 'Mast & Harbour', '1499', 'shirts', 'male', 'Men Blue Regular Fit Solid Casual Linen Shirt\r\n                ', 'Blue solid casual shirt, has a button-down collar, long sleeves, button placket, curved hem, and 1 patch pocket\r\n\r\n                ', '\\asset\\images\\shirts_men\\shirt20.jpg', NULL, NULL),
(43, 'Berrylush', '1499', 'dresses', 'female', 'Drop Dead Gorgeous Cocktail Dress\r\n                ', 'An elegant and sophisticated style, this well-tailored dress emphasizes the female figure. The top is fitted to the body while the skirt is flimsy cut from the whole circle. Moreover, the high slit gives this dress a \'WOW\' effect.\r\n                ', '\\asset\\images\\tops_women\\1.jpg', NULL, NULL),
(44, 'SASSAFRAS', '799', 'dresses', 'female', 'Women Pink Solid Accordion Pleats Empire Dress\r\n\r\n                ', 'Dusty pink solid woven empire dress, has a mandarin collar, long sleeves, button closure, an attached lining, and flared hem\r\n\r\n                ', '\\asset\\images\\tops_women\\2.jpg', NULL, NULL),
(58, 'Berrylush', '799', 'dresses', 'female', 'Drop Dead Gorgeous Cocktail Dress\r\n                ', 'An elegant and sophisticated style, this well-tailored dress emphasizes the female figure. The top is fitted to the body while the skirt is flimsy cut from the whole circle. Moreover, the high slit gives this dress a \'WOW\' effect.\r\n\r\n                ', '\\asset\\images\\tops_women\\6.jpg', NULL, NULL),
(45, 'SASSAFRAS', '999', 'dresses', 'female', 'Women Peach-Coloured & Pink Printed A-Line Dress\r\n                ', 'Peach-coloured and pink printed woven A-line dress, has a round neck, short sleeves, concealed zip closure, an attached lining, and flared hem with front slit\r\n\r\n                ', '\\asset\\images\\tops_women\\3.jpg', NULL, NULL),
(46, 'HERE&NOW\r\n', '659', 'dresses', 'female', 'Women Lavender & Green Printed Maxi Dress\r\n                ', 'Lavender and green printed woven maxi dress with gathered and tie-up detail, has shoulder straps, an attached lining, and flared hem\r\n\r\n\r\n                ', '\\asset\\images\\tops_women\\4.jpg', NULL, NULL),
(47, 'Moda Rapido\r\n', '499', 'dresses', 'female', 'Women Solid Teal Blue Fit and Flare Dress\r\n                ', 'Teal Blue solid woven fit and flare dress, has shoulder straps, sleeveless, concealed zip closure, an attached lining, and straight hem\r\n\r\n                ', '\\asset\\images\\tops_women\\5.jpg', NULL, NULL),
(48, 'Berrylush', '799', 'dresses', 'female', 'Drop Dead Gorgeous Cocktail Dress\r\n                ', 'An elegant and sophisticated style, this well-tailored dress emphasizes the female figure. The top is fitted to the body while the skirt is flimsy cut from the whole circle. Moreover, the high slit gives this dress a \'WOW\' effect.\r\n\r\n                ', '\\asset\\images\\tops_women\\16.jpg', NULL, NULL),
(49, 'SASSAFRAS', '999', 'dresses', 'female', 'Women Peach-Coloured & Pink Printed A-Line Dress\r\n                ', 'Peach-coloured and pink printed woven A-line dress, has a round neck, short sleeves, concealed zip closure, an attached lining, and flared hem with front slit\r\n\r\n                ', '\\asset\\images\\tops_women\\17.jpg', NULL, NULL),
(50, 'MISH', '2474', 'dresses', 'female', 'Women Navy Blue Solid Maxi Dress with Embellished Detail\r\n\r\n                ', 'Navy Blue solid woven maxi dress with embellished detail, has shoulder straps, sleeveless, concealed zip closure on the side, an attached lining, flared hem\r\n\r\n\r\n\r\n                ', '\\asset\\images\\tops_women\\18.jpg', NULL, NULL),
(51, 'U&F\r\n', '611', 'dresses', 'female', 'Women Blue & Pink Printed Maxi Dress\r\n\r\n                ', 'Blue and pink printed woven maxi dress with tie-up detail, has a round neck, short sleeves, and flared hem\r\n\r\n\r\n                ', '\\asset\\images\\tops_women\\19.jpg', NULL, NULL),
(52, 'Tokyo Talkies\r\n', '899', 'dresses', 'female', 'Pink Floral Print Maxi Belted Dress\r\n\r\n                ', 'Pink floral print woven maxi dress, has a round neck, three-quarter sleeves, button closure, and flared hem\r\n\r\n\r\n                ', '\\asset\\images\\tops_women\\20.jpg', NULL, NULL),
(53, 'Berrylush', '1499', 'dresses', 'female', 'Drop Dead Gorgeous Cocktail Dress\r\n                ', 'An elegant and sophisticated style, this well-tailored dress emphasizes the female figure. The top is fitted to the body while the skirt is flimsy cut from the whole circle. Moreover, the high slit gives this dress a \'WOW\' effect.\r\n                ', '\\asset\\images\\tops_women\\11.jpg', NULL, NULL),
(54, 'SASSAFRAS', '799', 'dresses', 'female', 'Women Pink Solid Accordion Pleats Empire Dress\r\n                ', 'Dusty pink solid woven empire dress, has a mandarin collar, long sleeves, button closure, an attached lining, and flared hem\r\n\r\n                ', '\\asset\\images\\tops_women\\12.jpg', NULL, NULL),
(55, 'SASSAFRAS', '999', 'dresses', 'female', 'Women Peach-Coloured & Pink Printed A-Line Dress\r\n                ', 'Peach-coloured and pink printed woven A-line dress, has a round neck, short sleeves, concealed zip closure, an attached lining, and flared hem with front slit\r\n\r\n                ', '\\asset\\images\\tops_women\\13.jpg', NULL, NULL),
(56, 'HERE&NOW\r\n', '659', 'dresses', 'female', 'Women Lavender & Green Printed Maxi Dress\r\n                ', 'Lavender and green printed woven maxi dress with gathered and tie-up detail, has shoulder straps, an attached lining, and flared hem\r\n\r\n\r\n                ', '\\asset\\images\\tops_women\\14.jpg', NULL, NULL),
(57, 'Moda Rapido\r\n', '499', 'dresses', 'female', 'Women Solid Teal Blue Fit and Flare Dress\r\n                ', 'Teal Blue solid woven fit and flare dress, has shoulder straps, sleeveless, concealed zip closure, an attached lining, and straight hem\r\n\r\n                ', '\\asset\\images\\tops_women\\15.jpg', NULL, NULL),
(59, 'SASSAFRAS', '999', 'dresses', 'female', 'Women Peach-Coloured & Pink Printed A-Line Dress\r\n                ', 'Peach-coloured and pink printed woven A-line dress, has a round neck, short sleeves, concealed zip closure, an attached lining, and flared hem with front slit\r\n\r\n                ', '\\asset\\images\\tops_women\\7.jpg', NULL, NULL),
(60, 'MISH', '2474', 'dresses', 'female', 'Women Navy Blue Solid Maxi Dress with Embellished Detail\r\n\r\n                ', 'Navy Blue solid woven maxi dress with embellished detail, has shoulder straps, sleeveless, concealed zip closure on the side, an attached lining, flared hem\r\n\r\n\r\n\r\n                ', '\\asset\\images\\tops_women\\8.jpg', NULL, NULL),
(61, 'U&F\r\n', '611', 'dresses', 'female', 'Women Blue & Pink Printed Maxi Dress\r\n\r\n                ', 'Blue and pink printed woven maxi dress with tie-up detail, has a round neck, short sleeves, and flared hem\r\n\r\n\r\n                ', '\\asset\\images\\tops_women\\9.jpg', NULL, NULL),
(62, 'Tokyo Talkies\r\n', '899', 'dresses', 'female', 'Pink Floral Print Maxi Belted Dress\r\n\r\n                ', 'Pink floral print woven maxi dress, has a round neck, three-quarter sleeves, button closure, and flared hem\r\n\r\n\r\n                ', '\\asset\\images\\tops_women\\10.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'saikumar', 'sa@sa.com', '$2y$10$FF.A53KjnU283CNLTvAID.HQfI7NRJoVhB3zkSBD7Pe6HUUVLQw4a', NULL, NULL),
(2, 'raj', 'raj@raj.com', '$2y$10$OjukUO7jtfEJM0cJSbCkyeA11S2up2Na4UAoV2bfdpJTnvRAEdt/i', NULL, NULL),
(3, 'sa', 'sai@sai.com', '$2y$10$xQ48z1R.EmLwceFgD4JYtOLtXWXry44VkmPLKgaShvrCA5HHBRnaK', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `productid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
