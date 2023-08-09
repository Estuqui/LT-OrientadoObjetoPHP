create table contatos (
    id int not null auto_increment primary key, 
    nomecompleto varchar(100) not null,
    email varchar(100) not null,
    telefone varchar(15) not null
);