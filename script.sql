create database projeto2;

use projeto2;

create table cliente( 
    idcliente int primary key auto_increment,
    nome varchar(50) not null,
    email varchar(50) not null,
    telefone varchar(20) not null,
    dtcadastro date
);
insert into cliente values (
    null,'ana','ana@gmail.com','2222-2222', '2022-12-17'
);
select * from cliente;