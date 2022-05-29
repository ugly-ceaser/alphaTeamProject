DROP DATABASE IF EXISTS `Alpha`;




CREATE TABLE `Alpha`.`GroupDetails` ( 
    `id` INT(20) NOT NULL AUTO_INCREMENT ,
    `groupName` VARCHAR(20)  NULL ,
    `groupLeader_id` INT(20) NOT NULL ,
    `groupProfile` VARCHAR(100)  NULL ,
     PRIMARY KEY (`id`),
     UNIQUE(`groupName`),
     FOREIGN KEY(`groupLeader_id`) REFERENCES Users (`id`));


CREATE TABLE `Alpha`.`Task_Submission` ( 
    `id` INT(20) NOT NULL AUTO_INCREMENT , 
    `groupLeader_id` INT(20) NOT NULL , 
    `submissionDate` DATE NOT NULL , 
    `experiences` TEXT NOT NULL ,
    `iscomplete` INT NOT NULL ,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`groupLeader_id`) REFERENCES GroupDetails(`groupLeader_id`)
) ENGINE = InnoDB;

ALTER TABLE `Task_Submission` ADD `taskfile` VARCHAR(200) NOT NULL AFTER `iscomplete`;

