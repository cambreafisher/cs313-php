DROP TABLE FOOD_LIST;
DROP TABLE USR_LIST;
DROP TABLE LIST;
DROP TABLE SHOPPING;
DROP TABLE FOOD;
DROP TABLE USR;

CREATE TABLE USR(
  user_id SERIAL PRIMARY KEY
  ,f_name VARCHAR(30) NOT NULL
  ,l_name VARCHAR(30) NOT NULL
  ,username VARCHAR(50) NOT NULL
  ,password VARCHAR(250) NOT NULL
);

CREATE TABLE FOOD(
    food_id SERIAL PRIMARY KEY
    ,food_name varchar(50) NOT NULL
    ,expiration_date DATE NOT NULL
    ,user_id INTEGER NOT NULL
    ,FOREIGN KEY (user_id) REFERENCES USR(user_id)
);

CREATE TABLE SHOPPING(
    item_id serial PRIMARY KEY
    ,food_name varchar(50) NOT NULL
    ,quantity INTEGER NOT NULL
    ,user_id INTEGER NOT NULL
    ,FOREIGN KEY (user_id) REFERENCES USR(user_id)
);

CREATE TABLE LIST(
    list_id SERIAL PRIMARY KEY
    ,list_name VARCHAR(50) NOT NULL
);

CREATE TABLE USER_LIST(
  ul_id SERIAL PRIMARY KEY
  ,user_id INTEGER NOT NULL
  ,list_id INTEGER NOT NULL
  ,FOREIGN KEY (user_id) REFERENCES USR(user_id)
  ,FOREIGN KEY (list_id) REFERENCES LIST(list_id)
);

CREATE TABLE FOOD_LIST(
  fl_id SERIAL PRIMARY KEY
  ,list_id INTEGER NOT NULL
  ,food_id INTEGER NOT NULL
  ,FOREIGN KEY (food_id) REFERENCES FOOD(food_id)
  ,FOREIGN KEY (list_id) REFERENCES LIST(list_id)
);

INSERT INTO FOOD (food_name, expiration_date)
VALUES ('Yellow Cake Mix', '2020-09-24');

INSERT INTO FOOD (food_name, expiration_date)
VALUES ('Eggs', '2019-02-20');

INSERT INTO FOOD (food_name, expiration_date)
VALUES ('Oil', '2020-12-12');

INSERT INTO FOOD (food_name, expiration_date)
VALUES ('Cool Whip', '2019-03-09');

INSERT INTO FOOD (food_name, expiration_date)
VALUES ('Frosting', '2018-03-09');


INSERT INTO SHOPPING(food_name, quantity)
VALUES ('Strawberries', 1);

INSERT INTO SHOPPING(food_name, quantity)
VALUES ('Kiwi', 3);

INSERT INTO SHOPPING(food_name, quantity)
VALUES ('Bananas', 2);

INSERT INTO SHOPPING(food_name, quantity)
VALUES ('Vanilla Pudding', 1);

INSERT INTO PANTRY(pantry_food_id, quantity)
VALUES ((SELECT food_id FROM FOOD WHERE food_name = 'Cool Whip'), 1);

INSERT INTO PANTRY(pantry_food_id, quantity)
VALUES ((SELECT food_id FROM FOOD WHERE food_name = 'Yellow Cake Mix'), 1);

INSERT INTO PANTRY(pantry_food_id, quantity)
VALUES ((SELECT food_id FROM FOOD WHERE food_name = 'Eggs'), 2);

INSERT INTO PANTRY(pantry_food_id, quantity)
VALUES ((SELECT food_id FROM FOOD WHERE food_name = 'Oil'), 1);


DELETE FROM FOOD WHERE expiration_date IS NULL;



CREATE TABLE TAUSR(
  usr_id SERIAL PRIMARY KEY
  ,username VARCHAR(30) NOT NULL
  ,password VARCHAR(255) NOT NULL
);
