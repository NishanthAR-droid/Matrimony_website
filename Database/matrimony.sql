CREATE TABLE IF NOT EXISTS `USER_LOGIN`
(
  `Uname` VARCHAR NOT NULL,
  `passwd` VARCHAR NOT NULL,
  PRIMARY KEY (`Uname`)
);

CREATE TABLE IF NOT EXISTS `USER_PROFILE`
(
  `fname` VARCHAR NOT NULL,
  `phno` NUMERIC NOT NULL,
  `sex` CHAR NOT NULL,
  `email` VARCHAR NOT NULL,
  `motherTounge` VARCHAR,
  `relegion` VARCHAR,
  `caste` VARCHAR,
  `country_` VARCHAR NOT NULL,
  `city` VARCHAR NOT NULL,
  `state` VARCHAR NOT NULL,
  `education` VARCHAR,
  `annual_income` NUMERIC,
  `occupation` VARCHAR NOT NULL,
  `about_me` VARCHAR,
  `Pid` INT NOT NULL,
  `dob` DATE NOT NULL,
  `s_id` INT,
  `Uname` VARCHAR NOT NULL,
  PRIMARY KEY (`Pid`),
  FOREIGN KEY (`s_id`) REFERENCES `SUCCESS_STORIES`(`s_id`),
  FOREIGN KEY (`Uname`) REFERENCES `USER_LOGIN`(`Uname`)
);

CREATE TABLE IF NOT EXISTS `IMAGE_GALLERY`
(
  `img_id` INT NOT NULL,
  `image` VARCHAR NOT NULL,
  `Pid` INT NOT NULL,
  PRIMARY KEY (`img_id`),
  FOREIGN KEY (`Pid`) REFERENCES `USER_PROFILE`(`Pid`)
);

CREATE TABLE IF NOT EXISTS `SUCCESS_STORIES`
(
  `s_id` INT NOT NULL,
  `m_date` DATE NOT NULL,
  `Pid_1` INT NOT NULL,
  `Pid_2` INT NOT NULL,
  PRIMARY KEY (`s_id`),
  FOREIGN KEY (`Pid_1`) REFERENCES `USER_PROFILE`(`Pid`),
  FOREIGN KEY (`Pid_2`) REFERENCES `USER_PROFILE`(`Pid`)
);

CREATE TABLE IF NOT EXISTS `PREFERENCES`
(
  `pre_id` INT NOT NULL,
  `p_sex` CHAR NOT NULL,
  `p_age` NUMERIC NOT NULL,
  `p_income` NUMERIC NOT NULL,
  `p_caste_` VARCHAR NOT NULL,
  `p_city` VARCHAR NOT NULL,
  `P_relegion` VARCHAR NOT NULL,
  `p_country` VARCHAR NOT NULL,
  `p_state` VARCHAR NOT NULL,
  `p_motherTounge` VARCHAR NOT NULL,
  `p_occupation` VARCHAR NOT NULL,
  `p_education` VARCHAR NOT NULL,
  `Pid` INT NOT NULL,
  PRIMARY KEY (`pre_id`),
  FOREIGN KEY (`Pid`) REFERENCES `USER_PROFILE`(`Pid`)
);

INSERT INTO `USER_LOGIN` VALUES('prajwal','prajwal123');
INSERT INTO `USER_LOGIN` VALUES('peri','pant17');
INSERT INTO `USER_LOGIN` VALUES('nishanth','arns143');
INSERT INTO `USER_LOGIN` VALUES('rahul','monhul<3');
INSERT INTO `USER_LOGIN` VALUES('riyan','paraggggg');
INSERT INTO `USER_LOGIN` VALUES('abhinaya','Gymnastics');

INSERT INTO `USER_PROFILE` VALUES('Prajwal Surendra',9784524545,'M','prs@gmail.com','Kannada','Hindu','','India','Karnataka','',,'Businessman','I play cricket',1,'05-apr-1999',,'prajwal');
INSERT INTO `USER_PROFILE` VALUES('Prerana N S',9788524545,'F','pns@gmail.com','Kannada','Hindu','Brahmin','India','Karnataka','Diploma in Theatre',,'Theatre artist','I act and dance ',2,,'12-mar-2003','peri');
INSERT INTO `USER_PROFILE` VALUES('Nishanth A R',9784524755,'M','anr@gmail.com','Kannada','Hindu','Lingayat','India','Karnataka','MS,BE',15000000,'Engineer','I love coding',3,,'08-oct-2000','nishanth');
INSERT INTO `USER_PROFILE` VALUES('Rahul R',9784527825,'O','ram@gmail.com','Kannada','Hindu','','India','Karnataka','BCom',500000,'Businessman','I love trading',4,,'05-sep-2001','rahul');
INSERT INTO `USER_PROFILE` VALUES('Riyan parag',9784527855,'M','riyan@gmail.com','Kannada','Hindu','Gowda','India','UP','10th pass',,'Cricketer','I play cricket',5,,'24-dec-2002','rahul');
INSERT INTO `USER_PROFILE` VALUES('Abhinaya Rao',8384527855,'F','abhi@gmail.com','Kannada','Hindu','Brahmin','India','Karnataka','BE',,'Gymnast','State level gymnast',6,,'31-dec-2003','abhinaya');

INSERT INTO `PREFERENCES` VALUES();








