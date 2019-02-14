CREATE TABLE course (
    id SERIAL PRIMARY KEY,
    name VARCHAR(60) NOT NULL,
    course_code VARCHAR(10) NOT NULL
);

CREATE TABLE note (
    id SERIAL PRIMARY KEY, 
    date DATE NOT NULL,
    content TEXT NOT NULL,
    course_id INT NOT NULL REFERENCES course(id)
);

INSERT INTO course (name, course_code)
VALUES ('Web II', 'CS 313');

INSERT INTO course (name, course_code)
VALUES ('Web I', 'CS 213');

INSERT INTO note (date, content, course_id)
VALUES ('2019-02-14', 'this class is amazing!', 'CS 313');

