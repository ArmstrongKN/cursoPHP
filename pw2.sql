create database pw2;
use pw2;

CREATE TABLE  tb_aluno (
  RA int (5),
  nome varchar(50) ,
  nota1 int(5), 
  nota2 int(5), 
  nota3 int(5), 
  nota4 int(5),
  Faltas int(5),
  media float(5)

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tb_aluno VALUES (1,'Ana Lucia',90,90,90,90,1,90);
INSERT INTO tb_aluno VALUES (2,'Maria Clara',90,90,70,70,10,80);
INSERT INTO tb_aluno VALUES (3,'Marcos Paulo',80,80,90,70,19,80);
INSERT INTO tb_aluno VALUES (4,'Luiz Fernando',80,80,90,90,6,85);
INSERT INTO tb_aluno VALUES (5,'Pedro Cardozo',60,70,70,60,18,65);
select * from tb_aluno;

CREATE TABLE registro (
  email varchar(50),
  senha int(4)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tb_aluno VALUES ('teste@teste',1234);