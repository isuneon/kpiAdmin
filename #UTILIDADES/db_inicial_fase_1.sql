/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.9-MariaDB : Database - db_kpi_admin_isuneon
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_kpi_admin_isuneon` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;

USE `db_kpi_admin_isuneon`;

/*Table structure for table `admin_config` */

DROP TABLE IF EXISTS `admin_config`;

CREATE TABLE `admin_config` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_empresa` varchar(255) DEFAULT 'DEMO' COMMENT 'Nombre empresa',
  `sinc_fec_ult` datetime DEFAULT NULL COMMENT 'Fecha de ultima sincronizacion',
  `sinc_ini` datetime DEFAULT NULL COMMENT 'Fecha y Hora de inicio de sincronizacion',
  `sinc_fin` datetime DEFAULT NULL COMMENT 'Fecha y Hora de finalizacion de sincronizacion',
  `sinc_manual` int(1) DEFAULT '0' COMMENT 'switch para indicar sincronizacion manual',
  `sinc_password` varchar(255) DEFAULT NULL COMMENT 'Clave acceso de aplicacion',
  `num_lice` varchar(255) DEFAULT NULL COMMENT 'Numero de Licencia',
  `fec_install` datetime DEFAULT NULL COMMENT 'Fecha de instalacion',
  `defa_cod_proveedor` varchar(60) DEFAULT '0000' COMMENT 'Codigo proveedor principal',
  `defa_cod_tip_banco` varchar(60) DEFAULT '0000' COMMENT 'Codigo para proveedor tipo bancos',
  `defa_costo` varchar(60) DEFAULT 'cos_pro_un' COMMENT 'Costo por defecto',
  `defa_precio` varchar(60) DEFAULT 'prec_vta1' COMMENT 'Precio por defecto',
  `defa_pmaxgan` decimal(5,2) DEFAULT '30.00' COMMENT 'Porcentaje max ganancia',
  `defa_p_est_cos` decimal(5,2) DEFAULT '12.50' COMMENT 'Porcentaje estructura de costos',
  `defa_language` varchar(3) NOT NULL DEFAULT 'ES',
  `defa_moneda` varchar(4) NOT NULL DEFAULT 'Bs',
  `alert_mont_odp` decimal(18,4) DEFAULT '10000.0000' COMMENT 'Monto para alerta de orden de pago',
  `alert_mont_odc` decimal(18,4) DEFAULT '10000.0000' COMMENT 'Monto para alerta orden de compra',
  `alert_mont_com` decimal(18,4) DEFAULT '10000.0000' COMMENT 'Monto para alerta de compras',
  `alert_mont_fact` decimal(18,4) DEFAULT '10000.0000' COMMENT 'Monto para alerta de factura',
  `alert_mont_cotz` decimal(18,4) DEFAULT '10000.0000' COMMENT 'Monto para alerta de cotizacion',
  `version` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `admin_config` */

insert  into `admin_config`(`id`,`nombre_empresa`,`sinc_fec_ult`,`sinc_ini`,`sinc_fin`,`sinc_manual`,`sinc_password`,`num_lice`,`fec_install`,`defa_cod_proveedor`,`defa_cod_tip_banco`,`defa_costo`,`defa_precio`,`defa_pmaxgan`,`defa_p_est_cos`,`defa_language`,`defa_moneda`,`alert_mont_odp`,`alert_mont_odc`,`alert_mont_com`,`alert_mont_fact`,`alert_mont_cotz`,`version`) values (1,'DEMO','2017-01-25 14:18:06','2017-01-26 14:18:13','2017-01-26 14:18:18',0,'fe01ce2a7fbac8fafaed7c982a04e229','KPIADMIN-DEMO001-00000000-00000000-00000000-0000000A','2017-01-18 14:18:31','0000','0000','cos_pro_un','prec_vta1',30.00,12.50,'ES','Bs',10000.0000,10000.0000,10000.0000,10000.0000,10000.0000,NULL);

/*Table structure for table `admin_correos` */

DROP TABLE IF EXISTS `admin_correos`;

CREATE TABLE `admin_correos` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `id_notifi` int(2) DEFAULT NULL,
  `to_email` text,
  `cc_email` text,
  `bcc_email` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `admin_correos` */

