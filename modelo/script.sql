DROP DATABASE eComida;

CREATE DATABASE IF NOT EXISTS eComida;

DROP TABLE IF EXISTS Estabelecimento;

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

DROP TABLE IF EXISTS Cliente;

CREATE TABLE Cliente (
    idCliente INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    cpf VARCHAR(20) NOT NULL,
    email VARCHAR(30) NOT NULL,
    senha VARCHAR(50) NOT NULL,
    logradouro VARCHAR(255) NOT NULL,
    numero VARCHAR(20) NOT NULL,
    bairro VARCHAR(255) NOT NULL,
    cidade VARCHAR(255) NOT NULL,
    uf VARCHAR(3) NOT NULL,
    cep VARCHAR(20) NOT NULL,
    dataCadastro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO Estabelecimento (`RazaoSocial`, `NomeFantasia`, `CNPJ`, `Telefone`, `Email`, `Senha`, `Status`, `CEP`, `Logradouro`, `Numero`, `Bairro`, `Cidade`) VALUES ('eComida LTDA', 'eComida', '99999999999999', '4848948949', 'paulo.busato2@gmail.com', '123', 'P', '156412362', 'Rua sem Fim', '02', 'Numero Zero', 'Cachu');

INSERT INTO `Cliente` (`idCliente`, `nome`, `telefone`, `cpf`, `email`, `senha`, `endereco`, `numero`, `bairro`, `cidade`, `uf`, `cep`, `dataCadastro`) VALUES (NULL, 'Paulo', '333123213', '312412312', 'paulo@paulo.com', '123', 'Rua Paulo', '2', 'Bairro Paulo', 'Cidade Paulo', 'PL', '32543123', CURRENT_TIMESTAMP)
$sql = "INSERT INTO `Cliente` (`idCliente`, `nome`, `telefone`, `cpf`, `email`, `senha`, `logradouro`, `numero`, `bairro`, `cidade`, `uf`, `cep`, `dataCadastro`) VALUES (NULL, \'Paulo\', \'333123213\', \'312412312\', \'paulo@paulo.com\', \'123\', \'Rua Paulo\', \'2\', \'Bairro Paulo\', \'Cidade Paulo\', \'PL\', \'32543123\', CURRENT_TIMESTAMP)";