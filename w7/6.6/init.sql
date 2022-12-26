-- MYSQL

CREATE TABLE `Business` (
  `id` int NOT NULL AUTO_INCREMENT,
  `businessName` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `telephone` varchar(45) DEFAULT NULL,
  `url` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `BusinessCategory` (
  `businessId` int NOT NULL,
  `categoryId` int NOT NULL,
  PRIMARY KEY (`businessId`,`categoryId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `Category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

ALTER TABLE `w7`.`BusinessCategory` 
ADD CONSTRAINT `fk_BusinessCategory_1`
  FOREIGN KEY (`businessId`)
  REFERENCES `w7`.`Business` (`id`)
  ON DELETE CASCADE
  ON UPDATE CASCADE;

ALTER TABLE `w7`.`BusinessCategory` 
ADD INDEX `fk_BusinessCategory_2_idx` (`categoryId` ASC) VISIBLE;
;
ALTER TABLE `w7`.`BusinessCategory` 
ADD CONSTRAINT `fk_BusinessCategory_2`
  FOREIGN KEY (`categoryId`)
  REFERENCES `w7`.`Category` (`id`)
  ON DELETE CASCADE
  ON UPDATE CASCADE;


INSERT INTO `w7`.`Category`
(`id`,
`name`)
VALUES
( default , "a" ),
( default , "c" ),
( default , "b" ),
( default , "d" ),
( default , "e" ),
( default , "f" )
;