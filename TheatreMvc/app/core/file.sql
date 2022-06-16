 
 CREATE DATABASE IF NOT EXISTS theatre;
 
 USE theatre;
 CREATE TABLE IF NOT EXISTS user (
                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    username VARCHAR(255) NOT NULL,
                    email VARCHAR(255),
                    password VARCHAR(255) NOT NULL
                    );

CREATE TABLE IF NOT EXISTS actors (
         id INT(6)  UNSIGNED AUTO_INCREMENT PRIMARY KEY,
         Name VARCHAR(255) NOT NULL,
         Surname VARCHAR (255) NOT NULL

);
INSERT IGNORE INTO actors (
    id,
    Name,
    Surname
)
VALUES
    (
        1,
        'Antonio',
        'Nikoloski'
       
    ),
    (
        2,
        'Hristijan',
        'Slavkoski'
        
    ),
    (
        3,
        'Petar ',
        'Poposki'
        
    );