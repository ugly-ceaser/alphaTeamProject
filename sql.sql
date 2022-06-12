DROP DATABASE IF EXISTS `AlphaProject`;




CREATE TABLE `AlphaProject`.`GroupDetails` ( 
    `id` INT(20) NOT NULL AUTO_INCREMENT ,
    `groupName` VARCHAR(20)  NULL ,
    `groupLeader_id` INT(20) NOT NULL ,
    `groupProfile` VARCHAR(100)  NULL ,
     PRIMARY KEY (`id`),
     UNIQUE(`groupName`),
     FOREIGN KEY(`groupLeader_id`) REFERENCES Users (`id`));


CREATE TABLE `AlphaProject`.`Task_Submission` ( 
    `id` INT(20) NOT NULL AUTO_INCREMENT , 
    `groupLeader_id` INT(20) NOT NULL , 
    `submissionDate` DATE NOT NULL , 
    `experiences` TEXT NOT NULL ,
    `iscomplete` INT NOT NULL ,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`groupLeader_id`) REFERENCES GroupDetails(`groupLeader_id`)
) ENGINE = InnoDB;

ALTER TABLE `Task_Submission` ADD `taskfile` VARCHAR(200) NOT NULL AFTER `iscomplete`;

CREATE TABLE `AlphaProject`.`Profile` ( `id` INT(200) NOT NULL , `about` TEXT NOT NULL , `gender` TEXT NOT NULL , `dob` DATE NOT NULL , `group` VARCHAR(200) NOT NULL , `Role` TEXT NOT NULL, FOREIGN KEY (`id`) REFERENCES Users(`id`) ) ENGINE = InnoDB;


CREATE TABLE `AlphaProject`.`Admin` (`id` VARCHAR(10) NOT NULL , `Username` VARCHAR(200) NOT NULL , `Password` VARCHAR(23) NOT NULL ) ENGINE = InnoDB;

INSERT INTO `Admin` (`id`, `Username`, `Password`) VALUES ('Admin', 'admin@gmail.com', '0000');