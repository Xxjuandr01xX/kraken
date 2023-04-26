CREATE TABLE core_empresa(
    id                      int              not null primary key auto_increment,
    codigo                  varchar(10)      not null,
    nombre                  varchar(80)      not null,
    rif                     varchar(40)      not null,
    direccion               text             not null,
    monedas                 text             not null,
    nro_telefonos           varchar(20)      not null,
    e_mail                  varchar(80)      not null,
    nombre_propietario      varchar(100)     not null,
    cedula_propietario      varchar(20)      not null,
    direccion_propietario   text             not null,
    logo_empresa            varchar(25)      not null
)ENGINE=INNODB;


CREATE TABLE core_roles(
    id                      int             not null primary key auto_increment,
    desc_rol                varchar(20)     not null
)ENGINE=INNODB

INSERT INTO pay_roles VALUES(null, 'ADM');
INSERT INTO pay_roles VALUES(null, 'NOR');
INSERT INTO pay_roles VALUES(null, 'AFL');
INSERT INTO pay_roles VALUES(null, 'CLI');

CREATE TABLE core_persona(
    id                      int             not null primary key auto_increment,
    nombre_usr              varchar(80)     not null,
    apellido_usr            varchar(80)     not null,
    correo                  varchar(80)     not null,
    telf                    varchar(80)     not null,
    direccion               text            not null,
    fec_nac                 date            not null
)ENGINE=INNODB;

INSERT INTO core_persona VALUES(null, 'JUAN DIEGO', 'RINCON URDANETA', 'jd.rincon021@gmail.com', '+584146801859', 'SECTOR MACANDONA 2', '1994-12-13');

CREATE TABLE core_usuarios(
    id                      int             not null primary key auto_increment,
    nom_usr                 varchar(20)     not null,
    pas_user                varchar(25)     not null,
    id_rol_fk               int             not null,
    id_persona_fk           int             not null
)ENGINE=INNODB;

INSERT INTO core_usuarios VALUES(null, 'admin', PASSWORD('12345678'), 1, 1);

CREATE TABLE core_modulos(
    id                      int             not null primary key auto_increment,
    cod_modulo              varchar(10)     not null,
    nombre_modulo           varchar(20)     not null,
    descripcion_modulo      text            not null,
    img_modulo              varchar(25)     not null,
    ind_install_modulo      boolean         not null
)ENGINE=INNODB;

INSERT INTO core_modulos VALUES(null, '0000000001', 'CONFIGURACION', 'Modulo de configuracion general del sistema.', '###', 1);