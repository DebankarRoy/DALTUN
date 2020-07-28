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


create table enrolled_exams(
	id int(200) NOT NULL AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL unique,
    enrolled_paper VARCHAR(255) NOT NULL,
    paper_code VARCHAR(255) NOT NULL,
    score VARCHAR(255) NOT NULL,
    PRIMARY KEY (email)
);

create table papers(
	id int(200) NOT NULL AUTO_INCREMENT,
    paper VARCHAR(255) NOT NULL,
    paper_code VARCHAR(255) NOT NULL,
    PRIMARY KEY (paper_code)
);

create table enrolled_students(
	id int(200) NOT NULL AUTO_INCREMENT,
    student_email VARCHAR(255) NOT NULL,
    student_name VARCHAR(255) NOT NULL,
    paper VARCHAR(255) NOT NULL,
    paper_code VARCHAR(255) NOT NULL,
    PRIMARY KEY (paper_code)
);

