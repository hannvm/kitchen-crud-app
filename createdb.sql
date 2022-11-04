CREATE TABLE ingredients (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    food varchar(100),
    qty int,
    measurement varchar(20),
);

CREATE TABLE recipes (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    recipe varchar(100),
);

CREATE TABLE pizza (
    ingredient_id int NOT NULL PRIMARY KEY,
    ingredient varchar(100),
    qty int,
);