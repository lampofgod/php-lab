CREATE TABLE `questions` (
  `question_number` int(11) NOT NULL,
  `question` text COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`question_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;
