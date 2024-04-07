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
INSERT INTO `administrativo` VALUES (12345678,'ÄﬁùB¬à\nI??à!Q\0øJ¶RèÔ3;˙¨	6ôõ','\"A¨û”Ö»ö¯≈TÄ¡oQA¨6@2©˘ú\0*Î9à','\\˝\\o‡Lπft\\‚íú_ﬂ2∆]•≤zD˛±å:;','<OyÏJáç eaà5·ekÏÁ\ZnÅ\"wxN«‚RsÉöû6’R\rÈ)F®ëÌ');
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
INSERT INTO `ciudad` VALUES (1,'a¢b¨ã∂‚‚€®∆IhÅÒZ¯Ìh¥∞ßåAzÈô˙','I	w©úøo(\nùF#˙èS·5ÂôÓ∂—*ı•ä',1);
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
INSERT INTO `correos` VALUES (1,'<OyÏJáç eaà5·ekÏÁ\ZnÅ\"wxN«‚RsÉöû6’R\rÈ)F®ëÌ','Ëåò¢QÚ—*E”Áõ4+∂ÑDÌËœ\\%VA%¬©jƒè•'),(2,'<OyÏJáç eaà5·ekÏÁ\ZnÅ\"wxN«‚RsÉöû6’R\rÈ)F®ëÌ','Ëåò¢QÚ—*E”Áõ4+∂ÑDÌËœ\\%VA%¬©jƒè•'),(3,'<OyÏJáç eaà5·ekÏÁ\ZnÅ\"wxN«‚RsÉöû6’R\rÈ)F®ëÌ','Ëåò¢QÚ—*E”Áõ4+∂ÑDÌËœ\\%VA%¬©jƒè•');
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
INSERT INTO `direccion` VALUES (1,'ûc⁄Í}P¬PR8˜π≠s„7K&∂^J.∂AaÉ…˛ıg}','úﬁ¨ãŸQ—Q©ïú\n,8\n>d–:@¨·0÷4å|í‰\r<','Ëåò¢QÚ—*E”Áõ4+∂ÑDÌËœ\\%VA%¬©jƒè•','Ëåò¢QÚ—*E”Áõ4+∂ÑDÌËœ\\%VA%¬©jƒè•','Ëåò¢QÚ—*E”Áõ4+∂ÑDÌËœ\\%VA%¬©jƒè•','ºÚ◊∑SÒ6Ï\'Ûó≤†oµ[áµ‡7qqV&tLîéÛéylÃ@qÎG¯G®â¢≠ò∂PS',1),(2,'ûc⁄Í}P¬PR8˜π≠s„7K&∂^J.∂AaÉ…˛ıg}','úﬁ¨ãŸQ—Q©ïú\n,8\n>d–:@¨·0÷4å|í‰\r<','Ëåò¢QÚ—*E”Áõ4+∂ÑDÌËœ\\%VA%¬©jƒè•','Ëåò¢QÚ—*E”Áõ4+∂ÑDÌËœ\\%VA%¬©jƒè•','Ëåò¢QÚ—*E”Áõ4+∂ÑDÌËœ\\%VA%¬©jƒè•','ºÚ◊∑SÒ6Ï\'Ûó≤†oµ[áµ‡7qqV&tLîéÛéylÃ@qÎG¯G®â¢≠ò∂PS',1),(3,'ûc⁄Í}P¬PR8˜π≠s„7K&∂^J.∂AaÉ…˛ıg}','úﬁ¨ãŸQ—Q©ïú\n,8\n>d–:@¨·0÷4å|í‰\r<','Ëåò¢QÚ—*E”Áõ4+∂ÑDÌËœ\\%VA%¬©jƒè•','Ëåò¢QÚ—*E”Áõ4+∂ÑDÌËœ\\%VA%¬©jƒè•','Ëåò¢QÚ—*E”Áõ4+∂ÑDÌËœ\\%VA%¬©jƒè•','ºÚ◊∑SÒ6Ï\'Ûó≤†oµ[áµ‡7qqV&tLîéÛéylÃ@qÎG¯G®â¢≠ò∂PS',1);
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
INSERT INTO `estado` VALUES (1,'‚6Cf›eRæñÈ—/ò ˛‹ÎúÁÂ…h∆√Âí=');
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
INSERT INTO `estudiante_ii` VALUES (31123097,'Èè‚¢<¸g…`k›ë3\r¥T.[˙SxÂ_^T$\'÷I3','˚Z”ö‰è<sc≥B∑‚†á◊ ErCÒ3…ù2¨q•”y',2019,'2003-08-08','…Œêˆˆ\"Ú@“¶ﬁè¥∑`Û]Ä∆æéâˇf™—Zë}',30840119,2),(31123098,'“úÅÀ¿#í‘›!èTñz¯; øx´\Z∏œZ@','¸{˝ﬁæ¯ïããçûq	)Îd6¡˘SÈ]∞I&',2019,'2007-08-08','…Œêˆˆ\"Ú@“¶ﬁè¥∑`Û]Ä∆æéâˇf™—Zë}',30840119,1);
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
INSERT INTO `lapso` VALUES (1,'fdÍ94¶¯f†é51Rè™Wt#Êí˘‘£ìX!$‰'),(2,':ÑÆV\n¿É∫uÏ¢Ï˛êÈg∞=≠(∫‘ƒRÅπ%m,'),(3,'…9mï/ÂÛ\"CRJM8ˆu∫;¡•Ñ˛ì¶Ì	@œ'),(4,'ﬁÖˇƒ®˙˙\"˙]†>Ø∞Eh»ö/Áﬂ¡Z´£ )€-');
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
INSERT INTO `m_and_v` VALUES (1,'Coloque su Misi√≥n aqu√≠','Coloque su Visi√≥n aqu√≠','≤?≈Sq®Rc#aÚQÛ’#Átñæ1¢º∑3,—aZ”');
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
INSERT INTO `materia` VALUES (1,'i¨‡µ*–ZòPÑ ÖSCÑYÌÚaæ\"à¢÷ÇÁ|≤Úç—ˆ~ÅÛpÊˆrıG','07:00:00','11:30:00',1),(2,'‰’JÔπh∆SH1ÚS3°9H\0|ˆ WDÔ÷\Z›Y‰I¯nÅÍœr4ö¿Dıî','07:00:00','11:30:00',2),(3,'ƒ˙v\'Ñ¬£ßI∆≠\Z2<∆3C£\0≥„/–ﬂCyÀD∞êX3}-åXÍùºZå·\'!','07:00:00','11:30:00',3),(4,'i¨‡µ*–ZòPÑ Ö∞æ¬(õ∑›Ø&jJÇÂXQòπÒÿ»fèi^P±r','07:00:00','11:30:00',4),(5,'‰’JÔπh∆SH1ÚS3°9äHcáu[oÇ«˙·`ﬁ¶·‹^?@VCâ:Zjv∏','07:00:00','11:30:00',5),(6,'ƒ˙v\'Ñ¬£ßI∆≠\Z2<∆ÿ¶4T\0Çû\'•sá {D∏…~«ñŒ¸tgﬁ·5∫¥3ÕO','07:00:00','11:30:00',6),(7,'iízˇ†t@L÷’MÙ6¸ù‡_ííÓÎjÒíw≥„ZC£0®(áX¢Ô’ÀáNﬂ¶ê','07:00:00','11:30:00',7),(8,'«¥@d§8Cı#È”µE7¡0DR)\'∞à_jFò\"†âøéëô˘„E2\nË\0‹Xõ','07:00:00','11:30:00',8),(9,'T\'keÔ\'ébk£1q»_&e≤ªƒGE⁄ı¯;s<õÔÀP¡ü≤Ωñ	l˘&Ö˛í°','07:00:00','11:30:00',9),(10,'8´ñ—¥hF	â#…-Ä≈RíõÂ•668º	U≈+¶ì','07:00:00','08:00:00',10),(11,'DìÆ4ˆ.Ã¬ZÎsD¶ΩÇ@˘{Ë}øÖ∂∞4£ô','08:00:00','09:00:00',10),(12,'^0\\oôÒrò	•ﬂSó\Z˚€wÄSπ˜¢›Y’v¯ä“\rD','09:00:00','10:00:00',10),(13,'äºÅƒ}F8™˘hà˜=Ω|◊≈Á’ü&ûAŸË-ı3tÙË?*Yb˘éè','10:00:00','11:00:00',10),(14,'>ùûT^ŸÔ≠·Ç⁄.rÕ^•fˆÖØ§jêà|ëÒ(ıdxÛ≠%Õ¨†÷ÔshΩ5É1mo','11:00:00','12:00:00',10),(15,'i;Ea7Qxª≤“cµDLM\n∫ÛÁœˆçı\'YØ‰˜:ãvº¿ i(§Z;≥','12:00:00','13:00:00',10),(16,'1ˇ™‰úÅ+[\'.?eß\0Æ°Ü\'*¢]9#∑ŒVã3T§ı⁄z©4æf…Üí(b’+N˛DºmÁ!gjqœ±Ü8','13:00:00','14:00:00',10),(17,'_}_/l˜ëY\"eváŸ]áZißGïÄbUÖ\Z™U»·˝fúb••ûÜ\"€∆Ûˇ®~„–','14:00:00','15:00:00',10),(18,'™ÿqˇé\"∂óÍ[˜\\√¿Ä<»LòâÇô\'‘ta.tQUÈ“}—‰áH’ﬂ·Ê±','15:00:00','16:00:00',10),(19,'Xêgyíg\ZXÒi®Á˜!¸◊bLóÈm∫ÔPNÏºM','07:00:00','08:00:00',11),(20,'€Ñ`õXëˆﬂ\"q·3¢†§à±¬@ª4Á√ùùÚ$±=','08:00:00','09:00:00',11),(21,'?‰ §?¶Ë≤x<ÇÈYº€Ü–eu\\>„_{l\r}ÅãÌ—','09:00:00','10:00:00',11),(22,'≠ããV ‹	+ùt±µHı(ÃQ—Æ¿ÿB| ¸B¶','10:00:00','11:00:00',11),(23,'1ˇ™‰úÅ+[\'.?eß\0Æ°Ü\'*¢]9#∑ŒVã3T§€¸yK_Ç.ƒÒmx˝.+9„>“&N≤ÌùXÈLÁ>Ò','11:00:00','12:00:00',11),(24,'äºÅƒ}F8™˘hà˜=ÆŸÓá%0Y˝õ(jèMπV¨∆Ñâe≈ß∫WÕ\\ˇΩFÑ™','12:00:00','13:00:00',11),(25,'>ùûT^ŸÔ≠·Ç⁄.rÕ^•k\\≥`ñΩÓ7Î\n\"/¢æ3k¥mﬁµà£◊1Cz<','13:00:00','14:00:00',11),(26,'™ÿqˇé\"∂óÍ[˜\\√¿Äß≤ÅM•˝hËØ≤fa©÷†+[G‚3ãWö•=(x,ò','14:00:00','15:00:00',11),(27,'_}_/l˜ëY\"eváŸ]áZbÀÎD;L∫ÆBz÷9œïÛJè@ƒr–_»#4µ','15:00:00','16:00:00',11),(28,'3ß=që4I\nïÉ√q_∞\ZÁH+ø5{’Uˇ˚R\n\\˜Í`«','07:00:00','08:00:00',12),(29,'≥v™˛Zû¯{Ïn≤1	%“11\'%e◊iOπm‚hﬁ?º','08:00:00','09:00:00',12),(30,'AT{®òèèGH7^ ˘ÎÂ∑òù_˛	qÿ@”ÆíàaÚPÁeﬂ}6Ã_ï»Ën','09:00:00','10:00:00',12),(31,'äºÅƒ}F8™˘hà˜=\0ú\0b-ie≠à“›0TÉó—Ñ}T5î∫s£‘èõÃÌW','10:00:00','11:00:00',12),(32,'\'`Ïô··∑Báπ•!Üﬁç{±\\¸‰ßá»∫g˙≠∆&ÇÆ','11:00:00','12:00:00',12),(33,'eçf∑ú\ræ$¡	%@%–â\\é‰lˇ˜˜ø≥m','12:00:00','13:00:00',12),(34,'>©˛Å-,Ué\nYKå£j¬1°&Ïe—Î¥ÓùﬂËËU','13:00:00','14:00:00',12),(35,'1ˇ™‰úÅ+[\'.?eß\0Æ°›∫s\'M	2ˇ27ΩÌ«aÂ(agY!Ãn8àÉ˘é<=∂à%˛~∫&∑ìZkÏ','14:00:00','15:00:00',12),(36,'_}_/l˜ëY\"eváŸ]áZŸÏøõ`‰*\'6ï&@œæ®å+¥/„ÃÒ≈.R‘=ßÀ·i','15:00:00','16:00:00',12),(37,'™ÿqˇé\"∂óÍ[˜\\√¿Ä¥CC|Y∆„‹ÌQ‡Ãúû¶&R%â¿ïUûè>Gôö˛t','16:00:00','17:00:00',12),(38,'!Èﬂ-’¿˝ïg◊<Å?t◊UAß(£=úùÉ·ü·+','07:00:00','08:00:00',13),(39,'?ö\Z¡ÄÏ”JP8≠≈˛4F(0≠’¥∂Hèp§“€vO\n','08:00:00','09:00:00',13),(40,'2p¨;	Y…y$BU[ÉﬁûwÖûÿÿ¢Æ“ÍFÊÅ–','09:00:00','10:00:00',13),(41,'äºÅƒ}F8™˘hà˜=ñ÷˘ÕÅ<wC™¬D7A€£˚-gó˛’çﬂ’ö)ÑT˜','10:00:00','11:00:00',13),(42,'\râÍF@9N/]Á|$G€gâ˙fÕ?Ô*ñx‡Û-ÿ±','11:00:00','12:00:00',13),(43,'†Õè&ﬂÙTfuπ»÷⁄âä)BKx∏,ój\n$Ec','12:00:00','13:00:00',13),(44,'{\ZàÆIgYcv¡ó8	¢Éè±ØzB±¬ﬂl','13:00:00','14:00:00',13),(45,'1ˇ™‰úÅ+[\'.?eß\0Æ°Ü\'*¢]9#∑ŒVã3T§|‘HˇóQƒ«•eE8NRàÌ{ñ©Ÿ‘zÏ—n#‰k','14:00:00','15:00:00',13),(46,'à\0Â˜˜ñ‹˝∏2Êå/çr2[Ä4#ùˆ2r¢3≈;˛áA¬“sË·TNõëƒ»“π¸','15:00:00','16:00:00',13),(47,'_}_/l˜ëY\"eváŸ]áZ±^FÈÑ≈C£À–·\'Ÿ!-;Aü§öã<&/¶d]Äﬂ','16:00:00','17:00:00',13),(48,'™ÿqˇé\"∂óÍ[˜\\√¿ÄÑ(™ÛîxI„ƒΩ¿fC∏W€BtOvd◊9á«¸W','17:00:00','18:00:00',13),(49,'Çâó€;I“=ÕYQ%ÿ’BX‰˛—≥õuÊö∑B“','07:00:00','08:00:00',14),(50,'Ï¶;QF5◊D}	1ÀYÙ”—§õG{®πaÒ⁄ù','08:00:00','09:00:00',14),(51,'t≈˜Ò¶õ÷èPìänc7F≤†÷%Í9’9\0d‰fÑ','09:00:00','10:00:00',14),(52,'äºÅƒ}F8™˘hà˜=ò=&˚î-7P3ƒ·7ﬁ3:§ê)ì˛·cH\0úÚ∑yq','10:00:00','11:00:00',14),(53,'a~⁄\näÙÃ—∆w	ñ&ËÁõ¿u¢ªÇVôR\\¶è≥J','11:00:00','12:00:00',14),(54,'C∏\\<4˚UwåÓÁHπÂ€1¬≠∞+y∫i®}d','12:00:00','13:00:00',14),(55,'Nÿ:&ÉwÌÚ‘á t2£uºt\'#⁄\nÛ◊ÛÙ]1t¶¨è ﬁ0¥>oâª`','13:00:00','14:00:00',14),(56,'™ÿqˇé\"∂óÍ[˜\\√¿ÄG∑á:j–˙ªkπ‚™N¸	÷;å¿⁄Éö~ÏÂ–≤…','14:00:00','15:00:00',14),(57,'ï‚&>ﬁR›5h@\nbî5Ÿø\ZÿV¥ÄæÅcÃQSÒ∫ÍzÈ˘OpajÔÔf¢h','15:00:00','16:00:00',14),(58,'1ˇ™‰úÅ+[\'.?eß\0Æ°›∫s\'M	2ˇ27ΩÌ«aÂ($z∆¡πÀdJ3˚M/«D9Ü\\‡¯ÑE¶ï∫]è“∏','16:00:00','17:00:00',14),(59,'_}_/l˜ëY\"eváŸ]áZäÌ\rÃÌv%GVUÀÑ¬ÓV	‚ÒRWÄ\'lHhMrﬁ','17:00:00','18:00:00',14),(60,'∏åXﬁé¡1ì‹)¶Q4küP*>´ªu`‰wËvõ∂Ûí','18:00:00','19:00:00',14);
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
INSERT INTO `matricula` VALUES (2019,'Ëåò¢QÚ—*E”Áõ4+∂ÑDÌËœ\\%VA%¬©jƒè•',14);
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
INSERT INTO `mensualidad_ri` VALUES (1,'Y¶+h√!2Œ‚r[;4.Êo8Gu§∂áﬁºñC î','2024-01-01','2024-02-01');
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
INSERT INTO `municipio` VALUES (1,'˘œú·FÔ“h…Í˛5œõì-1rô&±cÛ\"é≈iR√ªò\"ŒÕ….Ω¡<7\Z∂‡oÉ‡ä',1);
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
INSERT INTO `parroquia` VALUES (1,'>Óä<°ˆÉv∞Ã¨C¡◊¿œÀÁ«l±?}´7I',1),(2,'ı,¬Ë≤Ì]√„ı9`7hî23‘à¶XGŒ≥”¯\Z∆£8ºŒó›ê8H_î∏+úñ',1);
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
INSERT INTO `plan_estudio` VALUES (1,'Y=«,X;DbuEf\"r˜ìÈˆx÷ò‹dˆq≠I9N',NULL),(2,'Gƒ‡ß:{¡Ä2÷FòØ\"IAhj-ôEè„)˙¶',NULL),(3,'[êLÖ€]ˆîZLÂ®wHoo›0dé —£ZÄëœõ',NULL),(4,'ƒÙ•}œGí¬q„˙˛Ωí„Té¥9‹ô∏\0ƒ∂ÒB',NULL),(5,'Û\Z$!øªlJ¢ x´X–j…+ÓÍ¨[˙Î– ôÛc',NULL),(6,'Z÷ßW›zKÆªÂ2Í±G90¥@x‰ì»h¨—ÏEÄC',NULL),(7,'ﬁ.ÉŒ•umπΩ∂	$Œ.\rærbÃÜµ~·eA[ÌâÆ',NULL),(8,'H‡øﬁ∏Ä¡K˘∞<∂M÷ºü©W*Åq8	Ï≈¡ëÔ',NULL),(9,'\"´L-Ñ¨f’„öb§bézÍ^9Ë«@ΩU—BŒ*áª',NULL),(10,';^0Fd√9ÅÓ¬∫‰Ø?\"uZLç£ﬂCÉZ„Nc',NULL),(11,'ô’4∫™âÅÎó-Ÿ0$®¶ïƒ0ëu˜≤âñ\nG]ﬁïUH',NULL),(12,'≈Ñ\'>√–∑®íÂà’óÎ˙‘2‹…IÏ•ÂPì»í\'',NULL),(13,'$ÆrEHkX÷ŸÂÓ!ﬁÈ~îú˜√¡(p™',NULL),(14,'ﬂÑ¿…=Á`∫ÏQÚ√F·jP/dRÏL$)∂Ævz\n',NULL);
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
INSERT INTO `profesor` VALUES (30840117,'P∏!œì{ΩBm–çJ°¢|~AB)aax£>MFçf','„Ïæ\Zh6YQ‚È∞vzû´Í	æÅ@⁄3ﬂÂî√SlÅ≠√',2,2,2,53,'1997-05-05','…Œêˆˆ\"Ú@“¶ﬁè¥∑`Û]Ä∆æéâˇf™—Zë}','PìÁ∂‘”≈πˇ§1èåHäMŸzåœµﬁ`¢˜Â≠»0',1),(30840118,'ºd}±lŒı+öƒ{ˇ0‘ú∂7l#}çΩù`T[Dƒ†','„Ïæ\Zh6YQ‚È∞vzû´Í	æÅ@⁄3ﬂÂî√SlÅ≠√',1,1,1,51,'2000-12-12','…Œêˆˆ\"Ú@“¶ﬁè¥∑`Û]Ä∆æéâˇf™—Zë}','rbƒwò}∑Z”≈0	TÿÂZ∞]¥)û\0W®æœ»P',1);
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
INSERT INTO `recuperacion` VALUES (12345678,'(£(∂t°ŸÀ\n˙ñ‡\'–ÌL<Ù‰/W3D','Ö^ÕW_¥ôQeÊÛà±ÀOµ…<dï>ÒÅ”d®’Ø¶⁄','≥ ÷”ÏOØªGœ±`3W\'ﬁ¨Ënöo9[','?óﬁçÿ/Ω8x23!i9‚UŒg á∫{∑⁄”.ã');
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
INSERT INTO `representante_i` VALUES (30840119,'íK˛ùPwÿn?ŸÓù›kÀ≠ùAV™!¶,_ùò÷y','Œ-©‰…ˇiZ¬^Z”w€Oá˙‰˜¸å”!SEÌÛt',3,3,3,'2002-12-05','¶cïm÷SnÖúŒ≠óÁM≥ô‹Óg≥•¬ÓÅÇH¢ \n','~1ﬁ/¿dcª\nàÑœÆ8 √¶EÑ∂ò„B\r>’ÿ∏');
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
INSERT INTO `salon` VALUES (1,'$Û.L¬@’ÉòˇçÁÉˆ$›??˘‚Âo\ZCW¯cÜ0');
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
INSERT INTO `seccion` VALUES (1,'n\'·ºÜt,qπ‡ºÜK”´¶.õ}¿ÿmË–Ïÿ%+Ω'),(2,'„y/g¨!∂	Ú∫0Œæ≠E∑˝ŒwqÄu…ëL*	µl'),(3,'ª1f’ñm>/ŒÉø-∏Xhó®N†Áò∑Ü*=∆Xd'),(4,'}È±qIm‚ÎÀÁ“Fu9\Z9{˘∑U≈dŸ÷s; ');
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
INSERT INTO `telefonos` VALUES (1,'\\˝\\o‡Lπft\\‚íú_ﬂ2∆]•≤zD˛±å:;','Ëåò¢QÚ—*E”Áõ4+∂ÑDÌËœ\\%VA%¬©jƒè•'),(2,'\\˝\\o‡Lπft\\‚íú_ﬂ2∆]•≤zD˛±å:;','Ëåò¢QÚ—*E”Áõ4+∂ÑDÌËœ\\%VA%¬©jƒè•'),(3,'\\˝\\o‡Lπft\\‚íú_ﬂ2∆]•≤zD˛±å:;','Ëåò¢QÚ—*E”Áõ4+∂ÑDÌËœ\\%VA%¬©jƒè•');
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
INSERT INTO `tipo_usuario` VALUES (0,'⁄Cig	∆éÓOjíØ#¸§ynRÇº?;†»ÕXÔ∞Qò'),(1,'e‡√$8l/\r√¬£˘o\rª2Pç\0keˆ\\Æ≠ìÅs'),(2,'e_PUÖDÚıû‰!ZÕ@–Æo»;±ËVÀ˝Ú)%'),(3,'˙Àb”$WÀ•sN.»dK·B’.¸}W◊RQ»ê‚');
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
INSERT INTO `usuario` VALUES (12345678,'°’T¯¬®€u›OŒr\rŸ-§1ñ∂[r»öÍ∏©\0>',0,12345678,12345678);
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
