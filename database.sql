CREATE DATABASE food_db;
USE food_db;

CREATE TABLE users (
 id INT AUTO_INCREMENT PRIMARY KEY,
 fullname VARCHAR(100),
 email VARCHAR(100),
 password VARCHAR(255),
 role ENUM('admin','user') DEFAULT 'user'
);

CREATE TABLE categories (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(100)
);

CREATE TABLE foods (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(100),
 description TEXT,
 price DECIMAL(6,2),
 image VARCHAR(255),
 category_id INT
);

INSERT INTO categories(name) VALUES ('Pizza'),('Burger'),('Pasta');

INSERT INTO foods(name,description,price,image,category_id) VALUES
('Cheese Pizza','Delicious pizza with cheese',8.50,'pizza.jpg',1),
('Beef Burger','Juicy burger with beef',6.00,'burger.jpg',2),
('Italian Pasta','Creamy pasta',7.20,'pasta.jpg',3);


-- Krijo një admin manualisht
INSERT INTO users(fullname,email,password,role)
VALUES ('Admin','admin@food.com','$2y$10$abcdefghijklmnopqrstuv','admin');