#
# DUMP FILE
#
# Database is ported from MS Access
#------------------------------------------------------------------
# Created using "MS Access to MySQL" form http://www.bullzip.com
# Program Version 5.5.282
#
# OPTIONS:
#   sourcefilename=C:/Users/Utente/Downloads/DATABASE/8339_CD-Rom/UA3 SQL/my_biciclette.mdb
#   sourceusername=
#   sourcepassword=
#   sourcesystemdatabase=
#   destinationdatabase=my_biciclette
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

-- DROP DATABASE IF EXISTS `my_biciclette`;
CREATE DATABASE IF NOT EXISTS `my_biciclette`;
USE `my_biciclette`;

#
# Table structure for table 'biciclette'
#

DROP TABLE IF EXISTS `biciclette`;

CREATE TABLE `biciclette` (
  `id_bici` INTEGER NOT NULL, 
  `id_produttore` INTEGER, 
  `nome` VARCHAR(50), 
  `categoria` VARCHAR(20), 
  `quantità` INTEGER, 
  PRIMARY KEY (`id_bici`)
) ENGINE=myisam DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'biciclette'
#

INSERT INTO `biciclette` (`id_bici`, `id_produttore`, `nome`, `categoria`, `quantità`) VALUES (1, 1, 'abc1', 'tandem', 120);
INSERT INTO `biciclette` (`id_bici`, `id_produttore`, `nome`, `categoria`, `quantità`) VALUES (2, 1, 'bg5/rt', 'linea', 255);
INSERT INTO `biciclette` (`id_bici`, `id_produttore`, `nome`, `categoria`, `quantità`) VALUES (3, 1, 'hj7/78', 'corsa', 27);
INSERT INTO `biciclette` (`id_bici`, `id_produttore`, `nome`, `categoria`, `quantità`) VALUES (4, 1, 'hj7/79', 'corsa', 11);
INSERT INTO `biciclette` (`id_bici`, `id_produttore`, `nome`, `categoria`, `quantità`) VALUES (5, 1, 'abc2', 'tandem', 89);
INSERT INTO `biciclette` (`id_bici`, `id_produttore`, `nome`, `categoria`, `quantità`) VALUES (6, 2, '56gh67', 'sport', 255);
INSERT INTO `biciclette` (`id_bici`, `id_produttore`, `nome`, `categoria`, `quantità`) VALUES (7, 2, '56gh89', 'sport', 255);
INSERT INTO `biciclette` (`id_bici`, `id_produttore`, `nome`, `categoria`, `quantità`) VALUES (8, 2, '56gh92', 'sport', 255);
INSERT INTO `biciclette` (`id_bici`, `id_produttore`, `nome`, `categoria`, `quantità`) VALUES (9, 2, '56gj71', 'corsa', 127);
INSERT INTO `biciclette` (`id_bici`, `id_produttore`, `nome`, `categoria`, `quantità`) VALUES (10, 2, 't56', 'tandem', 218);
INSERT INTO `biciclette` (`id_bici`, `id_produttore`, `nome`, `categoria`, `quantità`) VALUES (11, 3, 'er1', 'corsa', 11);
INSERT INTO `biciclette` (`id_bici`, `id_produttore`, `nome`, `categoria`, `quantità`) VALUES (12, 3, 'er2', 'corsa', 87);
INSERT INTO `biciclette` (`id_bici`, `id_produttore`, `nome`, `categoria`, `quantità`) VALUES (13, 3, 'er4', 'corsa', 101);
INSERT INTO `biciclette` (`id_bici`, `id_produttore`, `nome`, `categoria`, `quantità`) VALUES (14, 3, 'sp9', 'sport', 255);
INSERT INTO `biciclette` (`id_bici`, `id_produttore`, `nome`, `categoria`, `quantità`) VALUES (15, 4, 'ol1', 'corsa', 255);
INSERT INTO `biciclette` (`id_bici`, `id_produttore`, `nome`, `categoria`, `quantità`) VALUES (16, 4, 'ol17/2', 'rampichino', 255);
INSERT INTO `biciclette` (`id_bici`, `id_produttore`, `nome`, `categoria`, `quantità`) VALUES (17, 4, 'ol17/23', 'rampichino', 255);
INSERT INTO `biciclette` (`id_bici`, `id_produttore`, `nome`, `categoria`, `quantità`) VALUES (18, 5, 'nncc12', 'corsa', 131);
INSERT INTO `biciclette` (`id_bici`, `id_produttore`, `nome`, `categoria`, `quantità`) VALUES (19, 6, 'm12/x', 'rampichino', 255);
INSERT INTO `biciclette` (`id_bici`, `id_produttore`, `nome`, `categoria`, `quantità`) VALUES (20, 6, 'm13/y', 'rampichino', 255);
# 20 records

#
# Table structure for table 'produttori'
#

DROP TABLE IF EXISTS `produttori`;

CREATE TABLE `produttori` (
  `id_produttore` INTEGER NOT NULL, 
  `nome` VARCHAR(20), 
  `data_fondazione` INTEGER, 
  PRIMARY KEY (`id_produttore`)
) ENGINE=myisam DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'produttori'
#

INSERT INTO `produttori` (`id_produttore`, `nome`, `data_fondazione`) VALUES (1, 'Colnago', 1923);
INSERT INTO `produttori` (`id_produttore`, `nome`, `data_fondazione`) VALUES (2, 'Gios', 1975);
INSERT INTO `produttori` (`id_produttore`, `nome`, `data_fondazione`) VALUES (3, 'Bianchi', 1903);
INSERT INTO `produttori` (`id_produttore`, `nome`, `data_fondazione`) VALUES (4, 'Olmo', 1912);
INSERT INTO `produttori` (`id_produttore`, `nome`, `data_fondazione`) VALUES (5, 'Fondriest', 1989);
INSERT INTO `produttori` (`id_produttore`, `nome`, `data_fondazione`) VALUES (6, 'MBT', 1990);
# 6 records

