CREATE DATABASE Veiculos;
USE Veiculos;

CREATE TABLE Marcas(
	id 	INT AUTO_INCREMENT NOT NULL PRIMARY KEY,  
    nome VARCHAR(500) NOT NULL
);

/* DROP TABLE MARCAS;*/

/*INSERT INTO Marcas (nome) VALUES ("Renault");*/
INSERT INTO Marcas (nome) VALUES ("Ford");
INSERT INTO Marcas (nome) VALUES ("Chevrolet");
INSERT INTO Marcas (nome) VALUES ("Fiat");
INSERT INTO Marcas (nome) VALUES ("Volkswagen"); 
INSERT INTO Marcas (nome) VALUES ("Renault"),("Hyundai"),("Kia");

CREATE TABLE Modelos(
	id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nome VARCHAR(500) NOT NULL,
    ano INT NOT NULL DEFAULT 1990,
    id_Marcas INT NOT NULL,
    FOREIGN KEY (id_Marcas) REFERENCES Marcas(id)
);

INSERT INTO Modelos (nome, ano, id_Marcas) VALUES ("Fusion", 2020, 5), ("Ka", 2005, 5), ("Kwid", 2019, 1), ("Captur", 2019, 1), ("Onix", 2018, 4); 

SELECT * FROM Marcas;

SELECT * FROM Modelos;

DELETE FROM Marcas WHERE id>=7;

UPDATE modelos SET nome="Novo Nome" 	WHERE id=1;