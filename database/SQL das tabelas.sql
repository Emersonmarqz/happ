CREATE DATABASE `happen_academy` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

-- happen_academy.companies definition

CREATE TABLE `companies` (
  `id_company` int(11) NOT NULL AUTO_INCREMENT,
  `name_company` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `id_plan` int(11) DEFAULT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `cnpj` varchar(14) NOT NULL,
  `speciality_company` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id_company`),
  UNIQUE KEY `email` (`email`),
  KEY `companies_FK` (`id_plan`),
  CONSTRAINT `companies_FK` FOREIGN KEY (`id_plan`) REFERENCES `plans` (`id_plan`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4;

-- happen_academy.plans definition

CREATE TABLE `plans` (
  `id_plan` int(11) NOT NULL AUTO_INCREMENT,
  `name_plan` varchar(150) NOT NULL,
  `monthly_price` int(11) NOT NULL,
  `annual_price` int(11) NOT NULL,
  PRIMARY KEY (`id_plan`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- happen_academy.solutions definition

CREATE TABLE `solutions` (
  `id_solutions` int(11) NOT NULL AUTO_INCREMENT,
  `name_solutions` varchar(150) NOT NULL,
  `numero_aulas` int(11) NOT NULL,
  `duracao` int(11) NOT NULL,
  PRIMARY KEY (`id_solutions`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- happen_academy.users definition

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `user_email` varchar(150) NOT NULL,
  `user_type` varchar(25) NOT NULL,
  `password` varchar(45) NOT NULL,
  `specialty` varchar(100) DEFAULT NULL,
  `path` varchar(500) DEFAULT NULL,
  `id_company` int(11) DEFAULT NULL,
  `cpf` varchar(14) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_company` (`id_company`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_company`) REFERENCES `companies` (`id_company`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
