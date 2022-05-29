CREATE TABLE PRODUCTO(
   codpro int not null AUTO_INCREMENT,
   nompro varchar(50) null,
   despro varchar(100) null,
   prepro numeric(6,3) null,
   estado int null,
   rutimapro varchar(100) null,
   CONSTRAINT pk_producto
   PRIMARY KEY (codpro)
);

INSERT INTO PRODUCTO (nompro,despro,prepro,estado,rutimapro)
VALUES ('Mustard Intenze',
'Pigmento marca Intenze en presentaci&oacute;n de 1 onza en tonalidad Mustard Intenze',
'28.200',1,'intenze-ta.jpg'),
('Midnight Green Intenze','Intenze Tattoo Ink de 1 onza tonalidad Midnight green intenze',
'28.200',1,'bight-red-intenze.jpg'),
('Dragon Green Intenze','Intenze Tattoo Ink de 1 onza',
'28.200',1,'dragon-green-intenze.jpg'),
('Grasshopper Green Intenze','Intenze Tattoo Ink de 1 onza',
'28.200',1,'grasshopper-greenn.jpg'),
('Creamsicle Intenze','Pigmento marca Intenze en presentac&oacute;n de 1 onza en tonalidad Creamsicle Intenze',
'28.200',1,'intenze-tan.jpg');

CREATE TABLE USUARIO(
  codusu int not null AUTO_INCREMENT,
  nomusu varchar(50) ,
  apeusu varchar(50) ,
  emausu varchar(50) not null,
  pasusu varchar(20) not null,
  estado int not null,
  CONSTRAINT pk_usuario
  PRIMARY KEY (codusu)
);

INSERT INTO USUARIO (nomusu,apeusu,emausu,pasusu,estado)
VALUES ('Usuario','Demo','correo@example.com','123456',1);

create table PEDIDO(
  codped int not null AUTO_INCREMENT,
  codusu int not null,
  codpro int not null,
  fecped datetime not null,
  estado int not null,
  dirusuped varchar(50) not null,
  telusuped varchar(12) not null,
  PRIMARY KEY (codped)
);