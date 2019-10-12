CREATE DATABASE IF NOT EXISTS eComida;

CREATE TABLE IF NOT EXISTS Estabelecimento (
	idEstabelecimento INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    RazaoSocial VARCHAR(255) NOT NULL,
    NomeFantasia VARCHAR(255) NULL,
    CNPJ VARCHAR(24) NOT NULL,
    Status VARCHAR(2) NOT NULL
);

INSERT INTO Estabelecimento (RazaoSocial, NomeFantasia, CNPJ, Status)
VALUES ('eComida LTDA', 'eComida', '99999999999999', 'P');