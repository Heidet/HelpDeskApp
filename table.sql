------------- Table ticket Manager -------------
CREATE TABLE `helpdesk`.`tickets` ( 
    `id` INT NOT NULL AUTO_INCREMENT ,
    `title` VARCHAR(64) NOT NULL ,
    `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    `content` TEXT NOT NULL ,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;
ALTER TABLE `tickets` CHANGE `title` `numeroClient` VARCHAR(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL; 
ALTER TABLE `tickets` CHANGE `content` `nom` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL; 
ALTER TABLE `tickets` ADD `prenom` TEXT NOT NULL AFTER `nom`; 
ALTER TABLE `tickets` ADD `mail` TEXT NOT NULL AFTER `prenom`; 
ALTER TABLE `tickets` ADD `ville` TEXT NOT NULL AFTER `mail`; 
ALTER TABLE `tickets` ADD `zip` TEXT NOT NULL AFTER `ville` ;
ALTER TABLE `tickets` ADD `contact` TEXT NOT NULL AFTER `zip` ;
ALTER TABLE `tickets` ADD `priorite` TEXT NOT NULL AFTER `contact` ;
ALTER TABLE `tickets` ADD `categorie` TEXT NOT NULL AFTER `priorite` ;
ALTER TABLE `tickets` ADD `document` TEXT NOT NULL AFTER `categorie` ;
ALTER TABLE `tickets` ADD `contenu` TEXT NOT NULL AFTER `document` ;
ALTER TABLE `tickets` ADD `titre` VARCHAR(64) NOT NULL AFTER `id`; 


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
ALTER TABLE `admin` CHANGE `pass` `hash` VARCHAR(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL; 

INSERT INTO `admin` (`id`, `username`, `hash`) VALUES (NULL, 'Admin1', '53510e0394449b458895fc4dc05b34f400c9e929fd12503ebce7cdab282b73c1'); 