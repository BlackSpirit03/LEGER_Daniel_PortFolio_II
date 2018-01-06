CREATE DATABASE IF NOT EXISTS `PORTFOLIO_DATABASE` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `PORTFOLIO_DATABASE`;

CREATE TABLE `AUTHORS` (
  `idt_author` int,
  `email` varchar(50),
  `password` varchar(20),
  `url` varchar(50),
  `created_at` timestamp,
  `updated_at` timestamp,
  PRIMARY KEY (`idt_author`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `SKILLS` (
  `idt_skill` int,
  `language` varchar(2),
  `short_label` varchar(50),
  `detail` text,
  `level` tinyint(4),
  `created_at` timestamp,
  `updated_at` timestamp,
  `idt_author` int,
  PRIMARY KEY (`idt_skill`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `PROFESSIONALS` (
  `idt_professional` int,
  `language` varchar(2),
  `short_label` varchar(50),
  `detail` text,
  `date_start` timestamp,
  `date_end` timestamp,
  `created_at` timestamp,
  `updated_at` timestamp,
  `idt_author` int,
  PRIMARY KEY (`idt_professional`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `PROJECTS` (
  `idt_project` int,
  `language` varchar(2),
  `short_label` varchar(50),
  `detail` text,
  `photo` varchar(50),
  `date_start` timestamp,
  `date_end` timestamp,
  `created_at` timestamp,
  `updated_at` timestamp,
  `idt_author` int,
  PRIMARY KEY (`idt_project`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `PERSONNALS` (
  `idt_personnal` int,
  `language` varchar(8),
  `short_label` varchar(50),
  `detail` text,
  `date_start` timestamp,
  `date_end` timestamp,
  `created_at` timestamp,
  `updated_at` timestamp,
  `idt_author` int,
  PRIMARY KEY (`idt_personnal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `MESSAGES` (
  `idt_message` int,
  `name_contact` varchar(50),
  `phone_contact` varchar(20),
  `email` varchar(50),
  `message` text,
  `flag_urgent` boolean,
  `date` timestamp,
  `created_at` timestamp,
  `updated_at` timestamp,
  `idt_author` int,
  PRIMARY KEY (`idt_message`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `SKILLS` ADD FOREIGN KEY (`idt_author`) REFERENCES `AUTHORS` (`idt_author`);
ALTER TABLE `PROFESSIONALS` ADD FOREIGN KEY (`idt_author`) REFERENCES `AUTHORS` (`idt_author`);
ALTER TABLE `PROJECTS` ADD FOREIGN KEY (`idt_author`) REFERENCES `AUTHORS` (`idt_author`);
ALTER TABLE `PERSONNALS` ADD FOREIGN KEY (`idt_author`) REFERENCES `AUTHORS` (`idt_author`);
ALTER TABLE `MESSAGES` ADD FOREIGN KEY (`idt_author`) REFERENCES `AUTHORS` (`idt_author`);