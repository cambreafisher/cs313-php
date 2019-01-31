DROP TABLE usr;
DROP TABLE speaker;
DROP TABLE conference;
DROP TABLE note;

CREATE TABLE usr(
    usr_id  serial  PRIMARY KEY
    , f_name VARCHAR(30) NOT NULL
    , l_name VARCHAR(30) NOT NULL
);

    CREATE TABLE  speaker (
        speaker_id serial PRIMARY KEY
        ,f_name VARCHAR(30) NOT NULL
        , l_name VARCHAR(30) NOT NULL
        , calling VARCHAR(30) NOT NULL
     );

CREATE TABLE conference (
    conference_id serial PRIMARY KEY
    ,year INTEGER NOT NULL
    ,month VARCHAR(15) NOT NULL
    ,session VARCHAR(5)
);

CREATE TABLE note (
    note_id serial PRIMARY KEY
    ,speaker_id INTEGER NOT NULL
    ,conference_id INTEGER NOT NULL
    ,usr_id INTEGER NOT NULL
    ,note TEXT NOT NULL
    ,FOREIGN KEY (speaker_id) REFERENCES speaker(speaker_id)
    ,FOREIGN KEY (conference_id) REFERENCES conference(conference_id)
    ,FOREIGN KEY (usr_id) REFERENCES usr(usr_id)
);

INSERT INTO usr
    (f_name
    ,l_name)
    VALUES
    ('Bob'
    ,'Ross'
);

INSERT INTO speaker (
    f_name
    ,l_name
    ,calling
)
VALUES (
    'Russell'
    ,'Nelson'
    ,'Prophet'
);

INSERT INTO conference(
    year
    ,month
    ,session
)
VALUES
(
    2018
    ,'October'
    ,'SatM'
);

INSERT INTO conference(
    year
    ,month
    ,session
)
VALUES
(
    2018
    ,'October'
    ,'W'
);

INSERT INTO conference(
    year
    ,month
    ,session
)
VALUES
(
    2018
    ,'October'
    ,'SunM'
);

INSERT INTO note (
    speaker_id
    ,conference_id
    ,usr_id
    ,note
)
VALUES
(
    (SELECT speaker_id
    FROM speaker
    WHERE f_name = 'Russell'
    AND l_name = 'Nelson')
    ,(SELECT conference_id
    FROM conference
    WHERE year = 2018
    AND month = 'October'
    AND session = 'SatM')
    ,(SELECT usr_id
    FROM usr
    WHERE f_name = 'Bob'
    AND l_name = 'Ross')
    ,'Amazing talk. Hustle M. Nelson is at it again'
);

INSERT INTO note (
    speaker_id
    ,conference_id
    ,usr_id
    ,note
)
VALUES
(
    (SELECT speaker_id
    FROM speaker
    WHERE f_name = 'Russell'
    AND l_name = 'Nelson')
    ,(SELECT conference_id
    FROM conference
    WHERE year = 2018
    AND month = 'October'
    AND session = 'W')
    ,(SELECT usr_id
    FROM usr
    WHERE f_name = 'Bob'
    AND l_name = 'Ross')
    ,'Amazing! Go to the Temple.'
);

SELECT note from note 
WHERE conference_id = (SELECT conference_id
    FROM conference
    WHERE year = 2018
    AND month = 'October'
    AND session = 'W');