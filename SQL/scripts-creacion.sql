CREATE TABLE incidencias
(
    id int NOT NULL AUTO_INCREMENT,
    codigo varchar(13) not null,
    beneficiario varchar(20),
    mtcn int,
    monto numeric(12,2),
    destino varchar(20),
    observaciones varchar(200),
    id_agente int NOT null,
    id_operador int,
    id_estado int not null,
    id_tipo int not null,
    id_apertura int not null,
    PRIMARY KEY(id, codigo)
);

CREATE TABLE tipo_incidencia
(
    id int not null AUTO_INCREMENT,
    codigo varchar(2) not null,
    descripcion varchar(20),
    PRIMARY KEY (id, codigo)
);
    
INSERT into tipo_incidencia VALUES
(1,'R', 'Reclamo'),
(2,'C', 'Consulta');

CREATE TABLE aperturas
(
    id int not null AUTO_INCREMENT,
    codigo varchar(20) not null,
    descripcion varchar(50),
    isActivo boolean,
    PRIMARY KEY(id, codigo)
);


    