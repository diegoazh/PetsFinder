CREATE TRIGGER before_update_mascota_en
 BEFORE UPDATE
 ON ad.mascota_encontrada for each row
 BEGIN
   :new.fecha_ultima_mod := SYSDATE;
   :new.usuario_ultima_mod := USER;
 END;
 
CREATE TRIGGER before_insert_mascota_en
 BEFORE INSERT
 ON ad.mascota_encontrada for each row
 BEGIN
   :new.CREADO_POR := USER;
   :new.FECHA_CREACION := SYSDATE;
   :new.fecha_ultima_mod := SYSDATE;
   :new.usuario_ultima_mod := USER;
   BITACORA.set_datos(TABLAN => 'Mascota_Encontrada', NONCAMPO => 'Nuevo Registro', VALOR_ANT => '', VALOR_NEW => '' );
 END;

CREATE TRIGGER before_update_mascota_per
 BEFORE UPDATE
 ON ad.mascota_perdida for each row
 BEGIN
   :new.fecha_ultima_mod := SYSDATE;
   :new.usuario_ultima_mod := USER;
 END;
 
CREATE TRIGGER before_insert_mascota_per
 BEFORE INSERT
 ON ad.mascota_perdida for each row
 BEGIN
   :new.CREADO_POR := USER;
   :new.FECHA_CREACION := SYSDATE;
   :new.fecha_ultima_mod := SYSDATE;
   :new.usuario_ultima_mod := USER;
 END;



