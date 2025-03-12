CREATE DATABASE contato IF NOT EXISTS ;
USE contato;
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT primary key,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(32) NOT NULL
)