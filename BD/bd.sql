CREATE DATABASE dbmineralesAndes;

create table usuarios(

    id int auto_increment,
    nombre varchar(50),
    apellido varchar(50),
    usuario varchar(50),
    pass text(50),
    primary key(id)
);