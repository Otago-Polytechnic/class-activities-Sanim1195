
CREATE DATABASE OPACNZ;
USE opacnz;
CREATE TABLE `student` (
  `STID` int(11) NOT NULL  PRIMARY KEY,
  `Name` varchar(100) NOT NULL,
  `Lastname` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(100) 
);


CREATE TABLE `lecturer` (
  `LID` int(11) NOT NULL  PRIMARY KEY,
  `Name` varchar(100) NOT NULL,
  `Lastname` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(100),
  `Salary` DOUBLE(10,3),
  `Qualification` varchar(100) 
);

CREATE TABLE `module` (
  `MID` VARCHAR(11) NOT NULL  PRIMARY KEY,
  `Name` varchar(100) NOT NULL,
  `Credit` INT(3) ,
  `Level` INT(2)    
);


CREATE TABLE `enrollment` (
	`STID` int(11) NOT NULL ,
  `MID` VARCHAR(11) NOT NULL, 
  `LID` int(11) ,
  `Block` INT(3) NOT NULL,
  `Mark` Float (3,3),
  PRIMARY KEY (STID, MID, BLOCK));

INSERT INTO `opacnz`.`student` (`STID`, `Name`, `Lastname`, `Email`, `Address`) VALUES ('192832', 'Sally', 'Smily', 'Sallysmily@gmail.com', '458 Kings Road');
INSERT INTO `opacnz`.`student` (`STID`, `Name`, `Lastname`, `Email`, `Address`) VALUES ('192833', 'Power Puff', 'Girls', 'powerpuffgirls@gmail.com', '458 Mojojojo Road');

INSERT INTO `opacnz`.`lecturer` (`LID`, `Name`, `Lastname`, `Email`, `Address`, Salary, Qualification) VALUES ('100', 'Reza', 'Rafeh', 'Rezarafeh@gmail.com', 'Downs Drive', 50, 'Phd');
INSERT INTO `opacnz`.`lecturer` (`LID`, `Name`, `Lastname`, `Email`, Qualification) VALUES ('200', 'Farhad', 'Mehidipour', 'Farhad@gmail.com', 'Phd' );

INSERT INTO `opacnz`.`module` (`MID`, `Name`, `Credit`, `Level`)VALUES ('IX607001', 'App Development', 15, 5);
INSERT INTO `opacnz`.`module` (`MID`, `Name`, `Credit`, `Level`)VALUES ('IX606001', ' Studio 3', 15, 6);

INSERT INTO `opacnz`.`enrollment` (`STID`, `MID`, `LID`, `Block`)VALUES ('192833', 'IX607001', 100, 5);
INSERT INTO `opacnz`.`enrollment` (`STID`, `MID`, `LID`, `Block`)VALUES ('192833', 'IX606001', 200, 5);
INSERT INTO `opacnz`.`enrollment` (`STID`, `MID`, `LID`, `Block`, Mark)VALUES ('192221', 'IX607001', 100, 4, 87);
INSERT INTO `opacnz`.`enrollment` (`STID`, `MID`, `LID`, `Block`, Mark)VALUES ('192833', 'IX607001', 200, 4, 34);