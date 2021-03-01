CREATE USER IF NOT EXISTS 'simitive'@'localhost' IDENTIFIED BY 'simitive';
GRANT ALL on simitive.* to 'simitive'@'localhost';

CREATE DATABASE simitive;
USE simitive;
CREATE TABLE IF NOT EXISTS fishing (
    id int primary key,
    mackerel int,
    bass int,
    cod int,
    tuna int,
    shark int,
    lives int,
    created datetime not null,
    modified timestamp not null
);