insert  into `admin_correos`(`id`,`id_notifi`,`to_email`,`cc_email`,`bcc_email`) values (1,1,'email@email.com','email@email.com','email@email.com');

/*Table structure for table `admin_dia` */

DROP TABLE IF EXISTS `admin_dia`;

CREATE TABLE `admin_dia` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `dia` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MEMORY AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `admin_dia` */

insert  into `admin_dia`(`id`,`dia`) values (1,'Lunes'),(2,'Martes'),(3,'Miércoles'),(4,'Jueves'),(5,'Viernes'),(6,'Sábado'),(7,'Domingo');

/*Table structure for table `admin_horarios_config` */

DROP TABLE IF EXISTS `admin_horarios_config`;

CREATE TABLE `admin_horarios_config` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `admin_horarios_config` */

insert  into `admin_horarios_config`(`id`,`name`,`descripcion`,`activo`,`created_at`,`updated_at`,`deleted_at`) values (1,'agendado','Sincronizacion Agendada.',1,'2016-11-18 01:42:33','0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'resumen_gerencial','Horario de Envio de Resumen Gerencial',1,'2017-01-26 11:56:29','0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,'alerta_admin','Horario de Envio de Alertas Administrativas',1,'2017-01-26 14:23:50','2017-01-26 14:23:50','0000-00-00 00:00:00');

/*Table structure for table `admin_horarios_dias` */

DROP TABLE IF EXISTS `admin_horarios_dias`;

CREATE TABLE `admin_horarios_dias` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `id_horarios` int(2) NOT NULL,
  `id_dia` int(2) DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

/*Data for the table `admin_horarios_dias` */

insert  into `admin_horarios_dias`(`id`,`id_horarios`,`id_dia`,`activo`) values (1,1,1,1),(2,1,2,1),(3,1,3,1),(4,1,4,1),(5,1,5,1),(6,1,6,1),(7,1,7,1),(8,2,1,1),(9,2,2,1),(10,2,3,1),(11,2,4,1),(12,2,5,1),(13,2,6,1),(14,2,7,0);

/*Table structure for table `admin_horarios_horas` */

DROP TABLE IF EXISTS `admin_horarios_horas`;

CREATE TABLE `admin_horarios_horas` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `id_horarios` int(2) NOT NULL,
  `hora_sync` time DEFAULT '00:00:00',
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `admin_horarios_horas` */

insert  into `admin_horarios_horas`(`id`,`id_horarios`,`hora_sync`,`activo`) values (1,1,'08:00:00',1),(2,1,'12:00:00',1),(3,1,'15:00:00',1),(4,2,'06:00:00',1);

/*Table structure for table `admin_notificacion` */

DROP TABLE IF EXISTS `admin_notificacion`;

