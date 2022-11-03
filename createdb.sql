CREATE TABLE ingredients (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    food varchar(100),
    qty int,
    measurement = varchar(20),
);

CREATE TABLE recipes (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    recipe varchar(100),
    ingredients varchar(255),
    measurement = varchar(20),
);