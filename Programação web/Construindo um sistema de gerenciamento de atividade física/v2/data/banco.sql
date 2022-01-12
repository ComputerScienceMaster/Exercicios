CREATE DATABASE extremesports;

use extremesports;


CREATE TABLE usuario(
    username VARCHAR(100) PRIMARY KEY,
    senha VARCHAR(50),
    fullName VARCHAR(150),
    email VARCHAR(150)
);

INSERT INTO usuario VALUES("john", "js1", "John da Silva", "john@gmail.com");
INSERT INTO usuario VALUES("mary", "ms1", "Mary da Silva", "mary@gmail.com");
INSERT INTO usuario VALUES("silvia", "ss1", "Silvia da Silva", "silvia@gmail.com");
INSERT INTO usuario VALUES("allyson", "as1", "Allyson da Silva", "allyson@gmail.com");