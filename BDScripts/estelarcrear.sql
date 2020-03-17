drop database estelar;
create database estelar;
USE estelar;

create table departamento(
idDepartamento int AUTO_INCREMENT PRIMARY KEY,
nombre varchar(20) UNIQUE
)ENGINE=InnoDB;

create table categoria(
idCategoria int AUTO_INCREMENT PRIMARY KEY,
nombre varchar(20) UNIQUE
)ENGINE=InnoDB;

create table rol(
idRol int AUTO_INCREMENT PRIMARY KEY,
nombre varchar(20) UNIQUE
)ENGINE=InnoDB;

create table agencia(
idAgencia int AUTO_INCREMENT PRIMARY KEY,
nombre varchar(20) UNIQUE
)ENGINE=InnoDB;

create table tipoHabitacion(
idTipoHabitacion int AUTO_INCREMENT PRIMARY KEY,
nombre varchar(20) UNIQUE
)ENGINE=InnoDB;

create table hotel(
idHotel int AUTO_INCREMENT PRIMARY KEY,
idDepartamento int not null,
nombre VARCHAR(20) UNIQUE,
telefono int NOT NULL, 
direccion VARCHAR(120),
FOREIGN KEY(idDepartamento) REFERENCES departamento(idDepartamento) ON UPDATE CASCADE ON DELETE CASCADE
)ENGINE=InnoDB;

create table historialHotel(
idHistorialHotel int AUTO_INCREMENT PRIMARY KEY,
idHotel int not null,
idCategoria int not null,
fechaInicio date not null,
fechaFin date,
observaciones text not null,
activo bool not null,
FOREIGN KEY(idHotel) REFERENCES hotel(idHotel) ON UPDATE CASCADE ON DELETE CASCADE,
FOREIGN KEY(idCategoria) REFERENCES categoria(idCategoria) ON UPDATE CASCADE ON DELETE CASCADE
)ENGINE=InnoDB;


create table usuario(
idUsuario int AUTO_INCREMENT PRIMARY KEY,
idRol int not null,
idHotel int not null,
ciUsuario VARCHAR(15) UNIQUE,
primerNombre VARCHAR(15) NOT NULL, 
segundoNombre VARCHAR(15), 
apellidoPaterno VARCHAR(15) NOT NULL, 
apellidoMaterno VARCHAR(15),
usuario VARCHAR(20) NOT NULL, 
contrasenia VARCHAR(20) NOT NULL, 
activo bool NOT NULL,
FOREIGN KEY(idRol) REFERENCES rol(idRol) ON UPDATE CASCADE ON DELETE CASCADE,
FOREIGN KEY(idHotel) REFERENCES hotel(idHotel) ON UPDATE CASCADE ON DELETE CASCADE
)ENGINE=InnoDB;

create table cliente(
idCliente int AUTO_INCREMENT PRIMARY KEY,
idHotel int not null,
ci VARCHAR(15) UNIQUE,
primerNombre VARCHAR(15) NOT NULL, 
segundoNombre VARCHAR(15), 
apellidoPaterno VARCHAR(15) NOT NULL, 
apellidoMaterno VARCHAR(15),
telefono int not null,
genero ENUM('F','M') not null,
fechaNacimiento date not null,
activo bool NOT NULL,
FOREIGN KEY(idHotel) REFERENCES hotel(idHotel) ON UPDATE CASCADE ON DELETE CASCADE
)ENGINE=InnoDB;

create table agenteTuristico(
idAgenteTuristico int AUTO_INCREMENT PRIMARY KEY,
idAgencia int not null,
ciUsuario VARCHAR(15) UNIQUE,
primerNombre VARCHAR(15) NOT NULL, 
segundoNombre VARCHAR(15), 
apellidoPaterno VARCHAR(15) NOT NULL, 
apellidoMaterno VARCHAR(15),
activo bool NOT NULL,
FOREIGN KEY(idAgencia) REFERENCES agencia(idAgencia) ON UPDATE CASCADE ON DELETE CASCADE
)ENGINE=InnoDB;

create table habitacion(
idHabitacion int AUTO_INCREMENT PRIMARY KEY,
idHotel int not null,
idTipoHabitacion int not null,
nombre VARCHAR(15) UNIQUE,
precio float not null,
descripcion BLOB,
FOREIGN KEY(idTipoHabitacion) REFERENCES tipoHabitacion(idTipoHabitacion) ON UPDATE CASCADE ON DELETE CASCADE,
FOREIGN KEY(idHotel) REFERENCES hotel(idHotel) ON UPDATE CASCADE ON DELETE CASCADE
)ENGINE=InnoDB;

create table reserva(
idReserva int AUTO_INCREMENT PRIMARY KEY,
idHabitacion int not null,
idUsuario int not null,
idAgenteTuristico int,
fechaInicio date not null,
fechaFin date not null,
montoTotal float not null,
reservaPersonal bool not null, -- para saber si fue por agencia o de manera personal
reservaOnline bool not null,
activo bool NOT NULL,
FOREIGN KEY(idHabitacion) REFERENCES habitacion(idHabitacion) ON UPDATE CASCADE ON DELETE CASCADE,
FOREIGN KEY(idUsuario) REFERENCES usuario(idUsuario) ON UPDATE CASCADE ON DELETE CASCADE,
FOREIGN KEY(idAgenteTuristico) REFERENCES agenteTuristico(idAgenteTuristico) ON UPDATE CASCADE ON DELETE CASCADE
)ENGINE=InnoDB;

create table clienteReserva(
idReserva int not null,
idCliente int not null,
esTitular bool NOT NULL,
FOREIGN KEY(idReserva) REFERENCES reserva(idReserva) ON UPDATE CASCADE ON DELETE CASCADE,
FOREIGN KEY(idCliente) REFERENCES cliente(idCliente) ON UPDATE CASCADE ON DELETE CASCADE
)ENGINE=InnoDB;

CREATE TABLE distribucionCliente(
idCliente INT NOT NULL,
idHotel INT not null,
FOREIGN KEY(idCliente) REFERENCES cliente(idCliente) ON UPDATE CASCADE ON DELETE CASCADE,
FOREIGN KEY(idHotel) REFERENCES hotel(idHotel) ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=InnoDB;
