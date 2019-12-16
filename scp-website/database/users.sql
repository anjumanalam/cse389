-- Table structure for table `users`
CREATE TABLE `users` (
 `id` int(12) NOT NULL AUTO_INCREMENT,
 `username` varchar(50) NOT NULL,
 `password` varchar(50) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table `users`
INSERT INTO `users` (`id`, `username`, `password`) VALUES 
(NULL, 'mario', '123'), 
(NULL, 'mike', '345'),
(NULL, 'anju', '678');

COMMIT;