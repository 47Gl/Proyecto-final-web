CREATE DATABASE Penjamo_opina;
USE Penjamo_opina;
-- Tabla de Usuarios
CREATE TABLE usuarios (
    id INT  auto_increment PRIMARY KEY ,
    nombre VARCHAR(50),
    username varchar (50),
    password  VARCHAR(255)
);

INSERT INTO usuarios (nombre,username,password)
VALUES
('Luis', 'LuisN','mango'),
('Paco','PacoM', 'mangol');


create table administrador(
  id INT  auto_increment PRIMARY KEY ,
    nombre VARCHAR(50),
    username varchar (50),
    password  VARCHAR(255)
    );
    
INSERT INTO administrador (nombre,username,password)
VALUES
('Gustavo', 'Guss','penjamoopina');

CREATE TABLE Opiniones (
    IiOpinion INT auto_increment primary KEY,
    IdUsuario INT,
    IdAdministrador int,
    Comentario varchar(500),
    FOREIGN KEY (IdUsuario) REFERENCES usuarios(id),
    FOREIGN KEY (IdAdministrador) REFERENCES administrador(id)
    );
create table agrego_opinion(
Id_opinion INT auto_increment primary KEY,
inicio varchar (50),
registro datetime
);
CREATE TRIGGER agrego_opinion AFTER INSERT ON Opiniones  FOR EACH ROW INSERT INTO agrego_opinion(Id_opinion, inicio, registro) 
VALUES (new.IiOpinion,new.Comentario,now());

create table Eliminacion_Opinion(
Id_inicio int,
eliminado  datetime
);
CREATE TRIGGER Eliminacion_Opinion BEFORE DELETE ON Opiniones FOR EACH ROW INSERT INTO Eliminacion_Opinion (Id_inicio, eliminado)
VALUES (OLD.IiOpinion, NOW());

create table agrego_administrador(
Id_agrego INT auto_increment primary KEY,
inicio varchar (50),
registro datetime
);
CREATE TRIGGER agrego_administrador AFTER INSERT ON Opiniones  FOR EACH ROW INSERT INTO agrego_administrador(Id_agrego, inicio, registro) 
VALUES (new.IiOpinion,new.Comentario,now());
