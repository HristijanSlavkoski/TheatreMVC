 
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
    Surname VARCHAR (255) NOT NULL,
    ImageUrl TEXT
);

CREATE TABLE IF NOT EXISTS shows (
    id INT(6)  UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    genre VARCHAR (255) NOT NULL,
    date DATE NOT NULL,
    time TIME NOT NULL,
    duration INT(6) NOT NULL
);

INSERT IGNORE INTO actors (
    id,
    Name,
    Surname,
    ImageUrl
)
VALUES
    (
        1,
        'Antonio',
        'Nikoloski',
        '/opt/lampp/htdocs/TheatreMVC/TheatreMvc/public/css/prv.jpg'
       
    ),
    (
        2,
        'Hristijan',
        'Slavkoski',
        'prv.jpg'
        
    ),
    (
        3,
        'Petar ',
        'Poposki',
        'prv.jpg'
        
    );

INSERT IGNORE INTO shows (
    id,
    title,
    genre,
    date,
    time,
    duration
)
VALUES
    (
        1,
        'Crvenkapa',
        'Komedija',
        "2022-06-20",
        "20:00:00",
        "122"
    ),
    (
        2,
        'Zoki Poki',
        'Horor',
        '2022-05-21',
        '15:30:00',
        '140'
    ),
    (
        3,
        'Devojkite na Marko',
        'Akcija',
        '2022-06-25',
        '10:25:00',
        '80'
    ),
    (
        4,
        'Vtorata smena',
        'Komedija',
        '2022-03-10',
        '15:30:00',
        '84'
    );      