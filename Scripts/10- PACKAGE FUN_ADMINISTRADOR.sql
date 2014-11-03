CREATE OR REPLACE PACKAGE FUN_ADMINISTRADOR AS

PROCEDURE INSERTAR_RAZA(DESCRIPCION IN VARCHAR,TIPO1 IN VARCHAR);

PROCEDURE SOLICITUD_CASA_CUNA(id_user in number, taman in varchar2, raza in varchar2, alimento in varchar2);

PROCEDURE ACEPTAR_CASA_CUNA(id_user in number);

PROCEDURE DENEGAR_CASA_CUNA(id_user in number);

END FUN_ADMINISTRADOR;