CREATE TABLE `admin_notificacion` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `activo` tinyint(1) DEFAULT '1',
  `sender_user` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sender_pass` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sender_asunto` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sender_cuerpo` text COLLATE utf8_spanish_ci,
  `sender_attach` text COLLATE utf8_spanish_ci,
  `sp_nombre_consultar` varchar(120) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sp_parametros_enviar` varchar(120) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sms_send` tinyint(1) DEFAULT '0',
  `sms_numbers` text COLLATE utf8_spanish_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `admin_notificacion` */

insert  into `admin_notificacion`(`id`,`name`,`descripcion`,`activo`,`sender_user`,`sender_pass`,`sender_asunto`,`sender_cuerpo`,`sender_attach`,`sp_nombre_consultar`,`sp_parametros_enviar`,`sms_send`,`sms_numbers`,`created_at`,`updated_at`,`deleted_at`) values (1,'resumen_gerencial','Resumen Gerencial',1,'email@email.com','2378y3bkjebk/*/-','Resumen G',NULL,NULL,NULL,NULL,0,NULL,'2017-01-26 12:32:03','2017-01-26 12:32:03','0000-00-00 00:00:00'),(2,'alerta_admin','Alertas Administrativas',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,'2017-01-26 12:36:35','2017-01-26 12:36:35','0000-00-00 00:00:00');

/*Table structure for table `role_user` */

DROP TABLE IF EXISTS `role_user`;

CREATE TABLE `role_user` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_user_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `role_user` */

insert  into `role_user`(`user_id`,`role_id`) values (1,1),(1,2),(1,3),(1,4),(1,5),(1,6),(1,7),(1,8),(1,9),(1,10),(1,11),(1,12),(1,13);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`display_name`,`description`,`created_at`,`updated_at`) values (1,'DASH1','DASH1','Muestra','2016-11-17 02:25:00','2016-11-17 02:25:00'),(2,'DASH2','DASH2','Muestra','2016-11-17 02:25:00','2016-11-17 02:25:00'),(3,'DASH3','DASH3',NULL,'2016-11-17 02:25:00','2016-11-17 02:25:00'),(4,'VENTAS','VENTAS',NULL,'2016-11-17 02:25:00','2016-11-17 02:25:00'),(5,'COMPRAS','COMPRAS',NULL,'2016-11-17 02:25:00','2016-11-17 02:25:00'),(6,'BANCOS','BANCOS',NULL,'2016-11-17 02:25:00','2016-11-17 02:25:00'),(7,'ORDCOM','ORDCOM',NULL,'2016-11-17 02:25:00','2016-11-17 02:25:00'),(8,'PPTO','PPTO',NULL,'2016-11-17 02:25:00','2016-11-17 02:25:00'),(9,'CXC','CXC',NULL,'2016-11-17 02:25:00','2016-11-17 02:25:00'),(10,'CXP','CXP',NULL,'2016-11-17 02:25:00','2016-11-17 02:25:00'),(11,'CUSTOM1','CUSTOM1',NULL,'2016-11-17 02:25:00','2016-11-17 02:25:00'),(12,'CUSTOM2','CUSTOM2',NULL,'2016-11-17 02:25:00','2016-11-17 02:25:00'),(13,'CUSTOM3','CUSTOM3',NULL,'2016-11-17 02:25:00','2016-11-17 02:25:00');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `co_cli` varchar(6) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL,
  `activo` tinyint(1) DEFAULT '1',
  `created_user` varchar(255) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'SYSTEM',
  `updated_user` varchar(255) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'SYSTEM',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `co_cli` (`co_cli`,`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`co_cli`,`email`,`password`,`nombre`,`apellido`,`descripcion`,`activo`,`created_user`,`updated_user`,`created_at`,`updated_at`,`deleted_at`) values (1,'A00001','usuario@test.com','7c4a8d09ca3762af61e59520943dc26494f8941b','PEPE','LE PU','CEO',1,'ADMIN','ADMIN','2016-01-12 23:47:50','2016-01-12 23:47:50',NULL),(2,'A00001','usuario@test','7c4a8d09ca3762af61e59520943dc26494f8941b','CLIENTE','SEGUNDO','CEO',1,'ADMIN','ADMIN','2016-03-27 14:41:45','2016-03-27 14:41:45',NULL);

