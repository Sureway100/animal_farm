--creating a new database called ANIMAL_FARM 
CREATE DATABASE ANIMAL_FARM;

--indicating default/current database
USE ANIMAL_FARM;

--creating a table inside ANIMAL_FARM database
CREATE TABLE ANIMALIA
(

    ID int NOT NULL AUTO_INCREMENT,
    FIRST_NAME varchar(45) NOT NULL,
    POSTED TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    GENDER CHAR(1) NOT NULL,
    EMAIL varchar(45) UNIQUE NOT NULL,
    FAV_ANIMAL VARCHAR(10),
    SCREENSHOT VARCHAR(45) NOT NULL,
    PRIMARY KEY (id)

);