create database db_projeto;

use db_projeto;

CREATE TABLE users (

	id int(11) NOT NULL AUTO_INCREMENT,

	username varchar(255) not null unique,

	password varchar(255) not null,

	PRIMARY KEY (`id`)

) ;

create table produtos(
	id int auto_increment not null,
    nome_produto varchar(200),
    preco varchar(200),
    Codigo_de_Barras double,
    quantidade int,
    lote varchar(200),
    validade varchar(200),
    primary key(id)
);

UPDATE users set password=123 where id=1;

insert into users(username,password) values ('yaso','123');


select * from users;

select * from produtos;

