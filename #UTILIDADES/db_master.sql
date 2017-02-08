/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.9-MariaDB : Database - db_sun
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_sun` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;

USE `db_sun`;

/*Table structure for table `canales` */

DROP TABLE IF EXISTS `canales`;

CREATE TABLE `canales` (
  `co_canal` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `rif` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` text COLLATE utf8_spanish_ci,
  `direccion` text COLLATE utf8_spanish_ci,
  `clave` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuarios` int(6) DEFAULT '0',
  `activo` tinyint(1) DEFAULT '0',
  `created_user` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `updated_user` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`co_canal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `canales` */

insert  into `canales`(`co_canal`,`descripcion`,`rif`,`telefono`,`nombre`,`apellido`,`email`,`direccion`,`clave`,`usuarios`,`activo`,`created_user`,`updated_user`,`created_at`,`updated_at`) values ('TEST01','CANAL DE PRUEBA',NULL,NULL,'CANAL DE PRUEBA',NULL,NULL,NULL,NULL,0,1,'ADMIN','ADMIN','2016-01-12 23:23:22','2016-01-12 23:23:22');

/*Table structure for table `clientes` */

DROP TABLE IF EXISTS `clientes`;

CREATE TABLE `clientes` (
  `co_cli` varchar(6) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_cli` varchar(6) COLLATE utf8_spanish_ci DEFAULT NULL,
  `co_canal` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `co_sucu` varchar(6) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'CCS',
  `co_zona` varchar(6) COLLATE utf8_spanish_ci NOT NULL DEFAULT '01',
  `co_vend` varchar(6) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'ALFA',
  `razon_social` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `rif` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` text COLLATE utf8_spanish_ci,
  `clave` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion` text COLLATE utf8_spanish_ci,
  `pais` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ciudad` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `responsable` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email_alt` text COLLATE utf8_spanish_ci,
  `telefono_alt` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `comentario` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '0',
  `created_user` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `updated_user` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`co_cli`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `clientes` */

insert  into `clientes`(`co_cli`,`tipo_cli`,`co_canal`,`co_sucu`,`co_zona`,`co_vend`,`razon_social`,`rif`,`telefono`,`email`,`clave`,`direccion`,`pais`,`ciudad`,`estado`,`responsable`,`email_alt`,`telefono_alt`,`comentario`,`activo`,`created_user`,`updated_user`,`created_at`,`updated_at`,`deleted_at`) values ('A00001','TEST','TEST01','CCS','01','ALFA','CANAL DE PRUEBA',NULL,NULL,'CANAL DE PRUEBA',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'ADMIN','ADMIN','2016-01-12 23:31:57','2016-01-12 23:31:57',NULL);

/*Table structure for table `lice` */

DROP TABLE IF EXISTS `lice`;

CREATE TABLE `lice` (
  `co_lice` varchar(24) COLLATE utf8_spanish_ci NOT NULL,
  `co_tipo_lice` varchar(6) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'BASIC',
  `co_pro` varchar(10) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'KPIADMIN',
  `tipo_producto` varchar(45) COLLATE utf8_spanish_ci DEFAULT 'ALGODON',
  `co_cli` varchar(6) COLLATE utf8_spanish_ci NOT NULL,
  `codigo` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `activa` tinyint(1) DEFAULT '0',
  `ds_server` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ds_dbname` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ds_user` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ds_pass` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ds_port` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dw_server` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dw_dbname` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dw_user` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dw_pass` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dw_port` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `empresa` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direc_fact` text COLLATE utf8_spanish_ci,
  `tele_fact` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email_fact` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_ult_sync` datetime DEFAULT NULL,
  `created_user` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `updated_user` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `actualiza_email` tinyint(1) DEFAULT '0',
  `actualiza_sp` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`co_lice`),
  UNIQUE KEY `co_lice` (`co_lice`,`co_tipo_lice`,`co_pro`,`co_cli`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `lice` */

insert  into `lice`(`co_lice`,`co_tipo_lice`,`co_pro`,`tipo_producto`,`co_cli`,`codigo`,`activa`,`ds_server`,`ds_dbname`,`ds_user`,`ds_pass`,`ds_port`,`dw_server`,`dw_dbname`,`dw_user`,`dw_pass`,`dw_port`,`empresa`,`direc_fact`,`tele_fact`,`email_fact`,`fecha_ult_sync`,`created_user`,`updated_user`,`created_at`,`updated_at`,`actualiza_email`,`actualiza_sp`) values ('A00KPIADMINA000012016010','BASIC','KPIADMIN','algodon','A00001','KPIADMINA00001',1,NULL,NULL,NULL,NULL,NULL,'nombre del servidor web este si debes colocarlo','nombre de la base de datos web este si debes colocarlo','usuario de la base de datos web este si debes colocarlo','password de la base de datos web este si debes colocarlo',NULL,'Enterprise TEST',NULL,NULL,NULL,NULL,'ADMIN','ADMIN','2016-01-13 00:30:21','2016-01-13 00:30:21',0,0);

/*Table structure for table `liced` */

DROP TABLE IF EXISTS `liced`;

CREATE TABLE `liced` (
  `co_liced` int(255) NOT NULL AUTO_INCREMENT,
  `co_lice` varchar(24) COLLATE utf8_spanish_ci NOT NULL,
  `co_tipo_lice` varchar(6) COLLATE utf8_spanish_ci DEFAULT NULL,
  `co_pro` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fe_inicio` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `fe_fin` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `activa` tinyint(1) DEFAULT '0',
  `created_user` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `updated_user` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`co_liced`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `liced` */

insert  into `liced`(`co_liced`,`co_lice`,`co_tipo_lice`,`co_pro`,`fe_inicio`,`fe_fin`,`activa`,`created_user`,`updated_user`,`created_at`,`updated_at`) values (1,'A00KPIADMINA000012016010','BASIC','KPIADMIN','2016-01-13 00:40:28','2016-12-22 00:00:00',1,'ADMIN','ADMIN','2016-01-13 00:40:28','2016-01-13 00:40:28');

/*Table structure for table `modulos` */

DROP TABLE IF EXISTS `modulos`;

CREATE TABLE `modulos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `co_grupo` varchar(6) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(80) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `descrpcion` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `created_user` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT 'SYSTEM',
  `updated_user` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT 'SYSTEM',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `co_grupo` (`co_grupo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `modulos` */

/*Table structure for table `modulos_lice` */

DROP TABLE IF EXISTS `modulos_lice`;

CREATE TABLE `modulos_lice` (
  `co_modulo` varchar(6) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL,
  `created_user` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `updated_user` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`co_modulo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `modulos_lice` */

insert  into `modulos_lice`(`co_modulo`,`descripcion`,`activo`,`created_user`,`updated_user`,`created_at`,`updated_at`,`deleted_at`) values ('BANCOS','BANCOS',1,'ADMIN','ADMIN','2016-01-13 00:02:10','2016-01-13 00:02:10',NULL),('COMPRA','COMPRAS',1,'ADMIN','ADMIN','2016-01-13 00:02:10','2016-01-13 00:02:10',NULL),('CXC','CXC',1,'ADMIN','ADMIN','2016-01-13 00:02:10','2016-01-13 00:02:10',NULL),('CXP','CXP',1,'ADMIN','ADMIN','2016-01-13 00:02:10','2016-01-13 00:02:10',NULL),('DASH1','MUESTRA EL DAHS 1',1,'ADMIN','ADMIN','2016-01-13 00:02:10','2016-01-13 00:02:10',NULL),('DASH2','MUESTRA EL DAHS 2',1,'ADMIN','ADMIN','2016-01-13 00:02:10','2016-01-13 00:02:10',NULL),('DASH3','MUESTRA EL DAHS 3',1,'ADMIN','ADMIN','2016-01-13 00:02:10','2016-01-13 00:02:10',NULL),('ORDCOM','ORDCOMP',1,'ADMIN','ADMIN','2016-01-13 00:02:10','2016-01-13 00:02:10',NULL),('PPTO','PPTO',1,'ADMIN','ADMIN','2016-01-13 00:02:10','2016-01-13 00:02:10',NULL),('VENTAS','VENTAS',1,'ADMIN','ADMIN','2016-01-13 00:02:10','2016-01-13 00:02:10',NULL);

/*Table structure for table `modulos_users` */

DROP TABLE IF EXISTS `modulos_users`;

CREATE TABLE `modulos_users` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `id_grupo` varchar(6) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_user` varchar(6) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `co_grupo` (`id_grupo`,`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `modulos_users` */

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `perfiles` */

DROP TABLE IF EXISTS `perfiles`;

CREATE TABLE `perfiles` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `co_perfil` varchar(6) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `create` tinyint(1) DEFAULT '0',
  `read` tinyint(1) DEFAULT '0',
  `update` tinyint(1) DEFAULT '0',
  `delete` tinyint(1) DEFAULT '0',
  `activo` tinyint(1) NOT NULL DEFAULT '0',
  `created_user` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `updated_user` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `co_perfil` (`co_perfil`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `perfiles` */

insert  into `perfiles`(`id`,`co_perfil`,`descripcion`,`create`,`read`,`update`,`delete`,`activo`,`created_user`,`updated_user`,`created_at`,`updated_at`,`deleted_at`) values (1,'DBA','ADMINISTRADOR BASE DE DATOS',0,0,0,0,1,'ADMIN','ADMIN','2016-01-12 01:16:48','2016-01-12 01:16:48',NULL);

/*Table structure for table `productos` */

DROP TABLE IF EXISTS `productos`;

CREATE TABLE `productos` (
  `co_pro` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `activo` tinyint(1) DEFAULT '0',
  `created_user` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `updated_user` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`co_pro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `productos` */

insert  into `productos`(`co_pro`,`nombre`,`descripcion`,`activo`,`created_user`,`updated_user`,`created_at`,`updated_at`,`deleted_at`) values ('KPIADMIN','NO ES TU PEO #1','NO ES TU PEO #1',1,'ADMIN','ADMIN','2016-01-12 23:10:54','2016-01-12 23:10:54',NULL);

/*Table structure for table `tipo_lice` */

DROP TABLE IF EXISTS `tipo_lice`;

CREATE TABLE `tipo_lice` (
  `co_tipo_lice` varchar(6) COLLATE utf8_spanish_ci NOT NULL,
  `co_pro` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `created_user` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `updated_user` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`co_tipo_lice`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `tipo_lice` */

insert  into `tipo_lice`(`co_tipo_lice`,`co_pro`,`descripcion`,`created_user`,`updated_user`,`created_at`,`updated_at`,`deleted_at`) values ('BASIC','KPIADMIN','BASICA','ADMIN','ADMIN','2016-01-12 23:53:39','2016-01-12 23:53:39',NULL);

/*Table structure for table `tipo_liced` */

DROP TABLE IF EXISTS `tipo_liced`;

CREATE TABLE `tipo_liced` (
  `codigo` int(255) NOT NULL AUTO_INCREMENT,
  `co_tipo_lice` varchar(6) COLLATE utf8_spanish_ci NOT NULL,
  `co_modulo` varchar(6) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `created_user` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `updated_user` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  UNIQUE KEY `co_tipo_lice` (`co_tipo_lice`,`co_modulo`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `tipo_liced` */

insert  into `tipo_liced`(`codigo`,`co_tipo_lice`,`co_modulo`,`descripcion`,`created_user`,`updated_user`,`created_at`,`updated_at`,`deleted_at`) values (1,'BASIC','DASH1','MUESTRA EL DAHS 1','ADMIN','ADMIN','2016-01-13 00:09:17','2016-01-13 00:09:17',NULL),(2,'BASIC','DASH2','MUESTRA EL DAHS 2','ADMIN','ADMIN','2016-01-13 00:09:17','2016-01-13 00:09:17',NULL),(3,'BASIC','DASH3','MUESTRA EL DAHS 3','ADMIN','ADMIN','2016-01-13 00:09:17','2016-01-13 00:09:17',NULL),(4,'BASIC','VENTAS','MODULO VENTAS','ADMIN','ADMIN','2016-01-13 00:09:17','2016-01-13 00:09:17',NULL),(5,'BASIC','COMPRA','MODULO COMPRAS','ADMIN','ADMIN','2016-01-13 00:09:17','2016-01-13 00:09:17',NULL),(6,'BASIC','CXC','MODULO CXC','ADMIN','ADMIN','2016-01-13 00:09:17','2016-01-13 00:09:17',NULL),(7,'BASIC','CXP','MODULO CXP','ADMIN','ADMIN','2016-01-13 00:09:17','2016-01-13 00:09:17',NULL),(8,'BASIC','ORDCOM','MODULO ORDCOMP','ADMIN','ADMIN','2016-01-13 00:09:17','2016-01-13 00:09:17',NULL),(9,'BASIC','PPTO','MODULO PPTO','ADMIN','ADMIN','2017-01-25 16:13:25','2017-01-25 16:13:25',NULL),(10,'BASIC','BANCOS','MODULO BANCOS','ADMIN','ADMIN','2017-01-25 16:29:03','2017-01-25 16:29:03',NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `co_usuario` varchar(6) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `created_user` varchar(255) NOT NULL DEFAULT 'SYSTEM',
  `updated_user` varchar(255) NOT NULL DEFAULT 'SYSTEM',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `co_usuario` (`co_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`password`,`remember_token`,`co_usuario`,`email`,`nombre`,`apellido`,`activo`,`created_user`,`updated_user`,`created_at`,`updated_at`,`deleted_at`) values (107,'dev.jonnathan','$2y$10$HfDm2Okh9OtMwYnL9eqai.vyf8IF6Y5zgkCDzbdqf1y.3DZS/Y686','WVBs8VPeYXYEARqubyHTyMeoanxMqZXPHanNC6IjIiLpVGPPggUUBfgOJDtW','develo','developer.asm@gmail.com','Jonnathan','Piñero',1,'SYSTEM','SYSTEM','2016-07-17 02:20:15','2016-07-17 20:20:22','0000-00-00 00:00:00'),(110,'jonnathan','$2y$10$8ImgCFoQcGn1W06u2l/9i.f30T1bzhX/o3h13H40FxfyQD4JAMfJS','ogNuBmr2RvrJ02RMReAMPKl5gDmcnCWeERGQMuADYdmMlzL4L8oHYbsk49pJ','admin','jonnathanx@gmail.com','jonnathan Xavier','Piñero Tamayo',1,'SYSTEM','SYSTEM','2016-07-17 19:18:43','2016-12-02 22:12:47','0000-00-00 00:00:00');

/*Table structure for table `usuario_clientes` */

DROP TABLE IF EXISTS `usuario_clientes`;

CREATE TABLE `usuario_clientes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `co_cli` varchar(6) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
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
  UNIQUE KEY `co_cli_email` (`co_cli`,`email`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `co_cli` (`co_cli`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `usuario_clientes` */

insert  into `usuario_clientes`(`id`,`co_cli`,`email`,`password`,`remember_token`,`nombre`,`apellido`,`descripcion`,`activo`,`created_user`,`updated_user`,`created_at`,`updated_at`,`deleted_at`) values (1,'A00001','usuario@test.com','5ea345ab330cf29f81d8de9bf5466f508fe351e1',NULL,'PEPE','LE PU','CEO',1,'ADMIN','ADMIN','2016-01-13 01:17:50','2016-01-13 01:17:50',NULL),(2,'A00002','usuario@test','5ea345ab330cf29f81d8de9bf5466f508fe351e1',NULL,'CLIENTE','SEGUNDO','CEO',1,'ADMIN','ADMIN','2016-03-27 16:11:45','2016-03-27 16:11:45',NULL);

/* Procedure structure for procedure `get_data_user` */

/*!50003 DROP PROCEDURE IF EXISTS  `get_data_user` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `get_data_user`(
		IN lcEmail 	VARCHAR(255),
		IN lcClave	Varchar(255))
BEGIN
	IF (not(lcEmail IS NULL) AND (not lcClave IS NULL)) THEN
				
		SELECT a.co_cli,a.email,a.nombre,a.apellido,a.descripcion,a.clave,a.activo AS cliente_activo,a.updated_at,
		       b.co_lice,b.co_tipo_lice,b.co_pro,b.dw_server,b.dw_dbname,b.dw_user,b.dw_pass,b.dw_port,b.activa AS lice_activa,
		       c.fe_inicio,c.fe_fin
		FROM usuario_clientes AS a INNER JOIN lice  AS b ON a.co_cli 		= b.co_cli
					   INNER JOIN liced AS c ON b.co_lice		= c.co_lice AND 
								    b.co_tipo_lice	= c.co_tipo_lice AND
								    b.co_pro		= c.co_pro
		WHERE a.email = lcEmail AND a.clave = lcClave AND c.activa = 1;	
	end if;	
END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_usuario_clientes` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_usuario_clientes` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_usuario_clientes`(
				IN lcEmail 	VARCHAR(255),
				IN lcPassword	VARCHAR(255))
BEGIN
	IF (NOT(lcEmail IS NULL) AND (NOT lcPassword IS NULL)) THEN
				
		SELECT a.id,a.name,a.email,a.password,a.remember_token,a.co_cli,a.nombre,a.apellido,a.descripcion,d.activo AS cliente_activo,
		       a.created_at,a.updated_at,a.deleted_at,
		       b.co_lice,b.co_tipo_lice,b.co_pro,b.dw_server,b.dw_dbname,b.dw_user,b.dw_pass,b.dw_port,b.activa AS lice_activa,
		       c.fe_inicio,c.fe_fin
		FROM usuario_clientes AS a INNER JOIN lice     AS b ON a.co_cli 	= b.co_cli
					   INNER JOIN liced    AS c ON b.co_lice	= c.co_lice AND 
								    b.co_tipo_lice	= c.co_tipo_lice AND
								    b.co_pro		= c.co_pro
					   INNER join clientes AS d ON a.co_cli		= d.co_cli 
		WHERE a.email = lcEmail AND a.password =lcPassword;	
	END IF;	
END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_usuarios` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_usuarios` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_usuarios`(
			IN lcEmail 	VARCHAR(255),
			IN lcName 	VARCHAR(255),			
			IN lcClave	VARCHAR(255)    
    )
BEGIN
	IF (NOT(lcName IS NULL) AND (NOT lcClave IS NULL)) THEN	
		SELECT id,NAME,PASSWORD,remember_token,co_usuario,email,nombre,apellido,
			activo,co_usu_in,co_usu_mo,created_at,updated_at FROM `users`
			WHERE NAME=lcName AND PASSWORD=lcClave;	
	END IF;
	IF (NOT(lcEmail IS NULL) AND (NOT lcClave IS NULL)) THEN
		
		SELECT id,NAME,PASSWORD,remember_token,co_usuario,email,nombre,apellido,
			activo,co_usu_in,co_usu_mo,created_at,updated_at FROM `users`
			WHERE email=lcEmail AND PASSWORD=lcClave;	
	END IF;	
	
    END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
