-- 1. Create Database (if not exists)
CREATE DATABASE IF NOT EXISTS `simplecrud` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `simplecrud`;

-- 2. Delete table if already exists
DROP TABLE IF EXISTS `users`;

-- 3. Create Tabel `users`
CREATE TABLE `users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `id_number` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 4. Imput sample data
INSERT INTO `users` (`id`, `name`, `email`, `id_number`) VALUES
(1, 'John Doe', 'john.doe@example.com', '3171012345670001'),
(2, 'Jane Smith', 'jane.smith@example.com', '3171012345670002');
