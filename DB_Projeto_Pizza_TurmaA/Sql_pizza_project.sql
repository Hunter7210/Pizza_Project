
CREATE TABLE Cliente (
RG varchar(20) not null PRIMARY KEY,
endereco varchar(255),
nome varchar(255),
telefone varchar(20)
);

CREATE TABLE Pedido (
numero int not null PRIMARY KEY,
total Money,
data DATE,
RG varchar(20) not null,
FOREIGN KEY(RG) REFERENCES Cliente (RG)
);

CREATE TABLE Produto (
codigo int not null PRIMARY KEY,
nome varchar(255),
preco money,
estoque int
);

CREATE TABLE ContemPedido_Produto (
codigo int not null,
numero int not null,
quantidade int,
FOREIGN KEY(codigo) REFERENCES Produto (codigo),
FOREIGN KEY(numero) REFERENCES Pedido (numero)
);

select * FROM Cliente;
select * FROM Pedido;
select * FROM Produto;
select * FROM ContemPedido_Produto;























