DROP DATABASE if EXISTS lab0;
CREATE DATABASE IF NOT EXISTS lab0;
USE lab0;

CREATE TABLE IF NOT EXISTS Users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(64) NOT NULL, -- SHA256 will produce a 64-character hash
    is_admin BOOLEAN DEFAULT FALSE
);

INSERT INTO Users (username, password, is_admin) VALUES
('admin', SHA2('admin_password', 256), TRUE);