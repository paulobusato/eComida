DROP DATABASE eComida;

CREATE DATABASE IF NOT EXISTS eComida;

DROP TABLE Estabelecimento;

CREATE TABLE Estabelecimento (
	idEstabelecimento INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    RazaoSocial VARCHAR(255) NOT NULL,
    NomeFantasia VARCHAR(255),
    CNPJ VARCHAR(24) NOT NULL,
    Telefone VARCHAR(20) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Senha VARCHAR(255) NOT NULL,
    Status VARCHAR(2) NOT NULL,
    CEP VARCHAR(255) NOT NULL,
    Logradouro VARCHAR(255) NOT NULL,
    Numero VARCHAR(20),
    Bairro VARCHAR(255) NOT NULL,
    Cidade VARCHAR(255) NOT NULL
);

INSERT INTO Estabelecimento (RazaoSocial, NomeFantasia, CNPJ, Telefone, Email, Senha, Status, CEP, Logradouro, Numero, Bairro, Cidade)
VALUES ('eComida LTDA', 'eComida', '99999999999999', '4848948949', 'paulo.busato2@gmail.com', '123', 'P', '156412362', 'Rua sem Fim', '02', 'Numero Zero', 'Cachu');