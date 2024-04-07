-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: batalla_de_niquitao
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `administrativo`
--

DROP TABLE IF EXISTS `administrativo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administrativo` (
  `idAdministrativo` bigint(20) unsigned NOT NULL,
  `Nombres_A` varbinary(255) NOT NULL,
  `Apellidos_A` varbinary(255) NOT NULL,
  `Telefono_A` varbinary(255) NOT NULL,
  `Correo_A` varbinary(255) NOT NULL,
  PRIMARY KEY (`idAdministrativo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administrativo`
--

LOCK TABLES `administrativo` WRITE;
/*!40000 ALTER TABLE `administrativo` DISABLE KEYS */;
INSERT INTO `administrativo` VALUES (12345678,'�ޝB\nI??�!Q\0�J�R��3;��	6��','\"A��ӅȚ��T��oQA�6@2���\0*�9�','\\�\\o�L�ft\\⒜_�2�]��zD���:;','<Oy�J�� ea�5�ek��\Zn�\"wxN��Rs���6��R\r�)F���');
/*!40000 ALTER TABLE `administrativo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ciudad`
--

DROP TABLE IF EXISTS `ciudad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ciudad` (
  `idCiudad` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Ciudad` varbinary(255) NOT NULL,
  `Codigo_P` varbinary(255) NOT NULL,
  `Municipio` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`idCiudad`),
  KEY `Municipio_idx` (`Municipio`),
  CONSTRAINT `Municipio` FOREIGN KEY (`Municipio`) REFERENCES `municipio` (`idMunicipio`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ciudad`
--

LOCK TABLES `ciudad` WRITE;
/*!40000 ALTER TABLE `ciudad` DISABLE KEYS */;
INSERT INTO `ciudad` VALUES (1,'a�b�����ۨ�Ih��Z��h����Az��','I	w���o(\n�F#��S�5����*���',1);
/*!40000 ALTER TABLE `ciudad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contrato`
--

DROP TABLE IF EXISTS `contrato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contrato` (
  `idContrato` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `VigenciaI_C` date NOT NULL,
  `VigenciaF_C` date NOT NULL,
  PRIMARY KEY (`idContrato`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contrato`
--

LOCK TABLES `contrato` WRITE;
/*!40000 ALTER TABLE `contrato` DISABLE KEYS */;
INSERT INTO `contrato` VALUES (1,'2024-01-01','2024-07-01');
/*!40000 ALTER TABLE `contrato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `correos`
--

DROP TABLE IF EXISTS `correos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `correos` (
  `idCorreos` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Correo` varbinary(255) NOT NULL,
  `Correo2` varbinary(255) DEFAULT NULL,
  PRIMARY KEY (`idCorreos`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `correos`
--

LOCK TABLES `correos` WRITE;
/*!40000 ALTER TABLE `correos` DISABLE KEYS */;
INSERT INTO `correos` VALUES (1,'<Oy�J�� ea�5�ek��\Zn�\"wxN��Rs���6��R\r�)F���','茘�Q��*E��4+��D���\\%VA%©jď�'),(2,'<Oy�J�� ea�5�ek��\Zn�\"wxN��Rs���6��R\r�)F���','茘�Q��*E��4+��D���\\%VA%©jď�'),(3,'<Oy�J�� ea�5�ek��\Zn�\"wxN��Rs���6��R\r�)F���','茘�Q��*E��4+��D���\\%VA%©jď�');
/*!40000 ALTER TABLE `correos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `direccion`
--

DROP TABLE IF EXISTS `direccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `direccion` (
  `idDireccion` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Casa` varbinary(255) NOT NULL,
  `Calle` varbinary(255) NOT NULL,
  `Vereda` varbinary(255) DEFAULT NULL,
  `Piso` varbinary(255) DEFAULT NULL,
  `Edificio` varbinary(255) DEFAULT NULL,
  `Punto_R` varbinary(255) NOT NULL,
  `Parroquia` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`idDireccion`),
  KEY `Parroquia_idx` (`Parroquia`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `direccion`
--

LOCK TABLES `direccion` WRITE;
/*!40000 ALTER TABLE `direccion` DISABLE KEYS */;
INSERT INTO `direccion` VALUES (1,'�c��}P�PR8���s�7K&�^J.�Aa����g}','�ެ��Q�Q���\n,8\n>d�:@��0�4�|��\r<','茘�Q��*E��4+��D���\\%VA%©jď�','茘�Q��*E��4+��D���\\%VA%©jď�','茘�Q��*E��4+��D���\\%VA%©jď�','��׷S�6�\'󗲠o�[���7qqV&tL���yl�@q�G�G������PS',1),(2,'�c��}P�PR8���s�7K&�^J.�Aa����g}','�ެ��Q�Q���\n,8\n>d�:@��0�4�|��\r<','茘�Q��*E��4+��D���\\%VA%©jď�','茘�Q��*E��4+��D���\\%VA%©jď�','茘�Q��*E��4+��D���\\%VA%©jď�','��׷S�6�\'󗲠o�[���7qqV&tL���yl�@q�G�G������PS',1),(3,'�c��}P�PR8���s�7K&�^J.�Aa����g}','�ެ��Q�Q���\n,8\n>d�:@��0�4�|��\r<','茘�Q��*E��4+��D���\\%VA%©jď�','茘�Q��*E��4+��D���\\%VA%©jď�','茘�Q��*E��4+��D���\\%VA%©jď�','��׷S�6�\'󗲠o�[���7qqV&tL���yl�@q�G�G������PS',1);
/*!40000 ALTER TABLE `direccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado`
--

DROP TABLE IF EXISTS `estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estado` (
  `idEstado` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Estado` varbinary(255) NOT NULL,
  PRIMARY KEY (`idEstado`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado`
--

LOCK TABLES `estado` WRITE;
/*!40000 ALTER TABLE `estado` DISABLE KEYS */;
INSERT INTO `estado` VALUES (1,'�6Cf�eR����/��������h���=');
/*!40000 ALTER TABLE `estado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estudiante_ii`
--

DROP TABLE IF EXISTS `estudiante_ii`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estudiante_ii` (
  `Cedula_EII` bigint(20) unsigned NOT NULL,
  `Nombres_EII` varbinary(255) NOT NULL,
  `Apellidos_EII` varbinary(255) NOT NULL,
  `Matricula_EII` bigint(20) unsigned NOT NULL,
  `FechaN_EII` date NOT NULL,
  `Sexo_EII` varbinary(255) NOT NULL,
  `Representante_EII` bigint(20) unsigned NOT NULL,
  `Seccion_EII` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`Cedula_EII`),
  KEY `Representante_EII_idx` (`Representante_EII`),
  KEY `Matricula_EII_idx` (`Matricula_EII`),
  KEY `Seccion_EII_idx` (`Seccion_EII`),
  CONSTRAINT `Matricula_EII` FOREIGN KEY (`Matricula_EII`) REFERENCES `matricula` (`idMatricula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `Representante_EII` FOREIGN KEY (`Representante_EII`) REFERENCES `representante_i` (`Cedula_RI`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `Seccion_EII` FOREIGN KEY (`Seccion_EII`) REFERENCES `seccion` (`idSeccion`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudiante_ii`
--

LOCK TABLES `estudiante_ii` WRITE;
/*!40000 ALTER TABLE `estudiante_ii` DISABLE KEYS */;
INSERT INTO `estudiante_ii` VALUES (31123097,'��<�g�`kݑ3\r�T.[�Sx�_^T$\'�I3','�ZӚ�<sc�B�����ErC�3ɝ2�q��y',2019,'2003-08-08','�ΐ��\"�@Ҧޏ��`�]�ƾ���f��Z�}',30840119,2),(31123098,'�����#���!�T�z�;ʿx�\Z��Z@','�{�޾������q	)�d6��S�]�I&',2019,'2007-08-08','�ΐ��\"�@Ҧޏ��`�]�ƾ���f��Z�}',30840119,1);
/*!40000 ALTER TABLE `estudiante_ii` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lapso`
--

DROP TABLE IF EXISTS `lapso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lapso` (
  `idLapso` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Nombre_L` varbinary(255) NOT NULL,
  PRIMARY KEY (`idLapso`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lapso`
--

LOCK TABLES `lapso` WRITE;
/*!40000 ALTER TABLE `lapso` DISABLE KEYS */;
INSERT INTO `lapso` VALUES (1,'fd�94��f��51R��Wt#��ԣ�X!$�'),(2,':��V\n���u�����g�=�(���R��%m,'),(3,'�9m�/��\"CRJM8�u�;�������	@�'),(4,'ޅ�����\"�]�>��EhȚ/���Z���)�-');
/*!40000 ALTER TABLE `lapso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_and_v`
--

DROP TABLE IF EXISTS `m_and_v`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_and_v` (
  `idM_and_V` bigint(20) unsigned NOT NULL,
  `Mision` varchar(1024) NOT NULL,
  `Vision` varchar(1024) NOT NULL,
  `Director` varbinary(255) NOT NULL,
  PRIMARY KEY (`idM_and_V`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_and_v`
--

LOCK TABLES `m_and_v` WRITE;
/*!40000 ALTER TABLE `m_and_v` DISABLE KEYS */;
INSERT INTO `m_and_v` VALUES (1,'Coloque su Misión aquí','Coloque su Visión aquí','�?�Sq�Rc#a�Q��#�t��1���3,�aZ�');
/*!40000 ALTER TABLE `m_and_v` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materia`
--

DROP TABLE IF EXISTS `materia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materia` (
  `idMateria` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Materia_M` varbinary(255) NOT NULL,
  `HoraI_M` time NOT NULL,
  `HoraF_M` time NOT NULL,
  `Plan_Estudio_M` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`idMateria`),
  KEY `Plan_Estudio_M_idx` (`Plan_Estudio_M`),
  CONSTRAINT `Plan_Estudio_M` FOREIGN KEY (`Plan_Estudio_M`) REFERENCES `plan_estudio` (`idPlan_Estudio`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materia`
--

LOCK TABLES `materia` WRITE;
/*!40000 ALTER TABLE `materia` DISABLE KEYS */;
INSERT INTO `materia` VALUES (1,'�i��*�Z�P� �SC�Y��a�\"��ւ�|����~��p��r�G','07:00:00','11:30:00',1),(2,'��J�h�SH1�S3�9H\0|��WD��\Z�Y�I�n���r4��D��','07:00:00','11:30:00',2),(3,'��v\'�£�Iƭ\Z2<�3C�\0��/��Cy�D��X3}-�X���Z��\'!','07:00:00','11:30:00',3),(4,'�i��*�Z�P� ����(��ݯ&jJ��XQ�����f�i^P�r','07:00:00','11:30:00',4),(5,'��J�h�SH1�S3�9�Hc�u[o����`ަ��^?@VC�:Zjv�','07:00:00','11:30:00',5),(6,'��v\'�£�Iƭ\Z2<�ئ4T\0��\'�s��{D��~ǖ��tg��5��3�O','07:00:00','11:30:00',6),(7,'i�z��t@L��M�6���_����j�w��ZC�0�(�X���ˇNߦ�','07:00:00','11:30:00',7),(8,'Ǵ@d�8C�#�ӵE7�0DR)\'��_jF�\"��������E2\n�\0�X�','07:00:00','11:30:00',8),(9,'T\'ke�\'�bk�1q�_&e���GE���;s<���P�����	l�&����','07:00:00','11:30:00',9),(10,'8��ѴhF	�#�-��R���668�	U�+��','07:00:00','08:00:00',10),(11,'D��4�.��Z�sD���@�{�}����4��','08:00:00','09:00:00',10),(12,'^0\\o��r�	��S�\Z��w�S����Y�v���\rD','09:00:00','10:00:00',10),(13,'����}F8��h��=�|���՟&�A��-�3t��?*Yb���','10:00:00','11:00:00',10),(14,'>��T^����.r�^�f����j��|��(�dx�%ͬ���sh�5�1mo','11:00:00','12:00:00',10),(15,'i;Ea7Qx���c�DLM\n�������\'Y���:�v�� i(�Z;�','12:00:00','13:00:00',10),(16,'1��䜁+[\'.?e�\0���\'*�]9#��V�3T���z�4�fɆ�(b�+N�D�m�!gjqϱ�8','13:00:00','14:00:00',10),(17,'_}_/l��Y\"ev��]�Zi�G��bU�\Z�U���f�b����\"�����~��','14:00:00','15:00:00',10),(18,'��q��\"���[�\\���<�L����\'�ta.tQU��}��H����','15:00:00','16:00:00',10),(19,'X�gy�g\ZX�i���!��bL��m��PN�M','07:00:00','08:00:00',11),(20,'ۄ`�X���\"q�3������@�4�Ý��$�=','08:00:00','09:00:00',11),(21,'?� �?��x<��Y�ۆ�eu\\>�_{l\r}����','09:00:00','10:00:00',11),(22,'���V �	+�t��H�(�QѮ��B|��B�','10:00:00','11:00:00',11),(23,'1��䜁+[\'.?e�\0���\'*�]9#��V�3T���yK_�.��mx�.+9�>�&N��X�L�>�','11:00:00','12:00:00',11),(24,'����}F8��h��=���%0Y��(j�M�V�Ƅ�eŧ�W�\\��F���','12:00:00','13:00:00',11),(25,'>��T^����.r�^�k\\�`���7�\n\"/��3k�m޵���1Cz<','13:00:00','14:00:00',11),(26,'��q��\"���[�\\������M��h诲fa�֠�+[G�3�W��=(x,�','14:00:00','15:00:00',11),(27,'_}_/l��Y\"ev��]�Zb��D;L��Bz�9ϕ�J�@�r�_�#4�','15:00:00','16:00:00',11),(28,'3�=q�4I\n���q_�\Z�H+�5{�U��R\n\\��`�','07:00:00','08:00:00',12),(29,'�v��Z��{�n�1	%�11\'%e�iO�m�h�?�','08:00:00','09:00:00',12),(30,'AT{����GH7^���巘�_�	q�@Ӯ��a�P�e�}6�_���n','09:00:00','10:00:00',12),(31,'����}F8��h��=\0�\0b-ie����0T��ф}T5��s�ԏ���W','10:00:00','11:00:00',12),(32,'\'`���B���!�ލ{�\\����Ⱥg���&��','11:00:00','12:00:00',12),(33,'e�f��\r�$�	%@%��\\��l�����m','12:00:00','13:00:00',12),(34,'>���-,U�\nYK��j�1�&�e������U','13:00:00','14:00:00',12),(35,'1��䜁+[\'.?e�\0��ݺs\'M	2�27���a�(agY!�n8����<=��%�~�&��Zk�','14:00:00','15:00:00',12),(36,'_}_/l��Y\"ev��]�Z�쿛`�*\'6�&@Ͼ��+�/����.R�=���i','15:00:00','16:00:00',12),(37,'��q��\"���[�\\����CC|Y����Q�̜��&R%���U��>G���t','16:00:00','17:00:00',12),(38,'!��-����g�<�?t�UA�(�=�����+','07:00:00','08:00:00',13),(39,'?�\Z����JP8���4F(0�մ�H�p���vO\n','08:00:00','09:00:00',13),(40,'2p�;	Y�y$BU[�ޞw��������F��','09:00:00','10:00:00',13),(41,'����}F8��h��=���́<wC��D7Aۣ�-g��Ս���)�T�','10:00:00','11:00:00',13),(42,'\r��F@9N/]�|$G�g��f�?�*�x��-ر','11:00:00','12:00:00',13),(43,'�͏&��Tfu���ډ�)BKx�,�j\n$Ec','12:00:00','13:00:00',13),(44,'{\Z��IgYcv��8	�����zB���l','13:00:00','14:00:00',13),(45,'1��䜁+[\'.?e�\0���\'*�]9#��V�3T�|�H��Q�ǥeE8NR��{����z��n#�k','14:00:00','15:00:00',13),(46,'�\0�������2�/�r2[�4#��2r�3�;��A��s��TN����ҹ�','15:00:00','16:00:00',13),(47,'_}_/l��Y\"ev��]�Z�^F��C����\'�!-;A����<&/�d]��','16:00:00','17:00:00',13),(48,'��q��\"���[�\\����(��xI����fC�W�BtOvd�9���W','17:00:00','18:00:00',13),(49,'����;I�=�YQ%��BX��ѳ�u暷B�','07:00:00','08:00:00',14),(50,'��;QF5�D}	1�Y��Ѥ�G{��a�ڝ','08:00:00','09:00:00',14),(51,'t���֏P��nc7F���%�9�9\0d�f�','09:00:00','10:00:00',14),(52,'����}F8��h��=�=&��-7P3��7�3:��)���cH\0��yq','10:00:00','11:00:00',14),(53,'a~�\n�����w	�&���u���V�R\\���J','11:00:00','12:00:00',14),(54,'C�\\<4�Uw���H���1­�+y�i�}d','12:00:00','13:00:00',14),(55,'N�:&�w��ԇ�t2�u�t\'�#�\n����]1t�����0�>o��`','13:00:00','14:00:00',14),(56,'��q��\"���[�\\���G��:j���k��N�	�;��ڃ�~��в�','14:00:00','15:00:00',14),(57,'��&>�R�5h@\nb�5ٿ\Z�V����c�QS��z��Opaj��f�h','15:00:00','16:00:00',14),(58,'1��䜁+[\'.?e�\0��ݺs\'M	2�27���a�($z����dJ3�M/�D9�\\���E���]�Ҹ','16:00:00','17:00:00',14),(59,'_}_/l��Y\"ev��]�Z��\r��v%GVU˄��V	��RW�\'lHhMr�','17:00:00','18:00:00',14),(60,'��Xގ�1��)�Q4k�P*>��u`�w�v���','18:00:00','19:00:00',14);
/*!40000 ALTER TABLE `materia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materia_has_literal`
--

DROP TABLE IF EXISTS `materia_has_literal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materia_has_literal` (
  `Materia_idMateria` bigint(20) unsigned NOT NULL,
  `Lapso_idLapso` bigint(20) unsigned NOT NULL,
  `Literal` varbinary(255) NOT NULL,
  `Fecha_carga` date NOT NULL,
  `Observacion` varbinary(255) DEFAULT NULL,
  `Estudiante_ML` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`Materia_idMateria`,`Lapso_idLapso`,`Estudiante_ML`),
  KEY `fk_Materia_has_Literal_Materia1_idx` (`Materia_idMateria`),
  KEY `Estudiante_Literal_idx` (`Estudiante_ML`),
  KEY `Lapso_Literal_idx` (`Lapso_idLapso`),
  CONSTRAINT `Estudiante_Literal` FOREIGN KEY (`Estudiante_ML`) REFERENCES `estudiante_ii` (`Cedula_EII`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `Lapso_Literal` FOREIGN KEY (`Lapso_idLapso`) REFERENCES `lapso` (`idLapso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Materia_has_Literal_Materia1` FOREIGN KEY (`Materia_idMateria`) REFERENCES `materia` (`idMateria`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materia_has_literal`
--

LOCK TABLES `materia_has_literal` WRITE;
/*!40000 ALTER TABLE `materia_has_literal` DISABLE KEYS */;
/*!40000 ALTER TABLE `materia_has_literal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materia_has_notas`
--

DROP TABLE IF EXISTS `materia_has_notas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materia_has_notas` (
  `Materia_idMateria` bigint(20) unsigned NOT NULL,
  `Lapso_idLapso` bigint(20) unsigned NOT NULL,
  `Nota` float NOT NULL,
  `Fecha_carga` date NOT NULL,
  `Observacion` varbinary(255) DEFAULT NULL,
  `Estudiante_MN` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`Materia_idMateria`,`Lapso_idLapso`,`Estudiante_MN`),
  KEY `fk_Materia_has_Notas_Notas1_idx` (`Lapso_idLapso`),
  KEY `fk_Materia_has_Notas_Materia1_idx` (`Materia_idMateria`),
  KEY `Estudiante_N_idx` (`Estudiante_MN`),
  CONSTRAINT `Estudiante_N` FOREIGN KEY (`Estudiante_MN`) REFERENCES `estudiante_ii` (`Cedula_EII`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Materia_has_Notas_Materia1` FOREIGN KEY (`Materia_idMateria`) REFERENCES `materia` (`idMateria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Materia_has_Notas_Notas1` FOREIGN KEY (`Lapso_idLapso`) REFERENCES `lapso` (`idLapso`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materia_has_notas`
--

LOCK TABLES `materia_has_notas` WRITE;
/*!40000 ALTER TABLE `materia_has_notas` DISABLE KEYS */;
INSERT INTO `materia_has_notas` VALUES (51,1,17,'2024-02-12','',31123098),(51,2,14,'2024-02-12','',31123098),(53,1,15,'2024-02-12','',31123098);
/*!40000 ALTER TABLE `materia_has_notas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matricula`
--

DROP TABLE IF EXISTS `matricula`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matricula` (
  `idMatricula` bigint(20) unsigned NOT NULL,
  `Observacion` varbinary(255) DEFAULT NULL,
  `Plan_M` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`idMatricula`),
  KEY `Plan_M_idx` (`Plan_M`),
  CONSTRAINT `Plan_M` FOREIGN KEY (`Plan_M`) REFERENCES `plan_estudio` (`idPlan_Estudio`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matricula`
--

LOCK TABLES `matricula` WRITE;
/*!40000 ALTER TABLE `matricula` DISABLE KEYS */;
INSERT INTO `matricula` VALUES (2019,'茘�Q��*E��4+��D���\\%VA%©jď�',14);
/*!40000 ALTER TABLE `matricula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mensualidad_ri`
--

DROP TABLE IF EXISTS `mensualidad_ri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mensualidad_ri` (
  `idMensualidad_RI` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Mes_RI` varbinary(255) NOT NULL,
  `VigenciaI_RI` date NOT NULL,
  `VigenciaF_RI` date NOT NULL,
  PRIMARY KEY (`idMensualidad_RI`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mensualidad_ri`
--

LOCK TABLES `mensualidad_ri` WRITE;
/*!40000 ALTER TABLE `mensualidad_ri` DISABLE KEYS */;
INSERT INTO `mensualidad_ri` VALUES (1,'Y�+h�!2��r[;4.�o8Gu���޼�C �','2024-01-01','2024-02-01');
/*!40000 ALTER TABLE `mensualidad_ri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `municipio`
--

DROP TABLE IF EXISTS `municipio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `municipio` (
  `idMunicipio` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Municipio` varbinary(255) NOT NULL,
  `Estado` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`idMunicipio`),
  KEY `Estado_idx` (`Estado`),
  CONSTRAINT `Estado` FOREIGN KEY (`Estado`) REFERENCES `estado` (`idEstado`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `municipio`
--

LOCK TABLES `municipio` WRITE;
/*!40000 ALTER TABLE `municipio` DISABLE KEYS */;
INSERT INTO `municipio` VALUES (1,'�Ϝ�F��h���5ϛ�-1r�&�c�\"��iRû�\"���.��<7\Z��o���',1);
/*!40000 ALTER TABLE `municipio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parroquia`
--

DROP TABLE IF EXISTS `parroquia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parroquia` (
  `idParroquia` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Parroquia` varbinary(255) NOT NULL,
  `Ciudad` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`idParroquia`),
  KEY `Ciudad_idx` (`Ciudad`),
  CONSTRAINT `Ciudad` FOREIGN KEY (`Ciudad`) REFERENCES `ciudad` (`idCiudad`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parroquia`
--

LOCK TABLES `parroquia` WRITE;
/*!40000 ALTER TABLE `parroquia` DISABLE KEYS */;
INSERT INTO `parroquia` VALUES (1,'>�<���v��̬C��������l�?}�7I',1),(2,'�,���]���9`7h�23Ԉ�XGγ��\Zƣ8�Ηݐ8H_��+��',1);
/*!40000 ALTER TABLE `parroquia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plan_estudio`
--

DROP TABLE IF EXISTS `plan_estudio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plan_estudio` (
  `idPlan_Estudio` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Nombre_PE` varbinary(255) NOT NULL,
  `Observacion_PE` varbinary(255) DEFAULT NULL,
  PRIMARY KEY (`idPlan_Estudio`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plan_estudio`
--

LOCK TABLES `plan_estudio` WRITE;
/*!40000 ALTER TABLE `plan_estudio` DISABLE KEYS */;
INSERT INTO `plan_estudio` VALUES (1,'Y=�,X;DbuEf\"r����x֘�d�q�I9N',NULL),(2,'G���:{��2�F��\"IAhj-�E��)��',NULL),(3,'[�L���]��ZL�wHoo�0d� ��Z��ϛ',NULL),(4,'���}�G��q������T��9���\0Ķ�B',NULL),(5,'�\Z$!��lJ� x�X�j�+���[��� ��c',NULL),(6,'Z֧W�zK���2�G90�@x��h���E��C',NULL),(7,'�.�Υum���	$�.\r�rb���~�eA[퉮',NULL),(8,'H�޸��K��<�Mּ��W*�q8	�����',NULL),(9,'\"�L-��f��b�b�z�^9��@�U�B�*��',NULL),(10,';^0Fd�9��º��?\"uZL���C�Z�Nc',NULL),(11,'��4�����-�0$����0�u����\nG]ޕUH',NULL),(12,'��\'>�з���՗����2��I��P�Ȓ\'',NULL),(13,'$�rEHkX����!��~�����(p�',NULL),(14,'����=�`��Q��F�jP/dR�L$)��vz\n',NULL);
/*!40000 ALTER TABLE `plan_estudio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plan_estudio_has_seccion`
--

DROP TABLE IF EXISTS `plan_estudio_has_seccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plan_estudio_has_seccion` (
  `Plan_Estudio_idPlan_Estudio` bigint(20) unsigned NOT NULL,
  `Seccion_idSeccion` bigint(20) unsigned NOT NULL,
  `Profesor_Guia` bigint(20) unsigned NOT NULL,
  `Salon` bigint(20) unsigned NOT NULL,
  `Observacion` varbinary(255) DEFAULT NULL,
  PRIMARY KEY (`Plan_Estudio_idPlan_Estudio`,`Seccion_idSeccion`),
  KEY `fk_Plan_Estudio_has_Seccion_Seccion1_idx` (`Seccion_idSeccion`),
  KEY `fk_Plan_Estudio_has_Seccion_Plan_Estudio1_idx` (`Plan_Estudio_idPlan_Estudio`),
  KEY `Profesor_Guia_idx` (`Profesor_Guia`),
  KEY `Salon_idx` (`Salon`),
  CONSTRAINT `Profesor_Guia` FOREIGN KEY (`Profesor_Guia`) REFERENCES `profesor` (`Cedula_P`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `Salon` FOREIGN KEY (`Salon`) REFERENCES `salon` (`idSalon`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Plan_Estudio_has_Seccion_Plan_Estudio1` FOREIGN KEY (`Plan_Estudio_idPlan_Estudio`) REFERENCES `plan_estudio` (`idPlan_Estudio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Plan_Estudio_has_Seccion_Seccion1` FOREIGN KEY (`Seccion_idSeccion`) REFERENCES `seccion` (`idSeccion`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plan_estudio_has_seccion`
--

LOCK TABLES `plan_estudio_has_seccion` WRITE;
/*!40000 ALTER TABLE `plan_estudio_has_seccion` DISABLE KEYS */;
INSERT INTO `plan_estudio_has_seccion` VALUES (14,1,30840118,1,NULL);
/*!40000 ALTER TABLE `plan_estudio_has_seccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profesor`
--

DROP TABLE IF EXISTS `profesor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profesor` (
  `Cedula_P` bigint(20) unsigned NOT NULL,
  `Nombres_P` varbinary(255) NOT NULL,
  `Apellidos_P` varbinary(255) NOT NULL,
  `Telefonos_P` bigint(20) unsigned NOT NULL,
  `Correos_P` bigint(20) unsigned NOT NULL,
  `Direccion_P` bigint(20) unsigned NOT NULL,
  `Materia_P` bigint(20) unsigned NOT NULL,
  `FechaN_P` date NOT NULL,
  `Sexo_P` varbinary(255) NOT NULL,
  `Titulo_U_P` varbinary(255) NOT NULL,
  `Contrato_P` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`Cedula_P`),
  KEY `Cargo_P_idx` (`Materia_P`),
  KEY `Correos_P_idx` (`Correos_P`),
  KEY `Telefonos_P_idx` (`Telefonos_P`),
  KEY `Direccion_P_idx` (`Direccion_P`),
  KEY `fk_Profesor_Contrato1_idx` (`Contrato_P`),
  CONSTRAINT `Correos_P` FOREIGN KEY (`Correos_P`) REFERENCES `correos` (`idCorreos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `Direccion_P` FOREIGN KEY (`Direccion_P`) REFERENCES `direccion` (`idDireccion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `Materia_P` FOREIGN KEY (`Materia_P`) REFERENCES `materia` (`idMateria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `Telefonos_P` FOREIGN KEY (`Telefonos_P`) REFERENCES `telefonos` (`idTelefonos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Profesor_Contrato1` FOREIGN KEY (`Contrato_P`) REFERENCES `contrato` (`idContrato`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profesor`
--

LOCK TABLES `profesor` WRITE;
/*!40000 ALTER TABLE `profesor` DISABLE KEYS */;
INSERT INTO `profesor` VALUES (30840117,'P�!ϓ{�Bm��J��|~AB)aax�>MF�f','���\Zh6YQ��vz���	��@�3���Sl���',2,2,2,53,'1997-05-05','�ΐ��\"�@Ҧޏ��`�]�ƾ���f��Z�}','P����Ź��1��H�M�z�ϵ�`����0',1),(30840118,'�d}�l��+��{�0Ԝ�7l#}���`T[D��','���\Zh6YQ��vz���	��@�3���Sl���',1,1,1,51,'2000-12-12','�ΐ��\"�@Ҧޏ��`�]�ƾ���f��Z�}','rb�w�}�Z��0	T��Z�]�)�\0W����P',1);
/*!40000 ALTER TABLE `profesor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profesor_has_materia`
--

DROP TABLE IF EXISTS `profesor_has_materia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profesor_has_materia` (
  `Cedula_P_id` bigint(20) unsigned NOT NULL,
  `Materia_id` bigint(20) unsigned NOT NULL,
  `Fecha_imparte` date NOT NULL,
  `Observacion` varbinary(255) DEFAULT NULL,
  PRIMARY KEY (`Cedula_P_id`,`Materia_id`),
  KEY `Materia_id_idx` (`Materia_id`),
  CONSTRAINT `Cedula_P_id` FOREIGN KEY (`Cedula_P_id`) REFERENCES `profesor` (`Cedula_P`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `Materia_id` FOREIGN KEY (`Materia_id`) REFERENCES `materia` (`idMateria`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profesor_has_materia`
--

LOCK TABLES `profesor_has_materia` WRITE;
/*!40000 ALTER TABLE `profesor_has_materia` DISABLE KEYS */;
/*!40000 ALTER TABLE `profesor_has_materia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recuperacion`
--

DROP TABLE IF EXISTS `recuperacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recuperacion` (
  `idRecuperacion` bigint(20) unsigned NOT NULL,
  `Pregunta1` varbinary(255) NOT NULL,
  `Pregunta2` varbinary(255) NOT NULL,
  `Respuesta1` varbinary(255) NOT NULL,
  `Respuesta2` varbinary(255) NOT NULL,
  PRIMARY KEY (`idRecuperacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recuperacion`
--

LOCK TABLES `recuperacion` WRITE;
/*!40000 ALTER TABLE `recuperacion` DISABLE KEYS */;
INSERT INTO `recuperacion` VALUES (12345678,'(�(�t���\n���\'��L<��/W3D','�^�W_��Qe���O��<d�>��d�կ��','������O��G��`3W\'ެ�n�o9[','?����/�8x23!i9�U�g ��{���.��');
/*!40000 ALTER TABLE `recuperacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `representante_i`
--

DROP TABLE IF EXISTS `representante_i`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `representante_i` (
  `Cedula_RI` bigint(20) unsigned NOT NULL,
  `Nombres_RI` varbinary(255) NOT NULL,
  `Apellidos_RI` varbinary(255) NOT NULL,
  `Telefono_RI` bigint(20) unsigned NOT NULL,
  `Correo_RI` bigint(20) unsigned NOT NULL,
  `Direccion_RI` bigint(20) unsigned NOT NULL,
  `FechaN_RI` date NOT NULL,
  `Sexo_RI` varbinary(255) NOT NULL,
  `Tipo_RI` varbinary(255) NOT NULL,
  PRIMARY KEY (`Cedula_RI`),
  KEY `Telefono_R_idx` (`Telefono_RI`),
  KEY `Correo_R_idx` (`Correo_RI`),
  KEY `Direccion_RI_idx` (`Direccion_RI`),
  CONSTRAINT `Correo_R` FOREIGN KEY (`Correo_RI`) REFERENCES `correos` (`idCorreos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `Direccion_RI` FOREIGN KEY (`Direccion_RI`) REFERENCES `direccion` (`idDireccion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `Telefono_R` FOREIGN KEY (`Telefono_RI`) REFERENCES `telefonos` (`idTelefonos`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `representante_i`
--

LOCK TABLES `representante_i` WRITE;
/*!40000 ALTER TABLE `representante_i` DISABLE KEYS */;
INSERT INTO `representante_i` VALUES (30840119,'�K��Pw�n?���k���AV�!�,_���y','�-����iZ�^Z�w�O�������!SE��t',3,3,3,'2002-12-05','�c�m�Sn������M����g���H��\n','~1�/�dc�\n��Ϯ8 æE����B\r>�ظ');
/*!40000 ALTER TABLE `representante_i` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `representante_i_has_mensualidad_ri`
--

DROP TABLE IF EXISTS `representante_i_has_mensualidad_ri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `representante_i_has_mensualidad_ri` (
  `Representante_I_Cedula_RI` bigint(20) unsigned NOT NULL,
  `Mensualidad_RI_idMensualidad_RI` bigint(20) unsigned NOT NULL,
  `Estudiante_M` bigint(20) unsigned NOT NULL,
  `Total_pagar` float NOT NULL,
  `Fecha_pago` date NOT NULL,
  `Observacion` varbinary(255) DEFAULT NULL,
  PRIMARY KEY (`Representante_I_Cedula_RI`,`Mensualidad_RI_idMensualidad_RI`,`Estudiante_M`),
  KEY `fk_Representante_I_has_Mensualidad_RI_Mensualidad_RI1_idx` (`Mensualidad_RI_idMensualidad_RI`),
  KEY `fk_Representante_I_has_Mensualidad_RI_Representante_I1_idx` (`Representante_I_Cedula_RI`),
  KEY `Estudiante_Mensualidad_idx` (`Estudiante_M`),
  CONSTRAINT `Estudiante_Mensualidad` FOREIGN KEY (`Estudiante_M`) REFERENCES `estudiante_ii` (`Cedula_EII`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Representante_I_has_Mensualidad_RI_Mensualidad_RI1` FOREIGN KEY (`Mensualidad_RI_idMensualidad_RI`) REFERENCES `mensualidad_ri` (`idMensualidad_RI`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Representante_I_has_Mensualidad_RI_Representante_I1` FOREIGN KEY (`Representante_I_Cedula_RI`) REFERENCES `representante_i` (`Cedula_RI`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `representante_i_has_mensualidad_ri`
--

LOCK TABLES `representante_i_has_mensualidad_ri` WRITE;
/*!40000 ALTER TABLE `representante_i_has_mensualidad_ri` DISABLE KEYS */;
/*!40000 ALTER TABLE `representante_i_has_mensualidad_ri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salon`
--

DROP TABLE IF EXISTS `salon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salon` (
  `idSalon` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Salon` varbinary(255) NOT NULL,
  PRIMARY KEY (`idSalon`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salon`
--

LOCK TABLES `salon` WRITE;
/*!40000 ALTER TABLE `salon` DISABLE KEYS */;
INSERT INTO `salon` VALUES (1,'$�.L�@Ճ�����$�??���o\ZCW�c�0');
/*!40000 ALTER TABLE `salon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seccion`
--

DROP TABLE IF EXISTS `seccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seccion` (
  `idSeccion` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Seccion` varbinary(255) NOT NULL,
  PRIMARY KEY (`idSeccion`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seccion`
--

LOCK TABLES `seccion` WRITE;
/*!40000 ALTER TABLE `seccion` DISABLE KEYS */;
INSERT INTO `seccion` VALUES (1,'n\'ἆt,q�༆Kӫ�.�}��m����%+�'),(2,'�y/g�!�	�0ξ�E���wq�uɑL*	�l'),(3,'�1fՖm>/΃�-�Xh��N����*=�Xd'),(4,'}�qIm�����Fu9\Z9{��U�d��s; ');
/*!40000 ALTER TABLE `seccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `telefonos`
--

DROP TABLE IF EXISTS `telefonos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `telefonos` (
  `idTelefonos` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Telefono` varbinary(255) NOT NULL,
  `Telefono2` varbinary(255) DEFAULT NULL,
  PRIMARY KEY (`idTelefonos`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telefonos`
--

LOCK TABLES `telefonos` WRITE;
/*!40000 ALTER TABLE `telefonos` DISABLE KEYS */;
INSERT INTO `telefonos` VALUES (1,'\\�\\o�L�ft\\⒜_�2�]��zD���:;','茘�Q��*E��4+��D���\\%VA%©jď�'),(2,'\\�\\o�L�ft\\⒜_�2�]��zD���:;','茘�Q��*E��4+��D���\\%VA%©jď�'),(3,'\\�\\o�L�ft\\⒜_�2�]��zD���:;','茘�Q��*E��4+��D���\\%VA%©jď�');
/*!40000 ALTER TABLE `telefonos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_usuario`
--

DROP TABLE IF EXISTS `tipo_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_usuario` (
  `idTipo_Usuario` bigint(20) unsigned NOT NULL,
  `Tipo_T` varbinary(255) NOT NULL,
  PRIMARY KEY (`idTipo_Usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_usuario`
--

LOCK TABLES `tipo_usuario` WRITE;
/*!40000 ALTER TABLE `tipo_usuario` DISABLE KEYS */;
INSERT INTO `tipo_usuario` VALUES (0,'�Cig	Ǝ�Oj��#��ynR��?;���X�Q�'),(1,'e��$8l/\r�£�o\r�2P�\0ke�\\����s'),(2,'e_PU�D����!Z�@Юo�;��V���)%'),(3,'��b�$W˥sN.�dK�B�.�}W�RQȐ�');
/*!40000 ALTER TABLE `tipo_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `idUsuario` bigint(20) unsigned NOT NULL,
  `Clave_U` varbinary(255) NOT NULL,
  `Tipo_Usuario_idTipo_Usuario` bigint(20) unsigned NOT NULL,
  `Recuperacion_idRecuperacion` bigint(20) unsigned NOT NULL,
  `Administrativo_idAdministrativo` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `fk_Usuario_Tipo_Usuario1_idx` (`Tipo_Usuario_idTipo_Usuario`),
  KEY `fk_Usuario_Recuperacion1_idx` (`Recuperacion_idRecuperacion`),
  KEY `fk_Usuario_Administrativo1_idx` (`Administrativo_idAdministrativo`),
  CONSTRAINT `fk_Usuario_Administrativo1` FOREIGN KEY (`Administrativo_idAdministrativo`) REFERENCES `administrativo` (`idAdministrativo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Usuario_Recuperacion1` FOREIGN KEY (`Recuperacion_idRecuperacion`) REFERENCES `recuperacion` (`idRecuperacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Usuario_Tipo_Usuario1` FOREIGN KEY (`Tipo_Usuario_idTipo_Usuario`) REFERENCES `tipo_usuario` (`idTipo_Usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (12345678,'��T�¨�u�O�r\r�-�1��[rȚ���\0>',0,12345678,12345678);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-02-13 15:31:02
