Create Database HDocker;
USE HDocker;
Create table Users (
    ID int,
      Username VARCHAR(20),
      Email VARCHAR(40),
      password VARCHAR(100));
INSERT INTO Users(ID, Username, Email, password) VALUES
(   1, 
    'dan', 
    'danbope@gmail.com', 
    'root');