------------- Table ticket Manager -------------
CREATE TABLE `helpdesk`.`tickets` ( 
    `id` INT NOT NULL AUTO_INCREMENT ,
    `title` VARCHAR(64) NOT NULL ,
    `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    `content` TEXT NOT NULL ,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;


------------- Table User_HelpDesk -------------
CREATE TABLE `helpdesk`.`User_HelpDesk` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `username` VARCHAR(16) NOT NULL , 
    `pass` VARCHAR(64) NOT NULL , 
    PRIMARY KEY (`id`), 
    UNIQUE `username` (`username`)
    ) ENGINE = InnoDB;

------------- Administrateur -------------
CREATE TABLE `helpdesk`.`admin` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `username` VARCHAR(16) NOT NULL , 
    `pass` VARCHAR(64) NOT NULL , 
    PRIMARY KEY (`id`), 
    UNIQUE `username` (`username`)
    ) ENGINE = InnoDB;