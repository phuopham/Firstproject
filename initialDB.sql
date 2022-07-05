create database if not exists project;

use project;

CREATE TABLE if not exists users (
    id int PRIMARY KEY NOT null AUTO_INCREMENT,
    username varchar(40) unique NOT null,
    password varchar(40) NOT null,
    firstname varchar(100),
    lastname varchar(100),
    email varchar(100) unique not null,
    phone int(100)
);

insert into
    users
values
    (
        null,
        'admin',
        '123456',
        'Administrator',
        '',
        'admin@gmail.com',
        null
    );