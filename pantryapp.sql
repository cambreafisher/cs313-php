DROP TABLE FOOD;
DROP TABLE LIST;
DROP TABLE PANTRY;
DROP TABLE SHOPPING;
DROP TABLE USR;

CREATE TABLE FOOD(
    food_id SERIAL PRIMARY KEY
    ,food_name varchar(50)
    ,expiration_date DATE 
);

CREATE TABLE SHOPPING(
    item_id serial PRIMARY KEY
    ,food_name varchar(50)
    ,quantity INTEGER
);

CREATE TABLE PANTRY(
    pantry_id SERIAL PRIMARY KEY
    ,pantry_food_id integer
    ,quantity INTEGER 
    ,FOREIGN KEY (pantry_food_id) REFERENCES FOOD(food_id)
);

CREATE TABLE LIST(
    list_id SERIAL PRIMARY KEY
    ,list_name VARCHAR(50)
    ,list_food_id INTEGER
    ,quantity INTEGER
    ,FOREIGN KEY (list_food_id) REFERENCES PANTRY(pantry_id)
);

CREATE TABLE USR(
  usr_id SERIAL PRIMARY KEY
  ,f_name VARCHAR(30) NOT NULL
  ,l_name VARCHAR(30) NOT NULL
  ,pantry_list INTEGER 
  ,shop_list INTEGER
  ,usr_list INTEGER 
  ,FOREIGN KEY (pantry_list) REFERENCES PANTRY(pantry_id)
  ,FOREIGN KEY (shop_list) REFERENCES SHOPPING(item_id)
  ,FOREIGN KEY (usr_list) REFERENCES LIST(list_id)
);

INSERT INTO FOOD (food_name, expiration_date)
VALUES ('Yellow Cake Mix', '2020-09-24');

INSERT INTO FOOD (food_name, expiration_date)
VALUES ('Eggs', '2019-02-20');

INSERT INTO FOOD (food_name, expiration_date)
VALUES ('Oil', '2020-12-12');

INSERT INTO FOOD (food_name, expiration_date)
VALUES ('Cool Whip', '2019-03-09');


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

INSERT INTO LIST()