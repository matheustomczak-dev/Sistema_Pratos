CREATE DATABASE sistema_pratos;
USE sistema_pratos;


CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    responsavel VARCHAR(200) NOT NULL,
    email VARCHAR(200) NOT NULL
);


CREATE TABLE pratos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_responsavel VARCHAR(200) NOT NULL,
    nome VARCHAR(200) NOT NULL,
    descricao VARCHAR(100) NOT NULL,
    preco DECIMAL(10,2) NOT NULL, 
    categoria VARCHAR(200) NOT NULL,
    
    
    FOREIGN KEY (usuario_responsavel) REFERENCES usuario(responsavel)

);