-- departamento
insert into departamento(nombre) values('Cochabamba');
insert into departamento(nombre) values('La Paz');
insert into departamento(nombre) values('Santa Cruz');
insert into departamento(nombre) values('Sucre');

-- categoria
insert into categoria(nombre) values('Tres Estrellas');
insert into categoria(nombre) values('Cuatro Estrellas');
insert into categoria(nombre) values('Cinco Estrellas');

-- rol
insert into rol(nombre) values('Administrador');
insert into rol(nombre) values('Recepcionista');

-- agencia
insert into agencia(nombre) values('Viajero Club');
insert into agencia(nombre) values('Delicias Tours');
insert into agencia(nombre) values('Tropical Tours');
insert into agencia(nombre) values('Genesis Tours');

-- tipoHabitacion
insert into tipoHabitacion(nombre) values('Suite');
insert into tipoHabitacion(nombre) values('Doble');
insert into tipoHabitacion(nombre) values('Individual');
insert into tipoHabitacion(nombre) values('Matrimonial');
insert into tipoHabitacion(nombre) values('Familiar');

-- departamento
-- Cochabamba
insert into hotel(idDepartamento,nombre,telefono,direccion) 
values (1,'Estelar Cochabamba 1',44356789,'Los pinos Zona Norte Nro 234');

insert into hotel(idDepartamento,nombre,telefono,direccion) 
values (1,'Estelar Cochabamba 2',45678908,'Colombia esquina San Martin Nro 678');

insert into hotel(idDepartamento,nombre,telefono,direccion) 
values (1,'Estelar Cochabamba 3',45678903,'Libertador Nro 456');

insert into hotel(idDepartamento,nombre,telefono,direccion) 
values (1,'Estelar Cochabamba 4',78900001,'Chapare - Villa Tunari');

insert into hotel(idDepartamento,nombre,telefono,direccion) 
values (1,'Estelar Cochabamba 5',47878789,'Chapare - San Isidro');

-- La Paz
insert into hotel(idDepartamento,nombre,telefono,direccion) 
values (1,'Estelar La Paz 1',23456789,'Ballivian Nro 345');

insert into hotel(idDepartamento,nombre,telefono,direccion) 
values (1,'Estelar La Paz 2',24567800,'La Seja Nro 888');

-- Santa Cruz 
insert into hotel(idDepartamento,nombre,telefono,direccion) 
values (1,'Estelar Santa Cruz 1',37878788,'Primer Anillo Nro 890');

-- historialHotel
insert into historialHotel(idHotel,idCategoria,fechaInicio,fechaFin,observaciones,activo)    
values(1,2,'2000-01-14',null,'Con 4 estrellas aprobados',1);


-- Habitaciones - Estelar Cochabamba 1
-- primer piso
-- suite
insert into habitacion (idHotel,idTipoHabitacion,nombre,precio,descripcion) 
values(1,1,'1A-1',700,'Es una habitacion lujosa con una cama amplia de 2 plazas y media, tiene sala donde realizar sus reuniones, las ventanas dan hacia el jardin central contando con una vista agradable hacia la naturaleza.');
-- individual
insert into habitacion (idHotel,idTipoHabitacion,nombre,precio,descripcion) 
values(1,3,'1A-2',300,'Cuenta con una cama de 1 plaza con baño privado....');
insert into habitacion (idHotel,idTipoHabitacion,nombre,precio,descripcion) 
values(1,3,'1A-3',300,'Cuenta con una cama de 1 plaza con baño privado....');
-- doble
insert into habitacion (idHotel,idTipoHabitacion,nombre,precio,descripcion) 
values(1,2,'1A-4',500,'Es una habitacion con dos camas comodas de plaza y media, su bano privado .......');
-- individual
insert into habitacion (idHotel,idTipoHabitacion,nombre,precio,descripcion) 
values(1,3,'1A-5',300,'Cuenta con una cama de 1 plaza con baño privado....');
insert into habitacion (idHotel,idTipoHabitacion,nombre,precio,descripcion) 
values(1,3,'1A-6',300,'Cuenta con una cama de 1 plaza con baño privado....');

-- segundo piso
insert into habitacion (idHotel,idTipoHabitacion,nombre,precio,descripcion)   
values(1,5,'2A-1',1200,'Habitacion para 6 personas, son tres habitaciones cada uno de ellos con 2 camas .......');
insert into habitacion (idHotel,idTipoHabitacion,nombre,precio,descripcion)   
values(1,4,'2A-2',500,'Habitacion para 2 personas, una cama de 2 plazas ...........');
insert into habitacion (idHotel,idTipoHabitacion,nombre,precio,descripcion)   
values(1,5,'2A-3',1200,'Habitacion para 6 personas, son tres habitaciones cada uno de ellos con 2 camas .......');
insert into habitacion (idHotel,idTipoHabitacion,nombre,precio,descripcion)   
values(1,4,'2A-4',500,'Habitacion para 2 personas, una cama de 2 plazas ...........');
insert into habitacion (idHotel,idTipoHabitacion,nombre,precio,descripcion)   
values(1,5,'2A-5',1200,'Habitacion para 6 personas, son tres habitaciones cada uno de ellos con 2 camas .......');

