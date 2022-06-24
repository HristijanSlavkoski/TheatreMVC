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
    duration INT(6) NOT NULL,
    imageUrl TEXT
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
        'Ана',
        'Стојановска',
        '../../public/media/AnaStojanovska.jpg'
       
    ),
    (
        2,
        'Борче',
        'Начев',
        '../../public/media/BorcheNachev.jpg'
        
    ),
    (
        3,
        'Габриела',
        'Петрушевска',
        '../../public/media/GabrielaPetrushevska.jpg'
    ),
    (
        4,
        'Јасмина',
        'Поповска',
        '../../public/media/JasminaPopovska.jpg'   
    ),
    (
        5,
        'Јелена',
        'Јованова',
        '../../public/media/JelenaJovanova.jpg'
    ),
    (
        6,
        'Јордан',
        'Симонов',
        '../../public/media/JordanSimonov.jpg'
    ),
    (
        7,
        'Весна',
        'Гаврил-Тапшановска',
        '../../public/media/VesnaGavrilTapshanovska.jpg'
    );

INSERT IGNORE INTO shows (
    id,
    title,
    genre,
    date,
    time,
    duration,
    imageUrl
)
VALUES
    (
        1,
        'Црвенкапа',
        'Детска',
        "2022-06-20",
        "20:00:00",
        "122",
        '../../public/media/crvenkapa.jpg'
    ),
    (
        2,
        'Не се клади на енглези',
        'Комедија',
        '2022-05-21',
        '15:30:00',
        '140',
        '../../public/media/neSeKladiNaEnglezi.jpg'
    ),
    (
        3,
        'Втората смена',
        'Авантура',
        '2022-03-10',
        '15:30:00',
        '84',
        '../../public/media/vtorataSmena.jpg'
    ),
    (
        4,
        'Чекајќи го Годо',
        'Апсурд',
        '2022-05-15',
        '20:00:00',
        "130",
        '../../public/media/cekajkiGoGodo.jpg'
    ),
    (
        5,
        'Хамлет',
        'Трагедија',
        '2022-05-16',
        '20:00:00',
        "142",
        '../../public/media/hamlet.jpg'
    );
 CREATE TABLE IF NOT EXISTS seats (
 id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  seat_boolean  INT(6) 
);