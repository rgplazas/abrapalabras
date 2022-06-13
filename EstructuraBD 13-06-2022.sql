/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.5.12-MariaDB-cll-lve : Database - u604865879_notic
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`u604865879_notic` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;

USE `u604865879_notic`;

/*Table structure for table `autor` */

DROP TABLE IF EXISTS `autor`;

CREATE TABLE `autor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(120) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COMMENT='Tabla Situaciones';

/*Table structure for table `dolarHoy` */

DROP TABLE IF EXISTS `dolarHoy`;

CREATE TABLE `dolarHoy` (
  `id_dolarHoy` int(11) NOT NULL AUTO_INCREMENT,
  `dolarCompra` varchar(120) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dolarVenta` varchar(120) NOT NULL,
  `fechaHoraActualizacion` datetime NOT NULL,
  `activo` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_dolarHoy`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COMMENT='Tabla Situaciones';

/*Table structure for table `editorialColumnistaEntrevista_multimedia` */

DROP TABLE IF EXISTS `editorialColumnistaEntrevista_multimedia`;

CREATE TABLE `editorialColumnistaEntrevista_multimedia` (
  `id_eCEMultimedia` int(11) NOT NULL AUTO_INCREMENT,
  `id_editorialColumnistaEntrevista` int(11) NOT NULL,
  `id_tipoMultimedia` int(11) NOT NULL COMMENT '1:imagen 2:video 3:otros',
  `contenido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `epigrafe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'pie de la imagen o video',
  `activo` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_eCEMultimedia`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `editorial_columnistas_entrevista` */

DROP TABLE IF EXISTS `editorial_columnistas_entrevista`;

CREATE TABLE `editorial_columnistas_entrevista` (
  `id_editorialColumnistaEntrevista` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_editorialColumnaEntrevista` datetime NOT NULL,
  `seccion` int(11) NOT NULL,
  `subseccion` int(11) NOT NULL,
  `destacado` int(11) NOT NULL DEFAULT 0 COMMENT '0: nada 1: menu derecha',
  `titulo` varchar(220) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `copete` text NOT NULL,
  `texto` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_autor` int(11) NOT NULL,
  `orden` int(11) NOT NULL,
  `cant_click` bigint(20) NOT NULL DEFAULT 0,
  `activo` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_editorialColumnistaEntrevista`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COMMENT='Tabla multimedia';

/*Table structure for table `noticias` */

DROP TABLE IF EXISTS `noticias`;

CREATE TABLE `noticias` (
  `id_noticia` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_noticias` datetime NOT NULL,
  `seccion` int(11) NOT NULL,
  `subseccion` int(11) NOT NULL,
  `destacado` int(11) NOT NULL DEFAULT 0 COMMENT '0:nada 1:primicia 2:principal 3: menu izquierdo',
  `volanta` text NOT NULL,
  `titulo` varchar(220) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `copete` text NOT NULL,
  `texto` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fuente` varchar(220) NOT NULL,
  `orden` int(11) NOT NULL,
  `cant_click` bigint(20) NOT NULL DEFAULT 0,
  `activo` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_noticia`),
  FULLTEXT KEY `idx_titulo` (`titulo`)
) ENGINE=InnoDB AUTO_INCREMENT=245 DEFAULT CHARSET=utf8 COMMENT='Tabla multimedia';

/*Table structure for table `noticias_etiqueta` */

DROP TABLE IF EXISTS `noticias_etiqueta`;

