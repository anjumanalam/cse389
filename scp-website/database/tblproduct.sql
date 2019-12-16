-- Table structure for table `tblproduct`
CREATE TABLE `tblproduct` (
 `id` int(12) NOT NULL AUTO_INCREMENT,
 `name` varchar(255) NOT NULL,
 `code` varchar(255) NOT NULL,
 `image` text NOT NULL,
 `price` double(10,2) NOT NULL,
 `description` varchar(255) DEFAULT NULL,
 PRIMARY KEY (`id`),
 UNIQUE KEY `product_code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1

-- Dumping data for table `tblproduct`
INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`, `description`) VALUES
(NULL, 'Chicken Wings and Fries', 'CWF', 'http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-4.jpg', '15.00', 'Fried chicken wings with fries. What else is there?'),
(NULL, 'Grilled Chicken Salad', 'GCS', 'http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-6.jpg', '20.00', 'Leafy greens with grilled unfried chicken.'),
(NULL, 'Croissants', 'CR', 'http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-5.jpg', '10.00', 'Flaky, fluffy, fresh, French food. Say that fast 5 times.'),
(NULL, 'Savory Beef Burger', 'SBB', 'beef-burger.jpg', '10.00', 'Enjoy one of NY''s finest beef patties with only the freshest produce. Right out the farm.'),
(NULL, 'Falafels', 'FAF', 'falafels.jpg', '25.00', 'Five extra large chickpea balls. Completely vegan friendly and delicious. Even a meat eater would be jealous.'),
(NULL, 'Kebabs', 'KBB', 'kebab.jpg', '5.00', 'Decked with grilled peppers, tender chicken, and our secret seasoning. That''s all you need to know.');

COMMIT;