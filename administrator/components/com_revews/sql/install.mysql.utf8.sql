CREATE TABLE IF NOT EXISTS `#__revews_content` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,

`ordering` INT(11)  NOT NULL ,
`state` TINYINT(1)  NOT NULL ,
`date` DATE NOT NULL DEFAULT '0000-00-00',
`name` VARCHAR(255)  NOT NULL ,
`email` VARCHAR(255)  NOT NULL ,
`country` VARCHAR(255)  NOT NULL ,
`userphoto` VARCHAR(255)  NOT NULL ,
`reviewtext` TEXT NOT NULL ,
`vote` INT(11)  NOT NULL ,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT COLLATE=utf8_general_ci;