CREATE TABLE `noticias_etiqueta` (
  `id_noticiaEtiqueta` int(11) NOT NULL AUTO_INCREMENT,
  `id_noticia` int(11) NOT NULL,
  `etiquetaDescripcion` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `baja` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_noticiaEtiqueta`),
  KEY `idx_noticia` (`id_noticia`),
  KEY `idx_activo` (`activo`),
  KEY `idx_baja` (`baja`),
  FULLTEXT KEY `idx_etiquetaDescripcion` (`etiquetaDescripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `noticias_multimedia` */

DROP TABLE IF EXISTS `noticias_multimedia`;

CREATE TABLE `noticias_multimedia` (
  `id_noticiasMultimedia` int(11) NOT NULL AUTO_INCREMENT,
  `id_noticia` int(11) NOT NULL,
  `id_tipoMultimedia` int(11) NOT NULL COMMENT '1:imagen 2:video 3:otros',
  `contenido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `epigrafe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'pie de la imagen o video',
  `activo` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_noticiasMultimedia`)
) ENGINE=InnoDB AUTO_INCREMENT=205 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `seccion` */

DROP TABLE IF EXISTS `seccion`;

CREATE TABLE `seccion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(120) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='Tabla Situaciones';

/*Table structure for table `seccion_publicidad` */

DROP TABLE IF EXISTS `seccion_publicidad`;

CREATE TABLE `seccion_publicidad` (
  `id_noticiasMultimedia` int(11) NOT NULL AUTO_INCREMENT,
  `id_seccion` int(11) NOT NULL,
  `contenido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linck` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orden` int(11) NOT NULL,
  `activo` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_noticiasMultimedia`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `sub_seccion` */

DROP TABLE IF EXISTS `sub_seccion`;

CREATE TABLE `sub_seccion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(120) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='Tabla Situaciones';

/*Table structure for table `vadt_ci_sessions` */

DROP TABLE IF EXISTS `vadt_ci_sessions`;

CREATE TABLE `vadt_ci_sessions` (
  `id` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT 0,
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `vadt_usuarios` */

DROP TABLE IF EXISTS `vadt_usuarios`;

CREATE TABLE `vadt_usuarios` (
  `id_usuario` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del Usuario',
  `nombreUsuario` varchar(100) NOT NULL COMMENT 'Nombre de usuario que se le asignara al usuario (Es recomendable que sea alfabético y no el DNI por cuestiones de protección de datos personales)',
  `contrasenia` varchar(100) NOT NULL COMMENT 'Contraseña que generada por el Usuario',
  `id_perfil` int(11) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1 COMMENT 'estado del usuario: 1 Activo y 0 no Activo',
  PRIMARY KEY (`id_usuario`),
  KEY `idx_nombreUsuario` (`nombreUsuario`),
  KEY `idx_contrasenia` (`contrasenia`),
  KEY `idx_activo` (`activo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/* Procedure structure for procedure `Proc_ActualizarDolarHoy` */

/*!50003 DROP PROCEDURE IF EXISTS  `Proc_ActualizarDolarHoy` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`u604865879_abra`@`%` PROCEDURE `Proc_ActualizarDolarHoy`(in input_DolarCompra varchar(50), in input_DolarVenta varchar(50), IN input_fechaHoraActual datetime)
    READS SQL DATA
BEGIN
START TRANSACTION;
if ((input_DolarCompra != " ") and (input_DolarVenta != " ") AND (input_fechaHoraActual != " ")) then
	SET @actualizarDolar = CONCAT('INSERT INTO u604865879_notic.dolarHoy(dolarCompra, dolarVenta, fechaHoraActualizacion) VALUES (','"',input_DolarCompra,'"',',','"',input_DolarVenta,'"',',','"',input_fechaHoraActual,'"',')'); 
	    PREPARE consultaDolar FROM @actualizarDolar;
	    EXECUTE consultaDolar;
	    DEALLOCATE PREPARE consultaDolar;
	SELECT '1' AS resultado; 
else
SELECT '0' AS resultado;
end if;	 
	
COMMIT;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `Proc_AgregarAutor` */

/*!50003 DROP PROCEDURE IF EXISTS  `Proc_AgregarAutor` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`u604865879_abra`@`%` PROCEDURE `Proc_AgregarAutor`(
IN input_nombreAutor LONGTEXT,  
IN input_contenidoImagen LONGTEXT)
    READS SQL DATA
BEGIN
START TRANSACTION;
if ((input_contenidoImagen != " ")) then
	
	SET @ingresarAutor = CONCAT('INSERT INTO u604865879_notic.autor(nombre, imagen) VALUES (','"',input_nombreAutor,'"',',','"',input_contenidoImagen,'"',')'); 
	PREPARE consultaAutor FROM @ingresarAutor;
	EXECUTE consultaAutor;
	DEALLOCATE PREPARE consultaAutor;
	SELECT '1' AS resultado;
else
SELECT '0' AS resultado;
end if;	 
	
COMMIT;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `Proc_AgregarEditorialColumnaEntrevista` */

/*!50003 DROP PROCEDURE IF EXISTS  `Proc_AgregarEditorialColumnaEntrevista` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`u604865879_abra`@`%` PROCEDURE `Proc_AgregarEditorialColumnaEntrevista`(
in input_fechaHoraActual DATETIME, 
IN input_seccion int(11), 
IN input_subseccion INT(11), 
IN input_contenidoImagen LONGTEXT, 
IN input_contenidoVideo LONGTEXT, 
IN input_titulo LONGTEXT, 
IN input_copete LONGTEXT, 
IN input_texto LONGTEXT, 
IN input_fuente LONGTEXT)
    READS SQL DATA
BEGIN
declare ultimoID longtext;
START TRANSACTION;
if ((input_fechaHoraActual != " ")) then
		
	INSERT INTO u604865879_notic.editorial_columnistas_entrevista(fecha_editorialColumnaEntrevista,seccion,subseccion,destacado,titulo,copete,texto,id_autor,orden) VALUES (input_fechaHoraActual,input_seccion,input_subseccion,0,input_titulo,input_copete,input_texto,input_fuente,0); 
	set ultimoID = last_insert_id();
	IF ((input_contenidoImagen != " ")) THEN
	INSERT INTO u604865879_notic.editorialColumnistaEntrevista_multimedia(id_editorialColumnistaEntrevista,id_tipoMultimedia,contenido) VALUES (ultimoID,1,input_contenidoImagen); 
	end if;
	IF ((input_contenidoVideo != " ")) THEN
	INSERT INTO u604865879_notic.editorialColumnistaEntrevista_multimedia(id_editorialColumnistaEntrevista,id_tipoMultimedia,contenido) VALUES (ultimoID,2,input_contenidoVideo); 
	end if;
	SELECT @id_noticiaUltimoDestacado AS resultado; 
else
SELECT '0' AS resultado;
end if;	 
	
COMMIT;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `Proc_AgregarNoticia` */

/*!50003 DROP PROCEDURE IF EXISTS  `Proc_AgregarNoticia` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`u604865879_abra`@`%` PROCEDURE `Proc_AgregarNoticia`(
in input_fechaHoraActual DATETIME, 
IN input_seccion int(11), 
IN input_subseccion INT(11), 
IN input_destacado INT(11), 
IN input_volanta longtext, 
IN input_contenidoImagen LONGTEXT, 
IN input_contenidoVideo LONGTEXT, 
IN input_titulo LONGTEXT, 
IN input_copete LONGTEXT, 
IN input_texto LONGTEXT, 
IN input_fuente LONGTEXT,
IN input_ordenDestacado LONGTEXT,
in input_etiqueta1 longtext,
IN input_etiqueta2 LONGTEXT,
IN input_etiqueta3 LONGTEXT,
IN input_etiqueta4 LONGTEXT,
IN input_etiqueta5 LONGTEXT,
IN input_etiqueta6 LONGTEXT)
    READS SQL DATA
BEGIN
declare ultimoID longtext;
DECLARE id_noticiaUltimoDestacado LONGTEXT;
START TRANSACTION;
if ((input_fechaHoraActual != " ")) then
	
	SELECT id_noticia INTO id_noticiaUltimoDestacado FROM  u604865879_notic.noticias as n WHERE n.destacado = input_destacado and n.orden = input_ordenDestacado;
	
	UPDATE u604865879_notic.noticias SET destacado = "0", orden = "0" WHERE id_noticia = id_noticiaUltimoDestacado;
	
	INSERT INTO u604865879_notic.noticias(fecha_noticias,seccion,subseccion,destacado,volanta,titulo,copete,texto,fuente,orden) VALUES (input_fechaHoraActual,input_seccion,input_subseccion,input_destacado,input_volanta,input_titulo,input_copete,input_texto,input_fuente,input_ordenDestacado); 
	set ultimoID = last_insert_id();
	IF ((input_contenidoImagen != " ")) THEN
	INSERT INTO u604865879_notic.noticias_multimedia(id_noticia,id_tipoMultimedia,contenido) VALUES (ultimoID,1,input_contenidoImagen); 
	end if;
	IF ((input_contenidoVideo != " ")) THEN
	INSERT INTO u604865879_notic.noticias_multimedia(id_noticia,id_tipoMultimedia,contenido) VALUES (ultimoID,2,input_contenidoVideo); 
	end if;
	IF ((input_etiqueta1 != " ")) THEN
	INSERT INTO u604865879_notic.`noticias_etiqueta`(id_noticia,etiquetaDescripcion) VALUES (ultimoID,input_etiqueta1); 
	END IF;
	IF ((input_etiqueta2 != " ")) THEN
	INSERT INTO u604865879_notic.`noticias_etiqueta`(id_noticia,etiquetaDescripcion) VALUES (ultimoID,input_etiqueta2); 
	END IF;
	IF ((input_etiqueta3 != " ")) THEN
	INSERT INTO u604865879_notic.`noticias_etiqueta`(id_noticia,etiquetaDescripcion) VALUES (ultimoID,input_etiqueta3); 
	END IF;
	IF ((input_etiqueta4 != " ")) THEN
	INSERT INTO u604865879_notic.`noticias_etiqueta`(id_noticia,etiquetaDescripcion) VALUES (ultimoID,input_etiqueta4); 
	END IF;
	IF ((input_etiqueta5 != " ")) THEN
	INSERT INTO u604865879_notic.`noticias_etiqueta`(id_noticia,etiquetaDescripcion) VALUES (ultimoID,input_etiqueta5); 
	END IF;
	IF ((input_etiqueta6 != " ")) THEN
	INSERT INTO u604865879_notic.`noticias_etiqueta`(id_noticia,etiquetaDescripcion) VALUES (ultimoID,input_etiqueta6); 
	END IF;
	SELECT id_noticiaUltimoDestacado AS resultado; 
else
SELECT '0' AS resultado;
end if;	 
	
COMMIT;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `Proc_AgregarPublicidad` */

/*!50003 DROP PROCEDURE IF EXISTS  `Proc_AgregarPublicidad` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`u604865879_abra`@`%` PROCEDURE `Proc_AgregarPublicidad`(
IN input_seccion int(11),  
IN input_contenidoImagen LONGTEXT,
IN input_ordenDestacado LONGTEXT,
IN input_linck LONGTEXT)
    READS SQL DATA
BEGIN
START TRANSACTION;
if ((input_contenidoImagen != " ")) then
	
	SELECT id_noticiasMultimedia INTO @id_noticiasMultimediaUltimo FROM  u604865879_notic.seccion_publicidad as np WHERE np.id_seccion = input_seccion and np.orden = input_ordenDestacado;
	
	UPDATE u604865879_notic.seccion_publicidad SET contenido = input_contenidoImagen, linck = input_linck WHERE id_noticiasMultimedia = @id_noticiasMultimediaUltimo and id_seccion = input_seccion AND orden = input_ordenDestacado;
	
	SELECT @id_noticiasMultimediaUltimo AS resultado; 
else
SELECT '0' AS resultado;
end if;	 
	
COMMIT;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `Proc_EditarEditorialColumnaEntrevista` */

/*!50003 DROP PROCEDURE IF EXISTS  `Proc_EditarEditorialColumnaEntrevista` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`u604865879_abra`@`%` PROCEDURE `Proc_EditarEditorialColumnaEntrevista`(
IN input_id_noticia INT(11),
in input_fechaHoraActual DATETIME, 
IN input_seccion int(11), 
IN input_subseccion INT(11), 
IN input_contenidoImagen LONGTEXT, 
IN input_contenidoVideo LONGTEXT, 
IN input_titulo LONGTEXT, 
IN input_copete LONGTEXT, 
IN input_texto LONGTEXT, 
IN input_fuente LONGTEXT)
    READS SQL DATA
BEGIN
declare ultimoID longtext;
START TRANSACTION;
if ((input_fechaHoraActual != " ")) then

	update u604865879_notic.editorial_columnistas_entrevista set fecha_editorialColumnaEntrevista = input_fechaHoraActual ,seccion = input_seccion ,subseccion = input_subseccion ,titulo = input_titulo ,copete = input_copete ,texto = input_texto ,id_autor = input_fuente  WHERE id_editorialColumnistaEntrevista = input_id_noticia; 

	IF ((input_contenidoImagen != " ")) THEN
	update u604865879_notic.editorialColumnistaEntrevista_multimedia set contenido = input_contenidoImagen WHERE id_editorialColumnistaEntrevista = input_id_noticia; 
	end if;
	IF ((input_contenidoVideo != " ")) THEN
	UPDATE u604865879_notic.editorialColumnistaEntrevista_multimedia SET contenido = input_contenidoVideo WHERE id_editorialColumnistaEntrevista = input_id_noticia; 
	end if;
	SELECT '1' AS resultado; 
else
SELECT '0' AS resultado;
end if;	 
	
COMMIT;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `Proc_EditarNoticia` */

/*!50003 DROP PROCEDURE IF EXISTS  `Proc_EditarNoticia` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`u604865879_abra`@`%` PROCEDURE `Proc_EditarNoticia`(
IN input_id_noticia INT(11),
in input_fechaHoraActual DATETIME, 
IN input_seccion int(11), 
IN input_subseccion INT(11), 
IN input_destacado INT(11), 
IN input_volanta longtext, 
IN input_contenidoImagen LONGTEXT, 
IN input_contenidoVideo LONGTEXT, 
IN input_titulo LONGTEXT, 
IN input_copete LONGTEXT, 
IN input_texto LONGTEXT, 
IN input_fuente LONGTEXT,
IN input_ordenDestacado LONGTEXT,
IN input_etiqueta1 LONGTEXT,
IN input_etiqueta2 LONGTEXT,
IN input_etiqueta3 LONGTEXT,
IN input_id_noticiaEtiqueta1 LONGTEXT,
IN input_id_noticiaEtiqueta2 LONGTEXT,
IN input_id_noticiaEtiqueta3 LONGTEXT)
    READS SQL DATA
BEGIN
declare ultimoID longtext;
DECLARE id_noticiaUltimoDestacado LONGTEXT;

START TRANSACTION;
if ((input_fechaHoraActual != " ")) then
	
	IF ((input_destacado != "0")) THEN
		SELECT id_noticia INTO id_noticiaUltimoDestacado FROM  u604865879_notic.noticias AS n WHERE n.destacado = input_destacado AND n.orden = input_ordenDestacado;
		
		UPDATE u604865879_notic.noticias SET destacado = "0", orden = "0" WHERE id_noticia = id_noticiaUltimoDestacado;
		
		UPDATE u604865879_notic.noticias SET fecha_noticias = input_fechaHoraActual ,seccion = input_seccion ,subseccion = input_subseccion ,destacado = input_destacado ,volanta = input_volanta ,titulo = input_titulo ,copete = input_copete ,texto = input_texto ,fuente = input_fuente ,orden = input_ordenDestacado  WHERE id_noticia = input_id_noticia; 

		IF ((input_contenidoImagen != " ")) THEN
		UPDATE u604865879_notic.noticias_multimedia SET contenido = input_contenidoImagen WHERE id_noticia = input_id_noticia; 
		END IF;
		IF ((input_contenidoVideo != " ")) THEN
		UPDATE u604865879_notic.noticias_multimedia SET contenido = input_contenidoVideo WHERE id_noticia = input_id_noticia; 
		END IF;
		IF ((input_id_noticiaEtiqueta1 != " ")) THEN
		UPDATE u604865879_notic.`noticias_etiqueta` SET etiquetaDescripcion = input_etiqueta1 WHERE id_noticia = input_id_noticia AND id_noticiaEtiqueta = input_id_noticiaEtiqueta1; 
		END IF;
		IF ((input_id_noticiaEtiqueta2 != " ")) THEN
		UPDATE u604865879_notic.`noticias_etiqueta` SET etiquetaDescripcion = input_etiqueta2 WHERE id_noticia = input_id_noticia AND id_noticiaEtiqueta = input_id_noticiaEtiqueta2; 
		END IF;
		IF ((input_id_noticiaEtiqueta3 != " ")) THEN
		UPDATE u604865879_notic.`noticias_etiqueta` SET etiquetaDescripcion = input_etiqueta3 WHERE id_noticia = input_id_noticia AND id_noticiaEtiqueta = input_id_noticiaEtiqueta3; 
		END IF;
		SELECT '1' AS resultado; 
	else
		UPDATE u604865879_notic.noticias SET destacado = "0", orden = "0" WHERE id_noticia = input_id_noticia;
		SELECT '1' AS resultado; 
	end if;

else
SELECT '0' AS resultado;
end if;	 
	
COMMIT;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `Proc_EliminarEditorialColumnaEntrevista` */

/*!50003 DROP PROCEDURE IF EXISTS  `Proc_EliminarEditorialColumnaEntrevista` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`u604865879_abra`@`%` PROCEDURE `Proc_EliminarEditorialColumnaEntrevista`(in input_id_noticia int(11))
    READS SQL DATA
BEGIN
START TRANSACTION;
if ((input_id_noticia != " ")) then
	SET @eliminarNoticia = CONCAT('DELETE FROM u604865879_notic.editorial_columnistas_entrevista WHERE id_editorialColumnistaEntrevista = ','"',input_id_noticia,'"');
	    PREPARE consultaNoticia FROM @eliminarNoticia;
	    EXECUTE consultaNoticia;
	    DEALLOCATE PREPARE consultaNoticia;
	SELECT '1' AS resultado; 
else
SELECT '0' AS resultado;
end if;	 
	
COMMIT;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `Proc_EliminarNoticia` */

/*!50003 DROP PROCEDURE IF EXISTS  `Proc_EliminarNoticia` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`u604865879_abra`@`%` PROCEDURE `Proc_EliminarNoticia`(in input_id_noticia int(11))
    READS SQL DATA
BEGIN
START TRANSACTION;
if ((input_id_noticia != " ")) then
	SET @eliminarNoticia = CONCAT('DELETE FROM u604865879_notic.noticias WHERE id_noticia = ','"',input_id_noticia,'"');
	    PREPARE consultaNoticia FROM @eliminarNoticia;
	    EXECUTE consultaNoticia;
	    DEALLOCATE PREPARE consultaNoticia;
	SELECT '1' AS resultado; 
else
SELECT '0' AS resultado;
end if;	 
	
COMMIT;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `Proc_LeerAutor` */

/*!50003 DROP PROCEDURE IF EXISTS  `Proc_LeerAutor` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`u604865879_abra`@`%` PROCEDURE `Proc_LeerAutor`()
    READS SQL DATA
BEGIN	 
	SET @SELECT= CONCAT("SELECT
				   a.id, 
				   a.nombre, 
				   a.imagen
				FROM autor as a
				order by nombre asc"); 
	PREPARE consulta FROM @SELECT;
	EXECUTE consulta;
	DEALLOCATE PREPARE consulta; 
	-- select @SELECT;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `Proc_LeerDolarHoy` */

/*!50003 DROP PROCEDURE IF EXISTS  `Proc_LeerDolarHoy` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`u604865879_abra`@`%` PROCEDURE `Proc_LeerDolarHoy`()
    READS SQL DATA
BEGIN	 
	SET @SELECT= CONCAT("SELECT
				   d.id_dolarHoy, 
				   d.dolarCompra, 
				   d.dolarVenta,
				   d.fechaHoraActualizacion
				FROM dolarHoy as d
				WHERE d.activo = 1
				order by id_dolarHoy desc
				limit 1"); 
	PREPARE consulta FROM @SELECT;
	EXECUTE consulta;
	DEALLOCATE PREPARE consulta; 
	-- select @SELECT;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `Proc_LeerECEDestacada` */

/*!50003 DROP PROCEDURE IF EXISTS  `Proc_LeerECEDestacada` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`u604865879_abra`@`%` PROCEDURE `Proc_LeerECEDestacada`(IN input_id_seccion INT(11), IN input_id_destacado INT(11))
    READS SQL DATA
BEGIN

DECLARE param_id_destacado LONGTEXT DEFAULT '';
DECLARE param_id_seccion LONGTEXT DEFAULT '';
DECLARE param_group_by LONGTEXT DEFAULT '';
DECLARE param_limit LONGTEXT DEFAULT '';

	IF (/*(input_id_destacado IS NOT NULL) and*/ (input_id_seccion IS NOT NULL)) THEN
	        /*SET param_id_destacado = CONCAT(' AND e.destacado = ', input_id_destacado);*/
		SET param_id_seccion = CONCAT(' AND e.seccion = ', input_id_seccion);
		SET param_group_by = CONCAT('  GROUP BY e.id_editorialColumnistaEntrevista');
	END IF;
	
	IF (input_id_seccion = 4) THEN
		SET param_limit = CONCAT(' order by id_editorialColumnistaEntrevista desc LIMIT 0, 4');
	END IF;
	
	IF (input_id_seccion = 5) THEN
		SET param_limit = CONCAT(' order by id_editorialColumnistaEntrevista desc LIMIT 0, 1');
	END IF;
	
	IF (input_id_seccion = 6) THEN
		SET param_limit = CONCAT(' order by id_editorialColumnistaEntrevista desc LIMIT 0, 3');
	END IF;
	
	SET @SELECT= CONCAT('SELECT distinct
				 e.id_editorialColumnistaEntrevista,
				 e.fecha_editorialColumnaEntrevista,
				 e.seccion as id_seccion,
				 e.subseccion as id_subseccion,
				 e.destacado,
				 e.titulo,
				 e.copete,
				 e.texto,
				 at.nombre as autor,
				 at.imagen as autorImagen,
				 e_m.id_tipoMultimedia,
				 e_m.contenido,
				 e_m.epigrafe,
				 e.cant_click as cantidadVisitas,
				 s.nombre as seccion,
				 ss.nombre as subseccion
			     FROM
			     u604865879_notic.editorial_columnistas_entrevista AS e
			     LEFT JOIN u604865879_notic.autor AS at
				ON (e.id_autor = at.id)
			     LEFT JOIN u604865879_notic.editorialColumnistaEntrevista_multimedia AS e_m
				ON (e.id_editorialColumnistaEntrevista = e_m.id_editorialColumnistaEntrevista)
			     INNER JOIN u604865879_notic.seccion AS s
				ON (e.seccion = s.id)
			     left JOIN u604865879_notic.sub_seccion AS ss
				ON (e.subseccion = ss.id)	
				WHERE e.activo = 1 ', 
			     /*param_id_destacado,*/
			     param_id_seccion,
			     param_group_by,
			     param_limit); 
	 PREPARE consulta FROM @SELECT;
	 EXECUTE consulta;
	 DEALLOCATE PREPARE consulta;

    END */$$
DELIMITER ;

/* Procedure structure for procedure `Proc_LeerEditorialColumnaEntrevista` */

/*!50003 DROP PROCEDURE IF EXISTS  `Proc_LeerEditorialColumnaEntrevista` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`u604865879_abra`@`%` PROCEDURE `Proc_LeerEditorialColumnaEntrevista`(   IN input_id_editorialColumnistaEntrevista INT(11),
											in input_id_seccion int (11),
											IN input_id_subseccion INT (11),
											in input_id_tipoMultimedia int(11), -- 1 imagen; 2 videos;
											in input_ordenar int (11), -- null ordena por fecha descendente; 1 por cantidad de vistas en la noticia
											IN input_limite INT(11))
    READS SQL DATA
BEGIN

DECLARE param_id_editorialColumnistaEntrevista LONGTEXT DEFAULT '';
DECLARE param_id_seccion LONGTEXT DEFAULT '';
DECLARE param_inerjoin_seccion LONGTEXT DEFAULT '';
DECLARE param_select_seccion LONGTEXT DEFAULT '';
DECLARE param_id_subseccion LONGTEXT DEFAULT '';
DECLARE param_inerjoin_subseccion LONGTEXT DEFAULT '';
DECLARE param_select_subseccion LONGTEXT DEFAULT '';	
DECLARE param_id_tipoMultimedia LONGTEXT DEFAULT '';
DECLARE param_ordenar LONGTEXT DEFAULT '';
DECLARE param_limit LONGTEXT DEFAULT '';
DECLARE param_group_by LONGTEXT DEFAULT '';
DECLARE param_cantidadVistas int DEFAULT 0;

	IF (input_id_editorialColumnistaEntrevista IS NOT NULL) THEN
		SET param_id_editorialColumnistaEntrevista = CONCAT(' AND e.id_editorialColumnistaEntrevista = ', input_id_editorialColumnistaEntrevista);
	END IF;
	
	IF (input_id_seccion IS NOT NULL) THEN
		SET param_id_seccion = CONCAT(' AND e.seccion = ', input_id_seccion);
		SET param_inerjoin_seccion = CONCAT(' INNER JOIN u604865879_notic.seccion AS s ON (e.seccion = s.id)');
		set param_select_seccion = concat(' s.nombre as "seccion", ');
	END IF;
	
	IF (input_id_subseccion IS NOT NULL) THEN
		SET param_id_subseccion = CONCAT(' AND e.subseccion = ', input_id_subseccion);
		SET param_inerjoin_subseccion = CONCAT(' INNER JOIN u604865879_notic.sub_seccion AS ss ON (e.subseccion = ss.id)');
		SET param_select_subseccion = CONCAT(' ss.nombre as "subseccion", ');
	END IF;
	
	IF ((input_id_editorialColumnistaEntrevista IS NOT NULL) and (input_id_seccion IS NOT NULL) and (input_id_subseccion IS NOT NULL)) THEN
		SET param_group_by = CONCAT('  GROUP BY e.id_editorialColumnistaEntrevista');
		
		SELECT e.cant_click INTO param_cantidadVistas FROM u604865879_notic.editorial_columnistas_entrevista AS e where e.id_editorialColumnistaEntrevista = input_id_editorialColumnistaEntrevista;
		set param_cantidadVistas = param_cantidadVistas + 1;
		SET @insertNuevaVistaECE = CONCAT('UPDATE u604865879_notic.editorial_columnistas_entrevista SET cant_click = ',param_cantidadVistas,' WHERE id_editorialColumnistaEntrevista = ',input_id_editorialColumnistaEntrevista); 
		PREPARE consultaNuevaVistaNoticia FROM @insertNuevaVistaECE;
		EXECUTE consultaNuevaVistaNoticia;
		DEALLOCATE PREPARE consultaNuevaVistaNoticia;
	END IF;
	
	IF ((input_id_seccion IS NOT NULL) AND (input_id_subseccion IS NOT NULL) AND (input_ordenar IS NOT NULL) AND (input_limite IS NOT NULL)) THEN
		SET param_group_by = CONCAT('  GROUP BY e.id_editorialColumnistaEntrevista');
	END IF;
	
	IF ((input_ordenar IS NOT NULL) AND (input_limite IS NOT NULL)) THEN
		SET param_group_by = CONCAT('  GROUP BY e.id_editorialColumnistaEntrevista');
	END IF;
	
	if (input_id_tipoMultimedia IS NOT NULL) then
		set param_id_tipoMultimedia = concat(' AND e_m.id_tipoMultimedia = ', input_id_tipoMultimedia);
	end if;
	
	IF (input_ordenar IS NOT NULL) THEN
		if (input_ordenar = 1) then
			SET param_ordenar = CONCAT('  ORDER BY e.cant_click DESC');
		end if;
	else
		SET param_ordenar = CONCAT('  ORDER BY e.fecha_editorialColumnaEntrevista DESC');
	END IF;
	
	IF (input_limite IS NOT NULL) THEN
		SET param_limit = CONCAT(' LIMIT 0, ', input_limite);
	END IF;
	
	SET @SELECT= CONCAT('SELECT distinct
				 e.id_editorialColumnistaEntrevista as id_noticia,
				 e.fecha_editorialColumnaEntrevista as fecha_noticias,
				 e.seccion as id_seccion,
				 e.subseccion as id_subseccion,',
				 param_select_seccion,
				 param_select_subseccion,
				 'e.destacado,
				 e.titulo,
				 e.copete,
				 e.texto,
				 e.id_autor,
				 at.nombre as fuente,
				 at.imagen as fuenteImagen,
				 e_m.id_eCEMultimedia,
				 e_m.id_tipoMultimedia,
				 e_m.contenido,
				 e_m.epigrafe,
				 e.cant_click as cantidadVisitas
			     FROM
			     u604865879_notic.editorial_columnistas_entrevista AS e
			     LEFT JOIN u604865879_notic.editorialColumnistaEntrevista_multimedia AS e_m
				ON (e.id_editorialColumnistaEntrevista = e_m.id_editorialColumnistaEntrevista)
			     LEFT JOIN u604865879_notic.autor AS at
				ON (e.id_autor = at.id) ',
			     param_inerjoin_seccion,
			     param_inerjoin_subseccion,
			    'WHERE e.activo = 1', 
			     param_id_editorialColumnistaEntrevista,
			     param_id_seccion,
			     param_id_subseccion,
			     param_id_tipoMultimedia,
			     param_group_by,
			     param_ordenar, 
			     param_limit); 
	 PREPARE consulta FROM @SELECT;
	 EXECUTE consulta;
	 DEALLOCATE PREPARE consulta;

    END */$$
DELIMITER ;

/* Procedure structure for procedure `Proc_LeerMultimedia` */

/*!50003 DROP PROCEDURE IF EXISTS  `Proc_LeerMultimedia` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`u604865879_abra`@`%` PROCEDURE `Proc_LeerMultimedia`(IN input_id_noticia INT(11),
								     in input_id_seccion int (11),
								     IN input_id_subseccion INT (11),
								     in input_id_tipoMultimedia int(11), -- 1 imagen; 2 videos;
								     in input_ordenar int (11), -- null ordena por fecha descendente; 1 por cantidad de vistas en la noticia
								     IN input_limite INT(11),
								     in input_inicio int(11))
    READS SQL DATA
BEGIN

DECLARE param_id_noticia LONGTEXT DEFAULT '';
DECLARE param_id_seccion LONGTEXT DEFAULT '';
DECLARE param_inerjoin_seccion LONGTEXT DEFAULT '';
DECLARE param_select_seccion LONGTEXT DEFAULT '';
DECLARE param_id_subseccion LONGTEXT DEFAULT '';
DECLARE param_inerjoin_subseccion LONGTEXT DEFAULT '';
DECLARE param_select_subseccion LONGTEXT DEFAULT '';	
DECLARE param_id_tipoMultimedia LONGTEXT DEFAULT '';
DECLARE param_ordenar LONGTEXT DEFAULT '';
DECLARE param_limit LONGTEXT DEFAULT '';

	IF (input_id_noticia IS NOT NULL) THEN
		SET param_id_noticia = CONCAT(' AND n.id_noticia = ', input_id_noticia);
	END IF;
	
	IF (input_id_seccion IS NOT NULL) THEN
		SET param_id_seccion = CONCAT(' AND n.seccion = ', input_id_seccion);
		SET param_inerjoin_seccion = CONCAT(' INNER JOIN u604865879_notic.seccion AS s ON (n.seccion = s.id)');
		set param_select_seccion = concat(' s.nombre as "seccion", ');
	END IF;
	
	IF (input_id_subseccion IS NOT NULL) THEN
		SET param_id_subseccion = CONCAT(' AND n.subseccion = ', input_id_subseccion);
		SET param_inerjoin_subseccion = CONCAT(' INNER JOIN u604865879_notic.sub_seccion AS ss ON (n.subseccion = ss.id)');
		SET param_select_subseccion = CONCAT(' ss.nombre as "subseccion", ');
	END IF;

	if (input_id_tipoMultimedia IS NOT NULL) then
		set param_id_tipoMultimedia = concat(' AND n_m.id_tipoMultimedia = ', input_id_tipoMultimedia);
	end if;
	
	IF (input_ordenar IS NOT NULL) THEN
		if (input_ordenar = 1) then
			SET param_ordenar = CONCAT('  ORDER BY n.cant_click DESC');
		end if;
	else
		SET param_ordenar = CONCAT('  ORDER BY n.fecha_noticias DESC');
	END IF;
	
	IF ((input_limite IS NOT NULL) and (input_inicio IS NULL)) THEN
		SET param_limit = CONCAT(' LIMIT 0, ', input_limite);
	END IF;
	
	IF ((input_limite IS NOT NULL) AND (input_inicio IS not NULL)) THEN
		SET param_limit = CONCAT(' LIMIT ',input_inicio,', ', input_limite);
	END IF;
	
	SET @SELECT= CONCAT('SELECT
				 n.id_noticia,
				 n.fecha_noticias,
				 n.seccion as id_seccion,
				 n.subseccion as id_subseccion,',
				 param_select_seccion,
				 param_select_subseccion,
				 'n.destacado,
				 n.volanta,
				 n.titulo,
				 n.copete,
				 n.texto,
				 n.fuente,
				 n_m.id_noticiasMultimedia,
				 n_m.id_tipoMultimedia,
				 n_m.contenido,
				 n_m.epigrafe,
				 n.cant_click as cantidadVisitas
			     FROM
			     u604865879_notic.noticias AS n
			     INNER JOIN u604865879_notic.noticias_multimedia AS n_m
				ON (n.id_noticia = n_m.id_noticia)',
			     param_inerjoin_seccion,
			     param_inerjoin_subseccion,
			    'WHERE n.activo = 1 
			     AND n_m.activo = 1 ', 
			     param_id_noticia,
			     param_id_seccion,
			     param_id_subseccion,
			     param_id_tipoMultimedia,
			     param_ordenar, 
			     param_limit); 
	PREPARE consulta FROM @SELECT;
	EXECUTE consulta;
	DEALLOCATE PREPARE consulta;
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `Proc_LeerNoticia` */

/*!50003 DROP PROCEDURE IF EXISTS  `Proc_LeerNoticia` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`u604865879_abra`@`%` PROCEDURE `Proc_LeerNoticia`(   IN input_id_noticia INT(11),
								     in input_id_seccion int (11),
								     IN input_id_subseccion INT (11),
								     in input_id_tipoMultimedia int(11), -- 1 imagen; 2 videos;
								     in input_ordenar int (11), -- null ordena por fecha descendente; 1 por cantidad de vistas en la noticia
								     IN input_limite INT(11))
    READS SQL DATA
BEGIN

DECLARE param_id_noticia LONGTEXT DEFAULT '';
DECLARE param_id_seccion LONGTEXT DEFAULT '';
DECLARE param_inerjoin_seccion LONGTEXT DEFAULT '';
DECLARE param_select_seccion LONGTEXT DEFAULT '';
DECLARE param_id_subseccion LONGTEXT DEFAULT '';
DECLARE param_inerjoin_subseccion LONGTEXT DEFAULT '';
DECLARE param_select_subseccion LONGTEXT DEFAULT '';	
DECLARE param_id_tipoMultimedia LONGTEXT DEFAULT '';
DECLARE param_ordenar LONGTEXT DEFAULT '';
DECLARE param_limit LONGTEXT DEFAULT '';
DECLARE param_group_by LONGTEXT DEFAULT '';
DECLARE param_cantidadVistas int DEFAULT 0;

	IF (input_id_noticia IS NOT NULL) THEN
		SET param_id_noticia = CONCAT(' AND n.id_noticia = ', input_id_noticia);
	END IF;
	
	IF (input_id_seccion IS NOT NULL) THEN
		SET param_id_seccion = CONCAT(' AND n.seccion = ', input_id_seccion);
		SET param_inerjoin_seccion = CONCAT(' INNER JOIN u604865879_notic.seccion AS s ON (n.seccion = s.id)');
		set param_select_seccion = concat(' s.nombre as "seccion", ');
	END IF;
	
	IF (input_id_subseccion IS NOT NULL) THEN
		SET param_id_subseccion = CONCAT(' AND n.subseccion = ', input_id_subseccion);
		SET param_inerjoin_subseccion = CONCAT(' INNER JOIN u604865879_notic.sub_seccion AS ss ON (n.subseccion = ss.id)');
		SET param_select_subseccion = CONCAT(' ss.nombre as "subseccion", ');
	END IF;
	
	IF ((input_id_noticia IS NOT NULL) and (input_id_seccion IS NOT NULL) and (input_id_subseccion IS NOT NULL)) THEN
		SET param_group_by = CONCAT('  GROUP BY n.id_noticia');
		
		SELECT n.cant_click INTO param_cantidadVistas FROM u604865879_notic.noticias AS n where n.id_noticia = input_id_noticia;
		set param_cantidadVistas = param_cantidadVistas + 1;
		SET @insertNuevaVistaNoticia = CONCAT('UPDATE u604865879_notic.noticias SET cant_click = ',param_cantidadVistas,' WHERE id_noticia = ',input_id_noticia); 
		PREPARE consultaNuevaVistaNoticia FROM @insertNuevaVistaNoticia;
		EXECUTE consultaNuevaVistaNoticia;
		DEALLOCATE PREPARE consultaNuevaVistaNoticia;
	END IF;
	
	IF ((input_id_seccion IS NOT NULL) AND (input_id_subseccion IS NOT NULL) AND (input_ordenar IS NOT NULL) AND (input_limite IS NOT NULL)) THEN
		SET param_group_by = CONCAT('  GROUP BY n.id_noticia');
	END IF;
	
	IF ((input_ordenar IS NOT NULL) AND (input_limite IS NOT NULL)) THEN
		SET param_group_by = CONCAT('  GROUP BY n.id_noticia');
	END IF;
	
	if (input_id_tipoMultimedia IS NOT NULL) then
		set param_id_tipoMultimedia = concat(' AND n_m.id_tipoMultimedia = ', input_id_tipoMultimedia);
	end if;
	
	IF (input_ordenar IS NOT NULL) THEN
		if (input_ordenar = 1) then
			SET param_ordenar = CONCAT('  ORDER BY n.cant_click DESC');
		end if;
	else
		SET param_ordenar = CONCAT('  ORDER BY n.fecha_noticias DESC');
	END IF;
	
	IF (input_limite IS NOT NULL) THEN
		SET param_limit = CONCAT(' LIMIT 0, ', input_limite);
	END IF;
	
	SET @SELECT= CONCAT('SELECT distinct
				 n.id_noticia,
				 n.fecha_noticias,
				 n.seccion as id_seccion,
				 n.subseccion as id_subseccion,',
				 param_select_seccion,
				 param_select_subseccion,
				 'n.destacado,
				 n.orden,
				 n.volanta,
				 n.titulo,
				 n.copete,
				 n.texto,
				 n.fuente,
				 n_m.id_noticiasMultimedia,
				 n_m.id_tipoMultimedia,
				 n_m.contenido,
				 n_m.epigrafe,
				 n.cant_click as cantidadVisitas
			     FROM
			     u604865879_notic.noticias AS n
			     LEFT JOIN u604865879_notic.noticias_multimedia AS n_m
				ON (n.id_noticia = n_m.id_noticia)',
			     param_inerjoin_seccion,
			     param_inerjoin_subseccion,
			    'WHERE n.activo = 1', 
			     param_id_noticia,
			     param_id_seccion,
			     param_id_subseccion,
			     param_id_tipoMultimedia,
			     param_group_by,
			     param_ordenar, 
			     param_limit); 
	 PREPARE consulta FROM @SELECT;
	 EXECUTE consulta;
	 DEALLOCATE PREPARE consulta;

    END */$$
DELIMITER ;

/* Procedure structure for procedure `Proc_LeerNoticiaBuscador` */

/*!50003 DROP PROCEDURE IF EXISTS  `Proc_LeerNoticiaBuscador` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`u604865879_abra`@`%` PROCEDURE `Proc_LeerNoticiaBuscador`(IN input_buscar varchar(250))
    READS SQL DATA
BEGIN

DECLARE param_id_buscar LONGTEXT DEFAULT '';

	IF (input_buscar IS NOT NULL) THEN
		SET param_id_buscar = CONCAT(' MATCH(n.titulo) AGAINST ("',input_buscar,'") ');
	END IF;
	
	SET @SELECT= CONCAT('SELECT distinct
				 n.id_noticia,
				 n.fecha_noticias,
				 n.seccion as id_seccion,
				 n.subseccion as id_subseccion, 
				 s.nombre as "seccion",
				 ss.nombre as "subseccion",
				 n.destacado,
				 n.volanta,
				 n.titulo,
				 n.copete,
				 n.texto,
				 n.fuente,
				 n_m.id_noticiasMultimedia,
				 n_m.id_tipoMultimedia,
				 n_m.contenido,
				 n_m.epigrafe,
				 n.cant_click as cantidadVisitas
			     FROM
			     u604865879_notic.noticias AS n
			     LEFT JOIN u604865879_notic.noticias_multimedia AS n_m ON (n.id_noticia = n_m.id_noticia)
			     INNER JOIN u604865879_notic.seccion AS s ON (n.seccion = s.id)
			     INNER JOIN u604865879_notic.sub_seccion AS ss ON (n.subseccion = ss.id)
			     WHERE ',param_id_buscar,' and n.activo = 1'); 
	 PREPARE consulta FROM @SELECT;
	 EXECUTE consulta;
	 DEALLOCATE PREPARE consulta;

    END */$$
DELIMITER ;

/* Procedure structure for procedure `Proc_LeerNoticiaDestacada` */

/*!50003 DROP PROCEDURE IF EXISTS  `Proc_LeerNoticiaDestacada` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`u604865879_abra`@`%` PROCEDURE `Proc_LeerNoticiaDestacada`(IN input_id_destacado INT(11))
    READS SQL DATA
BEGIN

DECLARE param_id_destacado LONGTEXT DEFAULT '';
DECLARE param_group_by LONGTEXT DEFAULT '';
DECLARE param_limit LONGTEXT DEFAULT '';

	IF (input_id_destacado IS NOT NULL) THEN
		
		SET param_id_destacado = CONCAT(' AND n.destacado = ', input_id_destacado);
		SET param_group_by = CONCAT('  GROUP BY n.id_noticia');
		
		IF (input_id_destacado = 1) THEN
		SET param_limit = CONCAT(' order by orden asc LIMIT 0, 1');
		end if;
		IF (input_id_destacado = 2) THEN
		SET param_limit = CONCAT(' order by orden asc LIMIT 0, 5');
		END IF;
		IF (input_id_destacado = 3) THEN
		SET param_limit = CONCAT(' order by orden asc LIMIT 0, 5');
		END IF;
	END IF;
	
	SET @SELECT= CONCAT('SELECT distinct
				 n.id_noticia,
				 n.fecha_noticias,
				 n.seccion as id_seccion,
				 n.subseccion as id_subseccion,
				 n.destacado,
				 n.orden,
				 n.volanta,
				 n.titulo,
				 n.copete,
				 n.texto,
				 n.fuente,
				 n_m.id_noticiasMultimedia,
				 n_m.id_tipoMultimedia,
				 n_m.contenido,
				 n_m.epigrafe,
				 n.cant_click as cantidadVisitas,
				 s.nombre as seccion,
				 ss.nombre as subseccion
			     FROM
			     u604865879_notic.noticias AS n
			     LEFT JOIN u604865879_notic.noticias_multimedia AS n_m
				ON (n.id_noticia = n_m.id_noticia)
			     INNER JOIN u604865879_notic.seccion AS s
				ON (n.seccion = s.id)
			     INNER JOIN u604865879_notic.sub_seccion AS ss
				ON (n.subseccion = ss.id)	
				WHERE n.activo = 1 and n.orden != 0', 
			     param_id_destacado,
			     param_group_by,
			     param_limit); 
	 PREPARE consulta FROM @SELECT;
	 EXECUTE consulta;
	 DEALLOCATE PREPARE consulta;

    END */$$
DELIMITER ;

/* Procedure structure for procedure `Proc_LeerNoticiaEtiqueta` */

/*!50003 DROP PROCEDURE IF EXISTS  `Proc_LeerNoticiaEtiqueta` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`u604865879_abra`@`%` PROCEDURE `Proc_LeerNoticiaEtiqueta`(IN input_id_noticia INT(11))
    READS SQL DATA
BEGIN
	
	SET @SELECT= CONCAT('SELECT distinct
				 n_e.id_noticiaEtiqueta,
				 n_e.id_noticia,
				 n_e.etiquetaDescripcion
			     FROM
			     u604865879_notic.noticias_etiqueta AS n_e
			     WHERE n_e.activo = 1 and n_e.baja = 0 and id_noticia = ', input_id_noticia); 
	 PREPARE consulta FROM @SELECT;
	 EXECUTE consulta;
	 DEALLOCATE PREPARE consulta;

    END */$$
DELIMITER ;

/* Procedure structure for procedure `Proc_LeerPublicidadSeccion` */

/*!50003 DROP PROCEDURE IF EXISTS  `Proc_LeerPublicidadSeccion` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`u604865879_abra`@`%` PROCEDURE `Proc_LeerPublicidadSeccion`(in input_seccion int(11), in input_limite int(11))
    READS SQL DATA
BEGIN	 
	SET @SELECT= CONCAT("SELECT 
				   p.id_noticiasMultimedia, 
				   p.id_seccion, 
				   p.contenido,
				   p.linck, 
				   p.orden 
				FROM seccion_publicidad as p
				WHERE p.activo = 1 
				and p.id_seccion=",input_seccion," 
				ORDER BY p.orden DESC LIMIT 0,",input_limite); 
	PREPARE consulta FROM @SELECT;
	EXECUTE consulta;
	DEALLOCATE PREPARE consulta; 
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `Proc_LeerUsuario` */

/*!50003 DROP PROCEDURE IF EXISTS  `Proc_LeerUsuario` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`u604865879_abra`@`%` PROCEDURE `Proc_LeerUsuario`(in input_id_username varchar(50), in input_id_contraseña VARCHAR(50))
    READS SQL DATA
BEGIN	 
	SET @SELECT= CONCAT("SELECT
				   u.id_usuario, 
				   u.nombreUsuario, 
				   u.contrasenia,
				   u.id_perfil
				FROM vadt_usuarios as u
				WHERE u.activo = 1 
				and u.nombreUsuario=","'",input_id_username,"'","
				and u.contrasenia  =","'",input_id_contraseña,"'"); 
	PREPARE consulta FROM @SELECT;
	EXECUTE consulta;
	DEALLOCATE PREPARE consulta; 
	-- select @SELECT;
    END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
