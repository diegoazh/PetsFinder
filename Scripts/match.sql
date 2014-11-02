SELECT e.ESTADO, e.ID_MASCOTA, e.NOMBRE, e.TAMANO, e.COLOR, e.CHIP_IDENTIFICACION, p.ESTADO, p.ID_MASCOTA, p.NOMBRE, p.TAMANO, p.COLOR
FROM MASCOTAS_PERDIDAS P, MASCOTAS_ENCONTRADAS E, RAZA R
WHERE P.TAMANO = E.TAMANO AND P.TIPO_Y_RAZA = E.TIPO_Y_RAZA and p.COLOR = e.COLOR and E.TIPO_Y_RAZA = R.ID_RAZA and P.TIPO_Y_RAZA = R.ID_RAZA
