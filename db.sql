CREATE DATABASE baza;

USE baza;

CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    ime VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    godine INT,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
