

CREATE TABLE cadfun(
CODFUN int NOT NULL PRIMARY KEY,
NOME VARCHAR(40) NOT NULL,
DEPTO CHAR(2),
FUNCAO CHAR(20),
SALARIO NUMERIC (10,2)
);

INSERT INTO cadfun (CODFUN, NOME, DEPTO, FUNCAO, SALARIO)

VALUES (12, 'CARLOS ALBERTO','3', 'VENDEDOR',1530.0),
(15,'MARCOS HENRIQUE', '2', 'GERENTE', 1985.75),
(7, 'APARECIDA SILVA', '3', 'SECRETARIA', 1200.50),
(9, 'SOLANGE PACHECO', '5', 'SUPERVISORA', 1599.51 ),
(6, 'MARCELO SOUZA', '3', 'ANALISTA', 2250.11),
(2, 'WILSON DE MACEDO', '3', 'PROGRAMADOR', 1050.00),
(5, 'AUGUSTO SOUZA', '3', 'PROGRAMADOR', 1050.00),
(4, 'CARLOS BASTOS', '5', 'VENDEDOR', 1530.00),
(25,'PEDRO SILVA', '3', 'SUPERVISOR', 1599.51),
(3, 'ANA BASTOS', '5', 'VENDEDORA', 1530.00),
(10, 'PAULO DA SILVA', '2', 'VENDEDOR', 1530.00);

--Select
--select CODFUN,NOME from cadfun;
--select FUNCAO from cadfun;
--select NOME,FUNCAO,DEPTO from cadfun;



--Select com condicionais

--select nome,SALARIO from cadfun where CODFUN = 1;

--select nome,SALARIO from  cadfun
--where FUNCAO = 'PROGRAMADOR';


--select nome,SALARIO from  cadfun 
--where SALARIO < 1500 and DEPTO = '3';

--select nome,SALARIO from  cadfun
--where SALARIO < 1500 or DEPTO = '3';


--CLAUSULA DISTINCT
--select SALARIO from cadfun;
--select DISTINCT SALARIO from cadfun;

--select DEPTO from cadfun;
--select DISTINCT DEPTO from  cadfun;

--CLAUSULA ORDER BY (ORDENALÇAO DE CONSULTAS)
--select nome,SALARIO from cadfun ORDER by nome asc;

--select nome,SALARIO from cadfun
--ORDER by SALARIO desc;

--select * from cadfun
--ORDER by nome;

--select nome,FUNCAO, DEPTO from cadfun ORDER by FUNCAO,DEPTO, nome desc; 

--select NOME FROM cadfuN where CODFUN =2 ORDER BY NOME;



--CLAUSULA limit
select NOME, SALARIO FROM cadfuN ORDER by NOME limit 3;


select NOME,SALARIO FROM cadfuN ORDER by NOME limit 3 offset 3;


























