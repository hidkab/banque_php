DROP DATABASE IF EXISTS banque_php;
CREATE DATABASE banque_php CHARACTER SET 'utf8';

DROP USER IF EXISTS 'banquePHP'@'Localhost';
CREATE USER 'banquePHP'@'Localhost' IDENTIFIED BY 'hidouche';
GRANT ALL PRIVILEGES ON banque_php.* TO 'banquePHP'@'Localhost';

CREATE TABLE Customer
(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    lastname VARCHAR(60) NOT NULL,
    firstname VARCHAR(60) NOT NULL,
    phone INT(20) NOT NULL, 
    email VARCHAR(50) NOT NULL UNIQUE,
    sex CHAR (1) NOT NULL,
    password VARCHAR(255) NOT NULL, 
    birth_date DATE NOT NULL,
    city VARCHAR(50)NOT NULL,
    city_code CHAR(10)NOT NULL,
    street_number INT(10) NOT NULL,
    street VARCHAR(50)NOT NULL,
    PRIMARY KEY (id)
)
ENGINE = InnoDB;

INSERT INTO Customer (lastname, firstname, phone, email, sex, password, birth_date, city, city_code, street_number, street)
VALUES
("Dupont", "Marc", 0658862300, "dupont_marc@gmail.com", "h", "dm2615", "1980/03/21", "Paris", "75003", 23, "Poitou"),
("Dubois", "Juliette", 0622122320, "dubois_juliette@gmail.com", "f", "dj@4512", "1992/02/12", "Rouen", "76000", 2, "Carmes");

CREATE TABLE Account 
(
    id int UNSIGNED NOT NULL AUTO_INCREMENT,
    account_number VARCHAR(50) NOT NULL,
    account_type VARCHAR(50) NOT NULL,
    amount DECIMAL(15,2) NOT NULL,
    operation_date DATE NOT NULL,
    customer_id INT UNSIGNED,
    PRIMARY KEY (id),
    FOREIGN KEY (customer_id) REFERENCES Customer(id) 
)
ENGINE = InnoDB;

INSERT INTO Account (account_number,account_type, amount, operation_date, customer_id)
VALUES
("76h254562","Compte courant", 1120.50, NOW(), 1),
("76h254562","Livret A", 6830, NOW(), 1),
("25b263478","Compte courant", 2350, NOW(), 2),
("25b263478","PEL ", 253.82, NOW(), 2);

CREATE TABLE Operation 
(
  id int UNSIGNED NOT NULL AUTO_INCREMENT,
  operation_type VARCHAR(50) NOT NULL,
  amount DECIMAL(15,2) NOT NULL,
  label VARCHAR(80),
  executed TIMESTAMP NOT NULL,
  account_id INT UNSIGNED,
  PRIMARY KEY (id),
  FOREIGN KEY (account_id) REFERENCES Account(id)
)
ENGINE = InnoDB;

INSERT INTO Operation (operation_type, amount, label, executed, account_id)
VALUES
("Virement", 520, "Banque postal", NOW(), 1 ),
("Paiment", -23.40, "Carrefour rouen", NOW(), 1 ),
("Retrêt", -100, "Banque LCL", NOW(), 2 ),
("Virement", 200, "Banque postal", NOW(), 2 );