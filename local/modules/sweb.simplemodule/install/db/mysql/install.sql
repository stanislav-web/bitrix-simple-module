-- -- --
-- Table structure  `users`
-- Database:        Test
-- Project:         Test
-- Date:            ������� 15 2013 �., 18:12
-- Author:          Stanislav WEB <stanisov@gmail.com>
-- Description:     ������������
-- -- --

DROP TABLE IF EXISTS `simplemodule_users`;

CREATE TABLE `simplemodule_users` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID ����������',
  `name` VARCHAR(150) NOT NULL DEFAULT '' COMMENT '����� ���������',
  `gender` ENUM('0','1') NOT NULL DEFAULT '0' COMMENT '���, 1 - �, 0 - �',
  `code` CHAR(13) NOT NULL DEFAULT '' COMMENT '������������ ���',
  PRIMARY KEY (`id`),
  KEY `gender` (`gender`)
)ENGINE=InnoDB CHARACTER SET utf8 COLLATE utf8_unicode_ci;

ALTER TABLE `simplemodule_users` AUTO_INCREMENT = 0;

INSERT INTO `simplemodule_users` (`id`, `name`, `gender`, `code`) VALUES
(1, '������ ���� ��������', '0', '3456787743234'),
(2, '������� ����� �����������', '0', '5567656456789'),
(3, '���������� �������� ����������', '1', 'A��84903-0234'),
(4, '��������� ��������� ����������', '1', '����023444234'),
(5, '�������� ����� ��������', '0', '788-��-���-87'),
(6, '���������� �������� ����������', '1', '758998���-���'),
(7, '���������� ���������� ����������', '0', '����-678-98��'),
(8, '�������� ������ ���������', '0', '�-89675-90983'),
(9, '�������� ����� ����������', '1', '��99-090456��');