-- tercer piso
insert into habitacion (idHotel,idTipoHabitacion,nombre,precio,descripcion)   
values(1,3,'3A-1',300,'Una habitacion con baño privado .....');
insert into habitacion (idHotel,idTipoHabitacion,nombre,precio,descripcion)   
values(1,3,'3A-2',300,'Una habitacion con baño privado .....');
insert into habitacion (idHotel,idTipoHabitacion,nombre,precio,descripcion)   
values(1,3,'3A-3',300,'Una habitacion con baño privado .....');
insert into habitacion (idHotel,idTipoHabitacion,nombre,precio,descripcion)   
values(1,3,'3A-4',300,'Una habitacion con baño privado .....');
insert into habitacion (idHotel,idTipoHabitacion,nombre,precio,descripcion)   
values(1,3,'3A-5',300,'Una habitacion con baño privado .....');
insert into habitacion (idHotel,idTipoHabitacion,nombre,precio,descripcion)   
values(1,2,'3A-6',500,'Es una habitacion con dos camas comodas de plaza y media .....');
insert into habitacion (idHotel,idTipoHabitacion,nombre,precio,descripcion)   
values(1,2,'3A-7',500,'Es una habitacion con dos camas comodas de plaza y media .....');



-- usuario
-- recepcionistas
insert into usuario(idRol,idHotel,ciUsuario,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,usuario,contrasenia,activo)  
values(2,1,'11-A','Alex','Cristian','Navarro','Ulises','anavarro','anavarro',1);
insert into usuario(idRol,idHotel,ciUsuario,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,usuario,contrasenia,activo)  
values(2,1,'12-A','Ana','Cristina','Soliz','Camacho','asoliz','asoliz',1);
insert into usuario(idRol,idHotel,ciUsuario,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,usuario,contrasenia,activo)  
values(2,1,'13-A','Benjamin','','Duran','','bduran','bduran',1);
-- administrador
insert into usuario(idRol,idHotel,ciUsuario,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,usuario,contrasenia,activo)  
values(1,1,'31','Carlos','','Apaza','','aapaza','aapaza',1);
insert into usuario(idRol,idHotel,ciUsuario,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,usuario,contrasenia,activo)  
values(1,1,'33','Brenda','Cesilia','Panozo','Ontiveros','bpanoso','bpanoso',1);

-- agenteTuristico
-- Viajero Club
insert into agenteTuristico(idAgencia,ciUsuario,primerNombre,apellidoPaterno,activo) 
values(1,'3001','Rolando','Guardia',1);
insert into agenteTuristico(idAgencia,ciUsuario,primerNombre,apellidoPaterno,activo) 
values(1,'3002','Natalia','Cervantes',1);
-- Delicias tours
insert into agenteTuristico(idAgencia,ciUsuario,primerNombre,apellidoPaterno,activo) 
values(2,'3003','Julio','Cervantes',1);
-- Tropical Tours
insert into agenteTuristico(idAgencia,ciUsuario,primerNombre,apellidoPaterno,activo) 
values(3,'3004','Jimmy','Vargas',1);

-- Cliente
-- Familia
insert into cliente(idHotel,ci,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,telefono,genero,fechaNacimiento,activo) 
values(1,'1001','Pedro','','Tarqui','',70780001,'M','1970-09-24',1);

insert into cliente(idHotel,ci,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,telefono,genero,fechaNacimiento,activo) 
values(1,'1002','Amelia','Ignasia','Rosales','Cardozo',70780002,'F','1971-01-09',1);

insert into cliente(idHotel,ci,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,telefono,genero,fechaNacimiento,activo) 
values(1,'1003','Gael','Pedro','Tarqui','Rosales',70780003,'M','1997-07-29',1);
insert into cliente(idHotel,ci,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,telefono,genero,fechaNacimiento,activo) 
values(1,'1004','Javier','Ignasio','Tarqui','Rosales',70780001,'M','1997-07-29',1);

insert into cliente(idHotel,ci,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,telefono,genero,fechaNacimiento,activo) 
values(1,'1005','Karina','Amelia','Tarqui','Rosales',70780001,'F','1999-01-15',1);

insert into cliente(idHotel,ci,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,telefono,genero,fechaNacimiento,activo) 
values(1,'1006','Soraya','','Tarqui','Rosales',70780001,'F','2002-05-20',1);


