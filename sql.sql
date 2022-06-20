DROP DATABASE IF EXISTS `AlphaProject`;

CREATE DATABASE  `AlphaProject`;




CREATE TABLE `AlphaProject`.`GroupDetails`
( 
    `id` INT
(20) AUTO_INCREMENT  NOT NULL ,
    `groupName` VARCHAR
(20)  NULL ,
    `groupLeader_id` INT
(20) NOT NULL ,
    `groupProfile` VARCHAR
(100)  NULL ,
     PRIMARY KEY
(`id`),
     UNIQUE
(`groupName`),
     FOREIGN KEY
(`groupLeader_id`) REFERENCES Users
(`id`));


CREATE TABLE `AlphaProject`.`Task_Submission`
( 
    `id` INT
(20) NOT NULL AUTO_INCREMENT , 
    `groupLeader_id` INT
(20) NOT NULL , 
    `submissionDate` DATE NOT NULL , 
    `experiences` TEXT NOT NULL ,
    `iscomplete` INT NOT NULL ,
    PRIMARY KEY
(`id`),
    FOREIGN KEY
(`groupLeader_id`) REFERENCES GroupDetails
(`groupLeader_id`)
) ENGINE = InnoDB;

ALTER TABLE `Task_Submission`
ADD `taskfile` VARCHAR
(200) NOT NULL AFTER `iscomplete`;

CREATE TABLE `AlphaProject`.`Profile`
( `id` INT
(200) NOT NULL , `about` TEXT NOT NULL , `gender` TEXT NOT NULL , `dob` DATE NOT NULL , `group` VARCHAR
(200)  NULL , `Role` TEXT NOT NULL, FOREIGN KEY
(`id`) REFERENCES Users
(`id`) ) ENGINE = InnoDB;


CREATE TABLE `AlphaProject`.`Admin`
(`id` INT
(10) NOT NULL , `Username` VARCHAR
(200) NOT NULL , `Password` VARCHAR
(23) NOT NULL ) ENGINE = InnoDB;

INSERT INTO `Admin` (`
id`,
`Username
`, `Password`) VALUES
('1', 'admin@gmail.com', '0000');

CREATE TABLE `AlphaProject`.`Requests`
(`id` INT NOT NULL AUTO_INCREMENT , `senderId` INT NOT NULL , `recieverId` INT NOT NULL , `status` TINYINT NOT NULL , PRIMARY KEY
(`id`),
 FOREIGN KEY
(`senderId`) REFERENCES Profile
(`id`),
 FOREIGN KEY
(`senderId`) REFERENCES Profile
(`id`)) ENGINE = InnoDB;

ALTER TABLE `Requests`
ADD `datesent` DATE NOT NULL AFTER `status`,
ADD `dateAccepted` DATE NULL AFTER `datesent`;

CREATE TABLE `AlphaProject`.`Notification`
(`id` INT
(20) NOT NULL AUTO_INCREMENT ,
                                            `not_frm` INT NOT NULL ,
                                            `not_to` INT NOT NULL ,
                                            `message` TEXT NOT NULL ,
                                            `isRead` TINYINT
(20) NOT NULL , 
                                            `date_Added` DATE NOT NULL ,
                                            PRIMARY KEY
(`id`),
                                            FOREIGN KEY
(`not_frm`) REFERENCES Requests
(`id`),
                                            FOREIGN KEY
(`not_to`) REFERENCES Requests
(`id`))
                                            ENGINE = InnoDB;
ALTER TABLE `Notification` CHANGE `date_Added` `date_Added` DATETIME NOT NULL;