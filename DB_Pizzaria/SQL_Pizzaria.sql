-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE Fornecedores (
Id_fornc SERIAL NOT NULL PRIMARY KEY,
Nome_Fornec VARCHAR(255),
Endereco_Fornec VARCHAR(255),
Prod_Forneci_Fornec VARCHAR(255),
id_prod SERIAL NOT NULL
)

CREATE TABLE Produtos (
id_prod SERIAL NOT NULL PRIMARY KEY,
data_vali_prod DATETIME,
marca_prod VARCHAR(255),
nome_prod VARCHAR(255)
)

CREATE TABLE Sabores (
nome_sabor VARCHAR(255) NOT NULL PRIMARY KEY,
ingred_princ_sabor VARCHAR(255),
Preco Money
)

CREATE TABLE Endereco (
id_endere SERIAL NOT NULL PRIMARY KEY,
Rua VARCHAR(255),
Numero INT,
Complemento VARCHAR(255)
)

CREATE TABLE Pedidos (
Id_pedidos SERIAL NOT NULL PRIMARY KEY,
Data_Entreg_Pedi DATETIME,
Valor_pedi MONEY,
Data_Reali_Ped DATETIME
)

CREATE TABLE Funcionarios (
Status DEFAULT 'ATIVO',
Funcao VARCHAR(255),
Nome VARCHAR(255),
RE_Func INT PRIMARY KEY
)

CREATE TABLE Clientes (
cpf_cliente VARCHAR(14)  NOT NULL PRIMARY KEY,
Idade INT,
Nome VARCHAR(255),
Endereco Varchar(255)
)

CREATE TABLE Vendas (
id_vendas SERIAL NOT NULL PRIMARY KEY,
Form_Paga_vendas VARCHAR(100),
Tipo_vendas VARCHAR(255)
)

CREATE TABLE Incluem (
id_prod SERIAL NOT NULL,
nome_sabor VARCHAR(255) NOT NULL,
FOREIGN KEY(id_prod) REFERENCES Produtos (id_prod),
FOREIGN KEY(nome_sabor) REFERENCES Sabores (nome_sabor)
)

CREATE TABLE Contem (
Id_pedidos SERIAL NOT NULL,
nome_sabor VARCHAR(255) NOT NULL,
FOREIGN KEY(Id_pedidos) REFERENCES Pedidos (Id_pedidos),
FOREIGN KEY(nome_sabor) REFERENCES Sabores (nome_sabor)
)

CREATE TABLE Possui (
cpf_cliente VARCHAR(14)  NOT NULL,
id_endere SERIAL NOT NULL,
FOREIGN KEY(cpf_cliente) REFERENCES Clientes (cpf_cliente),
FOREIGN KEY(id_endere) REFERENCES Endereco (id_endere)
)

CREATE TABLE Gera (
Id_pedidos SERIAL NOT NULL,
id_vendas SERIAL NOT NULL,
FOREIGN KEY(Id_pedidos) REFERENCES Pedidos (Id_pedidos),
FOREIGN KEY(id_vendas) REFERENCES Vendas (id_vendas)
)

CREATE TABLE Prepara (
Id_pedidos SERIAL NOT NULL,
RE_Func INT,
FOREIGN KEY(Id_pedidos) REFERENCES Pedidos (Id_pedidos),
FOREIGN KEY(RE_Func) REFERENCES Funcionarios (RE_Func)
)

CREATE TABLE Solicita (
Id_pedidos SERIAL NOT NULL,
cpf_cliente VARCHAR(14)  NOT NULL,
FOREIGN KEY(Id_pedidos) REFERENCES Pedidos (Id_pedidos),
FOREIGN KEY(cpf_cliente) REFERENCES Clientes (cpf_cliente)
)

ALTER TABLE Fornecedores ADD FOREIGN KEY(id_prod) REFERENCES Produtos (id_prod)
