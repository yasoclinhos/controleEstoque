Create database db_estoque;
use db_estoque;

create table tb_usuario (
id_usuario int auto_increment primary key,
nm_usuario varchar(45),
dt_nascimento date,
login varchar (45),
senha text,
setor varchar (45)
);