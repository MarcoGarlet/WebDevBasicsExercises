DROP DATABASE if EXISTS lab3;
CREATE DATABASE IF NOT EXISTS lab3;
USE lab3;

CREATE TABLE IF NOT EXISTS Colors (
    color VARCHAR(64) PRIMARY KEY
);

CREATE TABLE IF NOT EXISTS Users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(64) NOT NULL, -- SHA256 will produce a 64-character hash
    is_admin BOOLEAN DEFAULT FALSE,
    color VARCHAR(64),
    FOREIGN KEY (color) REFERENCES Colors(color) ON DELETE SET NULL
);

INSERT INTO Colors (color) VALUES
('red');
INSERT INTO Colors (color) VALUES
('yellow');
INSERT INTO Colors (color) VALUES
('green');

INSERT INTO Users (username, password, is_admin, color) VALUES
('super_admin', SHA2('super_admin_pass', 256), TRUE, 'red');
INSERT INTO Users (username, password, is_admin, color) VALUES
('admin', SHA2('admin_pass', 256), TRUE, 'yellow');
INSERT INTO Users (username, password, is_admin, color) VALUES
('user', SHA2('usser_pass', 256), TRUE, 'green');