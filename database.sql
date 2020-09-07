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
    email VARCHAR(255) NOT NULL,
    enrolled_paper VARCHAR(255) NOT NULL,
    paper_code VARCHAR(255) NOT NULL,
    start_date date,
    score VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

create table papers(
	id int(200) NOT NULL AUTO_INCREMENT,
    paper VARCHAR(255) NOT NULL,
    paper_code VARCHAR(255) NOT NULL,
    paper_date date,
    start_time time NOT NULL,
    end_time time NOT NULL,
    exam_date date not null,
    access_code VARCHAR(255) NOT NULL,
    marks VARCHAR(255) NOT NULL,
    negative VARCHAR(255) NOT NULL,
    proctoring VARCHAR(255) NOT NULL,
    instant_score VARCHAR(255) NOT NULL,
    shuffling VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);


create table questions(
	id int(200) NOT NULL AUTO_INCREMENT,
    question VARCHAR(300) NOT NULL,
    option1 VARCHAR(255) NOT NULL,
    option2 VARCHAR(255) NOT NULL,
    option3 VARCHAR(255) NOT NULL,
    option4 VARCHAR(255) NOT NULL,
    answer VARCHAR(255) NOT NULL,
    paper_code VARCHAR(255) NOT NULL,
    paper_date date,
    PRIMARY KEY (id)
);

create table enrolled_students(
	id int(200) NOT NULL AUTO_INCREMENT,
    student_email VARCHAR(255) NOT NULL,
    student_name VARCHAR(255) NOT NULL,
    paper VARCHAR(255) NOT NULL,
    paper_code VARCHAR(255) NOT NULL,
    PRIMARY KEY (paper_code)
);

INSERT INTO enrolled_exams (email,enrolled_paper,paper_code ,start_date,score)
    VALUES('a@a','python','cs201','2018-06-15','pending');

INSERT INTO enrolled_exams (email,enrolled_paper,paper_code ,start_date,score)
    VALUES('a@a','java','cs301','2019-06-15','pending');

INSERT INTO enrolled_exams (email,enrolled_paper,paper_code ,start_date,score)
    VALUES('a@a','c','cs101','2017-06-15','pending');