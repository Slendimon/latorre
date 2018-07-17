
/*create database latorre;*/
use latorre; 


create table user (
	id int not null auto_increment primary key,
	username varchar(50) not null,
	name varchar(50) not null,
	lastname varchar(50) not null,
	email varchar(255) not null,
	password varchar(60) not null,
	is_active boolean not null default 1,
	is_admin boolean not null default 0,
	created_at datetime
);

insert into user (username,password,is_admin,created_at) value ("admin",sha1(md5("admin")),1,NOW());


/*UPDATE person SET tipo_person=1 WHERE id=5;

UPDATE person SET tipo_person=1 WHERE id=7;

UPDATE person SET tipo_person=1 WHERE id=9;

UPDATE person SET tipo_person=1 WHERE id=10;

UPDATE person SET tipo_person=1 WHERE id=11;

UPDATE person SET tipo_person=1 WHERE id=12;

UPDATE person SET tipo_person=1 WHERE id=13;

UPDATE person SET tipo_person=1 WHERE id=14;

UPDATE person SET tipo_person=1 WHERE id=17;

UPDATE person SET tipo_person=1 WHERE id=18;

UPDATE person SET tipo_person=1 WHERE id=22;

UPDATE person SET tipo_person=1 WHERE id=24;

UPDATE person SET tipo_person=1 WHERE id=28;
*/

create table person(
	id int not null auto_increment primary key,
	image varchar(50),
	name varchar(50) not null,
	lastname varchar(50),
	email varchar(255),
	address varchar(60),
	phone varchar(60),
	canal varchar(60) ,
	turno varchar(60) ,
	tipo_person int not null,
	c1_fullname varchar(100),
	c1_address varchar(100),
	c1_phone varchar(100),
	c1_note varchar(100),
	c2_fullname varchar(100),
	c2_address varchar(100),
	c2_phone varchar(100),
	c2_note varchar(100),
	is_active boolean not null default 1,
	created_at datetime,
	user_id int not null,
	foreign key (user_id) references user(id)
);

/* 1.- Asistencia, 2.- Falta, 3.- Retardo, 4.- Justificacion */
create table assistance(
	id int not null auto_increment primary key,
	kind_id int,
	date_at date not null,
	hour_at time not null,
	person_id int not null,
	user_id int not null,
	foreign key (user_id) references user(id),
	foreign key (person_id) references person(id)
);


create table DocExcel(
	Id int not null primary key,
	Nombre varchar(50) not null,
	Apellido varchar(50) not null,
	Horario varchar(20) not null,
	Estado varchar(10) not null,
	NvoEstado varchar(20) not null,
	Excepcion varchar(30) not null
);
 CREATE TRIGGER `nuevosalum` AFTER INSERT ON `docexcel`
 FOR EACH ROW INSERT INTO person(id, name, lastname,user_id) VALUES (NEW.Id, NEW.Nombre, NEW.Apellido, 1);


 CREATE TABLE horario_torre(
  id_h int(11) NOT NULL auto_increment primary key,
  hora_entr time NOT NULL,
  hora_sal time NOT NULL
 );
 INSERT INTO `horario_torre` (`id_h`, `hora_entr`, `hora_sal`) VALUES
(1, '07:00:00', '18:00:00');

