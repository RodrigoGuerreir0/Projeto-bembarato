/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET SQL_NOTES=0 */;
DROP TABLE IF EXISTS produtoscaixa;
CREATE TABLE `produtoscaixa` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `produtos` varchar(300) DEFAULT NULL,
  `quantidade` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO produtoscaixa(id,produtos,quantidade) VALUES('1','NULL','3'),('2','NULL','23'),('3','NULL','3'),('4','NULL','2'),('5','NULL','2'),('6','NULL','2'),('7','NULL','3'),('8','NULL','3'),('9','NULL','3'),('10','NULL','12'),('11','NULL','22'),('12','NULL','0'),('13','NULL','2'),('14','NULL','NULL'),('15','NULL','NULL'),('16','NULL','NULL'),('17','NULL','NULL'),('18','NULL','NULL'),('19','NULL','NULL'),('20','NULL','NULL'),('21','NULL','NULL'),('22','NULL','NULL'),('23','NULL','NULL'),('24','NULL','3');