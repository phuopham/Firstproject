create database if not exists Clarins;

use Clarins;

create table users (
    username varchar(32) unique primary key,
    `password` varchar(40)
);

CREATE TABLE catalogs(
    catalogID int AUTO_INCREMENT PRIMARY KEY,
    name varchar(40),
    category varchar(20),
    description text
);

CREATE TABLE brands(
    brandID int AUTO_INCREMENT PRIMARY KEY,
    name varchar(40),
    description text
);

create table products (
    productID int(10) AUTO_INCREMENT PRIMARY KEY,
    name varchar(100),
    catalogID int,
    description text,
    brandID int,
    sell_quantity int,
    pic1 varchar(40),
    pic2 varchar(40),
    pic3 varchar(40),
    pic4 varchar(40),
    FOREIGN KEY (catalogID) REFERENCES catalogs(catalogID),
    FOREIGN KEY (brandID) REFERENCES brands(brandID)
);

CREATE TABLE comments(
    commentID int AUTO_INCREMENT PRIMARY KEY,
    name varchar(40),
    email varchar(100),
    subject varchar(100),
    message text,
    productID int,
    visible smallint,
    FOREIGN KEY (productID) REFERENCES products(productID)
);

CREATE TABLE stockroom(
    orderID int AUTO_INCREMENT PRIMARY KEY,
    productID int,
    price int,
    stock int DEFAULT 0,
    FOREIGN KEY (productID) REFERENCES products(productID)
);

create table contact(
    contactID int AUTO_INCREMENT PRIMARY KEY,
    name varchar(40),
    email varchar(100),
    subject varchar(100),
    message text
);

create table user_order(
    name varchar(40),
    ordernumber int AUTO_INCREMENT PRIMARY KEY,
    email varchar(100),
    phone int(10),
    address varchar(200),
    paymethod int
);

CREATE TABLE orders(
    orderID int AUTO_INCREMENT PRIMARY KEY,
    ordernumber int NOT NULL,
    productID int,
    quantity int,
    price int,
    FOREIGN KEY (ordernumber) REFERENCES user_order(ordernumber)
);

CREATE TABLE visitorcount(
    id int AUTO_INCREMENT PRIMARY KEY,
    ip varchar(30),
    view_at DATETIME DEFAULT CURRENT_TIMESTAMP
);