CREATE DATABASE crud_estudo

USE crud_estudo

CREATE TABLE animal (
    id_animal INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL
)


-- seeds

INSERT INTO animal (nome) VALUES ('Gato'), ('Cachorro'), ('Porco')