/* Procedure structure for procedure `sp_ventas_rangos_representantes` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_ventas_rangos_representantes` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ventas_rangos_representantes`()
BEGIN
SELECT SUM(valores)  AS TOTAL_VALORES,co_sucu,sucursal,co_representante,representante, ano,mes FROM 
			     ventas_representante WHERE co_sucu='VLN' AND ano='2015' AND mes='01'  GROUP BY co_representante,MES;	
			     
			     
SELECT SUM(valores)  AS TOTAL_VALORES,co_sucu,sucursal,co_representante,representante, ano,mes FROM 
			     ventas_representante WHERE co_sucu='VLN' AND ano='2015'   GROUP BY co_representante,MES;				     
			     
			     
SELECT SUM(valores)  AS TOTAL_VALORES,co_sucu,sucursal,co_representante,representante, ano,mes FROM 
			     ventas_representante WHERE 
			     co_sucu='CCS' AND ventas_representante.`ano` BETWEEN '2014' AND '2015'   GROUP BY co_representante,MES;				     			     
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_ventas_representante` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_ventas_representante` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ventas_representante`(
		IN pcTipo	 	VARCHAR(3),
		IN pcSucu	 	VARCHAR(10),
		IN pcAno 		varchar(4),
		IN pcMes		VARCHAR(3),
		IN pcRepre		VARCHAR(10))
BEGIN	
	DECLARE lcTipo  VARCHAR(3) 	DEFAULT '';
	DECLARE lcSucu  VARCHAR(10) 	default '';
	DECLARE lcAno   VARCHAR(4)      DEFAULT '';
	DECLARE lcMes   VARCHAR(3)  	DEFAULT '';	
	DECLARE lcRepre VARCHAR(10)  	DEFAULT '';	
	SET lcTipo		=	pcTipo;	
	SET lcSucu		=	pcSucu;	
	SET lcAno		=	pcAno;
	SET lcMes		=	pcMes;		
	SET lcRepre		=	pcRepre;
case
	## Por Valores
	WHEN (pcTipo = 'VAL')
	THEN	
		CASE	
			     
			## Sucursal
			WHEN ((NOT pcSucu IS NULL) OR (NOT pcSucu = '')) AND
			     ((pcAno IS NULL)      OR (pcAno = ''))  	 AND
			     ((pcMes IS NULL)      OR (pcMes = ''))
			THEN	
			     SELECT SUM(valores)  AS TOTAL_VALORES,co_sucu,sucursal,co_representante,representante FROM 
			     ventas_representante WHERE co_sucu=lcSucu  GROUP BY co_sucu,co_representante;		     	
			## Año 
			WHEN ((pcSucu IS NULL) 	   OR (pcSucu = '')) 	AND
			     ((NOT pcAno IS NULL)  OR (NOT pcAno = '')) AND
			     ((pcMes  IS NULL)     OR (pcMes = ''))
			THEN	
			     SELECT SUM(valores)  AS TOTAL_VALORES,co_sucu,sucursal,co_representante,representante, ano FROM 
			     ventas_representante WHERE  ano=lcAno   GROUP BY co_representante;	
			     			    				
			## Sucursal y Año
			WHEN ((NOT pcSucu IS NULL) OR (NOT pcSucu = '')) AND 
			     ((NOT pcAno IS NULL)  OR (NOT pcAno = ''))  AND
			     ((pcMes IS NULL)      OR (pcMes = ''))  
			THEN	
			     SELECT SUM(valores)  AS TOTAL_VALORES,co_sucu,sucursal,co_representante,representante, ano FROM 
			     ventas_representante WHERE co_sucu=lcSucu AND ano=lcAno  GROUP BY co_representante;
				     
			## Año y Mes
			WHEN ((pcSucu IS NULL)     OR (pcSucu = ''))	  AND 
			     ((NOT pcAno IS NULL)  OR (NOT pcAno = ''))  AND
			     ((NOT pcMes IS NULL)  OR (NOT pcMes = ''))
			THEN	
			     SELECT SUM(valores)  AS TOTAL_VALORES,co_sucu,sucursal,co_representante,representante, ano,mes FROM 
			     ventas_representante WHERE  ano=lcAno AND mes=lcMes  GROUP BY co_representante;
			## Sucursal - Año - Mes
			WHEN ((NOT pcSucu  IS NULL)  OR (NOT pcSucu  = '')) AND 
			     ((NOT pcAno   IS NULL)  OR (NOT pcAno   = ''))  AND
			     ((NOT pcMes   IS NULL)  OR (NOT pcMes   = ''))  AND
			     ((    pcRepre IS NULL)  OR (    pcRepre = ''))
			THEN	
			     SELECT SUM(valores)  AS TOTAL_VALORES,co_sucu,sucursal,co_representante,representante, ano,mes FROM 
			     ventas_representante WHERE co_sucu=lcSucu AND ano=lcAno AND mes=lcMes  GROUP BY co_representante;			     
			## Sucursal - Año - Mes - Codigo de Representante
			WHEN ((NOT pcSucu  IS NULL)  OR (NOT pcSucu = '')) AND 
			     ((NOT pcAno   IS NULL)  OR (NOT pcAno = ''))  AND
			     ((NOT pcMes   IS NULL)  OR (NOT pcMes = ''))  AND
			     ((NOT pcRepre IS NULL)  OR (NOT pcRepre = ''))
			THEN	
			     SELECT SUM(valores)  AS TOTAL_VALORES,co_sucu,sucursal,co_representante,representante, ano,mes FROM 
			     ventas_representante WHERE co_sucu=lcSucu AND ano=lcAno AND mes=lcMes AND  co_representante = lcRepre
			     GROUP BY co_representante;				     
		else
		     SELECT SUM(valores)  AS TOTAL_VALORES,co_sucu,sucursal,co_representante,representante, ano FROM 
		     ventas_representante where 1=0;
		END CASE;	
	     
	## Por Unidad
	WHEN (pcTipo = 'UNI')
	THEN	
		CASE	
			## Sucursal
			WHEN ((NOT pcSucu IS NULL) OR (NOT pcSucu = '')) AND
			     ((pcAno IS NULL)      OR (pcAno = ''))  	  AND
			     ((pcMes IS NULL)     OR (pcMes = ''))
			THEN	
			     SELECT SUM(unidades)  AS TOTAL_UNIDADES,co_sucu,sucursal,co_representante,representante FROM 
			     ventas_representante WHERE co_sucu=lcSucu  GROUP BY co_sucu,co_representante;
			## Año 
			WHEN ((pcSucu IS NULL) 	   OR (pcSucu = '')) 	AND
			     ((NOT pcAno IS NULL)  OR (NOT pcAno = '')) AND
			     ((pcMes  IS NULL)     OR (pcMes = ''))
			THEN	
			     SELECT SUM(unidades)  AS TOTAL_UNIDADES,co_sucu,sucursal,co_representante,representante, ano FROM 
			     ventas_representante WHERE  ano=lcAno   GROUP BY co_representante;				     			     					    
		     	
				
			## Sucursal y Año
			WHEN ((NOT pcSucu IS NULL) OR (NOT pcSucu = '')) AND 
			     ((NOT pcAno IS NULL)  OR (NOT pcAno = ''))  AND
			     ((pcMes IS NULL)      OR (pcMes = ''))   
			THEN	
			     SELECT SUM(unidades)  AS TOTAL_UNIDADES,co_sucu,sucursal,co_representante,representante, ano FROM 
			     ventas_representante WHERE co_sucu=lcSucu AND ano=lcAno  GROUP BY co_representante;
				     
			## Año y Mes
			WHEN ((pcSucu IS NULL) 	   OR (pcSucu = '')) 	 AND 
			     ((NOT pcAno IS NULL)  OR (NOT pcAno = ''))  AND
			     ((NOT pcMes IS NULL)  OR (NOT pcMes = ''))
			THEN	
			     SELECT SUM(unidades)  AS TOTAL_UNIDADES,co_sucu,sucursal,co_representante,representante, ano,mes FROM 
			     ventas_representante WHERE  ano=lcAno AND mes=lcMes  GROUP BY co_representante;
			     
			## Sucursal y Año y Mes
			WHEN ((NOT pcSucu IS NULL) OR (NOT pcSucu = '')) AND 
			     ((NOT pcAno IS NULL)  OR (NOT pcAno = ''))  AND
			     ((NOT pcMes IS NULL)  OR (NOT pcMes = ''))   AND
			     ((    pcRepre IS NULL)  OR (    pcRepre = ''))
			THEN	
			     SELECT SUM(unidades)  AS TOTAL_UNIDADES,co_sucu,sucursal,co_representante,representante, ano,mes FROM 
			     ventas_representante WHERE co_sucu=lcSucu AND ano=lcAno AND mes=lcMes  GROUP BY co_representante;	
			     
			## Sucursal - Año - Mes - Codigo de Representante
			WHEN ((NOT pcSucu  IS NULL)  OR (NOT pcSucu = '')) AND 
			     ((NOT pcAno   IS NULL)  OR (NOT pcAno = ''))  AND
			     ((NOT pcMes   IS NULL)  OR (NOT pcMes = ''))  AND
			     ((NOT pcRepre IS NULL)  OR (NOT pcRepre = ''))
			THEN	
			     SELECT SUM(unidades)  AS TOTAL_UNIDADES,co_sucu,sucursal,co_representante,representante, ano,mes FROM 
			     ventas_representante WHERE co_sucu=lcSucu AND ano=lcAno AND mes=lcMes AND  co_representante = lcRepre
			     GROUP BY co_representante;				
		ELSE
		     SELECT SUM(valores)  AS TOTAL_VALORES,co_sucu,sucursal,co_representante,representante, ano FROM 
		     ventas_representante WHERE 1=0;			     	     	     		     		          
		END CASE;	
	
	ELSE
		SELECT SUM(valores)  AS TOTAL_VALORES,co_sucu,sucursal,co_representante,representante, ano FROM 
		ventas_representante WHERE 1=0;
end case;	
		
END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
