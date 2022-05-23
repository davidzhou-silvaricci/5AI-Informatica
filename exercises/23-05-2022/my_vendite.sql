#
# DUMP FILE
#
# Database is ported from MS Access
#------------------------------------------------------------------
# Created using "MS Access to MySQL" form http://www.bullzip.com
# Program Version 5.5.282
#
# OPTIONS:
#   sourcefilename=C:/Users/Utente/Downloads/DATABASE/8339_CD-Rom/UA2 DBMS/my_vendite.accdb
#   sourceusername=
#   sourcepassword=
#   sourcesystemdatabase=
#   destinationdatabase=my_vendite
#   storageengine=MyISAM
#   dropdatabase=1
#   createtables=1
#   unicode=1
#   autocommit=1
#   transferdefaultvalues=1
#   transferindexes=1
#   transferautonumbers=1
#   transferrecords=1
#   columnlist=1
#   tableprefix=
#   negativeboolean=0
#   ignorelargeblobs=0
#   memotype=LONGTEXT
#   datetimetype=DATETIME
#

DROP DATABASE IF EXISTS `my_vendite`;
CREATE DATABASE IF NOT EXISTS `my_vendite`;
USE `my_vendite`;

#
# Table structure for table 'categorie'
#

DROP TABLE IF EXISTS `categorie`;

CREATE TABLE `categorie` (
  `id_categoria` INTEGER NOT NULL, 
  `denominazione` VARCHAR(30), 
  PRIMARY KEY (`id_categoria`)
) ENGINE=myisam DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'categorie'
#

INSERT INTO `categorie` (`id_categoria`, `denominazione`) VALUES (1, 'Hardware');
INSERT INTO `categorie` (`id_categoria`, `denominazione`) VALUES (2, 'Software');
INSERT INTO `categorie` (`id_categoria`, `denominazione`) VALUES (3, 'Multimedia');
INSERT INTO `categorie` (`id_categoria`, `denominazione`) VALUES (4, 'Editoria elettronica');
INSERT INTO `categorie` (`id_categoria`, `denominazione`) VALUES (5, 'Giochi');
INSERT INTO `categorie` (`id_categoria`, `denominazione`) VALUES (6, 'Materiale di consumo');
INSERT INTO `categorie` (`id_categoria`, `denominazione`) VALUES (7, 'Viaggi');
# 7 records

#
# Table structure for table 'regioni'
#

DROP TABLE IF EXISTS `regioni`;

CREATE TABLE `regioni` (
  `id_regione` INTEGER NOT NULL AUTO_INCREMENT, 
  `nome_regione` VARCHAR(50), 
  INDEX (`id_regione`), 
  PRIMARY KEY (`id_regione`)
) ENGINE=myisam DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'regioni'
#

INSERT INTO `regioni` (`id_regione`, `nome_regione`) VALUES (1, 'Emilia romagna');
INSERT INTO `regioni` (`id_regione`, `nome_regione`) VALUES (2, 'Friuli');
INSERT INTO `regioni` (`id_regione`, `nome_regione`) VALUES (3, 'Lazio');
INSERT INTO `regioni` (`id_regione`, `nome_regione`) VALUES (4, 'Liguria');
INSERT INTO `regioni` (`id_regione`, `nome_regione`) VALUES (5, 'Lombardia');
INSERT INTO `regioni` (`id_regione`, `nome_regione`) VALUES (6, 'Marche');
INSERT INTO `regioni` (`id_regione`, `nome_regione`) VALUES (7, 'Piemonte');
INSERT INTO `regioni` (`id_regione`, `nome_regione`) VALUES (8, 'Toscana');
INSERT INTO `regioni` (`id_regione`, `nome_regione`) VALUES (9, 'Trentino');
INSERT INTO `regioni` (`id_regione`, `nome_regione`) VALUES (10, 'Umbria');
INSERT INTO `regioni` (`id_regione`, `nome_regione`) VALUES (11, 'Veneto');
# 11 records

#
# Table structure for table 'vendite'
#

DROP TABLE IF EXISTS `vendite`;

CREATE TABLE `vendite` (
  `id_regione` INTEGER, 
  `id_categoria` INTEGER, 
  `negozio` VARCHAR(25), 
  `importo` DECIMAL(19,4)
) ENGINE=myisam DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'vendite'
#

