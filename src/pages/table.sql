create table usuario (
  cod_usuario not null primary key AUTO_INCREMENT,
  email varchar(255),
  senha varchar(255),
  administrator boolean,
  username varchar(255),
  posts int,
  bio varchar(255),
  data_nascimento date,
  telefone varchar(255),
  image text
)