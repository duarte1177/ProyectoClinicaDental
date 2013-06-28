
/*==============================================================*/
/* Table: USUARIO                                               */
/*==============================================================*/
create table USUARIO 
(
   RUT_USUARIO          varchar(13)                    not null,
   ID_USUARIO_TIPO_USUARIO integer                     null,
   NOMBRES              varchar(70)                    null,
   APELLIDOS            varchar(70)                    null,
   DIRECCION            varchar(70)                    null,
   TELEFONO             numeric(12)                    null,
   EMAIL                varchar(50)                    null,
   FECHA_NACIMIENTO     date                           null,
   CONTRASENA           varchar(30)                    null,
   constraint PK_USUARIO primary key clustered (RUT_USUARIO)
);




/*==============================================================*/
/* Table: TIPOS_USUARIOS                                        */
/*==============================================================*/
create table TIPOS_USUARIOS 
(
   ID_TIPO_USUARIO      integer                        not null,
   ID_USUARIO_TIPO_USUARIO integer                        null,
   DESCRIPCION          varchar(70)                    null,
   constraint PK_TIPOS_USUARIOS primary key clustered (ID_TIPO_USUARIO)
);


/*==============================================================*/
/* Table: ROL                                                   */
/*==============================================================*/
create table ROL 
(
   ID_ROL               integer                        not null,
   ID_TIPO_USUARIO      integer                        null,
   NOMBRE_ROL           varchar(50)                    null,
   PERMISO              varchar(50)                    null,
   DESCRIPCION          varchar(70)                    null,
   constraint PK_ROL primary key clustered (ID_ROL)
);


/*==============================================================*/
/* Table: USUARIOS_TIPOS_USUARIOS                               */
/*==============================================================*/
create table USUARIOS_TIPOS_USUARIOS 
(
   ID_USUARIO_TIPO_USUARIO integer                        not null,
   ID_USUARIO           integer                        null,
   ID_TIPO_USUARIO      integer                        null,
   constraint PK_USUARIOS_TIPOS_USUARIOS primary key clustered (ID_USUARIO_TIPO_USUARIO)
);


/*==============================================================*/
/* Table: AGENDA                                                */
/*==============================================================*/
create table AGENDA 
(
   ID_AGENDA            integer                        not null,
   ID_PACIENTE          integer                        null,
   ID_ODONTOLOGO        integer                        null,
   ID_DIA               integer                        null,
   HORA_CITA            date                           null,
   constraint PK_AGENDA primary key clustered (ID_AGENDA)
);


/*==============================================================*/
/* Table: DIA                                                   */
/*==============================================================*/
create table DIA 
(
   ID_DIA               integer                        not null,
   ID_AGENDA            integer                        null,
   MES_ID_MES           integer                        null,
   DIA                  date                           null,
   ID_MES               date                           null,
   constraint PK_DIA primary key clustered (ID_DIA)
);


/*==============================================================*/
/* Table: MES                                                   */
/*==============================================================*/
create table MES 
(
   ID_MES               integer                        not null,
   ANI_ID_ANIO          integer                        null,
   MES                  date                           null,
   ID_ANIO              date                           null,
   constraint PK_MES primary key clustered (ID_MES)
);


/*==============================================================*/
/* Table: ANIO                                                  */
/*==============================================================*/
create table ANIO 
(
   ID_ANIO              integer                        not null,
   ANIO                 date                           null,
   constraint PK_ANIO primary key clustered (ID_ANIO)
);


/*==============================================================*/
/* Table: ODONTOGRAMA                                           */
/*==============================================================*/
create table ODONTOGRAMA 
(
   ID_ODONTOGRAMA       integer                        not null,
   ID_FICHA_PACIENTE    integer                        null,
   ID_PIEZA             integer                        null,
   DESCRIPCION          varchar(70)                    null,
   constraint PK_ODONTOGRAMA primary key clustered (ID_ODONTOGRAMA)
);


/*==============================================================*/
/* Table: PIEZAS                                                */
/*==============================================================*/
create table PIEZAS 
(
   ID_PIEZA             integer                        not null,
   ID_LADO              integer                        null,
   DESCRIPCION          varchar(70)                    null,
   constraint PK_PIEZAS primary key clustered (ID_PIEZA)
);


/*==============================================================*/
/* Table: PIEZAS_TRATADAS                                       */
/*==============================================================*/
create table PIEZAS_TRATADAS 
(
   ID_PIEZA_TRATADA     integer                        not null,
   ID_PIEZA             integer                        null,
   DESCRIPCION          varchar(70)                    null,
   constraint PK_PIEZAS_TRATADAS primary key clustered (ID_PIEZA_TRATADA)
);


/*==============================================================*/
/* Table: TRATMIENTOS                                           */
/*==============================================================*/
create table TRATMIENTOS 
(
   ID_TRATAMIENTO       integer                        not null,
   ID_PIEZA_TRATADA     integer                        null,
   DESCRIPCION          varchar(70)                    null,
   constraint PK_TRATMIENTOS primary key clustered (ID_TRATAMIENTO)
);


/*==============================================================*/
/* Table: LADOS                                                 */
/*==============================================================*/
create table LADOS 
(
   ID_LADO              integer                        not null,
   DESCRIPCION          varchar(70)                    null,
   constraint PK_LADOS primary key clustered (ID_LADO)
);


/*==============================================================*/
/* Table: FICHA_PACIENTE                                        */
/*==============================================================*/
create table FICHA_PACIENTE 
(
   ID_FICHA_PACIENTE    integer                        not null,
   ID_VISITA            integer                        null,
   DESCRIPCION          varchar(70)                    null,
   constraint PK_FICHA_PACIENTE primary key clustered (ID_FICHA_PACIENTE)
);


/*==============================================================*/
/* Table: VISITAS                                               */
/*==============================================================*/
create table VISITAS 
(
   ID_VISITA            integer                        not null,
   FECHA_VISITA         date                           null,
   DESCRIPCION          varchar(100)                   null,
   ID_FICHA_PACIENTE    integer                        null,
   constraint PK_VISITAS primary key clustered (ID_VISITA)
);

