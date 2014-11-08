CREATE OR REPLACE PACKAGE BODY BITACORA AS

PROCEDURE set_datos(TABLAN IN VARCHAR2,NONCAMPO IN VARCHAR2,
   VALOR_ANT IN VARCHAR2, VALOR_NEW IN VARCHAR2) AS
BEGIN
  INSERT INTO AD_BITACORA(BITACORA_ID, NOM_ESQUEMA, NOM_TABLA, NOM_CAMPO,
   FEC_CAMBIO, VALOR_ANTERIOR, VALOR_ACTUAL)

  VALUES(s_bitacora.nextval, USER, TABLAN, NONCAMPO,SYSDATE,VALOR_ANT, VALOR_NEW);
  END set_datos;

END BITACORA;
