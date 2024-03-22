

CREATE TABLE cadfun(
CODFUN int NOT NULL PRIMARY KEY,
NOME VARCHAR(40) NOT NULL,
DEPTO CHAR(2),
FUNCAO CHAR(20),
SALARIO NUMERIC (10,2),
FILHOS int
);

INSERT INTO cadfun (CODFUN, NOME, DEPTO, FUNCAO, SALARIO, FILHOS)

VALUES 
(12, 'CARLOS ALBERTO', '3', 'VENDEDOR', 1530.0, 2),
(15, 'MARCOS HENRIQUE', '2', 'GERENTE', 1985.75, 1),
(7, 'APARECIDA SILVA', '3', 'SECRETARIA', 1200.50, 3),
(9, 'SOLANGE PACHECO', '5', 'SUPERVISORA', 1599.51, 2),
(6, 'MARCELO SOUZA', '3', 'ANALISTA', 2250.11, 0),
(2, 'WILSON DE MACEDO', '3', 'PROGRAMADOR', 1050.00, 1),
(5, 'AUGUSTO SOUZA', '3', 'PROGRAMADOR', 1050.00, 2),
(4, 'CARLOS BASTOS', '5', 'VENDEDOR', 1530.00, 1),
(25, 'PEDRO SILVA', '3', 'SUPERVISOR', 1599.51, 4),
(3, 'ANA BASTOS', '5', 'VENDEDORA', 1530.00, 2),
(10, 'PAULO DA SILVA', '2', 'VENDEDOR', 1530.00, 3);


--Exercicio 1
--select CODFUN, NOME, SALARIO+250 from cadfun ;
--OU
--select CODFUNM, NOME, SALARIO + 250 AS PROJECAO_SALARIAL FORM CADFUN;

--Exercicio 2
--select * from cadfun where FUNCAO = 'ANALISTA';
  
  --Exercicio 3 
--select * from cadfun where SALARIO > 1700;
  
  --Exercicio 4
--select * from cadfun where SALARIO < 1700;
  
  --Exercicio 5
--select * from cadfun where SALARIO = 1700;

  --Exercicio 6
  --select * from cadfun where  FUNCAO = 'PROGRAMADOR' or FUNCAO = 'ANALISTA';
  --OU
  --select * from cadfun where  FUNCAO IN ('PROGRAMADOR' ,'ANALISTA');

  --Exercicio 7
 -- select * from cadfun where  FUNCAO = 'PROGRAMADOR' or FUNCAO = 'ANALISTA' and SALARIO>1200;
  
  --Exercicio 8
  --select * from cadfun where not FUNCAO = 'PROGRAMADOR' or FUNCAO = 'ANALISTA';
    --OU
  --select * from cadfun where FUNCAO != 'PROGRAMADOR' AND 'ANALISTA' ORDER BY FUNCAO; 
  
  --Exercicio 9
  --select * from cadfun where FILHOS > 2 and FILHOS<4;
  --OU
  --select * from cadfun where FILHOS 2 BETWEEN 4;

   
  --Alter TABLE cadfun ADD COLUMN FILHOS int;
  
  --Exercicio 10
  --select Nome, SALARIO*1.25 from cadfun ;
  
  --Exercicio 11
  --select * from cadfun where FILHOS BETWEEN 2 AND 4 AND SALARIO<2000;
  
  --Exercicio 12
  --select * from cadfun where FILHOS<2 or FILHOS>3;
  
  --Exercicio 13
  --select * from cadfun where FILHOS != 0 and FILHOS<2 or FILHOS>3;

  --Exercicio 14
  --select * from cadfun where FILHOS IN (2,3);





















