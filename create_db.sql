CREATE TABLE `references` (
  `id` int NOT NULL,
  `key` text NOT NULL,
  `target` text NOT NULL,
  `dateCreated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;