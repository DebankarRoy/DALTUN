create database daltun;

use daltun;

create table users(
	id int(200) NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL unique,
    number VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    type VARCHAR(255) NOT NULL,
    status VARCHAR(255) NOT NULL ,
    token VARCHAR(255) NOT NULL unique,
    PRIMARY KEY (id)
);
