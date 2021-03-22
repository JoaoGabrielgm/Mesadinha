create database trabalhointer;
use trabalhointer;

create table movimentacao (
id int unsigned not null auto_increment primary key,
contadescricao varchar(100) not null,
clienteid int unsigned not null,
foreign key (contadescricao) references conta(descricao),
foreign key (clienteid) references cliente(id),
dia date,
quantia double (9,2) not null,
nome varchar(100) not null
);

create table cliente  (
id int unsigned not null auto_increment primary key,
nome varchar(100) not null,
telefone varchar(80) not null,
endereco varchar (100) not null,
email varchar(100) not null,
senha varchar (50) not null,
saldo int null
);

create table conta (
descricao varchar(100) not null primary key,
categorianome varchar(100) not null,
foreign key(categorianome) references categoria(nome),
tipo varchar(50) not null
);

create table categoria (
nome varchar(100) not null primary key
);

insert into cliente(id,nome,telefone,endereco,email,senha,saldo)values(null,"joao","9999","rua 1","joao@joao","123",null);
select * from cliente;