CREATE OR REPLACE PACKAGE CONSULTAS AS

FUNCTION VALIDA_USUARIO(USUARIO1 IN VARCHAR2, CONTRASENA1 IN VARCHAR2) RETURN BOOLEAN;

END CONSULTAS;
