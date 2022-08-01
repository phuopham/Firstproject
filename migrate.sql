create database if not exists Clarins;

use Clarins;

create table users (
    username varchar(32) unique primary key,
    `password` varchar(40),
    email varchar(100),
    phone int(10),
    usertype int
);

CREATE TABLE catalogs(
    catalogID int AUTO_INCREMENT PRIMARY KEY,
    name varchar(40),
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
    price int,
    pic1 varchar(40),
    pic2 varchar(40),
    pic3 varchar(40),
    pic4 varchar(40),
    FOREIGN KEY (catalogID) REFERENCES catalogs(catalogID),
    FOREIGN KEY (brandID) REFERENCES brands(brandID)
);

CREATE TABLE comments(
    commentID int AUTO_INCREMENT PRIMARY KEY,
    productID int,
    username varchar(32),
    content text,
    FOREIGN KEY (productID) REFERENCES products(productID),
    FOREIGN KEY (username) REFERENCES users(username)
);

CREATE TABLE articles(
    articleID int AUTO_INCREMENT PRIMARY KEY,
    title varchar(100),
    body text
);

CREATE TABLE article_product(
    ID int AUTO_INCREMENT PRIMARY KEY,
    articleID int,
    productID int,
    FOREIGN KEY (articleID) REFERENCES articles(articleID),
    FOREIGN KEY (productID) REFERENCES products(productID)
)