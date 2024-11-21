CREATE DATABASE praticadois_nicolascq;
use praticadois_nicolascq;

CREATE TABLE Clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_completo VARCHAR(255) NOT NULL,
    cpf CHAR(11) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL,
    telefone VARCHAR(15)
);

CREATE TABLE Funcionarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_completo VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    telefone VARCHAR(15)
);

CREATE TABLE Solicitacoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT NOT NULL,
    descricao TEXT NOT NULL,
    urgencia ENUM('baixa', 'média', 'alta') NOT NULL,
    status ENUM('pendente', 'em andamento', 'finalizada') DEFAULT 'pendente',
    data_abertura TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    funcionario_id INT,
    FOREIGN KEY (cliente_id) REFERENCES Clientes(id),
    FOREIGN KEY (funcionario_id) REFERENCES Funcionarios(id)
);

SELECT*FROM Clientes;
SELECT*FROM Funcionarios;
SELECT*FROM Solicitacoes;

