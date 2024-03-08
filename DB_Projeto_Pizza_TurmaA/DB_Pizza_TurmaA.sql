-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE Clientes (
cpf_cliente VARCHAR(14)  NOT NULL PRIMARY KEY,
Nome VARCHAR(255),
Endereco Varchar(255),
Idade INT,
Id_pedidos SERIAL NOT NULL
);

CREATE TABLE Pedidos (
Id_pedidos SERIAL NOT NULL PRIMARY KEY,
Data_Reali_Ped DATE,
Valor_pedi MONEY,
Data_Entreg_Pedi DATE
);

CREATE TABLE Fornecedores (
Id_fornc SERIAL NOT NULL PRIMARY KEY,
Nome_Fornec VARCHAR(255),
Prod_Forneci_Fornec VARCHAR(255),
Endereco_Fornec VARCHAR(255),
id_prod SERIAL NOT NULL
);

CREATE TABLE Funcionarios (
RE_Func INT PRIMARY KEY,
Nome VARCHAR(255),
Funcao VARCHAR(255),
Status VARCHAR(50) DEFAULT 'ATIVO'
);

CREATE TABLE Vendas (
id_vendas SERIAL NOT NULL PRIMARY KEY,
Tipo_vendas VARCHAR(255),
Form_Paga_vendas VARCHAR(100),
Id_pedidos SERIAL NOT NULL,
FOREIGN KEY(Id_pedidos) REFERENCES Pedidos (Id_pedidos)
);

CREATE TABLE Endereco (
id_endere SERIAL NOT NULL PRIMARY KEY,
Complemento VARCHAR(255),
Rua VARCHAR(255),
Numero INT
);

CREATE TABLE Produto (
id_prod SERIAL NOT NULL PRIMARY KEY,
marca_prod VARCHAR(255),
nome_prod VARCHAR(255),
data_vali_prod DATE
);

CREATE TABLE REALIZA (
id_vendas SERIAL NOT NULL,
RE_Func INT,
FOREIGN KEY(id_vendas) REFERENCES Vendas (id_vendas),
FOREIGN KEY(RE_Func) REFERENCES Funcionarios (RE_Func)
);

CREATE TABLE Possui (
id_endere SERIAL NOT NULL,
cpf_cliente VARCHAR(14)  NOT NULL,
FOREIGN KEY(id_endere) REFERENCES Endereco (id_endere),
FOREIGN KEY(cpf_cliente) REFERENCES Clientes (cpf_cliente)
);

CREATE TABLE Contem (
Id_pedidos SERIAL NOT NULL,
id_prod SERIAL NOT NULL,
FOREIGN KEY(Id_pedidos) REFERENCES Pedidos (Id_pedidos),
FOREIGN KEY(id_prod) REFERENCES Produto (id_prod)
);

ALTER TABLE Clientes ADD FOREIGN KEY(Id_pedidos) REFERENCES Pedidos (Id_pedidos);
ALTER TABLE Fornecedores ADD FOREIGN KEY(id_prod) REFERENCES Produto (id_prod);