-- Diferentes Clientes
insert into cliente(idHotel,ci,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,telefono,genero,fechaNacimiento,activo) 
values(1,'2001','Veronica','Lidia','Uriona','Fernandez',60540001,'F','1985-06-27',1);

insert into cliente(idHotel,ci,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,telefono,genero,fechaNacimiento,activo) 
values(1,'2002','Vanesa','','Borda','Lopez',60540002,'F','1979-12-01',1);

insert into cliente(idHotel,ci,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,telefono,genero,fechaNacimiento,activo) 
values(1,'2003','Santiago','Luis','Pineiro','Lazarte',60540003,'M','1980-08-11',1);

insert into cliente(idHotel,ci,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,telefono,genero,fechaNacimiento,activo) 
values(1,'2004','Eliel','','Ramirez','Bustamante',60540004,'M','1985-09-24',1);

insert into cliente(idHotel,ci,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,telefono,genero,fechaNacimiento,activo) 
values(1,'2005','Diana','Sarai','Cardozo','Villanueva',60540004,'F','1982-02-27',1);

-- reserva por agencia de viaje
-- individual, alex navarro, Rolando Guardia(Viajero Club)  
insert into reserva(idHabitacion,idUsuario,idAgenteTuristico,fechaInicio,fechaFin,montoTotal,reservaPersonal,reservaOnline,activo) 
values(12,1,1,'2018-04-12','2018-04-15',900,0,0,0);

insert into reserva(idHabitacion,idUsuario,idAgenteTuristico,fechaInicio,fechaFin,montoTotal,reservaPersonal,reservaOnline,activo) 
values(13,2,1,'2018-06-24','2018-06-26',300,0,0,0);

insert into reserva(idHabitacion,idUsuario,idAgenteTuristico,fechaInicio,fechaFin,montoTotal,reservaPersonal,reservaOnline,activo) 
values(1,2,3,'2018-08-02','2018-08-05',2100,0,0,0);

insert into reserva(idHabitacion,idUsuario,idAgenteTuristico,fechaInicio,fechaFin,montoTotal,reservaPersonal,reservaOnline,activo) 
values(18,1,4,'2018-08-14','2018-08-20',1800,0,0,0);

-- reserva personal con titular: Pedro Tarqui, habitacion familiar
insert into reserva(idHabitacion,idUsuario,idAgenteTuristico,fechaInicio,fechaFin,montoTotal,reservaPersonal,reservaOnline,activo) 
values(9,1,null,'2018-12-22','2018-12-26',4800,1,0,0);
-- reserva personal con titular: Vanesa Borda, habitacion duplex
insert into reserva(idHabitacion,idUsuario,idAgenteTuristico,fechaInicio,fechaFin,montoTotal,reservaPersonal,reservaOnline,activo) 
values(4,2,null,'2019-01-15','2019-01-18',1500,1,0,0);

-- cliente reserva
 /* Veronica id: 7
  Santiago id: 9
  Eliel: 10
  Diana    id: 11*/
-- reservas individuales
insert into clienteReserva(idReserva,idCliente,esTitular) values(1,7,1);
insert into clienteReserva(idReserva,idCliente,esTitular) values(2,9,1);
insert into clienteReserva(idReserva,idCliente,esTitular) values(3,11,1);
insert into clienteReserva(idReserva,idCliente,esTitular) values(4,10,1);

-- reservas familiar y grupo
-- reserva personal con titular , Pedro Tarqui, habitacion familiar
insert into clienteReserva(idReserva,idCliente,esTitular) values(5,1,1);
insert into clienteReserva(idReserva,idCliente,esTitular) values(5,2,0);
insert into clienteReserva(idReserva,idCliente,esTitular) values(5,3,0);
insert into clienteReserva(idReserva,idCliente,esTitular) values(5,4,0);
insert into clienteReserva(idReserva,idCliente,esTitular) values(5,5,0);
insert into clienteReserva(idReserva,idCliente,esTitular) values(5,6,0);

-- Vanesa id:8 
insert into clienteReserva(idReserva,idCliente,esTitular) values(6,8,1);
insert into clienteReserva(idReserva,idCliente,esTitular) values(6,7,0);


DROP PROCEDURE IF EXISTS ListaClientes;

DELIMITER //

CREATE PROCEDURE ListaClientes()
BEGIN
SELECT idCliente, h.nombre as nombreHotel , concat_ws(' ',primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno) as nombreCliente,ci,fechaNacimiento,telefono,if(genero=1,'Femenino','Masaculino')as genero,activo
FROM cliente c INNER JOIN hotel h
ON c.idHotel=h.idHotel
END //

DLIMITER ;


 





 
 







































