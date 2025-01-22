create database crud_estruturado;

use crud_estruturado;

create table usuario (
id int not null auto_increment,
    nome varchar (50) not null,
    cpf char (11) not null,
    fone char (11) not null,
    email varchar (100),
    primary key (id)
);

select * from usuario;
