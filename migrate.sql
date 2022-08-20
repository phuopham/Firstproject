create database if not exists Clarins;

use Clarins;

create table users (
    username varchar(32) not null unique primary key,
    email varchar(100) not null unique,
    phone int(11),
    `password` varchar(40) not null,
    type smallint,
    create_by DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE catalogs(
    catalogID int AUTO_INCREMENT PRIMARY KEY,
    name varchar(40) not null,
    category int,
    description text,
    create_by DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE brands(
    brandID int AUTO_INCREMENT PRIMARY KEY,
    name varchar(40) not null unique,
    description text,
    create_by DATETIME DEFAULT CURRENT_TIMESTAMP
);

create table products (
    productID int(10) AUTO_INCREMENT PRIMARY KEY,
    name varchar(100) NOT NULL UNIQUE,
    catalogID int,
    description text,
    brandID int not null,
    sell_quantity int default 0,
    price int not null,
    discount int,
    pic1 varchar(40),
    pic2 varchar(40),
    pic3 varchar(40),
    pic4 varchar(40),
    create_by DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (catalogID) REFERENCES catalogs(catalogID),
    FOREIGN KEY (brandID) REFERENCES brands(brandID)
);

CREATE TABLE comments(
    commentID int AUTO_INCREMENT PRIMARY KEY,
    name varchar(40),
    email varchar(100) not null,
    message text,
    productID int not null,
    visible smallint default 0,
    avatar smallint default 0,
    create_by DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (productID) REFERENCES products(productID)
);

CREATE TABLE stockroom(
    ID int AUTO_INCREMENT PRIMARY KEY,
    productID int,
    username varchar (32),
    quantity int DEFAULT 0,
    create_by DATETIME DEFAULT CURRENT_TIMESTAMP
);

create table contact(
    contactID int AUTO_INCREMENT PRIMARY KEY,
    name varchar(40) not null,
    email varchar(100) not null,
    subject varchar(100),
    message text,
    create_by DATETIME DEFAULT CURRENT_TIMESTAMP
);

create table user_order(
    name varchar(40),
    ordernumber int AUTO_INCREMENT PRIMARY KEY,
    email varchar(100) not null,
    phone int(10) not null,
    address varchar(200) not null,
    paymethod text,
    create_by DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE orders(
    orderID int AUTO_INCREMENT PRIMARY KEY,
    ordernumber int NOT NULL,
    productID int,
    quantity int,
    price int,
    create_by DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (ordernumber) REFERENCES user_order(ordernumber)
);

CREATE TABLE visitorcount(
    id int AUTO_INCREMENT PRIMARY KEY,
    ip varchar(30),
    view_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO
    users
VALUES
    (
        "admin",
        "clarin-administrator@clarins.com",
        01234567890,
        sha1(12345),
        2,
        now()
    ),
    (
        "agent",
        "customerservice@clarins.com",
        null,
        sha1(12345),
        1,
        now()
    ),
    (
        "operator",
        "manager@clarins.com",
        null,
        sha1(12345),
        0,
        now()
    );