-- -- --
-- Table structure  `users`
-- Database:        Test
-- Project:         Test
-- Date:            Октябрь 15 2013 г., 18:12
-- Author:          Stanislav WEB <stanisov@gmail.com>
-- Description:     Пользователи
-- -- --

DROP TABLE IF EXISTS `simplemodule_users`;

CREATE TABLE `simplemodule_users` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID сотрудника',
  `name` VARCHAR(150) NOT NULL DEFAULT '' COMMENT 'Логин латиницей',
  `gender` ENUM('0','1') NOT NULL DEFAULT '0' COMMENT 'Пол, 1 - ж, 0 - м',
  `code` CHAR(13) NOT NULL DEFAULT '' COMMENT 'Персональный код',
  PRIMARY KEY (`id`),
  KEY `gender` (`gender`)
)ENGINE=InnoDB CHARACTER SET utf8 COLLATE utf8_unicode_ci;

ALTER TABLE `simplemodule_users` AUTO_INCREMENT = 0;

INSERT INTO `simplemodule_users` (`id`, `name`, `gender`, `code`) VALUES
(1, 'Иванов Иван Иванович', '0', '3456787743234'),
(2, 'Федоров Игорь Геннадиевич', '0', '5567656456789'),
(3, 'Терентьева Светлана Николаевна', '1', 'AРП84903-0234'),
(4, 'Михайлова Елизавета Васильевна', '1', 'НГШШ023444234'),
(5, 'Васнецов Игорь Петрович', '0', '788-ОО-РОБ-87'),
(6, 'Ухмыльская Виктория Михайловна', '1', '758998РПР-ЛДЛ'),
(7, 'Литовченко Константин Викторович', '0', 'ПРЕН-678-98РН'),
(8, 'Бахмутов Сергей Сергеевич', '0', 'О-89675-90983'),
(9, 'Кирюхина Ирина Степановна', '1', 'АП99-090456РО');