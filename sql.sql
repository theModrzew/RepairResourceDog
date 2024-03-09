CREATE TABLE `device` (
    `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `device_name` VARCHAR(60) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=INNODB;

CREATE TABLE `file_queue` (
    `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `origin_ip` VARCHAR(20) NOT NULL,
    `time_submitted` DATETIME NOT NULL,
    `file_path` VARCHAR(250) NOT NULL,
    `device_description` VARCHAR(60) NOT NULL,
    `device_type` TINYINT(3) UNSIGNED NOT NULL,
    `file_type` TINYINT(3) UNSIGNED NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=INNODB;
