create database tabladinamica;
	use tabladinamica;
	create table t_persona(
		id_persona int auto_increment,
		nombre varchar (50),
		apellido varchar(50),
		email varchar(50),
		telefono varchar(50),
		primary key(id_persona));