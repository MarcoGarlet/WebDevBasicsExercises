DROP DATABASE if EXISTS lab0;
CREATE DATABASE IF NOT EXISTS lab0;
USE lab0;

CREATE TABLE IF NOT EXISTS Users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) UNIQUE NOT NULL,
    name VARCHAR(255) NOT NULL,
    surname VARCHAR(255) NOT NULL,
    password VARCHAR(64) NOT NULL
);

CREATE TABLE IF NOT EXISTS Cars (
    id INT AUTO_INCREMENT PRIMARY KEY,
    colore VARCHAR(64) NOT NULL,
    marca VARCHAR(64) NOT NULL,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES Users(id) ON DELETE CASCADE
);




INSERT INTO Users (email, name, surname, password) VALUES
('paolorossi@myemail.com','Paolo', 'Rossi', SHA2('password1',256));
INSERT INTO Users (email, name, surname, password) VALUES
('nicolabianchi@myemail.com','Nicola', 'Bianchi', SHA2('password2',256));

INSERT INTO Cars (colore, marca, user_id) VALUES
('#ADD8E6','Fiat', 1);
INSERT INTO Cars (colore, marca, user_id) VALUES
('#FFFFFF','Alfa Romeo', 1);
INSERT INTO Cars (colore, marca, user_id) VALUES
('#F1807E','Ferrari', 1);
INSERT INTO Cars (colore, marca, user_id) VALUES
('#FFFF00','Lamborghini', 1);
INSERT INTO Cars (colore, marca, user_id) VALUES
('#AAA9AD','Pagani', 1);

INSERT INTO Cars (colore, marca, user_id) VALUES
('#32CD32','Mercedes', 2);
INSERT INTO Cars (colore, marca, user_id) VALUES
('#CBC3E3','Volkswagen', 2);
INSERT INTO Cars (colore, marca, user_id) VALUES
('#FFC0CB','BMW', 2);
INSERT INTO Cars (colore, marca, user_id) VALUES
('#FFA500','Audi', 1);