INSERT INTO `vendite` (`id_regione`, `id_categoria`, `negozio`, `importo`) VALUES (1, 1, 'Artè', 1000000);
INSERT INTO `vendite` (`id_regione`, `id_categoria`, `negozio`, `importo`) VALUES (4, 1, 'Colaio&sons', 345000);
INSERT INTO `vendite` (`id_regione`, `id_categoria`, `negozio`, `importo`) VALUES (5, 3, 'Colombo', 234670);
INSERT INTO `vendite` (`id_regione`, `id_categoria`, `negozio`, `importo`) VALUES (5, 1, 'Martinelli sas', 2450);
INSERT INTO `vendite` (`id_regione`, `id_categoria`, `negozio`, `importo`) VALUES (1, 2, 'Cattaneo Spa', 2431);
INSERT INTO `vendite` (`id_regione`, `id_categoria`, `negozio`, `importo`) VALUES (3, 3, 'Il computer', 1768);
INSERT INTO `vendite` (`id_regione`, `id_categoria`, `negozio`, `importo`) VALUES (4, 1, 'Il computer II', 345670);
INSERT INTO `vendite` (`id_regione`, `id_categoria`, `negozio`, `importo`) VALUES (1, 4, 'Artè II', 2893);
INSERT INTO `vendite` (`id_regione`, `id_categoria`, `negozio`, `importo`) VALUES (1, 1, 'Artè III', 560000);
INSERT INTO `vendite` (`id_regione`, `id_categoria`, `negozio`, `importo`) VALUES (3, 2, 'Carotti&Butti', 456230);
INSERT INTO `vendite` (`id_regione`, `id_categoria`, `negozio`, `importo`) VALUES (5, 3, 'Montanari sas', 435000);
INSERT INTO `vendite` (`id_regione`, `id_categoria`, `negozio`, `importo`) VALUES (3, 1, 'Ferilli&figli', 5678);
INSERT INTO `vendite` (`id_regione`, `id_categoria`, `negozio`, `importo`) VALUES (1, 1, 'Artè IV', 250000);
INSERT INTO `vendite` (`id_regione`, `id_categoria`, `negozio`, `importo`) VALUES (1, 1, 'Casa del mouse', 23256);
INSERT INTO `vendite` (`id_regione`, `id_categoria`, `negozio`, `importo`) VALUES (2, 2, 'Casale 23/4', 230);
INSERT INTO `vendite` (`id_regione`, `id_categoria`, `negozio`, `importo`) VALUES (6, 3, 'Beretta Mario sas', 8900);
INSERT INTO `vendite` (`id_regione`, `id_categoria`, `negozio`, `importo`) VALUES (7, 6, 'Colonnello sas', 256235);
INSERT INTO `vendite` (`id_regione`, `id_categoria`, `negozio`, `importo`) VALUES (6, 1, 'La stampante', 568256);
INSERT INTO `vendite` (`id_regione`, `id_categoria`, `negozio`, `importo`) VALUES (8, 2, 'Beretti Attilio sas', 8235);
INSERT INTO `vendite` (`id_regione`, `id_categoria`, `negozio`, `importo`) VALUES (9, 1, 'Consonni I', 256000);
INSERT INTO `vendite` (`id_regione`, `id_categoria`, `negozio`, `importo`) VALUES (9, 1, 'ConsonniII', 560400);
INSERT INTO `vendite` (`id_regione`, `id_categoria`, `negozio`, `importo`) VALUES (9, 2, 'Consonni III', 456);
INSERT INTO `vendite` (`id_regione`, `id_categoria`, `negozio`, `importo`) VALUES (11, 2, 'Calaminici sas', 435600);
INSERT INTO `vendite` (`id_regione`, `id_categoria`, `negozio`, `importo`) VALUES (6, 2, 'La stampante II', 1678);
INSERT INTO `vendite` (`id_regione`, `id_categoria`, `negozio`, `importo`) VALUES (6, 3, 'La stampante III', 256);
INSERT INTO `vendite` (`id_regione`, `id_categoria`, `negozio`, `importo`) VALUES (5, 3, 'Colombo sas', 78256);
INSERT INTO `vendite` (`id_regione`, `id_categoria`, `negozio`, `importo`) VALUES (11, 6, 'Calaminici sas', 2010);
# 27 records
